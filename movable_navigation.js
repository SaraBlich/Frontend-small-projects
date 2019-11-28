$(document).ready(function()
{
  //read the top value of nav div
  var NavY = $(".nav").offset().top;

  var stickyNav = function()
  {
    //read the top of actual scroll movement value
    var ScrollY = $(window).scrollTop();

    if (ScrollY > NavY)
    {
      $(".nav").addClass("sticky");
    }
    else
    {
      $(".nav").removeClass("sticky");
    }
  };
  stickyNav(); //function call

  $(window).scroll(function()
{
  stickyNav(); // function call during scrolling
});
});
