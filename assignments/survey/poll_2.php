<?php
$vote2 = $_REQUEST['vote2'];

//get content of textfile
$filename = "p2_result.txt";
$content = file($filename);

//put content in array
$array = explode("||", $content[0]);
$low = $array[0];
$mid = $array[1];
$high = $array[2];
$highest = $array[3];

if ($vote2 == 0) {
  $low = $low + 1;
}
if ($vote2 == 1) {
  $mid = $mid + 1;
}
if ($vote2 == 2) {
  $high = $high + 1;
}
if ($vote2 == 3) {
  $highest = $highest + 1;
}

//insert votes to txt file
$insertvote = $low."||".$mid."||".$high."||".$highest;
$fp = fopen($filename,"w");
fputs($fp,$insertvote);
fclose($fp);
?>

<h3>How much money are you willing to spend on a smartphone?</h3>
<table>
<tr>
<td>0-199:</td>
<td>
<img src="poll.png"
width='<?php echo(100*round($low/($low+$mid+$high+$highest),2)); ?>'
height='20'>
<?php echo(100*round($low/($low+$mid+$high+$highest),2)); ?>%
</td>
</tr>
<tr>
<td>200-399:</td>
<td>
<img src="poll.png"
width='<?php echo(100*round($mid/($low+$mid+$high+$highest),2)); ?>'
height='20'>
<?php echo(100*round($mid/($low+$mid+$high+$highest),2)); ?>%
</td>
</tr>
<tr>
<td>400-599:</td>
<td>
<img src="poll.png"
width='<?php echo(100*round($high/($low+$mid+$high+$highest),2)); ?>'
height='20'>
<?php echo(100*round($high/($low+$mid+$high+$highest),2)); ?>%
</td>
</tr>
<tr>
<td>600+:</td>
<td>
<img src="poll.png"
width='<?php echo(100*round($highest/($low+$mid+$high+$highest),2)); ?>'
height='20'>
<?php echo(100*round($highest/($low+$mid+$high+$highest),2)); ?>%
</td>
</tr>
</table> 