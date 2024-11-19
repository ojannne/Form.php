<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Account Bank</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        *{
            margin: 0;
            padding: 0;
        }
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: white;
        padding-top: 20px;
        padding-bottom: 20px;
        text-align: center; 
        font-size: 15px; 
    }
    :root {
    --bg-color: #080808;
    --second-bg-color:#302c30;
    --text-color: white;
    --main-color:#081d1f;
    }

    h2 {
        color: black;
        margin-bottom: 20px;
        font-size: 24px; 
    }

    

    form {
        max-width: 400px;
        margin: 0 auto;
        
        background-color: var(--second-bg-color);
        padding: 49px;
        border-radius: 10px;
        box-shadow: 0 0 10px var(--main-color);
        text-align: center; 
    }

    label {
        font-weight: bold;
        color : white;
        padding: 5px;
        font-size: 15px;
        text-align: center;
        justify-content: center;
        align-items: center;
        display: block;
    }



    input[type="text"] {
        width: calc(100% - 22px);
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ced4da;
        border-radius: 5px;
        display: block;
    }

    input[type="submit"] {
        width: calc(100% - 22px);
        padding: 10px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 7px;
        cursor: pointer;
        display: block;
        margin-bottom: 15px;
    }

    input[type="submit"]:hover {
        background-color: var(--main-color);
    }

    .account-details {
        background-color: var(--main-color);
        padding: 20px;
        border: 1px solid black;
        border-radius: 50px;
        margin-bottom: 15px;
        transition: background-color 0.3s ease;
        background-color: var(--second-bg-color);
        color: white;
        font-size: 15px;
        border :1px solid

    }

    .account-details:hover {
        background-color: green; 
    }

    hr {
        margin-top: 20px;
        margin-bottom: 20px;
        border: 0;
        border-top: 1px solid #ddd;
    }

    
</style>

</head>

<body>
    <div class="container">
        <div class="form mx-auto">
            <h1 class="text-center">Form Account Bank</h1>
            <form action="AccountBank.php" method="post">
                <div class="form-group row">
                    <label for="no_rek" class="col-4 col-form-label">Nomor Rekening</label>
                    <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-credit-card-alt"></i>
                                </div>
                            </div>
                            <input id="no_rek" name="no_rek" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <form action="AccountBank.php" method="post">
                <div class="form-group row">
                    <label for="no_rek" class="col-4 col-form-label">Nomor Customer</label>
                    <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class=><i class="fa fa-address-book" aria-hidden="true"></i></i>
                                </div>
                            </div>
                            <input id="no_rek" name="no_rek" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <form action="AccountBank.php" method="post">
                <div class="form-group row">
                    <label for="no_rek" class="col-4 col-form-label">Saldo Awal</label>
                    <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                <i class="fa fa-th-list" aria-hidden="true"></i>
                                </div>
                            </div>
                            <input id="no_rek" name="no_rek" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                
                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <?php

    require_once 'class_BankAccount.php';

        $ab1 = new BankAccount("010", 5000000, "Meh");
        $ab2 = new BankAccount("070", 10000000, "Fauzan");
        $ab3 = new BankAccount("123", 2000000, "Nasyiruddin");

    if (isset($_POST['submit'])) {
        $no_rek = $_POST['no_rek'];
        
        error_reporting(0);
        $account_BankNew = new BankAccount($no_rek,$no_customer,$saldo_awal);

        echo '</br></br></br>';
    echo '<div class="table-responsive mt-10">
            <table class="table table-striped">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">No.Rekening</th>
                        <th scope="col">Customer</th>
                        <th scope="col">Saldo</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <tr align="center">
                        <td>1</td>
                        <td>' . $ab1->nomor . '</td>
                        <td>Mehmed </td>
                        <td> 5000000 </td>

                        
                    </tr>
                    <tr align="center">
                        <td>2</td>
                        <td>' . $ab2->nomor . '</td>
                        <td>Fauzan</td>
                        <td>10000000 </td>
                        
                        
                    </tr>
                    <tr align="center">
                        <td>3</td>
                        <td>' . $ab3->nomor .  '</td>
                        <td>nasyiruddin </td>
                        <td>2000000 </td>                        
                    </tr>
                    <tr>
                          <td colspan="6"><button><a href="AccountBank.php">kembali</a></button></td>
                    </tr>
                </tbody>
          </table>
        </div>';
    }
    ?>
</body>

</html>