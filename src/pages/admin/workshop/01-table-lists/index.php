<?php include "/home/std/cs6520159/public_html/meth-shop/src/database-instance.php" ?>
<?php include "/home/std/cs6520159/public_html/meth-shop/src/pages/admin/check-admin.php" ?>

<!DOCTYPE html>
<html lang="en">

<?php include "/home/std/cs6520159/public_html/meth-shop/src/pages/header.php"; ?>

<body class="    flex">
  <?php include "/home/std/cs6520159/public_html/meth-shop/src/components/sidebar.php"; ?>

  <content class="p-4 h-dvh grow overflow-y-auto">
    <h1 class="text-4xl font-bold py-4"><span class="text-primary-blue">Workshop 1:</span>  Select table </h1>
    <div class="mx-auto w-full">
      <table class="uk-table uk-table-striped bg-gray-700">
      <thead class=" bg-primary-orange">
        <tr>
          <th>id</th>
          <th>name</th>
          <th>pdetail</th>
          <th>price</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $stmt = $pdo->prepare("SELECT * FROM product");
        $stmt->execute();
        while ($row = $stmt->fetch()) {
        ?>
        <tr>
          <td><?=$row ["pid"]?></td>
          <td><?=$row ["pname"]?></td>
          <td><?=$row ["pdetail"]?></td>
          <td><?=$row ["price"]?> บาท</td>
        </tr>
        <?php } ?>
        </tbody>
      </table>
    </div>
    
    <h2 class="text-2xl font-bold py-4"> Code </h2>
    <iframe
      src="https://carbon.now.sh/embed?bg=rgba%28171%2C+184%2C+195%2C+1%29&t=seti&wt=none&l=auto&width=680&ds=true&dsyoff=20px&dsblur=68px&wc=true&wa=true&pv=56px&ph=56px&ln=false&fl=1&fm=Hack&fs=14px&lh=133%25&si=false&es=2x&wm=false&code=%253Ctbody%253E%250A%2520%2520%2520%2520%2520%2520%2520%2520%253C%253Fphp%250A%2520%2520%2520%2520%2520%2520%2520%2520%2524stmt%2520%253D%2520%2524pdo-%253Eprepare%28%2522SELECT%2520*%2520FROM%2520product%2522%29%253B%250A%2520%2520%2520%2520%2520%2520%2520%2520%2524stmt-%253Eexecute%28%29%253B%250A%2520%2520%2520%2520%2520%2520%2520%2520while%2520%28%2524row%2520%253D%2520%2524stmt-%253Efetch%28%29%29%2520%257B%250A%2520%2520%2520%2520%2520%2520%2520%2520%253F%253E%250A%2520%2520%2520%2520%2520%2520%2520%2520%253Ctr%253E%250A%2520%2520%2520%2520%2520%2520%2520%2520%2520%2520%253Ctd%253E%253C%253F%253D%2524row%2520%255B%2522pid%2522%255D%253F%253E%253C%252Ftd%253E%250A%2520%2520%2520%2520%2520%2520%2520%2520%2520%2520%253Ctd%253E%253C%253F%253D%2524row%2520%255B%2522pname%2522%255D%253F%253E%253C%252Ftd%253E%250A%2520%2520%2520%2520%2520%2520%2520%2520%2520%2520%253Ctd%253E%253C%253F%253D%2524row%2520%255B%2522pdetail%2522%255D%253F%253E%253C%252Ftd%253E%250A%2520%2520%2520%2520%2520%2520%2520%2520%2520%2520%253Ctd%253E%253C%253F%253D%2524row%2520%255B%2522price%2522%255D%253F%253E%2520%25E0%25B8%259A%25E0%25B8%25B2%25E0%25B8%2597%253C%252Ftd%253E%250A%2520%2520%2520%2520%2520%2520%2520%2520%253C%252Ftr%253E%250A%2520%2520%2520%2520%2520%2520%2520%2520%253C%253Fphp%2520%257D%2520%253F%253E%250A%253C%252Ftbody%253E"
      style="width: 614px; height: 447px; border:0; transform: scale(1); overflow:hidden;"
      sandbox="allow-scripts allow-same-origin"
      class="mx-auto">
    </iframe>
  </content>
</body>

</html>