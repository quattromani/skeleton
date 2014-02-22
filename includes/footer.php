<?php

	// Load End Content closing tags
	if ($content == true) {
		include($appRoot . 'includes/endContent.php');
	}

	// Load Footer
	if ($footer) {
		include($appRoot . 'includes/foot.php');
	}

	// Close the page
		include($appRoot . 'includes/close.php');

?>