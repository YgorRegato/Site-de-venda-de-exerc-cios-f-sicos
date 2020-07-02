

<?php echo \Classes\ClassLayout::setHeaderUser('Cadastro', "Faça seu cadastro", ""); ?>





<body class="bg ">
    <div class="container " style="padding-top: 4%;">
        <div class="card shadow-lg  o-hidden border-0 my-5" >
            <div class="card-body p-0 ">
                <div class="row ">
                    <div class="col-lg-5 d-none d-lg-flex" >
                        <div class="flex-grow-1 bg-register-image" style="background-image: url(<?php echo DIRIMG . '../image/dogs/image1.jpeg'; ?>);"></div>
                    </div>
                    <div class="col-lg-7">
                        <div class="p-4">
                            <div class="text-center">
                                
                                <h4 class="text-dark mb-4">Crie sua Conta!</h4>
                            </div>

                            <form class="user" method="post" name="formCadastro" id="formCadastro" action="<?php echo DIRPAGE . 'controllers/controllerCadastro'; ?>">

                                <div class="form-group row">
                               
                                    <div class="col-sm-6 mb-3 mb-sm-0">

                                        <input class="form-control form-control-user" type="text" id="nome" placeholder="Nome" name="nome" required="">
                                    </div>
                                    
                                    <div class="col-sm-6">
                                        <input class="form-control form-control-user" type="email" id="email" placeholder="E-mail" name="email" required="">
                                    </div>

                                     
                               
                                    
                
                                </div>

                              

                                 <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">

                                        <input class="form-control form-control-user" type="date" id="dataNascimento" placeholder="Data de Nascimento" name="dataNascimento" required="">
                                    </div>
                                    
                                    <div class="col-sm-6">
                                        <input class="form-control form-control-user" type="tel" id="telefone" placeholder="Telefone" name="telefone" required="">
                                    </div>

                                     
                                </div>
                                  <div class="form-group">
                                    <input class="form-control form-control-user" type="text" id="endereco"  placeholder="Endereço " name="endereco" required="">
                                </div>
                                    


                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">

                                        <input class="form-control form-control-user" type="password" id="senha" placeholder="Senha" name="senha" required="">
                                    </div>
                                    
                                    <div class="col-sm-6">
                                        <input class="form-control form-control-user" type="password" id="senhaConf" placeholder="Reescreva a senha" name="senhaConf" required="">
                                    </div>

                                     
                                </div>


                                <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">
                                <div class="" >
     <div class="retornoCad"></div>
</div>                                          
                                   

                                <button class="btn btn-warning btn-block text-white btn-user" type="submit">Criar Conta</button>
                                <hr>
                        <div class="form-group row">
                             <div class="col-sm-6 mb-3 mb-sm-0">

                                <a class="btn btn-primary btn-block text-white btn-google btn-user" role="button"><i class="fab fa-google"></i>&nbsp; Criar com Google</a>
                            </div>

                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <a class="btn btn-primary btn-block text-white btn-facebook btn-user" role="button"><i class="fab fa-facebook-f"></i>&nbsp; Criar com Facebook</a>
                            </div>
                        </div>
                                <hr>

                            </form>
                            <div class="text-center"><a class="small" href="user/reset_senha_user">Esqueceu a Senha ?</a></div>
                            <div class="text-center"><a class="small" href="personal/login">Já tem conta ? Faça Login!</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src='lib/js/zepto.min.js'></script>
<script src='lib/js/sweetalert.min.js'></script>
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js'></script>
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js'></script>
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.15.0/js/mdb.min.js'></script>
<script src='lib/js/jquery.js'></script>
<script src='lib/js/index.js'></script>
<script src='lib/js/vanilla-masker.min.js'></script>
<script src="https://www.google.com/recaptcha/api.js?render=6Lf-sP8UAAAAAJBsCaxkocgA4CfOaLlvGv-TyYfm"></script>
<script src='lib/js/javascript.js'></script>