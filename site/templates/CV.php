    <?php snippet('header') ?>

    <div class = "page">

      <!-- EDUCATION SECTION -->
          <h1 class = "cv_headers"> education </h1>
          <?php foreach ($page->education()->toStructure() as $education): ?>

            <div class = "cv_list_container">
                <div id = "education_dates"> <?= $education->date()->toDate('Y') ?> </div>
                <div id = "education_school_class"> <?= $education->school() ?> <br> <em><?= $education->course() ?></em> </div>
            </div>

          <?php endforeach ?>
          <!-- horizontal line -->
          <hr>

      <!-- SOLO EXHIBITIONS SECTION -->
        <h1 class = "cv_headers"> solo exhibitions </h1>
            <?php foreach ($page->solo_exhibitions()->toStructure() as $solo_exhibition): ?>

              <div class = "cv_list_container">
                <div id = "solo_exhibition_dates"> <?= $solo_exhibition->date()->toDate('Y') ?> </div>
                <div> <em><?= $solo_exhibition->name() ?></em> - <?= $solo_exhibition->gallery() ?> - Exhibit curated by <?= $solo_exhibition->curators() ?> - <?= $solo_exhibition->location() ?></div>
              </div>

            <?php endforeach ?>
            <!-- horizontal line -->
            <hr>

        <!-- Group Exhibitions Section -->
        <h1 class = "cv_headers"> group exhibitions </h1>
            <?php foreach ($page->group_exhibitions()->toStructure() as $group_exhibition): ?>

              <div class = "cv_list_container">
                <div id = "group_exhibition_dates"> <?= $group_exhibition->date()->toDate('Y') ?> </div>
                <div> <em><?= $group_exhibition->name() ?></em> - <?= $group_exhibition->gallery() ?> - Exhibit curated by <?= $group_exhibition->curators() ?> - <?= $group_exhibition->location() ?></div>
              </div>

            <?php endforeach ?>
            <!-- horizontal line -->
            <hr>

        <!-- Awards and Honors Section -->
        <h1 class = "cv_headers"> awards/honors </h1>
            <?php foreach ($page->awards()->toStructure() as $award): ?>

              <div class = "cv_list_container">
                <div id = "awards_honors_dates"> <?= $award->date()->toDate('Y') ?> </div>
                <div> <?= $award->award() ?> - <em><?= $award->presenter() ?></em></div>
              </div>

            <?php endforeach ?>
            <!-- horizontal line -->
            <hr>

        <!-- Print Section -->
        <h1 class = "cv_headers"> print </h1>
            <?php foreach ($page->print()->toStructure() as $print): ?>

            <div class = "cv_list_container">
              <div id = "print_dates"> <?= $print->date()->toDate('Y') ?> </div>
              <div> <?= $print->magazine() ?> - <?= $print->description() ?></div>
            </div>

            <?php endforeach ?>
            <!-- horizontal line -->
            <hr>

      </div>

      <!-- closing div for the .page_columns class -->
    </div>

</body>
</html>
