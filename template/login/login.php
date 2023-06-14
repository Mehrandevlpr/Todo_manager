<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="<?= basetemplateUrl('login/assets/css/style.css') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" sizes="192x192" type="image/x-icon" href="<?= baseUrl('favicon.ico') ?>">
    <title>Login</title>
</head>
<body>
<form class="login" action="<?= baseUrl('/') ?>" method="post">
  <input type="text" name="email" placeholder="Username">
  <input type="password" name="Password" placeholder="Password">
  <button name="submit" value="login" >Login</button>
  <a href="<?= baseUrl('login') ?>">Sing In</a>
</form>
</body>
</html>