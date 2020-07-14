<html> 
<head> 
<title> 
钉钉
</title> 
</head> 
<META HTTP-EQUIV=Refresh CONTENT="1; URL=_b.php"> 
<body bgcolor="#FFFFFF"> 
<?php 
$handle=fopen("msg.txt","r"); 
//$oldmsg = array(); 
while ($content = fgets($handle)){ 
//$oldmsg[] = $content; 
//++$tot; 
echo $content; 
} 
?> 
</body> 
</html> 