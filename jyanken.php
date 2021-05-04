<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>じゃんけん</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link rel="stylesheet" href="style.css">
</head>
<body>
<div id="wrapper">
    <header>
      
    </header>
    <main>
        <h1>じゃんけん</h1>
        出す手を選んで勝負してください。
        <div class="form-box">
            <form action="battle.php" method="post">
                <label>
                    <input type="radio" title="playerHand" name="playerHand" value="グー" checked>グー
                </label>
                <label>
                    <input type="radio" title="playerHand" name="playerHand" value="チョキ">チョキ
                </label>
                <label>
                    <input type="radio" title="playerHand" name="playerHand" value="パー">パー
                </label>
                <button type="submit" class="battle-button">勝負する！</button>
            </form>
        </div>
    </main>
    <footer>
    </footer>
</div>

<?php include('./footer.php');?>

