<?php include('\includes\server.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>Log In</title>
</head>
<body>

    <div class="container">

       <div class="header">

          <h2>Log In</h2>

       </div>

       <form action="login.php" method="post">

          <div>

              <label for="username">Username : </label>
              <input type="text" name="username" required>

          </div>

          <div>

              <label for="password">Password : </label>
              <input type="password" name="password_1" required>

         </div>

          <button type="submit" name="login_user">Log In</button>

          <p>Not a user?<a href="signup.php"><b>Sign Up Here</b></a></p>

          </form>


  </div>

</body>
</html>
