document.getElementById("img1").onclick = function(){
    document.getElementById("b1").click();
};

document.getElementById("img2").onclick = function(){
    document.getElementById("b2").click();
};
document.getElementById("img3").onclick = function(){
    document.getElementById("b3").click();
};

document.getElementById("img4").onclick = function(){
    document.getElementById("b4").click();
};document.getElementById("img5").onclick = function(){
    document.getElementById("b5").click();
};
document.getElementById("img6").onclick = function(){
    document.getElementById("b6").click();
};
document.getElementById("img7").onclick = function(){
    document.getElementById("b7").click();
};
document.getElementById("img8").onclick = function(){
    document.getElementById("b8").click();
};
document.getElementById("img9").onclick = function(){
    document.getElementById("b9").click();
};
document.getElementById("img10").onclick = function(){
    document.getElementById("b10").click();
};
document.getElementById("img11").onclick = function(){
    document.getElementById("b11").click();
};


function openDay(dayName) {
    
   
    var x = document.getElementsByClassName("day");
    var y = document.getElementsByClassName("btn btn-outline-secondary");
    for (let i = 0; i < x.length; i++) {
      x[i].style.display = "none";
      y[i].style.backgroundColor="white";
      
      y[i].style.color="grey";
    }
    document.getElementById(dayName).style.display = "block";
    document.getElementById(dayName+"1").style.backgroundColor="#ED4B4B";
    
    document.getElementById(dayName+"1").style.color="white";
  }
  



  $(document).ready(function() {
    var front = document.getElementsByClassName("front");
    var back = document.getElementsByClassName("back");
  
    var highest = 0;
    var absoluteSide = "";
  
    for (var i = 0; i < front.length; i++) {
      if (front[i].offsetHeight > back[i].offsetHeight) {
        if (front[i].offsetHeight > highest) {
          highest = front[i].offsetHeight;
          absoluteSide = ".front";
        }
      } else if (back[i].offsetHeight > highest) {
        highest = back[i].offsetHeight;
        absoluteSide = ".back";
      }
    }
    $(".front").css("height", highest);
    $(".back").css("height", highest);
    $(absoluteSide).css("position", "absolute");
  });
  
  
  