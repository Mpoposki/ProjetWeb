<?php
require __DIR__ . '/monster.php';

//_______________BDD__________________
function getMonsterBDD() {
    try {
        $myPDO = new PDO('mysql:host=localhost;dbname=monstre', 'root', 'newPass');
    }
    catch(Exception $e){
        die("Erreur : ". $e->getMessage());
    }
    $result = $myPDO-> prepare('SELECT * FROM monstres');
    $result -> execute();
    $monsters = array();

    foreach ($result -> fetchAll() as $monster ) {
        $monsters[] = new Monster($monster['name'],$monster['strength'],$monster['life'],$monster['type']);
    }

    return $monsters;
    //$result -> closeCursor();
}

function addMonstreBDD ($name, $strength, $life, $type) {
    $myPDO = new PDO('mysql:host=localhost;dbname=monstre', 'root', 'newPass');
    $query = $myPDO -> prepare("INSERT INTO monstres VALUES ('$name', '$strength', '$life', '$type')");
    $query -> execute();

}


//_______________Objet__________________
function getMonstersObjet()
{
    $monsters = getMonsters();
    $monstersAux = array();
    foreach ($monsters as $monster) {
        $monstersAux[] = new Monster($monster['name'],$monster['strength'],$monster['life'],$monster['type']);
    }
    return $monstersAux;
}

//___________Json_________________
function getMonsters()
{
    return [
        [
            'name' => 'Domovoï',
            'strength' => 30,
            'life' => 300,
            'type' => 'water'
        ],
        [
            'name' => 'Wendigos',
            'strength' => 100,
            'life' => 450,
            'type' => 'earth'
        ],
        [
            'name' => 'Thunderbird',
            'strength' => 400,
            'life' => 500,
            'type' => 'air'
        ],
        [
            'name' => 'Sirrush',
            'strength' => 250,
            'life' => 1500,
            'type' => 'fire'
        ],
    ];
}
/* L'SQL
insert into monstres values('Domovoï', 30, 300, 'water');
insert into monstres values('Wendigos', 100, 450, 'earth');
insert into monstres values('Thunderbird', 400, 500, 'air');
insert into monstres values('Sirrush', 250, 1500, 'fire');
*/



/**
 * Our complex fighting algorithm!
 *@return array With keys winning_ship, losing_ship & used_jedi_powers
 */
function fight(array $firstMonster, array $secondMonster)
{
    $firstMonsterLife = $firstMonster['life'];
    $secondMonsterLife = $secondMonster['life'];

    while ($firstMonsterLife > 0 && $secondMonsterLife > 0) {
        $firstMonsterLife = $firstMonsterLife - $secondMonster['strength'];
        $secondMonsterLife = $secondMonsterLife - $firstMonster['strength'];
    }

    if ($firstMonsterLife <= 0 && $secondMonsterLife <= 0) {
        $winner = null;
        $looser = null;
    } elseif ($firstMonsterLife <= 0) {
        $winner = $secondMonster;
        $looser = $firstMonster;
    } else {
        $winner = $firstMonster;
        $looser = $secondMonster;
    }

    return array(
        'winner' => $winner,
        'looser' => $looser,
    );
}
