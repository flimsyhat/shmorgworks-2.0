<?php snippet('header') ?>


<!-- Education Section -->

<h1 class = "cv_headers"> Education </h1>

  <ul class = "education_list">
  <?php foreach ($page->children()->children() as $education): ?>

    <li class = "education_list_elements"> <p class = "education_dates"> <?php echo $education->Date() ?> </p> </li>
    <li class = "education_list_elements"> <p class = "education_school"> <?php echo $education->School() ?> </p> </li>
    <li class = "education_list_elements"> <p class = "education_course"> <?php echo $education->Course() ?> </p> </li>

  <?php endforeach ?>

  </ul>
  </body>
</html>
