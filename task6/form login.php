<!DOCTYPE html>
<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<head>
    <title>Document</title>
</head>
<body>
    <?php 
    
    ?>
    <h1>From Login</h1>
    <form method="POST" action="hasil.php">
        <table>
            <!-- namelengkap -->
            <tr>
                <td>usename</td>
                <td><input type="text" name="uname" placeholder="Nama Lengkap" class="form-control input-md"></td>
            </tr>
            <!-- end -->
            <tr>
                <td>password</td>
                <td><input type="text" name="Password" placeholder="*******" class="form-control input-md"></td>
            </tr>
        </table>
    </form>
    <?php // Login Form – Fungsi Validasi
function otentikasi($uname,$Password){
   // user admin , password 12345
   if($uname=="admin" && $Password=="123456"){
      return true;
   }else{
      return false;
   }
}?>
    <div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
  <button type="submit" class="btn btn-primary">Login</button>
  </div>
</div>

</body>
</html>
