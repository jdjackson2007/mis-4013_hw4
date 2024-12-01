<select class="form-select" id="EmployeeJobTitle<?php echo $employee['employee_id']; ?>" name="Employee_JobTitle" required>
  <option value="" disabled>Select Job Title</option>
  <?php while ($jobTitle = $JobTitleList->fetch_assoc()) { ?>
    <option value="<?php echo htmlspecialchars($jobTitle['Employee_JobTitle']); ?>" 
      <?php echo ($employee['Employee_JobTitle'] === $jobTitle['Employee_JobTitle']) ? 'selected' : ''; ?>>
      <?php echo htmlspecialchars($jobTitle['Employee_JobTitle']); ?>
    </option>
  <?php } ?>
</select>
