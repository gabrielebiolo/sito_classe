
$(document).ready(function(){
	
	$('#nav-menu-icon').click(function(){
		$(this).toggleClass('open');
	});
	if(window.location.pathname == '/pages/index.php' || window.location.pathname == '/pages/')
		$('#navbar').addClass('position-absolute w-100 z-index');
	else	
		$('#navbar').removeClass('position-absolute w-100 z-index');

	if(window.location.pathname == '/pages/problemi.php')
		$('body').addClass('h-100vh bg-dark');
});

$("#search").on("keyup", function() {
  var value = $(this).val().toLowerCase();
  $("#table tr").filter(function() {
    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
  });
});