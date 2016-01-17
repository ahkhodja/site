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
                        &nbsp;3. THE MANUSCRIPT FILES<i class =""></i>

                    </a>
                    <a href=""  class="list-group-item">
                        &nbsp;4. VALIDATE INFORMATIONS<i class =""></i>

                    </a>

                </div>

            </div>
        </div></div>

    <div class ="col-xs-9">

        <div id="contenu">
            <form class="form-horizontal col-lg-12" enctype="multipart/form-data">
                <div id="pi" class="partie">



                        <div class="form-group">

                            <legend>PAPER INFORMATIONS</legend>

                        </div>

                        <div class="row">

                            <div class="form-group">

                                <label for="text" class="col-lg-2 control-label">Title : </label>

                                <div class="col-lg-10">

                                    <input type="text" class="form-control" id="title" placeholder ="Title ... " name="title">

                                </div>

                            </div>

                        </div>

                        <div class="row">

                            <div class="form-group">

                                <label for="textarea" class="col-lg-2 control-label">Article Type : </label>

                                <div class="col-lg-10">

                                    <select name="type"  id="type" class="form-control">
                                        <option value="" >-- Please Select --</option>
                                        <option value='Review article'>Review article</option>
                                        <option value='Regular paper'>Regular paper</option>
                                        <option value="Application">Application</option>
                                        <option value="Communication">Communication</option>
                                        <option value="Feature Article">Feature Article</option>
                                        <option value="Highlight">Highlight</option>
                                    </select>

                                </div>

                            </div>

                        </div>

                        <div class="row">

                            <div class="form-group">
                                <label for="select" class="col-lg-2 control-label">Areas of Article : </label>
                                <div class="col-lg-10">
                                    <select name="area" id="area" class="form-control" >
                                        <option value="">-- Please Select --</option>
                                        <option value="Biomaterials">Biomaterials</option>
                                        <option value="Catalysis/surface science">Catalysis/surface science</option>
                                        <option value="Ceramics">Ceramics</option>
                                        <option value='Chemical properties'>Chemical properties</option>
                                        <option value="Electrical/magnetic organic materials">Electrical/magnetic organic materials</option>
                                        <option value="Electronic/ magnetic inorganic materials">Electronic/ magnetic inorganic materials</option>
                                        <option value='Inorganics materials'>Inorganics materials</option>
                                        <option value="Liquid crystals">Liquid crystals</option>
                                        <option value='Magnetic properties'>Magnetic properties</option>
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

                                <textarea name="abstract"  class="form-control" id="abstract" placeholder ="Abstract ... " rows="8"></textarea>

                            </div>

                        </div>

                    </div>
                    <div class="row">

                        <div class="form-group">

                            <label for="text" class="col-lg-2 control-label">Keywords : </label>

                            <div class="col-lg-10">

                                <textarea  name="keyword" class="form-control" id="text" placeholder ="Keywords should be separated by semicolons, e.g. electroceramics; metallic ; ceramics. *"></textarea>

                            </div>

                        </div>

                    </div>
                    <br/>
                    <button class="pull-right btn btn-primary" id="next_1">&nbsp;&nbsp;Next&nbsp;&nbsp;








                </div>
                <div id="ac" class="partie">

                    <legend> ABOUT CO-AUTEUR </legend>
                    <div class="row" id="debut"><button class="col-lg-pull-5 btn btn-success" id="add">&nbsp;&nbsp;Add co-auteur&nbsp;&nbsp;</button><button class="btn btn-danger " id="remove">&nbsp;&nbsp;remove co-auteur&nbsp;&nbsp;</button></div>
                    <span id="co1">
                        <div class="row"><p class="text-center">Co-auteur 1</p> </div>
                    <div class="row">

                        <div class="form-group">

                            <label for="text" class="col-lg-2 control-label">First Name : </label>

                            <div class="col-lg-8">

                                <input type="text" class="form-control" id="co_fn1" placeholder ="First Name ... ">

                            </div>

                        </div>

                    </div>
                    <div class="row">

                        <div class="form-group">

                            <label for="text" class="col-lg-2 control-label">Middle Name : </label>

                            <div class="col-lg-8">

                                <input type="text" class="form-control" id="co_mn1" placeholder ="Middle Name ... ">

                            </div>

                        </div>

                    </div>
                    <div class="row">

                        <div class="form-group">

                            <label for="text" class="col-lg-2 control-label">Last Name : </label>

                            <div class="col-lg-8">

                                <input type="text" class="form-control" id="co_ln1" placeholder ="Last Name ... ">

                            </div>

                        </div>

                    </div>
                    <div class="row">

                        <div class="form-group">

                            <label for="text" class="col-lg-2 control-label">Affiliation : </label>

                            <div class="col-lg-8">

                                <input type="text" class="form-control" id="co_af1" placeholder ="Affiliation ... ">

                            </div>

                        </div>

                    </div>
                    <div class="row">

                        <div class="form-group">

                            <label for="text" class="col-lg-2 control-label">Adresse : </label>

                            <div class="col-lg-8">

                                <textarea  class="form-control" id="co_ad1" placeholder ="Adresse ... " rows="3"></textarea>

                            </div>

                        </div>

                    </div>
                    <div class="row">

                        <div class="form-group">

                            <label for="text" class="col-lg-2 control-label">E-mail : </label>

                            <div class="col-lg-8">

                                <input type="email" class="form-control" id="co_em1" placeholder ="Email ... ">

                            </div>

                        </div>

                    </div>
                        </span><span id="co2"></span>

                    <button class="pull-left btn btn-primary" id="prev_1">Previous</button><button class="pull-right btn btn-primary" id="next_2">&nbsp;Next&nbsp;</button>
                </div>
                <div  class="partie">
                    <legend> THE MANUSCRIPT FILES </legend>
                    <div class="row">

                        <div class="form-group">

                            <label for="textarea" class="col-lg-2 control-label">FILE TYPE: </label>

                            <div class="col-lg-6">

                                <select name="type_of_paper"  id="type_file" class="form-control" >
                                    <option value="" selected="selected" >-- Please Select --</option>
                                    <option value="word">Word</option>
                                    <option value="latex">Latex</option>

                                </select>


                            </div>
                            <div class="col-lg-1 add">
                                    <span class="btn btn-default btn-file" id="browse">
                                         Browse... <input type="file" id="main">
                                    </span>
                            </div>

                        </div>

                    </div>
                    <div class="row">
                        <table class="table  table-striped table-condensed">

                            <caption>
                            </caption>
                            <thead>
                            <tr>
                                <th width="65%" class="text-center">MAIN FILE</th>
                                <th width="5%" class="text-center">TYPE</th>
                                <th width="10%" class="text-center">SIZE</th>
                                <th width="15%" class="text-center">PROGRESSION</th>
                                <th width="5%" class="text-center">ACTION</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td id="file_title" class="text-center">----</td>
                                <td id="file_type" class="text-center">----</td>
                                <td id="file_taille" class="text-center">----</td>
                                <td>
                                    <div class="progress bar">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                             aria-valuemin="0" aria-valuemax="100" style="width:0%" id="main_progresse">
                                            0%
                                        </div>
                                    </div>
                                </td>
                                <td><button type="button" class="btn btn-danger btn_smal" id="delete"><i class ="fa fa-trash-o fa-1x "></i></button></td>
                            </tr>
                            </tbody>

                        </table>

                    </div>
                    <div class="row">
                        <span class="btn btn-default btn-file" id="add_images">
                                         ADD FIGURES <input type="file" id="image">
                                    </span>
                        <table class="table  table-striped table-condensed table_image">

                            <caption>
                            </caption>
                            <thead>
                            <tr>
                                <th width="65%" class="text-center">IMAGES</th>
                                <th width="5%" class="text-center">TYPE</th>
                                <th width="10%" class="text-center">SIZE</th>
                                <th width="15%" class="text-center">PROGRESSION</th>
                                <th width="5%" class="text-center">ACTION</th>
                            </tr>
                            </thead>
                            <tbody class="block">

                            </tbody>

                        </table>
                    </div>

                    <button class="pull-left btn btn-primary" id="prev_2">Previous</button><button class="pull-right btn btn-primary" id="next_3">&nbsp;Next&nbsp;</button>

                </div>
                <div  class="partie">

                    <div class="form-group">
                        <legend> VALIDATE INFORMATIONS </legend>

                    </div>

                    <div class="row">

                        <div class="form-group">

                            <label for="text" class="col-lg-2 control-label">Title : </label>

                            <div class="col-lg-10">

                                <label for="text" class=" control-label text-left texte"id="titre" > </label>

                            </div>

                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group">

                            <label for="textarea" class="col-lg-2 control-label">Article Type : </label>

                            <div class="col-lg-10">

                                <label for="text" class=" control-label text-left texte"id="type_article" > </label>

                            </div>

                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group">
                            <label for="select" class="col-lg-2 control-label">Areas of Article : </label>
                            <div class="col-lg-10">
                                <label for="text" class=" control-label text-left texte"id="area_article" > </label>
                            </div>

                        </div>
                    </div>
                    <div class="row">

                        <div class="form-group">

                            <label for="text" class="col-lg-2 control-label">Abstract : </label>

                            <div class="col-lg-10">

                                <label for="text" class="  text-left texte"id="abstract_article" > </label>

                            </div>

                        </div>

                    </div>
                    <div class="row">

                        <div class="form-group">

                            <label for="text" class="col-lg-2 control-label">Keywords : </label>

                            <div class="col-lg-10">

                                <label for="text" class=" control-label text-left texte"id="keyword_article" > </label>

                            </div>

                        </div>

                    </div>



                    <div id="co_auteur"></div>

                    <div class="row">
                        <table class="table  table-striped table-condensed">

                            <caption>
                            </caption>
                            <thead>
                            <tr>
                                <th width="85%" class="text-center">MAIN FILE</th>
                                <th width="5%" class="text-center">TYPE</th>
                                <th width="10%" class="text-center">SIZE</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td id="f_title" class="text-center">----</td>
                                <td id="f_type" class="text-center">----</td>
                                <td id="f_taille" class="text-center">----</td>

                            </tr>
                            </tbody>

                        </table>

                    </div>

                    <div class="row">
                        <table class="table  table-striped table-condensed">

                            <caption>
                            </caption>
                            <thead>
                            <tr>
                                <th width="85%" class="text-center">IMAGES FILE</th>
                                <th width="5%" class="text-center">TYPE</th>
                                <th width="10%" class="text-center">SIZE</th>

                            </tr>
                            </thead>
                            <tbody id="image_info">

                            </tbody>

                        </table>

                    </div>
                    <button class="pull-left btn btn-primary" id="prev_3">Previous</button><button class="pull-right btn btn-success" id="next_4">&nbsp;Submit&nbsp;</button>
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

<!--suppress JSJQueryEfficiency -->
<script type="text/javascript" src="js/submission.js"></script>
</body>
</html>