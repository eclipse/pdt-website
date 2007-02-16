<?php

	# Set the theme for your project's web pages.
	# See the Committer Tools "How Do I" for list of themes
	# https://dev.eclipse.org/committers/
	# Optional: defaults to system theme 
	$theme = "";

	# Define your project-wide Nav bars here.
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# these are optional
	$Nav->addNavSeparator("Project Home", 	"/php/index.php");
	$Nav->addCustomNav("Downloads", 		"/php/downloads.php", 	"_self", 2);
	$Nav->addCustomNav("Installation", 		"/php/install.php", 		"_self", 2);
	$Nav->addCustomNav("Project Plan", 		"/php/plans/php_plan_0_7.php", 		"_self", 2);
	$Nav->addCustomNav("Wiki", 				"http://wiki.eclipse.org/index.php/PHP", 		"_self", 2);
	$Nav->addCustomNav("FAQ", 				"faq.php", 			"_self", 2);

?>
