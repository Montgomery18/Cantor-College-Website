(function(){
    webPageLocation = document.querySelectorAll("header nav ul li a");
    liItemToChange = document.querySelectorAll("header nav ul li");
    for(i=0;i < webPageLocation.length; i++){
        if (window.location.href == webPageLocation[i].href){
            webPageLocation[i].setAttribute("id", "LinkHighLight");
            liItemToChange[i].setAttribute("id", "BoxHighLight");
            break;
        }
    }
}())