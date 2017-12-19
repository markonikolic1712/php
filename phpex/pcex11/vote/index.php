<?php
$questions = [
	"1"=>[
		"question"=>"Who is best guitarist?",
		"answers"=>["Eric Clapton","Jimi Hendirx","Mike Oldfield"]
	],
	"5"=>[
		"question"=>"Who wrote book: Randezvous with Rama?",
		"answers"=>["Steve Wozniak","Arthur Clarke","Isaac Asimov","Rambo Amadeus"]
	],
	"10"=>[
		"question"=>"Who is best teacher?",
		"answers"=>["Vladimir Maric","Vladimir Maric","Vladimir Maric"]
	]
];   

function save($q, $a, $arr){
	$q = $pitanje;
	$a = $odgovor;
	$izlaz = "Question: ".$q."<br>Answer: ".$a;
	file_put_contents("answers.txt",$izlaz,FILE_APPEND);
}

function vote($arr){
	$indexPitanja = array_rand($arr,1);
	$pitanje = $arr[$indexPitanja]['question'];
	$q = $indexPitanja;
	echo "<h2>{$pitanje}</h2>";
	echo "<ul>";
	foreach ($arr[$indexPitanja]['answers'] as $key => $odgovor) {
		echo "<li><a href='{?q={$q}_a={$odgovor}}'>{$odgovor}</a></li>";
	}
	echo "</ul>";
}




vote($questions);


//print_r($indexPitanja);