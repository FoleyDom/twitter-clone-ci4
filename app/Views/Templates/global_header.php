<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
   <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet" />
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />
   <?php if (isset($styles)) : foreach ($styles as $style) {
         echo $style;
      }
   endif; ?>
   <title><?= esc($tab_title) ?></title>
</head>

<?= $this->include('front/components/nav_bar') ?>

<body>