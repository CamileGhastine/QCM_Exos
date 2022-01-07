<?php

class Yam
{
    private array $diceRoll;

    /**
     * # rollDice : roll randomly 5 dices X times 
     *
     * @param integer $numberOfThrow
     * 
     * @return array
     */
    public function rollDice(int $numberOfThrow): array
    {
        $diceRoll = [];

        for ($j = 1; $j <= $numberOfThrow; $j++) {

            $oneRoll = [];

            for ($i = 1; $i <= 5; $i++) {
                $oneRoll[] = rand(1, 6);
            }

            $diceRoll[] = $oneRoll;
        }
        return $diceRoll;
    }

    public function countYam(array $rollDice): int
    {
        $count = 0;

        foreach ($rollDice as $oneRoll) {
            for($i=0; $i<5; $i++) {
                if (isset(array_count_values($oneRoll)[$i]) && array_count_values($oneRoll)[$i] === 5) $count++;
            }
            
        }

        return $count;
    }

    public function countFourOfAKinD(array $rollDice): int
    {
    }

    public function countThreeOfAKind(array $rollDice): int
    {
    }
}

$a = new Yam;
var_dump($a->countYam($a->rollDice(1000)));
