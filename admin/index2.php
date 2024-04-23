<?php 
  include("global_admin.php"); 
     if(isset($_SESSION["login"]) != true){
         die();
     }
  
     if(isset($_POST["submit"])){
  $average = ($_POST['review1']+$_POST['review2']+$_POST['review3']+$_POST['review4']+$_POST['review5'])/5	; 
  if($_POST['h_data_id']==''){    
      
        $q="INSERT INTO `place` ( `place_id` ,  `name` , `summary`  , `short_detail`  , `detail` , `type` , `province` , `hotprice1`, `hotprice2`, `price`, `price2` , `discount1`  , `discount2` , `daynight` , `operator` , `license`, `location` , `latitude` , `longtitude` , `tour_company_name`, `tour_company_address`, `tour_contact_number` , `premium` , `review1` , `review2` , `review3`, `review4`, `review5`, `review_average` )  
        VALUES (  '', '".$_POST['name']."', '".$_POST['summary']."', '".$_POST['short_detail']."', '".$_POST['detail']."', '".$_POST['type']."' , '".$_POST['province']."' , '".$_POST['hotprice1']."', '".$_POST['hotprice2']."', '".$_POST['price']."', '".$_POST['price2']."', '".$_POST['discount1']."', '".$_POST['discount2']."', '".$_POST['daynight']."', '".$_POST['operator']."', '".$_POST['license']."' , '".$_POST['location']."'
		,'".$_POST['latitude']."' , '".$_POST['longtitude']."', '".$_POST['tour_company_name']."', '".$_POST['tour_company_address']."', '".$_POST['tour_contact_number']."','".$_POST['premium']."' ,'".$_POST['review1']."' , '".$_POST['review2']."', '".$_POST['review3']."', '".$_POST['review4']."', '".$_POST['review5']."', '".$average."' );";
        $db->query($q);
          for($mf=1;$mf<=4;$mf++){
            $upf[$mf] = uppic($_FILES['file'.$mf],$mf,"../img/pic/",$_POST['h_pic'.$mf]); // Same folder
            if($upf[$mf]!=''){
              $q = "SELECT * FROM `place`ORDER BY place_id DESC";
              $db->query($q);
              $db->next_record();  
              $place_id=$db->f(place_id);
              $q = "UPDATE `place` SET `pic$mf` = '".$upf[$mf]."' WHERE `place_id` =".$place_id." ";
              $db->query($q);
            }
          }               
        
    al('Add Complete');
    redi2();
    }else{
        $q="UPDATE `place` SET `name` = '".$_POST['name']."' ,
        `summary` = '".$_POST['summary']."' ,
        `short_detail` = '".$_POST['short_detail']."' ,
        `detail` = '".$_POST['detail']."' ,
        `type` = '".$_POST['type']."' ,
        `province` = '".$_POST['province']."' ,
        `hotprice1` = '".$_POST['hotprice1']."' ,
        `hotprice2` = '".$_POST['hotprice2']."' ,
        `price` = '".$_POST['price']."' ,
        `price2` = '".$_POST['price2']."' , 
        `discount1` = '".$_POST['discount1']."' ,
        `discount2` = '".$_POST['discount2']."' ,
        `operator` = '".$_POST['operator']."' ,
		`daynight` = '".$_POST['daynight']."' ,
        `license` = '".$_POST['license']."' ,
        `location` = '".$_POST['location']."' ,
        `latitude` = '".$_POST['latitude']."' , 
        `premium` = '".$_POST['premium']."' , 
        `review1` = '".$_POST['review1']."' ,
        `review2` = '".$_POST['review2']."' ,
        `review3` = '".$_POST['review3']."' ,
        `review4` = '".$_POST['review4']."' ,
        `review5` = '".$_POST['review5']."' ,
        `review_average` = '".$average."' ,
		`short_detail` = '".$_POST['short_detail']."' ,  
        `tour_company_name` = '".$_POST['tour_company_name']."' ,                       
        `tour_company_address` = '".$_POST['tour_company_address']."' ,                       
        `tour_contact_number` = '".$_POST['tour_contact_number']."' ,                       

        `longtitude` = '".$_POST['longtitude']."'  WHERE `place_id` =".$_POST['h_data_id']." ";
        $db->query($q);
          for($mf=1;$mf<=4;$mf++){
            $upf[$mf] = uppic($_FILES['file'.$mf],$mf,"../img/pic/",$_POST['h_pic'.$mf]); // Same folder
            if($upf[$mf]!=''){
              $q = "UPDATE `place` SET `pic$mf` = '".$upf[$mf]."' WHERE `place_id` =".$_POST['h_data_id']." ";
              $db->query($q);
            }
          }
  al('Edit Complete');
  redi2();              
    }     
  }
  
     if (isset($_GET["del"])) {
         mysql_query("DELETE FROM place WHERE place_id = '".$_GET["del"]."' ");
         header("Location: tour.php");
  
     }
  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin</title>
    <script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script src="ckeditor/ckeditor.js"></script>  
    <script src="ckfinder/ckfinder.js"></script> 
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <style type="text/css" class="init">
    </style>
    <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.css">
    <script type="text/javascript" language="javascript" src="js/jquery.dataTables.js"></script>
    <script type="text/javascript" language="javascript" class="init">
      $(document).ready(function() {
            $('#table-result').dataTable( {
                      "bFilter" : false,               
                      "bLengthChange": false,
                      "pageLength" : 15,
                      "language": {
                        "paginate": {
                          "previous": "«",
                          "next": "»",
                        },
                        "info": "หน้าที่ _PAGE_ / _PAGES_",
                        "lengthMenu": "ผลลัพธ์ _MENU_ แถว",
                        "search": "ค้นหา:"
                      }
                   } );
      } );
      
    </script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
      .panel{
      padding-left: 0px;
      }
      #submit{
      float: right;
      }
      input[type="search"]{
      width: 50%;
      height: 28px;
      padding: 4px 8px;
      font-size: 14px;
      line-height: 1.42857143;
      color: #555;
      background-color: #fff;
      background-image: none;
      border: 1px solid #ccc;
      border-radius: 4px;
      -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
      box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
      -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
      -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
      transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
      }
      #map_canvas {   
      width:90%;  
      height:500px;  
      margin:auto;  
      /*  margin-top:100px;*/  
      }     
    </style>
    <script type="text/javascript">
      function confirm_delete(){
          if (confirm("ต้องการลบรายการนี้ ?")) {return true;}else{return false;};
      }
    </script>
  </head>
  <body>
    <div id="wrapper">
      <!-- Sidebar -->
      <?php include("menu_side.php"); ?>
      <!-- /#sidebar-wrapper -->
      <!-- Page Content -->
      <?php
        if(isset($_GET["edit"])){
            $chk_edit = 1;
            $e = mysql_fetch_array(mysql_query("SELECT * FROM place WHERE place_id = '".$_GET["edit"]."' "));
        }
        ?>
      <div id="page-content-wrapper">
        <div class="container-fluid">
          <div class="row">
            <div class="col col-lg-12">
              <h2>จัดการข้อมูลทัวร์</h2>
              <div class="col-md-7">
                <a href="tour.php"><button type="button" class="btn btn-primary" style="position:absolute;right:15px;top:-50px;font-family:tahoma;margin-left:10px;font-size:15px;font-weight:bold;">+ เพิ่มข้อมูลใหม่</button></a>
                <div class="panel panel-default">
                  <div class="panel-body">
                    <form method="POST" enctype="multipart/form-data">
                      <div class="form-group">
                        <label>ชื่อทัวร์</label>
                        <input type="text" class="form-control" autocomplete="off" name="name" value="<?php if($chk_edit == 1){echo $e["name"];}?>">
                      </div>
                      <div class="form-group">
                        <div class="row">
                          <div class="col-md-6">
                            <label>Tour Operator</label>
                            <input type="text" class="form-control" autocomplete="off" name="operator" value="<?php if($chk_edit == 1){echo $e["operator"];}?>">                                        
                          </div>
                          <div class="col-md-6">
                            <label>Tour License</label>
                            <input type="text" class="form-control" autocomplete="off" name="license" value="<?php if($chk_edit == 1){echo $e["license"];}?>">                                        
                          </div>
                        </div>
                      </div>

                    


                      <div class="form-group">
                        <div class="row">
                          <div class="col-md-6">
                            <label>Company name</label>
                            <input type="text" class="form-control" autocomplete="off" name="tour_company_name" value="<?php if($chk_edit == 1){echo $e["tour_company_name"];}?>">                                        
                          </div>
                          <div class="col-md-6">
                            <label>Tour Contact Number</label>
                            <input type="text" class="form-control" autocomplete="off" name="tour_contact_number" value="<?php if($chk_edit == 1){echo $e["tour_contact_number"];}?>">                                        
                          </div>
                        </div>
                      </div>

                        <div class="form-group">
                        <div class="row">
                          <div class="col-md-12">
                            <label>Address</label>
                            <input type="text" class="form-control" autocomplete="off" name="tour_company_address" value="<?php if($chk_edit == 1){echo $e["tour_company_address"];}?>">                                        
                          </div>
                        </div>
                      </div>
                      
                        <div class="form-group">
                        <div class="row">
                          <div class="col-md-12">
                            <label>Short Detail</label>
                            <input type="text" class="form-control" autocomplete="off" name="short_detail" value="<?php if($chk_edit == 1){echo $e["short_detail"];}?>">                                        
                          </div>
                        </div>
                      </div>                      

                      <div class="form-group">
                        <label>Summary</label>
                        <textarea  class="form-control" name="summary" style="height:120px;" id="summary"><?php if($chk_edit == 1){echo $e["summary"];}?></textarea>
                        <script>
                          CKEDITOR.replace( 'summary', {
                            filebrowserBrowseUrl : 'ckfinder/ckfinder.html',
                            filebrowserImageBrowseUrl : 'ckfinder/ckfinder.html?type=Images',
                            filebrowserFlashBrowseUrl : 'ckfinder/ckfinder.html?type=Flash',
                            filebrowserFlashUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
                          });
                        </script>                                      
                      </div>
                      <div class="form-group">
                        <label>รายละเอียด</label>
                        <textarea  class="form-control" name="detail" style="height:120px;" id="detail"><?php if($chk_edit == 1){echo $e["detail"];}?></textarea>
                        <script>
                          CKEDITOR.replace( 'detail', {
                            filebrowserBrowseUrl : 'ckfinder/ckfinder.html',
                            filebrowserImageBrowseUrl : 'ckfinder/ckfinder.html?type=Images',
                            filebrowserFlashBrowseUrl : 'ckfinder/ckfinder.html?type=Flash',
                            filebrowserFlashUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
                          });
                        </script>                                      
                      </div>
                        <div class="form-group">
                        <div class="row">
                          <div class="col-md-12">
                            <label>ระยะเวลา</label>
                            <input type="text" class="form-control" autocomplete="off" name="daynight" value="<?php if($chk_edit == 1){echo $e["daynight"];}?>">                                        
                          </div>
                        </div>
                      </div>                        
                      <div class="form-group">
                        <label>ประเภท</label>
                        <select class="form-control"  name="type">
                          <option value="">-- เลือก --</option>
                          <?php
                            $q = mysql_query("SELECT * FROM place_type ORDER BY type_id ASC");
                            while ($p = mysql_fetch_array($q)) {
                            ?>
                          <option value="<?=$p["type_id"]?>" <?php if($chk_edit == 1 && $e["type"] == $p["type_id"]){echo "selected";$type = $p["type_id"];}?>><?=$p["type_name"]?></option>
                          <?php
                            }
                            ?>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>จังหวัด</label>
                        <select class="form-control"  name="province">
                          <option value="">-- เลือก --</option>
                          <?php
                            $q = mysql_query("SELECT * FROM province ORDER BY province_id ASC");
                            while ($p = mysql_fetch_array($q)) {
                            ?>
                          <option value="<?=$p["PROVINCE_NAME_EN"]?>" <?php if($chk_edit == 1 && $e["province"] == $p["PROVINCE_NAME_EN"]){echo "selected";$type = $p["PROVINCE_ID"];}?>><?=$p["PROVINCE_NAME"]?></option>
                          <?php
                            }
                            ?>
                        </select>
                      </div>
                      <div>
                            <label>Premium Tour :</label> <input type="checkbox" name="premium" value="1"  <?php if($chk_edit == 1){ if ($e["premium"]=='1') { echo "checked"; } }?> >                                        
                      </div>                       
                      <div class="form-group">
                        <div class="row">
                          <div class="col-md-6">
                            <label>ราคาผู้ใหญ่</label>
                            <input type="text" class="form-control" autocomplete="off" name="price" value="<?php if($chk_edit == 1){echo $e["price"];}?>">                                        
                          </div>
                          <div class="col-md-6">
                            <label>ราคาผู้ใหญ่ HOTSALES</label>
                            <input type="text" class="form-control" autocomplete="off" name="hotprice1" value="<?php if($chk_edit == 1){echo $e["hotprice1"];}?>">                                        
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="row">
                          <div class="col-md-6">
                            <label>ราคาเด็ก</label>
                            <input type="text" class="form-control" autocomplete="off" name="price2" value="<?php if($chk_edit == 1){echo $e["price2"];}?>">                                        
                          </div>
                          <div class="col-md-6">
                            <label>ราคาเด็ก HOTSALES</label>
                            <input type="text" class="form-control" autocomplete="off" name="hotprice2" value="<?php if($chk_edit == 1){echo $e["hotprice2"];}?>">                                        
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="row">
                          <div class="col-md-6">
                            <label>Discount ผู้ใหญ่</label>
                            <input type="text" class="form-control" autocomplete="off" name="discount1" value="<?php if($chk_edit == 1){echo $e["discount1"];}?>">                                        
                          </div>
                          <div class="col-md-6">
                            <label>Discount เด็ก</label>
                            <input type="text" class="form-control" autocomplete="off" name="discount2" value="<?php if($chk_edit == 1){echo $e["discount2"];}?>">                                        
                          </div>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <div class="row">
                          <div class="col-md-2">
                            <strong>Value</strong>
                            <input type="text" class="form-control" autocomplete="off" placeholder="Value For Money" name="review1" value="<?php if($chk_edit == 1){echo $e["review1"];}?>">                                        
                          </div>
                          <div class="col-md-2"><strong>Quality</strong>
                            <input type="text" class="form-control" autocomplete="off" placeholder="Destination Quality" name="review2" value="<?php if($chk_edit == 1){echo $e["review2"];}?>">                                        
                          </div>
                          <div class="col-md-2"><strong>Service</strong>
                            <input type="text" class="form-control" autocomplete="off" placeholder="Staff / Guide Service" name="review3" value="<?php if($chk_edit == 1){echo $e["review3"];}?>">                                        
                          </div>
                          <div class="col-md-2"><strong>Standard</strong>
                            <input type="text" class="form-control" autocomplete="off" placeholder="Travel Comfort/ Standard" name="review4" value="<?php if($chk_edit == 1){echo $e["review4"];}?>">                                        
                          </div>  
                          <div class="col-md-2"><strong>Transportation</strong>
                            <input type="text" class="form-control" autocomplete="off" placeholder="Transportation" name="review5" value="<?php if($chk_edit == 1){echo $e["review5"];}?>">                                        
                          </div>                          
                        </div>
                      </div>  
                                          
                      <div class="form-group">
                        <label>แผนที่</label>
                        <input type="text" class="form-control" autocomplete="off" name="latitude" id="lat_value" value="<?php if($chk_edit == 1){echo $e["latitude"];}?>">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" autocomplete="off" name="longtitude" id="lon_value" value="<?php if($chk_edit == 1){echo $e["longtitude"];}?>">
                      </div>
                      <div class="form-group">
                        <div id="map_canvas"></div>
                        <script type="text/javascript">  
                          var map; // กำหนดตัวแปร map ไว้ด้านนอกฟังก์ชัน เพื่อให้สามารถเรียกใช้งาน จากส่วนอื่นได้  
                          var GGM; // กำหนดตัวแปร GGM ไว้เก็บ google.maps Object จะได้เรียกใช้งานได้ง่ายขึ้น  
                          function initialize() { // ฟังก์ชันแสดงแผนที่  
                              GGM=new Object(google.maps); // เก็บตัวแปร google.maps Object ไว้ในตัวแปร GGM  
                              // กำหนดจุดเริ่มต้นของแผนที่  
                              var my_Latlng  = new GGM.LatLng(13.761728449950002,100.6527900695800);  
                              var my_mapTypeId=GGM.MapTypeId.ROADMAP; // กำหนดรูปแบบแผนที่ที่แสดง  
                              // กำหนด DOM object ที่จะเอาแผนที่ไปแสดง ที่นี้คือ div id=map_canvas  
                              var my_DivObj=$("#map_canvas")[0];   
                              // กำหนด Option ของแผนที่  
                              var myOptions = {  
                                  zoom: 13, // กำหนดขนาดการ zoom  
                                  center: my_Latlng , // กำหนดจุดกึ่งกลาง  
                                  mapTypeId:my_mapTypeId // กำหนดรูปแบบแผนที่  
                              };  
                              map = new GGM.Map(my_DivObj,myOptions);// สร้างแผนที่และเก็บตัวแปรไว้ในชื่อ map  
                                
                              var my_Marker = new GGM.Marker({ // สร้างตัว marker  
                                  position: my_Latlng,  // กำหนดไว้ที่เดียวกับจุดกึ่งกลาง  
                                  map: map, // กำหนดว่า marker นี้ใช้กับแผนที่ชื่อ instance ว่า map  
                                  draggable:true, // กำหนดให้สามารถลากตัว marker นี้ได้  
                                  title:"คลิกลากเพื่อหาตำแหน่งจุดที่ต้องการ!" // แสดง title เมื่อเอาเมาส์มาอยู่เหนือ  
                              });  
                                
                              // กำหนด event ให้กับตัว marker เมื่อสิ้นสุดการลากตัว marker ให้ทำงานอะไร  
                              GGM.event.addListener(my_Marker, 'dragend', function() {  
                                  var my_Point = my_Marker.getPosition();  // หาตำแหน่งของตัว marker เมื่อกดลากแล้วปล่อย  
                                  map.panTo(my_Point);  // ให้แผนที่แสดงไปที่ตัว marker         
                                  $("#lat_value").val(my_Point.lat());  // เอาค่า latitude ตัว marker แสดงใน textbox id=lat_value  
                                  $("#lon_value").val(my_Point.lng()); // เอาค่า longitude ตัว marker แสดงใน textbox id=lon_value   
                                  $("#zoom_value").val(map.getZoom()); // เอาขนาด zoom ของแผนที่แสดงใน textbox id=zoom_value  
                              });       
                            
                              // กำหนด event ให้กับตัวแผนที่ เมื่อมีการเปลี่ยนแปลงการ zoom  
                              GGM.event.addListener(map, 'zoom_changed', function() {  
                                  $("#zoom_value").val(map.getZoom()); // เอาขนาด zoom ของแผนที่แสดงใน textbox id=zoom_value    
                              });  
                            
                          }  
                          $(function(){  
                              // โหลด สคริป google map api เมื่อเว็บโหลดเรียบร้อยแล้ว  
                              // ค่าตัวแปร ที่ส่งไปในไฟล์ google map api  
                              // v=3.2&sensor=false&language=th&callback=initialize  
                              //  v เวอร์ชัน่ 3.2  
                              //  sensor กำหนดให้สามารถแสดงตำแหน่งทำเปิดแผนที่อยู่ได้ เหมาะสำหรับมือถือ ปกติใช้ false  
                              //  language ภาษา th ,en เป็นต้น  
                              //  callback ให้เรียกใช้ฟังก์ชันแสดง แผนที่ initialize  
                              $("<script/>", {  
                                "type": "text/javascript",  
                                src: "http://maps.google.com/maps/api/js?v=3.2&sensor=false&language=th&callback=initialize"  
                              }).appendTo("body");      
                          });  
                        </script>                                   
                      </div>
                      <div class="form-group">
                        <label>รูปหน้าปก</label>
                        <?php 
                          if (isset($_GET["edit"]) && $e["pic1"] != "") {
                          
                          ?>
                        <br/><img src="../img/pic/<?=$e["pic1"]?>" width="100px"><br/>
                        <?php
                          }
                          ?>
                        <input type="hidden" name="DB_ProjectImg" value="<?=$e["pic"]?>">
                        <input type="file" name="file1" style="margin-top:10px;">
                      </div>
                      <div class="form-group">
                        <!-- Multiupload -->
                        <link rel="stylesheet" type="text/css" href="js/multiupload.css" />
                        <script type="text/javascript" src="js/multiupload.js"></script>
                        <script type="text/javascript">
                          var callback_func = function post_posted(){
                            window.location.reload(true);
                          }
                          function image_submit(id){
                            $("#submit").fadeOut(300);
                            return upload_submit($(".multiupload_container"),"wk-query.php",''+id+'',callback_func,'update_offer');
                          }
                        </script>
                        <label>รูปสไลด์โครงการ</label>
                        <div class="multiupload_container" style="width:100%;float:left;">
                          <?php
                            if(isset($_GET["edit"])){
                            $c_pic = 0;
                            $q_pic = mysql_query("SELECT * FROM slide WHERE place_id = '".$_GET["edit"]."' ORDER BY SlideOrder ASC ");
                            $n_pic = mysql_num_rows($q_pic);
                              if($n_pic > 0){
                                while ($pic = mysql_fetch_array($q_pic)) {
                                  $c_pic = $c_pic + 1;
                              ?>
                          <div class="upload_container_2" id="<?=$pic['SlideID']?>">
                            <img class="thumbnail_2" src="../img/place/<?=$pic['SlideImg']?>">
                            <div class="upload_remove" onclick="upload_remove($('.multiupload_container'),<?=$c_pic?>,1,'<?=$pic['SlideImg']?>',$(this));">x</div>
                          </div>
                          <?php
                            }
                            }
                            }
                            ?>
                        </div>
                        <input id="ProjectSlide" form="frm2" name="ProjectSlide" onchange="upload_select($(this),$('.multiupload_container'),'');" multiple accept="image/*" type="file"/>
                        <!-- Multiupload -->
                        <script type="text/javascript">
                          $(".multiupload_container").sortable({
                             update : function(event, ui) {
                                  var order = $(this).sortable("toArray");
                          
                                $.ajax({
                                    url: 'wk-query.php',
                                    type: 'POST',
                                    data: { do_what:"sort_order", order:order },
                                  })
                                  .done(function(e) {
                                    console.log(e);
                                  })
                          
                              }
                          });
                          $( ".multiupload_container" ).disableSelection();
                          
                          
                        </script>
                      </div>
                      <input type="hidden" name="h_data_id" value="<?=$e["place_id"]?>">
                      <input type="submit" name="submit"  id="submit_project" style="display:none;">
                      <input type="button" class="btn btn-default button_add" id="submit" name="submit_project" onclick="image_submit('<?=$_GET["edit"]?>');" value="Submit">
                    </form>
                    <form method="POST" id="frm2">
                    </form>
                  </div>
                </div>
              </div>
              <div class="col col-md-5">
                <div class="col-md-4">
                  <h4 style="margin-top:5px;"> เลือกจังหวัด</h4>
                </div>
                <div class="col-md-8" style="padding-bottom:20px;">
                  <form method="GET">
                    <select class="form-control"  name="t" onchange="$(this).parent().submit();" style="padding: 4px 6px; height:30px;">
                      <option value="">-- เลือก --</option>
                      <?php
                        $q = mysql_query("SELECT * FROM province ORDER BY province_id ASC");
                        while ($p = mysql_fetch_array($q)) {
                        ?>
                      <option value="<?=$p["PROVINCE_ID"]?>" <?php if($_GET["t"] == $p["PROVINCE_ID"] || $type == $p["PROVINCE_ID"]){echo "selected";$type = $p["PROVINCE_ID"];}?>><?=$p["PROVINCE_NAME"]?></option>
                      <?php
                        }
                        ?>
                    </select>
                  </form>
                </div>
                <table id="table-result" class="display table table-bordered">
                  <thead>
                    <tr>
                      <th style="text-align:center;" width="30px">
                        #
                      </th>
                      <th>
                        ชื่อทัวร์
                      </th>
                      <th style="text-align:center;width:70px;">
                        จัดการ
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      if(!isset($_GET["t"]) && !isset($_GET["edit"])){$type = 1;}
                        $count = 0;
                        $q = mysql_query("SELECT * FROM place WHERE 1 ORDER BY place_id ASC");
                        while ($p = mysql_fetch_array($q)) {
                         $count +=1;
                      ?>
                    <tr>
                      <td style="text-align:center;">
                        <?=$count?>
                      </td>
                      <td>
                        <?=$p["name"];?>
                      </td>
                      <td style="text-align:center;">
                        <a href="tour.php?edit=<?=$p["place_id"];?>"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
                        &nbsp;
                        <a href="tour.php?del=<?=$p["place_id"];?>" onclick="return confirm_delete();"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                      </td>
                    </tr>
                    <?php
                      }
                      ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /#page-content-wrapper -->
    </div>
    <!-- /#wrapper -->
    <script type="text/javascript">
      $(".menu-toggle").click(function(e) {
          e.preventDefault();
          $("#wrapper").toggleClass("toggled");
      });
      
    </script>
  </body>
</html>