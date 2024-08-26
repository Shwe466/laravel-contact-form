<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせフォームの送信</title>
</head>
<body>
    <h1>新しいお問い合わせフォームの送信があります</h1>
    <p><strong>お名前：</strong> {{ $data['name'] }}</p>
    <p><strong>メールアドレス：</strong> {{ $data['email'] }}</p>
    <p><strong>件名：</strong> {{ $data['subject'] }}</p>
    <p><strong>お問い合わせ内容：</strong></p>
    <p>{{ $data['message'] }}</p>
</body>
</html>