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
console.log(data);
				if (typeof data === 'undefined' || typeof data.projects === 'undefined') {
					// TODO: 404 message
					console.log('Error: no data returned from mongo');
				}

				window.marked.setOptions({
					gfm: true,
					tables: true,
					breaks: false,
					pedantic: false,
					sanitize: true,
					smartLists: true,
					langPrefix: 'language-'
				});

				$('div.projects').append(window.marked(data.projects)).fadeIn(400);
			});

			return true;
		}
	};

	window.TTWT.projects = projects;


}(this.window || this));