<?php
$vote4 = $_REQUEST['vote4'];

//get content of textfile
$filename = "p4_result.txt";
$content = file($filename);

//put content in array
$array = explode("||", $content[0]);
$verizon = $array[0];
$att = $array[1];
$sprint = $array[2];
$tmobile = $array [3];
$other = $array [4];


if ($vote4 == 0) {
  $verizon = $verizon + 1;
}
if ($vote4 == 1) {
  $att = $att + 1;
}
if ($vote4 == 2) {
  $sprint = $sprint + 1;
}
if ($vote4 == 3) {
  $tmobile = $tmobile + 1;
}
if ($vote4 == 4) {
  $other = $other + 1;
}


//insert votes to txt file
$insertvote = $verizon."||".$att."||".$sprint."||".$tmobile."||".$other;
$fp = fopen($filename,"w");
fputs($fp,$insertvote);
fclose($fp);
?>

<h3>Which wireless provider do you currently use?</h3>
<table>
<tr>
<td>Verizon:</td>
<td>
<img src="poll.png"
width='<?php echo(100*round($verizon/($verizon+$att+$sprint+$tmobile+$other),2)); ?>'
height='20'>
<?php echo(100*round($verizon/($verizon+$att+$sprint+$tmobile+$other),2)); ?>%
</td>
</tr>
<tr>
<td>At&t:</td>
<td>
<img src="poll.png"
width='<?php echo(100*round($att/($verizon+$att+$sprint+$tmobile+$other),2)); ?>'
height='20'>
<?php echo(100*round($att/($verizon+$att+$sprint+$tmobile+$other),2)); ?>%
</td>
</tr>
<tr>
<td>Sprint:</td>
<td>
<img src="poll.png"
width='<?php echo(100*round($sprint/($verizon+$att+$sprint+$tmobile+$other),2)); ?>'
height='20'>
<?php echo(100*round($sprint/($verizon+$att+$sprint+$tmobile+$other),2)); ?>%
</td>
</tr>
<tr>
<td>T-Mobile:</td>
<td>
<img src="poll.png"
width='<?php echo(100*round($tmobile/($verizon+$att+$sprint+$tmobile+$other),2)); ?>'
height='20'>
<?php echo(100*round($tmobile/($verizon+$att+$sprint+$tmobile+$other),2)); ?>%
</td>
</tr>
<tr>
<td>Other:</td>
<td>
<img src="poll.png"
width='<?php echo(100*round($other/($verizon+$att+$sprint+$tmobile+$other),2)); ?>'
height='20'>
<?php echo(100*round($other/($verizon+$att+$sprint+$tmobile+$other),2)); ?>%
</td>
</tr>
</table> 