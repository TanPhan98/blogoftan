<?php
$new_category = new category($db);
$result = $new_category->read();
?>
<footer class="ftco-footer ftco-bg-dark ftco-section">
  <div class="container px-md-5">
    <div class="row mb-10">
      <div class="col-md">
        <div class="ftco-footer-widget mb-4 ml-md-4">
          <h2 class="ftco-heading-2">Category</h2>
          <?php
          while ($rows = $result->fetch()) {
          ?>
            <ul class="list-unstyled categories">
              <li><a href="blog_categories.php?id=<?php echo $rows['n_category_id'] ?>"><?php echo $rows['v_category_title'] ?></a></li>
            <?php } ?>
            </ul>
        </div>
      </div>
      <div class="col-md">
        <div class="ftco-footer-widget mb-4">
          <h2 class="ftco-heading-2">Have a Questions?</h2>
          <div class="block-23 mb-3">
            <ul>
              <li><span class="icon icon-map-marker"></span><span class="text">1-9 Oakcrest Pl, Asheville, North Carolina 28806, USA</span></li>
              <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 999999998</span></a></li>
              <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">

        <p>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          Copyright &copy;<script>
            document.write(new Date().getFullYear());
          </script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </p>
      </div>
    </div>
  </div>
</footer>