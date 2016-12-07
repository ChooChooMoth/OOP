<?php
include_once('class.php');
trait memory
{
    public function nameOfTheBoss($name)
    {
        echo "Our boss is $name";
    }
}
    class ezcFightClub extends FightClub
    {
    	use memory;
        } 
$club = new ezcFightClub;
$club->nameOfTheBoss($club->mem1);
?>