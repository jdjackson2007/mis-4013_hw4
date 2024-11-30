<div class="row">
  <div class="col">
    <h1>Employee</h1>
  </div>
  <div class="auto-col">
    <?php 
    include 'view-employee-new.php'
    ?>
   
   <head>
     
   </head>
     
 
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

view-footer.php
</div>
  </body>
</html>
