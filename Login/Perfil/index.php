<?php

$email = $username = '';

session_start();

$email = $_SESSION['email'];
$username = $_SESSION['name'];

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: ../login.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/gremio.png">
    <title>Perfil</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="responsive.css">
    <link rel="stylesheet" href="fonts/remixicon.css">
</head>

<body>
    <span class="main_bg"></span>
    <div class="container">
        <header>
            <div class="brandLogo">
                <figure><img src="web_logo.jpg" alt="logo" width="40px" height="40px"></figure>
                <span>Adicionar Logo</span>
            </div>
        </header>

        <section class="userProfile card">
            <div class="profile">
                <figure><img src="images\anonimo.jpg" alt="foto de perfil" width="250px" height="250px"></figure>
            </div>
        </section>
        <section class="work_skills card">
            <div class="work">
                <h1 class="heading">Trabalho</h1>
                <div class="primary">
                    <h1>Email</h1>
                    <p><?php echo htmlspecialchars($email); ?></p>
                </div>

                <div class="secondary">
                    <h1>Telefone</h1>
                    
                    <p>51 99999-8888</p>
                </div>
            </div>

            <!-- ===== ===== Skills Contaienr ===== ===== -->
            <!-- <div class="skills">
                <h1 class="heading">Skills</h1>
                <ul>
                    <li style="--i:0">Android</li>
                    <li style="--i:1">Web-Design</li>
                    <li style="--i:2">UI/UX</li>
                    <li style="--i:3">Edição de video</li>
                </ul>
            </div> -->
        </section>


        <!-- ===== ===== User Details Sections ===== ===== -->
        <section class="userDetails card">
            <div class="userName">
                <h1 class="name"><?php echo htmlspecialchars($username); ?></h1>
                
            </div>
        </section>


        <!-- ===== ===== Timeline & About Sections ===== ===== -->
        <section class="timeline_about card">
            <div class="tabs">
                <ul>
                    <li class="about active">
                        <i class="ri-user-3-fill ri"></i>
                        <span>Meus Ingressos</span>
                    </li>
                </ul>
            </div>

            <div class="contact_Info">
                <h1 class="heading">Ingressos</h1>
                <ul>
                    <li class="ticketContainerLi">
                        <div class="ticketInfoContainer">
                        <h1 class="label">Grêmio x Real Madrid</h1><span>25/07</span>
                        </div>
                        <div class="ticketInfoContainer">
                            <span class="ticketInfo">Camarote: 3</span><span class="ticketInfo">21h30</span>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
    </div>

</body>

</html>
