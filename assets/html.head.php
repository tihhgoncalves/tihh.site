<!doctype html>
<html>
<head>
<meta charset="utf-8"/>
<title><?= $config->get('page_title'); ?></title>

<meta property="og:locale" content="<?= $config->get('page_language'); ?>">
<meta property="og:description" content="<?= $config->get('page_description'); ?>">
<meta property="og:type" content="<?= $config->get('page_type'); ?>">

<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

<!-- BOWER - jQuery -->
<script src="<?= $config->get('site_url'); ?>bower_components/jquery/dist/jquery.min.js"></script>

<!-- BOWER - Bootstrap -->
<link rel="stylesheet" href="<?= $config->get('site_url'); ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="<?= $config->get('site_url'); ?>bower_components/bootstrap/dist/css/bootstrap-theme.min.css">
<script src="<?= $config->get('site_url'); ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- BOWER - rhinoJS -->
<script src="<?= $config->get('site_url'); ?>bower_components/rhinoJS/dist/rhinoJS.js"></script>

<!-- Script do FrontEnd -->
<script src="<?= $config->get('site_url'); ?>assets/js/base.js"></script>

<!-- Estilos do FrontEnd -->
<link rel="stylesheet" href="<?= $config->get('site_url'); ?>assets/css/base.css" />

<!-- FacIcon -->
<link rel="icon" href="assets/images/favicon.png" type="image/x-icon"/>
<link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon"/>

</head>