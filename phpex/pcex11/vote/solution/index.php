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
function save($q,$a,$questions){
	$fullLine = $questions[$q]["question"] . " " . $questions[$q]["answers"][$a] . PHP_EOL;
	file_put_contents("answers.txt",$fullLine,FILE_APPEND);
}

function vote($questions){
	$questions_keys 	= array_keys($questions);
	$question_id 		= $questions_keys[mt_rand(0,count($questions_keys)-1)];
	$question 		= $questions[$question_id];
	echo "<h3>{$question['question']}</h3>";
	echo "<ul>";
	foreach($question["answers"] as $k=>$answer){
		echo "<a href='?q={$question_id}&a={$k}'><li>{$answer}</li></a>";
	} 
	echo "</ul>";
}

if(isset($_GET['q']) && isset($_GET['a'])){
	$q = $_GET['q'];
	$a = $_GET['a'];
	save($q,$a,$questions);
	echo "Question has been saved";
	return;
} 
vote($questions);
