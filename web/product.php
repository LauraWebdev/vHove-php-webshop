<!DOCTYPE html>
  <html>
    <head>
    </head>
    <body>
      <?php
        include('template/header.php');
      ?>
      
      <h1>Product</h1>
      
      <?php
        $product = $_GET['product'];
      
        if($_POST['submit']) {
          $_COOKIE['checkout'][] = array('product' => $_POST['product'], 'size' => $_POST['size'], 'amount' => $_POST['amount']);
          echo "Erfolgreich zum Warenkorb hinzugefügt! <a href='checkout.php'>Zum Checkout</a>";
        }
      
        switch($product) {
          case 1:
            $productTitle = "Ruhrgebiet";
            $productDesc = "Wir sind das Ruhrgebiet!";
            break;
          case 2:
            $productTitle = "Gelsenkirchen";
            $productDesc = "Da is Schalke04 Land und so..";
            break;
        }
      ?>
      
      <h3><?=$productTitle;?></h3>
      <p><?=$productDesc;?></p>
      
      <hr />
      
      <input type="hidden" name="product" value="<?=$product;?>" />
      <select name="size">
        <option value="xs">XS</option>
        <option value="s">S</option>
        <option value="m">M</option>
        <option value="xl">XL</option>
        <option value="xxl">XXL</option>
      </select><br />
      <input type="number" name="amount" value="1" /><br />
      <button class="addToCheckout">Zum Warenkorb hinzufügen</button>
      
      <script>
        var addToCheckoutButton = document.querySelector('.addToCheckout');
        
        addToCheckoutButton.addEventListener('click', addToCheckout());
        
        function addToCheckout() {
          var dataProduct = document.querySelector('input[name="product"]');
          var dataSize = document.querySelector('input[name="size"]');
          var dataAmount = document.querySelector('input[name="amount"]');
          
          console.log(dataProduct + " - " + dataSize + " - " + dataAmount);
        }
      </script>
      
      <?php
        include('template/footer.php');
      ?>
    </body>
  </html>
