<?php
	// will work only if you use modified index.php file
	$df_themeConfig = array(
		"tabNames" => 1, // show full file path or file name only in tabs (0 = full path and name | 1 = name only)
		"logoutBtn" => 1, // show logout button at the editor-bottom-bar panel (0 = no | 1 = yes)
		"Link" => 1, // show aditional button at login page with link back to given URL (0 = no | 1 = yes)
		"LinkAddress" => "http://www.codiad.com/", // if backlink = 1, enter full url to redirect
		"btnName" => "Back to site", // the name of the redirect button
		"LinkTarget" => 0 // a href redirect method ( 0 = same tab(_self) | 1 = new tab(_blank))
	);
	
	/* uncomment this line if you modified any system files from the js/folder.
		copy edited .js files in your theme root folder, then add their names below (without .js)
	*/
	$df_files = array("system","sidebars"); // overide js system files if design required edition...
	
	// set tab name diplay option: full name and path or name only
	//$df_tabNames= "1"; // (0 = full name and path | 1 = name only) will set loacalstorage value
	
	
	// EOF 
?>