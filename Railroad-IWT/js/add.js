
function myFunction() {
    var x = document.getElementById("myLinks");
    if (x.style.display === "block") {
      x.style.display = "none";
    } else {
      x.style.display = "block";
    }
  }

  var myVar = setInterval(myTimer, 1000);

function myTimer() {
  var d = new Date();
  document.getElementById("time").innerHTML = d.toLocaleTimeString();
}


var imageArray = ["../images/1111.webp","../images/1122.webp","../images/1133.jpg","../images/1144.jpg"];
	var x = 0;
	var time = 2000;
function changeImg(){
	document.slide.src = imageArray[x];
	if(x < imageArray.length -1){
		x = x + 1;
	}
	else{
		x = 0;
	}
	setTimeout("changeImg()",time);
}
window.onload = changeImg;



