<?php
include("dev.php");

?>


<!DOCTYPE html>
<html>
<head>
	<meta name="viewport"content="width=device-width-initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" /> 
  
</head>
<body>
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <img src="	https://www.sidmus.com/images/logo_3.png
" width="30" height="30" class="d-inline-block align-top" alt="">
    admin grid
  </a>
  
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
  <button type="button" class="btn btn-outline-success" onclick="location.href = 'add.html';">Add Manually</button>
</nav>
<div class="container">
 <div class="row">
   <div class="col-sm-5">
    <?php echo $deleteMsg??''; ?>
    <div >
      <table class="table table-hover">
       <thead><tr><th>ID</th>
         <th>Name</th>
         <th>Email</th>
         <th>subject</th>
         <th>Comment</th>
         <th>Date</th>
         <th>Action</th>
    </thead>
    <tbody>
  <?php
      if(is_array($fetchData)){      
      $id=1;
      foreach($fetchData as $data){
    ?>
      <tr>
      <td><?php echo $id; ?></td>
      <td><?php echo $data['name']??''; ?></td>
      <td><?php echo $data['email']??''; ?></td>
      <td><?php echo $data['subject']??''; ?></td>
      <td rows="8" cols="30"><?php echo $data['comment']??''; ?></td>
      <td><?php echo $data['Date']??''; ?></td> 
      <td class="action-list">
         <li><a href="edit.php?id=<?php echo $data["id"]; ?> " data-tip="edit"><i class="fa fa-edit"></i></a></li>
         <li><a href="delete.php?id=<?php echo $data['id']; ?>" data-tip="delete"><i class="fa fa-trash"></i></a></li>
      </td>
     </tr>
     <?php
      $id++;}}else{ ?>
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
	<script>
    window.setInterval('refresh()',360000); 	
 
    function refresh() {
        window .location.reload();
    }
</script>
	
</body>
</html>