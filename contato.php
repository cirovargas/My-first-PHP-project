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
   			<li><a href="curriculos.php" title="">CURRÍCULOS</a></li>
			<li><a class="current" href="contato.php" title="">CONTATO</a></li>
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
        <h3>Envie-nos uma mensagem...</h3>
        <div id="formcontato">
            <table width="99%" border="0" align="left">
              <tbody>
                <form id="form1" name="form1" method="post" action="enviacontato.php">
                <tr>
                  <td colspan="2">NOME:</td>
                  <td width="88%"><span id="sprytextfield1">
                    <input name="nome" type="text" id="nome" size="35" />
                  <span class="textfieldRequiredMsg">Campo Obrigatório</span></span></td>
                </tr>
                <tr>
                  <td colspan="2">FONE:</td>
                  <td><span id="sprytextfield2">
                  <input name="fone" type="text" id="fone" size="35" />
                  <span class="textfieldRequiredMsg">Campo Obrigatório</span><span class="textfieldInvalidFormatMsg">Fone Inválido</span></span></td>
                </tr>
                <tr>
                  <td colspan="2">E-MAIL:</td>
                  <td><span id="sprytextfield3">
                  <input name="email" type="text" id="email" size="35" />
                  <span class="textfieldRequiredMsg">Campo Obrigatório</span><span class="textfieldInvalidFormatMsg">Email inválido</span></span></td>
                </tr>
                <tr>
                  <td colspan="2">ASSUNTO:</td>
                  <td><span id="sprytextfield4">
                    <input name="assunto" type="text" id="assunto" size="35" />
                  <span class="textfieldRequiredMsg">Campo Obrigatório</span></span></td>
                </tr>
                <tr>
                  <td colspan="2">MENSAGEM:</td>
                  <td><textarea name="mensagem" id="mensagem" cols="45" rows="7"></textarea></td>
                </tr>
                <tr>
                  <td colspan="2">&nbsp;</td>
                  <td>Quero receber a newsletter: 
                  <input name="news" type="radio"  value="sim" checked="checked" />Sim  &nbsp;&nbsp;&nbsp; <input type="radio" name="news" value="nao" />
                  Não</td>
                </tr>
                <tr>
                  <td colspan="2">&nbsp;</td>
                  <td><input type="submit" value="Enviar" /></td>
                </tr>
                <tr>
                  <td colspan="3">&nbsp;</td>
                </tr>
                </form>
                <tr>
                  <td colspan="3"> <h3>...ou faça-nos uma visita.</h3></td>
                </tr>
                <tr>
                  <td colspan="3">Ed. Centro Clínico Guará, Sala 106<br />
                  QE 01 - Área Especial &quot;F&quot; - CEP 71.020-001<br />
                  Guará - Brasília - Distrito Federal<br />
                  Fone/Fax: 61 3323 4236 <br />
                  <br />                  
                  E-MAIL: classea@classealtda.com</td>
                </tr>
                       
              <td width="7%"></tbody>
            </table>
        </div>
      <p>&nbsp;</p></div>
      <div id="content_right">
        <h4>Localização</h4>
        <div class="item_box"><iframe width="240" height="250" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com.br/maps/ms?hl=pt-BR&amp;safe=off&amp;ie=UTF8&amp;msa=0&amp;msid=106571501685701208299.00048a7267644a3a8ab95&amp;ll=-15.813354,-47.977617&amp;spn=0.002581,0.002575&amp;z=17&amp;output=embed"></iframe><br /><small>Visualizar <a href="http://maps.google.com.br/maps/ms?hl=pt-BR&amp;safe=off&amp;ie=UTF8&amp;msa=0&amp;msid=106571501685701208299.00048a7267644a3a8ab95&amp;ll=-15.813354,-47.977617&amp;spn=0.002581,0.002575&amp;z=17&amp;source=embed" style="color:#0000FF;text-align:left">Classe A Ltda</a> em um mapa maior.</small></div>        
        <div class="item_box">
        <img src="images/centro-clinico-guara.jpg" width="240" height="150" border="0" alt="t1" title="t1" /><br />
        </div>
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
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
</script>
</body>
</html>
