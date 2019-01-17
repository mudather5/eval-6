$(function() {
    // $('body').css('background-image', 'url(../assets/img/library.jpeg)');
    // $('.red').css('background-image', 'url(../assets/img/Non-Fiction-4.jpg)');
    $(".card-container").css({"font-size": "90%"});
    $("h5").css({"color": "white", "font-size": "200%"});
    $(".title").css({"color": "red", "text": "center", "font-size": "100%"});
    $(".edit").css({"pading-top": "10%"});
    $(".borrow").css({"padding-right": "2%"});
    $(".error").css({"color": "red"});
    $(".btn btn-danger").css({"width": "10%", "height": "3%", "padding-top": "1%"});






});

$(document).ready(function() {

	$('.image-popup-vertical-fit').magnificPopup({
		type: 'image',
		closeOnContentClick: true,
		mainClass: 'mfp-img-mobile',
		image: {
			verticalFit: true
		}
		
	});

	$('.image-popup-fit-width').magnificPopup({
		type: 'image',
		closeOnContentClick: true,
		image: {
			verticalFit: false
		}
	});

	$('.image-popup-no-margins').magnificPopup({
		type: 'image',
		closeOnContentClick: true,
		closeBtnInside: false,
		fixedContentPos: true,
		mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
		image: {
			verticalFit: true
		},
		zoom: {
			enabled: true,
			duration: 300 // don't foget to change the duration also in CSS
		}
	});

});

$(document).ready(function() {

	$('.simple-ajax-popup-align-top').magnificPopup({
		type: 'ajax',
		alignTop: true,
		overflowY: 'scroll' // as we know that popup content is tall we set scroll overflow by default to avoid jump
	});

	$('.simple-ajax-popup').magnificPopup({
		type: 'ajax'
	});
	
});

function mOver(obj) {
    obj.innerHTML = "Click herer to add books";
  }
  
  function mOut(obj) {
    obj.innerHTML = "Add books "
  }


  function photoOver(obj) {
    obj.innerHTML = "Click herer to add books";
  }
  
  function PhotoOut(obj) {
    obj.innerHTML = "Add books "
  }
