<!DOCTYPE html>
<html lang="<sv">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logaritmer</title>
</head>
<body>

    <?php
    function Median($arr) {
        sort(($arr);
        $count=count($arr); 
        $middleval = floor (($count-1)/2);
        
        if($count %2) {
            $median = $arr [$middleval];

        } else {
        $low= $arr[$middleval];
        $high= $arr [$middleval+1];
        $median= (($low+$high)/2);
        }
     return $median;
    }
    $arr(1,2,3,4,5)
    echo Median(1,2,3,4,5)
      
    ?>  

</body>
</html>