<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <title>聯絡我們|活水泉源</title>
    <meta name="keywords" content="磁磚,瓷磚,藝術,拼貼,裝潢,室內設計,室內,室外,塗料,伊斯曼,精品磁磚,進口塗料,進口磁磚,型錄,Contact Us,Contact lwis,雨水回收,Ismanity,伊斯曼,a-cornerstone,可樂石,eternal stone,達理石,a-holystone,活麗石"><!-- α-cornerstone -->
    <meta name="description" content="活水泉源國際股份有限公司，歡迎來電洽詢或使用表單聯繫我們，活水泉源旗下品牌有:可樂石a-cornerstone、達理石Eternal stone、活麗石a-Holystone、愛沃IWall智能建材、伊斯曼塗料Ismanity、雨水回收。">

    <meta property="og:title" content="活水泉源國際|聯絡我們Contact Us">
    <meta property="og:description" content="活水泉源國際股份有限公司，歡迎來電洽詢或使用表單聯繫我們，活水泉源旗下品牌有:可樂石a-cornerstone、達理石Eternal stone、活麗石a-Holystone、愛沃IWall智能建材、伊斯曼塗料Ismanity、雨水回收。">
    <!-- <meta property="og:url" content="https://lwis.com.tw/"> -->

    <?php include("all-head.php"); ?>
    <link rel="stylesheet" href="css/contact.css">
    <script src="js/validator.min.js"></script>
</head>
<div class="d-none">
<?php
$Name = $_REQUEST["product-name"];
$Item = $_REQUEST["check-img"];
$Size = $_REQUEST["check-size"];
$nowtime = time();
$nowDate = date('Y-m-d H:i:s',$nowtime+25200);
$nextWeek = date('Y-m-d H:i',$nowtime+630000);
// $nextWeek = data('Y-m-d H:i',$nowtime+630000).toString();
?>
    <?php if($_REQUEST["products"] == "details"){ ?>
        <script>
            $(function(){
                $("#dropdown-group3 .dropdown-item").eq(2).addClass("active");
                var item = $("#dropdown-group3 .dropdown-item").eq(2).text();
                $("#category").html(item);
                $("#category").addClass('myselect');
                $("#category1").attr("value",'產品諮詢');
                $("#contents").html('我想詢問 [<?php echo $Name; ?>-系列] 產品，規格[款式<?php echo ' : '.$Item; ?>]、[尺寸<?php echo ' : '.$Size; ?>]，&#10;我是要做 [用途&坪數] (ex:地板、牆壁)，想預約 <?php  echo $nextWeek; ?> 看看實品 👈一定要調整為您可前往的時間&#10;(ps:請排除假日、平日午休時間12:00-13:30，建議預約11點前或14點後，我們會以您留下的聯繫資訊跟您確認是否預約成功)');
            });
        </script>
    <?php }elseif($_GET["error"] == "ture"){ ?>
        <!-- <script>
            $(function(){
                $("#youid,#youcompany,#youconnect,#younear,#youfile").css("display","none");
                $('#name,input[name="sex"],#company,input[name="to"]').removeAttr('required');
                $("#dropdown-group3 .dropdown-item").eq(4).addClass("active");
                var item = $("#dropdown-group3 .dropdown-item").eq(4).text();  //要再增加禁止修改的內容!?
                $("#category").html(item);
                $("#category").addClass('myselect');
                $("#category1").attr("value",'網站建議');
                var prev = window.location.href; //在404頁面存取當頁網址,傳送此頁並貼入prev
                $("#contents").text(prev);
            });
        </script> -->
    <?php }else{ ?>
        <!-- <script>
        $(function(){ 
            var prev = window.location.href; //此處為測試(404以外的表單)
            $("#contents").text(prev);
        });
        </script> -->
    <?php } ?>
</div>
<body>
    <?php include("aside.php"); ?>
    <main>
        <h3>Contact | 聯絡我們</h3>
        <!-- <p>任何問題歡迎聯繫我們。</p> -->
        <p>請將您的寶貴意見以填寫表單方式送出 ， 我們盡快由專人回覆您的問題！</p>
        <!-- <p>請將您的寶貴意見以填寫表單方式送出 ， 我們將於3-5個工作日由專人回覆您的問題！</p> -->
        <!-- <p>test:<?php echo $nowDate; ?></p> -->
        <div class="mycontainer">
            <form action="mail.php" method="post" enctype="multipart/form-data" name="myFrom" ><!-- target="foo" onsubmit="window.open('','foo','resizable=1,scrollbars=1,width=500,height=200')" -->
                <div class="input-group mb-3" id="youid">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="name">姓　　名</label>
                    </div>
                    <input type="text" name="name" class="form-control" placeholder="請輸入姓名" id="name" autocomplete="name" required>
                    <!-- <span class="input-group-text aa">稱 呼 您</span> -->
                    <div class="form-control">
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name="sex" id="M" value="先生">
                            <label class="custom-control-label" for="M">先生</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name="sex" id="F" value="小姐" required>
                            <label class="custom-control-label" for="F">小姐</label>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3" id="youcompany">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="company">公司名稱</label>
                    </div>
                    <input type="text" class="form-control mycol" placeholder="請輸入內容" id="company" name="companyName" autocomplete="on" required>
                    <label class="input-group-text" for="industry">產業類型</label>
                    <div class="input-group-append" id="dropdown-group1">
                        <button id="industry" type="text" class="btn dropdown-toggle form-label" data-toggle="dropdown">
                        請選擇
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="industry">
                            <li><button class="dropdown-item" type="button" disabled>請選擇產業類型</button></li><!-- active -->
                            <li><hr class="dropdown-divider"></li>
                            <li><button class="dropdown-item" type="button" value="營造">營造</button></li>
                            <li><button class="dropdown-item" type="button" value="建設">建設</button></li>
                            <li><button class="dropdown-item" type="button" value="室內設計">室內設計</button></li>
                            <li><button class="dropdown-item" type="button" value="其他">其他</button></li>
                        </ul>
                        <input id="industry1" type="hidden" name="companyType">
                    </div>
                </div>
                <div class="input-group mb-3" id="youconnect">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="details">聯繫資訊</label>
                    </div>
                    <input class="form-control" id="details" name="information">
                    <!-- <span class="input-group-text">聯繫方式</span> -->
                    <div class="input-group-append form-control">
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name="to" id="mail" value="email">
                            <label class="custom-control-label" for="mail">email</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name="to" id="phone" value="tel" required>
                            <label class="custom-control-label" for="phone">電話</label>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3" id="younear">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="branch">鄰近據點</label>
                    </div>
                    <div class="input-group-append" id="dropdown-group2">
                        <button id="branch" type="text" class="btn dropdown-toggle" data-toggle="dropdown" data-pattern-error="說明">
                        請選擇
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="branch">
                            <li><button class="dropdown-item" type="button" disabled>請選擇鄰近地點</button></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><button class="dropdown-item" type="button" value="台北分公司">台北分公司</button></li>
                            <li><button class="dropdown-item" type="button" value="新竹總經銷">新竹總經銷</button></li>
                            <li><button class="dropdown-item" type="button" value="中部總經銷(中彰投)">中部總經銷(中彰投)</button></li>
                            <li><button class="dropdown-item" type="button" value="雲林總經銷">雲林總經銷</button></li>
                            <li><button class="dropdown-item" type="button" value="嘉義總經銷">嘉義總經銷</button></li>
                            <li><button class="dropdown-item" type="button" value="台南總經銷">台南總經銷</button></li>
                        </ul>
                        <input id="branch1" type="hidden" name="near">
                    </div>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="category">詢問類型</label>
                    </div>
                    <div class="input-group-append" id="dropdown-group3">
                        <button id="category" type="text" class="btn dropdown-toggle " data-toggle="dropdown">
                        請選擇
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="category" id="dropdown-question">
                            <li><button class="dropdown-item" type="button" disabled>請選擇詢問類型</button></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><button class="dropdown-item" type="button" value="報價">報價</button></li>
                            <li><button class="dropdown-item" type="button" value="產品諮詢">產品諮詢</button></li>
                            <li><button class="dropdown-item" type="button" value="索取型錄">索取型錄</button></li>
                            <li><button class="dropdown-item" type="button" value="網站建議">網站建議</button></li>
                            <li><button class="dropdown-item" type="button" value="其他">其他</button></li>
                        </ul>
                        <input id="category1" type="hidden" name="theme">
                    </div>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="contents">詢問內容</label>
                    </div>
                    <textarea class="form-control" placeholder="請輸入內容，限800字內" name="summary" id="contents" required></textarea>
                </div>
                <!-- <div class="custom-file mb-3" id="youfile">
                    <input type="file" class="custom-file-input" id="customFile" name="myfile" multiple> multiple 複選(但檔名沒有寫至前端)
                    <label class="custom-file-label" for="customFile">請選擇檔案</label>
                    <p style="text-align: left;color:#dcc8b0;">檔案限制：副檔名 jpg , png , doc , pdf，大小1mb以內</p>
                </div> -->
                <input type="hidden" id="nowtime" name="nowtime">
                <script>
                    $("#nowtime").attr('value',<?php echo $nowDate ?>)
                </script>
                <button class="btn mybtn" type="reset" id="reset">清除</button>
                <button class="btn mybtn" type="submit" id="submit">送出</button>
            </form>
        </div>
        <p>感謝您的支持，若已發送表單『傳送成功』時，請勿重複填選送出。<br>若急需聯繫，可參考 <a href="map.php" target="_blank">服務據點</a> 來電洽詢 或撥 <a href="tel:+88662995500">06-2995500</a> 台南總公司</p>
        <!-- <p>感謝您的愛護及支持，若曾發送表單『傳送成功』時，請勿重複填選送出，以利於您的回覆進度。<br>若急需聯繫，可參考 <a href="map.php" target="_blank">服務據點</a> 來電洽詢 或撥 <a href="tel:+88662995500">06-2995500</a> 台南總公司</p> -->
    </main>
    <?php include("fb-messenger.php"); ?>
</body>


<script>
    $("header .topnav a").eq(6).addClass("active");
    $("aside .wrap a").eq(3).addClass("active");

    $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
    $("#dropdown-group1 li>button.dropdown-item").click(function() {
        $('#dropdown-group1 .dropdown-item').removeClass('active');
        $(this).addClass('active');
        var item = $(this).text();
        $("#industry").html(item);
        $("#industry").addClass('myselect');
        $("#industry1").attr("value",item);
    });
    $("#dropdown-group2 li>button.dropdown-item").click(function() {
        $('#dropdown-group2 .dropdown-item').removeClass('active');
        $(this).addClass('active');
        var item = $(this).text();
        $("#branch").html(item);
        $("#branch").addClass('myselect');
        $("#branch1").attr("value",item);
    });
    $("#dropdown-group3 li>button.dropdown-item").click(function() {
        $('#dropdown-group3 .dropdown-item').removeClass('active');
        $(this).addClass('active');
        var item = $(this).text();
        $("#category").html(item);
        $("#category").addClass('myselect');
        $("#category1").attr("value",item);
    });
    $("#reset").click(function() {
        $('.dropdown-item').removeClass('active');
        $(".custom-file-label").html("請選擇檔案");
        $(".custom-file-label").removeClass('selected');
        $("#industry,#branch,#category").html("請選擇");
        $("#industry,#branch,#category").removeClass('myselect');
        $("#details").attr({
            'type' : 'text',
            'placeholder' : '請選擇聯繫方式',
            // 'pattern' : "",
        }).removeProp('required','autocomplete');
    });
</script>
<script>
    $(function(){
        $("#details").attr({
            'type' : 'text',
            'placeholder' : '請選擇聯繫方式',
        });
    });

    $(':radio[name="to"]').change(function (){
        if($("input[name=to]")[0].checked){
            $("#details").attr({
            'type' : 'email',
            'placeholder' : '請輸入email格式',
            'pattern' : ".+@.+.com",
            'required' : 'ture',
            'autocomplete' : 'email'
            });
        } else if($("input[name=to]")[1].checked) {
            $("#details").attr({
                'type' : 'tel',
                'placeholder' : '請輸入台灣門號，若為市話請加區號',
                'required' : 'ture',
                'pattern' : "[0]{1}[0-9]{8,9}",
                'autocomplete' : 'tel-national'
            });
        }
    });

    
</script>
</html>

<!-- 在php串接時下一頁(或回到原頁 彈跳bs視窗提示傳送成功等訊息) -->
<!-- <div class="alert alert-success">
  <strong>Success!</strong> Indicates a successful or positive action.
</div> -->
<!-- 可掛button.close -->