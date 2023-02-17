//javascript for navigation bar effect on scroll
window.addEventListener("scroll", function(){
    const header =document.querySelector("header");
    header.classList.toggle('sticky', window.scrollY > 0);
});

//javascript for resposive navigation slidebar menu
const menuBtn = document.querySelector(".menu-btn");
const navigation = document.querySelector(".navigation");
const navigationItems = document.querySelectorAll(".navigation a")

menuBtn.addEventListener("click", () => {
    menuBtn.classList.toggle("active");
    navigation.classList.toggle("active");
});

navigationItems.forEach((navigationItem) => {
    navigationItem.addEventListener("click",() => {
        menuBtn.classList.remove("active");
        navigation.classList.remove("active");

    });
});

//javascript for scroll to up button
const scrollBtn = document.querySelector(".scrollToTop-btn");

window.addEventListener("scroll", function(){
    scrollBtn.classList.toggle("active", window.scrollY > 500);
});

//javascript for scroll back to top on click scroll-to-top button
scrollBtn.addEventListener("click", () =>{
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
});

//javascript for reveal website elements on scroll

window.addEventListener("scroll", reveal);

function reveal(){
    var reveals = document.querySelectorAll(".reveal");

    for(var i = 0; i < reveals.length; i++){
        var windowHeight = window.innerHeight;
        var revealTop = reveals[i].getBoundingClientRect().top;
        var revealPoint = 50;

        if(revealTop < windowHeight - revealPoint) 
        {
            reveals[i].classList.add("active");
        }
    }
}


//beach map


function initMap()
{

   //map options
    var option = {
        zoom:13,
        center:{lat: 6.3828, lng:80.6020}
    }

    //new map
    var map = new 
    google.maps.Map(document.getElementById("map"), option);

    
   /*
    //add marker
    var marker = new google.maps.Marker({
        position:{lat: 7.2906, lng:80.6337},
        map:map
    });

    var infoWindow = new google.maps.InfoWindow({
        content:'<h1>Kandy</h1>'
    });

    marker.addListener('click', function(){
        infoWindow.open(map, marker);
    });

    */

    //array of markers

    var markers = [
        {
            coords:{lat: 6.3828, lng:80.6020},
            content:'<h1>Sinharaja</h1>'
        },
    ];

    //loop through markers

    for(var i = 0;i < markers.length;i++)
    {
        //add marker
        addMarker(markers[i]);
    }
/*
    addMarker({
        coords:{lat: 6.0174, lng:80.2489},
        content:'<h1>Unavatuna</h1>'
    });
    addMarker({
        coords:{lat: 5.9774, lng:80.4288},
        content:'<h1>Weligama</h1>'
    });
    addMarker({
        coords:{lat: 5.9483, lng:80.4716},
        content:'<h1>Mirissa</h1>'
    });
    addMarker({
        coords:{lat: 6.8404, lng:81.8368},
        content:'<h1>Arugam bay</h1>'
    });
    addMarker({
        coords:{lat: 7.9228, lng:81.5651},
        content:'<h1>Pasikuda</h1>'
    });
    addMarker({
        coords:{lat: 6.1395, lng:80.1063},
        content:'<h1>Hikkaduwa</h1>'
    });

    */

    //add marker function

    function addMarker(props){

        var marker = new google.maps.Marker({
            position:props.coords,
            map:map
        });

        //check content
        if(props.content)
        {
            var infoWindow = new google.maps.InfoWindow({
                content:props.content
            });
        
            marker.addListener('click', function(){
                infoWindow.open(map, marker);
            });
        }

    }

    
}

