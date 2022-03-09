<!DOCTYPE html>
<html>
    <body>
        <?php
//fungsi array shift 1
        $tims = ["salwa", "tania", "lula", "firka"];
        array_shift($tims);
        foreach($tims as $person){
            echo $person.'<br/>';
        }
        ?>
        </body>
        </html>


<!DOCTYPE html>
<html>
    <body>
        <?php
//fungsi array shift 2
        $tims = ["salwa", "tania", "lula", "firka"];
        array_unshift($tims,"dilla","mawar");
        foreach($tims as $person){
            echo $person.'<br/>';
        }
        ?>
        </body>
        </html>
        