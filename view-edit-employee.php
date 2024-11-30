
<div class="modal fade" id="editEmployeeModal" tabindex="-1" aria-labelledby="editEmployeeModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editEmployeeModalLabel">Edit Employee</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="editEmployeeForm" action="update-employee.php" method="POST">
          <input type="hidden" name="Employee_ID" id="modalEmployeeID" />
          <div class="mb-3">
            <label for="modalEmployeeFirstName" class="form-label">First Name</label>
            <input type="text" class="form-control" id="modalEmployeeFirstName" name="Employee_FirstName" required />
          </div>
          <div class="mb-3">
            <label for="modalEmployeeLastName" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="modalEmployeeLastName" name="Employee_LastName" required />
          </div>
          <div class="mb-3">
            <label for="modalEmployeeEmail" class="form-label">Email</label>
            <input type="email" class="form-control" id="modalEmployeeEmail" name="Employee_Email" required />
          </div>
          
          <button type="submit" class="btn btn-primary">Save Changes</button>
        </form>
      </div>
    </div>
  </div>
</div>
