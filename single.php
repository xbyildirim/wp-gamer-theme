<?php get_header(); ?>

<div class="container">

  <div class="row">
    <div class="col-lg-12">
      <div class="page-content">

<?php
      if(have_posts()){
        get_template_part('template-parts/content','article');
      }
  
      ?>
</div>
</div>
</div>
</div>
<?php
get_footer();
?>