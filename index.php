<!DOCTYPE html>  
 
<html>  
 
<title>Series and Movies whatch</title> 
<head> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="css.css"> 
</head> 
<body>  
    <?php 
$videoUrl = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL); 
$videoUrl=base64_decode($videoUrl) 
?> 
    <div class="header"> 
        <img src="logo.png" alt="Logo" height="40" width="40"> 
        <h3>Series and Movies bot</h3> 
    </div> 
    
    <div class="video-container"> 
        <video width="60%" height="60%" controls autoplay> 
            <source src="<?php echo $videoUrl; ?>" type="video/mp4"> 
            Your browser does not support the video tag. 
        </video> 
    </div> 
<div class="qwer"> 
<a href="<?php echo $videoUrl; ?>" download> 
  <img src="download.png" alt="Image"> 
</a> 
</div> 
<div class="qwer"> 
<a href="intent:<?php echo $videoUrl; ?>#Intent;package=com.mxtech.videoplayer.ad;end"> 
  <img src="MX_Player_Logo.png"  alt="Image" height="85" width="300"> 
</a> 

</div> 

<h3>Developed by : Rafekooo </h3> 
<h3>Designed by : Aasem </h3> 
<div class="logos"> 
    <a href="https://www.facebook.com/rafek.barbar.942?mibextid=ZbWKwL" download> 
<img class="facebook" src="facebook.png" alt="facebook.png" height="40" width="40"> 
</a> 
<a href="https://t.me/py_programe" download> 
<img class="telegram" src="telegram.png" alt="telegram.png" height="40" width="40"> 
</a> 
</div> 
 
 
</body>  
 
 
</html>