/* ==========================================================================
    Prototype Tools -- Version: 1.9.0.2 - Updated: 1/20/2014
   ========================================================================== */

// For DEMO site only - DO NOT EVER INGEST THESE !!
window.onload = getPageLoadTime;

// Toggle between print view and web view
$('#toggleMedia').click(function() {
    var currCSS = document.getElementById('printCSS');
    if ($.trim($(this).text()) === 'print view') {
        $(this).text('web view');
    } else {
        $(this).text('print view');
    }
    if (currCSS.media == 'all') {
        currCSS.media = 'print';
    } else {
        currCSS.media = 'all';
    }
    return false;
});

// Add a 'fold' line to prototype in mobile only
var overlay = jQuery('<div class="fold"> </div>');
$(window).resize(function() {
    overlay.appendTo(document.body);
}).resize();

// Calculate the viewport size on prototype site
$(window).resize(function() {
    $('.viewport').empty().append($(window).width(), "x", $(window).height());
}).resize();

//calculate the time before calling the function in window.onload
var beforeload = (new Date()).getTime();

function getPageLoadTime() {
    //calculate the current time in afterload
    var afterload = (new Date()).getTime();
    // now use the beforeload and afterload to calculate the seconds
    var seconds = (afterload - beforeload) / 1000;
    // Place the seconds in the innerHTML to show the results
    $('.loadtime').text( + seconds + ' sec');
}

/* ==========================================================================
    Styleguide -- Version: 0.4.0 - Updated: 2/20/2014
    ========================================================================== */

// Create Hex color code from color return
function hexc(colorval) {
    var parts = colorval.match(/^rgb\((\d+),\s*(\d+),\s*(\d+)\)$/);
    delete(parts[0]);
    for (var i = 1; i <= 3; ++i) {
        parts[i] = parseInt(parts[i]).toString(16);
        if (parts[i].length == 1) parts[i] = '0' + parts[i];
    }
    color = '#' + parts.join('');
}

// Get color value of swatch and print to div
var color = '';
$('.colors').each(function() {
    var classList = $(this).attr('class').split(' ');
    for(i=0; i <= classList.length-1; i++){
       if(classList[i].match(/color-/g)){
           $(this).prepend('<p>$' + classList[i] + '</p>');
           break;
       }
    }
    var x = $(this).css('backgroundColor');
    hexc(x);
    $(this).append('<p>' + color + '</p>');
    $(this).append('<p>' + x + '</p>');
});

// View source buttons
$('.vs').click(function(){
    $(this).next().find('.prettyprint').toggle();
    $(this).not('.disabled').toggleClass('js-active');
    return false;
});

// Get font-family property and return
$('.fonts').each(function(){
    var fonts = $(this).css('font-family');
    $(this).prepend(fonts);
 });
var smallBreakPoint = 640;
var mediumBreakPoint = 768;
  $('<option value="">Jump to…</option>').appendTo('#anchor');
  $('.jumpTo-anchor').each(function(){
    $('<option value="'+$(this).attr('id')+'">'+$(this).text()+'</option>').appendTo('#anchor');
  });

  $('#anchor').change(function(){
    var divPosition = $('#'+$(this).val()).offset();
    $('html, body').animate({scrollTop: divPosition.top}, "slow");
  });
/* ==========================================================================
    Main -- Version: 0.4.0 - Updated: 2/20/2014
    ========================================================================== */

	// Add classes to first and last of each list
	$('li:first-child').addClass('js-first');
	$('li:last-child').addClass('js-last');