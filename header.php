<?
if (!is_user_logged_in())
{
Header("Location: /welcome");
}
?>
<?php include('header-guest.php'); ?>