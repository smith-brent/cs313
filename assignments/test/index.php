<DOCTYPE html>
<html>
<head>
  	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  	<title>PHP Survey</title>
  	<meta name="description" content=""/>
	<meta name="keywords" content="" />
    <link rel="shortcut icon" href="/images/favicon.ico" >
    <link rel="stylesheet" type="text/css" href="/css/main.css" media="screen">
<script>
function getVote(int) {
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("poll").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","poll_1.php?vote="+int,true);
  xmlhttp.send();
}

function getVoteP2(int) {
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("poll2").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","poll_2.php?vote2="+int,true);
  xmlhttp.send();
}

function getVoteP3(int) {
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("poll3").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","poll_3.php?vote3="+int,true);
  xmlhttp.send();
}

function getVoteP4(int) {
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("poll4").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","poll_4.php?vote4="+int,true);
  xmlhttp.send();
}

function getVoteP5(int) {
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("poll5").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","poll_5.php?vote5="+int,true);
  xmlhttp.send();
}

</script>
</head>

<body>

<header>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/modules/header.php'; ?>
</header>

<main class="standard">

<div class="outline">
<div id="poll">
<h3>If you currently own one of the two, which do you own?</h3>
<form>
<input type="radio" name="vote" value="0" onclick="getVote(this.value)">
Apple<br>
<input type="radio" name="vote" value="1" onclick="getVote(this.value)">
Android<br>
<input type="radio" name="vote" value="2" onclick="getVote(this.value)">
Other<br>
</form>
</div>


<div id="poll2">
<h3>How much money are you willing to spend on a smartphone?</h3>
<form>
<input type="radio" name="vote2" value="0" onclick="getVoteP2(this.value)">
0-199<br>
<input type="radio" name="vote2" value="1" onclick="getVoteP2(this.value)">
200-399<br>
<input type="radio" name="vote2" value="2" onclick="getVoteP2(this.value)">
400-599<br>
<input type="radio" name="vote2" value="3" onclick="getVoteP2(this.value)">
600+
</form>
</div>


<div id="poll3">
<h3>Which do you find easier to pick up and use without any prior knowledge?</h3>
<form>
<input type="radio" name="vote3" value="0" onclick="getVoteP3(this.value)">
Apple<br>
<input type="radio" name="vote3" value="1" onclick="getVoteP3(this.value)">
Android
</form>
</div>


<div id="poll4">
<h3>Which wireless provider do you currently use?</h3>
<form>
<input type="radio" name="vote4" value="0" onclick="getVoteP4(this.value)">
Verizon<br>
<input type="radio" name="vote4" value="1" onclick="getVoteP4(this.value)">
At&t<br>
<input type="radio" name="vote4" value="2" onclick="getVoteP4(this.value)">
Sprint<br>
<input type="radio" name="vote4" value="3" onclick="getVoteP4(this.value)">
T-Mobile<br>
<input type="radio" name="vote4" value="4" onclick="getVoteP4(this.value)">
Other
</form>
</div>

<div id="poll5">
<h3>How old are you?</h3>
<form>
<input type="radio" name="vote5" value="0" onclick="getVoteP5(this.value)">
15-18<br>
<input type="radio" name="vote5" value="1" onclick="getVoteP5(this.value)">
19-25<br>
<input type="radio" name="vote5" value="2" onclick="getVoteP5(this.value)">
26-35<br>
<input type="radio" name="vote5" value="3" onclick="getVoteP5(this.value)">
36+
</form>
</div>
</div>

</main>

<footer>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>        
</footer>

</body>
</html>