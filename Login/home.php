<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width = device-width,initial-scale=1.0">
        <title>Home Page</title>
        <link rel="stylesheet" href="home-style.css">
    </head>

    <body>
        <header>
            <!-- NAVIGATION STARTS HERE-->
                <h2 class="logo"><a href="index.php">Welcome</a></h2>
                <nav class="navigation">
                    <a href="#" class="active">Home</a>
                    <a href="#" class="active">New Arrivals</a>
                    <a href="#" class="active">Fashion</a>
                    <a href="#" class="active"><ion-icon name="cart-sharp"></ion-icon></a>
                    <button class="btnLogin-popup">Login</button>
                    
                </nav>
        </header>

            <section class="content">
            <h1>New Arrivals</h1>
            <p>Get Your Best Fit Today</p>
            <button>Shop Now</button>
            </section>

     <!--creating grid-->
        <h1 class="pheading">Out Now</h1>

        <section class="sec">
            <div class="products">

                <!-- card start -->
                <div class="card">
                    <div class="img"><img src="assets/images/pexels-cottonbro-studio-3997381.jpg"></div>
                    <div class="desc">StickOns</div>
                    <div class="title">Short Red Only</div>
                    <div class="box">
                        <div class="price">70 cedis</div>
                        <form method="post" action="cart.php">
                        <input type="hidden" name="product" value="Short Red Only">
                        <input type="hidden" name="price" value="70">
                        <button class="btn">Order Now</button>
                        </form>
                    </div>
                </div>
                <!-- card end -->

                <!-- card start -->
                 <div class="card">
                    <div class="img"><img src="assets/images/pexels-designecologist-887352.jpg"></div>
                    <div class="desc">Acrylic</div>
                    <div class="title">Long Nail Design</div>
                    <div class="box">
                         <div class="price">120 cedis</div>
                         <form method="post" action="cart.php">
                         <input type="hidden" name="product" value="Long Nail Design">
                         <input type="hidden" name="price" value="120">
                         <button class="btn">Order Now</button>
                         </form>
                    </div>
                 </div>
                <!-- card end -->

                <!-- card start -->
                <div class="card">
                    <div class="img"><img src="assets/images/pexels-joyce-white-998405.jpg"></div>
                    <div class="desc">StickOns</div>
                    <div class="title">Multicoloured Short</div>
                    <div class="box">
                        <div class="price">80 cedis</div>
                        <form method="post" action="cart.php">
                        <input type="hidden" name="product" value="Multicoloured Short">
                        <input type="hidden" name="price" value="80">
                        <button class="btn">Order Now</button>
                        </form>
                    </div>
                </div>
                <!-- card end -->


              <!-- card start -->
              <div class="card">
                    <div class="img"><img src="assets/images/pexels-stephanie-ho-994173.jpg"></div>
                    <div class="desc">StickOns & Acrylic</div>
                    <div class="title">Realistic Designs</div>
                    <div class="box">
                        <div class="price">90 cedis</div>
                        <form method="post" action="cart.php">
                        <input type="hidden" name="product" value="Short Red Only">
                        <input type="hidden" name="price" value="90">
                        <button class="btn">Order Now</button>
                        </form>
                    </div>
                </div>
                <!-- card end -->

                <!-- card start -->
                <div class="card">
                    <div class="img"><img src="assets/images/pexels-linda-markaj-15491630.jpg"></div>
                    <div class="desc">Acrylic</div>
                    <div class="title">Heart Designs</div>
                    <div class="box">
                        <div class="price">100 cedis</div>
                        <form method="post" action="cart.php">
                        <input type="hidden" name="product" value="Heart Designs">
                        <input type="hidden" name="price" value="100">
                        <button class="btn">Order Now</button>
                        </form>
                    </div>
                </div>
                <!-- card end -->

               <!-- card start -->
                <div class="card">
                    <div class="img"><img src="assets/images/pexels-adrienne-andersen-2268404.jpg"></div>
                    <div class="desc">StickOns & Acrylic </div>
                    <div class="title">Dark Colours</div>
                    <div class="box">
                        <div class="price">70 cedis</div>
                        <form method="post" action="cart.php">
                        <input type="hidden" name="product" value="Dark Colours">
                        <input type="hidden" name="price" value="70">
                        <button class="btn">Order Now</button>
                        </form>
                    </div>
                </div>
                <!-- card end -->

            </div>
        </section>

        <footer>
            <p>Shop With Us!</p>
        </footer>

       
    

     <!--h1 class="heading">On Sale</h1-->

     <!--created grid-->

     <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
     <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>