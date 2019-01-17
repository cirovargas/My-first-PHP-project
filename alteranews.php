<?php

include "valida_login.php";

 if($_GET['cod'])
{
	$news = $_GET['cod'];
	$consulta = mysql_query("SELECT * FROM tbl_newsletter WHERE cod_news= '$news'");
	
	$titulo = mysql_result($consulta, 0, "titulo_news");
	$texto = mysql_result($consulta, 0, "texto_news");
	$img = mysql_result($consulta, 0, "img_news");
	
	
}
else
{
	header("Location: adminnewsletters.php");
	exit();
} 

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cadastrar Newsletter - Classe A</title>
<style type="text/css">
body{
	background-image:url(images/bg.jpg);
	background-repeat:repeat-x;
	background-color:#eef3f7;
	font: 11px "Lucida Sans Unicode", "Lucida Sans", "Lucida Grande", verdana, arial, helvetica;
	color: #282828;
	text-align: center;
}

label
	{
	font: 11px "Lucida Sans Unicode", "Lucida Sans", "Lucida Grande", verdana, arial, helvetica;
	color: #282828;
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
#imgcadastro {
	position:absolute;
	float:right;
	width:306px;
	height:271px;
	z-index:3;
	left: 530px;
	top: 93px;
}
#formnews {
	position:absolute;
	float:left;
	width:500px;
	height:424px;
	z-index:4;
	left: 12px;
	top: 11px;
}
</style>
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

<div id="formnews">
  <fieldset>
    <legend>Alterar Newsletter</legend>
    <table width="100%" border="0">
    <form action="processa_alteranews.php" method="post" enctype="multipart/form-data" name="alterarnews" id="alterarnews">
    <input type="hidden" name="cod" value="<?php echo $news;  ?>" />
      <tr>
        <td height="150">Imagem atual:</td>
        <td align="center"><?php 
		if($img)
		{ 
			echo "<img src='$img' width='84' height='84' alt='Imagem atua'/>";
		}
		else
		{ echo "Sem imagem";}?></td>
      </tr>
      <tr>
        <td width="23%"><label for="titulo">(1)Titulo</label></td>
        <td width="77%"><input name="titulo" type="text" id="titulo" size="50" value="<?php echo $titulo; ?>" /></td>
      </tr>
      <tr>
        <td><label for="texto">(2)Texto</label></td>
        <td><textarea name="texto" id="texto" cols="50" rows="8"><?php echo $texto; ?></textarea></td>
      </tr>
      <tr>
        <td><label for="imagem">(3)Imagem</label></td>
        <td><input name="imagem" type="file" id="imagem" size="40" /></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2" align="center"><input type="submit" value="Alterar" /></td>
        </tr>
      </form>
    </table>
    <p>&nbsp;</p>
  </fieldset>
</div>

<div id="imgcadastro"><img src="images/modelonews.png" width="306" height="271" alt="Modelo Newsletter" /></div>
</div>
<div id="rodape"><div style=" text-align: center; font-size: 11px; vertical-align:middle; margin-top:15px"> Todos os direitos reservados © 2010 - Classe A Consultoria, Assessoria e Eventos Ltda.</div></div>

</div>


</body>
</html>
