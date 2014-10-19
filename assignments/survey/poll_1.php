<?php
session_start();

$vote = $_REQUEST['vote'];


//get content of textfile
$filename = "p1_result.txt";
$content = file($filename);

//put content in array
$array = explode("||", $content[0]);
$apple = $array[0];
$android = $array[1];
$other = $array[2];

if ($vote == 0) {
  $apple = $apple + 1;
}
if ($vote == 1) {
  $android = $android + 1;
}
if ($vote == 2) {
  $other = $other + 1;
}

//insert votes to txt file
$insertvote = $apple."||".$android."||".$other;
$fp = fopen($filename,"w");
fputs($fp,$insertvote);
fclose($fp);
$_SESSION['voted'];
?>

<h3>If you currently own one of the two, which do you own?</h3>
<table>
<tr>
<td>Apple:</td>
<td>
<img src="poll.png"
width='<?php echo(100*round($apple/($apple+$android+$other),2)); ?>'
height='20'>
<?php echo(100*round($apple/($apple+$android+$other),2)); ?>%
</td>
</tr>
<tr>
<td>Android</td>
<td>
<img src="poll.png"
width='<?php echo(100*round($android/($apple+$android+$other),2)); ?>'
height='20'>
<?php echo(100*round($android/($apple+$android+$other),2)); ?>%
</td>
</tr>
<tr>
<td>Other:</td>
<td>
<img src="poll.png"
width='<?php echo(100*round($other/($apple+$android+$other),2)); ?>'
height='20'>
<?php echo(100*round($other/($apple+$android+$other),2)); ?>%
</td>
</tr>
</table> 