;(function() {
	"use strict";
	
	/** TauntaunWonton v0.1
		
		Functionality specific to the resume page.
	*/
	var resume = {
		init: function(resource_id) {
			var	uri = window.TTWT.globals.mongoService +
						window.TTWT.globals.mongoPageBase +
						resource_id + '?' + window.TTWT.globals.mongoAPIKey;

			// Get the resume and stick it in the page.
			$.get(uri, function(data) {
			
				if (typeof data === 'undefined' || typeof data.md === 'undefined') {
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
					
				$('div.resume').append(window.marked(data.md));
			});
			
			return true;
		}
	};
		
	window.TTWT.resume = resume;


}(this.window || this));