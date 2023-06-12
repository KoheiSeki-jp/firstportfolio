<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $to = "koheiseki0913@gmail.com";
    $from = "$email";
    $fromName = "$name";
    $subject = "ポートフォリオのお問い合わせがありました。";
    $body = "名前: $name\n";
    $body .= "メールアドレス: $email\n";
    $body .= "メッセージ:\n$message\n";
    $headers = "From: $fromName <$from>\r\n";
    $headers .= "Reply-To: $from\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "お問い合わせが送信されました。ありがとうございます！";
    } else {
        echo "お問い合わせの送信に失敗しました。";
    }
}
?>