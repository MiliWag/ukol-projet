<!DOCTYPE html>
<html>

<?php
require __DIR__ . '/layout/head.php';
require __DIR__ . '/config.php';
?>

<body>
  <div id="wrapper">

    <?php require __DIR__ . '/layout/sideBar.php';?>

    <div id="page-wrapper" class="gray-bg">
      <div class="row border-bottom">

        <?php require __DIR__ . '/layout/topBar.php';?>

        <!-- Main content -->
        <div class="wrapper wrapper-content animated fadeInRight">
          <div class="row">
            <?php echo nactiKontakty($kontakty);?>
          </div>
        </div>
        <!-- /End Main content -->

        <?php require __DIR__ . '/layout/footer.php';?>

      </div>
    </div>

    <?php require __DIR__ . '/layout/scripts.php';?>
  </div>
</body>

</html>