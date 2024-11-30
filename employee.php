<?php
Require_Once("util-db.php");
Require_Once("model-employee.php");
$pageTitle = "EMPLOYEE";
include "view-header.php";

if (isset([$_POST 'actionType']){
    switch ($_Post 'actionType') {
    case "ADD" 
    }
}
$employees = selectEmployee();
include "view-employee.php";
include "view-footer.php";
?>
