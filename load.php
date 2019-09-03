<?
set_include_path(__DIR__);

/* Objeto de Banco de Dados*/
//require('bower_components/tihh.php.obj.db.mysql/load.php');
//$db = new tihh_db_mysql('localhost', 'root', '123', 'db1');

/* Objeto de Config */
require('bower_components/tihh.site.config.php/load.php');
$config = new tihh_config();

$config->set('site_url_production', 'http://www.site.com.br/');
$config->set('site_url_localhost',  'http://localhost.gits/www.site.com.br/');
$config->set('site_url_beta',       'http://beta.taticadesucesso.com.br/www.site.com.br/');

$config->set('site_path', __DIR__ . '/');
$config->set('page_title', 'Título do Site');
$config->set('page_language', 'pt_BR');
$config->set('page_description', 'Descrição do Site');
$config->set('page_type', 'website');

/* Objeto Router */
require('bower_components/tihh.site.router.php/load.php');
$router = new tihh_router();

/* Objeto TablePost */
require('bower_components/tihh.php.obj.db.mysql.sql.post/load.php');

/* FUNÇÕES */
require('bower_components/tihh.php.fnc.getTags/load.php');

$router = new tihh_router();
?>
