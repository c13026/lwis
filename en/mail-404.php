<?php
// 取得前一頁資料
$from_url = $_REQUEST["url"];


// $nowtime = time();
//以之名義寄件
$from="service@lwis.com.tw";
$fromname="活水泉源國際股份有限公司-系統通知";
// 收件者
$to="cornerstoneweb7@gmail.com";
// Cc為副本,Bcc為密件副本
$bcc="newheavearth033@gmail.com";
// 主旨
$subject="$nowtime hello~有人在LWIS回報404";
// $subject="hello~有人在LWIS-EN回報404";
$subject="=?utf-8?B?".base64_encode($subject)."?=";
// 內容
$message="
    <!DOCTYPE html>
    <html lang='en'>
        <head>
            <title>Document</title>
            <style>
                .table {
                    width:70%;
                    margin: auto;
                    border-collapse: collapse !important;
                }
                .table-hover tbody tr:hover {
                    color: #212529;
                    background-color: rgba(0, 0, 0, 0.075);
                }
                .table-primary,
                    .table-primary > th,
                    .table-primary > td {
                    background-color: #b8daff;
                }
                .table-primary th,
                    .table-primary td,
                    .table-primary thead th,
                    .table-primary tbody + tbody {
                    border-color: #7abaff;
                }
                .table-hover .table-primary:hover {
                    background-color: #9fcdff;
                }
                .table-hover .table-primary:hover > td,
                .table-hover .table-primary:hover > th {
                    background-color: #9fcdff;
                }
                .table-hover .table-primary:hover {
                    background-color: #9fcdff;
                }
                .table-hover .table-primary:hover > td,
                .table-hover .table-primary:hover > th {
                    background-color: #9fcdff;
                }
                .table-hover .table-active:hover {
                    background-color: rgba(0, 0, 0, 0.075);
                }
                  
                .table-hover .table-active:hover > td,
                .table-hover .table-active:hover > th {
                    background-color: rgba(0, 0, 0, 0.075);
                }
                .mytable{
                    font-size: 1.25rem;
                    text-align: center;
                }
                .bb{
                    font-weight: bold;
                    color:#000;
                    width: 20% !important;
                }
                .cc{
                    color:#CCC;
                    width: 80% !important;
                }
            </style>
        </head>
        <body>
            <h1>這是lwis.com.tw/en/官網-系統信件(請勿直接回覆)</h1>
            <h1>※請注意※上一則訊息是否有處理※</h1>
            <table class='table table-hover mytable'>
                <tr>
                    <td class='bb'>報錯路徑</td>
                    <td class='cc'>$from_url</td>
                </tr>
            </table>
        </body>
    </html>
";

// 呼叫這支程式傳送
mail_attach($to, $bcc, $fromname, $from, $subject, $message);   //, $nowtime
// 定義mail_attach傳送內容
function mail_attach($to, $bcc, $fromname, $from, $subject, $message){  //, $nowtime
    $mime_boundary=md5(uniqid(mt_rand(),TRUE));

    // 郵件標頭
    $headers="From: $fromname<$from>\r\n";
    $headers.="To: $to\r\n";
    $headers.="Bcc: $bcc\r\n";
    $headers.="MIME-Version:1.0\r\n";
    // $headers .="Content-type:multipart/mixed;boundary=$mime_boundary\r\n";
    $headers .="Content-type:text/html; charset=utf-8\r\n";
    // 郵件內容
    $content="This is a multi-part message in MIME format.\r\n";
    $content.="--$mime_boundary\r\n";
    $content.="Content-type:text/html;charset=utf-8\r\n";
    $content.="$message\r\n";
    // 加入附加檔案
    $content.="--$mime_boundary\r\n";
    $content.="Content-type:image/pjpeg;name=".basename($file_name)."\r\n";
    $content.="Content-Disposition:attachment;filename=".basename($file_name)."\r\n";
    $content.="Content-Tranfer-Encoding:base64\r\n\r\n";
    $content.="$data\r\n";
    $content.="--$mime_boundary--\r\n";
    // 送出
    mail( $to, $subject, $message, $headers);
    //不讓人看到傳送訊息避免收到垃圾郵件
    // echo '<script>history.back(-1);window.alert("傳送成功")</script>';
    echo '<script>window.close();window.alert("sorry 本功能暫停服務 請於上班時間來電")</script>';
}

?>