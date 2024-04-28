<?php
function sh_page($total, $s_page, $e_page, $chk_page, $f_txt, $e_txt, $p_color, $p2_color)
{
?>
  <style type="text/css">
    .pagination {
      padding: 5px;
      display: block !important;
      margin: 0 auto !important;
    }

    .pagination ul {
      margin: 0;
      padding: 3px;
      text-align: center;
      font-size: 12px;
    }

    .pagination li {
      list-style-type: none;
      display: inline;
      padding-bottom: 1px;
    }

    .pagination a,
    .pagination a:visited {

      padding: 5px;
      border: 0px solid #666666;
      text-decoration: none;
      color: #FFFFFF;
    }

    .pagination a:hover,
    .pagination a:active {

      padding: 5px;
      border: 0px solid #666666;
      color: #000;
      background-color: <?= $p2_color ?>;
    }

    .pagination li.currentpage {
      font-weight: bold;
      padding: 5px;
      border: 0px solid navy;
      background-color: <?= $p_color ?>;
      color: #FFF;
    }

    .pagination li.disablepage {
      padding: 0 5px;
      border: 0px solid #929292;
      color: #929292;
    }

    .pagination li.nextpage {
      font-weight: bold;
    }

    * html .pagination li.currentpage,
    * html .pagination li.disablepage {
      margin-right: 5px;
      padding-right: 0;
    }
  </style>
  <div class="pagination">
    <ul>
      <?php if ($chk_page == 0) { ?>
        <li class="disablepage">&lt; <?= $f_txt ?></li>
      <?php } else { ?>
        <li class="nextpage"><a href="<?= $_SERVER['PHP_SELF'] ?>?s_page=<?= $chk_page - 1 ?>">&lt; <?= $f_txt ?></a></li>
      <?php } ?>
      <?php for ($s = 0; $s < ceil($total / $e_page); $s++) { ?>
        <?php if ($chk_page == $s) { ?>
          <li class="currentpage"><?= $s + 1 ?></li>
        <?php } else { ?>
          <li><a href="<?= $_SERVER['PHP_SELF'] ?>?s_page=<?= $s ?>"><?= $s + 1 ?></a></li>
        <?php } ?>
      <?php } ?>
      <?php if ($chk_page == floor($total / $e_page)) { ?>
        <li class="disablepage"><?= $e_txt ?> &gt;</li>
      <?php } elseif ($total == $e_page) { ?>
        <li class="disablepage"><?= $e_txt ?> &gt;</li>
      <?php } elseif ($total - $s_page == $e_page) { ?>
        <li class="disablepage"><?= $e_txt ?> &gt;</li>
      <?php } else { ?>
        <li class="nextpage"><a href="<?= $_SERVER['PHP_SELF'] ?>?s_page=<?= $chk_page + 1 ?>"><?= $e_txt ?> &gt;</a></li>
      <?php } ?>
    </ul>
  </div>
<?php } ?>
<?php
function set_page($s_page, $e_page)
{
  global $s_page, $chk_page;
  foreach ($_GET as $key => $value) {
    $$key = $value;
  }
  //print_r($_GET);
  //echo $s_page;
  if (!isset($e_page)) {
    $e_page = 3;
  }
  if (!isset($s_page)) {
    $s_page = 0;
  } else {
    $chk_page = $s_page;
    $s_page = $s_page * $e_page;
  }
}
?>