<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>登録</title>
    <link rel="stylesheet" href="css/reset.css">
    
    
</head>
<body>
<!--ヘッダー-->
   <header>
       <nav calss="navbar navbar-default">
           <div class="container-fluid">
            <div class="navbar-header"><a class="navbar-brand" href="select07.php">データ一覧</a></div>
           </div>
       </nav>
   </header>
   
   
<!--ここからメイン   -->

<form method="post" action="insert07.php">
 <div class="jumbotron">
   <fieldset>
       <legend>アーカイブ</legend>
        <label>発売月 <input type="text" name="release"></label><br>
        <label>楽曲名 <input type="text" name="music"></label><br>
        <label>演奏者 <input type="text" name="player"></label><br>
        <label>作詞者 <input type="text" name="writer"></label><br>
        <label>作曲者 <input type="text" name="composer"></label><br>
        <label>収録作 <input type="text" name="album"></label><br>
        <label>テーマ <input type="text" name="tieup"></label>
        <input type="submit" value="登録">
   </fieldset>  
 </div>
</form>   

</body>
</html>