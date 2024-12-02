<select class="form-select" id="EmployeePhone<?php echo $employee['employee_id']; ?>" name="Employee_Phone" required>
  <option value="" disabled>Select Phone Number</option>
  <?php while ($phone = $PhoneList->fetch_assoc()) { ?>
    <option value="<?php echo htmlspecialchars($phone['Employee_Phone']); ?>" 
      <?php echo ($employee['Employee_Phone'] === $phone['Employee_Phone']) ? 'selected' : ''; ?>>
      <?php echo htmlspecialchars($phone['Employee_Phone']); ?>
    </option>
  <?php } ?>
</select>

