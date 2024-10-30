<?php
if (!defined('WP_UNINSTALL_PLUGIN'))
	exit();

function kumihimo_delete_plugin(){
	delete_option('kumihimo');
}

kumihimo_delete_plugin();

?>
