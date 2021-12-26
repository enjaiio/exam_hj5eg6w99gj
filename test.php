<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>ღB T 2 T W• 腐腐分享間</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="test/style.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
  <body background="1.jpg" >

    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">ღB T 2 T W•</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">自我介紹 <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="random-selector.html">RandomSelect</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="club-course.html">ClubCourse</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="mind-quiz.html">MindQuiz</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="youtube-player.html">YoutubePlayer</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">test</a>
            </li>

            <!--
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Disabled</a>
            </li>
            -->

          </ul>
          <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
    </header>

   
    <main>
    <!--<form method = "post" action = "gfg.php"> 
  
        <div id = "form_page"> 
 
            <div id = "form_body"> 
                <div id = "head"> 
                    <h1 id = "heading">GFG</h1> 
                </div> 
                <br /> 
                <div id = "input_name" class = "input"> 
                    <input id = "name" type = "text"
                        Placeholder = "Name" name = "name"
                        required> 
                </div> 
                <div id = "input_class" class = "input"> 
                    <input type = "text" placeholder = 
                        "Branch" name = "branch" required> 
                </div> 
                <div id = "input_year" class = "input"> 
                    <input id = "school" type = "text"
                        name = "year"
                        placeholder = "Year"> 
                </div> 
 
                <div class = "id input"> 
                    <input id = "submit" type = "submit"
                        name = "submit" value = "submit"
                        onclick = "on_submit()"> 
                </div> 
            </div> 
        </div> 
    </form>-->
      <br>
      <a href="./sign">還沒註冊嗎?</a><br>
       <form action="logcheck.php" method="post"><br>
         <input type="text" name="account" value="" placeholder="輸入帳號"><br>
         <input type="password" name="password" value="" placeholder="輸入密碼"><br>
         <input type="submit" name="" value="登入"><br>
      </form>
        <?php if ($_GET['sig_suc']!=''): ?>
          <?php echo $_GET['sig_suc'] ?>
        <?php endif; ?>
          <?php if ($_GET['error']!=''): ?>
            <?php echo $_GET['error'] ?>
        <?php endif; ?>
        <?php
          ini_set("display_errors", "On");
          require_once "../method/connect.php";
          $account = $_POST['account'];
          $password = $_POST['password'];
          $select = $connect -> prepare("SELECT account,password FORM member WHERE account = :acc AND password = :pw");
          $select -> execute(array(':acc' => $account,':pw' => $password));
          $result = $select -> fetch(PDO::FETCH_ASSOC) ;
          if ($result['account']==$account&&$result['password']==$password) {
            session_start();
            $_SESSION['member'] = $result;
            header("location:./?error=登入成功");
          }elseif ($result['password']!=$password||$result['account']!=$account) {
                  header("location:./?error=帳密錯誤");
          }elseif ($result['password']!=''||$result['account']!='') {
                  header("location:./?error=輸入不完全");
          }
      
         ?>
        <hr class="featurette-divider">
        </div><!-- /.container -->	
    </main>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="assets/js/vendor/holder.min.js"></script>
  </body>
</html>