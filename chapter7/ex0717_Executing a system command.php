<?php // exec.php
echo "ex0717<br>";
echo "Executing a system command <br><br>";

$ua = $_SERVER['HTTP_USER_AGENT'];
echo "OS name=".$ua."<br>";
$mac = strpos($ua, 'Macintosh') ? true : false;
if ($ua) {
  if($mac){
	$cmd = "ls"; // Linux, Unix & Mac
  }
  else{
    $cmd = "dir"; // Windows
  }
}

// $cmd = "dir"; // Windows
// $cmd = "ls"; // Linux, Unix & Mac
exec(escapeshellcmd($cmd), $output, $status);
if ($status) echo "Exec command failed";
else
{
echo "<pre>";
foreach($output as $line) echo htmlspecialchars("$line\n");
echo "</pre>";
}
?>