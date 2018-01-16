<?php
require "classes.php";

$mf = new Ship("Milleniym Falcon","http://hdamodelworx.com/assets/images/model%20kits/bandai/millennium%20falcon%20nonscale%20model%20bandai%20006/s-l1600%20(4).jpg",new Point(mt_rand(50,200),mt_rand(50,200)));
$mf->render();

$mxs = new Ship("Nebukadnezar","http://www.eds-online.net/designs/matrix/images/nebuchadnezzar.png",new Point(mt_rand(200,400),mt_rand(250,400)));
$mxs->render();