<?php
require "classes.php";

$w = new Widget([
	new Match(
		new Team("Moviestar riders","https://static.hltv.org/images/bigflags/30x20/RU.gif"),
		new Team("Ryzen","https://static.hltv.org/images/bigflags/30x20/RS.gif"),
		new Score(rand(0,10),rand(0,10))),
	new Match(
		new Team("Moviestar riders","https://static.hltv.org/images/bigflags/30x20/RU.gif"),
		new Team("Ryzen","https://static.hltv.org/images/bigflags/30x20/RS.gif"),
		new Score(rand(0,10),rand(0,10))),
	new Match(
		new Team("Moviestar riders","https://static.hltv.org/images/bigflags/30x20/RU.gif"),
		new Team("Ryzen","https://static.hltv.org/images/bigflags/30x20/RS.gif"),
		new Score(rand(0,10),rand(0,10))),
	new Match(
		new Team("Moviestar riders","https://static.hltv.org/images/bigflags/30x20/RU.gif"),
		new Team("Ryzen","https://static.hltv.org/images/bigflags/30x20/RS.gif"),
		new Score(rand(0,10),rand(0,10)))
]);

$w->render();



