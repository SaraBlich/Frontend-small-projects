jQuery(function($)
{
  //reset
  $.scrollTo(0);

  // scroll
  $('#aboutId').click(function() {$.scrollTo($("#aboutHere"), 500); });

  $('#newsId').click(function() {$.scrollTo($("#news"), 500); });

}
);
