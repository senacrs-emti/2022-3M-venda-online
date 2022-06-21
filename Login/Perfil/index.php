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
                <figure><img src="gremio.png" alt="foto de perfil" width="250px" height="250px"></figure>
            </div>
        </section>
        <section class="work_skills card">
            <div class="work">
                <h1 class="heading">Trabalho</h1>
                <div class="primary">
                    <h1>Nome da empresa</h1>
                    <span>Principal</span>
                    <p>170 William Street <br> New York, NY 10038-212-315-51</p>
                </div>

                <div class="secondary">
                    <h1>Museu <br> Metropolitano</h1>
                    <span>Secundário</span>
                    <p>S34 E 65th Street <br> New York, NY 10651-78 156-187-60</p>
                </div>
            </div>

            <!-- ===== ===== Skills Contaienr ===== ===== -->
            <div class="skills">
                <h1 class="heading">Skills</h1>
                <ul>
                    <li style="--i:0">Android</li>
                    <li style="--i:1">Web-Design</li>
                    <li style="--i:2">UI/UX</li>
                    <li style="--i:3">Edição de video</li>
                </ul>
            </div>
        </section>


        <!-- ===== ===== User Details Sections ===== ===== -->
        <section class="userDetails card">
            <div class="userName">
                <h1 class="name">Seu nome</h1>
                <div class="map">
                    <i class="ri-map-pin-fill ri"></i>
                    <span>New York, NY</span>
                </div>
                <p>Designer de produtos</p>
            </div>

            <div class="rank">
                <h1 class="heading">Seu ranking</h1>
                <span>8,6</span>
                <div class="rating">
                    <i class="ri-star-fill rate"></i>
                    <i class="ri-star-fill rate"></i>
                    <i class="ri-star-fill rate"></i>
                    <i class="ri-star-fill rate"></i>
                    <i class="ri-star-fill rate underrate"></i>
                </div>
            </div>

            <div class="btns">
                <ul>
                    <li class="sendMsg">
                        <i class="ri-chat-4-fill ri"></i>
                        <a href="#">Enviar mensagem</a>
                    </li>

                    <li class="sendMsg active">
                        <i class="ri-check-fill ri"></i>
                        <a href="#">Contatos</a>
                    </li>

                    <li class="sendMsg">
                        <a href="#">Reportar Usuário</a>
                    </li>
                </ul>
            </div>
        </section>


        <!-- ===== ===== Timeline & About Sections ===== ===== -->
        <section class="timeline_about card">
            <div class="tabs">
                <ul>
                    <li class="timeline">
                        <i class="ri-eye-fill ri"></i>
                        <span>Linha do tempo</span>
                    </li>

                    <li class="about active">
                        <i class="ri-user-3-fill ri"></i>
                        <span>Sobre</span>
                    </li>
                </ul>
            </div>

            <div class="contact_Info">
                <h1 class="heading">Informações de contato</h1>
                <ul>
                    <li class="phone">
                        <h1 class="label">Telefone:</h1>
                        <span class="info">+11 234 567 890</span>
                    </li>

                    <li class="address">
                        <h1 class="label">Endereço:</h1>
                        <span class="info">S34 E 65th Street <br> New York, NY 10651-78 156-187-60</span>
                    </li>

                    <li class="email">
                        <h1 class="label">E-mail:</h1>
                        <span class="info">hello@rsmarquetech.com</span>
                    </li>

                    <li class="site">
                        <h1 class="label">Site:</h1>
                        <span class="info">www.rsmarquetech.com</span>
                    </li>
                </ul>
            </div>

            <div class="basic_info">
                <h1 class="heading">Informações básicas</h1>
                <ul>
                    <li class="birthday">
                        <h1 class="label">Aniversário:</h1>
                        <span class="info">Dez 25, 2000</span>
                    </li>

                    <li class="sex">
                        <h1 class="label">Gênero:</h1>
                        <span class="info">Masculino</span>
                    </li>
                </ul>
            </div>
        </section>
    </div>

</body>

</html>
