<?php
$sql_chat = mysqli_query($conn, "SELECT * FROM `tb_livechat` WHERE cuid = 1") or die(mysqli_error($conn));
$sc = mysqli_fetch_array($sql_chat);
?>

<span class="mcp-footer-main">
  <div class="footerfixedcontent">
    <div class="pt-2 pb-2 d-block d-sm-none footercontentdesktop" style="background-color: <?= $s0['warnabg']; ?>!important;">
      <div class="container">
        <div class="row">
          <div class="col pt-1 text-center">
            <a href="<?= $urldomain; ?>" class="text-white">
              <div class="footercontenttext">
                <i class="fa fa-home"></i>
              </div>
              <small>Beranda</small>
            </a>
          </div>
          <?php if (isset($_SESSION['user'])) { ?>
            <div class="col pt-1 text-center">
              <a href="<?= $urldomain; ?>/deposit" class="text-white">
                <div class="footercontenttext">
                  <i class="fa fa-wallet"></i>
                </div>
                <small>Deposit</small>
              </a>
            </div>
            <div class="col pt-1 text-center">
              <a href="<?= $urldomain; ?>/withdraw" class="text-white">
                <div class="footercontenttext">
                  <i class="fa fa-money-bill-wave"></i>
                </div>
                <small>Withdraw</small>
              </a>
            </div>
          <?php } else { ?>
            <div class="col pt-1 text-center">
              <a href="<?= $urldomain; ?>/login" class="text-white">
                <div class="footercontenttext">
                  <i class="fa fa-lock"></i>
                </div>
                <small>Masuk</small>
              </a>
            </div>
            <div class="col pt-1 text-center">
              <a href="<?= $urldomain; ?>/register" class="text-white">
                <div class="footercontenttext">
                  <i class="fa fa-user"></i>
                </div>
                <small>Daftar</small>
              </a>
            </div>
          <?php } ?>
          <div class="col pt-1 text-center">
            <a href="<?= $urldomain; ?>/promo" class="text-white">
              <div class="footercontenttext">
                <i class="fa fa-percentage"></i>
              </div>
              <small>Promo</small>
            </a>
          </div>
          <div class="col pt-1 text-center">
            <a href="<?= $sc['lc_mobile']; ?>" target="_blank" class="text-white">
              <div class="footercontenttext">
                <i class="fa fa-comment"></i>
              </div>
              <small>Chat</small>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?= $urldomain; ?>/assets/js/jquery.min.js?<?= $cache; ?>"></script>
  <script src="<?= $urldomain; ?>/assets/js/popper.min.js?<?= $cache; ?>"></script>
  <script src="<?= $urldomain; ?>/assets/js/bootstrap.min.js?<?= $cache; ?>"></script>
  <script src="<?= $urldomain; ?>/assets/js/jquery.countdown.js?<?= $cache; ?>"></script>
  <script src="<?= $urldomain; ?>/assets/js/main.js?<?= $cache; ?>"></script>

  <!-- simplebar js -->
  <script src="<?= $urldomain; ?>/assets/plugins/simplebar/js/simplebar.js?<?= $cache; ?>"></script>

  <!-- horizontal-menu js -->
  <script src="<?= $urldomain; ?>/assets/js/horizontal-menu.js?<?= $cache; ?>"></script>

  <!-- Custom scripts -->
  <script src="<?= $urldomain; ?>/assets/plugins/summernote/dist/summernote-bs4.min.js?<?= $cache; ?>"></script>

  <!--Select Plugins Js-->
  <script src="<?= $urldomain; ?>/assets/plugins/select2/js/select2.min.js?<?= $cache; ?>"></script>

  <!--Data Tables js-->
  <script src="<?= $urldomain; ?>/assets/plugins/bootstrap-datatable/js/jquery.dataTables.min.js?<?= $cache; ?>"></script>
  <script src="<?= $urldomain; ?>/assets/plugins/bootstrap-datatable/js/dataTables.bootstrap4.min.js?<?= $cache; ?>"></script>
  <script src="<?= $urldomain; ?>/assets/plugins/bootstrap-datatable/js/dataTables.buttons.min.js?<?= $cache; ?>"></script>
  <script src="<?= $urldomain; ?>/assets/plugins/bootstrap-datatable/js/buttons.bootstrap4.min.js?<?= $cache; ?>"></script>
  <script src="<?= $urldomain; ?>/assets/plugins/bootstrap-datatable/js/jszip.min.js?<?= $cache; ?>"></script>
  <script src="<?= $urldomain; ?>/assets/plugins/bootstrap-datatable/js/pdfmake.min.js?<?= $cache; ?>"></script>
  <script src="<?= $urldomain; ?>/assets/plugins/bootstrap-datatable/js/vfs_fonts.js?<?= $cache; ?>"></script>
  <script src="<?= $urldomain; ?>/assets/plugins/bootstrap-datatable/js/buttons.html5.min.js?<?= $cache; ?>"></script>
  <script src="<?= $urldomain; ?>/assets/plugins/bootstrap-datatable/js/buttons.print.min.js?<?= $cache; ?>"></script>
  <script src="<?= $urldomain; ?>/assets/plugins/bootstrap-datatable/js/buttons.colVis.min.js?<?= $cache; ?>"></script>
  <script src="<?= $urldomain; ?>/assets/js/owl.carousel.js?<?= $cache; ?>"></script>

  <script>
    $(document).ready(function() {
      //Default data table
      $('.default-datatable').DataTable();
      setInterval(function() {
        $('.balance').load('<?= $urldomain; ?>/function/getbalance.php');
      }, 2000);
      setInterval(function() {
        $('.provBalance').load('<?= $urldomain; ?>/function/getbalances.php');
      }, 2000);
    });

    function openNav() {
      document.getElementById("mySidenav").style.width = "305px";
    }

    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
    }

    $('.main-content .owl-carousel').owlCarousel({
      stagePadding: 50,
      loop: false,
      autoplay: false,
      margin: 10,
      nav: true,
      navText: [
        '<i class="fa fa-angle-left" aria-hidden="true"></i>',
        '<i class="fa fa-angle-right" aria-hidden="true"></i>'
      ],
      navContainer: '.main-content .custom-nav',
      responsive: {
        0: {
          items: 4
        },
        600: {
          items: 4
        },
        1000: {
          items: 5
        }
      }
    });
  </script>

  <!--Javascript-->
  <div class="d-none d-sm-block">
    <?= $sc['lc_js']; ?>
  </div>
  <?php include('extra_footer_code.php'); ?>

  <!--Lazy load-->
  <script src="<?= $urldomain; ?>/assets/js/lazysizes.src.js" async></script>
  <script src="<?= $urldomain; ?>/assets/js/lazyload.min.js" async></script>

  <!--Indicator Scroll-->
  <div class="progress-container-custom">
    <div class="progress-bar-custom" id="progressbarcustom"></div>
  </div>
  <script>
    //<![CDATA[
    window.addEventListener('scroll', myFunction);

    function myFunction() {
      var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
      var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
      var scrolled = (winScroll / height) * 100;
      document.getElementById('progressbarcustom').style.width = scrolled + '%';
    }
    //]]>
  </script>

  <!--Back to Top-->
  <script>
    //<![CDATA[
    $(function() {
      $('.backtotop').each(function() {
        var $this = $(this);
        $(window).on('scroll', function() {
          $(this).scrollTop() >= 100 ? $this.fadeIn(250) : $this.fadeOut(250)
        }), $this.click(function() {
          $('html, body').animate({
            scrollTop: 0
          }, 500)
        })
      });
    });
    //]]>
  </script>

  <div class="backtotop" title="Back to Top">     </div>
</span>