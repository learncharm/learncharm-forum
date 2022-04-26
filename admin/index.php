<?php
    include "dbcon.php";
    include "header.php";
?>

<!-- form to add forum category -->
<div class="container">
    <h2 class="my-3">Add Category</h2>
<form method="post">
  <div class="mb-3">
    <label for="categoryname" class="form-label">Category Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="categoryName" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="categoryname" class="form-label">Subcategory</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="SubCategory" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Category Description</label>
    <textarea class="form-control" id="usertext" rows="4" name="categoryDesc"></textarea>
  </div>
  <button type="submit" class="btn btn-primary" name="addCategory">Add Category</button>
</form>
</div>

<!-- backend for add category -->
<?php

    if(isset($_POST['addCategory']))
    {
        $catname = $_POST['categoryName'];
        $subcat = $_POST['SubCategory'];
        $catdesc = $_POST['categoryDesc'];

        $que = "INSERT INTO forum_category(category_name,category_sub,category_desc) VALUES('$catname','$subcat','$catdesc')";
        $insque = mysqli_query($con,$que);

        if($insque){
            echo "<script>alert('Category Added Successfully!');</script>";
          }else {
          echo "<script>alert('Please Try Again!');</script>";
        }
    }
?>