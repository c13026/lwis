<!DOCTYPE html>
<html lang="en">

<head>
    <title>活水泉源國際股份有限公司</title>
    <?php include("all-head.php"); ?>
    <link rel="stylesheet" href="css/products-btn.css">
    <link rel="stylesheet" href="css/products.css">
    <script src="js/products-btn.js"></script>
    <script src="js/products.js"></script>
</head>

<body>
    <?php include("aside.php"); ?>
    <main>
        <div class="mycontainer">
            <h3>Products | 產品系列</h3>
            <div class="btns" >
                <div class="scrollnav"  id="myInout0">
                    <button class="btn mybtn active" onclick="filterSelection('sheet'),mysheet()">薄板</button><!-- href="products.php?category=sheet" -->
                    <button class="btn mybtn" onclick="filterSelection('mesa'),mymesa()">檯面</button>
                    <button class="btn mybtn" onclick="filterSelection('tile'),mytile()">磁磚</button>
                    <button class="btn mybtn" onclick="filterSelection('stone'),mystone()">石板</button>
                    <button class="btn mybtn" onclick="filterSelection('trim'),mytrim()">飾板</button>
                    <a class="btn mybtn" href="https://ismanity.com/" target="_blank">塗料</a>
                    <a class="btn mybtn" href="https://www.livingwater-graf.com.tw/" target="_blank">雨水回收</a>
                </div>
                <div class="scrollnav" id="myInout1">
                    <button class="btn mybtna" onclick="brand();"><span class="material-symbols-outlined">autorenew</span></button>
                    <button class="btn mybtn1" onclick="filterSelection('sheet')">all</button>
                    <button class="btn mybtn1" onclick="filterSelection('monochrome'),monochrome()">純色</button>
                    <button class="btn mybtn1" onclick="filterSelection('stonepattern'),stonepattern()">石紋</button>
                    <button class="btn mybtn1" onclick="filterSelection('woodgrain'),woodgrain()">木紋</button>
                    <button class="btn mybtn1" onclick="filterSelection('metallook'),metallook()">金屬</button>
                    <button class="btn mybtn1" onclick="filterSelection('other'),other()">特色</button>
                </div>
                <div class="scrollnav" id="myInout2" style="display:none;">
                    <button class="btn mybtna" onclick="mytype();"><span class="material-symbols-outlined">autorenew</span></button>
                    <button class="btn mybtn2" onclick="filterSelection('sheet')">all</button>
                    <button class="btn mybtn2" onclick="filterSelection('corner'),corner()">可樂石</button>
                    <button class="btn mybtn2" onclick="filterSelection('eternal'),eternal()">達理石</button>
                    <button class="btn mybtn2" onclick="filterSelection('holy'),holy()">活麗石</button>
                </div>
                <div class="scrollnav" id="myInout3" style="display:none;">
                    <button class="btn mybtn3">all</button>
                    <button class="btn mybtn3">1</button>
                    <button class="btn mybtn3">2</button>
                    <button class="btn mybtn3">3</button>
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
                    <?php }elseif($_GET["type"] == "stonepattern"){ ?>
                        <script>
                            $(function(){
                                filterSelection('stonepattern');
                                stonepattern();
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
                    <?php  }else{ ?>
                        
                    <?php } ?>
                </div>
            </div>
            
            <div class="divs row"><!-- mycard 分類 品牌 類型 -->
                <a href="products-details.php?sheet=morandi" title="品名 顏色 尺寸" class="mycard sheet corner monochrome" style="background-image:url(https://obs.line-scdn.net/0hqx9VgFz3LlcELzgU-_tRAD55LTg3Qz1UYBl_VEdBcGAoHGxWO0BjZCV8cmMgHmkJbUpoMSUuNWZ8GGkBME9j/w644);">
                    <div class="card-head">
                        <img class="img" src="images/products/corner.svg" alt="" title="品牌：可樂石">
                    </div>
                    <div class="card-foot">
                        <span>懷柏系列sheet</span><span>共2款</span>
                    </div>
                </a>
                <a href="products-details.php?sheet=morandi" title="品名 顏色(以頓號間隔) 尺寸" class="mycard sheet corner" style="background-image:url(https://obs.line-scdn.net/0hqx9VgFz3LlcELzgU-_tRAD55LTg3Qz1UYBl_VEdBcGAoHGxWO0BjZCV8cmMgHmkJbUpoMSUuNWZ8GGkBME9j/w644);">
                    <div class="card-head">
                        <img class="img" src="images/products/corner.svg" alt="">
                    </div>
                    <div class="card-foot">
                        <span>懷柏系列sheet</span><span>共2款</span>
                    </div>
                </a>
                <a class="mycard mesa corner" style="background-image:url(https://obs.line-scdn.net/0hqx9VgFz3LlcELzgU-_tRAD55LTg3Qz1UYBl_VEdBcGAoHGxWO0BjZCV8cmMgHmkJbUpoMSUuNWZ8GGkBME9j/w644);">
                    <div class="card-head">
                        <img class="img" src="images/products/corner.svg" alt="">
                    </div>
                    <div class="card-foot">
                        <span>懷柏系列mesa</span><span>共2款</span>
                    </div>
                </a>
                <a class="mycard sheet holy" style="background-image:url(https://obs.line-scdn.net/0hqx9VgFz3LlcELzgU-_tRAD55LTg3Qz1UYBl_VEdBcGAoHGxWO0BjZCV8cmMgHmkJbUpoMSUuNWZ8GGkBME9j/w644);">
                    <div class="card-head">
                        <img class="img1" src="images/products/holy.svg" alt="">
                    </div>
                    <div class="card-foot">
                        <span>懷柏系列sheet</span><span>共2款</span>
                    </div>
                </a>
                <a class="mycard tile eternal" style="background-image:url(https://obs.line-scdn.net/0hqx9VgFz3LlcELzgU-_tRAD55LTg3Qz1UYBl_VEdBcGAoHGxWO0BjZCV8cmMgHmkJbUpoMSUuNWZ8GGkBME9j/w644);">
                    <div class="card-head">
                        <img class="img" src="images/products/eternal.svg" alt="">
                    </div>
                    <div class="card-foot">
                        <span>懷柏系列tile</span><span>共2款</span>
                    </div>
                </a>
                <a class="mycard trim" style="background-image:url(https://obs.line-scdn.net/0hqx9VgFz3LlcELzgU-_tRAD55LTg3Qz1UYBl_VEdBcGAoHGxWO0BjZCV8cmMgHmkJbUpoMSUuNWZ8GGkBME9j/w644);">
                    <div class="card-head">
                        <img class="img" src="images/products/iwall.svg" alt="">
                    </div>
                    <div class="card-foot">
                        <span>懷柏系列sheet</span><span>共2款</span>
                    </div>
                </a>
                <a class="mycard stone corner" style="background-image:url(https://obs.line-scdn.net/0hqx9VgFz3LlcELzgU-_tRAD55LTg3Qz1UYBl_VEdBcGAoHGxWO0BjZCV8cmMgHmkJbUpoMSUuNWZ8GGkBME9j/w644);">
                    <div class="card-head">
                        <img class="img" src="images/products/corner.svg" alt="">
                    </div>
                    <div class="card-foot">
                        <span>懷柏系列stone</span><span>共2款</span>
                    </div>
                </a>
                <a class="mycard trim" style="background-image:url(https://obs.line-scdn.net/0hqx9VgFz3LlcELzgU-_tRAD55LTg3Qz1UYBl_VEdBcGAoHGxWO0BjZCV8cmMgHmkJbUpoMSUuNWZ8GGkBME9j/w644);">
                    <div class="card-head">
                        <img class="img" src="images/products/lwis.svg" alt="">
                    </div>
                    <div class="card-foot">
                        <span>懷柏系列trim</span><span>共2款</span>
                    </div>
                </a>
                <a class="mycard sheet corner" style="background-image:url(https://obs.line-scdn.net/0hqx9VgFz3LlcELzgU-_tRAD55LTg3Qz1UYBl_VEdBcGAoHGxWO0BjZCV8cmMgHmkJbUpoMSUuNWZ8GGkBME9j/w644);">
                    <div class="card-head">
                        <img class="img" src="images/products/corner.svg" alt="">
                    </div>
                    <div class="card-foot">
                        <span>懷柏系列sheet</span><span>共2款</span>
                    </div>
                </a>
                <a class="mycard sheet corner" style="background-image:url(https://obs.line-scdn.net/0hqx9VgFz3LlcELzgU-_tRAD55LTg3Qz1UYBl_VEdBcGAoHGxWO0BjZCV8cmMgHmkJbUpoMSUuNWZ8GGkBME9j/w644);">
                    <div class="card-head">
                        <img class="img" src="images/products/corner.svg" alt="">
                    </div>
                    <div class="card-foot">
                        <span>懷柏系列</span><span>共2款</span>
                    </div>
                </a>
                <a class="mycard sheet corner" style="background-image:url(https://obs.line-scdn.net/0hqx9VgFz3LlcELzgU-_tRAD55LTg3Qz1UYBl_VEdBcGAoHGxWO0BjZCV8cmMgHmkJbUpoMSUuNWZ8GGkBME9j/w644);">
                    <div class="card-head">
                        <img class="img" src="images/products/corner.svg" alt="">
                    </div>
                    <div class="card-foot">
                        <span>懷柏系列</span><span>共2款</span>
                    </div>
                </a>
                <a class="mycard sheet" style="background-image:url(https://obs.line-scdn.net/0hqx9VgFz3LlcELzgU-_tRAD55LTg3Qz1UYBl_VEdBcGAoHGxWO0BjZCV8cmMgHmkJbUpoMSUuNWZ8GGkBME9j/w644);">
                    <div class="card-head">
                        <img class="img" src="images/products/corner.svg" alt="">
                    </div>
                    <div class="card-foot">
                        <span>懷柏系列</span><span>共2款</span>
                    </div>
                </a>
            </div>
        </div>
    </main>
    <?php include("fb-messenger.php"); ?>
</body>
</html>
<script>
    $("header .topnav a").eq(2).addClass("active");
    $("aside .wrap a").eq(1).addClass("active");
    $(".mycard").hover(function(){
        this.css('background','center / 150% url(https://obs.line-scdn.net/0hqx9VgFz3LlcELzgU-_tRAD55LTg3Qz1UYBl_VEdBcGAoHGxWO0BjZCV8cmMgHmkJbUpoMSUuNWZ8GGkBME9j/w644);')
            
    });
</script>