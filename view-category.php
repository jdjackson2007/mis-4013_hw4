<div class="container">
  <div class="row align-items-center">
    <!-- Left Column: Heading -->
    <div class="col">
      <h1>Category</h1>
    </div>
    
    <!-- Right Column: Table -->
    <div class="col-auto">
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Description</th>
      <th>IsActive</th>
      </tr>
      <tbody>
<?php while ($category = $categories->fetch_assoc()) {
  ?>
  <tr>
   <td><?php echo $category ['Category_ID'];?></td>
   <td><?php echo $category ['Category_Name'];?></td>
   <td><?php echo $category ['Category_Description'];?></td>
   <td><?php echo $category ['Category_IsActive'];?></td>
   <td><a href="product-within-category.php? id= <?php echo $category['Category_ID']; ?>">Product</a></td>
  </tr>
  <?php
}
?>
      </tbody>
     </table>
</div>
