<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php_task2</title>
    <link rel="stylesheet" href="php_task2.css">
</head>
<body>
<?php
$games = array(
    "Indoor" => array(
    "Chess" => array(
    array("rank" => 1,"player" => "Vishwanathan Anand","country" => "India"),
    array("rank" => 2,"player" => "Ding Liren","country" => "China"),
    array("rank" => 3,"player" => "Magnus Carlsen","country" => "Norway")),
    "Table Tennis" => array(
    array("rank" => 4,"player" => "Ma Long","country" => "China"),
    array("rank" => 5,"player" => "Timo Boll","country" => "Germany"),
    array("rank" => 6,"player" => "Koki Niwa","country" => "Japan"))
    ),
    "Outdoor" => array(
    "Cricket" => array(
    array("rank" => 7,"player" => "Virat Kohli","country" => "India"),
    array("rank" => 8,"player" => "Babar Azam","country" => "Pakistan"),
    array("rank" => 9,"player" => "Rohit Sharma","country" => "India")),
    "Swimming" => array(
    array("rank" => 10,"player" => "Micheal Phelps","country" => "US"),
    array("rank" => 11,"player" => "Mark Spitz","country" => "US"),
    array("rank" => 12,"player" => "Ian Thorpe","country" => "Australia"))
    )
);

?>
<h1>All Players</h1>
<table>
    <tr>
        <th>Mode</th>
        <th>Game</th>
        <th>Rank</th>
        <th>Player</th>
        <th>Country</th>
    </tr>
    <?php
        foreach ($games as $i => $i_value) {
            
            foreach ($i_value as $g => $g_value) {

                foreach ($g_value as $p) {
                    echo "<tr>";
                    print_r( "<td>".$i."</td>" ) ;
                    print_r( "<td>".$g."</td>" ) ;
                    print_r( "<td>".$p['rank']."</td>" ) ;
                    print_r( "<td>".$p['player']."</td>" ) ;
                    print_r( "<td>".$p['country']."</td>" ) ;
                    echo "</tr>";
                }
            }
        }
    ?>
</table>

<h1>All Swimming Players</h1>
<table>
    <tr>
        <th>Mode</th>
        <th>Game</th>
        <th>Rank</th>
        <th>Player</th>
        <th>Country</th>
    </tr>
    <?php
        foreach ($games as $i => $i_value) {
            
            foreach ($i_value as $g => $g_value) {
                
                if ($g == "Swimming") {
                    foreach ($g_value as $p) {
                        echo "<tr>";
                        print_r( "<td>".$i."</td>" ) ;
                        print_r( "<td>".$g."</td>" ) ;
                        print_r( "<td>".$p['rank']."</td>" ) ;
                        print_r( "<td>".$p['player']."</td>" ) ;
                        print_r( "<td>".$p['country']."</td>" ) ;
                        echo "</tr>";
                    }
                }

                
            }
        }
    ?>
</table>

<h1>All Players in New Layout</h1> 
<table>
    <?php
        foreach ($games as $i => $i_value) {
            
            foreach ($i_value as $g => $g_value) {
                
                foreach ($g_value as $p) {

                    echo "<tr>";
                    echo "<th>Game : </th>";
                    print_r( "<td>".$g."</td>" ) ;
                    echo "</tr>";

                    echo "<tr>";
                    echo "<th>Rank : </th>";
                    print_r( "<td>".$p['rank']."</td>" ) ;
                    echo "</tr>";

                    echo "<tr>";
                    echo "<th>Name : </th>";
                    print_r( "<td>".$p['player']."</td>" ) ;
                    echo "</tr>";
                }
            }
        }
    ?>
</table>

<h1>Rank 8 Updated to India</h1>
<?php $games['Outdoor']['Cricket'][1]['country'] = "India"; ?>

<table>
    <tr>
    <th>Mode</th>
        <th>Game</th>
        <th>Rank</th>
        <th>Player</th>
        <th>Country</th>
    </tr>
    <?php
        foreach ($games as $i => $i_value) {
            
            foreach ($i_value as $g => $g_value) {

                

                foreach ($g_value as $p) {
                    // if ( $p['rank'] == 8 ) {
                    //     $p['country'] = "India";
                    // }
                    echo "<tr>";
                    print_r( "<td>".$i."</td>" ) ;
                    print_r( "<td>".$g."</td>" ) ;
                    print_r( "<td>".$p['rank']."</td>" ) ;
                    print_r( "<td>".$p['player']."</td>" ) ;
                    print_r( "<td>".$p['country']."</td>" ) ;
                    echo "</tr>";
                }
            }
        }
    ?>
</table>

<h1>All Players Except China</h1>
<table>
    <tr>
        <th>Mode</th>
        <th>Game</th>
        <th>Rank</th>
        <th>Player</th>
        <th>Country</th>
    </tr>
    <?php
        foreach ($games as $i => $i_value) {
            
            foreach ($i_value as $g => $g_value) {

                

                foreach ($g_value as $p) {
                    
                    if ( $p['country'] !== "China" ) {
                        echo "<tr>";
                        print_r( "<td>".$i."</td>" ) ;
                        print_r( "<td>".$g."</td>" ) ;
                        print_r( "<td>".$p['rank']."</td>" ) ;
                        print_r( "<td>".$p['player']."</td>" ) ;
                        print_r( "<td>".$p['country']."</td>" ) ;
                        echo "</tr>";
                    }
                    
                }
            }
        }
    ?>
</table>

</body>
</html>
