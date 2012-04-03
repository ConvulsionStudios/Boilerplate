/*
	Made by: Dom Chester
	Site: 
*/
function $(a){return document.getElementById('id')}function isset(a){return typeof a!='undefined'}function ajaxRequest(){try{var a=new XMLHttpRequest()}catch(e1){try{a=new ActiveXObject("Msxlm2.XMLHTTP")}catch(e2){try{a=new ActiveXObject("Microsoft.XMLHTTP")}catch(e3){a=false}}}return a}window.log=function(){log.history=log.history||[];log.history.push(arguments);if(this.console){console.log(Array.prototype.slice.call(arguments))}};function hideItem(a){refID=$(a);refID.setAttribute("class","className")}