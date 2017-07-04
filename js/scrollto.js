function scrollToAnchor(aid) {
	var aTag = jQuery("a[name='"+ aid +"']");
	var body = jQuery("html, body");
	body.animate({scrollTop: aTag.offset().top},'slow');
}

