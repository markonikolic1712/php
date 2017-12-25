<?php
$conn = mysqli_connect("127.0.0.1","root","","mysite"); 
$res = mysqli_query($conn,"select * from news"); 
$news = [];
while($rw=mysqli_fetch_assoc($res)){
  $rw['content'] = substr($rw['content'],0,200) . "...";
  $news[] = $rw; 
}
shuffle($news);

echo "<div style='width:200px;border:1px solid blue;'>";
foreach($news as $article){
	echo "<div style='border:1px solid red;padding:4px;margin:4px;'><h3 style='margin:10px;'>{$article['title']}</h3><p>{$article['content']}</p></div>";
}
echo "</div>";
