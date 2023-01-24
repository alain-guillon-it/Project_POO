<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>IT-Students | Project OOP</title>
  <!-- CSS -->
  <?php if ($_action && $_id) : ?>
    <link rel="stylesheet" href=<?= "../../public/assets/styles/base.css"; ?>>
  <?php elseif ($_action) : ?>
    <link rel="stylesheet" href=<?= "../public/assets/styles/base.css"; ?>>
  <?php else : ?>
    <link rel="stylesheet" href="./public/assets/styles/base.css">
  <?php endif; ?>
</head>

<body>
  <header>
    <a href="/?page=home">
      <span>IT-Students - Project OOP</span>
    </a>
    <?php include_once "./public/partials/_nav.php"; ?>
  </header>
  <main>