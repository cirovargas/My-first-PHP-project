<?php

include "mysql_connect.php";


 if($_GET['user'])
{
	$user = $_GET['user'];
	$consulta = mysql_query("SELECT * FROM tbl_usuario WHERE cod_user= '$user'");
	$linha = mysql_num_rows($consulta);
	
	if($linha == TRUE)
	{
		
	$consultadata = mysql_query("SELECT DATE_FORMAT(data_cadastro, '%d/%m/%Y %H:%i:%S') FROM tbl_usuario WHERE cod_user= '$user'");
	
	$nome = mysql_result($consulta, 0, "nome_user");
	$login = mysql_result($consulta, 0, "login_user");
	$empresa = mysql_result($consulta, 0, "empresa_user");
	$cnpj = mysql_result($consulta, 0, "cnpj_user");
	$endereco = mysql_result($consulta, 0, "endereco_user");
	$cidade = mysql_result($consulta, 0, "cidade_user");
	$uf = mysql_result($consulta, 0, "uf_user");
	$cep = mysql_result($consulta, 0, "cep_user");
	$fone = mysql_result($consulta, 0, "fone_user");
	$email = mysql_result($consulta, 0, "email_user");
	$data = mysql_result($consultadata, 0);
	}
	else
	{
		header("Location: agenda.php");
		exit();
		
	}
	
	
	
}
else
{
	header("Location: agenda.php");
	exit();
} 
	
	

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Classe A Consultoria, Assessoria e Eventos Ltda.</title>
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
<style type="text/css">
#user {
	position:absolute;
	left:36px;
	top:330px;
	width:507px;
	height:202px;
	z-index:1;
}
</style>
</head>

<body>
<div id="container">
	
    <div id="head">
		
	  <h1>&nbsp;</h1>
		
	  <ul id="menu" name="menu">
       	  	<li><a class="current" href="index.php" title="">INICIAL</a></li>
			<li><a href="classea.php" title="">CLASSE A</a></li>
			<li><a href="agenda.php" title="">AGENDA</a></li>
			<li><a href="servicos.php" title="">SERVIÇOS</a></li>
   			<li><a href="curriculos.php" title="">CURRÍCULOS</a></li>
			<li><a href="contato.php" title="">CONTATO</a></li>
	  </ul>
        
        <div class="top_head_banner">

        </div>
		
  </div>
    
    
    <div id="area">
      <div id="relogio">
        <script language="JavaScript" type="text/javascript">
<!--

if(navigator.appName == "Netscape") {
document.write('<layer id="clock"></layer><br>');
}

if (navigator.appVersion.indexOf("MSIE") != -1){
document.write('<span id="clock"></span><br>');
}

var mydate = new Date();
var mymonth = new Date();
var hoje = new Date();
var dia = hoje.getDate();
var hrs = hoje.getHours();
var ano = (hoje.getYear() + 0);
var mins = hoje.getMinutes();
mins = ((mins<10)?"0":"")+mins;


myday = mydate.getDay();
mymonth = mydate.getMonth();

if(myday == 0)
day = " Domingo, " 

else if(myday == 1)
day = " Segunda - Feira, " 

else if(myday == 2)
day = " Terça - Feira, " 

else if(myday == 3)
day = " Quarta - Feira, " 

else if(myday == 4)
day = " Quinta - Feira, " 

else if(myday == 5)
day = " Sexta - Feira, " 

else if(myday == 6)
day = " Sábado, " 

if(mymonth == 0)
month = "Janeiro " 

else if(mymonth ==1)
month = "Fevereiro " 

else if(mymonth ==2)
month = "Março " 

else if(mymonth ==3)
month = "Abril " 

else if(mymonth ==4)
month = "Maio " 

else if(mymonth ==5)
month = "Junho " 

else if(mymonth ==6)
month = "Julho " 

else if(mymonth ==7)
month = "Agosto " 

else if(mymonth ==8)
month = "Setembro " 

else if(mymonth ==9)
month = "Outubro " 

else if(mymonth ==10)
month = "Novembro " 

else if(mymonth ==11)
month = "Dezembro " 

document.write(day+dia+" de "+month+" de "+ano+" - "+hrs+":"+mins);

//-->
      </script>
      </div>
		
	</div>
    
    
    <div id="main">
      <div id="content_left">
        <h3>Usuario - <?php echo $nome; ?></h3>
        
        <div id="user">
  <table width="100%" border="0">
    <tr>
      <td width="27%">EMPRESA:</td>
      <td colspan="2"><?php echo $empresa; ?></td>
    </tr>
    <tr>
      <td>CNPJ:</td>
      <td colspan="2"><?php echo $cnpj; ?></td>
    </tr>
    <tr>
      <td>ENDEREÇO:</td>
      <td colspan="2"><?php echo $endereco; ?></td>
    </tr>
    <tr>
      <td>CIDADE:</td>
      <td width="56%"><?php echo $cidade; ?></td>
      <td width="17%">UF:&nbsp;<?php echo $uf; ?></td>
    </tr>
    <tr>
      <td>CEP:</td>
      <td colspan="2"><?php echo $cep; ?></td>
    </tr>
    <tr>
      <td>FONE/FAX:</td>
      <td colspan="2"><?php echo $fone; ?></td>
    </tr>
    <tr>
      <td>NOME COMPLETO:</td>
      <td colspan="2"><?php echo $nome; ?></td>
    </tr>
    <tr>
      <td>EMAIL:</td>
      <td colspan="2"><?php echo $email; ?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2">&nbsp;</td>
    </tr>
    
    <tr>
      <td>Cursos matriculados:</td>
      <td colspan="2">
      <?php
	
	$query = mysql_query("SELECT * FROM tbl_matricula WHERE tbl_usuario_cod_user = '$user'");
	
	$rows = mysql_num_rows($query);
	
	for($cont=1;$cont<=$rows;$cont++)
	{
		$codevento = mysql_result($query, $rows - $cont,"tbl_evento_cod_evento");
		
		$sql = mysql_query("SELECT nome_evento FROM tbl_evento where cod_evento='$codevento' ORDER BY cod_evento DESC");
		
		$nomeevento = mysql_result($sql, 0,"nome_evento"); 
		
		echo $nomeevento.", ";
		
	}
	
	?>
    
      
      
      </td>
    </tr>

    
  </table>
</div>
        
        
		<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /> <span style="font-style:italic; text-align:right;">Data de cadastro:<?php echo $data; ?></span></div>
      <div id="content_right">
        <h4>+NOTÍCIAS</h4>
        <div class="item_box">
        
        <?php
		
		$consulta2 = mysql_query("SELECT * FROM tbl_newsletter");
		$linha2 = mysql_num_rows($consulta2);
	
	
		for($cont =1;$cont <=4;$cont++)
		
		{
			if(($linha2-$cont) >= 0)
			{
		$titulo = mysql_result($consulta2, $linha2 -$cont, "titulo_news");
		$cod = mysql_result($consulta2, $linha2 -$cont, "cod_news");

		if (strlen($titulo) > 37)        
				{                
				$titulo = substr($titulo, 0, 37);                
				$titulo = trim($titulo) . "...";
				}
		
		?>
        
        <a href="index.php?news=<?php echo $cod; ?>" title="aeeee">+<?php echo $titulo; ?></a><br />
        
        <?php
			}
			else
			break;
		}
		?>
        
        </div>        
        <div class="item_box"> <a href="agenda.php"><img src="images/banner_home-news.jpg" width="240" height="300" border="0" alt="t1" title="t1" /></a><br />
        </div>
      </div>
		
		
		
	<div class="spacer"></div>
  </div>
    
   		<div id="footer">
        	<div style="float:left; padding-left:40px; text-align: center; font-size: 11px;"> Todos os direitos reservados © 2010 - Classe A Consultoria, Assessoria e Eventos Ltda.</div>
  </div> 
    
	
</div>


</body>
</html>
