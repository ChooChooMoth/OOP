
<?php
    class FightClub
    {
        private $data = array(); //место хранения перегружаемых данных
        private $mem0 = 'Cornelius';
        protected $mem1 = 'Tyler Durden';
        public $mem2='Robert Poulson';

        public function __call($name, $arguments) {
            echo "Вызов метода '$name' ". implode(', ', $arguments). "\n";
        }
        public function __set($name,$value)
        {
            echo "Установка $name в $value<br> ";
            $this->data[$name] = $value;
        }
        public function __get($name)
        {
            echo "Получение $name, это ";
                if (array_key_exists($name, $this->data)) {
                return $this->data[$name];
                    }            
        }
        public function getHidden() 
        {
            return $this->mem0;
        }
        public function __isset($name) 
        {
            echo "Установлено ли '$name'?<br>";
            return isset($this->data[$name]);
        }
        public function __unset($name) 
        {
            echo "Уничтожение '$name'<br>";
            unset($this->data[$name]);
        } 
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
        public function nameOfTheBoss($name)
        {
            echo "Our boss is $name";
        }

    }

$club = new FightCLub();

$club->spaceMonkey = 'Angel Face';
echo $club->spaceMonkey . "<br><br>";

var_dump(isset($club->spaceMonkey));
unset($club->spaceMonkey);
var_dump(isset($club->spaceMonkey));
echo "<br>";
echo "Давайте поэкспериментируем с private свойством :<br>";
echo "Private свойства видны внутри класса, поэтому __get() не используется...<br>";
echo $club->getHidden() . "<br>";
echo "Private свойства не видны вне класса, поэтому __get() используется...<br>";
echo $club->mem0 . "<br>";
$club->runTest('в контексте объекта');
?>
