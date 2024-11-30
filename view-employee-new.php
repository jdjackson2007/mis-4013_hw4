 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
      <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3z"/>
 </svg>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newEmployeeModal">
   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
      <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3z"/>
   </svg>
</button>


<div class="modal fade" id="newEmployeeModal" tabindex="-1" aria-labelledby="newEmployeeModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="newEmployeeModalLabel">New Employee</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
  <div class="mb-3">
   <form method = "post" action ="">
    <div class="mb-3">
        <label for="EmployeeFirstName" class="form-label">First Name</label>
        <input type="text" class="form-control" id="EmployeeFirstName" name="Employee_FirstName" required>
    </div>
    <div class="mb-3">
        <label for="EmployeeLastName" class="form-label">Last Name</label>
        <input type="text" class="form-control" id="EmployeeLastName" name="Employee_LastName" required>
    </div>
    <div class="mb-3">
        <label for="EmployeeEmail" class="form-label">Email Address</label>
        <input type="email" class="form-control" id="EmployeeEmail" name="Employee_Email" aria-describedby="emailHelp" required>
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
    <button type="submit" class="btn btn-primary">Save</button>
</form>

  </div>
  <div class="mb-3">
    <label for= <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>"exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
      </div>
    </div>
  </div>
</div>
