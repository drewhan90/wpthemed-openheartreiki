<footer class="page-footer">
<!-- Google Maps -->
<div id="map" class="hide-for-small-only"></div>
<div class="container">
  <div class="row">
    <div class="medium-4 columns">
      <img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/logo-final.png" alt="Open Heart Reiki">
      <p>copyright 2016.</p>
    </div>
    <ul class="contact text-left medium-8 columns hide-for-small-only">
      <li>
        <h3>address</h3>
        <p>570 Dunsmuir St #600, Vancouver, BC V6B 1Y1</p>
      </li>
      <li>
        <h3>phone</h3>
        <p>(604) 682-2787</p>
      </li>
      <li>
        <h3>email</h3>
        <p>sasha@vanarts.com</p>
      </li>
    </ul>
  </div>
</footer>
<!-- TOP BTN -->
<button class="btn-top hidden hide-for-small-only">
  <i class="fa fa-caret-up" aria-hidden="true"></i>
  <span>up</span>
</button>
<?php wp_footer(); ?>
<script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDcZ64MNob9_QjGF6zzZTHYcH5mWybEB4A&callback=initMap">
</script>