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
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>
