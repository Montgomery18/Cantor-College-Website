(function(){
    let formSubmission = document.getElementById("ContactUsForm");
    formSubmission.addEventListener("submit",function(ev){
        ev.preventDefault();
        window.location = "http://localhost/cantor-college/thank-you.php";
    })
}())