$("nav a").on("click", function(){
   $("nav").find(".active").removeClass("active");
   $(this).parent().addClass("active");
	$('.collapse').removeClass("show");

});

$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});
