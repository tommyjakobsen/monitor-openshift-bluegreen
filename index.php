<html><head>
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="0" />
<title>Devops Monitor</title>

<script>
var to = 2;

function gogo(){
var d=new Date(),
    dummy=d.getTime(),
        i=0,
        pix=document.images;
for(; i < pix.length; i++){
if(pix[i].className!=='refr'){continue;}
else{
var obj = pix[i],
    s_rc=obj.getAttribute('src'),
    pure_src = s_rc.substring(0,s_rc.indexOf('x=x')+3);
obj.setAttribute('src',pure_src+'&'+dummy);
obj.setAttribute('title',pure_src+'&'+dummy);
obj.nextSibling.innerHTML=obj.getAttribute('src');
}
}
setTimeout(gogo,to*500);
}

onload=gogo;
</script>


</head>
<body>
<script>
function refreshIframe(){
var iframe = document.getElementById('myframe');
iframe.src = iframe.src;
}
setInterval(refreshIframe, 2000);
</script>

<script>
function refreshIframe(){
var iframe = document.getElementById('myframe2');
iframe.src = iframe.src;
//alert(iframe.src);
}
setInterval(refreshIframe, 2000);
</script>






<center><h2>BIG IP View</h2>
<table border=0 cellspacing=0>
<tr><td align=middle><b>Prod:</b></td><td align=middle><b>DevOps:</b></td></tr>
<?php
 echo "<tr><td align=middle><iframe src=\"http://10.179.31.186:80/index.php?rand=".rand(0,1000)."\" frameBorder=\"1\" scrolling=\"no\" id='myframe' width=270></iframe>
<br><img src='./img/keyboard.png'>
</td><td align=left>
 <iframe src=\"http://10.179.31.186:81/index.php?rand=".rand(0,10000)."\" frameBorder=\"1\" scrolling=\"no\" id='myframe2' width=270></iframe>
<br><img src='./img/keyboard.png'>
</td></tr>";
?>
<tr><td align=middle><img src='./img/leftArrow.png' height=50></td><td align=middle><img src='./img/rightArrow.png' height=50></td></tr>
<tr><td colspan=2 cellspan=2 align=middle>

<script>


//<h2><b>Topology view:</b></h2>
</script>


<img src="../img.php?x=x" class="refr" alt="" />
</td></tr></table>

</body>
</hml>