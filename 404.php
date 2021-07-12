<?php
get_header();
include_once('templates/header/_header.php');
//
include_once('templates/nav/_nav.php');
//
echo '<main>
  <h1 class="no-title title-error-404">404</h1>
  <section class="content-404">
    <article class="no-text text-error-404">
      <p>This page cannot be found</p>
    </article>
  </section>
</main>';
//
include_once('templates/footer/_footer.php');
?>
