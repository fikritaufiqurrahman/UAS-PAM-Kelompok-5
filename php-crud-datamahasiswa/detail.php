

<?php 

$connection = new mysqli("localhost","id20061775_root","?b23{U1W=w<hnz-X","id20061775_note_app");
$data       = mysqli_query($connection, "select * from note_app where id=".$_GET['id']);
$data       = mysqli_fetch_array($data, MYSQLI_ASSOC);

echo json_encode($data);