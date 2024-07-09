const form = document.getElementById('login-form');
const errorMessage = document.getElementById('error-message');

form.addEventListener('submit', async (e) => {
    e.preventDefault();
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    if (username === 'Admin' && password === 'admin123') {
        window.location.href = 'Staff_Only.html'; // redirect to Staff Only page
    } else {
        errorMessage.textContent = 'Invalid username or password';
    }
});