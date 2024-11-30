<?php
Require_Once("util-db.php");
Require_Once("model-employee.php");
$pageTitle = "EMPLOYEE";
include "view-header.php";

if (isset([$_POST 'actionType']){
    switch ($_Post 'actionType') {
    case "Add" :
        insertEmployee($_Post['$firstName'],$_Post ['$lastName'], $_Post['$email'], $_Post['$phone'], $_Post['$hireDate'], $_Post['$jobTitle']
                       Break;
    }
}
$employees = selectEmployee();
include "view-employee.php";
include "view-footer.php";
?>
