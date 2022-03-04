

document.getElementById('menu-icon').addEventListener('click', ()=> {
    
    var menu = document.getElementById('menu');
    var clases = menu.className;

    (clases.includes("active")) ? menu.className= "" : menu.className = "active";

});