$(document).ready(function() {
  $(".textbox h1, .textbox h2, .textbox h3, .textbox h4").each(function(i) {
    var current = $(this);
    current.attr("id", "title" + i);
    $("nav ul").append("<li"+" class='" + current.prop("tagName") + "'><a id='link" + i + "' href='#title" + i + "'>" + current.html() + "</a></li>");
  });

  // Image gallery
  var $gallery = $('.gallery').flickity({
    draggable: false
  });
  $gallery.on( 'staticClick', function( event, pointer, cellElement, cellIndex ) {
    if ( typeof cellIndex == 'number' ) {
      $gallery.flickity( 'select', cellIndex );
    }
  });

  // Image full size
  $('.image-link').magnificPopup({type:'image'});
});

// Text boxes
$('nav button').click(function(e){
	e.preventDefault();
	var opener = $(this),
	oclass = opener.attr('class');
	pid = $('#' + oclass);
	$('body').toggleClass(oclass);
	pid.toggle();
});
