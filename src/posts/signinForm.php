
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top | Gangサイト</title>
    <link rel="stylesheet" href="./assets/css/reset.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/style.css">

    <!-- JQuery -->
    <script defer type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script defer type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script defer type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script defer type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
    <script defer src="./assets/js/app.js"></script>
</head>
  <body>
    
    <div class="container" sryle="height:1300px;">
      <div class="row mt-5 pt-5">
        <?php include(__DIR__ . '/../components/Header.php'); ?>
        
        <h3 class="col-12 text-info">サインイン</h3>
        <br>
        <br>
        <br>
        <form action="signin.php" method="post">
          <div class="form-group">
            <p>メールアドレス</p>
            <input type="email" class="form-control" name="email" placeholder="email" >
          </div>
          <div class="form-group">
            <p>パスワード</p>
            <input type="password" class="form-control" name="password" placeholder="password">
          </div>
            <button type="submit" class=" btn btn-info ">入室</button>
        </form>
      </div>
    </div>
  </body>
</html>