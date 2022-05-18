<title>Accessing the Decoded Values| Rizky Aji</title>
<p>umur </p>
<?php
$jsonobj = '{"Ratna":15,"Ubis":17,"Poko":18}';

$obj = json_decode($jsonobj);

echo $obj->Ratna;
echo $obj->Ubis;
echo $obj->Poko;
?>