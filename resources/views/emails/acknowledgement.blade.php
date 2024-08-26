<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>自動送信メール</title>
</head>
<body>
    <h1>お問い合わせを受け付けました</h1>
    <p>{{ $data['name'] }}様</p>
    <p>お問い合わせありがとうございます！</p>
    ーーーー
    <p>お問い合わせ内容は次のとおりです。</p>
    <p><strong>件名:</strong> {{ $data['subject'] }}</p>
    <p><strong>お問い合わせ内容:</strong></p>
    <p>{{ $data['message'] }}</p>
    ーーーー
    <p>担当者よりご連絡いたしますので、今しばらくお待ちください。</p>
</body>
</html>