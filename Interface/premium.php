
<?php
require_once("../DataAccessLayer/conectionBD.php");
require_once("../BusinessLayer/User/UserService.php");

session_start();
$userService = new UserService($conexao);

// Obtenha os dados do perfil do usuário
$profileData = $userService->getUserProfile($_SESSION["id"]);
?>
					<script> alert($profileData)</script>
					<?php
// Define o conteúdo específico da página
ob_start(); // Inicia o buffer de saída
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');
:root{
  /*===== Colors =====*/
  --card-01-color-01: #ffb200;
  --card-01-color-02: #ff9700;
  --card-02-color-01: #96c110;
  --card-02-color-02: #80ad0a;
  --card-03-color-01: #64b2f2;
  --card-03-color-02: #489ed9;
  --card-body-bg-color: #fff;
  --text-disabled-color: #b2b2b2;
  --icon-disabled-color: #ff0404;
  --body-bg-color: #e5f6ff;
  /*===== Fonts =====*/
  --poppins-font: 'Poppins', sans-serif;
  --bebas-font: 'Bebas Neue', cursive;
}
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
body{
  background: var(--body-bg-color);
}
.main-container{
  position: relative;
  max-width: 900px;
  min-height: 100vh;
  margin-left: auto;
  margin-right: auto;
  padding: 0 2rem;
  display: flex;
  justify-content: center;
  align-items: center; 
}

.card-container{
  display: grid;
  width: 100%;
  grid-template-columns: repeat(auto-fill, minmax(230px, 1fr));
  gap: 40px;
  margin: 50px 0;
}
.pricing-card{
  position: relative;
}
.card-body{
  position: relative;
  width: 100%;
  background: var(--card-body-bg-color);
  border-radius: 0 0 10px 10px;
  box-shadow: 0 5px 25px rgb(0 0 0 / 20%);
  margin-top: 60px;
}
.card-body .top-shape{
  clip-path: polygon(0 0, 100% 0%, 100% 50%, 50% 75%, 0 50%);
  height: 200px;
}
.card-01 .card-body .top-shape{
  background: var(--card-01-color-01);
}
.card-02 .card-body .top-shape{
  background: var(--card-02-color-01);
}
.card-03 .card-body .top-shape{
  background: var(--card-03-color-01);
}
.card-body .top-shape:before{
  content: '';
  position: absolute;
  clip-path: polygon(0 0, 100% 0%, 100% 25%, 50% 50%, 0 25%);
  width: 100%;
  height: 200px;
}
.card-01 .card-body .top-shape:before{
  background: var(--card-01-color-02);
}
.card-02 .card-body .top-shape:before{
  background: var(--card-02-color-02);
}
.card-03 .card-body .top-shape:before{
  background: var(--card-03-color-02);
}
.pricing{
  z-index: 999;
  font-family: var(--bebas-font);
  text-align: center;
  position: absolute;
  width: 100%;
}
.price{
  display: flex;
  justify-content: center;
  margin-bottom: 3px;
}
.price span{
  font-size: 9em;
  line-height: 100px;
}
.price sup{
  font-size: 2em;
  transform: translateY(-15px);
}
.pricing p{
  font-family: var(--poppins-font);
  font-weight: 500;
  margin-bottom: 10px;
}
.pricing .type{
  text-transform: uppercase;
  font-size: 2.5em;
}
.card-body .card-content{
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  transform: translateY(-30px);
  text-align: center; 
}
.card-body .card-content ul{
  width: 100%;
  font-family: var(--poppins-font);
  text-align: center;
  margin-bottom: 20px;
  padding: 0 20px;
}
.card-body .card-content ul li{
  list-style: none;
  font-size: 0.95em;
  font-weight: 500;
  display: flex;
  justify-content: center;
  align-items: center;
  line-height: 35px;
  white-space: nowrap;
}
.card-body .card-content ul li i{
  font-size: 1.9em;
  margin-left: 15px;
}
.card-01 .card-body .card-content ul .active i{
  color: var(--card-01-color-01);
}
.card-02 .card-body .card-content ul .active i{
  color: var(--card-02-color-01);
}
.card-03 .card-body .card-content ul .active i{
  color: var(--card-03-color-01);
}
.card-body .card-content ul .disabled{
  color: var(--text-disabled-color);
}
.card-body .card-content ul .disabled i{
  color: var(--icon-disabled-color);
}
.card-content .buy-btn{
  font-family: var(--bebas-font);
  border: none;
  outline: none;
  padding: 0 28px;
  border-radius: 15px;
  text-transform: uppercase;
  font-size: 1.9em;
  cursor: pointer;
  margin-bottom: 40px;
}
.card-01 .card-content .buy-btn{
  background: linear-gradient(var(--card-01-color-01) 50%, var(--card-01-color-02) 50%);
}
.card-02 .card-content .buy-btn{
  background: linear-gradient(var(--card-02-color-01) 50%, var(--card-02-color-02) 50%);
}
.card-03 .card-content .buy-btn{
  background: linear-gradient(var(--card-03-color-01) 50%, var(--card-03-color-02) 50%);
}
.card-01 .card-content .buy-btn:hover{
  background: linear-gradient(var(--card-01-color-02) 50%, var(--card-01-color-01) 50%);
}
.card-02 .card-content .buy-btn:hover{
  background: linear-gradient(var(--card-02-color-02) 50%, var(--card-02-color-01) 50%);
}
.card-03 .card-content .buy-btn:hover{
  background: linear-gradient(var(--card-03-color-02) 50%, var(--card-03-color-01) 50%);
}
.ribbon{
  width: 110px;
  height: 110px;
  position: absolute;
  bottom: -10px;
  left: -10px;
  display: flex;
  justify-content: center;
  align-items: center;
  overflow: hidden;
}
.ribbon:before{
  content: 'Limited Time';
  display: flex;
  justify-content: center;
  align-items: center;
  font-family: var(--poppins-font);
  font-size: 0.8em;
  font-weight: 600;
  position: absolute;
  width: 150%;
  height: 30px;
  transform: rotate(45deg) translateY(15px);
}
.card-01 .ribbon:before{
  background: var(--card-01-color-01);
}
.card-02 .ribbon:before{
  background: var(--card-02-color-01);
}
.card-03 .ribbon:before{
  background: var(--card-03-color-01);
}
.ribbon:after{
  z-index: -1;
  content: '';
  position: absolute;
  width: 150%;
  height: 30px;
  transform: rotate(225deg) translateY(15px);
}
.card-01 .ribbon:after{
  background: var(--card-01-color-02);
}
.card-02 .ribbon:after{
  background: var(--card-02-color-02);
}
.card-03 .ribbon:after{
  background: var(--card-03-color-02);
}
@media screen and (max-width: 845px){
  .main-container{
    max-width: 680px;
  }  
  .pricing-card{
    margin: 20px 0;
  }
}
@media screen and (max-width: 575px){
  .main-container{
    max-width: 350px;
  }
}


</style>
  <body>
    <section class="main-container">
        <div class="card-container">
            <div class="pricing-card card-01">
                <div class="pricing">
                    <div class="price">
                        <sup> $ </sup> <span>12</span>
                    </div>
                    <p>/month</p> <span class="type">Premium</span>
                </div>
                <div class="card-body">
                    <div class="top-shape"></div>
                    <div class="card-content">
                  <form action="premiumcode.php" method="POST">
                        <ul>
                            <li class="active">Read Every Book. <i class="uil uil-check-circle"></i></li>
                            <li class="active">Watch Book`s Videos. <i class="uil uil-check-circle"></i></li>
                            <li class="active">24/7 Live Support. <i class="uil uil-check-circle"></i></li>
                            <!-- <li class="disabled">Lorem Ipsum Dolor. <i class="uil uil-times-circle"></i></li> -->
                            <!-- <li class="disabled">Lorem Ipsum Dolor. <i class="uil uil-times-circle"></i></li> -->
                        </ul> <button type="submit" id="butbtn" name="buybtn" class="buy-btn">Buy Now</button>
                   </form>
                    </div>
                </div>
                <div class="ribbon"></div>
            </div>

        </div>
    </section>
</body>

 
<?php
    $content = ob_get_clean(); // Obtém o conteúdo do buffer e limpa o buffer

    include('pageDefault2.php'); // Inclui o arquivo do template com o conteúdo especificado
?>