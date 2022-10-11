<!-- Importing the snippet of header code (Found in snippets folder) -->

<!-- This is the .php file for the home page. This will display all of the projects that should be displayed on the home page -->
<?php snippet('header') ?>

<!-- projects for loop -->

    <ul class = "projects-list">
      <?php foreach ($page->children() as $project): ?>
        <!-- Need to find a way to set the size of this image -->
          <li class = "projects"> <?php echo $project->image() ?></li>
      <?php endforeach ?>
    </ul>
  </body>()
</html>
