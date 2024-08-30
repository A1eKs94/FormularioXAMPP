const today = new Date().toISOString().split('T')[0];
document.getElementById('fecha').setAttribute('max', today);

const form = document.getElementById('registroForm');

form.addEventListener('submit', function(event) {
    const nombre = document.getElementById('nombre').value;
    const apellido = document.getElementById('apellido').value;
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
    const passwordConfirm = document.getElementById('password_confirm').value;

    if (nombre.length > 40) {
        event.preventDefault();
        alert('El nombre no puede tener más de 40 caracteres.');
        return;
    }

    if (apellido.length > 40) {
        event.preventDefault();
        alert('El apellido no puede tener más de 40 caracteres.');
        return;
    }

    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email)) {
        event.preventDefault();
        alert('Por favor, introduce un correo electrónico válido.');
        return;
    }

    if (password !== passwordConfirm) {
        event.preventDefault();
        alert('Las contraseñas no coinciden. Por favor, inténtalo de nuevo.');
        return;
    }
});
