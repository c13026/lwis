<!DOCTYPE html>
<html lang="zh-Hant">

<head>
    <title>產品目錄|活水泉源</title>
    <meta name="keywords" content="磁磚,瓷磚,藝術,拼貼,裝潢,室內設計,室內,室外,塗料,伊斯曼,精品磁磚,進口塗料,進口磁磚,雨水回收,Ismanity,伊斯曼,a-cornerstone,可樂石,eternal stone,達理石,a-holystone,活麗石"><!-- α-cornerstone -->
    <meta name="description" content="活水泉源的產品可分為薄板、石英磚、石板磚、地壁磚、外牆磚...等等。活水泉源之產品皆為進口精品、綠建材，對環境低衝擊、對人體健康無害能給您的客戶及家人最安全的保障。旗下品牌有:可樂石a-cornerstone、達理石Eternal stone、活麗石a-Holystone、愛沃IWall智能建材、伊斯曼塗料Ismanity、雨水回收...等等。">

    <meta property="og:title" content="活水泉源國際|產品系列目錄LWIS Products menu">
    <meta property="og:description" content="活水泉源的產品可分為薄板、石英磚、石板磚、地壁磚、外牆磚...等等。活水泉源之產品皆為進口精品、綠建材，對環境低衝擊、對人體健康無害能給您的客戶及家人最安全的保障。旗下品牌有:可樂石a-cornerstone、達理石Eternal stone、活麗石a-Holystone、愛沃IWall智能建材、伊斯曼塗料Ismanity、雨水回收...等等。">
    <!-- <meta property="og:url" content="https://lwis.com.tw/"> -->
    <?php include("all-head.php"); ?>
    <link rel="stylesheet" href="css/products-btn.css">
    <link rel="stylesheet" href="css/products.css">
    <script src="js/products-btn.js"></script>
    <script src="js/products.js"></script>
    <script>
        function getRandomInt(max) {
            return Math.floor(Math.random() * max);
        }
        // .mycard.sheet.corner 這幾個class為一組間 加亂數
        // .mycard.sheet.eternal 為1組
        // .mycard.sheet.holy 為1組

        var cornerNum = {
            order: getRandomInt(30);
        };
        // $('.mycard.sheet.corner').css("order",cornerNum);

        console.log(getRandomInt(100));

        // 獲取兩個值之間的隨機整數
        function getRandomIntInclusive(min, max) {
            min = Math.ceil(min);
            max = Math.floor(max);
            return Math.floor(Math.random() * (max - min + 1) + min); //The maximum is inclusive and the minimum is inclusive
        }

        // 這是在寫切換(實景/單磚)按鈕的識別 (未完成)
        function bg(){
            $("#mybg .mybtna").removeClass("action");
            $(this).addClass("action");
        }

        
    </script>
    <script>
        $('.mycard').remove().get().sort(function(){return Math.random()-Math.random()}).appendTo($( ".divs.row'" ));
    </script>
    <script>  //OK的部分
        function mybgi(btn) {
            var newFolderName = btn.value;

            $(".mycard").each(element => {
                var oriPath = $(".mycard")[element].style.backgroundImage;
                var oriPathArray = oriPath.split("/");
                var oriFolderName = oriPathArray[oriPathArray.length - 1];
                var newPath = oriPath.replace(oriFolderName, newFolderName);;
                $(".mycard")[element].style.backgroundImage = newPath;
            });
            // $(".myA").css("background-image", "url('images/products/sheet/" + folderName + "/Img1.webp')");
        }
    </script>
    <style>
        .mybtna.action{
            background-color: #444;
            color: #CCC;
        }
    </style>
</head>

<body>
    <?php include("aside.php"); ?>
    <main>
        <div class="mycontainer">
            <h3>Products | 產品系列</h3>
            <div class="btns" ><!-- 篩選按鈕 -->
                <div class="scrollnav"  id="myInout0">
                    <button class="btn mybtn active" onclick="filterSelection('sheet'),mysheet()">薄板</button><!-- href="products.php?category=sheet" -->
                    <button class="btn mybtn" onclick="filterSelection('mesa'),mymesa()">檯面</button>
                    <button class="btn mybtn" onclick="filterSelection('tile'),mytile()">磁磚</button>
                    <!-- <button class="btn mybtn" onclick="filterSelection('stone'),mystone()">石板</button> -->
                    <button class="btn mybtn" onclick="filterSelection('trim'),mytrim()">飾板</button>
                    <a class="btn mybtn" href="https://ismanity.com/" target="_blank">塗料</a>
                    <a class="btn mybtn" href="https://www.livingwater-graf.com.tw/" target="_blank">雨水回收</a>
                </div>
                <div class="scrollnav" id="myInout1">
                    <button class="btn mybtna" onclick="mycolor();">依色系</button>
                    <button class="btn mybtna" onclick="brand();">依品牌</button>
                    <button class="btn mybtna" onclick="mytype1();">依質感</button>
                    <!-- <button class="btn mybtnb"><span class="material-symbols-outlined">palette</span></button>
                    <button class="btn mybtnb"><span class="material-symbols-outlined">image</span></button> -->
                </div>
                <div class="scrollnav" id="myInout2" style="display:none;">
                    <button class="btn mybtna" onclick="undo();"><span class="material-symbols-outlined">undo</span></button>
                    <button class="btn mybtn2" onclick="filterSelection('sheet'),mysheet1()">all</button>
                    <button class="btn mybtn2" onclick="filterSelection('white'),white()">白</button>
                    <button class="btn mybtn2" onclick="filterSelection('grey'),grey()">灰</button>
                    <button class="btn mybtn2" onclick="filterSelection('black'),black()">黑</button>
                    <button class="btn mybtn2" onclick="filterSelection('brown'),brown()">棕</button>
                    <button class="btn mybtn2" onclick="filterSelection('blue'),blue()">藍</button>
                    <button class="btn mybtn2" onclick="filterSelection('green'),green()">綠</button>
                    <button class="btn mybtn2" onclick="filterSelection('beige'),beige()">米</button>
                    <button class="btn mybtn2" onclick="filterSelection('colourful'),colourful()">其他</button>
                </div>
                <!-- white grey black brown green beige colourful -->
                <div class="scrollnav" id="myInout3" style="display:none;">
                    <!-- <button class="btn mybtn3">all</button>
                    <button class="btn mybtn3">1</button>
                    <button class="btn mybtn3">2</button>
                    <button class="btn mybtn3">3</button> -->
                </div>
                <div class="scrollnav" id="myInout4" style="display:none;">
                    <button class="btn mybtna" onclick="undo();"><span class="material-symbols-outlined">undo</span></button>
                    <button class="btn mybtn4" onclick="filterSelection('sheet'),mysheet1()">all</button>
                    <button class="btn mybtn4" onclick="filterSelection('corner'),corner()">可樂石</button>
                    <button class="btn mybtn4" onclick="filterSelection('eternal'),eternal()">達理石</button>
                    <button class="btn mybtn4" onclick="filterSelection('holy'),holy()">活麗石</button>
                </div>
                <div class="scrollnav" id="myInout5" style="display:none;">
                    <button class="btn mybtna" onclick="undo();"><span class="material-symbols-outlined">undo</span></button>
                    <button class="btn mybtn5" onclick="filterSelection('sheet'),mysheet1()">all</button>
                    <button class="btn mybtn5" onclick="filterSelection('monochrome'),monochrome()">純色</button>
                    <button class="btn mybtn5" onclick="filterSelection('marble'),marble()">大理石</button>
                    <button class="btn mybtn5" onclick="filterSelection('slate'),slate()">板岩</button>
                    <button class="btn mybtn5" onclick="filterSelection('jade'),jade()">玉石</button>
                    <!-- <button class="btn mybtn5" onclick="filterSelection('terrazzo'),terrazzo()">磨石子?</button> -->
                    <button class="btn mybtn5" onclick="filterSelection('woodgrain'),woodgrain()">木紋</button>
                    <button class="btn mybtn5" onclick="filterSelection('metallook'),metallook()">金屬</button>
                    <button class="btn mybtn5" onclick="filterSelection('other'),other()">特色</button>
                </div>
                <div style="display: none;">
                    <?php if($_GET["category"] == "sheet"){ ?>
                        <script>
                            $(function(){
                                filterSelection('sheet');
                                mysheet();
                            });
                        </script>
                    <?php }elseif($_GET["category"] == "mesa"){ ?>
                        <script>
                            $(function(){
                                filterSelection('mesa');
                                mymesa();
                            });
                        </script>
                    <?php }elseif($_GET["category"] == "tile"){ ?>
                        <script>
                            $(function(){
                                filterSelection('tile');
                                mytile();
                            });
                        </script>
                    <?php }elseif($_GET["category"] == "stone"){ ?>
                        <script>
                            $(function(){
                                filterSelection('stone');
                                mystone();
                            });
                        </script>
                    <?php }elseif($_GET["category"] == "trim"){ ?>
                        <script>
                            $(function(){
                                filterSelection('trim');
                                mytrim();
                            });
                        </script>
                    <?php }elseif($_GET["brand"] == "corner"){ ?>
                        <script>
                            $(function(){
                                filterSelection('corner');
                                corner();
                            });
                        </script>
                    <?php }elseif($_GET["brand"] == "eternal"){ ?>
                        <script>
                            $(function(){
                                filterSelection('eternal');
                                eternal();
                            });
                        </script>
                    <?php }elseif($_GET["brand"] == "holy"){ ?>
                        <script>
                            $(function(){
                                filterSelection('holy');
                                holy();
                            });
                        </script>
                    <?php }elseif($_GET["type"] == "monochrome"){ ?>
                        <script>
                            $(function(){
                                filterSelection('monochrome');
                                monochrome();
                            });
                        </script>
                    <?php }elseif($_GET["type"] == "marble"){ ?>
                        <script>
                            $(function(){
                                filterSelection('marble');
                                marble();
                            });
                        </script>
                    <?php }elseif($_GET["type"] == "slate"){ ?>
                        <script>
                            $(function(){
                                filterSelection('slate');
                                slate();
                            });
                        </script>
                    <?php }elseif($_GET["type"] == "jade"){ ?>
                        <script>
                            $(function(){
                                filterSelection('jade');
                                jade();
                            });
                        </script>
                    <?php }elseif($_GET["type"] == "terrazzo"){ ?>
                        <script>
                            $(function(){
                                filterSelection('terrazzo');
                                terrazzo();
                            });
                        </script>
                    <?php }elseif($_GET["type"] == "woodgrain"){ ?>
                        <script>
                            $(function(){
                                filterSelection('woodgrain');
                                woodgrain();
                            });
                        </script>
                    <?php }elseif($_GET["type"] == "metallook"){ ?>
                        <script>
                            $(function(){
                                filterSelection('metallook');
                                metallook();
                            });
                        </script>
                    <?php }elseif($_GET["type"] == "other"){ ?>
                        <script>
                            $(function(){
                                filterSelection('other');
                                other();
                            });
                        </script>
                    <?php }elseif($_GET["color"] == "white"){ ?>
                        <script>
                            $(function(){
                                filterSelection('white');
                                white();
                            });
                        </script>
                    <?php }elseif($_GET["color"] == "grey"){ ?>
                        <script>
                            $(function(){
                                filterSelection('grey');
                                grey();
                            });
                        </script>
                    <?php }elseif($_GET["color"] == "black"){ ?>
                        <script>
                            $(function(){
                                filterSelection('black');
                                black();
                            });
                        </script>
                    <?php }elseif($_GET["color"] == "brown"){ ?>
                        <script>
                            $(function(){
                                filterSelection('brown');
                                brown();
                            });
                        </script>
                    <?php }elseif($_GET["color"] == "blue"){ ?>
                        <script>
                            $(function(){
                                filterSelection('blue');
                                blue();
                            });
                        </script>
                    <?php }elseif($_GET["color"] == "green"){ ?>
                        <script>
                            $(function(){
                                filterSelection('green');
                                green();
                            });
                        </script>
                    <?php }elseif($_GET["color"] == "beige"){ ?>
                        <script>
                            $(function(){
                                filterSelection('beige');
                                beige();
                            });
                        </script>
                    <?php }elseif($_GET["color"] == "colourful"){ ?>
                        <script>
                            $(function(){
                                filterSelection('colourful');
                                colourful();
                            });
                        </script>
                    <?php }else{ ?>
                        
                    <?php } ?>
                </div>
                
            </div>
            <div class="scrollnav divs" id="mybg" style="margin: 0 auto; padding:0 .5rem;"><!-- 調整瀏覽方式 action -->
                <button class="btn mybtna" onclick="mybgi(this)" value="bg-img.webp" title="瀏覽實景"><span class="material-symbols-outlined">imagesmode</span></button>
                <button class="btn mybtna" onclick="mybgi(this)" value="bg-color.webp" title="瀏覽單磚"><span class="material-symbols-outlined">palette</span></button>
            </div>
            <div class="scrollnav divs" id="" style="margin: 0 auto; padding:0 .5rem;"><!-- 調整瀏覽順序 -->
                <!-- <button class="btn mybtna" onclick="mybgi(this)" value="bg-color.webp" title="瀏覽單磚"><span class="material-symbols-outlined">palette</span></button>
                <button class="btn mybtna" onclick="mybgi(this)" value="bg-img.webp" title="瀏覽實景"><span class="material-symbols-outlined">imagesmode</span></button> -->
            </div>

            <div class="divs row"><!-- mycard 分類 品牌 類型 --> <!-- a標籤裡放 title="品名：懷柏系列　顏色：黑、白　尺寸：100×250×0.6cm" --><!-- 若需增加顏色分類按鍵 要在a標籤添加id,多款時替換篩選後顏色相符的該款單磚背景 -->
                <a href="products-details.php?sheet=onice" title="品名：歐尼斯" class="mycard sheet corner jade blue" style="background-image:url('images/products/sheet/onice/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="images/products/corner.svg" alt="歐尼斯 onice">
                    </div>
                    <div class="card-foot">
                        <span>歐尼斯</span><span>單一款</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=lux" title="品名：勒克斯" class="mycard sheet corner marble black" style="background-image:url('images/products/sheet/lux/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="images/products/corner.svg" alt="勒克斯 lux">
                    </div>
                    <div class="card-foot">
                        <span>勒克斯</span><span>單一款</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=sabbia" title="品名：薩比亞" class="mycard sheet corner marble beige" style="background-image:url('images/products/sheet/sabbia/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="images/products/corner.svg" alt="薩比亞 sabbia">
                    </div>
                    <div class="card-foot">
                        <span>薩比亞</span><span>單一款</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=magallanes" title="品名：墨荷" class="mycard sheet corner marble black blue colourful " style="background-image:url('images/products/sheet/magallanes/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="images/products/corner.svg" alt="墨荷 magallanes">
                    </div>
                    <div class="card-foot">
                        <span>墨荷</span><span>單一款</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=luna" title="品名：盧那" class="mycard sheet corner marble white " style="background-image:url('images/products/sheet/luna/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="images/products/corner.svg" alt="盧那 luna">
                    </div>
                    <div class="card-foot">
                        <span>盧那</span><span>單一款</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=icabluero" title="品名：伊卡洛斯" class="mycard sheet corner marble blue " style="background-image:url('images/products/sheet/icaroblue/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="images/products/corner.svg" alt="伊卡洛斯 icaroblue">
                    </div>
                    <div class="card-foot">
                        <span>伊卡洛斯</span><span>單一款</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=goldhard" title="品名：和田白玉" class="mycard sheet corner marble white beige " style="background-image:url('images/products/sheet/goldhard/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="images/products/corner.svg" alt="和田白玉 goldhard">
                    </div>
                    <div class="card-foot">
                        <span>和田白玉</span><span>單一款</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=fibre" title="品名：懷柏系列" class="mycard sheet corner monochrome white black" style="background-image:url('images/products/sheet/fibre/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="images/products/corner.svg" alt="懷柏 fibre">
                    </div>
                    <div class="card-foot">
                        <span>懷柏系列</span><span>共2款</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=morandi" title="品名：莫蘭迪系列" class="mycard sheet corner monochrome black brown green blue" style="background-image:url('images/products/sheet/morandi/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="images/products/corner.svg" alt="莫蘭迪 morandi">
                    </div>
                    <div class="card-foot">
                        <span>莫蘭迪系列</span><span>共5款</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=geo" title="品名：洞石系列" class="mycard sheet corner slate brown beige" style="background-image:url('images/products/sheet/geo/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="images/products/corner.svg" alt="洞石 geo">
                    </div>
                    <div class="card-foot">
                        <span>洞石系列</span><span>共2款</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=storm" title="品名：旋風系列" class="mycard sheet corner marble grey black" style="background-image:url('images/products/sheet/storm/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="images/products/corner.svg" alt="旋風 storm">
                    </div>
                    <div class="card-foot">
                        <span>旋風系列</span><span>共2款</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=brazil" title="品名：巴西雲玉" class="mycard sheet corner marble white grey green" style="background-image:url('images/products/sheet/brazil/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="images/products/corner.svg" alt="巴西雲玉 brazil">
                    </div>
                    <div class="card-foot">
                        <span>巴西雲玉</span><span>單一款</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=umbra" title="品名：安柏瑞" class="mycard sheet corner marble brown" style="background-image:url('images/products/sheet/umbra/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="images/products/corner.svg" alt="安柏瑞 umbra">
                    </div>
                    <div class="card-foot">
                        <span>安柏瑞</span><span>單一款</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=syros" title="品名：希羅斯" class="mycard sheet corner marble white" style="background-image:url('images/products/sheet/syros/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="images/products/corner.svg" alt="希羅斯 syros">
                    </div>
                    <div class="card-foot">
                        <span>希羅斯</span><span>單一款</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=touche" title="品名：銀狐白" class="mycard sheet corner marble white" style="background-image:url('images/products/sheet/touche/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="images/products/corner.svg" alt="銀狐白 touche">
                    </div>
                    <div class="card-foot">
                        <span>銀狐白</span><span>單一款</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=jurassic" title="品名：侏儸紀系列" class="mycard sheet corner marble grey black" style="background-image:url('images/products/sheet/jurassic/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="images/products/corner.svg" alt="侏儸紀 jurassic">
                    </div>
                    <div class="card-foot">
                        <span>侏儸紀系列</span><span>共3款</span>
                    </div>
                </a>
                
                <a href="products-details.php?sheet=palladium" title="品名：鐵鏽系列" class="mycard sheet corner metallook other black brown blue beige" style="background-image:url('images/products/sheet/palladium/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="images/products/corner.svg" alt="鐵鏽 palladium">
                    </div>
                    <div class="card-foot">
                        <span>鐵鏽系列</span><span>共4款</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=pompeia" title="品名：洛夫特系列" class="mycard sheet corner other grey" style="background-image:url('images/products/sheet/pompeia/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="images/products/corner.svg" alt="洛夫特 pompeia">
                    </div>
                    <div class="card-foot">
                        <span>洛夫特系列</span><span>共2款</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=jasper" title="品名：賈斯柏" class="mycard sheet corner slate brown beige" style="background-image:url('images/products/sheet/jasper/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="images/products/corner.svg" alt="賈斯柏 jasper">
                    </div>
                    <div class="card-foot">
                        <span>賈斯柏</span><span>單一款</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=iseo" title="品名：伊西歐" class="mycard sheet corner terrazzo grey" style="background-image:url('images/products/sheet/iseo/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="images/products/corner.svg" alt="伊西歐 iseo">
                    </div>
                    <div class="card-foot">
                        <span>伊西歐</span><span>單一款</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=petra" title="品名：佩特拉" class="mycard sheet corner slate beige" style="background-image:url('images/products/sheet/petra/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="images/products/corner.svg" alt="佩特拉 petra">
                    </div>
                    <div class="card-foot">
                        <span>佩特拉</span><span>單一款</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=azalai" title="品名：聖羅蘭" class="mycard sheet corner marble black" style="background-image:url('images/products/sheet/azalai/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="images/products/corner.svg" alt="聖羅蘭 azalai">
                    </div>
                    <div class="card-foot">
                        <span>聖羅蘭</span><span>單一款</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=arizona" title="品名：亞利桑納" class="mycard sheet corner woodgrain brown" style="background-image:url('images/products/sheet/arizona/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="images/products/corner.svg" alt="亞利桑納 arizona">
                    </div>
                    <div class="card-foot">
                        <span>亞利桑納</span><span>單一款</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=fusion" title="品名：錦繡綠" class="mycard sheet corner metallook green" style="background-image:url('images/products/sheet/fusion/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="images/products/corner.svg" alt="錦繡綠 fusion">
                    </div>
                    <div class="card-foot">
                        <span>錦繡綠</span><span>單一款</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=pandora" title="品名：潘朵拉" class="mycard sheet corner marble white" style="background-image:url('images/products/sheet/pandora/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="images/products/corner.svg" alt="潘朵拉 pandora">
                    </div>
                    <div class="card-foot">
                        <span>潘朵拉</span><span>單一款</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=portobello" title="品名：波多貝羅" class="mycard sheet corner marble white" style="background-image:url('images/products/sheet/portobello/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="images/products/corner.svg" alt="波多貝羅 portobello">
                    </div>
                    <div class="card-foot">
                        <span>波多貝羅</span><span>單一款</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=paonazzo" title="品名：鎏金白" class="mycard sheet corner marble white" style="background-image:url('images/products/sheet/paonazzo/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="images/products/corner.svg" alt="鎏金白 paonazzo">
                    </div>
                    <div class="card-foot">
                        <span>鎏金白</span><span>單一款</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=patagonia" title="品名：夢蝶" class="mycard sheet corner marble white colourful" style="background-image:url('images/products/sheet/patagonia/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="images/products/corner.svg" alt="夢蝶 patagonia">
                    </div>
                    <div class="card-foot">
                        <span>夢蝶</span><span>單一款</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=eternal" title="品名：星空" class="mycard sheet corner jade blue colourful" style="background-image:url('images/products/sheet/eternal/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="images/products/corner.svg" alt="星空 eternal">
                    </div>
                    <div class="card-foot">
                        <span>星空</span><span>單一款</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=cementproject" title="品名：廊香系列" class="mycard sheet corner woodgrain other beige grey" style="background-image:url('images/products/sheet/cementproject/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="images/products/corner.svg" alt="廊香 cementproject">
                    </div>
                    <div class="card-foot">
                        <span>廊香系列</span><span>共3款</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=herbarium" title="品名：曼陀羅" class="mycard sheet corner other white grey colourful" style="background-image:url('images/products/sheet/herbarium/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="images/products/corner.svg" alt="曼陀羅 herbarium">
                    </div>
                    <div class="card-foot">
                        <span>曼陀羅</span><span>單一款</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=house" title="品名：小房子" class="mycard sheet corner other white colourful" style="background-image:url('images/products/sheet/house/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="images/products/corner.svg" alt="小房子 house">
                    </div>
                    <div class="card-foot">
                        <span>小房子</span><span>單一款</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=incertum" title="品名：幾何" class="mycard sheet corner marble other white colourful" style="background-image:url('images/products/sheet/incertum/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="images/products/corner.svg" alt="幾何 incertum">
                    </div>
                    <div class="card-foot">
                        <span>幾何</span><span>單一款</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=parker" title="品名：帕克白" class="mycard sheet corner marble white grey" style="background-image:url('images/products/sheet/parker/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="images/products/corner.svg" alt="帕克白 parker">
                    </div>
                    <div class="card-foot">
                        <span>帕克白</span><span>單一款</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=modelo" title="品名：藍鳳凰系列" class="mycard sheet corner other blue" style="background-image:url('images/products/sheet/modelo/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="images/products/corner.svg" alt="藍鳳凰 modelo">
                    </div>
                    <div class="card-foot">
                        <span>藍鳳凰系列</span><span>共2款</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=venezia" title="品名：花格子系列" class="mycard sheet corner other colourful" style="background-image:url('images/products/sheet/venezia/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="images/products/corner.svg" alt="花格子 venezia">
                    </div>
                    <div class="card-foot">
                        <span>花格子</span><span>單一款</span>
                    </div>
                </a>

                
                <a href="products-details.php?sheet=clang" title="品名：皮亞諾" class="mycard sheet eternal marble grey" style="background-image:url('images/products/sheet/clang/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="images/products/eternal.svg" alt="皮亞諾 clang">
                    </div>
                    <div class="card-foot">
                        <span>皮亞諾</span><span>單一款</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=rumble" title="品名：羅德里哥" class="mycard sheet eternal jade black" style="background-image:url('images/products/sheet/rumble/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="images/products/eternal.svg" alt="羅德里哥 rumble">
                    </div>
                    <div class="card-foot">
                        <span>羅德里哥</span><span>單一款</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=reef" title="品名：和闐藍玉" class="mycard sheet eternal marble brown green" style="background-image:url('images/products/sheet/reef/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="images/products/eternal.svg" alt="和闐藍玉 reef">
                    </div>
                    <div class="card-foot">
                        <span>和闐藍玉</span><span>單一款</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=uluru" title="品名：和氏璧" class="mycard sheet eternal marble grey black" style="background-image:url('images/products/sheet/uluru/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="images/products/eternal.svg" alt="和氏璧 uluru">
                    </div>
                    <div class="card-foot">
                        <span>和氏璧</span><span>單一款</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=indi" title="品名：黃金歲月" class="mycard sheet eternal marble white beige" style="background-image:url('images/products/sheet/indi/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="images/products/eternal.svg" alt="黃金歲月 indi">
                    </div>
                    <div class="card-foot">
                        <span>黃金歲月</span><span>單一款</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=magnetic" title="品名：鏽瓷系列" class="mycard sheet eternal metallook white grey black brown blue green" style="background-image:url('images/products/sheet/magnetic/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="images/products/eternal.svg" alt="鏽瓷 magnetic">
                    </div>
                    <div class="card-foot">
                        <span>鏽瓷系列</span><span>共6款</span>
                    </div>
                </a>
                
                <a href="products-details.php?sheet=pierre" title="品名：皮爾黑金系列" class="mycard sheet eternal marble black" style="background-image:url('images/products/sheet/pierre/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="images/products/eternal.svg" alt="皮爾黑金 pierre">
                    </div>
                    <div class="card-foot">
                        <span>皮爾黑金</span><span>單一款</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=amazzonite" title="品名：亞馬遜" class="mycard sheet eternal jade green" style="background-image:url('images/products/sheet/amazzonite/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="images/products/eternal.svg" alt="亞馬遜 amazzonite">
                    </div>
                    <div class="card-foot">
                        <span>亞馬遜</span><span>單一款</span>
                    </div>
                </a>
                
                <a href="products-details.php?sheet=cenerino" title="品名：卡拉灰" class="mycard sheet eternal marble grey black" style="background-image:url('images/products/sheet/cenerino/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="images/products/eternal.svg" alt="卡拉灰 cenerino">
                    </div>
                    <div class="card-foot">
                        <span>卡拉灰</span><span>單一款</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=marquina" title="品名：馬奎納黑" class="mycard sheet eternal marble black" style="background-image:url('images/products/sheet/marquina/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="images/products/eternal.svg" alt="馬奎納黑 marquina">
                    </div>
                    <div class="card-foot">
                        <span>馬奎納黑</span><span>單一款</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=agata" title="品名：田玉系列" class="mycard sheet eternal jade white blue" style="background-image:url('images/products/sheet/agata/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="images/products/eternal.svg" alt="田玉 agata">
                    </div>
                    <div class="card-foot">
                        <span>田玉系列</span><span>共2款</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=agathos" title="品名：阿嘉莎系列" class="mycard sheet eternal slate black brown" style="background-image:url('images/products/sheet/agathos/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="images/products/eternal.svg" alt="阿嘉莎 agathos">
                    </div>
                    <div class="card-foot">
                        <span>阿嘉莎系列</span><span>共2款</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=calacatta" title="品名：金色山脈" class="mycard sheet eternal marble white blue beige" style="background-image:url('images/products/sheet/calacatta/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="images/products/eternal.svg" alt="金色山脈 calacatta">
                    </div>
                    <div class="card-foot">
                        <span>金色山脈</span><span>共2款</span><!-- 金色山脈、蔚藍海岸 -->
                    </div>
                </a>
                <!-- <a href="products-details.php?sheet=calacatta" title="品名：蔚藍海岸" class="mycard sheet eternal marble white blue beige" style="background-image:url('images/products/sheet/calacatta/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="images/products/eternal.svg" alt="蔚藍海岸 calacatta">
                    </div>
                    <div class="card-foot">
                        <span>蔚藍海岸</span><span>共2款</span>
                    </div>
                </a> -->
                <a href="products-details.php?sheet=onyx" title="品名：Onyx系列" class="mycard sheet holy jade white brown blue" style="background-image:url('images/products/sheet/onyx/bg-img.webp');">
                    <div class="card-head">
                        <img class="img1" src="images/products/holy.svg" alt="白玉石 天堂玉 琥珀棕 onyx">
                    </div>
                    <div class="card-foot">
                        <span>Onyx系列</span><span>共3款</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=statuario" title="品名：雕刻白系列" class="mycard sheet holy marble white" style="background-image:url('images/products/sheet/statuario/bg-img.webp');">
                    <div class="card-head">
                        <img class="img1" src="images/products/holy.svg" alt="雕刻白 statuario">
                    </div>
                    <div class="card-foot">
                        <span>雕刻白系列</span><span>共2款</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=ambrato" title="品名：伯爵系列" class="mycard sheet holy marble white grey" style="background-image:url('images/products/sheet/ambrato/bg-img.webp');">
                    <div class="card-head">
                        <img class="img1" src="images/products/holy.svg" alt="伯爵 ambrato">
                    </div>
                    <div class="card-foot">
                        <span>伯爵系列</span><span>共2款</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=afion" title="品名：豐沙爾系列" class="mycard sheet holy slate white grey brown" style="background-image:url('images/products/sheet/afion/bg-img.webp');">
                    <div class="card-head">
                        <img class="img1" src="images/products/holy.svg" alt="豐沙爾 afion">
                    </div>
                    <div class="card-foot">
                        <span>豐沙爾系列</span><span>共3款</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=naxos" title="品名：納克索系列" class="mycard sheet holy marble grey black" style="background-image:url('images/products/sheet/naxos/bg-img.webp');">
                    <div class="card-head">
                        <img class="img1" src="images/products/holy.svg" alt="納克索 naxos">
                    </div>
                    <div class="card-foot">
                        <span>納克索系列</span><span>共2款</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=preston" title="品名：布蕾斯" class="mycard sheet holy marble terrazzo grey colourful" style="background-image:url('images/products/sheet/preston/bg-img.webp');">
                    <div class="card-head">
                        <img class="img1" src="images/products/holy.svg" alt="布蕾斯 preston">
                    </div>
                    <div class="card-foot">
                        <span>布蕾斯白</span><span>單一款</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=icaro" title="品名：伊卡露" class="mycard sheet holy marble grey" style="background-image:url('images/products/sheet/icaro/bg-img.webp');">
                    <div class="card-head">
                        <img class="img1" src="images/products/holy.svg" alt="伊卡露 icaro">
                    </div>
                    <div class="card-foot">
                        <span>伊卡露</span><span>單一款</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=gmyeo" title="品名：吉歐灰" class="mycard sheet holy terrazzo slate grey beige" style="background-image:url('images/products/sheet/geostone/bg-img.webp');">
                    <div class="card-head">
                        <img class="img1" src="images/products/holy.svg" alt="吉歐灰 geostone">
                    </div>
                    <div class="card-foot">
                        <span>吉歐灰</span><span>單一款</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=dommel" title="品名：朵美灰" class="mycard sheet holy terrazzo slate grey" style="background-image:url('images/products/sheet/dommel/bg-img.webp');">
                    <div class="card-head">
                        <img class="img1" src="images/products/holy.svg" alt="朵美灰 dommel">
                    </div>
                    <div class="card-foot">
                        <span>朵美灰</span><span>單一款</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=ravena" title="品名：拉文納" class="mycard sheet holy marble white" style="background-image:url('images/products/sheet/ravena/bg-img.webp');">
                    <div class="card-head">
                        <img class="img1" src="images/products/holy.svg" alt="拉文納 ravena">
                    </div>
                    <div class="card-foot">
                        <span>拉文納</span><span>單一款</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=monocromo" title="品名：純色系列" class="mycard sheet holy monochrome white black" style="background-image:url('images/products/sheet/monocromo/bg-img.webp');">
                    <div class="card-head">
                        <img class="img1" src="images/products/holy.svg" alt="純色 monocromo">
                    </div>
                    <div class="card-foot">
                        <span>純色系列</span><span>共2款</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=status" title="品名：斯塔圖" class="mycard sheet holy marble white" style="background-image:url('images/products/sheet/status/bg-img.webp');">
                    <div class="card-head">
                        <img class="img1" src="images/products/holy.svg" alt="斯塔圖 status">
                    </div>
                    <div class="card-foot">
                        <span>斯塔圖</span><span>單一款</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=belgium" title="品名：比利時" class="mycard sheet holy marble grey" style="background-image:url('images/products/sheet/belgium/bg-img.webp');">
                    <div class="card-head">
                        <img class="img1" src="images/products/holy.svg" alt="比利時 belgium">
                    </div>
                    <div class="card-foot">
                        <span>比利時灰</span><span>單一款</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=oasis" title="品名：卡薩布蘭卡" class="mycard sheet holy marble grey black beige" style="background-image:url('images/products/sheet/oasis/bg-img.webp');">
                    <div class="card-head">
                        <img class="img1" src="images/products/holy.svg" alt="卡薩布蘭卡 oasis">
                    </div>
                    <div class="card-foot">
                        <span>卡薩布蘭卡系列</span><span>共2款</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=buxy" title="品名：布朗系列" class="mycard sheet holy slate terrazzo grey beige" style="background-image:url('images/products/sheet/buxy/bg-img.webp');">
                    <div class="card-head">
                        <img class="img1" src="images/products/holy.svg" alt="布朗 buxy">
                    </div>
                    <div class="card-foot">
                        <span>布朗系列</span><span>共2款</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=nuvola" title="品名：克拉克白" class="mycard sheet holy marble white" style="background-image:url('images/products/sheet/nuvola/bg-img.webp');">
                    <div class="card-head">
                        <img class="img1" src="images/products/holy.svg" alt="克拉克白 nuvola">
                    </div>
                    <div class="card-foot">
                        <span>克拉克白</span><span>單一款</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=charm" title="品名：charm Ivory" class="mycard sheet holy marble beige" style="background-image:url('images/products/sheet/charm/bg-img.webp');">
                    <div class="card-head">
                        <img class="img1" src="images/products/holy.svg" alt="charm Ivory">
                    </div>
                    <div class="card-foot">
                        <span>charm Ivory</span><span>單一款</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=terrazzo" title="品名：Terrazzo Grey" class="mycard sheet holy terrazzo grey" style="background-image:url('images/products/sheet/terrazzo/bg-img.webp');">
                    <div class="card-head">
                        <img class="img1" src="images/products/holy.svg" alt="Terrazzo Grey">
                    </div>
                    <div class="card-foot">
                        <span>Terrazzo Grey</span><span>單一款</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=amarone" title="品名：Amarone系列" class="mycard sheet holy marble grey beige" style="background-image:url('images/products/sheet/amarone/bg-img.webp');">
                    <div class="card-head">
                        <img class="img1" src="images/products/holy.svg" alt="Amarone">
                    </div>
                    <div class="card-foot">
                        <span>Amarone系列</span><span>共2款</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=clinker" title="品名：Clinker系列" class="mycard sheet holy marble grey beige" style="background-image:url('images/products/sheet/clinker/bg-img.webp');">
                    <div class="card-head">
                        <img class="img1" src="images/products/holy.svg" alt="Clinker">
                    </div>
                    <div class="card-foot">
                        <span>Clinker系列</span><span>共2款</span>
                    </div>
                </a>
                
                <!-- <a href="products-details.php?sheet=ambrato" title="品名：伯爵系列" class="mycard sheet holy marble white grey" style="background-image:url('images/products/sheet/ambrato/bg-img.webp');">
                    <div class="card-head">
                        <img class="img1" src="images/products/holy.svg" alt="伯爵 ambrato">
                    </div>
                    <div class="card-foot">
                        <span>伯爵系列</span><span>共2款</span>
                    </div>
                </a> -->
                <a href="products-details.php?sheet=fumysion" title="品名：流沙灰" class="mycard sheet holy marble grey" style="background-image:url('images/products/sheet/myfusion/bg-img.webp');">
                    <div class="card-head">
                        <img class="img1" src="images/products/holy.svg" alt="流沙灰 myfusion">
                    </div>
                    <div class="card-foot">
                        <span>流沙灰</span><span>單一款</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=pulis" title="品名：富貴棕" class="mycard sheet holy marble brown" style="background-image:url('images/products/sheet/pulis/bg-img.webp');">
                    <div class="card-head">
                        <img class="img1" src="images/products/holy.svg" alt="富貴棕 pulis">
                    </div>
                    <div class="card-foot">
                        <span>富貴棕</span><span>單一款</span>
                    </div>
                </a>
                
                
                <div class="mycard mesa tile stone"><!-- trim -->
                    <h4 style="text-align: center;">陸續更新，敬請期待！！</h4>
                </div>
                <!-- agata --><!-- corner eternal holy -->
                <!-- <a class="mycard trim" style="background-image:url('images/products/sheet/fibre/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="images/products/lwis.svg" alt="">
                    </div>
                    <div class="card-foot">
                        <span>懷柏系列trim</span><span>共2款</span>
                    </div>
                </a> -->
                <a href="products-details.php?trim=ruina" class="mycard trim" style="background-image:url('images/products/trim/ruina/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="images/products/iwall.svg" alt="">
                    </div>
                    <div class="card-foot">
                        <span>往日系列</span><span>共4款</span>
                    </div>
                </a>
                <a href="products-details.php?trim=amazon" class="mycard trim" style="background-image:url('images/products/trim/amazon/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="images/products/iwall.svg" alt="">
                    </div>
                    <div class="card-foot">
                        <span>亞馬遜系列</span><span>共5款</span>
                    </div>
                </a>
                <a href="products-details.php?trim=hormigon3d" class="mycard trim" style="background-image:url('images/products/trim/hormigon3d/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="images/products/iwall.svg" alt="">
                    </div>
                    <div class="card-foot">
                        <span>洛夫灰系列</span><span>共2款</span>
                    </div>
                </a>
                <a href="products-details.php?trim=barbados" class="mycard trim" style="background-image:url('images/products/trim/barbados/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="images/products/iwall.svg" alt="">
                    </div>
                    <div class="card-foot">
                        <span>劈木系列</span><span>共5款</span>
                    </div>
                </a>
                <a href="products-details.php?trim=heritage" class="mycard trim" style="background-image:url('images/products/trim/heritage/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="images/products/iwall.svg" alt="">
                    </div>
                    <div class="card-foot">
                        <span>洛可可系列</span><span>共8款</span>
                    </div>
                </a>
                <a href="products-details.php?trim=vintage" class="mycard trim" style="background-image:url('images/products/trim/vintage/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="images/products/iwall.svg" alt="">
                    </div>
                    <div class="card-foot">
                        <span>光陰的故事系列</span><span>共4款</span>
                    </div>
                </a>
                <a href="products-details.php?trim=hormigon-plus" class="mycard trim" style="background-image:url('images/products/trim/hormigon-plus/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="images/products/iwall.svg" alt="">
                    </div>
                    <div class="card-foot">
                        <span>鏽板系列</span><span>共8款</span>
                    </div>
                </a>
                <a href="products-details.php?trim=versailles" class="mycard trim" style="background-image:url('images/products/trim/versailles/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="images/products/iwall.svg" alt="">
                    </div>
                    <div class="card-foot">
                        <span>卡蘿系列</span><span>共11款</span>
                    </div>
                </a>
                <a href="products-details.php?trim=forg" class="mycard trim" style="background-image:url('images/products/trim/forg/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="images/products/iwall.svg" alt="">
                    </div>
                    <div class="card-foot">
                        <span>城門</span><span>單一款</span>
                    </div>
                </a>
                <a href="products-details.php?trim=masonry" class="mycard trim" style="background-image:url('images/products/trim/masonry/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="images/products/iwall.svg" alt="">
                    </div>
                    <div class="card-foot">
                        <span>傳說</span><span>單一款</span>
                    </div>
                </a>
                <a href="products-details.php?trim=mayon" class="mycard trim" style="background-image:url('images/products/trim/mayon/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="images/products/iwall.svg" alt="">
                    </div>
                    <div class="card-foot">
                        <span>瑪雅系列</span><span>共3款</span>
                    </div>
                </a>
            </div>
        </div>
        <button onclick="topFunction()" class="gotop" id="myBtn" title="Go to top"><span class="material-symbols-rounded">vertical_align_top</span></button>
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
    </main>
    <?php include("fb-messenger.php"); ?>
    <!-- <footer>
        <div class="abc"><span class="material-symbols-rounded">sms</span></div>
    </footer> -->
</body>
</html>
<script>
    $("header .topnav a").eq(4).addClass("active");
    $("aside .wrap a").eq(1).addClass("active");
    // $(".mycard").hover(function(){
    //     this.css('background','center / 150% url(https://obs.line-scdn.net/0hqx9VgFz3LlcELzgU-_tRAD55LTg3Qz1UYBl_VEdBcGAoHGxWO0BjZCV8cmMgHmkJbUpoMSUuNWZ8GGkBME9j/w644);')
    // });
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

