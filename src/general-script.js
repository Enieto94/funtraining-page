$(document).ready(function(){
	$(".item-menu").click(function(){
		event.preventDefault();
		$("item-menu").toggleClass('.active');
	});
});