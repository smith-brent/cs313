<?php
$vote5 = $_REQUEST['vote5'];

//get content of textfile
$filename = "p5_result.txt";
$content = file($filename);

//put content in array
$array = explode("||", $content[0]);
$teen = $array[0];
$twenty = $array[1];
$thirty = $array[2];
$plus = $array [3];


if ($vote5 == 0) {
  $teen = $teen + 1;
}
if ($vote5 == 1) {
  $twenty = $twenty + 1;
}
if ($vote5 == 2) {
  $thirty = $thirty + 1;
}
if ($vote5 == 3) {
  $plus = $plus + 1;
}


//insert votes to txt file
$insertvote = $teen."||".$twenty."||".$thirty."||".$plus;
$fp = fopen($filename,"w");
fputs($fp,$insertvote);
fclose($fp);
?>

<h3>How old are you?</h3>
<table>
<tr>
<td>15-18:</td>
<td>
<img src="poll.png"
width='<?php echo(100*round($teen/($teen+$twenty+$thirty+$plus),2)); ?>'
height='20'>
<?php echo(100*round($teen/($teen+$twenty+$thirty+$plus),2)); ?>%
</td>
</tr>
<tr>
<td>19-25:</td>
<td>
<img src="poll.png"
width='<?php echo(100*round($twenty/($teen+$twenty+$thirty+$plus),2)); ?>'
height='20'>
<?php echo(100*round($twenty/($teen+$twenty+$thirty+$plus),2)); ?>%
</td>
</tr>
<tr>
<td>26-35:</td>
<td>
<img src="poll.png"
width='<?php echo(100*round($thirty/($teen+$twenty+$thirty+$plus),2)); ?>'
height='20'>
<?php echo(100*round($thirty/($teen+$twenty+$thirty+$plus),2)); ?>%
</td>
</tr>
<tr>
<td>36+:</td>
<td>
<img src="poll.png"
width='<?php echo(100*round($plus/($teen+$twenty+$thirty+$plus),2)); ?>'
height='20'>
<?php echo(100*round($plus/($teen+$twenty+$thirty+$plus),2)); ?>%
</td>
</tr>
</table> 