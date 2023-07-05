<?php

class RankingTable {
    private $players;
    private $results;

    public function __construct($players) {
        $this->players = $players;
        $this->results = array();
    }

    public function playerRank($rank) {
        arsort($this->results);
        $rankedPlayers = array_keys($this->results);
        $playerCount = count($rankedPlayers);
        if ($rank <= $playerCount) {
            return $rankedPlayers[$rank - 1];
        }
        return null; // Rank jest większy niż liczba graczy
    }

    public function recordResult($player, $score) {
        $this->results[$player] = $score;
    }
}

$table = new RankingTable(array('Jan', 'Maks', 'Monika'));
$table->recordResult('Jan', 2);
$table->recordResult('Maks', 3);
$table->recordResult('Monika', 5);
echo $table->playerRank(1);

?>