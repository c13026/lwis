<header>
    <div>
        <div class="topnav" id="myTopnav">
            <div class="helogo">
                <a href="index.php">
                    <img  src="images/logo.svg" alt="活水泉源">
                    <span>活水泉源國際</span>
                </a>
            </div>
            <a href="about.php"><span>About</span><span> | </span><span>關於我們</span></a>
            <a href="products.php"><span>Products</span><span> | </span><span>產品系列</span></a>
            <a href="map.php"><span>Map</span><span> | </span><span>服務據點</span></a>
            <a href="contact.php"><span>Contact</span><span> | </span><span>聯絡我們</span></a>
            <a href="catalogs.php"><span>Catalogs</span><span> | </span><span>型錄</span></a>
            <a href="sitemap.php"><span>Sitemap</span><span> | </span><span>網站地圖</span></a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction();">
            <svg class="ham hamRotate ham8" viewBox="0 0 100 100" id="mySVG"><!-- onclick="this.classList.toggle('active')" -->
                <path class="line top" d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path>
                <path class="line middle" d="m 30,50 h 40"></path>
                <path class="line bottom" d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path>
            </svg>
            </a>
        </div>
    </div>
</header>
<aside>
    <div class="logo">
        <a href="index.php">
            <img  src="images/logo.svg" alt="活水泉源"><br>
            <span>活水泉源國際 | lwis.com</span>
        </a>
    </div>
    <br>
    <br>
    <div class="wrap">
        <a href="about.php">About | 關於我們</a>
        <a href="products.php">Products | 產品系列</a>
        <a href="map.php">Map | 服務據點</a>
        <a href="contact.php">Contact | 聯絡我們</a>
        <a href="catalogs.php">Catalogs | 型錄</a>
        <a class="mybottom" href="sitemap.php">Sitemap | 網站地圖</a>
    </div>
    <p>Copyright © 2022 Lwis Inc.<br>All Rights Reserved.</p>
</aside>
<script>
    function myFunction() {
        $('#mySVG').toggleClass('active');
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
        
        // var y = document.getElementById("mySVG");
        // y.classList.toggle("active");
    }
</script>