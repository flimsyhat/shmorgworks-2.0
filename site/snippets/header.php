<html lang = "en">
<head>
  <meta charset="UTF-8">
  <meta name = "viewport" content = "width=device-width, initial-scale=1.0">

  <!-- Displays the page title for each page in the browser tab -->
  <title> <?php echo $page->title() ?> </title>

  <!-- Link to the css styling file -->
  <?php echo css('assets/css/index.css') ?>
</head>
<body>

  <!-- The Navigation menu that will be displayed on the left side of every webpage  -->
  <header class = "header">

    <!-- Shmorgworks "logo" in the top left corner  -->
    <a class = "logo" href="<?php echo $site -> url() ?>"> <?php echo $site -> Title()?> </a>

    <!--  Shmorgworks description, Currently: Abstract metal sculptures by L. Morgan Kelley. -->
    <p class = "nav_menu_description"> <?php echo $site -> Description()?> </p>

    <!-- The list of other pages, as well as the contact email button  -->
    <nav>
      <ul class = "nav_menu">

        <!-- php for loop that displats the about and cv page links  -->
        <?php foreach ($site->children()->listed() as $item): ?>
          <li class = "nav_menu_items"><a class = "nav_menu_items" href = "<?php echo $item->url() ?>"><?php echo $item -> Title() ?></a></li>
        <?php endforeach ?>

        <!-- link for the contact button in the nav menu  -->
        <li class = "nav_menu_items"><a class = "nav_menu_items" href = "mailto:shmorgworks@gmail.com"> Contact </a>
      </ul>

      <!-- The social media icons in the nav menu -->
      <ul class = "social_media_nav_menu">

        <?php $insta_image = $site-> image('/images/instagram-icon.svg')?>

        <li class = "social_media_icons"> <a class = "social_media_icons" href = "https://www.instagram.com/shmorgworks/" target="_blank"> <img src = "/images/instagram-icon.svg" class = "social_media_icons" ></a></li>
        <li class = "social_media_icons"> <a class = "social_media_icons" href = "https://twitter.com/shmorgworks" target="_blank"> <img src = "/images/twitter-icon.svg" class = "social_media_icons" ></a></li>
        <li class = "social_media_icons"> <a class = "social_media_icons" href = "https://www.tiktok.com/@shmorgworks" target="_blank"> <img src = "/images/tik-tok-icon.svg" class = "social_media_icons" ></a></li>

      </ul>
    </nav>
  </header>
