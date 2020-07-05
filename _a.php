<html> 
<title> 
钉钉
</title> 
<body TOPMARGIN=0 LEFTMARGIN=0 MARGINWIDTH=0 MARGINHEIGHT=0 > 
<?php 
$person = @$_POST[person]; 
$msg = @$_POST[message]; 
if ($person!="" && $msg!=""){ 
$handle = fopen("msg.txt","r"); 
$tot = 0; 
$oldmsg = array(); 
while ($content = fgets($handle)){ 
$oldmsg[] = $content; 
++$tot; 
} 
fclose($handle); 
unlink("msg.txt"); 
$fp = fopen("msg.txt","a+"); 
$time = date("h:i"); 
fwrite($fp,"<font color=\"blue\">".$person."</font> in <font color=\"red\">".$time."</font>  说  <b>".$msg."</b><br>"."\n"); 
for ($i =0;$i<$tot;++$i){ 
if ($i>50) break; 
fwrite($fp,$oldmsg[$i]); 
} 
} 
?> 
<TABLE width="100%" border="0" cellspacing="0" cellpadding="0"> 
<tr align="left" bgcolor="#666666"> 
<td height="20"> 
</td></tr> 
<tr bgcolor="#FFCC66"> 
<td width="1" height="4" ></td> 
</tr> 
</TABLE> 
<table width="100%" border=0 cellspacing=0 cellpadding=0 bgcolor="#EFEFEF"> 
<tr bgcolor="#666666"> 
<td align="left"> 
<table width="100%" height="500" boder=0 cellspacing=0 cellpadding=0 bgcolor="#EFEFEF"> 
<tr align="left"> 
<td valign="top"> 
<font size="-1" color="#666666"> 

<table width = "100%" border = "0"> 
<tr> 
<form action="_a.php" method = "post"> 
<td align="left"> 
<font size="-1">昵称：</font> 
<input type="text" name="person" size="12" maxlength="80" value="<?php echo $person;?>"> 
<br> 
<font size="-1"></font> 
<textarea type="textarea" name="message" rows="9" cols="150" size = 100></textarea> 
<input type="submit" value="发言"> 
</td> 
</form> 
</tr> 
</table> 
</font> 
</td> 
</tr> 
</tr> 
</table> 
</td> 
</tr> 
</table> 
</body> 
</html> 