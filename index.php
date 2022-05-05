<?php

    $matches = [
        [
            'team1' => 'Acqua S.Bernardo Cantù',
            'team2' => 'Oriora Pistoia',
            'point_team_1' => 70,
            'point_team_2' => 45
        ],
        [
            'team1' => 'Fortitudo Pompea Bologna',
            'team2' => 'Dolomiti Energia Trentino',
            'point_team_1' => 82,
            'point_team_2' => 83
        ],
        [
            'team1' => 'Pallacanestro Trieste',
            'team2' => 'Virtus Roma',
            'point_team_1' => 72,
            'point_team_2' => 33
        ],
        [
            'team1' => 'Openjobmetis Varese',
            'team2' => 'Germani Basket Brescia',
            'point_team_1' => 101,
            'point_team_2' => 99
        ],
    
    ];
    
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>SNACK 1</h1>
    <?php for( $i = 0; $i < count($matches); $i++){ ?>
    <p>
        <?php echo $matches[$i]['team1']. " - " .$matches[$i]['team2']. " | " .$matches[$i]['point_team_1'] . " - " .$matches[$i]['point_team_2']?>
    </p>
    <?php } ?>
    <h1>SNACK 2</h1>

    <?php
        $lorem = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea perspiciatis sequi praesentium veniam molestiae, porro iusto eum natus odio pariatur obcaecati, temporibus reprehenderit nobis officia deserunt fuga similique dolore esse.";

        if ( $_GET["name"] || $_GET["cognome"] ) {
            if (strlen($name) < 3) {
                echo "Il nome deve avere più di 3 caratteri";
            }   
            

        }
       

    ?>

    <form method="GET">
        Nome:<input type="text" name="name">
        <br>
        Cognome:<input type="text" name="cognome">
        <br>
        E-mail:<input type="text" name="email">
        <button  type="submit">INVIA</button>
    </form>

    <h1>SNACK 3</h1>

    <?php
    $random = array();

    for( $i = 0; $i < 15; $i++ ){
        $random[]=rand(0,100);
    }

    var_dump($random);
    ?>

</body>

</html>