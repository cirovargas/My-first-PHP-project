<?php 

	session_start();
	$_SESSION = array();
	session_unset();
	session_destroy();
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
<style type="text/css">
body{
	background-image:url(images/background.jpg);
	background-repeat:repeat-x;
}



#apDiv1 {
	position:absolute;
	left:50%;
	top:50%;
	margin-left:-412px;
	margin-top:-92px;
	width:824px;
	height:184px;
	z-index:1;
	background-image: url(images/banner_top.jpg);
}
</style>


</head>

<body>
<div id="apDiv1">
  <table width="152" border="0" style="left:50%; top:50%; position:relative; margin-top:-37px; margin-left:-75px; width: 150px; height: 75px;">
  <form id="form1" name="form1" method="post" action="processa_login.php">
  <input type="hidden" name="ip" value='<?php echo $_SERVER["REMOTE_ADDR"]; ?>' />
    <tr>
      <td width="51"><label for="login">Login:</label></td>
      <td width="91"><input name="login" type="text" id="login" size="15" maxlength="15" /></td>
    </tr>
    <tr>
      <td><label for="senha">Senha:</label></td>
      <td><input name="senha" type="password" id="senha" size="16" maxlength="16" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" value="Login" /></td>
      </tr>
    </form>
  </table>
  
</div>
</body>
</html>
