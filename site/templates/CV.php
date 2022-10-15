<?php snippet('header') ?>

<div class = "page">

<!-- Education Section -->
  <h1 class = "cv_headers"> Education </h1>

  <!-- EDUCATION SECTION -->
    <ul class = "cv_list">
      <!-- This finds the education subfolder an indexes through its subfolders. -->
      <?php foreach ($page->children()->index()->search("education")->children() as $education): ?>

        <li class = "cv_list_elements"> <p class = "education_dates"> <?php echo $education->Date() ?> </p>
                                               <p class = "education_school_course"> <?php echo $education->School() ?> - <?php echo $education->Course() ?> </p>
        </li>
          <!-- horizontal line -->
          <hr>
      <?php endforeach ?>
    </ul>

  <!-- SOLO EXHIBITIONS SECTION -->
    <h1 class = "cv_headers"> Solo Exhibitions </h1>

      <ul class = "cv_list">
        <!-- This finds the education subfolder an indexes through its subfolders. -->
        <?php foreach ($page->children()->index()->search("solo_exhibitions")->children() as $solo_exhibition): ?>

          <li class = "cv_list_elements"> <p class = "solo_exhibition_dates"> <?php echo $solo_exhibition->Date() ?> </p>
                                                 <p> <?php echo $solo_exhibition->Show_Name() ?> - <?php echo $solo_exhibition->Gallery() ?> - Exhibit curated by <?php echo $solo_exhibition->Curators() ?> - <?php echo $solo_exhibition->Location() ?></p>
          </li>
            <!-- horizontal line -->
            <hr>
        <?php endforeach ?>
      </ul>

    <!-- Group Exhibitions Section -->
    <h1 class = "cv_headers"> Group Exhibitions </h1>

      <ul class = "cv_list">
        <!-- This finds the education subfolder an indexes through its subfolders. -->
        <?php foreach ($page->children()->index()->search("group_exhibitions")->children() as $group_exhibition): ?>

          <li class = "cv_list_elements"> <p class = "group_exhibition_dates"> <?php echo $group_exhibition->Date() ?> </p>
                                                 <p> <?php echo $group_exhibition->Show_Name() ?> - <?php echo $group_exhibition->Gallery() ?> - Exhibit curated by <?php echo $group_exhibition->Curators() ?> - <?php echo $group_exhibition->Location() ?></p>
          </li>
            <!-- horizontal line -->
            <hr>
        <?php endforeach ?>
      </ul>
    <!-- Awards and Honors Section -->
    <h1 class = "cv_headers"> Awards/Honors </h1>

      <ul class = "cv_list">
        <!-- This finds the education subfolder an indexes through its subfolders. -->
        <?php foreach ($page->children()->index()->search("awards_honors")->children() as $awards_honors): ?>

          <li class = "cv_list_elements"> <p class = "awards_honors_dates"> <?php echo $awards_honors->Date() ?> </p>
                                                 <p> <?php echo $awards_honors->Award() ?> - <?php echo $awards_honors->Presenter() ?></p>
          </li>

            <!-- horizontal line -->
            <hr>
        <?php endforeach ?>
      </ul>
    <!-- Print Section -->
    <h1 class = "cv_headers"> Print </h1>

      <ul class = "cv_list">
        <!-- This finds the education subfolder an indexes through its subfolders. -->
        <?php foreach ($page->children()->index()->search("print")->children() as $print): ?>

          <li class = "cv_list_elements"> <p class = "print_dates"> <?php echo $print->Date() ?> </p>
                                                 <p> <?php echo $print->Magazine() ?> - <?php echo $print->Description() ?></p>
          </li>

            <!-- horizontal line -->
            <hr>
        <?php endforeach ?>
      </ul>

</div>
  </body>
</html>
