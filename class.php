
<?php
    class FightClub
    {
        use boss;
        public $mem0 = 'Cornelius';
        public $mem1 = 'Tyler Durden';
        public $mem2='Robert Poulson';

        public function __construct(){
            echo 'Welcome to the Fight Club<br><br>';
        }
        public function rules(){
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

$club = new FightCLub('arg1','arg2');
echo 'Here is the rules of the FC<br><br> '; 
$club->rules();
?>
