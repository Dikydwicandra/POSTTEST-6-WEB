function dark(){
    var text = document.getElementById('small-menu').getElementsByTagName("a");
    for(let i=0;i<text.length;i++){
        text[i].style.color = "white"
    }
    document.getElementsByClassName('landing')[0].style.color = "white"
    document.getElementsByClassName('logo')[0].getElementsByTagName('h3')[0].style.color = "white"
    var icon = document.getElementsByClassName('user')[0].getElementsByTagName('i');
    for(let i=0;i<icon.length;i++){
        icon[i].style.color = "white"
    }
}

function light(){
    var text = document.getElementById('small-menu').getElementsByTagName("a");
    for(let i=0;i<text.length;i++){
        text[i].style.color = "white"
    }
    document.getElementsByClassName('landing')[0].style.color = "#008080"
    document.getElementsByClassName('logo')[0].getElementsByTagName('h3')[0].style.color = "white"
    var icon = document.getElementsByClassName('user')[0].getElementsByTagName('i');
    for(let i=0;i<icon.length;i++){
        icon[i].style.color = "white"
    }
}

window.onload = function(){
    document.getElementById('gelapcuy').addEventListener('change', event =>{
        if(event.target.checked){
            document.body.classList.add('dark-mode');
            dark();
        }else{
            document.body.classList.remove('dark-mode');
            light();
        }
    })
}

function myFunction() {
    var less = document.getElementById("less");
    var moreText = document.getElementById("more");
    var btnText = document.getElementById("btn");
  
    if (less.style.display === "none") {
      less.style.display = "inline";
      btnText.innerHTML = "Read more"; 
      moreText.style.display = "none";
    } else {
      less.style.display = "none";
      btnText.innerHTML = "Read less"; 
      moreText.style.display = "inline";
    }
}