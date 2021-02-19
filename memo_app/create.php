<?php

// 新規登録（INSERT）

// ID（mysqlで勝手に1,2・・・とふられるので不要）

// 入力値（内容）の取得
$content = "テストテキスト";

// 現在日時（作成日時と更新日時に使う）の取得
$now = new DateTime('Asia/Tokyo');
$datetime = $now->format('Y-m-d H:i:s');

// MySQLへの接続
$dsn = "mysql:host=db-test.cttp89p5hvp1.ap-northeast-1.rds.amazonaws.com;dbname=memo_app_db;";
$user = "admin";
$password = "Samurai\$1";

try {
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    echo "データベース接続成功\n";

    // 実行したいSQLを作る
    $sql = "insert into memo (content,created_at,updated_at) values ('$content','$datetime','$datetime')";
    
    // SQLを実行する（memoテーブルに登録する）
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    echo "新規登録完了しました\n";
} catch (Exception $e) {
    exit('データベース接続失敗。' . $e->getMessage());
}