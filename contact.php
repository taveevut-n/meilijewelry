<?php
include('global.php');
include('helpers/general.php');
?>
<? $q = "SELECT * FROM `jew_product` WHERE id = '" . $_GET['id'] . "' ORDER BY id DESC LIMIT 0,20 ";
$dbproduct = new nDB();
$dbproduct->query($q);
$dbproduct->next_record() ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title><?= $dbproduct->f(name) ?></title>
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
            <td valign="top" style="background:url(bg-chap.jpg) no-repeat">
              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td height="55">

                    <?php include('components/menu_top.php'); ?>

                  </td>
                </tr>
              </table>
            </td>
          </tr>
        </table>
      </td>
    </tr>
    <tr>
      <td style="background:url(images/bg-product.jpg) no-repeat">
        <table width="100%" cellpadding="0" cellspacing="0">
          <tr>
            <td width="10" height="300" valign="top" style="padding-top:50px">
              <table width="950" border="0" align="center" cellpadding="5" cellspacing="0">
                <? $q = "SELECT * FROM `jew_contact` WHERE 1 ";
                $dbproduct = new nDB();
                $dbproduct->query($q);
                $dbproduct->next_record() ?>
                <tr>
                  <td class="contact-detail"><?= $dbproduct->f(detail) ?></td>
                </tr>
              </table>
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