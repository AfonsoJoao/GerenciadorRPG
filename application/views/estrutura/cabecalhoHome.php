<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Gerenciador para RPG - Escolher campanha</title>

        <!-- Custom fonts for this theme -->
        <link href="<?php echo base_url('vendor/fontawesome-free/css/all.min.css')?>" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

        <!-- Theme CSS -->
        <link href="<?php echo base_url('css/freelancer.min.css')?>" rel="stylesheet">
        <link rel='stylesheet' id='wp-block-library-css'  href='https://mdbootstrap.com/wp-includes/css/dist/block-library/style.min.css?ver=5.2' type='text/css' media='all' />
        <link rel='stylesheet' id='wc-block-style-css'  href='https://mdbootstrap.com/wp-content/plugins/woocommerce/assets/css/blocks/style.css?ver=3.6.3' type='text/css' media='all' />
        <link rel='stylesheet' id='contact-form-7-css'  href='https://mdbootstrap.com/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.1.3' type='text/css' media='all' />
        <style id='woocommerce-inline-inline-css' type='text/css'>
            .woocommerce form .form-row .required { visibility: visible; }
        </style>
        <link rel='stylesheet' id='wsl-widget-css'  href='https://mdbootstrap.com/wp-content/plugins/wordpress-social-login/assets/css/style.css?ver=5.2' type='text/css' media='all' />
        <!--css dos cards-->
        <link rel='stylesheet' id='compiled.css-css'  href='https://mdbootstrap.com/wp-content/themes/mdbootstrap4/css/compiled-4.8.2.min.css?ver=4.8.2' type='text/css' media='all' />

        <!-- css das funções de layout -->
        <link rel='stylesheet' id='wp-block-library-css'  href='https://mdbootstrap.com/wp-includes/css/dist/block-library/style.min.css?ver=5.2.1' type='text/css' media='all' />
        <link rel='stylesheet' id='wc-block-style-css'  href='https://mdbootstrap.com/wp-content/plugins/woocommerce/assets/css/blocks/style.css?ver=3.6.4' type='text/css' media='all' />
        <link rel='stylesheet' id='contact-form-7-css'  href='https://mdbootstrap.com/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.1.3' type='text/css' media='all' />
        <style id='woocommerce-inline-inline-css' type='text/css'>.woocommerce form .form-row .required { visibility: visible; }</style>
        <link rel='stylesheet' id='wsl-widget-css'  href='https://mdbootstrap.com/wp-content/plugins/wordpress-social-login/assets/css/style.css?ver=5.2.1' type='text/css' media='all' />
        <link rel='stylesheet' id='compiled.css-css'  href='https://mdbootstrap.com/wp-content/themes/mdbootstrap4/css/compiled-4.8.2.min.css?ver=4.8.2' type='text/css' media='all' />
        <link rel="shortcut icon" href="<?php echo base_url('/img/icons/siteIcon')?>" />
        <link rel="canonical" href="https://mdbootstrap.com/docs/jquery/forms/textarea/" />
        
        <!-- css dos icones de rpg -->
        <link rel="stylesheet" href="<?php echo base_url('/css/rpg-awesome.css') ?>" type='text/css' media='all'>

<script>

            function excluirCampanha(id, nome) {
                if (confirm('Deseja excluir a Campanha: ' + nome)) {
                    location.href = "<?php echo base_url('ControllerCliente/excluirLista'); ?>" + "/" + id;
                }
            }
        </script>
    </head>

