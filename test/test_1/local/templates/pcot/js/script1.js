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