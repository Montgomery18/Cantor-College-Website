(function(){
    // Show/Hide Courses Table List
    document.getElementById("CompButton").addEventListener("click",function(ev){
        let courseList = document.querySelectorAll("#Comp");
        if (ev.target.innerHTML == "Show Courses"){
            for(i=0;i < courseList.length; i++){
                courseList[i].setAttribute("class", "DataOn");
            }
            ev.target.innerHTML = "Hide Courses";
        }
        else{
            for(i=0;i < courseList.length; i++){
                courseList[i].setAttribute("class", "DataOff");
            }
            ev.target.innerHTML = "Show Courses";
        }
    });
    document.getElementById("DesignButton").addEventListener("click",function(ev){
        let courseList = document.querySelectorAll("#Design");
        if (ev.target.innerHTML == "Show Courses"){
            for(i=0;i < courseList.length; i++){
                courseList[i].setAttribute("class", "DataOn");
            }
            ev.target.innerHTML = "Hide Courses";
        }
        else{
            for(i=0;i < courseList.length; i++){
                courseList[i].setAttribute("class", "DataOff");
            }
            ev.target.innerHTML = "Show Courses";
        }
    });
    // Show/Hide Courses Table List
}())