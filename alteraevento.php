<?php

include "valida_login.php";

if(isset($_GET['cod']))
{
	$cod = $_GET['cod'];
	
	$query = mysql_query("SELECT * FROM tbl_evento WHERE cod_evento ='$cod'");
	
	$nome = mysql_result($query, 0, "nome_evento");
	$instrutor = mysql_result($query, 0, "instrutor_evento");
	$local = mysql_result($query, 0, "local_evento");
	$endereco = mysql_result($query, 0, "endereco_evento");
	$cidade = mysql_result($query, 0, "cidade_evento");
	$estado = mysql_result($query, 0, "estado_evento");
	$ch = mysql_result($query, 0, "horaaula_evento");
	$inscricao = mysql_result($query, 0, "inscricao_evento");
	$sintese = mysql_result($query, 0, "sintese_evento");
	$topicos = mysql_result($query, 0, "topicos_eventos");
	$conteudo = mysql_result($query, 0, "conteudo_evento");
	$material = mysql_result($query, 0, "material_evento");
	$data = date('Y-m-d h:i:s');
	
	


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

#container {
	position:absolute;
	left:72px;
	top:44px;
	width:850px;
	height:678px;
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
	height:475px;
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
#formevento {
	font-family:Verdana, Geneva, sans-serif;
	font-size:10px;
	position:relative;
	float:left;
	margin-left:3px;
	margin-top:5px;
	width:461px;
	height:449px;
	z-index:3;
}
#modeloevento {
	position:relative;
	float:right;
	margin-top:5px;
	margin-right:3px;
	width:317px;
	height:298px;
	z-index:4;
}
label{
	font-family:Verdana, Geneva, sans-serif;
	font-size:10px;
}
#anexos {
	position:absolute;
	left:535px;
	top:503px;
	width:303px;
	height:75px;
	z-index:3;
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
<div id="formevento">
  <table width="200" border="0">
  <form action="processa_alteraevento.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <input type="hidden" name="cod" value="<?php echo $cod; ?>" />
    <tr>
      <td colspan="4"><label for="nome">Nome:</label>
        &nbsp;&nbsp;
        <input name="nome" type="text" id="nome" value="<?php echo $nome; ?>" size="40" /></td>
      </tr>
    <tr>
      <td width="12%"><label for="instrutor">Instrutor:</label></td>
      <td colspan="3"><input name="instrutor" type="text" id="instrutor" value="<?php echo $instrutor; ?>" size="40" /></td>
      </tr>
    <tr>
      <td><label for="dia">Data:</label></td>
      <td colspan="2"><select name="dia" id="dia">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3" selected="selected">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option>
        <option value="24">24</option>
        <option value="25">25</option>
        <option value="26">26</option>
        <option value="27">27</option>
        <option value="28">28</option>
        <option value="29">29</option>
        <option value="30">30</option>
        <option value="31">31</option>
        </select>
        <select name="mes" id="mes">
          <option value="01">janeiro</option>
          <option value="02">fevereiro</option>
          <option value="03">março</option>
          <option value="04">abril</option>
          <option value="05">maio</option>
          <option value="06">junho</option>
          <option value="07">julho</option>
          <option value="08">agosto</option>
          <option value="09">setembro</option>
          <option value="10">outubro</option>
          <option value="11">novembro</option>
          <option value="12">dezembro</option>
          </select>
        <input name="ano" type="text" id="ano" value='<?php echo date("Y"); ?>' size="4" maxlength="4" /></td>
      <td width="30%">&nbsp;</td>
    </tr>
    <tr>
      <td><label for="local">Local:</label></td>
      <td colspan="2"><input name="local" type="text" id="local" value="<?php echo $local; ?>" size="30" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><label for="endereco">Endereço:</label></td>
      <td colspan="2"><input name="endereco" type="text" id="endereco" value="<?php echo $endereco; ?>" size="30" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><label for="cidade">Cidade:</label></td>
      <td width="48%"><input name="cidade" type="text" id="cidade" value="<?php echo $cidade; ?>" /></td>
      <td width="10%"><label for="estado">Estado:</label></td>
      <td>
        <input name="estado" type="text" id="estado" value="<?php echo $estado; ?>" /></td>
    </tr>
    <tr>
      <td><label for="ch">C/H:</label></td>
      <td> <input name="ch" type="text" id="ch" value="<?php echo $ch; ?>" /></td>
      <td><label for="inscricao">Inscrição</label></td>
      <td> <input name="inscricao" type="text" id="inscricao" value="<?php echo $inscricao; ?>" /></td>
    </tr>
    <tr>
      <td><label for="sintese"><br />
        Sintese sobre o curso:</label></td>
      <td colspan="3"> <textarea name="sintese" id="sintese" cols="50" rows="5"><?php echo $sintese; ?></textarea></td>
      </tr>
    <tr>
      <td><label for="topicos"><br />
        Principais tópicos:</label></td>
      <td colspan="3"><textarea name="topicos" id="topicos" cols="50" rows="5"><?php echo $topicos; ?></textarea></td>
      </tr>
    <tr>
      <td><label for="conteudo">Conteúdo</label></td>
      <td colspan="3"><input name="conteudo" type="file" id="conteudo" size="50" value="" /></td>
      </tr>
    <tr>
      <td><label for="material">Material didático:</label></td>
      <td colspan="3"><input name="material" type="file" id="material" size="50" value="" /></td>
      </tr>
    <tr>
      <td colspan="4" align="center"><input type="submit" name="button" id="button" value="Cadastrar" /></td>
      </tr>
    </form>
  </table>
</div>

<div id="modeloevento"><img src="images/modeloevento.png" width="306" height="296" alt="Modelo Evento" /></div>

</div>
<div id="rodape"><div style=" text-align: center; font-size: 11px; vertical-align:middle; margin-top:15px"> Todos os direitos reservados © 2010 - Classe A Consultoria, Assessoria e Eventos Ltda.</div></div>
<div id="anexos">
  <table width="100%" border="0">
    <tr>
      <td><?php if($conteudo) echo "Conte&ucirc;do ja anexado"; ?></td>
    </tr>
    <tr>
      <td><?php if($material) echo "Material ja anexado"; ?></td>
    </tr>
  </table>
</div>
</div>



</body>
</html>

<?php

}
else
{
	header("Location: adminadministradores.php");
	exit();	
}

?>
