/*document.addEventListener('DOMContentLoaded', function () {
    var btnChat = document.querySelector('.btnchat');
    var contentChat = document.querySelector('.content-chat');

    btnChat.addEventListener('mouseover', function () {
        contentChat.style.display = 'flex';
    });

    document.addEventListener('click', function (event) {
        var isClickInsideBtnChat = btnChat.contains(event.target);
        var isClickInsideContentChat = contentChat.contains(event.target);
       
        if (!isClickInsideBtnChat && !isClickInsideContentChat) {
            contentChat.style.display = 'none';
        }
    });
});*/

/*
document.addEventListener('DOMContentLoaded', function () {
    var btnChat = document.querySelector('.btnchat');
    var contentChat = document.querySelector('.content-chat');
    var btnWspp = document.querySelector('.btnwspp');
    var contentChatWspp = document.querySelector('.content-chatWspp');

    // Mostrar el contenido cuando el mouse está sobre el botón
    btnChat.addEventListener('mouseover', function () {
        contentChat.style.display = 'flex';
    });

    // Ocultar el contenido cuando el mouse sale del botón
    btnChat.addEventListener('mouseout', function () {
        contentChat.style.display = 'none';
    });

    btnWspp.addEventListener('mouseover', function () {
        contentChatWspp.style.display = 'flex';
    });

    btnWspp.addEventListener('mouseout', function () {
        contentChatWspp.style.display = 'none';
    });

    // Opcional: Ocultar el contenido cuando el mouse sale del área del contenido
    contentChat.addEventListener('mouseout', function () {
        contentChat.style.display = 'none';
    });

    contentChatWspp.addEventListener('mouseout', function () {
        contentChatWspp.style.display = 'none';
    });
});
*/

/*
document.getElementById('toggleChat').addEventListener('click', function() {
    var contentChat = document.querySelector('.content-chat');
    var chatIcon = document.getElementById('chatIcon');

    if (contentChat.style.display === 'none') {
        contentChat.style.display = 'block';
        chatIcon.classList.add('toggle');
    } else {
        contentChat.style.display = 'none';
        chatIcon.classList.remove('toggle');
    }
});
*/






document.addEventListener('DOMContentLoaded', function () {
    // Configuración para el chat principal
    var btnChat = document.querySelector('.btnchat');
    var contentChat = document.querySelector('.content-chat');

    btnChat.addEventListener('mouseover', function () {
        contentChat.style.display = 'flex';
    });
    document.addEventListener('click', function (event) {
        var isClickInsideBtnChat = btnChat.contains(event.target);
        var isClickInsideContentChat = contentChat.contains(event.target);
       
        if (!isClickInsideBtnChat && !isClickInsideContentChat) {
            contentChat.style.display = 'none';
        }
    });
    // Configuración para el chat de WhatsApp
    var btnWspp = document.querySelector('.btnwspp');
    var contentChatWspp = document.querySelector('.content-chatWspp');
    btnWspp.addEventListener('mouseover', function () {
        contentChatWspp.style.display = 'flex';
    });
    document.addEventListener('click', function (event) {
        var isClickInsideBtnWspp = btnWspp.contains(event.target);
        var isClickInsideContentWspp = contentChatWspp.contains(event.target);
       
        if (!isClickInsideBtnWspp && !isClickInsideContentWspp) {
            contentChatWspp.style.display = 'none';
        }
    });
});

