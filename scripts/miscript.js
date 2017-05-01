$(document).ready(function(){

	$('#menu_contenedor').hide(true);
	$('#menu_boton').click(function(){
		$('#menu_contenedor').toggle('slide');
	});

	$('#menu_boton').hover(function(){
		$(this).toggleClass('resaltar');
	});
});