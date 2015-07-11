<?php
if(!(Plugin_Name)) exit;

function wppwls_process()
{
if(!is_admin())
{
	return false ;
}
global $wpdb ;
$facebook=$_POST['facebook'];
$twitter=$_POST['twitter'];
$gplus=$_POST['googleplus'];
$email=$_POST['email'];
$old_url=get_bloginfo('url').'/wp-admin/admin.php?page=wpp_link_social';

if($facebook!='')
{	
	$facebook= strtolower($facebook) ;
	$facebook= htmlspecialchars($facebook) ;
	$facebook= trim($facebook) ;
	$facebook= esc_url($facebook) ;
	
}
else
{
wp_redirect( $old_url."&&error=1" );
exit;
}

if($twitter!='')
{
	$twitter= strtolower($twitter) ;
	$twitter= htmlspecialchars($twitter) ;
	$twitter= trim($twitter) ;
	$twitter= esc_url($twitter) ;
}
else
{
wp_redirect( $old_url."&&error=2" );
exit;
}


if($gplus!='')
{
	$gplus= strtolower($gplus) ;
	$gplus= htmlspecialchars($gplus) ;
	$gplus= trim($gplus) ;
	$gplus= esc_url($gplus) ;
}
else
{
wp_redirect( $old_url."&&error=3" );
exit;
}

if($email!='')
{
	$email= strtolower($email) ;
	$email= htmlspecialchars($email) ;
	$email= trim($email) ;
}
else
{
wp_redirect( $old_url."&&error=4" );
exit;
}


if($wpdb->get_row('select * from wpp_link_social')!="")
{
$qry="update wpp_link_social set facebook=%s , twitter=%s, googleplus=%s,email=%s  ";
}
else
{
	$qry="insert into wpp_link_social (facebook,twitter,googleplus,email) values(%s,%s,%s,%s)";	
}

echo $wpdb->query($wpdb->prepare($qry,$facebook,$twitter,$gplus,$email));	
wp_redirect( $old_url."&&success=true" );
exit();
}

?>
