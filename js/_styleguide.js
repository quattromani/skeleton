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