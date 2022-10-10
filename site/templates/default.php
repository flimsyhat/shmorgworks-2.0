<html lang = "en">
<head>
  <meta charset="UTF-8">
  <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
  <title> <?php echo $page->title() ?> </title>
  <?php echo css('assets/css/index.css') ?>
</head>
<body>

  <header class = "header">

    <a class = "logo" href="<?php echo $site -> url() ?>"> <?php echo $site -> Title()?> </a>

    <p class = "nav_menu_description"> <?php echo $site -> Description()?> </p>

    <nav>
      <ul class = "nav_menu">
        <?php foreach ($site->children()->listed() as $item): ?>
          <li><a class = "nav_menu_items" href = "<?php echo $item->url() ?>"><?php echo $item -> Title() ?></a></li>
        <?php endforeach ?>
        <li><a class = "nav_menu_items" href = "mailto:shmorgworks@gmail.com"> Contact </a>
      </ul>
    </nav>
  </header>

  </body>
  </html>
