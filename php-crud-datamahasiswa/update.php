            

<?php

$connection = new mysqli("localhost", "id20061775_root", "?b23{U1W=w<hnz-X", "id20061775_note_app");
$nim      = $_POST['nim']; 
$nama    = $_POST['nama'];
$jeniskelamin    = $_POST['jeniskelamin'];
$email    = $_POST['email'];
$alamat    = $_POST['alamat'];
$id         = $_POST['id'];
    
$result = mysqli_query($connection, "update note_app set nim='$nim', nama='$nama', jeniskelamin='$jeniskelamin', email='$email', alamat='$alamat' where id='$id'");
    
if($result){
    echo json_encode([
        'message' => 'Data edit successfully'
    ]);
}else{
    echo json_encode([
        'message' => 'Data Failed to update'
    ]);
}