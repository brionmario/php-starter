<?php
  // require the Faker autoloader
  require_once './vendor/autoload.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="theme-color" content="#ffffff">
  <meta name="author" content="Brion Silva">
  <title>PHP Starter by Aparecium Labs</title>
  <!-- Favicon Package -->
  <link rel="apple-touch-icon" sizes="180x180" href="./assets/icons/favicon_package/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./assets/icons/favicon_package/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./assets/icons/favicon_package/favicon-16x16.png">
  <link rel="manifest" href="./assets/icons/favicon_package/site.webmanifest">
  <link rel="mask-icon" href="./assets/icons/favicon_package/safari-pinned-tab.svg" color="#5bbad5">

  <!-- inject:css -->
  <!-- endinject -->

  <!-- inject:js -->
  <!-- endinject -->
</head>

<body>
  <?php require './components/header.php'?><!-- header -->
  <div class="main-area">
    <div class="container">
      <div class="row">
        <div class="composer-demo text-center mt-5">
          <div class="heading">
            <img class="composer-logo mb-4" src="assets/img/composer.svg" height="300"/>
            <h6 class="text-dark">This starter project incorporates the power of composer. Please visit <a href="https://packagist.org/" target="_blank">https://packagist.org/</a> to browse packages and simply add them to to the project.</h6>
            <p>Following is a demonstration of the already included <span class="pre">faker</span> library. Press the generate button to generate a random word.</p>
          </div>
          <div class="faker-demo-container">
            <h4 id="fake-name" class="fake-name text-dark mt-4 mb-4">Fake Name</h4>
            <button id="generate-btn" class="btn btn-primary btn-sm">Generate</button>
          </div>
        </div>
      </div><!-- /row -->
    </div><!-- /container -->
  </div><!-- /main-area -->
  <?php require './components/footer.php'?><!--footer -->
  <script language="JavaScript" type="text/javascript">
    $(document).ready(function() {
      $("button").click(function() {
        <?php
        $faker = Faker\Factory::create();
        echo 'document.getElementById("fake-name").innerHTML = "'. $faker->name .'";';
        ?>
      });
    });
  </script>
</body>
</html>
