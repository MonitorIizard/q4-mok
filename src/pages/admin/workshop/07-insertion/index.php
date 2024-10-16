<?php include "/home/std/cs6520159/public_html/meth-shop/src/database-instance.php" ?>
<?php include "/home/std/cs6520159/public_html/meth-shop/src/pages/admin/check-admin.php" ?>

<!DOCTYPE html>
<html lang="en">

<?php include "/home/std/cs6520159/public_html/meth-shop/src/pages/header.php"; ?>

<body class="    flex">


  <?php include "/home/std/cs6520159/public_html/meth-shop/src/components/sidebar.php"; ?>

  <content class="p-4 h-dvh grow overflow-y-auto">
    <div class="flex justify-between">
      <h1 class="text-4xl font-bold py-4"><span class="text-primary-blue">Workshop 7:</span> insertion </h1>
      <div class="uk-margin">

        <div class="flex gap-4">
            <?php include "/home/std/cs6520159/public_html/meth-shop/src/components/member/add-form.php"; ?>
            <?php include "/home/std/cs6520159/public_html/meth-shop/src/components/member/search-box.php"; ?>
        </div>

      </div>
    </div>

    <div class="flex flex-wrap gap-4 mx-auto">
        <?php include "/home/std/cs6520159/public_html/meth-shop/src/components/member/cards.php"?>
    </div>

  </content>
</body>

</html>







