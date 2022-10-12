<!-- Importing the snippet of header code (Found in snippets folder) -->

<!-- This is the .php file for the home page. This will display all of the projects that should be displayed on the home page -->
<?php snippet('header') ?>

<!-- projects for loop -->

    <ul class = "projects-list">
      <?php foreach ($page->children() as $project): ?>

          <li class = "projects-container">
            <img src = "<?php echo $project->images()?>" class = "projects">
            <p class = "project-title"> <?php echo $project->image()->Title() ?> </p>
            <p class = "project-dimensions"> <?php echo $project->image()->Project_Dimensions() ?> </p>
            <p class = "project-date"> <?php echo $project->image()->Date_Created() ?> </p>
          </li>

      <?php endforeach ?>
    <ul>
  </body>
</html>
