var domains = ["yahoo.com", "gmail.com", "google.com", "hotmail.com", "me.com", "aol.com", "mac.com", "live.com", "comcast.com", "googlemail.com", "msn.com", "hotmail.co.uk", "yahoo.co.uk", "facebook.com", "verizon.net", "att.net", "gmz.com", "mail.com"];
  
// Using Low Yong Zhen's jQuery plugin
var $pluginEmailElem = $('#plugin-email').emailautocomplete({
  suggClass: 'email-autocomplete',
  labelClass: 'email-label',
  domains: domains
});
var $pluginConfirmEmailElem = $('#plugin-confirm-email').emailautocomplete({
  suggClass: 'email-autocomplete',
  labelClass: 'confirm-email-label',
  domains: domains
});


// Using DropDown element to suggest static list of domains
var EmailDomainSuggester = function ($bindTo) {	
  var datalist = null;  
  
  var init = function () {    
  	addElements();
    bindEvents();
  };
  
  var addElements = function () {
    var datalistId = 'email_options_' + $bindTo.attr('id');
    
  	//create empty datalist
		datalist = $("<datalist />", {
			id: datalistId
		}).insertAfter($bindTo);    
    
    // correlate to input
		$bindTo.attr("list", datalistId);
  };
  
  var bindEvents = function () {
  	$bindTo.on("keyup", testValue);
  };
  
  var testValue = function (event) {
    var el = $(this),
    		value = el.val();
            
    // email has @
    if (value.indexOf("@") != -1) {
    	value = value.split("@")[0];
      
      addDatalist(value);
    } else {
    	// empty list
      emptyDatalist();
    }
  };
  
  var emptyDatalist = function () {
    datalist.empty();
  };
  
  var addDatalist = function (value) {
  	var i,
    		newOptionsString = '';
        
    // loop over all the domains in our array
    for (i=0; i<domains.length; i++) {
    	newOptionsString += "<option value='" +
      												value + "@" +
                              domains[i] + 
                           "'>";
    }
    
    // add all the <option>s to the datalist
    datalist.html(newOptionsString);
  };  
  
  init();
};

var edsEmail = new EmailDomainSuggester($('#email'));
var edsConfirmEmail = new EmailDomainSuggester($('#confirm_email'));
