<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>Spark | Home</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/navbar-fixed/">

    <!-- Bootstrap core CSS -->

<link href="css/stylesheet.css" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


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
    <!-- Custom styles for this template -->
<link href="css/navbar-top-fixed.css" rel="stylesheet">
</head>

<body>
  <?php
  include 'navbar.php';
  ?> 

<main role="main" class="container">

	<div class="jumbotron">
				<p class="lead">WELCOME to</p>
				<h1>SPARK'S BANK</h1>
	</div>

<div class="jumbotron">
    <div class="display_table" align="center">
      <table class='table'>
            <tr>
              <td align="center"><img src="img/user.jpg" class="img-fluid"></td>
			  
              <td align="center"><img src="img/transfer.jpg" class="img-fluid"></td>
			 
              <td align="center"><img src="img/history.jpg" class="img-fluid"></td>  
            </tr>
			
			 <tr>
              <td align="center"><a href="createuser.php"><button class="btn btn-primary" >Create a User</button></a></td>
			  
			  <td align="center"><a href="transfermoney.php"><button class="btn btn-primary">View All Customers</button></a></td>
			
			  <td align="center"><a href="history.php"><button class="btn btn-primary">Transaction History</button></a></td>
            </tr>
      </table>
  </div><!--End of row-->

 </div>
</main>

<footer class="text-center mt-5 py-2">
    <p>&copy 2021. Made by <b>Mihir Parmar</b> <br> GRIP July 2021</p>
</footer>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
