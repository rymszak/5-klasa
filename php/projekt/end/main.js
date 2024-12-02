const log=document.getElementById('log')
    log.addEventListener('click',function (ev){
        ev.preventDefault();
        window.location.replace("logowanie.php");
    })
const lek=document.getElementById('lekarz')
lek.addEventListener('click',function (ev){
        ev.preventDefault();
        window.location.replace("lekarz.php");
    })
    const admin=document.getElementById('admin')
    admin.addEventListener('click',function (ev){
        ev.preventDefault();
        window.location.replace("admin.php");
    })
 const main=document.getElementById('main');
 main.addEventListener('click',function (ev){
        ev.preventDefault();
        window.location.replace("index.html");
    })
    