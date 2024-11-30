
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
