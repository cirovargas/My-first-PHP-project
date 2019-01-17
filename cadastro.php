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
<script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
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
			<li><a class="current" href="agenda.php" title="">AGENDA</a></li>
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
        
<h4>FICHA DE CADASTRO:</h4>
        
<div id="forminscrever">
  <table width="100%" border="0">
  <form id="inscricao" name="inscricao" method="post" action="processacadastro.php">
    <tr>
      <td width="16%">EMPRESA:</td>
      <td colspan="2"><span id="sprytextfield1">
        <input name="empresa" type="text" id="empresa" size="50" />
        <span class="textfieldRequiredMsg"><br />Campo Obrigatório</span></span></td>
      </tr>
    <tr>
      <td>CNPJ:</td>
      <td colspan="2"><span id="sprytextfield2">
      <input name="cnpj" type="text" id="cnpj" size="50" />
      <span class="textfieldRequiredMsg"><br />Campo Obrigatório</span><span class="textfieldInvalidFormatMsg"><br />CNPJ inválido</span></span></td>
      </tr>
    <tr>
      <td>ENDEREÇO</td>
      <td colspan="2"><span id="sprytextfield3">
        <input name="endereco" type="text" id="endereco" size="50" />
        <span class="textfieldRequiredMsg"><br />Campo Obrigatório</span></span></td>
      </tr>
    <tr>
      <td>CIDADE:</td>
      <td width="39%"><span id="sprytextfield4">
        <input name="cidade" type="text" id="cidade" size="30" />
        <span class="textfieldRequiredMsg"><br />Campo Obrigatório</span></span></td>
      <td width="45%">UF:
      <select name="uf" id="uf">
            <option value="Acre">AC</option>
            <option value="Alagoas">AL</option>
            <option value="Amapá">AP</option>
            <option value="Amazonas">AM</option>
            <option value="Bahia">BA</option>
            <option value="Ceará">CE</option>
            <option value="Distrito Federal">DF</option>
            <option value="Espirito Santo">ES</option>
            <option value="Goiás">GO</option>
            <option value="Maranhão">MA</option>
            <option value="Mato Grosso">MT</option>
            <option value="Matro Grosso do Sul">MS</option>
            <option value="Minas Gerais">MG</option>
            <option value="Pará">PA</option>
            <option value="Paraíba">PB</option>
            <option value="Paraná">PR</option>
            <option value="Pernambuco">PE</option>
            <option value="Piauí">PI</option>
          </select>
      
      </td>
    </tr>
    <tr>
      <td>CEP:</td>
      <td><span id="sprytextfield5">
      <input name="cep" type="text" id="cep" size="10" />
      <span class="textfieldRequiredMsg"><br />Campo Obrigatório</span><span class="textfieldInvalidFormatMsg"><br />CEP inválido</span></span></td>
      <td>LOGIN:
        <label for="login"></label>
        <span id="sprytextfield9">
        <input type="text" name="login2" id="login2" />
        <span class="textfieldRequiredMsg"><br />Campo Obrigatório</span></span></td>
      </tr>
    <tr>
      <td>FONE/FAX:</td>
      <td colspan="2"><span id="sprytextfield6">
      <input name="fone" type="text" id="fone" size="50" />
      <span class="textfieldRequiredMsg"><br />Campo Obrigatório</span><span class="textfieldInvalidFormatMsg"><br />Telefone inválido</span></span></td>
      </tr>
    <tr>
      <td>NOME COMPLETO:</td>
      <td colspan="2"><span id="sprytextfield7">
        <input name="nome" type="text" id="nome" size="50" />
        <span class="textfieldRequiredMsg"><br />Campo Obrigatório</span></span></td>
      </tr>
    <tr>
      <td>EMAIL:</td>
      <td colspan="2"><span id="sprytextfield8">
      <input name="email" type="text" id="email" size="50" />
      <span class="textfieldRequiredMsg"><br />Campo Obrigatório</span><span class="textfieldInvalidFormatMsg"><br />Email inválido</span></span></td>
      </tr>
    <tr>
      <td>SENHA:</td>
      <td colspan="2"><span id="sprypassword1">
      <input type="password" name="senha" id="senha" />
      <span class="passwordRequiredMsg"><br />Campo Obrigatório</span><span class="passwordMinCharsMsg"><br />No mínimo 6 caracteres.</span><span class="passwordMaxCharsMsg"><br />No maximo 20 caracteres.</span></span></td>
      </tr>
    <tr>
      <td>CONFIRME A SENHA:</td>
      <td colspan="2"><span id="sprypassword2">
      <input type="password" name="senha1" id="senha1" />
      <span class="passwordRequiredMsg"><br />Campo Obrigatório</span><span class="passwordMinCharsMsg"><br />No mínimo 6 caracteres.</span><span class="passwordMaxCharsMsg"><br />No maximo 20 caracteres.</span></span></td>
      </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2">Quero receber a newsletter:&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" checked="checked" value="sim" name="news" />
            Sim <input type="radio" value="nao" name="news" /> Não</td>
      </tr>
    <tr>
      <td colspan="3" align="center"><input type="submit" value="Cadastrar" /></td>
      </tr>
    </form>
  </table>

</div>
<h3>&nbsp;</h3>
</div>
      <div id="content_right">
      	<h4>INSCREVA-SE</h4>
        <div class="item_box">
      <table width="235" border="0" align="center" cellpadding="0" cellspacing="0">
      <form id="login" name="login" method="post" action="logar.php">
       <tr>
          <td>USUÁRIO:</td>
          <td><input type="text" name="usuario" id="usuario" /></td>
        </tr>
        <tr>
          <td>SENHA:</td>
          <td><input type="password" name="senha" id="senha" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><input type="submit" value="Entrar" /></td>
        </tr>
        </form>
      </table>
     <li>É NECESSÁRIO ESTAR CADASTRADO.</li>
     <li><a href="cadastro.html">PARA CADASTRAR-SE CLIQUE AQUI.</a></li></div>
          <div class="item_box"> <a href="cadastro.php"><img src="images/banner_incricao.jpg" width="240" height="240" alt="" longdesc="classea.html" /></a></div>
        
      </div>
		
		
		
	<div class="spacer"></div>
  </div>
    
   		<div id="footer">
        	<div style="float:left; padding-left:40px; text-align: center; font-size: 11px;"> Todos os direitos reservados © 2010 - Classe A Consultoria, Assessoria e Eventos Ltda.</div>
  </div> 
    
	
</div>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "custom", {pattern:"00.000.000/0000-00", useCharacterMasking:true});
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5", "zip_code", {format:"zip_custom", pattern:"00.000-000", useCharacterMasking:true});
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6", "phone_number", {format:"phone_custom", pattern:"(00)0000-0000", useCharacterMasking:true});
var sprytextfield7 = new Spry.Widget.ValidationTextField("sprytextfield7");
var sprytextfield8 = new Spry.Widget.ValidationTextField("sprytextfield8", "email");
var sprypassword1 = new Spry.Widget.ValidationPassword("sprypassword1", {minChars:6, maxChars:20});
var sprypassword2 = new Spry.Widget.ValidationPassword("sprypassword2", {minChars:6, maxChars:20});
var sprytextfield9 = new Spry.Widget.ValidationTextField("sprytextfield9");
</script>
</body>
</html>
