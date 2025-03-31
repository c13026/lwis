<!DOCTYPE html>
<html lang="en">

<head>
    <title>Products|LWIS</title>
    <!-- <meta name="keywords" content="磁磚,瓷磚,藝術,拼貼,裝潢,室內設計,室內,室外,Coating,伊斯曼,精品磁磚,進口Coating,進口磁磚,GRAF,Ismanity,伊斯曼,a-cornerstone,可樂石,eternal stone,達理石,a-holystone,活麗石">α-cornerstone -->
    <meta name="description" content="The products of the Living Water In Spring(LWIS) International Co., Ltd. can be divided Large Slabs tiles,polished tiles,Quartz glazed tiles,High-gloss glazed wall tiles,Exterior wall tiles...etc.">

    <meta property="og:title" content="Products|LWIS International Co., Ltd.">
    <meta property="og:description" content="The products of the Living Water In Spring(LWIS) International Co., Ltd. can be divided Large Slabs tiles,polished tiles,Quartz glazed tiles,High-gloss glazed wall tiles,Exterior wall tiles...etc.">
    <!-- <meta property="og:url" content="https://lwis.com.tw/"> -->
    <?php include("all-head.php"); ?>
    <link rel="stylesheet" href="../css/products-btn.css">
    <link rel="stylesheet" href="../css/products.css">
    <script src="../js/products-btn.js"></script>
    <script src="../js/products.js"></script>
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
</head>

<body>
    <?php include("aside.php"); ?>
    <main>
        <div class="mycontainer">
            <h3>Products</h3>
            <div class="btns" >
                <div class="scrollnav"  id="myInout0">
                    <button class="btn mybtn active" onclick="filterSelection('sheet'),mysheet()">Large Slabs</button><!-- href="products.php?category=sheet" -->
                    <button class="btn mybtn" onclick="filterSelection('mesa'),mymesa()">Countertops</button>
                    <button class="btn mybtn" onclick="filterSelection('tile'),mytile()">Tiles</button>
                    <!-- <button class="btn mybtn" onclick="filterSelection('stone'),mystone()">石板</button> -->
                    <button class="btn mybtn" onclick="filterSelection('trim'),mytrim()">Wall Panels</button>
                    <a class="btn mybtn" href="https://ismanity.com/product.php" target="_blank">Coating</a>
                    <a class="btn mybtn" href="https://www.livingwater-graf.com.tw/" target="_blank">GRAF</a>
                </div>
                <div class="scrollnav" id="myInout1">
                    Choose A :
                    <button class="btn mybtna" onclick="mycolor();">Color</button>
                    <button class="btn mybtna" onclick="brand();">Brand</button>
                    <button class="btn mybtna" onclick="mytype1();">Pattern</button>
                    <!-- <button class="btn mybtnb"><span class="material-symbols-outlined">palette</span></button>
                    <button class="btn mybtnb"><span class="material-symbols-outlined">image</span></button> -->
                </div>
                <div class="scrollnav" id="myInout2" style="display:none;">
                    <button class="btn mybtna" onclick="undo();"><span class="material-symbols-outlined">undo</span></button>
                    <button class="btn mybtn2" onclick="filterSelection('sheet'),mysheet1()">all</button>
                    <button class="btn mybtn2" onclick="filterSelection('white'),white()">White</button>
                    <button class="btn mybtn2" onclick="filterSelection('grey'),grey()">Grey</button>
                    <button class="btn mybtn2" onclick="filterSelection('black'),black()">Black</button>
                    <button class="btn mybtn2" onclick="filterSelection('brown'),brown()">Brown</button>
                    <button class="btn mybtn2" onclick="filterSelection('blue'),blue()">Blue</button>
                    <button class="btn mybtn2" onclick="filterSelection('green'),green()">Green</button>
                    <button class="btn mybtn2" onclick="filterSelection('beige'),beige()">Beige</button>
                    <button class="btn mybtn2" onclick="filterSelection('colourful'),colourful()">Other</button>
                </div>
                <div class="scrollnav" id="myInout3" style="display:none;">
                    <!-- <button class="btn mybtn3">all</button>
                    <button class="btn mybtn3">1</button>
                    <button class="btn mybtn3">2</button>
                    <button class="btn mybtn3">3</button> -->
                </div>
                <div class="scrollnav" id="myInout4" style="display:none;">
                    <button class="btn mybtna" onclick="undo();"><span class="material-symbols-outlined">undo</span></button>
                    <button class="btn mybtn4" onclick="filterSelection('sheet'),mysheet1()">all</button>
                    <button class="btn mybtn4" onclick="filterSelection('corner'),corner()">α-cornerstone</button>
                    <button class="btn mybtn4" onclick="filterSelection('eternal'),eternal()">Eternal stone</button>
                    <button class="btn mybtn4" onclick="filterSelection('holy'),holy()">α-Holystone</button>
                </div>
                <div class="scrollnav" id="myInout5" style="display:none;">
                    <button class="btn mybtna" onclick="undo();"><span class="material-symbols-outlined">undo</span></button>
                    <button class="btn mybtn5" onclick="filterSelection('sheet'),mysheet1()">all</button>
                    <button class="btn mybtn5" onclick="filterSelection('monochrome'),monochrome()">Monochrome</button>
                    <button class="btn mybtn5" onclick="filterSelection('marble'),marble()">Marble</button>
                    <button class="btn mybtn5" onclick="filterSelection('slate'),slate()">Stone</button>
                    <button class="btn mybtn5" onclick="filterSelection('jade'),jade()">Onyx</button>
                    <!-- <button class="btn mybtn5" onclick="filterSelection('terrazzo'),terrazzo()">磨石子?</button> -->
                    <button class="btn mybtn5" onclick="filterSelection('woodgrain'),woodgrain()">Wood</button>
                    <button class="btn mybtn5" onclick="filterSelection('metallook'),metallook()">Metal</button>
                    <button class="btn mybtn5" onclick="filterSelection('other'),other()">Special</button>
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
                    <?php }elseif($_GET["type"] == "terrazzo"){ ?>
                        <script>
                            $(function(){
                                filterSelection('terrazzo');
                                terrazzo();
                            });
                        </script>
                    <?php }elseif($_GET["type"] == "jade"){ ?>
                        <script>
                            $(function(){
                                filterSelection('jade');
                                jade();
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
                                $("#myInout0 .mybtn").eq(3).addClass("active");
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
            <div class="divs row"><!-- mycard 分類 品牌 類型 --> <!-- a標籤裡放 title="Products : 懷柏 Series　顏色：黑、白　尺寸：100×250×0.6cm" --><!-- 若需增加顏色分類按鍵 要在a標籤添加id,多款時替換篩選後顏色相符的該款單磚背景 -->
            <a href="products-details.php?sheet=onice" title="Products : onice" class="mycard sheet corner jade blue" style="background-image:url('../images/products/sheet/onice/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="../images/products/corner.svg" alt="onice">
                    </div>
                    <div class="card-foot">
                        <span>onice</span><span>1 Face</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=lux" title="Products : lux" class="mycard sheet corner marble black" style="background-image:url('../images/products/sheet/lux/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="../images/products/corner.svg" alt="lux">
                    </div>
                    <div class="card-foot">
                        <span>lux</span><span>1 Face</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=sabbia" title="Products : sabbia" class="mycard sheet corner marble beige" style="background-image:url('../images/products/sheet/sabbia/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="../images/products/corner.svg" alt="sabbia">
                    </div>
                    <div class="card-foot">
                        <span>sabbia</span><span>1 Face</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=magallanes" title="Products : magallanes" class="mycard sheet corner marble black blue colourful " style="background-image:url('../images/products/sheet/magallanes/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="../images/products/corner.svg" alt="magallanes">
                    </div>
                    <div class="card-foot">
                        <span>magallanes</span><span>1 Face</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=luna" title="Products : luna" class="mycard sheet corner marble white " style="background-image:url('../images/products/sheet/luna/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="../images/products/corner.svg" alt="luna">
                    </div>
                    <div class="card-foot">
                        <span>luna</span><span>1 Face</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=icabluero" title="Products : icaroblue" class="mycard sheet corner marble blue " style="background-image:url('../images/products/sheet/icaroblue/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="../images/products/corner.svg" alt="icaroblue">
                    </div>
                    <div class="card-foot">
                        <span>icaroblue</span><span>1 Face</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=goldhard" title="Products : gold hard" class="mycard sheet corner marble white beige " style="background-image:url('../images/products/sheet/goldhard/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="../images/products/corner.svg" alt="goldhard">
                    </div>
                    <div class="card-foot">
                        <span>goldhard</span><span>1 Face</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=fibre" title="Products : Fibre Series" class="mycard sheet corner monochrome white black" style="background-image:url('../images/products/sheet/fibre/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="../images/products/corner.svg" alt="Fibre">
                    </div>
                    <div class="card-foot">
                        <span>Fibre Series</span><span>2 Faces</span><!-- 2 Faces -->
                    </div>
                </a>
                <a href="products-details.php?sheet=morandi" title="Products : The New Blacks Series" class="mycard sheet corner monochrome black brown green blue" style="background-image:url('../images/products/sheet/morandi/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="../images/products/corner.svg" alt="The New Blacks">
                    </div>
                    <div class="card-foot">
                        <span>The New Blacks Series</span><span>5 Faces</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=geo" title="Products : Geo Series" class="mycard sheet corner slate brown beige" style="background-image:url('../images/products/sheet/geo/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="../images/products/corner.svg" alt="geo">
                    </div>
                    <div class="card-foot">
                        <span>Geo Series</span><span>2 Faces</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=storm" title="Products : Storm Series" class="mycard sheet corner marble grey black" style="background-image:url('../images/products/sheet/storm/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="../images/products/corner.svg" alt="storm">
                    </div>
                    <div class="card-foot">
                        <span>Storm Series</span><span>2 Faces</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=brazil" title="Products : Brazil Super White" class="mycard sheet corner marble white grey green" style="background-image:url('../images/products/sheet/brazil/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="../images/products/corner.svg" alt="Brazil Super White">
                    </div>
                    <div class="card-foot">
                        <span>Brazil Super White</span><span>1 Face</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=umbra" title="Products : Umbra" class="mycard sheet corner marble brown" style="background-image:url('../images/products/sheet/umbra/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="../images/products/corner.svg" alt="Umbra">
                    </div>
                    <div class="card-foot">
                        <span>Umbra</span><span>1 Face</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=syros" title="Products : Syros" class="mycard sheet corner marble white" style="background-image:url('../images/products/sheet/syros/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="../images/products/corner.svg" alt="Syros">
                    </div>
                    <div class="card-foot">
                        <span>Syros</span><span>1 Face</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=touche" title="Products : Touche" class="mycard sheet corner marble white" style="background-image:url('../images/products/sheet/touche/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="../images/products/corner.svg" alt="Touche">
                    </div>
                    <div class="card-foot">
                        <span>Touche</span><span>1 Face</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=jurassic" title="Products : Jurassic Series" class="mycard sheet corner marble grey black" style="background-image:url('../images/products/sheet/jurassic/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="../images/products/corner.svg" alt="Jurassic">
                    </div>
                    <div class="card-foot">
                        <span>Jurassic Series</span><span>3 Faces</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=palladium" title="Products : Palladium Series" class="mycard sheet corner metallook other black brown blue beige" style="background-image:url('../images/products/sheet/palladium/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="../images/products/corner.svg" alt="Palladium">
                    </div>
                    <div class="card-foot">
                        <span>Palladium Series</span><span>4 Faces</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=pompeia" title="Products : Pompeia Series" class="mycard sheet corner other grey" style="background-image:url('../images/products/sheet/pompeia/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="../images/products/corner.svg" alt="Pompeia">
                    </div>
                    <div class="card-foot">
                        <span>Pompeia Series</span><span>2 Faces</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=jasper" title="Products : Jasper" class="mycard sheet corner slate brown beige" style="background-image:url('../images/products/sheet/jasper/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="../images/products/corner.svg" alt="Jasper">
                    </div>
                    <div class="card-foot">
                        <span>Jasper</span><span>1 Face</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=iseo" title="Products : Iseo" class="mycard sheet corner terrazzo grey" style="background-image:url('../images/products/sheet/iseo/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="../images/products/corner.svg" alt="Iseo">
                    </div>
                    <div class="card-foot">
                        <span>Iseo</span><span>1 Face</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=petra" title="Products : Petra" class="mycard sheet corner slate beige" style="background-image:url('../images/products/sheet/petra/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="../images/products/corner.svg" alt="Petra">
                    </div>
                    <div class="card-foot">
                        <span>Petra</span><span>1 Face</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=azalai" title="Products : Azalai" class="mycard sheet corner marble black" style="background-image:url('../images/products/sheet/azalai/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="../images/products/corner.svg" alt="Azalai">
                    </div>
                    <div class="card-foot">
                        <span>Azalai</span><span>1 Face</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=arizona" title="Products : Arizona" class="mycard sheet corner woodgrain brown" style="background-image:url('../images/products/sheet/arizona/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="../images/products/corner.svg" alt="Arizona">
                    </div>
                    <div class="card-foot">
                        <span>Arizona</span><span>1 Face</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=fusion" title="Products : Fusion" class="mycard sheet corner metallook green" style="background-image:url('../images/products/sheet/fusion/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="../images/products/corner.svg" alt="Fusion">
                    </div>
                    <div class="card-foot">
                        <span>Fusion</span><span>1 Face</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=pandora" title="Products : Pandora Series" class="mycard sheet corner marble white" style="background-image:url('../images/products/sheet/pandora/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="../images/products/corner.svg" alt="Pandora">
                    </div>
                    <div class="card-foot">
                        <span>Pandora Series</span><span>1 Face</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=portobello" title="Products : Portobello" class="mycard sheet corner marble white" style="background-image:url('../images/products/sheet/portobello/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="../images/products/corner.svg" alt="Portobello">
                    </div>
                    <div class="card-foot">
                        <span>Portobello</span><span>1 Face</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=paonazzo" title="Products : Calacatta Paonazzo" class="mycard sheet corner marble white" style="background-image:url('../images/products/sheet/paonazzo/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="../images/products/corner.svg" alt="Calacatta Paonazzo">
                    </div>
                    <div class="card-foot">
                        <span>Calacatta Paonazzo</span><span>1 Face</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=patagonia" title="Products : Patagonia" class="mycard sheet corner marble white colourful" style="background-image:url('../images/products/sheet/patagonia/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="../images/products/corner.svg" alt="Patagonia">
                    </div>
                    <div class="card-foot">
                        <span>Patagonia</span><span>1 Face</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=eternal" title="Products : Eternal Blue" class="mycard sheet corner jade blue colourful" style="background-image:url('../images/products/sheet/eternal/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="../images/products/corner.svg" alt="Eternal Blue">
                    </div>
                    <div class="card-foot">
                        <span>Eternal Blue</span><span>1 Face</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=cementproject" title="Products : Cement Series" class="mycard sheet corner woodgrain other beige grey" style="background-image:url('../images/products/sheet/cementproject/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="../images/products/corner.svg" alt="Cement">
                    </div>
                    <div class="card-foot">
                        <span>Cement Series</span><span>3 Faces</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=herbarium" title="Products : Paint The Herbarium" class="mycard sheet corner other white grey colourful" style="background-image:url('../images/products/sheet/herbarium/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="../images/products/corner.svg" alt="Paint The Herbarium">
                    </div>
                    <div class="card-foot">
                        <span>Paint The Herbarium</span><span>1 Face</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=house" title="Products : Paint The house" class="mycard sheet corner other white colourful" style="background-image:url('../images/products/sheet/house/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="../images/products/corner.svg" alt="Paint The house">
                    </div>
                    <div class="card-foot">
                        <span>Paint The house</span><span>1 Face</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=incertum" title="Products : Incertum Light" class="mycard sheet corner marble other white colourful" style="background-image:url('../images/products/sheet/incertum/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="../images/products/corner.svg" alt="Incertum Light">
                    </div>
                    <div class="card-foot">
                        <span>Incertum Light</span><span>1 Face</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=parker" title="Products : Parker White" class="mycard sheet corner marble white grey" style="background-image:url('../images/products/sheet/parker/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="../images/products/corner.svg" alt="Parker White">
                    </div>
                    <div class="card-foot">
                        <span>Parker White</span><span>1 Face</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=modelo" title="Products : Phoenix Blue Series" class="mycard sheet corner other blue" style="background-image:url('../images/products/sheet/modelo/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="../images/products/corner.svg" alt="Phoenix Blue">
                    </div>
                    <div class="card-foot">
                        <span>Phoenix Blue Series</span><span>2 Faces</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=venezia" title="Products : Venezia Doge Series" class="mycard sheet corner other colourful" style="background-image:url('../images/products/sheet/venezia/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="../images/products/corner.svg" alt="Venezia Doge">
                    </div>
                    <div class="card-foot">
                        <span>Venezia Doge</span><span>1 Face</span>
                    </div>
                </a>
                <!--  -->
                <a href="products-details.php?sheet=clang" title="Products : clang" class="mycard sheet eternal marble grey" style="background-image:url('../images/products/sheet/clang/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="../images/products/eternal.svg" alt="clang">
                    </div>
                    <div class="card-foot">
                        <span>clang</span><span>1 Face</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=rumble" title="Products : rumble" class="mycard sheet eternal jade black" style="background-image:url('../images/products/sheet/rumble/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="../images/products/eternal.svg" alt="rumble">
                    </div>
                    <div class="card-foot">
                        <span>rumble</span><span>1 Face</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=reef" title="Products : reef" class="mycard sheet eternal marble brown green" style="background-image:url('../images/products/sheet/reef/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="../images/products/eternal.svg" alt="reef">
                    </div>
                    <div class="card-foot">
                        <span>reef</span><span>1 Face</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=uluru" title="Products : uluru" class="mycard sheet eternal marble grey black" style="background-image:url('../images/products/sheet/uluru/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="../images/products/eternal.svg" alt="uluru">
                    </div>
                    <div class="card-foot">
                        <span>uluru</span><span>1 Face</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=indi" title="Products : indi" class="mycard sheet eternal marble white beige" style="background-image:url('../images/products/sheet/indi/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="../images/products/eternal.svg" alt="indi">
                    </div>
                    <div class="card-foot">
                        <span>indi</span><span>1 Face</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=magnetic" title="Products : Magnetic Series" class="mycard sheet eternal metallook white grey black brown blue green" style="background-image:url('../images/products/sheet/magnetic/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="../images/products/eternal.svg" alt="Magnetic">
                    </div>
                    <div class="card-foot">
                        <span>Magnetic Series</span><span>6 Faces</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=pierre" title="Products : Pierre Black" class="mycard sheet eternal marble black" style="background-image:url('../images/products/sheet/pierre/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="../images/products/eternal.svg" alt="Pierre Black">
                    </div>
                    <div class="card-foot">
                        <span>Pierre Black</span><span>1 Face</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=amazzonite" title="Products : Amazzonite" class="mycard sheet eternal jade green" style="background-image:url('../images/products/sheet/amazzonite/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="../images/products/eternal.svg" alt="Amazzonite">
                    </div>
                    <div class="card-foot">
                        <span>Amazzonite</span><span>1 Face</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=cenerino" title="Products : Calacatta Cenerino" class="mycard sheet eternal marble grey black" style="background-image:url('../images/products/sheet/cenerino/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="../images/products/eternal.svg" alt="Calacatta Cenerino">
                    </div>
                    <div class="card-foot">
                        <span>Calacatta Cenerino</span><span>1 Face</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=marquina" title="Products : Marquina Black" class="mycard sheet eternal marble black" style="background-image:url('../images/products/sheet/marquina/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="../images/products/eternal.svg" alt="Marquina Black">
                    </div>
                    <div class="card-foot">
                        <span>Marquina Black</span><span>1 Face</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=agata" title="Products : Agata Series" class="mycard sheet eternal jade white blue" style="background-image:url('../images/products/sheet/agata/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="../images/products/eternal.svg" alt="Agata">
                    </div>
                    <div class="card-foot">
                        <span>Agata Series</span><span>2 Faces</span>
                    </div>
                </a>
                
                <a href="products-details.php?sheet=agathos" title="Products : Agathos Series" class="mycard sheet eternal slate black brown" style="background-image:url('../images/products/sheet/agathos/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="../images/products/eternal.svg" alt="Agathos">
                    </div>
                    <div class="card-foot">
                        <span>Agathos Series</span><span>2 Faces</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=calacatta" title="Products : Calacatta Series" class="mycard sheet eternal marble white blue beige" style="background-image:url('../images/products/sheet/calacatta/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="../images/products/eternal.svg" alt="Calacatta">
                    </div>
                    <div class="card-foot">
                        <span>Calacatta Series</span><span>2 Faces</span><!-- 金色山脈、蔚藍海岸 -->
                    </div>
                </a>
                <!-- <a href="products-details.php?sheet=calacatta" title="Products : 蔚藍海岸" class="mycard sheet eternal marble white blue beige" style="background-image:url('../images/products/sheet/calacatta/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="../images/products/eternal.svg" alt="蔚藍海岸 calacatta">
                    </div>
                    <div class="card-foot">
                        <span>蔚藍海岸</span><span>2 Faces</span>
                    </div>
                </a> -->
                <a href="products-details.php?sheet=onyx" title="Products : Onyx Series" class="mycard sheet holy jade white brown blue" style="background-image:url('../images/products/sheet/onyx/bg-img.webp');">
                    <div class="card-head">
                        <img class="img1" src="../images/products/holy.svg" alt="Onyx">
                    </div>
                    <div class="card-foot">
                        <span>Onyx Series</span><span>3 Faces</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=statuario" title="Products : Statuario Imperiale Series" class="mycard sheet holy marble white" style="background-image:url('../images/products/sheet/statuario/bg-img.webp');">
                    <div class="card-head">
                        <img class="img1" src="../images/products/holy.svg" alt="Statuario Imperiale">
                    </div>
                    <div class="card-foot">
                        <span>Statuario Imperiale Series</span><span>2 Faces</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=ambrato" title="Products : Ambrato Series" class="mycard sheet holy marble white grey" style="background-image:url('../images/products/sheet/ambrato/bg-img.webp');">
                    <div class="card-head">
                        <img class="img1" src="../images/products/holy.svg" alt="Ambrato">
                    </div>
                    <div class="card-foot">
                        <span>Ambrato Series</span><span>2 Faces</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=afion" title="Products : Afion Series" class="mycard sheet holy slate white grey brown" style="background-image:url('../images/products/sheet/afion/mainnail/01.webp');">
                    <div class="card-head">
                        <img class="img1" src="../images/products/holy.svg" alt="Afion">
                    </div>
                    <div class="card-foot">
                        <span>Afion Series</span><span>3 Faces</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=naxos" title="Products : Naxos Series" class="mycard sheet holy marble grey black" style="background-image:url('../images/products/sheet/naxos/bg-img.webp');">
                    <div class="card-head">
                        <img class="img1" src="../images/products/holy.svg" alt="Naxos">
                    </div>
                    <div class="card-foot">
                        <span>Naxos Series</span><span>2 Faces</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=preston" title="Products : Preston Pulido" class="mycard sheet holy marble terrazzo grey colourful" style="background-image:url('../images/products/sheet/preston/bg-img.webp');">
                    <div class="card-head">
                        <img class="img1" src="../images/products/holy.svg" alt="Preston Pulido">
                    </div>
                    <div class="card-foot">
                        <span>Preston Pulido</span><span>1 Face</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=icaro" title="Products : Icaro Pulido Series" class="mycard sheet holy marble grey" style="background-image:url('../images/products/sheet/icaro/bg-img.webp');">
                    <div class="card-head">
                        <img class="img1" src="../images/products/holy.svg" alt="Icaro Pulido">
                    </div>
                    <div class="card-foot">
                        <span>Icaro Pulido Series</span><span>1 Face</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=gmyeo" title="Products : Geostone Grey" class="mycard sheet holy terrazzo slate grey beige" style="background-image:url('../images/products/sheet/geostone/bg-img.webp');">
                    <div class="card-head">
                        <img class="img1" src="../images/products/holy.svg" alt="Geostone Grey">
                    </div>
                    <div class="card-foot">
                        <span>Geostone Grey</span><span>1 Face</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=dommel" title="Products : Dommel Grey" class="mycard sheet holy terrazzo slate grey" style="background-image:url('../images/products/sheet/dommel/bg-img.webp');">
                    <div class="card-head">
                        <img class="img1" src="../images/products/holy.svg" alt="Dommel Grey">
                    </div>
                    <div class="card-foot">
                        <span>Dommel Grey</span><span>1 Face</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=ravena" title="Products : Ravena" class="mycard sheet holy marble white" style="background-image:url('../images/products/sheet/ravena/bg-img.webp');">
                    <div class="card-head">
                        <img class="img1" src="../images/products/holy.svg" alt="Ravena">
                    </div>
                    <div class="card-foot">
                        <span>Ravena</span><span>1 Face</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=monocromo" title="Products : Monocromo Series" class="mycard sheet holy monochrome white black" style="background-image:url('../images/products/sheet/monocromo/bg-img.webp');">
                    <div class="card-head">
                        <img class="img1" src="../images/products/holy.svg" alt="Monocromo">
                    </div>
                    <div class="card-foot">
                        <span>Monocromo Series</span><span>2 Faces</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=status" title="Products : Status" class="mycard sheet holy marble white" style="background-image:url('../images/products/sheet/status/bg-img.webp');">
                    <div class="card-head">
                        <img class="img1" src="../images/products/holy.svg" alt="Status">
                    </div>
                    <div class="card-foot">
                        <span>Status</span><span>1 Face</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=belgium" title="Products : Belgium Grey" class="mycard sheet holy marble grey" style="background-image:url('../images/products/sheet/belgium/bg-img.webp');">
                    <div class="card-head">
                        <img class="img1" src="../images/products/holy.svg" alt="Belgium Grey">
                    </div>
                    <div class="card-foot">
                        <span>Belgium Grey</span><span>1 Face</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=oasis" title="Products : Oasis Series" class="mycard sheet holy marble grey black beige" style="background-image:url('../images/products/sheet/oasis/bg-img.webp');">
                    <div class="card-head">
                        <img class="img1" src="../images/products/holy.svg" alt="Oasis">
                    </div>
                    <div class="card-foot">
                        <span>Oasis Series</span><span>2 Faces</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=buxy" title="Products : Buxy Series" class="mycard sheet holy slate terrazzo grey beige" style="background-image:url('../images/products/sheet/buxy/bg-img.webp');">
                    <div class="card-head">
                        <img class="img1" src="../images/products/holy.svg" alt="Buxy">
                    </div>
                    <div class="card-foot">
                        <span>Buxy Series</span><span>2 Faces</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=nuvola" title="Products : Nuvola" class="mycard sheet holy marble white" style="background-image:url('../images/products/sheet/nuvola/bg-img.webp');">
                    <div class="card-head">
                        <img class="img1" src="../images/products/holy.svg" alt="Nuvola">
                    </div>
                    <div class="card-foot">
                        <span>Nuvola</span><span>1 Face</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=charm" title="Products : Charm Ivory" class="mycard sheet holy marble beige" style="background-image:url('../images/products/sheet/charm/bg-img.webp');">
                    <div class="card-head">
                        <img class="img1" src="../images/products/holy.svg" alt="Charm Ivory">
                    </div>
                    <div class="card-foot">
                        <span>Charm Ivory</span><span>1 Face</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=terrazzo" title="Products : Terrazzo Grey" class="mycard sheet holy terrazzo grey" style="background-image:url('../images/products/sheet/terrazzo/bg-img.webp');">
                    <div class="card-head">
                        <img class="img1" src="../images/products/holy.svg" alt="Terrazzo Grey">
                    </div>
                    <div class="card-foot">
                        <span>Terrazzo Grey</span><span>1 Face</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=amarone" title="Products : Amarone Series" class="mycard sheet holy marble grey beige" style="background-image:url('../images/products/sheet/amarone/bg-img.webp');">
                    <div class="card-head">
                        <img class="img1" src="../images/products/holy.svg" alt="Amarone">
                    </div>
                    <div class="card-foot">
                        <span>Amarone Series</span><span>2 Faces</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=clinker" title="Products : Clinker Series" class="mycard sheet holy marble grey beige" style="background-image:url('../images/products/sheet/clinker/bg-img.webp');">
                    <div class="card-head">
                        <img class="img1" src="../images/products/holy.svg" alt="Clinker">
                    </div>
                    <div class="card-foot">
                        <span>Clinker Series</span><span>2 Faces</span>
                    </div>
                </a>
                
                <!-- <a href="products-details.php?sheet=ambrato" title="Products : 伯爵 Series" class="mycard sheet holy marble white grey" style="background-image:url('../images/products/sheet/ambrato/bg-img.webp');">
                    <div class="card-head">
                        <img class="img1" src="../images/products/holy.svg" alt="伯爵 ambrato">
                    </div>
                    <div class="card-foot">
                        <span>伯爵 Series</span><span>2 Faces</span>
                    </div>
                </a> -->
                <a href="products-details.php?sheet=fumysion" title="Products : Fusion Grey" class="mycard sheet holy marble grey" style="background-image:url('../images/products/sheet/myfusion/bg-img.webp');">
                    <div class="card-head">
                        <img class="img1" src="../images/products/holy.svg" alt="Fusion Grey">
                    </div>
                    <div class="card-foot">
                        <span>Fusion Grey</span><span>1 Face</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=pulis" title="Products : Pulpis Extra Brown" class="mycard sheet holy marble brown" style="background-image:url('../images/products/sheet/pulis/bg-img.webp');">
                    <div class="card-head">
                        <img class="img1" src="../images/products/holy.svg" alt="Pulpis Extra Brown">
                    </div>
                    <div class="card-foot">
                        <span>Pulpis Extra Brown</span><span>1 Face</span>
                    </div>
                </a>
                
                
                <div class="mycard mesa tile stone nothing">
                    <h4>Updates will continue, so stay tuned ! !</h4>
                </div>
                <!-- agata --><!-- corner eternal holy -->
                <!-- <a class="mycard trim" style="background-image:url('../images/products/sheet/fibre/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="../images/products/lwis.svg" alt="">
                    </div>
                    <div class="card-foot">
                        <span>懷柏 Seriestrim</span><span>2 Faces</span>
                    </div>
                </a> -->
                <a href="products-details.php?trim=ruina" title="Products : Ruina Series" class="mycard trim" style="background-image:url('../images/products/trim/ruina/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="../images/products/iwall.svg" alt="Ruina">
                    </div>
                    <div class="card-foot">
                        <span>Ruina Series</span><span>4 Faces</span>
                    </div>
                </a>
                <a href="products-details.php?trim=amazon" title="Products : Amazon Series" class="mycard trim" style="background-image:url('../images/products/trim/amazon/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="../images/products/iwall.svg" alt="Amazon">
                    </div>
                    <div class="card-foot">
                        <span>Amazon Series</span><span>5 Faces</span>
                    </div>
                </a>
                <a href="products-details.php?trim=hormigon3d" title="Products : Hormigon Grey Series" class="mycard trim" style="background-image:url('../images/products/trim/hormigon3d/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="../images/products/iwall.svg" alt="Hormigon Grey">
                    </div>
                    <div class="card-foot">
                        <span>Hormigon Grey Series</span><span>2 Faces</span>
                    </div>
                </a>
                <a href="products-details.php?trim=barbados" title="Products : Barbados Series" class="mycard trim" style="background-image:url('../images/products/trim/barbados/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="../images/products/iwall.svg" alt="Barbados">
                    </div>
                    <div class="card-foot">
                        <span>Barbados Series</span><span>5 Faces</span>
                    </div>
                </a>
                <a href="products-details.php?trim=heritage" title="Products : Heritage Series" class="mycard trim" style="background-image:url('../images/products/trim/heritage/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="../images/products/iwall.svg" alt="Heritage">
                    </div>
                    <div class="card-foot">
                        <span>Heritage Series</span><span>8 Faces</span>
                    </div>
                </a>
                <a href="products-details.php?trim=vintage" title="Products : Vintage Series" class="mycard trim" style="background-image:url('../images/products/trim/vintage/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="../images/products/iwall.svg" alt="Vintage">
                    </div>
                    <div class="card-foot">
                        <span>Vintage Series</span><span>4 Faces</span>
                    </div>
                </a>
                <a href="products-details.php?trim=hormigon-plus" title="Products : Hormigon Plus Series" class="mycard trim" style="background-image:url('../images/products/trim/hormigon-plus/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="../images/products/iwall.svg" alt="Hormigon Plus">
                    </div>
                    <div class="card-foot">
                        <span>Hormigon Plus Series</span><span>8 Faces</span>
                    </div>
                </a>
                <a href="products-details.php?trim=versailles" title="Products : Versailles Series" class="mycard trim" style="background-image:url('../images/products/trim/versailles/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="../images/products/iwall.svg" alt="Versailles">
                    </div>
                    <div class="card-foot">
                        <span>Versailles Series</span><span>11 Faces</span>
                    </div>
                </a>
                <a href="products-details.php?trim=forg" title="Products : Forg Bronze" class="mycard trim" style="background-image:url('../images/products/trim/forg/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="../images/products/iwall.svg" alt="Forg Bronze">
                    </div>
                    <div class="card-foot">
                        <span>Forg Bronze</span><span>1 Face</span>
                    </div>
                </a>
                <a href="products-details.php?trim=masonry" title="Products : Masonry Moss" class="mycard trim" style="background-image:url('../images/products/trim/masonry/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="../images/products/iwall.svg" alt="Masonry Moss">
                    </div>
                    <div class="card-foot">
                        <span>Masonry Moss</span><span>1 Face</span>
                    </div>
                </a>
                <a href="products-details.php?trim=mayon" title="Products : Mayon Series" class="mycard trim" style="background-image:url('../images/products/trim/mayon/bg-img.webp');">
                    <div class="card-head">
                        <img class="img" src="../images/products/iwall.svg" alt="Mayon">
                    </div>
                    <div class="card-foot">
                        <span>Mayon Series</span><span>3 Faces</span>
                    </div>
                </a>
            </div>
        </div>
        <button onclick="topFunction()" class="gotop" id="myBtn" title="Products : Go to top">TOP</button>
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

