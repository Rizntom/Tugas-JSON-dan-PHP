<title>Accessing the Decoded Values 2| Rizky Aji</title>
<p>umur </p>
<?php
$jsonobj = '{Ratna":15,"Ubis":17,"Poko":18}';

$arr = json_decode($jsonobj, true);

echo $arr["Ratna"];
echo $arr["Ubis"];
echo $arr["Poko"];
?>