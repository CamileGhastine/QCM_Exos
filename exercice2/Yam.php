<?php

/**
 * This file is a class which can be use to simulate the Yam game.
 */

/**
 * # Class Yam
 * *Simulate the yam game
 * *count the result of different combinaison for a certain number of rolls
 * 
 * @author Camile Ghastine <camile@camile.com>
 */
class Yam
{
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

    /**
     * countYam : count the number of yam for all the dice rolls
     *
     * @param array $rollDice
     * 
     * @return integer
     */
    public function countYam(array $rollDice): int
    {
        $count = 0;

        foreach ($rollDice as $oneRoll) {
            for ($i = 0; $i < 5; $i++) {
                if (isset(array_count_values($oneRoll)[$i]) && array_count_values($oneRoll)[$i] === 5) $count++;
            }
        }

        return $count;
    }

    /**
     * countFourOfAKinD : count the number of four of a kind (4 same dices) for all the dice rolls
     *
     * @param array $rollDice
     * 
     * @return integer
     */
    public function countFourOfAKinD(array $rollDice): int
    {
        $count = 0;

        foreach ($rollDice as $oneRoll) {
            for ($i = 0; $i < 5; $i++) {
                if (isset(array_count_values($oneRoll)[$i]) && array_count_values($oneRoll)[$i] === 4) $count++;
            }
        }

        return $count;
    }

    /**
     * countFourOfAKinD : count the number of three of a kind (3 same dices) for all the dice rolls
     *
     * @param array $rollDice
     * @return integer
     */
    public function countThreeOfAKind(array $rollDice): int
    {
        $count = 0;

        foreach ($rollDice as $oneRoll) {
            for ($i = 0; $i < 5; $i++) {
                if (isset(array_count_values($oneRoll)[$i]) && array_count_values($oneRoll)[$i] === 3) $count++;
            }
        }

        return $count;
    }
}
