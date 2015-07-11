<?php
if(!(Plugin_Name)) exit;

include"plugin-admin.php";
function wppwls_menu()
{
	  add_menu_page ( 'Wpp Link Social', 'Wpp Link Social', 'manage_options','wpp_link_social', 'wppwls_admin'  );
}

?>
