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

function getWindowWidth() {
	var windowWidth = 0;
    if (typeof (window.innerWidth) == 'number') {
		windowWidth = window.innerWidth;
    } else 
	{	
        if (document.documentElement && document.documentElement.clientWidth) {
            windowWidth = document.documentElement.clientWidth;
        } else {
            if (document.body && document.body.clientHeight) {
                windowWidth = document.body.clientWidth;
            }
        }
    }
    return windowWidth;
}

function setContent() {
    if (document.getElementById) {
        var windowHeight = getWindowHeight();
        if (windowHeight > 0) {
            var contentElement = document.getElementById('CntntDiv');
			
			
			var contentHeight = contentElement.offsetHeight;
			
			if (windowHeight - contentHeight > 1) {
				contentElement.style.position = 'absolute';
				contentElement.style.top = ((windowHeight-(contentHeight))/2) + 'px';
				
            } else {
				var top_bottom_margin=20;
                contentElement.style.position = 'absolute';
				contentElement.style.top = (top_bottom_margin) + 'px';
				
				/*arrowLElement.style.top = (headertHeight+top_bottom_margin+((contentHeight+arrowtHeight)/2)) + 'px';
				arrowRElement.style.top = (headertHeight+top_bottom_margin+((contentHeight+arrowtHeight)/2)) + 'px';*/

				//arrowRElement.style.top = ((contentHeight)/2+headertHeight) + 'px';
            }
        }
	var windowWidth = getWindowWidth();
        if (windowWidth > 0) {
            var contentElement = document.getElementById('CntntDiv');
			
			
			var contentWidth = contentElement.offsetWidth;
			
			if (windowWidth - contentWidth > 1) {
				contentElement.style.position = 'absolute';
				contentElement.style.left = ((windowWidth-(contentWidth))/2) + 'px';
				
            } else {
				var left_bottom_margin=0;
                contentElement.style.position = 'absolute';
				contentElement.style.left = (left_bottom_margin) + 'px';
				
				
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