<?php
$odds = array(
   array("Kilmarnock FC","Hibernian FC","0","2""11.0","1.0","7.0"),
   array("FC Basel","ZSKA Moskau","1","2","9.0","1.05","14.0"),
   array("Manchester U.","Benfica L.","2","0","15.0","1.0","23.0"),
   array("Celtic FC","Bayern München","1","2","25.0","1.1","14.0")
);

  echo "*************************************************************" . PHP_EOL;
  echo " home\t\taway\t\tscore\t1\t0\t2\n"
  echo "*************************************************************" . PHP_EOL;

foreach($odds as $match){
  echo $match[0]."\t{$match[1]}\t"$match[2].":$match[3]\t".$match[4]."\t{$match[5]}\t{$match[6]}".PHP_EOL;
}
  echo "*************************************************************" . PHP_EOL;
