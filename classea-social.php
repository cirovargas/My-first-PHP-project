<?php
include "mysql_connect.php";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Classe A Consultoria, Assessoria e Eventos Ltda.</title>
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
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
       	  	<li><a href="index.php" title="">INICIAL</a></li>
			<li><a class="current" href="classea.html" title="">CLASSE A</a></li>
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
        <h3>AÇÕES PARA AJUDAR O MUNDO HOJE E MELHORÁ-LO AMANHÃ.<img src="images/classea-social.jpg" width="250" height="180" class="pic_left" /></h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis non nulla vitae   nunc suscipit consequat. Vivamus egestas nulla nec mi feugiat posuere. Maecenas   at dui tellus. Morbi est diam, feugiat ut rutrum eu, fringilla eu velit. Nulla   rutrum tortor non nulla suscipit in lobortis velit pellentesque. Nunc at velit   nec est imperdiet gravida eu non magna. Vivamus adipiscing, metus sed interdum   lobortis, nisi felis.</p>
        <h4>PROTEÇÃO AMBIENTAL</h4>
       	<p> Mudanças climáticas súbitas ocasionadas pelo derretimento de geleiras, efeito estufa; trata-se de eventos “modernos”. 
        Os grandes líderes mundiais têm tentado achar um meio termo entre a produtividade do mundo capitalista e a conservação do meio ambiente; um ciclo chamado de desenvolvimento sustentável. </p>                
<h4>PARCEIROS        </h4>
<p>Nossa responsabilidade social vai além da reciclagem de papel.
          Fechamos parceria com a Cooperativa 100 Dimensão. Um grupo de catadores de lixo se juntaram e fundaram a cooperativa. Outro parceiro foi Centro MultiEmpresarial que cedeu o espaço para o posicionamento do container de coleta de papel e apóia na logística das coletas.</p>
      </div>
      <div id="content_right">
      	<h4>RESPONSABILIDADE SOCIAL</h4>
        <div class="item_box">
        <a href="classea-social.php"><img src="images/classe-a_resp-social.jpg" width="240" height="50" alt="" longdesc="classea.html" /></a>
        </div>
        <h4>        PRINCIPAIS CLIENTES</h4>     
        <div class="item_box">
        <a href="classea-clientes.php"><img src="images/classe-a_clientes.jpg" width="240" height="50" alt="" longdesc="classea.html" /></a></div>
        <h4>        MISSÃO</h4>
        <div class="item_box">
        Prestar serviços de capacitação de pessoal, desenvolvimento de   equipes e terceirização de mão de obra, para contribuir de forma significativa   com a economicidade dos cofres públicos tendo em vista o bem estar social.</div>
        <h4>        VISÃO</h4>
        <div class="item_box">
        Ampliar nossa área de atuação, o número de profissionais capacitados   e contribuir para a geração de novos empregos Valores – Honestidade, ética,   transparência, compromisso social, qualidade.</div>
      </div>
		
		
		
	<div class="spacer"></div>
  </div>
    
   		<div id="footer">
        	<div style="float:left; padding-left:40px; text-align: center; font-size: 11px;"> Todos os direitos reservados © 2010 - Classe A Consultoria, Assessoria e Eventos Ltda.</div>
  </div> 
    
	
</div>

</body>
</html>
