## 简单的PHP聊天室

可用Nginx, Apache, IIS等服务器在php环境运行

- _a.php: 用于下面输入并发送消息

- _b.php: 用于上面显示消息并~~疯狂地~~刷新来显示消息

- index.php: 用于展示并把_a.php与_b.php组合显示

  如果刷新速度太快或太慢, 可用到_b.php调整

  

```php+HTML
<META HTTP-EQUIV=Refresh CONTENT="1; URL=_b.php"> 
```

- 把1换成别的秒数即可

  

历史记录在msg.txt中, 使用HTML语言

- 当然, 你也可以写一个HTML
```php+HTML

<html>
<head>
<title>钉钉 </title>
</head> 
<frameset rows="70%,*" BORDER="0"> 
<frame name="top" src="_b.php" marginwidth="0" marginheight="0" scrolling="yes" FRAMEBORDER="NO" noresize> 
<frame name="bottom" src="_a.php" marginwidth="0" marginheight="0" scrolling="no" frameborder="no" noresize> 
</frameset> 
</html>
```

_a.php和-b.php换成自己服务器地址的_a.php和_b.php
