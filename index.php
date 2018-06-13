<html><head>
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="0" />
<title>Devops Monitor</title>
<?php
$prod=getenv("production");
$devops=getenv("devops");
?>
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






<center><h2>Consolidated view</h2>
<table border=0 cellspacing=0>
<tr><td align=middle><b>Prod:</b></td><td align=middle><b>DevOps:</b></td></tr>
<?php
 echo "<tr><td align=middle><iframe src=\"http://$prod?rand=".rand(0,1000)."\" frameBorder=\"1\" scrolling=\"no\" id='myframe' width=270></iframe>
<br><img src='./img/keyboard.png'>
</td><td align=left>
 <iframe src=\"http://$devops?rand".rand(0,10000)."\" frameBorder=\"1\" scrolling=\"no\" id='myframe2' width=270></iframe>
<br><img src='./img/keyboard.png'>
</td></tr>";
?>


<script>


//<h2><b>Topology view:</b></h2>
</script>



</td></tr></table>

</body>
</hml>