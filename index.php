<?

ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

include('load.php');

$page_path = $config->get('site_path') . 'pages/' . $router->page . '.php';

if(file_exists($page_path))
  include($page_path);
else
  die('Erro 404 - Página não encontrada.');

?>