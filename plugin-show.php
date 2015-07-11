<?php
if(!(Plugin_Name)) exit;


function wppwls_show_css()
{
?>
<style>
#wpp-social-icons{ position: fixed; top:200px;right:0;margin-right: 1px;margin-left: auto;width:50px;  z-index:999999;}
</style>
<?php
return true ;
}


function wppwls_show_link()
{
global $wpdb;
$facebook=$wpdb->get_var('select facebook from wpp_link_social limit 1');
$twitter=$wpdb->get_var('select twitter from wpp_link_social limit 1');
$gplus=$wpdb->get_var('select googleplus from wpp_link_social limit 1');
$email=$wpdb->get_var('select email from wpp_link_social limit 1');
$path= plugins_url()."/wpp-link-social/img/";
?>
<div id="wpp-social-icons">
<a href="<?php echo $facebook ;?>"><img src="<?php echo  $path ;?>facebook.png"></a>
<a href="<?php echo $twitter ;?>"><img src="<?php echo  $path ;?>twitter.png"></a>
<a href="<?php echo $gplus ;?>"><img src="<?php echo  $path ;?>gplus.png"></a>
<a href="mailto:<?php echo $email ;?>"><img src="<?php echo  $path ;?>email.png"></a>
</div>
<?php
return true ;
}




?>
