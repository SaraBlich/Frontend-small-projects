//imageslider function - added


var slideNumber = Math.floor(Math.random()*5)+1;
function hideImage()
{
  $("#imageslider").fadeOut(500);
}

function changeImage()
{
  slideNumber++;
  if(slideNumber>5) slideNumber=1;

  var file = "<img src = \"imgslider/photo" + slideNumber + ".jpg\"/>";
  document.getElementById("imageslider").innerHTML = file;

  $("#imageslider").fadeIn(500);
  setTimeout("changeImage()",5000);
  setTimeout("hideImage()", 4500);
}
