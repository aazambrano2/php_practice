// stores the h1 element from the access.html file
var header = document.getElementById("header");
header.innerHTML = "This is Aaron's Website. Welcome!"
//javascript.html.css 
header.style.color = "blue";
header.style.backgroundColor = "orange";

var link = document.getElementById('link');
link.href = "https://my.utep.edu/My";

link.style = "color : blue ;" //css string

//Event Listeners


function handleClick(element){
    //HTML element
    element.innerHTML = "Clicked";
    element.style = "background-color:blue;"
}

function video(){
    
    //alert("test");
    var video = "https://www.youtube.com/watch?v=YnplRWla99Q&ab_channel=UTEPMiners";
    //https://www.utep.edu/ 
    //https://www.youtube.com/watch?v=xUEqDQOjAlA&ab_channel=ALDBARANofficiel
    return video 
}

var image = document.getElementById("image");
//alternative on click event listener
//mouseover -> when the mouse cursor is hovered 
/*function -> when the user interacts with an image/button/etc 
and what is executed when that event happens.*/
image.addEventListener("mouseover",function(){
    this.style ="box-shadow: 2px 2px 2px grey";
    this.width = "110"

});

//mouseout -> when the mouse cursor out from the image

//onmouseout vs mouseout -> on if you are using in the html file; not needed in addEventListener() method
image.addEventListener("mouseout",function(){
    this.style ="";
    this.width = "100"
    
});