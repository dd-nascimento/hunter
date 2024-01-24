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
        
        <nav class="navbar navbar-expand-lg">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="novoChamado.php">Novo Chamado</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="container">
        <div>
            <h1 class="display-4">Novo Chamado</h1>
        </div>

        <form>
            <div class="form-group">
                <label>Tipo de Requisição</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected> </option>
                    <option value="Requisicao">Requisição</option>
                    <option value="Incidente">Incidente</option>
                </select>
                <small id="emailHelp" class="form-text text-muted">Tipo da Requisição.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputText"> ID Usuário </label>
                <input type="text" class="form-control" placeholder="Código do Usuário">
            </div>
            <div class="form-group">
                <label> Serviço </label>
                <select class="form-select" aria-label="Default select example">
                    <option selected> </option>
                </select>
                <small id="emailHelp" class="form-text text-muted"> Qual o serviço da requisição? </small>
            </div>
            <div class="form-group">
                <label> Nível de Atendimento </label>
                <select class="form-select" aria-label="Default select example">
                    <option selected> </option>
                </select>
                <small id="emailHelp" class="form-text text-muted"> Nível da equipe que realizará o atendimento. </small>
            </div>
            <div class="form-group">
                <label> Técnico(a) </label>
                <select class="form-select" aria-label="Default select example">
                    <option selected> </option>
                </select>
                <small id="emailHelp" class="form-text text-muted"> Técnico(a) que atenderá o chamado. </small>
            </div>
            <div class="form-group">
                <label for="exampleInputText"> Título do Chmado </label>
                <input type="text" class="form-control" placeholder="Título do Chamado">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Descrição do Chamado</label>
                <div class="mb-3" id="div_editor1">
                </div>
            </div>
            
            <div class="form-group">
                <label for="exampleInputText"> Origem da Requisição </label>
                <input type="text" class="form-control" placeholder="Origem da Requisição">
            </div>
            <div class="form-group fim">
                <button type="submit" class="btn btn-primary">Abrir Chamado</button>
                <button type="reset" class="btn btn-warning">Limpar Formulário</button>
            </div>
        </form>
    </div>
    

    <script>
        var editor1 = new RichTextEditor("#div_editor1");
        //editor1.setHTMLCode("Use inline HTML or setHTMLCode to init the default content.");
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>