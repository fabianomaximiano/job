<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- font-awesome CSS -->
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="assets/css/style.css">

    <title>Document</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Brand</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Painel de controle<span class="sr-only">(current)</span></a></li>
                        <li><a href="#">Informações de contato</a></li>
                        <li><a href="#">Curriculum completo</a></li>
                        <li><a href="#">Recuperar senha</a></li>
                        <!-- <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">One more separated link</a></li>
                            </ul>
                        </li> -->
                    </ul>
                    <!-- <form class="navbar-form navbar-left">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form> -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- <li>Acesso Admin</li> -->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false">Acesso Admin <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

    </header>
    <div class="container" id="form-cadastro">
        <div class="saudacao">
            <p>Olá seja bem vindo, <strong>Fulano de tal</strong>.</p>
        </div>
        <div class="row">
            <!--inicio row-->
            <div class="col-md-6">
                <fieldset disabled>
                    <div class="form-group">
                        <label for="nomecompleto">Nome Completo</label>
                        <input type="text" class="form-control" id="nomecompleto" placeholder="Fabiano Maximiano">
                    </div>
                </fieldset>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="funcao">Funcão</label>
                    <input type="" class="form-control" id="funcao" placeholder="">
                </div>
            </div>
        </div>
        <!--final row-->
        <hr>
        <div class="row">
            <!--inicio row-->
            <div class="col-md-3">
                <div class="form-group">
                    <label for="">Data de Nascimento</label>
                    <input type="text" class="form-control" id="dnascimento" placeholder="dia/mês/ano">
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <!--Genero-->
                    <label for="">Genero</label>
                    <select class="form-control">
                        <option>Masculino</option>
                        <option>Feminino</option>
                        <option>Personalizado</option>
                    </select>
                </div>
                <!--fim genero-->
            </div>
            <!--fim row -->
            <div class="col-md-2">
                <div class="form-group">
                    <!---->
                    <label for="estadocivil">Estado Civil</label>
                    <select class="form-control">
                        <option>Casado(a)</option>
                        <option>Solteiro(a)</option>
                        <option>Divorciado(a)</option>
                    </select>
                </div>
            </div>
            <!--fim Col-md-6-->
            <div class="col-md-2">
                <div class="form-group">
                    <!---->
                    <label for="nascionalidade">Nacionalidade</label>
                    <input type="text" class="form-control" id="nascionalidade" placeholder="">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="CPF">CPF</label>
                    <input type="text" class="form-control" id="CPF" placeholder="000.000.000-00">
                </div>
            </div>
        </div>
        <!--final row-->
        <hr>
        <div class="row">
            <!--inicio da linha-->
            <div class="col-md-6">
                <div class="form-group">
                    <label for="objertivo">objertivo</label>
                    <input type="" class="form-control" id="objertivo" placeholder="Gerente de vendas">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="objertivo-2">Objertivo 2</label>
                    <input type="" class="form-control" id="objertivo-2" placeholder="Lider de vendas">
                </div>
            </div>
        </div>
        <!--final da linha-->
        <hr>
        <!--inicio da linha-->
        <div class="row">
            <div class="col-md-12">
                <label for="valorsal">Pretenção Salarial</label>
                <input type="" class="form-control" id="valorsal" placeholder="R$ 7.000,00">
            </div>
        </div>
        <!--final da linha-->
        <hr>
        <!---->
        <div class="row">
            <div class="col-md-12">
                <label for="resumoprofissional">Resumo Profissional</label>
                    <textarea rows="5" type="text" name="rProfissional" id="resumoprofissional" class="form-control"></textarea>
            </div>
        </div>
        <!---->
        <hr>
        <div class="row">
            <!--segundo grau-->
            <div class="col-md-4">
                <label for="">Instituição</label>
                <input type="text" name="" id="" class="form-control">
            </div>
            <div class="col-md-4">
                <label for="">Curso</label>
                <input type="text" name="" id="" class="form-control">
            </div>
            <div class="col-md-2">
                <label for="">Conclusão</label>
                <input type="text" name="" id="" class="form-control">
            </div>
            <!-- <div class="col-md-2"> -->
                <button type="submit" class="modify">+</button>
            <!-- </div> -->
            <!--final segundo grau-->
        </div>    
    </div>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6">copy</div>
                <div class="col-md-6">desenvolvimento:</div>
            </div>
        </div>
    </footer>
</body>
<!-- jquery -->
<script src="assets/bootstrap/js/jquery-3.6.0.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="assets/bootstrap/js/bootstrap.min.js"></script>

</html>