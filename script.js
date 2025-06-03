import { html, render } from 'lit-html';

document.addEventListener('DOMContentLoaded', () => {
    const loginForm = document.getElementById('loginForm');
    const usernameInput = document.getElementById('username');
    const passwordInput = document.getElementById('password');
    const messageArea = document.getElementById('messageArea');
    const loginButton = document.getElementById('loginButton');

    let audioContext;
    let successSoundBuffer;
    let errorSoundBuffer;

    // Initialize AudioContext on first user interaction (recommended for browsers)
    function initAudioContext() {
        if (!audioContext) {
            audioContext = new (window.AudioContext || window.webkitAudioContext)();
        }
    }
    
    async function loadSound(url) {
        if (!audioContext) return null; // AudioContext not initialized
        try {
            const response = await fetch(url);
            const arrayBuffer = await response.arrayBuffer();
            const audioBuffer = await audioContext.decodeAudioData(arrayBuffer);
            return audioBuffer;
        } catch (error) {
            console.error(`Error loading sound ${url}:`, error);
            return null;
        }
    }

    function playSound(buffer) {
        if (!audioContext || !buffer) return;
        const source = audioContext.createBufferSource();
        source.buffer = buffer;
        source.connect(audioContext.destination);
        source.start(0);
    }

    // Preload sounds
    async function preloadSounds() {
        // No need to call initAudioContext() here, will be called on first form submit
        // but we can prepare the loading if audio context already exists due to other interactions.
        // For this specific case, we'll load on demand after first interaction.
    }
    
    preloadSounds(); // Call it, though actual loading relies on context existing.

    const showMessage = (message, type) => {
        const messageTemplate = html`<p class="message ${type}">${message}</p>`;
        render(messageTemplate, messageArea);
    };

    loginForm.addEventListener('submit', async (event) => {
        event.preventDefault();
        initAudioContext(); // Ensure audio context is active

        // Lazy load sounds on first interaction if not already loaded
        if (audioContext && !successSoundBuffer) {
             loginButton.disabled = true;
             loginButton.textContent = 'Carregando...';
            try {
                successSoundBuffer = await loadSound('success_sound.mp3');
                errorSoundBuffer = await loadSound('error_sound.mp3');
            } catch (e) {
                console.error("Failed to load sounds on demand", e);
            } finally {
                loginButton.disabled = false;
                // Restore button content correctly, including icon
                loginButton.innerHTML = `<img src="palm_leaf_icon.png" alt="" class="button-icon"> Entrar`;
            }
        }

        const username = usernameInput.value.trim();
        const password = passwordInput.value.trim();

        if (!username || !password) {
            showMessage('Por favor, preencha todos os campos.', 'error');
            if(errorSoundBuffer) playSound(errorSoundBuffer);
            return;
        }

        // Simulate API call / authentication
        // For demo: admin/password
        if (username === 'admin' && password === 'palmas') {
            showMessage('Login bem-sucedido! Redirecionando...', 'success');
            if(successSoundBuffer) playSound(successSoundBuffer);
            // Simulate redirect after a short delay
            setTimeout(() => {
                // Clear message or redirect
                 render(html``, messageArea); // Clear message
                 alert("Redirecionado para a área de palmas! (simulado)");
            }, 1500);
        } else {
            showMessage('Usuário ou senha inválidos.', 'error');
            if(errorSoundBuffer) playSound(errorSoundBuffer);
        }
    });
});

