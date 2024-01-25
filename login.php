<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HUNTER</title>
    <link rel="stylesheet" href="css/meuestilo.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="richtexteditor/richtexteditor/rte_theme_default.css" />
    <script type="text/javascript" src="richtexteditor/richtexteditor/rte.js"></script>
    <script type="text/javascript" src='richtexteditor/richtexteditor/plugins/all_plugins.js'></script>
    <script type='text/javascript' src="richtexteditor/richtexteditor/lang/rte-lang-pt.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0"/>
</head>
<body>
    <header>
        <div class="cabecalho">
            <div class="logo">
                <h1>HUNTER</h1>
            </div>
            <div class="logo2">
                <h2>Gestão de Demandas para TI</h2>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="header">
            <h2>LOGIN</h2>
        </div>

        <div id="login">
            <form class="form-box login" action="#" method="post">
                <div class="input-box">
                    <span class="material-symbols-outlined">person</span>
                    <label for="formBox">CPF</label>
                    <input type="text" name="cpf" id="cpf" required>
                </div>
                <div class="input-box">
                    <span class="material-symbols-outlined">key</span>
                    <label for="formBox">SENHA</label>
                    <input type="password" name="senha" id="senha" required>
                </div>
                <div class="form-group mx-pt-n5" id="btn">
                    <button type="submit" class="btn btn-primary">Entrar</button>
                    <button type="reset" class="btn btn-warning">Limpar</button>
                </div>

            </form>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>