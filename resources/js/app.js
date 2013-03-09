;(function() {
	"use strict";
	
	/** TauntaunWonton v0.1
		
		Common functionality.
	*/
	var app = {
		init: function(o) {

			// Hook horrible browser detector.
			app.horribleBrowserAsskick();
		
			// Hook all necessary events.
			app.hookFixedNav();
			
			return true;
		},
		// Hook the pinning of the nav when it is scrolled off page.
		hookFixedNav: function () {
		
			if ($('body > header div.fixation').length === 0) return;
		 
			var nav = $('body > header div.fixation'),
			top = nav.offset().top - parseFloat(nav.css('marginTop').replace(/auto/, 0));
	
			$(window).on('scroll', function (e) {
				// The y position of the scroll.
				var y = $(this).scrollTop();

				// Is it below the nav?
				if (y >= top)
					nav.addClass('pinned'); // yup
				else
					nav.removeClass('pinned'); // nope
			});
		},
		// Kick IE < 10 out ... it's just not worth it.
		horribleBrowserAsskick: function () {
			// TODO: consider FF too.
			
			// TODO: Detect IE < 9
			//			Callback to server and get real browser page
			//			Replace content with it.
			
			return true;
		}
	};
		
	window.TTWT.app = app;


}(this.window || this));