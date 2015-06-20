<!DOCTYPE html>
<html>
<head>
  
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>
$(function(){
    $('.fadein img:gt(0)').hide();
    setInterval(function(){
      $('.fadein :first-child').fadeOut()
         .next('img').fadeIn()
         .end().appendTo('.fadein');}, 
      2000);
});
</script>
<style>
[class*='col-'] {
  float: left;
}
body {
    background-color:white;
}


.col-2-3 {
        margin-right:2;
        float: left;
         margin-left:5;
  width: 58%;
  
}
.col-1-3 {
        margin-left:2;
        margin-right:5;
        float: right;
  width: 42%;
}
.grid {
  width: 100%;
  overflow:hidden;
   height:100%;
}


.fadein {  position:relative; width:500px; height:400px; top:0px;}
.fadein img {position:absolute;left:10px;top:0px; }
@media screen and (max-width: 1000px) {
    body {
        background-color: white;    
    }
	.
	.col-2-3 {
  		width: 100%;
	  }
	.col-1-3 {
	  width: 100%;
	}}
</style>
</head>
<body>
<div class=".col-2-3">

     <center><img src="images.jpg"></center></div>
      <img src="gita8.jpg"align="right">

  <div class="grid">
<hr color="red">
 <br>
</div>
<div class="grid">
  <div class="col-2-3"align="right">
 <div class="fadein">
 <img src="gita1.jpg"height="326" width="650">
  <img src="gita3.jpg"height="326" width="650">
  <img src="gita6.jpg"height="326" width="650">
<img src="gita5.jpg"height="326" width="650">
</div> 
</div>

<div class=".col-2-3">

<h1>BHAGAVAT-GITA </h1>

<font size="5px"><a href="devatest.php"style="text-decoration:none">chapter1:observing the armies on battlefield of kuruksetra &nbsp;</a><br>
       <a href="chapter2.html"style="text-decoration:none">chapater2:contentof gita summarized &nbsp; &nbsp;</a> <br>
       <a href="chapter3.html"style="text-decoration:none">chapter3:karma-yoga &nbsp;&nbsp;</a><br>
       <a href="chapter4.html"style="text-decoration:none">chapter4:transcendental knowledge &nbsp;&nbsp;</a><br>
       <a href="chpater5.html"style="text-decoration:none">chapter5:karma-yoga- action in krishna consciousness </a>
    
 
