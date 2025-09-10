import './bootstrap';
<<<<<<< HEAD

    console.log("Test script injected");

    document.addEventListener("DOMContentLoaded", function () {
        const togglePassword = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('password');
        const eyeIcon = document.getElementById('eyeIcon');

        if (togglePassword && passwordInput && eyeIcon) {
            console.log("Elements found, script aktif 🔥");

            togglePassword.addEventListener('click', function () {
                const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                passwordInput.setAttribute('type', type);

                eyeIcon.classList.toggle('fa-eye');
                eyeIcon.classList.toggle('fa-eye-slash');
            });
        } else {
            console.log("Element not found 😢");
        }
    });
=======
>>>>>>> 5a19f689af9fdf875c72d43b77fc209b469bea40
