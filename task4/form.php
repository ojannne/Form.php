
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">   
  <title>Document</title>
  <style></style>
</head>
<body>
  <form method="post" action="hasil.php"
  <form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<h1><b><center>Form Registrasi</center></b></h1>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="prependedtext">Nama Lengkap</label>
  <div class="col-md-4">
    <div class="input-group">
      <span class="input-group-addon col-md-1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-vcard-fill" viewBox="0 0 16 16">
  <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm9 1.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 0-1h-4a.5.5 0 0 0-.5.5M9 8a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 0-1h-4A.5.5 0 0 0 9 8m1 2.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 0-1h-3a.5.5 0 0 0-.5.5m-1 2C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1 1 0 0 0 2 13h6.96q.04-.245.04-.5M7 6a2 2 0 1 0-4 0 2 2 0 0 0 4 0"/>
</svg></span>
      <input id="prependedtext" name="prependedtext" class="form-control" placeholder="Muhammad Fauzan Nasyiruddin" type="text">
    </div>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Umur</label>  
  <div class="col-md-4">
  <input id="textinput" name="umur" type="text" placeholder="19" class="form-control input-md">
    
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="radios">Gender</label>
  <div class="col-md-4">
    <label class="radio-inline" for="radios-0">
      <input type="radio" name="radios" id="radios-0" value="1" checked="checked">
    Laki-laki
    </label> 
    <label class="radio-inline" for="radios-1">
      <input type="radio" name="radios" id="radios-1" value="2">
      Perempuan
    </label>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Pendidikan</label>
  <div class="col-md-4">
    <select id="selectbasic" name="selectbasic" class="form-control">
      <option value="1">S1</option>
      <option value="2">S2</option>
      <option value="2">S3</option>
    </select>
  </div>
</div>

<!-- Multiple Checkboxes -->
<div class="form-group">
  <label class="col-md-4 control-label" for="checkboxes">Hobi</label>
  <div class="col-md-4">
  <div class="checkbox">
    <label for="checkboxes-0">
      <input type="checkbox" name="checkboxes" id="checkboxes-0" value="1">
      Ngoding
    </label>
	</div>
  <div class="checkbox">
    <label for="checkboxes-1">
      <input type="checkbox" name="checkboxes" id="checkboxes-1" value="2">
      Traveling
    </label>
	</div>
  <div class="checkbox">
    <label for="checkboxes-2">
      <input type="checkbox" name="checkboxes" id="checkboxes-2" value="3">
      Futsal
    </label>
	</div>
  <div class="checkbox">
    <label for="checkboxes-3">
      <input type="checkbox" name="checkboxes" id="checkboxes-3" value="4">
      Nonton
    </label>
	</div>
  <div class="checkbox">
    <label for="checkboxes-4">
      <input type="checkbox" name="checkboxes" id="checkboxes-4" value="5">
      Hiking
    </label>
	</div>
  <div class="checkbox">
    <label for="checkboxes-5">
      <input type="checkbox" name="checkboxes" id="checkboxes-5" value="6">
      Mancing
    </label>
	</div>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4 ">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Daftar</button>
  </div>
</div>
<form name="f1" method="POST" action="hasil.php">
</fieldset>
</form>
</body>
</html>