<?php 
    session_start();
    include_once "/storage/ssd2/294/22002294/public_html/connectionDataBase/config.php";
    include_once "/storage/ssd2/294/22002294/public_html/function/responses.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <style>
        html, body {
    overflow-x: hidden;
    }
            body{
            font-family: "Inter", sans-serif;
        }
        .obj1 {
    z-index: -1;
    width: 100%;
    background: white;
    color: white;
    border-bottom-left-radius: 210px;
    height: 30%;
    position: absolute;
    right: 0px;
    top: 0px;
    -webkit-box-shadow: 0px 21px 75px -12px rgba(0,0,0,0.37);
    -moz-box-shadow: 0px 21px 75px -12px rgba(0,0,0,0.37);
    box-shadow: 0px 21px 75px -12px rgba(0,0,0,0.37);
        }
form {
    width: 100%;
    position: absolute;
    bottom: 10%;
    z-index: 1;
    left: 50%;
    transform: translate(-50%, 0px);
}
        .title {
    text-shadow: 0px 0px 11px rgba(246, 216, 98, 0.32);
    color: #F6D862;
    font-weight: 700;
    font-size: 7vh;
    position: absolute;
    left: 50%;
    transform: translate(-50%, 0px);
    top: 10%;
    text-align: center;
}

.desc {
    z-index: 2;
    color: #F3F3F3;
    top: 30%;
    position: absolute;
    font-size: 25px;
    width: 90%;
    left: 50%;
    transform: translate(-50%, 0px);
}
.desc p{
    margin-top: -30px;
}
.input {
    font-weight: bold;
    text-align: center;
    font-size: 20px;
    width: 100%;
    max-width: 260px;
    height: 45px;
    padding: 12px;
    border-radius: 30px;
    border: 1.5px solid lightgrey;
    outline: none;
    transition: all 0.3s cubic-bezier(0.19, 1, 0.22, 1);
    box-shadow: 0px 0px 20px -18px;
    left: 50%;
    position: relative;
    transform: translate(-50%, 0px);
}

.input:hover {
  border: 2px solid lightgrey;
  box-shadow: 0px 0px 20px -17px;
}

.input:focus {
  border: 2px solid grey;
}
.action {
    width: 240px;
    position: relative;
    left: 50%;
    transform: translate(-50%,0%);
    display: flex;
    align-items: center;
    justify-content: center;
    bottom: -40px;
}
.action input {
    border-radius: 30px;
    background: none;
    border: 2px solid #F3F3F3;
    font-size: 20px;
    color: #F3F3F3;
    padding-top: 5px;
    padding-right: 20px;
    padding-bottom: 5px;
    padding-left: 20px;
    font-weight: bold;
    z-index: 10000001;
}
.action input:hover {
opacity: 0.7;
}
.options {
    max-width: 300px;
    z-index: 999999999;
    display: flex;
    left: 50%;
    position: absolute;
    top: 40%;
    width: 75%;
    transform: translate(-50%, 0px);
    justify-content: space-between;
    align-items: center;
    flex-wrap: nowrap;
}
.navgation img {
    width: 70px;
    border-radius: 20px;
    filter: drop-shadow(2px 12px 50px #f3f3f3);
}
span {
    font-size: 50px;
    position: relative;
    top: -20px;
}
.box {
    border: 1px solid;
    z-index: 999999;
    position: absolute;
    top: 28%;
    background: #f3f3f3;
    left: 60%;
    transform: translate(-50%, 0px);
    padding: 10px;
    width: 50%;
    max-width: 330px;
    height: 39px;
    border-radius: 53px;
}
.text p {
    font-weight: 700;
    font-size: 15px;
    text-align: center;
    position: absolute;
    bottom: -5px;
    width: 95%;
}
.countpays{
    z-index: 1;
    font-size: 90px;
    position: absolute;
    top: -90px;
    width: 150px;
    text-align: center;
    font-weight: 700;
    color: #f6d862;
}
.imggeneration img {
    position: absolute;
    left: -96px;
    width: 124px;
    z-index: 0;
    top: -61px;
}
.tarja {
    position: fixed;
    z-index: 10000000;
    bottom: -15px;
    width: 100%;
    height: 54px;
}

.box2 {
    font-size: 20px;
    display: flex;
    background: #ffffff;
    width: 80%;
    max-width: 300px;
    left: 50%;
    transform: translate(-50%, 0px);
    position: relative;
    bottom: -16px;
    padding: 10px;
    border-radius: 14px;
    justify-content: space-between;
    font-weight: 700;
    color: #757575;
}
.select {
    width: 90%;
    font-size: 20px;
    border: none;
    right: 0px;
    position: relative;
    outline: none;
    background: none;
    font-weight: 700;
    color: #757575;
}
.label {
    text-align: center;
    width: 60%;
    position: relative;
    bottom: -16px;
    left: 50%;
    margin-top: -7px;
    color: white;
    transform: translate(-50%, 0px);
}

    </style>
</head>
<body style='background: <?php echo $background?>'>
    


<div class='tela'>
    
<div class="obj1" style="background: <?php echo $object ?>;"></div>

<div class="title">
    Olá, <br> <span><?php echo $firstName?> </span>
</div>

<div class="box aopacity" style="background: <?php echo $object ?>; border: 1px solid <?php echo $border ?>;">

        <div class="imggeneration">
            <img src="<?php echo $img?>" alt="" class="atoleft">
        </div>
        <div class="text" style="color: <?php echo $color ?>;">
        <p>Preencha seus dados <br>corretamente!</p>
        </div>
</div>

<form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
    
    <p class="label">Sua chave pix:</p>
    <input type="text" placeholder="Chave Pix" name="uploadpixkey" class="input aopacity2" value="<?php echo $pixkey ?>">

    <p class="label">Seu nome:</p>
    <input type="text" placeholder="Nome completo" name="uploadname" class="input aopacity2" value="<?php echo $fullName ?>">
    
    <p class="label" style="margin-bottom: 3px;">Tipo de texto:</p>
    <div class="box2 aopacity2">
        <select name="humor" class="select">
            <option value="atual">Humor atual (<?php echo $atualhumor; ?>)</option>
            <option value="zero">Amigável</option>
            <option value="um">Irônico</option>
            <option value="dois">Sem frases</option>
        </select>
    </div>
    <br>
        <p class="label" style="margin-bottom: 3px;">Tema:</p>
        <div class="box2 aopacity2">
        <select name="uploadtheme" class="select">
            <option value="atual">Tema atual (<?php echo $atualtheme; ?>) </option>
            <option value="zero">Claro</option>
            <option value="um">Escuro</option>
        </select>
    </div>

<div class="action">
<a href="https://patopay.000webhostapp.com/home/">
<input type="button" value="Home">
</a>
<input type="submit" value="Atualizar" name="update" style="margin-left: 5px; background: #F6D862; color: <?php echo $button_color;?>;">
</div>

</form>


     
<div class='tarja' style='background: <?php echo $background?>'>
    <p> </p>
</div>
</div>
</body>
</html>