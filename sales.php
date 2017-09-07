<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Baguio Night Market</title>
     <link rel="icon" type="image/png" href="pics/icon.png">

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/clean-blog.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<style>
    td{
        color: white;
        text-align: center;
        align-content: center;
        border-bottom: 100px;
        font-family: sans-serif;
    }
    h1{
        color: white;
        text-align: center;
    }
</style>
</head>

<body style="background-color: black">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    Menu <i class="fa fa-bars"></i>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                     <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="product.html">Products</a>
                    </li>
                    <li>
                        <a href="tips.html">Tips</a>
                    </li>
                    <li>
                        <a href="join.html">Join Now</a>
                    </li>
                     <li>
                        <a href="about.html">About</a>
                    </li>
                    <li>
                         <a href="sales.php">Sales</a>
                    </li>
                    <li>
                        <a href="team.html">Team</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('pics/cover2.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1>Sales</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
     
    <!-- Main Content -->
   <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                
            <h1>Weekly Income</h1>
            <br>
            <?php
            //Step1
             $db = mysqli_connect('localhost','root','','table')
             or die('Error connecting to MySQL server.');
            ?>


            <?php
            //Step2
            $query = "SELECT * FROM sales";
            mysqli_query($db, $query) or die('Error querying database.');

            //Step3
            $result = mysqli_query($db, $query);
            $row = mysqli_fetch_array($result);

             echo 
                '<table border=1 align=center>
                <tr>
                <td>stall_number</td>
                <td>product_Name</td>
                <td>vendor_Name</td>
                <td>capital</td>
                <td>revenue</td>
                </tr>';

            while ($row = mysqli_fetch_array($result)) {
                echo'<tr>
                 <td>'.$row['stall_number'].'</td>
                 <td>'.$row['product_Name'].'</td>
                <td>'.$row['vendor_Name'].'</td>
                <td>'.$row['capital'].'</td>
                <td>'.$row['revenue'].'</td>
                 </tr>';
            }
            //Step 4
            mysqli_close($db);
            ?>


                
            </div>
       </div>
    </div>



    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/clean-blog.min.js"></script>

</body>

</html>
