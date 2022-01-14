<?php


	if (!defined('QA_VERSION')) { // don't allow this page to be requested directly from browser
		header('Location: ../../');
		exit;
	}

qa_register_plugin_module('page', 'q2a-contact-page.php', 'q2a_contact_page', 'Q2A Contact Page');

	
?>
