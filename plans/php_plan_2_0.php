<?php  																														
require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	
require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	
require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	

$App 	= new App();	
$Nav	= new Nav();	
$Menu 	= new Menu();		
include("../_projectCommon.php");    # All on the same line to unclutter the user's desktop'

$pageTitle 		= "PDT";
$pageKeywords	= "PDT";
$pageAuthor		= "Guy Gurfinkel, Zend Technologies";

ob_start();

require_once($_SERVER['DOCUMENT_ROOT'] . "/projects/common/project-info.class.php");
$projectInfo = new ProjectInfo("tools.php");
?>
<div id="midcolumn">

<table style="width: 100%;" border="0" cellpadding="2">
	<tbody>
		<tr>
			<td align="left" width="60%">
				<h1>PDT Project Plan for 2.0 Release</h1>
			</td>
		</tr>
	</tbody>
</table>
<p>Last revised: <tt>12/31/2007</tt>
<p><em>&nbsp;&nbsp;&nbsp; Please send comments about this plan to
the</em> <a href="news://news.eclipse.org/eclipse.tools.pdt">eclipse.tools.pdt</a> <em>newsgroup.</em></p>

<p>This document lays out the feature and API set for the next 
release of the PDT project, release 2.0.</p>

<ul type="disc">
<li><a href="#Deliverables">Release Deliverables</a></li>
<li><a href="#Milestones">Release Milestones</a></li>
<li><a href="#Features">Features and Work Plan</a></li>
<li><a href="#TargetOperatingEnvironments">Target Operating Environments</a></li>

</ul>

<p>PDT 2.0 is planned to be released on December 2008. 
The project will continue to be based on <a href="http://www.eclipse.org/projects/ganymede.php">Eclipse Ganymede</a> releases .

<h2><a name="Deliverables"></a>Release Deliverables</h2>
<p>The release deliverables are:</p>
<ul type="disc">
<li>Source code release for PDT is available in the eclipse.org <a
href="http://dev.eclipse.org/viewcvs/index.cgi/?cvsroot=Tools_Project">CVS
repositories</a> and the download <a href="http://download.eclipse.org/tools/pdt/downloads/index.php">page</a>.</li>

<li>PDT runtime binaries and SDK distributions are available in the download 
<a href="http://download.eclipse.org/tools/pdt/downloads/index.php">page</a>.</li>
<li>PDT runtime binaries and SDK features are available via eclipse.org update site
(Click <a href="http://www.eclipse.org/pdt/install.php#installation_methods">here</a> for additional information).</li>
</ul>

<h2><a name="Milestones"> </a> Release Milestones</h2>

<p>PDT builds are available weekly as <em>Integration builds</em>. PDT
Milestone Releases are approximately every six weeks of integration builds.</p>

<p>Following the final milestone, release candidates will begin. There should be at least two
release candidates before the actual release. Scheduled release candidates should end 
one week before the release.

<li> 2.0 M1 - November 03 </li>
<li> 2.0 RC1 - November 17 </li>
<li> 2.0 RC2 - December 01 </li>
<li><b> 2.0 Release - December 29 </b></li>

<h2><a name="Features"> </a> Features and Work Plan</h2>
<b>Milestone 1:</b>
<li>PHP Model Infrastructure</li>
<li>Mark Occurrences</li>
<li>Type Hierarchy View</li>
<li>Override Method Annotation</li>
<li>New PHP Explorer capabilities</li>
<li>Extended Open Type</li>
<li>Code Templates</li>
<li>Code Assist for Dynamic Variables</li>

<br>
<b>Release Candidate 1+2:</b>
<li>Bug Squash (List of bugs can be found <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=specific&order=relevance+desc&bug_status=__open__&product=pdt&content=">here)</a></li>
<br>
* Note: PHP 5.3 is expected to be released around October-November
<br>

<h2><a name="TargetOperatingEnvironments"> </a> Target Operating
Environments</h2>

<p>PDT 2.0 will support all operating environments supported by the Eclipse
Platform itself. For a list of supported environments, refer to <a
href="http://www.eclipse.org/eclipse/development/eclipse_project_plan_3_4.html#TargetOperatingEnvironments">
Eclipse Project</a> for a list of reference platforms.</p>

</div>

<?
$html = ob_get_contents();
ob_end_clean();

# Generate the web page
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
