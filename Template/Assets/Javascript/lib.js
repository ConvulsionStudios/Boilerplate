/*
	Made by: Dom Chester
	Site: 
*/

// Function to replace 'document.getElementByID('')' with $('')
	function $(id) {
		return document.getElementById('id');
	}

// Function equivalent of 'isset('')' in PHP
	function isset(varName) {
		return typeof varName != 'undefined';
	}

// Function to create an AJAX request
	function ajaxRequest() {
		try {
			//Non IE Browser
				var request = new XMLHttpRequest();
		}
		catch(e1) {
			try {
				//IE6+
					request = new ActiveXObject("Msxlm2.XMLHTTP");
			}
			catch(e2) {
				try {
					//IE 5
						request = new ActiveXObject("Microsoft.XMLHTTP");
				}
				catch(e3) {
					//No AJAX Support
						request = false;
				}
			}
		}
		return request;
	}

// Log error to console
	// usage: log('inside coolFunc',this,arguments);
	// http://paulirish.com/2009/log-a-lightweight-wrapper-for-consolelog/
		window.log = function(){
			log.history = log.history || [];   // store logs to an array for reference
			log.history.push(arguments);
			if(this.console){
	    		console.log( Array.prototype.slice.call(arguments) );
	 		 }
		};