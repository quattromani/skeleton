<?php

	// Load End Content closing tags
	if ($content == true) {
		include($project_root . 'includes/endContent.php');
	}

	// Load Footer
	if ($footer) {
		include($project_root . 'includes/foot.php');
	}

	// Close the page
	include_once($project_root .'includes/close.php');

?>