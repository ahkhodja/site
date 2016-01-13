/**
 * Created by URTI on 20/12/2015.
 */
$(document).ready(function() {
    var numimg=1;
    $('#browse').hide();
    $('#add_images').hide();
    $('.table_image').hide();
    var nbco=1;
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
        $('#remove').prop('disabled', false);
        return false;

    });
    $('#add').click(function(e){
        nbco=nbco+1;

        $('#co'+nbco).append("<div class=\"row\"><p class=\"text-center\">Co-auteur "+nbco+"</p> </div><div class=\"row\"><div class=\"form-group\"><label for=\"text\" class=\"col-lg-2 control-label\">First Name : </label> <div class=\"col-lg-8\"><input type=\"text\" class=\"form-control\" id=\"co_fn"+nbco+"\" placeholder =\"First Name ... \" name=\"fname_co"+nbco+"\"> </div></div></div><div class=\"row\"><div class=\"form-group\"><label for=\"text\" class=\"col-lg-2 control-label\">Middle Name : </label><div class=\"col-lg-8\"><input type=\"text\" class=\"form-control\" id=\"co_mn"+nbco+"\" placeholder =\"Middle Name ... \"name=\"mname_co"+nbco+"\"></div></div></div><div class=\"row\"><div class=\"form-group\"><label for=\"text\" class=\"col-lg-2 control-label\">Last Name : </label><div class=\"col-lg-8\"><input type=\"text\" class=\"form-control\" id=\"co_ln"+nbco+"\" placeholder =\"last Name ... \" name=\"lname_co"+nbco+"\"></div></div></div><div class=\"row\"><div class=\"form-group\"><label for=\"text\" class=\"col-lg-2 control-label\">Affiliation : </label><div class=\"col-lg-8\"><input type=\"text\" class=\"form-control\" id=\"co_af"+nbco+"\" placeholder =\"affiliation ... \"></div></div></div><div class=\"row\"><div class=\"form-group\"><label for=\"text\" class=\"col-lg-2 control-label\">Adresse: </label><div class=\"col-lg-8\"><textarea  class=\"form-control\" id=\"co_ad"+nbco+"\" placeholder =\"Middle Name ... \" rows=\"3\"></textarea></div></div></div><div class=\"row\"><div class=\"form-group\"><label for=\"text\" class=\"col-lg-2 control-label\">Email : </label><div class=\"col-lg-8\"><input type=\"text\" class=\"form-control\" id=\"co_em"+nbco+"\" placeholder =\"Email ... \"></div></div></div>");
        $('#co'+nbco).after("<span id=\"co"+(nbco+1)+"\"></span>");
        if(nbco!=0){ $('#remove').prop('disabled', false);}
        return false;

    });
    $('#remove').click(function(e){


        $('#co'+nbco).remove();
        $('#co'+(nbco+1)).remove();
        if(nbco!=1){
            $('#co'+(nbco-1)).after("<span id=\"co"+nbco+"\"></span>");}else{$('#debut').after("<span id=\"co"+nbco+"\"></span>")
            $('#remove').prop('disabled', true);
        }
        nbco=nbco-1;
        return false;

    });
    $("#next_2").click(function(e) {
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
    $("#next_3").click(function(e) {
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

        $('#titre').text($('#title').val());
        $('#type_article').text($('#type').val());
        $('#area_article').text($('#area').val());
        $('#abstract_article').text($('#abstract').val());
            $("#co_auteur").html('');
        for(var i=nbco;i>=1;i--) {
            $("#co_auteur").after(" <div id=\"co_"+i+"\"> <div class=\"row\"><p class=\"text-center\">Co-auteur " + i + "</p> </div><div class=\"row\"><div class=\"form-group\"><label for=\"text\" class=\"col-lg-2 control-label\">First Name : </label><div class=\"col-lg-8\"><label for=\"text\" class=\" control-label text-left texte\"id=\"cof_fn" + i + "\" > </label></div></div></div><div class=\"row\"><div class=\"form-group\"><label for=\"text\" class=\"col-lg-2 control-label\">Middle Name : </label><div class=\"col-lg-8\"><label for=\"text\" class=\" control-label text-left texte\"id=\"cof_mn" + i + "\" > </label></div> </div></div><div class=\"row\"><div class=\"form-group\"><label for=\"text\" class=\"col-lg-2 control-label\">Last Name : </label><div class=\"col-lg-8\"><label for=\"text\" class=\" control-label text-left texte\"id=\"cof_ln" + i + "\" > </label> </div></div></div><div class=\"row\"><div class=\"form-group\"><label for=\"text\" class=\"col-lg-2 control-label\">Affiliation : </label><div class=\"col-lg-8\"><label for=\"text\" class=\" control-label text-left texte\"id=\"cof_af" + i + "\" > </label></div></div></div><div class=\"row\"><div class=\"form-group\"><label for=\"text\" class=\"col-lg-2 control-label\">Adresse : </label><div class=\"col-lg-8\"><label for=\"text\" class=\" control-label text-left texte\"id=\"cof_ad" + i + "\" > </label></div> </div></div><div class=\"row\"><div class=\"form-group\"><label for=\"text\" class=\"col-lg-2 control-label\">E-mail : </label><div class=\"col-lg-8\"><label for=\"text\" class=\" control-label text-left texte\"id=\"cof_add" + i + "\" > </label></div></div></div></div>");
        }
        return false;}

    );
    $("#prev_1").click(function(){
        current_div = $(this).parent();
        previous_div = $(this).parent().prev();
        previous_div.show();
        current_div.hide();
        easing: 'easeInOutBack'
        return false;

    });
    $("#prev_2").click(function(){
        current_div = $(this).parent();
        previous_div = $(this).parent().prev();
        previous_div.show();
        current_div.hide();
        easing: 'easeInOutBack'
        return false;

    });
    $("#prev_3").click(function(){
        current_div = $(this).parent();
        previous_div = $(this).parent().prev();
        previous_div.show();
        current_div.hide();
        easing: 'easeInOutBack'
        for(var i=nbco;i>=1;i--) {
            $("#co_"+i).remove();      }
        return false;

    });
    $('#type_file').change(function() {
        if($('#type_file').val()==''){
            $('#browse').hide();
        }else
        {
            $('#browse').show();
        }

    });
    function getExtension(filename)
    {
        var parts = filename.split(".");
        return (parts[(parts.length-1)]);
    }
    function verifFileExtension(champ,listeExt)
    {   var resultat=false;
        filename = document.getElementById(champ).value.toLowerCase();
        fileExt = getExtension(filename);
        for (i=0; i<listeExt.length; i++)
        {
            if ( fileExt == listeExt[i] )
            {
                resultat=true;
            }
        }

        return resultat;
    }
    $(document).on('change', '#main', function() {
        var input = $(this);
        var extensionsValides;
        var file_t=$("#type_file").val();
        if(file_t=="latex"){
            extensionsValides=new Array('tex');
        }else
        {
            if(file_t=="word") {
                extensionsValides=new Array('doc','docx','avi');
            }
        }
        var res=verifFileExtension('main',extensionsValides);
        if (res){
            $('#file_title').html(input.val().replace(/\\/g, '/').replace(/.*\//, '')) ;
            var fileInput=document.getElementById('main');
            $("#file_taille").html((fileInput.files[0].size/1024/1024).toFixed(2)+' Mo');
            $("#file_type").html($("#type_file").val());
            var data= new FormData();
            data.append('ajax','true');
            data.append('file',fileInput.files[0]);
            data.append('id',15);
            var request= new XMLHttpRequest();
            request.upload.addEventListener('progress',function(event) {
                if (event.lengthComputable) {
                    var percent = event.loaded / event.total;
                    var progresse = Math.round(percent * 100);
                    $('#main_progresse').width(progresse+'%');
                    $('#main_progresse').html(progresse+'%');
                    if(progresse==100) {
                        $('#add_images').show();
                    }
                }

            });
            request.upload.addEventListener('load',function(event){



            });
            request.upload.addEventListener('error',function(event){
                alert('upload fail');
            });
            request.open('POST','fichier.php');
            request.setRequestHeader('Cache-control','no-cache');
            request.send(data);

        }else
        {
            alert('type de fichier invalide');
        }


    });
    $(document).on('change', '#image', function() {


        extensionsValides=new Array('jpg','gif','png');
        var input = $(this);
        var imgInput=document.getElementById('image');
        var res=verifFileExtension('image',extensionsValides);

        if (res){
            $(".table_image").show();
            $(".table_image tbody").append(" <tr><td  class=\"text-center\">"+input.val().replace(/\\/g, '/').replace(/.*\//, '')+"</td><td class=\"text-center\">"+getExtension(input.val()).toUpperCase()+"</td><td class=\"text-center\">"+(imgInput.files[0].size/1024).toFixed(2)+' ko'+"</td><td><div class=\"progress bar\"><div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"70\"aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:0%\" id=\"img_progresse"+numimg+"\">0%</div></div></td><td><button type=\"button\" class=\"btn btn-danger btn_smal delete_im\" id=\"delete_im\"><i class =\"fa fa-trash-o fa-1x \"></i></button></td></tr>");
            $('#img_title').html(input.val().replace(/\\/g, '/').replace(/.*\//, '')) ;
            $("#img_taille").html((imgInput.files[0].size/1024).toFixed(2)+' ko');
            $("#img_type").html(getExtension(input.val()).toUpperCase());

             var data= new FormData();
             data.append('ajax','true');
             data.append('file',imgInput.files[0]);
             data.append('id',15);
             var request= new XMLHttpRequest();
             request.upload.addEventListener('progress',function(event) {
             if (event.lengthComputable) {
             var percent = event.loaded / event.total;
             var progresse = Math.round(percent * 100);
             $('#img_progresse'+numimg+'').width(progresse+'%');
             $('#img_progresse'+numimg+'').html(progresse+'%')
             }
                if(progresse==100){
                    numimg=numimg+1;

                }

             });
            request.upload.addEventListener('load',function(event){
                console.log('ok');
                uploaded=true;
                $(".delete_im").on('click',function(){
                    var courant=$(this).parent();
                    var index = $(".block tr").index(courant.parent());
                    $(".block tr:nth-child("+index+")").hide( "slow" );
                    //$(".block tr:nth-child("+index+")").remove();
                   // alert(index);

                });

            });
            request.upload.addEventListener('error',function(event){
                alert('upload fail');
            });
            request.open('POST','fichier.php');
            request.setRequestHeader('Cache-control','no-cache');
            request.send(data);

        }else
    {
        alert('type de fichier invalide');
    }
    });
    $("#delete_im").click(function(){
            alert($(this).index());
    });


});
