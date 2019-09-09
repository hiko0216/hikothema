<footer>
  <div class="container">
    <div class="row justify-content-around">
      <?php
      wp_nav_menu( array(
              'theme_location' => 'footer',
            ) );
       ?>
    </div>
  </div>


  <div class="copy">
    <p>Copyright 2018<?php if(date("Y")!=2012)echo date("-Y");?>All rights</p>
  </div>
</footer>
<?php wp_footer(); ?>
<script type="text/javascript">
$(function(){
    $("ul.sub-menu").hide();
    $(".menu li").hover(function() {
    $(".menu li").slideDown();
}, function() {
    $(".menu ul").slideUp();
});
});
</script>
</body>
</html>
