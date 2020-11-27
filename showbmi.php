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
  <center>
  <?php
  $conn = mysqli_init();
  mysqli_real_connect($conn, 'yamonporn.mysql.database.azure.com', 'mjay@yamonporn', 'Modji1996', 'itfexam', 3306);
  if (mysqli_connect_errno($conn))
  {
      die('Failed to connect to MySQL: '.mysqli_connect_error());
  }
  $res = mysqli_query($conn, 'SELECT * FROM bmical');
  ?>
   <div class="container">
    <table class="table table-dark">
            <thead>
              <tr>
                <th width="300">
                  <div align="center">ชื่อ</div>
                </th>
                <th width="300">
                  <div align="center">น้ำหนัก </div>
                </th>
                <th width="300">
                  <div align="center">ส่วนสูง </div>
                </th>
                <th width="300">
                  <div align="center">bmi</div>
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
      <td><?php echo $Result['Weight'];?></td>
      <td><?php echo $Result['Height'];?></td>
      <td><?php echo $Result['bmi'];?></td>
    </tr>
  <?php
  }
  ?>
  </table>
  <a href="formexam.php" class="btn btn-success">ADD</a>
  <?php
  mysqli_close($conn);
  ?>
  </center>
</body>
</html>
