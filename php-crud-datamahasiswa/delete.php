    

<?php

$connection = new mysqli("localhost", "id20061775_root", "?b23{U1W=w<hnz-X", "id20061775_note_app");

$id = $_POST['id'];

$result = mysqli_query($connection, "delete from note_app where id=".$id);

if($result){
    echo json_encode([
        'message' => 'Data delete successfully'
    ]);
}else{
    echo json_encode([
        'message' => 'Data Failed to delete'
    ]);
}