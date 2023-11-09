(function(){
    // Image Rotation
    let facilitiesGalleryImages = ["images/CantorLectureTheatre5.JPG","images/CantorLectureTheatre4.JPG","images/Cantor Lecture Theatre 3.jpg","images/main_2529_image4.png","images/Cantor atrium 3.jpg","images/Cantor atrium 4.jpg","images/ACES-036-Computing-Playstation-Lab-2.jpg","images/ACES-032-Computing-Playstation-Lab.jpg","images/IMG_0170.jpeg"];
    let ourBuildingGalleryImages = ["images/12226216184_b8d6e0073a_b.jpg","images/IMG_1437.jpeg","images/cantor-gallery.jpg"];
    let i = 0;

    if (document.querySelector("head title").innerHTML == "Cantor College | Home"){
        setInterval(index, 5000);
    }
    else if (document.querySelector("head title").innerHTML == "Cantor College | Facilities"){
        setInterval(facilities, 5000); 
    }

    function facilities(){
        if (i == facilitiesGalleryImages.length){
            i = 0;
        }
        document.getElementById("FacilityGallery").setAttribute("src", facilitiesGalleryImages[i]);
        i++;
    }
    function index(){
        if (i == ourBuildingGalleryImages.length){
            i = 0;
        }
        document.getElementById("IndexGallery").setAttribute("src", ourBuildingGalleryImages[i]);
        i++;
    }
    // Image Rotation
}())