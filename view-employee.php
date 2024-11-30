<div class = "row">
  <div class = "col">
    <h1>Employee</h1>
  </div>
  <div class = "auto-col">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3z"/>
</svg>
  </div>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>Employee ID</th>
        <th>Employee First Name</th>
      <th>Vendor Employee Last Name</th>
        <th>Employee Email</th>
      <th>Employee Phone</th>
      <th>Employee Hire Date</th>
        <th>Employee Job Title</th>
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
  </tr>
  <?php
}
?>
      </tbody>
     </table>
</div>
