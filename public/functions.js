function myFunction() {
	console.log('hi')
};

window.onscroll = function() {myFunction()};


var video = document.getElementById("myVideo");
var btn = document.getElementById("myBtn");

function myFunction() {
  if (video.paused) {
    video.play();
    btn.L = "Pause";
  } else {
    video.pause();
    btn.textcontent = "Play";
  }
}
