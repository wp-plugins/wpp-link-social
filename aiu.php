<?php
if(!(Plugin_Name)) exit;

function wppwls_activate()
{
	
		global $wpdb ;
		$qry='CREATE TABLE IF NOT EXISTS  wpp_link_social ( id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, facebook text,twitter text,googleplus text,email text) ';
		$wpdb->query($wpdb->prepare($qry,'wpp-link-social'));
		return true;
}

function wppwls_deactivate()
{

}

function wppwls_uninstall()
{
	global $wpdb;	
	$qry='DELETE TABLE %s';
	$wpdb->query(prepare($qry),'wpp_link_social');
	$wpdb->flush();
	return true;
}


?>
