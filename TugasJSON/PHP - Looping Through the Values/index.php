<title>Looping Through the Values| Rizky Aji</title>
<p>umur </p>
<?php
$jsonobj = '{"Ratna":15,"Ubis":17,"Poko":18}';

$obj = json_decode($jsonobj);

foreach($obj as $key => $value) {
  echo $key . " => " . $value . "<br>";
}
?>