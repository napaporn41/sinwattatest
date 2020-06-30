<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $P1["Name"] = "A";
    $P1["score"] = 50;
    $P2["Name"] = "B";
    $P2["score"] = 60;
    $P3["Name"] = "C";
    $P3["score"] = 85;
    $P4["Name"] = "D";
    $P4["score"] = 80;
    $P5["Name"] = "E";
    $P5["score"] = 90;


    $player = array();
    array_push($player, $P1, $P2, $P3, $P4, $P5);
    ranking($player);
    
    function ranking($player) {
        $rank = array('Gold', 'Silver', 'Bronze'); 
        usort($player, function($a, $b) {
       return  $a["score"] > $b["score"] ? -1 : 1;
        });
        for($i=0;$i < sizeOf($player); $i++) {
          $player[$i]["rank"] = $i < sizeOf($rank) ? $rank[$i] : "-";
        }
        echo json_encode($player);
     }

    


    ?>
</body>

</html>