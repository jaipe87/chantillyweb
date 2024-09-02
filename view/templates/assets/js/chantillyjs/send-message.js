
document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("send-btn").addEventListener("click", function() {
        var value = document.getElementById("data").value;
        var msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + value + '</p></div></div>';
        document.querySelector(".form").insertAdjacentHTML('beforeend', msg);
        document.getElementById("data").value = '';
        
        // Iniciar el código AJAX
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "php/message.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                var result = xhr.responseText;
                var replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p>' + result + '</p></div></div>';
                document.querySelector(".form").insertAdjacentHTML('beforeend', replay);
                // Cuando el chat baja, la barra de desplazamiento llega automáticamente al final
                var form = document.querySelector(".form");
                form.scrollTop = form.scrollHeight;
            }
        };
        xhr.send("text=" + encodeURIComponent(value));
    });
});