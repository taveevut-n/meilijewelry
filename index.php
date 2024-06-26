<?php
include('global.php');
include('helpers/general.php');
?>
<?php set_page($s_page, $e_page = 100); //นำส่วนนี้ิไว้ด้านบน 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>เพชรเหม่ยลี่ &amp; จิวเวอร์รี่ รับทำทอง เพชร กรอบเลี่ยมทอง แหวนทอง แหวนเพชร จี้ เข็มกลัด</title>
  <META name=description content="บริการรับทำแหวนทอง แหวนเพชร แหวนฝังพลอย อัญมณี ทุกรูปแบบ ด้วยทีมงานมืออาชีพ ประสบการณ์กว่า 40 ปี">
  <META name=keywords content="ทำทอง,กรอบพระทอง,แหวนทอง, แหวนเพชร, แหวนอัญมณี, Jewelry,">
  <link rel="stylesheet" href="./assets/common/css/bundle.min.css">
  <!-- load jQuery -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>

  <!-- load Galleria -->
  <script src="galleria/galleria-1.2.9.min.js"></script>
</head>

<body>
  <table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td>
        <table width="1000" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="assets/images/head.jpg" width="1000" height="286"></td>
          </tr>
          <tr>
            <td height="441" valign="top" style="background:url(/images/bg-chap.jpg) no-repeat;">
              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td height="55" colspan="2">

                    <?php include('components/menu_top.php'); ?>

                  </td>
                </tr>
                <tr>
                  <td width="57%" valign="top">
                    <table width="500" border="0" align="center" cellpadding="3" cellspacing="0">
                      <tr>
                        <td height="300" bgcolor="#333333" style="backgound-color:#000">
                          <div class="content">
                            <div id="galleria">
                              <?php
                              $q = "SELECT * FROM `jew_product` WHERE status = 1 ORDER BY RAND() ";
                              $dbimg = new nDB();
                              $dbimg->query($q);
                              while ($dbimg->next_record()) {
                              ?>
                                <? if ($dbimg->f(pic1) != '') { ?>
                                  <a href="upimg/product/<?= $dbimg->f(pic1) ?>">
                                    <img src="slir/w110-h110-c1:1/upimg/product/<?= $dbimg->f(pic1) ?>" , data-big="upimg/product/<?= $dbimg->f(pic1) ?>">
                                  </a>
                                <? } ?>
                                <? if ($dbimg->f(pic2) != '') { ?>
                                  <a href="upimg/product/<?= $dbimg->f(pic2) ?>">
                                    <img src="slir/w110-h110-c1:1/upimg/product/<?= $dbimg->f(pic2) ?>" , data-big="upimg/product/<?= $dbimg->f(pic2) ?>">
                                  </a>
                                <? } ?>
                                <? if ($dbimg->f(pic3) != '') { ?>
                                  <a href="upimg/product/<?= $dbimg->f(pic3) ?>">
                                    <img src="slir/w110-h110-c1:1/upimg/product/<?= $dbimg->f(pic3) ?>" , data-big="upimg/product/<?= $dbimg->f(pic3) ?>">
                                  </a>
                                <? } ?>
                                <? if ($dbimg->f(pic4) != '') { ?>
                                  <a href="upimg/product/<?= $dbimg->f(pic4) ?>">
                                    <img src="slir/w110-h110-c1:1/upimg/product/<?= $dbimg->f(pic4) ?>" , data-big="upimg/product/<?= $dbimg->f(pic4) ?>">
                                  </a>
                                <? } ?>
                                <? if ($dbimg->f(pic5) != '') { ?>
                                  <a href="upimg/product/<?= $dbimg->f(pic5) ?>">
                                    <img src="slir/w110-h110-c1:1/upimg/product/<?= $dbimg->f(pic5) ?>" , data-big="upimg/product/<?= $dbimg->f(pic5) ?>">
                                  </a>
                                <? } ?>
                              <?php } ?>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <script>
                        Galleria.loadTheme("/galleria/themes/classic/galleria.classic.min.js");
                        Galleria.run("#galleria", {
                          autoplay: 1000
                        });
                      </script>
                    </table>
                  </td>
                  <td width="43%" valign="top" style="padding-left:85px; padding-top:15px">

                    <?php include('components/categories.php'); ?>

                  </td>
                </tr>
              </table>
            </td>
          </tr>
        </table>
      </td>
    </tr>
    <tr>
      <td>
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="images/bh-slide.png" width="1000" height="45" /></td>
          </tr>
          <? $q = "SELECT * FROM `jew_banner` WHERE 1  ";
          $dbbanner = new nDB();
          $dbbanner->query($q);
          $dbbanner->next_record() ?>
          <?
          if ($dbbanner->f(banner_url) == '') {
            $url = "detail_banner.php?banner_id=" . $dbbanner->f(banner_id);
            $tar = $dbbanner->f(banner_target);
            if ($tar == '1') {
              $target = "_Blank";
            } else {
              $target = "_parent";
            }
          } else {
            $url = $dbbanner->f(banner_url);
          }
          ?>
          <tr>
            <td height="507" valign="top" style="background:url(images/bg-welcome.jpg) no-repeat">
              <table width="100%" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="52%" valign="top">
                    <table width="100%" cellpadding="0" cellspacing="0" style="margin-top:210px">
                      <tr>
                        <td width="49%" align="center" style="padding-left:15px">
                          <span style="color:#4ab423; font-size:12px">Line ID :</span><span style="color:#fd7e7e"> pok88888</span>
                        </td>
                        <td width="51%">
                          <span style="color:#0f519c; font-size:12px">Facebook : </span><span style="color:#fd7e7e">ตี๋ หาดใหญ่พระเครื่องสายใต้</span>
                        </td>
                      </tr>
                    </table>

                  </td>
                  <td width="48%" valign="top">
                    <table width="380" border="0" cellspacing="0" cellpadding="3" style="margin-top:50px">
                      <?php $q = "SELECT * FROM `jew_front` WHERE 1  ";
                      $dbwelcome = new nDB();
                      $dbwelcome->query($q);
                      $dbwelcome->next_record() ?>
                      <tr>
                        <td>
                          <div class="front_intro">
                            <?= $dbwelcome->f(detail) ?>
                          </div>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
        </table>
      </td>
    </tr>
    <tr>
      <td height="400" valign="top" bgcolor="#141111">
        <table width="900" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td>
              <? $q = "SELECT * FROM `jew_product` WHERE status = '1' ORDER BY id DESC LIMIT 0,20 ";
              $dbhot = new nDB();
              $dbhot->query($q);
              while ($dbhot->next_record()) { ?>
                <table width="160" border="0" cellspacing="0" cellpadding="0" style="float:left; margin:10px">
                  <tr>
                    <td height="120" align="center" bgcolor="#333333" style="border:1px solid #666">
                      <a href="detail_product.php?id=<?= $dbhot->f(id) ?>">
                        <img src="<?= ($dbhot->f(pic1) != "") ? 'http://www.praasia.com/slir/w150-h120/jewelry/upimg/product/' . $dbhot->f(pic1) : "images/clear.gif" ?>" alt="" border="0" />
                      </a>
                    </td>
                  </tr>
                </table>
              <?php } ?>
            </td>
          </tr>
        </table>
      </td>
    </tr>
    <tr>
      <td>
        <img src="images/bh-product.jpg" width="1000" height="100" />
      </td>
    </tr>
    <tr>
      <td style="background:url(images/bg-product.jpg) repeat-y">
        <table width="100%" cellpadding="0" cellspacing="0">
          <tr>
            <td width="10" height="300" valign="top">

              <?php
              $array = [];
              $q = "SELECT * FROM `jew_product` WHERE 1 ";
              $db->query($q);
              $total = $db->num_rows();
              $q .= " ORDER BY id DESC LIMIT $s_page,$e_page";
              $dbproduct = new nDB();
              $dbproduct->query($q);
              while ($dbproduct->next_record()) {
                $array[$dbproduct->f(id)] = [
                  'id' => $dbproduct->f(id),
                  'pic1' => $dbproduct->f(pic1),
                  'name' => $dbproduct->f(name),
                  'price' => $dbproduct->f(price),
                  'detail' => $dbproduct->f(detail),
                ];
              }

              $chucks = array_chunk($array, 2);
              ?>

              <table width="950" border="0" align="center" cellpadding="5" cellspacing="5" style="margin-bottom:10px">
                <?php foreach ($chucks as $key => $value) { ?>
                  <tr>
                    <?php foreach ($value as $key => $product) { ?>
                      <td>
                        <table width="450" border="0" cellspacing="0" cellpadding="0" class="tbl-grid-product">
                          <tr>
                            <td width="115" align="center">
                              <a href="detail_product.php?id=<?= $product['id'] ?>">
                                <img src="<?= ($product['pic1'] != "") ? 'http://www.praasia.com/slir/w110-h110-c1:1/jewelry/upimg/product/' . $product['pic1'] : "
                                 images/clear.gif"
                                          ?>" alt="" border="0" />
                              </a>
                            </td>
                            <td valign="top">
                              <table width="100%" border="0" cellspacing="0" cellpadding="3">
                                <tr>
                                  <td>
                                    <div class="flex-product-name">
                                      <a href="detail_product.php?id=<?= $product['id'] ?>">
                                        <span style="color:#dc3300; font-size:14px">
                                          <?= $product['name'] ?>
                                        </span>
                                      </a>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <span class="flex-product-price">ราคา
                                      <?= $product['price'] ?> บาท
                                    </span>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <div class="flex-product-detail">
                                      <?php echo _stripTags($product['detail']); ?>
                                    </div>
                                  </td>
                                </tr>
                              </table>
                            </td>
                          </tr>
                        </table>
                      </td>
                    <?php } ?>
                  </tr>
                <?php } ?>
              </table>
            </td>
          </tr>
          <tr>
            <td height="30" align="center" bgcolor="#000000">
              <?php sh_page($total, $s_page, $e_page, $chk_page, Previous, Next, "#999999", "#FFCC00"); ?>
            </td>
          </tr>
        </table>
      </td>
    </tr>
    <tr>
      <td>
        <img src="images/footer.jpg" width="1000" height="114" />
      </td>
    </tr>
  </table>
</body>

</html>