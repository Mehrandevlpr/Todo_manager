<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="<?= basetemplateUrl('login/assets/css/style.css') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" sizes="192x192" type="image/x-icon" href="<?= baseUrl('favicon.ico') ?>">
    <title>Register</title>
</head>
<body>
<form class="login" action="<?= baseUrl('login') ?>" method="post">
  <input type="text" name="email" placeholder="Email">
  <input type="text" name="username" placeholder="Username">
  <input type="password" name="password" placeholder="Password">
  <input type="file" class="profile" name="profile" >
  <button  name="submit"  value="register" >Register</button>
  <a class="link" href="<?= baseUrl('login') ?>">log In</a>
</form>

</body>
</html>