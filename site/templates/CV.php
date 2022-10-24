    <?php snippet('header') ?>

    <div class = "page">

      <!-- EDUCATION SECTION -->
          <h1 class = "cv_headers"> Education </h1>
          <?php foreach ($page->education()->toStructure() as $education): ?>

            <div class = "cv_list_container">
                <div id = "education_dates"> <?php echo $education->date()->toDate('Y') ?> </div>
                <div id = "education_school_class"> <?php echo $education->school() ?> <br> <em><?php echo $education->course() ?></em> </div>
            </div>

          <?php endforeach ?>
          <!-- horizontal line -->
          <hr>

      <!-- SOLO EXHIBITIONS SECTION -->
        <h1 class = "cv_headers"> Solo Exhibitions </h1>
            <?php foreach ($page->solo_exhibitions()->toStructure() as $solo_exhibition): ?>

              <div class = "cv_list_container">
                <div id = "solo_exhibition_dates"> <?php echo $solo_exhibition->date()->toDate('Y') ?> </div>
                <div> <em><?php echo $solo_exhibition->name() ?></em> - <?php echo $solo_exhibition->gallery() ?> - Exhibit curated by <?php echo $solo_exhibition->curators() ?> - <?php echo $solo_exhibition->location() ?></div>
              </div>

            <?php endforeach ?>
            <!-- horizontal line -->
            <hr>

        <!-- Group Exhibitions Section -->
        <h1 class = "cv_headers"> Group Exhibitions </h1>
            <?php foreach ($page->group_exhibitions()->toStructure() as $group_exhibition): ?>

              <div class = "cv_list_container">
                <div id = "group_exhibition_dates"> <?php echo $group_exhibition->date()->toDate('Y') ?> </div>
                <div> <em><?php echo $group_exhibition->name() ?></em> - <?php echo $group_exhibition->gallery() ?> - Exhibit curated by <?php echo $group_exhibition->curators() ?> - <?php echo $group_exhibition->location() ?></div>
              </div>

            <?php endforeach ?>
            <!-- horizontal line -->
            <hr>

        <!-- Awards and Honors Section -->
        <h1 class = "cv_headers"> Awards/Honors </h1>
            <?php foreach ($page->awards()->toStructure() as $award): ?>

              <div class = "cv_list_container">
                <div id = "awards_honors_dates"> <?php echo $award->date()->toDate('Y') ?> </div>
                <div> <?php echo $award->award() ?> - <em><?php echo $award->presenter() ?></em></div>
              </div>

            <?php endforeach ?>
            <!-- horizontal line -->
            <hr>

        <!-- Print Section -->
        <h1 class = "cv_headers"> Print </h1>
            <?php foreach ($page->print()->toStructure() as $print): ?>

            <div class = "cv_list_container">
              <div id = "print_dates"> <?php echo $print->date()->toDate('Y') ?> </div>
              <div> <?php echo $print->magazine() ?> - <?php echo $print->description() ?></div>
            </div>

            <?php endforeach ?>
            <!-- horizontal line -->
            <hr>

      </div>

      <!-- closing div for the .page_columns class -->
    </div>
    
</body>
</html>
