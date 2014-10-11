<?php
$vote3 = $_REQUEST['vote3'];

//get content of textfile
$filename = "p3_result.txt";
$content = file($filename);

//put content in array
$array = explode("||", $content[0]);
$apple = $array[0];
$android = $array[1];

if ($vote3 == 0) {
  $apple = $apple + 1;
}
if ($vote3 == 1) {
  $android = $android + 1;
}

//insert votes to txt file
$insertvote = $apple."||".$android;
$fp = fopen($filename,"w");
fputs($fp,$insertvote);
fclose($fp);
?>

<h3>Which do you find easier to pick up and use without any prior knowledge?</h3>
<table>
<tr>
<td>Apple:</td>
<td>
<img src="poll.png"
width='<?php echo(100*round($apple/($apple+$android),2)); ?>'
height='20'>
<?php echo(100*round($apple/($apple+$android),2)); ?>%
</td>
</tr>
<tr>
<td>Android:</td>
<td>
<img src="poll.png"
width='<?php echo(100*round($android/($apple+$android),2)); ?>'
height='20'>
<?php echo(100*round($android/($apple+$android),2)); ?>%
</td>
</tr>
</table> 