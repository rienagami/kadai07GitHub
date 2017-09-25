<?php

//DB接続
try{
    $pdo = new
    PDO('mysql:dbname=archive_db_34;charaset=utf8;host=localhost','root','');
}catch (PDOException $e){
 exit('DbConnectError:'.$e->getMessage());
}


//SQLを作って実行
$stmt = $pdo->prepare("SELECT*FROM archive_an_table ORDER BY id DESC");

$status = $stmt->execute();//実行の宣言・・・execute


//もしfalseだったら返ってくる
$view ="";
if($status==false){
    $error = $stmt->errorInfo();
    exit("QueryError:".$error[2]);
}else{
    //セレクトデータの数だけ自動でループしてくれる
while($r = $stmt->fetch(PDO::FETCH_ASSOC)){
    $view .='<p>';
    $view .= $r["indate"]." ".$r["name"];
    $view .='</p>';

}

}

?>

    <!DOCTYPE html>
    <html lang="ja">

    <head>
        <meta charset="UTF-8">
        <title>アーカイブ表示</title>
        <link rel="stylesheet" href="css/reset.css">

        <style>
            div {
                padding: 10px;
                font-size: 16px;
            }

        </style>
    </head>

    <body id="main">
        <!--   ここからはヘッド-->

        <header>
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="index07.php">登録画面へ</a>
                    </div>
                </div>
            </nav>
        </header>



        <!--ここからメイン  -->
        <div>
            <div class="container jumbotron">
                <?=$view?>
            </div>

        </div>

    </body>

    </html>
