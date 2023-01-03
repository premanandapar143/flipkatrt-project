<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE id = $id");
  $row = mysqli_fetch_assoc($result);
}
else{
  header("Location: login.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>watches</title>
    <link rel="stylesheet" href="styels2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
  <nav>
    <div class="logo">
      
        <img src="https://static-assets-web.flixcart.com/fk-p-linchpin-web/fk-cp-zion/img/flipkart-plus_8d85f4.png" width="75px" height="20px" alt="">
        <p>
          Explore
          <span class="plus">plus</span>
          <img src="https://static-assets-web.flixcart.com/fk-p-linchpin-web/fk-cp-zion/img/plus_aef861.png" width="10px" height="10px"  alt="">
        </p>
      </div>
       <div class="search">
        <input type="text" placeholder="search for products brands and more"> 
        <i class="fa-solid fa-magnifying-glass"></i>
       </div>  
       <h4>Welcome <?php echo $row["name"]; ?></h4>
    <a href="logout.php">Logout</a>
  </nav>

  <div class="box">
    <section class="container">
   <div class="right-panel">
    <div class="photo">
      <img src="Analogwatch.jpeg" alt="">
      <button onclick="document.location='add/add.html'">ADD TO CART</button>
      <button> BUY NOW</button>

    </div>
    </div>
    <div class="left-panel">
      <h1>
        <span>newmen NM-25 black khodal stylish full black red quartz analog watch for men Analog Watch-For Men</span>
      </h1>
      <div class="price">
        <span class="real_price">₹89</span>
        <del>₹699</del>
        <span class="off">85% off</span>
        <div id="" class="ri">
          <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="_3ECE0V">
            <defs><circle id="b" cx="8" cy="8" r="8"></circle></defs>
          <g fill="none" fill-rule="evenodd">
          <g transform="translate(2 1)">
          <use fill="#FCFCFC" stroke="#000" stroke-opacity=".3" stroke-width=".8" xlink:href="#b">
        </use>
      </g>
      <text fill="#1D1D1D" font-family="Roboto-Medium, Roboto" font-size="11" font-weight="400" opacity=".59" transform="translate(2 1)">
          <tspan x="6.6" y="12.2">i</tspan>
        </text>
      </g>
    </svg>
    </div>
    </div>
    <div class="av_off">
           <span class="rate">3.9 </span> 
    <span class="rev">104 ratings and 19 reviews</span>
         </div>
         <div class="offers">
          <div class="A-o">Available offers</div>
          <div class="bank">
            <span class="row">
              <img src="https://rukminim1.flixcart.com/www/36/36/promos/06/09/2016/c22c9fc4-0555-4460-8401-bf5c28d7ba29.png?q=90" width="18" height="18" class="_3HLfAg">
              
                <span class="BO">Bank offer</span>
                <span class="l">10% off* with Axis Bank Buzz credit card</span>
                <div class="tc">
                  <span class=>T&amp;C</span>
                </div>
            </span>
            <span class="row">
              <img src="https://rukminim1.flixcart.com/www/36/36/promos/06/09/2016/c22c9fc4-0555-4460-8401-bf5c28d7ba29.png?q=90" width="18" height="18" class="_3HLfAg">
              
                <span class="BO">Bank offer</span>
                <span class="l">5%Unlimited Cashback on Flipkart Axis Bank credit card</span>
                <div class="tc">
                  <span class=>T&amp;C</span>
                </div>
              
            </span>
          
            <span class="row">
              <img src="https://rukminim1.flixcart.com/www/36/36/promos/06/09/2016/49f16fff-0a9d-48bf-a6e6-5980c9852f11.png?q=90" width="18" height="18" class="_3HLfAg">
              
                <span class="lk">No coseEMI with Flipkart Axis Bank credit card</span>
                <div class="tcl">
                  <span class=>T&amp;C</span>
                </div>
            </span>
          </div> 
          </div>          
            <div class="war">
              <span class="t">Warrenty</span>
              <span class="tm">1 more</span>    
            </div>
            <div class="lr">
            <div class="r-pan">
              <div class="loc">
                <div class="ll">
                <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxOCIgaGVpZ2h0PSIxOCI+PGcgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj48ZWxsaXBzZSBjeD0iOSIgY3k9IjE0LjQ3OCIgZmlsbD0iI0ZGRTExQiIgcng9IjkiIHJ5PSIzLjUyMiIvPjxwYXRoIGZpbGw9IiMyODc0RjAiIGQ9Ik04LjYwOSA3LjAxYy0xLjA4IDAtMS45NTctLjgyNi0xLjk1Ny0xLjg0NSAwLS40ODkuMjA2LS45NTguNTczLTEuMzA0YTIuMDIgMi4wMiAwIDAgMSAxLjM4NC0uNTRjMS4wOCAwIDEuOTU2LjgyNSAxLjk1NiAxLjg0NCAwIC40OS0uMjA2Ljk1OS0uNTczIDEuMzA1cy0uODY0LjU0LTEuMzgzLjU0ek0zLjEzIDUuMTY1YzAgMy44NzQgNS40NzkgOC45MjIgNS40NzkgOC45MjJzNS40NzgtNS4wNDggNS40NzgtOC45MjJDMTQuMDg3IDIuMzEzIDExLjYzNCAwIDguNjA5IDAgNS41ODMgMCAzLjEzIDIuMzEzIDMuMTMgNS4xNjV6Ii8+PC9nPjwvc3ZnPg==" class="_3vWr8n">
                <span class="Dt">Deliver to</span>
              </div>
              <div class="pin">
                <input placeholder="Enter delivery pincode" type="text" maxlength="6" autocomplete="off"  value="">
                <span class="chk">check</span>
              </div>
              <div class="delv">
                <ul>
                <div class="ul">Usually delivered in
                  <span class="days">2 weeks</span>
                  <span class="question">?</span>
              </div>
              <div class="code">Enter pincode for exact delivery dates/charges</div>
            </ul>
              </div>
              <div class="view"><span class="vd">View Details</span></div>
                </div>
                
      
              </div>
                </div>
              </div>
            </div>
         </div>
      </div>
    </section>
  </div>
</body>
</html>