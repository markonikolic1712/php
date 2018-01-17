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
		echo "<div style='float: left;padding: 10px; border: 2px red solid'><img src='"
			 .$this->hTeam->flag."'> &nbsp;&nbsp;".$this->hTeam->name." : ".$this->score->home."<br>";
		echo "<img src='"
			 .$this->aTeam->flag."'> &nbsp;&nbsp;".$this->aTeam->name." : ".$this->score->away."</div>";
	}
}


$m = new Match(
	new Team("Moviestar riders","https://static.hltv.org/images/bigflags/30x20/RU.gif"),
	new Team("Ryzen","https://static.hltv.org/images/bigflags/30x20/RS.gif"),
	new Score(rand(0,10),rand(0,10))
);

$m->Show();






