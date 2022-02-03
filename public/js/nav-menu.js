 var btnNotificacion = document.getElementById("button"),
     btnPermiso = document.getElementById("noti")
 titulo = "The Seven Codes",
     opciones = {
         icon: "https://1.bp.blogspot.com/-gipW_ZlhsCQ/XM_cSOgbh1I/AAAAAAAAPFA/FKyxhdr9sasH7Y4MI02AYsErdUsLj071gCK4BGAYYCw/s113/bloger.png",
         body: "Notificación"
     };

 function newDoc() {
     window.location.assign("https://www.blogger.com/follow.g?blogID=7950132960670094021")
 }

 function permiso() {
     Notification.requestPermission();
 };

 function mostrarNotificacion() {
     if (Notification) {
         if (Notification.permission == "granted") {
             var n = new Notification(titulo, opciones);
         } else if (Notification.permission == "default") {
             alert("Primero da los permisos de notificación");
         } else {
             alert("Bloqueaste los permisos de notificación");
         }
     }


     var el = document.querySelector('notification');
     document.querySelector('button').addEventListener('click', function() {
         var count = Number(el.getAttribute('data-count')) || 0;
         el.setAttribute('data-count', count + 1);
         el.classList.remove('notify');
         el.offsetWidth = el.offsetWidth;
         el.classList.add('notify');
         if (count === 0) {
             el.classList.add('show-count');
         }
     }, false);

     $(document).ready(function() {

         function addNotification() {
             var unread = document.getElementById("unread");
             var newUnread = unread.cloneNode(true);
             var bell = document.getElementById("bell");
             var newBell = bell.cloneNode(true);
             newUnread.innerHTML = parseInt(unread.innerHTML) + 1;
             unread.parentNode.replaceChild(newUnread, unread);
             bell.parentNode.replaceChild(newBell, bell);
         }


     });

     var btnNotificacion = document.getElementById("buttonN"),
         btnPermiso = document.getElementById("noti")
     titulo = "The Seven Codes",
         opciones = {
             icon: "https://1.bp.blogspot.com/-gipW_ZlhsCQ/XM_cSOgbh1I/AAAAAAAAPFA/FKyxhdr9sasH7Y4MI02AYsErdUsLj071gCK4BGAYYCw/s113/bloger.png",
             body: "Notificación"
         };

     function permiso() {
         Notification.requestPermission();
     };

     function mostrarNotificacion() {
         if (Notification) {
             if (Notification.permission == "granted") {
                 var n = new Notification(titulo, opciones);
             } else if (Notification.permission == "default") {
                 alert("Primero da los permisos de notificación");
             } else {
                 alert("Bloqueaste los permisos de notificación");
             }
         }
         btnPermiso.addEventListener("click", permiso, titulo, icon, body);
         btnNotificacion.addEventListener("click", permiso, titulo, icon, body);

     };
 };


 // request permission on page load
 document.addEventListener('DOMContentLoaded', function() {
     if (Notification.permission !== "granted")
         Notification.requestPermission();
 });

 function notifyMe() {

     if (!Notification) {
         alert('Notificaciones no disponibles en este navegador.');
         return;
     }

     if (Notification.permission !== "granted")
         Notification.requestPermission();
     else {
         var notification = new Notification('The Seven Codes', {
             icon: 'https://1.bp.blogspot.com/-gipW_ZlhsCQ/XM_cSOgbh1I/AAAAAAAAPFA/FKyxhdr9sasH7Y4MI02AYsErdUsLj071gCK4BGAYYCw/s113/bloger.png',
             body: "by Luishiño",
         });

         notification.onclick = function() {
             window.open("https://lpericena.blogspot.com/");
         };
     }
 }