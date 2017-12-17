<?php  
function genrateOdd(){
	return mt_rand(0, 100) / 10;
}
$odds = [
	"Manchester United - Liverpool" => [1=>["2.5"=>genrateOdd(),"3.0"=>genrateOdd(),"3.5"=>genrateOdd(),"4.0"=>genrateOdd()],2=>["2.5"=>genrateOdd(),"3.0"=>genrateOdd(),"3.5"=>genrateOdd(),"4.0"=>genrateOdd()]],
	"New Castle - Leeds" 		=> [1=>["3.15"=>genrateOdd(),"3.20"=>genrateOdd(),"3.30"=>genrateOdd(),"3.40"=>genrateOdd()],2=>["3.15"=>genrateOdd(),"3.20"=>genrateOdd(),"3.30"=>genrateOdd(),"3.40"=>genrateOdd()]],
]; 
/* YOUR CODE HERE */
