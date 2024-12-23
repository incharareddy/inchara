document.getElementById('registrationForm').addEventListener('submit', function (event) {
    // Example: Check if password length is at least 6 characters
    const password = document.getElementById('password').value;
    if (password.length < 6) {
        event.preventDefault();
        alert('Password must be at least 6 characters long.');
    }
});
