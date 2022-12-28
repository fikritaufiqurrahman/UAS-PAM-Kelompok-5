        
        
<?php

    $connection = new mysqli("localhost", "id20061775_root", "?b23{U1W=w<hnz-X", "id20061775_note_app");
    $nim      = $_POST['nim']; 
    $nama    = $_POST['nama'];
    $jeniskelamin    = $_POST['jeniskelamin'];
    $email    = $_POST['email'];
    $alamat    = $_POST['alamat'];
    $date       = date('Y-m-d');
    
    $result = mysqli_query($connection, "insert into note_app set nim='$nim', nama='$nama', jeniskelamin='$jeniskelamin', email='$email', alamat='$alamat', date='$date'");
    
    if($result){
        echo json_encode([
            'message' => 'Data input successfully'
        ]);
    }else{
        echo json_encode([
            'message' => 'Data Failed to input'
        ]);
    }