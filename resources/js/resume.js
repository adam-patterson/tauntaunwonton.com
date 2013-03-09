;(function() {
	"use strict";
	
	/** TauntaunWonton v0.1
		
		Functionality specific to the resume page.
	*/
	var resume = {
		init: function(o) {
			var	uri = window.TTWT.globals.mongoService +
						window.TTWT.globals.mongoPageBase +
						'?' + window.TTWT.globals.mongoAPIKey;
			
			// Get the resume and stick it in the page.
			$.get(uri, function(data) {
			
				if (data.length !== 1 || typeof data[0] === 'undefined') {
					// TODO: 404 message
					console.log('Error: no data returned from mongo');
				}
				
				var r = data[0];
					
				$('div.resume').append('<h1>'+r.title+'</h1>');
			});
			
			return true;
		}
	};
		
	window.TTWT.resume = resume;


}(this.window || this));