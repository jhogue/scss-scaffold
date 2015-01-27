/*
 * Scripts for this specific project
 */


/* For mobile, hide the iOS toolbar on initial page load */
/mobile/i.test(navigator.userAgent) && !window.location.hash && setTimeout(function () { window.scrollTo(0, 0); }, 1000); 


/*
 * Set Modernizr variables that any script can check against. 
 */
var hastouch = has_feature( "touch" ),
    hasplaceholder = has_feature( "placeholder" ),
    hasboxsizing = has_feature( "boxsizing" ),
    is_ltie9 = has_feature( "lt-ie9" );

//console.log( "hastouch=" + hastouch ); 
//console.log( "hasplaceholder=" + hasplaceholder ); 
//console.log( "hasboxsizing=" + hasboxsizing ); 
//console.log( "is_ltie9=" + is_ltie9 );


/* Variables to set to true later and check */
var loadpopups_loaded = false;


/*
 * "Watch" the body:after { content } to find out how wide the viewport is.
 * Thanks to http://adactio.com/journal/5429/ for details about this method
 */
if ( is_ltie9 ) { 
    var mq_tag = ''; 
} else {
    var mq_tag = window.getComputedStyle(document.body,':after').getPropertyValue('content'); 
}
//console.log( "mq_tag=" + mq_tag );


/* 
 * Load progressive content. Must remember to also load them for IE 7 and 8 if needed 
 * It is safe to put ALL resize or onLoad events in here
 */
function on_resize_orientationchange() {
    
    		
	// Check again on resize/orientation change
    if ( is_ltie9 ) { 
        var mq_tag = ''; 
    } else {
        var mq_tag = window.getComputedStyle(document.body,':after').getPropertyValue('content'); 
    }
    
    
    /* Initiate Magnific Popup */
    /*if ( mq_tag.indexOf("mediamodals") !=-1 && ! loadpopups_loaded ) {
        
        // Initialize more than one on a page
        $('.js-popup').each( function() {
            
            $(this).magnificPopup({
                disableOn: 480, // disable this plugin when window width is less that number
                delegate: 'a',
                type: 'image',
                gallery: {
                    enabled: true, // set to true to enable gallery
                    preload: [1,2], // load one previous and 2 next objects
                    navigateByImgClick: true,
                    
                    // Optional... leave these off to use default markup
                    arrowMarkup: '<button title="%title%" type="button" class="mfp-arrow mfp-arrow-%dir%"></button>', 
                    tPrev: 'Previous (Left arrow key)', // title for left button
                    tNext: 'Next (Right arrow key)', // title for right button
                    tCounter: '<span class="mfp-counter">%curr% of %total%</span>' // title for counter
                }
            });
            
        }); 
        loadpopups_loaded = true; 
    
    } else {
        
        $('.js-popup .js-popup-trigger').click(function(event) {
            event.preventDefault();
        }); 
    }*/
    
};


/* Events and Listeners that do not need to listen to the @media-query label */
$().ready(function() {
    
    
    /* Set up the open/close navigation drawer effects for small screens. Adds classes. http://codepen.io/sturobson/pen/rAoBh */
	$('.js-drawer').click(function(e) {
		$('body').toggleClass("active-nav"); 
		$(this).toggleClass("active-button"); 
		e.preventDefault();				
	});	
	// Reset all classes if click is present off the navigation area
	$(".js-close-drawer").on('click', function(e){
		$("body").removeClass('active-nav');
		$(".js-drawer").removeClass("active-button");
		e.preventDefault();
	});
	
	
	// Initiate Flexslider for inserted Carousels
    /*var animationstyle = ( hastouch ) ? 'slide' : 'fade'; 
    $('.js-slideshow').each( function(){
        
        $(this).flexslider({
            initDelay: 250, // delay in milliseconds on first animation
            animation: animationstyle, // fade or slide
            direction: 'horizontal',
            animationLoop: true,
            smoothHeight: false,
            slideshow: true, // if true, animate automatically on load
            slideshowSpeed: 5000, // in ms
            animationSpeed: 500, // in ms
            randomize: false,
            
            // Usability features
            pauseOnAction: true, // Pause when interacting with control elements
            pauseOnHover: true, // Pause when hovering over slider, then resume when no longer hovering
            useCSS: true, // Slider will use CSS3 transitions if available
            touch: hastouch, // Allow touch swipe navigation on touch-enabled devices. touch should be detected via modernizr
            video: false, // If using video in the slider, will prevent CSS3 3D Transforms to avoid graphical glitches
    
            // Primary Controls
            controlNav: false, // Create navigation for paging controls
            directionNav: true, // Create navigation for previous/next controls
            prevText: '<span class="arrow--prev"><span class="icon icon-chevron-left" aria-hidden="true"><span>&lt;</span></span></span>', 
            nextText: '<span class="arrow--next"><span class="icon icon-chevron-right" aria-hidden="true"><span>&gt;</span></span></span>', 
            
            start: function(slider){
                $(this).fadeIn(); 
                $('body').removeClass('loading');
            }
        });
    });*/
    
    
    /* 
     * Animate some scrolling for smoother transitions 
     * http://css-tricks.com/snippets/jquery/smooth-scrolling/
     * Markup pattern: <div class="anchor-jump"><a class="bottom-jump" href="#top"><span class="icon icon-circle-arrow-up" aria-hidden="true"><span>&uarr;</span></span><span class="help-text">Back to Top</span></a></div>
     */
    $(function() {
        $('.js-smoovmove').click(function() {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 500);
                    //return false;
                }
            }
        });
    });
    
    
    /* 
     * Make it more apparent that a selection has been made when checkboxes or radios are selected
     * Adds a class to the selected radio/checkbox parent label 
     * Requires inputs to be nested in labels: 
     * <label for="checkbox2"><input id="checkbox2" name="checkbox" type="checkbox">Choice B</label>
     * <label for="radio1"><input id="radio1" name="radio" type="radio" checked="checked">Option 1</label>
     */
    $('input:radio').click(function() {
        $('label:has(input:radio:checked)').addClass('active');
        $('label:has(input:radio:not(:checked))').removeClass('active');
    });
    $('input:checkbox').click(function() {
        $('label:has(input:checkbox:checked)').addClass('active');
        $('label:has(input:checkbox:not(:checked))').removeClass('active');
    });
    /* Loop through them on initial page load as well */
    $('input:radio').each(function() {
        $('label:has(input:radio:checked)').addClass('active');
    });
    $('input:checkbox').each(function() {
        $('label:has(input:checkbox:checked)').addClass('active');
    });
    
    
    /* If there is no box-sizing present (IE 7 & 8 mostly) run the javascript polyfill */
    if ( hasboxsizing == false ) {
        /*
         * @author Alberto Gasparin http://albertogasparin.it/
         * @version 1.1, License MIT
         */
var borderBoxModel=(function(elements,value){var element,cs,s,width,height;for(var i=0,max=elements.length;i<max;i++){element=elements[i];s=element.style;cs=element.currentStyle;if(s.boxSizing==value||s["box-sizing"]==value||cs.boxSizing==value||cs["box-sizing"]==value){try{apply();}catch(e){}}}
function apply(){width=parseInt(cs.width,10)||parseInt(s.width,10);height=parseInt(cs.height,10)||parseInt(s.height,10);if(width){var
borderLeft=parseInt(cs.borderLeftWidth||s.borderLeftWidth,10)||0,borderRight=parseInt(cs.borderRightWidth||s.borderRightWidth,10)||0,paddingLeft=parseInt(cs.paddingLeft||s.paddingLeft,10),paddingRight=parseInt(cs.paddingRight||s.paddingRight,10),horizSum=borderLeft+paddingLeft+paddingRight+borderRight;if(horizSum){s.width=width-horizSum;}}
if(height){var
borderTop=parseInt(cs.borderTopWidth||s.borderTopWidth,10)||0,borderBottom=parseInt(cs.borderBottomWidth||s.borderBottomWidth,10)||0,paddingTop=parseInt(cs.paddingTop||s.paddingTop,10),paddingBottom=parseInt(cs.paddingBottom||s.paddingBottom,10),vertSum=borderTop+paddingTop+paddingBottom+borderBottom;if(vertSum){s.height=height-vertSum;}}}})(document.getElementsByTagName('*'),'border-box');
    }
    
    /* If there is no HTML5 placeholder present, run a javascript equivalent */
    if ( hasplaceholder == false ) {
        
        /* polyfill from hagenburger: https://gist.github.com/379601 */
        $('[placeholder]').focus(function() {
            var input = $(this);
            if (input.val() == input.attr('placeholder')) {
                input.val('');
                input.removeClass('placeholder');
            }
        }).blur(function() {
            var input = $(this);
            if (input.val() == '' || input.val() == input.attr('placeholder')) {
                input.addClass('placeholder');
                input.val(input.attr('placeholder'));
            }
        }).blur().parents('form').submit(function() {
            $(this).find('[placeholder]').each(function() {
                var input = $(this);
                if (input.val() == input.attr('placeholder')) {
                    input.val('');
                }
            })
        });
    }
    

    /* Non-media query enabled browsers need any critical content on page load. */
    if ( is_ltie9 ) {
                
        /* Add rel="external" to links that are external (this.hostname !== location.hostname) 
         * BUT don't add to anchors containing images. 
         * Good because old IE wont support a[href^='http://'] but maybe best to use this everywhere instead? 
         */
        $('.typography a').each(function() {
            // Compare the anchor tag's host name with location's host name
            return this.hostname && this.hostname !== location.hostname;
        }).not('a:has(img)').attr("rel","external");
    }
    
}); 
