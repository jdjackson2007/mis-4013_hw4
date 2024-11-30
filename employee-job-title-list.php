<select class="form-select" id="EmployeeJobTitle" name="Employee_JobTitle">
    <?php 
        while ($jobTitle = $jobTitleList->fetch_assoc()) { ?>
            <option value="<?php echo $jobTitle['Employee_JobTitle']; ?>">
                <?php echo $jobTitle['Employee_JobTitle']; ?>
            </option>
    <?php 
        } 
    ?>
</select>
