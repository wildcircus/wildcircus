var launched = false;
var backgroundNumber = 0;
var pressNumber = 0;
$(document).ready(function() {
	$('#border').css({
		'width': (window.innerWidth-48)+'px',
		'height': (window.innerHeight-48)+'px',
	});
	$('#background, #layer').css({
		'width': window.innerWidth+'px',
		'height': window.innerHeight+'px',
	});
	$('.page').css({
		'width': window.innerWidth-48+'px',
		'height': window.innerHeight-48+'px',
	});

	setInterval(function() {
		backgroundNumber++;
		$('#background > img').animate({'opacity': '0'}, 600, function() {
			$(this).attr('src', 'img/background'+backgroundNumber+'.jpg');
			$(this).animate({'opacity': '1'}, 600, function() {
				if(backgroundNumber == 4) backgroundNumber = -1;
			});
		});
	}, 7000);
	
	$('#logo').css({
		'top':(window.innerHeight/2-85)-100+'px',
		'left': (window.innerWidth/2-85)+'px'
	}).animate({
		'opacity': '1'
	}, 1000, function() {
		setTimeout(function() {
			launched = true;
			$('#logo').animate({
				'top': '48px',
				'left': '48px',
				'width': '50px',
				'height': '50px'
			}, 300, function() {
				/*$(this).css({
					'position': 'absolute',
					'margin-top': '24px',
					'margin-left': '24px'
				});*/
				$('.hide').css('opacity', '1');
				$('#intro').animate({'opacity': '1'},300);
				$('#menu_button').animate({'opacity': '1', 'left': '90px'}, 300);
			});
		}, 500);
	});
	
	$('#logo').click(function() {$('#menu_button').click();});
	
	// Menu fonction
	$('#menu_button').click(function() {
		if(!$(this).hasClass('open')) {
			$(this).addClass('open');
			$('#logo').animate({'opacity': 0}, 300, function() {
				$(this).attr('src', 'img/cross.png');
				$(this).animate({'opacity': 1}, 300);
			});
			$('.hide, .page').animate({'opacity': 0}, 500);
			$('#layer').animate({'opacity': '0.90'}, 500);
			$('#menu_container').css('display', 'block').animate({'opacity': '1'}, 100);
			var timeAnimationItem = 0;
			$('.menu_item').each(function() {
				var $el = $(this);
				setTimeout(function() {
					$el.animate({
						'opacity': '1'
					}, 500);
				}, timeAnimationItem);
				timeAnimationItem+=150;
			});
			var clickableZone = $('<div/>');
			clickableZone.attr('id', 'clickableZone');
			clickableZone.click(function() {  $('#logo').click();	});
			$('body').append(clickableZone);
		}
		else {
			$(this).removeClass('open');
			$('#logo').animate({'opacity': 0}, 300, function() {
				$(this).attr('src', 'img/wc.png');
				$(this).animate({'opacity': 1}, 300);
			});
			$('.hide, .page').animate({'opacity': 1}, 500);
			$('#layer').animate({'opacity': '0.68'}, 500);
			$('#menu_container').animate({'opacity': '0'}, 100, function() {
				$(this).css('display', 'none');
				$('.menu_item').css('opacity', '0');
				$('#clickableZone').remove();
			});
			
		}
	});
	
	// Press 
	setInterval(function() {
		
		var pressHTML = ['<span class="press_text">“Simply amazing!”</span><span class="press_name"> - The Wall Street Journal</span>',
						'<span class="press_text">“A dazzling show, magnificent.”</span><span class="press_name"> - The Sun</span>',
						'<span class="press_text">“Perfect. Irreproachable.”</span><span class="press_name"> - The Guardian</span>'];
		$('#intro_press').animate({'opacity': '0'}, 200, function() {
			pressNumber++;
			$('#intro_press').html(pressHTML[pressNumber]);
			$(this).animate({'opacity': '1'}, 200);
		});
		
		if(pressNumber == 2) pressNumber = -1;
	}, 3000);
	
	$('.showPictureButton').click(function(e) {
		if(!$(this).hasClass('showPictureButtonActive')) {
			$('.showPictureButton').removeClass('showPictureButtonActive');
			$(this).addClass('showPictureButtonActive');
			
			if($(this).hasClass('air')) {
				$('#showSymbol').children().animate({'opacity': '0'}, 200, function () {
					$(this).attr('src', 'img/airsymbol.png');
					$(this).animate({'opacity': '1'}, 200);
					$('#showBackground').css('background-image', 'url("img/air.jpg")');
					$('#artistListContainer').animate({'left': '-150px'}, 300);
				});
			}
			
			if($(this).hasClass('water')) {
				$('#showSymbol').children().animate({'opacity': '0'}, 200, function () {
					$(this).attr('src', 'img/watersymbol.png');
					$(this).animate({'opacity': '1'}, 200);
					$('#showBackground').css('background-image', 'url("img/water.jpg")');
					$('#artistListContainer').animate({'left': '-300px'}, 300);
				});
			}
			
			if($(this).hasClass('earth')) {
				$('#showSymbol').children().animate({'opacity': '0'}, 200, function () {
					$(this).attr('src', 'img/earthsymbol.png');
					$(this).animate({'opacity': '1'}, 200);
					$('#showBackground').css('background-image', 'url("img/earth.jpg")');
					$('#artistListContainer').animate({'left': '-450px'}, 300);
				});
			}
			
			if($(this).hasClass('fire')) {
				$('#showSymbol').children().animate({'opacity': '0'}, 200, function () {
					$(this).attr('src', 'img/firesymbol.png');
					$(this).animate({'opacity': '1'}, 200);
					$('#showBackground').css('background-image', 'url("img/fire.jpg")');
					$('#artistListContainer').animate({'left': '0px'}, 300);
				});
			}

		}
	});
	
	$('#artistListOpen').click(function() {
		if(!$(this).hasClass('open')) {
			$(this).addClass('open').animate({
				'height': '90%'
			}, 500);	
		}
		else {
			$(this).removeClass('open').animate({
				'height': '40px'
			}, 500);	

		}
	});
	
});
$(window).resize(function() {
	$('#border').css({
		'width': (window.innerWidth-48)+'px',
		'height': (window.innerHeight-48)+'px',
	});
	$('#background, #layer').css({
		'width': window.innerWidth+'px',
		'height': window.innerHeight+'px',
	});
	$('.page').css({
		'width': window.innerWidth-48+'px',
		'height': window.innerHeight-48+'px',
	});
	
	if(!launched) {
		$('#logo').css({
			'top':(window.innerHeight/2-85)-100+'px',
			'left': (window.innerWidth/2-85)+'px'
		});
	}
});

function home() {
	console.log('home');	
	$('.pageActive').animate({'opacity': '0'}, 1000, function() {
		$(this).removeClass('pageActive').addClass('pageHidden');
		
		if($('#menu_button').hasClass('open')) 
			$('#menu_button').click();
			
		$('#page1').removeClass('pageHidden').addClass('pageActive').animate({
			'opacity': '1'
		}, 1000);
	});
}
function theShow() {
	console.log('the show');	
	$('.pageActive').animate({'opacity': '0'}, 1000, function() {
		$(this).removeClass('pageActive').addClass('pageHidden');
		if($('#menu_button').hasClass('open')) 
			$('#menu_button').click();
		$('#page2').removeClass('pageHidden').addClass('pageActive').animate({
			'opacity': '1'
		}, 1000);
	});
}
function dates() {
	console.log('dates');
	$('.pageActive').animate({'opacity': '0'}, 1000, function() {
		$(this).removeClass('pageActive').addClass('pageHidden');
		if($('#menu_button').hasClass('open')) 
			$('#menu_button').click();
		$('#page4').removeClass('pageHidden').addClass('pageActive').animate({
			'opacity': '1'
		}, 1000);
	});
}
function contact() {
	console.log('contact');
	$('.pageActive').animate({'opacity': '0'}, 1000, function() {
		$(this).removeClass('pageActive').addClass('pageHidden');
		if($('#menu_button').hasClass('open')) 
			$('#menu_button').click();
		$('#page3').removeClass('pageHidden').addClass('pageActive').animate({
			'opacity': '1'
		}, 1000);
	});
}