<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    
    $to = 'takarawebsiteai@gmail.com';
    
    
    $body = "名前: $name\n";
    $body .= "メールアドレス: $email\n";
    $body .= "件名: $subject\n";
    $body .= "お問い合わせ内容:\n$message\n";
    
   
    mail($to, $subject, $body);
    
   
    echo 'お問い合わせありがとうございます。<br>';
    echo 'メールを送信しました。';
}
?>