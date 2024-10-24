<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Delete the record from the database
    $hapus = "DELETE FROM biodata WHERE id_biodata = ?";
    $stmt = $conn->prepare($hapus);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        header("Location: viewbiodata.php");
        exit();
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}
?>
