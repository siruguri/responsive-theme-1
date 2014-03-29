jQuery(document).ready(
    function() {
	jQuery(".phone-click").click(
	    function(evt) {
		jQuery('.phonemenu').toggle('drop', {}, 500);
	    }
	);

    }
);
