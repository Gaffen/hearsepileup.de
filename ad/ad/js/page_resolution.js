function getWindowHeight() {
	var windowHeight = 0;
    if (typeof (window.innerHeight) == 'number') {
		windowHeight = window.innerHeight;
    } else 
	{	
        if (document.documentElement && document.documentElement.clientHeight) {
            windowHeight = document.documentElement.clientHeight;
        } else {
            if (document.body && document.body.clientHeight) {
                windowHeight = document.body.clientHeight;
            }
        }
    }
    return windowHeight;
}

function setContent() {
    if (document.getElementById) {
        var windowHeight = getWindowHeight();
        if (windowHeight > 0) {
            var contentElement = document.getElementById('CntntDiv');
			
			
			var contentHeight = contentElement.offsetHeight;
			
			if (windowHeight - contentHeight > 1) {
				contentElement.style.position = 'relative';
				contentElement.style.top = ((windowHeight-(contentHeight))/2) + 'px';
				
            } else {
				var top_bottom_margin=20;
                contentElement.style.position = 'relative';
				contentElement.style.top = (top_bottom_margin) + 'px';
				
				/*arrowLElement.style.top = (headertHeight+top_bottom_margin+((contentHeight+arrowtHeight)/2)) + 'px';
				arrowRElement.style.top = (headertHeight+top_bottom_margin+((contentHeight+arrowtHeight)/2)) + 'px';*/

				//arrowRElement.style.top = ((contentHeight)/2+headertHeight) + 'px';
            }
        }
    }
}
window.onload = function () {
	setContent();
	//MM_preloadImages('images/home_link_02.png','images/menu_link_02.png','images/offer_link_02.png','images/feedback_link_02.png','images/contact_link_02.png','images/spritz_logo_over.png');
}
window.onresize = function () {
    setContent();
}