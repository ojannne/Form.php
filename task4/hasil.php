<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">    <title>Document</title>
</head>
<body> 
 
  <?php 
   error_reporting(0);
  $nama = $_POST ["nama"];
  $umur = $_POST ["umur"];
  $gender = $_POST ["gender"];
  $pendidikan = $_POST ["pendidikan"];
  $hobi = $_POST ["hobi"];
  ?>
<table class="table table-bordered border- table-dark">
  <thead>
    <tr >
      <th scope="col primary">Nama</th>
      <th scope="col">Umur</th>
      <th scope="col">Gender</th>
      <th scope="col">pendidikan</th>
      <th scope="col">Hobi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?php echo "Muhammad Fauzan Nasyiruddin";?></th>
      <td><?php echo  "19 Tahun";?></td>
      <td><?php echo  "laki-laki";?></td>
      <td><?php echo  "S1";?></td>
      <td><?php $hobi = array("Ngoding | ", "Futsal |", " Nonton"); 

foreach ($hobi as $x) {
  echo "$x";
}?></td>
    </tr>
    <tr>
      <td colspan="6"><button><a href="form.php">kembali</a></button></td>
    </tr>
  </tbody>
</table>
</body>
</html>


