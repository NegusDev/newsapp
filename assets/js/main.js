const responsive = {
	320:{
		items:1
	},
	560:{
		items:2
	},
	960:{
		items:2
	},
	0:{
		items:2
	}
}
$(document).ready(function(){
	$(".owl-carousel ").owlCarousel({

		 navigation : false, // Show next and prev buttons
		 loop:true,
		 autoplay:true,
		 autoplayTimeout:4000,
		 slideSpeed : 300,
		 paginationSpeed : 400,
		 dots:true,
		 responsive:responsive


 });
	
 $("#like").click(function(){
	$("#like").css(color, red);
 });
});
