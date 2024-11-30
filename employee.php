<?php
Require_Once("util-db.php");
Require_Once("model-employee.php");
$pageTitle = "EMPLOYEE";
include "view-header.php";


$employees = selectEmployee();

include "view-footer.php";
?>
