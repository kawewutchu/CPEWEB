
<html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
    <div class="col-xs-5 col-md-5 col-sm-5">
    </div>
    <div style="margin-top: 100px; padding-bottom: 50px;border-style: ridge; border-radius: 5%" class="col-xs-2 col-md-2 col-sm-2 ">

        <center><p style="font-size: 30px;padding-top:15px;color:DarkGray">Admin</p>
        <img src="logo.png" class="img-responsive" alt="Responsive image" style="width:120px;height:auto; margin-bottom: 15px;"></center>
        <form action="check-login.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control" name="username" placeholder="User">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password">
            </div>

            <center><input style="margin-top: 20px" type="submit" class="btn btn-info" value = "Login"/></center>
        </form>
    </div>
    <div class="col-xs-5 col-md-5 col-sm-5">
    </div>
</body>
</html>