<?php

include "valida_login.php";

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Administração - Classe A</title>
<style type="text/css">
body{
	background-image:url(images/bg.jpg);
	background-repeat:repeat-x;
	background-color:#eef3f7;
	font: 11px "Lucida Sans Unicode", "Lucida Sans", "Lucida Grande", verdana, arial, helvetica;
	color: #282828;
	text-align: center;
}

#topo {
	position:relative;
	margin-top:0px;
	margin-left:0px;
	width:850px;
	height:94px;
	z-index:1;
	background-color: #FFFFFF;
	background-image: url(images/logo.gif);
	background-repeat:no-repeat;
}
#apDiv2 {
	position:absolute;
	left:468px;
	top:211px;
	width:128px;
	height:199px;
	z-index:2;
	background-color: #009966;
}
#container {
	position:absolute;
	left:72px;
	top:44px;
	width:850px;
	height:auto;
	z-index:2;
}
#menu {
	position:relative;
	margin-top:0px;
	margin-left:0px;
	width:850px;
	height:56px;
	z-index:3;
	background-image:url(images/menu.png);
	background-repeat:repeat-x;
}

#menu ul li{
	list-style:none;
	display:block;
	float:left;
	margin-left:10px;

}
#menu a{
	text-transform:uppercase;
	font-family:Verdana, Geneva, sans-serif;
	text-decoration:none;
	color:#003;
	font-size:13px;
	font-weight:bold;
}
#menu a:hover{
	text-transform:uppercase;
	font-family:Verdana, Geneva, sans-serif;
	color:#00F;
	text-decoration:none;
	font-size:13px;
	font-weight:bold;
}
#principal {
	position:relative;
	margin-top:-3px;
	margin-left:0px;
	width:850px;
	height:450px;
	z-index:3;
	background-color: #FFFFFF;
}
#rodape {
	position:relative;
	margin-top:0px;
	margin-left:0px;
	width:850px;
	height:40px;
	z-index:3;
	background-color: #d9e2e9;
}
#alteradmin {
	position:absolute;
	left:264px;
	top:85px;
	width:322px;
	height:170px;
	z-index:3;
}
</style>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="container">
<div id="topo"></div>


<div id="menu">
  <ul style="position:relative; margin-top:15px;">
    <?php include "menu.php"; ?>
  </ul>
</div>
<div id="principal">
<div id="alteradmin">
  <table width="100%" border="0">
  <form id="form1" name="form1" method="post" action="processa_cadastroadmin.php">
    <tr>
      <td width="40%">NOME:</td>
      <td width="60%"><span id="sprytextfield1">
        <input name="nome" type="text" id="nome" size="30" />
        <span class="textfieldRequiredMsg">Campo Obrigatório</span></span></td>
    </tr>
    <tr>
      <td>SENHA:</td>
      <td><span id="sprytextfield2">
        <input name="senha" type="password" id="senha" size="30"  />
        <span class="textfieldRequiredMsg">Campo Obrigatório</span></span></td>
    </tr>
    <tr>
      <td>REPITA A SENHA:</td>
      <td><span id="sprytextfield3">
        <input name="senha1" type="password" id="senha1" size="30"  />
        <span class="textfieldRequiredMsg">Campo Obrigatório</span></span></td>
    </tr>
    <tr>
      <td>LOGIN:</td>
      <td><span id="sprytextfield4">
        <input name="login" type="text" id="login" size="30"  />
        <span class="textfieldRequiredMsg">Campo Obrigatório</span></span></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" value="Cadastrar" /></td>
    </tr>
    </form>
  </table>
</div>

</div>
<div id="rodape"><div style=" text-align: center; font-size: 11px; vertical-align:middle; margin-top:15px"> Todos os direitos reservados © 2010 - Classe A Consultoria, Assessoria e Eventos Ltda.</div></div>

</div>

<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
</script>
</body>
</html>
