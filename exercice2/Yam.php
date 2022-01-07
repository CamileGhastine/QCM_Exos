<?php

class Yam
{
    private array $diceRoll;

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
    }

    public function countFourOfAKinD(array $rollDice): int
    {
    }

    public function countThreeOfAKind(array $rollDice): int
    {
    }
}

$a = new Yam;
var_dump($a->rollDice(2));
