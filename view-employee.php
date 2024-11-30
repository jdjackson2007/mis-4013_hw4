<div class="row">
  <div class="col">
    <h1>Employee</h1>
  </div>
  <div class="auto-col">
    <?php include "view-employee-new.php"; ?>
  </div>
</div>

<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>Employee ID</th>
        <th>Employee First Name</th>
        <th>Employee Last Name</th>
        <th>Employee Email</th>
        <th>Employee Phone</th>
        <th>Employee Hire Date</th>
        <th>Employee Job Title</th>
        <th>Actions</th> 
      </tr>
    </thead>
    <tbody>
      <?php while ($employee = $employees->fetch_assoc()) { ?>
        <tr>
          <td><?php echo $employee['Employee_ID']; ?></td>
          <td><?php echo $employee['Employee_FirstName']; ?></td>
          <td><?php echo $employee['Employee_LastName']; ?></td>
          <td><?php echo $employee['Employee_Email']; ?></td>
          <td><?php echo $employee['Employee_Phone']; ?></td>
          <td><?php echo $employee['Employee_HireDate']; ?></td>
          <td><?php echo $employee['Employee_JobTitle']; ?></td>
         <td>
  <a href="edit-employee.php?id=<?php echo $employee['Employee_ID']; ?>" class="btn btn-warning">Edit</a>
  <a href="delete-employee.php?id=<?php echo $employee['Employee_ID']; ?>" 
     class="btn btn-danger" 
     onclick="return confirm('Are you sure you want to delete this employee?');">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash-circle-fill" viewBox="0 0 16 16">
      <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M4.5 7.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1z"/>
    </svg>
  </a>
</td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>
