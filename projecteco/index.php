<?php
    include "config.php";

    if(isset($_GET['logout'])) {
        session_destroy();
        header('Location:index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecom-Website</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="css/external.css">
    <style>
        .mySlides {display:none;}
    </style>
</head>
<body>
    <div id="header" class="header">
        <div class="left-align">
            <h1>AJIO</h1>
        </div>
        <div class="right-align">
            <div id="first" class="first">
                <?php if(isset($_SESSION['useremail'])) { ?>
                <button class="btn btn-secondary"> <?php echo $_SESSION['username'] ?> </button>
                <a href="index.php?logout=true">Logout</a>
                <a href="customercare.html">Customer Care</a>
                <div class="visit"><a href="changepwd.html">Change password</a></div>
                <?php } else { ?>
                <a href="login.php">Sign In / Join AJIO</a>
                <a href="customercare.html">Customer Care</a>
                <div class="visit"><a href="register.php">Visit AJIOLUXE</a></div>
                <?php } ?>
            </div>
            <div id="second" class="second">
                <form action="url" method="post">
                    <!-- <par class="trend">TRENDS</par> -->
                    <input type="text" placeholder="Search Trends Store">
                    <div id="search" class="search"><button type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="blue" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                    </svg></button></div>
                    <div id="heartdrop" class="heartdrop">
                        <button type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="20" fill="red" class="bi bi-heart-fill" viewBox="0 0 16 13">
                            <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314Z"/>
                        </svg></button>
                    </div>
                    <div id="cartdrop" class="cartdrop">
                        <button type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-bag-check-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zm-.646 5.354a.5.5 0 0 0-.708-.708L7.5 10.793 6.354 9.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"/>
                          </svg></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="header1" class="header1">
        <h1 class="title">TRENDS</h1>
        <div id="home" class="dropdown">
            <div id="home-dropdown" class="dropbtn">
                <button><li>MEN</li></button>
                <div class="dropdown-content">
                    <pre>Shop By:   <th>CATEGORIES</th></pre>
                    <hr>
                    <table>
                        <tr>
                            <th><a href="#">TOP WEAR</a></th>
                            <th><a href="#">FOOTWEAR</a></th>
                            <td></td>
                        </tr>
                        <tr>
                            <td><a href="#">Jackets & Coats</a></td>
                            <td><a href="#">Boots</a></td>
                        </tr>
                        <tr>
                            <td><a href="#">Shirts</a></td>
                            <td><a href="#">Casual Shoes</a></td>
                        </tr>
                        <tr>
                            <td><a href="#">Sweaters & Cardigans</a></td>
                            <td><a href="#">Flip Flops And Sandals</a></td>
                        </tr>
                        <tr>
                            <td><a href="#">Sweatshirts & Hoodies</a></td>
                            <td><a href="#">Formal Shoes</a></td>
                        </tr>
                        <tr>
                            <td><a href="#">T-Shirts</a></td>
                            <td><a href="#">Sports Shoes</a></td>
                        </tr>
                        <tr>
                            <td><a href="#">Character Shop</a></td>
                            <th rowspan="3"><a href="#">ACCESSORIES</a>
                                <a href="#">INNERWEAR</a></th>
                        </tr>
                        <tr>
                            <th><a href="#">BOTTOM WEAR</a></th>
                        </tr>
                        <tr>
                            <td><a href="#">Jeans</a></td>
                        </tr>
                        <tr>
                            <td><a href="#">Shorts & 3/4ths</a></td>
                            <td rowspan="2"><a href="#">Briefs & Trunks</a>
                                <a href="#">Vests</a></td>
                        </tr>
                        <tr>
                            <td><a href="#">Trousers & Pants</a></td>
                        </tr>
                        <tr>
                            <td><a href="#">Track Pants</a></td>
                        </tr>
                        <tr>
                            <th><a href="#">ACTIVE WEAR</a></th>
                            <td rowspan="4"><a href="#">Active Wear</a>
                                <a href="#">Casual Wear</a>
                                <a href="#">Work Wear</a>
                                <a href="#">COVID Essentials</a></td>
                        </tr>
                        <tr>
                            <td><a href="#">Track Pants</a></td>
                        </tr>
                        <tr>
                            <td><a href="#">T-Shirts</a></td>
                        </tr>
                    </table>
                    <div class="images">
                        <img src="assets/men.webp">
                    </div>
                </div>
            </div>
            <div id="home-dropdown" class="dropbtn">
                <button><li>WOMEN</li></button>
                <div class="dropdown-content">
                    <pre>Shop By:   <th>CATEGORIES</th></pre>
                    <hr>
                    <table>
                        <tr>
                            <th><a href="#">WESTERN WEAR</a></th>
                            <th><a href="#">ACTIVE WEAR</a></th>
                            <th><a href="#">CLOTHING ACCESSORIES</a></th>
                        </tr>
                        <tr>
                            <td><a href="#">Dresses</a></td>
                            <td><a href="#">Bottomwear</a></td>
                            <th rowspan="2"><a href="#">ACCESSORIES</a></th>
                        </tr>
                        <tr>
                            <td><a href="#">Jackets & Coats</a></td>
                            <td><a href="#">Tees</a></td>
                        </tr>
                        <tr>
                            <td><a href="#">Jeans & Jeggings</a></td>
                            <th rowspan="2"><a href="#">ETHNIC WEAR</a></th>
                            <td><a href="#">Bags & Wallets</a></td>
                        </tr>
                        <tr>
                            <td><a href="#">Leggings</a></td>
                            <td><a href="#">Belts</a></td>
                        </tr>
                        <tr>
                            <td><a href="#">Shirts</a></td>
                            <td><a href="#">Jackets</a></td>
                            <td><a href="#">COVID Essentials</a></td>
                        </tr>
                        <tr>
                            <td><a href="#">Shorts</a></td>
                            <td><a href="#">Kurta Suit Sets</a></td>
                        </tr>
                        <tr>
                            <td><a href="#">Skirts</a></td>
                            <td><a href="#">Kurtas</a></td>
                        </tr>
                        <tr>
                            <td><a href="#">Sweaters & Cardigans</a></td>
                            <td><a href="#">Kurtis & Tunics</a></td>
                        </tr>
                        <tr>
                            <td><a href="#">Tops</a></td>
                            <td><a href="#">Leggings & Churidars</a></td>
                        </tr>
                        <tr>
                            <td><a href="#">Track Pants</a></td>
                            <td><a href="#">Skirts & Ghagras</a></td>
                        </tr>
                        <tr>
                            <td><a href="#">Trousers & Pants</a></td>
                            <th><a href="#">FUSION WEAR</a></th>
                        </tr>
                        <tr>
                            <td><a href="#">T-Shirts</a></td>
                            <td><a href="#">Jackets & Shrugs</a></td>
                        </tr>
                        <tr>
                            <th><a href="#">LINGERIE & INNERWEAR</a></th>
                            <td><a href="#">Shirts,Tops & Tunics</a></td>
                        </tr>
                        <tr>
                            <td><a href="#">Bras</a></td>
                            <th><a href="#">FOOTWEAR</a></th>
                        </tr>
                        <tr>
                            <td><a href="#">Camisoles & Slips</a></td>
                            <td><a href="#">Casual Shoes</a></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><a href="#">Flat Sandals</a></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><a href="#">Heeled Sandals</a></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><a href="#">Sports Shoes</a></td>
                        </tr>
                    </table>
                    <div class="images">
                        <img src="assets/women.webp">
                    </div>
                </div>
            </div>
            <div id="home-dropdown" class="dropbtn">
                <button><li>KIDS</li></button>
                <div class="dropdown-content">
                    <pre>Shop By:   <th>CATEGORIES</th></pre>
                    <hr>
                    <table>
                        <tr>
                            <th><a href="#">GIRLS</a></th>
                            <th><a href="#">INFANTS</a></th>
                            <th><a href="#">BOYS</a></th>
                        </tr>
                        <tr>
                            <td><a href="#">DRESSERS & Frocks</a></td>
                            <td><a href="#">Baby Care</a></td>
                            <td><a href="#">Jackets & Coats</a></td>
                        </tr>
                        <tr>
                            <td><a href="#">Dungarees & Playsuit</a></td>
                            <td><a href="#">Dresses & Frocks</a></td>
                            <td><a href="#">Jeans</a></td>
                        </tr>
                        <tr>
                            <td><a href="#">Jackets & Coats</a></td>
                            <td><a href="#">Dungarees</a></td>
                            <td><a href="#">Shirts</a></td>
                        </tr>
                        <tr>
                            <td><a href="#">Jeans & Jeggings</a></td>
                            <td><a href="#">Jeans & Jeggings</a></td>
                            <td><a href="#">Shorts & 3/4ths</a></td>
                        </tr>
                        <tr>
                            <td><a href="#">Shirts,Tops & Tunics</a></td>
                            <td><a href="#">Leggings</a></td>
                            <td><a href="#">Sweaters</a></td>
                        </tr>
                        <tr>
                            <td><a href="#">Shorts</a></td>
                            <td><a href="#">Shirts</a></td>
                            <td><a href="#">Sweatshirts</a></td>
                        </tr>
                        <tr>
                            <td><a href="#">Skirts</a></td>
                            <td><a href="#">Shorts & 3/4ths</a></td>
                            <td><a href="#">Track Pants</a></td>
                        </tr>
                        <tr>
                            <td><a href="#">Sweaters</a></td>
                            <td><a href="#">Sweaters</a></td>
                            <td><a href="#">T-Shirts</a></td>
                        </tr>
                        <tr>
                            <td><a href="#">Sweatshirts</a></td>
                            <td><a href="#">Trousers & Pants</a></td>
                            <td><a href="#">Footwear</a></td>
                        </tr>
                        <tr>
                            <td><a href="#">T-Shirts</a></td>
                            <td><a href="#">T-Shirts</a></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><a href="#">Footwear</a></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td><a href="#">Boys (2-8)</a></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td><a href="#">Boys (8-15)</a></td>
                        </tr>
                        <tr>
                            <td><a href="#">Girls (2-8)</a></td>
                            <td></td>
                            <th><a href="#">FOOTWEAR</a></th>
                        </tr>
                        <tr>
                            <td><a href="#">Girls (8-15)</a></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>
                    <div class="images">
                        <img src="assets/kids.webp">
                    </div>
                </div>
            </div>
            <div id="home-dropdown" class="dropbtn">
                <button><li>BRANDS</li></button>
                <div class="dropdown-content">
                    <pre>Shop By:   <th>CATEGORIES</th></pre>
                    <hr>
                    <table>
                        <tr>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>.</td>
                        </tr>
                        <tr>
                            <td><a href="#">DNMX</a></td>
                            <td><a href="#">Avaasa Mix N'Match</a></td>
                            <td><a href="#">Inf Frends</a></td>
                        </tr>
                        <tr>
                            <td><a href="#">Duke</a></td>
                            <td><a href="#">Avaasa Set</a></td>
                            <td><a href="#">KB Team Spirit</a></td>
                        </tr>
                        <tr>
                            <td><a href="#">NetPlay</a></td>
                            <td><a href="#">Avaasa Workwear</a></td>
                            <td><a href="#">KG Frends</a></td>
                        </tr>
                        <tr>
                            <td><a href="#">Network</a></td>
                            <td><a href="#">DNMX</a></td>
                            <td><a href="#">KG Team Spirit</a></td>
                        </tr>
                        <tr>
                            <td><a href="#">Performax</a></td>
                            <td><a href="#">FIG</a></td>
                            <td><a href="#">Performax</a></td>
                        </tr>
                        <tr>
                            <td><a href="#">Proline</a></td>
                            <td><a href="#">FUSION</a></td>
                            <td><a href="#">Point Cove</a></td>
                        </tr>
                        <tr>
                            <td><a href="#">Teamspirit</a></td>
                            <td><a href="#">Performax</a></td>
                            <td><a href="#">Rio Girls</a></td>
                        </tr>
                        <tr>
                            <td><a href="#">John Players</a></td>
                            <td><a href="#">Rio</a></td>
                            <td><a href="#">YB DNMX</a></td>
                        </tr>
                        <tr>
                            <td><a href="#">Vimal Apparels</a></td>
                            <td><a href="#">Siyahi</a></td>
                            <td><a href="#">Mila Baby</a></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><a href="#">Teamspirit</a></td>
                            <td></td>
                        </tr>
                    </table>
                    <div class="images">
                        <img src="assets/brands.webp">
                    </div>
                </div>
            </div>
                <button><li>OFFERS</li></button>
        </div>
    </div>
    <div class="bestof"><img src="assets\explore.webp"></div>
    <div id="animation" style="max-width:100%">
        <img class="mySlides" src="assets/slideshow1.webp" style="width:100%">
        <img class="mySlides" src="assets/slideshow2.webp" style="width:100%">
        <img class="mySlides" src="assets/slideshow3.webp" style="width:100%">
        <img class="mySlides" src="assets/slideshow4.webp" style="width:100%">
    </div>
    <div class="bestof"><img src="assets/shopby.webp"></div>
    <div id="pdt" class="pnt">
        <table>
            <tr>
                <td><img src="assets/src_image1.webp" alt="" class="src1"></td>
                <td><img src="assets/src_image2.webp" alt="" class="src1"></td>
                <td><img src="assets/src_image3.webp" alt="" class="src1"></td>
                <td><img src="assets/src_image4.webp" alt="" class="src1"></td>
                <td><img src="assets/src_image14.webp" alt="" class="src1"></td>
            </tr>
        </table>
        <a class="anc" href="#"></a>
    </div>
    <div id="pdt" class="pnt">
        <table>
            <tr>
                <td><img src="assets/src_image5.webp" alt="" class="src1"><a href="#"></a></td>
                <td><img src="assets/src_image6.webp" alt="" class="src1"><a href="#"></a></td>
                <td><img src="assets/src_image7.webp" alt="" class="src1"><a href="#"></a></td>
                <td><img src="assets/src_image8.webp" alt="" class="src1"><a href="#"></a></td>
                <td><img src="assets/src_image9.webp" alt="" class="src1"><a href="#"></a></td>
            </tr>
        </table>
        <a class="anc" href="#"></a>
    </div>
    <div id="pdt" class="pnt">
        <table>
            <tr>
                <td><img src="assets/src_image10.webp" alt="" class="src1"></td>
                <td><img src="assets/src_image11.webp" alt="" class="src1"></td>
                <td><img src="assets/src_image12.webp" alt="" class="src1"></td>
                <td><img src="assets/src_image13.webp" alt="" class="src1"></td>
                <td><img src="assets/Shop-By-Category-bedline.webp" alt="" class="src1"></td>
            </tr>
        </table>
        <a class="anc" href="#"></a>
    </div>
    <div id="summer">
        <img src="assets/summer_pastels.webp">
    </div>
    <div class="bestof"><img src="assets/bestof.webp"></div>
    <div id="pdt" class="pnt">
        <table>
            <tr>
                <td><img src="assets/bestof1.webp" alt="" class="src1"></td>
                <td><img src="assets/bestof2.webp" alt="" class="src1"></td>
                <td><img src="assets/bestof3.jpg" alt="" class="src1"></td>
                <td><img src="assets/bestof4.webp" alt="" class="src1"></td>
                <td><img src="assets/bestof5.jpg" alt="" class="src1"></td>
            </tr>
        </table>
        <a class="anc" href="#"></a>
    </div>
    <div id="pdt" class="pnt">
        <table>
            <tr>
            <td><img src="assets/bestof8.webp" alt="" class="src1"></td>
                <td><img src="assets/bestof9.jpg" alt="" class="src1"></td>
                <td><img src="assets/bestof10.jpg" alt="" class="src1"></td>
                <td><img src="assets/bestof11.webp" alt="" class="src1"></td>
                <td><img src="assets/bestof12.webp" alt="" class="src1"></td>
            </tr>
        </table>
        <a class="anc" href="#"></a>
    </div>
    <div class="bestof"><img src="assets\bestoftrends.webp"></div>
    <hr>
    <div id="symbolesimg" class="symbolesimg">
        <table>
            <td><img src="assets/easy_exchange.jpg" class="symboles"></td>
            <td><img src="assets/handpicked.jpg" class="symboles"></td>
            <td><img src="assets/assured_quality.jpg" class="symboles"></td>
        </table>
    </div>
    <div id="foter" class="foter">
        <table>
            <tr>
                <th>Ajio</th>
                <th>Help</th>
                <th>Shop by</th>
                <th>Follow us</th>
            </tr>
            <tr>
                <td><a href="#">Who We Are</a></td>
                <td><a href="#">Track Your Order</a></td>
                <td><a href="#">Men</a></td>
                <td><a href="#">Facebook</a></td>
            </tr>
            <tr>
                <td><a href="#">Join Our Team</a></td>
                <td><a href="#">Frequently Asked Questions</a></td>
                <td><a href="#">Wemen</a></td>
                <td><a href="#">Instagram-AJIOlife</a></td>
            </tr>
            <tr>
                <td><a href="#">Terms & Conditions</a></td>
                <td><a href="#">Returns</a></td>
                <td><a href="#">Kids</a></td>
                <td><a href="#">Instagram-AJIO LUXE</a></td>
            </tr>
            <tr>
                <td><a href="#">We Respect Your Privacy</a></td>
                <td><a href="#">Cancellations</a></td>
                <td><a href="#">Indie</a></td>
                <td><a href="#">Twitter</a></td>
            </tr>
            <tr>
                <td><a href="#">Fees & Payments</a></td>
                <td><a href="#">Payments</a></td>
                <td><a href="#">Stores</a></td>
                <td><a href="#">Pinterest</a></td>
            </tr>
            <tr>
                <td><a href="#">Return & Refunds Polity</a></td>
                <td><a href="#">Customer Care</a></td>
                <td><a href="#">New Arrivals</a></td>
            </tr>
            <tr>
                <td><a href="#">Promotions Terms & Conditions</a></td>
                <td><a href="#">How Do I Redeem My Coupon</a></td>
                <td><a href="#">Brand Directory</a></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><a href="#">Home</a></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><a href="#">Collections</a></td>
            </tr>
        </table>
        <div class="hr"><hr></div>
        <div class="payment">
            <h5>Payment methods</h5>
            <div id="payment1" class="payment1">
                <ul>
                    <li><a href="#"><img src="assets/payment1.jpg"></a>
                        <a href="#"><img src="assets/payment2.jpg"></a>
                        <a href="#"><img src="assets/payment3.png"></a>
                        <a href="#"><img src="assets/payment4.jpg"></a>
                        <a href="#"><img src="assets/payment5.jpeg"></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <script>
    var myIndex = 0;
    carousel();
    function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
        x[myIndex-1].style.display = "block";  
        setTimeout(carousel, 3000); // Change image every 3 seconds
    }
    /*<td><img src="assets/src_image4_1.jpg" alt="" class="src1"></td>
    <th>ACTIVEWEAR</th>
    <td>STARTING &#8377 299</td>
    var swiper=new Swiper(".pnt",{
        slidesPreView: 3,
        spaceBetween:30,
        slidesPerGroup: 3,
        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
            el:".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
    <div class="secure">
                <h5>Secure systems</h5>
                <img src="assets/secure.jpg">
            </div>
    liveserver*/
    </script>
</body>
</html>