// JavaScript Document
function setupSearchBox(searchFormId, websiteUrl, dictionary, target) {
	//warning message for developers
	if (!searchFormId || !websiteUrl || !dictionary) {
		alert("Please specify required parameters (searchformid, websiteurl and dictionary) to setupSearchBox()");
		return;
	}
	
	//opens the definition popup 
	var openPopup = function(lookup) {
        var searchUrl = websiteUrl + "search/" + dictionary + "/direct/";
        if (target) {
        	var popup = window.open(searchUrl + "?q=" + lookup, target, "toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,copyhistory=no,width=600,height=550,top=300,left=300");
        	if (popup)
        		popup.focus();
        } else {
        	window.open(searchUrl + "?q=" + lookup);
        }
	};
	
	var getLookupText = function() {
		var lookup = jQuery("#" + searchFormId).find("[name='q']").val();
        lookup = lookup.replace(/[\.\*\?;!()\+,\[:\]<>^_`\[\]{}~\\\/\"\'=]/g, " ");
        lookup = lookup.replace(/\s+/g, " ");
		return (lookup != null && lookup.replace("/\s/g", "").length > 0 ? lookup : "");
	};
	
	jQuery("#" + searchFormId).submit(
		function() {
			var lookup = getLookupText();
			if (lookup.length > 0)
				openPopup(lookup);
			return false;
		}
	);
}