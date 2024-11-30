<td>
  <button 
    type="button" 
    class="btn btn-warning" 
    data-bs-toggle="modal" 
    data-bs-target="#editEmployeeModal" 
    onclick="populateEditForm(
      '<?php echo $employee['Employee_ID']; ?>', 
      '<?php echo $employee['Employee_FirstName']; ?>', 
      '<?php echo $employee['Employee_LastName']; ?>', 
      '<?php echo $employee['Employee_Email']; ?>'
      '<?php echo $employee['Employee_Phone']; ?>'
      '<?php echo $employee['Employee_HireDate']; ?>'
      '<?php echo $employee['Employee_JobTitle']; ?>
    )">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
      <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
      <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
    </svg>
  </button>
</td>

<div class="modal fade" id="editEmployeeModal" tabindex="-1" aria-labelledby="editEmployeeModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editEmployeeModalLabel">Edit Employee</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="editEmployeeForm" action="update-employee.php" method="POST">
          <input type="hidden" name="Employee_ID" id="EmployeeID" />
          <div class="mb-3">
            <label for="EmployeeFirstName" class="form-label">First Name</label>
            <input type="text" class="form-control" id="EmployeeFirstName" name="Employee_FirstName" required />
          </div>
          <div class="mb-3">
            <label for="EmployeeLastName" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="EmployeeLastName" name="Employee_LastName" required />
          </div>
          <div class="mb-3">
            <label for="EmployeeEmail" class="form-label">Email</label>
            <input type="email" class="form-control" id="EmployeeEmail" name="Employee_Email" required />
          </div>
           <div class="mb-3">
        <label for="EmployeePhone" class="form-label">Phone Number</label>
        <input type="tel" class="form-control" id="EmployeePhone" name="Employee_Phone" required>
    </div>
    <div class="mb-3">
        <label for="EmployeeHireDate" class="form-label">Hire Date</label>
        <input type="date" class="form-control" id="EmployeeHireDate" name="Employee_HireDate" required>
    </div>
    <div class="mb-3">
        <label for="EmployeeJobTitle" class="form-label">Job Title</label>
        <input type="text" class="form-control" id="EmployeeJobTitle" name="Employee_JobTitle" required>
    </div>
          
          <button type="submit" class="btn btn-primary">Save Changes</button>
        </form>
      </div>
    </div>
  </div>
</div>
