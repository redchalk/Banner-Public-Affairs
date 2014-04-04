// Smooth Scrolling Script
	$(function () {
	$('a[href^="#"]').click(function(event) {
		var id = $(this).attr("href");
		var offset = $(this).attr('data-offset');
		//var offset = 0;
		var target = $(id).offset().top - offset;
			$('html, body').animate({scrollTop:target}, 500);
			event.preventDefault();
		});
	});
// End Smooth Scrolling Script

// Set where the scrolling links should stop with header docked at top
	jQuery(document).ready(function(){
	jQuery(window).scroll(function(){
		var scrollTop = 596;
			if(jQuery(window).scrollTop() >= scrollTop){
			jQuery('.logo-wrap').css({
				position : 'fixed',
				display:'block',
				width:'100%',
				height: '90px',
				top : '0'
			});
		}
		
	if(jQuery(window).scrollTop() < scrollTop){
	jQuery('.logo-wrap .logo').css({
		width:'100%',
		padding:'0',
		margin:'0 auto'
		});
	}
	if(jQuery(window).scrollTop() < scrollTop){
		jQuery('.logo-wrap').removeAttr('style');
	}
	if(jQuery(window).scrollTop() >= scrollTop){
		jQuery('.logo-wrap .logo h1 img').css({
			opacity : '1'
		});
	}
	if(jQuery(window).scrollTop() < scrollTop){
		jQuery('.logo-wrap .logo h1 img').removeAttr('style');
	}
	})
})
// End Set where the scrolling links should stop with header docked at top

// Navigation Toggle
	$(function() {
		$('#nav').stop().animate({'margin-right':'-555px'},1000);
		function toggleDivs() {
			var $inner = $("#nav");
		if ($inner.css("margin-right") == "-555px") {
			$inner.animate({'margin-right': '0'});
		$(".nav-btn").html()
		}
		else {
		$inner.animate({'margin-right': "-555px"});
		$(".nav-btn").html()
	}
}
	$(".nav-btn").bind("click", function(){
		toggleDivs();
	});
});
// End Navigation Toggle

// Services Section
$(document).ready(function() {
	$('.a').show();
	$('a.showservice').click(function(e) {
		e.preventDefault();
		var a_href = '.'+ $(this).attr('href');
		$('.serviceinfo').hide();
		$(a_href).show();
		$('.service-icon').css("background-position","0px 0px");
		$('.service-table').css("color","#929497");
		$(this).find('.service-icon').css("background-position","0 -78px");
		$(this).find('h2').css("color","#00add2");
		
	});
});


// Services sectionRowIndex
// Our Team Animation
$(".bio-pic").click(function (e) {
e.stopPropagation();
//$('.bio-pic2').toggle("slow");
var menu = $(this).next(".expand");
$(menu).show().animate({
width: 1000,
height: 775
}, 2000);
});
$(".expand").click(function () {
$(this).animate({
width: 0
}, 2000, function () {
$(this).hide();
});
});
// End Our Team Animation

// Cycle Slideshow Options
$(document).ready(function() {
$('.slideshow').cycle({
fx: 'scrollLeft',
timeout: 5000 // choose your transition type, ex: fade, scrollUp, shuffle, etc...
});
});
// End Cycle Slideshow Options

// Mobile Services Toggle Open / Close
$(document).ready(function() {
$(".service-m").click(function () {
$(this).next(".serviceinfo-m").toggle()
});
});

// Mobile Navigation Toggle
$(function() {
loadingAtFirst();
toggleDivs();
function toggleDivs() {
var $inner = $("#nav-ph");
if ($inner.css("margin-right") == "280px") {
$inner.animate({'margin-right': '0'}, function() {
$('.main-nav-ph').hide()
});
}
else {
$(".main-nav-ph").show();
$inner.animate({'margin-right': "280px"});
$(".nav-btn-ph").html()
}
}
$(".nav-btn-ph").bind("click", function(){
toggleDivs();
});
});
function loadingAtFirst() {
var $inner = $("#nav-ph");
$inner.css("margin-right", '280px')
}
// End Navigation Toggle

$(document).ready(function() {
$('#banner-contact').click(function(e) {
// do something fancy
return false; // prevent default click action from happening!
e.preventDefault(); // same thing as above
});
});
var imgArray = [
'http://bannerpublicaffairs.com/ontogenesis/wp-content/themes/Banner/images/mobile-banner-nav-close.png',
'http://bannerpublicaffairs.com/ontogenesis/wp-content/themes/Banner/images/mobile-banner-nav-open.png'
];
var counter = 0;
document.getElementById('navImage').onclick = function () {
document.getElementById('navImage').src = imgArray[counter % imgArray.length];
counter += 1;
}