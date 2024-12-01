<button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editEmployeeModal<?php echo $employee['employee_id']; ?>">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
      <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
      <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
    </svg>
</button>

<div class="modal fade" id="editEmployeeModal<?php echo $employee['employee_id']; ?>" tabindex="-1" aria-labelledby="editEmployeeModalLabel<?php echo $employee['employee_id']; ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editEmployeeModalLabel<?php echo $employee['employee_id']; ?>">Edit Employee</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="employee.php">
          <div class="mb-3">
            <label for="EmployeeFirstName<?php echo $employee['employee_id']; ?>" class="form-label">First Name</label>
            <input type="text" class="form-control" id="EmployeeFirstName<?php echo $employee['employee_id']; ?>" name="Employee_FirstName" value="<?php echo htmlspecialchars($employee['Employee_FirstName']); ?>" required>
          </div>
          <div class="mb-3">
            <label for="EmployeeLastName<?php echo $employee['employee_id']; ?>" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="EmployeeLastName<?php echo $employee['employee_id']; ?>" name="Employee_LastName" value="<?php echo htmlspecialchars($employee['Employee_LastName']); ?>" required>
          </div>
          <div class="mb-3">
            <label for="EmployeeEmail<?php echo $employee['employee_id']; ?>" class="form-label">Email Address</label>
            <input type="email" class="form-control" id="EmployeeEmail<?php echo $employee['employee_id']; ?>" name="Employee_Email" value="<?php echo htmlspecialchars($employee['Employee_Email']); ?>" required>
          </div>
          <div class="mb-3">
            <label for="EmployeePhone<?php echo $employee['employee_id']; ?>" class="form-label">Phone Number</label>
            <?php 
              $PhoneList = selectPhone(); 
              include "employee-phone-list.php"; 
            ?>
          </div>
          <div class="mb-3">
            <label for="EmployeeHireDate<?php echo $employee['employee_id']; ?>" class="form-label">Hire Date</label>
            <input type="date" class="form-control" id="EmployeeHireDate<?php echo $employee['employee_id']; ?>" name="Employee_HireDate" value="<?php echo htmlspecialchars($employee['Employee_HireDate']); ?>" required>
          </div>
          <div class="mb-3">
            <label for="EmployeeJobTitle<?php echo $employee['employee_id']; ?>" class="form-label">Job Title</label>
            <?php 
              $JobTitleList = selectJobTitle(); 
              include "employee-job-title-list.php"; 
            ?>
          </div>
          <input type="hidden" name="employee_id" value="<?php echo $employee['employee_id']; ?>">
          <input type="hidden" name="actionType" value="Edit">
          <button type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>
