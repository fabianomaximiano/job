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
    <div class="container">
        <div class="saudacao">
            <p>Olá seja bem vindo, <strong>Fulano de tal</strong>.</p>
        </div>
        <div class="row">

            <div class="col-md-12">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default"><!--inicio panel-default-1-->
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                                    aria-expanded="true" aria-controls="collapseOne">
                                    Dados pessoais
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                            aria-labelledby="headingOne">
                            <div class="panel-body">
                                <h4>Dados Pessoais</h4>
                                <hr>
                                <h5>Nome Completo</h5>
                                <h6>Email: fulano@dominio.com.br</h6>
                                <hr>
                                <p>Idade:44 anos</p>
                                <p>Gênero:masculino</p>
                                <p>Possui filhos:1 Filho</p>
                                <p>Estado Civil:Solteiro(a)</p>
                                <p>Nacionalidade:Brasileira</p>
                                <p>Documento:CPF (BRA) (BR) 268.102.188-07</p>

                                
                            </div>
                        </div>
                    </div><!-- final panel-default-1-->
                    <div class="panel panel-default"><!--inicio panel-default-2-->
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                    href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    contatos
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="headingTwo">
                            <div class="panel-body">
                                <p>País:Brasil</p>
                                <p>CEP:05583-030</p>
                                <p>Estado:São Paulo</p>
                                <p>Cidade:São Paulo</p>
                                <p>Bairro:JD. Boa Vista</p>
                                <p>Endereço:Rua Sara Newton, 103</p><hr>
                                <h4>Fone:</h4><hr>
                                <p>Telefone: (11)986240526</p>
                                <p>Celular: (11) 98624-0526</p>
                                <hr>
                                <h4>Redes Sociais</h4>
                                <ul>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                        </div>
                    </div><!--final panel-default-2-->
                    <div class="panel panel-default"><!--inicio panel-default-3-->
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                    href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Objetivo
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="headingThree">
                            <div class="panel-body">
                                <h4>Objetivo</h4>
                                <p>Funçao 1</p>
                                <p>Funçao 2</p>
                            </div>
                        </div>
                    </div><!--fim panel-default-3-->
                    <div class="panel panel-default"><!--inicio panel-default-4-->
                        <div class="panel-heading" role="tab" id="headingFour">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                    href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Pretensão salarial
                                </a>
                            </h4>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="headingFour">
                            <div class="panel-body">
                                <h4>Pretensão salarial</h4>
                                <p>R$ 0,00</p>
                            </div>
                        </div>
                    </div><!--fim panel-default-4-->
                    <div class="panel panel-default"><!--inicio panel-default-5-->
                        <div class="panel-heading" role="tab" id="headingFive">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                    href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Resumo Profissional
                                </a>
                            </h4>
                        </div>
                        <div id="collapseFive" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="headingFive">
                            <div class="panel-body">
                                <h4>Resumo Profissional</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo quasi deleniti quis obcaecati incidunt ipsa, odio hic iste quisquam quibusdam modi dolorum est! Culpa nisi autem illo voluptatibus saepe tenetur.</p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, quisquam! Eaque velit molestiae, veritatis cumque tempore placeat. Ullam nostrum accusantium quae qui impedit error, facilis repellendus eum cum, officiis quibusdam.</p>
                            </div>
                        </div>
                    </div><!--fim panel-default-5-->
                    <div class="panel panel-default"><!--inicio panel-default-6-->
                        <div class="panel-heading" role="tab" id="headingSix">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                    href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    Formação Acadêmica e complementar
                                </a>
                            </h4>
                        </div>
                        <div id="collapseSix" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="headingSix">
                            <div class="panel-body">
                                <h4>Formação superior completa</h4>
                                <h5>Graduação</h5>
                                <p>Analise desenvolvimento de sistemas, Faculdades Integradas Einstein Limeira</p>
                                <p>(Julho de 2020) - Concluído</p>
                            </div>
                        </div>
                    </div><!--fim panel-default-6-->
                    <div class="panel panel-default"><!--inicio panel-default-7-->
                        <div class="panel-heading" role="tab" id="headingSeven">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                    href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                    Idioma
                                </a>
                            </h4>
                        </div>
                        <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="headingSeven">
                            <div class="panel-body">
                                    <h4>Idioma</h4>
                                    <ul>
                                        <li>IDIOMA</li>
                                        <li>LEITURA</li>
                                        <li>ESCRITA</li>
                                        <li>CONVERSAÇÃO</li>
                                    </ul>
                                    <ul>
                                        <li>1</li>
                                        <li>2</li>
                                        <li>3</li>
                                        <li>4</li>
                                    </ul>
                            </div>
                        </div>
                    </div><!--fim panel-default-7-->
                    <div class="panel panel-default"><!--inicio panel-default-8-->
                        <div class="panel-heading" role="tab" id="headingEight">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                    href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                    Histórico Profissional
                                </a>
                            </h4>
                        </div>
                        <div id="collapseEight" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="headingSix">
                            <div class="panel-body">
                                <h4>Histórico Profissional</h4>
                                <h5>Engenhos</h5>
                                <p>Programador WEB Full Stack - desde Outubro/2020</p>
                                <p>- Manutenção de sites nas plataformas Wordpress</p>
                                <p>- Criação e manutenção de novos sites, desenvolvimento de landing pages;</p>
                                <h5>atualmente</h5><hr>
                                <h5>Engenharia yxz </h5>
                                <p>Programador WEB Full Stack - De junho/2017 até Outubro/2020</p>
                                <p>- Manutenção de sites nas plataformas Wordpress</p>
                                <p>- Criação e manutenção de novos sites, desenvolvimento de landing pages;</p>
                                <h5>Engenhos awz</h5>
                                <p>Programador WEB Full Stack - De Janeiro/2010 até junho/2017</p>
                                <p>- Manutenção de sites nas plataformas Wordpress</p>
                                <p>- Criação e manutenção de novos sites, desenvolvimento de landing pages;</p>
                                <!-- <h5>atualmente</h5> -->

                            </div>
                        </div>
                    </div><!--fim panel-default-8-->
                    <div class="panel panel-default"><!--inicio panel-default-9-->
                        <div class="panel-heading" role="tab" id="headingNine">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                    href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                    Informações Complementares
                                </a>
                            </h4>
                        </div>
                        <div id="collapseNine" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="headingNine">
                            <div class="panel-body">
                                <h4>Cursos</h4>
                                <p>Logica de programaçao - 40 hors - Impacta</p>
                                <p>Javascript e Jquery  - 40 horas - DRC</p>
                            </div>
                        </div>
                    </div><!--fim panel-default-9-->

                </div>
            </div>
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