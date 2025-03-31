<!DOCTYPE html>
<html lang="en">
<head>
<title>活水泉源國際股份有限公司</title>
<?php include("all-head.php"); ?>
<!-- <link rel="stylesheet" href="css/index.css"> -->
<style>
    body{
    }
    main{
        /* display; */
        /* background-color: #ff0; */
        background:rgba(83, 71, 65, .7);
        width: 100%;
        height: 100vh;
        /* border:1px solid #F00; */
        display: flex;
        align-content: center;
    }
    .mybtn{
        color: #FFF;
        /* border:solid 1px #F00; */
        background-color: #534741;
        margin: 0 .75rem;
        font-size: 1.25rem;
    }
    .btn{
        padding: .275rem .75rem;
    }
    .mybtn:hover{
        background-color: #754C24;
        color: #FFF;
    }
    .mybtn:focus{
        box-shadow: 0 0 0 0.2rem rgb(117 76 36 / 25%);
    }
    .container-fluid{
        /* border:1px solid#000; */
        text-align: center;
        padding: unset;
        margin: auto auto;
        height: auto;
    }
    main img{
        display: block;
        margin:2rem auto;
        max-width:80%;
        width: 500px;
    }
    main p:nth-child(1){
        margin: 3rem 0;
    }
    main p{
        margin: 0;
        color: #FFF;
        font-size: 1.25rem;
    }
    .myhr{
        width: 100%;
        min-height: 4rem;

        height: 6vmax;
        background:center / auto 100% url(images/error-hr.svg);
        margin: 3rem 0;
    }
    main input,main button,main a{
        color: #FFF;
    }
</style>
</head>
<body>
<?php include("aside.php"); ?>
<main>
<div class="container-fluid">
    <img src="../images/error.svg">
    <p>您所查看的網頁已被刪除、移動或從未存在。</p>
    <p>您可返回<button class="btn mybtn" onclick="history.go(-1)">上一頁</button>，或將問題<a class="btn mybtn" href="contact.php?error=ture">提交</a>給我們</p>
    <div class="myhr"></div>
</div>
</main>
</body>
</html>