<!DOCTYPE html>
<html lang="en">
<head>
    <title>聯絡我們|活水泉源</title>
    <?php include("all-head.php"); ?>
    <link rel="stylesheet" href="css/contact.css">
    <script src="js/validator.js"></script>
</head>
<body>
    <?php include("aside.php"); ?>
    <main>
        <h3>Contact | 聯絡我們</h3>
        <p>請將您的寶貴意見以填寫表單方式送出 ， 我們將於工作日（幾天內）由專人以郵件回覆您的問題！</p>
        <div class="mycontainer">
            <form action="" method="get">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="name">姓　　名</label>
                    </div>
                    <input type="text" class="form-control" placeholder="請輸入姓名" id="name" autocomplete="name" required>
                    <!-- <span class="input-group-text aa">稱 呼 您</span> -->
                    <div class="form-control">
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name="sex" id="M" value="m">
                            <label class="custom-control-label" for="M">先生</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name="sex" id="F" value="f" required>
                            <label class="custom-control-label" for="F">小姐</label>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="company">公司名稱</label>
                    </div>
                    <input type="text" class="form-control mycol" placeholder="請輸入內容" id="company" autocomplete="organization-title" required>
                    <label class="input-group-text" for="industry">產業類型</label>
                    <div class="input-group-append" id="dropdown-group1"> <!-- required -->
                        <button id="industry" type="button" class="btn dropdown-toggle form-label" data-toggle="dropdown">
                        請選擇
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="industry" required>
                            <li><button class="dropdown-item" type="button" disabled>請選擇產業類型</button></li><!-- active -->
                            <li><hr class="dropdown-divider"></li>
                            <li><button class="dropdown-item" type="button">營造</button></li>
                            <li><button class="dropdown-item" type="button">建設</button></li>
                            <li><button class="dropdown-item" type="button">室內設計</button></li>
                            <li><button class="dropdown-item" type="button">其他</button></li>
                        </ul>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="details">聯繫資訊</label>
                    </div>
                    <input type="email" class="form-control" id="details" >
                    <!-- <span class="input-group-text">聯繫方式</span> -->
                    <div class="input-group-append form-control">
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name="to" id="mail" value="email"> <!-- checked -->
                            <label class="custom-control-label" for="mail">email</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name="to" id="phone" value="phone" required>
                            <label class="custom-control-label" for="phone">電話</label>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="branch">鄰近據點</label>
                    </div>
                    <div class="input-group-append" id="dropdown-group2">
                        <button id="branch" type="button" class="btn dropdown-toggle" data-toggle="dropdown" data-pattern-error="說明">
                        請選擇
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="branch">
                            <li><button class="dropdown-item" type="button" disabled>請選擇鄰近地點</button></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><button class="dropdown-item" type="button">台北分公司</button></li>
                            <li><button class="dropdown-item" type="button">新竹總經銷</button></li>
                            <li><button class="dropdown-item" type="button">中部總經銷(中彰投)</button></li>
                            <li><button class="dropdown-item" type="button">雲林總經銷</button></li>
                            <li><button class="dropdown-item" type="button">嘉義總經銷</button></li>
                            <li><button class="dropdown-item" type="button">台南總經銷</button></li>
                        </ul>
                        
                    </div>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="category">詢問類型</label>
                    </div>
                    <div class="input-group-append" id="dropdown-group3"> <!-- required -->
                        <button id="category" type="button" class="btn dropdown-toggle " data-toggle="dropdown">
                        請選擇
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="category">
                            <li><button class="dropdown-item" type="button" disabled required>請選擇詢問類型</button></li><!-- active -->
                            <li><hr class="dropdown-divider"></li>
                            <li><button class="dropdown-item" type="button">報價</button></li>
                            <li><button class="dropdown-item" type="button">產品諮詢</button></li>
                            <li><button class="dropdown-item" type="button">索取型錄</button></li>
                            <li><button class="dropdown-item" type="button">網站建議</button></li>
                            <li><button class="dropdown-item" type="button">其他</button></li>
                        </ul>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="contents">詢問內容</label>
                    </div>
                    <textarea class="form-control" placeholder="請輸入內容，限800字內" id="contents" required></textarea>
                </div>
                <div class="custom-file mb-3">
                    <input type="file" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">請選擇檔案</label>
                </div>
                <button class="btn mybtn" type="reset" id="reset">清除</button>
                <button class="btn mybtn" type="submit" id="submit">送出</button>
            </form>
        </div>
        <p>感謝您的愛護及支持，若曾發送過表單並獲得回覆時，請繼續使用email回函或同位業務回電，以利於您的回覆進度。</p>
        <a href="fb://profile/?id=100057277666823">test</a>
    </main>
    <?php include("fb-messenger.php"); ?>
</body>
<script>
    $("header .topnav a").eq(4).addClass("active");
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
    });
    $("#dropdown-group2 li>button.dropdown-item").click(function() {
        $('#dropdown-group2 .dropdown-item').removeClass('active');
        $(this).addClass('active');
        var item = $(this).text();
        $("#branch").html(item);
        $("#branch").addClass('myselect');
    });
    $("#dropdown-group3 li>button.dropdown-item").click(function() {
        $('#dropdown-group3 .dropdown-item').removeClass('active');
        $(this).addClass('active');
        var item = $(this).text();
        $("#category").html(item);
        $("#category").addClass('myselect');
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
            'pattern' : "",
        }).removeProp('required','autocomplete');
    });
    // if else 句型結構
    // 在3個下拉清單未選取清單時 submit不送出
    // 例句應該是 if 3個清單選項都被選取選項時 可submit，else否則都不送出

    //接著寫提示框，通知未送出原因

    // $("#submit").click(function() {
    // });

</script>
<script>
    $(function(){
        $("#details").attr({
            'type' : 'text',
            'placeholder' : '請選擇聯繫方式',
            'pattern' : "",
        }).removeProp('required');
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
                'placeholder' : '請輸入聯絡電話，如為市話請加區號',
                'minlength' : "8",
                'maxlength' : "20",  //  pattern /^09\d{2}-?\d{3}-?\d{3}$/ (台灣手機驗證)
                'required' : 'ture',
                'autocomplete' : 'tel'
            }).removeProp('pattern');
        } else {
            $("#details").attr({
                'type' : 'text',
                'placeholder' : '請選擇聯繫方式',
                'pattern' : "",
            }).removeProp('required','autocomplete');
        }
    });
</script>
</html>

<!-- 在php串接時下一頁(或回到原頁 彈跳bs視窗提示傳送成功等訊息) -->
<!-- <div class="alert alert-success">
  <strong>Success!</strong> Indicates a successful or positive action.
</div> -->
<!-- 可掛button.close -->