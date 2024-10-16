<?php include "/home/std/cs6520159/public_html/meth-shop/src/database-instance.php" ?>
<?php include "/home/std/cs6520159/public_html/meth-shop/src/pages/admin/check-admin.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://unpkg.com/franken-ui@1.1.0/dist/css/core.min.css" />
  <script src="https://unpkg.com/franken-ui@1.1.0/dist/js/core.iife.js" type="module"></script>
  <script src="https://unpkg.com/franken-ui@1.1.0/dist/js/icon.iife.js" type="module"></script>
  <link
    rel="stylesheet"
    href="/~cs6520159/meth-shop/src/css/output.css"
  />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/~cs6520159/meth-shop/src/global.css">

  <style>
    body {
      font-family: "Inter", sans-serif;
    }
  </style>

</head>

<body class="    flex">


  <div>
    <?php include "/home/std/cs6520159/public_html/meth-shop/src/components/sidebar.php"; ?>
  </div>

  <content class="p-4 h-dvh grow overflow-y-auto">
    <div class="flex justify-between">
      <h1 class="text-4xl font-bold py-4"><span class="text-[#146eb4]">Workshop 9:</span> edit member </h1>
      <div class="uk-margin">

        <div class="flex gap-4">
            <?php include "/home/std/cs6520159/public_html/meth-shop/src/components/member/add-form.php"; ?>
            <?php include "/home/std/cs6520159/public_html/meth-shop/src/components/member/searchbox.php"; ?>
        </div>

      </div>
    </div>

    <div class="flex flex-wrap gap-4 mx-auto">
        <?php include "/home/std/cs6520159/public_html/meth-shop/src/components/member/cards.php"?>
    </div>

  </content>
</body>

</html>







