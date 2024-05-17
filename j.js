// script.js
document.addEventListener('DOMContentLoaded', function() {
    const registerForm = document.getElementById('registerForm');
    const loginForm = document.getElementById('loginForm');

    registerForm.addEventListener('submit', function(event) {
        event.preventDefault();
        const formData = new FormData(registerForm);
        const xhr = new XMLHttpRequest();
        xhr.open('POST', 'register.php', true);
        xhr.onload = function() {
            if (xhr.status === 200) {
                // عرض رسالة النجاح
                console.log(xhr.responseText);
            } else {
                // عرض رسالة الخطأ
                console.error('حدث خطأ: ' + xhr.statusText);
            }
        };
        xhr.send(formData);
    });

    loginForm.addEventListener('submit', function(event) {
        event.preventDefault();
        const formData = new FormData(loginForm);
        const xhr = new XMLHttpRequest();
        xhr.open('POST', 'login.php', true);
        xhr.onload = function() {
            if (xhr.status === 200) {
                // عرض رسالة النجاح أو تحويل المستخدم
                console.log(xhr.responseText);
            } else {
                // عرض رسالة الخطأ
                console.error('حدث خطأ: ' + xhr.statusText);
            }
        };
        xhr.send(formData);
    });
});
