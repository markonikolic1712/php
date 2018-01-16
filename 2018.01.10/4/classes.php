<?php
class Team {
	public $name;
	public $flag;
	public function __construct($name,$flag){
		$this->name = $name;
		$this->flag = $flag;
	}
}
class Score {
	public $home;
	public $away;
	public function __construct($home,$away){
		$this->home = $home;
		$this->away = $away;
	}
}
class Match {
	public $hTeam;
	public $aTeam;
	public $score;
	public function __construct(Team $hTeam,Team $aTeam,Score $score){
		$this->hTeam = $hTeam;
		$this->aTeam = $aTeam;
		$this->score = $score;			
	}
	function Show(){
		echo "<div style='float:left; width: 200px; left;padding: 10px; border: 2px red solid'>";
		echo "<img src='{$this->hTeam->flag}' /> {$this->hTeam->name} {$this->score->home}<br>";
		echo "</div>";
		echo "<div style='float:both; width: 200px; left;padding: 10px; border: 2px red solid'>";
		echo "<img src='{$this->aTeam->flag}' /> {$this->aTeam->name} {$this->score->away}<br>";
		echo "</div>";
	}
}
class Widget {
	public $matches = [];
	public function __construct($matches){
		$this->matches = $matches;
	}
	function render(){
		foreach($this->matches as $match){
			$match->Show();
		}
	}
}