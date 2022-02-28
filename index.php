<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Functions and Arrays</title>
    <link rel="stylesheet" href="stylesheet.css">

    <!--Functions-->
    <?php 
     function isBitten(){
        if(random_int(1,2) == 1){
            echo "Charlie ate my lunch!";
        }
        else {
            echo "Charlie did not eat my lunch!";
        }
    }

        function forSort($array){
            sort($array);

            for($i=0; $i< sizeof($array); $i++){
                echo $array[$i] . "<br>";
            }
        }

        function forEachSort($array){
            sort($array);

            foreach($array as $mon){
                echo $mon . "<br>";
            }
        }

        function sortResturantPrice($price){
            asort($price);
    
            echo "<table>";

            echo "<tr>";

            echo "<th>Resturant</th>";
            echo "<th>Average Cost</th>";

            echo "</tr>";

            foreach ($price as $k => $v) {
              
                echo "<tr>";

                    echo "<td>";
                    echo $k;
                    echo "</td>";

                    echo "<td>";
                    echo "$".$v;
                    echo "</td>";

                echo "<tr>";
            }
        echo "</table>";

        }

        function sortResturantName($names, $averageCost){
            sort($names);

            echo "<table>";
            echo "<tr>";

            echo "<th>Resturant</th>";
            echo "<th>Average Cost</th>";

            echo "</tr>";
        
            for($i=0; $i<10; $i++){
                echo "<tr>";

                    echo "<td>";
                    echo $names[$i];
                    echo "</td>";

                    echo "<td>";
                    echo "$".$averageCost[$names[$i]];
                    echo "</td>";

                echo "<tr>";
            }
        echo "</table>";
        }
    ?>
</head>
<body>
    <?php 
    
        echo "<h1>Part 1: Charlie</h1>";
        isBitten();
    ?>

    <h1>Part 2: Checkerboard</h1>
    <table>
           <?php 
                for($i=0; $i<8; $i++){
                    echo "<tr>";
                    for($j = 0; $j < 8; $j++){
                        if(($i + $j) % 2 == 0){
                            echo "<td class=backgroundColorRed></td>";
                        }
                        else{
                            echo "<td class=backgroundColorBlue></td>";
                        }
                    }
                    echo "</tr>";
                }
           ?>
    </table>

    <h1>Part 3: Arrays and Functions</h1>
    <h2>Using For loop</h2>
      <?php 

            echo "<h3>Unsorted</h3>";
        
            $month = array ('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August',
            'September', 'October', 'November', 'December');

            for($i=0; $i< sizeof($month); $i++){
                echo $month[$i] . "<br>";
            }

            echo "<h3>Sorted</h3>";
            forSort($month);
      ?>
    
    <h2>Using Foreach</h2>
    <?php 


         $month = array ('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August',
            'September', 'October', 'November', 'December');

            echo "<h3>Unsorted</h3>";
            foreach($month as $mon){
                echo $mon . "<br>";
            }

            echo "<h3>Sorted</h3>";
            forEachSort($month);
    ?>

    <h1>Part 4: Trip Advisor</h1>
    <?php 

        //Resturants
        $names = array("Fogo de Chão", "Aviva by Kameel", "Bones Restaurant", "Umi Sushi Buckhead", "Fandangles", "Capital Grille", "Canoe", "One Flew South", "Fox Bros. BBQ", "South City Kitchen Midtown");

        //Average cost
        $averageCost= array(
            "Fogo de Chão" => 40.50,
            "Aviva by Kameel" => 15.00,
            "Bones Restaurant" => 65.00,
            "Umi Sushi Buckhead" => 40.50,
            "Fandangles" => 30.00,
            "Capital Grille" => 60.50,
            "Canoe" => 35.50,
            "One Flew South" => 21.00,
            "Fox Bros. BBQ" => 15.00,
            "South City Kitchen Midtown" => 29.00
        );
       
        echo "<table>";
            echo "<tr>";

            echo "<th>Resturant</th>";
            echo "<th>Average Cost</th>";

            echo "</tr>";
        
            for($i=0; $i<10; $i++){
                echo "<tr>";

                    echo "<td>";
                    echo $names[$i];
                    echo "</td>";

                    echo "<td>";
                    echo "$".$averageCost[$names[$i]];
                    echo "</td>";

                echo "<tr>";
            }
        echo "</table>";

        echo "<h2>Sorted by Price</h2>";
        sortResturantPrice($averageCost);

        echo "<h2>Sorted by Name</h2>";
        sortResturantName($names, $averageCost);
    ?>
</body>
</html>