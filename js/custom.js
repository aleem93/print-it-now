$('.collapse').on('shown.bs.collapse', function(){
$(this).parent().find(".glyphicon-plus").removeClass("glyphicon-plus").addClass("glyphicon-minus");
}).on('hidden.bs.collapse', function(){
$(this).parent().find(".glyphicon-minus").removeClass("glyphicon-minus").addClass("glyphicon-plus");
});




$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
//    $("#upload-file-nxt").click(function() {
//       $(".u-information").hide();
//       $(".vendor-select").show();
//         
//     });
});

$('a[href="#navbar-more-show"], .navbar-more-overlay').on('click', function(event) {
		event.preventDefault();
		$('body').toggleClass('navbar-more-show');
		if ($('body').hasClass('navbar-more-show'))	{
			$('a[href="#navbar-more-show"]').closest('li').addClass('active');
		}else{
			$('a[href="#navbar-more-show"]').closest('li').removeClass('active');
		}
		return false;
});

// Toggle Function
$('.toggle').click(function(){
   $('#login-step2').show(); 
   $('#login-step1').slideUp(); 
   $('#login-step2').slideDown();

});
 
$('#login-step2 .sub1').click(function(){
   $('#login-step3').show(); 
   $('#login-step2').slideUp(); 
   $('#login-step3').slideDown();

});
 
   
  



	

	
	
	
	
	
	
	
	
	
	
	
	
	
	



    




