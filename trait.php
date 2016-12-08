<?php
include_once('class.php');
trait boss
{
    public function nameOfTheBoss($name)
    {
        echo "Our boss is $name";
    }
}

$club = new FightClub();
$club->nameOfTheBoss($club->mem1);
?>