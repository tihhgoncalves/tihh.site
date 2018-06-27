<?
set_include_path(__DIR__);

/* Objeto de Banco de Dados*/
require('bower_components/tihh.php.obj.db.mysql/load.php');
//$db = new tihh_db_mysql('localhost', 'root', '123', 'db1');

/* Objeto Router */
require('bower_components/tihh.site.router.php/load.php');
$router = new tihh_router();

/* Objeto de URI */
require('bower_components/tihh.site.uri.php/load.php');
$uri = new tihh_uri();

/* Objeto de Config */
require('bower_components/tihh.site.config.php/load.php');
$config = new tihh_config();
$config->set('site_url', $uri->base());
$config->set('site_path', __DIR__ . '/');
$config->set('page_title', 'Título do Site');

/* Objeto TablePost */
require('bower_components/tihh.php.obj.db.mysql.sql.post/load.php');

/* FUNÇÕES */
require('bower_components/tihh.php.fnc.getTags/load.php');

$router = new tihh_router();
?>