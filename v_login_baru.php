<!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css" media="screen" title="no title">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
      <div class="login">

          <div class="avatar">
            <i class="fa fa-user"></i>
          </div>

          <h2>Login Form</h2>
          <form action="m_login.php" method="post">
          <div class="box-login">
            <i class="fas fa-envelope-open-text"></i>
            <input type="text" name="username_login">
          </div>

          <div class="box-login">
            <i class="fas fa-lock"></i>
            <input type="password" name="password_login">
          </div>

          <button type="submit" name="login" class="btn-login">Login</button>
          <div class="bottom">
          </form>
          </div>
      </div>
  </head>
  </html>