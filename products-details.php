<!DOCTYPE html>
<html lang="en">

<head>
    <title>產品系列|活水泉源</title>
    <?php include("all-head.php"); ?>
    <link rel="stylesheet" href="css/products-btn.css">
    <link rel="stylesheet" href="css/fancybox.css">
    <link rel="stylesheet" href="css/pro-details.css">
    <script src="js/fancybox.umd.js"></script>
    <script src="js/products-btn.js"></script>
    <script src="js/pro-details.js"></script>
    
    <style>

    </style>
</head>

<body>
    <?php include("aside.php"); ?>
    <main>
        <div class="mycontainer">
            <h3>Products | 產品系列</h3>
            <div class="btns">
                <div class="scrollnav"  id="myInout0">
                    <a class="btn mybtn" href="products.php?category=sheet">薄板</a>
                    <a class="btn mybtn" href="products.php?category=mesa">檯面</a>
                    <a class="btn mybtn" href="products.php?category=tile">磁磚</a>
                    <a class="btn mybtn" href="products.php?category=stone">石板</a>
                    <a class="btn mybtn" href="products.php?category=trim">飾板</a>
                    <a class="btn mybtn" href="https://ismanity.com/" target="_blank">塗料</a>
                    <a class="btn mybtn" href="https://www.livingwater-graf.com.tw/" target="_blank">雨水回收</a>
                </div>
                <div class="scrollnav" id="myInout1">
                    <button class="btn mybtna" onclick="brand()"><span class="material-symbols-outlined">autorenew</span></button>
                    <a class="btn mybtn1" href="products.php?category=sheet">all</a>
                    <a class="btn mybtn1" href="products.php?type=monochrome">純色</a>
                    <a class="btn mybtn1" href="products.php?type=stonepattern">石紋</a>
                    <a class="btn mybtn1" href="products.php?type=woodgrain">木紋</a>
                    <a class="btn mybtn1" href="products.php?type=metallook">金屬</a>
                    <a class="btn mybtn1" href="products.php?type=other">特色</a>
                </div>
                <div class="scrollnav" id="myInout2" style="display:none;">
                    <button class="btn mybtna" onclick="mytype()"><span class="material-symbols-outlined">autorenew</span></button>
                    <a class="btn mybtn2" href="products.php?category=sheet">all</a>
                    <a class="btn mybtn2" href="products.php?brand=corner">可樂石</a>
                    <a class="btn mybtn2" href="products.php?brand=eternal">達理石</a>
                    <a class="btn mybtn2" href="products.php?brand=holy">活麗石</a>
                </div>
                <div class="scrollnav" id="myInout3" style="display:none;">
                    <button class="btn mybtn2">all</button>
                    <button class="btn mybtn2">1</button>
                    <button class="btn mybtn2">2</button>
                    <button class="btn mybtn2">3</button>
                </div>
            </div>
            <div style="display: none;">
                    <?php if($_GET["sheet"] == "morandi"){ ?>
                        <script>
                            $(function(){
                                filterSelection('morandi');
                                $("#myInout0 .mybtn").eq(0).addClass("active");
                                $("#myInout1 .mybtn1").eq(1).addClass("active");
                                $("#myInout2 .mybtn2").eq(1).addClass("active");
                            });
                        </script>
                    <?php }elseif($_GET["sheet"] == "fibre"){ ?>
                        <script>
                            $(function(){
                                filterSelection('fibre');
                                $("#myInout0 .mybtn").eq(0).addClass("active");
                                $("#myInout1 .mybtn1").eq(1).addClass("active");
                                $("#myInout2 .mybtn2").eq(1).addClass("active");
                            });
                        </script>
                    <?php }elseif($_GET["sheet"] == "geo"){ ?>
                        <script>
                            $(function(){
                                filterSelection('geo');
                                $("#myInout0 .mybtn").eq(0).addClass("active");
                                $("#myInout1 .mybtn1").eq(2).addClass("active");
                                $("#myInout2 .mybtn2").eq(1).addClass("active");
                            });
                        </script>
                    <?php }elseif($_GET["sheet"] == "storm"){ ?>
                        <script>
                            $(function(){
                                filterSelection('storm');
                                $("#myInout0 .mybtn").eq(0).addClass("active");  //薄板
                                $("#myInout1 .mybtn1").eq(2).addClass("active");  //
                                $("#myInout2 .mybtn2").eq(1).addClass("active");  //可樂石
                            });
                        </script>
                    <?php }elseif($_GET["sheet"] == "brazil"){ ?>
                        <script>
                            $(function(){
                                filterSelection('brazil');
                                $("#myInout0 .mybtn").eq(0).addClass("active");
                                $("#myInout1 .mybtn1").eq(2).addClass("active");
                                $("#myInout2 .mybtn2").eq(1).addClass("active");
                            });
                        </script>
                    <?php }elseif($_GET["sheet"] == "umbra"){ ?>
                        <script>
                            $(function(){
                                filterSelection('umbra');
                                $("#myInout0 .mybtn").eq(0).addClass("active");
                                $("#myInout1 .mybtn1").eq(2).addClass("active");
                                $("#myInout2 .mybtn2").eq(1).addClass("active");
                            });
                        </script>
                    <?php }elseif($_GET["sheet"] == "syros"){ ?>
                        <script>
                            $(function(){
                                filterSelection('syros');
                                $("#myInout0 .mybtn").eq(0).addClass("active");
                                $("#myInout1 .mybtn1").eq(2).addClass("active");
                                $("#myInout2 .mybtn2").eq(1).addClass("active");
                            });
                        </script>
                    <?php }elseif($_GET["sheet"] == "touche"){ ?>
                        <script>
                            $(function(){
                                filterSelection('touche');
                                $("#myInout0 .mybtn").eq(0).addClass("active");
                                $("#myInout1 .mybtn1").eq(2).addClass("active");
                                $("#myInout2 .mybtn2").eq(1).addClass("active");
                            });
                        </script>
                    <?php }elseif($_GET["sheet"] == "jurassic"){ ?>
                        <script>
                            $(function(){
                                filterSelection('jurassic');
                                $("#myInout0 .mybtn").eq(0).addClass("active");
                                $("#myInout1 .mybtn1").eq(2).addClass("active");
                                $("#myInout2 .mybtn2").eq(1).addClass("active");
                            });
                        </script>
                    <?php }else{ ?>
                        <script>
                            $(function(){
                                // 預計顯示 很抱歉，您沒有點選產品,或放圖?
                            });
                        </script>
                    <?php } ?>
            </div>
            <div class="details mmm fibre">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="box ">
                            <div class="mainCarousel mainCarousel1 carousel w-10/12 max-w-5xl mx-auto">
                                <div class="carousel__slide" data-src="images/products/sheet/fibre/original/01.jpg" data-fancybox="gallery1"> <!-- 在class="carousel__slide"此tag加入data-caption="這裡可出現文字" -->
                                    <img class="img-fluid" src="images/products/sheet/fibre/mainnail/01.jpg" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/fibre/original/02.jpg" data-fancybox="gallery1">
                                    <img class="img-fluid" src="images/products/sheet/fibre/mainnail/02.jpg" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/fibre/original/03.jpg" data-fancybox="gallery1">
                                    <img class="img-fluid" src="images/products/sheet/fibre/mainnail/03.png" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/fibre/original/04.jpg" data-fancybox="gallery1">
                                    <img class="img-fluid" src="images/products/sheet/fibre/mainnail/04.png" />
                                </div>
                                
                            </div>
                            <div class="thumbCarousel thumbCarousel1 carousel max-w-xl mx-auto">
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/fibre/thumbnail/01.jpg" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/fibre/thumbnail/02.jpg" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/fibre/thumbnail/03.png" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/fibre/thumbnail/04.png" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul class="breadcrumb">
                            <li><a href="index.php"><span class="material-symbols-rounded">home</span>首頁</a></li>
                            <li><a href="products.php">產品</a></li>
                            <li><a href="products.php?get=id">薄板</a></li>
                            <li>純色</li>
                        </ul>
                        <img src="images/about/corner.svg" alt="α-corner" title="品牌：可樂石">
                        <h3 title="品名：懷柏系列">懷柏系列</h3>
                        <p>款式：</p>
                        <div class="small-img">
                            <input type="radio" name="fibre" id="fibre01">
                            <button class="check" onclick="mainCarousel1.slideTo(2)">
                                <label for="fibre01"><img src="images/products/sheet/fibre/mockup-black.jpg" alt="懷柏-黑" title="規格：懷柏黑"></label>
                            </button>
                            <input type="radio" name="fibre" id="fibre02">
                            <button class="check" onclick="mainCarousel1.slideTo(3)">
                                <label for="fibre02"><img src="images/products/sheet/fibre/mockup-white.jpg" alt="懷柏-白" title="規格：懷柏白"></label>
                            </button>
                        </div>
                        <p>尺寸：</p>
                        <div class="mysize">
                            <input type="radio" name="fibre-size" id="fibre-size01"><!-- 若加disabled 加在radio -->
                            <button class="check">
                                <label for="fibre-size01">
                                    <div class="btn btn-secondary myautotoggle" id="fibre-sizebtn01">100×250×0.6cm 刷面</div>
                                </label>
                            </button>
                        </div>
                        <p>說明：</p>
                        <p>此系列由於照片難以呈現質感，訂購前請與鄰近經銷商預約查看實品。</p><br>
                        <div class="row mydescription">
                            <a class="col btn btn-secondary" href="https://drive.google.com/u/0/uc?id=1ixKTvaXqkmK4-Lb4XqskqYMTbog6Wq1m&export=download" download="懷柏系列.zip">下載材質檔</a>
                            <!-- download="為下載後的檔名"，若為google drive可在分享連結後方將/edit替換&export=download，則download=""可省略，檔名則是google drive控制 -->
                            <a class="col btn btn-secondary" href="contact.php?">諮詢產品</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="details mmm morandi">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="box ">
                            <div class="mainCarousel mainCarousel2 carousel w-10/12 max-w-5xl mx-auto">
                                <div class="carousel__slide" data-src="images/products/sheet/morandi/original/Matteria Muschio Abujardado + Totem Gris Abujardado.jpg" data-fancybox="gallery2">
                                    <img class="img-fluid" src="images/products/sheet/morandi/mainnail/07.jpg" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/morandi/original/The New Blacks Amaranto Natural+Moon Gris Abujardado_1.jpg" data-fancybox="gallery2">
                                    <img class="img-fluid" src="images/products/sheet/morandi/mainnail/01.jpg" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/morandi/original/The New Blacks Amaranto Natural+Moon Gris Abujardado_2.jpg" data-fancybox="gallery2">
                                    <img class="img-fluid" src="images/products/sheet/morandi/mainnail/02.jpg" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/morandi/original/THE NEW BLACKS CASTAGNA NATURAL.jpg" data-fancybox="gallery2">
                                    <img class="img-fluid" src="images/products/sheet/morandi/mainnail/03.jpg" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/morandi/original/The New Blacks Castagna Natural_2.jpg" data-fancybox="gallery2">
                                    <img class="img-fluid" src="images/products/sheet/morandi/mainnail/04.jpg" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/morandi/original/The New Blacks Muschio Natural +  ITOP & Hydra Larsen Super Blanco-Gris Natural_1.jpg" data-fancybox="gallery2">
                                    <img class="img-fluid" src="images/products/sheet/morandi/mainnail/05.jpg" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/morandi/original/The New Blacks Muschio Natural +  ITOP & Hydra Larsen Super Blanco-Gris Natural_2.jpg" data-fancybox="gallery2">
                                    <img class="img-fluid" src="images/products/sheet/morandi/mainnail/06.jpg" />
                                </div>
                                
                                <div class="carousel__slide" data-src="images/products/sheet/morandi/original/MATERIA MUSCHIO.jpg" data-fancybox="gallery2">
                                    <img class="img-fluid" src="images/products/sheet/morandi/mainnail/08.png" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/morandi/original/THE NEW BLACKS AMARANTO NATURAL.jpg" data-fancybox="gallery2">
                                    <img class="img-fluid" src="images/products/sheet/morandi/mainnail/09.png" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/morandi/original/THE NEW BLACKS CASTAGNA NATURAL-1.jpg" data-fancybox="gallery2">
                                    <img class="img-fluid" src="images/products/sheet/morandi/mainnail/10.png" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/morandi/original/THE NEW BLACKS MUSCHIO NATURAL.jpg" data-fancybox="gallery2">
                                    <img class="img-fluid" src="images/products/sheet/morandi/mainnail/11.png" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/morandi/original/THE NEW BLACKS PRUGNA NATURAL.jpg" data-fancybox="gallery2">
                                    <img class="img-fluid" src="images/products/sheet/morandi/mainnail/12.png" />
                                </div>
                            </div>
                            <div class="thumbCarousel thumbCarousel2 carousel max-w-xl mx-auto">
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/morandi/thumbnail/07.jpg" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/morandi/thumbnail/01.jpg" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/morandi/thumbnail/02.jpg" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/morandi/thumbnail/03.jpg" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/morandi/thumbnail/04.jpg" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/morandi/thumbnail/05.jpg" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/morandi/thumbnail/06.jpg" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/morandi/thumbnail/08.png" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/morandi/thumbnail/09.png" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/morandi/thumbnail/10.png" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/morandi/thumbnail/11.png" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/morandi/thumbnail/12.png" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul class="breadcrumb">
                            <li><a href="index.php"><span class="material-symbols-rounded">home</span>首頁</a></li>
                            <li><a href="products.php">產品</a></li>
                            <li><a href="products.php?get=id">薄板</a></li>
                            <li>純色</li>
                        </ul>
                        <img src="images/about/corner.svg" alt="α-corner" title="品牌：可樂石">
                        <h3 title="品名：莫蘭迪系列">莫蘭迪系列</h3>
                        <p>款式：</p>
                        <div class="small-img">
                            <input type="radio" name="morandi" id="morandi01">
                            <button class="check" onclick="mainCarousel2.slideTo(7)">
                                <label for="morandi01"><img class="morandi-img01" src="images/products/sheet/morandi/mockup-pine.jpg" alt="莫蘭迪-松濤" title="規格：松濤"></label>
                            </button>
                            <input type="radio" name="morandi" id="morandi02">
                            <button class="check" onclick="mainCarousel2.slideTo(8)">
                                <label for="morandi02"><img class="morandi-img02" src="images/products/sheet/morandi/mockup-claret.jpg" alt="莫蘭迪-酒紅" title="規格：酒紅"></label>
                            </button>
                            <input type="radio" name="morandi" id="morandi03">
                            <button class="check" onclick="mainCarousel2.slideTo(9)">
                                <label for="morandi03"><img class="morandi-img03" src="images/products/sheet/morandi/mockup-cocoa.jpg" alt="莫蘭迪-可可" title="規格：可可"></label>
                            </button>
                            <input type="radio" name="morandi" id="morandi04">
                            <button class="check" onclick="mainCarousel2.slideTo(10)">
                                <label for="morandi04"><img class="morandi-img04" src="images/products/sheet/morandi/mockup-olives.jpg" alt="莫蘭迪-橄欖" title="規格：橄欖"></label>
                            </button>
                            <input type="radio" name="morandi" id="morandi05">
                            <button class="check" onclick="mainCarousel2.slideTo(11)">
                                <label for="morandi05"><img class="morandi-img05" src="images/products/sheet/morandi/mockup-ocean.jpg" alt="莫蘭迪-海洋" title="規格：海洋"></label>
                            </button>
                        </div>
                        <p>尺寸：</p>
                        <div class="mysize">
                            <input type="radio" name="morandi-size" id="morandi-size01"><!-- 若加disabled 加在radio -->
                            <button class="check">
                                <label for="morandi-size01">
                                    <div class="btn btn-secondary"id="morandi-sizebtn01">160×320×0.6cm 霧面</div>
                                </label>
                            </button>
                            <input type="radio" name="morandi-size" id="morandi-size02">
                            <button class="check">
                                <label for="morandi-size02">
                                    <div class="btn btn-secondary" id="morandi-sizebtn02">100×250×0.6cm 霧面</div>
                                </label>
                            </button>
                        </div>
                        
                        <!-- 選取款式或尺寸 互相不相符添加disabled title="本款未有此尺寸" -->
                        
                        <div class="ex" id="morandi-ex">
                            <p>說明：</p>
                            <p></p>
                        </div>
                        
                        <script>
                        $(':radio[name="morandi"]').change(function (){
                            if($("input[name=morandi]")[0].checked){
                                $("#morandi-size02").attr('disabled','ture');
                                $("#morandi-sizebtn02").attr('title','本款未有此尺寸');
                                $("#morandi-size01").removeAttr('disabled');
                                $("#morandi-sizebtn01").removeAttr('title');
                                $("#morandi-ex").css({
                                    'display' : 'block'
                                })
                                $("#morandi-ex p:nth-child(2)").css('color','#F00').html("<b>需訂製*</b>");
                            }  else {
                                $("#morandi-size01").attr('disabled','ture');
                                $("#morandi-sizebtn01").attr('title','本款未有此尺寸');
                                $("#morandi-size02").removeAttr('disabled');
                                $("#morandi-sizebtn02").removeAttr('title');
                                $("#morandi-ex").css({
                                    'display' : 'none'
                                })
                                // $("#morandi-ex p:nth-child(2)").html("<b>111</b>");  //這行可能是2個判斷式以上且有2種說明以上
                            }
                        });
                        </script>
                        <div class="row mydescription">
                            <a class="col btn btn-secondary" href="" download="">下載材質檔</a><!-- 下載後的檔名() -->
                            <a class="col btn btn-secondary" href="contact.php?">諮詢產品</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="details mmm geo">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="box ">
                            <div class="mainCarousel mainCarousel3 carousel w-10/12 max-w-5xl mx-auto">
                                <div class="carousel__slide" data-src="images/products/sheet/geo/original/Geo Crema Bush-hammered_1.jpg" data-fancybox="gallery3">
                                    <img class="img-fluid" src="images/products/sheet/geo/mainnail/01.jpg" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/geo/original/Geo Crema Bush-hammered_2.jpg" data-fancybox="gallery3">
                                    <img class="img-fluid" src="images/products/sheet/geo/mainnail/02.jpg" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/geo/original/Geo Crema Bush-hammered_3.jpg" data-fancybox="gallery3">
                                    <img class="img-fluid" src="images/products/sheet/geo/mainnail/03.jpg" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/geo/original/Geo Crema Bush-hammered_4.jpg" data-fancybox="gallery3">
                                    <img class="img-fluid" src="images/products/sheet/geo/mainnail/04.jpg" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/geo/original/Geo Crema Bush-hammered_5.jpg" data-fancybox="gallery3">
                                    <img class="img-fluid" src="images/products/sheet/geo/mainnail/05.jpg" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/geo/original/GEO CREMA L1.jpg" data-fancybox="gallery3">
                                    <img class="img-fluid" src="images/products/sheet/geo/mainnail/06.png" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/geo/original/GEO CREMA L2.jpg" data-fancybox="gallery3">
                                    <img class="img-fluid" src="images/products/sheet/geo/mainnail/07.png" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/geo/original/GEO CREMA L3.jpg" data-fancybox="gallery3">
                                    <img class="img-fluid" src="images/products/sheet/geo/mainnail/08.png" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/geo/original/GEO CREMA L4.jpg" data-fancybox="gallery3">
                                    <img class="img-fluid" src="images/products/sheet/geo/mainnail/09.png" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/geo/original/GEO CREMA L5.jpg" data-fancybox="gallery3">
                                    <img class="img-fluid" src="images/products/sheet/geo/mainnail/10.png" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/geo/original/GEO CREMA L6.jpg" data-fancybox="gallery3">
                                    <img class="img-fluid" src="images/products/sheet/geo/mainnail/11.png" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/geo/original/GEO CREMA L7.jpg" data-fancybox="gallery3">
                                    <img class="img-fluid" src="images/products/sheet/geo/mainnail/12.png" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/geo/original/GEO CREMA L8.jpg" data-fancybox="gallery3">
                                    <img class="img-fluid" src="images/products/sheet/geo/mainnail/13.png" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/geo/original/Geo Gris Bush-hammered + Foster Camel Natural.jpg" data-fancybox="gallery3">
                                    <img class="img-fluid" src="images/products/sheet/geo/mainnail/14.jpg" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/geo/original/Geo Gris Bush-hammered + Masai Blanco Plus Abujardado.jpg" data-fancybox="gallery3">
                                    <img class="img-fluid" src="images/products/sheet/geo/mainnail/15.jpg" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/geo/original/Geo Gris Bush-hammered_1.jpg" data-fancybox="gallery3">
                                    <img class="img-fluid" src="images/products/sheet/geo/mainnail/16.jpg" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/geo/original/Geo Gris Bush-hammered_3.jpg" data-fancybox="gallery3">
                                    <img class="img-fluid" src="images/products/sheet/geo/mainnail/17.jpg" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/geo/original/Geo Gris Bush-hammered_4.jpg" data-fancybox="gallery3">
                                    <img class="img-fluid" src="images/products/sheet/geo/mainnail/18.jpg" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/geo/original/Geo Gris Bush-hammered_5.jpg" data-fancybox="gallery3">
                                    <img class="img-fluid" src="images/products/sheet/geo/mainnail/19.jpg" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/geo/original/Geo Gris Bush-hammered_6.jpg" data-fancybox="gallery3">
                                    <img class="img-fluid" src="images/products/sheet/geo/mainnail/20.jpg" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/geo/original/Geo Gris Bush-hammered_7.jpg" data-fancybox="gallery3">
                                    <img class="img-fluid" src="images/products/sheet/geo/mainnail/21.jpg" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/geo/original/Storm Negro Natural + Iseo Gris Abujardado + Geo Gris Abujardado.jpg" data-fancybox="gallery3">
                                    <img class="img-fluid" src="images/products/sheet/geo/mainnail/22.jpg" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/geo/original/GEO GRIS L1.jpg" data-fancybox="gallery3">
                                    <img class="img-fluid" src="images/products/sheet/geo/mainnail/23.png" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/geo/original/GEO GRIS L2.jpg" data-fancybox="gallery3">
                                    <img class="img-fluid" src="images/products/sheet/geo/mainnail/24.png" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/geo/original/GEO GRIS L3.jpg" data-fancybox="gallery3">
                                    <img class="img-fluid" src="images/products/sheet/geo/mainnail/25.png" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/geo/original/GEO GRIS L4.jpg" data-fancybox="gallery3">
                                    <img class="img-fluid" src="images/products/sheet/geo/mainnail/26.png" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/geo/original/GEO GRIS L5.jpg" data-fancybox="gallery3">
                                    <img class="img-fluid" src="images/products/sheet/geo/mainnail/27.png" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/geo/original/GEO GRIS L6.jpg" data-fancybox="gallery3">
                                    <img class="img-fluid" src="images/products/sheet/geo/mainnail/28.png" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/geo/original/GEO GRIS L7.jpg" data-fancybox="gallery3">
                                    <img class="img-fluid" src="images/products/sheet/geo/mainnail/29.png" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/geo/original/GEO GRIS L8.jpg" data-fancybox="gallery3">
                                    <img class="img-fluid" src="images/products/sheet/geo/mainnail/30.png" />
                                </div>
                            </div>
                            <div class="thumbCarousel thumbCarousel3 carousel max-w-xl mx-auto">
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/geo/thumbnail/01.jpg" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/geo/thumbnail/02.jpg" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/geo/thumbnail/03.jpg" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/geo/thumbnail/04.jpg" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/geo/thumbnail/05.jpg" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/geo/thumbnail/06.png" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/geo/thumbnail/07.png" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/geo/thumbnail/08.png" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/geo/thumbnail/09.png" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/geo/thumbnail/10.png" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/geo/thumbnail/11.png" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/geo/thumbnail/12.png" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/geo/thumbnail/13.png" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/geo/thumbnail/14.jpg" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/geo/thumbnail/15.jpg" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/geo/thumbnail/16.jpg" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/geo/thumbnail/17.jpg" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/geo/thumbnail/18.jpg" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/geo/thumbnail/19.jpg" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/geo/thumbnail/20.jpg" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/geo/thumbnail/21.jpg" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/geo/thumbnail/22.jpg" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/geo/thumbnail/23.png" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/geo/thumbnail/24.png" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/geo/thumbnail/25.png" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/geo/thumbnail/26.png" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/geo/thumbnail/27.png" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/geo/thumbnail/28.png" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/geo/thumbnail/29.png" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/geo/thumbnail/30.png" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul class="breadcrumb">
                            <li><a href="index.php"><span class="material-symbols-rounded">home</span>首頁</a></li>
                            <li><a href="products.php?category=sheet">產品</a></li>
                            <li><a href="products.php?category=sheet">薄板</a></li>
                            <li>石紋</li>
                        </ul>
                        <img src="images/about/corner.svg" alt="α-corner" title="品牌：可樂石">
                        <h3 title="品名：洞石系列">洞石系列</h3>
                        <p>款式：</p>
                        <div class="small-img">
                            <input type="radio" name="geo" id="geo01">
                            <button class="check" onclick="mainCarousel3.slideTo(5)">
                                <label for="geo01"><img class="geo-img01" src="images/products/sheet/geo/mockup-crema.jpg" alt="米洞石" title="規格：米"></label>
                            </button>
                            <input type="radio" name="geo" id="geo02">
                            <button class="check" onclick="mainCarousel3.slideTo(22)">
                                <label for="geo02"><img class="geo-img02" src="images/products/sheet/geo/mockup-gris.jpg" alt="深棕洞石" title="規格：深棕"></label>
                            </button>
                        </div>
                        <p>尺寸：</p>
                        <div class="mysize">
                            <input type="radio" name="geo-size" id="geo-size01"><!-- 若加disabled 加在radio -->
                            <button class="check">
                                <label for="geo-size01">
                                    <div class="btn btn-secondary"id="geo-sizebtn01">100x250x0.6cm 刷面</div>
                                </label>
                            </button>
                            
                        </div>
                        
                        <!-- 選取款式或尺寸 互相不相符添加disabled title="本款未有此尺寸" -->
                        
                        <!-- <div class="ex" id="geo-ex">
                            <p>說明：</p>
                            <p></p>
                        </div> -->
                        
                        <!-- <script>
                        $(':radio[name="geo"]').change(function (){
                            if($("input[name=geo]")[0].checked){
                                $("#geo-ex").css('display' , 'block');
                                $("#geo-ex p:nth-child(2)").css('color','#F00').html("<b>需訂製*</b>");
                            }  else {
                                $("#geo-ex").css('display' , 'none');
                                // $("#geo-ex p:nth-child(2)").html("<b>111</b>");  //這行可能是2個判斷式以上且有2種說明以上
                            }
                        });
                        </script> -->
                        <div class="row mydescription">
                            <a class="col btn btn-secondary" href="https://www.inalco.es/en/archivos/series/18/geo-islimm-by-inalco-mayo-2021.zip" download="">下載材質檔</a><!-- 下載後的檔名() -->
                            <a class="col btn btn-secondary" href="contact.php?">諮詢產品</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="details mmm storm">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="box ">
                            <div class="mainCarousel mainCarousel4 carousel w-10/12 max-w-5xl mx-auto">
                                <div class="carousel__slide" data-src="images/products/sheet/storm/original/Storm Gris + Negro Natural_1.jpg" data-fancybox="gallery4">
                                    <img class="img-fluid" src="images/products/sheet/storm/mainnail/01.jpg" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/storm/original/Storm Gris + Negro Natural_8.jpg" data-fancybox="gallery4">
                                    <img class="img-fluid" src="images/products/sheet/storm/mainnail/02.jpg" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/storm/original/Storm Gris Natural + Larsen ITOP Natural.jpg" data-fancybox="gallery4">
                                    <img class="img-fluid" src="images/products/sheet/storm/mainnail/03.jpg" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/storm/original/Storm Gris Natural_1.jpg" data-fancybox="gallery4">
                                    <img class="img-fluid" src="images/products/sheet/storm/mainnail/04.jpg" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/storm/original/Storm Gris Natural_4.jpg" data-fancybox="gallery4">
                                    <img class="img-fluid" src="images/products/sheet/storm/mainnail/05.jpg" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/storm/original/Storm Gris Natural_5.jpg" data-fancybox="gallery4">
                                    <img class="img-fluid" src="images/products/sheet/storm/mainnail/06.jpg" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/storm/original/Storm Gris Natural_6.jpg" data-fancybox="gallery4">
                                    <img class="img-fluid" src="images/products/sheet/storm/mainnail/07.jpg" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/storm/original/Storm Gris Natural_8.jpg" data-fancybox="gallery4">
                                    <img class="img-fluid" src="images/products/sheet/storm/mainnail/08.jpg" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/storm/original/Storm Gris Natural_9.jpg" data-fancybox="gallery4">
                                    <img class="img-fluid" src="images/products/sheet/storm/mainnail/09.jpg" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/storm/original/Storm Gris Natural_10.jpg" data-fancybox="gallery4">
                                    <img class="img-fluid" src="images/products/sheet/storm/mainnail/10.jpg" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/storm/original/Storm Negro Natural + Storm Gris Natural_1.jpg" data-fancybox="gallery4">
                                    <img class="img-fluid" src="images/products/sheet/storm/mainnail/11.jpg" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/storm/original/Storm Negro Natural + Storm Gris Natural_2.jpg" data-fancybox="gallery4">
                                    <img class="img-fluid" src="images/products/sheet/storm/mainnail/12.jpg" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/storm/original/STORM GRIS NATURAL L1.jpg" data-fancybox="gallery4">
                                    <img class="img-fluid" src="images/products/sheet/storm/mainnail/13.png" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/storm/original/STORM GRIS NATURAL L2.jpg" data-fancybox="gallery4">
                                    <img class="img-fluid" src="images/products/sheet/storm/mainnail/14.png" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/storm/original/STORM GRIS NATURAL L3.jpg" data-fancybox="gallery4">
                                    <img class="img-fluid" src="images/products/sheet/storm/mainnail/15.png" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/storm/original/STORM GRIS NATURAL L4.jpg" data-fancybox="gallery4">
                                    <img class="img-fluid" src="images/products/sheet/storm/mainnail/16.png" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/storm/original/STORM GRIS NATURAL L5.jpg" data-fancybox="gallery4">
                                    <img class="img-fluid" src="images/products/sheet/storm/mainnail/17.png" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/storm/original/STORM GRIS NATURAL L6.jpg" data-fancybox="gallery4">
                                    <img class="img-fluid" src="images/products/sheet/storm/mainnail/18.png" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/storm/original/STORM GRIS NATURAL L7.jpg" data-fancybox="gallery4">
                                    <img class="img-fluid" src="images/products/sheet/storm/mainnail/19.png" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/storm/original/STORM GRIS NATURAL L8.jpg" data-fancybox="gallery4">
                                    <img class="img-fluid" src="images/products/sheet/storm/mainnail/20.png" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/storm/original/Storm Negro Natural_2.jpg" data-fancybox="gallery4">
                                    <img class="img-fluid" src="images/products/sheet/storm/mainnail/21.jpg" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/storm/original/Storm Negro Natural_3.jpg" data-fancybox="gallery4">
                                    <img class="img-fluid" src="images/products/sheet/storm/mainnail/22.jpg" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/storm/original/Storm Negro Natural_7.jpg" data-fancybox="gallery4">
                                    <img class="img-fluid" src="images/products/sheet/storm/mainnail/23.jpg" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/storm/original/Storm Negro Natural_12.jpg" data-fancybox="gallery4">
                                    <img class="img-fluid" src="images/products/sheet/storm/mainnail/24.jpg" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/storm/original/Storm Negro Natural_14.jpg" data-fancybox="gallery4">
                                    <img class="img-fluid" src="images/products/sheet/storm/mainnail/25.jpg" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/storm/original/Storm Negro Natural_16.jpg" data-fancybox="gallery4">
                                    <img class="img-fluid" src="images/products/sheet/storm/mainnail/26.jpg" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/storm/original/Storm Negro Natural_18.jpg" data-fancybox="gallery4">
                                    <img class="img-fluid" src="images/products/sheet/storm/mainnail/27.jpg" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/storm/original/Storm Negro Natural_19.jpg" data-fancybox="gallery4">
                                    <img class="img-fluid" src="images/products/sheet/storm/mainnail/28.jpg" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/storm/original/Storm Negro Natural_20.jpg" data-fancybox="gallery4">
                                    <img class="img-fluid" src="images/products/sheet/storm/mainnail/29.jpg" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/storm/original/Storm Negro Natural_21.jpg" data-fancybox="gallery4">
                                    <img class="img-fluid" src="images/products/sheet/storm/mainnail/30.jpg" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/storm/original/Storm Negro Natural_22.jpg" data-fancybox="gallery4">
                                    <img class="img-fluid" src="images/products/sheet/storm/mainnail/31.jpg" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/storm/original/Storm Negro Natural_23.jpg" data-fancybox="gallery4">
                                    <img class="img-fluid" src="images/products/sheet/storm/mainnail/32.jpg" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/storm/original/Storm Negro Natural_24.jpg" data-fancybox="gallery4">
                                    <img class="img-fluid" src="images/products/sheet/storm/mainnail/33.jpg" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/storm/original/STORM NEGRO NATURAL L1.jpg" data-fancybox="gallery4">
                                    <img class="img-fluid" src="images/products/sheet/storm/mainnail/34.png" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/storm/original/STORM NEGRO NATURAL L2.jpg" data-fancybox="gallery4">
                                    <img class="img-fluid" src="images/products/sheet/storm/mainnail/35.png" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/storm/original/STORM NEGRO NATURAL L3.jpg" data-fancybox="gallery4">
                                    <img class="img-fluid" src="images/products/sheet/storm/mainnail/36.png" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/storm/original/STORM NEGRO NATURAL L4.jpg" data-fancybox="gallery4">
                                    <img class="img-fluid" src="images/products/sheet/storm/mainnail/37.png" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/storm/original/STORM NEGRO NATURAL L5.jpg" data-fancybox="gallery4">
                                    <img class="img-fluid" src="images/products/sheet/storm/mainnail/38.png" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/storm/original/STORM NEGRO NATURAL L6.jpg" data-fancybox="gallery4">
                                    <img class="img-fluid" src="images/products/sheet/storm/mainnail/39.png" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/storm/original/STORM NEGRO NATURAL L7.jpg" data-fancybox="gallery4">
                                    <img class="img-fluid" src="images/products/sheet/storm/mainnail/40.png" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/storm/original/STORM NEGRO NATURAL L8.jpg" data-fancybox="gallery4">
                                    <img class="img-fluid" src="images/products/sheet/storm/mainnail/41.png" />
                                </div>
                            </div>
                            <div class="thumbCarousel thumbCarousel4 carousel max-w-xl mx-auto">
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/storm/thumbnail/01.jpg" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/storm/thumbnail/02.jpg" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/storm/thumbnail/03.jpg" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/storm/thumbnail/04.jpg" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/storm/thumbnail/05.jpg" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/storm/thumbnail/06.jpg" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/storm/thumbnail/07.jpg" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/storm/thumbnail/08.jpg" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/storm/thumbnail/09.jpg" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/storm/thumbnail/10.jpg" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/storm/thumbnail/11.jpg" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/storm/thumbnail/12.jpg" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/storm/thumbnail/13.png" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/storm/thumbnail/14.png" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/storm/thumbnail/15.png" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/storm/thumbnail/16.png" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/storm/thumbnail/17.png" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/storm/thumbnail/18.png" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/storm/thumbnail/19.png" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/storm/thumbnail/20.png" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/storm/thumbnail/21.jpg" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/storm/thumbnail/22.jpg" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/storm/thumbnail/23.jpg" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/storm/thumbnail/24.jpg" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/storm/thumbnail/25.jpg" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/storm/thumbnail/26.jpg" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/storm/thumbnail/27.jpg" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/storm/thumbnail/28.jpg" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/storm/thumbnail/29.jpg" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/storm/thumbnail/30.jpg" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/storm/thumbnail/31.jpg" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/storm/thumbnail/32.jpg" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/storm/thumbnail/33.jpg" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/storm/thumbnail/34.png" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/storm/thumbnail/35.png" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/storm/thumbnail/36.png" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/storm/thumbnail/37.png" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/storm/thumbnail/38.png" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/storm/thumbnail/39.png" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/storm/thumbnail/40.png" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/storm/thumbnail/41.png" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul class="breadcrumb">
                            <li><a href="index.php"><span class="material-symbols-rounded">home</span>首頁</a></li>
                            <li><a href="products.php?category=sheet">產品</a></li>
                            <li><a href="products.php?category=sheet">薄板</a></li>
                            <li>石紋</li>
                        </ul>
                        <img src="images/about/corner.svg" alt="α-corner" title="品牌：可樂石">
                        <h3 title="品名：旋風系列">旋風系列</h3>
                        <p>款式：</p>
                        <div class="small-img">
                            <input type="radio" name="storm" id="storm01">
                            <button class="check" onclick="mainCarousel4.slideTo(12)">
                                <label for="storm01"><img class="storm-img01" src="images/products/sheet/storm/mockup-ash.jpg" alt="灰旋風" title="規格：灰"></label>
                            </button>
                            <input type="radio" name="storm" id="storm02">
                            <button class="check" onclick="mainCarousel4.slideTo(33)">
                                <label for="storm02"><img class="storm-img02" src="images/products/sheet/storm/mockup-black.jpg" alt="黑旋風" title="規格：黑"></label>
                            </button>
                        </div>
                        <p>尺寸：</p>
                        <div class="mysize">
                            <input type="radio" name="storm-size" id="storm-size01"><!-- 若加disabled 加在radio -->
                            <button class="check">
                                <label for="storm-size01">
                                    <div class="btn btn-secondary"id="storm-sizebtn01">100x250x0.6cm 霧面</div>
                                </label>
                            </button>
                        </div>

                        <div class="row mydescription">
                            <a class="col btn btn-secondary" href="" download="">下載材質檔</a><!-- 下載後的檔名() -->
                            <a class="col btn btn-secondary" href="contact.php?">諮詢產品</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="details mmm brazil">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="box ">
                            <div class="mainCarousel mainCarousel5 carousel w-10/12 max-w-5xl mx-auto">
                                <div class="carousel__slide" data-src="images/products/sheet/brazil/original/amb 07 brazil detalle.jpg" data-fancybox="gallery5">
                                    <img class="img-fluid" src="images/products/sheet/brazil/mainnail/01.jpg" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/brazil/original/Brazil Super White 1200x3000 1.jpg" data-fancybox="gallery5">
                                    <img class="img-fluid" src="images/products/sheet/brazil/mainnail/02.png" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/brazil/original/Brazil Super White 1200x3000 2.jpg" data-fancybox="gallery5">
                                    <img class="img-fluid" src="images/products/sheet/brazil/mainnail/03.png" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/brazil/original/Brazil Super White 1200x3000 3.jpg" data-fancybox="gallery5">
                                    <img class="img-fluid" src="images/products/sheet/brazil/mainnail/04.png" />
                                </div>
                            </div>
                            <div class="thumbCarousel thumbCarousel5 carousel max-w-xl mx-auto">
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/brazil/thumbnail/01.jpg" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/brazil/thumbnail/02.png" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/brazil/thumbnail/03.png" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/brazil/thumbnail/04.png" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul class="breadcrumb">
                            <li><a href="index.php"><span class="material-symbols-rounded">home</span>首頁</a></li>
                            <li><a href="products.php?category=sheet">產品</a></li>
                            <li><a href="products.php?category=sheet">薄板</a></li>
                            <li>石紋</li>
                        </ul>
                        <img src="images/about/corner.svg" alt="α-corner" title="品牌：可樂石">
                        <h3 title="品名：巴西雲玉">巴西雲玉</h3>
                        <p>款式：</p>
                        <div class="small-img">
                            <input type="radio" name="brazil" id="brazil01">
                            <button class="check" onclick="mainCarousel5.slideTo(1)">
                                <label for="brazil01"><img class="brazil-img01" src="images/products/sheet/brazil/mockup-one.jpg" alt="巴西雲玉" title="規格：單一款"></label>
                            </button>
                        </div>
                        <p>尺寸：</p>
                        <div class="mysize">
                            <input type="radio" name="brazil-size" id="brazil-size01"><!-- 若加disabled 加在radio -->
                            <button class="check">
                                <label for="brazil-size01">
                                    <div class="btn btn-secondary"id="brazil-sizebtn01">120x300x0.6cm 霧面</div>
                                </label>
                            </button>
                        </div>
                        <p>說明：</p>
                        <p>本產品共3種花紋，可無限對紋。</p>
                        <div class="row mydescription">
                            <a class="col btn btn-secondary" href="" download="">下載材質檔</a><!-- 下載後的檔名() -->
                            <a class="col btn btn-secondary" href="contact.php?">諮詢產品</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="details mmm umbra">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="box ">
                            <div class="mainCarousel mainCarousel6 carousel w-10/12 max-w-5xl mx-auto">
                                <div class="carousel__slide" data-src="images/products/sheet/umbra/original/Fibre Rafia Negro + Umbra Marron Abujardado.jpg" data-fancybox="gallery6">
                                    <img class="img-fluid" src="images/products/sheet/umbra/mainnail/01.jpg" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/umbra/original/The New Blacks iTOP Castagna Abujardado + Umbra Marron Abujardado_1.jpg" data-fancybox="gallery6">
                                    <img class="img-fluid" src="images/products/sheet/umbra/mainnail/02.jpg" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/umbra/original/The New Blacks iTOP Castagna Abujardado + Umbra Marron Abujardado_2.jpg" data-fancybox="gallery6">
                                    <img class="img-fluid" src="images/products/sheet/umbra/mainnail/03.jpg" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/umbra/original/Umbra Marron Abujardado_1.jpg" data-fancybox="gallery6">
                                    <img class="img-fluid" src="images/products/sheet/umbra/mainnail/04.jpg" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/umbra/original/Umbra Marron Abujardado_2.jpg" data-fancybox="gallery6">
                                    <img class="img-fluid" src="images/products/sheet/umbra/mainnail/05.jpg" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/umbra/original/Umbra Marron Abujardado_3.jpg" data-fancybox="gallery6">
                                    <img class="img-fluid" src="images/products/sheet/umbra/mainnail/06.jpg" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/umbra/original/Umbra Marron Abujardado_4.jpg" data-fancybox="gallery6">
                                    <img class="img-fluid" src="images/products/sheet/umbra/mainnail/07.jpg" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/umbra/original/Umbra Marron Abujardado_5.jpg" data-fancybox="gallery6">
                                    <img class="img-fluid" src="images/products/sheet/umbra/mainnail/08.jpg" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/umbra/original/Umbra Marron Non-slip.jpg" data-fancybox="gallery6">
                                    <img class="img-fluid" src="images/products/sheet/umbra/mainnail/09.jpg" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/umbra/original/UMBRA MARRON L1.jpg" data-fancybox="gallery6">
                                    <img class="img-fluid" src="images/products/sheet/umbra/mainnail/10.png" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/umbra/original/UMBRA MARRON L2.jpg" data-fancybox="gallery6">
                                    <img class="img-fluid" src="images/products/sheet/umbra/mainnail/11.png" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/umbra/original/UMBRA MARRON L3.jpg" data-fancybox="gallery6">
                                    <img class="img-fluid" src="images/products/sheet/umbra/mainnail/12.png" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/umbra/original/UMBRA MARRON L4.jpg" data-fancybox="gallery6">
                                    <img class="img-fluid" src="images/products/sheet/umbra/mainnail/13.png" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/umbra/original/UMBRA MARRON L5.jpg" data-fancybox="gallery6">
                                    <img class="img-fluid" src="images/products/sheet/umbra/mainnail/14.png" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/umbra/original/UMBRA MARRON L6.jpg" data-fancybox="gallery6">
                                    <img class="img-fluid" src="images/products/sheet/umbra/mainnail/15.png" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/umbra/original/UMBRA MARRON L7.jpg" data-fancybox="gallery6">
                                    <img class="img-fluid" src="images/products/sheet/umbra/mainnail/16.png" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/umbra/original/UMBRA MARRON L8.jpg" data-fancybox="gallery6">
                                    <img class="img-fluid" src="images/products/sheet/umbra/mainnail/17.png" />
                                </div>
                            </div>
                            <div class="thumbCarousel thumbCarousel6 carousel max-w-xl mx-auto">
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/umbra/thumbnail/01.jpg" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/umbra/thumbnail/02.jpg" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/umbra/thumbnail/03.jpg" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/umbra/thumbnail/04.jpg" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/umbra/thumbnail/05.jpg" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/umbra/thumbnail/06.jpg" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/umbra/thumbnail/07.jpg" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/umbra/thumbnail/08.jpg" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/umbra/thumbnail/09.jpg" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/umbra/thumbnail/10.png" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/umbra/thumbnail/11.png" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/umbra/thumbnail/12.png" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/umbra/thumbnail/13.png" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/umbra/thumbnail/14.png" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/umbra/thumbnail/15.png" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/umbra/thumbnail/16.png" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/umbra/thumbnail/17.png" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul class="breadcrumb">
                            <li><a href="index.php"><span class="material-symbols-rounded">home</span>首頁</a></li>
                            <li><a href="products.php">產品</a></li>
                            <li><a href="products.php?get=id">薄板</a></li>
                            <li>石紋</li>
                        </ul>
                        <img src="images/about/corner.svg" alt="α-corner" title="品牌：可樂石">
                        <h3 title="品名：安柏瑞">安柏瑞</h3>
                        <p>款式：</p>
                        <div class="small-img">
                            <input type="radio" name="umbra" id="umbra01">
                            <button class="check" onclick="mainCarousel6.slideTo(9)">
                                <label for="umbra01"><img class="umbra-img01" src="images/products/sheet/umbra/mockup-one.jpg" alt="安柏瑞" title="規格：單一款"></label>
                            </button>
                        </div>
                        <p>尺寸：</p>
                        <div class="mysize">
                        <input type="radio" name="umbra-size" id="umbra-size01">
                            <button class="check">
                                <label for="umbra-size01">
                                    <div class="btn btn-secondary" id="umbra-sizebtn01">150x320x0.6cm 刷面</div>
                                </label>
                            </button>
                            <input type="radio" name="umbra-size" id="umbra-size02">
                            <button class="check">
                                <label for="umbra-size02">
                                    <div class="btn btn-secondary"id="umbra-sizebtn02">100x250x0.6cm 刷面</div>
                                </label>
                            </button>
                        </div>
                        
                        <div class="ex" id="umbra-ex">
                            <p>說明：</p>
                            <p></p>
                        </div>
                        
                        <script>
                        $(':radio[name="umbra-size"]').change(function (){
                            if($("input[name=umbra-size]")[0].checked){
                                $("#umbra-ex").css({
                                    'display' : 'block'
                                })
                                $("#umbra-ex p:nth-child(2)").css('color','#F00').html("<b>限量新登場</b>");
                            }  else {
                                $("#umbra-ex").css({
                                    'display' : 'none'
                                })
                                // $("#umbra-ex p:nth-child(2)").html("<b>111</b>");  //這行可能是2個判斷式以上且有2種說明以上
                            }
                        });
                        </script>
                        <div class="row mydescription">
                            <a class="col btn btn-secondary" href="" download="">下載材質檔</a><!-- 下載後的檔名() -->
                            <a class="col btn btn-secondary" href="contact.php?">諮詢產品</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="details mmm syros">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="box ">
                            <div class="mainCarousel mainCarousel7 carousel w-10/12 max-w-5xl mx-auto">
                                <div class="carousel__slide" data-src="images/products/sheet/syros/original/Syros + Syros ITOP Super Blanco-Gris Honed Polished.jpg" data-fancybox="gallery7">
                                    <img class="img-fluid" src="images/products/sheet/syros/mainnail/01.jpg" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/syros/original/Syros ITOP Super Blanco-Gris Honed Polished_10.jpg" data-fancybox="gallery7">
                                    <img class="img-fluid" src="images/products/sheet/syros/mainnail/02.jpg" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/syros/original/Syros ITOP Super Blanco-Gris Honed Polished_11.jpg" data-fancybox="gallery7">
                                    <img class="img-fluid" src="images/products/sheet/syros/mainnail/03.jpg" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/syros/original/Syros Super Blanco-Gris Honed Polished_1.jpg" data-fancybox="gallery7">
                                    <img class="img-fluid" src="images/products/sheet/syros/mainnail/04.jpg" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/syros/original/Syros Super Blanco-Gris Honed Polished_2.jpg" data-fancybox="gallery7">
                                    <img class="img-fluid" src="images/products/sheet/syros/mainnail/05.jpg" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/syros/original/Syros Super Blanco-Gris Honed Polished_3.jpg" data-fancybox="gallery7">
                                    <img class="img-fluid" src="images/products/sheet/syros/mainnail/06.jpg" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/syros/original/Syros Super Blanco-Gris Honed Polished_4.jpg" data-fancybox="gallery7">
                                    <img class="img-fluid" src="images/products/sheet/syros/mainnail/07.jpg" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/syros/original/Syros Super Blanco-Gris Honed Polished_5.jpg" data-fancybox="gallery7">
                                    <img class="img-fluid" src="images/products/sheet/syros/mainnail/08.jpg" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/syros/original/Syros Super Blanco-Gris Honed Polished_6.jpg" data-fancybox="gallery7">
                                    <img class="img-fluid" src="images/products/sheet/syros/mainnail/09.jpg" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/syros/original/Syros Super Blanco-Gris Honed Polished_7.jpg" data-fancybox="gallery7">
                                    <img class="img-fluid" src="images/products/sheet/syros/mainnail/10.jpg" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/syros/original/Syros Super Blanco-Gris Honed Polished_8.jpg" data-fancybox="gallery7">
                                    <img class="img-fluid" src="images/products/sheet/syros/mainnail/11.jpg" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/syros/original/Syros Super Blanco-Gris Honed Polished_9.jpg" data-fancybox="gallery7">
                                    <img class="img-fluid" src="images/products/sheet/syros/mainnail/12.jpg" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/syros/original/SYROS SUPER BLANCO-GRIS NATURAL L1.jpg" data-fancybox="gallery7">
                                    <img class="img-fluid" src="images/products/sheet/syros/mainnail/13.png" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/syros/original/SYROS SUPER BLANCO-GRIS NATURAL L2.jpg" data-fancybox="gallery7">
                                    <img class="img-fluid" src="images/products/sheet/syros/mainnail/14.png" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/syros/original/SYROS SUPER BLANCO-GRIS NATURAL L3.jpg" data-fancybox="gallery7">
                                    <img class="img-fluid" src="images/products/sheet/syros/mainnail/15.png" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/syros/original/SYROS SUPER BLANCO-GRIS NATURAL L4.jpg" data-fancybox="gallery7">
                                    <img class="img-fluid" src="images/products/sheet/syros/mainnail/16.png" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/syros/original/SYROS SUPER BLANCO-GRIS NATURAL L5.jpg" data-fancybox="gallery7">
                                    <img class="img-fluid" src="images/products/sheet/syros/mainnail/17.png" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/syros/original/SYROS SUPER BLANCO-GRIS NATURAL L6.jpg" data-fancybox="gallery7">
                                    <img class="img-fluid" src="images/products/sheet/syros/mainnail/18.png" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/syros/original/SYROS SUPER BLANCO-GRIS NATURAL L7.jpg" data-fancybox="gallery7">
                                    <img class="img-fluid" src="images/products/sheet/syros/mainnail/19.png" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/syros/original/SYROS SUPER BLANCO-GRIS NATURAL L8.jpg" data-fancybox="gallery7">
                                    <img class="img-fluid" src="images/products/sheet/syros/mainnail/20.png" />
                                </div>
                            </div>
                            <div class="thumbCarousel thumbCarousel7 carousel max-w-xl mx-auto">
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/syros/thumbnail/01.jpg" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/syros/thumbnail/02.jpg" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/syros/thumbnail/03.jpg" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/syros/thumbnail/04.jpg" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/syros/thumbnail/05.jpg" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/syros/thumbnail/06.jpg" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/syros/thumbnail/07.jpg" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/syros/thumbnail/08.jpg" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/syros/thumbnail/09.jpg" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/syros/thumbnail/10.jpg" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/syros/thumbnail/11.jpg" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/syros/thumbnail/12.jpg" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/syros/thumbnail/13.png" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/syros/thumbnail/14.png" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/syros/thumbnail/15.png" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/syros/thumbnail/16.png" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/syros/thumbnail/17.png" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/syros/thumbnail/18.png" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/syros/thumbnail/19.png" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/syros/thumbnail/20.png" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul class="breadcrumb">
                            <li><a href="index.php"><span class="material-symbols-rounded">home</span>首頁</a></li>
                            <li><a href="products.php">產品</a></li>
                            <li><a href="products.php?get=id">薄板</a></li>
                            <li>石紋</li>
                        </ul>
                        <img src="images/about/corner.svg" alt="α-corner" title="品牌：可樂石">
                        <h3 title="品名：希羅斯">希羅斯</h3>
                        <p>款式：</p>
                        <div class="small-img">
                            <input type="radio" name="syros" id="syros01">
                            <button class="check" onclick="mainCarousel7.slideTo(12)">
                                <label for="syros01"><img class="syros-img01" src="images/products/sheet/syros/mockup-one.jpg" alt="希羅斯" title="規格：單一款"></label>
                            </button>
                        </div>
                        <p>尺寸：</p>
                        <div class="mysize">
                        <input type="radio" name="syros-size" id="syros-size01">
                            <button class="check">
                                <label for="syros-size01">
                                    <div class="btn btn-secondary" id="syros-sizebtn01">150x320x0.6cm 霧面</div>
                                </label>
                            </button>
                            <input type="radio" name="syros-size" id="syros-size02">
                            <button class="check">
                                <label for="syros-size02">
                                    <div class="btn btn-secondary"id="syros-sizebtn02">100x250x0.6cm 霧面</div>
                                </label>
                            </button>
                        </div>
                        
                        <!-- <div class="ex" id="syros-ex">
                            <p>說明：</p>
                            <p></p>
                        </div>
                        
                        <script>
                        $(':radio[name="syros-size"]').change(function (){
                            if($("input[name=syros-size]")[0].checked){
                                $("#syros-ex").css({
                                    'display' : 'block'
                                })
                                $("#syros-ex p:nth-child(2)").css('color','#F00').html("<b>限量新登場</b>");
                            }  else {
                                $("#syros-ex").css({
                                    'display' : 'none'
                                })
                                // $("#umbra-ex p:nth-child(2)").html("<b>111</b>");  //這行可能是2個判斷式以上且有2種說明以上
                            }
                        });
                        </script> -->
                        <div class="row mydescription">
                            <a class="col btn btn-secondary" href="" download="">下載材質檔</a><!-- 下載後的檔名() -->
                            <a class="col btn btn-secondary" href="contact.php?">諮詢產品</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="details mmm touche">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="box ">
                            <div class="mainCarousel mainCarousel8 carousel w-10/12 max-w-5xl mx-auto">
                                <div class="carousel__slide" data-src="images/products/sheet/touche/original/Masai Piedra Natural + Touche Bookmatch Super Blanco-Gris Natural.jpg" data-fancybox="gallery8">
                                    <img class="img-fluid" src="images/products/sheet/touche/mainnail/01.jpg" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/touche/original/Touche Bookmatch Super Blanco-Gris Natural.jpg.jpg" data-fancybox="gallery8">
                                    <img class="img-fluid" src="images/products/sheet/touche/mainnail/02.jpg" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/touche/original/Touche Super Blanco-Gris Natural_4.jpg" data-fancybox="gallery8">
                                    <img class="img-fluid" src="images/products/sheet/touche/mainnail/03.jpg" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/touche/original/Touche Super Blanco-Gris Natural_8.jpg" data-fancybox="gallery8">
                                    <img class="img-fluid" src="images/products/sheet/touche/mainnail/04.jpg" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/touche/original/Touche Super Blanco-Gris Natural_12.jpg" data-fancybox="gallery8">
                                    <img class="img-fluid" src="images/products/sheet/touche/mainnail/05.jpg" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/touche/original/Touche Super-Blanco Gris Natural_10.jpg" data-fancybox="gallery8">
                                    <img class="img-fluid" src="images/products/sheet/touche/mainnail/06.jpg" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/touche/original/Touche Super-Blanco Gris Natural_11.jpg" data-fancybox="gallery8">
                                    <img class="img-fluid" src="images/products/sheet/touche/mainnail/07.jpg" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/touche/original/TOUCHE SUPER BLANCO-GRIS  L1.jpg" data-fancybox="gallery8">
                                    <img class="img-fluid" src="images/products/sheet/touche/mainnail/08.png" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/touche/original/TOUCHE SUPER BLANCO-GRIS  L2.jpg" data-fancybox="gallery8">
                                    <img class="img-fluid" src="images/products/sheet/touche/mainnail/09.png" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/touche/original/TOUCHE SUPER BLANCO-GRIS  L3.jpg" data-fancybox="gallery8">
                                    <img class="img-fluid" src="images/products/sheet/touche/mainnail/10.png" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/touche/original/TOUCHE SUPER BLANCO-GRIS  L4.jpg" data-fancybox="gallery8">
                                    <img class="img-fluid" src="images/products/sheet/touche/mainnail/11.png" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/touche/original/TOUCHE SUPER BLANCO-GRIS  L5.jpg" data-fancybox="gallery8">
                                    <img class="img-fluid" src="images/products/sheet/touche/mainnail/12.png" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/touche/original/TOUCHE SUPER BLANCO-GRIS  L6.jpg" data-fancybox="gallery8">
                                    <img class="img-fluid" src="images/products/sheet/touche/mainnail/13.png" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/touche/original/TOUCHE SUPER BLANCO-GRIS  L7.jpg" data-fancybox="gallery8">
                                    <img class="img-fluid" src="images/products/sheet/touche/mainnail/14.png" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/touche/original/TOUCHE SUPER BLANCO-GRIS  L8.jpg" data-fancybox="gallery8">
                                    <img class="img-fluid" src="images/products/sheet/touche/mainnail/15.png" />
                                </div>
                            </div>
                            <div class="thumbCarousel thumbCarousel8 carousel max-w-xl mx-auto">
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/touche/thumbnail/01.jpg" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/touche/thumbnail/02.jpg" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/touche/thumbnail/03.jpg" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/touche/thumbnail/04.jpg" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/touche/thumbnail/05.jpg" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/touche/thumbnail/06.jpg" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/touche/thumbnail/07.jpg" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/touche/thumbnail/08.png" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/touche/thumbnail/09.png" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/touche/thumbnail/10.png" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/touche/thumbnail/11.png" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/touche/thumbnail/12.png" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/touche/thumbnail/13.png" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/touche/thumbnail/14.png" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/touche/thumbnail/15.png" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul class="breadcrumb">
                            <li><a href="index.php"><span class="material-symbols-rounded">home</span>首頁</a></li>
                            <li><a href="products.php">產品</a></li>
                            <li><a href="products.php?get=id">薄板</a></li>
                            <li>石紋</li>
                        </ul>
                        <img src="images/about/corner.svg" alt="α-corner" title="品牌：可樂石">
                        <h3 title="品名：銀狐白">銀狐白</h3>
                        <p>款式：</p>
                        <div class="small-img">
                            <input type="radio" name="touche" id="touche01">
                            <button class="check" onclick="mainCarousel8.slideTo(7)">
                                <label for="touche01"><img class="touche-img01" src="images/products/sheet/touche/mockup-one.jpg" alt="銀狐白" title="規格：單一款"></label>
                            </button>
                        </div>
                        <p>尺寸：</p>
                        <div class="mysize">
                        <input type="radio" name="touche-size" id="touche-size01">
                            <button class="check">
                                <label for="touche-size01">
                                    <div class="btn btn-secondary" id="touche-sizebtn01">150x320x0.6cm 細磨面</div>
                                </label>
                            </button>
                            <input type="radio" name="touche-size" id="touche-size02">
                            <button class="check">
                                <label for="touche-size02">
                                    <div class="btn btn-secondary"id="touche-sizebtn02">100x250x0.6cm 刷面</div>
                                </label>
                            </button>
                        </div>
                        <p>說明：</p>
                        <p>皆為霧面 觸感不同，下載按鈕另有對稱圖檔</p>
                        <div class="row mydescription">
                            <a class="col btn btn-secondary" href="" download="">下載材質檔</a>
                            <a class="col btn btn-secondary" href="contact.php?">諮詢產品</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="details mmm jurassic">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="box ">
                            <div class="mainCarousel mainCarousel9 carousel w-10/12 max-w-5xl mx-auto">
                                <div class="carousel__slide" data-src="images/products/sheet/jurassic/original/amb 03 jurasic_v2.jpg" data-fancybox="gallery9">
                                    <img class="img-fluid" src="images/products/sheet/jurassic/mainnail/01.jpg" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/jurassic/original/Amb Jurassic Black.jpg" data-fancybox="gallery9">
                                    <img class="img-fluid" src="images/products/sheet/jurassic/mainnail/02.jpg" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/jurassic/original/Detalle Salon Jurassic Black Polished 1200x2600x6.jpg" data-fancybox="gallery9">
                                    <img class="img-fluid" src="images/products/sheet/jurassic/mainnail/03.jpg" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/jurassic/original/Quartzite Deluxe.jpg" data-fancybox="gallery9">
                                    <img class="img-fluid" src="images/products/sheet/jurassic/mainnail/04.jpg" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/jurassic/original/Jurassic Black 1200x2600 1.jpg" data-fancybox="gallery9">
                                    <img class="img-fluid" src="images/products/sheet/jurassic/mainnail/05.png" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/jurassic/original/Jurassic Black 1200x2600 2.jpg" data-fancybox="gallery9">
                                    <img class="img-fluid" src="images/products/sheet/jurassic/mainnail/06.png" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/jurassic/original/Jurassic Black 1200x2600 3.jpg" data-fancybox="gallery9">
                                    <img class="img-fluid" src="images/products/sheet/jurassic/mainnail/07.png" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/jurassic/original/Jurassic Black 1200x2600 4.jpg" data-fancybox="gallery9">
                                    <img class="img-fluid" src="images/products/sheet/jurassic/mainnail/08.png" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/jurassic/original/Jurassic Gold Polished Decor 1200x2600 1.jpg" data-fancybox="gallery9">
                                    <img class="img-fluid" src="images/products/sheet/jurassic/mainnail/09.png" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/jurassic/original/Jurassic Gold Polished Decor 1200x2600 2.jpg" data-fancybox="gallery9">
                                    <img class="img-fluid" src="images/products/sheet/jurassic/mainnail/10.png" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/jurassic/original/Jurassic Gold Polished Decor 1200x2600 3.jpg" data-fancybox="gallery9">
                                    <img class="img-fluid" src="images/products/sheet/jurassic/mainnail/11.png" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/jurassic/original/Jurassic Gold Polished Decor 1200x2600 4.jpg" data-fancybox="gallery9">
                                    <img class="img-fluid" src="images/products/sheet/jurassic/mainnail/12.png" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/jurassic/original/QUARTZITE DELUXE R2.jpg" data-fancybox="gallery9">
                                    <img class="img-fluid" src="images/products/sheet/jurassic/mainnail/13.png" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/jurassic/original/QUARTZITE DELUXE R3.jpg" data-fancybox="gallery9">
                                    <img class="img-fluid" src="images/products/sheet/jurassic/mainnail/14.png" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/jurassic/original/QUARTZITE DELUXE R4.jpg" data-fancybox="gallery9">
                                    <img class="img-fluid" src="images/products/sheet/jurassic/mainnail/15.png" />
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/jurassic/original/QUARTZITE DELUXE R5.jpg" data-fancybox="gallery9">
                                    <img class="img-fluid" src="images/products/sheet/jurassic/mainnail/16.png" />
                                </div>
                            </div>
                            <div class="thumbCarousel thumbCarousel9 carousel max-w-xl mx-auto">
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/jurassic/thumbnail/01.jpg" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/jurassic/thumbnail/02.jpg" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/jurassic/thumbnail/03.jpg" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/jurassic/thumbnail/04.jpg" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/jurassic/thumbnail/05.png" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/jurassic/thumbnail/06.png" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/jurassic/thumbnail/07.png" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/jurassic/thumbnail/08.png" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/jurassic/thumbnail/09.png" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/jurassic/thumbnail/10.png" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/jurassic/thumbnail/11.png" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/jurassic/thumbnail/12.png" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/jurassic/thumbnail/13.png" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/jurassic/thumbnail/14.png" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/jurassic/thumbnail/15.png" />
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/jurassic/thumbnail/16.png" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul class="breadcrumb">
                            <li><a href="index.php"><span class="material-symbols-rounded">home</span>首頁</a></li>
                            <li><a href="products.php">產品</a></li>
                            <li><a href="products.php?get=id">薄板</a></li>
                            <li>石紋</li>
                        </ul>
                        <img src="images/about/corner.svg" alt="α-corner" title="品牌：可樂石" id="jurassic-logo"><!-- 選擇款式時 品牌改變 -->
                        <h3 title="品名：侏儸紀系列">侏儸紀系列</h3>
                        <p>款式：</p>
                        <div class="small-img">
                            <input type="radio" name="jurassic" id="jurassic01">
                            <button class="check" onclick="mainCarousel9.slideTo(4)">
                                <label for="jurassic01"><img class="jurassic-img01" src="images/products/sheet/jurassic/mockup-black.jpg" alt="侏儸紀黑" title="規格：黑"></label>
                            </button>
                            <input type="radio" name="jurassic" id="jurassic02">
                            <button class="check" onclick="mainCarousel9.slideTo(8)">
                                <label for="jurassic02"><img class="jurassic-img02" src="images/products/sheet/jurassic/mockup-gold.jpg" alt="侏儸紀黑" title="規格：黑-花磚"></label>
                            </button>
                            <input type="radio" name="jurassic" id="jurassic03">
                            <button class="check" onclick="mainCarousel9.slideTo(12)">
                                <label for="jurassic03"><img class="jurassic-img03" src="images/products/sheet/jurassic/mockup-gray.jpg" alt="侏儸紀灰" title="規格：灰"></label>
                            </button>
                        </div>
                        <p>尺寸：</p>
                        <div class="mysize">
                        <input type="radio" name="jurassic-size" id="jurassic-size01">
                            <button class="check">
                                <label for="jurassic-size01">
                                    <div class="btn btn-secondary" id="jurassic-sizebtn01">120x260x0.6cm 亮面</div>
                                </label>
                            </button>
                            <input type="radio" name="jurassic-size" id="jurassic-size02">
                            <button class="check">
                                <label for="jurassic-size02">
                                    <div class="btn btn-secondary"id="jurassic-sizebtn02">120x240x0.6cm 亮面</div>
                                </label>
                            </button>
                        </div>
                        <div class="ex" id="jurassic-ex">
                            <p>說明：</p>
                            <p></p>
                        </div>
                        <div class="row mydescription">
                            <a class="col btn btn-secondary" href="" download="">下載材質檔</a>
                            <a class="col btn btn-secondary" href="contact.php?">諮詢產品</a>
                        </div>
                        <script>
                        $(':radio[name="jurassic"]').change(function (){
                            if($("input[name=jurassic]")[0].checked){
                                $("#jurassic-logo").attr({
                                    'src' : 'images/about/corner.svg',
                                    'alt' : 'α-corner',
                                    'title' : '品牌：可樂石'
                                }).css('padding','.625rem 0');
                                
                                $("#jurassic-size02").attr('disabled','ture');
                                $("#jurassic-sizebtn02").attr('title','本款未有此尺寸');
                                $("#jurassic-size01").removeAttr('disabled');
                                $("#jurassic-sizebtn01").removeAttr('title');
                                $("#jurassic-ex").css({
                                    'display' : 'none'
                                })
                            } else if($("input[name=jurassic]")[1].checked) {
                                $("#jurassic-logo").attr({
                                    'src' : 'images/about/corner.svg',
                                    'alt' : 'α-corner',
                                    'title' : '品牌：可樂石'
                                }).css('padding','.625rem 0');
                                $("#jurassic-size02").attr('disabled','ture');
                                $("#jurassic-sizebtn02").attr('title','本款未有此尺寸');
                                $("#jurassic-size01").removeAttr('disabled');
                                $("#jurassic-sizebtn01").removeAttr('title');
                                $("#jurassic-ex").css({
                                    'display' : 'block'
                                })
                                $("#jurassic-ex p:nth-child(2)").css('color','#F00').html("<b>此款花磚皆為期貨</b>");
                            } else {
                                $("#jurassic-logo").attr({
                                    'src' : 'images/about/holy.svg',
                                    'alt' : 'α-holy',
                                    'title' : '品牌：活麗石'
                                }).css('padding','.625rem 0 .125rem');  //外層連結進活麗石要將get網址做判別外,再加上此列
                                $("#jurassic-size01").attr('disabled','ture');
                                $("#jurassic-sizebtn01").attr('title','本款未有此尺寸');
                                $("#jurassic-size02").removeAttr('disabled');
                                $("#jurassic-sizebtn02").removeAttr('title');
                                $("#jurassic-ex").css({
                                    'display' : 'none'
                                })  //下載按鈕 可替換檔案 或合併一起下載
                            }
                        });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include("fb-messenger.php"); ?>
</body>
<script src="js/pro-details-fancybox.js"></script>
</html>
<script>
$("header .topnav a").eq(2).addClass("active");
$("aside .wrap a").eq(1).addClass("active");
$("button.check").toggleClass('active');
</script>
