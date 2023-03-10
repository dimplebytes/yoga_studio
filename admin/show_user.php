<?php
include("./backend/get_class.php");
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="header-div">
            <div class="logo-div" id="logo-div">
                <h1>YOGA-Studio</h1>
            </div>

        </div>

<div class="container">
 <div class="row">
   <div class="col-sm-8">
    <?php echo $deleteMsg??''; ?>
    <div class="table-responsive">
      <table class="table table-bordered">
       <thead><tr><th>S.N</th>

         <th>id</th>
         <th>first_name</th>
         <th>last_name</th>
         <th>gender</th>
         <th>dob</th>
         <th>age</th>
         <th>address_1</th>
         <th>address_2</th>
         <th>city</th>
         <th>pin</th>
         <th>mobile</th>
         <th>email_id</th>
         <th>password</th>
         <th>created_ts</th>
         <th>updated_ts</th>
    </thead>
    <tbody>
  <?php
      if(is_array($fetchData)){
      $sn=1;
      foreach($fetchData as $data){
    ?>
      <tr>
      <td><?php echo $sn; ?></td>
      <td><?php echo $data['id']??''; ?></td>
      <td><?php echo $data['first_name']??''; ?></td>
      <td><?php echo $data['last_name']??''; ?></td>
      <td><?php echo $data['gender']??''; ?></td>
      <td><?php echo $data['dob']??''; ?></td>
      <td><?php echo $data['age']??''; ?></td>
      <td><?php echo $data['address_1']??''; ?></td>
      <td><?php echo $data['address_2']??''; ?></td>
      <td><?php echo $data['city']??''; ?></td>
      <td><?php echo $data['pin']??''; ?></td>
      <td><?php echo $data['mobile']??''; ?></td>
      <td><?php echo $data['email_id']??''; ?></td>
      <td><?php echo $data['password']??''; ?></td>
      <td><?php echo $data['created_ts']??''; ?></td>
      <td><?php echo $data['updated_ts']??''; ?></td>

     </tr>
     <?php
      $sn++;}}else{ ?>
      <tr>
        <td colspan="8">
    <?php echo $fetchData; ?>
  </td>
    <tr>
    <?php
    }?>
    </tbody>
     </table>
   </div>
</div>
</div>
</div>
</body>
</html>
