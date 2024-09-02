document.getElementById('btnLogIn').addEventListener('click', function() {
    document.getElementById('loginModal').style.display = 'block';
});

document.getElementsByClassName('close-btn')[0].addEventListener('click', function() {
    document.getElementById('loginModal').style.display = 'none';
});

window.addEventListener('click', function(event) {
    if (event.target == document.getElementById('loginModal')) {
        document.getElementById('loginModal').style.display = 'none';
    }
});

document.getElementById('showRegisterForm').addEventListener('click', function(event) {
    event.preventDefault();
    document.getElementById('loginFormContainer').style.display = 'none';
    document.getElementById('registerFormContainer').style.display = 'block';
});

document.getElementById('showLoginForm').addEventListener('click', function(event) {
    event.preventDefault();
    document.getElementById('loginFormContainer').style.display = 'block';
    document.getElementById('registerFormContainer').style.display = 'none';
});
