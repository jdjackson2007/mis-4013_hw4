<?php
Require_Once("util-db.php");
  Require_Once("model-employee.php");
$pageTitle = "EMPLOYEE";
include "view-header.php";
if (isset($_POST['actionType'])) {
    try {
        switch ($_POST['actionType']) {
  case "add":
                
                $firstName = $_POST['Employee_FirstName'];
                $lastName = $_POST['Employee_LastName'];
                $email = $_POST['Employee_Email'];
                $phone = $_POST['Employee_Phone'];
                $hireDate = $_POST['Employee_HireDate'];
                $jobTitle = $_POST['Employee_JobTitle'];

                
                insertEmployee($firstName, $lastName, $email, $phone, $hireDate, $jobTitle);
                echo "Employee added successfully!";
                break;

            case "edit":
                
                $employeeID = $_POST['Employee_ID'];
                $firstName = $_POST['Employee_FirstName'];
                $lastName = $_POST['Employee_LastName'];
                $email = $_POST['Employee_Email'];
                $phone = $_POST['Employee_Phone'];
                $hireDate = $_POST['Employee_HireDate'];
                $jobTitle = $_POST['Employee_JobTitle'];

               
                updateEmployee($employeeID, $firstName, $lastName, $email, $phone, $hireDate, $jobTitle);
                echo "Employee updated successfully!";
                break;

            case "delete":
                
                $employeeID = $_POST['Employee_ID'];

               
                deleteEmployee($employeeID);
                echo "Employee deleted successfully!";
                break;

            default:
                echo "Invalid action type!";
        }
    } catch (Exception $e) {
        
        echo "Error: " . $e->getMessage();
    }
} else {
    echo "No action specified.";
}
?>
    }
  }
    
$employees = selectEmployee();
include "view-employee.php";
include "view-footer.php";
?>
