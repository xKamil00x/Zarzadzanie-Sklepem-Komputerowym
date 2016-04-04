<?

require_once('db.inc.php');


function dbConnect()
{
  $dataset = new MySQLDB(DB_SERVER, DB_NAME, DB_USERNAME, DB_PASSWORD);
  return $dataset;
}


function login_check($username,$password) {
  $db = dbConnect();
  $password = md5($password);
  $cond = array('nazwa' => sprintf("%s", mysql_real_escape_string($username)));
  $row = $db->getRow('uzytkownik', $cond);
  if($username == $row['nazwa'] && $password == $row['haslo']) {
    $login_check = true;
  } else {
    $login_check = false;
  }
  return $login_check;
}


function connectdb() {
  require('config.php');
  global $dbhost, $dbuser, $dbpass, $dbname, $db;
  $db = mysql_connect("$dbhost", "$dbuser", "$dbpass") or die('Script Could not connect to database');
  mysql_select_db("$dbname",$db);
  return $db;
}


function disconnectdb() {
  //global $db;
  //if($db != false) {
  //  mysql_close($db);
  //}
  //$db = false;
}

function useraccess($username) {
  $db = dbConnect();
  $row = $db->getRow('uzytkownik', array('nazwa' => $username));
  return $row['uprawnienia'];
}





?>
