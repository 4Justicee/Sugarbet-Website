<!--Start footer-->
<footer id="aboutus" class="bg-footer">
  <div data-v-10b0ebbe="" class="product-tile__clip-path"></div>
  <div class="pb-3" bis_skin_checked="1">
    <div class="container">

      <!--Partial footer features-->
      <?php include('partials/footer-features.php'); ?>

      <?php if (!isset($_SESSION['user'])) : ?>
        <!--Partial footer description-->
        <?php include('partials/footer-desc.php'); ?>
      <?php endif; ?>

    </div>
    <hr>

    <!--Partial footer menu-->
    <?php include('partials/footer-menu-' . $s0['temafooter'] . '.php'); ?>

    <!--Partial footer copyright-->
    <?php include('partials/footer-copyright.php'); ?>

  </div>
</footer>

<!--Partial footer main-->
<?php include('partials/footer-main.php'); ?>