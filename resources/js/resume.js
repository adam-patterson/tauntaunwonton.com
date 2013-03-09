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
			
				if (typeof data === 'undefined') {
					// TODO: 404 message
					console.log('Error: no data returned from mongo');
				}
					
				$('div.resume').append('<h1>'+data.title+'</h1>');
			});
			
			return true;
		}
	};
		
	window.TTWT.resume = resume;


}(this.window || this));