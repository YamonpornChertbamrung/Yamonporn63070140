<html>
<head>
<title>ITF Lab</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'itflabs02.mysql.database.azure.com', 'yamonporn@itflabs02', 'Modji2002', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM guestbook');
?>
 <div class="container">
  <table class="table table-dark">
          <thead>
            <tr>
              <th width="300">
                <div align="center">Name</div>
              </th>
              <th width="300">
                <div align="center">Comment </div>
              </th>
              <th width="300">
                <div align="center">Action</div>
              </th>
            </tr>
          </thead>
          <tbody>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
  <tr>
    <td><?php echo $Result['Name'];?></div></td>
    <td><?php echo $Result['Comment'];?></td>
    <td><?php echo $Result['Link'];?></td>
    <td>
      <a class="btn btn-success" href="edit.php?ID=<?php echo $Result['ID']; ?>">EDIT</a>
      <a class="btn btn-info" href="delete.php?ID=<?php echo $Result['ID']; ?>">DELETE</a>
    </td>
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
