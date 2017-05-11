<?
  $db_hostname = 'localhost';
  $db_database = 'publications';
  $db_username = 'root';
  $db_password = '13579111';

  $db_server = mysqli_connect($db_hostname, $db_username, $db_password);
  mysqli_select_db($db_server, $db_database);
  if(!$db_server) die("Unable to connect to MySQLL:".mysql_error());

?>
