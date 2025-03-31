<!DOCTYPE html>
<html lang="en">
<head>
<title>About Us|LWIS</title>

<?php include("all-head.php"); ?>
<!-- <meta name="keywords" content="活水泉源,磁磚,藝術,拼貼,裝潢,室內設計,室內,室外,塗料,伊斯曼,進口塗料,進口瓷磚,雨水回收,Ismanity,伊斯曼,a-cornerstone,可樂石,eternal stone,達理石,a-holystone,活麗石,α-cornerstone"> -->
<meta name="description" content="Living Water In Spring International Co., Ltd. Since 1990, tiles and building stones have been imported from Italy, Spain, Indonesia, Thailand, Vietnam and other countries, providing the latest artistic tiles to give Taiwan builders and designers more choices.">

<meta property="og:title" content="About Us|LWIS International Co., Ltd.">
<meta property="og:description" content="Living Water In Spring International Co., Ltd. Since 1990, tiles and building stones have been imported from Italy, Spain, Indonesia, Thailand, Vietnam and other countries, providing the latest artistic tiles to give Taiwan builders and designers more choices.">

<link rel="stylesheet" href="../css/swiper-bundle.min.css"/>
<link rel="stylesheet" href="../css/animate.min.css">
<link rel="stylesheet" href="../css/about.css">
<script src="../js/swiper-bundle.min.js"></script>
<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "ItemList",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "url": "https://lwis.com.tw/about.php?brand=corner"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "url": "https://lwis.com.tw/about.php?brand=eternal"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "url": "https://lwis.com.tw/about.php?brand=holy"
        },
        {
          "@type": "ListItem",
          "position": 4,
          "url": "https://lwis.com.tw/about.php?brand=iwall"
        },
        {
          "@type": "ListItem",
          "position": 5,
          "url": "https://lwis.com.tw/about.php?brand=graf"
        },
        {
          "@type": "ListItem",
          "position": 6,
          "url": "https://lwis.com.tw/about.php?brand=ismanity"
        }]
    }
</script>
</head>
<body>
<?php include("aside.php"); ?>
<div class="d-none">
    <?php if($_GET["about"] == "lwis"){ ?>
        <script>
            $(function(){
                swiper0.slideTo(0);
            });
        </script>
    <?php }elseif($_GET["about"] == "position"){ ?>
        <script>
            $(function(){
                swiper0.slideTo(0);
            });
        </script>
    <?php }elseif($_GET["about"] == "serve"){ ?>
        <script>
            $(function(){
                swiper0.slideTo(1);
            });
        </script>
    <?php }elseif($_GET["about"] == "brands"){ ?>
        <script>
            $(function(){
                swiper0.slideTo(2);
            });
        </script>
    <?php }elseif($_GET["brand"] == "corner"){ ?>
        <script>
            $(function(){
                swiper0.slideTo(2);
                swiper2.slideTo(0);
            });
        </script>
    <?php }elseif($_GET["brand"] == "eternal"){ ?>
        <script>
            $(function(){
                swiper0.slideTo(2);
                swiper2.slideTo(1);
            });
        </script>
    <?php }elseif($_GET["brand"] == "holy"){ ?>
        <script>
            $(function(){
                swiper0.slideTo(2);
                swiper2.slideTo(2);
            });
        </script>
    <?php }elseif($_GET["brand"] == "iwall"){ ?>
        <script>
            $(function(){
                swiper0.slideTo(2);
                swiper2.slideTo(3);
            });
        </script>
    <?php }elseif($_GET["brand"] == "graf"){ ?>
        <script>
            $(function(){
                swiper0.slideTo(2);
                swiper2.slideTo(4);
            });
        </script>
    <?php }elseif($_GET["brand"] == "ismanity"){ ?>
        <script>
            $(function(){
                swiper0.slideTo(2);
                swiper2.slideTo(5);
            });
        </script>
    <?php }else{ ?> 
    <?php } ?>
</div>
<main>
    <div class="swiper mySwiper0">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <h3>About Us</h3>
                <div class="mycontainer">
                    <h4>Company</h4>
                    <span>Living Water was founded in 1998. Past 25 years, we have been towards development of green energy and special building materials from Europe.</span><br>
                    <!-- <span style="color:#FC0;font-size:1.325rem;">正直、負責、創新</span> <span>來服務大家</span><br> -->
                    <br><br>
                    <h4>Brand Awareness</h4>
                    <span>We are towards the resting economy of the future - Elderly care, medical biotechnology, childhood education, and leisure. Develop safe, high-quality green building materials.</span>
                    <br><br><br><br><br>
                    <div class="myicon">
                        <div class="animate__animated animate__bounce animate__infinite" id="myscroll0">
                            <span class="material-symbols-outlined">mouse</span>
                            <span class="material-symbols-outlined" style="width:100%;">keyboard_double_arrow_down</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide" id="mystyle0">
                <h3>About Us</h3>
                <div class="mycontainer">
                    
                    <h4>Service</h4>
                    <span>We will make 3D renderings for you free of charge to provide you with the most realistic decoration effect.</span>
                    <div class="swiper mySwiper1">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="../images/about/rendering1-1.webp" alt="render-bathroom">
                            </div>
                            <div class="swiper-slide">
                                <img src="../images/about/rendering1-2.webp" alt="render-bathroom">
                            </div>
                            <div class="swiper-slide">
                                <img src="../images/about/rendering2-1.webp" alt="render-bedroom">
                            </div>
                            <div class="swiper-slide">
                                <img src="../images/about/rendering2-2.webp" alt="render-bedroom">
                            </div>
                            <div class="swiper-slide">
                                <img src="../images/about/rendering3-1.webp" alt="render-bathroom2">
                            </div>
                            <div class="swiper-slide">
                                <img src="../images/about/rendering3-2.webp" alt="render-bathroom2">
                            </div>
                        </div>
                    </div>
                    <div class="animate__animated animate__headShake animate__infinite" id="swipe1">
                        <span class="material-symbols-rounded">swipe</span>
                    </div>
                    <br><br>
                    <div class="animate__animated animate__bounce animate__infinite" id="myscroll2">
                      <span class="material-symbols-outlined">mouse</span>
                      <span class="material-symbols-outlined" style="width:100%;">keyboard_double_arrow_down</span>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <h3>About Us</h3>
                <div class="mycontainer">
                    <h4>Brands</h4>
                    <span>Cornerstone, Eternal stone, Holystone. Coating brand - Ismanity and rainwater harvesting and so on.</span>
                    <div class="swiper mySwiper2">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <h4>α-cornerstone</h4>
                                <span class="more">Specialized for the designer, we select European materials that are suitable for current<span> trends and design styles to satisfy the market's needs.</span></span>
                                <!-- <span class="more">Specially developed for the designer, we select European productions<span> that are suitable for Taiwan's current fashion trends and design styles to satisfy the market's needs.</span></span> -->
                                <img src="../images/about/corner.svg" alt="α-cornerstone">
                                <a href="products.php?brand=corner" class="btn">Into</a>
                            </div>
                            <div class="swiper-slide">
                                <h4>Eternal stone</h4>
                                <span>Made from Italy. Focus on luxurious stone and marble texture and modernism slabs.</span>
                                <img src="../images/about/eternal.svg" alt="Eternal stone">
                                <a href="products.php?brand=eternal" class="btn">Into</a>
                            </div>
                            <div class="swiper-slide">
                                <h4>α-Holystone</h4>
                                <span class="more">We see the demand for future project construction, and provide the slab produced<span> from AB with affordable prices and good quality to promote a large number of projects.</span></span>
                                <!-- <span class="more">We see the need for future project construction, and provide the<span> slab produced by Spanish AB with affordable prices and good quality to promote a large number of projects.</span></span> -->
                                <img src="../images/about/holy.svg" alt="α-Holystone">
                                <a href="products.php?brand=holy" class="btn">Into</a>
                            </div>
                            <div class="swiper-slide">
                                <h4>iwall</h4>
                                <span class="more">Promoting carbon neutrality, we have developed polyester fiberboards produced<span> by Artstone, Turkey, and work together with everyone to reduce CO2 for the earth.</span></span>
                                <!-- <span class="more">In response to the world's trend of promoting carbon neutrality, we have<span> developed polyester fiberboards produced by Artstone, Turkey, and work together with everyone to reduce CO2 for the earth.</span></span> -->
                                <img src="../images/about/iwall.svg" alt="iwail">
                                <a href="products.php?category=trim" class="btn">Into</a>
                            </div>
                            <div class="swiper-slide">
                                <h4>GRAF</h4>
                                <span class="more">The GRAF rainwater harvesting system from Germany. The professional<span> planning and supporting rainwater harvesting system can effectively achieve saving water. Rainwater can be recovered and reused in a simple, convenient, economical and efficient way.</span></span>
                                <!-- <span class="more">Living Water Spring International was established in 1997. It introduced<span> the GRAF rainwater harvesting system from Germany. The professional planning and supporting rainwater harvesting system can effectively achieve the purpose of saving water and flood control. Rainwater can be recovered and reused in a simple, convenient, economical and efficient way.</span></span> -->
                                <img src="../images/about/lwis.svg" alt="GRAF Rainwater harvesting">
                                <a href="https://www.livingwater-graf.com.tw" target="_blank" class="btn">Into</a>
                            </div>
                            <div class="swiper-slide">
                                <h4>Ismanity</h4>
                                <span class="more">Ismanity - Living water subsidiary and imported paint services. The company's<span> purpose is to promote green building materials and materials that are harmless to the environment and health. Represent brands include Diessner, Südwest, Frescolori, Dörken, Kalekim paint brands.</span></span>
                                <!-- <span class="more">Ismanity is a paint company under Living Water In Springs, and operates<span> imported paint services. The company's purpose is to promote ecological building materials and materials that are harmless to the environment and human health. Represent brands include Diessner, Südwest, Frescolori, Dörken, Kalekim paint brands.</span></span> -->
                                <img src="../images/about/ismanity.svg" alt="ismanity coating">
                                <a href="https://ismanity.com/" target="_blank" class="btn">Into</a>
                            </div>
                        </div>
                    </div>
                    <div class="animate__animated animate__headShake animate__infinite" id="swipe2">
                        <span class="material-symbols-rounded">swipe</span>
                    </div>
                    <br><br>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</main>
<script>
    var swiper0 = new Swiper(".mySwiper0", {
        direction: "vertical",
        slidesPerView: 1,
        spaceBetween: 30,
        effect: "fade",
        // mousewheel: true,
        longSwipes: true,
        keyboard: {
        enabled: true,
        },
        pagination: {
        el: ".swiper-pagination",
        clickable: true,
        },
        navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
        },
    });
    var swiper1 = new Swiper(".mySwiper1", {
        loop: true,
        effect: "coverflow",
        mousewheel: true,
        keyboard: {
            enabled: true,
        },
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        coverflowEffect: {
        rotate: 0,
        stretch:50,
        depth: 100,
        modifier: 2,
        slideShadows: true,
        },
    });
    var swiper2 = new Swiper(".mySwiper2", {
        loop: true,
        effect: "coverflow",
        mousewheel: true,
        keyboard: {
        enabled: true,
        },
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        coverflowEffect: {
        rotate: 0,
        stretch:50,
        depth: 100,
        modifier: 2,
        slideShadows: true,
        },
    });
</script>
<script>
    $("header .topnav a").eq(3).addClass("active");
    $("aside .wrap a").eq(0).addClass("active");
</script>

</body>
</html>