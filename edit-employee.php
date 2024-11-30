<?php

$employee_id = $_GET['id'];


$employee = getEmployeeById($employee_id);
?>
<form action="update-employee.php" method="POST">
    <input type="hidden" name="Employee_ID" value="<?php echo $employee['Employee_ID']; ?>" />
   
    <div class="mb-3">
        <label for="EmployeeFirstName" class="form-label">First Name</label>
        <input type="text" class="form-control" id="EmployeeFirstName" name="Employee_FirstName" value="<?php echo $employee['Employee_FirstName']; ?>" required>
    </div>

    

    <button type="submit" class="btn btn-primary">Update</button>
</form>
