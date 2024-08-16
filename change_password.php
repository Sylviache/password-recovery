<?php include 'change_password_process.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>change password</title>
</head>
<body>
    <div class="container p-3 border border-5 rounded-3 " style="width:40%">
<h1 class="display-6 text-center p-2 bg-light">
    change password
</h1>
<form action="" method="post">
<div class="row mb-3 justify-content md-center">
<label for="inputemail" class="col-4 col-form-label">Email</label>
<div class="col-lg-auto">
    <input type="email" name="email" id="inputemail" required>

</div>
<div class="row mb-3 justify-content-md-center">
    <label for="inputpassword" class="col-4 col-form-label">New Password</label>
    <div class="col-lg-auto">
        <input type="password" name="new_password" id="inputpassword" class="form-control" required>
</div>
<div class="row mb3 justify-content-md-center">
    <div class="col-lg-auto">
        <button type="submit" class="btn btn-primary" name="change">Change</button>
    </div>
</div>
</div>
</div>
</form>
</div>
</body>
</html>