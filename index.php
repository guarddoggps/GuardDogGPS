<?
$url = substr($_SERVER['REQUEST_URI'], 1);

session_start();

function curPageName() {
  $start = strrpos($_SERVER["REQUEST_URI"], "/");
  $end = strrpos($_SERVER["REQUEST_URI"], "?");

  if ($end != FALSE) {
    $length = $end - $start;
  } else {

  }

 return substr($_SERVER["REQUEST_URI"],$start + 1);
}

echo "The current page name is ".curPageName();

if (!$_SESSION['lang']) {
  $_SESSION['lang'] = 'en';
}

if (isset($_GET['lang'])) {
  $_SESSION['lang'] = $_GET['lang'];
}

switch($url) {
  case (''):
  case ('index'):
    $page = 'start';
    break;
  default: 
    $page = $url;
    break;
}

$lang = $_SESSION['lang'];

if ($lang != 'en') {
  $page = $page . '_' . $lang;
}

$page = $page . '.php';

if (!file_exists($page)) {
  $page = "error.php";
}

require_once($page);

?>