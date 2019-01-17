<?php

include "mysql_connect.php";


if($_GET['news'])
{
	$news = $_GET['news'];
	$consulta = mysql_query("SELECT * FROM tbl_newsletter WHERE cod_news= '$news'");
	
	$consultadata = mysql_query("SELECT DATE_FORMAT(data_cadastro, '%d/%m/%Y %H:%i:%S') FROM tbl_newsletter WHERE cod_news= '$news'");
	
	$titulo = mysql_result($consulta, 0, "titulo_news");
	$texto = mysql_result($consulta, 0, "texto_news");
	$img = mysql_result($consulta, 0, "img_news");
	$data = mysql_result($consultadata, 0);
}
else
{
	$consulta = mysql_query("SELECT * FROM tbl_newsletter");
	
	$consultadata = mysql_query("SELECT DATE_FORMAT(data_cadastro, '%d/%m/%Y %H:%i:%S') FROM tbl_newsletter");
	
	$linha = mysql_num_rows($consulta);
	
	if($linha <> 0)
	{
	$titulo = mysql_result($consulta, $linha -1, "titulo_news");
	$texto = mysql_result($consulta, $linha -1, "texto_news");
	$img = mysql_result($consulta, $linha -1, "img_news");
	$data = mysql_result($consultadata, $linha -1);
	}
}
	
	

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Classe A Consultoria, Assessoria e Eventos Ltda.</title>
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
<style type="text/css">
#titulo {
	position:absolute;
	left:112px;
	top:289px;
	width:508px;
	height:62px;
	z-index:1;
}
</style>
<script type="text/javascript" src="ScriptBanner/jquery.js"></script>
<script type="text/javascript" src="ScriptBanner/script cycle.js"></script>
<script type="text/javascript"> 
$(document).ready(function() {
    $('.slideshow').cycle({
		fx: 'fade'
	});
});
</script>
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
  <div id="banner">
  <div class="slideshow">
  <?php
  
$consultaimagembanner = mysql_query("SELECT * FROM tbl_banner_topo");
$linhaimg = mysql_num_rows($consultaimagembanner);


for($i = 1 ; $i<= $linhaimg ;$i++)
{


$imagem = mysql_result($consultaimagembanner, $linhaimg - $i, "src_imagem");
$comentario = mysql_result($consultaimagembanner, $linhaimg - $i, "alt_imagem");



?>

        <img src="<?php echo $imagem; ?> " width="825" height="185" alt="<?php echo $comentario; ?>" />
        
        <?php } ?>

        </div>
        </div>
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
      
      

              <h3><?php echo $titulo; ?><br /><?php if($img){ echo "<img src='$img' width='250' height='180' class='pic_left' />";}else echo ""; ?></h3>

        <?php echo hebrevc($texto); ?><br /><br /> <span style="font-style:italic; text-align:right;">Data:<?php echo $data; ?></span></div>
      <div id="content_right">
        <h4>+NOTÍCIAS</h4>
        <div class="item_box">
        
        <?php
		
		$consulta2 = mysql_query("SELECT * FROM tbl_newsletter ORDER BY cod_news ASC");
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
        <?php
    	$query22 = mysql_query("SELECT * FROM tbl_banner_index WHERE cod_img='1'");


		$img = mysql_result($query22, 0, "src_img");
		$coment = mysql_result($query22, 0, "coment_img");
		$link = mysql_result($query22, 0, "link_img");
		
	
    ?>      
        <div class="item_box"> <a href="<?php if($link) echo $link; else echo "#"; ?>"><img src="<?php echo $img; ?>"" width="240" height="300" border="0" alt="<?php echo $coment; ?>"" title="<?php echo $coment; ?>" /></a><br />
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
