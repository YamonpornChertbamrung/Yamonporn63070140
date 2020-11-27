<html>
<head>
<title>ITF Lab</title>
</head>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'yamonporn.mysql.database.azure.com', 'mjay@yamonporn', 'Modji1996', 'itfexam', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM itfexam');
?>
<table width="600" border="1">
  <tr>
    <th width="100"> <div align="center">Name</div></th>
    <th width="350"> <div align="center">Type </div></th>
    <th width="150"> <div align="center">Option </div></th>
  </tr>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
  <tr>
    <td><?php echo $Result['Name'];?></div></td>
    <td><?php echo $Result['Type'];?></td>
    <td><?php echo $Result['Option'];?></td>
  </tr>
<?php
}
?>
</table>
<?php
mysqli_close($conn);
?>
</body>
</html>
