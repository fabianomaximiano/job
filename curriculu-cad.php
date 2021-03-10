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

    <title>Meu curriculum:</title>
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
    <!-- <div class="container" id="form-cadastro">
        <div class="saudacao">
            <h2>Painel de controle</h2>
            <p>Boa tarde <strong>Usuario x</strong>!!</p>
        </div>  -->

    <header class="header-usuarios">
        <div class="container">
            <div class="saudacao">
                <h2>Painel de controle</h2>
                <p>Boa tarde <strong>Usuario x</strong>!!</p>
            </div>
            <div class="cabecalho">
                <div class="row">
                    <div class="col-md-3">
                        <div class="box">
                            <div class="circle center-block">
                                <i class="fa fa-user-circle-o fa-3x" aria-hidden="true"></i>
                            </div>
                            <h5>USUARIO</h5>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="box">
                            <div class="circle center-block">
                                <i class="fa fa-address-card-o fa-3x" aria-hidden="true"></i>
                            </div>
                            <h5>INFORMAÇÕES DE CONTATO</h5>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="box">
                            <div class="circle center-block">
                                <i class="fa fa-newspaper-o fa-3x" aria-hidden="true"></i>
                            </div>
                            <h5>CURRCULUM</h4>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="box">
                            <div class="circle center-block">
                                <i class="fa fa-sign-out fa-3x" aria-hidden="true"></i>
                            </div>
                            <h5>SAIR</h5>
                        </div>
                    </div>
                </div>
            </div>
    </header>
    </div>
    <section class="difer">
        <!--
            País:Brasil
            CEP:05583-030
            Estado:São Paulo
            Cidade:São Paulo
            Bairro:JD. Boa Vista
            Endereço:Rua Sara Newton, 103
           -->
        <div class="container">
            
            <div class="row">
                <form action="#">
                    <h3>Dados de contato</h3>
                    
                    
                    <!-- fim linha cidade e estado -->
                    <div class="col-md-12">
                        <fieldset disabled>
                            <button type="submit" class="btn btn-primary">Alterar Endereço</button>
                        </fieldset>
                    </div>
                </form><!-- fim do form -->
            </div>
        </div>
    </section>


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