document.addEventListener('DOMContentLoaded', () => {
    const loginForm = document.getElementById('loginForm');
    const loginMessage = document.getElementById('loginMessage');

    if (loginForm) {
        loginForm.addEventListener('submit', (event) => {
            event.preventDefault(); // Prevent actual form submission

            const username = event.target.username.value;
            const password = event.target.password.value;

            loginMessage.textContent = ''; // Clear previous messages
            loginMessage.className = 'login-message'; // Reset classes

            if (username.trim() === '' || password.trim() === '') {
                loginMessage.textContent = 'Please enter both username and password.';
                loginMessage.classList.add('error');
                return;
            }

            // Simulate API call / authentication
            setTimeout(() => {
                // For this demo, any username/password is "valid"
                // In a real app, you'd check credentials here.
                if (username === "user" && password === "pass") {
                    loginMessage.textContent = `Welcome, ${username}! Login successful.`;
                    loginMessage.classList.add('success');
                     // loginForm.reset(); // Optionally reset form
                } else if (username && password) {
                    loginMessage.textContent = `Welcome, ${username}! (Demo login successful).`;
                    loginMessage.classList.add('success');
                } else {
                    loginMessage.textContent = 'Invalid username or password.';
                    loginMessage.classList.add('error');
                }
            }, 500); // Simulate network delay
        });
    }
});

