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
		// Same with FF (for now at least).
		horribleBrowserAsskick: function () {

			var mock = 'Sorry, but your browser cannot tauntaun',
				suggest = 'If you are interested in enjoying the internet consider a real browser like <a href="'+
					'https://www.google.com/intl/en_ca/chrome/browser/?&brand=CHMA&utm_campaign=en&utm_source=en-ha-ca-bk&utm_medium=ha'+
					'">Chrome</a> or <a href="http://safari.xtremedownload.com/?lp=adwords&tg=ca">Safari</a>';

			if ($('html').hasClass('gecko') || ($('html').hasClass('ie') && !$('html').hasClass('ie10'))) {
				$('body').append('<div class="browserAssKicker"><div><i class="icon-lock"></i>'+
					'<p class="mock">'+ mock +'</p><p class="suggest">'+ suggest +'</p></div></div>');
			}

			return true;
		}
	};

	window.TTWT.app = app;


}(this.window || this));