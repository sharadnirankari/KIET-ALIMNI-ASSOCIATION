// JavaScript Document

$(window).load(function() {
	"use strict";
	$(".pageLoader").fadeOut(300);
	$("html, body").css('overflow','auto');
});

$(document).ready(function() {
	"use strict";
	
	/*var pgurl = window.location.href.substr(window.location.href.lastIndexOf("/")+1);
	
	$(".pageHeader li a").each(function(){
	  if($(this).attr("href") == pgurl || $(this).attr("href") == '' )
	  $(this).addClass("activePage");
	});*/
	
	$('.menuBtn').click(function(e) {
        e.preventDefault();
		$(this).toggleClass('menuBtnActive');
		$('.navi').fadeToggle(500);
    });
	
	$('.loginUser > i').click(function(){
		$(this).toggleClass('loginUserActive');
		$('.loginMemberDrop').toggleClass('dropActive');
    });
	
	
	$(".profileBtn").click(function(){
        $(".profileBtn.activeProfile").removeClass("activeProfile");
		$(this).addClass("activeProfile");
    });
	$(".profileBtn").click(function(){
        $(".profileBox").hide();
		$("#profileBox"+$(this).attr("target")).fadeIn(1500);
    });
	
	//scroll down
	$(".scrollDown").click(function() {
    $('html,body').animate({
        scrollTop: $("#overview").offset().top},
        'slow');
	});
	
	$(".eventSlider").bxSlider({
		minSlides:1,
		maxSlides:2,
		slideWidth:500,
		slideMargin:40,
		moveSlides:1,
		pager:false
	});
	
	$(".accordionBtn").click(function(){
        $(".accordionBox").slideUp(400);
		$(".accordionBtn").removeClass("activeAccordion");
		if($(this).next().is(":hidden") === true){
			$(this).addClass("activeAccordion");
			$(this).next().slideDown(500);
		}
    });
	
	$(".slider").cycle({
		pager:'.pager',
		speed:3000
	});
	

	$(window).bind('scroll', function () {
		if ($(window).scrollTop() > 100) {
			$('.button-top').animate({
				opacity:1
			},0);
		}
		else {
			$('.button-top').animate({
				opacity:0
			},0);
		}
	});
    $(".button-top").click(function(){
       $("html,body").animate({scrollTop:'0px'},500);
    });
	
	
	$('[data-magnify]').magnify({
		//movable: false,
		//resizable: false,
		headToolbar: [
			'close'
		],
		initMaximized: true
	});
	
});
	
    


$(window).scroll(function(){
	"use strict";
	
	var wScroll = $(window).scrollTop();

	if (wScroll >= 200) {
		$(".header").addClass("fixed");
	} else {
		$(".header").removeClass("fixed");
	}
	
	/*$('.boxText').css({
		'transform': 'translate(0px, -'+wScroll/25+'%)'
	});
	
	if(wScroll > $('#home-text').offset().top - ($(window).height() / 1.5)) {
		$("#home-text .hm-text").each(function(i){
			setTimeout(function(){
				$("#home-text .hm-text p").eq(i).addClass('doneTranslate');
			}, 350 * (i+1));
		});
	}
	
	if(wScroll > $('#box-wrapper').offset().top - ($(window).height() / 1.5)) {
		$("#box-wrapper .boxContainer").each(function(i){
			setTimeout(function(){
				$("#box-wrapper .boxContainer .boxImg.translate").eq(i).addClass('doneTranslate');
			}, 350 * (i+1));
		});
	}
	
	if(wScroll > $('.footer').offset().top - ($(window).height() / 1.1)) {
		$(".footer").each(function(i){
			setTimeout(function(){
				$(".footer .main-footer").eq(i).addClass('doneTranslate');
			}, 350 * (i+1));
		});
	}
	
	if(wScroll > $('.footer').offset().top - ($(window).height() / 1.2)) {
		$(".footer").each(function(i){
			setTimeout(function(){
				$(".footer .bottom.translate").eq(i).addClass('doneTranslate');
			}, 350 * (i+1));
		});
	}*/
});
	