<title>json_decode 2 | Rizky Aji</title>
<p>umur </p>
<?php
$jsonobj = '{"Ratna":15,"Ubis":17,"Poko":18}';

var_dump(json_decode($jsonobj, true));
?>