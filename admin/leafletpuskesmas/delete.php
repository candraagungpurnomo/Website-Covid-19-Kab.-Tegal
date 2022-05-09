<?php
$conn = mysqli_connect("localhost","root","","websitekabupatentegal");
$delete = mysqli_query($conn,"DELETE FROM puskesmas WHERE id = '$_GET[id]'");
if ($delete)
include "tabeldata.php";
?>