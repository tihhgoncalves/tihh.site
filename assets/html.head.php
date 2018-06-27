<!doctype html>
<html>
<head>
<meta charset="utf-8"/>
<title><?= $config->get('page_title'); ?></title>

<!-- BOWER - jQuery -->
<script src=""<?= $config->get('site_url'); ?>bower_components/jquery/dist/jquery.min.js"></script>

<!-- BOWER - Bootstrap -->
<link rel="stylesheet" href=""<?= $config->get('site_url'); ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
<link rel="stylesheet" href=""<?= $config->get('site_url'); ?>bower_components/bootstrap/dist/css/bootstrap-theme.min.css">
<script src=""<?= $config->get('site_url'); ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- BOWER - rhinoJS -->
<script src="<?= $config->get('site_url'); ?>bower_components/rhinoJS/dist/rhinoJS.js"></script>

<!--BOWER - Bootstrap Device Debug -->
<!-- Quando terminar o site comentar as chamas abaixo -->
<script src="<?= $config->get('site_url'); ?>bower_components/bootstrap-device-debug/bootstrap-device-debug.js"></script>
<link rel="stylesheet" href="<?= $config->get('site_url'); ?>bower_components/bootstrap-device-debug/bootstrap-device-debug.css">

<!-- Controle de acesso pelo Mobile -->
<meta name="viewport" content="width=device-width, initial-scale=1"/>

<link rel="icon" href="<?= $config->get('site_url'); ?>assets/images/favico.png" type="image/x-icon"/>
<link rel="shortcut icon" href="<?= $config->get('site_url'); ?>assets/images/favico.png" type="image/x-icon"/>

</head>