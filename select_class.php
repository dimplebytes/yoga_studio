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

         <th>Id</th>
         <th>Class Name</th>
         <th>Description</th>
         <th>Couch Name</th>
         <th>Class Time</th>
         <th>Fees</th>
         <th>Max Group Count</th>
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
      <td><?php echo $data['name']??''; ?></td>
      <td><?php echo $data['descrition']??''; ?></td>
      <td><?php echo $data['couch_name']??''; ?></td>
      <td><?php echo $data['class_time']??''; ?></td>
      <td><?php echo $data['fees']??''; ?></td>
      <td><?php echo $data['max_group_count']??''; ?></td>
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
