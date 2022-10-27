<!-- Importing the snippet of header code (Found in snippets folder) -->

<!-- This is the .php file for the home page. This will display all of the pieces that should be displayed on the home page -->


    <?php snippet('header') ?>

    <!-- pieces for loop -->
      <div class = "home_page">
        <ul class = "projects-list">
          <?php foreach (page('pieces')->children() as $project): ?>

              <li class = "projects-container">

                <!-- Images are displayed with a weird path in the browser, maybe I can fix this -->
                <a href="<?= $project->images() ?>" class = "projects"> <img src = "<?= $project->images()?>" class = "projects-images"> </a>
                <p class = "project-title"> <?= $project->Title() ?> </p>
                <p class = "project-dimensions"> <?= $project->Project_Dimensions() ?> </p>
                <p class = "project-date"> <?= $project->Date_Created() ?> </p>
              </li>

          <?php endforeach ?>
        <ul>

      </div>
      
      <!-- closing div for the .page_columns class -->
    </div>
  </body>
</html>
