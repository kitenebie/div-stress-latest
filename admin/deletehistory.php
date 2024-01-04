<?php
 include 'includes/config.php'; 
if (isset($_POST['delete'])) {
    $delete_ids = $_POST['delete_ids'];
    if (!empty($delete_ids)) {
        $delete_ids_str = implode(',', $delete_ids);
        $delete_query = "DELETE FROM tbl_registrar WHERE id IN ($delete_ids_str)";
        
        if (mysqli_query($conn, $delete_query)) {
            echo "Selected records deleted successfully.";
        } else {
            echo "Error deleting records: " . mysqli_error($conn);
        }
    }
}

mysqli_close($conn);
?>