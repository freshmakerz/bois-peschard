// ======= Placeholder Plugin =========================================
/*! http://mths.be/placeholder v2.0.7 by @mathias */
;(function(f,h,$){var a='placeholder' in h.createElement('input'),d='placeholder' in h.createElement('textarea'),i=$.fn,c=$.valHooks,k,j;if(a&&d){j=i.placeholder=function(){return this};j.input=j.textarea=true}else{j=i.placeholder=function(){var l=this;l.filter((a?'textarea':':input')+'[placeholder]').not('.placeholder').bind({'focus.placeholder':b,'blur.placeholder':e}).data('placeholder-enabled',true).trigger('blur.placeholder');return l};j.input=a;j.textarea=d;k={get:function(m){var l=$(m);return l.data('placeholder-enabled')&&l.hasClass('placeholder')?'':m.value},set:function(m,n){var l=$(m);if(!l.data('placeholder-enabled')){return m.value=n}if(n==''){m.value=n;if(m!=h.activeElement){e.call(m)}}else{if(l.hasClass('placeholder')){b.call(m,true,n)||(m.value=n)}else{m.value=n}}return l}};a||(c.input=k);d||(c.textarea=k);$(function(){$(h).delegate('form','submit.placeholder',function(){var l=$('.placeholder',this).each(b);setTimeout(function(){l.each(e)},10)})});$(f).bind('beforeunload.placeholder',function(){$('.placeholder').each(function(){this.value=''})})}function g(m){var l={},n=/^jQuery\d+$/;$.each(m.attributes,function(p,o){if(o.specified&&!n.test(o.name)){l[o.name]=o.value}});return l}function b(m,n){var l=this,o=$(l);if(l.value==o.attr('placeholder')&&o.hasClass('placeholder')){if(o.data('placeholder-password')){o=o.hide().next().show().attr('id',o.removeAttr('id').data('placeholder-id'));if(m===true){return o[0].value=n}o.focus()}else{l.value='';o.removeClass('placeholder');l==h.activeElement&&l.select()}}}function e(){var q,l=this,p=$(l),m=p,o=this.id;if(l.value==''){if(l.type=='password'){if(!p.data('placeholder-textinput')){try{q=p.clone().attr({type:'text'})}catch(n){q=$('<input>').attr($.extend(g(this),{type:'text'}))}q.removeAttr('name').data({'placeholder-password':true,'placeholder-id':o}).bind('focus.placeholder',b);p.data({'placeholder-textinput':q,'placeholder-id':o}).before(q)}p=p.removeAttr('id').hide().prev().attr('id',o).show()}p.addClass('placeholder');p[0].value=p.attr('placeholder')}else{p.removeClass('placeholder')}}}(this,document,jQuery));

// ======= Active Nav =================================================
var path = location.pathname.substring(1);
if (path) { // if there is a value for the varible path

    /*-- for the primary nav - if path equals the href give the parent a class of selected
             example: nav ul li.selected a --*/
    $('nav a[href$="' + path + '"]').parent().addClass('selected');

    /*-- for dropdown nav - if path equals the href of the drop down links give the top level link a class of selected
             example: nav ul li.selected a --*/
    $('nav ul ul a[href$="' + path + '"]').parents(':eq(2)').addClass('selected');

    /*-- for the aside nav - if path equals the href give the parent a class of selected
             example: aside ul li.selected a --*/
    $('aside li a[href$="' + path + '"]').parent().addClass('selected');
};


//=======search============//
$('.search-icon span').click(function(){
		$('.search-container').toggle();
});
	// ======= Account Nav =====================================

	// When user clicks on forgot password link:
	// Sign In form hides, Forgot password form shows
    $("#btn-password").on('click', function (e) {
        e.preventDefault();
        $("#form-login").fadeOut(function(){
		   $("#form-password").fadeIn();
		});
    });
	// When user clicks on Nevermind link:
	// Sign In form shows, Forgot password form hides
    $("#btn-login").on('click', function (e) {
        e.preventDefault();
        $("#form-password").fadeOut(function(){
			$("#form-login").fadeIn();
		});
    });
	// Will show the Create Account form once clicked
    $("#needCreate").on('click', function (e) {
        e.preventDefault();
        $(".create-form").fadeIn();
    });



//=================custom================//

//google map//

// When the window has finished loading create our google map below
google.maps.event.addDomListener(window, 'load', init);

function init() {
    // Basic options for a simple Google Map
    // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
    
    var isDraggable = $(document).width() > 480 ? true : false; 
    
    var mapOptions = {
        // How zoomed in you want the map to start at (always required)
        zoom: 15,
        
        // disable scrolling on top of the map because of phones
        scrollwheel: false,
        draggable: isDraggable,
        
        // The latitude and longitude to center the map (always required)
        center: new google.maps.LatLng(47.826892, -2.047546), // Cap Cod
         
        // How you would like to style the map. 
        // This is where you would paste any style found on Snazzy Maps.
        styles: [
                {
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "hue": "#ff4400"
                        },
                        {
                            "saturation": -68
                        },
                        {
                            "lightness": -4
                        },
                        {
                            "gamma": 0.72
                        }
                    ]
                },
                {
                    "featureType": "road",
                    "elementType": "labels.icon"
                },
                {
                    "featureType": "landscape.man_made",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "hue": "#0077ff"
                        },
                        {
                            "gamma": 3.1
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "stylers": [
                        {
                            "hue": "#00ccff"
                        },
                        {
                            "gamma": 0.44
                        },
                        {
                            "saturation": -33
                        }
                    ]
                },
                {
                    "featureType": "poi.park",
                    "stylers": [
                        {
                            "hue": "#44ff00"
                        },
                        {
                            "saturation": -23
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "hue": "#007fff"
                        },
                        {
                            "gamma": 0.77
                        },
                        {
                            "saturation": 65
                        },
                        {
                            "lightness": 99
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "labels.text.stroke",
                    "stylers": [
                        {
                            "gamma": 0.11
                        },
                        {
                            "weight": 5.6
                        },
                        {
                            "saturation": 99
                        },
                        {
                            "hue": "#0091ff"
                        },
                        {
                            "lightness": -86
                        }
                    ]
                },
                {
                    "featureType": "transit.line",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "lightness": -48
                        },
                        {
                            "hue": "#ff5e00"
                        },
                        {
                            "gamma": 1.2
                        },
                        {
                            "saturation": -23
                        }
                    ]
                },
                {
                    "featureType": "transit",
                    "elementType": "labels.text.stroke",
                    "stylers": [
                        {
                            "saturation": -64
                        },
                        {
                            "hue": "#ff9100"
                        },
                        {
                            "lightness": 16
                        },
                        {
                            "gamma": 0.47
                        },
                        {
                            "weight": 2.7
                        }
                    ]
                }
				]
                };

                // Get the HTML DOM element that will contain your map 
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('map');

                // Create the Google Map using out element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);
                
                var marker = new google.maps.Marker({
                    position: {lat: 47.826892, lng: -2.047546},
                    map: map
                });
            }

//smoot scroll to top
$(function() {
    $(document).foundation();
  $('section.top').click(function() {
       $('html,body').animate({scrollTop:0},1000);
	   return false;
     
   
  });
});
//room detail gallery control
   $('.gallery img').each(function(index) {
	 $(this).click(function(){
	 
 $('.carousel-slider').slickGoTo(index);
 });});

//




    
