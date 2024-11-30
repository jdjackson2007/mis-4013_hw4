<?php
function selectEmployee() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT Employee_ID, Employee_FirstName,Employee_LastName,Employee_Email,Employee_Phone,Employee_HireDate,Employee_JobTitle FROM `mis-4013_hw3`.employee_table");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function insertEmployee($firstName, $lastName, $email, $phone, $hireDate, $jobTitle) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `mis-4013_hw3`.employee_table 
            (Employee_FirstName, Employee_LastName, Employee_Email, Employee_Phone, Employee_HireDate, Employee_JobTitle) 
            VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $firstName, $lastName, $email, $phone, $hireDate, $jobTitle);
        $stmt->execute();
        $conn->close();
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function updateEmployee($employeeID, $firstName, $lastName, $email, $phone, $hireDate, $jobTitle) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE `mis-4013_hw3`.employee_table 
            SET Employee_FirstName = ?, Employee_LastName = ?, Employee_Email = ?, Employee_Phone = ?, Employee_HireDate = ?, Employee_JobTitle = ?
            WHERE Employee_ID = ?");
        $stmt->bind_param("ssssssi", $firstName, $lastName, $email, $phone, $hireDate, $jobTitle, $employeeID);
        $stmt->execute();
        $conn->close();
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function deleteEmployee($employeeID) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM `mis-4013_hw3`.employee_table WHERE Employee_ID = ?");
        $stmt->bind_param("i", $employeeID);
        $stmt->execute();
        $conn->close();
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

?>
