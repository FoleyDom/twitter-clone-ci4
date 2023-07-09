<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <?php if (isset($styles)) : foreach ($styles as $style) {
         echo $style;
      }
   endif; ?>
   <title><?= esc($tab_title) ?></title>
</head>

<?= $this->include('front/components/nav_bar') ?>

<body>

   