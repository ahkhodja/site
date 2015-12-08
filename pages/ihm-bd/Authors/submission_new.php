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

        <div class="col-sm-12">
            <div class="panel panel-info">


                <div class="list-group etape_progresse">
                    <a href=""  class="list-group-item encours">
                        &nbsp; 1. PAPER INFORMATIONS<i class ="fa fa-pencil fa-1x pull-right "></i>

                    </a>
                    <a href="" class="list-group-item " >
                         &nbsp;2. ABOUT CO-AUTHORS<i class =""></i>

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
            <form class="form-horizontal col-lg-12">
                <div id="pi" class="partie">



                        <div class="form-group">

                            <legend>PAPER INFORMATIONS</legend>

                        </div>

                        <div class="row">

                            <div class="form-group">

                                <label for="text" class="col-lg-2 control-label">Title : </label>

                                <div class="col-lg-10">

                                    <input type="text" class="form-control" id="text" placeholder ="Title ... ">

                                </div>

                            </div>

                        </div>

                        <div class="row">

                            <div class="form-group">

                                <label for="textarea" class="col-lg-2 control-label">Article Type : </label>

                                <div class="col-lg-10">

                                    <select name="type_of_paper"  id="type" class="form-control" >
                                        <option value="" >-- Please Select --</option>
                                        <option value='review'>Review article</option>
                                        <option value='regular'>Regular paper</option>
                                        <option value="application">Application</option>
                                        <option value="communication">Communication</option>
                                        <option value="feature_article">Feature Article</option>
                                        <option value="highlight">Highlight</option>
                                    </select>

                                </div>

                            </div>

                        </div>

                        <div class="row">

                            <div class="form-group">
                                <label for="select" class="col-lg-2 control-label">Areas of Article : </label>
                                <div class="col-lg-10">
                                    <select id="select" class="form-control" >
                                        <option value="">-- Please Select --</option>
                                        <option value="biomaterials">Biomaterials</option>
                                        <option value="catalysis_surface science">Catalysis/surface science</option>
                                        <option value="ceramics">Ceramics</option>
                                        <option value='chemical_properties'>Chemical properties</option>
                                        <option value="electrical_magnetic_organic_materials">Electrical/magnetic organic materials</option>
                                        <option value="electrical_magnetic_inorganic_materials">Electronic/ magnetic inorganic materials</option>
                                        <option value='inorganics_materials'>Inorganics materials</option>
                                        <option value="liquid_crystals">Liquid crystals</option>
                                        <option value='magnetic_properties'>Magnetic properties</option>
                                        <option value="metals_and_alloys">Metals and Alloys</option>
                                        <option value="nanotechnology">Nanotechnology</option>
                                        <option value="optical_organic_materials">Optical organic materials</option>
                                        <option value='optical_properties'>Optical properties</option>
                                        <option value='organics_materials'>Organics materials</option>
                                        <option value="polymers_composites">Polymers/composites</option>
                                        <option value="Semiconductors">Semiconductors</option>
                                        <option value='structural_properties'>Structural properties</option>
                                        <option value="sol-gel">Sol-gel</option>
                                        <option value="solid_state_ionics">Solid state ionics</option>
                                        <option value="theoretical">Theoretical</option>
                                        <option value='thermodynamic_properties'>Thermodynamic properties</option>
                                        <option value="thin_films">Thin films</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                    <div class="row">

                        <div class="form-group">

                            <label for="text" class="col-lg-2 control-label">Abstract : </label>

                            <div class="col-lg-10">

                                <textarea  class="form-control" id="text" placeholder ="Abstract ... " rows="8"></textarea>

                            </div>

                        </div>

                    </div>
                    <div class="row">

                        <div class="form-group">

                            <label for="text" class="col-lg-2 control-label">Keywords : </label>

                            <div class="col-lg-10">

                                <textarea  class="form-control" id="text" placeholder ="Keywords should be separated by semicolons, e.g. electroceramics; metallic ; ceramics. *"></textarea>

                            </div>

                        </div>

                    </div>
                    <br/>
                    <button class="pull-right btn btn-primary" id="next_1">Next</button>









                </div>
                <div id="ac" class="partie">

                    <legend> ABOUT CO-AUTEUR </legend>

                    <div class="row">

                        <div class="form-group">

                            <label for="text" class="col-lg-2 control-label">First Name : </label>

                            <div class="col-lg-8">

                                <input type="text" class="form-control" id="text" placeholder ="First Name ... ">

                            </div>

                        </div>

                    </div>
                    <div class="row">

                        <div class="form-group">

                            <label for="text" class="col-lg-2 control-label">Middle Name : </label>

                            <div class="col-lg-8">

                                <input type="text" class="form-control" id="text" placeholder ="Middle Name ... ">

                            </div>

                        </div>

                    </div>
                    <div class="row">

                        <div class="form-group">

                            <label for="text" class="col-lg-2 control-label">Last Name : </label>

                            <div class="col-lg-8">

                                <input type="text" class="form-control" id="text" placeholder ="Last Name ... ">

                            </div>

                        </div>

                    </div>
                    <div class="row">

                        <div class="form-group">

                            <label for="text" class="col-lg-2 control-label">Affiliation : </label>

                            <div class="col-lg-8">

                                <input type="text" class="form-control" id="text" placeholder ="Affiliation ... ">

                            </div>

                        </div>

                    </div>
                    <div class="row">

                        <div class="form-group">

                            <label for="text" class="col-lg-2 control-label">Adresse : </label>

                            <div class="col-lg-8">

                                <textarea  class="form-control" id="text" placeholder ="Adresse ... " rows="3"></textarea>

                            </div>

                        </div>

                    </div>
                    <div class="row">

                        <div class="form-group">

                            <label for="text" class="col-lg-2 control-label">E-mail : </label>

                            <div class="col-lg-8">

                                <input type="email" class="form-control" id="text" placeholder ="Email.. ">

                            </div>

                        </div>

                    </div>
                    <div class="row"><button class="col-lg-pull-5 btn btn-primary " id="add">&nbsp;&nbsp;Add co-auteur&nbsp;&nbsp;</button><br/></div>

                </div>




            </form>
            <br/>

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
        $("#next_1").click(function(e) {
            e.stopPropagation();
            current_div = $(this).parent();
            next_div = $(this).parent().next();
            next_div.show();
            current_div.hide();
            $(".etape_progresse a").eq($(".partie").index(current_div)).removeClass("encours");
            $(".etape_progresse a i").eq($(".partie").index(current_div)).removeClass("fa fa-pencil fa-1x pull-right");
            $(".etape_progresse a i").eq($(".partie").index(current_div)).addClass("fa  fa-check fa-1x pull-right");
            $(".etape_progresse a").eq($(".partie").index(next_div)).addClass("encours");
            $(".etape_progresse a i").eq($(".partie").index(next_div)).addClass("fa  fa-pencil fa-1x pull-right");
            return false;

        });
    });
</script>
</body>
</html>