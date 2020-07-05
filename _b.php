<html> 
<head> 
<title> 
钉钉
</title> 
</head> 
<META HTTP-EQUIV=Refresh CONTENT="5; URL=_b.php"> 
<body bgcolor="#EFEFEF"> 
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