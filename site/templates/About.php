<?php snippet('header') ?>


<div class = "page">

  <?php foreach ($page->children()->listed() as $p):?>

    <h1 class = "about_headers"> <?php echo $p->title() ?> </h1>

    <div class = "about_section_container">

      <div class = "about_section"<p class = "about_text"> <?php echo $p -> text() ?> </p></div>

      <div class = "about_section"><img class = "about_images" src = <?php echo $p->image()->url() ?> ></div>

    </div>
    <hr>
  <?php endforeach ?>

</div>

</body>
</html>
