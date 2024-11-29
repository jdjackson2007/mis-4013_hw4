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
        $stmt = $conn->prepare("INSERT INTO employee_table (Employee_FirstName, Employee_LastName, Employee_Email, Employee_Phone, Employee_HireDate, Employee_JobTitle)
        VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $firstName, $lastName, $email, $phone, $hireDate, $jobTitle);
        $stmt->execute();
        $result = $stmt->affected_rows; 
        $stmt->close();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        if ($conn) {
            $conn->close();
        }
        throw $e; 
    }
}
function updateEmployee($employeeId, $firstName, $lastName, $email, $phone, $hireDate, $jobTitle) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE employee_table 
                                SET Employee_FirstName = ?, Employee_LastName = ?, Employee_Email = ?, Employee_Phone = ?, Employee_HireDate = ?, Employee_JobTitle = ?
                                WHERE Employee_ID = ?");
        $stmt->bind_param("ssssssi", $firstName, $lastName, $email, $phone, $hireDate, $jobTitle, $employeeId);
        $stmt->execute();
        $result = $stmt->affected_rows; 
        $stmt->close();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        if ($conn) {
            $conn->close();
        }
        throw $e;
    }
}
function deleteEmployee($employeeId) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM employee_table WHERE Employee_ID = ?");
        $stmt->bind_param("i", $employeeId); 
        $stmt->execute();
        $result = $stmt->affected_rows; 
        $stmt->close();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        if ($conn) {
            $conn->close();
        }
        throw $e;
    }
}



?>
