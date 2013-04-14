;(function() {
	"use strict";

	/** TauntaunWonton v0.1
		
		Functionality for displaying a list of projects.
	*/
	var projects = {
		init: function(resource_id) {
			var	uri = window.TTWT.globals.mongoService +
						window.TTWT.globals.mongoPageBase +
						resource_id + '?' + window.TTWT.globals.mongoAPIKey;

			// Get the resume and stick it in the page.
			$.get(uri, function(data) {

				if (typeof data === 'undefined' || typeof data.projects === 'undefined') {
					// TODO: 404 message
					console.log('Error: no data returned from mongo');
				}

				if (data.projects.length === 0)
					console.log('Projects list is empty.');

				window.marked.setOptions({
					gfm: true,
					tables: true,
					breaks: false,
					pedantic: false,
					sanitize: true,
					smartLists: true,
					langPrefix: 'language-'
				});

				$(data.projects).each(function (i, o) {
					var p = $('<article><title></title><div class="pic"></div><p class="desc"></p></article>'),
						img = '<img src="'+ o.img.src +'" alt="'+ o.img.alt +'">';

					p.find('title').append(o.name);
					p.attr('rel', o.link);
					p.find('div.pic').append(img);
					if (typeof o.desc !== 'undefined' && o.desc.length > 0) p.find('p.desc').append(window.marked(o.desc));
					$('section.projects').append(p);
				});

				$('section.projects').on('mouseenter', 'article', function () {
					$(this).addClass('hl');
				}).on('mouseleave', 'article', function () {
					$(this).removeClass('hl');
				}).on('click', 'article', function () {
					$(this).removeClass('hl');
					window.open($(this).attr('rel'), '_blank');
				});
			});

			return true;
		}
	};

	window.TTWT.projects = projects;


}(this.window || this));