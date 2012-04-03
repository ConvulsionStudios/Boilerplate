/*
	Made by: Dom Chester
	Site: 
*/

function $(id) {
	return document.getElementById('id');
}

function isset(varName) {
	return typeof varName != 'undefined';
}

function ajaxRequest() {
	try {
			var request = new XMLHttpRequest();
	}
	catch(e1) {
		try {
				request = new ActiveXObject("Msxlm2.XMLHTTP");
		}
		catch(e2) {
			try {
					request = new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch(e3) {
					request = false;
			}
		}
	}
	return request;
}

window.log = function(){
	log.history = log.history || [];   
	log.history.push(arguments);
	if(this.console){
		console.log( Array.prototype.slice.call(arguments) );
	 }
};

function hideItem(divID) {
	refID = $(divID);
	refID.setAttribute("class", "className");
}