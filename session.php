<?php
session_start();
$user =  array("firstname"=>"raj","age"=>23,"gender"=>"male");
//echo serialize($user);
$_SESSION["user"] =  $user;
//session_write_close();

?>
<a href = "session.php?action=rem">Remove session data</a>
<?php
if(isset($_GET["action"] )and $_GET["action"] == "rem"){
	$_SESSION = array();
	session_destroy();
	//unset($_SESSION["user"]);
}
?>