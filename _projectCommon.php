<?php

	# Set the theme for your project's web pages.
	# See the Committer Tools "How Do I" for list of themes
	# https://dev.eclipse.org/committers/
	# Optional: defaults to system theme 
	$theme = "";

	# Define your project-wide Nav bars here.
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# these are optional

	/* @var $Nav Nav */
	$ga = <<< END
<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</script>
<script type="text/javascript">
_uacct = "UA-2264768-2";
urchinTracker();
</script>
END;
	$Nav->addNavSeparator("Project Home" . $ga, 	"/pdt/index.php");
	$Nav->addCustomNav("Downloads", 		"http://download.eclipse.org/tools/pdt/downloads/", 	"_self", 2);
	$Nav->addCustomNav("Installation", 		"/pdt/install.php", 		"_self", 2);
	$Nav->addCustomNav("Project Plan", 		"/pdt/plans/php_plan_1_0.php", 		"_self", 2);
	$Nav->addCustomNav("Wiki", 				"http://wiki.eclipse.org/index.php/PHP", 		"_self", 2);
	$Nav->addCustomNav("FAQ", 				"/pdt/faq.php", 			"_self", 2);
	$Nav->addCustomNav("Development", 		"/pdt/development.php", 			"_self", 2);	
?>  
  