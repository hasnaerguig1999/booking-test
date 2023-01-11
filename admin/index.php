<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link src="./css/bootstrap.min.css">
    <link src="./css/bootstrap.css">

    <script type="text/javascript" src="./js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Admin Login</title>
</head>
<body >
    <style>
        div.login-form{
            position: absolute;
            top:50%;
            left:50%;
            transform: translate(-50%,-50%);
        }
    </style>
     <div class="login-form text-center rounded bg-white shadow overflow-hidden">
        <form>
            <h4 class="bg-dark text-white py-3">Admin Login</h4>
            <div>
                <div class="mb-4">
                <input  name="admin_name" type="text" class="form-control shadow-none text-center" placeholder="Admin name">
            </div>
            <div class="mb-4">
               
                <input name="admin_pass" type="password" class="form-control shadow-none text-center">
            </div>
            <button name="login   " type="submit" class="btn text-green custom-bg shadow">Login</button>
        </form>
     </div>
    
    
</body>
</html>