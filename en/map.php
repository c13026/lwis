<!DOCTYPE html>
<html lang="en">
<head>
<title>Map|LWIS</title>
<!-- <meta name="keywords" content="磁磚,瓷磚,藝術,拼貼,裝潢,室內設計,室內,室外,塗料,伊斯曼,精品磁磚,進口塗料,進口磁磚,型錄,tile demo,GRAF,Ismanity,伊斯曼,a-cornerstone,可樂石,eternal stone,達理石,a-holystone,活麗石">α-cornerstone -->
    <meta name="description" content="Living Water Spring International Co., Ltd.,Welcome to inquire or use Map, LWIS's brands are: a-cornerstone, Eternal stone, a-Holystone, IWall, Ismanity, GRAF.">

    <meta property="og:title" content="Map|LWIS International Co., Ltd.">
    <meta property="og:description" content="Living Water Spring International Co., Ltd.,Welcome to inquire or use Map, LWIS's brands are: a-cornerstone, Eternal stone, a-Holystone, IWall, Ismanity, GRAF.">

<?php include("all-head.php"); ?>
<!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
<link rel="stylesheet" href="../css/swiper-bundle.min.css">
<link rel="stylesheet" href="../css/map.css">
<style>
    .swiper-pagination-bullets.swiper-pagination-horizontal {
        top: 7rem;
    }
    .map {
        width: 80%;
        height: 400px;
        background-color: #fff4;
        border-radius: 0.325rem;
        top: 15rem;
        left: 10%;
        right: 10%;
    }
    .map h3{
        font-size:1.5rem;
    }
    .map h4{
        font-size:1.25rem;
    }
    @media (max-width: 575px){
        .swiper-slide .map {
            width: calc(100% - 2rem);
            left: 1rem;
            right: 1rem;
            top: 15rem;
            bottom: calc(-1rem);
            position: absolute;
        }

        .swiper-pagination-bullet {
            display: inline-block;
            height: 2rem;
            line-height: 1.125rem;
        }
    }
    @media (min-width: 501px) and (max-width: 575px) {
        .swiper-slide:nth-child(6) .map iframe{
            height: 240px !important;
        }
        .swiper-slide:nth-child(4) .map iframe{
            height: 250px !important;
        }
    }
    @media (min-width: 401px) and (max-width: 500px) {
        .swiper-slide:nth-child(7) .map iframe{
            height: 196px !important;
        }
        .swiper-slide .map iframe,
        .swiper-slide:nth-child(6) .map iframe{
            height: 213px !important;
        }
    }
    @media (min-width: 363px) and (max-width: 400px) {
        .swiper-slide:nth-child(7) .map iframe,
        .swiper-slide:nth-child(6) .map iframe{
            height: 220px !important;
        }
        .swiper-slide .map iframe{
            height: 220px !important;
        }
    }
    @media (max-width: 362px){
        .swiper-slide:nth-child(4) .map iframe,
        .swiper-slide:nth-child(7) .map iframe,
        .swiper-slide:nth-child(6) .map iframe{
            height: 160px !important;
        }
        .swiper-slide .map iframe{
            height: 200px !important;
        }
    }
</style>
</head>
<body>
<?php include("aside.php"); ?>
<div style="display:none;">
    <?php if($_GET["seat"] == "taipei"){ ?>
        <script>
            $(function(){
                swiper.slideTo(1);
            });
        </script>
    <?php }elseif($_GET["seat"] == "hsinchu"){ ?>
        <script>
            $(function(){
                swiper.slideTo(2);
            });
        </script>
    <?php }elseif($_GET["seat"] == "taichung"){ ?>
        <script>
            $(function(){
                swiper.slideTo(3);
            });
        </script>
    <?php }elseif($_GET["seat"] == "yunlin"){ ?>
        <script>
            $(function(){
                swiper.slideTo(4);
            });
        </script>
    <?php }elseif($_GET["seat"] == "chiayi"){ ?>
        <script>
            $(function(){
                swiper.slideTo(5);
            });
        </script>
    <?php }elseif($_GET["seat"] == "tainan"){ ?>
        <script>
            $(function(){
                swiper.slideTo(0);
            });
        </script>
    <?php }else{ ?> 
    <?php } ?>
</div>
<main>
    <div class="append">
        <h3>Map</h3>
        <!-- <p>Still have many questions ?<br><a href="contact.php">Contact us</a> from a location near or convenient to you.</p> -->
        <p>Still have many questions ?<br>please do not hesitate to <a href="contact.php">Contact us</a></p>
        <!-- <p>Still have many questions ?<br><a href="../contact.php">Contact us</a> from a location near or convenient to you and we will serve you as soon as possible.</p> -->
        <div class="swiper-pagination"></div>
    </div>
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide" style="background:linear-gradient(to right, rgba(104, 75, 62, .55),  rgba(104, 75, 62, .55)),center / cover url(../images/map/Taipei.webp);">
                <div class="map">
                    <div class="row">
                        <div class="col-5">
                            <h3>LWIS Branch In Taipei</h3>
                            <h4>
                                <a href="tel:+886227481500"><span class="material-symbols-outlined">call</span> 02-2748-1500</a>
                                <br>
                                <a href="https://maps.google.com.tw/?hl=en&q=台北市松山區寶清街30巷12號"><span class="material-symbols-outlined">pin_drop</span> No. 12, Lane 30, Baoqing St, Songshan District, Taipei City, 105</a>
                                <br>
                                <p>Service Matters : <span class="badge mybadge">GRAF</span> , <span class="badge mybadge">Large Slabs</span> , <span class="badge mybadge">Tiles</span><br>Brands : <span class="badge mybadge">α-cornerstone</span> <span class="badge mybadge">Eternal stone</span> <span class="badge mybadge">α-Holystone</span> <span class="badge mybadge">iwail</span></p>
                            </h4>
                        </div>
                        <div class="col-7">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7228.955120794086!2d121.567793!3d25.051798!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442ab96d213d1fb%3A0xccfd5c1225798784!2sNo.%2012%2C%20Lane%2030%2C%20Baoqing%20St%2C%20Songshan%20District%2C%20Taipei%20City%2C%20105!5e0!3m2!1sen!2stw!4v1668063300662!5m2!1sen!2stw" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide" style="background:linear-gradient(to right, rgba(104, 75, 62, .55),  rgba(104, 75, 62, .55)),center / cover url(../images/map/Hsinchu.webp);">
                <div class="map">
                    <div class="row">
                        <div class="col-5">
                            <h3>Hsinchu Dealer - Dingkang International</h3><!-- 新竹總經銷 鼎康進口磁磚 -->
                            <h4>
                                <a href="tel:+88635588777">
                                    <span class="material-symbols-outlined">call</span> 03-558-8777
                                </a>
                                <br>
                                <a href="https://maps.google.com.tw/?hl=en&q=新竹縣竹北市文采街2號">
                                    <span class="material-symbols-outlined">pin_drop</span> No. 2, Wencai St, Zhubei City, Hsinchu County, 302
                                </a>
                                <p>Service Matters : <span class="badge mybadge">Large Slabs</span> , <span class="badge mybadge">Tiles</span><br>Agency brands : <span class="badge mybadge">α-cornerstone</span> <span class="badge mybadge">Eternal stone</span> <span class="badge mybadge">α-Holystone</span> <span class="badge mybadge">iwail</span></p>
                            </h4>
                        </div>
                        <div class="col-7">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7241.955880722374!2d121.016995!3d24.830428!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346836e95d1ab2d9%3A0x6308e8f585a49ea9!2sNo.%202%2C%20Wencai%20St%2C%20Zhubei%20City%2C%20Hsinchu%20County%2C%20302!5e0!3m2!1sen!2stw!4v1668063364240!5m2!1sen!2stw" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide" style="background:linear-gradient(to right, rgba(104, 75, 62, .55),  rgba(104, 75, 62, .55)),center / cover url(../images/map/Taichung.webp);">
                <div class="map">
                    <div class="row">
                        <div class="col-5">
                            <h3>Central Taiwan Dealer - Sin Jhan Ceramic Tile Ltd.</h3><!-- 中部總經銷(中彰投) S.J.昕展磁磚 -->
                            <h4>
                                <a href="tel:+886952996903">
                                    <span class="material-symbols-outlined">call</span> 0952-996-903
                                </a>
                                <br>
                                <a href="https://maps.google.com.tw/?hl=en&q=台中市大雅區中山路165號">
                                    <span class="material-symbols-outlined">pin_drop</span> No. 165, Zhongshan Rd, Daya District, Taichung City, 428
                                </a>
                                <p>Service Matters : <span class="badge mybadge">Large Slabs</span> , <span class="badge mybadge">Tiles</span><br>Agency brands : <span class="badge mybadge">α-cornerstone</span> <span class="badge mybadge">Eternal stone</span> <span class="badge mybadge">α-Holystone</span> <span class="badge mybadge">iwail</span></p>
                            </h4>
                        </div>
                        <div class="col-7">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7277.795239007884!2d120.644505!3d24.210365!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3469165e47334291%3A0xaa50bd96ee603793!2sNo.%20165%2C%20Zhongshan%20Rd%2C%20Daya%20District%2C%20Taichung%20City%2C%20428!5e0!3m2!1sen!2stw!4v1668063423950!5m2!1sen!2stw" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide" style="background:linear-gradient(to right, rgba(104, 75, 62, .55),  rgba(104, 75, 62, .55)),center / cover url(../images/map/Yunlin.webp);">
                <div class="map">
                    <div class="row">
                        <div class="col-5">
                            <h3>Yunlin Dealer - Kao Dun Construction Material</h3><!-- 雲林總經銷-高頓建材 -->
                            <h4>
                                <a href="tel:+8855321500">
                                    <span class="material-symbols-outlined">call</span> 05-532-1500
                                </a>
                                <br>
                                <a href="https://maps.google.com.tw/?hl=en&q=雲林縣斗六市中華路304號">
                                    <span class="material-symbols-outlined">pin_drop</span> No. 304, Zhonghua Rd, Douliu City, Yunlin County, 640
                                </a>
                                <p>Service Matters : <span class="badge mybadge">Large Slabs</span> , <span class="badge mybadge">Tiles</span><br>Agency brands : <span class="badge mybadge">α-cornerstone</span> <span class="badge mybadge">Eternal stone</span> <span class="badge mybadge">α-Holystone</span> <span class="badge mybadge">iwail</span></p>
                            </h4>
                        </div>
                        <div class="col-7">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3653.093516394727!2d120.54733071498049!3d23.70835428461016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346ec838678c71e5%3A0x86d19bd5b47ffc29!2sNo.%20304%2C%20Zhonghua%20Rd%2C%20Douliu%20City%2C%20Yunlin%20County%2C%20640!5e0!3m2!1sen!2stw!4v1668063799577!5m2!1sen!2stw" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide" style="background:linear-gradient(to right, rgba(104, 75, 62, .55),  rgba(104, 75, 62, .55)),center / cover url(../images/map/Chiayi.webp);">
                <div class="map">
                    <div class="row">
                        <div class="col-5">
                            <h3>Chiayi Dealer - Jinshi Company</h3><!-- 嘉義總經銷-晉仕企業 -->
                            <h4>
                                <a href="tel:+886963004785">
                                    <span class="material-symbols-outlined">call</span> 0963-004-785
                                </a>
                                <br>
                                <a href="tel:+88652351934">
                                    <span class="material-symbols-outlined">call</span> 05-235-1934
                                </a>
                                <br>
                                <a href="https://maps.google.com.tw/?hl=en&q=嘉義縣水上鄉寬士村701-82號">
                                    <span class="material-symbols-outlined">pin_drop</span> No. 701-82, Kuanshi Village, Shuishang Township, Chiayi County, 608<!-- 嘉義縣水上鄉寬士村崎仔頭701-82號 -->
                                </a>
                                <p>Service Matters : <span class="badge mybadge">Large Slabs</span> , <span class="badge mybadge">Tiles</span><br>Agency brands : <span class="badge mybadge">α-cornerstone</span> <span class="badge mybadge">Eternal stone</span> <span class="badge mybadge">α-Holystone</span> <span class="badge mybadge">iwail</span></p>
                            </h4>
                        </div>
                        <div class="col-7">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3660.0458685709764!2d120.42665431535926!3d23.45880990576877!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346e9152c9391749%3A0xdf09c8c6da84612a!2z5pmJ5LuV5LyB5qWt5pyJ6ZmQ5YWs5Y-4L-WYiee-qeW7uuadkOihjCDlmInnvqnno4Hno5og5ZiJ576p6KGb5rW06Kit5YKZIOWYiee-qei7n-awtOezu-e1sSDlmInnvqnpmbbnk7foloTmnb8g5ZiJ576p6YCy5Y-j6b6N6aCt!5e0!3m2!1sen!2stw!4v1668064086151!5m2!1sen!2stw" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide" style="background:linear-gradient(to right, rgba(104, 75, 62, .55),  rgba(104, 75, 62, .55)),center / cover url(../images/map/Tainan.webp);">
                <div class="map">
                    <div class="row">
                        <div class="col-5">
                            <h3>LWIS Headquarters In Tainan</h3>
                            <h4>
                                <a href="tel:+88662962000">
                                    <span class="material-symbols-outlined">call</span> 06-296-2000
                                </a>
                                <br>
                                <a href="tel:+88662960606">
                                    <span class="material-symbols-outlined">call</span> 06-296-0606
                                </a>
                                <br>
                                <a href="https://maps.google.com.tw/?hl=en&q=台南市南區鯤鯓路101巷759號">
                                    <span class="material-symbols-outlined">pin_drop</span> No. 759, Lane 101, Kunshen Rd, South District, Tainan City, 702
                                </a><br>
                                <p>Service Matters : <span class="badge mybadge">GRAF</span> , <span class="badge mybadge">Large Slabs</span> , <span class="badge mybadge">Tiles</span> , <span class="badge mybadge">Coating</span><br>Brands : <span class="badge mybadge">α-cornerstone</span> <span class="badge mybadge">Eternal stone</span> <span class="badge mybadge">α-Holystone</span> <span class="badge mybadge">iwail</span> <span class="badge mybadge">Ismanity</span></p>
                                
                            </h4>
                        </div>
                        <div class="col-7">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3674.0302203982596!2d120.16954408583786!3d22.94911412565933!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346e75753ccc087d%3A0xd21f435340662d32!2z5rS75rC05rOJ5rqQ5ZyL6Zqb6IKh5Lu95pyJ6ZmQ5YWs5Y-4!5e0!3m2!1sen!2stw!4v1687319647539!5m2!1sen!2stw" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include("fb-messenger.php"); ?>
<script src="../js/swiper-bundle.min.js"></script>
<script>
    $("header .topnav a").eq(5).addClass("active");
    $("aside .wrap a").eq(2).addClass("active");

    var swiper = new Swiper('.mySwiper', {
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
            renderBullet: function (index, className ,a) {
                var a = ["Taipei", "Hsinchu", "Central Taiwan", "Yunlin", "Chiayi", "Tainan"];
                return '<span class="' + className + '">' + (a[index]) + "</span>";
            },
        },
        loop: true,
        // mousewheel: true,
        // keyboard : true,
        autoplay: {
            delay: 5000,
            pauseOnMouseEnter: true,
            // disableOnInteraction: true,
        },
        // debugger: true,
    });
    //鼠标滑过pagination控制swiper切换
    for(i=0;i<swiper.pagination.bullets.length;i++){
        swiper.pagination.bullets[i].onmouseover=function(){
            this.click();
            // swiper.autoplay.stop();
        };
    };
</script>
</body>
</html>