<title>Looping Through the Values 2 | Rizky Aji</title>
<p>umur </p>
<?php
$jsonobj = '{"Ratna":15,"Ubis":17,"Poko":18}';

$arr = json_decode($jsonobj, true);

foreach($arr as $key => $value) {
  echo $key . " => " . $value . "<br>";
}
?>