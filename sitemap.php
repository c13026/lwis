<!DOCTYPE html>
<html lang="en">
<head>
<title>網站地圖|活水泉源</title>
<?php include("all-head.php"); ?>
<link rel="stylesheet" href="css/sitemap.css">
<style>

</style>
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
                    <a href="about.php">關於活水泉源</a>
                    <a href="about.php">品牌理念</a>
                    <a href="about.php">服務特色</a><!-- 用get_id 在about寫下顯示 -->
                    <a href="about.php">旗下品牌</a>
                    <div class="little">
                        <a href="about.php">可樂石 α-cornerstone</a>
                        <a href="about.php">達理石 Eternal stone</a>
                        <a href="about.php">活麗石 α-Holystone</a>
                        <a href="about.php">愛沃智能建材 iwall</a>
                        <a href="about.php">伊斯曼塗料 Ismanity</a>
                    </div>
                </div>
            </div>
            <div class="link-group">
                <a href="">Products | 產品系列</a>
                <div class="link-title">
                    <a href="">薄板</a>
                    <a href="">檯面</a>
                    <a href="">磁磚</a>
                    <a href="">石材</a>
                    <a href="">飾板</a>
                    <a href="">塗料</a>
                    <a href="">雨水回收</a>
                </div>
            </div>
            <div class="link-group">
                <a href="map.php">Map | 服務據點</a>
                <div class="link-title">
                    <a href="map.php">台北分公司</a>
                    <a href="map.php">新竹總經銷</a>
                    <a href="map.php">中部總經銷(中彰投)</a>
                    <a href="map.php">雲林總經銷</a>
                    <a href="map.php">嘉義總經銷</a>
                    <a href="map.php">台南總經銷</a>
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
    $("header .topnav a").eq(6).addClass("active");
    $("aside .wrap a").eq(5).addClass("active");
</script>
</html>