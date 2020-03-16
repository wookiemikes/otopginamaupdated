
<!DOCTYPE html>
<html>
<head>
  <link rel="icon" type="image/png" href="assets/img/websiteicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    OTOP.Ginama || Admin Login
  </title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link href="assets/css/dashboardlogin.css" rel="stylesheet" />
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"> 
  </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function (){
      $("#adminlogin").on('click',function(){
        var username = $('#username').val();
        var password = $('#password').val();
        
        if (username == "" || password == "")
          alert('Wrong Input, Please check your username or password');
        else {
          $.ajax({
            url: 'dashboardlogin1.php',
            method: 'POST',
            data: {
              adminlogin: 1,
              uname:username,
              pwd:password
            },
            success: function (response) {
              $("#response").html(response);

              if (response.indexOf('success') >= 0)
              window.location = 'dashboard.php';
            },
            datatype: 'text'
          });
        }
      });
    }); 
  </script>

  <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

</head>
<body>
  <div class="login-page">
    <div class="form">
      <form class="login-form" method="post" action="dashboardlogin1.php">
        <img class="mb-4" src="assets/img/ginamalogo.jpg" alt="" width="150" height="120">
        <input type="text" placeholder="username" id="username" name="username" />
        <input type="password" placeholder="password" id="password" name="password" />
        <button type="button" name="adminlogin" id="adminlogin">login</button>
      </form>
    </div>
  </div>
</body>

</html>