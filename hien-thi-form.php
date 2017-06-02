<html>
    <head>
        <title></title>
        <style>
            .login{
                background: coral;
                height: 200px;
                width: 400px;
            }
            .login input{
                margin-left: 75px;
            }
            h1{
                text-align: center;
            }
        </style>
    </head>
    <body>
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
        <div class="login">
            <h1>dang nhap</h1>
            <input type="text" name="username" placeholder="username"/><br>
            <input type="text" name="password" placeholder="password"/><br>
            <input type="submit" value="sign in"/>
        </div>
      </form>
      <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $username = $_POST["username"];
          $password = $_POST["password"];
          if ($username == "admin" && $password == "admin") {
              echo "<h2>chao mung <span style='color:blue'>" .$username. "</span> dang nhap thanh cong</h2>";
          } else{
              echo "<h2><span style='color:red'>loi dang nhap</span></h2>";
          }
      }
      ?>
    </body>
</html>