<?php
include "mysql_connect.php";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Classe A Consultoria, Assessoria e Eventos Ltda.</title>
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />

<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />

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
			<li><a href="classea.php" title="">CLASSE A</a></li>
			<li><a href="agenda.php" title="">AGENDA</a></li>
			<li><a href="servicos.php" title="">SERVIÇOS</a></li>
   			<li><a class="current" href="curriculos.php" title="">CURRÍCULOS</a></li>
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
        <h3>SELEÇÃO E RECRUTAMENTO DE PESSOAL<img src="images/classea-curriculo.jpg" width="250" height="180" class="pic_left" /></h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis non nulla vitae   nunc suscipit consequat. Vivamus egestas nulla nec mi feugiat posuere. Maecenas   at dui tellus. Morbi est diam, feugiat ut rutrum eu, fringilla eu velit. Nulla   rutrum tortor non nulla suscipit in lobortis velit pellentesque. Nunc at velit   nec est imperdiet gravida eu non magna. Vivamus adipiscing, metus sed interdum   lobortis, nisi felis.</p>
        <h4>Cadastre aqui seu Currículo:</h4>
        <div id="formcurriculo">
          <table width="100%" border="0">
          <form action="enviocurriculo.php" method="post" enctype="multipart/form-data" name="enviocurriculo" id="enviocurriculo">
            <tr>
              <td width="16%">NOME:</td>
              <td width="84%"><span id="sprytextfield1">
                <input name="nome" type="text" id="nome" size="40" />
              <span class="textfieldRequiredMsg"><br />Campo Obrigatório.</span></span></td>
            </tr>
            <tr>
              <td>FONE:</td>
              <td><label for="fone"></label>
                <span id="sprytextfield2">
                <input name="fone" type="text" id="fone" size="40" />
              <span class="textfieldRequiredMsg"><br />Campo Obrigatório.</span><span class="textfieldInvalidFormatMsg">Fone inválido.</span></span></td>
            </tr>
            <tr>
              <td>EMAIL:</td>
              <td><label for="email"></label>
                <span id="sprytextfield3">
                <input name="email" type="text" id="email" size="40" />
              <span class="textfieldRequiredMsg"><br />Campo Obrigatório.</span><span class="textfieldInvalidFormatMsg">Email inválido.</span></span></td>
            </tr>
            <tr>
              <td>ANEXAR:</td>
              <td><label for="curriculo"></label>
              <input name="curriculo" type="file" id="curriculo" size="30" /></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>insira somente arquivos com extensão .doc, .docx ou .pdf</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>Quero receber a newsletter: 
              <input name="news" type="radio" id="news" value="sim" checked="checked" />Sim  &nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="news" id="news2" value="nao" /> Não</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td align="center"><input type="submit" value="Enviar" /></td>
            </tr>
            </form>
          </table>
          
        </div>
        <p>
</div>
      <div id="content_right">
      		<h4>&nbsp;</h4>
          <div class="item_box"> <img src="images/banner_emprego.jpg" width="240" height="400" alt="" longdesc="classea.html" /></div>
        
      </div>
		
		
		
	<div class="spacer"></div>
  </div>
    
   		<div id="footer">
        	<div style="float:left; padding-left:40px; text-align: center; font-size: 11px;"> Todos os direitos reservados © 2010 - Classe A Consultoria, Assessoria e Eventos Ltda.</div>
  </div> 
    
	
</div>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "phone_number", {format:"phone_custom", pattern:"(00)0000-0000", useCharacterMasking:true});
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "email");
</script>
</body>
</html>
