<?php

$players = array(
	array("name"=>"Peter",	"hero"=>"akali",	"position"=>"right",	"lane"=>"mid"),
	array("name"=>"Sally",	"hero"=>"fiddlesticks",	"position"=>"left",	"lane"=>"top"),
	array("name"=>"John",	"hero"=>"nautilus",	"position"=>"left",	"lane"=>"bot"),
	array("name"=>"Jessie",	"hero"=>"gankplank",	"position"=>"right",	"lane"=>"top"),
	array("name"=>"Charlie","hero"=>"xin",		"position"=>"right",	"lane"=>"bot"),
	array("name"=>"Robert",	"hero"=>"ahri",		"position"=>"left",	"lane"=>"mid"),
	array("name"=>"John",	"hero"=>"ahri",		"position"=>"left",	"lane"=>"mid"),
	array("name"=>"Hsskdl",	"hero"=>"axin",		"position"=>"right",	"lane"=>"top"),
	array("name"=>"Peter",	"hero"=>"nautilus",		"position"=>"left",	"lane"=>"bot")
);  

?>
	<table border="1">
		<thead>
			<tr>
				<th colspan="4">Tabela</th>
			</tr>
		</thead>
		<tbody>
			<tr>
			<?php 
			$i = 0;
			foreach($players as $igrac){
				foreach ($igrac as $key => $value) {
					$i++;
					if($i<count($igrac)+1){
					?>
					<th><?=$key?></th>
				<?php 
					}
				}
			}
			?>
			<tr>
			<?php
			foreach($players as $igrac){
				foreach($igrac as $key => $td){
					?>
				<td><?=$td?></td>
			<?php }?>
			</tr>
		</tbody>
	<?php } ?>
	</table>

