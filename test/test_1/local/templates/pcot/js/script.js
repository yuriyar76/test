
$(document).ready(function(){
	
	var jqBar = $('#mark-5');
    var jqBarStatus = true;
    $(window).scroll(function() {
        var scrollEvent = ($(window).scrollTop() > (jqBar.position().top - $(window).height()));
        if (scrollEvent && jqBarStatus) { 
            jqBarStatus = false;
            $( '#map' ).append( '<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aa541a4053e216834c67be2a9bc01498f271f16f55104d4caa7de75cde3b22203&amp; width=100%25&amp;height=520&amp;lang=ru_RU&amp;scroll=false"></script>' );
            }
        });
	
	$("#header_main__menu").on("click","button.btn-zakaz a", function (event) {
		event.preventDefault();
	   var id  = $(this).attr('href'),
			top = $(id).offset().top;
		$('body,html').animate({scrollTop: top}, 1100);
	});

	$("#header_main__menu").on("click","a.mark-menu", function (event) {
		 // event.preventDefault();
		    var col = $('#navbarNavMy [prop]');
		    col.attr('prop','');
		    var li = $(this).parent();
            if(li.attr('prop')==''){
            	li.attr('prop','active');
			}else{
				li.attr('prop','');
			}
			var id  = $(this).attr('href');

				var top = $(id).offset().top;
				$('body,html').animate({scrollTop: top}, 1100);


	});

	$("#header_mobile").on("click","a.mark-menu", function (event) {
		event.preventDefault();
		var col = $('#navbarNav-mob [prop]');
		col.attr('prop','');
		var li = $(this).parent();
		if(li.attr('prop')==''){
			li.attr('prop','active');
		}else{
			li.attr('prop','');
		}
		var id  = $(this).attr('href'),
			top = $(id).offset().top;
		$('body,html').animate({scrollTop: top}, 1100);
	});



	$('#content_banner').owlCarousel({
		loop:true,
		margin:10,
		nav:true,
		dots:true,
		items:6,
		autoplay : true,
		autoplayTimeout : 6000,
		//autoplayHoverPause:true,
		animateOut: 'slideOutDown',
		animateIn: 'flipInX',
		smartSpeed:1500,
		stagePadding: 5,
		responsive:{
			0:{
				items:2,
				nav:false,
				dots:false,
			},
			768:{
				items:3,
				nav:false,
				dots:false,
			},
			992:{
				items:5,
				nav:true,
				dots:true,
				loop:true
			}
		}

	});$('#content_news').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        dots:true,
        items:4,
        autoplay : true,
        autoplayTimeout : 6000,
        //autoplayHoverPause:true,
        animateOut: 'slideOutDown',
        animateIn: 'flipInX',
        smartSpeed:1500,
        stagePadding: 5,
        responsive:{
            0:{
                items:2,
                nav:false,
                dots:false,
            },
            768:{
                items:3,
                nav:false,
                dots:false,
            },
            992:{
                items:4,
                nav:true,
                dots:true,
                loop:true
            }
        }

    });

	$('#top-menu-mob').owlCarousel({
		loop:true,
		margin:10,
		nav:false,
		dots:true,
		items:2,
		autoplay : false,
		autoplayTimeout : 6000,
		//autoWidth:true,
		autoplayHoverPause:true,

		animateOut: 'slideOutDown',
		animateIn: 'flipInX',
		smartSpeed:1500,
		responsive:{
			0:{
				items:1,
				nav:false,
				dots:true,
			},
			568:{
				items:1,
				nav:false,
				dots:true,
			},
			768:{
				items:2,
				nav:false,
				dots:true,
			},
			992:{
				items:2,
				nav:false,
				dots:true,
			}
		}

	});
	$('#content_media').owlCarousel({
	   loop:true,
		margin:10,
		nav:true,
		dots:true,
		items:1,
		autoplay : true,
		autoplayTimeout : 6000,
		autoplayHoverPause:true,
		//autoWidth:true,
		animateOut: 'slideOutDown',
		animateIn: 'flipInX',
		smartSpeed:1500,
		stagePadding: 0,
		responsive:{
			320:{
				items:1,
				nav:false,
				dots:false,
			},
			360:{
				items:1,
				nav:false,
				dots:false,
			},
			768:{
				items:1,
				nav:false,
				dots:false,
			},
			992:{
				items:1,
				nav:true,
				dots:true,
				loop:true
			}
		}
		
	 });

	$('#content_reviews').owlCarousel({
		loop:true,
		margin:10,
	    items:4,
		autoplay : true,
		autoplayTimeout : 6000,
		autoplayHoverPause:true,
		animateOut: 'slideOutDown',
		animateIn: 'flipInX',
		smartSpeed:1500,
		responsiveClass:true,
		dots:true,
		nav:true,
		stagePadding: 5,
		responsive:{
			0:{
				items:1,
				nav:false,
				dots:false,
			},
			320:{
				items:1,
				nav:false,
				dots:false,
			},
			360:{
				items:2,
				nav:false,
				dots:false,
			},
			375:{
				items:2,
				nav:false,
				dots:false,
			},
			480:{
				items:2,
				nav:false,
				dots:false,
			},
			425:{
				items:2,
				nav:false,
				dots:false,
			},
			768:{
				items:3,
				nav:false,
				dots:false,
			},
			992:{
				items:3,
				nav:false,
				dots:true,
				loop:true
			},
			1280:{
				items:3,
				nav:false,
				dots:true,
				loop:true
			}
		}

	});

	$('#content_docs_psot').owlCarousel({
		loop:true,
		margin:10,
	    items:4,
		autoplay : true,
		autoplayTimeout : 6000,
		autoplayHoverPause:true,
		animateOut: 'slideOutDown',
		animateIn: 'flipInX',
		smartSpeed:1500,
		responsiveClass:true,
		dots:true,
		nav:true,
		stagePadding: 5,
		responsive:{
			0:{
				items:1,
				nav:false,
				dots:false,
			},
			320:{
				items:1,
				nav:false,
				dots:false,
			},
			360:{
				items:2,
				nav:false,
				dots:false,
			},
			375:{
				items:2,
				nav:false,
				dots:false,
			},
			480:{
				items:2,
				nav:false,
				dots:false,
			},
			425:{
				items:2,
				nav:false,
				dots:false,
			},
			768:{
				items:3,
				nav:false,
				dots:false,
			},
			992:{
				items:3,
				nav:false,
				dots:true,
				loop:true
			},
			1280:{
				items:3,
				nav:false,
				dots:true,
				loop:true
			}
		}

	});

	$(window).scroll(function(){
		if($(this).scrollTop()>70){
			$('#header_main__menu').addClass('fixed');
		}
		else if ($(this).scrollTop()<70){
			$('#header_main__menu').removeClass('fixed');
		}
	});

	$("#cd-top").on("click",this, function (event) {
		event.preventDefault();
		var id  = $(this).attr('href'), top = $(id).offset().top;

		$('body,html').animate({scrollTop: top}, 1100);
	});

	window.onscroll = function() {
		var scrolled = window.pageYOffset || document.documentElement.scrollTop;
		if (scrolled>600) {
			document.getElementById("cd-top").style.visibility="visible";
			document.getElementById("cd-top").style.opacity=1;

		}
		else{
			document.getElementById("cd-top").style.visibility="hidden";
			document.getElementById("cd-top").style.opacity=0;

		}

	};

	$(function () {
		$('[data-toggle="tooltip"]').tooltip()
	});
	$(document).ready(function(){
		$('#content_komu').owlCarousel({
			loop:true,
			margin:10,
			nav:true,
			dots:true,
			items:2,
			autoplay : false,
			autoplayTimeout : 6000,
			//autoplayHoverPause:true,

			animateOut: 'slideOutDown',
			animateIn: 'flipInX',
			smartSpeed:1500,
			responsiveClass:true,
			responsive: {
				0: {
					items: 2,

				},
				425: {
					items: 2,
					nav:false,
					dots:true
				},


				360: {
					items: 1,
					nav:false,
					dots:true
				},
				320: {
					items: 1,
					nav:false,
					dots:true
				},
			}

		});
		$('#content-preim').owlCarousel({
			loop:true,
			margin:10,
			nav:false,
			dots:false,
			items:8,
			autoplay : false,
			autoplayTimeout : 6000,
			//autoplayHoverPause:true,

			animateOut: 'slideOutDown',
			animateIn: 'flipInX',
			smartSpeed:1500,
			responsiveClass:true,
			responsive:{
				0:{
					items:2,

				},
				320:{
					items:2,

				},
				375:{
					items:3,

				},
				425:{
					items:5,

				},
				768:{
					items:6,

				},
				992:{
					items:8,

				},
				1024:{
					items:8,

				}
			}
		});
	});

});




