<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact Us|LWIS</title>
    <!-- <meta name="keywords" content="磁磚,瓷磚,藝術,拼貼,裝潢,室內設計,室內,室外,塗料,伊斯曼,精品磁磚,進口塗料,進口磁磚,型錄,Contact Us,Contact lwis,雨水回收,Ismanity,伊斯曼,a-cornerstone,可樂石,eternal stone,達理石,a-holystone,活麗石">α-cornerstone -->
    <meta name="description" content="Living Water Spring International Co., Ltd.,Welcome to inquire or use contact us, LWIS's brands are: a-cornerstone, Eternal stone, a-Holystone, IWall, Ismanity, GRAF.">

    <meta property="og:title" content="Contact Us|LWIS International Co., Ltd.">
    <meta property="og:description" content="Living Water Spring International Co., Ltd.,Welcome to inquire or use contact us, LWIS's brands are: a-cornerstone, Eternal stone, a-Holystone, IWall, Ismanity, GRAF.">
    <!-- <meta property="og:url" content="https://lwis.com.tw/"> -->

    <?php include("all-head.php"); ?>
    <link rel="stylesheet" href="../css/contact.css">
    <script src="../js/validator.min.js"></script>
    <style>
        .input-group-text{
            min-width: 8rem;
            text-align: center;
            justify-content: center;
        }
    </style>
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
                $("#category1").attr("value",'Product consultation');
                $("#contents").html('Ask [ <?php echo $Name; ?> Series ] format [ Faces<?php echo ' : '.$Item; ?> ]、[ Sizes<?php echo ' : '.$Size; ?> ]，&#10;demand [Where To Use & Square Meters] (ex: About 10 sqm of wall/floor), <?php  echo $nextWeek; ?> Go to our company to see the actual product 👈be sure to adjust to a time when you can visit&#10;(illustrate:please exclude holidays and weekdays lunch break from 12:00 to 13:30, recommended at before 11:00 or after 14:00, We will use the contact information you left to confirm with you whether the appointment is successful.)&#10;All of the above are Taiwan local time in UTC+8');
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
        <h3>Contact Us</h3>
        <!-- <p>Thank you for your important comments, we will reply to your questions as soon as possible!<br>You can also call to inquire about the progress</p> -->
        <p>Thank you for your important comments, we will reply to your questions as soon as possible!</p>
        <!-- <p>請將您的寶貴意見以填寫表單方式送出 ， 我們將於3-5個工作日由專人回覆您的問題！</p> -->
        <!-- <p>test:<?php echo $nowDate; ?></p> -->
        <div class="mycontainer">
            <form action="mail.php" method="post" enctype="multipart/form-data" name="myFrom" ><!-- target="foo" onsubmit="window.open('','foo','resizable=1,scrollbars=1,width=500,height=200')" -->
                <div class="input-group mb-3" id="youid">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="name">Name</label>
                    </div>
                    <input type="text" name="name" class="form-control" placeholder="Enter your name" id="name" autocomplete="name" required>
                    <!-- <span class="input-group-text aa">稱 呼 您</span> -->
                    <div class="form-control">
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name="sex" id="M" value="Mr.">
                            <label class="custom-control-label" for="M">Mr.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name="sex" id="F" value="Ms." required>
                            <label class="custom-control-label" for="F">Ms.</label>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3" id="youcompany">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="company">Company</label>
                    </div>
                    <input type="text" class="form-control mycol" placeholder="Enter your Company Name" id="company" name="companyName" autocomplete="on" required>
                    <label class="input-group-text" for="industry">Industry type</label>
                    <div class="input-group-append" id="dropdown-group1">
                        <button id="industry" type="text" class="btn dropdown-toggle form-label" data-toggle="dropdown">
                        Choose
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="industry">
                            <li><button class="dropdown-item" type="button" disabled>Choose A Industry Type</button></li><!-- active -->
                            <li><hr class="dropdown-divider"></li>
                            <!-- <li><button class="dropdown-item" type="button" value="營造">營造</button></li> -->
                            <li><button class="dropdown-item" type="button" value="Construction Company">Construction</button></li><!-- 營造和建設在英文一樣? -->
                            <li><button class="dropdown-item" type="button" value="Interior design">Interior design</button></li>
                            <li><button class="dropdown-item" type="button" value="other">other</button></li>
                        </ul>
                        <input id="industry1" type="hidden" name="companyType">
                    </div>
                </div>
                <div class="input-group mb-3" id="youconnect">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="details">Contact Info</label>
                    </div>
                    <input class="form-control" id="details" name="information">
                    <!-- <span class="input-group-text">聯繫方式</span> -->
                    <div class="input-group-append form-control">
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name="to" id="mail" value="email">
                            <label class="custom-control-label" for="mail">Email</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name="to" id="phone" value="tel" required>
                            <label class="custom-control-label" for="phone">phone</label>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3" id="younear">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="branch">Area</label>
                    </div>
                    <div class="input-group-append" id="dropdown-group2">
                        <button id="branch" type="text" class="btn dropdown-toggle" data-toggle="dropdown" data-pattern-error="說明">
                        Choose
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="branch">
                            <li><button class="dropdown-item" type="button" disabled>Choose A Convenient Location</button></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><button class="dropdown-item" type="button" value="台北分公司">Branch In Taipei</button></li><!-- Branch In Taipei -->
                            <li><button class="dropdown-item" type="button" value="新竹總經銷">Hsinchu Dealer</button></li>
                            <li><button class="dropdown-item" type="button" value="中部總經銷(中彰投)">Central Taiwan Dealer</button></li>
                            <li><button class="dropdown-item" type="button" value="雲林總經銷">Yunlin Dealer</button></li>
                            <li><button class="dropdown-item" type="button" value="嘉義總經銷">Chiayi Dealer</button></li>
                            <li><button class="dropdown-item" type="button" value="台南總經銷">Headquarters In Tainan</button></li>
                        </ul>
                        <input id="branch1" type="hidden" name="near">
                    </div>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="category">Question Type</label>
                    </div>
                    <div class="input-group-append" id="dropdown-group3">
                        <button id="category" type="text" class="btn dropdown-toggle " data-toggle="dropdown">
                        Choose
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="category" id="dropdown-question">
                            <li><button class="dropdown-item" type="button" disabled>Choose A Question Type</button></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><button class="dropdown-item" type="button" value="quotation">quotation</button></li>
                            <li><button class="dropdown-item" type="button" value="Product consultation">Product consultation</button></li>
                            <li><button class="dropdown-item" type="button" value="Request a catalog">Request a catalog</button></li>
                            <li><button class="dropdown-item" type="button" value="website suggestion">website suggestion</button></li>
                            <li><button class="dropdown-item" type="button" value="other">other</button></li>
                        </ul>
                        <input id="category1" type="hidden" name="theme">
                    </div>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="contents">Question</label>
                    </div>
                    <textarea class="form-control" maxlength="800" placeholder="Enter your Question, Limited to 1600 characters." name="summary" id="contents" required></textarea>
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
                <button class="btn mybtn" type="reset" id="reset">Reset</button>
                <button class="btn mybtn" type="submit" id="submit">Submit</button>
            </form>
        </div>
        <p>If you have sent the form before, please do not send it again.<br>If you need to contact urgently, please refer to the <a href="map.php" target="_blank">MAP</a> and call for inquiries or dial <a href="tel:+88662995500">+886 62995500</a> Tainan Head Office</p>
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
        $("#industry,#branch,#category").html("choose");
        $("#industry,#branch,#category").removeClass('myselect');
        $("#details").attr({
            'type' : 'text',
            'placeholder' : 'contact method',
            // 'pattern' : "",
        }).removeProp('required','autocomplete');
    });
</script>
<script>
    $(function(){
        $("#details").attr({
            'type' : 'text',
            // 'placeholder' : '請選擇聯繫方式',
            'placeholder' : 'contact method',
        });
    });

    $(':radio[name="to"]').change(function (){
        if($("input[name=to]")[0].checked){
            $("#details").attr({
            'type' : 'email',
            // 'placeholder' : '請輸入email格式',
            // 'pattern' : ".+@.+.com",
            'placeholder' : 'Enter your email',
            'pattern' : ".+@.+",  // 驗證只辨識中間有@
            'required' : 'ture',
            'autocomplete' : 'email'
            });
        } else if($("input[name=to]")[1].checked) {
            $("#details").attr({
                'type' : 'tel',
                'placeholder' : 'Enter your phone number',  // 'Enter your phone number , ex:0912345678 or 062995500'
                // 'pattern' : "[0-9]{2,3,4}[0-9]{8,9}", //省略驗證,原要寫國際驗證電話方式(不同國家不同)
                'required' : 'ture',
                'autocomplete' : 'tel-national'
            }).removeAttr("pattern");  //不移除pattern會造成 仍有之前radio切換而增的pattern驗證標準
        }
    });
</script>
</html>

<!-- 在php串接時下一頁(或回到原頁 彈跳bs視窗提示傳送成功等訊息) -->
<!-- <div class="alert alert-success">
  <strong>Success!</strong> Indicates a successful or positive action.
</div> -->
<!-- 可掛button.close -->