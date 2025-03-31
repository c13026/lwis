<?php
// 取得前一頁資料
// 姓名
$from_name = $_REQUEST["name"];
// 稱呼
$from_sex = $_REQUEST["sex"];
// 公司名稱&產業類型
$from_cName = $_REQUEST["companyName"];
$from_cType = $_REQUEST["companyType"];
// 聯繫方式 電話 or email
$from_info = $_REQUEST["information"];
$from_inTo = $_REQUEST["to"];
// 靠近
$from_near = $_REQUEST["near"];
// 諮詢分類&內容
$from_theme = $_REQUEST["theme"];
$from_summary = $_REQUEST["summary"];
//附加檔案(在contact.php中已被註解)
// $file_name = $_FILES{"myfile"};

// $nowtime = $_REQUEST["nowtime"];
// $nowtime = time();

//以之名義寄件
$from="service@lwis.com.tw";
$fromname="活水泉源國際股份有限公司-系統通知";
// 收件者 oba.way@msa.hinet.net
$to="cornerstoneweb7@gmail.com";
// Cc為副本,Bcc為密件副本
$bcc="newheavearth033@gmail.com";
// 主旨
$subject= "hello~有人在LWIS聯繫我們";  // $subject= "$nowtime hello~有人在LWIS聯繫我們";
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
            <h1>這是lwis.com.tw官網-系統信件(請勿直接回覆)</h1>
            <h1>※請注意※上一則訊息是否有處理※</h1>
            <h2>以下是致電者資訊：</h2>
            <table class='table table-hover mytable'>
                <tr>
                    <td class='bb'>姓名</td>
                    <td class='cc'>$from_name $from_sex</td>
                </tr>
                <tr>
                    <td class='bb'>公司名稱</td>
                    <td class='cc'>$from_cName</td>
                </tr>
                <tr>
                    <td class='bb'>產業類型</td>
                    <td class='cc'>$from_cType</td>
                </tr>
                <tr>
                    <td class='bb'>$from_inTo 聯繫</td>
                    <td class='cc'>$from_info</td>
                </tr>
                <tr>
                    <td class='bb'>鄰近據點</td>
                    <td class='cc'>$from_near</td>
                </tr>
                <tr>
                    <td class='bb'>詢問類型</td>
                    <td class='cc'>$from_theme</td>
                </tr>
                <tr>
                    <td class='bb'>詢問內容</td>
                    <td class='cc'>$from_summary</td>
                </tr>
            </table>
        </body>
    </html>
";

// 呼叫這支程式傳送
mail_attach($to, $bcc, $fromname, $from, $subject, $message);  //,$file_name, $nowtime
// 定義mail_attach傳送內容
function mail_attach($to, $bcc, $fromname, $from, $subject, $message){  //,$file_name(檔案為註解處)  , $nowtime
    // $big5_file_name=iconv("UTF-8","Big5",$file_name);
    $mime_boundary=md5(uniqid(mt_rand(),TRUE));
    // open file
    // $fp=fopen($big5_file_name,"rb");
    // $data=fread($fp,filesize($big5_file_name));
    // $data=chunk_split(base64_encode($data));

    // 郵件標頭
    $headers="From: $fromname<$from>\r\n";
    $headers.="To: $to\r\n";
    $headers.="Bcc: $bcc\r\n";
    $headers.="MIME-Version:1.0\r\n";
    $headers .="Content-type:text/html; charset=utf-8\r\n";
    // 郵件內容
    $content="This is a multi-part message in MIME format.\r\n";
    $content.="--$mime_boundary\r\n";
    $content.="Content-type:text/html;charset=utf-8\r\n";
    $content.="$message\r\n";
    // 加入附加檔案(檔案為註解處)
    $content.="--$mime_boundary\r\n";
    // $content.="Content-type:image/pjpeg;name=".basename($file_name)."\r\n";
    // $content.="Content-Disposition:attachment;filename=".basename($file_name)."\r\n";
    $content.="Content-Tranfer-Encoding:base64\r\n\r\n";
    // $content.="$data\r\n";
    $content.="--$mime_boundary--\r\n";
    // 送出
    mail( $to, $subject, $message, $headers);
    //不讓人看到傳送訊息避免收到垃圾郵件
    echo '<script>setTimeout(function(){window.alert("傳送出現狀況,請於上班時間來電或傳送至oba.way@msa.hinet.net");history.back(-1);},2000);</script>';
}
// echo '
//     <script>
//     setTimeout(function(){
//         window.alert("傳送成功");history.back(-1);
//     },2000);
//     </script>';
?>