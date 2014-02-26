<?php

	// Load End Content closing tags
	if ($content == true) {
		include($project_title . 'includes/endContent.php');
	}

	// Load Footer
	if ($footer) {
		include($project_title . 'includes/foot.php');
	}

	// Close the page
	include_once($project_title .'includes/close.php');

?>