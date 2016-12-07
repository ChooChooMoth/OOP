<?php
    class FightClub
    {
        public $hc = 'New York';
        public $mem0 = 'Cornelius';
        public $mem1 = 'Tyler Durden';
        public $mem2 ='Robert Poulson';

        public function __construct($founder, $city){
            $this->mem0 = $founder;
            $this->hc = $city;
            echo "This FC founded by $this->mem0 in the $this->hc city";
        }
        public function showRules(){
            echo '  1st RULE: You do not talk about FIGHT CLUB.<br>

                    2nd RULE: You DO NOT talk about FIGHT CLUB.<br>

                    3rd RULE: If someone says "stop" or goes limp, taps out the fight is over.<br>

                    4th RULE: Only two guys to a fight.<br>

                    5th RULE: One fight at a time.<br>

                    6th RULE: No shirts, no shoes.<br>

                    7th RULE: Fights will go on as long as they have to.<br>

                    8th RULE: If this is your first night at FIGHT CLUB, you HAVE to fight.<br>';
        } 
    }

$club = new FightClub('Derrek', 'Amsterdam');