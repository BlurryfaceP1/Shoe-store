<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Videos</title>
	
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/business-casual.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    
<?php
		$Username = null;
		if(!empty($_SESSION["Username"]))
		{$Username = $_SESSION["Username"];}
?>
</head>

<body>
	<div class="brand">The Shoebox Shoe Store</div>
    <div class="address-bar"><strong>Best</strong> Shoes for Everyone</div>

    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">The Shoebox Shoe Store</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                    <li><a href="index.php">Home</a></li>
					<li><a href="video.php">Video</a></li>
					<li><a href="shop.php">Shop</a></li>
                    <li><a href="about.php">About</a></li>
					<li><a href="#" onclick="ManagementOnclick();">Administration</a></li>
					<?php if($Username == null){echo '<li><a href="register.php?ActionType=Register">Register</a></li>';} ?>
					<?php if($Username == null){echo '<li><a href="Login.php?Role=User">Login</a></li>';} else {echo '<li><a href="Logout.php">Logout</a></li>';} ?>
                </ul>
            </div>
        </div>
    </nav>

    <h3>Our top Three Shoe Brands</h3>
    <table cellspacing="10" class="table1">
        
        
        <tr>
		
        <td><iframe width="430" height="315" src="https://www.youtube.com/embed/0trXUYYeNHY" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
			<p>Most Famous Nike Commercials</p>
            </td>
            <td><iframe width="430" height="315" src="https://www.youtube.com/embed/7embkXaArVQ" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
			<p>PUMA Running Mobium Elite Speed Design Inspiration</p>
            </td>
            <td><iframe width="430" height="315" src="https://www.youtube.com/embed/f0R0e79URgQ" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
			<p>Fila Commercial</p>
            </td>
        </tr>
    </table>
<style>
h3{
text-align: center;
background-color:White;
}
td,th{
    padding: 15px;
  text-align: left;
  background-color:white;

}
tr:hover {background-color:grey;}
tr,.table1{
    display:flex;
    justify-content:center;
    flex-direction: row;

}
</style>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
				<p>Copyright &copy; The Shoebox Shoe Store 2021</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script>
		function addToCartOnclick(ProductID)
		{	
			if(confirm("Are you sure you want to add this product to your cart?") == true){
			window.open("Order.php?ProductID="+ProductID,"_self",null,true);
			}
		}
	</script>

</body>

</html>
