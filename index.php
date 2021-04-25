<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $homeTeam = ["Spurs", "Bulls", "Knics", "Lakers"];
    $guestTeam = ["Thunder", "Pacers", "Cavs", "Heat"];
    $homeScores = [98, 106, 123, 90];
    $guestScore = [99, 102, 130, 113];
    
    for ($i = 0; $i < 4; $i++) {
        $match = $homeTeam[$i]." - ".$guestTeam[$i]." | ".$homeScores[$i]." - ".$guestScore[$i];
        echo ($match);
    };

    ?>
</body>
</html>