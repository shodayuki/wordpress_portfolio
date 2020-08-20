  <footer>
    <div id="copyright">
      Copyright &copy; 2019 Yuki Shoda's Work All Rights Reserved.
    </div>
  </footer>
<?php wp_footer(); ?>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script>
  jQuery(document).ready(function(){
    jQuery('#nav_toggle').click(function(){
      jQuery("header").toggleClass('open');
      jQuery(".nav_sp ul").slideToggle(500);
    });
  });
</script>
</body>
</html>