<?php snippet('header') ?>


<div class = "page">

  <?php foreach ($page->children()->listed() as $p):?>

    <h1 class = "about_headers"> <?php echo $p->title() ?> </h1>

    <img class = "about_images" src = <?php echo $p->image()->url() ?> >

    <p class = "about_text"> <?php echo $p -> text() ?> </p>

    <hr>
  <?php endforeach ?>

</div>

</body>
</html>
