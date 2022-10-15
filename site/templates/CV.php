<?php snippet('header') ?>

<div class = "page">

<!-- Education Section -->
  <h1 class = "cv_headers"> Education </h1>

  <!-- EDUCATION SECTION -->
      <!-- This finds the education subfolder an indexes through its subfolders. -->
      <?php foreach ($page->children()->index()->search("education")->children() as $education): ?>

        <div class = "cv_list_container">
            <div class = "education_dates"> <?php echo $education->Date() ?> </div>
            <div class = "education_school_class"> <?php echo $education->School() ?> <br> <em><?php echo $education->Course() ?></em> </div>
        </div>

      <?php endforeach ?>
      <!-- horizontal line -->
      <hr>

  <!-- SOLO EXHIBITIONS SECTION -->
    <h1 class = "cv_headers"> Solo Exhibitions </h1>

        <!-- This finds the education subfolder an indexes through its subfolders. -->
        <?php foreach ($page->children()->index()->search("solo_exhibitions")->children() as $solo_exhibition): ?>

          <div class = "cv_list_container">
            <div class = "solo_exhibition_dates"> <?php echo $solo_exhibition->Date() ?> </div>
            <div> <em><?php echo $solo_exhibition->Show_Name() ?></em> - <?php echo $solo_exhibition->Gallery() ?> - Exhibit curated by <?php echo $solo_exhibition->Curators() ?> - <?php echo $solo_exhibition->Location() ?></div>
          </div>

        <?php endforeach ?>
        <!-- horizontal line -->
        <hr>

    <!-- Group Exhibitions Section -->
    <h1 class = "cv_headers"> Group Exhibitions </h1>

        <!-- This finds the education subfolder an indexes through its subfolders. -->
        <?php foreach ($page->children()->index()->search("group_exhibitions")->children() as $group_exhibition): ?>

          <div class = "cv_list_container">
            <div class = "group_exhibition_dates"> <?php echo $group_exhibition->Date() ?> </div>
            <div> <em><?php echo $group_exhibition->Show_Name() ?></em> - <?php echo $group_exhibition->Gallery() ?> - Exhibit curated by <?php echo $group_exhibition->Curators() ?> - <?php echo $group_exhibition->Location() ?></div>
          </div>

        <?php endforeach ?>
        <!-- horizontal line -->
        <hr>

    <!-- Awards and Honors Section -->
    <h1 class = "cv_headers"> Awards/Honors </h1>

        <!-- This finds the education subfolder an indexes through its subfolders. -->
        <?php foreach ($page->children()->index()->search("awards_honors")->children() as $awards_honors): ?>

          <div class = "cv_list_container">
            <div class = "awards_honors_dates"> <?php echo $awards_honors->Date() ?> </div>
            <div> <?php echo $awards_honors->Award() ?> - <em><?php echo $awards_honors->Presenter() ?></em></div>
          </div>

        <?php endforeach ?>
        <!-- horizontal line -->
        <hr>

    <!-- Print Section -->
    <h1 class = "cv_headers"> Print </h1>

        <!-- This finds the education subfolder an indexes through its subfolders. -->
        <?php foreach ($page->children()->index()->search("print")->children() as $print): ?>

        <div class = "cv_list_container">
          <div class = "print_dates"> <?php echo $print->Date() ?> </div>
          <div> <?php echo $print->Magazine() ?> - <?php echo $print->Description() ?></div>
        </div>

        <?php endforeach ?>
        <!-- horizontal line -->
        <hr>
        
  </div>
</body>
</html>
