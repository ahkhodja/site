<?php
/**
 * Created by PhpStorm.
 * User: URTI
 * Date: 02/12/2015
 * Time: 13:07
 */
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Document sans nom</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link href="../../../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/font-awesome.css" type="text/css" />
    <link rel="stylesheet" href="css/submission.css" type="text/css" />
<link href="https://cdn.datatables.net/1.10.10/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/cssboot.css" rel="stylesheet" type="text/css">
<meta name="viewport" content="width=device-width, intial-scale=1.0">
    <script src="../../js/jquery-1.9.1.min.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

<!--[if lt IE 9]>

  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>

  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

<![endif]-->

</head>
<body>
<div class="container-fluid">
    <div class="col-lg-12">
        <nav class ="navbar navbar-inverse">
            <div class ="navbar-header ">
                <a class ="navbar-brand " href ="#">AJAM </a>
            </div>
            <ul class ="nav navbar-nav ">
                <li class="divider"></li>
                <li class =" active "> <a href ="#"> Home </a> </li >
                <li> <a href ="#">Ethics </a> </li >
                <li> <a href ="#">Author Guidelines</a> </li >
                <li> <a href="../../../php/log_out.php" id="log-out">Log out</a> </li >
            </ul>
            <form class ="navbar-form pull-right ">
                <input type ="text" style =" width : 150px " class ="input-sm form-control " placeholder =" Recherche ">
                <button type ="submit" class ="btn btn-primary btn-sm">
                    <i class ="fa   fa-search fa-1x "></i>&nbsp;  Chercher </button>
            </form>
        </nav>
    </div>
</div>
<div class="container-fluid">
    <div class="col-xs-3">
        <div class="col-sm-12"><div id="detaille">





            </div></div>
        <div class="col-sm-12">
            <div class="panel panel-info">


                <div class="list-group">
                    <a href="#" i class="list-group-item">
                        &nbsp; 1. Paper informations

                    </a>
                    <a href="" class="list-group-item">
                         &nbsp;2. About co-authors

                    </a>
                    <a href=""  class="list-group-item">
                        &nbsp;3. The manuscript files

                    </a>
                    <a href=""  class="list-group-item">
                        &nbsp;4. Validate informations

                    </a>

                </div>





            </div>
        </div></div>

    <div class ="col-xs-9">

        <div id="contenu">

                <div id="pi">
                    <p>Paper information</p>
                    <button class ="pull-right btn btn-primary" id="next_1">Next </button >



                </div>
                <div id="ac">

                    <p>About co auteur</p>

                </div>






        </div>
    </div>

    <footer class="row col-sm-12">
        <div class="panel panel-body">
            <p class="text-center">Copyright &copy; 2015 - All Rights Reserved - <a href="http://www.csc.dz">(CRTI)</a></p>
        </div>
    </footer>
</div>

<script>
    $(document).ready(function() {
        $("#next_1").click(function () {
            alert();
            current_div = $(this).parent();
            next_div = $(this).parent().next();
            next_div.show();
            current_div.hide();


        });
    });
</script>
</body>
</html>