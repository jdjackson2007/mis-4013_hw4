<select class="form-select" id="EmployeePhone" name="Employee_Phone">
    <?php 
          while ($phone = $phoneList->fetch_assoc()) { ?>
              <option value="<?php echo $phone['Employee_Phone']; ?>">
            <?php echo $phone['Employee_Phone']; ?>
        </option>
    <?php
      }
    ?>
</select>
