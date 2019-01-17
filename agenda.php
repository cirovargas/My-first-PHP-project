<?php

session_start();

include "mysql_connect.php";



if($_GET["evnt"])
	{
		
		$cod = $_GET["evnt"];

		$consulta = mysql_query("SELECT * FROM tbl_evento WHERE cod_evento='$cod' ");
		
		$consultadata = mysql_query("SELECT DATE_FORMAT(data_cadastro, '%d/%m/%Y') FROM tbl_evento WHERE cod_evento='$cod'");

		$nome = mysql_result($consulta, 0, "nome_evento");
		$instrutor = mysql_result($consulta, 0, "instrutor_evento");
		$data = mysql_result($consultadata, 0);
		$local = mysql_result($consulta, 0, "local_evento");
		$endereco = mysql_result($consulta, 0, "endereco_evento");
		$cidade = mysql_result($consulta, 0, "cidade_evento");
		$horaaula = mysql_result($consulta, 0, "horaaula_evento");
		$estado = mysql_result($consulta, 0, "estado_evento");
		$inscricao = mysql_result($consulta, 0, "inscricao_evento");
		$sintese = mysql_result($consulta, 0, "sintese_evento");
		$topicos = mysql_result($consulta, 0, "topicos_eventos");
		$conteudo = mysql_result($consulta, 0, "conteudo_evento");
		$material = mysql_result($consulta, 0, "material_evento");
		
	
	}
	else
	{
		
		$consulta = mysql_query("SELECT * FROM tbl_evento ORDER BY cod_evento ASC");
		$consultadata = mysql_query("SELECT DATE_FORMAT(data_cadastro, '%d/%m/%Y') FROM tbl_evento");
	
		$linha = mysql_num_rows($consulta);
		
		if($linha >=1)
		{
			
		$cod = mysql_result($consulta, $linha -1, "cod_evento");
		$nome = mysql_result($consulta, $linha -1, "nome_evento");
		$instrutor = mysql_result($consulta, $linha -1, "instrutor_evento");
		$data = mysql_result($consultadata, $linha -1);
		$local = mysql_result($consulta, $linha -1, "local_evento");
		$endereco = mysql_result($consulta, $linha -1, "endereco_evento");
		$cidade = mysql_result($consulta, $linha -1, "cidade_evento");
		$horaaula = mysql_result($consulta, $linha -1, "horaaula_evento");
		$estado = mysql_result($consulta, $linha -1, "estado_evento");
		$inscricao = mysql_result($consulta, $linha -1, "inscricao_evento");
		$sintese = mysql_result($consulta, $linha -1, "sintese_evento");
		$topicos = mysql_result($consulta, $linha -1, "topicos_eventos");
		$conteudo = mysql_result($consulta, $linha -1, "conteudo_evento");
		$material = mysql_result($consulta, $linha -1, "material_evento");
		}
		
		
	}










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
        <form id="form1" name="form1" method="get" action="agenda.php">
        <h3>SELECIONE O EVENTO:
          <select name="evnt" onchange="this.form.submit();">
          <option value=""></option>
            <?php
		  
		  $consultar = mysql_query("SELECT * FROM tbl_evento ORDER BY cod_evento ASC");
		  
		  $linhas = mysql_num_rows($consultar);
		  
		  for($cont=1;$cont<=$linhas;$cont++)
		  
		  {
			  $coder = mysql_result($consultar, $linhas-$cont, "cod_evento");
			  $nome2 = mysql_result($consultar, $linhas-$cont, "nome_evento");
		  
		  
		  ?>
            <option value="<?php echo $coder; ?>"><?php echo $nome2; ?></option>
            <?php }?>
          </select>
        </h3>
        </form>
        <table width="490" cellspacing="2">
         <tr>
           <td colspan="4" align="center"><h3><?php echo $nome; ?></h3></td>
          </tr>
         <tr>
           <td width="95">INSTRUTOR</td>
           <td colspan="3"><?php echo $instrutor; ?></td>
          </tr>
          <tr><td width="95">DATA:</td><td colspan="2"><?php echo $data; ?></td>
            <td>
            
            <?php
			

			if(isset($_SESSION['usuario']))
			{ 
			$serial = $_SESSION['serial'];

			$verify = mysql_query("SELECT * FROM tbl_matricula WHERE tbl_evento_cod_evento = '$cod' AND tbl_usuario_cod_user ='$serial'");
			
			$linhaverifica = mysql_num_rows($verify);
			
			if($linhaverifica == TRUE)
			{
				echo "Você está matriculado neste evento";
			}else{
			
			
			?>
            <form id="form2" name="form2" method="post" action="matricular.php">
            <input type="hidden" name="curso" value="<?php echo $cod; ?>" />
            <input type="hidden" name="aluno" value="<?php echo $serial; ?>" />
              <input type="submit" value="Inscrever" />
            </form> <?php } } ?></td>
          </tr>
          <tr><td>LOCAL:</td> <td colspan="3"><?php echo $local; ?></td>
          </tr>
          <tr><td>ENDEREÇO:</td><td colspan="3"><?php echo $endereco; ?></td>
          </tr>
          <tr><td>CIDADE:</td><td width="175"><?php echo $cidade; ?></td>
          <td width="96">ESTADO:</td><td width="104"><?php echo $estado; ?></td></tr>
          <tr><td>C/H:</td><td><?php echo $horaaula; ?></td>
          <td>INSCRIÇÃO R$:</td><td><?php echo $inscricao; ?> </td></tr>
        </table>
        
<h4>Síntese sobre o Curso:</h4>
        <li> <?php echo $sintese; ?></li>
        <br/></br>
<h4>Principais tópicos do Curso:</h4>
        <?php echo $sintese; ?>        </br></br>
<h4><a href="<?php echo $conteudo; ?>">+ Download do conteúdo completo</a>.</h4>


<?php
if(isset($_SESSION['usuario']))
 echo "<h4><a href='$material'>+ Download do material didático do curso</a>.</h4>";

 ?>
      </div>
      <div id="content_right">
      	<h4>INSCREVA-SE</h4>
        <div class="item_box">
        <?php
		
		if(isset($_SESSION['usuario']))
		{
			$nomeuser = $_SESSION['nome'];
			$serial = $_SESSION['serial'];
			echo "Seja bem vindo, ".$nomeuser."<br />";
			echo "<a href='usuarios.php?user=$serial'>Ver meu profile</a>";
			echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			echo "<a href='logout.php'>logout</a>";
		}
		else
		{
			?>
        
      <table width="209" border="0" align="center" cellpadding="0" cellspacing="0">
      <form id="login" name="login" method="post" action="logar.php">
        <tr>
          <td width="62">USUÁRIO:</td>
          <td width="147"><input type="text" name="usuario" id="usuario" /></td>
        </tr>
        <tr>
          <td>SENHA:</td>
          <td><input type="password" name="senha" id="senha" /></td>
        </tr>
        <tr>
          <td colspan="2" align="center"><input type="submit" value="Entrar" /></td>
          </tr>
        </form>
      </table>
     <li>É NECESSÁRIO ESTAR CADASTRADO.</li>
     <li><a href="cadastro.php">PARA CADASTRAR-SE CLIQUE AQUI.</a></li>  <?php } ?></div>
          <div class="item_box"> <a href="cadastro.php"><img src="images/banner_incricao.jpg" width="240" height="240" alt="" longdesc="classea.html" /></a></div>
        
      </div>
		
		
		
	<div class="spacer"></div>
  </div>
    
   		<div id="footer">
        	<div style="float:left; padding-left:40px; text-align: center; font-size: 11px;"> Todos os direitos reservados © 2010 - Classe A Consultoria, Assessoria e Eventos Ltda.</div>
  </div> 
    
	
</div>
</body>
</html>
