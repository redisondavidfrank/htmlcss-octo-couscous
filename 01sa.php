<table align = "center">
    <tbody>

    <?php
/*
    -Multidimensional Array() - array's within array
    -foreach()
    -for loop
*/
#Practice 4-01
$group = array(
    array(
            'id' => 1,
            'species' => 'Bulbasur',
            'type1' => 'Grass',
            'type2' => 'Poison',
            'ability' =>'Overgrow',
            'hp' => 45,
            'attack' => 49,
            'defense' =>49,
        ),
        array(
            'id' => 2,
            'species' => 'Ivysaur',
            'type1' => 'Grass',
            'type2' => 'Poison',
            'ability' =>'Overgrow',
            'hp' => 60,
            'attack' => 62,
            'defense' =>63
        ), 
        array(
            'id' => 3,
            'species' => 'Venusaur',
            'type1' => 'Grass',
            'type2' => 'Poison',
            'ability' =>'Overgrow',
            'hp' => 80,
            'attack' => 82,
            'defense' =>83
        ), 
        array(
            'id' => 4,
            'species' => 'Charmander',
            'type1' => 'Fire',
            'type2' => 'N/A',
            'ability' =>'Blaze',
            'hp' => 39,
            'attack' => 52,
            'defense' =>43
        ), 
        array(
            'id' => 5,
            'species' => 'Charmeleon',
            'type1' => 'Fire',
            'type2' => 'N/A',
            'ability' =>'Blaze',
            'hp' => 58,
            'attack' => 64,
            'defense' => 58
        ),
        array(
            'id' => 6,
            'species' => 'Charizard',
            'type1' => 'Fire',
            'type2' => 'Flying',
            'ability' =>'Blaze',
            'hp' => 78,
            'attack' =>  84,
            'defense' => 78
        ),
        array(
            'id' => 7,
            'species' => 'Squirtle',
            'type1' => 'Water',
            'type2' => 'N/A',
            'ability' =>'Torrent',
            'hp' => 44,
            'attack' => 48,
            'defense' => 65
        ),
        array(
            'id' => 8,
            'species' => 'Wartortle',
            'type1' => 'Water',
            'type2' => 'N/A',
            'ability' =>'Torrent',
            'hp' => 59,
            'attack' => 63,
            'defense' => 80
        ),
        array(
            'id' => 9,
            'species' => 'Blastoise',
            'type1' => 'Water',
            'type2' => 'N/A',
            'ability' =>'Torrent',
            'hp' => 79,
            'attack' => 83,
            'defense' => 100
        ),
        array(
            'id' => 10,
            'species' => 'Caterpie',
            'type1' => 'Bug',
            'type2' => 'N/A',
            'ability' =>'Shield Dust',
            'hp' => 50,
            'attack' => 20,
            'defense' => 55
        )
    );
        
        echo "Practice 4-01";
        echo "<table>";
        echo "<table border = 1><tr><th>id</th><th>species</th><th>type1</th><th>type2</th><th>ability</th><th>hp</th><th>attack</th><th>defense</th></tr>";
        foreach($group as $a){
        echo "<tr><th>". $a['id'] . "</th><th>" . $a['species'] . "</th><th>" . $a['type1'] . "</th><th>" . $a['type2'] . "</th><th>" . $a['ability'] . "</th><th>" . $a['hp'] . "</th><th>" . $a['attack'] . "</th><th>" . $a['defense'] . "</th></tr>";
        }
        echo "</table><br>";
/*
    -foreach()
*/
#Practice 4-02
        echo "Practice 4-02<br>";
        echo "All species in the list: <br>";
        foreach($group as $species){
            echo $species['species'] . "<br>";
        }
/*
    -functions()
*/
#Practice 4-03
        function hp_sum($group){
            $sum = 0;
            foreach($group as $hp){
                $sum += $hp['hp'];
            }
            echo "The sum of hp is: ".$sum."<br>";
        }
        hp_sum($group);

        function ave_attack($group){
            $sum = 0;
            foreach($group as $attack){
                $sum += $attack['attack'];
            }
            echo "The average of attack is: ".$sum/count($group)."<br>";
        } 

        ave_attack($group);
/*
    -conditionals()
*/
#Practice 4-04
        if

        
?>































