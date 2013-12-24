<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright (C) 2002 - 2014 Nick Jones
| http://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Filename: gist_bbcode_include_var.php
| Author: KasteR
| Website: http://kaster.us/
+--------------------------------------------------------+
| This program is released as free software under the
| Affero GPL license. You can redistribute it and/or
| modify it under the terms of this license which you
| can read by viewing the included agpl.txt or online
| at www.gnu.org/licenses/agpl.html. Removal of this
| copyright header is strictly prohibited without
| written permission from the original author(s).
+--------------------------------------------------------*/
if (!defined("IN_FUSION")) { die("Access Denied"); }

$__BBCODE__[] = 
array(
"description"		=>	$locale["bb_gist_description"],
"value"			=>	"gist",
"bbcode_start"		=>	"[gist]",
"bbcode_end"		=>	"[/gist]",
"usage"			=>	"[gist]".$locale["bb_gist_usage"]."[/gist]"
);
?>