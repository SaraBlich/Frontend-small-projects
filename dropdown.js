function dropdownMenu()
{

  var el = document.getElementById('dropdownClick');
  if(el.className === "leftTopnav")
  {
    el.className += " responsive";


  }
  else {
    el.className = "leftTopnav";
  }
}

function clockCountdown()
{
  var today = new Date();

  var day = today.getDate();
  var month = today.getMonth()+1;
  var year = today.getFullYear();

  var hours = today.getHours();
  var minutes = today.getMinutes();
  var seconds = today.getSeconds();

  var newYear = new Date(2020, 00, 00, 0, 00, 0);
  var newYearDay = newYear.getDate();
  var newYearMonth = newYear.getMonth()+1;
  var NewyYearYear = newYear.getFullYear();

  var newYearHours = 23- today.getHours();
  var newYearMinutes = 60 - today.getMinutes();
  var NewYearSeconds = 60 - today.getSeconds();


  var dateLeftMonth = month - newYearMonth;
  var dateLeftYear = year - NewyYearYear;
  var dateLeftDays = day - newYearDay;
  var dateLeftHours =  newYearHours;
  var dateLeftMinutes = newYearMinutes;
  var dateLeftSeconds =  NewYearSeconds;



  //document.getElementById("timebox").innerHTML = dateLeft;
  document.getElementById("months").innerHTML = Math.abs(dateLeftMonth);
  document.getElementById("days").innerHTML=  Math.abs(dateLeftDays); document.getElementById("hours").innerHTML = Math.abs(dateLeftHours);
  document.getElementById("minutes").innerHTML = Math.abs(dateLeftMinutes);
  document.getElementById("seconds").innerHTML = Math.abs(dateLeftSeconds);

  setTimeout("clockCountdown()", 1000);


}
