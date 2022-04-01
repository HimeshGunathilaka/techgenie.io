<?php
 $con = mysqli_connect('localhost', 'root');
 mysqli_select_db($con, 'becm');//CONNECT TO DB HERE
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $product['title'];?></title><!-- Title of the webpage --> 
        <!-- Favicons -->
        <link href="assets/img/favicon.png" rel="icon">
        <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
        <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
        <style>
            .itemtopic{
                text-align:center;
                margin-top: 10px;
                margin-bottom: 25px;
            }
            table{
                border: solid thin;
                width: 700px;
                border-radius:10px;
                overflow:hidden;
            }
            td{
                border: 1px solid #fff;
            }
            .product_title{
                padding-left:15px;
                padding-top:10px;
                padding-bottom:7px;
                background-color: #525252;
                color: white;
            }
            #prodimg{
                object-fit:contain;
                width:100%;
            }
            .catagory-icon-main{
                text-align:center;
            }
            .dataicon{
                background-color:#cccccc;
            }
            .data{
                padding-left:10px;
                background-color:#ebebeb;
            }
            .card-title,.card-text{
            text-align: center;
        }
        
        .buttonflex{
            display: flex;
            flex-direction: row;
            justify-content: center;
        }
        .flextitle:hover{
            text-decoration:none;
        }
        .hoverclass{
            transition: transform .5s; /* Animation */
        }
        .hoverclass:hover {
            transform: scale(1.05); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
        }
        .flex-featured{
            margin-top:35px;
        }
        .filler{

            width:100%;
            height:120px;
            object-fit:stretch;
            background-color:#525252;
            display:table;
            
        }
        .newstopic{
            margin-left:15%;
        }
        .flex-in-details{
    display: flex;
    flex-direction: row;
    gap: 15px;
    align-items: center;
    justify-content: center;
}
        </style>
    </head>
    <body>
    <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">Tech Genie</a></h1>
      <!-- Uncomment for image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li class="dropdown"><a href="#"><span>Devices</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Smartphones</a></li>
              </li>
              <li><a href="#">Tablets</a></li>
              <li><a href="#">Laptops</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact Us</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->


        <div class="main">
            <h4 class="itemtopic"> Explore more about <?=$product['title'];?></h4>
        <div class="itemshowcase" style="display:flex; justify-content:center">
            <div style="width:700px">
                <table>
                    <tr>
                        <td colspan="6"><div class="product_title"><h5><?= $product['title'];?></h5></div></td>
                    </tr>
                    <tr>
                        <td rowspan="5" height="256px" width="256px" style="max-width:256px; max-height:256px;"><div><img src="<?= $product['image'];?>" id="prodimg"></div></td>
                        <td class="dataicon"><div style="text-align:center; margin-top:0;"> <i class="bi bi-phone" style="font-size:30px;"></i> </div></td>
                        <td class="data"><div><?= $product['display_size'];?>"</div></td>
                        
                        
                    </tr>
                    <tr>
                        <td class="dataicon"><div style="text-align:center; margin-top:0;"> <i class="bi bi-memory" style="font-size:30px;"></i> </div></td>
                        <td class="data"><div><?= $product['ram'];?> GB</div></td>
                        
                    </tr>
                    <tr>
                         <td class="dataicon"><div style="text-align:center; margin-top:0;"> <i class="bi bi-cpu" style="font-size:30px;"></i> </div></td>
                         <td class="data"><div><?= $product['cpu'];?></div></td>
                        
                    </tr>
                    <tr>
                    <td class="dataicon"><div style="text-align:center; margin-top:0;"> <i class="bi bi-battery-full" style="font-size:30px;"></i> </div></td>
                    <td class="data"><div><?= $product['maximum_battery'];?> mAh</div></td>
                        
                    </tr>
                    <tr>
                    <td class="dataicon"><div style="text-align:center; margin-top:0;"> <i class="bi bi-gear" style="font-size:30px;"></i> </div></td>
                    <td class="data"><div><?= $product['batterylife'];?>% approx.</div></td>
                        
                    </tr>
                </table>
            </div>
        </div>
        <h4 class="newstopic"> Explore more about <?=$product['title'];?></h4>
        <div class="flex-in-details">
                   
                   <div class="card hoverclass" style="width: 18rem;">
                        <div class="filler" style="text-align:center; ">
                        <i class="bi bi-person-lines-fill" style="color:white; font-size:44px; display:table-cell; vertical-align:middle;"></i>
                        </div>
                       <!-- <img src="../img/inventory.png" class="card-img-top" alt="Inventory"> -->
                       <div class="card-body">
                           <a href="inventory.php" class="flextitle"><h5 class="card-title">Contact</h5></a>
                               <p class="card-text card-inventory">Call us for more details about this product</p>
                       </div>
                   </div>
               
                   <div class="card hoverclass" style="width: 18rem;">
                       <img src="../img/recommendation.png" class="card-img-top" alt="">
                       <div class="card-body">
                           <a href="" class="flextitle"><h5 class="card-title">Featured Items</h5></a>
                               <p class="card-text card-featured">Add or modify featured items displayed on your website</p>
                       </div>
                   </div>

                   <div class="card hoverclass" style="width: 18rem;">
                       <img src="../img/section.png" class="card-img-top" alt="">
                       <div class="card-body">
                           <a href="" class="flextitle"><h5 class="card-title">Sections</h5></a>
                               <p class="card-text card-section">Add or manage special sections of your site</p>
                       </div>
                   </div>
           </div>
        </div>
    </body>
</html>