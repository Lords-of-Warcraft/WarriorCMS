document.getElementById('view-password-button').addEventListener('click', function() {
    input = document.getElementById('password');
    eye = document.getElementById('eye');
    eyeslash = document.getElementById('eye-slash');
    if (input.type == 'password')
    {
        input.type = 'text';
        eye.classList.add('hide');
        eyeslash.classList.remove('hide');
    } else if (input.type == 'text') {
        input.type = 'password';
        eye.classList.remove('hide');
        eyeslash.classList.add('hide');
    }
})

document.getElementById('view-password-con-button').addEventListener('click', function() {
    input = document.getElementById('password_confirmation');
    eye = document.getElementById('eye-con');
    eyeslash = document.getElementById('eye-slash-con');
    if (input.type == 'password')
    {
        input.type = 'text';
        eye.classList.add('hide');
        eyeslash.classList.remove('hide');
    } else if (input.type == 'text') {
        input.type = 'password';
        eye.classList.remove('hide');
        eyeslash.classList.add('hide');
    }
})