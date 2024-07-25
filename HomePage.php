<?php 
session_start();

$vis = true;
$ref = "#";
if(isset($_SESSION['user']))
{
  $vis= false;
}

if(isset($_SESSION['admin']) && $_SESSION['admin']=="true")
{
  $ref = "dashboard.php";
}




?>
<!DOCTYPE html>
<html>
    <head>
      <title>PHARMACY HUB</title>
      <meta charset="utf-8">
      <meta name="viewport"content="width=device-width,initial-scale=1.0">
      <link rel="stylesheet" href="decorate.css">
      <script src="https://kit.fontawesome.com/235861660e.js" crossorigin="anonymous"></script>
    </head>
    <body>
      <div class="container">
        <div class="nav">
          <a href="https://www.apollopharmacy.in/"><img src="hub.png"></a>
            <div class="search-bar">
               <input type="text" placeholder="Search here...">
               <button type="button"><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
            <ul>
              <li><a href="#">HOME</a></li>
              <?php 
              if($vis) 
                {
                  echo'<li><a href="login.php">LOGIN</a></li>';
                }
                else{
                  echo '<li><a href="'.$ref.'">'.$_SESSION['name'].'</a></li>';
                }
              ?>
              <li><a href="#">CART</a></li>
              <li><a href="contact.php">CONTACT US</a></li>
              <?php 
              if(!$vis) 
                {
                  echo'<li><a href="logout.php">Logout</a></li>';
                }
              ?>
            </ul>
        </div>
      </div>
      <div class="section">
        <img src="3.png" class="img1">
        <img src="4.png" class="img2">
         <center> 
          <h1>PHARMA HUB</h1>
          <h4 class="h4">Bringing Future of HealthCare</h4>
          <div class="v1">
             <a href="HomePage.php">VIEW</a>
          </div>
         </center>
      </div>
      <h2 id="h2">Daily Deal of The Day</h2>
      <center>
      <div class="main">
          <div class="card">
             <div class="product-image">
                   <a href="pr5.html"><img src="pr5.png"></a>
             </div>
             <div class="product-info">
                   <h4>Blood Glucose Test Strips</h4>
                   <h4>$400</h4>
             </div>
             <div class="btn">
                  <button type="button">Buy Now!</button>
             </div>
          </div>
          <div class="card">
            <div class="product-image">
             <img src="pr2.jpg">
            </div>
            <div class="product-info">
             <h4>Nivea Men Dark Spot Reduction</h4>
             <h4>$320</h4>
            </div>
            <div class="btn">
              <button type="button">Buy Now!</button>
            </div>
          </div>
          <div class="card">
            <div class="product-image">
             <img src="pr3.png">
            </div>
            <div class="product-info">
             <h4>Tetmasol Medicated Soaps</h4>
             <h4>$95</h4>
            </div>
            <div class="btn">
              <button type="button">Buy Now!</button>
            </div>
          </div>
          <div class="card">
            <div class="product-image">
             <img src="pr4.png">
            </div>
            <div class="product-info">
             <h4>Hanaplast Sport Wrist Brace</h4>
             <h4>$200</h4>
            </div>
            <div class="btn">
              <button type="button">Buy Now!</button>
            </div>
          </div>
      </div></center>
      <div class="section2">
        <img src="2.png" class="img3">
          <h2 class="h5">We Take Care of your Healthy Life</h2>
          <p class="p1">We are the Best Pharmacy,Stay Safe Stay Healthy.</p>
      </div>
      <h2 id="h2">BEAUTY PRODUCTS</h2>
      <center>
      <div class="main">
        <div class="card">
           <div class="product-image">
                 <img src="pr1.png">
           </div>
           <div class="product-info">
                 <h4>Nestle Cerealc Baby Cereal with Milk</h4>
                 <h4>$240</h4>
           </div>
           <div class="btn">
                <button type="button">Buy Now!</button>
           </div>
        </div>
        <div class="card">
          <div class="product-image">
           <img src="pr6.png" onclick="">
          </div>
          <div class="product-info">
           <h4> Diabetic Care Juce by Ever</h4>
           <h4>$320</h4>
          </div>
          <div class="btn">
            <button type="button">Buy Now!</button>
          </div>
        </div>
        <div class="card">
          <div class="product-image">
           <img src="pr13.png">
          </div>
          <div class="product-info">
           <h4>Himalya Baby Powder with soap</h4>
           <h4>$95</h4>
          </div>
          <div class="btn">
            <button type="button">Buy Now!</button>
          </div>
        </div>
        <div class="card">
          <div class="product-image">
           <img src="pr12.png">
          </div>
          <div class="product-info">
           <h4> Woodward's Gripe Water for Child </h4>
           <h4>$80</h4>
          </div>
          <div class="btn">
            <button type="button">Buy Now!</button>
          </div>
        </div>
     </div>
      </center>
   <div class="que">
   <img id="pra" src="pr4.png" alt="Frequently Asked Questions Image">
    <h2>Frequently Asked Questions</h2>
    <ul class="accordion">
      <li>
        <input type="radio" name="accordion" id="first">
        <label for="first" id="firstLabel">How to order medicines online from  PharmacyHub?
        </label>
        <div class="content">
          <p>Ordering medicines from  PharmacyHub online medical store is quick and hassle-free. If you wish to purchase over-the-counter medicines or FMCG products, all you need to do is click on the ‘Buy Medicines’ section on the app/website and type the name of the product you wish to buy in the search box. Once you select the product, you can click on the ‘Add to Cart’ button and proceed to make the payment. Once your order has been confirmed, we will start prepping your order for home delivery. </p>
        </div>
      </li>
      <li>
        <input type="radio" name="accordion" id="second">
        <label for="second">Is online medicine delivery safe?</label>
        <div class="content">
          <p>Absolutely! All the medicines/products sold through our platform are inspected thoroughly for their authenticity and quality. Also, while delivering the medicines, our team follows strict safety protocols to ensure only the top-notch products get delivered to you.</p>
        </div>
      </li>
      <li>
      <input type="radio" name="accordion" id="third">
        <label for="third">How do I know if there is a delay in delivery?</label>
        <div class="content">
          <p>If, for any reason, your order is delayed, our team will contact you either through SMS, call or email and inform you of the same. You can also check the status of your order on the app/website by clicking on the ‘Order Status’ button.
          </p>
        </div>
      </li>
      <li>
      <input type="radio" name="accordion" id="fourth">
        <label for="fourth">Can PharmacyHub provide express delivery?</label>
        <div class="content">
          <p>Yes, depending on the city you reside in. In select cities, orders are delivered in as less as 1 hour. Please note that the express deliveries may be based on various other factors such as medicine availability, availability of the staff, etc.</p>
        </div>
      </li>
      <li>
      <input type="radio" name="accordion" id="fifth">
        <label for="fifth">Can I track the delivery status of my order? If yes, how?</label>
        <div class="content">
          <p>To track your order, you can click on the ‘My Orders’ section under the ‘My Account’ tab. Then click on the particular order to check the status of your order.</p>
        </div>
      </li>
      <li>
        <input type="radio" name="accordion" id="sixth">
        <label for="sixth">Does PharmacyHub provide home delivery of medicines?</label>
        <div class="content">
        <p>Yes,PharmacyHUb provides the fastest home delivery of medicines.</p>
        </div>
    </li>
    <li>
      <input type="radio" name="accordion" id="Hii2">
      <label for="Hii2" id="Hii">Does PharmacyHub provide home delivery of medicines?</label>
      <div class="content d-none" id="Hiicontent">
      <p>Yes,PharmacyHUb provides the fastest home delivery of medicines.</p>
      </div>
  </li>
  <li>
    <input type="radio" name="accordion" id="sixth">
    <label for="sixth">Does PharmacyHub provide home delivery of medicines?</label>
    <div class="content">
    <p>Yes,PharmacyHUb provides the fastest home delivery of medicines.</p>
    </div>
</li>
    </ul>
   </div>
   <script src="script.js"></script>
  </body>
</html>