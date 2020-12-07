<footer class="main-footer">
  <div class="grid-container">
    <div class="grid-x grid-padding-x">
      <div class="large-3 columns fp">
        <?php if (is_active_sidebar('footer1')): ?>
          <?php dynamic_sidebar('footer1'); ?>
        <?php endif; ?> 
      </div>
      <div class="large-3 columns fp">
        <?php if (is_active_sidebar('footer2')): ?>
          <?php dynamic_sidebar('footer2'); ?>
        <?php endif; ?> 
      </div>
      <div class="large-3 columns fp">
        <?php if (is_active_sidebar('footer3')): ?>
          <?php dynamic_sidebar('footer3'); ?>
        <?php endif; ?>
      </div>
      <div class="large-3 columns fp">
        <?php if (is_active_sidebar('footer4')): ?>
          <?php dynamic_sidebar('footer4'); ?>
        <?php endif; ?> 
      </div>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>

<script src="js/vendor.js"></script>
<script src="js/foundation.min.js"></script>
</body>
</html>