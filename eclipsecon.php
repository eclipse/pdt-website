<?php
require_once ($_SERVER [ 'DOCUMENT_ROOT' ] . "/eclipse.org-common/system/app.class.php") ;
require_once ($_SERVER [ 'DOCUMENT_ROOT' ] . "/eclipse.org-common/system/nav.class.php") ;
require_once ($_SERVER [ 'DOCUMENT_ROOT' ] . "/eclipse.org-common/system/menu.class.php") ;
$App = new App ( ) ;
$Nav = new Nav ( ) ;
$Menu = new Menu ( ) ;
include ($App->getProjectCommon ()) ; # All on the same line to unclutter the user's desktop'

#*****************************************************************************
# index.php
# Author: 		Yossi Leon
# Description: downloads
#
#****************************************************************************

#
# Begin: page-specific settings.  Change these. 
$pageKeywords = "PHP, EclipseCon2008" ;
$pageAuthor = "Roy" ;

# Add page-specific Nav bars here

# End: page-specific settings


# Paste your HTML content here!

require_once ($_SERVER [ 'DOCUMENT_ROOT' ] . "/projects/common/project-info.class.php") ;
$projectInfo = new ProjectInfo ( "tools.php" ) ;

?>
<div id="maincontent">
<div id="midcolumn">

<table style="width: 100%;" border="0" cellpadding="2">
	<tbody>
		<tr>
			<td align="left" width="60%">
			<h1><?=$pageTitle ?>
						<br>
			<font size="1" color="#8080FF">EclipseCon 2008</font></h1>
			</td>
		</tr>
	</tbody>
</table>

<a href="http://www.eclipsecon.org/2008/"><img border="0"
 src="http://www.eclipsecon.org/2008/image/728x90.jpg"
 height="90" width="728" alt="EclipseCon 2008"/></a>
 
<blockquote>
<ul>
	<li><a href="#introduction">Introduction</a></li>
	<li><a href="#pdt_toolkit">PDT - The PHP Development Toolkit</a></li>
	<li><a href="#richinternet">Developing Rich Internet Application with Eclipse Tools</a></li>
	<li><a href="#extend">Extending the PDT Project</a></li>
	<li><a href="#apdt">APDT: Aspect PHP Developement Tools </a></li>
	<li><a href="#additional_resources">Additional Resources</a></li>
</ul>
</blockquote>

<h2><a name="introduction"></a>Introduction</h2>
<p>EclipseCon is the premier technical and user conference focusing on the power of the Eclipse platform. From implementers to users, and everyone in between, if you are using, building, or considering Eclipse, EclipseCon is the conference you need to attend.This year PDT presents one tutrial, one long talk and two short talks.</p>

<h2><a name="pdt_toolkit"></a>PDT - The PHP Development Toolkit</h2>
<font size="1" color="#8080FF">By Assaf Almaz (Zend Technologies)</font> 
<p>The PDT project provides a PHP Development Tools framework for the Eclipse platform. This project encompasses all development components necessary to develop PHP run it locally or Debug it on the server. This long talk will present the features of the PDT project, elaborate on working with the PHP Community which is the driving force for this particular project and demonstrate best practices for efficient development & debugging of PHP applications including live demonstration. Finally, it will give a preview of the PDT 1.5 road map</p>
<p>Read more <a href="http://www.eclipsecon.org/2008/index.php?page=sub/&id=262">here</a></p>

<h2><a name="richinternet"></a>Developing Rich Internet Application with Eclipse Tools</h2>
<font size="1" color="#8080FF">By Roy Ganor (Zend Technologies)</font>
<p>
It's about to get a whole lot easier for PHP developers to develop Rich Internet Applications under the Eclipse environment.
<br>
This tutorial introduces tools to develop Rich Internet Application including: 
<ul>
<li>The Eclipse platform 
<li>The PHP Development tool 
<li>The Web-tools platform and the AJAX Toolkit 
</ul>
Content
<ul>
<li>Introduction to Eclipse and Web development environment 
<li>PHP (Server-Side) development tools 
<li>JavaScript (Browser-Side) development tools 
<li>Setting up a generic �hello world� website 
<li>Developing your AJAX-PHP web-application 
</ul>
</p>
<p>Read more <a href="http://www.eclipsecon.org/2008/index.php?page=sub/&id=16">here</a></p>

<h2><a name="extend"></a>Extending the PDT Project</h2>
<font size="1" color="#8080FF">By Roy Ganor (Zend Technologies)</font>
<p>The PDT project provides a PHP Development framework for the Eclipse platform. This project encompasses all development components necessary to develop PHP and facilitate extensibility. It leverages the existing Web Tools Project in providing developers with PHP capabilities. 
<br>
In the PHP world, where hundreds of core extensions and dozens of frameworks are used, we finally have a well-established IDE that can be easily extended to support these various PHP developers needs. 
<br>
This tutorial introduces the basics of PDT extension points and architecture as well as a case study of a well-known extension to PDT. 
</p>
<p>Read more <a href="http://www.eclipsecon.org/2008/index.php?page=sub/&id=17">here</a></p>

<h2><a name="apdt"></a>APDT: Aspect PHP Developement Tools</h2>
<font size="1" color="#8080FF">By William Candillon (Telecom Lille 1)</font>
<p>The Aspect PHP Development Tools (APDT) project provides Eclipse platform based tool support for AOSD with PHPAspect. Our goal is to deliver a user experience that is consistent with the PHP Development Tools (PDT) when working with PHPAspect projects and resources. This plugin provides an integration layer between the PHPAspect weaver, runtime and Eclipse/PDT extension points.
<br>
The aimed capabilities of the plugin are:
<ul>
<li>Crosscutting capabilities to existing PHP projects. 
<li>PHPAspect Builder and syntax highlighting. 
<li>PHPAspect Runtime (command line or server side). 
<li>The vizualisation of code refactoring effects in the functioning of aspects. 
</ul>
This short talk is giving an overview of APDT capabilities and features through a quick demonstration.
<br>
PHPAspect and APDT are both Google Summer of Code project, respectively in 2006 and 2007.
</p>
<p>Read more <a href="http://www.eclipsecon.org/2008/index.php?page=sub/&id=256">here</a></p>

<h2><a name="additional_resources"></a>Additional Resources</h2>
<p><a href="http://www.eclipsecon.org/2008/">EclipseCon2008 Page</a>
<p><a href="http://www.eclipsecon.org/2008/index.php?page=registration/">Registration</a>
</p>

</div>

</div>


<?
$html = ob_get_contents () ;
ob_end_clean () ;

$html .= "<!-- START: Google Analysis report -->
<script src=\"http://www.google-analytics.com/urchin.js\" type=\"text/javascript\"></script>
<script type=\"text/javascript\">
_uacct = \"UA-3036363-2\";
urchinTracker();
</script>
<!-- END: Google Analysis report -->";

# Generate the web page
?>