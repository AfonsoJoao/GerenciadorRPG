<body id="page-top">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg blue-grey darken-3 darken-2 text-uppercase fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">Gerenciador RPG</a>
            <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-link text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#addCampanha"><font color="white">Adicionar campanha</font></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Masthead -->
    <header  class="masthead lighten-4 blue-grey darken-1 text-white text-center">
        <div class="container d-flex align-items-center flex-column">

            <!-- Masthead Heading -->
            <h1 class="masthead-heading text-uppercase mb-0">Selecionar Campanha</h1>

            <!-- Icon Divider -->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon">
                    <i class="fas fa-star"></i>
                </div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Card Narrower = cards de campanhas -->
            <div class="container">
                <div class="row justify-content-md-center">
                    <?php
                    if (isset($campanha)) {
                        foreach ($campanha as $campanha) {
                            ?>
                            <div class="col-lg-4 col-md-12 mb-4">
                                <div class="card card-cascade narrower">
                                    <!-- Card image -->
                                    <div class="view view-cascade overlay">
                                        <img class="card-img-top" src="<?php echo base_url('/img/temas/medievalTheme.jpg') ?>" alt="Card image cap">
                                        <a>
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>
                                    <br>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">
                                            <a style="text-decoration:none" href="javascript:func()" onclick="excluirCampanha(<?php echo $campanha->idCampanha; ?>, '<?php echo $campanha->nomeCampanha; ?>')"><i class="fas fa-times"></i></a>
                                        </span>
                                    </button>
                                    <!-- Card content -->
                                    <div class="card-body card-body-cascade">

                                        <!-- Label -->
                                        <font color="#37474f"><h3 class="pb-2 pt-1"><i class="ra ra-crossed-swords"></i><?php echo $campanha->nomeCampanha; ?></h3></font>
                                        <!-- Text -->
                                        <p class="card-text"><?php echo $campanha->descricaoCampanha; ?></p>
                                        <!-- Button -->
                                        <a class="btn blue-grey darken-3 lighten-4"><font color="white">Jogar</font></a>

                                    </div>

                                </div>
                            </div>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Card Narrower -->
</div>
</header>

<!-- Campanha Section -->
<section class="page-section portfolio" id="addCampanha">
    <div class="container">

        <!-- Portfolio Section Heading -->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Adicionar nova campanha</h2>

        <!-- Icon Divider -->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon">
                <i class="fas fa-star"></i>
            </div>
            <div class="divider-custom-line"></div>
        </div>

        <!-- Portfolio Grid Items -->
        <div class="row justify-content-md-center">

            <!-- Campanha Medieval -->
            <div class="col-md-6 col-lg-4">
                <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#medievalModal">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white">
                            <i class="fas fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="<?php echo base_url('/img/temas/medievalTheme.jpg') ?>" alt="">
                </div>
            </div>
            <!-- Campanha CyberPunk -->
            <div class="col-md-6 col-lg-4">
                <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#cyberpunkModal">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white">
                            <i class="fas fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="<?php echo base_url('/img/temas/cyberpunkTheme.jpg') ?>" alt="">
                </div>
            </div>
            <!-- Campanha Apocalipse Zumbi -->
            <div class="col-md-6 col-lg-4">
                <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#zombieModal">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white">
                            <i class="fas fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="<?php echo base_url('/img/temas/zombieTheme.jpg') ?>" alt="">
                </div>
            </div>
        </div>
        <!-- /.row -->

    </div>
</section>
<!-- Copyright Section -->
<section class="copyright purple darken-2 py-4 text-center text-white">
    <div class="container">
        <small>Copyright &copy; GerenciadorRPG 2019</small>
    </div>
</section>

<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
<div class="scroll-to-top d-lg-none position-fixed ">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
    </a>
</div>

<!-- Modals -->
<!-- Medieval Modal-->
<div class="portfolio-modal modal fade" id="medievalModal" tabindex="-1" role="dialog" aria-labelledby="medievalModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">
                    <i class="fas fa-times"></i>
                </span>
            </button>
            <div class="modal-body text-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <!-- Portfolio Modal - Title -->
                            <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Medieval</h2>
                            <!-- Icon Divider -->
                            <div class="divider-custom">
                                <div class="divider-custom-line"></div>
                                <div class="divider-custom-icon">
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="divider-custom-line"></div>
                            </div>
                            <!-- Portfolio Modal - Image -->
                            <img class="img-fluid rounded mb-5" src="<?php echo base_url('/img/temas/medievalTheme.jpg') ?>" alt="">
                            <!-- Portfolio Modal - Text -->
                            <p class="mb-5">
                                <!-- Nome da campanha -->
                                <?php echo form_open('ControllerCampanha/criarCampanha'); ?>
                            <div class="md-form">
                                <input type="text" name="nomeCampanha" class="form-control validate" required="">
                                <label for="inputValidationEx" data-error="wrong" data-success="right">Nome da campanha</label>
                            </div>

                            <!-- Descrição da campanha -->
                            <div class="md-form mb-4 pink-textarea active-purple-textarea-2">
                                <textarea name="descricaoCampanha" class="md-textarea form-control" rows="3" required=""></textarea>
                                <label for="form23">Descrição da campanha</label>
                            </div>
                            <input type="hidden" name="tipoCampanha" value="medieval">

                            <button class="btn blue-grey darken-3 lighten-4" href="#">
                                <font color="white"><i class="ra ra-triforce"></i>
                                Criar Aventura</font>
                            </button>
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Cyberpunk Modal-->
<div class="portfolio-modal modal fade" id="cyberpunkModal" tabindex="-1" role="dialog" aria-labelledby="cyberpunkModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">
                    <i class="fas fa-times"></i>
                </span>
            </button>
            <div class="modal-body text-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <!-- Portfolio Modal - Title -->
                            <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Cyberpunk</h2>
                            <!-- Icon Divider -->
                            <div class="divider-custom">
                                <div class="divider-custom-line"></div>
                                <div class="divider-custom-icon">
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="divider-custom-line"></div>
                            </div>
                            <!-- Portfolio Modal - Image -->
                            <img class="img-fluid rounded mb-5" src="<?php echo base_url('/img/temas/cyberpunkTheme.jpg') ?>" alt="">
                            <!-- Portfolio Modal - Text -->
                            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                            <button class="btn btn-primary" href="#" data-dismiss="modal">
                                <i class="fas fa-times fa-fw"></i>
                                Close Window
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Zombie Modal-->
<div class="portfolio-modal modal fade" id="zombieModal" tabindex="-1" role="dialog" aria-labelledby="pzombieModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">
                    <i class="fas fa-times"></i>
                </span>
            </button>
            <div class="modal-body text-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <!-- Portfolio Modal - Title -->
                            <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Apocalipse Zumbi</h2>
                            <!-- Icon Divider -->
                            <div class="divider-custom">
                                <div class="divider-custom-line"></div>
                                <div class="divider-custom-icon">
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="divider-custom-line"></div>
                            </div>
                            <!-- Portfolio Modal - Image -->
                            <img class="img-fluid rounded mb-5" src="<?php echo base_url('/img/temas/zombieTheme.jpg') ?>" alt="">
                            <!-- Portfolio Modal - Text -->
                            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                            <button class="btn btn-primary" href="#" data-dismiss="modal">
                                <i class="fas fa-times fa-fw"></i>
                                Close Window
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Modal: modalCadSucesso-->
<div class="modal fade" id="modalCadSucesso" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-sm modal-notify modal-success" role="document">
        <!--Content-->
        <div class="modal-content text-center">
            <!--Header-->
            <div class="modal-header d-flex justify-content-center">
                <p class="heading">Campanha criada com sucesso</p>
            </div>

            <!--Body-->
            <div class="modal-body">

                <i class="fas fa-check fa-4x animated rotateIn"></i>

            </div>

            <!--Footer-->
            <div class="modal-footer flex-center">
                <a type="button" class="btn  btn-success waves-effect" data-dismiss="modal">Ok</a>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!--Modal: modalConfirmDelete-->
<script type = "text/javascript" src = "https://code.jquery.com/jquery.min.js" ></script>
<script type = "text/javascript" src = "https://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js" ></script>
<?php
if (isset($situacao)) {
    ?>
    <script>
        $(document).ready(function () {
            // Show the Modal on load
            $("#modalCadSucesso").modal("show");

        });
    </script>
    <?php
    unset($situacao);
}