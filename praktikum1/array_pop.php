<!DOCTYPE html>
<html>
<body>
<?php
$tims = ["salwa", "tania", "lula", "firka"];
array_pop($tims);
foreach($tims as $person){
    echo $person.'<br/>';
}
?>
</body>
</html>
