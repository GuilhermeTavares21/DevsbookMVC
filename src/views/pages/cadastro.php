<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Cadastro - Devsbook</title>
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1"/>
    <link rel="stylesheet" href="<?=$base;?>/assets/css/login.css" />
</head>
<body>
    <header>
        <div class="container">
            <a href=""><img src="<?=$base;?>/assets/images/devsbook_logo.png" /></a>
        </div>
    </header>
    <section class="container main">
        
        <?php if(!empty($flash)): ?>
            <div class="flash"> <?php echo $flash; ?> </div>
        <?php endif; ?>
    
        <form method="POST" action="<?=$base;?>/login">
            <input placeholder="Digite seu nome completo" class="input" type="text" name="name" />

            <input placeholder="Digite seu e-mail" class="input" type="email" name="email" />

            <input placeholder="Digite sua senha" class="input" type="password" name="password" />

            <input placeholder="Digite sua data de nascimento" id="birthdate" class="input" type="text" name="birthdate" />

            <input class="button" type="submit" value="Cadastrar" />

            <a href="<?=$base;?>/login">Já tem o cadastro? Faça o login</a>
        </form>
    </section>


    <script src="https://unpkg.com/imask"></script>
    <script>
        IMask(
            document.getElementById('birthdate'),
            {
                mask:'00/00/0000'
            }
        );
    </script>
</body>
</html>