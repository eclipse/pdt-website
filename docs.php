<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# index.php
	#
	# Author: 		Yossi Leon
	# Date:			2006-04-27
	#
	# Description: Documents page
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "PDT Documents";
	$pageKeywords	= "PHP, tool, doc, docs, documentation, Documents";
	$pageAuthor		= "PDT Committers";

	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
		
	# Paste your HTML content here!
	ob_start();

	require_once($_SERVER['DOCUMENT_ROOT'] . "/projects/common/project-info.class.php");
	$projectInfo = new ProjectInfo("tools.php");
	
?>

<div id="maincontent">
	<div id="midcolumn">

		<table style="width: 100%;" border="0" cellpadding="2">
			<tbody>
				<tr>
					<td align="left" width="60%"><h1><?=$pageTitle?>
						<br>
						<font size="1" color="#8080FF">Technical articles and references for PDT users and developers</font>
						</h1>
					</td>
				</tr>
			</tbody>
		</table>

		<div class="homeitem3col">
			<h3>Documents</h3>
			<ul>
				<li><a href="documents/Eclipse Summit PDT.ppt">PDT Presentation in Eclipse Summit 2006</a>. 
				 	Presentation from the Eclipse Summit 2006 presented by Yossi Leon
				</li>
				<li><a href="documents/PDT - Debug Protocol.pdf">Debug Protocol Specifications</a>. 
				 	Describes the debug communication protocol used in the PDT project
				</li>
				
				<li><a href="documents/PDT 0.7 SRS.pdf">PDT SRS Document</a>. 
				 	Project Plan (as SRS document) describing the specification of PDT as for august 2006
				</li>
				
				<li><a href="documents/PDT - EclipseCon.pdf">EclipseCon slides</a>. 
					Slides from 
					<a target="_top" href="http://www.eclipsecon.org/2006/Home.do">EclipseCon PHP conference</a> 
					: Goals, Principles and scope, Architecture, Products and Schedule
				</li>
	
				<li><a href="documents/PDT - creation review.pdf">Creation Review Slides</a>. 
					A short review of the PDT project's background, goals and partners
				</li>

				<li><a href="http://www.eclipse.org/proposals/php-ide/">Project Proposal</a>. 
					The official project proposal. A more detailed paper about the PDT open-source project, 
					background, goals, scope, extention points, UI, requirements, partners, etc
				</li>

			</ul>
		</div>
	</div>
	
</div>


<?
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
