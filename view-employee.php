<div class="container">
  <div class="row align-items-center">
    <div class="col">
      <h1>Employee</h1>
    </div>
    <div class="col-auto right-content">
      <?php include 'view-new-employee.php'; ?>
    </div>
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
        <th></th>
        <th></th>
        <th></th>
      </tr>
     
 
      <tbody>
<?php while ($employee = $employees->fetch_assoc()) {

  ?>
  <tr>
   <td><?php echo $employee ['Employee_ID'];?></td>
   <td><?php echo $employee ['Employee_FirstName'];?></td>
   <td><?php echo $employee ['Employee_LastName'];?></td>
   <td><?php echo $employee ['Employee_Email'];?></td>
   <td><?php echo $employee ['Employee_Phone'];?></td>
   <td><?php echo $employee ['Employee_HireDate'];?></td>
   <td><?php echo $employee ['Employee_JobTitle'];?></td>
    <td>
       <?php include 'view-edit-employee.php'; ?>
    </td>
   <td>
    <form method="POST" action="employee.php" style="display:inline;">
        <input type="hidden" name="actionType" value="delete">
        <input type="hidden" name="Employee_ID" value="<?php echo $employee['Employee_ID']; ?>">
        <button type="submit" class="btn btn-danger btn-sm" title="Delete Employee">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708" />
            </svg>
        </button>
    </form>
</td>

  
    
  </tr>
  <?php
}
?>
      </tbody>
     </table>
</div>
