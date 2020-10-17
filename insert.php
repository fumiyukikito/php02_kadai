<?php
//1. POSTデータ取得
// $name = filter_input( INPUT_GET ,"name" ); //こういうのもあるよ
// $email = filter_input( INPUT_POST, "email"); //こういうのもあるよ
// $text = filter_input( INPUT_POST, "text" ); //こういうのもあるよ
$bookname = $_POST['bookname'];
$bookURL = $_POST['bookURL'];
$bookcomment = $_POST['bookcomment'];


//2. DB接続します
try {
  //ID MAMP ='root'
  //Password:MAMP='root',XAMPP=''
  $pdo = new PDO('mysql:dbname=gs_db_kadai1017;charset=utf8;host=localhost','root','root');
} catch (PDOException $e) {
  exit('DBConnectError:'.$e->getMessage());
}


//３．データ登録SQL作成
$stmt = $pdo->prepare("INSERT INTO gs_bm_table(unique_book,bookname,bookURL,bookcomment,indate)VALUES(NULL,:bookname,:bookURL,:bookcomment,sysdate())");
$stmt->bindValue(':bookname',$bookname,PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':bookURL',$bookURL,PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':bookcomment',$bookcomment,PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute();

//４．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("ErrorMessage:".$error[2]);
}else{
  //５．index.phpへリダイレクト
header('Location: index.php');
}
?>
