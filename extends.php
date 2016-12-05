<?php
    include_once('class.php');

    class  ProjectMayhem extends FightClub
    {
    	protected $mem3='Jack';

    	public function __construct(){
    		echo '<br><br><br><br><br>Welcome to the project mayhem<br><br>';
    	}
    	public function projectMayhemRules()
    		{
    			echo "1st rule: You dont ask questions about Project Mayhem<br>
					  2nd rule: YOU DONT ASK QUESTIONS ABOUT PROJECT MAYHEM!<br>
					  3rd rule: No excuses.<br>
					  4th rule: No lies.<br>
					  5th rule: You have to trust $this->mem1 and join to the 	Fight Club<br>";
    		}
    	public static function projectMayhemRequirements()
    		{
    			echo '  
    					Two pairs of black shirts.<br>
    					Two pairs of black pants.<br>
    					One pair of combat boots.<br>
    					Two pairs of black socks.<br>
    					One black jacket.<br>
    					$300 personal burial money. ';
    		}

    }
    echo '<br><br><br>Here u can see the requirements:<br><br>';
    ProjectMayhem::projectMayhemRequirements();
    $mayhem = new ProjectMayhem;
    $mayhem->projectMayhemRules();
    ?>