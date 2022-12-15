<?php

        include("conn.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>select</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php
    $sql_provinces = "SELECT * FROM provinces";
    $query = mysqli_query($con, $sql_provinces);
?>

<div class="container">
  <h2>Form control: select by.devtai.com</h2>
  <p>code เลือกจังหวัด อำเภอ ตำบล php + mysqli + ajax + jquery + bootstrap :</p>
  <form>
    <div class="form-group">
      <label for="sel1">จังหวัด:</label>
      <select class="form-control" name="Ref_prov_id" id="provinces">
            <option value="" selected disabled>-กรุณาเลือกจังหวัด-</option>
             <?php foreach ($query as $value) { ?>
            <option value="<?=$value['id']?>"><?=$value['name_th']?></option>
            <?php } ?>
      </select>
      <br>

      <label for="sel1">อำเภอ:</label>
      <select class="form-control" name="Ref_dist_id" id="amphures">
      </select>
      <br>

      <label for="sel1">ตำบล:</label>
      <select class="form-control" name="Ref_subdist_id" id="districts">
      </select>
       <br>

      <label for="sel1">รหัสไปรษณีย์:</label>
       <input type="text" name="zip_code" id="zip_code" class="form-control">
          <br>
        <a href="https://devtai.com/?cat=38"> <button type="button" class="btn btn-primary btn-lg btn-block">Block level button</button></a>
    </div>
  </form>
</div>
</body>
</html>
<?php include('script.php');?>