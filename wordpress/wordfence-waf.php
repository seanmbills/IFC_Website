<?php
// Before removing this file, please verify the PHP ini setting `auto_prepend_file` does not point to this.

if (file_exists('/Applications/MAMP/htdocs/IFC_Website/wordpress/wp-content/plugins/wordfence/waf/bootstrap.php')) {
	define("WFWAF_LOG_PATH", '/Applications/MAMP/htdocs/IFC_Website/wordpress/wp-content/wflogs/');
	include_once '/Applications/MAMP/htdocs/IFC_Website/wordpress/wp-content/plugins/wordfence/waf/bootstrap.php';
}
?>