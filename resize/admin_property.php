<?php include("../global.php"); ?>
<?php include("ck_pass.php"); ?>
<?php set_page($s_page,$e_page=20); //นำส่วนนี้ิไว้ด้านบน ?>
<? $_GET['head']="ระบบจัดการเว็บไซต์&nbsp;&nbsp;   >> จัดการเกี่ยวกับหมวดสินค้า ";?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/main_temp.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>ADMINISTRATOR PANEL V.2</title>
 <link href="styles/default.css" rel="stylesheet" type="text/css" />
                 <script language="javascript" src='scripts/innovaeditor.js'></script>
    <script src="scripts/common/jquery-1.7.min.js" type="text/javascript"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js" type="text/javascript"></script>
    <script src="scripts/common/webfont.js" type="text/javascript"></script>                
                 <link href="styles/default.css" rel="stylesheet" type="text/css" />
<!-- InstanceEndEditable -->
<link type="text/css" href="zabi_css.css" rel="stylesheet" />
<script language="javascript">
	function my_me(obj){
		var me=document.getElementById(obj);
		if(me.style.display=='block'){
			me.style.display='none';		
		}else{
			me.style.display='block';
		}
	}
</script>
<script language="javascript">
function con_out(){
		if(confirm('ยืนยันการออกจากระบบ?')==true){
			window.open('out.php','_parent');
		}else{
			return false;
		}
	}
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>
<!-- InstanceBeginEditable name="head" --><!-- InstanceEndEditable -->
<style type="text/css">
<!--
.style1 {color: #FFFFFF}
body {
	background-color: #E6E3E3;
}
-->
</style></head>

<body onload="MM_preloadImages('images/menu/home2.jpg','images/menu/manual2.jpg','images/menu/preview2.jpg','images/menu/feedback2.jpg','images/menu/logout2.jpg')">
<table width="983" border="0" align="center" cellpadding="0" cellspacing="0">
 <tr>
 <td width="983"><img src="http://www.thaiwebeasy.com/images/ads-twe.jpg" width="984" height="37" /></td>
 </tr>
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="216" bgcolor="D6DFF7"><img src="images/menu/menu-l.jpg" width="216" height="43" /></td>
        <td width="132"><a href="main.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image33','','images/menu/home2.jpg',1)"><img src="images/menu/home.jpg" name="Image33" width="132" height="43" border="0" id="Image33" /></a></td>
        <td width="150"><a href="http://www.thaiwebeasy.com/help" target="_blank" onmouseover="MM_swapImage('Image34','','images/menu/manual2.jpg',1)" onmouseout="MM_swapImgRestore()"><img src="images/menu/manual.jpg" name="Image34" width="150" height="43" border="0" id="Image34" /></a></td>
        <td width="159"><a href="../" target="_blank" onmouseover="MM_swapImage('Image35','','images/menu/preview2.jpg',1)" onmouseout="MM_swapImgRestore()"><img src="images/menu/preview.jpg" name="Image35" width="159" height="43" border="0" id="Image35" /></a></td>
        <td width="317"><a href="http://www.thaiwebeasy.com/livechat/chat.php" target="_blank" onmouseover="MM_swapImage('Image36','','images/menu/feedback2.jpg',1)" onmouseout="MM_swapImgRestore()"><img src="images/menu/feedback.jpg" name="Image36" width="178" height="43" border="0" id="Image36" /></a></td>
        <td width="10"><a href="#" onClick="con_out()" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image37','','images/menu/logout2.jpg',1)"><img src="images/menu/logout.jpg" name="Image37" width="149" height="43" border="0" id="Image37" /></a></td>
        </tr>
        <tr>
        <td colspan="6" bgcolor="#6E89DD" height="8"></td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td align="left" valign="top"><table width="984" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="197" height="833" align="left" valign="top" bgcolor="D6DFF7" style="background:url(images/bg-l.jpg) top center #62AAD0 repeat-x"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="images/main.jpg" width="191" height="54" /></td>
          </tr>
          <tr>
            <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td style="background:url(images/hd-blog.png) no-repeat; padding-left:8px; color:#F5821F; font-weight:bold" height="32"><img src="images/Control_Panel.png" width="20" height="20" />ตั้งค่าทั่วไป</td>
              </tr>
              <tr>
                <td style="background:url(images/bg-blog.png) repeat-y; padding-left:5px"><table width="186" border="0" cellspacing="0" cellpadding="3">
                  <tr>
                    <td height="20" bgcolor="#ACDAF1"><a href="setting.php"><span style="color:#1A4A74">- ตั้งค่ารูปแบบเว็บไซต์</span></a></td>
                  </tr>
                  <tr>
                    <td height="20"><span style="color:#AAAAAA">- ตั้งค่ารูปแบบธีมเว็บไซต์</span></td>
                  </tr>
                  <tr>
                    <td height="20" bgcolor="#ACDAF1"><a href="settingmeta.php"><span style="color:#1A4A74">- ตั้งค่าคำอธิบายเว็บไซต์  (meta)</span></a></td>
                  </tr>
                  <tr>
                    <td height="20"> <a href="admin_intro.php"><span style="color:#1A4A74">-จัดการหน้าต้อนรับ (intro)</span></a></td>
                  </tr>
                  <tr>
                    <td height="20" bgcolor="#ACDAF1"><a href="admin_std.php"><span style="color:#1A4A74">- ตั้งค่าคำสำคัญ</span></a></td>
                  </tr>
                </table></td>
              </tr>
              <tr>
                <td><img src="images/bt-blog.png" width="198" height="19" /></td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td style="background:url(images/hd-blog.png) no-repeat; padding-left:8px; color:#F5821F; font-weight:bold" height="32"><img src="images/Display1.png" width="20" height="20" />จัดการรูปแบบ</td>
              </tr>
              <tr>
                <td style="background:url(images/bg-blog.png) repeat-y; padding-left:5px"><table width="186" border="0" cellspacing="0" cellpadding="3">
                  <tr>
                    <td height="20"><a href="admin_mod.php"><span style="color:#1A4A74">- จัดวางรูปแบบหน้าแรก</span></a></td>
                  </tr>
                  <tr>
                    <td height="20" bgcolor="#ACDAF1"><a href="modify_contentpage.php?e_dmod_id=1"><span style="color:#1A4A74">- จัดวางรูปแบบหน้าใน</span></a></td>
                  </tr>
                  <tr>
                    <td height="20"><a href="admin_footer.php"> <span style="color:#1A4A74">-จัดการข้อมูลด้านล่าง (footer)</span></a></td>
                  </tr>
                </table></td>
              </tr>
              <tr>
                <td><img src="images/bt-blog.png" width="198" height="19" /></td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td style="background:url(images/hd-blog.png) no-repeat; padding-left:8px; color:#F5821F; font-weight:bold" height="32"><img src="images/RefreshCL.png" width="20" height="20" />จัดการเมนู</td>
              </tr>
              <tr>
                <td style="background:url(images/bg-blog.png) repeat-y; padding-left:5px"><table width="186" border="0" cellspacing="0" cellpadding="3">
                  <tr>
                    <td height="20"><a href="admin_content_menu.php"><span style="color:#1A4A74">- จัดการเมนูหลักด้านบน                                                                                               </span></a></td>
                  </tr>
                  <tr>
                    <td height="20" bgcolor="#ACDAF1"><a href="admin_sidemenu.php"><span style="color:#1A4A74">- จัดการเมนูหลักด้านข้าง</span></a></td>
                  </tr>
                </table></td>
              </tr>
              <tr>
                <td><img src="images/bt-blog.png" width="198" height="19" /></td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td style="background:url(images/hd-blog.png) no-repeat; padding-left:8px; color:#F5821F; font-weight:bold" height="32"><img src="images/Display2.png" width="20" height="20" />จัดการบทความ</td>
              </tr>
              <tr>
                <td style="background:url(images/bg-blog.png) repeat-y; padding-left:5px"><table width="186" border="0" cellspacing="0" cellpadding="3">
                  <tr>
                    <td height="20"><a href="admin_cat_article.php"><span style="color:#1A4A74">- เพิ่ม ลบ แก้ไข หมวดหมู่บทความ</span></a></td>
                  </tr>
                  <tr>
                    <td height="20" bgcolor="#ACDAF1"><a href="admin_article.php"><span style="color:#1A4A74">- เพิ่ม ลบ แก้ไข บทความ</span></a></td>
                  </tr>
                </table></td>
              </tr>
              <tr>
                <td><img src="images/bt-blog.png" width="198" height="19" /></td>
              </tr>
            </table></td>
          </tr>
<tr>
            <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td style="background:url(images/hd-blog.png) no-repeat; padding-left:8px; color:#F5821F; font-weight:bold" height="32"><img src="images/Security_Reader2.png" width="20" height="20" />จัดการผู้ใช้</td>
              </tr>
              <tr>
                <td style="background:url(images/bg-blog.png) repeat-y; padding-left:5px"><table width="186" border="0" cellspacing="0" cellpadding="3">
                  <tr>
                    <td height="20"><a href="admin_setting.php"><span style="color:#1A4A74">- จัดการรายชื่อผู้ใช้</span></a></td>
                  </tr>
                  <tr>
                    <td height="20" bgcolor="#ACDAF1"><a href="admin_system.php"><span style="color:#1A4A74">- กำหนดสิทธิ์ผู้ดูแลระบบ</span></a></td>
                  </tr>
                  <tr>
                    <td height="20"><a href="admin_chkpage.php"><span style="color:#1A4A74">- กำหนดสิทธิการเข้าหน้าเว็บ</span></a></td>
                  </tr>                  
                </table></td>
              </tr>
              <tr>
                <td><img src="images/bt-blog.png" width="198" height="19" /></td>
              </tr>
            </table></td>
          </tr>          
          <tr>
            <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td style="background:url(images/hd-blog.png) no-repeat; padding-left:8px; color:#F5821F; font-weight:bold" height="32"><img src="images/Games1.png" width="20" height="20" />จัดการเนื้อหา</td>
              </tr>
              <tr>
                <td style="background:url(images/bg-blog.png) repeat-y; padding-left:5px"><table width="186" border="0" cellspacing="0" cellpadding="3">
                  <tr>
                    <td height="20"><a href="admin_faq2.php"><span style="color:#1A4A74">- ระบบถาม-ตอบ</span></a></td>
                  </tr>
                  <tr>
                    <td height="20"><a href="admin_front.php"><span style="color:#1A4A74">- ระบบข้อความต้อนรับ</span></a></td>
                  </tr>
                  <tr>
                    <td height="20" bgcolor="#ACDAF1"> <a href="admin_news.php"><span style="color:#1A4A74">- ระบบข่าวประชาสัมพันธ์</span></a></td>
                  </tr>          
                  <tr>
                    <td height="20" > <a href="admin_service.php"><span style="color:#1A4A74">- ระบบข่าวประชาสัมพันธ์ 2</span></a></td>
                  </tr>                                                     
                  <tr>
                    <td height="20"> <a href="admin_catalog.php"><span style="color:#1A4A74">- ระบบร้านค้า</span></a></td>
                  </tr>
                  <tr>
                    <td height="20" bgcolor="#ACDAF1"><a href="gallery.php"><span style="color:#1A4A74">- ระบบอัลบั้มรูป</span></a></td>
                  </tr>
                  <tr>
                    <td height="20"><a href="admin_webboard.php"><span style="color:#1A4A74">- ระบบเว็บบอร์ด</span></a></td>
                  </tr>              
                  <tr>
                    <td height="20" bgcolor="#ACDAF1"><a href="admin_poll.php"><span style="color:#1A4A74">- ระบบแบบสำรวจ</span></a></td>
                  </tr>              
                  <tr>
                    <td height="20"><a href="member.php"><span style="color:#1A4A74">- ระบบสมาชิก</span></a></td>
                  </tr>              
                  <tr>
                    <td height="20" bgcolor="#ACDAF1"><a href="admin_banner.php"><span style="color:#1A4A74">- ระบบแบนเนอร์</span></a></td>
                  </tr>              
                  <tr>
                    <td height="20"><a href="admin_contact.php"><span style="color:#1A4A74">- ระบบติดต่อเรา</span></a></td>
                  </tr>     

                  <tr>
                    <td height="20" bgcolor="#ACDAF1"><a href="admin_weblink.php"><span style="color:#1A4A74">- ระบบเว็บลิงค์</span></a></td>
                  </tr>   
                  <tr>
                    <td height="20" ><a href="admin_download_type.php"><span style="color:#1A4A74">- ระบบดาวน์โหลด</span></a></td>
                  </tr> 
                  <tr>
                    <td height="20" bgcolor="#ACDAF1"><a href="admin_calendar_clock.php"><span style="color:#1A4A74">- ระบบแทรกโค้ดอิสระด้านข้าง</span></a></td>
                  </tr>
                  <tr>
                    <td height="20"><a href="admin_content.php"><span style="color:#1A4A74">- ระบบสร้างหน้าเพจใหม่</span></a></td>
                  </tr>                  
                  <tr>
                    <td height="20" bgcolor="#ACDAF1"><a href="admin_faq.php"><span style="color:#1A4A74">- ระบบคำถามที่ถามบ่อย (FAQ)</span></a></td>
                  </tr>                                                                                                                                                                                                       
                </table></td>
              </tr>
              <tr>
                <td><img src="images/bt-blog.png" width="198" height="19" /></td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
        </table></td>
        <td width="788" align="left" valign="top"><table width="780" height="833" border="0" align="right" cellpadding="0" cellspacing="0">
          <tr>
            <td height="833" align="left" valign="top" bgcolor="#E2E8F6"><table width="780" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td><table width="780" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="610"><img src="images/home_08.gif" width="38" height="43" align="absmiddle" /><?=$_GET['head'];?> </td>
                      <td width="170">ไอพีของคุณ: <?=$_SERVER['REMOTE_ADDR']?></td>
                    </tr> 
                  </table></td>
              </tr>
              <tr>
                <td height="180" align="left" bgcolor="#FFFFFF"><img src="images/amateur-steps.jpg" width="778" height="165" /></td>
              </tr>
              
              <tr>
                <td height="640" valign="top" bgcolor="#FFFFFF"><!-- InstanceBeginEditable name="my_body" -->
				<script language="javascript">
					function selec(){
						var ab=document.getElementById('se');
						location.href=ab.value;
					}
				</script>
				
				

	    
                  <table width="750" border="0" align="center" cellspacing="3" style="border:1px #B4DAFD solid">					
                    <tr>
                      <td bgcolor="A6CBED" style="padding-left:5px">จัดการเกี่ยวกับรายการที่ดิน</td>
                    </tr>
                  </table>
                  <br />
				  
				  
				  <?php
	if($_POST['Submit']){
		if($_POST['h_teedin_id']){
		$q="UPDATE `teedin` SET `teedin_name` = '".$_POST['name']."',
`teedin_tambon` = '".$_POST['tambon']."',
`teedin_rai` = '".$_POST['rai']."',
`teedin_ngan` = '".$_POST['ngan']."',
`teedin_wa` = '".$_POST['wa']."',
`teedin_status` = '".$_POST['status']."',
`teedin_place` = '".$_POST['place']."',
`teedin_price` = '".$_POST['price']."',
`teedin_detail` = '".$_POST['detail']."',
`teedin_inside` = '".$_POST['inside']."',
`teedin_map` = '".$_POST['map']."' WHERE `teedin_id` =".$_POST['h_teedin_id']." ";
		$db->query($q);
				for($mf=1;$mf<=5;$mf++){
				 $upf[$mf]=uppic($_FILES['file'.$mf],$mf,"../img/property/",$_POST['h_pic'.$mf]); // Same folder
					 if($upf[$mf]!=''){
				 $q="UPDATE `teedin` SET `teedin_pic$mf` = '".$upf[$mf]."' WHERE `teedin_id` =".$_POST['h_teedin_id']." ";
						 $db->query($q);
					 }	
				}	
		al('แก้ไขข้อมูลเรียบร้อยแล้ว');
		redi2();
		}else{
		upimg($_FILES['file'],"../img/property/");
		$q="INSERT INTO `teedin` ( `teedin_id` , `teedin_name` , `teedin_tambon` , `teedin_rai`  , `teedin_ngan`  , `teedin_wa` , `teedin_price` , `teedin_status` , `teedin_place` , `teedin_detail`   , `teedin_inside`  , `teedin_map`, `teedin_pic1`  , `teedin_pic2`  , `teedin_pic3`  , `teedin_pic4`  , `teedin_pic5` , `view_num` , `date_add`) 
VALUES (
'', '".$_POST['name']."', '".$_POST['tambon']."', '".$_POST['rai']."', '".$_POST['ngan']."', '".$_POST['wa']."', '".$_POST['price']."', '".$_POST['status']."', '".$_POST['place']."', '".$_POST['detail']."', '".$_POST['inside']."', '".$_POST['map']."', '', '', '', '', '', '0', '".time()."');";
		$db->query($q);
				for($mf=1;$mf<=5;$mf++){
				 $upf[$mf]=uppic($_FILES['file'.$mf],$mf,"../img/property/",$_POST['h_pic'.$mf]); // Same folder
					 if($upf[$mf]!=''){
				$q="SELECT * FROM `teedin`ORDER BY teedin_id DESC";
				$db->query($q);
				$db->next_record();	 
				$teedin_id=$db->f(teedin_id);
				 $q="UPDATE `teedin` SET `teedin_pic$mf` = '".$upf[$mf]."' WHERE `teedin_id` =".$teedin_id." ";
						 $db->query($q);
					 }				
			}
		al('เพิ่มข้อมูลเรียบร้อยแล้ว');
		redi2();		
		}
	}
?>
<?php
	if($_GET['d_teedin_id']){
		@unlink("../img/property/".$_GET['pic1']);
		@unlink("../img/property/".$_GET['pic2']);
		@unlink("../img/property/".$_GET['pic3']);
		@unlink("../img/property/".$_GET['pic4']);
		@unlink("../img/property/".$_GET['pic5']);								
		$q="DELETE FROM `teedin` WHERE `teedin_id` = ".$_GET['d_teedin_id']."";
		$db->query($q);
	}
?>
<?php
	if($_GET['e_teedin_id']){
		$q="SELECT * FROM `teedin` WHERE teedin_id=".$_GET['e_teedin_id']." ";
		$db5=new nDB();
		$db5->query($q);
		$db5->next_record();
	}
?>
                  <form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
                    <br />
                    <table width="95%" border="0" align="center" cellpadding="3" cellspacing="0" bgcolor="#F1F7FC" >
                     <tr>
                        <td colspan="2" align="center">
							<div style="text-align:right; padding-right:0px">เลือกการจัดการ
							  <select name="select" onchange="selec();" id="se">
						   <option value="">--------กรุณาเลือกรายการ--------</option>
							<option value="admin_catalog.php">จัดการหมวดสินค้า</option>
							<option value="admin_product.php">จัดการรายการสินค้า</option>
							<option value="admin_order.php">จัดการรายการสั่งซื้อ</option>			
							<option value="admin_payment.php">จัดการวิธีส่งสินค้าและชำระเงิน</option>													
						  </select>
				 			 </div>
							 <br />						</td>
                      </tr>
					  <tr>
                        <td height="25" colspan="2" align="center" bgcolor="#A6CBED" >เพิ่ม แก้ไขรายการที่ดิน </td>
                      </tr>
                      <tr>
                        <td width="150" align="right" bgcolor="#F1F7FC"  style="padding-right:3px">ตำบล</td>
                        <td align="left" valign="top" bgcolor="#F1F7FC"><select name="tambon"  id="tambon">
                          <option value="0">---เลือกตำบล---</option>
                          <option value="หาดใหญ่" <?php
					if($_GET['e_teedin_id']){
						if($db5->f(teedin_tambon)=='หาดใหญ่'){
							echo 'selected="selected"';
						}
					}?>>หาดใหญ่</option>
                          <option value="ควนลัง" <?php
					if($_GET['e_teedin_id']){
						if($db5->f(teedin_tambon)=='ควนลัง'){
							echo 'selected="selected"';
						}
					}?>>ควนลัง</option>
                          <option value="คูเต่า" <?php
					if($_GET['e_teedin_id']){
						if($db5->f(teedin_tambon)=='คูเต่า'){
							echo 'selected="selected"';
						}
					}?>>คูเต่า</option>
                          <option value="คอหงส์" <?php
					if($_GET['e_teedin_id']){
						if($db5->f(teedin_tambon)=='คอหงส์'){
							echo 'selected="selected"';
						}
					}?>>คอหงส์</option>
                          <option value="คลองแห" <?php
					if($_GET['e_teedin_id']){
						if($db5->f(teedin_tambon)=='คลองแห'){
							echo 'selected="selected"';
						}
					}?>>คลองแห</option>
                          <option value="คลองอู่ตะเภา" <?php
					if($_GET['e_teedin_id']){
						if($db5->f(teedin_tambon)=='คลองอู่ตะเภา'){
							echo 'selected="selected"';
						}
					}?>>คลองอู่ตะเภา</option>
                          <option value="ฉลุง" <?php
					if($_GET['e_teedin_id']){
						if($db5->f(teedin_tambon)=='ฉลุง'){
							echo 'selected="selected"';
						}
					}?>>ฉลุง</option>
                          <option value="ทุ่งใหญ่" <?php
					if($_GET['e_teedin_id']){
						if($db5->f(teedin_tambon)=='ทุ่งใหญ่'){
							echo 'selected="selected"';
						}
					}?>>ทุ่งใหญ่</option>
                          <option value="ทุ่งตำเสา" <?php
					if($_GET['e_teedin_id']){
						if($db5->f(teedin_tambon)=='ทุ่งตำเสา'){
							echo 'selected="selected"';
						}
					}?>>ทุ่งตำเสา</option>
                          <option value="ท่าข้าม" <?php
					if($_GET['e_teedin_id']){
						if($db5->f(teedin_tambon)=='ท่าข้าม'){
							echo 'selected="selected"';
						}
					}?>>ท่าข้าม</option>
                          <option value="น้ำน้อย" <?php
					if($_GET['e_teedin_id']){
						if($db5->f(teedin_tambon)=='น้ำน้อย'){
							echo 'selected="selected"';
						}
					}?>>น้ำน้อย</option>
                          <option value="บ้านพรุ" <?php
					if($_GET['e_teedin_id']){
						if($db5->f(teedin_tambon)=='บ้านพรุ'){
							echo 'selected="selected"';
						}
					}?>>บ้านพรุ</option>
                          <option value="พะตง" <?php
					if($_GET['e_teedin_id']){
						if($db5->f(teedin_tambon)=='พะตง'){
							echo 'selected="selected"';
						}
					}?>>พะตง</option>
                          <option value="อื่น ๆ" <?php
					if($_GET['e_teedin_id']){
						if($db5->f(teedin_tambon)=='อื่น ๆ'){
							echo 'selected="selected"';
						}
					}?>>อื่น ๆ</option>
                          </select>                        </td>
                      </tr>
                      <tr>
                        <td align="right" bgcolor="#F1F7FC"  style="padding-right:3px">ชื่อที่ดิน</td>
                        <td align="left" valign="top" bgcolor="#F1F7FC"><input name="name" type="text"  id="name" value="<?=($_GET['e_teedin_id'])?$db5->f(teedin_name):""?>" size="50" /></td>
                      </tr>
                      <tr>
                        <td align="right" bgcolor="#F1F7FC"  style="padding-right:3px">เนื้อที่</td>
                        <td align="left" valign="top" bgcolor="#F1F7FC"><input name="rai" type="text"  id="rai" value="<?=($_GET['e_teedin_id'])?$db5->f(teedin_rai):""?>" size="10" /> 
                          ไร่
                          <input name="ngan" type="text"  id="ngan" value="<?=($_GET['e_teedin_id'])?$db5->f(teedin_ngan):""?>" size="10" /> 
                          งาน 
                          <input name="wa" type="text"  id="wa" value="<?=($_GET['e_teedin_id'])?$db5->f(teedin_wa):""?>" size="10" /> 
                          วา
                        </td>
                      </tr>
                      <tr>
                        <td align="right" bgcolor="#F1F7FC"  style="padding-right:3px">สภาพที่ดิน</td>
                        <td align="left" valign="top" bgcolor="#F1F7FC"><input name="status" type="text"  id="status" value="<?=($_GET['e_teedin_id'])?$db5->f(teedin_status):""?>" size="40" /></td>
                      </tr>               
                      <tr>
                        <td align="right" bgcolor="#F1F7FC"  style="padding-right:3px">สถานที่ใกล้เคียง</td>
                        <td align="left" valign="top" bgcolor="#F1F7FC"><input name="place" type="text"  id="place" value="<?=($_GET['e_teedin_id'])?$db5->f(teedin_place):""?>" size="40" /></td>
                      </tr>                                            
                      <tr>
                        <td align="right" bgcolor="#F1F7FC"  style="padding-right:3px">ราคาที่ดิน</td>
                        <td align="left" valign="top" bgcolor="#F1F7FC"><input name="price" type="text"  id="price" value="<?=($_GET['e_teedin_id'])?$db5->f(teedin_price):""?>" size="15" /></td>
                      </tr>	
                      <tr>
                        <td align="right" bgcolor="#F1F7FC"  style="padding-right:3px">แผนที่ Google</td>
                        <td align="left" valign="top" bgcolor="#F1F7FC"><input name="map" type="text"  id="map" value="<?=($_GET['e_teedin_id'])?$db5->f(teedin_map):""?>" size="15" /></td>
                      </tr>	                      		
                      <tr>
                        <td colspan="2" align="center" bgcolor="#F1F7FC">รายละเอียด</td>
                      </tr>
                      <tr>
                        <td colspan="2" align="center" bgcolor="#F1F7FC"><textarea id="detail" name="detail" rows=4 cols=30><?=($_GET['e_teedin_id'])?$db5->f(teedin_detail):""?></textarea>
<script language="javascript" type="text/javascript">

    var oEdit1 = new InnovaEditor("oEdit1");

    oEdit1.width = 700;
    oEdit1.height = 350;

    /*Enable Custom File Browser */
    oEdit1.fileBrowser = "/manage/assetmanager/asset.php";
    
    /*Apply stylesheet for the editing content*/
    oEdit1.css = "styles/default.css";

    /*Render the editor*/
    oEdit1.REPLACE("detail");

</script>                     
                        </td>
                      </tr>
                      <tr>
                        <td colspan="2" align="center">บทวิเคราะห์</td>
                      </tr>
					  <tr>
                      	<td colspan="2" align="center">
                        <textarea id="txtContent2" name="inside" rows=4 cols=30><?=($_GET['e_teedin_id'])?$db5->f(teedin_inside):""?></textarea>

<script type="text/javascript" language="javascript">

    var oEdit2 = new InnovaEditor("oEdit2");

    oEdit2.width = 700;
    oEdit2.height = 350;

    /*Enable Custom File Browser */
    oEdit2.fileBrowser = "/manage/assetmanager/asset.aspx";

    /*Apply stylesheet for the editing content*/
    oEdit2.css = "styles/default.css";

    /*Render the editor*/
    oEdit2.REPLACE("txtContent2");

</script>
                        </td>
                      </tr> <!--    
						<style type="text/css">
						/* css กำหนดความกว้าง ความสูงของแผนที่ */
						#map_canvas { 
							width:550px;
							height:400px;
							margin:auto;
						/*	margin-top:100px;*/
						}
						</style>     
						<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
                        <script type="text/javascript">
                        var map; // กำหนดตัวแปร map ไว้ด้านนอกฟังก์ชัน เพื่อให้สามารถเรียกใช้งาน จากส่วนอื่นได้
                        var GGM; // กำหนดตัวแปร GGM ไว้เก็บ google.maps Object จะได้เรียกใช้งานได้ง่ายขึ้น
                        function initialize() { // ฟังก์ชันแสดงแผนที่
                            GGM=new Object(google.maps); // เก็บตัวแปร google.maps Object ไว้ในตัวแปร GGM
                            // กำหนดจุดเริ่มต้นของแผนที่
                            var my_Latlng  = new GGM.LatLng(<?php /*?><?=($_GET['e_teedin_id'])?$db5->f(teedin_lat):"7.0017413958838555"?>,<?=($_GET['e_teedin_id'])?$db5->f(teedin_lon):"100.45726776123047"?><?php */?>);
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
                            //	v เวอร์ชัน่ 3.2
                            //	sensor กำหนดให้สามารถแสดงตำแหน่งทำเปิดแผนที่อยู่ได้ เหมาะสำหรับมือถือ ปกติใช้ false
                            //	language ภาษา th ,en เป็นต้น
                            //	callback ให้เรียกใช้ฟังก์ชันแสดง แผนที่ initialize
                            $("<script/>", {
                              "type": "text/javascript",
                              src: "http://maps.google.com/maps/api/js?v=3.2&sensor=false&language=th&callback=initialize"
                            }).appendTo("body");	
                        });
                        </script>                                            
                      <tr>
                      	<td colspan="2"><div id="map_canvas"></div>
                        <input name="lat_value" type="hidden" id="lat_value" value="0" />
                        <input name="lon_value" type="hidden" id="lon_value" value="0" />
                        <input name="zoom_value" type="hidden" id="zoom_value" value="0" size="5" />
                        </td>
                      </tr> -->               
                      <tr>
                        <td align="right" bgcolor="#F1F7FC"  style="padding-right:3px">รูปภาพ</td>
                        <td align="left" valign="top" bgcolor="#F1F7FC"><input name="file1" type="file" id="file1" />
                          ความกว้างรูปภาพไม่ควรเกิน 600 pixels</td>
                      </tr>
                      <tr>
                        <td align="right" bgcolor="#F1F7FC"  style="padding-right:3px">รูปภาพ</td>
                        <td align="left" valign="top" bgcolor="#F1F7FC"><input name="file2" type="file" id="file2" />
                          ความกว้างรูปภาพไม่ควรเกิน 600 pixels</td>
                      </tr>
                      <tr>
                        <td align="right" bgcolor="#F1F7FC"  style="padding-right:3px">รูปภาพ</td>
                        <td align="left" valign="top" bgcolor="#F1F7FC"><input name="file3" type="file" id="file3" />
                          ความกว้างรูปภาพไม่ควรเกิน 600 pixels</td>
                      </tr>
                      <tr>
                        <td align="right" bgcolor="#F1F7FC"  style="padding-right:3px">รูปภาพ</td>
                        <td align="left" valign="top" bgcolor="#F1F7FC"><input name="file4" type="file" id="file4" />
                          ความกว้างรูปภาพไม่ควรเกิน 600 pixels</td>
                      </tr>
                      <tr>
                        <td align="right" bgcolor="#F1F7FC"  style="padding-right:3px">รูปภาพ</td>
                        <td align="left" valign="top" bgcolor="#F1F7FC"><input name="file5" type="file" id="file5" />
                          ความกว้างรูปภาพไม่ควรเกิน 600 pixels</td>
                      </tr>               
                      <tr>
                        <td bgcolor="#F1F7FC">&nbsp;</td>
                        <td bgcolor="#F1F7FC"><input name="Submit" type="submit" class="button_add" value="<?=($_GET['e_teedin_id'])?"แก้ไขข้อมูล":"เพิ่มข้อมูล"?>" />
                            <?php if($_GET['e_teedin_id']){ ?>
                            <input name="h_teedin_id" type="hidden" id="h_teedin_id" value="<?=$db5->f(teedin_id)?>" />
                  <input name="h_pic1" type="hidden" id="h_pic1" value="<?=$db5->f(pic1)?>">
				  <input name="h_pic2" type="hidden" id="h_pic2" value="<?=$db5->f(pic2)?>">
                  <input name="h_pic3" type="hidden" id="h_pic3" value="<?=$db5->f(pic3)?>">
				  <input name="h_pic4" type="hidden" id="h_pic4" value="<?=$db5->f(pic4)?>">
				  <input name="h_pic5" type="hidden" id="h_pic5" value="<?=$db5->f(pic5)?>">                                    
                            <?php } ?>                        </td>
                      </tr>
                    </table>
                    </form>
                    <br />
                    <br />
                    <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
                            <td height="25" colspan="7" align="center" bgcolor="#A6CBED" class="best8">					        					        
                            <form action="pro_set.php" method="post" name="sho" target="pro_frm" id="sho">
					          <div align="right"><span id="za_mo1">ค้นหาที่ดินด้วยตำบล</span>
					              		  <select name="name_catalog"  id="name_catalog">
                          <option value="0">---เลือกตำบล---</option>
                          <option value="หาดใหญ่">หาดใหญ่</option>
                          <option value="ควนลัง">ควนลัง</option>
                          <option value="คูเต่า">คูเต่า</option>
                          <option value="คอหงส์">คอหงส์</option>
                          <option value="คลองแห">คลองแห</option>
                          <option value="คลองอู่ตะเภา">คลองอู่ตะเภา</option>
                          <option value="ฉลุง">ฉลุง</option>
                          <option value="ทุ่งใหญ่">ทุ่งใหญ่</option>
                          <option value="ทุ่งตำเสา">ทุ่งตำเสา</option>
                          <option value="ท่าข้าม">ท่าข้าม</option>
                          <option value="น้ำน้อย">น้ำน้อย</option>
                          <option value="บ้านพรุ">บ้านพรุ</option>
                          <option value="พะตง">พะตง</option>
                          <option value="อื่น ๆ">อื่น ๆ</option>
                          </select>
                                          <input name="Submit" type="submit" class="bt_zabi" value="Go" />
					            </div>
					        </form>		
							<iframe src="" name="pro_frm" width="1px;" height="0px;" frameborder="0" id="pro_frm"></iframe>	  		
                            </td>
                            </tr>
                      <tr>
                        <td width="15%" height="25" align="center" bgcolor="#A6CBED" >รหัสที่ดิน</td>
                        <td width="36%" align="center" bgcolor="#A6CBED" >ชื่อที่ดิน</td>
                        <td align="center" bgcolor="#A6CBED">ตำบล</td>
                        <td align="center" bgcolor="#A6CBED">ขนาดพื้นที่</td>                        
                        <td align="center" bgcolor="#A6CBED">ราคาขาย</td>
                        <td align="center" bgcolor="#A6CBED">แก้ไข</td>
                        <td align="center" bgcolor="#A6CBED">ลบ</td>
                      </tr>
     <?php
   $q="SELECT * FROM `teedin` WHERE 1 ";
   $p_r=1;
  $db->query($q);							
  $total=$db->num_rows();							
  $q.=" ORDER BY teedin_id DESC LIMIT $s_page,$e_page ";
  $db->query($q);
  static $v=1; 
   while($db->next_record()){
   ?>		
                      <tr bgcolor="<?=($v%2==1)?"#F1F7FC":"#D8ECFC"?>">
                        <td height="25" bgcolor="<?=($v%2==1)?"#F1F7FC":"#D8ECFC"?>" ><?=$db->f(teedin_no)?></td>
                        <td bgcolor="<?=($v%2==1)?"#F1F7FC":"#D8ECFC"?>" ><?=$db->f(teedin_name)?>                 
						  </td>
                        <td width="14%" align="right" bgcolor="<?=($v%2==1)?"#F1F7FC":"#D8ECFC"?>" style="padding-right:3px;"><?=$db->f(teedin_tambon)?></td>
                        <td width="13%" align="right" bgcolor="<?=($v%2==1)?"#F1F7FC":"#D8ECFC"?>" style="padding-right:3px;"><?=$db->f(teedin_size)?></td>
                        <td width="9%" align="right" bgcolor="<?=($v%2==1)?"#F1F7FC":"#D8ECFC"?>" style="padding-right:3px;"><?=g_number($db->f(teedin_price))?></td>                        
                        <td width="6%" align="center" bgcolor="<?=($v%2==1)?"#F1F7FC":"#D8ECFC"?>"><a href="?e_teedin_id=<?=$db->f(teedin_id)?>" ><img src="images/edit.gif" alt="แก้ไข" width="19" height="23" border="0" /></a></td>
                        <td width="7%" align="center" bgcolor="<?=($v%2==1)?"#F1F7FC":"#D8ECFC"?>" ><a href="?d_teedin_id=<?=$db->f(teedin_id)?>&amp;pic=<?=$db->f(pic1)?>&amp;pic=<?=$db->f(pic2)?>&amp;pic=<?=$db->f(pic3)?>&amp;pic=<?=$db->f(pic4)?>&amp;pic=<?=$db->f(pic5)?>" onclick="return confirm('ยืนยันการลบข้อมูล')"><img src="images/del.gif" alt="ลบ" width="19" height="23" border="0" /></a></td>
                      </tr><?php $v++; ?>
                      <?php } ?>     
                      <tr>
                      <td height="30" colspan="7" align="center"> <?php  sh_page($total,$s_page,$e_page,$chk_page,Previous,Next,"#333333","#F8F8F8"); // นำไปวางในตำแหน่งที่ต้องการแสดง ?></td>
                      </tr>           
                    </table>
                    <p>&nbsp;</p>
                <!-- InstanceEndEditable --></td></tr>
            </table></td>
          </tr>
        </table>
          <p>&nbsp;</p>
          <p>&nbsp;</p></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="40" bgcolor="#053663">&nbsp;</td>
  </tr>
</table>
</body>
<!-- InstanceEnd --></html>
