//---- Bt-Param
let bouton = document.getElementById('minimodal');

document.getElementById('button').onclick = function(){
	bouton.classList.toggle('fade');
}

//---- Bt-Theme
var check = document.getElementById("darktheme");
var body = document.body;
const currTheme = localStorage.getItem("theme");

if(currTheme == 'dark'){
     document.body.classList.add('dark-mode');
     document.getElementById("darktheme").checked = true;

}else{
     document.body.classList.remove('dark-mode');
     document.getElementById("darktheme").checked = false;
}

check.addEventListener('click', function(){
     if(check.checked == true){
document.body.classList.add('dark-mode');
localStorage.setItem('theme', 'dark');
     }else{
document.body.classList.remove('dark-mode');
localStorage.removeItem('theme');
     }
})
      
function themeSwitch(){
     var elem = document.body;
     elem.classList.toggle('dark-mode');
}         