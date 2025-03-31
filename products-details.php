<!DOCTYPE html>
<html lang="zh-Hant">

<head>
    <title>產品系列|活水泉源</title>
    <meta name="keywords" content="磁磚,瓷磚,藝術,拼貼,裝潢,室內設計,室內,室外,塗料,伊斯曼,精品磁磚,進口塗料,進口磁磚,雨水回收,Ismanity,伊斯曼,a-cornerstone,可樂石,eternal stone,達理石,a-holystone,活麗石"><!-- α-cornerstone -->
    <meta name="description" content="活水泉源的產品可分為薄板、石英磚、石板磚、地壁磚、外牆磚...等等。活水泉源之產品皆為進口精品、綠建材，對環境低衝擊、對人體健康無害能給您的客戶及家人最安全的保障。旗下品牌有:可樂石a-cornerstone、達理石Eternal stone、活麗石a-Holystone、愛沃IWall智能建材、伊斯曼塗料Ismanity、雨水回收...等等。">

    <meta property="og:title" content="活水泉源國際|產品系列LWIS Products">
    <meta property="og:description" content="活水泉源的產品可分為薄板、石英磚、石板磚、地壁磚、外牆磚...等等。活水泉源之產品皆為進口精品、綠建材，對環境低衝擊、對人體健康無害能給您的客戶及家人最安全的保障。旗下品牌有:可樂石a-cornerstone、達理石Eternal stone、活麗石a-Holystone、愛沃IWall智能建材、伊斯曼塗料Ismanity、雨水回收...等等。">
    <!-- <meta property="og:url" content="https://lwis.com.tw/"> -->

    <?php include("all-head.php"); ?>
    <link rel="stylesheet" href="css/products-btn.css">
    <link rel="stylesheet" href="css/fancybox.css">
    <link rel="stylesheet" href="css/pro-details.css">
    <script src="js/fancybox.umd.js"></script>
    <script src="js/products-btn.js"></script>
    <script src="js/pro-details.js"></script>
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
                    <!-- <a class="btn mybtn" href="products.php?category=stone">石板</a> -->
                    <a class="btn mybtn" href="products.php?category=trim">飾板</a>
                    <a class="btn mybtn" href="https://ismanity.com/" target="_blank">塗料</a>
                    <a class="btn mybtn" href="https://www.livingwater-graf.com.tw/" target="_blank">雨水回收</a>
                </div>
                <!-- <div class="scrollnav" id="myInout1">
                    <button class="btn mybtna" onclick="brand()"><span class="material-symbols-outlined">autorenew</span></button>
                    <a class="btn mybtn1" href="products.php?category=sheet">all</a>
                    <a class="btn mybtn1" href="products.php?type=monochrome">純色</a>
                    <a class="btn mybtn1" href="products.php?type=marble">大理石</a>
                    <a class="btn mybtn1" href="products.php?type=slate">板岩</a>
                    <a class="btn mybtn1" href="products.php?type=terrazzo">磨石子</a>
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
                    <button class="btn mybtn3">all</button>
                    <button class="btn mybtn3">1</button>
                    <button class="btn mybtn3">2</button>
                    <button class="btn mybtn3">3</button>
                    
                </div> -->
            </div>
            <div style="display: none;">
                    <?php if($_GET["sheet"] == "morandi"){ ?>
                        <script>
                            $(function(){
                                filterSelection('morandi');
                                $("#myInout0 .mybtn").eq(0).addClass("active");
                                document.title= '莫蘭迪系列 | 產品介紹';
                            });
                        </script>
                    <?php }elseif($_GET["sheet"] == "fibre"){ ?>
                        <script>
                            $(function(){
                                filterSelection('fibre');
                                $("#myInout0 .mybtn").eq(0).addClass("active");
                                document.title= '懷柏系列 | 產品介紹';
                            });
                        </script>
                    <?php }elseif($_GET["sheet"] == "geo"){ ?>
                        <script>
                            $(function(){
                                filterSelection('geo');
                                $("#myInout0 .mybtn").eq(0).addClass("active");
                                document.title= '洞石系列 | 產品介紹';
                            });
                        </script>
                    <?php }elseif($_GET["sheet"] == "storm"){ ?>
                        <script>
                            $(function(){
                                filterSelection('storm');
                                $("#myInout0 .mybtn").eq(0).addClass("active");  //薄板
                                // $("#myInout1 .mybtn1").eq(2).addClass("active");  //
                                // $("#myInout2 .mybtn2").eq(1).addClass("active");  //可樂石
                                document.title= '旋風系列 | 產品介紹';
                            });
                        </script>
                    <?php }elseif($_GET["sheet"] == "brazil"){ ?>
                        <script>
                            $(function(){
                                filterSelection('brazil');
                                $("#myInout0 .mybtn").eq(0).addClass("active");
                                document.title= '巴西雲玉 | 產品介紹';
                            });
                        </script>
                    <?php }elseif($_GET["sheet"] == "umbra"){ ?>
                        <script>
                            $(function(){
                                filterSelection('umbra');
                                $("#myInout0 .mybtn").eq(0).addClass("active");
                                document.title= '安柏瑞 | 產品介紹';
                            });
                        </script>
                    <?php }elseif($_GET["sheet"] == "syros"){ ?>
                        <script>
                            $(function(){
                                filterSelection('syros');
                                $("#myInout0 .mybtn").eq(0).addClass("active");
                                document.title= '希羅斯 | 產品介紹';
                            });
                        </script>
                    <?php }elseif($_GET["sheet"] == "touche"){ ?>
                        <script>
                            $(function(){
                                filterSelection('touche');
                                $("#myInout0 .mybtn").eq(0).addClass("active");
                                document.title= '銀狐白 | 產品介紹';
                            });
                        </script>
                    <?php }elseif($_GET["sheet"] == "jurassic"){ ?>
                        <script>
                            $(function(){
                                filterSelection('jurassic');
                                $("#myInout0 .mybtn").eq(0).addClass("active");
                                document.title= '侏儸紀系列 | 產品介紹';
                            });
                        </script>
                    <?php }elseif($_GET["sheet"] == "magnetic"){ ?>
                        <script>
                            $(function(){
                                filterSelection('magnetic');
                                $("#myInout0 .mybtn").eq(0).addClass("active");
                                document.title= '鏽瓷系列 | 產品介紹';
                            });
                        </script>
                    <?php }elseif($_GET["sheet"] == "palladium"){ ?>
                        <script>
                            $(function(){
                                filterSelection('palladium');
                                $("#myInout0 .mybtn").eq(0).addClass("active");
                                document.title= '鐵鏽系列 | 產品介紹';
                            });
                        </script>
                    <?php }elseif($_GET["sheet"] == "ambrato"){ ?>
                        <script>
                            $(function(){
                                filterSelection('ambrato');
                                $("#myInout0 .mybtn").eq(0).addClass("active");
                                document.title= '伯爵系列 | 產品介紹';
                            });
                        </script>
                    <?php }elseif($_GET["sheet"] == "afion"){ ?>
                        <script>
                            $(function(){
                                filterSelection('afion');
                                $("#myInout0 .mybtn").eq(0).addClass("active");
                                document.title= '豐沙爾系列 | 產品介紹';
                            });
                        </script>
                    <?php }elseif($_GET["sheet"] == "naxos"){ ?>
                        <script>
                            $(function(){
                                filterSelection('naxos');
                                $("#myInout0 .mybtn").eq(0).addClass("active");
                                document.title= '納克索系列 | 產品介紹';
                            });
                        </script>
                    <?php }elseif($_GET["sheet"] == "pompeia"){ ?>
                        <script>
                            $(function(){
                                filterSelection('pompeia');
                                $("#myInout0 .mybtn").eq(0).addClass("active");
                                document.title= '洛芙特灰系列 | 產品介紹';
                            });
                        </script>
                    <?php }elseif($_GET["sheet"] == "agathos"){ ?>
                        <script>
                            $(function(){
                                filterSelection('agathos');
                                $("#myInout0 .mybtn").eq(0).addClass("active");
                                document.title= '阿嘉莎系列 | 產品介紹';
                            });
                        </script>
                    <?php }elseif($_GET["sheet"] == "calacatta"){ ?>
                        <script>
                            $(function(){
                                filterSelection('calacatta');
                                $("#myInout0 .mybtn").eq(0).addClass("active");
                                document.title= 'Calacatta系列 | 產品介紹';
                            });
                        </script>
                    <?php }elseif($_GET["sheet"] == "jasper"){ ?>
                        <script>
                            $(function(){
                                filterSelection('jasper');
                                $("#myInout0 .mybtn").eq(0).addClass("active");
                                document.title= '賈斯柏 | 產品介紹';
                            });
                        </script>
                    <?php }elseif($_GET["sheet"] == "iseo"){ ?>
                        <script>
                            $(function(){
                                filterSelection('iseo');
                                $("#myInout0 .mybtn").eq(0).addClass("active");
                                document.title= '伊西歐 | 產品介紹';
                            });
                        </script>
                    <?php }elseif($_GET["sheet"] == "petra"){ ?>
                        <script>
                            $(function(){
                                filterSelection('petra');
                                $("#myInout0 .mybtn").eq(0).addClass("active");
                                document.title= '佩特拉 | 產品介紹';
                            });
                        </script>
                    <?php }elseif($_GET["sheet"] == "azalai"){ ?>
                        <script>
                            $(function(){
                                filterSelection('azalai');
                                $("#myInout0 .mybtn").eq(0).addClass("active");
                                document.title= '聖羅蘭 | 產品介紹';
                            });
                        </script>
                    <?php }elseif($_GET["sheet"] == "arizona"){ ?>
                        <script>
                            $(function(){
                                filterSelection('arizona');
                                $("#myInout0 .mybtn").eq(0).addClass("active");
                                document.title= '亞利桑納 | 產品介紹';
                            });
                        </script>
                    <?php }elseif($_GET["sheet"] == "fusion"){ ?>
                        <script>
                            $(function(){
                                filterSelection('fusion');
                                $("#myInout0 .mybtn").eq(0).addClass("active");
                                document.title= '錦繡綠 | 產品介紹';
                            });
                        </script>
                    <?php }elseif($_GET["sheet"] == "pandora"){ ?>
                        <script>
                            $(function(){
                                filterSelection('pandora');
                                $("#myInout0 .mybtn").eq(0).addClass("active");
                                document.title= '潘朵拉系列 | 產品介紹';
                            });
                        </script>
                    <?php }elseif($_GET["sheet"] == "portobello"){ ?>
                        <script>
                            $(function(){
                                filterSelection('portobello');
                                $("#myInout0 .mybtn").eq(0).addClass("active");
                                document.title= '波多貝羅 | 產品介紹';
                            });
                        </script>
                    <?php }elseif($_GET["sheet"] == "paonazzo"){ ?>
                        <script>
                            $(function(){
                                filterSelection('paonazzo');
                                $("#myInout0 .mybtn").eq(0).addClass("active");
                                document.title= '鎏金白 | 產品介紹';
                            });
                        </script>
                    <?php }elseif($_GET["sheet"] == "patagonia"){ ?>
                        <script>
                            $(function(){
                                filterSelection('patagonia');
                                $("#myInout0 .mybtn").eq(0).addClass("active");
                                document.title= '夢蝶 | 產品介紹';
                            });
                        </script>
                    <?php }elseif($_GET["sheet"] == "eternal"){ ?>
                        <script>
                            $(function(){
                                filterSelection('eternal');
                                $("#myInout0 .mybtn").eq(0).addClass("active");
                                document.title= '星空 | 產品介紹';
                            });
                        </script>
                    <?php }elseif($_GET["sheet"] == "cementproject"){ ?>
                        <script>
                            $(function(){
                                filterSelection('cementproject');
                                $("#myInout0 .mybtn").eq(0).addClass("active");
                                document.title= '廊香系列 | 產品介紹';
                            });
                        </script>
                    <?php }elseif($_GET["sheet"] == "herbarium"){ ?>
                        <script>
                            $(function(){
                                filterSelection('herbarium');
                                $("#myInout0 .mybtn").eq(0).addClass("active");
                                document.title= '蔓陀羅 | 產品介紹';
                            });
                        </script>
                    <?php }elseif($_GET["sheet"] == "house"){ ?>
                        <script>
                            $(function(){
                                filterSelection('house');
                                $("#myInout0 .mybtn").eq(0).addClass("active");
                                document.title= '小房子 | 產品介紹';
                            });
                        </script>
                    <?php }elseif($_GET["sheet"] == "incertum"){ ?>
                        <script>
                            $(function(){
                                filterSelection('incertum');
                                $("#myInout0 .mybtn").eq(0).addClass("active");
                                document.title= '幾何 | 產品介紹';
                            });
                        </script>
                    <?php }elseif($_GET["sheet"] == "preston"){ ?>
                        <script>
                            $(function(){
                                filterSelection('preston');
                                $("#myInout0 .mybtn").eq(0).addClass("active");
                                document.title= '布蕾斯白 | 產品介紹';
                            });
                        </script>
                    <?php }elseif($_GET["sheet"] == "icaro"){ ?>
                        <script>
                            $(function(){
                                filterSelection('icaro');
                                $("#myInout0 .mybtn").eq(0).addClass("active");
                                document.title= '伊卡露系列 | 產品介紹';
                            });
                        </script>
                    <?php }elseif($_GET["sheet"] == "gmyeo"){ ?>
                        <script>
                            $(function(){
                                filterSelection('gmyeo');
                                $("#myInout0 .mybtn").eq(0).addClass("active");
                                document.title= '吉歐灰 | 產品介紹';
                            });
                        </script>
                    <?php }elseif($_GET["sheet"] == "dommel"){ ?>
                        <script>
                            $(function(){
                                filterSelection('dommel');
                                $("#myInout0 .mybtn").eq(0).addClass("active");
                                document.title= '朵美灰 | 產品介紹';
                            });
                        </script>
                    <?php }elseif($_GET["sheet"] == "ravena"){ ?>
                        <script>
                            $(function(){
                                filterSelection('ravena');
                                $("#myInout0 .mybtn").eq(0).addClass("active");
                                document.title= '拉文納 | 產品介紹';
                            });
                        </script>
                    <?php }elseif($_GET["sheet"] == "monocromo"){ ?>
                        <script>
                            $(function(){
                                filterSelection('monocromo');
                                $("#myInout0 .mybtn").eq(0).addClass("active");
                                document.title= '純系列 | 產品介紹';
                            });
                        </script>
                    <?php }elseif($_GET["sheet"] == "status"){ ?>
                        <script>
                            $(function(){
                                filterSelection('status');
                                $("#myInout0 .mybtn").eq(0).addClass("active");
                                document.title= '斯塔圖 | 產品介紹';
                            });
                        </script>
                    <?php }elseif($_GET["sheet"] == "belgium"){ ?>
                        <script>
                            $(function(){
                                filterSelection('belgium');
                                $("#myInout0 .mybtn").eq(0).addClass("active");
                                document.title= '比利時灰 | 產品介紹';
                            });
                        </script>
                    <?php }elseif($_GET["sheet"] == "oasis"){ ?>
                        <script>
                            $(function(){
                                filterSelection('oasis');
                                $("#myInout0 .mybtn").eq(0).addClass("active");
                                document.title= '卡薩布蘭卡系列 | 產品介紹';
                            });
                        </script>
                    <?php }elseif($_GET["sheet"] == "buxy"){ ?>
                        <script>
                            $(function(){
                                filterSelection('buxy');
                                $("#myInout0 .mybtn").eq(0).addClass("active");
                                document.title= '布朗系列 | 產品介紹';
                            });
                        </script>
                    <?php }elseif($_GET["sheet"] == "nuvola"){ ?>
                        <script>
                            $(function(){
                                filterSelection('nuvola');
                                $("#myInout0 .mybtn").eq(0).addClass("active");
                                document.title= '克拉克白 | 產品介紹';
                            });
                        </script>
                    <?php }elseif($_GET["sheet"] == "charm"){ ?>
                        <script>
                            $(function(){
                                filterSelection('charm');
                                $("#myInout0 .mybtn").eq(0).addClass("active");
                                document.title= 'charm Ivory | 產品介紹';
                            });
                        </script>
                    <?php }elseif($_GET["sheet"] == "terrazzo"){ ?>
                        <script>
                            $(function(){
                                filterSelection('terrazzo');
                                $("#myInout0 .mybtn").eq(0).addClass("active");
                                document.title= 'terrazzo grey | 產品介紹';
                            });
                        </script>
                    <?php }elseif($_GET["sheet"] == "amarone"){ ?>
                        <script>
                            $(function(){
                                filterSelection('amarone');
                                $("#myInout0 .mybtn").eq(0).addClass("active");
                                document.title= 'amarone系列 | 產品介紹';
                            });
                        </script>
                    <?php }elseif($_GET["sheet"] == "clinker"){ ?>
                        <script>
                            $(function(){
                                filterSelection('clinker');
                                $("#myInout0 .mybtn").eq(0).addClass("active");
                                document.title= 'clinker系列 | 產品介紹';
                            });
                        </script>
                    <?php }elseif($_GET["sheet"] == "statuario"){ ?>
                        <script>
                            $(function(){
                                filterSelection('statuario');
                                $("#myInout0 .mybtn").eq(0).addClass("active");
                                document.title= '雕刻白系列 | 產品介紹';
                            });
                        </script>
                    <?php }elseif($_GET["sheet"] == "fumysion"){ ?>
                        <script>
                            $(function(){
                                filterSelection('fumysion');
                                $("#myInout0 .mybtn").eq(0).addClass("active");
                                document.title= '流沙灰 | 產品介紹';
                            });
                        </script>
                    <?php }elseif($_GET["sheet"] == "pulis"){ ?>
                        <script>
                            $(function(){
                                filterSelection('pulis');
                                $("#myInout0 .mybtn").eq(0).addClass("active");
                                document.title= '富貴棕 | 產品介紹';
                            });
                        </script>
                    <?php }elseif($_GET["sheet"] == "onyx"){ ?>
                        <script>
                            $(function(){
                                filterSelection('onyx');
                                $("#myInout0 .mybtn").eq(0).addClass("active");
                                document.title= 'Onyx系列 | 產品介紹';
                            });
                        </script>
                    <?php }elseif($_GET["sheet"] == "pierre"){ ?>
                        <script>
                            $(function(){
                                filterSelection('pierre');
                                $("#myInout0 .mybtn").eq(0).addClass("active");
                                document.title= '皮爾黑金 | 產品介紹';
                            });
                        </script>
                    <?php }elseif($_GET["sheet"] == "amazzonite"){ ?>
                        <script>
                            $(function(){
                                filterSelection('amazzonite');
                                $("#myInout0 .mybtn").eq(0).addClass("active");
                                document.title= '亞馬遜 | 產品介紹';
                            });
                        </script>
                    <?php }elseif($_GET["sheet"] == "parker"){ ?>
                        <script>
                            $(function(){
                                filterSelection('parker');
                                $("#myInout0 .mybtn").eq(0).addClass("active");
                                document.title= '帕克白 | 產品介紹';
                            });
                        </script>
                    <?php }elseif($_GET["sheet"] == "modelo"){ ?>
                        <script>
                            $(function(){
                                filterSelection('modelo');
                                $("#myInout0 .mybtn").eq(0).addClass("active");
                                document.title= '藍鳳凰系列 | 產品介紹';
                            });
                        </script>
                    <?php }elseif($_GET["sheet"] == "venezia"){ ?>
                        <script>
                            $(function(){
                                filterSelection('venezia');
                                $("#myInout0 .mybtn").eq(0).addClass("active");
                                document.title= '花格子 | 產品介紹';
                            });
                        </script>
                    <?php }elseif($_GET["sheet"] == "cenerino"){ ?>
                        <script>
                            $(function(){
                                filterSelection('cenerino');
                                $("#myInout0 .mybtn").eq(0).addClass("active");
                                document.title= '卡拉灰 | 產品介紹';
                            });
                        </script>
                    <?php }elseif($_GET["sheet"] == "marquina"){ ?>
                        <script>
                            $(function(){
                                filterSelection('marquina');
                                $("#myInout0 .mybtn").eq(0).addClass("active");
                                document.title= '馬奎納黑 | 產品介紹';
                            });
                        </script>
                    <?php }elseif($_GET["sheet"] == "agata"){ ?>
                        <script>
                            $(function(){
                                filterSelection('agata');
                                $("#myInout0 .mybtn").eq(0).addClass("active");
                                document.title= '田玉系列 | 產品介紹';
                            });
                        </script>
                    <?php }elseif($_GET["trim"] == "ruina"){ ?>
                        <script>
                            $(function(){
                                filterSelection('ruina');
                                $("#myInout0 .mybtn").eq(4).addClass("active");
                                document.title= '往日系列 | 產品介紹';
                            });
                        </script>
                    <?php }elseif($_GET["trim"] == "amazon"){ ?>
                        <script>
                            $(function(){
                                filterSelection('amazon');
                                $("#myInout0 .mybtn").eq(4).addClass("active");
                                document.title= '亞馬遜系列 | 產品介紹';
                            });
                        </script>
                    <?php }elseif($_GET["trim"] == "hormigon3d"){ ?>
                        <script>
                            $(function(){
                                filterSelection('hormigon3d');
                                $("#myInout0 .mybtn").eq(4).addClass("active");
                                document.title= '洛夫灰系列 | 產品介紹';
                            });
                        </script>
                    <?php }elseif($_GET["trim"] == "barbados"){ ?>
                        <script>
                            $(function(){
                                filterSelection('barbados');
                                $("#myInout0 .mybtn").eq(4).addClass("active");
                                document.title= '劈木系列 | 產品介紹';
                            });
                        </script>
                    <?php }elseif($_GET["trim"] == "heritage"){ ?>
                        <script>
                            $(function(){
                                filterSelection('heritage');
                                $("#myInout0 .mybtn").eq(4).addClass("active");
                                document.title= '洛可可系列 | 產品介紹';
                            });
                        </script>
                    <?php }elseif($_GET["trim"] == "vintage"){ ?>
                        <script>
                            $(function(){
                                filterSelection('vintage');
                                $("#myInout0 .mybtn").eq(4).addClass("active");
                                document.title= '光陰的故事系列 | 產品介紹';
                            });
                        </script>
                    <?php }elseif($_GET["trim"] == "hormigon-plus"){ ?>
                        <script>
                            $(function(){
                                filterSelection('hormigon-plus');
                                $("#myInout0 .mybtn").eq(4).addClass("active");
                                document.title= '鏽板系列 | 產品介紹';
                            });
                        </script>
                    <?php }elseif($_GET["trim"] == "versailles"){ ?>
                        <script>
                            $(function(){
                                filterSelection('versailles');
                                $("#myInout0 .mybtn").eq(4).addClass("active");
                                document.title= '卡蘿系列 | 產品介紹';
                            });
                        </script>
                    <?php }elseif($_GET["trim"] == "forg"){ ?>
                        <script>
                            $(function(){
                                filterSelection('forg');
                                $("#myInout0 .mybtn").eq(4).addClass("active");
                                document.title= '城門系列 | 產品介紹';
                            });
                        </script>
                    <?php }elseif($_GET["trim"] == "masonry"){ ?>
                        <script>
                            $(function(){
                                filterSelection('masonry');
                                $("#myInout0 .mybtn").eq(4).addClass("active");
                                document.title= '傳說系列 | 產品介紹';
                            });
                        </script>
                    <?php }elseif($_GET["trim"] == "mayon"){ ?>
                        <script>
                            $(function(){
                                filterSelection('mayon');
                                $("#myInout0 .mybtn").eq(4).addClass("active");
                                document.title= '瑪雅系列 | 產品介紹';
                            });
                        </script>
                    <?php }elseif($_GET["sheet"] == "onice"){ ?>
                        <script>
                            $(function(){
                                filterSelection('onice');
                                $("#myInout0 .mybtn").eq(0).addClass("active");
                                document.title= '歐尼斯 | 產品介紹';
                            });
                        </script>
                    <?php }elseif($_GET["sheet"] == "lux"){ ?>
                        <script>
                            $(function(){
                                filterSelection('lux');
                                $("#myInout0 .mybtn").eq(0).addClass("active");
                                document.title= '勒克斯 | 產品介紹';
                            });
                        </script>
                    <?php }elseif($_GET["sheet"] == "sabbia"){ ?>
                        <script>
                            $(function(){
                                filterSelection('sabbia');
                                $("#myInout0 .mybtn").eq(0).addClass("active");
                                document.title= '薩比亞 | 產品介紹';
                            });
                        </script>
                    <?php }elseif($_GET["sheet"] == "magallanes"){ ?>
                        <script>
                            $(function(){
                                filterSelection('magallanes');
                                $("#myInout0 .mybtn").eq(0).addClass("active");
                                document.title= '墨荷 | 產品介紹';
                            });
                        </script>
                    <?php }elseif($_GET["sheet"] == "luna"){ ?>
                        <script>
                            $(function(){
                                filterSelection('luna');
                                $("#myInout0 .mybtn").eq(0).addClass("active");
                                document.title= '盧那 | 產品介紹';
                            });
                        </script>
                    <?php }elseif($_GET["sheet"] == "icabluero"){ ?>
                        <script>
                            $(function(){
                                filterSelection('icabluero');
                                $("#myInout0 .mybtn").eq(0).addClass("active");
                                document.title= '伊卡洛斯 | 產品介紹';
                            });
                        </script>
                    <?php }elseif($_GET["sheet"] == "goldhard"){ ?>
                        <script>
                            $(function(){
                                filterSelection('goldhard');
                                $("#myInout0 .mybtn").eq(0).addClass("active");
                                document.title= '和田白玉 | 產品介紹';
                            });
                        </script>
                    <?php }elseif($_GET["sheet"] == "clang"){ ?>
                        <script>
                            $(function(){
                                filterSelection('clang');
                                $("#myInout0 .mybtn").eq(0).addClass("active");
                                document.title= '皮亞諾 | 產品介紹';
                            });
                        </script>
                    <?php }elseif($_GET["sheet"] == "rumble"){ ?>
                        <script>
                            $(function(){
                                filterSelection('rumble');
                                $("#myInout0 .mybtn").eq(0).addClass("active");
                                document.title= '羅德里哥 | 產品介紹';
                            });
                        </script>
                    <?php }elseif($_GET["sheet"] == "reef"){ ?>
                        <script>
                            $(function(){
                                filterSelection('reef');
                                $("#myInout0 .mybtn").eq(0).addClass("active");
                                document.title= '和闐藍玉 | 產品介紹';
                            });
                        </script>
                    <?php }elseif($_GET["sheet"] == "uluru"){ ?>
                        <script>
                            $(function(){
                                filterSelection('uluru');
                                $("#myInout0 .mybtn").eq(0).addClass("active");
                                document.title= '和氏璧 | 產品介紹';
                            });
                        </script>
                    <?php }elseif($_GET["sheet"] == "indi"){ ?>
                        <script>
                            $(function(){
                                filterSelection('indi');
                                $("#myInout0 .mybtn").eq(0).addClass("active");
                                document.title= '黃金歲月 | 產品介紹';
                            });
                        </script>
                    <?php }else{ ?>
                        <script>
                            $(function(){ 
                                // 預計顯示 很抱歉，您沒有查看目標，請點選上方產品選單或按上一頁
                            });
                        </script>
                    <?php } ?>
            </div>
            <div class="details mmm fibre">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="box ">
                            <div class="mainCarousel mainCarousel1 carousel w-10/12 max-w-5xl mx-auto">
                                <div class="carousel__slide" data-src="images/products/sheet/fibre/original/01.webp" data-fancybox="gallery1"> <!-- 在class="carousel__slide"此tag加入data-caption="這裡可出現文字" -->
                                    <img class="img-fluid" src="images/products/sheet/fibre/mainnail/01.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/fibre/original/02.webp" data-fancybox="gallery1">
                                    <img class="img-fluid" src="images/products/sheet/fibre/mainnail/02.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/fibre/original/03.webp" data-fancybox="gallery1">
                                    <img class="img-fluid" src="images/products/sheet/fibre/mainnail/03.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/fibre/original/04.webp" data-fancybox="gallery1">
                                    <img class="img-fluid" src="images/products/sheet/fibre/mainnail/04.webp">
                                </div>
                                
                            </div>
                            <div class="thumbCarousel thumbCarousel1 carousel max-w-xl mx-auto">
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/fibre/thumbnail/01.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/fibre/thumbnail/02.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/fibre/thumbnail/03.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/fibre/thumbnail/04.webp">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul class="breadcrumb">
                            <li><a href="index.php"><span class="material-symbols-rounded">home</span>首頁</a></li>
                            <li><a href="products.php?category=sheet">產品</a></li>
                            <li><a href="products.php?category=sheet">薄板</a></li>
                            <li><a href="products.php?type=monochrome">純色</a></li>
                        </ul>
                        <img src="images/about/corner.svg" alt="α-corner" title="品牌：可樂石">
                        <h3 title="品名：懷柏系列">懷柏系列</h3>
                        <p>款式：</p>
                        <div class="small-img">
                            <input type="radio" name="fibre" id="fibre01" value="黑">
                            <button class="check" onclick="mainCarousel1.slideTo(2)">
                                <label for="fibre01"><img src="images/products/sheet/fibre/mockup-black.webp" alt="懷柏-黑" title="規格：懷柏黑"></label>
                            </button>
                            <input type="radio" name="fibre" id="fibre02" value="白">
                            <button class="check" onclick="mainCarousel1.slideTo(3)">
                                <label for="fibre02"><img src="images/products/sheet/fibre/mockup-white.webp" alt="懷柏-白" title="規格：懷柏白"></label>
                            </button>
                        </div>
                        <p>尺寸：</p>
                        <div class="mysize">
                            <input type="radio" name="fibre-size" id="fibre-size01">
                            <button class="check">
                                <label for="fibre-size01">
                                    <div class="btn btn-secondary myautotoggle" id="fibre-sizebtn01">100×250×0.6cm 刷面</div>
                                </label>
                            </button>
                        </div>
                        <p>說明：</p>
                        <p>此系列由於照片難以呈現質感，訂購前請與鄰近經銷商預約查看實品。</p><br>
                        <form action="contact.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="products" value="details"><!-- 傳值用 -->
                            <input type="hidden" name="product-name" value="懷柏">
                            <input type="hidden" id="fibre-check-img" name="check-img">
                            <input type="hidden" name="check-size" value="100×250×0.6cm 刷面">
                            <div class="row mydescription">
                                <a class="col btn btn-secondary" href="https://drive.google.com/u/0/uc?id=1enYRJbcHyCTQq80XrRnN3QDP45cPp4A3&export=download" download="懷柏系列.zip">下載材質檔</a><!--這個路徑是夢蝶-->
                                <button class="col btn btn-secondary" type="submit">諮詢產品</button>
                            </div>
                        </form>
                        <script>
                            $(':radio[name="fibre"]').change(function (){
                                var item = $(this).val();
                                $("#fibre-check-img").attr("value",item);
                                // $("#fibre-check-size").removeAttr("value");  //單一個尺寸請註解,尺寸有2個以上不要註解
                            });
                        </script>
                    </div>
                </div>
            </div>
            <div class="details mmm morandi">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="box ">
                            <div class="mainCarousel mainCarousel2 carousel w-10/12 max-w-5xl mx-auto">
                                <div class="carousel__slide" data-src="images/products/sheet/morandi/original/Matteria Muschio Abujardado + Totem Gris Abujardado.webp" data-fancybox="gallery2">
                                    <img class="img-fluid" src="images/products/sheet/morandi/mainnail/07.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/morandi/original/The New Blacks Amaranto Natural+Moon Gris Abujardado_1.webp" data-fancybox="gallery2">
                                    <img class="img-fluid" src="images/products/sheet/morandi/mainnail/01.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/morandi/original/The New Blacks Amaranto Natural+Moon Gris Abujardado_2.webp" data-fancybox="gallery2">
                                    <img class="img-fluid" src="images/products/sheet/morandi/mainnail/02.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/morandi/original/THE NEW BLACKS CASTAGNA NATURAL.webp" data-fancybox="gallery2">
                                    <img class="img-fluid" src="images/products/sheet/morandi/mainnail/03.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/morandi/original/The New Blacks Castagna Natural_2.webp" data-fancybox="gallery2">
                                    <img class="img-fluid" src="images/products/sheet/morandi/mainnail/04.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/morandi/original/The New Blacks Muschio Natural +  ITOP & Hydra Larsen Super Blanco-Gris Natural_1.webp" data-fancybox="gallery2">
                                    <img class="img-fluid" src="images/products/sheet/morandi/mainnail/05.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/morandi/original/The New Blacks Muschio Natural +  ITOP & Hydra Larsen Super Blanco-Gris Natural_2.webp" data-fancybox="gallery2">
                                    <img class="img-fluid" src="images/products/sheet/morandi/mainnail/06.webp">
                                </div>
                                
                                <div class="carousel__slide" data-src="images/products/sheet/morandi/original/MATERIA MUSCHIO.webp" data-fancybox="gallery2">
                                    <img class="img-fluid" src="images/products/sheet/morandi/mainnail/08.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/morandi/original/THE NEW BLACKS AMARANTO NATURAL.webp" data-fancybox="gallery2">
                                    <img class="img-fluid" src="images/products/sheet/morandi/mainnail/09.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/morandi/original/THE NEW BLACKS CASTAGNA NATURAL-1.webp" data-fancybox="gallery2">
                                    <img class="img-fluid" src="images/products/sheet/morandi/mainnail/10.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/morandi/original/THE NEW BLACKS MUSCHIO NATURAL.webp" data-fancybox="gallery2">
                                    <img class="img-fluid" src="images/products/sheet/morandi/mainnail/11.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/morandi/original/THE NEW BLACKS PRUGNA NATURAL.webp" data-fancybox="gallery2">
                                    <img class="img-fluid" src="images/products/sheet/morandi/mainnail/12.webp">
                                </div>
                            </div>
                            <div class="thumbCarousel thumbCarousel2 carousel max-w-xl mx-auto">
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/morandi/thumbnail/07.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/morandi/thumbnail/01.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/morandi/thumbnail/02.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/morandi/thumbnail/03.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/morandi/thumbnail/04.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/morandi/thumbnail/05.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/morandi/thumbnail/06.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/morandi/thumbnail/08.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/morandi/thumbnail/09.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/morandi/thumbnail/10.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/morandi/thumbnail/11.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/morandi/thumbnail/12.webp">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul class="breadcrumb">
                            <li><a href="index.php"><span class="material-symbols-rounded">home</span>首頁</a></li>
                            <li><a href="products.php?category=sheet">產品</a></li>
                            <li><a href="products.php?category=sheet">薄板</a></li>
                            <li><a href="products.php?type=monochrome">純色</a></li>
                        </ul>
                        <img src="images/about/corner.svg" alt="α-corner" title="品牌：可樂石">
                        <h3 title="品名：莫蘭迪系列">莫蘭迪系列</h3>
                        <!-- <p class="subtitle">（這區塊為假文，功用為撰寫 產品特色、SEO，約為50~70字） 公告加上對方做法製造商機是他，一旦現象廠商奧客事件圖文團隊，中學求助專業臨時，領先有着讓我意大利之。<span class="badge badge-secondary">#大size磁磚</span> <span class="badge badge-secondary">#薄板</span> <span class="badge badge-secondary">#莫蘭迪</span></p> -->
                        <p>款式：</p>
                        <div class="small-img">
                            <input type="radio" name="morandi" id="morandi01" value="松濤">
                            <button class="check" onclick="mainCarousel2.slideTo(7)">
                                <label for="morandi01"><img class="morandi-img01" src="images/products/sheet/morandi/mockup-pine.webp" alt="莫蘭迪-松濤" title="規格：松濤"></label>
                            </button>
                            <input type="radio" name="morandi" id="morandi02" value="酒紅">
                            <button class="check" onclick="mainCarousel2.slideTo(8)">
                                <label for="morandi02"><img class="morandi-img02" src="images/products/sheet/morandi/mockup-claret.webp" alt="莫蘭迪-酒紅" title="規格：酒紅"></label>
                            </button>
                            <input type="radio" name="morandi" id="morandi03" value="可可">
                            <button class="check" onclick="mainCarousel2.slideTo(9)">
                                <label for="morandi03"><img class="morandi-img03" src="images/products/sheet/morandi/mockup-cocoa.webp" alt="莫蘭迪-可可" title="規格：可可"></label>
                            </button>
                            <input type="radio" name="morandi" id="morandi04" value="橄欖">
                            <button class="check" onclick="mainCarousel2.slideTo(10)">
                                <label for="morandi04"><img class="morandi-img04" src="images/products/sheet/morandi/mockup-olives.webp" alt="莫蘭迪-橄欖" title="規格：橄欖"></label>
                            </button>
                            <input type="radio" name="morandi" id="morandi05" value="海洋">
                            <button class="check" onclick="mainCarousel2.slideTo(11)">
                                <label for="morandi05"><img class="morandi-img05" src="images/products/sheet/morandi/mockup-ocean.webp" alt="莫蘭迪-海洋" title="規格：海洋"></label>
                            </button>
                        </div>
                        <p>尺寸：</p>
                        <div class="mysize">
                            <input type="radio" name="morandi-size" id="morandi-size01" value="160×320×0.6cm 霧面"><!-- 若加disabled 加在radio -->
                            <button class="check">
                                <label for="morandi-size01">
                                    <div class="btn btn-secondary"id="morandi-sizebtn01">160×320×0.6cm 霧面</div>
                                </label>
                            </button>
                            <input type="radio" name="morandi-size" id="morandi-size02" value="100×250×0.6cm 霧面">
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
                        <form action="contact.php" method="post" enctype="multipart/form-data"><!-- ?pro-d=morandi -->
                            <input type="hidden" name="products" value="details"><!-- 傳值用 -->
                            <input type="hidden" name="product-name" value="莫蘭迪">
                            <input type="hidden" id="morandi-check-img" name="check-img">
                            <input type="hidden" id="morandi-check-size" name="check-size">
                            <div class="row mydescription">
                                <a class="col btn btn-secondary" href="https://drive.google.com/u/0/uc?id=1tE_3IXsUH5wYMmMDKh9pA6yXsqGPKjDx&export=download">下載材質檔</a>
                                <button class="col btn btn-secondary" type="submit">諮詢產品</button>
                            </div>
                        </form>
                        <script>
                        $(':radio[name="morandi-size"]').change(function (){
                            var size = $(this).val();
                            $("#morandi-check-size").attr("value",size);
                        });
                            
                        $(':radio[name="morandi"]').change(function (){
                            var item = $(this).val();
                            $("#morandi-check-img").attr("value",item);
                            $("#morandi-check-size").removeAttr("value");

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
                            }
                        });
                        </script>
                    </div>
                </div>
            </div>
            <div class="details mmm geo">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="box ">
                            <div class="mainCarousel mainCarousel3 carousel w-10/12 max-w-5xl mx-auto">
                                <div class="carousel__slide" data-src="images/products/sheet/geo/original/Geo Crema Bush-hammered_1.webp" data-fancybox="gallery3">
                                    <img class="img-fluid" src="images/products/sheet/geo/mainnail/01.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/geo/original/Geo Crema Bush-hammered_2.webp" data-fancybox="gallery3">
                                    <img class="img-fluid" src="images/products/sheet/geo/mainnail/02.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/geo/original/Geo Crema Bush-hammered_3.webp" data-fancybox="gallery3">
                                    <img class="img-fluid" src="images/products/sheet/geo/mainnail/03.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/geo/original/Geo Crema Bush-hammered_4.webp" data-fancybox="gallery3">
                                    <img class="img-fluid" src="images/products/sheet/geo/mainnail/04.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/geo/original/Geo Crema Bush-hammered_5.webp" data-fancybox="gallery3">
                                    <img class="img-fluid" src="images/products/sheet/geo/mainnail/05.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/geo/original/GEO CREMA L1.webp" data-fancybox="gallery3">
                                    <img class="img-fluid" src="images/products/sheet/geo/mainnail/06.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/geo/original/GEO CREMA L2.webp" data-fancybox="gallery3">
                                    <img class="img-fluid" src="images/products/sheet/geo/mainnail/07.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/geo/original/GEO CREMA L3.webp" data-fancybox="gallery3">
                                    <img class="img-fluid" src="images/products/sheet/geo/mainnail/08.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/geo/original/GEO CREMA L4.webp" data-fancybox="gallery3">
                                    <img class="img-fluid" src="images/products/sheet/geo/mainnail/09.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/geo/original/GEO CREMA L5.webp" data-fancybox="gallery3">
                                    <img class="img-fluid" src="images/products/sheet/geo/mainnail/10.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/geo/original/GEO CREMA L6.webp" data-fancybox="gallery3">
                                    <img class="img-fluid" src="images/products/sheet/geo/mainnail/11.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/geo/original/GEO CREMA L7.webp" data-fancybox="gallery3">
                                    <img class="img-fluid" src="images/products/sheet/geo/mainnail/12.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/geo/original/GEO CREMA L8.webp" data-fancybox="gallery3">
                                    <img class="img-fluid" src="images/products/sheet/geo/mainnail/13.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/geo/original/Geo Gris Bush-hammered + Foster Camel Natural.webp" data-fancybox="gallery3">
                                    <img class="img-fluid" src="images/products/sheet/geo/mainnail/14.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/geo/original/Geo Gris Bush-hammered + Masai Blanco Plus Abujardado.webp" data-fancybox="gallery3">
                                    <img class="img-fluid" src="images/products/sheet/geo/mainnail/15.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/geo/original/Geo Gris Bush-hammered_1.webp" data-fancybox="gallery3">
                                    <img class="img-fluid" src="images/products/sheet/geo/mainnail/16.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/geo/original/Geo Gris Bush-hammered_3.webp" data-fancybox="gallery3">
                                    <img class="img-fluid" src="images/products/sheet/geo/mainnail/17.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/geo/original/Geo Gris Bush-hammered_4.webp" data-fancybox="gallery3">
                                    <img class="img-fluid" src="images/products/sheet/geo/mainnail/18.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/geo/original/Geo Gris Bush-hammered_5.webp" data-fancybox="gallery3">
                                    <img class="img-fluid" src="images/products/sheet/geo/mainnail/19.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/geo/original/Geo Gris Bush-hammered_6.webp" data-fancybox="gallery3">
                                    <img class="img-fluid" src="images/products/sheet/geo/mainnail/20.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/geo/original/Geo Gris Bush-hammered_7.webp" data-fancybox="gallery3">
                                    <img class="img-fluid" src="images/products/sheet/geo/mainnail/21.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/geo/original/Storm Negro Natural + Iseo Gris Abujardado + Geo Gris Abujardado.webp" data-fancybox="gallery3">
                                    <img class="img-fluid" src="images/products/sheet/geo/mainnail/22.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/geo/original/GEO GRIS L1.webp" data-fancybox="gallery3">
                                    <img class="img-fluid" src="images/products/sheet/geo/mainnail/23.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/geo/original/GEO GRIS L2.webp" data-fancybox="gallery3">
                                    <img class="img-fluid" src="images/products/sheet/geo/mainnail/24.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/geo/original/GEO GRIS L3.webp" data-fancybox="gallery3">
                                    <img class="img-fluid" src="images/products/sheet/geo/mainnail/25.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/geo/original/GEO GRIS L4.webp" data-fancybox="gallery3">
                                    <img class="img-fluid" src="images/products/sheet/geo/mainnail/26.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/geo/original/GEO GRIS L5.webp" data-fancybox="gallery3">
                                    <img class="img-fluid" src="images/products/sheet/geo/mainnail/27.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/geo/original/GEO GRIS L6.webp" data-fancybox="gallery3">
                                    <img class="img-fluid" src="images/products/sheet/geo/mainnail/28.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/geo/original/GEO GRIS L7.webp" data-fancybox="gallery3">
                                    <img class="img-fluid" src="images/products/sheet/geo/mainnail/29.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/geo/original/GEO GRIS L8.webp" data-fancybox="gallery3">
                                    <img class="img-fluid" src="images/products/sheet/geo/mainnail/30.webp">
                                </div>
                            </div>
                            <div class="thumbCarousel thumbCarousel3 carousel max-w-xl mx-auto">
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/geo/thumbnail/01.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/geo/thumbnail/02.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/geo/thumbnail/03.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/geo/thumbnail/04.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/geo/thumbnail/05.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/geo/thumbnail/06.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/geo/thumbnail/07.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/geo/thumbnail/08.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/geo/thumbnail/09.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/geo/thumbnail/10.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/geo/thumbnail/11.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/geo/thumbnail/12.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/geo/thumbnail/13.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/geo/thumbnail/14.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/geo/thumbnail/15.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/geo/thumbnail/16.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/geo/thumbnail/17.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/geo/thumbnail/18.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/geo/thumbnail/19.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/geo/thumbnail/20.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/geo/thumbnail/21.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/geo/thumbnail/22.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/geo/thumbnail/23.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/geo/thumbnail/24.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/geo/thumbnail/25.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/geo/thumbnail/26.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/geo/thumbnail/27.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/geo/thumbnail/28.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/geo/thumbnail/29.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/geo/thumbnail/30.webp">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul class="breadcrumb">
                            <li><a href="index.php"><span class="material-symbols-rounded">home</span>首頁</a></li>
                            <li><a href="products.php?category=sheet">產品</a></li>
                            <li><a href="products.php?category=sheet">薄板</a></li>
                            <li><a href="products.php?type=slate">板岩</a></li>
                        </ul>
                        <img src="images/about/corner.svg" alt="α-corner" title="品牌：可樂石">
                        <h3 title="品名：洞石系列">洞石系列</h3>
                        <p>款式：</p>
                        <div class="small-img">
                            <input type="radio" name="geo" id="geo01" value="米">
                            <button class="check" onclick="mainCarousel3.slideTo(5)">
                                <label for="geo01"><img class="geo-img01" src="images/products/sheet/geo/mockup-crema.webp" alt="米洞石" title="規格：米"></label>
                            </button>
                            <input type="radio" name="geo" id="geo02" value="深棕">
                            <button class="check" onclick="mainCarousel3.slideTo(22)">
                                <label for="geo02"><img class="geo-img02" src="images/products/sheet/geo/mockup-gris.webp" alt="深棕洞石" title="規格：深棕"></label>
                            </button>
                        </div>
                        <p>尺寸：</p>
                        <div class="mysize">
                            <input type="radio" name="geo-size" id="geo-size01" value="100×250×0.6cm 刷面"><!-- 若加disabled 加在radio -->
                            <button class="check">
                                <label for="geo-size01">
                                    <div class="btn btn-secondary"id="geo-sizebtn01">100×250×0.6cm 刷面</div>
                                </label>
                            </button>
                            
                        </div>
                        <form action="contact.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="products" value="details"><!-- 傳值用 -->
                            <input type="hidden" name="product-name" value="洞石">
                            <input type="hidden" id="geo-check-img" name="check-img">
                            <input type="hidden" id="geo-check-size" name="check-size">
                            <div class="row mydescription">
                                <a class="col btn btn-secondary" href="https://drive.google.com/u/0/uc?id=1dBvNqrVU7BLfLIYlplCUs8u6yH19AcnF&export=download ">下載材質檔</a>
                                <button class="col btn btn-secondary" type="submit">諮詢產品</button>
                            </div>
                        </form>
                        <script>
                            $(':radio[name="geo-size"]').change(function (){
                                var size = $(this).val();
                                $("#geo-check-size").attr("value",size);
                            });
                                                        
                            $(':radio[name="geo"]').change(function (){
                                var item = $(this).val();
                                $("#geo-check-img").attr("value",item);
                                // $("#geo-check-size").removeAttr("value");  //單一個尺寸請註解,尺寸有2個以上不要註解
                            });
                        </script>
                    </div>
                </div>
            </div>
            <div class="details mmm storm">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="box ">
                            <div class="mainCarousel mainCarousel4 carousel w-10/12 max-w-5xl mx-auto">
                                <div class="carousel__slide" data-src="images/products/sheet/storm/original/Storm Gris + Negro Natural_1.webp" data-fancybox="gallery4">
                                    <img class="img-fluid" src="images/products/sheet/storm/mainnail/01.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/storm/original/Storm Gris + Negro Natural_8.webp" data-fancybox="gallery4">
                                    <img class="img-fluid" src="images/products/sheet/storm/mainnail/02.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/storm/original/Storm Gris Natural + Larsen ITOP Natural.webp" data-fancybox="gallery4">
                                    <img class="img-fluid" src="images/products/sheet/storm/mainnail/03.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/storm/original/Storm Gris Natural_1.webp" data-fancybox="gallery4">
                                    <img class="img-fluid" src="images/products/sheet/storm/mainnail/04.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/storm/original/Storm Gris Natural_4.webp" data-fancybox="gallery4">
                                    <img class="img-fluid" src="images/products/sheet/storm/mainnail/05.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/storm/original/Storm Gris Natural_5.webp" data-fancybox="gallery4">
                                    <img class="img-fluid" src="images/products/sheet/storm/mainnail/06.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/storm/original/Storm Gris Natural_6.webp" data-fancybox="gallery4">
                                    <img class="img-fluid" src="images/products/sheet/storm/mainnail/07.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/storm/original/Storm Gris Natural_8.webp" data-fancybox="gallery4">
                                    <img class="img-fluid" src="images/products/sheet/storm/mainnail/08.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/storm/original/Storm Gris Natural_9.webp" data-fancybox="gallery4">
                                    <img class="img-fluid" src="images/products/sheet/storm/mainnail/09.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/storm/original/Storm Gris Natural_10.webp" data-fancybox="gallery4">
                                    <img class="img-fluid" src="images/products/sheet/storm/mainnail/10.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/storm/original/Storm Negro Natural + Storm Gris Natural_1.webp" data-fancybox="gallery4">
                                    <img class="img-fluid" src="images/products/sheet/storm/mainnail/11.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/storm/original/Storm Negro Natural + Storm Gris Natural_2.webp" data-fancybox="gallery4">
                                    <img class="img-fluid" src="images/products/sheet/storm/mainnail/12.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/storm/original/STORM GRIS NATURAL L1.webp" data-fancybox="gallery4">
                                    <img class="img-fluid" src="images/products/sheet/storm/mainnail/13.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/storm/original/STORM GRIS NATURAL L2.webp" data-fancybox="gallery4">
                                    <img class="img-fluid" src="images/products/sheet/storm/mainnail/14.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/storm/original/STORM GRIS NATURAL L3.webp" data-fancybox="gallery4">
                                    <img class="img-fluid" src="images/products/sheet/storm/mainnail/15.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/storm/original/STORM GRIS NATURAL L4.webp" data-fancybox="gallery4">
                                    <img class="img-fluid" src="images/products/sheet/storm/mainnail/16.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/storm/original/STORM GRIS NATURAL L5.webp" data-fancybox="gallery4">
                                    <img class="img-fluid" src="images/products/sheet/storm/mainnail/17.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/storm/original/STORM GRIS NATURAL L6.webp" data-fancybox="gallery4">
                                    <img class="img-fluid" src="images/products/sheet/storm/mainnail/18.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/storm/original/STORM GRIS NATURAL L7.webp" data-fancybox="gallery4">
                                    <img class="img-fluid" src="images/products/sheet/storm/mainnail/19.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/storm/original/STORM GRIS NATURAL L8.webp" data-fancybox="gallery4">
                                    <img class="img-fluid" src="images/products/sheet/storm/mainnail/20.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/storm/original/Storm Negro Natural_2.webp" data-fancybox="gallery4">
                                    <img class="img-fluid" src="images/products/sheet/storm/mainnail/21.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/storm/original/Storm Negro Natural_3.webp" data-fancybox="gallery4">
                                    <img class="img-fluid" src="images/products/sheet/storm/mainnail/22.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/storm/original/Storm Negro Natural_7.webp" data-fancybox="gallery4">
                                    <img class="img-fluid" src="images/products/sheet/storm/mainnail/23.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/storm/original/Storm Negro Natural_12.webp" data-fancybox="gallery4">
                                    <img class="img-fluid" src="images/products/sheet/storm/mainnail/24.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/storm/original/Storm Negro Natural_14.webp" data-fancybox="gallery4">
                                    <img class="img-fluid" src="images/products/sheet/storm/mainnail/25.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/storm/original/Storm Negro Natural_16.webp" data-fancybox="gallery4">
                                    <img class="img-fluid" src="images/products/sheet/storm/mainnail/26.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/storm/original/Storm Negro Natural_18.webp" data-fancybox="gallery4">
                                    <img class="img-fluid" src="images/products/sheet/storm/mainnail/27.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/storm/original/Storm Negro Natural_19.webp" data-fancybox="gallery4">
                                    <img class="img-fluid" src="images/products/sheet/storm/mainnail/28.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/storm/original/Storm Negro Natural_20.webp" data-fancybox="gallery4">
                                    <img class="img-fluid" src="images/products/sheet/storm/mainnail/29.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/storm/original/Storm Negro Natural_21.webp" data-fancybox="gallery4">
                                    <img class="img-fluid" src="images/products/sheet/storm/mainnail/30.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/storm/original/Storm Negro Natural_22.webp" data-fancybox="gallery4">
                                    <img class="img-fluid" src="images/products/sheet/storm/mainnail/31.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/storm/original/Storm Negro Natural_23.webp" data-fancybox="gallery4">
                                    <img class="img-fluid" src="images/products/sheet/storm/mainnail/32.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/storm/original/Storm Negro Natural_24.webp" data-fancybox="gallery4">
                                    <img class="img-fluid" src="images/products/sheet/storm/mainnail/33.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/storm/original/STORM NEGRO NATURAL L1.webp" data-fancybox="gallery4">
                                    <img class="img-fluid" src="images/products/sheet/storm/mainnail/34.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/storm/original/STORM NEGRO NATURAL L2.webp" data-fancybox="gallery4">
                                    <img class="img-fluid" src="images/products/sheet/storm/mainnail/35.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/storm/original/STORM NEGRO NATURAL L3.webp" data-fancybox="gallery4">
                                    <img class="img-fluid" src="images/products/sheet/storm/mainnail/36.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/storm/original/STORM NEGRO NATURAL L4.webp" data-fancybox="gallery4">
                                    <img class="img-fluid" src="images/products/sheet/storm/mainnail/37.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/storm/original/STORM NEGRO NATURAL L5.webp" data-fancybox="gallery4">
                                    <img class="img-fluid" src="images/products/sheet/storm/mainnail/38.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/storm/original/STORM NEGRO NATURAL L6.webp" data-fancybox="gallery4">
                                    <img class="img-fluid" src="images/products/sheet/storm/mainnail/39.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/storm/original/STORM NEGRO NATURAL L7.webp" data-fancybox="gallery4">
                                    <img class="img-fluid" src="images/products/sheet/storm/mainnail/40.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/storm/original/STORM NEGRO NATURAL L8.webp" data-fancybox="gallery4">
                                    <img class="img-fluid" src="images/products/sheet/storm/mainnail/41.webp">
                                </div>
                            </div>
                            <div class="thumbCarousel thumbCarousel4 carousel max-w-xl mx-auto">
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/storm/thumbnail/01.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/storm/thumbnail/02.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/storm/thumbnail/03.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/storm/thumbnail/04.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/storm/thumbnail/05.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/storm/thumbnail/06.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/storm/thumbnail/07.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/storm/thumbnail/08.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/storm/thumbnail/09.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/storm/thumbnail/10.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/storm/thumbnail/11.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/storm/thumbnail/12.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/storm/thumbnail/13.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/storm/thumbnail/14.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/storm/thumbnail/15.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/storm/thumbnail/16.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/storm/thumbnail/17.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/storm/thumbnail/18.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/storm/thumbnail/19.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/storm/thumbnail/20.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/storm/thumbnail/21.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/storm/thumbnail/22.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/storm/thumbnail/23.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/storm/thumbnail/24.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/storm/thumbnail/25.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/storm/thumbnail/26.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/storm/thumbnail/27.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/storm/thumbnail/28.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/storm/thumbnail/29.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/storm/thumbnail/30.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/storm/thumbnail/31.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/storm/thumbnail/32.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/storm/thumbnail/33.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/storm/thumbnail/34.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/storm/thumbnail/35.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/storm/thumbnail/36.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/storm/thumbnail/37.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/storm/thumbnail/38.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/storm/thumbnail/39.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/storm/thumbnail/40.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/storm/thumbnail/41.webp">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul class="breadcrumb">
                            <li><a href="index.php"><span class="material-symbols-rounded">home</span>首頁</a></li>
                            <li><a href="products.php?category=sheet">產品</a></li>
                            <li><a href="products.php?category=sheet">薄板</a></li>
                            <li><a href="products.php?type=marble">大理石</a></li>
                        </ul>
                        <img src="images/about/corner.svg" alt="α-corner" title="品牌：可樂石">
                        <h3 title="品名：旋風系列">旋風系列</h3>
                        <p>款式：</p>
                        <div class="small-img">
                            <input type="radio" name="storm" id="storm01" value="灰">
                            <button class="check" onclick="mainCarousel4.slideTo(12)">
                                <label for="storm01"><img class="storm-img01" src="images/products/sheet/storm/mockup-ash.webp" alt="灰旋風" title="規格：灰"></label>
                            </button>
                            <input type="radio" name="storm" id="storm02" value="黑">
                            <button class="check" onclick="mainCarousel4.slideTo(33)">
                                <label for="storm02"><img class="storm-img02" src="images/products/sheet/storm/mockup-black.webp" alt="黑旋風" title="規格：黑"></label>
                            </button>
                        </div>
                        <p>尺寸：</p>
                        <div class="mysize">
                            <input type="radio" name="storm-size" id="storm-size01" value="100×250×0.6cm 霧面">
                            <button class="check">
                                <label for="storm-size01">
                                    <div class="btn btn-secondary"id="storm-sizebtn01">100×250×0.6cm 霧面</div>
                                </label>
                            </button>
                        </div>
                        <form action="contact.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="products" value="details"><!-- 傳值用 -->
                            <input type="hidden" name="product-name" value="旋風">
                            <input type="hidden" id="storm-check-img" name="check-img">
                            <input type="hidden" id="storm-check-size" name="check-size">
                            <div class="row mydescription">
                                <a class="col btn btn-secondary" href="https://drive.google.com/u/0/uc?id=1H5m2t1aIIxaZn5JE8UF7C6Hzq-y3q6p3&export=download">下載材質檔</a>
                                <button class="col btn btn-secondary" type="submit">諮詢產品</button>
                            </div>
                        </form>
                        <script>
                            $(':radio[name="storm-size"]').change(function (){
                                var size = $(this).val();
                                $("#storm-check-size").attr("value",size);
                            });
                                                        
                            $(':radio[name="storm"]').change(function (){
                                var item = $(this).val();
                                $("#storm-check-img").attr("value",item);
                            });
                        </script>
                    </div>
                </div>
            </div>
            <div class="details mmm brazil">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="box ">
                            <div class="mainCarousel mainCarousel5 carousel w-10/12 max-w-5xl mx-auto">
                                <div class="carousel__slide" data-src="images/products/sheet/brazil/original/amb 07 brazil detalle.webp" data-fancybox="gallery5">
                                    <img class="img-fluid" src="images/products/sheet/brazil/mainnail/01.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/brazil/original/Brazil Super White 1200x3000 1.webp" data-fancybox="gallery5">
                                    <img class="img-fluid" src="images/products/sheet/brazil/mainnail/02.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/brazil/original/Brazil Super White 1200x3000 2.webp" data-fancybox="gallery5">
                                    <img class="img-fluid" src="images/products/sheet/brazil/mainnail/03.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/brazil/original/Brazil Super White 1200x3000 3.webp" data-fancybox="gallery5">
                                    <img class="img-fluid" src="images/products/sheet/brazil/mainnail/04.webp">
                                </div>
                            </div>
                            <div class="thumbCarousel thumbCarousel5 carousel max-w-xl mx-auto">
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/brazil/thumbnail/01.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/brazil/thumbnail/02.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/brazil/thumbnail/03.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/brazil/thumbnail/04.webp">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul class="breadcrumb">
                            <li><a href="index.php"><span class="material-symbols-rounded">home</span>首頁</a></li>
                            <li><a href="products.php?category=sheet">產品</a></li>
                            <li><a href="products.php?category=sheet">薄板</a></li>
                            <li><a href="products.php?type=marble">大理石</a></li>
                        </ul>
                        <img src="images/about/corner.svg" alt="α-corner" title="品牌：可樂石">
                        <h3 title="品名：巴西雲玉">巴西雲玉</h3>
                        <p>款式：</p>
                        <div class="small-img">
                            <input type="radio" name="brazil" id="brazil01">
                            <button class="check" onclick="mainCarousel5.slideTo(1)">
                                <label for="brazil01"><img class="brazil-img01" src="images/products/sheet/brazil/mockup-one.webp" alt="巴西雲玉" title="規格：單一款"></label>
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
                        <form action="contact.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="products" value="details"><!-- 傳值用 -->
                            <input type="hidden" name="product-name" value="巴西雲玉">
                            <input type="hidden" id="brazil-check-img" name="check-img" value="單一款">
                            <input type="hidden" id="brazil-check-size" name="check-size" value="120x300x0.6cm 霧面">
                            <div class="row mydescription">
                                <a class="col btn btn-secondary" href="https://drive.google.com/u/0/uc?id=1iDX8p0M8tiK1KfAgxiI7Vhr60vKiHmgy&export=download">下載材質檔</a>
                                <button class="col btn btn-secondary" type="submit">諮詢產品</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="details mmm umbra">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="box ">
                            <div class="mainCarousel mainCarousel6 carousel w-10/12 max-w-5xl mx-auto">
                                <div class="carousel__slide" data-src="images/products/sheet/umbra/original/Fibre Rafia Negro + Umbra Marron Abujardado.webp" data-fancybox="gallery6">
                                    <img class="img-fluid" src="images/products/sheet/umbra/mainnail/01.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/umbra/original/The New Blacks iTOP Castagna Abujardado + Umbra Marron Abujardado_1.webp" data-fancybox="gallery6">
                                    <img class="img-fluid" src="images/products/sheet/umbra/mainnail/02.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/umbra/original/The New Blacks iTOP Castagna Abujardado + Umbra Marron Abujardado_2.webp" data-fancybox="gallery6">
                                    <img class="img-fluid" src="images/products/sheet/umbra/mainnail/03.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/umbra/original/Umbra Marron Abujardado_1.webp" data-fancybox="gallery6">
                                    <img class="img-fluid" src="images/products/sheet/umbra/mainnail/04.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/umbra/original/Umbra Marron Abujardado_2.webp" data-fancybox="gallery6">
                                    <img class="img-fluid" src="images/products/sheet/umbra/mainnail/05.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/umbra/original/Umbra Marron Abujardado_3.webp" data-fancybox="gallery6">
                                    <img class="img-fluid" src="images/products/sheet/umbra/mainnail/06.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/umbra/original/Umbra Marron Abujardado_4.webp" data-fancybox="gallery6">
                                    <img class="img-fluid" src="images/products/sheet/umbra/mainnail/07.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/umbra/original/Umbra Marron Abujardado_5.webp" data-fancybox="gallery6">
                                    <img class="img-fluid" src="images/products/sheet/umbra/mainnail/08.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/umbra/original/Umbra Marron Non-slip.webp" data-fancybox="gallery6">
                                    <img class="img-fluid" src="images/products/sheet/umbra/mainnail/09.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/umbra/original/UMBRA MARRON L1.webp" data-fancybox="gallery6">
                                    <img class="img-fluid" src="images/products/sheet/umbra/mainnail/10.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/umbra/original/UMBRA MARRON L2.webp" data-fancybox="gallery6">
                                    <img class="img-fluid" src="images/products/sheet/umbra/mainnail/11.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/umbra/original/UMBRA MARRON L3.webp" data-fancybox="gallery6">
                                    <img class="img-fluid" src="images/products/sheet/umbra/mainnail/12.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/umbra/original/UMBRA MARRON L4.webp" data-fancybox="gallery6">
                                    <img class="img-fluid" src="images/products/sheet/umbra/mainnail/13.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/umbra/original/UMBRA MARRON L5.webp" data-fancybox="gallery6">
                                    <img class="img-fluid" src="images/products/sheet/umbra/mainnail/14.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/umbra/original/UMBRA MARRON L6.webp" data-fancybox="gallery6">
                                    <img class="img-fluid" src="images/products/sheet/umbra/mainnail/15.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/umbra/original/UMBRA MARRON L7.webp" data-fancybox="gallery6">
                                    <img class="img-fluid" src="images/products/sheet/umbra/mainnail/16.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/umbra/original/UMBRA MARRON L8.webp" data-fancybox="gallery6">
                                    <img class="img-fluid" src="images/products/sheet/umbra/mainnail/17.webp">
                                </div>
                            </div>
                            <div class="thumbCarousel thumbCarousel6 carousel max-w-xl mx-auto">
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/umbra/thumbnail/01.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/umbra/thumbnail/02.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/umbra/thumbnail/03.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/umbra/thumbnail/04.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/umbra/thumbnail/05.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/umbra/thumbnail/06.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/umbra/thumbnail/07.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/umbra/thumbnail/08.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/umbra/thumbnail/09.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/umbra/thumbnail/10.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/umbra/thumbnail/11.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/umbra/thumbnail/12.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/umbra/thumbnail/13.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/umbra/thumbnail/14.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/umbra/thumbnail/15.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/umbra/thumbnail/16.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/umbra/thumbnail/17.webp">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul class="breadcrumb">
                            <li><a href="index.php"><span class="material-symbols-rounded">home</span>首頁</a></li>
                            <li><a href="products.php?category=sheet">產品</a></li>
                            <li><a href="products.php?category=sheet">薄板</a></li>
                            <li><a href="products.php?type=marble">大理石</a></li>
                        </ul>
                        <img src="images/about/corner.svg" alt="α-corner" title="品牌：可樂石">
                        <h3 title="品名：安柏瑞">安柏瑞</h3>
                        <p>款式：</p>
                        <div class="small-img">
                            <input type="radio" name="umbra" id="umbra01">
                            <button class="check" onclick="mainCarousel6.slideTo(9)">
                                <label for="umbra01"><img class="umbra-img01" src="images/products/sheet/umbra/mockup-one.webp" alt="安柏瑞" title="規格：單一款"></label>
                            </button>
                        </div>
                        <p>尺寸：</p>
                        <div class="mysize">
                        <input type="radio" name="umbra-size" id="umbra-size01" value="150×320×0.6cm 刷面">
                            <button class="check">
                                <label for="umbra-size01">
                                    <div class="btn btn-secondary" id="umbra-sizebtn01">150×320×0.6cm 刷面</div>
                                </label>
                            </button>
                            <input type="radio" name="umbra-size" id="umbra-size02" value="100×250×0.6cm 刷面">
                            <button class="check">
                                <label for="umbra-size02">
                                    <div class="btn btn-secondary"id="umbra-sizebtn02">100×250×0.6cm 刷面</div>
                                </label>
                            </button>
                        </div>
                        <div class="ex" id="umbra-ex">
                            <p>說明：</p>
                            <p></p>
                        </div>
                        <form action="contact.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="products" value="details"><!-- 傳值用 -->
                            <input type="hidden" name="product-name" value="安柏瑞">
                            <input type="hidden" id="umbra-check-img" name="check-img" value="單一款">
                            <input type="hidden" id="umbra-check-size" name="check-size">
                            <div class="row mydescription">
                                <a class="col btn btn-secondary" href="https://drive.google.com/u/0/uc?id=1WrfnbE_wVsh5-SBndrCsYsPIaIBDvYCC&export=download">下載材質檔</a>
                                <button class="col btn btn-secondary" type="submit">諮詢產品</button>
                            </div>
                        </form>
                        <script>
                        $(':radio[name="umbra-size"]').change(function (){
                            var size = $(this).val();
                            $("#umbra-check-size").attr("value",size);
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
                    </div>
                </div>
            </div>
            <div class="details mmm syros">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="box ">
                            <div class="mainCarousel mainCarousel7 carousel w-10/12 max-w-5xl mx-auto">
                                <div class="carousel__slide" data-src="images/products/sheet/syros/original/Syros + Syros ITOP Super Blanco-Gris Honed Polished.webp" data-fancybox="gallery7">
                                    <img class="img-fluid" src="images/products/sheet/syros/mainnail/01.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/syros/original/Syros ITOP Super Blanco-Gris Honed Polished_10.webp" data-fancybox="gallery7">
                                    <img class="img-fluid" src="images/products/sheet/syros/mainnail/02.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/syros/original/Syros ITOP Super Blanco-Gris Honed Polished_11.webp" data-fancybox="gallery7">
                                    <img class="img-fluid" src="images/products/sheet/syros/mainnail/03.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/syros/original/Syros Super Blanco-Gris Honed Polished_1.webp" data-fancybox="gallery7">
                                    <img class="img-fluid" src="images/products/sheet/syros/mainnail/04.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/syros/original/Syros Super Blanco-Gris Honed Polished_2.webp" data-fancybox="gallery7">
                                    <img class="img-fluid" src="images/products/sheet/syros/mainnail/05.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/syros/original/Syros Super Blanco-Gris Honed Polished_3.webp" data-fancybox="gallery7">
                                    <img class="img-fluid" src="images/products/sheet/syros/mainnail/06.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/syros/original/Syros Super Blanco-Gris Honed Polished_4.webp" data-fancybox="gallery7">
                                    <img class="img-fluid" src="images/products/sheet/syros/mainnail/07.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/syros/original/Syros Super Blanco-Gris Honed Polished_5.webp" data-fancybox="gallery7">
                                    <img class="img-fluid" src="images/products/sheet/syros/mainnail/08.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/syros/original/Syros Super Blanco-Gris Honed Polished_6.webp" data-fancybox="gallery7">
                                    <img class="img-fluid" src="images/products/sheet/syros/mainnail/09.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/syros/original/Syros Super Blanco-Gris Honed Polished_7.webp" data-fancybox="gallery7">
                                    <img class="img-fluid" src="images/products/sheet/syros/mainnail/10.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/syros/original/Syros Super Blanco-Gris Honed Polished_8.webp" data-fancybox="gallery7">
                                    <img class="img-fluid" src="images/products/sheet/syros/mainnail/11.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/syros/original/Syros Super Blanco-Gris Honed Polished_9.webp" data-fancybox="gallery7">
                                    <img class="img-fluid" src="images/products/sheet/syros/mainnail/12.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/syros/original/SYROS SUPER BLANCO-GRIS NATURAL L1.webp" data-fancybox="gallery7">
                                    <img class="img-fluid" src="images/products/sheet/syros/mainnail/13.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/syros/original/SYROS SUPER BLANCO-GRIS NATURAL L2.webp" data-fancybox="gallery7">
                                    <img class="img-fluid" src="images/products/sheet/syros/mainnail/14.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/syros/original/SYROS SUPER BLANCO-GRIS NATURAL L3.webp" data-fancybox="gallery7">
                                    <img class="img-fluid" src="images/products/sheet/syros/mainnail/15.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/syros/original/SYROS SUPER BLANCO-GRIS NATURAL L4.webp" data-fancybox="gallery7">
                                    <img class="img-fluid" src="images/products/sheet/syros/mainnail/16.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/syros/original/SYROS SUPER BLANCO-GRIS NATURAL L5.webp" data-fancybox="gallery7">
                                    <img class="img-fluid" src="images/products/sheet/syros/mainnail/17.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/syros/original/SYROS SUPER BLANCO-GRIS NATURAL L6.webp" data-fancybox="gallery7">
                                    <img class="img-fluid" src="images/products/sheet/syros/mainnail/18.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/syros/original/SYROS SUPER BLANCO-GRIS NATURAL L7.webp" data-fancybox="gallery7">
                                    <img class="img-fluid" src="images/products/sheet/syros/mainnail/19.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/syros/original/SYROS SUPER BLANCO-GRIS NATURAL L8.webp" data-fancybox="gallery7">
                                    <img class="img-fluid" src="images/products/sheet/syros/mainnail/20.webp">
                                </div>
                            </div>
                            <div class="thumbCarousel thumbCarousel7 carousel max-w-xl mx-auto">
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/syros/thumbnail/01.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/syros/thumbnail/02.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/syros/thumbnail/03.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/syros/thumbnail/04.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/syros/thumbnail/05.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/syros/thumbnail/06.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/syros/thumbnail/07.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/syros/thumbnail/08.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/syros/thumbnail/09.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/syros/thumbnail/10.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/syros/thumbnail/11.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/syros/thumbnail/12.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/syros/thumbnail/13.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/syros/thumbnail/14.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/syros/thumbnail/15.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/syros/thumbnail/16.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/syros/thumbnail/17.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/syros/thumbnail/18.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/syros/thumbnail/19.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/syros/thumbnail/20.webp">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul class="breadcrumb">
                            <li><a href="index.php"><span class="material-symbols-rounded">home</span>首頁</a></li>
                            <li><a href="products.php?category=sheet">產品</a></li>
                            <li><a href="products.php?category=sheet">薄板</a></li>
                            <li><a href="products.php?type=marble">大理石</a></li>
                        </ul>
                        <img src="images/about/corner.svg" alt="α-corner" title="品牌：可樂石">
                        <h3 title="品名：希羅斯">希羅斯</h3>
                        <p>款式：</p>
                        <div class="small-img">
                            <input type="radio" name="syros" id="syros01">
                            <button class="check" onclick="mainCarousel7.slideTo(12)">
                                <label for="syros01"><img class="syros-img01" src="images/products/sheet/syros/mockup-one.webp" alt="希羅斯" title="規格：單一款"></label>
                            </button>
                        </div>
                        <p>尺寸：</p>
                        <div class="mysize">
                        <input type="radio" name="syros-size" id="syros-size01" value="150×320×0.6cm 霧面">
                            <button class="check">
                                <label for="syros-size01">
                                    <div class="btn btn-secondary" id="syros-sizebtn01">150×320×0.6cm 霧面</div>
                                </label>
                            </button>
                            <input type="radio" name="syros-size" id="syros-size02" value="100×250×0.6cm 霧面">
                            <button class="check">
                                <label for="syros-size02">
                                    <div class="btn btn-secondary"id="syros-sizebtn02">100×250×0.6cm 霧面</div>
                                </label>
                            </button>
                        </div>
                        <form action="contact.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="products" value="details"><!-- 傳值用 -->
                            <input type="hidden" name="product-name" value="希羅斯">
                            <input type="hidden" id="syros-check-img" name="check-img" value="單一款">
                            <input type="hidden" id="syros-check-size" name="check-size">
                            <div class="row mydescription">
                                <a class="col btn btn-secondary" href="https://drive.google.com/u/0/uc?id=1b4Dn4uHkcXvlMu14vQkhbZiR7mMuedqN&export=download">下載材質檔</a>
                                <button class="col btn btn-secondary" type="submit">諮詢產品</button>
                            </div>
                        </form>
                        <script>
                            $(':radio[name="syros-size"]').change(function (){
                                var size = $(this).val();
                                $("#syros-check-size").attr("value",size);
                            });
                            $(':radio[name="syros"]').change(function (){
                                $("#syros-check-size").removeAttr("value");
                            });
                        </script>
                    </div>
                </div>
            </div>
            <div class="details mmm touche">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="box ">
                            <div class="mainCarousel mainCarousel8 carousel w-10/12 max-w-5xl mx-auto">
                                <div class="carousel__slide" data-src="images/products/sheet/touche/original/Masai Piedra Natural + Touche Bookmatch Super Blanco-Gris Natural.webp" data-fancybox="gallery8">
                                    <img class="img-fluid" src="images/products/sheet/touche/mainnail/01.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/touche/original/Touche Bookmatch Super Blanco-Gris Natural.webp" data-fancybox="gallery8">
                                    <img class="img-fluid" src="images/products/sheet/touche/mainnail/02.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/touche/original/Touche Super Blanco-Gris Natural_4.webp" data-fancybox="gallery8">
                                    <img class="img-fluid" src="images/products/sheet/touche/mainnail/03.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/touche/original/Touche Super Blanco-Gris Natural_8.webp" data-fancybox="gallery8">
                                    <img class="img-fluid" src="images/products/sheet/touche/mainnail/04.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/touche/original/Touche Super Blanco-Gris Natural_12.webp" data-fancybox="gallery8">
                                    <img class="img-fluid" src="images/products/sheet/touche/mainnail/05.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/touche/original/Touche Super-Blanco Gris Natural_10.webp" data-fancybox="gallery8">
                                    <img class="img-fluid" src="images/products/sheet/touche/mainnail/06.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/touche/original/Touche Super-Blanco Gris Natural_11.webp" data-fancybox="gallery8">
                                    <img class="img-fluid" src="images/products/sheet/touche/mainnail/07.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/touche/original/TOUCHE SUPER BLANCO-GRIS  L1.webp" data-fancybox="gallery8">
                                    <img class="img-fluid" src="images/products/sheet/touche/mainnail/08.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/touche/original/TOUCHE SUPER BLANCO-GRIS  L2.webp" data-fancybox="gallery8">
                                    <img class="img-fluid" src="images/products/sheet/touche/mainnail/09.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/touche/original/TOUCHE SUPER BLANCO-GRIS  L3.webp" data-fancybox="gallery8">
                                    <img class="img-fluid" src="images/products/sheet/touche/mainnail/10.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/touche/original/TOUCHE SUPER BLANCO-GRIS  L4.webp" data-fancybox="gallery8">
                                    <img class="img-fluid" src="images/products/sheet/touche/mainnail/11.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/touche/original/TOUCHE SUPER BLANCO-GRIS  L5.webp" data-fancybox="gallery8">
                                    <img class="img-fluid" src="images/products/sheet/touche/mainnail/12.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/touche/original/TOUCHE SUPER BLANCO-GRIS  L6.webp" data-fancybox="gallery8">
                                    <img class="img-fluid" src="images/products/sheet/touche/mainnail/13.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/touche/original/TOUCHE SUPER BLANCO-GRIS  L7.webp" data-fancybox="gallery8">
                                    <img class="img-fluid" src="images/products/sheet/touche/mainnail/14.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/touche/original/TOUCHE SUPER BLANCO-GRIS  L8.webp" data-fancybox="gallery8">
                                    <img class="img-fluid" src="images/products/sheet/touche/mainnail/15.webp">
                                </div>
                            </div>
                            <div class="thumbCarousel thumbCarousel8 carousel max-w-xl mx-auto">
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/touche/thumbnail/01.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/touche/thumbnail/02.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/touche/thumbnail/03.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/touche/thumbnail/04.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/touche/thumbnail/05.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/touche/thumbnail/06.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/touche/thumbnail/07.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/touche/thumbnail/08.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/touche/thumbnail/09.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/touche/thumbnail/10.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/touche/thumbnail/11.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/touche/thumbnail/12.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/touche/thumbnail/13.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/touche/thumbnail/14.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/touche/thumbnail/15.webp">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul class="breadcrumb">
                            <li><a href="index.php"><span class="material-symbols-rounded">home</span>首頁</a></li>
                            <li><a href="products.php?category=sheet">產品</a></li>
                            <li><a href="products.php?category=sheet">薄板</a></li>
                            <li><a href="products.php?type=marble">大理石</a></li>
                        </ul>
                        <img src="images/about/corner.svg" alt="α-corner" title="品牌：可樂石">
                        <h3 title="品名：銀狐白">銀狐白</h3>
                        <p>款式：</p>
                        <div class="small-img">
                            <input type="radio" name="touche" id="touche01">
                            <button class="check" onclick="mainCarousel8.slideTo(7)">
                                <label for="touche01"><img class="touche-img01" src="images/products/sheet/touche/mockup-one.webp" alt="銀狐白" title="規格：單一款"></label>
                            </button>
                        </div>
                        <p>尺寸：</p>
                        <div class="mysize">
                        <input type="radio" name="touche-size" id="touche-size01" value="150×320×0.6cm 細磨面">
                            <button class="check">
                                <label for="touche-size01">
                                    <div class="btn btn-secondary" id="touche-sizebtn01">150×320×0.6cm 細磨面</div>
                                </label>
                            </button>
                            <input type="radio" name="touche-size" id="touche-size02" value="100×250×0.6cm 霧面">
                            <button class="check">
                                <label for="touche-size02">
                                    <div class="btn btn-secondary"id="touche-sizebtn02">100×250×0.6cm 霧面</div>
                                </label>
                            </button>
                            <!-- <input type="radio" name="touche-size" id="touche-size02">
                            <button class="check">
                                <label for="touche-size02">
                                    <div class="btn btn-secondary"id="touche-sizebtn02">100×250×0.6cm 刷面</div>
                                </label>
                            </button> -->
                        </div>
                        <p>說明：</p>
                        <p>皆為霧面 觸感不同，下載按鈕另有對稱圖檔</p>
                        <form action="contact.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="products" value="details"><!-- 傳值用 -->
                            <input type="hidden" name="product-name" value="銀狐白">
                            <input type="hidden" id="touche-check-img" name="check-img" value="單一款">
                            <input type="hidden" id="touche-check-size" name="check-size">
                            <div class="row mydescription">
                                <a class="col btn btn-secondary" href="https://drive.google.com/u/0/uc?id=1oHg459GhbpJTqkHMN_fqHZDAK7bdvL9R&export=download">下載材質檔</a>
                                <button class="col btn btn-secondary" type="submit">諮詢產品</button>
                            </div>
                        </form>
                        <script>
                            $(':radio[name="touche-size"]').change(function (){
                                var size = $(this).val();
                                $("#touche-check-size").attr("value",size);
                            });
                        </script>
                    </div>
                </div>
            </div>
            <div class="details mmm jurassic">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="box ">
                            <div class="mainCarousel mainCarousel9 carousel w-10/12 max-w-5xl mx-auto">
                                <div class="carousel__slide" data-src="images/products/sheet/jurassic/original/amb 03 jurasic_v2.webp" data-fancybox="gallery9">
                                    <img class="img-fluid" src="images/products/sheet/jurassic/mainnail/01.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/jurassic/original/Amb Jurassic Black.webp" data-fancybox="gallery9">
                                    <img class="img-fluid" src="images/products/sheet/jurassic/mainnail/02.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/jurassic/original/Detalle Salon Jurassic Black Polished 1200x2600x6.webp" data-fancybox="gallery9">
                                    <img class="img-fluid" src="images/products/sheet/jurassic/mainnail/03.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/jurassic/original/Quartzite Deluxe.webp" data-fancybox="gallery9">
                                    <img class="img-fluid" src="images/products/sheet/jurassic/mainnail/04.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/jurassic/original/Jurassic Black 1200x2600 1.webp" data-fancybox="gallery9">
                                    <img class="img-fluid" src="images/products/sheet/jurassic/mainnail/05.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/jurassic/original/Jurassic Black 1200x2600 2.webp" data-fancybox="gallery9">
                                    <img class="img-fluid" src="images/products/sheet/jurassic/mainnail/06.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/jurassic/original/Jurassic Black 1200x2600 3.webp" data-fancybox="gallery9">
                                    <img class="img-fluid" src="images/products/sheet/jurassic/mainnail/07.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/jurassic/original/Jurassic Black 1200x2600 4.webp" data-fancybox="gallery9">
                                    <img class="img-fluid" src="images/products/sheet/jurassic/mainnail/08.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/jurassic/original/Jurassic Gold Polished Decor 1200x2600 1.webp" data-fancybox="gallery9">
                                    <img class="img-fluid" src="images/products/sheet/jurassic/mainnail/09.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/jurassic/original/Jurassic Gold Polished Decor 1200x2600 2.webp" data-fancybox="gallery9">
                                    <img class="img-fluid" src="images/products/sheet/jurassic/mainnail/10.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/jurassic/original/Jurassic Gold Polished Decor 1200x2600 3.webp" data-fancybox="gallery9">
                                    <img class="img-fluid" src="images/products/sheet/jurassic/mainnail/11.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/jurassic/original/Jurassic Gold Polished Decor 1200x2600 4.webp" data-fancybox="gallery9">
                                    <img class="img-fluid" src="images/products/sheet/jurassic/mainnail/12.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/jurassic/original/QUARTZITE DELUXE R2.webp" data-fancybox="gallery9">
                                    <img class="img-fluid" src="images/products/sheet/jurassic/mainnail/13.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/jurassic/original/QUARTZITE DELUXE R3.webp" data-fancybox="gallery9">
                                    <img class="img-fluid" src="images/products/sheet/jurassic/mainnail/14.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/jurassic/original/QUARTZITE DELUXE R4.webp" data-fancybox="gallery9">
                                    <img class="img-fluid" src="images/products/sheet/jurassic/mainnail/15.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/jurassic/original/QUARTZITE DELUXE R5.webp" data-fancybox="gallery9">
                                    <img class="img-fluid" src="images/products/sheet/jurassic/mainnail/16.webp">
                                </div>
                            </div>
                            <div class="thumbCarousel thumbCarousel9 carousel max-w-xl mx-auto">
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/jurassic/thumbnail/01.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/jurassic/thumbnail/02.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/jurassic/thumbnail/03.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/jurassic/thumbnail/04.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/jurassic/thumbnail/05.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/jurassic/thumbnail/06.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/jurassic/thumbnail/07.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/jurassic/thumbnail/08.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/jurassic/thumbnail/09.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/jurassic/thumbnail/10.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/jurassic/thumbnail/11.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/jurassic/thumbnail/12.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/jurassic/thumbnail/13.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/jurassic/thumbnail/14.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/jurassic/thumbnail/15.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/jurassic/thumbnail/16.webp">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul class="breadcrumb">
                            <li><a href="index.php"><span class="material-symbols-rounded">home</span>首頁</a></li>
                            <li><a href="products.php?category=sheet">產品</a></li>
                            <li><a href="products.php?category=sheet">薄板</a></li>
                            <li><a href="products.php?type=marble">大理石</a></li>
                        </ul>
                        <img src="images/about/corner.svg" alt="α-corner" title="品牌：可樂石" id="jurassic-logo"><!-- 選擇款式時 品牌改變 -->
                        <h3 title="品名：侏儸紀系列">侏儸紀系列</h3>
                        <p>款式：</p>
                        <div class="small-img">
                            <input type="radio" name="jurassic" id="jurassic01" value="黑">
                            <button class="check" onclick="mainCarousel9.slideTo(4)">
                                <label for="jurassic01"><img class="jurassic-img01" src="images/products/sheet/jurassic/mockup-black.webp" alt="侏儸紀黑" title="規格：黑"></label>
                            </button>
                            <input type="radio" name="jurassic" id="jurassic02" value="黑-花磚">
                            <button class="check" onclick="mainCarousel9.slideTo(8)">
                                <label for="jurassic02"><img class="jurassic-img02" src="images/products/sheet/jurassic/mockup-gold.webp" alt="侏儸紀黑" title="規格：黑-花磚"></label>
                            </button>
                            <input type="radio" name="jurassic" id="jurassic03" value="灰">
                            <button class="check" onclick="mainCarousel9.slideTo(12)">
                                <label for="jurassic03"><img class="jurassic-img03" src="images/products/sheet/jurassic/mockup-gray.webp" alt="侏儸紀灰" title="規格：灰"></label>
                            </button>
                        </div>
                        <p>尺寸：</p>
                        <div class="mysize">
                        <input type="radio" name="jurassic-size" id="jurassic-size01" value="120×260×0.6cm 亮面">
                            <button class="check">
                                <label for="jurassic-size01">
                                    <div class="btn btn-secondary" id="jurassic-sizebtn01">120×260×0.6cm 亮面</div>
                                </label>
                            </button>
                            <input type="radio" name="jurassic-size" id="jurassic-size02" value="120×240×0.6cm 亮面">
                            <button class="check">
                                <label for="jurassic-size02">
                                    <div class="btn btn-secondary"id="jurassic-sizebtn02">120×240×0.6cm 亮面</div>
                                </label>
                            </button>
                        </div>
                        <div class="ex" id="jurassic-ex">
                            <p>說明：</p>
                            <p></p>
                        </div>
                        <form action="contact.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="products" value="details"><!-- 傳值用 -->
                            <input type="hidden" name="product-name" value="侏儸紀">
                            <input type="hidden" id="jurassic-check-img" name="check-img">
                            <input type="hidden" id="jurassic-check-size" name="check-size">
                            <div class="row mydescription">
                                <a class="col btn btn-secondary" href="https://drive.google.com/u/0/uc?id=1tbuLe0VglPrcZALyI-LN22ajM28xwGvt&export=download&confirm=t&uuid=042eb02e-7b19-4739-bdb2-ddca6e62d2a2">下載材質檔</a>
                                <button class="col btn btn-secondary" type="submit">諮詢產品</button>
                            </div>
                        </form>
                        <script>
                            $(':radio[name="jurassic-size"]').click(function (){
                                var size = $(this).val();
                                $("#jurassic-check-size").attr("value",size);
                            });
                            $(':radio[name="jurassic"]').change(function (){
                                var item = $(this).val();
                                $("#jurassic-check-img").attr("value",item);
                                $("#jurassic-check-size").removeAttr("value");
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
                                    // $("#myInout2 .mybtn2").removeClass("active");
                                    // $("#myInout2 .mybtn2").eq(1).addClass("active");
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
                                    $("#jurassic-ex p:nth-child(2)").css('color','#F00').html("<b>此款花磚為期貨</b>");
                                    // $("#myInout2 .mybtn2").removeClass("active");
                                    // $("#myInout2 .mybtn2").eq(1).addClass("active");
                                } else {
                                    $("#jurassic-logo").attr({
                                        'src' : 'images/about/holy.svg',
                                        'alt' : 'α-holy',
                                        'title' : '品牌：活麗石'
                                    }).css('padding','.625rem 0 .125rem');
                                    $("#jurassic-size01").attr('disabled','ture');
                                    $("#jurassic-sizebtn01").attr('title','本款未有此尺寸');
                                    $("#jurassic-size02").removeAttr('disabled');
                                    $("#jurassic-sizebtn02").removeAttr('title');
                                    $("#jurassic-ex").css({
                                        'display' : 'none'
                                    })
                                    // $("#myInout2 .mybtn2").removeClass("active");
                                    // $("#myInout2 .mybtn2").eq(3).addClass("active");
                                }
                                $("#jurassic-size01,#jurassic-size02").removeClass("active");
                            });
                        </script>
                    </div>
                </div>
            </div>
            <div class="details mmm magnetic">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="box ">
                            <div class="mainCarousel mainCarousel10 carousel w-10/12 max-w-5xl mx-auto">
                                <div class="carousel__slide" data-src="images/products/sheet/magnetic/original/amb 60x120 emerald lcp_inserto grey.webp" data-fancybox="gallery10">
                                    <img class="img-fluid" src="images/products/sheet/magnetic/mainnail/01.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/magnetic/original/MAGNETIC-EMERALD-120X270-nuovo.webp" data-fancybox="gallery10">
                                    <img class="img-fluid" src="images/products/sheet/magnetic/mainnail/02.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/magnetic/original/MAGNETIC grey 90x90 living.webp" data-fancybox="gallery10">
                                    <img class="img-fluid" src="images/products/sheet/magnetic/mainnail/03.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/magnetic/original/MAGNETIC LASTRA GREY.webp" data-fancybox="gallery10">
                                    <img class="img-fluid" src="images/products/sheet/magnetic/mainnail/04.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/magnetic/original/AMB dark grey lappato 60x60.webp" data-fancybox="gallery10">
                                    <img class="img-fluid" src="images/products/sheet/magnetic/mainnail/05.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/magnetic/original/MAGNETIC-AMB-WALL.webp" data-fancybox="gallery10">
                                    <img class="img-fluid" src="images/products/sheet/magnetic/mainnail/06.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/magnetic/original/MAGNETIC-BLUE-120X270.webp" data-fancybox="gallery10">
                                    <img class="img-fluid" src="images/products/sheet/magnetic/mainnail/07.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/magnetic/original/M. EMERALD 1.webp" data-fancybox="gallery10">
                                    <img class="img-fluid" src="images/products/sheet/magnetic/mainnail/08.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/magnetic/original/M. EMERALD 2.webp" data-fancybox="gallery10">
                                    <img class="img-fluid" src="images/products/sheet/magnetic/mainnail/09.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/magnetic/original/M. EMERALD 3.webp" data-fancybox="gallery10">
                                    <img class="img-fluid" src="images/products/sheet/magnetic/mainnail/10.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/magnetic/original/M. EMERALD 4.webp" data-fancybox="gallery10">
                                    <img class="img-fluid" src="images/products/sheet/magnetic/mainnail/11.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/magnetic/original/M. EMERALD 5.webp" data-fancybox="gallery10">
                                    <img class="img-fluid" src="images/products/sheet/magnetic/mainnail/12.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/magnetic/original/M.BLACK 1.webp" data-fancybox="gallery10">
                                    <img class="img-fluid" src="images/products/sheet/magnetic/mainnail/13.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/magnetic/original/M.BLACK 2.webp" data-fancybox="gallery10">
                                    <img class="img-fluid" src="images/products/sheet/magnetic/mainnail/14.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/magnetic/original/M.BLACK 3.webp" data-fancybox="gallery10">
                                    <img class="img-fluid" src="images/products/sheet/magnetic/mainnail/15.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/magnetic/original/M.BLACK 4.webp" data-fancybox="gallery10">
                                    <img class="img-fluid" src="images/products/sheet/magnetic/mainnail/16.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/magnetic/original/M.BROZE 1.webp" data-fancybox="gallery10">
                                    <img class="img-fluid" src="images/products/sheet/magnetic/mainnail/17.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/magnetic/original/M.BROZE 2.webp" data-fancybox="gallery10">
                                    <img class="img-fluid" src="images/products/sheet/magnetic/mainnail/18.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/magnetic/original/M.BROZE 3.webp" data-fancybox="gallery10">
                                    <img class="img-fluid" src="images/products/sheet/magnetic/mainnail/19.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/magnetic/original/M.BROZE 4.webp" data-fancybox="gallery10">
                                    <img class="img-fluid" src="images/products/sheet/magnetic/mainnail/20.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/magnetic/original/M.DARK GREY 1.webp" data-fancybox="gallery10">
                                    <img class="img-fluid" src="images/products/sheet/magnetic/mainnail/21.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/magnetic/original/M.DARK GREY 2.webp" data-fancybox="gallery10">
                                    <img class="img-fluid" src="images/products/sheet/magnetic/mainnail/22.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/magnetic/original/M.DARK GREY 3.webp" data-fancybox="gallery10">
                                    <img class="img-fluid" src="images/products/sheet/magnetic/mainnail/23.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/magnetic/original/M.DARK GREY 4.webp" data-fancybox="gallery10">
                                    <img class="img-fluid" src="images/products/sheet/magnetic/mainnail/24.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/magnetic/original/MAGNETIC BLUE 1.webp" data-fancybox="gallery10">
                                    <img class="img-fluid" src="images/products/sheet/magnetic/mainnail/25.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/magnetic/original/MAGNETIC BLUE 2.webp" data-fancybox="gallery10">
                                    <img class="img-fluid" src="images/products/sheet/magnetic/mainnail/26.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/magnetic/original/MAGNETIC BLUE 3.webp" data-fancybox="gallery10">
                                    <img class="img-fluid" src="images/products/sheet/magnetic/mainnail/27.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/magnetic/original/MAGNETIC BLUE 4.webp" data-fancybox="gallery10">
                                    <img class="img-fluid" src="images/products/sheet/magnetic/mainnail/28.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/magnetic/original/MAGNETIC GREY 1.webp" data-fancybox="gallery10">
                                    <img class="img-fluid" src="images/products/sheet/magnetic/mainnail/29.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/magnetic/original/MAGNETIC GREY 2.webp" data-fancybox="gallery10">
                                    <img class="img-fluid" src="images/products/sheet/magnetic/mainnail/30.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/magnetic/original/MAGNETIC GREY 3.webp" data-fancybox="gallery10">
                                    <img class="img-fluid" src="images/products/sheet/magnetic/mainnail/31.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/magnetic/original/MAGNETIC GREY 4.webp" data-fancybox="gallery10">
                                    <img class="img-fluid" src="images/products/sheet/magnetic/mainnail/32.webp">
                                </div>
                            </div>
                            <div class="thumbCarousel thumbCarousel10 carousel max-w-xl mx-auto">
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/magnetic/thumbnail/01.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/magnetic/thumbnail/02.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/magnetic/thumbnail/03.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/magnetic/thumbnail/04.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/magnetic/thumbnail/05.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/magnetic/thumbnail/06.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/magnetic/thumbnail/07.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/magnetic/thumbnail/08.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/magnetic/thumbnail/09.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/magnetic/thumbnail/10.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/magnetic/thumbnail/11.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/magnetic/thumbnail/12.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/magnetic/thumbnail/13.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/magnetic/thumbnail/14.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/magnetic/thumbnail/15.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/magnetic/thumbnail/16.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/magnetic/thumbnail/17.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/magnetic/thumbnail/18.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/magnetic/thumbnail/19.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/magnetic/thumbnail/20.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/magnetic/thumbnail/21.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/magnetic/thumbnail/22.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/magnetic/thumbnail/23.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/magnetic/thumbnail/24.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/magnetic/thumbnail/25.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/magnetic/thumbnail/26.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/magnetic/thumbnail/27.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/magnetic/thumbnail/28.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/magnetic/thumbnail/29.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/magnetic/thumbnail/30.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/magnetic/thumbnail/31.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/magnetic/thumbnail/32.webp">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul class="breadcrumb">
                            <li><a href="index.php"><span class="material-symbols-rounded">home</span>首頁</a></li>
                            <li><a href="products.php?category=sheet">產品</a></li>
                            <li><a href="products.php?category=sheet">薄板</a></li>
                            <li><a href="products.php?type=metallook">金屬</a></li>
                        </ul>
                        <img src="images/about/eternal.svg" alt="α-corner" title="品牌：達理石" id="magnetic-logo" style="height: 3rem;"><!-- 選擇款式時 品牌改變 -->
                        <h3 title="品名：鏽瓷系列">鏽瓷系列</h3>
                        <p>款式：</p>
                        <div class="small-img">
                            <input type="radio" name="magnetic" id="magnetic01" value="翡翠">
                            <button class="check" onclick="mainCarousel10.slideTo(7)">
                                <label for="magnetic01"><img class="magnetic-img01" src="images/products/sheet/magnetic/mockup-emerald.webp" alt="鏽瓷翡翠" title="規格：翡翠"></label>
                            </button>
                            <input type="radio" name="magnetic" id="magnetic02" value="黑">
                            <button class="check" onclick="mainCarousel10.slideTo(12)">
                                <label for="magnetic02"><img class="magnetic-img02" src="images/products/sheet/magnetic/mockup-black.webp" alt="鏽瓷黑" title="規格：黑"></label>
                            </button>
                            <input type="radio" name="magnetic" id="magnetic03" value="棕">
                            <button class="check" onclick="mainCarousel10.slideTo(16)">
                                <label for="magnetic03"><img class="magnetic-img03" src="images/products/sheet/magnetic/mockup-bronze.webp" alt="鏽瓷棕" title="規格：棕"></label>
                            </button>
                            <input type="radio" name="magnetic" id="magnetic04" value="深灰">
                            <button class="check" onclick="mainCarousel10.slideTo(20)">
                                <label for="magnetic04"><img class="magnetic-img04" src="images/products/sheet/magnetic/mockup-dark.webp" alt="鏽瓷深灰" title="規格：深灰"></label>
                            </button>
                            <input type="radio" name="magnetic" id="magnetic05" value="藍">
                            <button class="check" onclick="mainCarousel10.slideTo(24)">
                                <label for="magnetic05"><img class="magnetic-img05" src="images/products/sheet/magnetic/mockup-blue.webp" alt="鏽瓷藍" title="規格：藍"></label>
                            </button>
                            <input type="radio" name="magnetic" id="magnetic06" value="淺灰">
                            <button class="check" onclick="mainCarousel10.slideTo(28)">
                                <label for="magnetic06"><img class="magnetic-img06" src="images/products/sheet/magnetic/mockup-grey.webp" alt="鏽瓷淺灰" title="規格：淺灰"></label>
                            </button>
                        </div>
                        <p>尺寸：</p>
                        <div class="mysize">
                            <input type="radio" name="magnetic-size" id="magnetic-size01" value="120×270×0.6cm 亮面">
                            <button class="check">
                                <label for="magnetic-size01">
                                    <div class="btn btn-secondary" id="magnetic-sizebtn01">120×270×0.6cm 亮面</div>
                                </label>
                            </button>
                            <input type="radio" name="magnetic-size" id="magnetic-size02" value="120×270×0.6cm 霧面">
                            <button class="check">
                                <label for="magnetic-size02">
                                    <div class="btn btn-secondary"id="magnetic-sizebtn02">120×270×0.6cm 霧面</div>
                                </label>
                            </button>
                        </div>
                        <form action="contact.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="products" value="details"><!-- 傳值用 -->
                            <input type="hidden" name="product-name" value="鏽瓷">
                            <input type="hidden" id="magnetic-check-img" name="check-img">
                            <input type="hidden" id="magnetic-check-size" name="check-size">
                            <div class="row mydescription">
                                <a class="col btn btn-secondary" href="https://drive.google.com/u/0/uc?id=1ScaNQ-IKEpt9DYwhC01z7AiiWcSNEl7I&export=download&confirm=t&uuid=10a4c925-d5ba-431a-8ae9-8e4b2f115f0e">下載材質檔</a>
                                <button class="col btn btn-secondary" type="submit">諮詢產品</button>
                            </div>
                        </form>
                        <script>
                            $(':radio[name="magnetic-size"]').change(function (){
                                var size = $(this).val();
                                $("#magnetic-check-size").attr("value",size);
                            });
                                                        
                            $(':radio[name="magnetic"]').change(function (){
                                var item = $(this).val();
                                $("#magnetic-check-img").attr("value",item);
                                $("#magnetic-check-size").removeAttr("value");
                            });
                        </script>
                    </div>
                </div>
            </div>
            <div class="details mmm palladium">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="box ">
                            <div class="mainCarousel mainCarousel11 carousel w-10/12 max-w-5xl mx-auto">
                                <div class="carousel__slide" data-src="images/products/sheet/palladium/original/320809BE-FB00-4AE4-8258-CB92A6A5E0D0_1_105_c.webp" data-fancybox="gallery11">
                                    <img class="img-fluid" src="images/products/sheet/palladium/mainnail/01.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/palladium/original/B94D7001-03FD-4524-8D42-62C0786EE981_1_105_c.webp" data-fancybox="gallery11">
                                    <img class="img-fluid" src="images/products/sheet/palladium/mainnail/02.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/palladium/original/CEFFB13E-5BF3-4617-84C8-5DDB689E30B6_1_105_c.webp" data-fancybox="gallery11">
                                    <img class="img-fluid" src="images/products/sheet/palladium/mainnail/03.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/palladium/original/C59152C4-E45D-4EFB-A6B1-CCE8AE2C525C_1_105_c.webp" data-fancybox="gallery11">
                                    <img class="img-fluid" src="images/products/sheet/palladium/mainnail/04.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/palladium/original/Previa_Odos5 copia2 copia.webp" data-fancybox="gallery11">
                                    <img class="img-fluid" src="images/products/sheet/palladium/mainnail/05.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/palladium/original/Steel_White_1.webp" data-fancybox="gallery11">
                                    <img class="img-fluid" src="images/products/sheet/palladium/mainnail/06.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/palladium/original/778158F2-20B9-492F-ADFF-5BEE1DB7DC36_1_105_c.webp" data-fancybox="gallery11">
                                    <img class="img-fluid" src="images/products/sheet/palladium/mainnail/07.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/palladium/original/B0F2970B-4EA3-4708-A830-9B952AC77A09_1_105_c.webp" data-fancybox="gallery11">
                                    <img class="img-fluid" src="images/products/sheet/palladium/mainnail/08.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/palladium/original/C74F5811-AB9B-4DA1-A1CE-DD93FD86115F_1_105_c.webp" data-fancybox="gallery11">
                                    <img class="img-fluid" src="images/products/sheet/palladium/mainnail/09.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/palladium/original/OXIDATIO TELLURIUM 160X320.webp" data-fancybox="gallery11">
                                    <img class="img-fluid" src="images/products/sheet/palladium/mainnail/10.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/palladium/original/oxid 120x270__0016_Tellurium-rossso F1a.webp" data-fancybox="gallery11">
                                    <img class="img-fluid" src="images/products/sheet/palladium/mainnail/11.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/palladium/original/oxid 120x270__0018_Tellurium-rossso F2a.webp" data-fancybox="gallery11">
                                    <img class="img-fluid" src="images/products/sheet/palladium/mainnail/12.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/palladium/original/oxid 120x270__0021_Tellurium-rossso F3b.webp" data-fancybox="gallery11">
                                    <img class="img-fluid" src="images/products/sheet/palladium/mainnail/13.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/palladium/original/oxid 120x270__0023_Tellurium-rossso F4b.webp" data-fancybox="gallery11">
                                    <img class="img-fluid" src="images/products/sheet/palladium/mainnail/14.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/palladium/original/oxid 120x270__0025_Tellurium-rossso F5b.webp" data-fancybox="gallery11">
                                    <img class="img-fluid" src="images/products/sheet/palladium/mainnail/15.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/palladium/original/oxid 120x270__0027_Tellurium-rossso F6b.webp" data-fancybox="gallery11">
                                    <img class="img-fluid" src="images/products/sheet/palladium/mainnail/16.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/palladium/original/OXIDATIO PALLADIUM 160X320.webp" data-fancybox="gallery11">
                                    <img class="img-fluid" src="images/products/sheet/palladium/mainnail/17.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/palladium/original/Palladium-nero F1a.webp" data-fancybox="gallery11">
                                    <img class="img-fluid" src="images/products/sheet/palladium/mainnail/18.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/palladium/original/Palladium-nero F1b.webp" data-fancybox="gallery11">
                                    <img class="img-fluid" src="images/products/sheet/palladium/mainnail/19.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/palladium/original/Palladium-nero F2a.webp" data-fancybox="gallery11">
                                    <img class="img-fluid" src="images/products/sheet/palladium/mainnail/20.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/palladium/original/Palladium-nero F2b.webp" data-fancybox="gallery11">
                                    <img class="img-fluid" src="images/products/sheet/palladium/mainnail/21.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/palladium/original/Palladium-nero F3a.webp" data-fancybox="gallery11">
                                    <img class="img-fluid" src="images/products/sheet/palladium/mainnail/22.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/palladium/original/Palladium-nero F3b.webp" data-fancybox="gallery11">
                                    <img class="img-fluid" src="images/products/sheet/palladium/mainnail/23.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/palladium/original/Palladium-nero F4a.webp" data-fancybox="gallery11">
                                    <img class="img-fluid" src="images/products/sheet/palladium/mainnail/24.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/palladium/original/Palladium-nero F4b.webp" data-fancybox="gallery11">
                                    <img class="img-fluid" src="images/products/sheet/palladium/mainnail/25.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/palladium/original/Palladium-nero F5a.webp" data-fancybox="gallery11">
                                    <img class="img-fluid" src="images/products/sheet/palladium/mainnail/26.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/palladium/original/Palladium-nero F5b.webp" data-fancybox="gallery11">
                                    <img class="img-fluid" src="images/products/sheet/palladium/mainnail/27.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/palladium/original/Palladium-nero F6a.webp" data-fancybox="gallery11">
                                    <img class="img-fluid" src="images/products/sheet/palladium/mainnail/28.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/palladium/original/Palladium-nero F6b.webp" data-fancybox="gallery11">
                                    <img class="img-fluid" src="images/products/sheet/palladium/mainnail/29.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/palladium/original/Palladium-nero F7a.webp" data-fancybox="gallery11">
                                    <img class="img-fluid" src="images/products/sheet/palladium/mainnail/30.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/palladium/original/Palladium-nero F7b.webp" data-fancybox="gallery11">
                                    <img class="img-fluid" src="images/products/sheet/palladium/mainnail/31.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/palladium/original/Palladium-nero F8a.webp" data-fancybox="gallery11">
                                    <img class="img-fluid" src="images/products/sheet/palladium/mainnail/32.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/palladium/original/Palladium-nero F8b.webp" data-fancybox="gallery11">
                                    <img class="img-fluid" src="images/products/sheet/palladium/mainnail/33.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/palladium/original/Vanadium-Blu F1a.webp" data-fancybox="gallery11">
                                    <img class="img-fluid" src="images/products/sheet/palladium/mainnail/34.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/palladium/original/Vanadium-Blu F1b.webp" data-fancybox="gallery11">
                                    <img class="img-fluid" src="images/products/sheet/palladium/mainnail/35.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/palladium/original/Vanadium-Blu F2a.webp" data-fancybox="gallery11">
                                    <img class="img-fluid" src="images/products/sheet/palladium/mainnail/36.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/palladium/original/Vanadium-Blu F2b.webp" data-fancybox="gallery11">
                                    <img class="img-fluid" src="images/products/sheet/palladium/mainnail/37.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/palladium/original/Vanadium-Blu F3a.webp" data-fancybox="gallery11">
                                    <img class="img-fluid" src="images/products/sheet/palladium/mainnail/38.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/palladium/original/Vanadium-Blu F3b.webp" data-fancybox="gallery11">
                                    <img class="img-fluid" src="images/products/sheet/palladium/mainnail/39.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/palladium/original/Vanadium-Blu F4a.webp" data-fancybox="gallery11">
                                    <img class="img-fluid" src="images/products/sheet/palladium/mainnail/40.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/palladium/original/Vanadium-Blu F4b.webp" data-fancybox="gallery11">
                                    <img class="img-fluid" src="images/products/sheet/palladium/mainnail/41.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/palladium/original/Vanadium-Blu F5a.webp" data-fancybox="gallery11">
                                    <img class="img-fluid" src="images/products/sheet/palladium/mainnail/42.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/palladium/original/Vanadium-Blu F5b.webp" data-fancybox="gallery11">
                                    <img class="img-fluid" src="images/products/sheet/palladium/mainnail/43.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/palladium/original/Vanadium-Blu F6a.webp" data-fancybox="gallery11">
                                    <img class="img-fluid" src="images/products/sheet/palladium/mainnail/44.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/palladium/original/Vanadium-Blu F6b.webp" data-fancybox="gallery11">
                                    <img class="img-fluid" src="images/products/sheet/palladium/mainnail/45.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/palladium/original/Vanadium-Blu F7a.webp" data-fancybox="gallery11">
                                    <img class="img-fluid" src="images/products/sheet/palladium/mainnail/46.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/palladium/original/Vanadium-Blu F7b.webp" data-fancybox="gallery11">
                                    <img class="img-fluid" src="images/products/sheet/palladium/mainnail/47.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/palladium/original/Vanadium-Blu F8a.webp" data-fancybox="gallery11">
                                    <img class="img-fluid" src="images/products/sheet/palladium/mainnail/48.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/palladium/original/Vanadium-Blu F8b.webp" data-fancybox="gallery11">
                                    <img class="img-fluid" src="images/products/sheet/palladium/mainnail/49.webp">
                                </div>
                            </div>
                            <div class="thumbCarousel thumbCarousel11 carousel max-w-xl mx-auto">
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/palladium/thumbnail/01.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/palladium/thumbnail/02.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/palladium/thumbnail/03.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/palladium/thumbnail/04.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/palladium/thumbnail/05.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/palladium/thumbnail/06.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/palladium/thumbnail/07.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/palladium/thumbnail/08.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/palladium/thumbnail/09.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/palladium/thumbnail/10.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/palladium/thumbnail/11.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/palladium/thumbnail/12.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/palladium/thumbnail/13.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/palladium/thumbnail/14.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/palladium/thumbnail/15.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/palladium/thumbnail/16.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/palladium/thumbnail/17.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/palladium/thumbnail/18.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/palladium/thumbnail/19.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/palladium/thumbnail/20.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/palladium/thumbnail/21.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/palladium/thumbnail/22.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/palladium/thumbnail/23.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/palladium/thumbnail/24.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/palladium/thumbnail/25.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/palladium/thumbnail/26.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/palladium/thumbnail/27.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/palladium/thumbnail/28.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/palladium/thumbnail/29.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/palladium/thumbnail/30.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/palladium/thumbnail/31.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/palladium/thumbnail/32.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/palladium/thumbnail/33.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/palladium/thumbnail/34.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/palladium/thumbnail/35.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/palladium/thumbnail/36.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/palladium/thumbnail/37.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/palladium/thumbnail/38.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/palladium/thumbnail/39.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/palladium/thumbnail/40.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/palladium/thumbnail/41.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/palladium/thumbnail/42.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/palladium/thumbnail/43.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/palladium/thumbnail/44.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/palladium/thumbnail/45.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/palladium/thumbnail/46.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/palladium/thumbnail/47.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/palladium/thumbnail/48.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/palladium/thumbnail/49.webp">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul class="breadcrumb">
                            <li><a href="index.php"><span class="material-symbols-rounded">home</span>首頁</a></li>
                            <li><a href="products.php?category=sheet">產品</a></li>
                            <li><a href="products.php?category=sheet">薄板</a></li>
                            <li><a href="products.php?type=metallook">金屬</a> , <a href="products.php?type=other">特色</a></li>
                        </ul>
                        <img src="images/about/eternal.svg" alt="α-corner" title="品牌：可樂石" id="palladium-logo" style="height: 3rem;"><!-- 選擇款式時 品牌改變 -->
                        <h3 title="品名：鐵鏽系列">鐵鏽系列</h3>
                        <p>款式：</p>
                        <div class="small-img">
                            <input type="radio" name="palladium" id="palladium01" value="白">
                            <button class="check" onclick="mainCarousel11.slideTo(5)">
                                <label for="palladium01"><img class="palladium-img01" src="images/products/sheet/palladium/mockup-white.webp" alt="鐵鏽白" title="規格：白"></label>
                            </button>
                            <input type="radio" name="palladium" id="palladium02" value="紅">
                            <button class="check" onclick="mainCarousel11.slideTo(10)">
                                <label for="palladium02"><img class="palladium-img02" src="images/products/sheet/palladium/mockup-rosso.webp" alt="鐵鏽紅" title="規格：紅"></label>
                            </button>
                            <input type="radio" name="palladium" id="palladium03" value="棕">
                            <button class="check" onclick="mainCarousel11.slideTo(17)">
                                <label for="palladium03"><img class="palladium-img03" src="images/products/sheet/palladium/mockup-nero.webp" alt="鐵鏽棕" title="規格：棕"></label>
                            </button>
                            <input type="radio" name="palladium" id="palladium04" value="藍">
                            <button class="check" onclick="mainCarousel11.slideTo(33)">
                                <label for="palladium04"><img class="palladium-img04" src="images/products/sheet/palladium/mockup-bule.webp" alt="鐵鏽藍" title="規格：藍"></label>
                            </button>
                        </div>
                        <p>尺寸：</p>
                        <div class="mysize">
                            <input type="radio" name="palladium-size" id="palladium-size01" value="100×300×0.35cm 霧面">
                            <button class="check">
                                <label for="palladium-size01">
                                    <div class="btn btn-secondary" id="palladium-sizebtn01">100×300×0.35cm 霧面</div>
                                </label>
                            </button>
                            <input type="radio" name="palladium-size" id="palladium-size02" value="120×270×0.6cm 霧面">
                            <button class="check">
                                <label for="palladium-size02">
                                    <div class="btn btn-secondary"id="palladium-sizebtn02">120×270×0.6cm 霧面</div>
                                </label>
                            </button>
                        </div>
                        <div class="ex" id="palladium-ex">
                            <p>說明：</p>
                            <p></p>
                        </div>
                        <form action="contact.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="products" value="details"><!-- 傳值用 -->
                            <input type="hidden" name="product-name" value="鐵鏽">
                            <input type="hidden" id="palladium-check-img" name="check-img">
                            <input type="hidden" id="palladium-check-size" name="check-size">
                            <div class="row mydescription">
                                <a class="col btn btn-secondary" href="https://drive.google.com/u/0/uc?id=1vNvUAZmtJ4OPaKPo5jN__hUpH5eSQoPF&export=download&confirm=t&uuid=70adf1ff-f4bf-45b2-96cb-88c4ad0d9566">下載材質檔</a>
                                <button class="col btn btn-secondary" type="submit">諮詢產品</button>
                            </div>
                        </form>
                        <script>
                            $(':radio[name="palladium-size"]').change(function (){
                                var size = $(this).val();
                                $("#palladium-check-size").attr("value",size);
                            });
                            $(':radio[name="palladium"]').change(function (){
                                var item = $(this).val();
                                $("#palladium-check-img").attr("value",item);
                                $("#palladium-check-size").removeAttr("value");
                                if($("input[name=palladium]")[0].checked){
                                    $("#palladium-logo").attr({
                                        'src' : 'images/about/corner.svg',
                                        'alt' : 'α-corner',
                                        'title' : '品牌：可樂石'
                                    }).css('height','2.5rem');
                                    $("#palladium-size02").attr('disabled','ture');
                                    $("#palladium-sizebtn02").attr('title','本款未有此尺寸');
                                    $("#palladium-size01").removeAttr('disabled');
                                    $("#palladium-sizebtn01").removeAttr('title');
                                    $("#palladium-ex").css({
                                        'display' : 'block'
                                    })
                                    $("#palladium-ex p:nth-child(2)").html("<b>此產品只能用在牆面，不適合當地磚使用。</b>");
                                } else {
                                    $("#palladium-logo").attr({
                                        'src' : 'images/about/eternal.svg',
                                        'alt' : 'eternal',
                                        'title' : '品牌：達理石'
                                    }).css('height','3rem');
                                    $("#palladium-size01").attr('disabled','ture');
                                    $("#palladium-sizebtn01").attr('title','本款未有此尺寸');
                                    $("#palladium-size02").removeAttr('disabled');
                                    $("#palladium-sizebtn02").removeAttr('title');
                                    $("#palladium-ex").css({
                                        'display' : 'none'
                                    })  //下載按鈕 可替換檔案 或合併一起下載
                                }
                            });
                        </script>
                    </div>
                </div>
            </div>
            <div class="details mmm ambrato">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="box ">
                            <div class="mainCarousel mainCarousel12 carousel w-10/12 max-w-5xl mx-auto">
                                <div class="carousel__slide" data-src="images/products/sheet/ambrato/original/Ambrato Grey _ Ambrato White.webp" data-fancybox="gallery12">
                                    <img class="img-fluid" src="images/products/sheet/ambrato/mainnail/01.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/ambrato/original/AMBRATO GREY_R1 80x240.webp" data-fancybox="gallery12">
                                    <img class="img-fluid" src="images/products/sheet/ambrato/mainnail/02.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/ambrato/original/AMBRATO GREY_R2 80x240.webp" data-fancybox="gallery12">
                                    <img class="img-fluid" src="images/products/sheet/ambrato/mainnail/03.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/ambrato/original/AMBRATO GREY_R3 80x240.webp" data-fancybox="gallery12">
                                    <img class="img-fluid" src="images/products/sheet/ambrato/mainnail/04.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/ambrato/original/AMBRATO GREY_R4 80x240.webp" data-fancybox="gallery12">
                                    <img class="img-fluid" src="images/products/sheet/ambrato/mainnail/05.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/ambrato/original/AMBRATO GREY_R1 120x240.webp" data-fancybox="gallery12">
                                    <img class="img-fluid" src="images/products/sheet/ambrato/mainnail/06.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/ambrato/original/AMBRATO GREY_R2 120x240.webp" data-fancybox="gallery12">
                                    <img class="img-fluid" src="images/products/sheet/ambrato/mainnail/07.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/ambrato/original/AMBRATO GREY_R3 120x240.webp" data-fancybox="gallery12">
                                    <img class="img-fluid" src="images/products/sheet/ambrato/mainnail/08.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/ambrato/original/AMBRATO GREY_R4 120x240.webp" data-fancybox="gallery12">
                                    <img class="img-fluid" src="images/products/sheet/ambrato/mainnail/09.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/ambrato/original/AMBRATO WHITE_R1 80x240.webp" data-fancybox="gallery12">
                                    <img class="img-fluid" src="images/products/sheet/ambrato/mainnail/10.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/ambrato/original/AMBRATO WHITE_R2 80x240.webp" data-fancybox="gallery12">
                                    <img class="img-fluid" src="images/products/sheet/ambrato/mainnail/11.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/ambrato/original/AMBRATO WHITE_R3 80x240.webp" data-fancybox="gallery12">
                                    <img class="img-fluid" src="images/products/sheet/ambrato/mainnail/12.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/ambrato/original/AMBRATO WHITE_R4 80x240.webp" data-fancybox="gallery12">
                                    <img class="img-fluid" src="images/products/sheet/ambrato/mainnail/13.webp">
                                </div>
                            </div>
                            <div class="thumbCarousel thumbCarousel12 carousel max-w-xl mx-auto">
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/ambrato/thumbnail/01.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/ambrato/thumbnail/02.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/ambrato/thumbnail/03.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/ambrato/thumbnail/04.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/ambrato/thumbnail/05.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/ambrato/thumbnail/06.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/ambrato/thumbnail/07.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/ambrato/thumbnail/08.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/ambrato/thumbnail/09.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/ambrato/thumbnail/10.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/ambrato/thumbnail/11.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/ambrato/thumbnail/12.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/ambrato/thumbnail/13.webp">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul class="breadcrumb">
                            <li><a href="index.php"><span class="material-symbols-rounded">home</span>首頁</a></li>
                            <li><a href="products.php?category=sheet">產品</a></li>
                            <li><a href="products.php?category=sheet">薄板</a></li>
                            <li><a href="products.php?type=marble">大理石</a></li>
                        </ul>
                        <img src="images/about/holy.svg" alt="α-holystone" title="品牌：活麗石" id="ambrato-logo" style="padding: .625rem 0 0">
                        <h3 title="品名：伯爵系列">伯爵系列</h3>
                        <p>款式：</p>
                        <div class="small-img">
                            <input type="radio" name="ambrato" id="ambrato01" value="灰">
                            <button class="check" onclick="mainCarousel12.slideTo(1)">
                                <label for="ambrato01"><img class="ambrato-img01" src="images/products/sheet/ambrato/mockup-gray.webp" alt="伯爵灰" title="規格：灰"></label>
                            </button>
                            <input type="radio" name="ambrato" id="ambrato02" value="白">
                            <button class="check" onclick="mainCarousel12.slideTo(9)">
                                <label for="ambrato02"><img class="ambrato-img02" src="images/products/sheet/ambrato/mockup-white.webp" alt="伯爵白" title="規格：白"></label>
                            </button>
                        </div>
                        <p>尺寸：</p>
                        <div class="mysize">
                            <input type="radio" name="ambrato-size" id="ambrato-size01" value="80×240×0.9cm 亮面">
                            <button class="check">
                                <label for="ambrato-size01">
                                    <div class="btn btn-secondary" id="ambrato-sizebtn01">80×240×0.9cm 亮面</div>
                                </label>
                            </button>
                            <input type="radio" name="ambrato-size" id="ambrato-size02" value="120×240×0.9cm 亮面">
                            <button class="check">
                                <label for="ambrato-size02">
                                    <div class="btn btn-secondary"id="ambrato-sizebtn02" onclick="mainCarousel12.slideTo(5)">120×240×0.9cm 亮面</div>
                                </label>
                            </button>
                        </div>
                        <form action="contact.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="products" value="details"><!-- 傳值用 -->
                            <input type="hidden" name="product-name" value="伯爵">
                            <input type="hidden" id="ambrato-check-img" name="check-img">
                            <input type="hidden" id="ambrato-check-size" name="check-size">
                            <div class="row mydescription">
                                <a class="col btn btn-secondary" href="https://drive.google.com/u/0/uc?id=1XqfN6kfyl90bCNw8FBT-1Mi_xhtm9mgH&export=download">下載材質檔</a>
                                <button class="col btn btn-secondary" type="submit">諮詢產品</button>
                            </div>
                        </form>
                        <script>
                        $(':radio[name="ambrato-size"]').change(function (){
                            var size = $(this).val();
                            $("#ambrato-check-size").attr("value",size);
                        });
                                                    
                        $(':radio[name="ambrato"]').change(function (){
                            var item = $(this).val();  //這2行若為單一款式可被註解,可將value加在input行內
                            $("#ambrato-check-img").attr("value",item);
                            $("#ambrato-check-size").removeAttr("value");  //單一個尺寸請註解,尺寸有2個以上不要註解
                            if($("input[name=ambrato]")[0].checked){
                                $("#ambrato-size02").removeAttr('disabled');
                                $("#ambrato-sizebtn02").removeAttr('title');
                            } else {
                                $("#ambrato-size02").attr('disabled','ture');
                                $("#ambrato-sizebtn02").attr('title','本款未有此尺寸');
                                $("#ambrato-size01").removeAttr('disabled');
                                $("#ambrato-sizebtn01").removeAttr('title');
                            }
                        });
                        </script>
                    </div>
                </div>
            </div>
            <div class="details mmm afion">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="box ">
                            <div class="mainCarousel mainCarousel13 carousel w-10/12 max-w-5xl mx-auto">
                                <div class="carousel__slide" data-src="images/products/sheet/afion/original/Afion Bianco霧面.webp" data-fancybox="gallery13">
                                    <img class="img-fluid" src="images/products/sheet/afion/mainnail/01.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/afion/original/Afion Graphite + Afion Grey-1霧面.webp" data-fancybox="gallery13">
                                    <img class="img-fluid" src="images/products/sheet/afion/mainnail/02.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/afion/original/Afion Graphite + Afion Moka霧面.webp" data-fancybox="gallery13">
                                    <img class="img-fluid" src="images/products/sheet/afion/mainnail/03.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/afion/original/AFION BIANCO_R1.webp" data-fancybox="gallery13">
                                    <img class="img-fluid" src="images/products/sheet/afion/mainnail/04.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/afion/original/AFION BIANCO_R2.webp" data-fancybox="gallery13">
                                    <img class="img-fluid" src="images/products/sheet/afion/mainnail/05.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/afion/original/AFION GREY_R1.webp" data-fancybox="gallery13">
                                    <img class="img-fluid" src="images/products/sheet/afion/mainnail/06.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/afion/original/AFION GREY_R2.webp" data-fancybox="gallery13">
                                    <img class="img-fluid" src="images/products/sheet/afion/mainnail/07.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/afion/original/AFION MOCA_R1.webp" data-fancybox="gallery13">
                                    <img class="img-fluid" src="images/products/sheet/afion/mainnail/08.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/afion/original/AFION MOCA_R2.webp" data-fancybox="gallery13">
                                    <img class="img-fluid" src="images/products/sheet/afion/mainnail/09.webp">
                                </div>
                            </div>
                            <div class="thumbCarousel thumbCarousel13 carousel max-w-xl mx-auto">
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/afion/thumbnail/01.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/afion/thumbnail/02.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/afion/thumbnail/03.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/afion/thumbnail/04.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/afion/thumbnail/05.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/afion/thumbnail/06.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/afion/thumbnail/07.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/afion/thumbnail/08.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/afion/thumbnail/09.webp">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul class="breadcrumb">
                            <li><a href="index.php"><span class="material-symbols-rounded">home</span>首頁</a></li>
                            <li><a href="products.php?category=sheet">產品</a></li>
                            <li><a href="products.php?category=sheet">薄板</a></li>
                            <li><a href="products.php?type=slate">板岩</a></li>
                        </ul>
                        <img src="images/about/holy.svg" alt="α-holystone" title="品牌：活麗石" id="afion-logo" style="padding: .625rem 0 0">
                        <h3 title="品名：豐沙爾系列">豐沙爾系列</h3>
                        <p>款式：</p>
                        <div class="small-img">
                            <input type="radio" name="afion" id="afion01" value="米">
                            <button class="check" onclick="mainCarousel13.slideTo(3)">
                                <label for="afion01"><img class="afion-img01" src="images/products/sheet/afion/mockup-bianco.webp" alt="bianco" title="規格：bianco"></label>
                            </button>
                            <input type="radio" name="afion" id="afion02" value="灰">
                            <button class="check" onclick="mainCarousel13.slideTo(5)">
                                <label for="afion02"><img class="afion-img02" src="images/products/sheet/afion/mockup-grey.webp" alt="grey" title="規格：grey"></label>
                            </button>
                            <input type="radio" name="afion" id="afion03" value="棕">
                            <button class="check" onclick="mainCarousel13.slideTo(7)">
                                <label for="afion03"><img class="afion-img03" src="images/products/sheet/afion/mockup-moca.webp" alt="moca" title="規格：moca"></label>
                            </button>
                        </div>
                        <p>尺寸：</p>
                        <div class="mysize">
                            <input type="radio" name="afion-size" id="afion-size01">
                            <button class="check">
                                <label for="afion-size01">
                                    <div class="btn btn-secondary" id="afion-sizebtn01">80×160×0.9cm 霧面</div>
                                </label>
                            </button>
                        </div>
                        <div class="ex" id="afion-ex">
                            <p>說明：</p>
                            <p></p>
                        </div>
                        <form action="contact.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="products" value="details"><!-- 傳值用 -->
                            <input type="hidden" name="product-name" value="豐沙爾">
                            <input type="hidden" id="afion-check-img" name="check-img">
                            <input type="hidden" id="afion-check-size" name="check-size" value="80×160×0.9cm 霧面">
                            <div class="row mydescription">
                                <a class="col btn btn-secondary" href="https://drive.google.com/u/0/uc?id=190vbqOVbFl0ofNm06PT83NFlxDsby4Db&export=download&confirm=t&uuid=59beefde-829e-4ef3-9e85-330bf4825f62">下載材質檔</a>
                                <button class="col btn btn-secondary" type="submit">諮詢產品</button>
                            </div>
                        </form>
                        <script>
                        $(':radio[name="afion"]').change(function (){
                            var item = $(this).val();
                            $("#afion-check-img").attr("value",item);
                            if($("input[name=afion]")[0].checked){
                                $("#afion-ex").css({
                                    'display' : 'none'
                                })
                            } else {
                                $("#afion-ex").css({
                                    'display' : 'block'
                                })
                                $("#afion-ex p:nth-child(2)").html("<b>專案品需預訂</b>").css("color","red");
                            }
                        });
                        </script>
                    </div>
                </div>
            </div>
            <div class="details mmm naxos">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="box ">
                            <div class="mainCarousel mainCarousel14 carousel w-10/12 max-w-5xl mx-auto">
                                <div class="carousel__slide" data-src="images/products/sheet/naxos/original/NAXOS BLACK 120X240_AMB.webp" data-fancybox="gallery14">
                                    <img class="img-fluid" src="images/products/sheet/naxos/mainnail/01.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/naxos/original/NAXOS STEEL 60X120_AMB.webp" data-fancybox="gallery14">
                                    <img class="img-fluid" src="images/products/sheet/naxos/mainnail/02.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/naxos/original/NAXOS BLACK 240x120_1.webp" data-fancybox="gallery14">
                                    <img class="img-fluid" src="images/products/sheet/naxos/mainnail/03.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/naxos/original/NAXOS BLACK 240x120_2.webp" data-fancybox="gallery14">
                                    <img class="img-fluid" src="images/products/sheet/naxos/mainnail/04.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/naxos/original/NAXOS STEEL 240x120_1.webp" data-fancybox="gallery14">
                                    <img class="img-fluid" src="images/products/sheet/naxos/mainnail/05.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/naxos/original/NAXOS STEEL 240x120_2.webp" data-fancybox="gallery14">
                                    <img class="img-fluid" src="images/products/sheet/naxos/mainnail/06.webp">
                                </div>
                            </div>
                            <div class="thumbCarousel thumbCarousel14 carousel max-w-xl mx-auto">
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/naxos/thumbnail/01.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/naxos/thumbnail/02.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/naxos/thumbnail/03.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/naxos/thumbnail/04.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/naxos/thumbnail/05.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/naxos/thumbnail/06.webp">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul class="breadcrumb">
                            <li><a href="index.php"><span class="material-symbols-rounded">home</span>首頁</a></li>
                            <li><a href="products.php?category=sheet">產品</a></li>
                            <li><a href="products.php?category=sheet">薄板</a></li>
                            <li><a href="products.php?type=marble">大理石</a></li>
                        </ul>
                        <img src="images/about/holy.svg" alt="α-holystone" title="品牌：活麗石" id="naxos-logo" style="padding: .625rem 0 0">
                        <h3 title="品名：納克索系列">納克索系列</h3>
                        <p>款式：</p>
                        <div class="small-img">
                            <input type="radio" name="naxos" id="naxos01" value="黑">
                            <button class="check" onclick="mainCarousel14.slideTo(2)">
                                <label for="naxos01"><img class="naxos-img01" src="images/products/sheet/naxos/mockup-black.webp" alt="black" title="規格：納克索黑"></label>
                            </button>
                            <input type="radio" name="naxos" id="naxos02" value="灰">
                            <button class="check" onclick="mainCarousel14.slideTo(4)">
                                <label for="naxos02"><img class="naxos-img02" src="images/products/sheet/naxos/mockup-steel.webp" alt="steel" title="規格：納克索灰"></label>
                            </button>
                        </div>
                        <p>尺寸：</p>
                        <div class="mysize">
                            <input type="radio" name="naxos-size" id="naxos-size01">
                            <button class="check">
                                <label for="naxos-size01">
                                    <div class="btn btn-secondary" id="naxos-sizebtn01">120×240×0.7cm 亮面</div>
                                </label>
                            </button>
                        </div>
                        <form action="contact.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="products" value="details"><!-- 傳值用 -->
                            <input type="hidden" name="product-name" value="納克索">
                            <input type="hidden" id="naxos-check-img" name="check-img">
                            <input type="hidden" id="naxos-check-size" name="check-size" value="120×240×0.7cm 亮面">
                            <div class="row mydescription">
                                <a class="col btn btn-secondary" href="https://drive.google.com/u/0/uc?id=1sF2A8BeYaHGrCQt0uJNzhoTnTNlpzdld&export=download&confirm=t&uuid=7a910227-bc66-4d25-889e-c958af77b2d3">下載材質檔</a>
                                <button class="col btn btn-secondary" type="submit">諮詢產品</button>
                            </div>
                        </form>
                        <script>
                        $(':radio[name="naxos"]').change(function (){
                            var item = $(this).val()
                            $("#naxos-check-img").attr("value",item);
                        });
                        </script>
                    </div>
                </div>
            </div>
            <div class="details mmm pompeia">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="box ">
                            <div class="mainCarousel mainCarousel15 carousel w-10/12 max-w-5xl mx-auto">
                                <div class="carousel__slide" data-src="images/products/sheet/pompeia/original/amb 04 pompeia_rev2.webp" data-fancybox="gallery15">
                                    <img class="img-fluid" src="images/products/sheet/pompeia/mainnail/01.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/pompeia/original/Detalles Pompeia 1000x3000x6.webp" data-fancybox="gallery15">
                                    <img class="img-fluid" src="images/products/sheet/pompeia/mainnail/02.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/pompeia/original/Pompeia 1000x3000x6 1.webp" data-fancybox="gallery15">
                                    <img class="img-fluid" src="images/products/sheet/pompeia/mainnail/03.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/pompeia/original/Pompeia 1000x3000x6 2.webp" data-fancybox="gallery15">
                                    <img class="img-fluid" src="images/products/sheet/pompeia/mainnail/04.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/pompeia/original/Pompeia 1000x3000x6 3.webp" data-fancybox="gallery15">
                                    <img class="img-fluid" src="images/products/sheet/pompeia/mainnail/05.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/pompeia/original/Pompeia 1000x3000x6 4.webp" data-fancybox="gallery15">
                                    <img class="img-fluid" src="images/products/sheet/pompeia/mainnail/06.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/pompeia/original/Pompeia 1000x3000x6 5.webp" data-fancybox="gallery15">
                                    <img class="img-fluid" src="images/products/sheet/pompeia/mainnail/07.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/pompeia/original/Pompeia 1000x3000x6 6.webp" data-fancybox="gallery15">
                                    <img class="img-fluid" src="images/products/sheet/pompeia/mainnail/08.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/pompeia/original/Pompeia 1000x3000x6 7.webp" data-fancybox="gallery15">
                                    <img class="img-fluid" src="images/products/sheet/pompeia/mainnail/09.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/pompeia/original/Pompeia 1000x3000x6 8.webp" data-fancybox="gallery15">
                                    <img class="img-fluid" src="images/products/sheet/pompeia/mainnail/10.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/pompeia/original/Pompeia Decor 花磚 A 1000x3000x6.webp" data-fancybox="gallery15">
                                    <img class="img-fluid" src="images/products/sheet/pompeia/mainnail/11.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/pompeia/original/Pompeia Decor 花磚 B 1000x3000x6.webp" data-fancybox="gallery15">
                                    <img class="img-fluid" src="images/products/sheet/pompeia/mainnail/12.webp">
                                </div>
                            </div>
                            <div class="thumbCarousel thumbCarousel15 carousel max-w-xl mx-auto">
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/pompeia/thumbnail/01.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/pompeia/thumbnail/02.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/pompeia/thumbnail/03.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/pompeia/thumbnail/04.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/pompeia/thumbnail/05.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/pompeia/thumbnail/06.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/pompeia/thumbnail/07.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/pompeia/thumbnail/08.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/pompeia/thumbnail/09.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/pompeia/thumbnail/10.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/pompeia/thumbnail/11.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/pompeia/thumbnail/12.webp">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul class="breadcrumb">
                            <li><a href="index.php"><span class="material-symbols-rounded">home</span>首頁</a></li>
                            <li><a href="products.php?category=sheet">產品</a></li>
                            <li><a href="products.php?category=sheet">薄板</a></li>
                            <li><a href="products.php?type=other">特色</a></li>
                        </ul>
                        <img src="images/about/corner.svg" alt="α-cornerstone" title="品牌：可樂石" id="pompeia-logo">
                        <h3 title="品名：洛芙特灰">洛芙特灰</h3>
                        <p>款式：</p>
                        <div class="small-img">
                            <input type="radio" name="pompeia" id="pompeia01" value="素磚">
                            <button class="check" onclick="mainCarousel15.slideTo(2)">
                                <label for="pompeia01"><img class="pompeia-img01" src="images/products/sheet/pompeia/mockup-plain.webp" alt="plain" title="規格：素磚"></label>
                            </button>
                            <input type="radio" name="pompeia" id="pompeia02" value="花磚">
                            <button class="check" onclick="mainCarousel15.slideTo(10)">
                                <label for="pompeia02"><img class="pompeia-img02" src="images/products/sheet/pompeia/mockup-flowery.webp" alt="flowery" title="規格：花磚"></label>
                            </button>
                        </div>
                        <p>尺寸：</p>
                        <div class="mysize">
                            <input type="radio" name="pompeia-size" id="pompeia-size01">
                            <button class="check">
                                <label for="pompeia-size01">
                                    <div class="btn btn-secondary" id="pompeia-sizebtn01">100×300×0.6cm 霧面</div>
                                </label>
                            </button>
                        </div>
                        <form action="contact.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="products" value="details"><!-- 傳值用 -->
                            <input type="hidden" name="product-name" value="洛芙特灰">
                            <input type="hidden" id="pompeia-check-img" name="check-img">
                            <input type="hidden" id="pompeia-check-size" name="check-size" value="100×300×0.6cm 霧面">
                            <div class="row mydescription">
                                <a class="col btn btn-secondary" href="https://drive.google.com/u/0/uc?id=1SaAD28ZgJEG5MZ_end4TlmztCd1TRzfj&export=download">下載材質檔</a>
                                <button class="col btn btn-secondary" type="submit">諮詢產品</button>
                            </div>
                        </form>
                        <script>
                            $(':radio[name="pompeia"]').change(function (){
                                var item = $(this).val();
                                $("#pompeia-check-img").attr("value",item);
                            });
                        </script>
                    </div>
                </div>
            </div>
            <div class="details mmm agathos">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="box ">
                            <div class="mainCarousel mainCarousel16 carousel w-10/12 max-w-5xl mx-auto">
                                <div class="carousel__slide" data-src="images/products/sheet/agathos/original/Agathos_Multicolor_120x270cm.webp" data-fancybox="gallery16">
                                    <img class="img-fluid" src="images/products/sheet/agathos/mainnail/01.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/agathos/original/agathos 120x270__0000_Antracite Mod F 1.webp" data-fancybox="gallery16">
                                    <img class="img-fluid" src="images/products/sheet/agathos/mainnail/02.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/agathos/original/agathos 120x270__0001_Antracite Mod F 2.webp" data-fancybox="gallery16">
                                    <img class="img-fluid" src="images/products/sheet/agathos/mainnail/03.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/agathos/original/agathos 120x270__0002_Antracite Mod F 3.webp" data-fancybox="gallery16">
                                    <img class="img-fluid" src="images/products/sheet/agathos/mainnail/04.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/agathos/original/agathos 120x270__0003_Multicolor Mod F 1.webp" data-fancybox="gallery16">
                                    <img class="img-fluid" src="images/products/sheet/agathos/mainnail/05.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/agathos/original/agathos 120x270__0004_Multicolor Mod F 2.webp" data-fancybox="gallery16">
                                    <img class="img-fluid" src="images/products/sheet/agathos/mainnail/06.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/agathos/original/agathos 120x270__0005_Multicolor Mod F 3.webp" data-fancybox="gallery16">
                                    <img class="img-fluid" src="images/products/sheet/agathos/mainnail/07.webp">
                                </div>
                            </div>
                            <div class="thumbCarousel thumbCarousel16 carousel max-w-xl mx-auto">
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/agathos/thumbnail/01.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/agathos/thumbnail/02.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/agathos/thumbnail/03.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/agathos/thumbnail/04.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/agathos/thumbnail/05.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/agathos/thumbnail/06.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/agathos/thumbnail/07.webp">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul class="breadcrumb">
                            <li><a href="index.php"><span class="material-symbols-rounded">home</span>首頁</a></li>
                            <li><a href="products.php?category=sheet">產品</a></li>
                            <li><a href="products.php?category=sheet">薄板</a></li>
                            <li><a href="products.php?type=slate">板岩</a></li>
                        </ul>
                        <img src="images/about/eternal.svg" alt="α-corner" title="品牌：達理石" id="agathos-logo" style="height: 3rem;">
                        <h3 title="品名：阿嘉莎系列">阿嘉莎系列</h3>
                        <p>款式：</p>
                        <div class="small-img">
                            <input type="radio" name="agathos" id="agathos01" value="黑">
                            <button class="check" onclick="mainCarousel16.slideTo(1)">
                                <label for="agathos01"><img class="agathos-img01" src="images/products/sheet/agathos/mockup-antracite.webp" alt="antracite" title="規格：阿嘉莎黑"></label>
                            </button>
                            <input type="radio" name="agathos" id="agathos02" value="棕">
                            <button class="check" onclick="mainCarousel16.slideTo(4)">
                                <label for="agathos02"><img class="agathos-img02" src="images/products/sheet/agathos/mockup-lignite.webp" alt="lignite" title="規格：阿嘉莎棕"></label>
                            </button>

                        </div>
                        <p>尺寸：</p>
                        <div class="mysize">
                            <input type="radio" name="agathos-size" id="agathos-size01">
                            <button class="check">
                                <label for="agathos-size01">
                                    <div class="btn btn-secondary" id="agathos-sizebtn01">120×270×0.6cm 霧面</div>
                                </label>
                            </button>
                        </div>
                        <form action="contact.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="products" value="details"><!-- 傳值用 -->
                            <input type="hidden" name="product-name" value="阿嘉莎">
                            <input type="hidden" id="agathos-check-img" name="check-img">
                            <input type="hidden" id="agathos-check-size" name="check-size" value="120×270×0.6cm 霧面">
                            <div class="row mydescription">
                                <a class="col btn btn-secondary" href="https://drive.google.com/u/0/uc?id=18XbDnMieAsVQH4P4Ml2Py28TlFlNbdrY&export=download">下載材質檔</a>
                                <button class="col btn btn-secondary" type="submit">諮詢產品</button>
                            </div>
                        </form>
                        <script>
                            $(':radio[name="agathos"]').change(function (){
                                var item = $(this).val();
                                $("#agathos-check-img").attr("value",item);
                            });
                        </script>
                    </div>
                </div>
            </div>
            <div class="details mmm calacatta">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="box ">
                            <div class="mainCarousel mainCarousel17 carousel w-10/12 max-w-5xl mx-auto">
                                <div class="carousel__slide" data-src="images/products/sheet/calacatta/original/CALACATTA GOLD HALL senza poltrona.webp" data-fancybox="gallery17">
                                    <img class="img-fluid" src="images/products/sheet/calacatta/mainnail/01.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/calacatta/original/CALACATTA GOLD CORRIDOR.webp" data-fancybox="gallery17">
                                    <img class="img-fluid" src="images/products/sheet/calacatta/mainnail/02.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/calacatta/original/CALACATTA GOLD 60x120 divano.webp" data-fancybox="gallery17">
                                    <img class="img-fluid" src="images/products/sheet/calacatta/mainnail/03.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/calacatta/original/CALACATTA GOLD 121x271 wall bathroom.webp" data-fancybox="gallery17">
                                    <img class="img-fluid" src="images/products/sheet/calacatta/mainnail/04.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/calacatta/original/120x270_0008_Calacatta Gold F1a.webp" data-fancybox="gallery17">
                                    <img class="img-fluid" src="images/products/sheet/calacatta/mainnail/05.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/calacatta/original/120x270_0007_Calacatta Gold F1b.webp" data-fancybox="gallery17">
                                    <img class="img-fluid" src="images/products/sheet/calacatta/mainnail/06.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/calacatta/original/120x270_0006_Calacatta Gold F2a.webp" data-fancybox="gallery17">
                                    <img class="img-fluid" src="images/products/sheet/calacatta/mainnail/07.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/calacatta/original/120x270_0005_Calacatta Gold F2b.webp" data-fancybox="gallery17">
                                    <img class="img-fluid" src="images/products/sheet/calacatta/mainnail/08.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/calacatta/original/120x270_0004_Calacatta Gold F3a.webp" data-fancybox="gallery17">
                                    <img class="img-fluid" src="images/products/sheet/calacatta/mainnail/09.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/calacatta/original/120x270_0003_Calacatta Gold F4a.webp" data-fancybox="gallery17">
                                    <img class="img-fluid" src="images/products/sheet/calacatta/mainnail/10.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/calacatta/original/120x270_0002_Calacatta Gold F4b.webp" data-fancybox="gallery17">
                                    <img class="img-fluid" src="images/products/sheet/calacatta/mainnail/11.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/calacatta/original/120x270_0001_Calacatta Gold F5a.webp" data-fancybox="gallery17">
                                    <img class="img-fluid" src="images/products/sheet/calacatta/mainnail/12.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/calacatta/original/120x270_0000_Calacatta Gold F5b.webp" data-fancybox="gallery17">
                                    <img class="img-fluid" src="images/products/sheet/calacatta/mainnail/13.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/calacatta/original/amb oceanic 60x120.webp" data-fancybox="gallery17">
                                    <img class="img-fluid" src="images/products/sheet/calacatta/mainnail/14.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/calacatta/original/amb oceanic 120x270 bedroom sea.webp" data-fancybox="gallery17">
                                    <img class="img-fluid" src="images/products/sheet/calacatta/mainnail/15.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/calacatta/original/amb oceanic 120x270 meeting room.webp" data-fancybox="gallery17">
                                    <img class="img-fluid" src="images/products/sheet/calacatta/mainnail/16.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/calacatta/original/CALAC OCEANIC 120X270__0000_F1 Ocean.webp" data-fancybox="gallery17">
                                    <img class="img-fluid" src="images/products/sheet/calacatta/mainnail/17.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/calacatta/original/CALAC OCEANIC 120X270__0001_F2 Ocean.webp" data-fancybox="gallery17">
                                    <img class="img-fluid" src="images/products/sheet/calacatta/mainnail/18.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/calacatta/original/CALAC OCEANIC 120X270__0002_F3 Ocean.webp" data-fancybox="gallery17">
                                    <img class="img-fluid" src="images/products/sheet/calacatta/mainnail/19.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/calacatta/original/CALAC OCEANIC 120X270__0003_F4 Ocean.webp" data-fancybox="gallery17">
                                    <img class="img-fluid" src="images/products/sheet/calacatta/mainnail/20.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/calacatta/original/CALAC OCEANIC 120X270__0004_F5 Ocean.webp" data-fancybox="gallery17">
                                    <img class="img-fluid" src="images/products/sheet/calacatta/mainnail/21.webp">
                                </div>
                            </div>
                            <div class="thumbCarousel thumbCarousel17 carousel max-w-xl mx-auto">
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/calacatta/thumbnail/01.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/calacatta/thumbnail/02.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/calacatta/thumbnail/03.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/calacatta/thumbnail/04.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/calacatta/thumbnail/05.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/calacatta/thumbnail/06.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/calacatta/thumbnail/07.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/calacatta/thumbnail/08.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/calacatta/thumbnail/09.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/calacatta/thumbnail/10.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/calacatta/thumbnail/11.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/calacatta/thumbnail/12.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/calacatta/thumbnail/13.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/calacatta/thumbnail/14.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/calacatta/thumbnail/15.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/calacatta/thumbnail/16.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/calacatta/thumbnail/17.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/calacatta/thumbnail/18.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/calacatta/thumbnail/19.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/calacatta/thumbnail/20.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/calacatta/thumbnail/21.webp">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul class="breadcrumb">
                            <li><a href="index.php"><span class="material-symbols-rounded">home</span>首頁</a></li>
                            <li><a href="products.php?category=sheet">產品</a></li>
                            <li><a href="products.php?category=sheet">薄板</a></li>
                            <li><a href="products.php?type=marble">大理石</a></li>
                        </ul>
                        <img src="images/about/eternal.svg" alt="α-corner" title="品牌：達理石" id="calacatta-logo" style="height: 3rem;">
                        <h3 id="calacatta-title"></h3>
                        <p>款式：</p>
                        <div class="small-img">
                            <input type="radio" name="calacatta" id="calacatta01" value="金色山脈">
                            <button class="check" onclick="mainCarousel17.slideTo(4)">
                                <label for="calacatta01"><img class="calacatta-img01" src="images/products/sheet/calacatta/mockup-gold.webp" alt="gold" title="規格：金色山脈"></label>
                            </button>
                            <input type="radio" name="calacatta" id="calacatta02" value="蔚藍海岸">
                            <button class="check" onclick="mainCarousel17.slideTo(16)">
                                <label for="calacatta02"><img class="calacatta-img02" src="images/products/sheet/calacatta/mockup-ocean.webp" alt="ocean" title="規格：蔚藍海岸"></label>
                            </button>
                        </div>
                        <p>尺寸：</p>
                        <div class="mysize">
                            <input type="radio" name="calacatta-size" id="calacatta-size01" value="120×270×0.6cm 亮面">
                            <button class="check">
                                <label for="calacatta-size01">
                                    <div class="btn btn-secondary" id="calacatta-sizebtn01">120×270×0.6cm 亮面</div>
                                </label>
                            </button>
                            <input type="radio" name="calacatta-size" id="calacatta-size02" value="120×270×0.6cm 霧面">
                            <button class="check">
                                <label for="calacatta-size02">
                                    <div class="btn btn-secondary" id="calacatta-sizebtn02">120×270×0.6cm 霧面</div>
                                </label>
                            </button>
                        </div>
                        <form action="contact.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="products" value="details"><!-- 傳值用 -->
                            <input type="hidden" name="product-name">
                            <input type="hidden" id="calacatta-check-img" name="check-img">
                            <input type="hidden" id="calacatta-check-size" name="check-size">
                            <div class="row mydescription">
                                <a class="col btn btn-secondary" href="https://drive.google.com/u/0/uc?id=1T3N29XssL-nCs8KjDjgBMRAau0ySLIPe&export=download&confirm=t&uuid=0c89efef-e258-42b6-b732-ce137f538b46">下載材質檔</a>
                                <button class="col btn btn-secondary" type="submit">諮詢產品</button>
                            </div>
                        </form>
                        <script>
                        $(':radio[name="calacatta-size"]').change(function (){
                            var size = $(this).val();
                            $("#calacatta-check-size").attr("value",size);
                        });
                        $(':radio[name="calacatta"]').change(function (){
                            var item = $(this).val();
                            $("#calacatta-check-img").attr("value",item);
                            $("#calacatta-check-size").removeAttr("value");
                            if($("input[name=calacatta]")[0].checked){
                                $("#calacatta-size01").attr('disabled','ture');
                                $("#calacatta-sizebtn01").attr('title','本款未有此尺寸');
                                $("#calacatta-title").text('金色山脈');
                                $('[name="calacatta-name"]').attr('value','金色山脈')
                            } else {
                                $("#calacatta-size01").removeAttr('disabled');
                                $("#calacatta-sizebtn01").removeAttr('title');
                                $("#calacatta-title").text('蔚藍海岸');
                                $('[name="calacatta-name"]').attr('value','蔚藍海岸')
                            }
                        });
                        </script>
                    </div>
                </div>
            </div>
            <div class="details mmm jasper">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="box ">
                            <div class="mainCarousel mainCarousel18 carousel w-10/12 max-w-5xl mx-auto">
                                <div class="carousel__slide" data-src="images/products/sheet/jasper/original/Jasper Deco Moka Abujardado_1.webp" data-fancybox="gallery18">
                                    <img class="img-fluid" src="images/products/sheet/jasper/mainnail/01.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/jasper/original/Jasper Deco Moka Abujardado_2.webp" data-fancybox="gallery18">
                                    <img class="img-fluid" src="images/products/sheet/jasper/mainnail/02.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/jasper/original/Jasper Moka Abujardado + Azalai Negro Natural_1.webp" data-fancybox="gallery18">
                                    <img class="img-fluid" src="images/products/sheet/jasper/mainnail/03.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/jasper/original/Jasper Moka Abujardado + Blanco Abujardado.webp" data-fancybox="gallery18">
                                    <img class="img-fluid" src="images/products/sheet/jasper/mainnail/04.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/jasper/original/Jasper Moka Abujardado + Bosco Camel Natural.webp" data-fancybox="gallery18">
                                    <img class="img-fluid" src="images/products/sheet/jasper/mainnail/05.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/jasper/original/Jasper Moka Abujardado_4.webp" data-fancybox="gallery18">
                                    <img class="img-fluid" src="images/products/sheet/jasper/mainnail/06.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/jasper/original/Jasper Moka Abujardado_5.webp" data-fancybox="gallery18">
                                    <img class="img-fluid" src="images/products/sheet/jasper/mainnail/07.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/jasper/original/Jasper Moka Abujardado_7.webp" data-fancybox="gallery18">
                                    <img class="img-fluid" src="images/products/sheet/jasper/mainnail/08.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/jasper/original/Jasper Moka Abujardado_8.webp" data-fancybox="gallery18">
                                    <img class="img-fluid" src="images/products/sheet/jasper/mainnail/09.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/jasper/original/Jasper Moka Abujardado_10.webp" data-fancybox="gallery18">
                                    <img class="img-fluid" src="images/products/sheet/jasper/mainnail/10.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/jasper/original/Jasper Moka Abujardado_11.webp" data-fancybox="gallery18">
                                    <img class="img-fluid" src="images/products/sheet/jasper/mainnail/11.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/jasper/original/Jasper Moka Abujardado_12.webp" data-fancybox="gallery18">
                                    <img class="img-fluid" src="images/products/sheet/jasper/mainnail/12.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/jasper/original/Jasper Moka Abujardado_13.webp" data-fancybox="gallery18">
                                    <img class="img-fluid" src="images/products/sheet/jasper/mainnail/13.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/jasper/original/Jasper Moka Abujardado_14.webp" data-fancybox="gallery18">
                                    <img class="img-fluid" src="images/products/sheet/jasper/mainnail/14.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/jasper/original/Jasper Moka Abujardado_15.webp" data-fancybox="gallery18">
                                    <img class="img-fluid" src="images/products/sheet/jasper/mainnail/15.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/jasper/original/Jasper Moka Abujardado_16.webp" data-fancybox="gallery18">
                                    <img class="img-fluid" src="images/products/sheet/jasper/mainnail/16.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/jasper/original/JASPER MOKA ABUJARDADO 150X300  L1.webp" data-fancybox="gallery18">
                                    <img class="img-fluid" src="images/products/sheet/jasper/mainnail/17.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/jasper/original/JASPER MOKA ABUJARDADO 150X300  L2.webp" data-fancybox="gallery18">
                                    <img class="img-fluid" src="images/products/sheet/jasper/mainnail/18.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/jasper/original/JASPER MOKA ABUJARDADO 150X300  L3.webp" data-fancybox="gallery18">
                                    <img class="img-fluid" src="images/products/sheet/jasper/mainnail/19.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/jasper/original/JASPER MOKA ABUJARDADO 150X300  L4.webp" data-fancybox="gallery18">
                                    <img class="img-fluid" src="images/products/sheet/jasper/mainnail/20.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/jasper/original/JASPER MOKA ABUJARDADO 150X300  L5.webp" data-fancybox="gallery18">
                                    <img class="img-fluid" src="images/products/sheet/jasper/mainnail/21.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/jasper/original/JASPER MOKA ABUJARDADO 150X300  L6.webp" data-fancybox="gallery18">
                                    <img class="img-fluid" src="images/products/sheet/jasper/mainnail/22.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/jasper/original/JASPER MOKA ABUJARDADO 150X300  L7.webp" data-fancybox="gallery18">
                                    <img class="img-fluid" src="images/products/sheet/jasper/mainnail/23.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/jasper/original/JASPER MOKA ABUJARDADO 150X300  L8.webp" data-fancybox="gallery18">
                                    <img class="img-fluid" src="images/products/sheet/jasper/mainnail/24.webp">
                                </div>
                            </div>
                            <div class="thumbCarousel thumbCarousel18 carousel max-w-xl mx-auto">
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/jasper/thumbnail/01.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/jasper/thumbnail/02.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/jasper/thumbnail/03.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/jasper/thumbnail/04.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/jasper/thumbnail/05.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/jasper/thumbnail/06.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/jasper/thumbnail/07.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/jasper/thumbnail/08.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/jasper/thumbnail/09.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/jasper/thumbnail/10.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/jasper/thumbnail/11.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/jasper/thumbnail/12.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/jasper/thumbnail/13.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/jasper/thumbnail/14.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/jasper/thumbnail/15.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/jasper/thumbnail/16.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/jasper/thumbnail/17.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/jasper/thumbnail/18.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/jasper/thumbnail/19.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/jasper/thumbnail/20.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/jasper/thumbnail/21.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/jasper/thumbnail/22.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/jasper/thumbnail/23.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/jasper/thumbnail/24.webp">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul class="breadcrumb">
                            <li><a href="index.php"><span class="material-symbols-rounded">home</span>首頁</a></li>
                            <li><a href="products.php?category=sheet">產品</a></li>
                            <li><a href="products.php?category=sheet">薄板</a></li>
                            <li><a href="products.php?type=slate">板岩</a></li>
                        </ul>
                        <img src="images/about/corner.svg" alt="α-corner" title="品牌：可樂石" id="jasper-logo">
                        <h3 title="品名：賈斯柏">賈斯柏</h3>
                        <p>款式：</p>
                        <div class="small-img">
                            <input type="radio" name="jasper" id="jasper01">
                            <button class="check" onclick="mainCarousel18.slideTo(16)">
                                <label for="jasper01"><img class="jasper-img01" src="images/products/sheet/jasper/mockup-one.webp" alt="jasper" title="規格：單一款"></label>
                            </button>
                        </div>
                        <p>尺寸：</p>
                        <div class="mysize">
                            <input type="radio" name="jasper-size" id="jasper-size01">
                            <button class="check">
                                <label for="jasper-size01">
                                    <div class="btn btn-secondary" id="jasper-sizebtn01">100×250×0.6cm 刷面</div>
                                </label>
                            </button>
                        </div>
                        <form action="contact.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="products" value="details">
                            <input type="hidden" name="product-name" value="賈斯柏">
                            <input type="hidden" id="jasper-check-img" name="check-img" value="單一款">
                            <input type="hidden" id="jasper-check-size" name="check-size" value="100×250×0.6cm 刷面">
                            <div class="row mydescription">
                                <a class="col btn btn-secondary" href="https://drive.google.com/u/0/uc?id=1HmQUBqhQkRPG7nN6eGM7iBup-f-JCXeU&export=download">下載材質檔</a>
                                <button class="col btn btn-secondary" type="submit">諮詢產品</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="details mmm iseo">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="box ">
                            <div class="mainCarousel mainCarousel19 carousel w-10/12 max-w-5xl mx-auto">
                                <div class="carousel__slide" data-src="images/products/sheet/iseo/original/Inalco-Iseo-Slimker-made-in-Spain.webp" data-fancybox="gallery19">
                                    <img class="img-fluid" src="images/products/sheet/iseo/mainnail/01.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/iseo/original/Iseo Gris Abujardado_3.webp" data-fancybox="gallery19">
                                    <img class="img-fluid" src="images/products/sheet/iseo/mainnail/02.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/iseo/original/Iseo Gris Abujardado_4.webp" data-fancybox="gallery19">
                                    <img class="img-fluid" src="images/products/sheet/iseo/mainnail/03.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/iseo/original/Iseo Gris Abujardado_6.webp" data-fancybox="gallery19">
                                    <img class="img-fluid" src="images/products/sheet/iseo/mainnail/04.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/iseo/original/Iseo Gris Abujardado_7.webp" data-fancybox="gallery19">
                                    <img class="img-fluid" src="images/products/sheet/iseo/mainnail/05.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/iseo/original/Iseo Gris Abujardado_8.webp" data-fancybox="gallery19">
                                    <img class="img-fluid" src="images/products/sheet/iseo/mainnail/06.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/iseo/original/Iseo Gris Abujardado_9.webp" data-fancybox="gallery19">
                                    <img class="img-fluid" src="images/products/sheet/iseo/mainnail/07.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/iseo/original/Iseo Gris Abujardado_13.webp" data-fancybox="gallery19">
                                    <img class="img-fluid" src="images/products/sheet/iseo/mainnail/08.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/iseo/original/Iseo Gris Abujardado_14.webp" data-fancybox="gallery19">
                                    <img class="img-fluid" src="images/products/sheet/iseo/mainnail/09.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/iseo/original/Iseo Gris Abujardado_15.webp" data-fancybox="gallery19">
                                    <img class="img-fluid" src="images/products/sheet/iseo/mainnail/10.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/iseo/original/Iseo Gris Abujardado_18.webp" data-fancybox="gallery19">
                                    <img class="img-fluid" src="images/products/sheet/iseo/mainnail/11.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/iseo/original/Iseo Gris Abujardado_19.webp" data-fancybox="gallery19">
                                    <img class="img-fluid" src="images/products/sheet/iseo/mainnail/12.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/iseo/original/Iseo Gris Abujardado_20.webp" data-fancybox="gallery19">
                                    <img class="img-fluid" src="images/products/sheet/iseo/mainnail/13.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/iseo/original/Iseo Gris Abujardado_21.webp" data-fancybox="gallery19">
                                    <img class="img-fluid" src="images/products/sheet/iseo/mainnail/14.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/iseo/original/Iseo Gris Abujardado_23.webp" data-fancybox="gallery19">
                                    <img class="img-fluid" src="images/products/sheet/iseo/mainnail/15.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/iseo/original/Iseo Gris Abujardado_25.webp" data-fancybox="gallery19">
                                    <img class="img-fluid" src="images/products/sheet/iseo/mainnail/16.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/iseo/original/Iseo Gris Abujardado_26.webp" data-fancybox="gallery19">
                                    <img class="img-fluid" src="images/products/sheet/iseo/mainnail/17.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/iseo/original/Iseo Gris Abujardado_29.webp" data-fancybox="gallery19">
                                    <img class="img-fluid" src="images/products/sheet/iseo/mainnail/18.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/iseo/original/Iseo Gris Abujardado_30.webp" data-fancybox="gallery19">
                                    <img class="img-fluid" src="images/products/sheet/iseo/mainnail/19.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/iseo/original/Iseo Gris Abujardado_32.webp" data-fancybox="gallery19">
                                    <img class="img-fluid" src="images/products/sheet/iseo/mainnail/20.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/iseo/original/ISEO GRIS L1.webp" data-fancybox="gallery19">
                                    <img class="img-fluid" src="images/products/sheet/iseo/mainnail/21.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/iseo/original/ISEO GRIS L2.webp" data-fancybox="gallery19">
                                    <img class="img-fluid" src="images/products/sheet/iseo/mainnail/22.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/iseo/original/ISEO GRIS L3.webp" data-fancybox="gallery19">
                                    <img class="img-fluid" src="images/products/sheet/iseo/mainnail/23.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/iseo/original/ISEO GRIS L4.webp" data-fancybox="gallery19">
                                    <img class="img-fluid" src="images/products/sheet/iseo/mainnail/24.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/iseo/original/ISEO GRIS L5.webp" data-fancybox="gallery19">
                                    <img class="img-fluid" src="images/products/sheet/iseo/mainnail/25.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/iseo/original/ISEO GRIS L6.webp" data-fancybox="gallery19">
                                    <img class="img-fluid" src="images/products/sheet/iseo/mainnail/26.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/iseo/original/ISEO GRIS L7.webp" data-fancybox="gallery19">
                                    <img class="img-fluid" src="images/products/sheet/iseo/mainnail/27.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/iseo/original/ISEO GRIS L8.webp" data-fancybox="gallery19">
                                    <img class="img-fluid" src="images/products/sheet/iseo/mainnail/28.webp">
                                </div>
                            </div>
                            <div class="thumbCarousel thumbCarousel19 carousel max-w-xl mx-auto">
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/iseo/thumbnail/01.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/iseo/thumbnail/02.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/iseo/thumbnail/03.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/iseo/thumbnail/04.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/iseo/thumbnail/05.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/iseo/thumbnail/06.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/iseo/thumbnail/07.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/iseo/thumbnail/08.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/iseo/thumbnail/09.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/iseo/thumbnail/10.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/iseo/thumbnail/11.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/iseo/thumbnail/12.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/iseo/thumbnail/13.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/iseo/thumbnail/14.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/iseo/thumbnail/15.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/iseo/thumbnail/16.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/iseo/thumbnail/17.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/iseo/thumbnail/18.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/iseo/thumbnail/19.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/iseo/thumbnail/20.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/iseo/thumbnail/21.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/iseo/thumbnail/22.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/iseo/thumbnail/23.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/iseo/thumbnail/24.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/iseo/thumbnail/25.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/iseo/thumbnail/26.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/iseo/thumbnail/27.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/iseo/thumbnail/28.webp">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul class="breadcrumb">
                            <li><a href="index.php"><span class="material-symbols-rounded">home</span>首頁</a></li>
                            <li><a href="products.php?category=sheet">產品</a></li>
                            <li><a href="products.php?category=sheet">薄板</a></li>
                            <!-- <li>磨石子</li> -->
                        </ul>
                        <img src="images/about/corner.svg" alt="α-corner" title="品牌：可樂石" id="iseo-logo">
                        <h3 title="品名：伊西歐">伊西歐</h3>
                        <p class="subtitle">產自義大利倫巴底省的ISEO小鎮，其北方湖泊的石材已被使用了2000多年之久，灰色大理石樣式的石錘琢面，ISEO結合了天然素材的多樣化及魅力，演釋出最新的潮流風格。 <span class="badge badge-secondary">#大size磁磚</span> <span class="badge badge-secondary">#薄板</span> <span class="badge badge-secondary">#莫蘭迪</span></p>
                        <p>款式：</p>
                        <div class="small-img">
                            <input type="radio" name="iseo" id="iseo01">
                            <button class="check" onclick="mainCarousel19.slideTo(20)">
                                <label for="iseo01"><img class="iseo-img01" src="images/products/sheet/iseo/mockup-one.webp" alt="iseo" title="規格：單一款"></label>
                            </button>
                        </div>
                        <p>尺寸：</p>
                        <div class="mysize">
                            <input type="radio" name="iseo-size" id="iseo-size01">
                            <button class="check">
                                <label for="iseo-size01">
                                    <div class="btn btn-secondary" id="iseo-sizebtn01">100×250×0.6cm 刷面</div>
                                </label>
                            </button>
                        </div>
                        <form action="contact.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="products" value="details">
                            <input type="hidden" name="product-name" value="伊西歐">
                            <input type="hidden" id="fibre-check-img" name="check-img" value="單一款">
                            <input type="hidden" id="fibre-check-size" name="check-size" value="100×250×0.6cm 刷面">
                            <div class="row mydescription">
                                <a class="col btn btn-secondary" href="https://drive.google.com/u/0/uc?id=1v707H_zx8gZycXLGsocua7t2VUeC-jqA&export=download">下載材質檔</a>
                                <button class="col btn btn-secondary" type="submit">諮詢產品</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="details mmm petra">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="box ">
                            <div class="mainCarousel mainCarousel20 carousel w-10/12 max-w-5xl mx-auto">
                                <div class="carousel__slide" data-src="images/products/sheet/petra/original/Petra Crema Natural + Petra ITOP Crema Abujardado_1.webp" data-fancybox="gallery20">
                                    <img class="img-fluid" src="images/products/sheet/petra/mainnail/01.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/petra/original/Petra Crema Natural + Petra ITOP Crema Abujardado_2.webp" data-fancybox="gallery20">
                                    <img class="img-fluid" src="images/products/sheet/petra/mainnail/02.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/petra/original/Petra Crema Natural + Petra ITOP Crema Abujardado_3.webp" data-fancybox="gallery20">
                                    <img class="img-fluid" src="images/products/sheet/petra/mainnail/03.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/petra/original/Petra Crema Natural + Petra ITOP Crema Bush-hammered + Arizona Fresno Natural.webp" data-fancybox="gallery20">
                                    <img class="img-fluid" src="images/products/sheet/petra/mainnail/04.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/petra/original/Petra Crema Natural_2.webp" data-fancybox="gallery20">
                                    <img class="img-fluid" src="images/products/sheet/petra/mainnail/05.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/petra/original/Petra Crema Natural_3.webp" data-fancybox="gallery20">
                                    <img class="img-fluid" src="images/products/sheet/petra/mainnail/06.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/petra/original/Petra Crema Natural_8.webp" data-fancybox="gallery20">
                                    <img class="img-fluid" src="images/products/sheet/petra/mainnail/07.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/petra/original/Petra Crema Natural_9.webp" data-fancybox="gallery20">
                                    <img class="img-fluid" src="images/products/sheet/petra/mainnail/08.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/petra/original/Petra Crema Natural_12.webp" data-fancybox="gallery20">
                                    <img class="img-fluid" src="images/products/sheet/petra/mainnail/09.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/petra/original/Petra Crema Natural_14.webp" data-fancybox="gallery20">
                                    <img class="img-fluid" src="images/products/sheet/petra/mainnail/10.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/petra/original/Petra Crema Natural_15.webp" data-fancybox="gallery20">
                                    <img class="img-fluid" src="images/products/sheet/petra/mainnail/11.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/petra/original/Petra Crema Natural_16.webp" data-fancybox="gallery20">
                                    <img class="img-fluid" src="images/products/sheet/petra/mainnail/12.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/petra/original/Petra Crema Natural_19.webp" data-fancybox="gallery20">
                                    <img class="img-fluid" src="images/products/sheet/petra/mainnail/13.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/petra/original/Petra Crema Natural_25.webp" data-fancybox="gallery20">
                                    <img class="img-fluid" src="images/products/sheet/petra/mainnail/14.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/petra/original/PETRA CREMA L1.webp" data-fancybox="gallery20">
                                    <img class="img-fluid" src="images/products/sheet/petra/mainnail/15.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/petra/original/PETRA CREMA L2.webp" data-fancybox="gallery20">
                                    <img class="img-fluid" src="images/products/sheet/petra/mainnail/16.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/petra/original/PETRA CREMA L3.webp" data-fancybox="gallery20">
                                    <img class="img-fluid" src="images/products/sheet/petra/mainnail/17.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/petra/original/PETRA CREMA L4.webp" data-fancybox="gallery20">
                                    <img class="img-fluid" src="images/products/sheet/petra/mainnail/18.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/petra/original/PETRA CREMA L5.webp" data-fancybox="gallery20">
                                    <img class="img-fluid" src="images/products/sheet/petra/mainnail/19.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/petra/original/PETRA CREMA L6.webp" data-fancybox="gallery20">
                                    <img class="img-fluid" src="images/products/sheet/petra/mainnail/20.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/petra/original/PETRA CREMA L7.webp" data-fancybox="gallery20">
                                    <img class="img-fluid" src="images/products/sheet/petra/mainnail/21.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/petra/original/PETRA CREMA L8.webp" data-fancybox="gallery20">
                                    <img class="img-fluid" src="images/products/sheet/petra/mainnail/22.webp">
                                </div>
                            </div>
                            <div class="thumbCarousel thumbCarousel20 carousel max-w-xl mx-auto">
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/petra/thumbnail/01.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/petra/thumbnail/02.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/petra/thumbnail/03.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/petra/thumbnail/04.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/petra/thumbnail/05.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/petra/thumbnail/06.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/petra/thumbnail/07.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/petra/thumbnail/08.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/petra/thumbnail/09.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/petra/thumbnail/10.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/petra/thumbnail/11.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/petra/thumbnail/12.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/petra/thumbnail/13.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/petra/thumbnail/14.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/petra/thumbnail/15.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/petra/thumbnail/16.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/petra/thumbnail/17.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/petra/thumbnail/18.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/petra/thumbnail/19.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/petra/thumbnail/20.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/petra/thumbnail/21.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/petra/thumbnail/22.webp">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul class="breadcrumb">
                            <li><a href="index.php"><span class="material-symbols-rounded">home</span>首頁</a></li>
                            <li><a href="products.php?category=sheet">產品</a></li>
                            <li><a href="products.php?category=sheet">薄板</a></li>
                            <li><a href="products.php?type=slate">板岩</a></li>
                        </ul>
                        <img src="images/about/corner.svg" alt="α-corner" title="品牌：可樂石" id="petra-logo">
                        <h3 title="品名：佩特拉">佩特拉</h3>
                        <p>款式：</p>
                        <div class="small-img">
                            <input type="radio" name="petra" id="petra01">
                            <button class="check" onclick="mainCarousel20.slideTo(14)">
                                <label for="petra01"><img class="petra-img01" src="images/products/sheet/petra/mockup-one.webp" alt="petra" title="規格：單一款"></label>
                            </button>
                        </div>
                        <p>尺寸：</p>
                        <div class="mysize">
                            <input type="radio" name="petra-size" id="petra-size01">
                            <button class="check">
                                <label for="petra-size01">
                                    <div class="btn btn-secondary" id="petra-sizebtn01">100×250×0.6cm 刷面</div>
                                </label>
                            </button>
                        </div>
                        <form action="contact.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="products" value="details"><!-- 傳值用 -->
                            <input type="hidden" name="product-name" value="佩特拉">
                            <input type="hidden" id="petra-check-img" name="check-img" value="單一款">
                            <input type="hidden" id="petra-check-size" name="check-size" value="100×250×0.6cm 刷面">
                            <div class="row mydescription">
                                <a class="col btn btn-secondary" href="https://drive.google.com/u/0/uc?id=1tFQo-SZEyvvoF_S48aHtNWqzlnKuCJTm&export=download">下載材質檔</a>
                                <button class="col btn btn-secondary" type="submit">諮詢產品</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="details mmm azalai">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="box ">
                            <div class="mainCarousel mainCarousel21 carousel w-10/12 max-w-5xl mx-auto">
                                <div class="carousel__slide" data-src="images/products/sheet/azalai/original/Azalai Negro Natural + Bosco Camel Natural.webp" data-fancybox="gallery21">
                                    <img class="img-fluid" src="images/products/sheet/azalai/mainnail/01.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/azalai/original/Azalai Negro Natural + Jasper Moka Bush-hammered.webp" data-fancybox="gallery21">
                                    <img class="img-fluid" src="images/products/sheet/azalai/mainnail/02.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/azalai/original/Azalai Negro Natural + Storm Gris Natural.webp" data-fancybox="gallery21">
                                    <img class="img-fluid" src="images/products/sheet/azalai/mainnail/03.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/azalai/original/Azalai Negro Natural_2.webp" data-fancybox="gallery21">
                                    <img class="img-fluid" src="images/products/sheet/azalai/mainnail/04.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/azalai/original/Azalai Negro Natural_3.webp" data-fancybox="gallery21">
                                    <img class="img-fluid" src="images/products/sheet/azalai/mainnail/05.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/azalai/original/Azalai Negro Natural_4.webp" data-fancybox="gallery21">
                                    <img class="img-fluid" src="images/products/sheet/azalai/mainnail/06.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/azalai/original/Azalai Negro Natural_5.webp" data-fancybox="gallery21">
                                    <img class="img-fluid" src="images/products/sheet/azalai/mainnail/07.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/azalai/original/Azalai Negro Natural_6.webp" data-fancybox="gallery21">
                                    <img class="img-fluid" src="images/products/sheet/azalai/mainnail/08.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/azalai/original/Azalai Negro Natural_9.webp" data-fancybox="gallery21">
                                    <img class="img-fluid" src="images/products/sheet/azalai/mainnail/09.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/azalai/original/AZALAI NEGRO NATURAL L1.webp" data-fancybox="gallery21">
                                    <img class="img-fluid" src="images/products/sheet/azalai/mainnail/10.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/azalai/original/AZALAI NEGRO NATURAL L2.webp" data-fancybox="gallery21">
                                    <img class="img-fluid" src="images/products/sheet/azalai/mainnail/11.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/azalai/original/AZALAI NEGRO NATURAL L3.webp" data-fancybox="gallery21">
                                    <img class="img-fluid" src="images/products/sheet/azalai/mainnail/12.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/azalai/original/AZALAI NEGRO NATURAL L4.webp" data-fancybox="gallery21">
                                    <img class="img-fluid" src="images/products/sheet/azalai/mainnail/13.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/azalai/original/AZALAI NEGRO NATURAL L5.webp" data-fancybox="gallery21">
                                    <img class="img-fluid" src="images/products/sheet/azalai/mainnail/14.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/azalai/original/AZALAI NEGRO NATURAL L6.webp" data-fancybox="gallery21">
                                    <img class="img-fluid" src="images/products/sheet/azalai/mainnail/15.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/azalai/original/AZALAI NEGRO NATURAL L7.webp" data-fancybox="gallery21">
                                    <img class="img-fluid" src="images/products/sheet/azalai/mainnail/16.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/azalai/original/AZALAI NEGRO NATURAL L8.webp" data-fancybox="gallery21">
                                    <img class="img-fluid" src="images/products/sheet/azalai/mainnail/17.webp">
                                </div>
                            </div>
                            <div class="thumbCarousel thumbCarousel21 carousel max-w-xl mx-auto">
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/azalai/thumbnail/01.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/azalai/thumbnail/02.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/azalai/thumbnail/03.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/azalai/thumbnail/04.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/azalai/thumbnail/05.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/azalai/thumbnail/06.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/azalai/thumbnail/07.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/azalai/thumbnail/08.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/azalai/thumbnail/09.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/azalai/thumbnail/10.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/azalai/thumbnail/11.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/azalai/thumbnail/12.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/azalai/thumbnail/13.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/azalai/thumbnail/14.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/azalai/thumbnail/15.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/azalai/thumbnail/16.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/azalai/thumbnail/17.webp">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul class="breadcrumb">
                            <li><a href="index.php"><span class="material-symbols-rounded">home</span>首頁</a></li>
                            <li><a href="products.php?category=sheet">產品</a></li>
                            <li><a href="products.php?category=sheet">薄板</a></li>
                            <li><a href="products.php?type=marble">大理石</a></li>
                        </ul>
                        <img src="images/about/corner.svg" alt="α-corner" title="品牌：可樂石" id="azalai-logo">
                        <h3 title="品名：聖羅蘭">聖羅蘭</h3>
                        <p>款式：</p>
                        <div class="small-img">
                            <input type="radio" name="azalai" id="azalai01">
                            <button class="check" onclick="mainCarousel21.slideTo(9)">
                                <label for="azalai01"><img class="azalai-img01" src="images/products/sheet/azalai/mockup-one.webp" alt="azalai" title="規格：單一款"></label>
                            </button>
                        </div>
                        <p>尺寸：</p>
                        <div class="mysize">
                            <input type="radio" name="azalai-size" id="azalai-size01">
                            <button class="check">
                                <label for="azalai-size01">
                                    <div class="btn btn-secondary" id="azalai-sizebtn01">100×250×0.6cm 霧面</div>
                                </label>
                            </button>
                        </div>
                        <form action="contact.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="products" value="details"><!-- 傳值用 -->
                            <input type="hidden" name="product-name" value="聖羅蘭">
                            <input type="hidden" id="azalai-check-img" name="check-img" value="單一款">
                            <input type="hidden" id="azalai-check-size" name="check-size" value="100×250×0.6cm 霧面">
                            <div class="row mydescription">
                                <a class="col btn btn-secondary" href="https://drive.google.com/u/0/uc?id=1Prtc2TBX6Zy0L82c-TRTksXJ8EIgoEsQ&export=download">下載材質檔</a>
                                <button class="col btn btn-secondary" type="submit">諮詢產品</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="details mmm arizona">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="box ">
                            <div class="mainCarousel mainCarousel22 carousel w-10/12 max-w-5xl mx-auto">
                                <div class="carousel__slide" data-src="images/products/sheet/arizona/original/Arizona Fresno Natural + Jasper ITOP Moka Abujardado.webp" data-fancybox="gallery22">
                                    <img class="img-fluid" src="images/products/sheet/arizona/mainnail/01.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/arizona/original/Arizona Fresno Natural.webp" data-fancybox="gallery22">
                                    <img class="img-fluid" src="images/products/sheet/arizona/mainnail/02.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/arizona/original/Arizona Fresno Natural_1.webp" data-fancybox="gallery22">
                                    <img class="img-fluid" src="images/products/sheet/arizona/mainnail/03.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/arizona/original/Arizona Fresno Natural_2.webp" data-fancybox="gallery22">
                                    <img class="img-fluid" src="images/products/sheet/arizona/mainnail/04.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/arizona/original/Arizona Fresno Natural_3.webp" data-fancybox="gallery22">
                                    <img class="img-fluid" src="images/products/sheet/arizona/mainnail/05.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/arizona/original/Arizona Fresno Natural_4.webp" data-fancybox="gallery22">
                                    <img class="img-fluid" src="images/products/sheet/arizona/mainnail/06.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/arizona/original/Arizona Fresno Natural_5.webp" data-fancybox="gallery22">
                                    <img class="img-fluid" src="images/products/sheet/arizona/mainnail/07.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/arizona/original/Arizona Fresno Natural_6.webp" data-fancybox="gallery22">
                                    <img class="img-fluid" src="images/products/sheet/arizona/mainnail/08.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/arizona/original/Arizona Fresno Natural_7.webp" data-fancybox="gallery22">
                                    <img class="img-fluid" src="images/products/sheet/arizona/mainnail/09.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/arizona/original/Arizona Fresno Natural_8.webp" data-fancybox="gallery22">
                                    <img class="img-fluid" src="images/products/sheet/arizona/mainnail/10.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/arizona/original/ARIZONA FRESNO L1.webp" data-fancybox="gallery22">
                                    <img class="img-fluid" src="images/products/sheet/arizona/mainnail/11.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/arizona/original/ARIZONA FRESNO L2.webp" data-fancybox="gallery22">
                                    <img class="img-fluid" src="images/products/sheet/arizona/mainnail/12.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/arizona/original/ARIZONA FRESNO L3.webp" data-fancybox="gallery22">
                                    <img class="img-fluid" src="images/products/sheet/arizona/mainnail/13.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/arizona/original/ARIZONA FRESNO L4.webp" data-fancybox="gallery22">
                                    <img class="img-fluid" src="images/products/sheet/arizona/mainnail/14.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/arizona/original/ARIZONA FRESNO L5.webp" data-fancybox="gallery22">
                                    <img class="img-fluid" src="images/products/sheet/arizona/mainnail/15.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/arizona/original/ARIZONA FRESNO L6 .webp" data-fancybox="gallery22">
                                    <img class="img-fluid" src="images/products/sheet/arizona/mainnail/16.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/arizona/original/ARIZONA FRESNO L7 .webp" data-fancybox="gallery22">
                                    <img class="img-fluid" src="images/products/sheet/arizona/mainnail/17.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/arizona/original/ARIZONA FRESNO L8 .webp" data-fancybox="gallery22">
                                    <img class="img-fluid" src="images/products/sheet/arizona/mainnail/18.webp">
                                </div>
                            </div>
                            <div class="thumbCarousel thumbCarousel22 carousel max-w-xl mx-auto">
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/arizona/thumbnail/01.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/arizona/thumbnail/02.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/arizona/thumbnail/03.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/arizona/thumbnail/04.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/arizona/thumbnail/05.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/arizona/thumbnail/06.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/arizona/thumbnail/07.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/arizona/thumbnail/08.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/arizona/thumbnail/09.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/arizona/thumbnail/10.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/arizona/thumbnail/11.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/arizona/thumbnail/12.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/arizona/thumbnail/13.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/arizona/thumbnail/14.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/arizona/thumbnail/15.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/arizona/thumbnail/16.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/arizona/thumbnail/17.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/arizona/thumbnail/18.webp">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul class="breadcrumb">
                            <li><a href="index.php"><span class="material-symbols-rounded">home</span>首頁</a></li>
                            <li><a href="products.php?category=sheet">產品</a></li>
                            <li><a href="products.php?category=sheet">薄板</a></li>
                            <li><a href="products.php?type=woodgrain">木紋</a></li>
                        </ul>
                        <img src="images/about/corner.svg" alt="α-corner" title="品牌：可樂石" id="arizona-logo">
                        <h3 title="品名：亞利桑納">亞利桑納</h3>
                        <p>款式：</p>
                        <div class="small-img">
                            <input type="radio" name="arizona" id="arizona01">
                            <button class="check" onclick="mainCarousel22.slideTo(10)">
                                <label for="arizona01"><img class="arizona-img01" src="images/products/sheet/arizona/mockup-one.webp" alt="arizona" title="規格：單一款"></label>
                            </button>
                        </div>
                        <p>尺寸：</p>
                        <div class="mysize">
                            <input type="radio" name="arizona-size" id="arizona-size01">
                            <button class="check">
                                <label for="arizona-size01">
                                    <div class="btn btn-secondary" id="arizona-sizebtn01">150×320×0.6cm 霧面(未修邊)</div>
                                </label>
                            </button>
                        </div>
                        <p>說明：</p>
                        <p>本產品顏色由最深到最淺有8種變化，無法挑選固定色階，請留意；未修邊代表當牆面或是地磚整磚使用時，會有額外加工費用產生。</p>
                        <form action="contact.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="products" value="details">
                            <input type="hidden" name="product-name" value="亞利桑納">
                            <input type="hidden" id="arizona-check-img" name="check-img" value="單一款">
                            <input type="hidden" id="arizona-check-size" name="check-size" value="150×320×0.6cm 霧面(未修邊)">
                            <div class="row mydescription">
                                <a class="col btn btn-secondary" href="https://drive.google.com/u/0/uc?id=1_rG_yH1YZTaMxnQFJqEUET_76PuRbZSz&export=download">下載材質檔</a>
                                <button class="col btn btn-secondary" type="submit">諮詢產品</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="details mmm fusion">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="box ">
                            <div class="mainCarousel mainCarousel23 carousel w-10/12 max-w-5xl mx-auto">
                                <div class="carousel__slide" data-src="images/products/sheet/fusion/original/Fusion Iris Natural_1.webp" data-fancybox="gallery23">
                                    <img class="img-fluid" src="images/products/sheet/fusion/mainnail/01.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/fusion/original/Fusion Iris Natural_2.webp" data-fancybox="gallery23">
                                    <img class="img-fluid" src="images/products/sheet/fusion/mainnail/02.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/fusion/original/Fusion Iris Natural_3.webp" data-fancybox="gallery23">
                                    <img class="img-fluid" src="images/products/sheet/fusion/mainnail/03.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/fusion/original/Fusion Iris Natural_4.webp" data-fancybox="gallery23">
                                    <img class="img-fluid" src="images/products/sheet/fusion/mainnail/04.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/fusion/original/Fusion Iris Natural_6.webp" data-fancybox="gallery23">
                                    <img class="img-fluid" src="images/products/sheet/fusion/mainnail/05.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/fusion/original/FUSION-Porcelain-stoneware-wall-floor-tiles-INALCO-INDUSTRIAS-ALCORENSES-CONFEDERADAS-241080-rela6e6b2ae.webp" data-fancybox="gallery23">
                                    <img class="img-fluid" src="images/products/sheet/fusion/mainnail/06.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/fusion/original/g-piscina-fusion1.webp" data-fancybox="gallery23">
                                    <img class="img-fluid" src="images/products/sheet/fusion/mainnail/07.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/fusion/original/g-piscina-fusion2.webp" data-fancybox="gallery23">
                                    <img class="img-fluid" src="images/products/sheet/fusion/mainnail/08.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/fusion/original/FUSION IRIS NATURAL 100X250 cm.webp" data-fancybox="gallery23">
                                    <img class="img-fluid" src="images/products/sheet/fusion/mainnail/09.webp">
                                </div>
                            </div>
                            <div class="thumbCarousel thumbCarousel23 carousel max-w-xl mx-auto">
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/fusion/thumbnail/01.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/fusion/thumbnail/02.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/fusion/thumbnail/03.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/fusion/thumbnail/04.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/fusion/thumbnail/05.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/fusion/thumbnail/06.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/fusion/thumbnail/07.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/fusion/thumbnail/08.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/fusion/thumbnail/09.webp">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul class="breadcrumb">
                            <li><a href="index.php"><span class="material-symbols-rounded">home</span>首頁</a></li>
                            <li><a href="products.php?category=sheet">產品</a></li>
                            <li><a href="products.php?category=sheet">薄板</a></li>
                            <li>金屬</li>
                        </ul>
                        <img src="images/about/corner.svg" alt="α-corner" title="品牌：可樂石" id="fusion-logo">
                        <h3 title="品名：錦繡綠">錦繡綠</h3>
                        <p>款式：</p>
                        <div class="small-img">
                            <input type="radio" name="fusion" id="fusion01">
                            <button class="check" onclick="mainCarousel23.slideTo(8)">
                                <label for="fusion01"><img class="fusion-img01" src="images/products/sheet/fusion/mockup-one.webp" alt="fusion" title="規格：單一款"></label>
                            </button>
                        </div>
                        <p>尺寸：</p>
                        <div class="mysize">
                            <input type="radio" name="fusion-size" id="fusion-size01">
                            <button class="check">
                                <label for="fusion-size01">
                                    <div class="btn btn-secondary" id="fusion-sizebtn01">100×250×0.6cm 刷面(特殊)</div>
                                </label>
                            </button>
                        </div>
                        <p>說明：</p>
                        <p>每片採自然氧化後再窯燒效果，不會有重複版面。</p>
                        <form action="contact.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="products" value="details"><!-- 傳值用 -->
                            <input type="hidden" name="product-name" value="錦繡綠">
                            <input type="hidden" id="fibre-check-img" name="check-img" value="單一款">
                            <input type="hidden" id="fibre-check-size" name="check-size" value="100×250×0.6cm 刷面(特殊)">
                            <div class="row mydescription">
                                <a class="col btn btn-secondary" href="https://drive.google.com/u/0/uc?id=1mw_guiaLsYL0fLxqlvn0H8vLEPQqLke1&export=download">下載材質檔</a>
                                <button class="col btn btn-secondary" type="submit">諮詢產品</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="details mmm pandora">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="box ">
                            <div class="mainCarousel mainCarousel24 carousel w-10/12 max-w-5xl mx-auto">
                                <div class="carousel__slide" data-src="images/products/sheet/pandora/original/Amb.webp" data-fancybox="gallery24">
                                    <img class="img-fluid" src="images/products/sheet/pandora/mainnail/01.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/pandora/original/Pandora 1000x3000x6 1.webp" data-fancybox="gallery24">
                                    <img class="img-fluid" src="images/products/sheet/pandora/mainnail/02.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/pandora/original/Pandora 1000x3000x6 2.webp" data-fancybox="gallery24">
                                    <img class="img-fluid" src="images/products/sheet/pandora/mainnail/03.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/pandora/original/Pandora 1000x3000x6 3.webp" data-fancybox="gallery24">
                                    <img class="img-fluid" src="images/products/sheet/pandora/mainnail/04.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/pandora/original/Pandora 1000x3000x6 4.webp" data-fancybox="gallery24">
                                    <img class="img-fluid" src="images/products/sheet/pandora/mainnail/05.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/pandora/original/BATHROOM SAHARA NOIR WHITE 60X60.webp" data-fancybox="gallery24">
                                    <img class="img-fluid" src="images/products/sheet/pandora/mainnail/06.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/pandora/original/SAHARA WHITE 120X120 FLOOR REV 2.webp" data-fancybox="gallery24">
                                    <img class="img-fluid" src="images/products/sheet/pandora/mainnail/07.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/pandora/original/Sahara White F 1a.webp" data-fancybox="gallery24">
                                    <img class="img-fluid" src="images/products/sheet/pandora/mainnail/08.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/pandora/original/Sahara White F 1b.webp" data-fancybox="gallery24">
                                    <img class="img-fluid" src="images/products/sheet/pandora/mainnail/09.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/pandora/original/Sahara White F 2a.webp" data-fancybox="gallery24">
                                    <img class="img-fluid" src="images/products/sheet/pandora/mainnail/10.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/pandora/original/Sahara White F 2b.webp" data-fancybox="gallery24">
                                    <img class="img-fluid" src="images/products/sheet/pandora/mainnail/11.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/pandora/original/Sahara White F 3a.webp" data-fancybox="gallery24">
                                    <img class="img-fluid" src="images/products/sheet/pandora/mainnail/12.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/pandora/original/Sahara White F 3b.webp" data-fancybox="gallery24">
                                    <img class="img-fluid" src="images/products/sheet/pandora/mainnail/13.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/pandora/original/Sahara White F 4a nuova.webp" data-fancybox="gallery24">
                                    <img class="img-fluid" src="images/products/sheet/pandora/mainnail/14.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/pandora/original/Sahara White F 4b nuova.webp" data-fancybox="gallery24">
                                    <img class="img-fluid" src="images/products/sheet/pandora/mainnail/15.webp">
                                </div>
                            </div>
                            <div class="thumbCarousel thumbCarousel24 carousel max-w-xl mx-auto">
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/pandora/thumbnail/01.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/pandora/thumbnail/02.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/pandora/thumbnail/03.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/pandora/thumbnail/04.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/pandora/thumbnail/05.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/pandora/thumbnail/06.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/pandora/thumbnail/07.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/pandora/thumbnail/08.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/pandora/thumbnail/09.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/pandora/thumbnail/10.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/pandora/thumbnail/11.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/pandora/thumbnail/12.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/pandora/thumbnail/13.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/pandora/thumbnail/14.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/pandora/thumbnail/15.webp">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul class="breadcrumb">
                            <li><a href="index.php"><span class="material-symbols-rounded">home</span>首頁</a></li>
                            <li><a href="products.php?category=sheet">產品</a></li>
                            <li><a href="products.php?category=sheet">薄板</a></li>
                            <li><a href="products.php?type=marble">大理石</a></li>
                        </ul>
                        <img src="images/about/corner.svg" alt="α-corner" title="品牌：可樂石" id="pandora-logo"><!-- 選擇款式時 品牌改變 -->
                        <h3 title="品名：潘朵拉系列">潘朵拉系列</h3>
                        <p>款式：</p>
                        <div class="small-img">
                            <input type="radio" name="pandora" id="pandora01" value="亮白">
                            <button class="check" onclick="mainCarousel24.slideTo(1)">
                                <label for="pandora01"><img class="pandora-img01" src="images/products/sheet/pandora/mockup-lustroso.webp" alt="潘朵拉" title="規格：亮白"></label>
                            </button>
                            <input type="radio" name="pandora" id="pandora02" value="霧白">
                            <button class="check" onclick="mainCarousel24.slideTo(7)">
                                <label for="pandora02"><img class="pandora-img02" src="images/products/sheet/pandora/mockup-mate.webp" alt="潘朵拉" title="規格：霧白"></label>
                            </button>
                        </div>
                        <p>尺寸：</p>
                        <div class="mysize">
                            <input type="radio" name="pandora-size" id="pandora-size01" value="100×300×0.6cm 亮面">
                            <button class="check">
                                <label for="pandora-size01">
                                    <div class="btn btn-secondary" id="pandora-sizebtn01">100×300×0.6cm 亮面</div>
                                </label>
                            </button>
                            <input type="radio" name="pandora-size" id="pandora-size02" value="120×270×0.6cm 霧面">
                            <button class="check">
                                <label for="pandora-size02">
                                    <div class="btn btn-secondary"id="pandora-sizebtn02">120×270×0.6cm 霧面</div>
                                </label>
                            </button>
                        </div>
                        <p>說明：</p>
                        <p>本產品不同片之間會有深淺底色落差，屬正常現象</p>
                        <form action="contact.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="products" value="details"><!-- 傳值用 -->
                            <input type="hidden" name="product-name" value="潘朵拉">
                            <input type="hidden" id="pandora-check-img" name="check-img">
                            <input type="hidden" id="pandora-check-size" name="check-size">
                            <div class="row mydescription">
                                <a class="col btn btn-secondary" href="https://drive.google.com/u/0/uc?id=1uKq1t56L70e0Kwk0zxIYbuuQquTgbRVt&export=download">下載材質檔</a>
                                <button class="col btn btn-secondary" type="submit">諮詢產品</button>
                            </div>
                        </form>
                        <script>
                        $(':radio[name="pandora-size"]').change(function (){
                            var size = $(this).val();
                            $("#pandora-check-size").attr("value",size);
                        });
                        $(':radio[name="pandora"]').change(function (){
                            var item = $(this).val();
                            $("#pandora-check-img").attr("value",item);
                            $("#pandora-check-size").removeAttr("value");
                            if($("input[name=pandora]")[0].checked){
                                $("#pandora-logo").attr({
                                    'src' : 'images/about/corner.svg',
                                    'alt' : 'α-corner',
                                    'title' : '品牌：可樂石'
                                }).css('padding','.625rem 0');
                                
                                $("#pandora-size02").attr('disabled','ture');
                                $("#pandora-sizebtn02").attr('title','本款未有此尺寸');
                                $("#pandora-size01").removeAttr('disabled');
                                $("#pandora-sizebtn01").removeAttr('title');
                                $("#myInout2 .mybtn2").removeClass("active");
                                $("#myInout2 .mybtn2").eq(1).addClass("active");
                            } else {
                                $("#pandora-logo").attr({
                                    'src' : 'images/about/eternal.svg',
                                    'alt' : 'α-eternal',
                                    'title' : '品牌：達理石'
                                }).css('padding','.625rem 0 .125rem');  //外層連結進活力時要將get網址做判別外,再加上此列
                                $("#pandora-size01").attr('disabled','ture');
                                $("#pandora-sizebtn01").attr('title','本款未有此尺寸');
                                $("#pandora-size02").removeAttr('disabled');
                                $("#pandora-sizebtn02").removeAttr('title');
                                $("#myInout2 .mybtn2").removeClass("active");
                                $("#myInout2 .mybtn2").eq(2).addClass("active");
                            }
                        });
                        </script>
                    </div>
                </div>
            </div>
            <div class="details mmm portobello">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="box ">
                            <div class="mainCarousel mainCarousel25 carousel w-10/12 max-w-5xl mx-auto">
                                <div class="carousel__slide" data-src="images/products/sheet/portobello/original/AMB PORTOBELLO.webp" data-fancybox="gallery25">
                                    <img class="img-fluid" src="images/products/sheet/portobello/mainnail/01.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/portobello/original/ambientes_imagen_385.webp" data-fancybox="gallery25">
                                    <img class="img-fluid" src="images/products/sheet/portobello/mainnail/02.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/portobello/original/Portobello 1000x3000x6 1.webp" data-fancybox="gallery25">
                                    <img class="img-fluid" src="images/products/sheet/portobello/mainnail/03.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/portobello/original/Portobello 1000x3000x6 2.webp" data-fancybox="gallery25">
                                    <img class="img-fluid" src="images/products/sheet/portobello/mainnail/04.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/portobello/original/Portobello 1000x3000x6 3.webp" data-fancybox="gallery25">
                                    <img class="img-fluid" src="images/products/sheet/portobello/mainnail/05.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/portobello/original/Portobello 1000x3000x6 4.webp" data-fancybox="gallery25">
                                    <img class="img-fluid" src="images/products/sheet/portobello/mainnail/06.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/portobello/original/Portobello 1000x3000x6 5.webp" data-fancybox="gallery25">
                                    <img class="img-fluid" src="images/products/sheet/portobello/mainnail/07.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/portobello/original/Portobello 1000x3000x6 6.webp" data-fancybox="gallery25">
                                    <img class="img-fluid" src="images/products/sheet/portobello/mainnail/08.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/portobello/original/Portobello 1000x3000x6 7.webp" data-fancybox="gallery25">
                                    <img class="img-fluid" src="images/products/sheet/portobello/mainnail/09.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/portobello/original/Portobello 1000x3000x6 8.webp" data-fancybox="gallery25">
                                    <img class="img-fluid" src="images/products/sheet/portobello/mainnail/10.webp">
                                </div>
                            </div>
                            <div class="thumbCarousel thumbCarousel25 carousel max-w-xl mx-auto">
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/portobello/thumbnail/01.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/portobello/thumbnail/02.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/portobello/thumbnail/03.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/portobello/thumbnail/04.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/portobello/thumbnail/05.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/portobello/thumbnail/06.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/portobello/thumbnail/07.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/portobello/thumbnail/08.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/portobello/thumbnail/09.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/portobello/thumbnail/10.webp">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul class="breadcrumb">
                            <li><a href="index.php"><span class="material-symbols-rounded">home</span>首頁</a></li>
                            <li><a href="products.php?category=sheet">產品</a></li>
                            <li><a href="products.php?category=sheet">薄板</a></li>
                            <li><a href="products.php?type=marble">大理石</a></li>
                        </ul>
                        <img src="images/about/corner.svg" alt="α-corner" title="品牌：可樂石" id="portobello-logo"><!-- 選擇款式時 品牌改變 -->
                        <h3 title="品名：波多貝羅">波多貝羅</h3>
                        <p>款式：</p>
                        <div class="small-img">
                            <input type="radio" name="portobello" id="portobello01">
                            <button class="check" onclick="mainCarousel25.slideTo(2)">
                                <label for="portobello01"><img class="portobello-img01" src="images/products/sheet/portobello/mockup-one.webp" alt="波多貝羅" title="規格：單一款"></label>
                            </button>
                        </div>
                        <p>尺寸：</p>
                        <div class="mysize">
                            <input type="radio" name="portobello-size" id="portobello-size01" value="100×300×0.6cm 亮面">
                            <button class="check">
                                <label for="portobello-size01">
                                    <div class="btn btn-secondary" id="portobello-sizebtn01">100×300×0.6cm 亮面</div>
                                </label>
                            </button>
                            <input type="radio" name="portobello-size" id="portobello-size02" value="100×300×0.6cm 霧面">
                            <button class="check">
                                <label for="portobello-size02">
                                    <div class="btn btn-secondary"id="portobello-sizebtn02">100×300×0.6cm 霧面</div>
                                </label>
                            </button>
                        </div>
                        <form action="contact.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="products" value="details"><!-- 傳值用 -->
                            <input type="hidden" name="product-name" value="波多貝羅">
                            <input type="hidden" id="portobello-check-img" name="check-img" value="單一款">
                            <input type="hidden" id="portobello-check-size" name="check-size">
                            <div class="row mydescription">
                                <a class="col btn btn-secondary" href="https://drive.google.com/u/0/uc?id=1EAK8rzpuEIxrkpSuobuBFBHrPILoEUXV&export=download">下載材質檔</a>
                                <button class="col btn btn-secondary" type="submit">諮詢產品</button>
                            </div>
                        </form>
                        <script>
                            $(':radio[name="portobello-size"]').change(function (){
                                var size = $(this).val();
                                $("#portobello-check-size").attr("value",size);
                            });
                        </script>
                    </div>
                </div>
            </div>
            <div class="details mmm paonazzo">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="box ">
                            <div class="mainCarousel mainCarousel26 carousel w-10/12 max-w-5xl mx-auto">
                                <div class="carousel__slide" data-src="images/products/sheet/paonazzo/original/amb 04 calacatta paonazzo 0.webp" data-fancybox="gallery26">
                                    <img class="img-fluid" src="images/products/sheet/paonazzo/mainnail/01.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/paonazzo/original/amb 04 calacatta paonazzo 1.webp" data-fancybox="gallery26">
                                    <img class="img-fluid" src="images/products/sheet/paonazzo/mainnail/02.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/paonazzo/original/amb 04 calacatta paonazzo 2.webp" data-fancybox="gallery26">
                                    <img class="img-fluid" src="images/products/sheet/paonazzo/mainnail/03.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/paonazzo/original/amb 04 calacatta paonazzo 3.webp" data-fancybox="gallery26">
                                    <img class="img-fluid" src="images/products/sheet/paonazzo/mainnail/04.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/paonazzo/original/Calacatta Paonazzo 1200x3000x6 1.webp" data-fancybox="gallery26">
                                    <img class="img-fluid" src="images/products/sheet/paonazzo/mainnail/05.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/paonazzo/original/Calacatta Paonazzo 1200x3000x6 2.webp" data-fancybox="gallery26">
                                    <img class="img-fluid" src="images/products/sheet/paonazzo/mainnail/06.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/paonazzo/original/Calacatta Paonazzo 1200x3000x6 3.webp" data-fancybox="gallery26">
                                    <img class="img-fluid" src="images/products/sheet/paonazzo/mainnail/07.webp">
                                </div>
                            </div>
                            <div class="thumbCarousel thumbCarousel26 carousel max-w-xl mx-auto">
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/paonazzo/thumbnail/01.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/paonazzo/thumbnail/02.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/paonazzo/thumbnail/03.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/paonazzo/thumbnail/04.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/paonazzo/thumbnail/05.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/paonazzo/thumbnail/06.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/paonazzo/thumbnail/07.webp">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul class="breadcrumb">
                            <li><a href="index.php"><span class="material-symbols-rounded">home</span>首頁</a></li>
                            <li><a href="products.php?category=sheet">產品</a></li>
                            <li><a href="products.php?category=sheet">薄板</a></li>
                            <li><a href="products.php?type=marble">大理石</a></li>
                        </ul>
                        <img src="images/about/corner.svg" alt="α-corner" title="品牌：可樂石" id="paonazzo-logo"><!-- 選擇款式時 品牌改變 -->
                        <h3 title="品名：鎏金白">鎏金白</h3>
                        <p>款式：</p>
                        <div class="small-img">
                            <input type="radio" name="paonazzo" id="paonazzo01">
                            <button class="check" onclick="mainCarousel26.slideTo(4)">
                                <label for="paonazzo01"><img class="paonazzo-img01" src="images/products/sheet/paonazzo/mockup-one.webp" alt="鎏金白" title="規格：單一款"></label>
                            </button>
                        </div>
                        <p>尺寸：</p>
                        <div class="mysize">
                        <input type="radio" name="paonazzo-size" id="paonazzo-size01">
                            <button class="check">
                                <label for="paonazzo-size01">
                                    <div class="btn btn-secondary" id="paonazzo-sizebtn01">100×300×0.6cm 霧面</div>
                                </label>
                            </button>
                        </div>
                        <form action="contact.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="products" value="details">
                            <input type="hidden" name="product-name" value="鎏金白">
                            <input type="hidden" id="paonazzo-check-img" name="check-img" value="單一款">
                            <input type="hidden" id="paonazzo-check-size" name="check-size" value="100×300×0.6cm 霧面">
                            <div class="row mydescription">
                                <a class="col btn btn-secondary" href="https://drive.google.com/u/0/uc?id=1DuhCVNyAK4YapeR1ZRJONTi0QaNBcSyi&export=download">下載材質檔</a>
                                <button class="col btn btn-secondary" type="submit">諮詢產品</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="details mmm patagonia">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="box ">
                            <div class="mainCarousel mainCarousel27 carousel w-10/12 max-w-5xl mx-auto">
                                <div class="carousel__slide" data-src="images/products/sheet/patagonia/original/實景 (1).webp" data-fancybox="gallery27">
                                    <img class="img-fluid" src="images/products/sheet/patagonia/mainnail/01.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/patagonia/original/實景 (2).webp" data-fancybox="gallery27">
                                    <img class="img-fluid" src="images/products/sheet/patagonia/mainnail/02.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/patagonia/original/實景 (3).webp" data-fancybox="gallery27">
                                    <img class="img-fluid" src="images/products/sheet/patagonia/mainnail/03.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/patagonia/original/實景 (4).webp" data-fancybox="gallery27">
                                    <img class="img-fluid" src="images/products/sheet/patagonia/mainnail/04.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/patagonia/original/實景 (5).webp" data-fancybox="gallery27">
                                    <img class="img-fluid" src="images/products/sheet/patagonia/mainnail/05.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/patagonia/original/實景 (6).webp" data-fancybox="gallery27">
                                    <img class="img-fluid" src="images/products/sheet/patagonia/mainnail/06.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/patagonia/original/實景 (7).webp" data-fancybox="gallery27">
                                    <img class="img-fluid" src="images/products/sheet/patagonia/mainnail/07.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/patagonia/original/材質 (1).webp" data-fancybox="gallery27">
                                    <img class="img-fluid" src="images/products/sheet/patagonia/mainnail/08.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/patagonia/original/材質 (2).webp" data-fancybox="gallery27">
                                    <img class="img-fluid" src="images/products/sheet/patagonia/mainnail/09.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/patagonia/original/材質 (3).webp" data-fancybox="gallery27">
                                    <img class="img-fluid" src="images/products/sheet/patagonia/mainnail/10.webp">
                                </div>
                            </div>
                            <div class="thumbCarousel thumbCarousel27 carousel max-w-xl mx-auto">
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/patagonia/thumbnail/01.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/patagonia/thumbnail/02.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/patagonia/thumbnail/03.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/patagonia/thumbnail/04.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/patagonia/thumbnail/05.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/patagonia/thumbnail/06.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/patagonia/thumbnail/07.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/patagonia/thumbnail/08.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/patagonia/thumbnail/09.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/patagonia/thumbnail/10.webp">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul class="breadcrumb">
                            <li><a href="index.php"><span class="material-symbols-rounded">home</span>首頁</a></li>
                            <li><a href="products.php?category=sheet">產品</a></li>
                            <li><a href="products.php?category=sheet">薄板</a></li>
                            <li><a href="products.php?type=marble">大理石</a></li>
                        </ul>
                        <img src="images/about/corner.svg" alt="α-corner" title="品牌：可樂石" id="patagonia-logo"><!-- 選擇款式時 品牌改變 -->
                        <h3 title="品名：夢蝶">夢蝶</h3>
                        <p>款式：</p>
                        <div class="small-img">
                            <input type="radio" name="patagonia" id="patagonia01">
                            <button class="check" onclick="mainCarousel27.slideTo(7)">
                                <label for="patagonia01"><img class="patagonia-img01" src="images/products/sheet/patagonia/mockup-one.webp" alt="夢蝶" title="規格：單一款"></label>
                            </button>
                        </div>
                        <p>尺寸：</p>
                        <div class="mysize">
                        <input type="radio" name="patagonia-size" id="patagonia-size01">
                            <button class="check">
                                <label for="patagonia-size01">
                                    <div class="btn btn-secondary" id="patagonia-sizebtn01">120×270×0.6cm 亮面</div>
                                </label>
                            </button>
                        </div>
                        <form action="contact.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="products" value="details">
                            <input type="hidden" name="product-name" value="夢蝶">
                            <input type="hidden" id="patagonia-check-img" name="check-img" value="單一款">
                            <input type="hidden" id="patagonia-check-size" name="check-size" value="120×270×0.6cm 亮面">
                            <div class="row mydescription">
                                <a class="col btn btn-secondary" href="https://drive.google.com/u/0/uc?id=1oftru3t70Fcz2xtmVZecZ9QCm27d1C6e&export=download&confirm=t&uuid=5d545bb7-2475-462a-80f7-af1fdc5fee11">下載材質檔</a>
                                <button class="col btn btn-secondary" type="submit">諮詢產品</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="details mmm eternal">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="box ">
                            <div class="mainCarousel mainCarousel28 carousel w-10/12 max-w-5xl mx-auto">
                                <div class="carousel__slide" data-src="images/products/sheet/eternal/original/實景.webp" data-fancybox="gallery28">
                                    <img class="img-fluid" src="images/products/sheet/eternal/mainnail/01.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/eternal/original/材質 (1).webp" data-fancybox="gallery28">
                                    <img class="img-fluid" src="images/products/sheet/eternal/mainnail/02.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/eternal/original/材質 (2).webp" data-fancybox="gallery28">
                                    <img class="img-fluid" src="images/products/sheet/eternal/mainnail/03.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/eternal/original/材質 (3).webp" data-fancybox="gallery28">
                                    <img class="img-fluid" src="images/products/sheet/eternal/mainnail/04.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/eternal/original/材質 (4).webp" data-fancybox="gallery28">
                                    <img class="img-fluid" src="images/products/sheet/eternal/mainnail/05.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/eternal/original/材質 (5).webp" data-fancybox="gallery28">
                                    <img class="img-fluid" src="images/products/sheet/eternal/mainnail/06.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/eternal/original/材質 (6).webp" data-fancybox="gallery28">
                                    <img class="img-fluid" src="images/products/sheet/eternal/mainnail/07.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/eternal/original/對稱.webp" data-fancybox="gallery28">
                                    <img class="img-fluid" src="images/products/sheet/eternal/mainnail/08.webp">
                                </div>
                            </div>
                            <div class="thumbCarousel thumbCarousel28 carousel max-w-xl mx-auto">
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/eternal/thumbnail/01.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/eternal/thumbnail/02.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/eternal/thumbnail/03.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/eternal/thumbnail/04.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/eternal/thumbnail/05.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/eternal/thumbnail/06.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/eternal/thumbnail/07.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/eternal/thumbnail/08.webp">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul class="breadcrumb">
                            <li><a href="index.php"><span class="material-symbols-rounded">home</span>首頁</a></li>
                            <li><a href="products.php?category=sheet">產品</a></li>
                            <li><a href="products.php?category=sheet">薄板</a></li>
                            <li><a href="products.php?type=marble">大理石</a> , <a href="products.php?type=jade">玉石</a></li>
                        </ul>
                        <img src="images/about/corner.svg" alt="α-corner" title="品牌：可樂石" id="eternal-logo"><!-- 選擇款式時 品牌改變 -->
                        <h3 title="品名：星空">星空</h3>
                        <p>款式：</p>
                        <div class="small-img">
                            <input type="radio" name="eternal" id="eternal01">
                            <button class="check" onclick="mainCarousel28.slideTo(1)">
                                <label for="eternal01"><img class="eternal-img01" src="images/products/sheet/eternal/mockup-one.webp" alt="星空" title="規格：單一款"></label>
                            </button>
                        </div>
                        <p>尺寸：</p>
                        <div class="mysize">
                            <input type="radio" name="eternal-size" id="eternal-size01">
                            <button class="check">
                                <label for="eternal-size01">
                                    <div class="btn btn-secondary" id="eternal-sizebtn01">120×270×0.6cm 亮面</div>
                                </label>
                            </button>
                        </div>
                        <form action="contact.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="products" value="details"><!-- 傳值用 -->
                            <input type="hidden" name="product-name" value="星空">
                            <input type="hidden" id="eternal-check-img" name="check-img" value="單一款">
                            <input type="hidden" id="eternal-check-size" name="check-size" value="120×270×0.6cm 亮面">
                            <div class="row mydescription">
                                <a class="col btn btn-secondary" href="https://drive.google.com/u/0/uc?id=1zE_bUlUy9_StK7o8VsDjUOCXuB-VWyO5&export=download&confirm=t&uuid=cde6a1ae-9d4e-420e-a18a-a002366c47c8">下載材質檔</a>
                                <button class="col btn btn-secondary" type="submit">諮詢產品</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="details mmm cementproject">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="box ">
                            <div class="mainCarousel mainCarousel29 carousel w-10/12 max-w-5xl mx-auto">
                                <div class="carousel__slide" data-src="images/products/sheet/cementproject/original/CDE-cementproject-color10-moodboard.webp" data-fancybox="gallery29">
                                    <img class="img-fluid" src="images/products/sheet/cementproject/mainnail/01.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/cementproject/original/CDE-cementproject-color10-land-lappata-color10-work-forest-noce-exedra-rain-grey-hall.webp" data-fancybox="gallery29">
                                    <img class="img-fluid" src="images/products/sheet/cementproject/mainnail/02.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/cementproject/original/CDE-cementproject-color10-work-hall.webp" data-fancybox="gallery29">
                                    <img class="img-fluid" src="images/products/sheet/cementproject/mainnail/03.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/cementproject/original/CDE-cementproject-color10-work-100x300-5,5mm.webp" data-fancybox="gallery29">
                                    <img class="img-fluid" src="images/products/sheet/cementproject/mainnail/04.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/cementproject/original/CDE-cementproject-color20-moodboard.webp" data-fancybox="gallery29">
                                    <img class="img-fluid" src="images/products/sheet/cementproject/mainnail/05.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/cementproject/original/CDE-cementproject-color20-work-boutique.webp" data-fancybox="gallery29">
                                    <img class="img-fluid" src="images/products/sheet/cementproject/mainnail/06.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/cementproject/original/CDE-cementproject-color20-work-100x300-5,5mm.webp" data-fancybox="gallery29">
                                    <img class="img-fluid" src="images/products/sheet/cementproject/mainnail/07.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/cementproject/original/CDE-cementproject-color30-moodboard.webp" data-fancybox="gallery29">
                                    <img class="img-fluid" src="images/products/sheet/cementproject/mainnail/08.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/cementproject/original/CDE-cementproject-color30-cem-color10-cem-color30-work-cadore-bosco-bedroom.webp" data-fancybox="gallery29">
                                    <img class="img-fluid" src="images/products/sheet/cementproject/mainnail/09.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/cementproject/original/CDE-cementproject-color30-work-color10-work-metal-iron-kitchen.webp" data-fancybox="gallery29">
                                    <img class="img-fluid" src="images/products/sheet/cementproject/mainnail/10.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/cementproject/original/CDE-cementproject-color30-work-kitchen.webp" data-fancybox="gallery29">
                                    <img class="img-fluid" src="images/products/sheet/cementproject/mainnail/11.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/cementproject/original/CDE-cementproject-color30-work-100x300-5,5mm.webp" data-fancybox="gallery29">
                                    <img class="img-fluid" src="images/products/sheet/cementproject/mainnail/12.webp">
                                </div>
                            </div>
                            <div class="thumbCarousel thumbCarousel29 carousel max-w-xl mx-auto">
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/cementproject/thumbnail/01.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/cementproject/thumbnail/02.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/cementproject/thumbnail/03.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/cementproject/thumbnail/04.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/cementproject/thumbnail/05.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/cementproject/thumbnail/06.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/cementproject/thumbnail/07.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/cementproject/thumbnail/08.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/cementproject/thumbnail/09.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/cementproject/thumbnail/10.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/cementproject/thumbnail/11.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/cementproject/thumbnail/12.webp">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul class="breadcrumb">
                            <li><a href="index.php"><span class="material-symbols-rounded">home</span>首頁</a></li>
                            <li><a href="products.php?category=sheet">產品</a></li>
                            <li><a href="products.php?category=sheet">薄板</a></li>
                            <li><a href="products.php?type=woodgrain">木紋</a> , <a href="products.php?type=other">特色</a></li>
                        </ul>
                        <img src="images/about/corner.svg" alt="α-corner" title="品牌：可樂石" id="cementproject-logo"><!-- 選擇款式時 品牌改變 -->
                        <h3 title="品名：廊香系列">廊香系列</h3>
                        <p class="subtitle">廊香系列從概念上反映了二十世紀的氣派並粗曠的建築風格，以高度的細膩工藝重現了木板條的效果。廊香系列同時也提供傳統的木板條形式。<span class="badge badge-secondary">#陶瓷薄板</span> <span class="badge badge-secondary">#大板</span> <span class="badge badge-secondary">#木紋</span></p>
                        <p>款式：</p>
                        <div class="small-img">
                            <input type="radio" name="cementproject" id="cementproject01" value="米白">
                            <button class="check" onclick="mainCarousel29.slideTo(3)">
                                <label for="cementproject01"><img class="cementproject-img01" src="images/products/sheet/cementproject/mockup-work10.webp" alt="廊香米白" title="規格：米白"></label>
                            </button>
                            <input type="radio" name="cementproject" id="cementproject02" value="淺灰">
                            <button class="check" onclick="mainCarousel29.slideTo(6)">
                                <label for="cementproject02"><img class="cementproject-img02" src="images/products/sheet/cementproject/mockup-work20.webp" alt="廊香淺灰" title="規格：淺灰"></label>
                            </button>
                            <input type="radio" name="cementproject" id="cementproject03" value="深灰">
                            <button class="check" onclick="mainCarousel29.slideTo(11)">
                                <label for="cementproject03"><img class="cementproject-img03" src="images/products/sheet/cementproject/mockup-work30.webp" alt="廊香深灰" title="規格：深灰"></label>
                            </button>
                        </div>
                        <p>尺寸：</p>
                        <div class="mysize">
                            <input type="radio" name="cementproject-size" id="cementproject-size01">
                            <button class="check">
                                <label for="cementproject-size01">
                                    <div class="btn btn-secondary" id="cementproject-sizebtn01">100×300×0.55cm 霧面(立體)</div>
                                </label>
                            </button>
                        </div>
                        <p>說明：</p>
                        <p>本產品具有殺菌效果(平常需要有在清潔)，詳見下載內容</p>
                        <form action="contact.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="products" value="details"><!-- 傳值用 -->
                            <input type="hidden" name="product-name" value="廊香">
                            <input type="hidden" id="cementproject-check-img" name="check-img">
                            <input type="hidden" id="cementproject-check-size" name="check-size" value="100×300×0.55cm 霧面(立體)">
                            <div class="row mydescription">
                                <a class="col btn btn-secondary" href="https://drive.google.com/u/0/uc?id=1KGaNSq6-prhwuMWqANa4PjDFdtZi-dYE&export=download&confirm=t&uuid=cb983a52-818b-4cd0-9c26-44730004b442">下載材質檔</a>
                                <button class="col btn btn-secondary" type="submit">諮詢產品</button>
                            </div>
                        </form>
                        <script>
                            $(':radio[name="cementproject"]').change(function (){
                                var item = $(this).val();
                                $("#cementproject-check-img").attr("value",item);
                            });
                        </script>
                    </div>
                </div>
            </div>
            <div class="details mmm herbarium">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="box ">
                            <div class="mainCarousel mainCarousel30 carousel w-10/12 max-w-5xl mx-auto">
                                <div class="carousel__slide" data-src="images/products/sheet/herbarium/original/7702-261-PAINT-THE-HERBARIUM-DOLPHIN-CLAY.webp" data-fancybox="gallery30">
                                    <img class="img-fluid" src="images/products/sheet/herbarium/mainnail/01.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/herbarium/original/PAINT THE HERBARIUM 60X120.webp" data-fancybox="gallery30">
                                    <img class="img-fluid" src="images/products/sheet/herbarium/mainnail/02.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/herbarium/original/PAINT THE HERBARIUM.webp" data-fancybox="gallery30">
                                    <img class="img-fluid" src="images/products/sheet/herbarium/mainnail/03.webp">
                                </div>
                            </div>
                            <div class="thumbCarousel thumbCarousel30 carousel max-w-xl mx-auto">
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/herbarium/thumbnail/01.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/herbarium/thumbnail/02.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/herbarium/thumbnail/03.webp">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul class="breadcrumb">
                            <li><a href="index.php"><span class="material-symbols-rounded">home</span>首頁</a></li>
                            <li><a href="products.php?category=sheet">產品</a></li>
                            <li><a href="products.php?category=sheet">薄板</a></li>
                            <li><a href="products.php?type=other">特色</a></li>
                        </ul>
                        <img src="images/about/corner.svg" alt="α-corner" title="品牌：可樂石" id="herbarium-logo"><!-- 選擇款式時 品牌改變 -->
                        <h3 title="品名：蔓陀羅">蔓陀羅</h3>
                        <p>款式：</p>
                        <div class="small-img">
                            <input type="radio" name="herbarium" id="herbarium01">
                            <button class="check" onclick="mainCarousel30.slideTo(2)">
                                <label for="herbarium01"><img class="herbarium-img01" src="images/products/sheet/herbarium/mockup-one.webp" alt="蔓陀羅" title="規格：單一款"></label>
                            </button>
                        </div>
                        <p>尺寸：</p>
                        <div class="mysize">
                        <input type="radio" name="herbarium-size" id="herbarium-size01">
                            <button class="check">
                                <label for="herbarium-size01">
                                    <div class="btn btn-secondary" id="herbarium-sizebtn01">120×240×0.6cm 霧面</div>
                                </label>
                            </button>
                        </div>
                        <form action="contact.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="products" value="details">
                            <input type="hidden" name="product-name" value="蔓陀羅">
                            <input type="hidden" id="fibre-check-img" name="check-img" value="單一款">
                            <input type="hidden" id="fibre-check-size" name="check-size" value="120×240×0.6cm 霧面">
                            <div class="row mydescription">
                                <a class="col btn btn-secondary" href="https://drive.google.com/u/0/uc?id=1vRtH0VXVrp8VTYURnQj9yG9jNsk7BpeX&export=download">下載材質檔</a>
                                <button class="col btn btn-secondary" type="submit">諮詢產品</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="details mmm house">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="box ">
                            <div class="mainCarousel mainCarousel31 carousel w-10/12 max-w-5xl mx-auto">
                                <div class="carousel__slide" data-src="images/products/sheet/house/original/DECOR-Porcelain-stoneware-wall-tiles-435179-rel1d2df1a8.webp" data-fancybox="gallery31">
                                    <img class="img-fluid" src="images/products/sheet/house/mainnail/01.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/house/original/PAINT THE HOUSE.webp" data-fancybox="gallery31">
                                    <img class="img-fluid" src="images/products/sheet/house/mainnail/02.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/house/original/511.webp" data-fancybox="gallery31">
                                    <img class="img-fluid" src="images/products/sheet/house/mainnail/03.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/house/original/d3d_default_0001925.webp" data-fancybox="gallery31">
                                    <img class="img-fluid" src="images/products/sheet/house/mainnail/04.webp">
                                </div>
                            </div>
                            <div class="thumbCarousel thumbCarousel31 carousel max-w-xl mx-auto">
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/house/thumbnail/01.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/house/thumbnail/02.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/house/thumbnail/03.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/house/thumbnail/04.webp">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul class="breadcrumb">
                            <li><a href="index.php"><span class="material-symbols-rounded">home</span>首頁</a></li>
                            <li><a href="products.php?category=sheet">產品</a></li>
                            <li><a href="products.php?category=sheet">薄板</a></li>
                            <li><a href="products.php?type=other">特色</a></li>
                        </ul>
                        <img src="images/about/corner.svg" alt="α-corner" title="品牌：可樂石" id="house-logo"><!-- 選擇款式時 品牌改變 -->
                        <h3 title="品名：小房子">小房子</h3>
                        <p>款式：</p>
                        <div class="small-img">
                            <input type="radio" name="house" id="house01">
                            <button class="check" onclick="mainCarousel31.slideTo(3)">
                                <label for="house01"><img class="house-img01" src="images/products/sheet/house/mockup-one.webp" alt="小房子" title="規格：單一款"></label>
                            </button>
                        </div>
                        <p>尺寸：</p>
                        <div class="mysize">
                        <input type="radio" name="house-size" id="house-size01">
                            <button class="check">
                                <label for="house-size01">
                                    <div class="btn btn-secondary" id="house-sizebtn01">120×240×0.6cm 霧面</div>
                                </label>
                            </button>
                        </div>
                        <form action="contact.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="products" value="details"><!-- 傳值用 -->
                            <input type="hidden" name="product-name" value="小房子">
                            <input type="hidden" id="house-check-img" name="check-img" value="單一款">
                            <input type="hidden" id="house-check-size" name="check-size" value="120×240×0.6cm 霧面">
                            <div class="row mydescription">
                                <a class="col btn btn-secondary" href="https://drive.google.com/u/0/uc?id=1q2t3qYxx91DKqI_d0av4aDneuLjt0ePN&export=download&confirm=t&uuid=26c756fd-9c13-44b0-9372-b0f8484026fc">下載材質檔</a>
                                <button class="col btn btn-secondary" type="submit">諮詢產品</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="details mmm incertum">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="box ">
                            <div class="mainCarousel mainCarousel32 carousel w-10/12 max-w-5xl mx-auto">
                                <div class="carousel__slide" data-src="images/products/sheet/incertum/original/INCERTUM LIGHT + CROSSROAD WOOD GREY.webp" data-fancybox="gallery32">
                                    <img class="img-fluid" src="images/products/sheet/incertum/mainnail/01.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/incertum/original/INCERTUM LIGHT 160X320 + EBONY 60X120 LAPP.webp" data-fancybox="gallery32">
                                    <img class="img-fluid" src="images/products/sheet/incertum/mainnail/02.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/incertum/original/INCERTUM LIGHT 120X270.webp" data-fancybox="gallery32">
                                    <img class="img-fluid" src="images/products/sheet/incertum/mainnail/03.webp">
                                </div>
                            </div>
                            <div class="thumbCarousel thumbCarousel32 carousel max-w-xl mx-auto">
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/incertum/thumbnail/01.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/incertum/thumbnail/02.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/incertum/thumbnail/03.webp">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul class="breadcrumb">
                            <li><a href="index.php"><span class="material-symbols-rounded">home</span>首頁</a></li>
                            <li><a href="products.php?category=sheet">產品</a></li>
                            <li><a href="products.php?category=sheet">薄板</a></li>
                            <li><a href="products.php?type=other">特色</a></li>
                        </ul>
                        <img src="images/about/corner.svg" alt="α-corner" title="品牌：可樂石" id="incertum-logo"><!-- 選擇款式時 品牌改變 -->
                        <h3 title="品名：幾何">幾何</h3>
                        <p>款式：</p>
                        <div class="small-img">
                            <input type="radio" name="incertum" id="incertum01">
                            <button class="check" onclick="mainCarousel32.slideTo(2)">
                                <label for="incertum01"><img class="incertum-img01" src="images/products/sheet/incertum/mockup-one.webp" alt="幾何" title="規格：單一款"></label>
                            </button>
                        </div>
                        <p>尺寸：</p>
                        <div class="mysize">
                        <input type="radio" name="incertum-size" id="incertum-size01">
                            <button class="check">
                                <label for="incertum-size01">
                                    <div class="btn btn-secondary" id="incertum-sizebtn01">120×278×0.6cm 霧面</div>
                                </label>
                            </button>
                        </div>
                        <form action="contact.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="products" value="details">
                            <input type="hidden" name="product-name" value="幾何">
                            <input type="hidden" id="incertum-check-img" name="check-img" value="單一款">
                            <input type="hidden" id="incertum-check-size" name="check-size" value="120×278×0.6cm 霧面">
                            <div class="row mydescription">
                                <a class="col btn btn-secondary" href="https://drive.google.com/u/0/uc?id=1OvW16qjrmQ43SHzxTovMzNIbCcF02BSB&export=download&confirm=t&uuid=05fd25f1-cb53-4205-8fb6-b24682ce4695">下載材質檔</a>
                                <button class="col btn btn-secondary" type="submit">諮詢產品</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="details mmm preston">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="box ">
                            <div class="mainCarousel mainCarousel33 carousel w-10/12 max-w-5xl mx-auto">
                                <div class="carousel__slide" data-src="images/products/sheet/preston/original/PRESTON260X120_AMB-1.webp" data-fancybox="gallery33">
                                    <img class="img-fluid" src="images/products/sheet/preston/mainnail/01.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/preston/original/PRESTON PULIDO 260X120_1.webp" data-fancybox="gallery33">
                                    <img class="img-fluid" src="images/products/sheet/preston/mainnail/02.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/preston/original/PRESTON PULIDO 260X120_2.webp" data-fancybox="gallery33">
                                    <img class="img-fluid" src="images/products/sheet/preston/mainnail/03.webp">
                                </div>
                            </div>
                            <div class="thumbCarousel thumbCarousel33 carousel max-w-xl mx-auto">
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/preston/thumbnail/01.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/preston/thumbnail/02.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/preston/thumbnail/03.webp">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul class="breadcrumb">
                            <li><a href="index.php"><span class="material-symbols-rounded">home</span>首頁</a></li>
                            <li><a href="products.php?category=sheet">產品</a></li>
                            <li><a href="products.php?category=sheet">薄板</a></li>
                            <!-- <li>磨石子</li> -->
                        </ul>
                        <img src="images/about/holy.svg" alt="α-holy" title="品牌：活麗石" id="preston-logo" style="padding:.625rem 0 0;">
                        <h3 title="品名：布蕾斯白">布蕾斯白</h3>
                        <p>款式：</p>
                        <div class="small-img">
                            <input type="radio" name="preston" id="preston01">
                            <button class="check" onclick="mainCarousel33.slideTo(1)">
                                <label for="preston01"><img class="preston-img01" src="images/products/sheet/preston/mockup-one.webp" alt="布蕾斯白" title="規格：單一款"></label>
                            </button>
                        </div>
                        <p>尺寸：</p>
                        <div class="mysize">
                            <input type="radio" name="preston-size" id="preston-size01">
                            <button class="check">
                                <label for="preston-size01">
                                    <div class="btn btn-secondary" id="preston-sizebtn01">120×260×0.7cm 亮面</div>
                                </label>
                            </button>
                        </div>
                        <form action="contact.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="products" value="details"><!-- 傳值用 -->
                            <input type="hidden" name="product-name" value="布蕾斯白">
                            <input type="hidden" id="preston-check-img" name="check-img" value="單一款">
                            <input type="hidden" id="preston-check-size" name="check-size" value="120×260×0.7cm 亮面">
                            <div class="row mydescription">
                                <a class="col btn btn-secondary" href="https://drive.google.com/u/0/uc?id=1Pz0j5JV8sYBJLMrjmiV5v8wgx5dj7yX2&export=download">下載材質檔</a>
                                <button class="col btn btn-secondary" type="submit">諮詢產品</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="details mmm icaro">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="box ">
                            <div class="mainCarousel mainCarousel34 carousel w-10/12 max-w-5xl mx-auto">
                                <div class="carousel__slide" data-src="images/products/sheet/icaro/original/ICARO DARK PULIDO 260X120  SALON1.webp" data-fancybox="gallery34">
                                    <img class="img-fluid" src="images/products/sheet/icaro/mainnail/01.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/icaro/original/ICARO DARK PULIDO 260X120  SALON2.webp" data-fancybox="gallery34">
                                    <img class="img-fluid" src="images/products/sheet/icaro/mainnail/02.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/icaro/original/ICARO DARK PULIDO 260X120  SALON3.webp" data-fancybox="gallery34">
                                    <img class="img-fluid" src="images/products/sheet/icaro/mainnail/03.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/icaro/original/ICARO DARK PULIDO 260X120.webp" data-fancybox="gallery34">
                                    <img class="img-fluid" src="images/products/sheet/icaro/mainnail/04.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/icaro/original/ICARO MUSK PULIDO 260X120 BANO.webp" data-fancybox="gallery34">
                                    <img class="img-fluid" src="images/products/sheet/icaro/mainnail/05.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/icaro/original/ICARO MUSK PULIDO 260X120 SALION.webp" data-fancybox="gallery34">
                                    <img class="img-fluid" src="images/products/sheet/icaro/mainnail/06.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/icaro/original/ICARO MUSK PULIDO 260X120.webp" data-fancybox="gallery34">
                                    <img class="img-fluid" src="images/products/sheet/icaro/mainnail/07.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/icaro/original/ICARO BLUE PULIDO 260X120 BANO1.webp" data-fancybox="gallery34">
                                    <img class="img-fluid" src="images/products/sheet/icaro/mainnail/08.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/icaro/original/ICARO BLUE PULIDO 260X120 BANO2.webp" data-fancybox="gallery34">
                                    <img class="img-fluid" src="images/products/sheet/icaro/mainnail/09.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/icaro/original/ICARO BLUE PULIDO 260X120 SALON.webp" data-fancybox="gallery34">
                                    <img class="img-fluid" src="images/products/sheet/icaro/mainnail/10.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/icaro/original/ICARO BLUE PULIDO 260X120.webp" data-fancybox="gallery34">
                                    <img class="img-fluid" src="images/products/sheet/icaro/mainnail/11.webp">
                                </div>
                            </div>
                            <div class="thumbCarousel thumbCarousel34 carousel max-w-xl mx-auto">
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/icaro/thumbnail/01.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/icaro/thumbnail/02.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/icaro/thumbnail/03.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/icaro/thumbnail/04.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/icaro/thumbnail/05.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/icaro/thumbnail/06.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/icaro/thumbnail/07.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/icaro/thumbnail/08.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/icaro/thumbnail/09.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/icaro/thumbnail/10.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/icaro/thumbnail/11.webp">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul class="breadcrumb">
                            <li><a href="index.php"><span class="material-symbols-rounded">home</span>首頁</a></li>
                            <li><a href="products.php?category=sheet">產品</a></li>
                            <li><a href="products.php?category=sheet">薄板</a></li>
                            <li><a href="products.php?type=marble">大理石</a></li>
                        </ul>
                        <img src="images/about/holy.svg" alt="α-holy" title="品牌：活麗石" id="icaro-logo" style="padding:.625rem 0 0;">
                        <h3 title="品名：伊卡露系列">伊卡露系列</h3>
                        <p>款式：</p>
                        <div class="small-img">
                            <input type="radio" name="icaro" id="icaro01" value="黑">
                            <button class="check" onclick="mainCarousel34.slideTo(3)">
                                <label for="icaro01"><img class="icaro-img01" src="images/products/sheet/icaro/mockup-dark.webp" alt="伊卡露黑" title="規格：黑"></label>
                            </button>
                            <input type="radio" name="icaro" id="icaro02" value="綠">
                            <button class="check" onclick="mainCarousel34.slideTo(6)">
                                <label for="icaro02"><img class="icaro-img02" src="images/products/sheet/icaro/mockup-musk.webp" alt="伊卡露綠" title="規格：綠"></label>
                            </button>
                            <input type="radio" name="icaro" id="icaro03" value="藍">
                            <button class="check" onclick="mainCarousel34.slideTo(10)">
                                <label for="icaro03"><img class="icaro-img03" src="images/products/sheet/icaro/mockup-blue.webp" alt="伊卡露藍" title="規格：藍"></label>
                            </button>
                        </div>
                        <p>尺寸：</p>
                        <div class="mysize">
                            <input type="radio" name="icaro-size" id="icaro-size01">
                            <button class="check">
                                <label for="icaro-size01">
                                    <div class="btn btn-secondary" id="icaro-sizebtn01">120×260×0.7cm 亮面</div>
                                </label>
                            </button>
                        </div>
                        <form action="contact.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="products" value="details">
                            <input type="hidden" name="product-name" value="伊卡露">
                            <input type="hidden" id="icaro-check-img" name="check-img">
                            <input type="hidden" id="icaro-check-size" name="check-size" value="120×260×0.7cm 亮面">
                            <div class="row mydescription">
                                <a class="col btn btn-secondary" href="https://drive.google.com/u/0/uc?id=1NpRrj4C3MksvRTEgGWJDTi0iwkp1OMNs&export=download&confirm=t&uuid=0533efd9-a8fd-4652-9dc9-1664a37bb686">下載材質檔</a>
                                <button class="col btn btn-secondary" type="submit">諮詢產品</button>
                            </div>
                        </form>
                        <script>
                            $(':radio[name="icaro"]').change(function (){
                            var item = $(this).val();
                            $("#icaro-check-img").attr("value",item);
                        });
                        </script>
                    </div>
                </div>
            </div>
            <div class="details mmm gmyeo">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="box ">
                            <div class="mainCarousel mainCarousel35 carousel w-10/12 max-w-5xl mx-auto">
                                <div class="carousel__slide" data-src="images/products/sheet/geostone/original/GEOSTONE GREY 120X240 AMB.webp" data-fancybox="gallery35">
                                    <img class="img-fluid" src="images/products/sheet/geostone/mainnail/01.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/geostone/original/GEOSTONE GREY 60X120 AMB.webp" data-fancybox="gallery35">
                                    <img class="img-fluid" src="images/products/sheet/geostone/mainnail/02.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/geostone/original/GEOSTONE GREY 120X120 AMB.webp" data-fancybox="gallery35">
                                    <img class="img-fluid" src="images/products/sheet/geostone/mainnail/03.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/geostone/original/GEOSTONE GREY 240X120_1.webp" data-fancybox="gallery35">
                                    <img class="img-fluid" src="images/products/sheet/geostone/mainnail/04.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/geostone/original/GEOSTONE GREY 240X120_2.webp" data-fancybox="gallery35">
                                    <img class="img-fluid" src="images/products/sheet/geostone/mainnail/05.webp">
                                </div>
                            </div>
                            <div class="thumbCarousel thumbCarousel35 carousel max-w-xl mx-auto">
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/geostone/thumbnail/01.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/geostone/thumbnail/02.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/geostone/thumbnail/03.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/geostone/thumbnail/04.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/geostone/thumbnail/05.webp">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul class="breadcrumb">
                            <li><a href="index.php"><span class="material-symbols-rounded">home</span>首頁</a></li>
                            <li><a href="products.php?category=sheet">產品</a></li>
                            <li><a href="products.php?category=sheet">薄板</a></li>
                            <li><a href="products.php?type=slate">板岩</a></li>
                        </ul>
                        <img src="images/about/holy.svg" alt="α-holy" title="品牌：活麗石" id="geostone-logo" style="padding:.625rem 0 0;">
                        <h3 title="品名：吉歐灰">吉歐灰</h3>
                        <p>款式：</p>
                        <div class="small-img">
                            <input type="radio" name="geostone" id="geostone01">
                            <button class="check" onclick="mainCarousel35.slideTo(3)">
                                <label for="geostone01"><img class="geostone-img01" src="images/products/sheet/geostone/mockup-one.webp" alt="吉歐灰" title="規格：單一款"></label>
                            </button>
                        </div>
                        <p>尺寸：</p>
                        <div class="mysize">
                        <input type="radio" name="geostone-size" id="geostone-size01">
                            <button class="check">
                                <label for="geostone-size01">
                                    <div class="btn btn-secondary" id="geostone-sizebtn01">120×240×0.6cm 霧面</div>
                                </label>
                            </button>
                        </div>
                        <form action="contact.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="products" value="details">
                            <input type="hidden" name="product-name" value="吉歐灰">
                            <input type="hidden" id="gmyeo-check-img" name="check-img" value="單一款">
                            <input type="hidden" id="gmyeo-check-size" name="check-size" value="120×240×0.6cm 霧面">
                            <div class="row mydescription">
                                <a class="col btn btn-secondary" href="https://drive.google.com/u/0/uc?id=1U3GgV-39DYlBYfkVuJeGowMfeu280uNQ&export=download&confirm=t&uuid=1a3a4bc2-7fff-48b9-a071-d62fa485f087">下載材質檔</a>
                                <button class="col btn btn-secondary" type="submit">諮詢產品</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="details mmm dommel">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="box ">
                            <div class="mainCarousel mainCarousel36 carousel w-10/12 max-w-5xl mx-auto">
                                <div class="carousel__slide" data-src="images/products/sheet/dommel/original/DOMMEL120X240_AMB-1.webp" data-fancybox="gallery36">
                                    <img class="img-fluid" src="images/products/sheet/dommel/mainnail/01.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/dommel/original/DOMMEL-120X120.webp" data-fancybox="gallery36">
                                    <img class="img-fluid" src="images/products/sheet/dommel/mainnail/02.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/dommel/original/DOMMEL GREY 240X120_1.webp" data-fancybox="gallery36">
                                    <img class="img-fluid" src="images/products/sheet/dommel/mainnail/03.webp">
                                </div>
                            </div>
                            <div class="thumbCarousel thumbCarousel36 carousel max-w-xl mx-auto">
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/dommel/thumbnail/01.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/dommel/thumbnail/02.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/dommel/thumbnail/03.webp">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul class="breadcrumb">
                            <li><a href="index.php"><span class="material-symbols-rounded">home</span>首頁</a></li>
                            <li><a href="products.php?category=sheet">產品</a></li>
                            <li><a href="products.php?category=sheet">薄板</a></li>
                            <li><a href="products.php?type=slate">板岩</a></li>
                        </ul>
                        <img src="images/about/holy.svg" alt="α-holy" title="品牌：活麗石" id="dommel-logo" style="padding:.625rem 0 0;">
                        <h3 title="品名：朵美灰">朵美灰</h3>
                        <p>款式：</p>
                        <div class="small-img">
                            <input type="radio" name="dommel" id="dommel01">
                            <button class="check" onclick="mainCarousel36.slideTo(2)">
                                <label for="dommel01"><img class="dommel-img01" src="images/products/sheet/dommel/mockup-one.webp" alt="朵美灰" title="規格：單一款"></label>
                            </button>
                        </div>
                        <p>尺寸：</p>
                        <div class="mysize">
                        <input type="radio" name="dommel-size" id="dommel-size01">
                            <button class="check">
                                <label for="dommel-size01">
                                    <div class="btn btn-secondary" id="dommel-sizebtn01">120×240×0.6cm 霧面</div>
                                </label>
                            </button>
                        </div>
                        <form action="contact.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="products" value="details">
                            <input type="hidden" name="product-name" value="朵美灰">
                            <input type="hidden" id="dommel-check-img" name="check-img" value="單一款">
                            <input type="hidden" id="dommel-check-size" name="check-size" value="120×240×0.6cm 霧面">
                            <div class="row mydescription">
                                <a class="col btn btn-secondary" href="https://drive.google.com/u/0/uc?id=1_IvoevqFbhbt1Rs49CCNQBkZC07sj5jP&export=download">下載材質檔</a>
                                <button class="col btn btn-secondary" type="submit">諮詢產品</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="details mmm ravena">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="box ">
                            <div class="mainCarousel mainCarousel37 carousel w-10/12 max-w-5xl mx-auto">
                                <div class="carousel__slide" data-src="images/products/sheet/ravena/original/RAVENA80X160_AMB.webp" data-fancybox="gallery37">
                                    <img class="img-fluid" src="images/products/sheet/ravena/mainnail/01.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/ravena/original/RAVENA260x120_AMB.webp" data-fancybox="gallery37">
                                    <img class="img-fluid" src="images/products/sheet/ravena/mainnail/02.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/ravena/original/10P260 Ravena L1V1.webp" data-fancybox="gallery37">
                                    <img class="img-fluid" src="images/products/sheet/ravena/mainnail/03.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/ravena/original/10P260 Ravena L2V1 TONO.webp" data-fancybox="gallery37">
                                    <img class="img-fluid" src="images/products/sheet/ravena/mainnail/04.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/ravena/original/10P260 Ravena L3V1.webp" data-fancybox="gallery37">
                                    <img class="img-fluid" src="images/products/sheet/ravena/mainnail/05.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/ravena/original/10P260 Ravena L4V1.webp" data-fancybox="gallery37">
                                    <img class="img-fluid" src="images/products/sheet/ravena/mainnail/06.webp">
                                </div>
                            </div>
                            <div class="thumbCarousel thumbCarousel37 carousel max-w-xl mx-auto">
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/ravena/thumbnail/01.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/ravena/thumbnail/02.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/ravena/thumbnail/03.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/ravena/thumbnail/04.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/ravena/thumbnail/05.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/ravena/thumbnail/06.webp">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul class="breadcrumb">
                            <li><a href="index.php"><span class="material-symbols-rounded">home</span>首頁</a></li>
                            <li><a href="products.php?category=sheet">產品</a></li>
                            <li><a href="products.php?category=sheet">薄板</a></li>
                            <li><a href="products.php?type=marble">大理石</a></li>
                        </ul>
                        <img src="images/about/holy.svg" alt="α-holy" title="品牌：活麗石" id="ravena-logo" style="padding:.625rem 0 0;">
                        <h3 title="品名：拉文納">拉文納</h3>
                        <p>款式：</p>
                        <div class="small-img">
                            <input type="radio" name="ravena" id="ravena01">
                            <button class="check" onclick="mainCarousel37.slideTo(2)">
                                <label for="ravena01"><img class="ravena-img01" src="images/products/sheet/ravena/mockup-one.webp" alt="拉文納" title="規格：單一款"></label>
                            </button>
                        </div>
                        <p>尺寸：</p>
                        <div class="mysize">
                        <input type="radio" name="ravena-size" id="ravena-size01">
                            <button class="check">
                                <label for="ravena-size01">
                                    <div class="btn btn-secondary" id="ravena-sizebtn01">120×260×0.7cm 亮面</div>
                                </label>
                            </button>
                        </div>
                        <form action="contact.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="products" value="details">
                            <input type="hidden" name="product-name" value="拉文納">
                            <input type="hidden" id="ravena-check-img" name="check-img" value="單一款">
                            <input type="hidden" id="ravena-check-size" name="check-size" value="120×260×0.7cm 亮面">
                            <div class="row mydescription">
                                <a class="col btn btn-secondary" href="https://drive.google.com/u/0/uc?id=1IzoagGBH8bWwi9S5Z-VIJThz1jfdEvYJ&export=download&confirm=t&uuid=9a539822-d6f8-42c7-a952-33362a5c052e">下載材質檔</a>
                                <button class="col btn btn-secondary" type="submit">諮詢產品</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="details mmm monocromo">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="box ">
                            <div class="mainCarousel mainCarousel38 carousel w-10/12 max-w-5xl mx-auto">
                                <div class="carousel__slide" data-src="images/products/sheet/monocromo/original/BLANCO P NATURAL 240X120_AMB.webp" data-fancybox="gallery38">
                                    <img class="img-fluid" src="images/products/sheet/monocromo/mainnail/01.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/monocromo/original/BLANCO P. NATURAL 80X160.webp" data-fancybox="gallery38">
                                    <img class="img-fluid" src="images/products/sheet/monocromo/mainnail/02.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/monocromo/original/BLANCO P. NATURAL 240X120.webp" data-fancybox="gallery38">
                                    <img class="img-fluid" src="images/products/sheet/monocromo/mainnail/03.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/monocromo/original/BLACK NATURAL 80X160.webp" data-fancybox="gallery38">
                                    <img class="img-fluid" src="images/products/sheet/monocromo/mainnail/04.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/monocromo/original/BLACK NATURAL 260X120.webp" data-fancybox="gallery38">
                                    <img class="img-fluid" src="images/products/sheet/monocromo/mainnail/05.webp">
                                </div>
                            </div>
                            <div class="thumbCarousel thumbCarousel38 carousel max-w-xl mx-auto">
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/monocromo/thumbnail/01.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/monocromo/thumbnail/02.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/monocromo/thumbnail/03.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/monocromo/thumbnail/04.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/monocromo/thumbnail/05.webp">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul class="breadcrumb">
                            <li><a href="index.php"><span class="material-symbols-rounded">home</span>首頁</a></li>
                            <li><a href="products.php?category=sheet">產品</a></li>
                            <li><a href="products.php?category=sheet">薄板</a></li>
                            <li><a href="products.php?type=monochrome">純色</a></li>
                        </ul>
                        <img src="images/about/holy.svg" alt="α-holy" title="品牌：活麗石" id="monocromo-logo" style="padding:.625rem 0 0;">
                        <h3 title="品名：純系列" id="monocromo-title">純系列</h3>
                        <p>款式：</p>
                        <div class="small-img">
                            <input type="radio" name="monocromo" id="monocromo01" value="白">
                            <button class="check" onclick="mainCarousel38.slideTo(2)">
                                <label for="monocromo01"><img class="monocromo-img01" src="images/products/sheet/monocromo/mockup-blanco.webp" alt="純白" title="規格：純白"></label>
                            </button>
                            <input type="radio" name="monocromo" id="monocromo02" value="黑">
                            <button class="check" onclick="mainCarousel38.slideTo(4)">
                                <label for="monocromo02"><img class="monocromo-img02" src="images/products/sheet/monocromo/mockup-black.webp" alt="純黑" title="規格：純黑"></label>
                            </button>
                        </div>
                        <p>尺寸：</p>
                        <div class="mysize">
                            <input type="radio" name="monocromo-size" id="monocromo-size01" value="120×240×0.6cm 霧面">
                            <button class="check">
                                <label for="monocromo-size01">
                                    <div class="btn btn-secondary" id="monocromo-sizebtn01">120×240×0.6cm 霧面</div>
                                </label>
                            </button>
                            <input type="radio" name="monocromo-size" id="monocromo-size02" value="120×260×0.6cm 霧面">
                            <button class="check">
                                <label for="monocromo-size02">
                                    <div class="btn btn-secondary" id="monocromo-sizebtn02">120×260×0.6cm 霧面</div>
                                </label>
                            </button>
                        </div>
                        <form action="contact.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="products" value="details"><!-- 傳值用 -->
                            <input type="hidden" name="product-name" value="純色">
                            <input type="hidden" id="monocromo-check-img" name="check-img">
                            <input type="hidden" id="monocromo-check-size" name="check-size">
                            <div class="row mydescription">
                                <a class="col btn btn-secondary" href="https://drive.google.com/u/0/uc?id=1zM25PXJKkDm5Q1w7oYyNaljFfxD9zfWJ&export=download">下載材質檔</a>
                                <button class="col btn btn-secondary" type="submit">諮詢產品</button>
                            </div>
                        </form>
                        <script>
                        $(':radio[name="monocromo-size"]').change(function (){
                            var size = $(this).val();
                            $("#monocromo-check-size").attr("value",size);
                        });
                        $(':radio[name="monocromo"]').change(function (){
                            var item = $(this).val();
                            $("#monocromo-check-img").attr("value",item);
                            $("#monocromo-check-size").removeAttr("value");
                            if($("input[name=monocromo]")[0].checked){
                                $("#monocromo-size01").removeAttr('disabled');
                                $("#monocromo-sizebtn01").removeAttr('title');
                                $("#monocromo-size02").attr('disabled','ture');
                                $("#monocromo-sizebtn02").attr('title','本款未有此尺寸');
                                $("#monocromo-title").text('純白')
                            } else {
                                $("#monocromo-title").text('純黑')
                                $("#monocromo-size02").removeAttr('disabled');
                                $("#monocromo-sizebtn02").removeAttr('title');
                                $("#monocromo-size01").attr('disabled','ture');
                                $("#monocromo-sizebtn01").attr('title','本款未有此尺寸');
                            }
                        });
                        </script>
                    </div>
                </div>
            </div>
            <div class="details mmm status">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="box ">
                            <div class="mainCarousel mainCarousel39 carousel w-10/12 max-w-5xl mx-auto">
                                <div class="carousel__slide" data-src="images/products/sheet/status/original/STATUS P NATURAL 120X240_AMB.webp" data-fancybox="gallery39">
                                    <img class="img-fluid" src="images/products/sheet/status/mainnail/01.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/status/original/S1.webp" data-fancybox="gallery39">
                                    <img class="img-fluid" src="images/products/sheet/status/mainnail/02.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/status/original/S2.webp" data-fancybox="gallery39">
                                    <img class="img-fluid" src="images/products/sheet/status/mainnail/03.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/status/original/S3.webp" data-fancybox="gallery39">
                                    <img class="img-fluid" src="images/products/sheet/status/mainnail/04.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/status/original/S4.webp" data-fancybox="gallery39">
                                    <img class="img-fluid" src="images/products/sheet/status/mainnail/05.webp">
                                </div>
                            </div>
                            <div class="thumbCarousel thumbCarousel39 carousel max-w-xl mx-auto">
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/status/thumbnail/01.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/status/thumbnail/02.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/status/thumbnail/03.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/status/thumbnail/04.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/status/thumbnail/05.webp">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul class="breadcrumb">
                            <li><a href="index.php"><span class="material-symbols-rounded">home</span>首頁</a></li>
                            <li><a href="products.php?category=sheet">產品</a></li>
                            <li><a href="products.php?category=sheet">薄板</a></li>
                            <li><a href="products.php?type=marble">大理石</a></li>
                        </ul>
                        <img src="images/about/holy.svg" alt="α-holy" title="品牌：活麗石" id="status-logo" style="padding:.625rem 0 0;">
                        <h3 title="品名：斯塔圖">斯塔圖</h3>
                        <p>款式：</p>
                        <div class="small-img">
                            <input type="radio" name="status" id="status01">
                            <button class="check" onclick="mainCarousel39.slideTo(1)">
                                <label for="status01"><img class="status-img01" src="images/products/sheet/status/mockup-one.webp" alt="斯塔圖" title="規格：單一款"></label>
                            </button>
                        </div>
                        <p>尺寸：</p>
                        <div class="mysize">
                            <input type="radio" name="status-size" id="status-size01">
                            <button class="check">
                                <label for="status-size01">
                                    <div class="btn btn-secondary" id="status-sizebtn01">120×240×0.6cm 霧面</div>
                                </label>
                            </button>
                        </div>
                        <form action="contact.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="products" value="details"><!-- 傳值用 -->
                            <input type="hidden" name="product-name" value="斯塔圖">
                            <input type="hidden" id="fibre-check-img" name="check-img" value="單一款">
                            <input type="hidden" id="fibre-check-size" name="check-size" value="120×240×0.6cm 霧面">
                            <div class="row mydescription">
                                <a class="col btn btn-secondary" href="https://drive.google.com/u/0/uc?id=1M65959ERTuKX1eizRXPplQ0snDeTFMoO&export=download">下載材質檔</a>
                                <button class="col btn btn-secondary" type="submit">諮詢產品</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="details mmm belgium">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="box ">
                            <div class="mainCarousel mainCarousel40 carousel w-10/12 max-w-5xl mx-auto">
                                <div class="carousel__slide" data-src="images/products/sheet/belgium/original/BELGIUM GREY_80x160霧面.webp" data-fancybox="gallery40">
                                    <img class="img-fluid" src="images/products/sheet/belgium/mainnail/01.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/belgium/original/BELGIUM GREY_R1.webp" data-fancybox="gallery40">
                                    <img class="img-fluid" src="images/products/sheet/belgium/mainnail/02.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/belgium/original/BELGIUM GREY_R2.webp" data-fancybox="gallery40">
                                    <img class="img-fluid" src="images/products/sheet/belgium/mainnail/03.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/belgium/original/BELGIUM GREY_R3.webp" data-fancybox="gallery40">
                                    <img class="img-fluid" src="images/products/sheet/belgium/mainnail/04.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/belgium/original/BELGIUM GREY_R4.webp" data-fancybox="gallery40">
                                    <img class="img-fluid" src="images/products/sheet/belgium/mainnail/05.webp">
                                </div>
                            </div>
                            <div class="thumbCarousel thumbCarousel40 carousel max-w-xl mx-auto">
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/belgium/thumbnail/01.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/belgium/thumbnail/02.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/belgium/thumbnail/03.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/belgium/thumbnail/04.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/belgium/thumbnail/05.webp">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul class="breadcrumb">
                            <li><a href="index.php"><span class="material-symbols-rounded">home</span>首頁</a></li>
                            <li><a href="products.php?category=sheet">產品</a></li>
                            <li><a href="products.php?category=sheet">薄板</a></li>
                            <li><a href="products.php?type=marble">大理石</a></li>
                        </ul>
                        <img src="images/about/holy.svg" alt="α-holy" title="品牌：活麗石" id="belgium-logo" style="padding:.625rem 0 0;">
                        <h3 title="品名：比利時">比利時灰</h3>
                        <p>款式：</p>
                        <div class="small-img">
                            <input type="radio" name="belgium" id="belgium01">
                            <button class="check" onclick="mainCarousel40.slideTo(1)">
                                <label for="belgium01"><img class="belgium-img01" src="images/products/sheet/belgium/mockup-one.webp" alt="比利時灰" title="規格：單一款"></label>
                            </button>
                        </div>
                        <p>尺寸：</p>
                        <div class="mysize">
                            <input type="radio" name="belgium-size" id="belgium-size01">
                            <button class="check">
                                <label for="belgium-size01">
                                    <div class="btn btn-secondary" id="belgium-sizebtn01">80×160×0.9cm 霧面</div>
                                </label>
                            </button>
                        </div>
                        <p>說明：</p>
                        <p>專案品需預訂</p>
                        <form action="contact.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="products" value="details"><!-- 傳值用 -->
                            <input type="hidden" name="product-name" value="比利時灰">
                            <input type="hidden" id="belgium-check-img" name="check-img" value="單一款">
                            <input type="hidden" id="belgium-check-size" name="check-size" value="80×160×0.9cm 霧面">
                            <div class="row mydescription">
                                <a class="col btn btn-secondary" href="https://drive.google.com/u/0/uc?id=1pI5NFYSL8d5ArLUhcAsxWGVeXbWNrZNI&export=download">下載材質檔</a>
                                <button class="col btn btn-secondary" type="submit">諮詢產品</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="details mmm oasis">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="box ">
                            <div class="mainCarousel mainCarousel41 carousel w-10/12 max-w-5xl mx-auto">
                                <div class="carousel__slide" data-src="images/products/sheet/oasis/original/OASIS GREY亮面.webp" data-fancybox="gallery41">
                                    <img class="img-fluid" src="images/products/sheet/oasis/mainnail/01.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/oasis/original/OASIS GREY_R1.webp" data-fancybox="gallery41">
                                    <img class="img-fluid" src="images/products/sheet/oasis/mainnail/02.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/oasis/original/OASIS GREY_R2.webp" data-fancybox="gallery41">
                                    <img class="img-fluid" src="images/products/sheet/oasis/mainnail/03.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/oasis/original/OASIS GREY_R3.webp" data-fancybox="gallery41">
                                    <img class="img-fluid" src="images/products/sheet/oasis/mainnail/04.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/oasis/original/OASIS NERO.webp" data-fancybox="gallery41">
                                    <img class="img-fluid" src="images/products/sheet/oasis/mainnail/05.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/oasis/original/OASIS NERO_R1.webp" data-fancybox="gallery41">
                                    <img class="img-fluid" src="images/products/sheet/oasis/mainnail/06.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/oasis/original/OASIS NERO_R2.webp" data-fancybox="gallery41">
                                    <img class="img-fluid" src="images/products/sheet/oasis/mainnail/07.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/oasis/original/OASIS NERO_R3.webp" data-fancybox="gallery41">
                                    <img class="img-fluid" src="images/products/sheet/oasis/mainnail/08.webp">
                                </div>
                            </div>
                            <div class="thumbCarousel thumbCarousel41 carousel max-w-xl mx-auto">
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/oasis/thumbnail/01.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/oasis/thumbnail/02.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/oasis/thumbnail/03.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/oasis/thumbnail/04.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/oasis/thumbnail/05.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/oasis/thumbnail/06.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/oasis/thumbnail/07.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/oasis/thumbnail/08.webp">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul class="breadcrumb">
                            <li><a href="index.php"><span class="material-symbols-rounded">home</span>首頁</a></li>
                            <li><a href="products.php?category=sheet">產品</a></li>
                            <li><a href="products.php?category=sheet">薄板</a></li>
                            <li><a href="products.php?type=marble">大理石</a></li>
                        </ul>
                        <img src="images/about/holy.svg" alt="α-holy" title="品牌：活麗石" id="oasis-logo" style="padding:.625rem 0 0;">
                        <h3 title="品名：卡薩布蘭卡系列" id="oasis-title">卡薩布蘭卡系列</h3>
                        <p>款式：</p>
                        <div class="small-img">
                            <input type="radio" name="oasis" id="oasis01" value="灰">
                            <button class="check" onclick="mainCarousel41.slideTo(1)">
                                <label for="oasis01"><img class="oasis-img01" src="images/products/sheet/oasis/mockup-grey.webp" alt="grey" title="規格：灰"></label>
                            </button>
                            <input type="radio" name="oasis" id="oasis02" value="黑">
                            <button class="check" onclick="mainCarousel41.slideTo(5)">
                                <label for="oasis02"><img class="oasis-img02" src="images/products/sheet/oasis/mockup-nero.webp" alt="nero" title="規格：黑"></label>
                            </button>
                        </div>
                        <p>尺寸：</p>
                        <div class="mysize">
                            <input type="radio" name="oasis-size" id="oasis-size01">
                            <button class="check">
                                <label for="oasis-size01">
                                    <div class="btn btn-secondary" id="oasis-sizebtn01">80×160×0.9cm 亮面</div>
                                </label>
                            </button>
                        </div>
                        <div class="ex" id="oasis-ex">
                            <p>說明：</p>
                            <p>專案品需預訂</p>
                        </div>
                        <form action="contact.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="products" value="details"><!-- 傳值用 -->
                            <input type="hidden" name="product-name" value="卡薩布蘭卡">
                            <input type="hidden" id="oasis-check-img" name="check-img">
                            <input type="hidden" id="oasis-check-size" name="check-size" value="80×160×0.9cm 亮面">
                            <div class="row mydescription">
                                <a class="col btn btn-secondary" href="https://drive.google.com/u/0/uc?id=16LKRSX1d7eSQQeE0u3x7qEWtVT3sxnae&export=download&confirm=t&uuid=b413612b-759e-4567-ae69-c0ba53951080">下載材質檔</a>
                                <button class="col btn btn-secondary" type="submit">諮詢產品</button>
                            </div>
                        </form>
                        <script>
                        $(':radio[name="oasis"]').change(function (){
                            var item = $(this).val();
                            $("#oasis-check-img").attr("value",item);
                            if($("input[name=oasis]")[0].checked){
                                $("#oasis-ex").css('display','none');
                                $("#oasis-title").text("卡薩布蘭卡-灰")
                            }  else {
                                $("#oasis-ex").css('display','block');
                                $("#oasis-title").text("卡薩布蘭卡-黑")
                            }
                        });
                        </script>
                    </div>
                </div>
            </div>
            <div class="details mmm buxy">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="box ">
                            <div class="mainCarousel mainCarousel42 carousel w-10/12 max-w-5xl mx-auto">
                                <div class="carousel__slide" data-src="images/products/sheet/buxy/original/BUXY CREAM霧面.webp" data-fancybox="gallery42">
                                    <img class="img-fluid" src="images/products/sheet/buxy/mainnail/01.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/buxy/original/BUXY CREAM_R1.webp" data-fancybox="gallery42">
                                    <img class="img-fluid" src="images/products/sheet/buxy/mainnail/02.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/buxy/original/BUXY CREAM_R2.webp" data-fancybox="gallery42">
                                    <img class="img-fluid" src="images/products/sheet/buxy/mainnail/03.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/buxy/original/BUXY CREAM_R3.webp" data-fancybox="gallery42">
                                    <img class="img-fluid" src="images/products/sheet/buxy/mainnail/04.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/buxy/original/BUXY CREAM_R4.webp" data-fancybox="gallery42">
                                    <img class="img-fluid" src="images/products/sheet/buxy/mainnail/05.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/buxy/original/BUXY_VRADE_80x160_霧面.webp" data-fancybox="gallery42">
                                    <img class="img-fluid" src="images/products/sheet/buxy/mainnail/06.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/buxy/original/BUXY VARDE_R1.webp" data-fancybox="gallery42">
                                    <img class="img-fluid" src="images/products/sheet/buxy/mainnail/07.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/buxy/original/BUXY VARDE_R2.webp" data-fancybox="gallery42">
                                    <img class="img-fluid" src="images/products/sheet/buxy/mainnail/08.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/buxy/original/BUXY VARDE_R3.webp" data-fancybox="gallery42">
                                    <img class="img-fluid" src="images/products/sheet/buxy/mainnail/09.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/buxy/original/BUXY VARDE_R4.webp" data-fancybox="gallery42">
                                    <img class="img-fluid" src="images/products/sheet/buxy/mainnail/10.webp">
                                </div>
                            </div>
                            <div class="thumbCarousel thumbCarousel42 carousel max-w-xl mx-auto">
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/buxy/thumbnail/01.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/buxy/thumbnail/02.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/buxy/thumbnail/03.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/buxy/thumbnail/04.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/buxy/thumbnail/05.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/buxy/thumbnail/06.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/buxy/thumbnail/07.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/buxy/thumbnail/08.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/buxy/thumbnail/09.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/buxy/thumbnail/10.webp">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul class="breadcrumb">
                            <li><a href="index.php"><span class="material-symbols-rounded">home</span>首頁</a></li>
                            <li><a href="products.php?category=sheet">產品</a></li>
                            <li><a href="products.php?category=sheet">薄板</a></li>
                            <li><a href="products.php?type=slate">板岩</a></li>
                        </ul>
                        <img src="images/about/holy.svg" alt="α-holy" title="品牌：活麗石" id="buxy-logo" style="padding:.625rem 0 0;">
                        <h3 title="品名：布朗系列" id="buxy-title">布朗系列</h3>
                        <p>款式：</p>
                        <div class="small-img">
                            <input type="radio" name="buxy" id="buxy01" value="米">
                            <button class="check" onclick="mainCarousel42.slideTo(1)">
                                <label for="buxy01"><img class="buxy-img01" src="images/products/sheet/buxy/mockup-cream.webp" alt="cream" title="規格：米"></label>
                            </button>
                            <input type="radio" name="buxy" id="buxy02" value="灰">
                            <button class="check" onclick="mainCarousel42.slideTo(6)">
                                <label for="buxy02"><img class="buxy-img02" src="images/products/sheet/buxy/mockup-varde.webp" alt="varde" title="規格：灰"></label>
                            </button>
                        </div>
                        <p>尺寸：</p>
                        <div class="mysize">
                            <input type="radio" name="buxy-size" id="buxy-size01">
                            <button class="check">
                                <label for="buxy-size01">
                                    <div class="btn btn-secondary" id="buxy-sizebtn01">80×160×0.9cm 霧面</div>
                                </label>
                            </button>
                        </div>
                        
                        <div class="ex" id="buxy-ex">
                            <p>說明：</p>
                            <p>專案品需預訂</p>
                        </div>
                        <form action="contact.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="products" value="details"><!-- 傳值用 -->
                            <input type="hidden" name="product-name" value="布朗">
                            <input type="hidden" id="buxy-check-img" name="check-img">
                            <input type="hidden" id="buxy-check-size" name="check-size" value="80×160×0.9cm 霧面">
                            <div class="row mydescription">
                                <a class="col btn btn-secondary" href="https://drive.google.com/u/0/uc?id=1AidAt6Ypgr9Gnitf4FLJL5Gdz_y0HuBi&export=download&confirm=t&uuid=b84bc76e-131a-4fc1-a074-5a5761e224b7">下載材質檔</a>
                                <button class="col btn btn-secondary" type="submit">諮詢產品</button>
                            </div>
                        </form>
                        <script>
                        $(':radio[name="buxy"]').change(function (){
                            var item = $(this).val();
                            $("#buxy-check-img").attr("value",item);
                            if($("input[name=buxy]")[0].checked){
                                $("#buxy-title").text("布朗米")
                            }  else {
                                $("#buxy-title").text("布朗灰")
                            }
                        });
                        </script>
                    </div>
                </div>
            </div>
            <div class="details mmm nuvola">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="box ">
                            <div class="mainCarousel mainCarousel43 carousel w-10/12 max-w-5xl mx-auto">
                                <div class="carousel__slide" data-src="images/products/sheet/nuvola/original/Nuvola White_80x160亮面.webp" data-fancybox="gallery43">
                                    <img class="img-fluid" src="images/products/sheet/nuvola/mainnail/01.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/nuvola/original/Nuvola White_80x160亮面1.webp" data-fancybox="gallery43">
                                    <img class="img-fluid" src="images/products/sheet/nuvola/mainnail/02.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/nuvola/original/NUVOLA WHITE_R1.webp" data-fancybox="gallery43">
                                    <img class="img-fluid" src="images/products/sheet/nuvola/mainnail/03.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/nuvola/original/NUVOLA WHITE_R2.webp" data-fancybox="gallery43">
                                    <img class="img-fluid" src="images/products/sheet/nuvola/mainnail/04.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/nuvola/original/NUVOLA WHITE_R3.webp" data-fancybox="gallery43">
                                    <img class="img-fluid" src="images/products/sheet/nuvola/mainnail/05.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/nuvola/original/NUVOLA WHITE_R4.webp" data-fancybox="gallery43">
                                    <img class="img-fluid" src="images/products/sheet/nuvola/mainnail/06.webp">
                                </div>
                            </div>
                            <div class="thumbCarousel thumbCarousel43 carousel max-w-xl mx-auto">
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/nuvola/thumbnail/01.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/nuvola/thumbnail/02.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/nuvola/thumbnail/03.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/nuvola/thumbnail/04.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/nuvola/thumbnail/05.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/nuvola/thumbnail/06.webp">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul class="breadcrumb">
                            <li><a href="index.php"><span class="material-symbols-rounded">home</span>首頁</a></li>
                            <li><a href="products.php?category=sheet">產品</a></li>
                            <li><a href="products.php?category=sheet">薄板</a></li>
                            <li><a href="products.php?type=marble">大理石</a></li>
                        </ul>
                        <img src="images/about/holy.svg" alt="α-holy" title="品牌：活麗石" id="nuvola-logo" style="padding:.625rem 0 0;">
                        <h3 title="品名：克拉克白">克拉克白</h3>
                        <p>款式：</p>
                        <div class="small-img">
                            <input type="radio" name="nuvola" id="nuvola01">
                            <button class="check" onclick="mainCarousel43.slideTo(2)">
                                <label for="nuvola01"><img class="nuvola-img01" src="images/products/sheet/nuvola/mockup-one.webp" alt="克拉克白" title="規格：單一款"></label>
                            </button>
                        </div>
                        <p>尺寸：</p>
                        <div class="mysize">
                            <input type="radio" name="nuvola-size" id="nuvola-size01" value="80×160×0.9cm 亮面">
                            <button class="check">
                                <label for="nuvola-size01">
                                    <div class="btn btn-secondary" id="nuvola-sizebtn01">80×160×0.9cm 亮面</div>
                                </label>
                            </button>
                            <input type="radio" name="nuvola-size" id="nuvola-size02" value="120×240×0.9cm 亮面">
                            <button class="check">
                                <label for="nuvola-size02">
                                    <div class="btn btn-secondary" id="nuvola-sizebtn02">120×240×0.9cm 亮面</div>
                                </label>
                            </button>
                        </div>
                        <form action="contact.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="products" value="details"><!-- 傳值用 -->
                            <input type="hidden" name="product-name" value="克拉克白">
                            <input type="hidden" id="nuvola-check-img" name="check-img" value="單一款">
                            <input type="hidden" id="nuvola-check-size" name="check-size">
                            <div class="row mydescription">
                                <a class="col btn btn-secondary" href="https://drive.google.com/u/0/uc?id=1-mY7J6dzKSWCgR00tHZUw6WMvl0uqjDF&export=download">下載材質檔</a>
                                <button class="col btn btn-secondary" type="submit">諮詢產品</button>
                            </div>
                        </form>
                        <script>
                        $(':radio[name="nuvola-size"]').change(function (){
                            var size = $(this).val();
                            $("#nuvola-check-size").attr("value",size);
                        });
                        </script>
                    </div>
                </div>
            </div>
            <div class="details mmm charm">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="box ">
                            <div class="mainCarousel mainCarousel44 carousel w-10/12 max-w-5xl mx-auto">
                                <div class="carousel__slide" data-src="images/products/sheet/charm/original/Charm Ivory_80x160亮面.webp" data-fancybox="gallery44">
                                    <img class="img-fluid" src="images/products/sheet/charm/mainnail/01.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/charm/original/emerald Charm Ivory.webp" data-fancybox="gallery44">
                                    <img class="img-fluid" src="images/products/sheet/charm/mainnail/02.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/charm/original/CHARM IVORY_R1.webp" data-fancybox="gallery44">
                                    <img class="img-fluid" src="images/products/sheet/charm/mainnail/03.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/charm/original/CHARM IVORY_R2.webp" data-fancybox="gallery44">
                                    <img class="img-fluid" src="images/products/sheet/charm/mainnail/04.webp">
                                </div>
                            </div>
                            <div class="thumbCarousel thumbCarousel44 carousel max-w-xl mx-auto">
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/charm/thumbnail/01.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/charm/thumbnail/02.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/charm/thumbnail/03.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/charm/thumbnail/04.webp">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul class="breadcrumb">
                            <li><a href="index.php"><span class="material-symbols-rounded">home</span>首頁</a></li>
                            <li><a href="products.php?category=sheet">產品</a></li>
                            <li><a href="products.php?category=sheet">薄板</a></li>
                            <li><a href="products.php?type=marble">大理石</a></li>
                        </ul>
                        <img src="images/about/holy.svg" alt="α-holy" title="品牌：活麗石" id="charm-logo" style="padding:.625rem 0 0;">
                        <h3 title="品名：charm Ivory">charm Ivory</h3>
                        <p>款式：</p>
                        <div class="small-img">
                            <input type="radio" name="charm" id="charm01">
                            <button class="check" onclick="mainCarousel44.slideTo(2)">
                                <label for="charm01"><img class="charm-img01" src="images/products/sheet/charm/mockup-one.webp" alt="charm Ivory" title="規格：單一款"></label>
                            </button>
                        </div>
                        <p>尺寸：</p>
                        <div class="mysize">
                            <input type="radio" name="charm-size" id="charm-size01">
                            <button class="check">
                                <label for="charm-size01">
                                    <div class="btn btn-secondary" id="charm-sizebtn01">80×160×0.9cm 亮面</div>
                                </label>
                            </button>
                        </div>
                        <p>說明：</p>
                        <p>專案品需預訂</p>
                        <form action="contact.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="products" value="details"><!-- 傳值用 -->
                            <input type="hidden" name="product-name" value="charm Ivory">
                            <input type="hidden" id="charm-check-img" name="check-img" value="單一款">
                            <input type="hidden" id="charm-check-size" name="check-size" value="80×160×0.9cm 亮面">
                            <div class="row mydescription">
                                <a class="col btn btn-secondary" href="https://drive.google.com/u/0/uc?id=1U_WWN4zLGh4zpJvCdTprA05ISoFZhird&export=download&confirm=t&uuid=78bb9502-b296-422f-abb8-78da05395717">下載材質檔</a>
                                <button class="col btn btn-secondary" type="submit">諮詢產品</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="details mmm terrazzo">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="box ">
                            <div class="mainCarousel mainCarousel45 carousel w-10/12 max-w-5xl mx-auto">
                                <div class="carousel__slide" data-src="images/products/sheet/terrazzo/original/Terrazzo Grey Lyme Grey.webp" data-fancybox="gallery45">
                                    <img class="img-fluid" src="images/products/sheet/terrazzo/mainnail/01.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/terrazzo/original/TERRAZZO GREY_R1.webp" data-fancybox="gallery45">
                                    <img class="img-fluid" src="images/products/sheet/terrazzo/mainnail/02.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/terrazzo/original/TERRAZZO GREY_R2.webp" data-fancybox="gallery45">
                                    <img class="img-fluid" src="images/products/sheet/terrazzo/mainnail/03.webp">
                                </div>
                            </div>
                            <div class="thumbCarousel thumbCarousel45 carousel max-w-xl mx-auto">
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/terrazzo/thumbnail/01.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/terrazzo/thumbnail/02.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/terrazzo/thumbnail/03.webp">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul class="breadcrumb">
                            <li><a href="index.php"><span class="material-symbols-rounded">home</span>首頁</a></li>
                            <li><a href="products.php?category=sheet">產品</a></li>
                            <li><a href="products.php?category=sheet">薄板</a></li>
                            <!-- <li>磨石子</li> -->
                        </ul>
                        <img src="images/about/holy.svg" alt="α-holy" title="品牌：活麗石" id="terrazzo-logo" style="padding:.625rem 0 0;">
                        <h3 title="品名：terrazzo Ivory">terrazzo grey</h3>
                        <p>款式：</p>
                        <div class="small-img">
                            <input type="radio" name="terrazzo" id="terrazzo01">
                            <button class="check" onclick="mainCarousel45.slideTo(2)">
                                <label for="terrazzo01"><img class="terrazzo-img01" src="images/products/sheet/terrazzo/mockup-one.webp" alt="terrazzo grey" title="規格：單一款"></label>
                            </button>
                        </div>
                        <p>尺寸：</p>
                        <div class="mysize">
                            <input type="radio" name="terrazzo-size" id="terrazzo-size01">
                            <button class="check">
                                <label for="terrazzo-size01">
                                    <div class="btn btn-secondary" id="terrazzo-sizebtn01">80×240×0.9cm 霧面</div>
                                </label>
                            </button>
                        </div>
                        <p>說明：</p>
                        <p>專案品需預訂</p>
                        <form action="contact.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="products" value="details"><!-- 傳值用 -->
                            <input type="hidden" name="product-name" value="terrazzo">
                            <input type="hidden" name="check-img" value="單一款">
                            <input type="hidden" name="check-size" value="80×240×0.9cm 霧面">
                            <div class="row mydescription">
                                <a class="col btn btn-secondary" href="https://drive.google.com/u/0/uc?id=1ZlhAjjAoV4ZdFUD5NhD1z9OqqN71Ryv5&export=download&confirm=t&uuid=307741d3-8a19-4ebd-861f-83192a9839f7">下載材質檔</a>
                                <button class="col btn btn-secondary" type="submit">諮詢產品</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="details mmm amarone">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="box ">
                            <div class="mainCarousel mainCarousel46 carousel w-10/12 max-w-5xl mx-auto">
                                <div class="carousel__slide" data-src="images/products/sheet/amarone/original/Amarone Grey 1.webp" data-fancybox="gallery46">
                                    <img class="img-fluid" src="images/products/sheet/amarone/mainnail/01.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/amarone/original/AMARONE GREY_R1 80x240 copy.webp" data-fancybox="gallery46">
                                    <img class="img-fluid" src="images/products/sheet/amarone/mainnail/02.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/amarone/original/AMARONE GREY_R2 80x240 copy.webp" data-fancybox="gallery46">
                                    <img class="img-fluid" src="images/products/sheet/amarone/mainnail/03.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/amarone/original/Amarone Ivory Brown.webp" data-fancybox="gallery46">
                                    <img class="img-fluid" src="images/products/sheet/amarone/mainnail/04.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/amarone/original/AMARONE IVORY_R1 80x240 copy.webp" data-fancybox="gallery46">
                                    <img class="img-fluid" src="images/products/sheet/amarone/mainnail/05.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/amarone/original/AMARONE IVORY_R2 80x240 copy.webp" data-fancybox="gallery46">
                                    <img class="img-fluid" src="images/products/sheet/amarone/mainnail/06.webp">
                                </div>
                            </div>
                            <div class="thumbCarousel thumbCarousel46 carousel max-w-xl mx-auto">
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/amarone/thumbnail/01.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/amarone/thumbnail/02.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/amarone/thumbnail/03.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/amarone/thumbnail/04.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/amarone/thumbnail/05.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/amarone/thumbnail/06.webp">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul class="breadcrumb">
                            <li><a href="index.php"><span class="material-symbols-rounded">home</span>首頁</a></li>
                            <li><a href="products.php?category=sheet">產品</a></li>
                            <li><a href="products.php?category=sheet">薄板</a></li>
                            <li><a href="products.php?type=marble">大理石</a></li>
                        </ul>
                        <img src="images/about/holy.svg" alt="α-holy" title="品牌：活麗石" id="amarone-logo" style="padding:.625rem 0 0;">
                        <h3 title="品名：amarone系列">amarone系列</h3>
                        <p>款式：</p>
                        <div class="small-img">
                            <input type="radio" name="amarone" id="amarone01" value="灰">
                            <button class="check" onclick="mainCarousel46.slideTo(1)">
                                <label for="amarone01"><img class="amarone-img01" src="images/products/sheet/amarone/mockup-grey.webp" alt="amarone grey" title="規格：灰"></label>
                            </button>
                            <input type="radio" name="amarone" id="amarone02" value="米">
                            <button class="check" onclick="mainCarousel46.slideTo(4)">
                                <label for="amarone02"><img class="amarone-img02" src="images/products/sheet/amarone/mockup-ivory.webp" alt="amarone ivory" title="規格：米"></label>
                            </button>
                        </div>
                        <p>尺寸：</p>
                        <div class="mysize">
                            <input type="radio" name="amarone-size" id="amarone-size01">
                            <button class="check">
                                <label for="amarone-size01">
                                    <div class="btn btn-secondary" id="amarone-sizebtn01">80×240×0.9cm 霧面</div>
                                </label>
                            </button>
                        </div>
                        <p>說明：</p>
                        <p>專案品需預訂</p>
                        <form action="contact.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="products" value="details"><!-- 傳值用 -->
                            <input type="hidden" name="product-name" value="懷柏">
                            <input type="hidden" id="amarone-check-img" name="check-img">
                            <input type="hidden" id="amarone-check-size" name="check-size" value="80×240×0.9cm 霧面">
                            <div class="row mydescription">
                                <a class="col btn btn-secondary" href="https://drive.google.com/u/0/uc?id=1Vg9Gc4Etp08yOrBdDe94wBbVDs19xvFA&export=download&confirm=t&uuid=d5352ed2-ecc5-41d3-a62f-226909749537">下載材質檔</a>
                                <button class="col btn btn-secondary" type="submit">諮詢產品</button>
                            </div>
                        </form>
                        <script>
                        $(':radio[name="amarone"]').change(function (){
                            var item = $(this).val();
                            $("#amarone-check-img").attr("value",item);
                        });
                        </script>
                    </div>
                </div>
            </div>
            <div class="details mmm clinker">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="box ">
                            <div class="mainCarousel mainCarousel47 carousel w-10/12 max-w-5xl mx-auto">
                                <div class="carousel__slide" data-src="images/products/sheet/clinker/original/CLINKER GREY_80x160-1.webp" data-fancybox="gallery47">
                                    <img class="img-fluid" src="images/products/sheet/clinker/mainnail/01.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/clinker/original/CLINKER GREY_R1.webp" data-fancybox="gallery47">
                                    <img class="img-fluid" src="images/products/sheet/clinker/mainnail/02.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/clinker/original/CLINKER GREY_R2.webp" data-fancybox="gallery47">
                                    <img class="img-fluid" src="images/products/sheet/clinker/mainnail/03.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/clinker/original/CLINKER GREY_R3.webp" data-fancybox="gallery47">
                                    <img class="img-fluid" src="images/products/sheet/clinker/mainnail/04.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/clinker/original/CLINKER GREY_R4.webp" data-fancybox="gallery47">
                                    <img class="img-fluid" src="images/products/sheet/clinker/mainnail/05.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/clinker/original/CLINKER GREY_R5.webp" data-fancybox="gallery47">
                                    <img class="img-fluid" src="images/products/sheet/clinker/mainnail/06.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/clinker/original/CLINKER BEIGE_R1.webp" data-fancybox="gallery47">
                                    <img class="img-fluid" src="images/products/sheet/clinker/mainnail/07.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/clinker/original/CLINKER BEIGE_R2.webp" data-fancybox="gallery47">
                                    <img class="img-fluid" src="images/products/sheet/clinker/mainnail/08.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/clinker/original/CLINKER BEIGE_R3.webp" data-fancybox="gallery47">
                                    <img class="img-fluid" src="images/products/sheet/clinker/mainnail/09.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/clinker/original/CLINKER BEIGE_R4.webp" data-fancybox="gallery47">
                                    <img class="img-fluid" src="images/products/sheet/clinker/mainnail/10.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/clinker/original/CLINKER BEIGE_R5.webp" data-fancybox="gallery47">
                                    <img class="img-fluid" src="images/products/sheet/clinker/mainnail/11.webp">
                                </div>
                            </div>
                            <div class="thumbCarousel thumbCarousel47 carousel max-w-xl mx-auto">
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/clinker/thumbnail/01.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/clinker/thumbnail/02.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/clinker/thumbnail/03.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/clinker/thumbnail/04.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/clinker/thumbnail/05.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/clinker/thumbnail/06.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/clinker/thumbnail/07.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/clinker/thumbnail/08.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/clinker/thumbnail/09.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/clinker/thumbnail/10.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/clinker/thumbnail/11.webp">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul class="breadcrumb">
                            <li><a href="index.php"><span class="material-symbols-rounded">home</span>首頁</a></li>
                            <li><a href="products.php?category=sheet">產品</a></li>
                            <li><a href="products.php?category=sheet">薄板</a></li>
                            <li><a href="products.php?type=marble">大理石</a></li>
                        </ul>
                        <img src="images/about/holy.svg" alt="α-holy" title="品牌：活麗石" id="clinker-logo" style="padding:.625rem 0 0;">
                        <h3 title="品名：clinker系列">clinker系列</h3>
                        <p>款式：</p>
                        <div class="small-img">
                            <input type="radio" name="clinker" id="clinker01" value="灰">
                            <button class="check" onclick="mainCarousel47.slideTo(1)">
                                <label for="clinker01"><img class="clinker-img01" src="images/products/sheet/clinker/mockup-grey.webp" alt="clinker grey" title="規格：灰"></label>
                            </button>
                            <input type="radio" name="clinker" id="clinker02" value="米">
                            <button class="check" onclick="mainCarousel47.slideTo(6)">
                                <label for="clinker02"><img class="clinker-img02" src="images/products/sheet/clinker/mockup-beige.webp" alt="clinker beige" title="規格：米"></label>
                            </button>
                        </div>
                        <p>尺寸：</p>
                        <div class="mysize">
                            <input type="radio" name="clinker-size" id="clinker-size01">
                            <button class="check">
                                <label for="clinker-size01">
                                    <div class="btn btn-secondary" id="clinker-sizebtn01">80×160×0.9cm 霧面</div>
                                </label>
                            </button>
                        </div>
                        <p>說明：</p>
                        <p>專案品需預訂</p>
                        <form action="contact.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="products" value="details"><!-- 傳值用 -->
                            <input type="hidden" name="product-name" value="clinker">
                            <input type="hidden" id="clinker-check-img" name="check-img">
                            <input type="hidden" id="clinker-check-size" name="check-size" value="80×160×0.9cm 霧面">
                            <div class="row mydescription">
                                <a class="col btn btn-secondary" href="https://drive.google.com/u/0/uc?id=1nqiLVYILc4n0NfJ6WoowOpDmR1E-8FDu&export=download&confirm=t&uuid=6dd324fa-22e8-43da-bf37-c90a3a2d499a">下載材質檔</a>
                                <button class="col btn btn-secondary" type="submit">諮詢產品</button>
                            </div>
                        </form>
                        <script>
                        $(':radio[name="clinker"]').change(function (){
                            var item = $(this).val();
                            $("#clinker-check-img").attr("value",item);
                        });
                        </script>
                    </div>
                </div>
            </div>
            <div class="details mmm statuario">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="box ">
                            <div class="mainCarousel mainCarousel48 carousel w-10/12 max-w-5xl mx-auto">
                                <div class="carousel__slide" data-src="images/products/sheet/statuario/original/Gran Statuario.webp" data-fancybox="gallery48">
                                    <img class="img-fluid" src="images/products/sheet/statuario/mainnail/01.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/statuario/original/GRAN STATUARIO_R1 copy.webp" data-fancybox="gallery48">
                                    <img class="img-fluid" src="images/products/sheet/statuario/mainnail/02.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/statuario/original/GRAN STATUARIO_R2 copy.webp" data-fancybox="gallery48">
                                    <img class="img-fluid" src="images/products/sheet/statuario/mainnail/03.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/statuario/original/GRAN STATUARIO_R3 copy.webp" data-fancybox="gallery48">
                                    <img class="img-fluid" src="images/products/sheet/statuario/mainnail/04.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/statuario/original/statuario imp new reception.webp" data-fancybox="gallery48">
                                    <img class="img-fluid" src="images/products/sheet/statuario/mainnail/05.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/statuario/original/Statuario Imperiale F 1a.webp" data-fancybox="gallery48">
                                    <img class="img-fluid" src="images/products/sheet/statuario/mainnail/06.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/statuario/original/Statuario Imperiale F 1b.webp" data-fancybox="gallery48">
                                    <img class="img-fluid" src="images/products/sheet/statuario/mainnail/07.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/statuario/original/Statuario Imperiale F 3a.webp" data-fancybox="gallery48">
                                    <img class="img-fluid" src="images/products/sheet/statuario/mainnail/08.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/statuario/original/Statuario Imperiale F 3b.webp" data-fancybox="gallery48">
                                    <img class="img-fluid" src="images/products/sheet/statuario/mainnail/09.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/statuario/original/Statuario Imperiale F 4a.webp" data-fancybox="gallery48">
                                    <img class="img-fluid" src="images/products/sheet/statuario/mainnail/10.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/statuario/original/Statuario Imperiale F 4b.webp" data-fancybox="gallery48">
                                    <img class="img-fluid" src="images/products/sheet/statuario/mainnail/11.webp">
                                </div>
                            </div>
                            <div class="thumbCarousel thumbCarousel48 carousel max-w-xl mx-auto">
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/statuario/thumbnail/01.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/statuario/thumbnail/02.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/statuario/thumbnail/03.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/statuario/thumbnail/04.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/statuario/thumbnail/05.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/statuario/thumbnail/06.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/statuario/thumbnail/07.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/statuario/thumbnail/08.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/statuario/thumbnail/09.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/statuario/thumbnail/10.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/statuario/thumbnail/11.webp">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul class="breadcrumb">
                            <li><a href="index.php"><span class="material-symbols-rounded">home</span>首頁</a></li>
                            <li><a href="products.php?category=sheet">產品</a></li>
                            <li><a href="products.php?category=sheet">薄板</a></li>
                            <li><a href="products.php?type=marble">大理石</a></li>
                        </ul>
                        <img src="" alt="" title="" id="statuario-logo" style="display:none;">
                        <!-- <img src="images/about/holy.svg" alt="α-holy" title="品牌：活麗石" id="statuario-logo" style="padding:.625rem 0 0;> -->
                        <h3 title="品名：雕刻白系列" id="statuario-title">雕刻白系列</h3>
                        <p>款式：</p>
                        <div class="small-img">
                            <input type="radio" name="statuario" id="statuario01" value="大雕刻白">
                            <button class="check" onclick="mainCarousel48.slideTo(1)">
                                <label for="statuario01"><img class="statuario-img01" src="images/products/sheet/statuario/mockup-gran.webp" alt="大雕刻白" title="規格：大雕刻白"></label>
                            </button>
                            <input type="radio" name="statuario" id="statuario02" value="雕刻白">
                            <button class="check" onclick="mainCarousel48.slideTo(5)">
                                <label for="statuario02"><img class="statuario-img02" src="images/products/sheet/statuario/mockup-normal.webp" alt="雕刻白" title="規格：雕刻白"></label>
                            </button>
                        </div>
                        <p>尺寸：</p>
                        <div class="mysize">
                            <input type="radio" name="statuario-size" id="statuario-size01" value="80×240×0.9cm 亮面">
                            <button class="check">
                                <label for="statuario-size01">
                                    <div class="btn btn-secondary" id="statuario-sizebtn01">80×240×0.9cm 亮面</div>
                                </label>
                            </button>
                            <input type="radio" name="statuario-size" id="statuario-size02" value="120×270×0.6cm 霧面">
                            <button class="check">
                                <label for="statuario-size02">
                                    <div class="btn btn-secondary" id="statuario-sizebtn02">120×270×0.6cm 霧面</div>
                                </label>
                            </button>
                        </div>
                        <form action="contact.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="products" value="details"><!-- 傳值用 -->
                            <input type="hidden" name="product-name" value="雕刻白">
                            <input type="hidden" id="statuario-check-img" name="check-img">
                            <input type="hidden" id="statuario-check-size" name="check-size">
                            <div class="row mydescription">
                                <a class="col btn btn-secondary" href="https://drive.google.com/u/0/uc?id=1CtmJfdV2iMqC_vkk7tBHM2DKsW-k0LPw&export=download">下載材質檔</a>
                                <button class="col btn btn-secondary" type="submit">諮詢產品</button>
                            </div>
                        </form>
                        <script>
                        $(':radio[name="statuario-size"]').change(function (){
                            var size = $(this).val();
                            $("#statuario-check-size").attr("value",size);
                        });
                        $(':radio[name="statuario"]').change(function (){
                            var item = $(this).val();
                            $("#statuario-check-img").attr("value",item);
                            $("#statuario-check-size").removeAttr("value");
                            if($("input[name=statuario]")[0].checked){
                                $("#statuario-size02").attr('disabled','ture');
                                $("#statuario-sizebtn02").attr('title','本款未有此尺寸');
                                $("#statuario-size01").removeAttr('disabled');
                                $("#statuario-sizebtn01").removeAttr('title');
                                $("#statuario-title").text('大雕刻白');
                                $("#statuario-logo").attr({
                                    'src' : 'images/about/holy.svg',
                                    'alt' : 'α-holy',
                                    'title' : '品牌：活麗石',
                                }).css({
                                    'padding' : '.625rem 0 0',
                                    'height' : '2.5rem',
                                    'display' : 'block'
                                });
                                $("#myInout2 .mybtn2").removeClass("active");
                                $("#myInout2 .mybtn2").eq(3).addClass("active");
                            } else {
                                $("#statuario-size02").removeAttr('disabled');
                                $("#statuario-sizebtn02").removeAttr('title');
                                $("#statuario-size01").attr('disabled','ture');
                                $("#statuario-sizebtn01").attr('title','本款未有此尺寸');
                                $("#statuario-title").text('雕刻白');
                                $("#statuario-logo").attr({
                                    'src' : 'images/about/eternal.svg',
                                    'alt' : 'α-eternal',
                                    'title' : '品牌：達理石',
                                }).css({
                                    'padding' : '.625rem 0',
                                    'height' : '3rem',
                                    'display' : 'block'
                                });
                                $("#myInout2 .mybtn2").removeClass("active");
                                $("#myInout2 .mybtn2").eq(2).addClass("active");
                            }
                        });
                        </script>
                    </div>
                </div>
            </div>
            <div class="details mmm fumysion">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="box ">
                            <div class="mainCarousel mainCarousel49 carousel w-10/12 max-w-5xl mx-auto">
                                <div class="carousel__slide" data-src="images/products/sheet/myfusion/original/Fusion Grey Amarone Grey.webp" data-fancybox="gallery49">
                                    <img class="img-fluid" src="images/products/sheet/myfusion/mainnail/01.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/myfusion/original/Fusion Grey Gran Statuario.webp" data-fancybox="gallery49">
                                    <img class="img-fluid" src="images/products/sheet/myfusion/mainnail/02.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/myfusion/original/FUSION  GREY_R1.webp" data-fancybox="gallery49">
                                    <img class="img-fluid" src="images/products/sheet/myfusion/mainnail/03.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/myfusion/original/FUSION GREY_R2.webp" data-fancybox="gallery49">
                                    <img class="img-fluid" src="images/products/sheet/myfusion/mainnail/04.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/myfusion/original/FUSION GREY_R3.webp" data-fancybox="gallery49">
                                    <img class="img-fluid" src="images/products/sheet/myfusion/mainnail/05.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/myfusion/original/FUSION GREY_R4.webp" data-fancybox="gallery49">
                                    <img class="img-fluid" src="images/products/sheet/myfusion/mainnail/06.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/myfusion/original/FUSION GREY_R5.webp" data-fancybox="gallery49">
                                    <img class="img-fluid" src="images/products/sheet/myfusion/mainnail/07.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/myfusion/original/FUSION GREY_R6.webp" data-fancybox="gallery49">
                                    <img class="img-fluid" src="images/products/sheet/myfusion/mainnail/08.webp">
                                </div>
                            </div>
                            <div class="thumbCarousel thumbCarousel49 carousel max-w-xl mx-auto">
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/myfusion/thumbnail/01.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/myfusion/thumbnail/02.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/myfusion/thumbnail/03.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/myfusion/thumbnail/04.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/myfusion/thumbnail/05.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/myfusion/thumbnail/06.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/myfusion/thumbnail/07.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/myfusion/thumbnail/08.webp">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul class="breadcrumb">
                            <li><a href="index.php"><span class="material-symbols-rounded">home</span>首頁</a></li>
                            <li><a href="products.php?category=sheet">產品</a></li>
                            <li><a href="products.php?category=sheet">薄板</a></li>
                            <li><a href="products.php?type=marble">大理石</a></li>
                        </ul>
                        <img src="images/about/holy.svg" alt="α-holy" title="品牌：活麗石" style="padding:.625rem 0 0;">
                        <h3 title="品名：流沙灰" id="myfusion-title">流沙灰</h3>
                        <p>款式：</p>
                        <div class="small-img">
                            <input type="radio" name="myfusion" id="myfusion01">
                            <button class="check" onclick="mainCarousel49.slideTo(2)">
                                <label for="myfusion01"><img class="myfusion-img01" src="images/products/sheet/myfusion/mockup-one.webp" alt="流沙灰" title="規格：單一款"></label>
                            </button>
                        </div>
                        <p>尺寸：</p>
                        <div class="mysize">
                            <input type="radio" name="myfusion-size" id="myfusion-size01" value="80×160×0.9cm 亮面">
                            <button class="check">
                                <label for="myfusion-size01">
                                    <div class="btn btn-secondary" id="myfusion-sizebtn01">80×160×0.9cm 亮面</div>
                                </label>
                            </button>
                            <input type="radio" name="myfusion-size" id="myfusion-size02" value="80×240×0.9cm 亮面">
                            <button class="check">
                                <label for="myfusion-size02">
                                    <div class="btn btn-secondary" id="myfusion-sizebtn02">80×240×0.9cm 亮面</div>
                                </label>
                            </button>
                        </div>
                        <form action="contact.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="products" value="details">
                            <input type="hidden" name="product-name" value="流沙灰">
                            <input type="hidden" id="myfusion-check-img" name="check-img" value="單一款">
                            <input type="hidden" id="myfusion-check-size" name="check-size">
                            <div class="row mydescription">
                                <a class="col btn btn-secondary" href="https://drive.google.com/u/0/uc?id=1m53_W-TPIGXLXcYFVhBL6xb_Mu2ez5rf&export=download&confirm=t&uuid=8c31d942-13bf-43b2-8af7-817efb0ac016">下載材質檔</a>
                                <button class="col btn btn-secondary" type="submit">諮詢產品</button>
                            </div>
                        </form>
                        <script>
                        $(':radio[name="myfusion-size"]').change(function (){
                            var size = $(this).val();
                            $("#myfusion-check-size").attr("value",size);
                        });
                        </script>
                    </div>
                </div>
            </div>
            <div class="details mmm pulis">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="box ">
                            <div class="mainCarousel mainCarousel50 carousel w-10/12 max-w-5xl mx-auto">
                                <div class="carousel__slide" data-src="images/products/sheet/pulis/original/120x240x0.9cm_210609.webp" data-fancybox="gallery50">
                                    <img class="img-fluid" src="images/products/sheet/pulis/mainnail/01.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/pulis/original/120x240x0_0.9cm_210609.webp" data-fancybox="gallery50">
                                    <img class="img-fluid" src="images/products/sheet/pulis/mainnail/02.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/pulis/original/120x240x0_1.9cm_210609.webp" data-fancybox="gallery50">
                                    <img class="img-fluid" src="images/products/sheet/pulis/mainnail/03.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/pulis/original/120x240x0_2.9cm_210609.webp" data-fancybox="gallery50">
                                    <img class="img-fluid" src="images/products/sheet/pulis/mainnail/04.webp">
                                </div>
                            </div>
                            <div class="thumbCarousel thumbCarousel50 carousel max-w-xl mx-auto">
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/pulis/thumbnail/01.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/pulis/thumbnail/02.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/pulis/thumbnail/03.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/pulis/thumbnail/04.webp">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul class="breadcrumb">
                            <li><a href="index.php"><span class="material-symbols-rounded">home</span>首頁</a></li>
                            <li><a href="products.php?category=sheet">產品</a></li>
                            <li><a href="products.php?category=sheet">薄板</a></li>
                            <li><a href="products.php?type=marble">大理石</a></li>
                        </ul>
                        <img src="images/about/holy.svg" alt="α-holy" title="品牌：活麗石" style="padding:.625rem 0 0;">
                        <h3 title="品名：富貴棕" id="pulis-title">富貴棕</h3>
                        <p>款式：</p>
                        <div class="small-img">
                            <input type="radio" name="pulis" id="pulis01">
                            <button class="check" onclick="mainCarousel50.slideTo(1)">
                                <label for="pulis01"><img class="pulis-img01" src="images/products/sheet/pulis/mockup-one.webp" alt="富貴棕" title="規格：單一款"></label>
                            </button>
                        </div>
                        <p>尺寸：</p>
                        <div class="mysize">
                            <input type="radio" name="pulis-size" id="pulis-size01">
                            <button class="check">
                                <label for="pulis-size01">
                                    <div class="btn btn-secondary" id="pulis-sizebtn01">120×240×0.9cm 亮面</div>
                                </label>
                            </button>
                        </div>
                        <form action="contact.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="products" value="details"><!-- 傳值用 -->
                            <input type="hidden" name="product-name" value="富貴棕">
                            <input type="hidden" id="pulis-check-img" name="check-img" value="單一款">
                            <input type="hidden" id="pulis-check-size" name="check-size" value="120×240×0.9cm 亮面">
                            <div class="row mydescription">
                                <a class="col btn btn-secondary" href="https://drive.google.com/u/0/uc?id=1JGkrxACA9kNMYnhfmupiVsTFXROHhsWX&export=download">下載材質檔</a>
                                <button class="col btn btn-secondary" type="submit">諮詢產品</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="details mmm onyx">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="box ">
                            <div class="mainCarousel mainCarousel51 carousel w-10/12 max-w-5xl mx-auto">
                                <div class="carousel__slide" data-src="images/products/sheet/onyx/original/onyx white riv 60x120_120x270 blue bathroom.webp" data-fancybox="gallery51">
                                    <img class="img-fluid" src="images/products/sheet/onyx/mainnail/01.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/onyx/original/1.webp" data-fancybox="gallery51">
                                    <img class="img-fluid" src="images/products/sheet/onyx/mainnail/02.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/onyx/original/2.webp" data-fancybox="gallery51">
                                    <img class="img-fluid" src="images/products/sheet/onyx/mainnail/03.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/onyx/original/3.webp" data-fancybox="gallery51">
                                    <img class="img-fluid" src="images/products/sheet/onyx/mainnail/04.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/onyx/original/4.webp" data-fancybox="gallery51">
                                    <img class="img-fluid" src="images/products/sheet/onyx/mainnail/05.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/onyx/original/ambientes_imagen_629.webp" data-fancybox="gallery51">
                                    <img class="img-fluid" src="images/products/sheet/onyx/mainnail/06.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/onyx/original/modelo_img_13166_rotada.webp" data-fancybox="gallery51">
                                    <img class="img-fluid" src="images/products/sheet/onyx/mainnail/07.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/onyx/original/modelo_img_13396_rotada.webp" data-fancybox="gallery51">
                                    <img class="img-fluid" src="images/products/sheet/onyx/mainnail/08.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/onyx/original/Onyx Exotic _ Travertino Classic.webp" data-fancybox="gallery51">
                                    <img class="img-fluid" src="images/products/sheet/onyx/mainnail/09.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/onyx/original/ONYX EXOTIC_A 120x240.webp" data-fancybox="gallery51">
                                    <img class="img-fluid" src="images/products/sheet/onyx/mainnail/10.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/onyx/original/ONYX EXOTIC_B 120x240.webp" data-fancybox="gallery51">
                                    <img class="img-fluid" src="images/products/sheet/onyx/mainnail/11.webp">
                                </div>
                            </div>
                            <div class="thumbCarousel thumbCarousel51 carousel max-w-xl mx-auto">
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/onyx/thumbnail/01.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/onyx/thumbnail/02.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/onyx/thumbnail/03.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/onyx/thumbnail/04.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/onyx/thumbnail/05.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/onyx/thumbnail/06.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/onyx/thumbnail/07.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/onyx/thumbnail/08.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/onyx/thumbnail/09.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/onyx/thumbnail/10.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/onyx/thumbnail/11.webp">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul class="breadcrumb">
                            <li><a href="index.php"><span class="material-symbols-rounded">home</span>首頁</a></li>
                            <li><a href="products.php?category=sheet">產品</a></li>
                            <li><a href="products.php?category=sheet">薄板</a></li>
                            <li><a href="products.php?type=marble">大理石</a> , <a href="products.php?type=jade">玉石</a></li>
                        </ul>
                        <img src="images/about/holy.svg" alt="α-holy" title="品牌：活麗石" id="onyx-logo" style="padding:.625rem 0 0;">
                        <h3 id="onyx-title"></h3>
                        <p>款式：</p>
                        <div class="small-img">
                            <input type="radio" name="onyx" id="onyx01" value="白玉石">
                            <button class="check" onclick="mainCarousel51.slideTo(1)">
                                <label for="onyx01"><img class="onyx-img01" src="images/products/sheet/onyx/mockup-white.webp" alt="白玉石" title="規格：白玉石"></label>
                            </button>
                            <input type="radio" name="onyx" id="onyx02" value="天堂玉">
                            <button class="check" onclick="mainCarousel51.slideTo(6)">
                                <label for="onyx02"><img class="onyx-img02" src="images/products/sheet/onyx/mockup-turquoise.webp" alt="天堂玉" title="規格：天堂玉"></label>
                            </button>
                            <input type="radio" name="onyx" id="onyx03" value="琥珀棕">
                            <button class="check" onclick="mainCarousel51.slideTo(9)">
                                <label for="onyx03"><img class="onyx-img03" src="images/products/sheet/onyx/mockup-exotic.webp" alt="琥珀棕" title="規格：琥珀棕"></label>
                            </button>
                        </div>
                        <p>尺寸：</p>
                        <div class="mysize">
                            <input type="radio" name="onyx-size" id="onyx-size01" value="120×240×0.9cm 亮面">
                            <button class="check">
                                <label for="onyx-size01">
                                    <div class="btn btn-secondary" id="onyx-sizebtn01">120×240×0.9cm 亮面</div>
                                </label>
                            </button>
                            <input type="radio" name="onyx-size" id="onyx-size02" value="120×260×0.6cm 亮面">
                            <button class="check">
                                <label for="onyx-size02">
                                    <div class="btn btn-secondary" id="onyx-sizebtn02">120×260×0.6cm 亮面</div>
                                </label>
                            </button>
                            <input type="radio" name="onyx-size" id="onyx-size03" value="120×270×0.6cm 亮面">
                            <button class="check">
                                <label for="onyx-size03">
                                    <div class="btn btn-secondary" id="onyx-sizebtn03">120×270×0.6cm 亮面</div>
                                </label>
                            </button>
                        </div>
                        <div class="ex" id="onyx-ex">
                            <p>說明：</p>
                            <p><span style="color:red;">出清品</span></p>
                        </div>
                        <form action="contact.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="products" value="details"><!-- 傳值用 -->
                            <input type="hidden" name="product-name" value="Onyx">
                            <input type="hidden" id="onyx-check-img" name="check-img">
                            <input type="hidden" id="onyx-check-size" name="check-size">
                            <div class="row mydescription">
                                <a class="col btn btn-secondary" href="https://drive.google.com/u/0/uc?id=14y5QoWa-yF_voWp403uYKefYNYXSGk38&export=download">下載材質檔</a>
                                <button class="col btn btn-secondary" type="submit">諮詢產品</button>
                            </div>
                        </form>
                        <script>
                            $(':radio[name="onyx-size"]').change(function (){
                                var size = $(this).val();
                                $("#onyx-check-size").attr("value",size);
                            });
                            $(':radio[name="onyx"]').change(function (){
                            var item = $(this).val();
                            $("#onyx-check-img").attr("value",item);
                            $("#onyx-check-size").removeAttr("value");
                            if($("input[name=onyx]")[0].checked){
                                $("#onyx-size01,#onyx-size02").attr('disabled','ture');
                                $("#onyx-sizebtn01,#onyx-sizebtn02").attr('title','本款未有此尺寸');
                                $("#onyx-size03").removeAttr('disabled');
                                $("#onyx-sizebtn03").removeAttr('title');
                                $("#onyx-title").text('白玉石');
                                $("#onyx-logo").attr({
                                    'src' : 'images/about/corner.svg',
                                    'alt' : 'α-corner',
                                    'title' : '品牌：可樂石'
                                }).css({
                                    'padding' : '.625rem 0',
                                    'height' : '2.6rem'
                                });
                                $("#onyx-ex").css('display' , 'none');
                                // $("#onyx-download").attr({
                                //     'href' : '放下載的路徑',
                                //     'download' : '使用者存取時的檔名'
                                // });
                                $("#myInout2 .mybtn2").removeClass("active");
                                $("#myInout2 .mybtn2").eq(1).addClass("active");
                            } else if($("input[name=onyx]")[1].checked){
                                $("#onyx-size01,#onyx-size03").attr('disabled','ture');
                                $("#onyx-sizebtn01,#onyx-sizebtn03").attr('title','本款未有此尺寸');
                                $("#onyx-size02").removeAttr('disabled');
                                $("#onyx-sizebtn02").removeAttr('title');
                                $("#onyx-title").text('天堂玉');
                                $("#onyx-logo").attr({
                                    'src' : 'images/about/corner.svg',
                                    'alt' : 'α-corner',
                                    'title' : '品牌：可樂石'
                                }).css({
                                    'padding' : '.625rem 0',
                                    'height' : '2.6rem'
                                });
                                $("#onyx-ex").css('display' , 'block');
                                // $("#onyx-download").attr({
                                //     'href' : '放下載的路徑',
                                //     'download' : '使用者存取時的檔名'
                                // });
                                $("#myInout2 .mybtn2").removeClass("active");
                                $("#myInout2 .mybtn2").eq(1).addClass("active");
                            } else {
                                $("#onyx-size02,#onyx-size03").attr('disabled','ture');
                                $("#onyx-sizebtn02,#onyx-sizebtn03").attr('title','本款未有此尺寸');
                                $("#onyx-size01").removeAttr('disabled');
                                $("#onyx-sizebtn01").removeAttr('title');
                                $("#onyx-title").text('琥珀棕');
                                $("#onyx-logo").attr({
                                    'src' : 'images/about/holy.svg',
                                    'alt' : 'α-holy',
                                    'title' : '品牌：活麗石',
                                }).css({
                                    'padding' : '.625rem 0 0',
                                    'height' : '2.5rem'
                                });
                                $("#onyx-ex").css('display' , 'none');
                                // $("#onyx-download").attr({
                                //     'href' : '放下載的路徑',
                                //     'download' : '使用者存取時的檔名'
                                // });
                                $("#myInout2 .mybtn2").removeClass("active");
                                $("#myInout2 .mybtn2").eq(3).addClass("active");
                            }
                        });
                        </script>
                    </div>
                </div>
            </div>
            <div class="details mmm pierre">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="box ">
                            <div class="mainCarousel mainCarousel52 carousel w-10/12 max-w-5xl mx-auto">
                                <div class="carousel__slide" data-src="images/products/sheet/pierre/original/PIERRE-BLACK-120X120-LCP.webp" data-fancybox="gallery52">
                                    <img class="img-fluid" src="images/products/sheet/pierre/mainnail/01.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/pierre/original/PIERRE-BLACK-120X270-LCP.webp" data-fancybox="gallery52">
                                    <img class="img-fluid" src="images/products/sheet/pierre/mainnail/02.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/pierre/original/PIERRE-BLACK-BATHROOM.webp" data-fancybox="gallery52">
                                    <img class="img-fluid" src="images/products/sheet/pierre/mainnail/03.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/pierre/original/PIERRE BLACK 1.webp" data-fancybox="gallery52">
                                    <img class="img-fluid" src="images/products/sheet/pierre/mainnail/04.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/pierre/original/PIERRE BLACK 2.webp" data-fancybox="gallery52">
                                    <img class="img-fluid" src="images/products/sheet/pierre/mainnail/05.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/pierre/original/PIERRE BLACK 3.webp" data-fancybox="gallery52">
                                    <img class="img-fluid" src="images/products/sheet/pierre/mainnail/06.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/pierre/original/PIERRE BLACK 4.webp" data-fancybox="gallery52">
                                    <img class="img-fluid" src="images/products/sheet/pierre/mainnail/07.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/pierre/original/PIERRE BLACK 5.webp" data-fancybox="gallery52">
                                    <img class="img-fluid" src="images/products/sheet/pierre/mainnail/08.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/pierre/original/PIERRE BLACK 6.webp" data-fancybox="gallery52">
                                    <img class="img-fluid" src="images/products/sheet/pierre/mainnail/09.webp">
                                </div>
                            </div>
                            <div class="thumbCarousel thumbCarousel52 carousel max-w-xl mx-auto">
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/pierre/thumbnail/01.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/pierre/thumbnail/02.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/pierre/thumbnail/03.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/pierre/thumbnail/04.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/pierre/thumbnail/05.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/pierre/thumbnail/06.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/pierre/thumbnail/07.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/pierre/thumbnail/08.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/pierre/thumbnail/09.webp">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul class="breadcrumb">
                            <li><a href="index.php"><span class="material-symbols-rounded">home</span>首頁</a></li>
                            <li><a href="products.php?category=sheet">產品</a></li>
                            <li><a href="products.php?category=sheet">薄板</a></li>
                            <li><a href="products.php?type=marble">大理石</a></li>
                        </ul>
                        <img src="images/about/corner.svg" alt="α-corner" title="品牌：可樂石" id="pierre-logo" style="padding:.625rem 0;">
                        <h3>皮爾黑金</h3>
                        <p>款式：</p>
                        <div class="small-img">
                            <input type="radio" name="pierre" id="pierre01">
                            <button class="check" onclick="mainCarousel52.slideTo(3)">
                                <label for="pierre01"><img class="pierre-img01" src="images/products/sheet/pierre/mockup-one.webp" alt="皮爾黑金" title="規格：單一款"></label>
                            </button>
                        </div>
                        <p>尺寸：</p>
                        <div class="mysize">
                            <input type="radio" name="pierre-size" id="pierre-size01">
                            <button class="check">
                                <label for="pierre-size01">
                                    <div class="btn btn-secondary" id="pierre-sizebtn01">120×270×0.6cm 亮面</div>
                                </label>
                            </button>
                        </div>
                        <form action="contact.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="products" value="details"><!-- 傳值用 -->
                            <input type="hidden" name="product-name" value="皮爾黑金">
                            <input type="hidden" id="pierre-check-img" name="check-img" value="單一款">
                            <input type="hidden" id="pierre-check-size" name="check-size" value="120×270×0.6cm 亮面">
                            <div class="row mydescription">
                                <a class="col btn btn-secondary" href="https://drive.google.com/u/0/uc?id=1aNMf7_M1K8XMH78WDNsM_1DPdfHPKWQ7&export=download&confirm=t&uuid=984be858-1922-4751-99b4-5c63aeb28101">下載材質檔</a>
                                <button class="col btn btn-secondary" type="submit">諮詢產品</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="details mmm amazzonite">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="box ">
                            <div class="mainCarousel mainCarousel53 carousel w-10/12 max-w-5xl mx-auto">
                                <div class="carousel__slide" data-src="images/products/sheet/amazzonite/original/amazzonite-lcp-120x270-1.webp" data-fancybox="gallery53">
                                    <img class="img-fluid" src="images/products/sheet/amazzonite/mainnail/01.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/amazzonite/original/amazzonite-hotel-120x120-120x270-lcp.webp" data-fancybox="gallery53">
                                    <img class="img-fluid" src="images/products/sheet/amazzonite/mainnail/02.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/amazzonite/original/amazzonite-bathroom-120x270-lcp.webp" data-fancybox="gallery53">
                                    <img class="img-fluid" src="images/products/sheet/amazzonite/mainnail/03.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/amazzonite/original/AMAZZONITE 1.webp" data-fancybox="gallery53">
                                    <img class="img-fluid" src="images/products/sheet/amazzonite/mainnail/04.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/amazzonite/original/AMAZZONITE 2.webp" data-fancybox="gallery53">
                                    <img class="img-fluid" src="images/products/sheet/amazzonite/mainnail/05.webp">
                                </div>
                            </div>
                            <div class="thumbCarousel thumbCarousel53 carousel max-w-xl mx-auto">
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/amazzonite/thumbnail/01.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/amazzonite/thumbnail/02.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/amazzonite/thumbnail/03.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/amazzonite/thumbnail/04.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/amazzonite/thumbnail/05.webp">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul class="breadcrumb">
                            <li><a href="index.php"><span class="material-symbols-rounded">home</span>首頁</a></li>
                            <li><a href="products.php?category=sheet">產品</a></li>
                            <li><a href="products.php?category=sheet">薄板</a></li>
                            <li><a href="products.php?type=marble">大理石</a> , <a href="products.php?type=jade">玉石</a></li>
                        </ul>
                        <img src="images/about/eternal.svg" alt="α-eternal" title="品牌：可樂石" id="amazzonite-logo" style="padding:.625rem 0;height: 3rem;">
                        <h3 title="品名：亞馬遜">亞馬遜</h3>
                        <p>款式：</p>
                        <div class="small-img">
                            <input type="radio" name="amazzonite" id="amazzonite01">
                            <button class="check" onclick="mainCarousel53.slideTo(3)">
                                <label for="amazzonite01"><img class="amazzonite-img01" src="images/products/sheet/amazzonite/mockup-one.webp" alt="亞馬遜" title="規格：單一款"></label>
                            </button>
                        </div>
                        <p>尺寸：</p>
                        <div class="mysize">
                            <input type="radio" name="amazzonite-size" id="amazzonite-size01" value="120×270×0.6cm 亮面">
                            <button class="check">
                                <label for="amazzonite-size01">
                                    <div class="btn btn-secondary" id="amazzonite-sizebtn01">120×270×0.6cm 亮面</div>
                                </label>
                            </button>
                            <input type="radio" name="amazzonite-size" id="amazzonite-size02" value="120×270×0.6cm 霧面">
                            <button class="check">
                                <label for="amazzonite-size02">
                                    <div class="btn btn-secondary" id="amazzonite-sizebtn02">120×270×0.6cm 霧面</div>
                                </label>
                            </button>
                        </div>
                        <form action="contact.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="products" value="details"><!-- 傳值用 -->
                            <input type="hidden" name="product-name" value="亞馬遜">
                            <input type="hidden" id="amazzonite-check-img" name="check-img" value="單一款">
                            <input type="hidden" id="amazzonite-check-size" name="check-size">
                            <div class="row mydescription">
                                <a class="col btn btn-secondary" href="https://drive.google.com/u/0/uc?id=19WyAKmwqB1o2rBU-mMCzixLsUoCgtOe6&export=download&confirm=t&uuid=0986884b-f08b-41fd-aad2-1197521d5144">下載材質檔</a>
                                <button class="col btn btn-secondary" type="submit">諮詢產品</button>
                            </div>
                        </form>
                        <script>
                            $(':radio[name="amazzonite-size"]').change(function (){
                                var size = $(this).val();
                                $("#amazzonite-check-size").attr("value",size);
                            });
                        </script>
                    </div>
                </div>
            </div>
            <div class="details mmm parker">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="box ">
                            <div class="mainCarousel mainCarousel54 carousel w-10/12 max-w-5xl mx-auto">
                                <div class="carousel__slide" data-src="images/products/sheet/parker/original/PARKER-WHITE-121X121-1.webp" data-fancybox="gallery54">
                                    <img class="img-fluid" src="images/products/sheet/parker/mainnail/01.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/parker/original/PARKER WHITE 1.webp" data-fancybox="gallery54">
                                    <img class="img-fluid" src="images/products/sheet/parker/mainnail/02.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/parker/original/PARKER WHITE 2.webp" data-fancybox="gallery54">
                                    <img class="img-fluid" src="images/products/sheet/parker/mainnail/03.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/parker/original/PARKER WHITE 3.webp" data-fancybox="gallery54">
                                    <img class="img-fluid" src="images/products/sheet/parker/mainnail/04.webp">
                                </div>
                            </div>
                            <div class="thumbCarousel thumbCarousel54 carousel max-w-xl mx-auto">
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/parker/thumbnail/01.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/parker/thumbnail/02.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/parker/thumbnail/03.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/parker/thumbnail/04.webp">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul class="breadcrumb">
                            <li><a href="index.php"><span class="material-symbols-rounded">home</span>首頁</a></li>
                            <li><a href="products.php?category=sheet">產品</a></li>
                            <li><a href="products.php?category=sheet">薄板</a></li>
                            <li><a href="products.php?type=marble">大理石</a></li>
                        </ul>
                        <img src="images/about/corner.svg" alt="α-corner" title="品牌：可樂石" id="parker-logo" style="padding:.625rem 0;">
                        <h3 title="品名：帕克白">帕克白</h3>
                        <p>款式：</p>
                        <div class="small-img">
                            <input type="radio" name="parker" id="parker01">
                            <button class="check" onclick="mainCarousel54.slideTo(1)">
                                <label for="parker01"><img class="parker-img01" src="images/products/sheet/parker/mockup-one.webp" alt="帕克白" title="規格：單一款"></label>
                            </button>
                        </div>
                        <p>尺寸：</p>
                        <div class="mysize">
                            <input type="radio" name="parker-size" id="parker-size01">
                            <button class="check">
                                <label for="parker-size01">
                                    <div class="btn btn-secondary" id="parker-sizebtn01">120×270×0.6cm 霧面</div>
                                </label>
                            </button>
                        </div>
                        <form action="contact.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="products" value="details"><!-- 傳值用 -->
                            <input type="hidden" name="product-name" value="帕克白">
                            <input type="hidden" id="fibre-check-img" name="check-img" value="單一款">
                            <input type="hidden" id="fibre-check-size" name="check-size" value="120×270×0.6cm 霧面">
                            <div class="row mydescription">
                                <a class="col btn btn-secondary" href="https://drive.google.com/u/0/uc?id=1o_tY3GY4jhGJSdUvnntWWNYtUaRWSL42&export=download">下載材質檔</a>
                                <button class="col btn btn-secondary" type="submit">諮詢產品</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="details mmm modelo">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="box ">
                            <div class="mainCarousel mainCarousel55 carousel w-10/12 max-w-5xl mx-auto">
                                <div class="carousel__slide" data-src="images/products/sheet/modelo/original/ambientes_imagen_758.webp" data-fancybox="gallery55">
                                    <img class="img-fluid" src="images/products/sheet/modelo/mainnail/01.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/modelo/original/ambientes_imagen_759.webp" data-fancybox="gallery55">
                                    <img class="img-fluid" src="images/products/sheet/modelo/mainnail/02.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/modelo/original/modelo_img_13762.webp" data-fancybox="gallery55">
                                    <img class="img-fluid" src="images/products/sheet/modelo/mainnail/03.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/modelo/original/modelo_img_13763.webp" data-fancybox="gallery55">
                                    <img class="img-fluid" src="images/products/sheet/modelo/mainnail/04.webp">
                                </div>
                            </div>
                            <div class="thumbCarousel thumbCarousel55 carousel max-w-xl mx-auto">
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/modelo/thumbnail/01.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/modelo/thumbnail/02.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/modelo/thumbnail/03.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/modelo/thumbnail/04.webp">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul class="breadcrumb">
                            <li><a href="index.php"><span class="material-symbols-rounded">home</span>首頁</a></li>
                            <li><a href="products.php?category=sheet">產品</a></li>
                            <li><a href="products.php?category=sheet">薄板</a></li>
                            <li><a href="products.php?type=other">特色</a></li>
                        </ul>
                        <img src="images/about/corner.svg" alt="α-corner" title="品牌：可樂石" id="modelo-logo" style="padding:.625rem 0;">
                        <h3 title="品名：藍鳳凰系列">藍鳳凰系列</h3>
                        <p>款式：</p>
                        <div class="small-img">
                            <input type="radio" name="modelo" id="modelo01" value="素磚">
                            <button class="check" onclick="mainCarousel55.slideTo(2)">
                                <label for="modelo01"><img class="modelo-img01" src="images/products/sheet/modelo/mockup-plain.webp" alt="藍鳳凰" title="規格：素磚"></label>
                            </button>
                            <input type="radio" name="modelo" id="modelo02" value="花磚">
                            <button class="check" onclick="mainCarousel55.slideTo(3)">
                                <label for="modelo02"><img class="modelo-img02" src="images/products/sheet/modelo/mockup-flowery.webp" alt="藍鳳凰" title="規格：花磚"></label>
                            </button>
                        </div>
                        <p>尺寸：</p>
                        <div class="mysize">
                            <input type="radio" name="modelo-size" id="modelo-size01">
                            <button class="check">
                                <label for="modelo-size01">
                                    <div class="btn btn-secondary" id="modelo-sizebtn01">120×300×0.6cm 霧面</div>
                                </label>
                            </button>
                        </div>
                        <form action="contact.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="products" value="details">
                            <input type="hidden" name="product-name" value="藍鳳凰">
                            <input type="hidden" id="modelo-check-img" name="check-img">
                            <input type="hidden" id="modelo-check-size" name="check-size" value="120×300×0.6cm 霧面">
                            <div class="row mydescription">
                                <a class="col btn btn-secondary" href="https://drive.google.com/u/0/uc?id=1Mkt869Ab6JIB5WPesHb5lL9504PSLyVC&export=download">下載材質檔</a>
                                <button class="col btn btn-secondary" type="submit">諮詢產品</button>
                            </div>
                        </form>
                        <script>
                        $(':radio[name="modelo"]').change(function (){
                            var item = $(this).val();
                            $("#modelo-check-img").attr("value",item);
                        });
                        </script>
                    </div>
                </div>
            </div>
            <div class="details mmm venezia">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="box ">
                            <div class="mainCarousel mainCarousel56 carousel w-10/12 max-w-5xl mx-auto">
                                <div class="carousel__slide" data-src="images/products/sheet/venezia/original/VENEZIA DOGE.webp" data-fancybox="gallery56">
                                    <img class="img-fluid" src="images/products/sheet/venezia/mainnail/01.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/venezia/original/501-924-ABKABKSTONEBAGNO-NUOVOv2-bassa.webp" data-fancybox="gallery56">
                                    <img class="img-fluid" src="images/products/sheet/venezia/mainnail/02.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/venezia/original/d3d_default_0001920.webp" data-fancybox="gallery56">
                                    <img class="img-fluid" src="images/products/sheet/venezia/mainnail/03.webp">
                                </div>
                            </div>
                            <div class="thumbCarousel thumbCarousel56 carousel max-w-xl mx-auto">
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/venezia/thumbnail/01.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/venezia/thumbnail/02.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/venezia/thumbnail/03.webp">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul class="breadcrumb">
                            <li><a href="index.php"><span class="material-symbols-rounded">home</span>首頁</a></li>
                            <li><a href="products.php?category=sheet">產品</a></li>
                            <li><a href="products.php?category=sheet">薄板</a></li>
                            <li><a href="products.php?type=other">特色</a></li>
                        </ul>
                        <img src="images/about/corner.svg" alt="α-corner" title="品牌：可樂石" id="venezia-logo" style="padding:.625rem 0;">
                        <h3 title="品名：花格子">花格子</h3>
                        <p>款式：</p>
                        <div class="small-img">
                            <input type="radio" name="venezia" id="venezia01">
                            <button class="check" onclick="mainCarousel56.slideTo(2)">
                                <label for="venezia01"><img class="venezia-img01" src="images/products/sheet/venezia/mockup-one.webp" alt="花格子" title="規格：單一款"></label>
                            </button>
                        </div>
                        <p>尺寸：</p>
                        <div class="mysize">
                            <input type="radio" name="venezia-size" id="venezia-size01">
                            <button class="check">
                                <label for="venezia-size01">
                                    <div class="btn btn-secondary" id="venezia-sizebtn01">120×240×0.6cm 霧面</div>
                                </label>
                            </button>
                        </div>
                        <form action="contact.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="products" value="details">
                            <input type="hidden" name="product-name" value="花格子">
                            <input type="hidden" id="venezia-check-img" name="check-img" value="單一款">
                            <input type="hidden" id="venezia-check-size" name="check-size" value="120×240×0.6cm 霧面">
                            <div class="row mydescription">
                                <a class="col btn btn-secondary" href="https://drive.google.com/u/0/uc?id=1m5xshjNM2mtSCDTGnbdcl7CLPErTSgJt&export=download&confirm=t&uuid=f2cc3481-39e3-4162-8f52-af8f99e3c40a">下載材質檔</a>
                                <button class="col btn btn-secondary" type="submit">諮詢產品</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="details mmm cenerino">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="box ">
                            <div class="mainCarousel mainCarousel57 carousel w-10/12 max-w-5xl mx-auto">
                                <div class="carousel__slide" data-src="images/products/sheet/cenerino/original/CENERINO 60x120 rett.webp" data-fancybox="gallery57">
                                    <img class="img-fluid" src="images/products/sheet/cenerino/mainnail/01.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/cenerino/original/CENERINO 120X120 lcp.webp" data-fancybox="gallery57">
                                    <img class="img-fluid" src="images/products/sheet/cenerino/mainnail/02.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/cenerino/original/CENERINO CLOSE UP.webp" data-fancybox="gallery57">
                                    <img class="img-fluid" src="images/products/sheet/cenerino/mainnail/03.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/cenerino/original/CENERINO 30x60 rett.webp" data-fancybox="gallery57">
                                    <img class="img-fluid" src="images/products/sheet/cenerino/mainnail/04.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/cenerino/original/CENERINO double exa.webp" data-fancybox="gallery57">
                                    <img class="img-fluid" src="images/products/sheet/cenerino/mainnail/05.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/cenerino/original/CENERINO RECEPTION 120X270.webp" data-fancybox="gallery57">
                                    <img class="img-fluid" src="images/products/sheet/cenerino/mainnail/06.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/cenerino/original/CALACATTA CENERINO 1.webp" data-fancybox="gallery57">
                                    <img class="img-fluid" src="images/products/sheet/cenerino/mainnail/07.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/cenerino/original/CALACATTA CENERINO 2.webp" data-fancybox="gallery57">
                                    <img class="img-fluid" src="images/products/sheet/cenerino/mainnail/08.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/cenerino/original/CALACATTA CENERINO 3.webp" data-fancybox="gallery57">
                                    <img class="img-fluid" src="images/products/sheet/cenerino/mainnail/09.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/cenerino/original/CALACATTA CENERINO 4.webp" data-fancybox="gallery57">
                                    <img class="img-fluid" src="images/products/sheet/cenerino/mainnail/10.webp">
                                </div>
                            </div>
                            <div class="thumbCarousel thumbCarousel57 carousel max-w-xl mx-auto">
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/cenerino/thumbnail/01.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/cenerino/thumbnail/02.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/cenerino/thumbnail/03.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/cenerino/thumbnail/04.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/cenerino/thumbnail/05.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/cenerino/thumbnail/06.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/cenerino/thumbnail/07.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/cenerino/thumbnail/08.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/cenerino/thumbnail/09.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/cenerino/thumbnail/10.webp">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul class="breadcrumb">
                            <li><a href="index.php"><span class="material-symbols-rounded">home</span>首頁</a></li>
                            <li><a href="products.php?category=sheet">產品</a></li>
                            <li><a href="products.php?category=sheet">薄板</a></li>
                            <li><a href="products.php?type=marble">大理石</a></li>
                        </ul>
                        <img src="images/about/eternal.svg" alt="α-eternal" title="品牌：達理石" id="cenerino-logo" style="height:3rem;">
                        <h3 title="品名：卡拉灰">卡拉灰</h3>
                        <p>款式：</p>
                        <div class="small-img">
                            <input type="radio" name="cenerino" id="cenerino01">
                            <button class="check" onclick="mainCarousel57.slideTo(6)">
                                <label for="cenerino01"><img class="cenerino-img01" src="images/products/sheet/cenerino/mockup-one.webp" alt="卡拉灰" title="規格：單一款"></label>
                            </button>
                        </div>
                        <p>尺寸：</p>
                        <div class="mysize">
                            <input type="radio" name="cenerino-size" id="cenerino-size01">
                            <button class="check">
                                <label for="cenerino-size01">
                                    <div class="btn btn-secondary" id="cenerino-sizebtn01">120×270×0.6cm 亮面</div>
                                </label>
                            </button>
                        </div>
                        <form action="contact.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="products" value="details">
                            <input type="hidden" name="product-name" value="卡拉灰">
                            <input type="hidden" id="fibre-check-img" name="check-img" value="單一款">
                            <input type="hidden" id="fibre-check-size" name="check-size" value="120×270×0.6cm 亮面">
                            <div class="row mydescription">
                                <a class="col btn btn-secondary" href="https://drive.google.com/u/0/uc?id=1loow_KBygBDJy2H_T4oEMEZoPX8ZKMF_&export=download">下載材質檔</a>
                                <button class="col btn btn-secondary" type="submit">諮詢產品</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="details mmm marquina">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="box ">
                            <div class="mainCarousel mainCarousel58 carousel w-10/12 max-w-5xl mx-auto">
                                <div class="carousel__slide" data-src="images/products/sheet/marquina/original/MARQUINA TOP CUCINA MAT.webp" data-fancybox="gallery58">
                                    <img class="img-fluid" src="images/products/sheet/marquina/mainnail/01.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/marquina/original/MARQUINA lastra.webp" data-fancybox="gallery58">
                                    <img class="img-fluid" src="images/products/sheet/marquina/mainnail/02.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/marquina/original/MARQUINA lastra camino.webp" data-fancybox="gallery58">
                                    <img class="img-fluid" src="images/products/sheet/marquina/mainnail/03.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/marquina/original/MARQUINA BLACK 1.webp" data-fancybox="gallery58">
                                    <img class="img-fluid" src="images/products/sheet/marquina/mainnail/04.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/marquina/original/MARQUINA BLACK 2.webp" data-fancybox="gallery58">
                                    <img class="img-fluid" src="images/products/sheet/marquina/mainnail/05.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/marquina/original/MARQUINA BLACK 3.webp" data-fancybox="gallery58">
                                    <img class="img-fluid" src="images/products/sheet/marquina/mainnail/06.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/marquina/original/MARQUINA BLACK 4.webp" data-fancybox="gallery58">
                                    <img class="img-fluid" src="images/products/sheet/marquina/mainnail/07.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/marquina/original/MARQUINA BLACK 5.webp" data-fancybox="gallery58">
                                    <img class="img-fluid" src="images/products/sheet/marquina/mainnail/08.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/marquina/original/MARQUINA BLACK 6.webp" data-fancybox="gallery58">
                                    <img class="img-fluid" src="images/products/sheet/marquina/mainnail/09.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/marquina/original/MARQUINA BLACK 7.webp" data-fancybox="gallery58">
                                    <img class="img-fluid" src="images/products/sheet/marquina/mainnail/10.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/marquina/original/MARQUINA BLACK 8.webp" data-fancybox="gallery58">
                                    <img class="img-fluid" src="images/products/sheet/marquina/mainnail/11.webp">
                                </div>
                            </div>
                            <div class="thumbCarousel thumbCarousel58 carousel max-w-xl mx-auto">
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/marquina/thumbnail/01.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/marquina/thumbnail/02.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/marquina/thumbnail/03.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/marquina/thumbnail/04.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/marquina/thumbnail/05.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/marquina/thumbnail/06.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/marquina/thumbnail/07.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/marquina/thumbnail/08.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/marquina/thumbnail/09.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/marquina/thumbnail/10.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/marquina/thumbnail/11.webp">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul class="breadcrumb">
                            <li><a href="index.php"><span class="material-symbols-rounded">home</span>首頁</a></li>
                            <li><a href="products.php?category=sheet">產品</a></li>
                            <li><a href="products.php?category=sheet">薄板</a></li>
                            <li><a href="products.php?type=marble">大理石</a></li>
                        </ul>
                        <img src="images/about/eternal.svg" alt="α-eternal" title="品牌：達理石" id="marquina-logo" style="height:3rem;">
                        <h3 title="品名：馬奎納黑">馬奎納黑</h3>
                        <p>款式：</p>
                        <div class="small-img">
                            <input type="radio" name="marquina" id="marquina01">
                            <button class="check" onclick="mainCarousel58.slideTo(6)">
                                <label for="marquina01"><img class="marquina-img01" src="images/products/sheet/marquina/mockup-one.webp" alt="馬奎納黑" title="規格：單一款"></label>
                            </button>
                        </div>
                        <p>尺寸：</p>
                        <div class="mysize">
                            <input type="radio" name="marquina-size" id="marquina-size01" value="120×270×0.6cm 亮面">
                            <button class="check">
                                <label for="marquina-size01">
                                    <div class="btn btn-secondary" id="marquina-sizebtn01">120×270×0.6cm 亮面</div>
                                </label>
                            </button>
                            <input type="radio" name="marquina-size" id="marquina-size02" value="120×270×0.6cm 霧面">
                            <button class="check">
                                <label for="marquina-size02">
                                    <div class="btn btn-secondary" id="marquina-sizebtn02">120×270×0.6cm 霧面</div>
                                </label>
                            </button>
                        </div>
                        <form action="contact.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="products" value="details">
                            <input type="hidden" name="product-name" value="馬奎納黑">
                            <input type="hidden" id="marquina-check-img" name="check-img" value="單一款">
                            <input type="hidden" id="marquina-check-size" name="check-size">
                            <div class="row mydescription">
                                <a class="col btn btn-secondary" href="https://drive.google.com/u/0/uc?id=176-BKsZIFVkuRiincMc1VVzpkvPEoOJd&export=download&confirm=t&uuid=0322a5da-b3df-49b6-93bb-eead89d12120">下載材質檔</a>
                                <button class="col btn btn-secondary" type="submit">諮詢產品</button>
                            </div>
                        </form>
                        <script>
                            $(':radio[name="marquina-size"]').change(function (){
                                var size = $(this).val();
                                $("#marquina-check-size").attr("value",size);
                            });
                        </script>
                    </div>
                </div>
            </div>
            <div class="details mmm agata">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="box ">
                            <div class="mainCarousel mainCarousel59 carousel w-10/12 max-w-5xl mx-auto">
                                <div class="carousel__slide" data-src="images/products/sheet/agata/original/agata blue bookmatch 2_RGB.webp" data-fancybox="gallery59">
                                    <img class="img-fluid" src="images/products/sheet/agata/mainnail/01.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/agata/original/agata blue bookmatch_RGB.webp" data-fancybox="gallery59">
                                    <img class="img-fluid" src="images/products/sheet/agata/mainnail/02.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/agata/original/Agata Blu.webp" data-fancybox="gallery59">
                                    <img class="img-fluid" src="images/products/sheet/agata/mainnail/03.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/agata/original/agata OYSTER bATHROOM_RGB.webp" data-fancybox="gallery59">
                                    <img class="img-fluid" src="images/products/sheet/agata/mainnail/04.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/agata/original/Agata OYSTER.webp" data-fancybox="gallery59">
                                    <img class="img-fluid" src="images/products/sheet/agata/mainnail/05.webp">
                                </div>
                            </div>
                            <div class="thumbCarousel thumbCarousel59 carousel max-w-xl mx-auto">
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/agata/thumbnail/01.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/agata/thumbnail/02.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/agata/thumbnail/03.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/agata/thumbnail/04.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/agata/thumbnail/05.webp">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul class="breadcrumb">
                            <li><a href="index.php"><span class="material-symbols-rounded">home</span>首頁</a></li>
                            <li><a href="products.php?category=sheet">產品</a></li>
                            <li><a href="products.php?category=sheet">薄板</a></li>
                            <li><a href="products.php?type=marble">大理石</a> , <a href="products.php?type=jade">玉石</a></li>
                        </ul>
                        <img src="images/about/eternal.svg" alt="α-eternal" title="品牌：達理石" id="agata-logo" style="height:3rem;">
                        <h3 id="agata-title" title="品名：田玉系列">田玉系列</h3>
                        <p>款式：</p>
                        <div class="small-img">
                            <input type="radio" name="agata" id="agata01" value="藍">
                            <button class="check" onclick="mainCarousel59.slideTo(2)">
                                <label for="agata01"><img class="agata-img01" src="images/products/sheet/agata/mockup-blue.webp" alt="藍田玉" title="規格：藍田玉"></label>
                            </button>
                            <input type="radio" name="agata" id="agata02" value="青">
                            <button class="check" onclick="mainCarousel59.slideTo(4)">
                                <label for="agata02"><img class="agata-img02" src="images/products/sheet/agata/mockup-oyster.webp" alt="青田玉" title="規格：青田玉"></label>
                            </button>
                        </div>
                        <p>尺寸：</p>
                        <div class="mysize">
                            <input type="radio" name="agata-size" id="agata-size01">
                            <button class="check">
                                <label for="agata-size01">
                                    <div class="btn btn-secondary" id="agata-sizebtn01">120×270×0.6cm 亮面</div>
                                </label>
                            </button>
                        </div>
                        <form action="contact.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="products" value="details"><!-- 傳值用 -->
                            <input type="hidden" name="product-name" value="田玉">
                            <input type="hidden" id="agata-check-img" name="check-img">
                            <input type="hidden" id="agata-check-size" name="check-size" value="120×270×0.6cm 亮面">
                            <div class="row mydescription">
                                <a class="col btn btn-secondary" href="https://drive.google.com/u/0/uc?id=19XhUZn2vy0GPfvNoW8lnheVpsfhK9DZJ&export=download">下載材質檔</a>
                                <button class="col btn btn-secondary" type="submit">諮詢產品</button>
                            </div>
                        </form>
                        <script>
                            $(':radio[name="agata"]').change(function (){
                            var item = $(this).val();
                            $("#agata-check-img").attr("value",item);
                            if($("input[name=agata]")[0].checked){
                                $("#agata-title").text('藍田玉');
                            } else {
                                $("#agata-title").text('青田玉');
                            }
                        });
                        </script>
                    </div>
                </div>
            </div>
            <div class="details mmm ruina"><!-- iwall -->
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="box ">
                            <div class="mainCarousel mainCarousel60 carousel w-10/12 max-w-5xl mx-auto">
                                <div class="carousel__slide" data-src="images/products/trim/ruina/original/Ruina Ocre-01.webp" data-fancybox="gallery60">
                                    <img class="img-fluid" src="images/products/trim/ruina/mainnail/01.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/ruina/original/70_1_entepe-galeri-1.webp" data-fancybox="gallery60">
                                    <img class="img-fluid" src="images/products/trim/ruina/mainnail/02.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/ruina/original/70_1_entepe-galeri-2.webp" data-fancybox="gallery60">
                                    <img class="img-fluid" src="images/products/trim/ruina/mainnail/03.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/ruina/original/Amazon Natura-05.webp" data-fancybox="gallery60">
                                    <img class="img-fluid" src="images/products/trim/ruina/mainnail/04.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/ruina/original/ruina-arce.webp" data-fancybox="gallery60">
                                    <img class="img-fluid" src="images/products/trim/ruina/mainnail/05.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/ruina/original/ruina-carmin.webp" data-fancybox="gallery60">
                                    <img class="img-fluid" src="images/products/trim/ruina/mainnail/06.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/ruina/original/ruina-gris.webp" data-fancybox="gallery60">
                                    <img class="img-fluid" src="images/products/trim/ruina/mainnail/07.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/ruina/original/ruina-kesit.webp" data-fancybox="gallery60">
                                    <img class="img-fluid" src="images/products/trim/ruina/mainnail/08.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/ruina/original/ruina-ocre.webp" data-fancybox="gallery60">
                                    <img class="img-fluid" src="images/products/trim/ruina/mainnail/09.webp">
                                </div>
                            </div>
                            <div class="thumbCarousel thumbCarousel60 carousel max-w-xl mx-auto">
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/ruina/thumbnail/01.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/ruina/thumbnail/02.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/ruina/thumbnail/03.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/ruina/thumbnail/04.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/ruina/thumbnail/05.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/ruina/thumbnail/06.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/ruina/thumbnail/07.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/ruina/thumbnail/08.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/ruina/thumbnail/09.webp">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul class="breadcrumb">
                            <li><a href="index.php"><span class="material-symbols-rounded">home</span>首頁</a></li>
                            <li><a href="products.php?category=sheet">產品</a></li>
                            <li><a href="products.php?category=trim">飾板</a></li>
                        </ul>
                        <img src="images/about/iwall.svg" alt="iwall" title="品牌：IWALL愛沃">
                        <h3 title="品名：往日系列">往日系列</h3>
                        <!-- <p class="subtitle">一些內文<span class="badge badge-secondary">#123</span></p> -->
                        <p>款式：</p>
                        <div class="small-img">
                            <input type="radio" name="ruina" id="ruina01" value="戰爭">
                            <button class="check" onclick="mainCarousel60.slideTo(4)">
                                <label for="ruina01"><img class="ruina-img01" src="images/products/trim/ruina/mockup-arce.webp" alt="往日-戰爭" title="規格：戰爭"></label>
                            </button>
                            <input type="radio" name="ruina" id="ruina02" value="殘垣">
                            <button class="check" onclick="mainCarousel60.slideTo(5)">
                                <label for="ruina02"><img class="ruina-img02" src="images/products/trim/ruina/mockup-carmin.webp" alt="往日-殘垣" title="規格：殘垣"></label>
                            </button>
                            <input type="radio" name="ruina" id="ruina03" value="考古">
                            <button class="check" onclick="mainCarousel60.slideTo(6)">
                                <label for="ruina03"><img class="ruina-img03" src="images/products/trim/ruina/mockup-gris.webp" alt="往日-考古" title="規格：考古"></label>
                            </button>
                            <input type="radio" name="ruina" id="ruina04" value="遺址">
                            <button class="check" onclick="mainCarousel60.slideTo(8)">
                                <label for="ruina04"><img class="ruina-img04" src="images/products/trim/ruina/mockup-ocre.webp" alt="往日-遺址" title="規格：遺址"></label>
                            </button>
                        </div>
                        <p>尺寸：</p>
                        <div class="mysize">
                            <input type="radio" name="ruina-size" id="ruina-size01">
                            <button class="check">
                                <label for="ruina-size01">
                                    <div class="btn btn-secondary"id="ruina-sizebtn01">130x300cm</div>
                                </label>
                            </button>
                        </div>
                        <!-- <div class="ex" id="ruina-ex">
                            <p>說明：</p>
                            <p></p>
                        </div> -->
                        <form action="contact.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="products" value="details">
                            <input type="hidden" name="product-name" value="往日">
                            <input type="hidden" id="ruina-check-img" name="check-img">
                            <input type="hidden" id="ruina-check-size" name="check-size" value="130x300cm">
                            <div class="row mydescription">
                                <a class="col btn btn-secondary" href="https://drive.google.com/file/d/16vHVU5rt4McnjujVRliIySqBgpJrBABe/view?usp=sharing">下載材質檔</a>
                                <button class="col btn btn-secondary" type="submit">諮詢產品</button>
                            </div>
                        </form>
                        <script>
                            // $(':radio[name="ruina-size"]').change(function (){
                            //     var size = $(this).val();
                            //     $("#ruina-check-size").attr("value",size);
                            // });
                            $(':radio[name="ruina"]').change(function (){
                                var item = $(this).val();
                                $("#ruina-check-img").attr("value",item);
                            });
                        </script>
                    </div>
                </div>
            </div>
            <div class="details mmm amazon">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="box ">
                            <div class="mainCarousel mainCarousel61 carousel w-10/12 max-w-5xl mx-auto">
                                <div class="carousel__slide" data-src="images/products/trim/amazon/original/70_1_gurkansef-galeri-4.webp" data-fancybox="gallery61">
                                    <img class="img-fluid" src="images/products/trim/amazon/mainnail/01.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/amazon/original/Amazon Natura-02.webp" data-fancybox="gallery61">
                                    <img class="img-fluid" src="images/products/trim/amazon/mainnail/02.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/amazon/original/Amazon Natura-04 HORI RESTORAN.webp" data-fancybox="gallery61">
                                    <img class="img-fluid" src="images/products/trim/amazon/mainnail/03.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/amazon/original/Amazon Natura-05.webp" data-fancybox="gallery61">
                                    <img class="img-fluid" src="images/products/trim/amazon/mainnail/04.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/amazon/original/Amazon Natura-06.webp" data-fancybox="gallery61">
                                    <img class="img-fluid" src="images/products/trim/amazon/mainnail/05.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/amazon/original/Amazon Natura-07.webp" data-fancybox="gallery61">
                                    <img class="img-fluid" src="images/products/trim/amazon/mainnail/06.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/amazon/original/S__13959200.webp" data-fancybox="gallery61">
                                    <img class="img-fluid" src="images/products/trim/amazon/mainnail/07.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/amazon/original/S__13959202.webp" data-fancybox="gallery61">
                                    <img class="img-fluid" src="images/products/trim/amazon/mainnail/08.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/amazon/original/amazon-kesit.webp" data-fancybox="gallery61">
                                    <img class="img-fluid" src="images/products/trim/amazon/mainnail/09.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/amazon/original/amazon-basalto.webp" data-fancybox="gallery61">
                                    <img class="img-fluid" src="images/products/trim/amazon/mainnail/10.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/amazon/original/amazon-blanca.webp" data-fancybox="gallery61">
                                    <img class="img-fluid" src="images/products/trim/amazon/mainnail/11.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/amazon/original/amazon-carmin.webp" data-fancybox="gallery61">
                                    <img class="img-fluid" src="images/products/trim/amazon/mainnail/12.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/amazon/original/amazon-earth.webp" data-fancybox="gallery61">
                                    <img class="img-fluid" src="images/products/trim/amazon/mainnail/13.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/amazon/original/amazon-natura.webp" data-fancybox="gallery61">
                                    <img class="img-fluid" src="images/products/trim/amazon/mainnail/14.webp">
                                </div>
                            </div>
                            <div class="thumbCarousel thumbCarousel61 carousel max-w-xl mx-auto">
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/amazon/thumbnail/01.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/amazon/thumbnail/02.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/amazon/thumbnail/03.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/amazon/thumbnail/04.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/amazon/thumbnail/05.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/amazon/thumbnail/06.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/amazon/thumbnail/07.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/amazon/thumbnail/08.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/amazon/thumbnail/09.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/amazon/thumbnail/10.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/amazon/thumbnail/11.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/amazon/thumbnail/12.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/amazon/thumbnail/13.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/amazon/thumbnail/14.webp">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul class="breadcrumb">
                            <li><a href="index.php"><span class="material-symbols-rounded">home</span>首頁</a></li>
                            <li><a href="products.php?category=sheet">產品</a></li>
                            <li><a href="products.php?category=trim">飾板</a></li>
                        </ul>
                        <img src="images/about/iwall.svg" alt="iwall" title="品牌：IWALL愛沃">
                        <h3 title="品名：亞馬遜系列">亞馬遜系列</h3>
                        <!-- <p class="subtitle">一些內文<span class="badge badge-secondary">#123</span></p> -->
                        <p>款式：</p>
                        <div class="small-img">
                            <input type="radio" name="amazon" id="amazon01" value="玄武">
                            <button class="check" onclick="mainCarousel61.slideTo(9)">
                                <label for="amazon01"><img class="amazon-img01" src="images/products/trim/amazon/mockup-basalto.webp" alt="亞馬遜-玄武" title="規格：玄武"></label>
                            </button>
                            <input type="radio" name="amazon" id="amazon02" value="白色">
                            <button class="check" onclick="mainCarousel61.slideTo(10)">
                                <label for="amazon02"><img class="amazon-img02" src="images/products/trim/amazon/mockup-blanca.webp" alt="亞馬遜-白色" title="規格：白色"></label>
                            </button>
                            <input type="radio" name="amazon" id="amazon03" value="斑駁">
                            <button class="check" onclick="mainCarousel61.slideTo(11)">
                                <label for="amazon03"><img class="amazon-img03" src="images/products/trim/amazon/mockup-carmin.webp" alt="亞馬遜-斑駁" title="規格：斑駁"></label>
                            </button>
                            <input type="radio" name="amazon" id="amazon04" value="大地">
                            <button class="check" onclick="mainCarousel61.slideTo(12)">
                                <label for="amazon04"><img class="amazon-img04" src="images/products/trim/amazon/mockup-earth.webp" alt="亞馬遜-大地" title="規格：大地"></label>
                            </button>
                            <input type="radio" name="amazon" id="amazon05" value="自然">
                            <button class="check" onclick="mainCarousel61.slideTo(13)">
                                <label for="amazon05"><img class="amazon-img05" src="images/products/trim/amazon/mockup-natura.webp" alt="亞馬遜-自然" title="規格：自然"></label>
                            </button>
                        </div>
                        <p>尺寸：</p>
                        <div class="mysize">
                            <input type="radio" name="amazon-size" id="amazon-size01">
                            <button class="check">
                                <label for="amazon-size01">
                                    <div class="btn btn-secondary"id="amazon-sizebtn01">130x300cm</div>
                                </label>
                            </button>
                        </div>
                        <!-- <div class="ex" id="amazon-ex">
                            <p>說明：</p>
                            <p></p>
                        </div> -->
                        <form action="contact.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="products" value="details">
                            <input type="hidden" name="product-name" value="亞馬遜">
                            <input type="hidden" id="amazon-check-img" name="check-img">
                            <input type="hidden" id="amazon-check-size" name="check-size" value="130x300cm">
                            <div class="row mydescription">
                                <a class="col btn btn-secondary" href="https://drive.google.com/file/d/1bVGycVirNYTZDcp-AYLB2ezyaQwUNMjs/view?usp=sharing">下載材質檔</a>
                                <button class="col btn btn-secondary" type="submit">諮詢產品</button>
                            </div>
                        </form>
                        <script>
                            // $(':radio[name="amazon-size"]').change(function (){
                            //     var size = $(this).val();
                            //     $("#amazon-check-size").attr("value",size);
                            // });
                            $(':radio[name="amazon"]').change(function (){
                                var item = $(this).val();
                                $("#amazon-check-img").attr("value",item);
                            });
                        </script>
                    </div>
                </div>
            </div>
            <div class="details mmm hormigon3d">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="box ">
                            <div class="mainCarousel mainCarousel62 carousel w-10/12 max-w-5xl mx-auto">
                                <div class="carousel__slide" data-src="images/products/trim/hormigon3d/original/70_1_vadipark-mercedes.webp" data-fancybox="gallery62">
                                    <img class="img-fluid" src="images/products/trim/hormigon3d/mainnail/01.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/hormigon3d/original/hormigon3d-grey.webp" data-fancybox="gallery62">
                                    <img class="img-fluid" src="images/products/trim/hormigon3d/mainnail/02.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/hormigon3d/original/hormigon3d-intenso.webp" data-fancybox="gallery62">
                                    <img class="img-fluid" src="images/products/trim/hormigon3d/mainnail/03.webp">
                                </div>
                            </div>
                            <div class="thumbCarousel thumbCarousel62 carousel max-w-xl mx-auto">
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/hormigon3d/thumbnail/01.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/hormigon3d/thumbnail/02.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/hormigon3d/thumbnail/03.webp">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul class="breadcrumb">
                            <li><a href="index.php"><span class="material-symbols-rounded">home</span>首頁</a></li>
                            <li><a href="products.php?category=sheet">產品</a></li>
                            <li><a href="products.php?category=trim">飾板</a></li>
                        </ul>
                        <img src="images/about/iwall.svg" alt="iwall" title="品牌：IWALL愛沃">
                        <h3 title="品名：洛夫灰系列">洛夫灰系列</h3>
                        <!-- <p class="subtitle">一些內文<span class="badge badge-secondary">#123</span></p> -->
                        <p>款式：</p>
                        <div class="small-img">
                            <input type="radio" name="hormigon3d" id="hormigon3d01" value="自然">
                            <button class="check" onclick="mainCarousel62.slideTo(1)">
                                <label for="hormigon3d01"><img class="hormigon3d-img01" src="images/products/trim/hormigon3d/mockup-grey.webp" alt="洛夫灰-自然" title="規格：自然"></label>
                            </button>
                            <input type="radio" name="hormigon3d" id="hormigon3d02" value="強烈">
                            <button class="check" onclick="mainCarousel62.slideTo(2)">
                                <label for="hormigon3d02"><img class="hormigon3d-img02" src="images/products/trim/hormigon3d/mockup-intenso.webp" alt="洛夫灰-強烈" title="規格：強烈"></label>
                            </button>
                        </div>
                        <p>尺寸：</p>
                        <div class="mysize">
                            <input type="radio" name="hormigon3d-size" id="hormigon3d-size01">
                            <button class="check">
                                <label for="hormigon3d-size01">
                                    <div class="btn btn-secondary"id="hormigon3d-sizebtn01">132x298cm</div>
                                </label>
                            </button>
                        </div>
                        <!-- <div class="ex" id="hormigon3d-ex">
                            <p>說明：</p>
                            <p></p>
                        </div> -->
                        <form action="contact.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="products" value="details">
                            <input type="hidden" name="product-name" value="洛夫灰">
                            <input type="hidden" id="hormigon3d-check-img" name="check-img">
                            <input type="hidden" id="hormigon3d-check-size" name="check-size" value="132x298cm">
                            <div class="row mydescription">
                                <a class="col btn btn-secondary" href="https://drive.google.com/file/d/1DMiZ-cfXoL0AFklLrozc8CLVj3hGyHCP/view?usp=sharing">下載材質檔</a>
                                <button class="col btn btn-secondary" type="submit">諮詢產品</button>
                            </div>
                        </form>
                        <script>
                            $(':radio[name="hormigon3d"]').change(function (){
                                var item = $(this).val();
                                $("#hormigon3d-check-img").attr("value",item);
                            });
                        </script>
                    </div>
                </div>
            </div>
            <div class="details mmm barbados">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="box ">
                            <div class="mainCarousel mainCarousel63 carousel w-10/12 max-w-5xl mx-auto">
                                <div class="carousel__slide" data-src="images/products/trim/barbados/original/Wood Barbados Cobriza-04.webp" data-fancybox="gallery63">
                                    <img class="img-fluid" src="images/products/trim/barbados/mainnail/01.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/barbados/original/Wood Barbados Cobriza-03.webp" data-fancybox="gallery63">
                                    <img class="img-fluid" src="images/products/trim/barbados/mainnail/02.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/barbados/original/Wood Barbados Cobriza-01.webp" data-fancybox="gallery63">
                                    <img class="img-fluid" src="images/products/trim/barbados/mainnail/03.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/barbados/original/Wood Barbados Cobriza-02.webp" data-fancybox="gallery63">
                                    <img class="img-fluid" src="images/products/trim/barbados/mainnail/04.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/barbados/original/S__13959194.webp" data-fancybox="gallery63">
                                    <img class="img-fluid" src="images/products/trim/barbados/mainnail/05.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/barbados/original/S__13959199.webp" data-fancybox="gallery63">
                                    <img class="img-fluid" src="images/products/trim/barbados/mainnail/06.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/barbados/original/wood-barbados-kesit.webp" data-fancybox="gallery63">
                                    <img class="img-fluid" src="images/products/trim/barbados/mainnail/07.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/barbados/original/wood-barbados-basalto.webp" data-fancybox="gallery63">
                                    <img class="img-fluid" src="images/products/trim/barbados/mainnail/08.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/barbados/original/wood-barbados-blanca.webp" data-fancybox="gallery63">
                                    <img class="img-fluid" src="images/products/trim/barbados/mainnail/09.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/barbados/original/wood-barbados-carmin.webp" data-fancybox="gallery63">
                                    <img class="img-fluid" src="images/products/trim/barbados/mainnail/10.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/barbados/original/wood-barbados-cobriza.webp" data-fancybox="gallery63">
                                    <img class="img-fluid" src="images/products/trim/barbados/mainnail/11.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/barbados/original/wood-barbados-earth.webp" data-fancybox="gallery63">
                                    <img class="img-fluid" src="images/products/trim/barbados/mainnail/12.webp">
                                </div>
                            </div>
                            <div class="thumbCarousel thumbCarousel63 carousel max-w-xl mx-auto">
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/barbados/thumbnail/01.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/barbados/thumbnail/02.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/barbados/thumbnail/03.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/barbados/thumbnail/04.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/barbados/thumbnail/05.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/barbados/thumbnail/06.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/barbados/thumbnail/07.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/barbados/thumbnail/08.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/barbados/thumbnail/09.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/barbados/thumbnail/10.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/barbados/thumbnail/11.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/barbados/thumbnail/12.webp">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul class="breadcrumb">
                            <li><a href="index.php"><span class="material-symbols-rounded">home</span>首頁</a></li>
                            <li><a href="products.php?category=sheet">產品</a></li>
                            <li><a href="products.php?category=trim">飾板</a></li>
                        </ul>
                        <img src="images/about/iwall.svg" alt="iwall" title="品牌：IWALL愛沃">
                        <h3 title="品名：劈木系列">劈木系列</h3>
                        <!-- <p class="subtitle">一些內文<span class="badge badge-secondary">#123</span></p> -->
                        <p>款式：</p>
                        <div class="small-img">
                            <input type="radio" name="barbados" id="barbados01" value="灰色">
                            <button class="check" onclick="mainCarousel63.slideTo(7)">
                                <label for="barbados01"><img class="barbados-img01" src="images/products/trim/barbados/mockup-basalto.webp" alt="劈木-灰色" title="規格：灰色"></label>
                            </button>
                            <input type="radio" name="barbados" id="barbados02" value="白色">
                            <button class="check" onclick="mainCarousel63.slideTo(8)">
                                <label for="barbados02"><img class="barbados-img02" src="images/products/trim/barbados/mockup-blanca.webp" alt="劈木-白色" title="規格：白色"></label>
                            </button>
                            <input type="radio" name="barbados" id="barbados03" value="紅色">
                            <button class="check" onclick="mainCarousel63.slideTo(9)">
                                <label for="barbados03"><img class="barbados-img03" src="images/products/trim/barbados/mockup-carmin.webp" alt="劈木-紅色" title="規格：紅色"></label>
                            </button>
                            <input type="radio" name="barbados" id="barbados04" value="棕色">
                            <button class="check" onclick="mainCarousel63.slideTo(10)">
                                <label for="barbados04"><img class="barbados-img04" src="images/products/trim/barbados/mockup-cobriza.webp" alt="劈木-棕色" title="規格：棕色"></label>
                            </button>
                            <input type="radio" name="barbados" id="barbados05" value="卡其">
                            <button class="check" onclick="mainCarousel63.slideTo(11)">
                                <label for="barbados05"><img class="barbados-img05" src="images/products/trim/barbados/mockup-earth.webp" alt="劈木-卡其" title="規格：卡其"></label>
                            </button>
                        </div>
                        <p>尺寸：</p>
                        <div class="mysize">
                            <input type="radio" name="barbados-size" id="barbados-size01">
                            <button class="check">
                                <label for="barbados-size01">
                                    <div class="btn btn-secondary"id="barbados-sizebtn01">130x300cm</div>
                                </label>
                            </button>
                        </div>
                        <!-- <div class="ex" id="barbados-ex">
                            <p>說明：</p>
                            <p></p>
                        </div> -->
                        <form action="contact.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="products" value="details">
                            <input type="hidden" name="product-name" value="劈木">
                            <input type="hidden" id="barbados-check-img" name="check-img">
                            <input type="hidden" id="barbados-check-size" name="check-size" value="130x300cm">
                            <div class="row mydescription">
                                <a class="col btn btn-secondary" href="https://drive.google.com/file/d/1ZXbGBIAppCwtOlCGBPmgMSv3DavnWhn8/view?usp=sharing">下載材質檔</a>
                                <button class="col btn btn-secondary" type="submit">諮詢產品</button>
                            </div>
                        </form>
                        <script>
                            $(':radio[name="barbados"]').change(function (){
                                var item = $(this).val();
                                $("#barbados-check-img").attr("value",item);
                            });
                        </script>
                    </div>
                </div>
            </div>
            <div class="details mmm heritage">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="box ">
                            <div class="mainCarousel mainCarousel64 carousel w-10/12 max-w-5xl mx-auto">
                                <div class="carousel__slide" data-src="images/products/trim/heritage/original/ARTSTONE-01.webp" data-fancybox="gallery64">
                                    <img class="img-fluid" src="images/products/trim/heritage/mainnail/01.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/heritage/original/ARTSTONE-02.webp" data-fancybox="gallery64">
                                    <img class="img-fluid" src="images/products/trim/heritage/mainnail/02.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/heritage/original/70_1_turkuazpolyester-01.webp" data-fancybox="gallery64">
                                    <img class="img-fluid" src="images/products/trim/heritage/mainnail/03.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/heritage/original/S__13959183.webp" data-fancybox="gallery64">
                                    <img class="img-fluid" src="images/products/trim/heritage/mainnail/04.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/heritage/original/S__13959184.webp" data-fancybox="gallery64">
                                    <img class="img-fluid" src="images/products/trim/heritage/mainnail/05.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/heritage/original/S__13959187.webp" data-fancybox="gallery64">
                                    <img class="img-fluid" src="images/products/trim/heritage/mainnail/06.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/heritage/original/S__13959196.webp" data-fancybox="gallery64">
                                    <img class="img-fluid" src="images/products/trim/heritage/mainnail/07.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/heritage/original/_DSC9373 copy.webp" data-fancybox="gallery64">
                                    <img class="img-fluid" src="images/products/trim/heritage/mainnail/08.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/heritage/original/Heritage XVIII Basalto 546.webp" data-fancybox="gallery64">
                                    <img class="img-fluid" src="images/products/trim/heritage/mainnail/09.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/heritage/original/_DSC9179 copy.webp" data-fancybox="gallery64">
                                    <img class="img-fluid" src="images/products/trim/heritage/mainnail/10.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/heritage/original/Heritage XVIII Blanca 541-01.webp" data-fancybox="gallery64">
                                    <img class="img-fluid" src="images/products/trim/heritage/mainnail/11.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/heritage/original/Heritage XVIII Blanca Dark 547.webp" data-fancybox="gallery64">
                                    <img class="img-fluid" src="images/products/trim/heritage/mainnail/12.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/heritage/original/_DSC9357 copy.webp" data-fancybox="gallery64">
                                    <img class="img-fluid" src="images/products/trim/heritage/mainnail/13.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/heritage/original/Heritage XVIII Earth 545.webp" data-fancybox="gallery64">
                                    <img class="img-fluid" src="images/products/trim/heritage/mainnail/14.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/heritage/original/_DSC9369 copy.webp" data-fancybox="gallery64">
                                    <img class="img-fluid" src="images/products/trim/heritage/mainnail/15.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/heritage/original/Heritage XVIII Eclectic 544.webp" data-fancybox="gallery64">
                                    <img class="img-fluid" src="images/products/trim/heritage/mainnail/16.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/heritage/original/_DSC9311 copy.webp" data-fancybox="gallery64">
                                    <img class="img-fluid" src="images/products/trim/heritage/mainnail/17.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/heritage/original/Heritage XVIII Gold Dark 548.webp" data-fancybox="gallery64">
                                    <img class="img-fluid" src="images/products/trim/heritage/mainnail/18.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/heritage/original/_DSC9257 copy.webp" data-fancybox="gallery64">
                                    <img class="img-fluid" src="images/products/trim/heritage/mainnail/19.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/heritage/original/Heritage XVIII Oxido 543.webp" data-fancybox="gallery64">
                                    <img class="img-fluid" src="images/products/trim/heritage/mainnail/20.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/heritage/original/_DSC9349 copy.webp" data-fancybox="gallery64">
                                    <img class="img-fluid" src="images/products/trim/heritage/mainnail/21.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/heritage/original/Heritage XVIII Rojo 542.webp" data-fancybox="gallery64">
                                    <img class="img-fluid" src="images/products/trim/heritage/mainnail/22.webp">
                                </div>
                            </div>
                            <div class="thumbCarousel thumbCarousel64 carousel max-w-xl mx-auto">
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/heritage/thumbnail/01.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/heritage/thumbnail/02.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/heritage/thumbnail/03.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/heritage/thumbnail/04.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/heritage/thumbnail/05.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/heritage/thumbnail/06.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/heritage/thumbnail/07.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/heritage/thumbnail/08.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/heritage/thumbnail/09.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/heritage/thumbnail/10.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/heritage/thumbnail/11.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/heritage/thumbnail/12.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/heritage/thumbnail/13.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/heritage/thumbnail/14.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/heritage/thumbnail/15.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/heritage/thumbnail/16.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/heritage/thumbnail/17.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/heritage/thumbnail/18.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/heritage/thumbnail/19.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/heritage/thumbnail/20.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/heritage/thumbnail/21.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/heritage/thumbnail/22.webp">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul class="breadcrumb">
                            <li><a href="index.php"><span class="material-symbols-rounded">home</span>首頁</a></li>
                            <li><a href="products.php?category=sheet">產品</a></li>
                            <li><a href="products.php?category=trim">飾板</a></li>
                        </ul>
                        <img src="images/about/iwall.svg" alt="iwall" title="品牌：IWALL愛沃">
                        <h3 title="品名：洛可可系列">洛可可系列</h3>
                        <!-- <p class="subtitle">一些內文<span class="badge badge-secondary">#123</span></p> -->
                        <p>款式：</p>
                        <div class="small-img">
                            <input type="radio" name="heritage" id="heritage01" value="白">
                            <button class="check" onclick="mainCarousel64.slideTo(10)">
                                <label for="heritage01"><img class="heritage-img01" src="images/products/trim/heritage/mockup-blanca.webp" alt="洛可可-白" title="規格：白"></label>
                            </button>
                            <input type="radio" name="heritage" id="heritage02" value="玄武">
                            <button class="check" onclick="mainCarousel64.slideTo(8)">
                                <label for="heritage02"><img class="heritage-img02" src="images/products/trim/heritage/mockup-basalto.webp" alt="洛可可-玄武" title="規格：玄武"></label>
                            </button>
                            <input type="radio" name="heritage" id="heritage03" value="拓印">
                            <button class="check" onclick="mainCarousel64.slideTo(11)">
                                <label for="heritage03"><img class="heritage-img03" src="images/products/trim/heritage/mockup-dark.webp" alt="洛可可-拓印" title="規格：拓印"></label>
                            </button>
                            <input type="radio" name="heritage" id="heritage04" value="土黃">
                            <button class="check" onclick="mainCarousel64.slideTo(13)">
                                <label for="heritage04"><img class="heritage-img04" src="images/products/trim/heritage/mockup-earth.webp" alt="洛可可-土黃" title="規格：土黃"></label>
                            </button>
                            <input type="radio" name="heritage" id="heritage05" value="老房子">
                            <button class="check" onclick="mainCarousel64.slideTo(15)">
                                <label for="heritage05"><img class="heritage-img05" src="images/products/trim/heritage/mockup-eclectic.webp" alt="洛可可-老房子" title="規格：老房子"></label>
                            </button>
                            <input type="radio" name="heritage" id="heritage06" value="生化">
                            <button class="check" onclick="mainCarousel64.slideTo(17)">
                                <label for="heritage06"><img class="heritage-img06" src="images/products/trim/heritage/mockup-gold.webp" alt="洛可可-生化" title="規格：生化"></label>
                            </button>
                            <input type="radio" name="heritage" id="heritage07" value="下水道">
                            <button class="check" onclick="mainCarousel64.slideTo(19)">
                                <label for="heritage07"><img class="heritage-img07" src="images/products/trim/heritage/mockup-oxido.webp" alt="洛可可-下水道" title="規格：下水道"></label>
                            </button>
                            <input type="radio" name="heritage" id="heritage08" value="紅色">
                            <button class="check" onclick="mainCarousel64.slideTo(21)">
                                <label for="heritage08"><img class="heritage-img08" src="images/products/trim/heritage/mockup-rojo.webp" alt="洛可可-紅色" title="規格：紅色"></label>
                            </button>
                        </div>
                        <p>尺寸：</p>
                        <div class="mysize">
                            <input type="radio" name="heritage-size" id="heritage-size01">
                            <button class="check">
                                <label for="heritage-size01">
                                    <div class="btn btn-secondary"id="heritage-sizebtn01">116x294cm</div>
                                </label>
                            </button>
                        </div>
                        <!-- <div class="ex" id="heritage-ex">
                            <p>說明：</p>
                            <p></p>
                        </div> -->
                        <form action="contact.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="products" value="details">
                            <input type="hidden" name="product-name" value="洛可可">
                            <input type="hidden" id="heritage-check-img" name="check-img">
                            <input type="hidden" id="heritage-check-size" name="check-size" value="116x294cm">
                            <div class="row mydescription">
                                <a class="col btn btn-secondary" href="https://drive.google.com/file/d/1QGOr1eYUTMEODa36mL04yyVLVVyRWi3x/view?usp=sharing">下載材質檔</a>
                                <button class="col btn btn-secondary" type="submit">諮詢產品</button>
                            </div>
                        </form>
                        <script>
                            $(':radio[name="heritage"]').change(function (){
                                var item = $(this).val();
                                $("#heritage-check-img").attr("value",item);
                            });
                        </script>
                    </div>
                </div>
            </div>
            <div class="details mmm vintage">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="box ">
                            <div class="mainCarousel mainCarousel65 carousel w-10/12 max-w-5xl mx-auto">
                                <div class="carousel__slide" data-src="images/products/trim/vintage/original/Hormigon Vintage Natura-02.webp" data-fancybox="gallery65">
                                    <img class="img-fluid" src="images/products/trim/vintage/mainnail/01.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/vintage/original/Hormigon Vintage Natura-03.webp" data-fancybox="gallery65">
                                    <img class="img-fluid" src="images/products/trim/vintage/mainnail/02.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/vintage/original/Hormigon Vintage Natura-04 kopya.webp" data-fancybox="gallery65">
                                    <img class="img-fluid" src="images/products/trim/vintage/mainnail/03.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/vintage/original/Hormigon Vintage Natura-05 kopya.webp" data-fancybox="gallery65">
                                    <img class="img-fluid" src="images/products/trim/vintage/mainnail/04.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/vintage/original/S__13959204.webp" data-fancybox="gallery65">
                                    <img class="img-fluid" src="images/products/trim/vintage/mainnail/05.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/vintage/original/S__13959201.webp" data-fancybox="gallery65">
                                    <img class="img-fluid" src="images/products/trim/vintage/mainnail/06.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/vintage/original/hormigon-vintage-multicolor.webp" data-fancybox="gallery65">
                                    <img class="img-fluid" src="images/products/trim/vintage/mainnail/07.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/vintage/original/hormigon-vintage-natura.webp" data-fancybox="gallery65">
                                    <img class="img-fluid" src="images/products/trim/vintage/mainnail/08.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/vintage/original/hormigon-vintage-kesit.webp" data-fancybox="gallery65">
                                    <img class="img-fluid" src="images/products/trim/vintage/mainnail/09.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/vintage/original/hormigon-vintage-rojo.webp" data-fancybox="gallery65">
                                    <img class="img-fluid" src="images/products/trim/vintage/mainnail/10.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/vintage/original/hormigon-vintage-triamel.webp" data-fancybox="gallery65">
                                    <img class="img-fluid" src="images/products/trim/vintage/mainnail/11.webp">
                                </div>
                            </div>
                            <div class="thumbCarousel thumbCarousel65 carousel max-w-xl mx-auto">
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/vintage/thumbnail/01.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/vintage/thumbnail/02.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/vintage/thumbnail/03.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/vintage/thumbnail/04.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/vintage/thumbnail/05.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/vintage/thumbnail/06.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/vintage/thumbnail/07.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/vintage/thumbnail/08.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/vintage/thumbnail/09.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/vintage/thumbnail/10.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/vintage/thumbnail/11.webp">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul class="breadcrumb">
                            <li><a href="index.php"><span class="material-symbols-rounded">home</span>首頁</a></li>
                            <li><a href="products.php?category=sheet">產品</a></li>
                            <li><a href="products.php?category=trim">飾板</a></li>
                        </ul>
                        <img src="images/about/iwall.svg" alt="iwall" title="品牌：IWALL愛沃">
                        <h3 title="品名：光陰的故事系列">光陰的故事系列</h3>
                        <!-- <p class="subtitle">一些內文<span class="badge badge-secondary">#123</span></p> -->
                        <p>款式：</p>
                        <div class="small-img">
                            <input type="radio" name="vintage" id="vintage01" value="深色">
                            <button class="check" onclick="mainCarousel65.slideTo(6)">
                                <label for="vintage01"><img class="vintage-img01" src="images/products/trim/vintage/mockup-multicolor.webp" alt="光陰的故事-深色" title="規格：深色"></label>
                            </button>
                            <input type="radio" name="vintage" id="vintage02" value="自然">
                            <button class="check" onclick="mainCarousel65.slideTo(7)">
                                <label for="vintage02"><img class="vintage-img02" src="images/products/trim/vintage/mockup-natura.webp" alt="光陰的故事-自然" title="規格：自然"></label>
                            </button>
                            <input type="radio" name="vintage" id="vintage03" value="老舊">
                            <button class="check" onclick="mainCarousel65.slideTo(9)">
                                <label for="vintage03"><img class="vintage-img03" src="images/products/trim/vintage/mockup-rojo.webp" alt="光陰的故事-老舊" title="規格：老舊"></label>
                            </button>
                            <input type="radio" name="vintage" id="vintage04" value="荒涼">
                            <button class="check" onclick="mainCarousel65.slideTo(10)">
                                <label for="vintage04"><img class="vintage-img04" src="images/products/trim/vintage/mockup-triamel.webp" alt="光陰的故事-荒涼" title="規格：荒涼"></label>
                            </button>
                        </div>
                        <p>尺寸：</p>
                        <div class="mysize">
                            <input type="radio" name="vintage-size" id="vintage-size01">
                            <button class="check">
                                <label for="vintage-size01">
                                    <div class="btn btn-secondary"id="vintage-sizebtn01">130x300cm</div>
                                </label>
                            </button>
                        </div>
                        <!-- <div class="ex" id="vintage-ex">
                            <p>說明：</p>
                            <p></p>
                        </div> -->
                        <form action="contact.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="products" value="details">
                            <input type="hidden" name="product-name" value="光陰的故事">
                            <input type="hidden" id="vintage-check-img" name="check-img">
                            <input type="hidden" id="vintage-check-size" name="check-size" value="130x300cm">
                            <div class="row mydescription">
                                <a class="col btn btn-secondary" href="https://drive.google.com/file/d/1lgrd8_Xg396myzmIcrpANWLqRm8ePW0h/view?usp=sharing">下載材質檔</a>
                                <button class="col btn btn-secondary" type="submit">諮詢產品</button>
                            </div>
                        </form>
                        <script>
                            $(':radio[name="vintage"]').change(function (){
                                var item = $(this).val();
                                $("#vintage-check-img").attr("value",item);
                            });
                        </script>
                    </div>
                </div>
            </div>
            <div class="details mmm hormigon-plus">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="box ">
                            <div class="mainCarousel mainCarousel66 carousel w-10/12 max-w-5xl mx-auto">
                                <div class="carousel__slide" data-src="images/products/trim/hormigon-plus/original/Hormigon Plus Oxido-06.webp" data-fancybox="gallery66">
                                    <img class="img-fluid" src="images/products/trim/hormigon-plus/mainnail/01.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/hormigon-plus/original/Hormigon Plus Oxido-02.webp" data-fancybox="gallery66">
                                    <img class="img-fluid" src="images/products/trim/hormigon-plus/mainnail/02.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/hormigon-plus/original/Hormigon Plus Oxido-03.webp" data-fancybox="gallery66">
                                    <img class="img-fluid" src="images/products/trim/hormigon-plus/mainnail/03.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/hormigon-plus/original/Hormigon Plus Oxido-04.webp" data-fancybox="gallery66">
                                    <img class="img-fluid" src="images/products/trim/hormigon-plus/mainnail/04.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/hormigon-plus/original/Hormigon Plus Oxido-05.webp" data-fancybox="gallery66">
                                    <img class="img-fluid" src="images/products/trim/hormigon-plus/mainnail/05.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/hormigon-plus/original/S__13959189.webp" data-fancybox="gallery66">
                                    <img class="img-fluid" src="images/products/trim/hormigon-plus/mainnail/06.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/hormigon-plus/original/S__13959191.webp" data-fancybox="gallery66">
                                    <img class="img-fluid" src="images/products/trim/hormigon-plus/mainnail/07.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/hormigon-plus/original/hormigon-plus-oxido-kesit.webp" data-fancybox="gallery66">
                                    <img class="img-fluid" src="images/products/trim/hormigon-plus/mainnail/08.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/hormigon-plus/original/hormigon-plus-oxido.webp" data-fancybox="gallery66">
                                    <img class="img-fluid" src="images/products/trim/hormigon-plus/mainnail/09.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/hormigon-plus/original/hormigon-plus-anthracite.webp" data-fancybox="gallery66">
                                    <img class="img-fluid" src="images/products/trim/hormigon-plus/mainnail/10.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/hormigon-plus/original/hormigon-plus-blanca.webp" data-fancybox="gallery66">
                                    <img class="img-fluid" src="images/products/trim/hormigon-plus/mainnail/11.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/hormigon-plus/original/hormigon-plus-carmin.webp" data-fancybox="gallery66">
                                    <img class="img-fluid" src="images/products/trim/hormigon-plus/mainnail/12.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/hormigon-plus/original/hormigon-plus-cobriza.webp" data-fancybox="gallery66">
                                    <img class="img-fluid" src="images/products/trim/hormigon-plus/mainnail/13.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/hormigon-plus/original/hormigon-plus-grey.webp" data-fancybox="gallery66">
                                    <img class="img-fluid" src="images/products/trim/hormigon-plus/mainnail/14.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/hormigon-plus/original/hormigon-plus-intenso.webp" data-fancybox="gallery66">
                                    <img class="img-fluid" src="images/products/trim/hormigon-plus/mainnail/15.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/hormigon-plus/original/hormigon-plus-kesit.webp" data-fancybox="gallery66">
                                    <img class="img-fluid" src="images/products/trim/hormigon-plus/mainnail/16.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/hormigon-plus/original/hormigon-plus-triamel.webp" data-fancybox="gallery66">
                                    <img class="img-fluid" src="images/products/trim/hormigon-plus/mainnail/17.webp">
                                </div>
                            </div>
                            <div class="thumbCarousel thumbCarousel66 carousel max-w-xl mx-auto">
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/hormigon-plus/thumbnail/01.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/hormigon-plus/thumbnail/02.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/hormigon-plus/thumbnail/03.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/hormigon-plus/thumbnail/04.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/hormigon-plus/thumbnail/05.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/hormigon-plus/thumbnail/06.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/hormigon-plus/thumbnail/07.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/hormigon-plus/thumbnail/08.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/hormigon-plus/thumbnail/09.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/hormigon-plus/thumbnail/10.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/hormigon-plus/thumbnail/11.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/hormigon-plus/thumbnail/12.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/hormigon-plus/thumbnail/13.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/hormigon-plus/thumbnail/14.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/hormigon-plus/thumbnail/15.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/hormigon-plus/thumbnail/16.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/hormigon-plus/thumbnail/17.webp">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul class="breadcrumb">
                            <li><a href="index.php"><span class="material-symbols-rounded">home</span>首頁</a></li>
                            <li><a href="products.php?category=sheet">產品</a></li>
                            <li><a href="products.php?category=trim">飾板</a></li>
                        </ul>
                        <img src="images/about/iwall.svg" alt="iwall" title="品牌：IWALL愛沃">
                        <h3 title="品名：鏽板系列">鏽板系列</h3>
                        <!-- <p class="subtitle">一些內文<span class="badge badge-secondary">#123</span></p> -->
                        <p>款式：</p>
                        <div class="small-img">
                            <input type="radio" name="hormigon-plus" id="hormigon-plus01" value="鏽板">
                            <button class="check" onclick="mainCarousel66.slideTo(8)">
                                <label for="hormigon-plus01"><img class="hormigon-plus-img01" src="images/products/trim/hormigon-plus/mockup-oxido.webp" alt="鏽板-鏽板" title="規格：鏽板"></label>
                            </button>
                            <input type="radio" name="hormigon-plus" id="hormigon-plus02" value="煙煤">
                            <button class="check" onclick="mainCarousel66.slideTo(9)">
                                <label for="hormigon-plus02"><img class="hormigon-plus-img02" src="images/products/trim/hormigon-plus/mockup-anthracite.webp" alt="鏽板-煙煤" title="規格：煙煤"></label>
                            </button>
                            <input type="radio" name="hormigon-plus" id="hormigon-plus03" value="白色">
                            <button class="check" onclick="mainCarousel66.slideTo(10)">
                                <label for="hormigon-plus03"><img class="hormigon-plus-img03" src="images/products/trim/hormigon-plus/mockup-blanca.webp" alt="鏽板-白色" title="規格：白色"></label>
                            </button>
                            <input type="radio" name="hormigon-plus" id="hormigon-plus04" value="老家後院">
                            <button class="check" onclick="mainCarousel66.slideTo(11)">
                                <label for="hormigon-plus04"><img class="hormigon-plus-img04" src="images/products/trim/hormigon-plus/mockup-carmin.webp" alt="鏽板-老家後院" title="規格：老家後院"></label>
                            </button>
                            <input type="radio" name="hormigon-plus" id="hormigon-plus05" value="街頭">
                            <button class="check" onclick="mainCarousel66.slideTo(12)">
                                <label for="hormigon-plus05"><img class="hormigon-plus-img05" src="images/products/trim/hormigon-plus/mockup-cobriza.webp" alt="鏽板-街頭" title="規格：街頭"></label>
                            </button>
                            <input type="radio" name="hormigon-plus" id="hormigon-plus06" value="灰色">
                            <button class="check" onclick="mainCarousel66.slideTo(13)">
                                <label for="hormigon-plus06"><img class="hormigon-plus-img06" src="images/products/trim/hormigon-plus/mockup-grey.webp" alt="鏽板-灰色" title="規格：灰色"></label>
                            </button>
                            <input type="radio" name="hormigon-plus" id="hormigon-plus07" value="柏林">
                            <button class="check" onclick="mainCarousel66.slideTo(14)">
                                <label for="hormigon-plus07"><img class="hormigon-plus-img07" src="images/products/trim/hormigon-plus/mockup-intenso.webp" alt="鏽板-柏林" title="規格：柏林"></label>
                            </button>
                            <input type="radio" name="hormigon-plus" id="hormigon-plus08" value="牢籠">
                            <button class="check" onclick="mainCarousel66.slideTo(16)">
                                <label for="hormigon-plus08"><img class="hormigon-plus-img08" src="images/products/trim/hormigon-plus/mockup-triamel.webp" alt="鏽板-牢籠" title="規格：牢籠"></label>
                            </button>
                        </div>
                        <p>尺寸：</p>
                        <div class="mysize">
                            <input type="radio" name="hormigon-plus-size" id="hormigon-plus-size01">
                            <button class="check">
                                <label for="hormigon-plus-size01">
                                    <div class="btn btn-secondary"id="hormigon-plus-sizebtn01">134x298cm</div>
                                </label>
                            </button>
                        </div>
                        <!-- <div class="ex" id="hormigon-plus-ex">
                            <p>說明：</p>
                            <p></p>
                        </div> -->
                        <form action="contact.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="products" value="details">
                            <input type="hidden" name="product-name" value="鏽板">
                            <input type="hidden" id="hormigon-plus-check-img" name="check-img">
                            <input type="hidden" id="hormigon-plus-check-size" name="check-size" value="134x298cm">
                            <div class="row mydescription">
                                <a class="col btn btn-secondary" href="https://drive.google.com/file/d/1ldCJPOC4dyKflJawlPUm2naqUnvX5FFu/view?usp=sharing">下載材質檔</a>
                                <button class="col btn btn-secondary" type="submit">諮詢產品</button>
                            </div>
                        </form>
                        <script>
                            $(':radio[name="hormigon-plus"]').change(function (){
                                var item = $(this).val();
                                $("#hormigon-plus-check-img").attr("value",item);
                            });
                        </script>
                    </div>
                </div>
            </div>
            <div class="details mmm versailles">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="box ">
                            <div class="mainCarousel mainCarousel67 carousel w-10/12 max-w-5xl mx-auto">
                                <div class="carousel__slide" data-src="images/products/trim/versailles/original/Versailles Bonamy-02.webp" data-fancybox="gallery67">
                                    <img class="img-fluid" src="images/products/trim/versailles/mainnail/01.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/versailles/original/DSC05023 copy.webp" data-fancybox="gallery67">
                                    <img class="img-fluid" src="images/products/trim/versailles/mainnail/02.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/versailles/original/Versailles Bonamy-01.webp" data-fancybox="gallery67">
                                    <img class="img-fluid" src="images/products/trim/versailles/mainnail/03.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/versailles/original/1-VERSAILLES FONCE BLANC.webp" data-fancybox="gallery67">
                                    <img class="img-fluid" src="images/products/trim/versailles/mainnail/04.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/versailles/original/2-VERSAILLES FUE VERT D'OR.webp" data-fancybox="gallery67">
                                    <img class="img-fluid" src="images/products/trim/versailles/mainnail/05.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/versailles/original/3-VERSAILLES MOREDORE NOIR.webp" data-fancybox="gallery67">
                                    <img class="img-fluid" src="images/products/trim/versailles/mainnail/06.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/versailles/original/4-VERSAILLES CREME FONCE MARRON.webp" data-fancybox="gallery67">
                                    <img class="img-fluid" src="images/products/trim/versailles/mainnail/07.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/versailles/original/5-VERSAILLES DIJON BLANC.webp" data-fancybox="gallery67">
                                    <img class="img-fluid" src="images/products/trim/versailles/mainnail/08.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/versailles/original/6-VERSAILLES FAON BLANC.webp" data-fancybox="gallery67">
                                    <img class="img-fluid" src="images/products/trim/versailles/mainnail/09.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/versailles/original/7-VERSAILLES ANTHRACITE ROSE.webp" data-fancybox="gallery67">
                                    <img class="img-fluid" src="images/products/trim/versailles/mainnail/10.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/versailles/original/8-VERSAILLES ROSE D'OR.webp" data-fancybox="gallery67">
                                    <img class="img-fluid" src="images/products/trim/versailles/mainnail/11.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/versailles/original/9-VERSAILLES BLANC D'OR.webp" data-fancybox="gallery67">
                                    <img class="img-fluid" src="images/products/trim/versailles/mainnail/12.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/versailles/original/10-VERSAILLES FONCE GRIS NOIR.webp" data-fancybox="gallery67">
                                    <img class="img-fluid" src="images/products/trim/versailles/mainnail/13.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/versailles/original/DSC04393.webp" data-fancybox="gallery67">
                                    <img class="img-fluid" src="images/products/trim/versailles/mainnail/14.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/versailles/original/11-VERSAILLES CREME FONCE.webp" data-fancybox="gallery67">
                                    <img class="img-fluid" src="images/products/trim/versailles/mainnail/15.webp">
                                </div>
                            </div>
                            <div class="thumbCarousel thumbCarousel67 carousel max-w-xl mx-auto">
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/versailles/thumbnail/01.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/versailles/thumbnail/02.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/versailles/thumbnail/03.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/versailles/thumbnail/04.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/versailles/thumbnail/05.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/versailles/thumbnail/06.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/versailles/thumbnail/07.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/versailles/thumbnail/08.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/versailles/thumbnail/09.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/versailles/thumbnail/10.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/versailles/thumbnail/11.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/versailles/thumbnail/12.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/versailles/thumbnail/13.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/versailles/thumbnail/14.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/versailles/thumbnail/15.webp">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul class="breadcrumb">
                            <li><a href="index.php"><span class="material-symbols-rounded">home</span>首頁</a></li>
                            <li><a href="products.php?category=sheet">產品</a></li>
                            <li><a href="products.php?category=trim">飾板</a></li>
                        </ul>
                        <img src="images/about/iwall.svg" alt="iwall" title="品牌：IWALL愛沃">
                        <h3 title="品名：卡蘿系列">卡蘿系列</h3>
                        <!-- <p class="subtitle">一些內文<span class="badge badge-secondary">#123</span></p> -->
                        <p>款式：</p>
                        <div class="small-img">
                            <input type="radio" name="versailles" id="versailles01" value="破曉">
                            <button class="check" onclick="mainCarousel67.slideTo(3)">
                                <label for="versailles01"><img class="versailles-img01" src="images/products/trim/versailles/mockup-dawn.webp" alt="卡蘿-破曉" title="規格：破曉"></label>
                            </button>
                            <input type="radio" name="versailles" id="versailles02" value="馬卡龍綠">
                            <button class="check" onclick="mainCarousel67.slideTo(4)">
                                <label for="versailles02"><img class="versailles-img02" src="images/products/trim/versailles/mockup-macaron.webp" alt="卡蘿-馬卡龍綠" title="規格：馬卡龍綠"></label>
                            </button>
                            <input type="radio" name="versailles" id="versailles03" value="紅銅">
                            <button class="check" onclick="mainCarousel67.slideTo(5)">
                                <label for="versailles03"><img class="versailles-img03" src="images/products/trim/versailles/mockup-copper.webp" alt="卡蘿-紅銅" title="規格：紅銅"></label>
                            </button>
                            <input type="radio" name="versailles" id="versailles04" value="白舊金">
                            <button class="check" onclick="mainCarousel67.slideTo(6)">
                                <label for="versailles04"><img class="versailles-img04" src="images/products/trim/versailles/mockup-distressed.webp" alt="卡蘿-白舊金" title="規格：白舊金"></label>
                            </button>
                            <input type="radio" name="versailles" id="versailles05" value="黃金">
                            <button class="check" onclick="mainCarousel67.slideTo(7)">
                                <label for="versailles05"><img class="versailles-img05" src="images/products/trim/versailles/mockup-gold.webp" alt="卡蘿-黃金" title="規格：黃金"></label>
                            </button>
                            <input type="radio" name="versailles" id="versailles06" value="乳膚色">
                            <button class="check" onclick="mainCarousel67.slideTo(8)">
                                <label for="versailles06"><img class="versailles-img06" src="images/products/trim/versailles/mockup-stalactite.webp" alt="卡蘿-乳膚色" title="規格：乳膚色"></label>
                            </button>
                            <input type="radio" name="versailles" id="versailles07" value="幻影藍">
                            <button class="check" onclick="mainCarousel67.slideTo(9)">
                                <label for="versailles07"><img class="versailles-img07" src="images/products/trim/versailles/mockup-PhantomBlue.webp" alt="卡蘿-幻影藍" title="規格：幻影藍"></label>
                            </button>
                            <input type="radio" name="versailles" id="versailles08" value="洛可可粉">
                            <button class="check" onclick="mainCarousel67.slideTo(10)">
                                <label for="versailles08"><img class="versailles-img08" src="images/products/trim/versailles/mockup-rococo.webp" alt="卡蘿-洛可可粉" title="規格：洛可可粉"></label>
                            </button>
                            <input type="radio" name="versailles" id="versailles09" value="白金">
                            <button class="check" onclick="mainCarousel67.slideTo(11)">
                                <label for="versailles09"><img class="versailles-img09" src="images/products/trim/versailles/mockup-bernini.webp" alt="卡蘿-白金" title="規格：白金"></label>
                            </button>
                            <input type="radio" name="versailles" id="versailles10" value="暗黑">
                            <button class="check" onclick="mainCarousel67.slideTo(12)">
                                <label for="versailles10"><img class="versailles-img10" src="images/products/trim/versailles/mockup-black.webp" alt="卡蘿-暗黑" title="規格：暗黑"></label>
                            </button>
                            <input type="radio" name="versailles" id="versailles11" value="版畫">
                            <button class="check" onclick="mainCarousel67.slideTo(14)">
                                <label for="versailles11"><img class="versailles-img11" src="images/products/trim/versailles/mockup-rubbing.webp" alt="卡蘿-版畫" title="規格：版畫"></label>
                            </button>
                        </div>
                        <p>尺寸：</p>
                        <div class="mysize">
                            <input type="radio" name="versailles-size" id="versailles-size01">
                            <button class="check">
                                <label for="versailles-size01">
                                    <div class="btn btn-secondary"id="versailles-sizebtn01">124x245cm</div>
                                </label>
                            </button>
                        </div>
                        <!-- <div class="ex" id="versailles-ex">
                            <p>說明：</p>
                            <p></p>
                        </div> -->
                        <form action="contact.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="products" value="details">
                            <input type="hidden" name="product-name" value="卡蘿">
                            <input type="hidden" id="versailles-check-img" name="check-img">
                            <input type="hidden" id="versailles-check-size" name="check-size" value="124x245cm">
                            <div class="row mydescription">
                                <a class="col btn btn-secondary" href="https://drive.google.com/file/d/1lj1SQsgAMaJGw5AaoE__1-PH8GDlfcsv/view?usp=sharing">下載材質檔</a>
                                <button class="col btn btn-secondary" type="submit">諮詢產品</button>
                            </div>
                        </form>
                        <script>
                            $(':radio[name="versailles"]').change(function (){
                                var item = $(this).val();
                                $("#versailles-check-img").attr("value",item);
                            });
                        </script>
                    </div>
                </div>
            </div>
            <div class="details mmm forg">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="box ">
                            <div class="mainCarousel mainCarousel68 carousel w-10/12 max-w-5xl mx-auto">
                                <div class="carousel__slide" data-src="images/products/trim/forg/original/FORG BRONZE2.webp" data-fancybox="gallery68">
                                    <img class="img-fluid" src="images/products/trim/forg/mainnail/01.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/forg/original/FORG BRONZE-3.webp" data-fancybox="gallery68">
                                    <img class="img-fluid" src="images/products/trim/forg/mainnail/02.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/forg/original/FORG-section.webp" data-fancybox="gallery68">
                                    <img class="img-fluid" src="images/products/trim/forg/mainnail/03.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/forg/original/FORG BRONZE.webp" data-fancybox="gallery68">
                                    <img class="img-fluid" src="images/products/trim/forg/mainnail/04.webp">
                                </div>
                            </div>
                            <div class="thumbCarousel thumbCarousel68 carousel max-w-xl mx-auto">
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/forg/thumbnail/01.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/forg/thumbnail/02.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/forg/thumbnail/03.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/forg/thumbnail/04.webp">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul class="breadcrumb">
                            <li><a href="index.php"><span class="material-symbols-rounded">home</span>首頁</a></li>
                            <li><a href="products.php?category=sheet">產品</a></li>
                            <li><a href="products.php?category=trim">飾板</a></li>
                        </ul>
                        <img src="images/about/iwall.svg" alt="iwall" title="品牌：IWALL愛沃">
                        <h3 title="品名：城門系列">城門系列</h3>
                        <!-- <p class="subtitle">一些內文<span class="badge badge-secondary">#123</span></p> -->
                        <p>款式：</p>
                        <div class="small-img">
                            <input type="radio" name="forg" id="forg01">
                            <button class="check" onclick="mainCarousel68.slideTo(3)">
                                <label for="forg01"><img class="forg-img01" src="images/products/trim/forg/mockup-forg.webp" alt="forg" title="規格：單一款"></label>
                            </button>
                        </div>
                        <p>尺寸：</p>
                        <div class="mysize">
                            <input type="radio" name="forg-size" id="forg-size01">
                            <button class="check">
                                <label for="forg-size01">
                                    <div class="btn btn-secondary"id="forg-sizebtn01">128x259cm</div>
                                </label>
                            </button>
                        </div>
                        <!-- <div class="ex" id="forg-ex">
                            <p>說明：</p>
                            <p></p>
                        </div> -->
                        <form action="contact.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="products" value="details">
                            <input type="hidden" name="product-name" value="城門">
                            <input type="hidden" id="forg-check-img" name="check-img" value="單一款">
                            <input type="hidden" id="forg-check-size" name="check-size" value="128x259cm">
                            <div class="row mydescription">
                                <a class="col btn btn-secondary" href="https://drive.google.com/file/d/1_iiLAkvg_pd0qsMLYWhNo4ojCt1m_tRi/view?usp=sharing">下載材質檔</a>
                                <button class="col btn btn-secondary" type="submit">諮詢產品</button>
                            </div>
                        </form>
                        <!-- <script>
                            $(':radio[name="versailles"]').change(function (){
                                var item = $(this).val();
                                $("#versailles-check-img").attr("value",item);
                            });
                        </script> -->
                    </div>
                </div>
            </div>
            <div class="details mmm masonry">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="box ">
                            <div class="mainCarousel mainCarousel69 carousel w-10/12 max-w-5xl mx-auto">
                                <div class="carousel__slide" data-src="images/products/trim/masonry/original/MOSS ROJO.webp" data-fancybox="gallery69">
                                    <img class="img-fluid" src="images/products/trim/masonry/mainnail/01.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/masonry/original/MOSS ROJO-22.webp" data-fancybox="gallery69">
                                    <img class="img-fluid" src="images/products/trim/masonry/mainnail/02.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/masonry/original/MASONRY MOSS-section-1.webp" data-fancybox="gallery69">
                                    <img class="img-fluid" src="images/products/trim/masonry/mainnail/03.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/masonry/original/MASONRY MOSS1.webp" data-fancybox="gallery69">
                                    <img class="img-fluid" src="images/products/trim/masonry/mainnail/04.webp">
                                </div>
                            </div>
                            <div class="thumbCarousel thumbCarousel69 carousel max-w-xl mx-auto">
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/masonry/thumbnail/01.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/masonry/thumbnail/02.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/masonry/thumbnail/03.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/masonry/thumbnail/04.webp">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul class="breadcrumb">
                            <li><a href="index.php"><span class="material-symbols-rounded">home</span>首頁</a></li>
                            <li><a href="products.php?category=sheet">產品</a></li>
                            <li><a href="products.php?category=trim">飾板</a></li>
                        </ul>
                        <img src="images/about/iwall.svg" alt="iwall" title="品牌：IWALL愛沃">
                        <h3 title="品名：傳說系列">傳說系列</h3>
                        <!-- <p class="subtitle">一些內文<span class="badge badge-secondary">#123</span></p> -->
                        <p>款式：</p>
                        <div class="small-img">
                            <input type="radio" name="masonry" id="masonry01">
                            <button class="check" onclick="mainCarousel69.slideTo(3)">
                                <label for="masonry01"><img class="masonry-img01" src="images/products/trim/masonry/mockup-moss.webp" alt="masonry" title="規格：單一款"></label>
                            </button>
                        </div>
                        <p>尺寸：</p>
                        <div class="mysize">
                            <input type="radio" name="masonry-size" id="masonry-size01">
                            <button class="check">
                                <label for="masonry-size01">
                                    <div class="btn btn-secondary"id="masonry-sizebtn01">278x131cm</div>
                                </label>
                            </button>
                        </div>
                        <!-- <div class="ex" id="masonry-ex">
                            <p>說明：</p>
                            <p></p>
                        </div> -->
                        <form action="contact.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="products" value="details">
                            <input type="hidden" name="product-name" value="傳說">
                            <input type="hidden" id="masonry-check-img" name="check-img" value="單一款">
                            <input type="hidden" id="masonry-check-size" name="check-size" value="278x131cm">
                            <div class="row mydescription">
                                <a class="col btn btn-secondary" href="https://drive.google.com/file/d/1fteIkENnH2AasvDqs2QzrvlosaZHHZCq/view?usp=sharing">下載材質檔</a>
                                <button class="col btn btn-secondary" type="submit">諮詢產品</button>
                            </div>
                        </form>
                        <!-- <script>
                            $(':radio[name="versailles"]').change(function (){
                                var item = $(this).val();
                                $("#versailles-check-img").attr("value",item);
                            });
                        </script> -->
                    </div>
                </div>
            </div>
            <div class="details mmm mayon">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="box ">
                            <div class="mainCarousel mainCarousel70 carousel w-10/12 max-w-5xl mx-auto">
                                <div class="carousel__slide" data-src="images/products/trim/mayon/original/74_1_kalekilit-5.webp" data-fancybox="gallery70">
                                    <img class="img-fluid" src="images/products/trim/mayon/mainnail/01.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/mayon/original/74_1_kalekilit-3.webp" data-fancybox="gallery70">
                                    <img class="img-fluid" src="images/products/trim/mayon/mainnail/02.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/mayon/original/74_1_kalekilit-4.webp" data-fancybox="gallery70">
                                    <img class="img-fluid" src="images/products/trim/mayon/mainnail/03.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/mayon/original/Mayon-Cobriza-01.webp" data-fancybox="gallery70">
                                    <img class="img-fluid" src="images/products/trim/mayon/mainnail/04.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/mayon/original/mayon-kesit.webp" data-fancybox="gallery70">
                                    <img class="img-fluid" src="images/products/trim/mayon/mainnail/05.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/mayon/original/mayoncobriza.webp" data-fancybox="gallery70">
                                    <img class="img-fluid" src="images/products/trim/mayon/mainnail/06.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/mayon/original/mayon-carmin.webp" data-fancybox="gallery70">
                                    <img class="img-fluid" src="images/products/trim/mayon/mainnail/07.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/trim/mayon/original/mayon-intenso.webp" data-fancybox="gallery70">
                                    <img class="img-fluid" src="images/products/trim/mayon/mainnail/08.webp">
                                </div>
                            </div>
                            <div class="thumbCarousel thumbCarousel70 carousel max-w-xl mx-auto">
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/mayon/thumbnail/01.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/mayon/thumbnail/02.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/mayon/thumbnail/03.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/mayon/thumbnail/04.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/mayon/thumbnail/05.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/mayon/thumbnail/06.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/mayon/thumbnail/07.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/trim/mayon/thumbnail/08.webp">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul class="breadcrumb">
                            <li><a href="index.php"><span class="material-symbols-rounded">home</span>首頁</a></li>
                            <li><a href="products.php?category=sheet">產品</a></li>
                            <li><a href="products.php?category=trim">飾板</a></li>
                        </ul>
                        <img src="images/about/iwall.svg" alt="iwall" title="品牌：IWALL愛沃">
                        <h3 title="品名：瑪雅系列">瑪雅系列</h3>
                        <!-- <p class="subtitle">一些內文<span class="badge badge-secondary">#123</span></p> -->
                        <p>款式：</p>
                        <div class="small-img">
                            <input type="radio" name="mayon" id="mayon01" value="紅">
                            <button class="check" onclick="mainCarousel70.slideTo(6)">
                                <label for="mayon01"><img class="mayon-img01" src="images/products/trim/mayon/mockup-carmin.webp" alt="瑪雅-紅" title="規格：紅"></label>
                            </button>
                            <input type="radio" name="mayon" id="mayon02" value="黃">
                            <button class="check" onclick="mainCarousel70.slideTo(5)">
                                <label for="mayon02"><img class="mayon-img02" src="images/products/trim/mayon/mockup-cobriza.webp" alt="瑪雅-黃" title="規格：黃"></label>
                            </button>
                            <input type="radio" name="mayon" id="mayon03" value="灰">
                            <button class="check" onclick="mainCarousel70.slideTo(7)">
                                <label for="mayon03"><img class="mayon-img03" src="images/products/trim/mayon/mockup-intenso.webp" alt="瑪雅-灰" title="規格：灰"></label>
                            </button>
                        </div>
                        <p>尺寸：</p>
                        <div class="mysize">
                            <input type="radio" name="mayon-size" id="mayon-size01">
                            <button class="check">
                                <label for="mayon-size01">
                                    <div class="btn btn-secondary"id="mayon-sizebtn01">115x130cm</div>
                                </label>
                            </button>
                        </div>
                        <!-- <div class="ex" id="mayon-ex">
                            <p>說明：</p>
                            <p></p>
                        </div> -->
                        <form action="contact.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="products" value="details">
                            <input type="hidden" name="product-name" value="瑪雅">
                            <input type="hidden" id="mayon-check-img" name="check-img">
                            <input type="hidden" id="mayon-check-size" name="check-size" value="115x130cm">
                            <div class="row mydescription">
                                <a class="col btn btn-secondary" href="https://drive.google.com/file/d/11RGD79sDje2ZBDpt1o7fLa6SFzFc7B60/view?usp=sharing">下載材質檔</a>
                                <button class="col btn btn-secondary" type="submit">諮詢產品</button>
                            </div>
                        </form>
                        <script>
                            $(':radio[name="mayon"]').change(function (){
                                var item = $(this).val();
                                $("#mayon-check-img").attr("value",item);
                            });
                        </script>
                    </div>
                </div>
            </div><!-- iwall end -->
            <div class="details mmm onice">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="box ">
                            <div class="mainCarousel mainCarousel71 carousel w-10/12 max-w-5xl mx-auto">
                                <div class="carousel__slide" data-src="images/products/sheet/onice/original/ONICE_SKY_AMB-9.webp" data-fancybox="gallery71">
                                    <img class="img-fluid" src="images/products/sheet/onice/mainnail/01.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/onice/original/ONICE SKY POL RECT 120X280_A039510_1.webp" data-fancybox="gallery71">
                                    <img class="img-fluid" src="images/products/sheet/onice/mainnail/02.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/onice/original/ONICE SKY POL RECT 120X280_A039510_2.webp" data-fancybox="gallery71">
                                    <img class="img-fluid" src="images/products/sheet/onice/mainnail/03.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/onice/original/ONICE SKY POL RECT 120X280_A039510_3.webp" data-fancybox="gallery71">
                                    <img class="img-fluid" src="images/products/sheet/onice/mainnail/04.webp">
                                </div>
                            </div>
                            <div class="thumbCarousel thumbCarousel71 carousel max-w-xl mx-auto">
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/onice/thumbnail/01.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/onice/thumbnail/02.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/onice/thumbnail/03.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/onice/thumbnail/04.webp">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul class="breadcrumb">
                            <li><a href="index.php"><span class="material-symbols-rounded">home</span>首頁</a></li>
                            <li><a href="products.php?category=sheet">產品</a></li>
                            <li><a href="products.php?category=sheet">薄板</a></li>
                            <li><a href="products.php?type=jade">玉石</a></li>
                        </ul>
                        <img src="images/about/corner.svg" alt="α-corner" title="品牌：可樂石">
                        <h3 title="品名：歐尼斯">歐尼斯</h3>
                        <p>款式：</p>
                        <div class="small-img">
                            <input type="radio" name="onice" id="onice01" value="單一款">
                            <button class="check" onclick="mainCarousel71.slideTo(1)">
                                <label for="onice01"><img src="images/products/sheet/onice/mockup-one.webp" alt="onice" title="規格：單一款"></label>
                            </button>
                        </div>
                        <p>尺寸：</p>
                        <div class="mysize">
                            <input type="radio" name="onice-size" id="onice-size01" value="120x280x0.6cm 亮面">
                            <button class="check">
                                <label for="onice-size01">
                                    <div class="btn btn-secondary myautotoggle" id="onice-sizebtn01">120x280x0.6cm 亮面</div>
                                </label>
                            </button>
                        </div>
                        <!-- <p>說明：</p>
                        <p>此系列由於照片難以呈現質感，訂購前請與鄰近經銷商預約查看實品。</p><br> -->
                        <form action="contact.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="products" value="details"><!-- 傳值用 -->
                            <input type="hidden" name="product-name" value="歐尼斯">
                            <input type="hidden" id="onice-check-img" name="check-img">
                            <input type="hidden" id="onice-check-size" name="check-size" >
                            <div class="row mydescription">
                                <a class="col btn btn-secondary" href="https://drive.google.com/u/0/uc?id=1hxl2_VSRQFEDW7D1WLqMMsX40O7aWqjj&export=download&confirm=t&uuid=8c617117-253e-4d52-b6dd-fa104b94a8e2&at=ANzk5s6ChivuyM7DmNeuX28EG9qL:1681719795910">下載材質檔</a>
                                <button class="col btn btn-secondary" type="submit">諮詢產品</button>
                            </div>
                        </form>
                        <script>
                            $(':radio[name="onice"]').change(function (){
                                var item = $(this).val();
                                $("#onice-check-img").attr("value",item);
                                $("#onice-check-size").removeAttr("value");  //單一個尺寸請註解,尺寸有2個以上不要註解
                            });
                        
                            $(':radio[name="onice-size"]').change(function (){
                                var size = $(this).val();
                                $("#onice-check-size").attr("value",size);
                            });
                        </script>
                    </div>
                </div>
            </div>
            <div class="details mmm lux">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="box ">
                            <div class="mainCarousel mainCarousel72 carousel w-10/12 max-w-5xl mx-auto">
                                <div class="carousel__slide" data-src="images/products/sheet/lux/original/NIGHTLUX_AMB-1.webp" data-fancybox="gallery72">
                                    <img class="img-fluid" src="images/products/sheet/lux/mainnail/01.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/lux/original/NIGHT LUX MATT RECT 120X280_RECORTE_A039517_1.webp" data-fancybox="gallery72">
                                    <img class="img-fluid" src="images/products/sheet/lux/mainnail/02.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/lux/original/NIGHT LUX MATT RECT 120X280_RECORTE_A039517_2.webp" data-fancybox="gallery72">
                                    <img class="img-fluid" src="images/products/sheet/lux/mainnail/03.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/lux/original/NIGHT LUX MATT RECT 120X280_RECORTE_A039517_3.webp" data-fancybox="gallery72">
                                    <img class="img-fluid" src="images/products/sheet/lux/mainnail/04.webp">
                                </div>
                            </div>
                            <div class="thumbCarousel thumbCarousel72 carousel max-w-xl mx-auto">
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/lux/thumbnail/01.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/lux/thumbnail/02.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/lux/thumbnail/03.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/lux/thumbnail/04.webp">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul class="breadcrumb">
                            <li><a href="index.php"><span class="material-symbols-rounded">home</span>首頁</a></li>
                            <li><a href="products.php?category=sheet">產品</a></li>
                            <li><a href="products.php?category=sheet">薄板</a></li>
                            <li><a href="products.php?type=marble">大理石</a></li>
                        </ul>
                        <img src="images/about/corner.svg" alt="α-corner" title="品牌：可樂石">
                        <h3 title="品名：勒克斯">勒克斯</h3>
                        <p>款式：</p>
                        <div class="small-img">
                            <input type="radio" name="lux" id="lux01" value="單一款">
                            <button class="check" onclick="mainCarousel72.slideTo(2)">
                                <label for="lux01"><img src="images/products/sheet/lux/mockup-one.webp" alt="lux" title="規格：單一款"></label>
                            </button>
                        </div>
                        <p>尺寸：</p>
                        <div class="mysize">
                            <input type="radio" name="lux-size" id="lux-size01" value="120x280x0.6cm 亮面">
                            <button class="check">
                                <label for="lux-size01">
                                    <div class="btn btn-secondary myautotoggle" id="lux-sizebtn01">120x280x0.6cm 亮面</div>
                                </label>
                            </button>
                            <input type="radio" name="lux-size" id="lux-size02" value="120x280x0.6cm 霧面">
                            <button class="check">
                                <label for="lux-size02">
                                    <div class="btn btn-secondary myautotoggle" id="lux-sizebtn01">120x280x0.6cm 霧面</div>
                                </label>
                            </button>
                        </div>
                        <!-- <p>說明：</p>
                        <p>此系列由於照片難以呈現質感，訂購前請與鄰近經銷商預約查看實品。</p><br> -->
                        <form action="contact.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="products" value="details"><!-- 傳值用 -->
                            <input type="hidden" name="product-name" value="勒克斯">
                            <input type="hidden" id="lux-check-img" name="check-img">
                            <input type="hidden"  id="lux-check-size" name="check-size">
                            <div class="row mydescription">
                                <a class="col btn btn-secondary" href="https://drive.google.com/u/0/uc?id=1YbqGnweaFA3jzKRr3J6JyVWlNxzccrPb&export=download&confirm=t&uuid=8a6743e9-2bce-4948-abf9-49a09815d245&at=ANzk5s6iLxCqxJKu44BjRXVOFTwC:1681719850189">下載材質檔</a>
                                <button class="col btn btn-secondary" type="submit">諮詢產品</button>
                            </div>
                        </form>
                        <script>
                            $(':radio[name="lux"]').change(function (){
                                var item = $(this).val();
                                $("#lux-check-img").attr("value",item);
                                $("#lux-check-size").removeAttr("value");
                            });
                        
                            $(':radio[name="lux-size"]').change(function (){
                                var size = $(this).val();
                                $("#lux-check-size").attr("value",size);
                            });
                        </script>
                    </div>
                </div>
            </div>
            <div class="details mmm sabbia">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="box ">
                            <div class="mainCarousel mainCarousel73 carousel w-10/12 max-w-5xl mx-auto">
                                <div class="carousel__slide" data-src="images/products/sheet/sabbia/original/MAREDISABBIA_BEIGE_AMB-7.webp" data-fancybox="gallery73">
                                    <img class="img-fluid" src="images/products/sheet/sabbia/mainnail/01.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/sabbia/original/MAREDISABBIA_GREIGE_AMB-9.webp" data-fancybox="gallery73">
                                    <img class="img-fluid" src="images/products/sheet/sabbia/mainnail/02.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/sabbia/original/MARE DI SABBIA BEIGE MATT RECT 120X280_1.webp" data-fancybox="gallery73">
                                    <img class="img-fluid" src="images/products/sheet/sabbia/mainnail/03.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/sabbia/original/MARE DI SABBIA BEIGE MATT RECT 120X280_2.webp" data-fancybox="gallery73">
                                    <img class="img-fluid" src="images/products/sheet/sabbia/mainnail/04.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/sabbia/original/MARE DI SABBIA BEIGE MATT RECT 120X280_3.webp" data-fancybox="gallery73">
                                    <img class="img-fluid" src="images/products/sheet/sabbia/mainnail/05.webp">
                                </div>
                            </div>
                            <div class="thumbCarousel thumbCarousel73 carousel max-w-xl mx-auto">
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/sabbia/thumbnail/01.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/sabbia/thumbnail/02.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/sabbia/thumbnail/03.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/sabbia/thumbnail/04.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/sabbia/thumbnail/05.webp">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul class="breadcrumb">
                            <li><a href="index.php"><span class="material-symbols-rounded">home</span>首頁</a></li>
                            <li><a href="products.php?category=sheet">產品</a></li>
                            <li><a href="products.php?category=sheet">薄板</a></li>
                            <li><a href="products.php?type=marble">大理石</a></li>
                        </ul>
                        <img src="images/about/corner.svg" alt="α-corner" title="品牌：可樂石">
                        <h3 title="品名：薩比亞">薩比亞</h3>
                        <p>款式：</p>
                        <div class="small-img">
                            <input type="radio" name="sabbia" id="sabbia01" value="單一款">
                            <button class="check" onclick="mainCarousel73.slideTo(2)">
                                <label for="sabbia01"><img src="images/products/sheet/sabbia/mockup-one.webp" alt="sabbia" title="規格：單一款"></label>
                            </button>
                        </div>
                        <p>尺寸：</p>
                        <div class="mysize">
                            <input type="radio" name="sabbia-size" id="sabbia-size01" value="120x280x0.6cm 亮面">
                            <button class="check">
                                <label for="sabbia-size01">
                                    <div class="btn btn-secondary myautotoggle" id="sabbia-sizebtn01">120x280x0.6cm 亮面</div>
                                </label>
                            </button>
                        </div>
                        <!-- <p>說明：</p>
                        <p>此系列由於照片難以呈現質感，訂購前請與鄰近經銷商預約查看實品。</p><br> -->
                        <form action="contact.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="products" value="details"><!-- 傳值用 -->
                            <input type="hidden" name="product-name" value="薩比亞">
                            <input type="hidden" id="sabbia-check-img" name="check-img">
                            <input type="hidden" id="sabbia-check-size" name="check-size">
                            <div class="row mydescription">
                                <a class="col btn btn-secondary" href="https://drive.google.com/u/0/uc?id=10xKwZp8n9SSkdz9sMEZs_NCty97Ixsrq&export=download&confirm=t&uuid=c95213ed-658d-46e1-b47b-a8e328f59911&at=ANzk5s52oaHTqsmp6q9Ue3eBMaCa:1681719896277">下載材質檔</a>
                                <button class="col btn btn-secondary" type="submit">諮詢產品</button>
                            </div>
                        </form>
                        <script>
                            $(':radio[name="sabbia"]').change(function (){
                                var item = $(this).val();
                                $("#sabbia-check-img").attr("value",item);
                                $("#sabbia-check-size").removeAttr("value");
                            });
                        
                            $(':radio[name="sabbia-size"]').change(function (){
                                var size = $(this).val();
                                $("#sabbia-check-size").attr("value",size);
                            });
                        </script>
                    </div>
                </div>
            </div>
            <div class="details mmm magallanes">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="box ">
                            <div class="mainCarousel mainCarousel74 carousel w-10/12 max-w-5xl mx-auto">
                                <div class="carousel__slide" data-src="images/products/sheet/magallanes/original/MAGALLANES_AMB-2.webp" data-fancybox="gallery74">
                                    <img class="img-fluid" src="images/products/sheet/magallanes/mainnail/01.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/magallanes/original/MAGALLANES MARBLE POL RECT 120X280_MONTAJE_1.webp" data-fancybox="gallery74">
                                    <img class="img-fluid" src="images/products/sheet/magallanes/mainnail/02.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/magallanes/original/MAGALLANES MARBLE POL RECT 120X280_MONTAJE_2.webp" data-fancybox="gallery74">
                                    <img class="img-fluid" src="images/products/sheet/magallanes/mainnail/03.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/magallanes/original/MAGALLANES MARBLE POL RECT 120X280_MONTAJE_3.webp" data-fancybox="gallery74">
                                    <img class="img-fluid" src="images/products/sheet/magallanes/mainnail/04.webp">
                                </div>
                            </div>
                            <div class="thumbCarousel thumbCarousel74 carousel max-w-xl mx-auto">
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/magallanes/thumbnail/01.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/magallanes/thumbnail/02.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/magallanes/thumbnail/03.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/magallanes/thumbnail/04.webp">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul class="breadcrumb">
                            <li><a href="index.php"><span class="material-symbols-rounded">home</span>首頁</a></li>
                            <li><a href="products.php?category=sheet">產品</a></li>
                            <li><a href="products.php?category=sheet">薄板</a></li>
                            <li><a href="products.php?type=marble">大理石</a></li>
                        </ul>
                        <img src="images/about/corner.svg" alt="α-corner" title="品牌：可樂石">
                        <h3 title="品名：墨荷">墨荷</h3>
                        <p>款式：</p>
                        <div class="small-img">
                            <input type="radio" name="magallanes" id="magallanes01" value="單一款">
                            <button class="check" onclick="mainCarousel74.slideTo(2)">
                                <label for="magallanes01"><img src="images/products/sheet/magallanes/mockup-one.webp" alt="magallanes" title="規格：單一款"></label>
                            </button>
                        </div>
                        <p>尺寸：</p>
                        <div class="mysize">
                            <input type="radio" name="magallanes-size" id="magallanes-size01" value="120x280x0.6cm 亮面">
                            <button class="check">
                                <label for="magallanes-size01">
                                    <div class="btn btn-secondary myautotoggle" id="magallanes-sizebtn01">120x280x0.6cm 亮面</div>
                                </label>
                            </button>
                        </div>
                        <!-- <p>說明：</p>
                        <p>此系列由於照片難以呈現質感，訂購前請與鄰近經銷商預約查看實品。</p><br> -->
                        <form action="contact.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="products" value="details"><!-- 傳值用 -->
                            <input type="hidden" name="product-name" value="墨荷">
                            <input type="hidden" id="magallanes-check-img" name="check-img">
                            <input type="hidden" id="magallanes-check-size" name="check-size">
                            <div class="row mydescription">
                                <a class="col btn btn-secondary" href="https://drive.google.com/u/0/uc?id=1bLsot9WLufgoR5mXOmBPbrl27g5-gkkT&export=download&confirm=t&uuid=4da6da83-a720-4b89-865a-1cef8458e9cb&at=ANzk5s5MkZo4g3XTb3pP5H0U_DpX:1681719950874">下載材質檔</a>
                                <button class="col btn btn-secondary" type="submit">諮詢產品</button>
                            </div>
                        </form>
                        <script>
                            $(':radio[name="magallanes"]').change(function (){
                                var item = $(this).val();
                                $("#magallanes-check-img").attr("value",item);
                                $("#magallanes-check-size").removeAttr("value");
                            });
                        
                            $(':radio[name="magallanes-size"]').change(function (){
                                var size = $(this).val();
                                $("#magallanes-check-size").attr("value",size);
                            });
                        </script>
                    </div>
                </div>
            </div>
            <div class="details mmm luna">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="box ">
                            <div class="mainCarousel mainCarousel75 carousel w-10/12 max-w-5xl mx-auto">
                                <div class="carousel__slide" data-src="images/products/sheet/luna/original/LUNA_BLANCA_AMB-13.webp" data-fancybox="gallery75">
                                    <img class="img-fluid" src="images/products/sheet/luna/mainnail/01.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/luna/original/LUNABLANCA_AMB-12.webp" data-fancybox="gallery75">
                                    <img class="img-fluid" src="images/products/sheet/luna/mainnail/02.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/luna/original/LUNA BLANCA MATT RECT 120X280_MONTAJE_1.webp" data-fancybox="gallery75">
                                    <img class="img-fluid" src="images/products/sheet/luna/mainnail/03.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/luna/original/LUNA BLANCA MATT RECT 120X280_MONTAJE_2.webp" data-fancybox="gallery75">
                                    <img class="img-fluid" src="images/products/sheet/luna/mainnail/04.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/luna/original/LUNA BLANCA MATT RECT 120X280_MONTAJE_3.webp" data-fancybox="gallery75">
                                    <img class="img-fluid" src="images/products/sheet/luna/mainnail/05.webp">
                                </div>
                            </div>
                            <div class="thumbCarousel thumbCarousel75 carousel max-w-xl mx-auto">
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/luna/thumbnail/01.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/luna/thumbnail/02.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/luna/thumbnail/03.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/luna/thumbnail/04.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/luna/thumbnail/05.webp">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul class="breadcrumb">
                            <li><a href="index.php"><span class="material-symbols-rounded">home</span>首頁</a></li>
                            <li><a href="products.php?category=sheet">產品</a></li>
                            <li><a href="products.php?category=sheet">薄板</a></li>
                            <li><a href="products.php?type=marble">大理石</a></li>
                        </ul>
                        <img src="images/about/corner.svg" alt="α-corner" title="品牌：可樂石">
                        <h3 title="品名：盧那">盧那</h3>
                        <p>款式：</p>
                        <div class="small-img">
                            <input type="radio" name="luna" id="luna01" value="單一款">
                            <button class="check" onclick="mainCarousel75.slideTo(2)">
                                <label for="luna01"><img src="images/products/sheet/luna/mockup-one.webp" alt="luna" title="規格：單一款"></label>
                            </button>
                        </div>
                        <p>尺寸：</p>
                        <div class="mysize">
                            <input type="radio" name="luna-size" id="luna-size01" value="120x280x0.6cm 亮面">
                            <button class="check">
                                <label for="luna-size01">
                                    <div class="btn btn-secondary myautotoggle" id="luna-sizebtn01">120x280x0.6cm 亮面</div>
                                </label>
                            </button>
                        </div>
                        <!-- <p>說明：</p>
                        <p>此系列由於照片難以呈現質感，訂購前請與鄰近經銷商預約查看實品。</p><br> -->
                        <form action="contact.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="products" value="details"><!-- 傳值用 -->
                            <input type="hidden" name="product-name" value="盧那">
                            <input type="hidden" id="luna-check-img" name="check-img">
                            <input type="hidden" id="luna-check-size" name="check-size">
                            <div class="row mydescription">
                                <a class="col btn btn-secondary" href="https://drive.google.com/u/0/uc?id=17v6lYNj2FmZRK8aDfAXJn35M6jcfgHT5&export=download&confirm=t&uuid=bccf5c4c-17db-42e4-a381-d8f37c8307fb&at=ANzk5s6zTF1Bm58CkHRcSRWkOo1-:1681720010725">下載材質檔</a>
                                <button class="col btn btn-secondary" type="submit">諮詢產品</button>
                            </div>
                        </form>
                        <script>
                            $(':radio[name="luna"]').change(function (){
                                var item = $(this).val();
                                $("#luna-check-img").attr("value",item);
                                $("#luna-check-size").removeAttr("value");
                            });
                        
                            $(':radio[name="luna-size"]').change(function (){
                                var size = $(this).val();
                                $("#luna-check-size").attr("value",size);
                            });
                        </script>
                    </div>
                </div>
            </div>
            <div class="details mmm icabluero">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="box ">
                            <div class="mainCarousel mainCarousel76 carousel w-10/12 max-w-5xl mx-auto">
                                <div class="carousel__slide" data-src="images/products/sheet/icaroblue/original/ICARO_AMB-2.webp" data-fancybox="gallery76">
                                    <img class="img-fluid" src="images/products/sheet/icaroblue/mainnail/01.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/icaroblue/original/ICARO BLUE MARBLE POL RECT 120X280_MONTAJE_1.webp" data-fancybox="gallery76">
                                    <img class="img-fluid" src="images/products/sheet/icaroblue/mainnail/02.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/icaroblue/original/ICARO BLUE MARBLE POL RECT 120X280_MONTAJE_2.webp" data-fancybox="gallery76">
                                    <img class="img-fluid" src="images/products/sheet/icaroblue/mainnail/03.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/icaroblue/original/ICARO BLUE MARBLE POL RECT 120X280_MONTAJE_3.webp" data-fancybox="gallery76">
                                    <img class="img-fluid" src="images/products/sheet/icaroblue/mainnail/04.webp">
                                </div>
                            </div>
                            <div class="thumbCarousel thumbCarousel76 carousel max-w-xl mx-auto">
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/icaroblue/thumbnail/01.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/icaroblue/thumbnail/02.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/icaroblue/thumbnail/03.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/icaroblue/thumbnail/04.webp">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul class="breadcrumb">
                            <li><a href="index.php"><span class="material-symbols-rounded">home</span>首頁</a></li>
                            <li><a href="products.php?category=sheet">產品</a></li>
                            <li><a href="products.php?category=sheet">薄板</a></li>
                            <li><a href="products.php?type=marble">大理石</a></li>
                        </ul>
                        <img src="images/about/corner.svg" alt="α-corner" title="品牌：可樂石">
                        <h3 title="品名：伊卡洛斯">伊卡洛斯</h3>
                        <p>款式：</p>
                        <div class="small-img">
                            <input type="radio" name="icaroblue" id="icaroblue01" value="單一款">
                            <button class="check" onclick="mainCarousel76.slideTo(2)">
                                <label for="icaroblue01"><img src="images/products/sheet/icaroblue/mockup-one.webp" alt="icaroblue" title="規格：單一款"></label>
                            </button>
                        </div>
                        <p>尺寸：</p>
                        <div class="mysize">
                            <input type="radio" name="icaroblue-size" id="icaroblue-size01" value="120x280x0.6cm 亮面">
                            <button class="check">
                                <label for="icaroblue-size01">
                                    <div class="btn btn-secondary myautotoggle" id="icaroblue-sizebtn01">120x280x0.6cm 亮面</div>
                                </label>
                            </button>
                        </div>
                        <!-- <p>說明：</p>
                        <p>此系列由於照片難以呈現質感，訂購前請與鄰近經銷商預約查看實品。</p><br> -->
                        <form action="contact.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="products" value="details"><!-- 傳值用 -->
                            <input type="hidden" name="product-name" value="伊卡洛斯">
                            <input type="hidden" id="icaroblue-check-img" name="check-img">
                            <input type="hidden" id="icaroblue-check-size" name="check-size">
                            <div class="row mydescription">
                                <a class="col btn btn-secondary" href="https://drive.google.com/u/0/uc?id=1Q9bR-aW_kKfrxCpPwC77SIDtwELmWsPq&export=download&confirm=t&uuid=2214dd2f-ebed-493f-9abe-2be310cf890e&at=ANzk5s5E87U4xklkDU7wkfQ9brMb:1681720128935">下載材質檔</a>
                                <button class="col btn btn-secondary" type="submit">諮詢產品</button>
                            </div>
                        </form>
                        <script>
                            $(':radio[name="icaroblue"]').change(function (){
                                var item = $(this).val();
                                $("#icaroblue-check-img").attr("value",item);
                                $("#icaroblue-check-size").removeAttr("value");
                            });
                        
                            $(':radio[name="icaroblue-size"]').change(function (){
                                var size = $(this).val();
                                $("#icaroblue-check-size").attr("value",size);
                            });
                        </script>
                    </div>
                </div>
            </div>
            <div class="details mmm goldhard">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="box ">
                            <div class="mainCarousel mainCarousel77 carousel w-10/12 max-w-5xl mx-auto">
                                <div class="carousel__slide" data-src="images/products/sheet/goldhard/original/GOLDHARD_AMB-1.webp" data-fancybox="gallery77">
                                    <img class="img-fluid" src="images/products/sheet/goldhard/mainnail/01.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/goldhard/original/GOLD HARD POL RECT 120X280_RECORTE_A039848_1.webp" data-fancybox="gallery77">
                                    <img class="img-fluid" src="images/products/sheet/goldhard/mainnail/02.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/goldhard/original/GOLD HARD POL RECT 120X280_RECORTE_A039848_2.webp" data-fancybox="gallery77">
                                    <img class="img-fluid" src="images/products/sheet/goldhard/mainnail/03.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/goldhard/original/GOLD HARD POL RECT 120X280_RECORTE_A039848_3.webp" data-fancybox="gallery77">
                                    <img class="img-fluid" src="images/products/sheet/goldhard/mainnail/04.webp">
                                </div>
                            </div>
                            <div class="thumbCarousel thumbCarousel77 carousel max-w-xl mx-auto">
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/goldhard/thumbnail/01.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/goldhard/thumbnail/02.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/goldhard/thumbnail/03.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/goldhard/thumbnail/04.webp">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul class="breadcrumb">
                            <li><a href="index.php"><span class="material-symbols-rounded">home</span>首頁</a></li>
                            <li><a href="products.php?category=sheet">產品</a></li>
                            <li><a href="products.php?category=sheet">薄板</a></li>
                            <li><a href="products.php?type=marble">大理石</a></li>
                        </ul>
                        <img src="images/about/corner.svg" alt="α-corner" title="品牌：可樂石">
                        <h3 title="品名：和田白玉">和田白玉</h3>
                        <p>款式：</p>
                        <div class="small-img">
                            <input type="radio" name="goldhard" id="goldhard01" value="單一款">
                            <button class="check" onclick="mainCarousel77.slideTo(2)">
                                <label for="goldhard01"><img src="images/products/sheet/goldhard/mockup-one.webp" alt="goldhard" title="規格：單一款"></label>
                            </button>
                        </div>
                        <p>尺寸：</p>
                        <div class="mysize">
                            <input type="radio" name="goldhard-size" id="goldhard-size01" value="120x280x0.6cm 亮面">
                            <button class="check">
                                <label for="goldhard-size01">
                                    <div class="btn btn-secondary myautotoggle" id="goldhard-sizebtn01">120x280x0.6cm 亮面</div>
                                </label>
                            </button>
                        </div>
                        <!-- <p>說明：</p>
                        <p>此系列由於照片難以呈現質感，訂購前請與鄰近經銷商預約查看實品。</p><br> -->
                        <form action="contact.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="products" value="details"><!-- 傳值用 -->
                            <input type="hidden" name="product-name" value="和田白玉">
                            <input type="hidden" id="goldhard-check-img" name="check-img">
                            <input type="hidden" id="goldhard-check-size" name="check-size">
                            <div class="row mydescription">
                                <a class="col btn btn-secondary" href="https://drive.google.com/u/0/uc?id=1nPFCBhaqF1dLSgRUkn0y-q19QNSHXNo8&export=download&confirm=t&uuid=45cd531e-2373-49a2-b7b7-4ec1779d9bbe&at=ANzk5s5t8jnuIqBOQslSAd36WI4S:1681720166372">下載材質檔</a>
                                <button class="col btn btn-secondary" type="submit">諮詢產品</button>
                            </div>
                        </form>
                        <script>
                            $(':radio[name="goldhard"]').change(function (){
                                var item = $(this).val();
                                $("#goldhard-check-img").attr("value",item);
                                $("#goldhard-check-size").removeAttr("value");
                            });
                        
                            $(':radio[name="goldhard-size"]').change(function (){
                                var size = $(this).val();
                                $("#goldhard-check-size").attr("value",size);
                            });
                        </script>
                    </div>
                </div>
            </div>
            <div class="details mmm clang">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="box ">
                            <div class="mainCarousel mainCarousel78 carousel w-10/12 max-w-5xl mx-auto">
                                <div class="carousel__slide" data-src="images/products/sheet/clang/original/amb-thunder-clang-living-r38-rev-3-3.webp" data-fancybox="gallery78">
                                    <img class="img-fluid" src="images/products/sheet/clang/mainnail/1.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/clang/original/amb-thunder-clang-living-zenitale-r38.webp" data-fancybox="gallery78">
                                    <img class="img-fluid" src="images/products/sheet/clang/mainnail/2.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/clang/original/thunder-clang-120X270.webp" data-fancybox="gallery78">
                                    <img class="img-fluid" src="images/products/sheet/clang/mainnail/3.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/clang/original/THUNDER CLANG-A.webp" data-fancybox="gallery78">
                                    <img class="img-fluid" src="images/products/sheet/clang/mainnail/4.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/clang/original/THUNDER CLANG-B.webp" data-fancybox="gallery78">
                                    <img class="img-fluid" src="images/products/sheet/clang/mainnail/5.webp">
                                </div>
                            </div>
                            <div class="thumbCarousel thumbCarousel78 carousel max-w-xl mx-auto">
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/clang/thumbnail/1.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/clang/thumbnail/2.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/clang/thumbnail/3.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/clang/thumbnail/4.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/clang/thumbnail/5.webp">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul class="breadcrumb">
                            <li><a href="index.php"><span class="material-symbols-rounded">home</span>首頁</a></li>
                            <li><a href="products.php?category=sheet">產品</a></li>
                            <li><a href="products.php?category=sheet">薄板</a></li>
                            <li><a href="products.php?type=marble">大理石</a></li>
                        </ul>
                        <img src="images/about/eternal.svg" alt="α-corner" title="品牌：達理石" style="height: 3rem;">
                        <h3 title="品名：皮亞諾">皮亞諾</h3>
                        <p>款式：</p>
                        <div class="small-img">
                            <input type="radio" name="clang" id="clang01" value="單一款">
                            <button class="check" onclick="mainCarousel78.slideTo(3)">
                                <label for="clang01"><img src="images/products/sheet/clang/mockup-one.webp" alt="clang" title="規格：單一款"></label>
                            </button>
                        </div>
                        <p>尺寸：</p>
                        <div class="mysize">
                            <input type="radio" name="clang-size" id="clang-size01" value="120*270*0.6cm 亮面">
                            <button class="check">
                                <label for="clang-size01">
                                    <div class="btn btn-secondary myautotoggle" id="clang-sizebtn01">120*270*0.6cm 亮面</div>
                                </label>
                            </button>
                        </div>
                        <!-- <p>說明：</p>
                        <p>此系列由於照片難以呈現質感，訂購前請與鄰近經銷商預約查看實品。</p><br> -->
                        <form action="contact.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="products" value="details"><!-- 傳值用 -->
                            <input type="hidden" name="product-name" value="皮亞諾">
                            <input type="hidden" id="clang-check-img" name="check-img">
                            <input type="hidden" id="clang-check-size" name="check-size" >
                            <div class="row mydescription">
                                <a class="col btn btn-secondary" href="https://drive.google.com/u/0/uc?id=1tHqIGTBLf3KoaxwtZmrOTq3erj-vJq1y&export=download">下載材質檔</a>
                                <button class="col btn btn-secondary" type="submit">諮詢產品</button>
                            </div>
                        </form>
                        <script>
                            $(':radio[name="clang"]').change(function (){
                                var item = $(this).val();
                                $("#clang-check-img").attr("value",item);
                                $("#clang-check-size").removeAttr("value");  //單一個尺寸請註解,尺寸有2個以上不要註解
                            });
                        
                            $(':radio[name="clang-size"]').change(function (){
                                var size = $(this).val();
                                $("#clang-check-size").attr("value",size);
                            });
                        </script>
                    </div>
                </div>
            </div>
            <div class="details mmm rumble">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="box ">
                            <div class="mainCarousel mainCarousel79 carousel w-10/12 max-w-5xl mx-auto">
                                <div class="carousel__slide" data-src="images/products/sheet/rumble/original/thunder-clang-riv-rumble-floor.webp" data-fancybox="gallery79">
                                    <img class="img-fluid" src="images/products/sheet/rumble/mainnail/1.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/rumble/original/THUNDER RUMBLE-A.webp" data-fancybox="gallery79">
                                    <img class="img-fluid" src="images/products/sheet/rumble/mainnail/2.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/rumble/original/THUNDER RUMBLE-B.webp" data-fancybox="gallery79">
                                    <img class="img-fluid" src="images/products/sheet/rumble/mainnail/3.webp">
                                </div>
                            </div>
                            <div class="thumbCarousel thumbCarousel79 carousel max-w-xl mx-auto">
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/rumble/thumbnail/1.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/rumble/thumbnail/2.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/rumble/thumbnail/3.webp">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul class="breadcrumb">
                            <li><a href="index.php"><span class="material-symbols-rounded">home</span>首頁</a></li>
                            <li><a href="products.php?category=sheet">產品</a></li>
                            <li><a href="products.php?category=sheet">薄板</a></li>
                            <li><a href="products.php?type=marble">大理石</a></li>
                        </ul>
                        <img src="images/about/eternal.svg" alt="α-corner" title="品牌：達理石" style="height: 3rem;">
                        <h3 title="品名：羅德里哥">羅德里哥</h3>
                        <p>款式：</p>
                        <div class="small-img">
                            <input type="radio" name="rumble" id="rumble01" value="單一款">
                            <button class="check" onclick="mainCarousel79.slideTo(1)">
                                <label for="rumble01"><img src="images/products/sheet/rumble/mockup-one.webp" alt="rumble" title="規格：單一款"></label>
                            </button>
                        </div>
                        <p>尺寸：</p>
                        <div class="mysize">
                            <input type="radio" name="rumble-size" id="rumble-size01" value="120*270*0.6cm 亮面">
                            <button class="check">
                                <label for="rumble-size01">
                                    <div class="btn btn-secondary myautotoggle" id="rumble-sizebtn01">120*270*0.6cm 亮面</div>
                                </label>
                            </button>
                        </div>
                        <!-- <p>說明：</p>
                        <p>此系列由於照片難以呈現質感，訂購前請與鄰近經銷商預約查看實品。</p><br> -->
                        <form action="contact.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="products" value="details"><!-- 傳值用 -->
                            <input type="hidden" name="product-name" value="羅德里哥">
                            <input type="hidden" id="rumble-check-img" name="check-img">
                            <input type="hidden" id="rumble-check-size" name="check-size" >
                            <div class="row mydescription">
                                <a class="col btn btn-secondary" href="https://drive.google.com/u/0/uc?id=1P1Jz6f7w0s6-LbCZeZ6LfZSd-4awRn0I&export=download">下載材質檔</a>
                                <button class="col btn btn-secondary" type="submit">諮詢產品</button>
                            </div>
                        </form>
                        <script>
                            $(':radio[name="rumble"]').change(function (){
                                var item = $(this).val();
                                $("#rumble-check-img").attr("value",item);
                                $("#rumble-check-size").removeAttr("value");  //單一個尺寸請註解,尺寸有2個以上不要註解
                            });
                        
                            $(':radio[name="rumble-size"]').change(function (){
                                var size = $(this).val();
                                $("#rumble-check-size").attr("value",size);
                            });
                        </script>
                    </div>
                </div>
            </div>
            <div class="details mmm reef">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="box ">
                            <div class="mainCarousel mainCarousel80 carousel w-10/12 max-w-5xl mx-auto">
                                <div class="carousel__slide" data-src="images/products/sheet/reef/original/AMB-1.webp" data-fancybox="gallery80">
                                    <img class="img-fluid" src="images/products/sheet/reef/mainnail/1.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/reef/original/@1.webp" data-fancybox="gallery80">
                                    <img class="img-fluid" src="images/products/sheet/reef/mainnail/2.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/reef/original/@2.webp" data-fancybox="gallery80">
                                    <img class="img-fluid" src="images/products/sheet/reef/mainnail/3.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/reef/original/@3.webp" data-fancybox="gallery80">
                                    <img class="img-fluid" src="images/products/sheet/reef/mainnail/4.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/reef/original/@4.webp" data-fancybox="gallery80">
                                    <img class="img-fluid" src="images/products/sheet/reef/mainnail/5.webp">
                                </div>
                            </div>
                            <div class="thumbCarousel thumbCarousel80 carousel max-w-xl mx-auto">
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/reef/thumbnail/1.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/reef/thumbnail/2.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/reef/thumbnail/3.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/reef/thumbnail/4.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/reef/thumbnail/5.webp">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul class="breadcrumb">
                            <li><a href="index.php"><span class="material-symbols-rounded">home</span>首頁</a></li>
                            <li><a href="products.php?category=sheet">產品</a></li>
                            <li><a href="products.php?category=sheet">薄板</a></li>
                            <li><a href="products.php?type=jade">玉石</a></li>
                        </ul>
                        <img src="images/about/eternal.svg" alt="α-corner" title="品牌：達理石" style="height: 3rem;">
                        <h3 title="品名：和闐藍玉">和闐藍玉</h3>
                        <p>款式：</p>
                        <div class="small-img">
                            <input type="radio" name="reef" id="reef01" value="單一款">
                            <button class="check" onclick="mainCarousel80.slideTo(1)">
                                <label for="reef01"><img src="images/products/sheet/reef/mockup-one.webp" alt="reef" title="規格：單一款"></label>
                            </button>
                        </div>
                        <p>尺寸：</p>
                        <div class="mysize">
                            <input type="radio" name="reef-size" id="reef-size01" value="120X260X0.7cm 亮面">
                            <button class="check">
                                <label for="reef-size01">
                                    <div class="btn btn-secondary myautotoggle" id="reef-sizebtn01">120X260X0.7cm 亮面</div>
                                </label>
                            </button>
                        </div>
                        <!-- <p>說明：</p>
                        <p>此系列由於照片難以呈現質感，訂購前請與鄰近經銷商預約查看實品。</p><br> -->
                        <form action="contact.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="products" value="details"><!-- 傳值用 -->
                            <input type="hidden" name="product-name" value="和闐藍玉">
                            <input type="hidden" id="reef-check-img" name="check-img">
                            <input type="hidden" id="reef-check-size" name="check-size" >
                            <div class="row mydescription">
                                <a class="col btn btn-secondary" href="https://drive.google.com/u/0/uc?id=1439tGcOKI2axvRp4PdbcHCJV81sOrckj&export=download&confirm=t&uuid=34fda11e-8e12-4ad2-a4ae-8817b5efda83&at=ANzk5s4J9R4UJo7bBtgHIJEKyzhy:1681723692954">下載材質檔</a>
                                <button class="col btn btn-secondary" type="submit">諮詢產品</button>
                            </div>
                        </form>
                        <script>
                            $(':radio[name="reef"]').change(function (){
                                var item = $(this).val();
                                $("#reef-check-img").attr("value",item);
                                $("#reef-check-size").removeAttr("value");  //單一個尺寸請註解,尺寸有2個以上不要註解
                            });
                        
                            $(':radio[name="reef-size"]').change(function (){
                                var size = $(this).val();
                                $("#reef-check-size").attr("value",size);
                            });
                        </script>
                    </div>
                </div>
            </div>
            <div class="details mmm uluru">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="box ">
                            <div class="mainCarousel mainCarousel81 carousel w-10/12 max-w-5xl mx-auto">
                                <div class="carousel__slide" data-src="images/products/sheet/uluru/original/AMB-1.webp" data-fancybox="gallery81">
                                    <img class="img-fluid" src="images/products/sheet/uluru/mainnail/1.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/uluru/original/@1.webp" data-fancybox="gallery81">
                                    <img class="img-fluid" src="images/products/sheet/uluru/mainnail/2.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/uluru/original/@2.webp" data-fancybox="gallery81">
                                    <img class="img-fluid" src="images/products/sheet/uluru/mainnail/3.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/uluru/original/@3.webp" data-fancybox="gallery81">
                                    <img class="img-fluid" src="images/products/sheet/uluru/mainnail/4.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/uluru/original/@4.webp" data-fancybox="gallery81">
                                    <img class="img-fluid" src="images/products/sheet/uluru/mainnail/5.webp">
                                </div>
                            </div>
                            <div class="thumbCarousel thumbCarousel81 carousel max-w-xl mx-auto">
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/uluru/thumbnail/1.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/uluru/thumbnail/2.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/uluru/thumbnail/3.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/uluru/thumbnail/4.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/uluru/thumbnail/5.webp">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul class="breadcrumb">
                            <li><a href="index.php"><span class="material-symbols-rounded">home</span>首頁</a></li>
                            <li><a href="products.php?category=sheet">產品</a></li>
                            <li><a href="products.php?category=sheet">薄板</a></li>
                            <li><a href="products.php?type=marble">大理石</a></li>
                        </ul>
                        <img src="images/about/eternal.svg" alt="α-corner" title="品牌：達理石" style="height: 3rem;">
                        <h3 title="品名：和氏璧">和氏璧</h3>
                        <p>款式：</p>
                        <div class="small-img">
                            <input type="radio" name="uluru" id="uluru01" value="單一款">
                            <button class="check" onclick="mainCarousel81.slideTo(1)">
                                <label for="uluru01"><img src="images/products/sheet/uluru/mockup-one.webp" alt="uluru" title="規格：單一款"></label>
                            </button>
                        </div>
                        <p>尺寸：</p>
                        <div class="mysize">
                            <input type="radio" name="uluru-size" id="uluru-size01" value="120X260X0.7cm 亮面">
                            <button class="check">
                                <label for="uluru-size01">
                                    <div class="btn btn-secondary myautotoggle" id="uluru-sizebtn01">120X260X0.7cm 亮面</div>
                                </label>
                            </button>
                        </div>
                        <!-- <p>說明：</p>
                        <p>此系列由於照片難以呈現質感，訂購前請與鄰近經銷商預約查看實品。</p><br> -->
                        <form action="contact.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="products" value="details"><!-- 傳值用 -->
                            <input type="hidden" name="product-name" value="和氏璧">
                            <input type="hidden" id="uluru-check-img" name="check-img">
                            <input type="hidden" id="uluru-check-size" name="check-size" >
                            <div class="row mydescription">
                                <a class="col btn btn-secondary" href="https://drive.google.com/u/0/uc?id=1HvUtA3seGdJMWfNngMGOxHxwGxtcAtEC&export=download&confirm=t&uuid=b4f552b2-e595-4c7d-9b6c-a976b07be97f&at=ANzk5s42KtxOdWuLtTz-TSCjRsTI:1681723755812">下載材質檔</a>
                                <button class="col btn btn-secondary" type="submit">諮詢產品</button>
                            </div>
                        </form>
                        <script>
                            $(':radio[name="uluru"]').change(function (){
                                var item = $(this).val();
                                $("#uluru-check-img").attr("value",item);
                                $("#uluru-check-size").removeAttr("value");  //單一個尺寸請註解,尺寸有2個以上不要註解
                            });
                        
                            $(':radio[name="uluru-size"]').change(function (){
                                var size = $(this).val();
                                $("#uluru-check-size").attr("value",size);
                            });
                        </script>
                    </div>
                </div>
            </div>
            <div class="details mmm indi">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="box ">
                            <div class="mainCarousel mainCarousel82 carousel w-10/12 max-w-5xl mx-auto">
                                <div class="carousel__slide" data-src="images/products/sheet/indi/original/AMB-1.webp" data-fancybox="gallery82">
                                    <img class="img-fluid" src="images/products/sheet/indi/mainnail/1.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/indi/original/@1.webp" data-fancybox="gallery82">
                                    <img class="img-fluid" src="images/products/sheet/indi/mainnail/2.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/indi/original/@2.webp" data-fancybox="gallery82">
                                    <img class="img-fluid" src="images/products/sheet/indi/mainnail/3.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/indi/original/@3.webp" data-fancybox="gallery82">
                                    <img class="img-fluid" src="images/products/sheet/indi/mainnail/4.webp">
                                </div>
                                <div class="carousel__slide" data-src="images/products/sheet/indi/original/@4.webp" data-fancybox="gallery82">
                                    <img class="img-fluid" src="images/products/sheet/indi/mainnail/5.webp">
                                </div>
                            </div>
                            <div class="thumbCarousel thumbCarousel82 carousel max-w-xl mx-auto">
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/indi/thumbnail/1.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/indi/thumbnail/2.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/indi/thumbnail/3.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/indi/thumbnail/4.webp">
                                </div>
                                <div class="carousel__slide">
                                    <img class="panzoom__content img-fluid" src="images/products/sheet/indi/thumbnail/5.webp">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul class="breadcrumb">
                            <li><a href="index.php"><span class="material-symbols-rounded">home</span>首頁</a></li>
                            <li><a href="products.php?category=sheet">產品</a></li>
                            <li><a href="products.php?category=sheet">薄板</a></li>
                            <li><a href="products.php?type=marble">大理石</a></li>
                        </ul>
                        <img src="images/about/eternal.svg" alt="α-corner" title="品牌：達理石" style="height: 3rem;">
                        <h3 title="品名：黃金歲月">黃金歲月</h3>
                        <p>款式：</p>
                        <div class="small-img">
                            <input type="radio" name="indi" id="indi01" value="單一款">
                            <button class="check" onclick="mainCarousel82.slideTo(1)">
                                <label for="indi01"><img src="images/products/sheet/indi/mockup-one.webp" alt="indi" title="規格：單一款"></label>
                            </button>
                        </div>
                        <p>尺寸：</p>
                        <div class="mysize">
                            <input type="radio" name="indi-size" id="indi-size01" value="120X260X0.7cm 亮面">
                            <button class="check">
                                <label for="indi-size01">
                                    <div class="btn btn-secondary myautotoggle" id="indi-sizebtn01">120X260X0.7cm 亮面</div>
                                </label>
                            </button>
                        </div>
                        <!-- <p>說明：</p>
                        <p>此系列由於照片難以呈現質感，訂購前請與鄰近經銷商預約查看實品。</p><br> -->
                        <form action="contact.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="products" value="details"><!-- 傳值用 -->
                            <input type="hidden" name="product-name" value="黃金歲月">
                            <input type="hidden" id="indi-check-img" name="check-img">
                            <input type="hidden" id="indi-check-size" name="check-size" >
                            <div class="row mydescription">
                                <a class="col btn btn-secondary" href="https://drive.google.com/u/0/uc?id=16XP5iSfd0e2ae7qGBcL361FfD42lc5aR&export=download&confirm=t&uuid=0fb5174d-cceb-410c-8d21-5619ad936fb3&at=ANzk5s5SW75QpnDUakELgY5Cjjax:1681723795751">下載材質檔</a>
                                <button class="col btn btn-secondary" type="submit">諮詢產品</button>
                            </div>
                        </form>
                        <script>
                            $(':radio[name="indi"]').change(function (){
                                var item = $(this).val();
                                $("#indi-check-img").attr("value",item);
                                $("#indi-check-size").removeAttr("value");  //單一個尺寸請註解,尺寸有2個以上不要註解
                            });
                        
                            $(':radio[name="indi-size"]').change(function (){
                                var size = $(this).val();
                                $("#indi-check-size").attr("value",size);
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <button onclick="topFunction()" class="gotop" id="myBtn" title="Go to top">TOP</button>
        <script>
            var mybutton = document.getElementById("myBtn");
            window.onscroll = function() {
                scrollFunction()
            };
            function topFunction() {
                $('html, body').animate({
                    scrollTop: 0
                }, 'slow');
            }
        </script>
        <script>
            function myFunction() {
                var x = document.getElementById("myTopnav");
                if (x.className === "topnav") {
                    x.className += " responsive";
                    x.classList.toggle("change");
                } else {
                    x.className = "topnav";
                }
            }
            function scrollFunction() {
                if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
                    mybutton.style.display = "block";
                } else {
                    mybutton.style.display = "none";
                }
            }
        </script>
    <?php include("fb-messenger.php"); ?>
</body>
<script src="js/pro-details-fancybox.js"></script>
</html>
<script>
$("header .topnav a").eq(4).addClass("active");
$("aside .wrap a").eq(1).addClass("active");
$("button.check").toggleClass('active');
function myFunction() {
    $('#mySVG').toggleClass('active');
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>
