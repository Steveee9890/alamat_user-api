<?php
  require_once('inc/open_connection.php');
  
  $id = $_POST['id'];

  $query = "DELETE FROM alamat_user WHERE id = '$id';";

  $query_run = mysqli_query($koneksi, $query);

  if ($query_run) {
        echo json_encode([
        "error" => false,
        "message" => 'Country has been successfully deleted!'
        ]);
    } else {
        echo json_encode([
        "error" => true,
        "message" => 'Country failed to be deleted!'
        ]);
    }

  require_once('inc/close_connection.php');
?>