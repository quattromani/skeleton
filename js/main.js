/* ==========================================================================
    Main -- Version: 0.4.0 - Updated: 2/20/2014
    ========================================================================== */

	// Add classes to first and last of each list
	// $('li:first-child').addClass('js-first');
	// $('li:last-child').addClass('js-last');

  function getYear(){
    var d = new Date();
    var x = document.getElementById("year");
    x.innerHTML=d.getFullYear();
  }

  $(document).ready(getYear);