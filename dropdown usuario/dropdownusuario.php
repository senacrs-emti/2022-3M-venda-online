<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dropdown Perfil</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="dropdownusuario.css" />
  </head>
  <body>
    <div class="profile-menu">
      <div class="action">
        <img src="images/profile.png" />
      </div>
      <div class="menu">
        <div class="profile">
          <img src="../imagens/profile.png" />
          <div class="info">
            <h2>tammy park</h2>
            <p>@tamp</p>
          </div>
        </div>
        <a href="#" class="btn">
          <img src="../imagens/plus.png" />
          Add profile
        </a>
        <ul>
          <li>
            <img src="../imagens/edit.png" />
            <a href="#">Edit profile</a>
          </li>
          <li>
            <img src="../imagens/setting.png" />
            <a href="#">App setting</a>
          </li>
          <li>
            <img src="../imagens/user.png" />
            <a href="#">Account</a>
          </li>
          <li>
            <img src="../imagens/help.png" />
            <a href="#">Help</a>
          </li>
          <li>
            <img src="../imagens/logout.png" />
            <a href="#">Log out</a>
          </li>
        </ul>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="dropdownusuario.js"></script>
  </body>
</html>
