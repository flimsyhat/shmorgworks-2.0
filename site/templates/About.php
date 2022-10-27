<?php snippet('header') ?>


<div class = "page">

  <?php foreach ($page->children() as $p):?>

    <h1 class = "about_headers"> <?= $p->title() ?> </h1>

    <div class = "about_section_container">

      <div class = "about_section">
        <img class = "about_images" src = <?= $p->image()->url() ?> >
      </div>

      <div class = "about_section_text_container">
          <?= $p->text()->kirbytext() ?>
      </div>
    </div>
    <hr>
  <?php endforeach ?>

</div>

</body>
</html>
