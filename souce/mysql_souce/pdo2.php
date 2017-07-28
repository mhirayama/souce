<?php
$settei = 'mysql:dbname=data_analysis;host=localhost;charset=utf8';
$user = 'username';
$password = 'open';
$setuzoku = new PDO($settei, $user, $password);

$sql01 = "select* from member";
$result01 = $setuzoku -> query("$sql01");
?>

<table border="1" rules="all" cellpadding="5">
<?php
foreach ($result01 as $row01) {
  print "<tr>";
  print "<td>";
  print $row01['0'];
  print "<td>";
  print $row01['1'];
  print "<td>";
  print $row01['2'];
  print "</tr>";
}
?>
</table>