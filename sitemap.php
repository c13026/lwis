<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <title>網站地圖|活水泉源</title>
    <meta name="keywords" content="磁磚,瓷磚,藝術,拼貼,裝潢,室內設計,室內,室外,塗料,伊斯曼,精品磁磚,進口塗料,進口磁磚,雨水回收,Ismanity,伊斯曼,a-cornerstone,可樂石,eternal stone,達理石,a-holystone,活麗石"><!-- α-cornerstone -->
    <meta name="description" content="在活水泉源官網找不到您需要的頁面嗎？建議您進入此頁，不論是關於品牌介紹及服務或型錄下載、聯繫方式等等，這裡可以瀏覽整個活水泉源官網的所有路徑，包括所有旗下品牌分類說明及產品頁面，旗下品牌有:可樂石a-cornerstone、達理石Eternal stone、活麗石a-Holystone、愛沃IWall智能建材、伊斯曼塗料Ismanity、雨水回收...等等。">

    <meta property="og:title" content="活水泉源國際|網站地圖LWIS sitemap">
    <meta property="og:description" content="在活水泉源官網找不到您需要的頁面嗎？建議您進入此頁，不論是關於品牌介紹及服務或型錄下載、聯繫方式等等，這裡可以瀏覽整個活水泉源官網的所有路徑，包括所有旗下品牌分類說明及產品頁面，旗下品牌有:可樂石a-cornerstone、達理石Eternal stone、活麗石a-Holystone、愛沃IWall智能建材、伊斯曼塗料Ismanity、雨水回收...等等。">
    <!-- <meta property="og:url" content="https://lwis.com.tw/"> -->

    <?php include("all-head.php"); ?>
    <link rel="stylesheet" href="css/sitemap.css">
</head>
<body>
<?php include("aside.php"); ?>
<main>
    <div class="mycontainer">
        <h3>Sitemap | 網站地圖</h3>
        <p>找不到內容嗎？這裡可查看所有詳細分類</p>
        <div class="myrow">
            <div class="link-group">
                <a href="about.php">About | 關於我們</a>
                <div class="link-title">
                    <a href="about.php?about=lwis">關於活水泉源</a>
                    <a href="about.php?about=position">品牌理念</a>
                    <a href="about.php?about=serve">服務特色</a><!-- 用get_id 在about寫下顯示 -->
                    <a href="about.php?about=brands">旗下品牌</a>
                    <div class="little">
                        <a href="about.php?brand=corner">可樂石 α-cornerstone</a>
                        <a href="about.php?brand=eternal">達理石 Eternal stone</a>
                        <a href="about.php?brand=holy">活麗石 α-Holystone</a>
                        <a href="about.php?brand=iwall">愛沃智能建材 iwall</a>
                        <a href="about.php?brand=graf">雨水回收 GRAF</a>
                        <a href="about.php?brand=ismanity">伊斯曼塗料 Ismanity</a>
                    </div>
                </div>
            </div>
            <div class="link-group">
                <a href="products.php?category=sheet">Products | 產品系列</a>
                <div class="link-title">
                    <a href="products.php?category=sheet">薄板</a>
                    <a href="products.php?category=mesa">檯面</a>
                    <a href="products.php?category=tile">磁磚</a>
                    <!-- <a href="products.php?category=stone">石板</a> -->
                    <a href="products.php?category=trim">飾板</a>
                    <a href="https://ismanity.com/" target="_blank">塗料</a>
                    <a href="https://www.livingwater-graf.com.tw/" target="_blank">雨水回收</a>
                </div>
            </div>
            <div class="link-group">
                <a href="map.php">Map | 服務據點</a>
                <div class="link-title">
                    <a href="map.php?seat=taipei">台北分公司</a>
                    <a href="map.php?seat=hsinchu">新竹總經銷</a>
                    <a href="map.php?seat=taichung">中部總經銷(中彰投)</a>
                    <a href="map.php?seat=yunlin">雲林總經銷</a>
                    <a href="map.php?seat=chiayi">嘉義總經銷</a>
                    <a href="map.php?seat=tainan">台南總公司</a>
                </div>
                <a href="contact.php">Contact | 聯絡我們</a>
                <a href="catalogs.php">Catalogs | 型錄</a>
            </div>
        </div>
    </div>
</main>
<?php include("fb-messenger.php"); ?>
</body>
<script>
    $("header .topnav a").eq(8).addClass("active");
    $("aside .wrap a").eq(5).addClass("active");
</script>
</html>