<?php
function selectProductWithinCategory($cid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT Product_ID,Category_ID,Product_Name,Product_Description,Product_Quanity,Product_Price FROM `mis-4013_hw3`.product_table WHERE Category_ID=?");
         $stmt->bind_param("i", $cid);
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
