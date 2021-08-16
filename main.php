<?php
  require "header.php";
  include 'connect.php';
  if(isset($_POST['register-submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['pwd'];

    $sql = "INSERT INTO crud (name, email, mobile, password) VALUES ('$name','$email','$mobile','$password')";
    $result = mysqli_query($con,$sql);
    if ($result) {
      header('Location:login.php?status=registersuccess');
    }
    else {
      die(mysqli_error($con));
    }
  }
?>

  <body>
    <div class="container">
      <h2 class="my-5">User Data Register</h2>
      <form method ="post">
        <div class="mb-3 my-4">
          <label class="form-label">Name</label>
          <input type="text" class="form-control" name="name">
          <label class="form-label">Email</label>
          <input type="text" class="form-control" name="email">
          <label class="form-label">Mobile</label>
          <input type="text" class="form-control" name="mobile">
          <label class="form-label">Password</label>
          <input type="password" class="form-control" name="pwd">
        </div>
        <button type="submit" class="btn btn-primary" name='register-submit'>Register</button>
      </form>
    </div>
  </body>
</html>
