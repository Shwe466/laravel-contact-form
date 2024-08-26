<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>お問い合わせ内容の確認</title>
  <!-- Include Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h3 class="text-center my-3">お問い合わせ内容の確認</h3>

                <!-- Display input data for confirmation -->
                <form class="shadow-sm px-3 py-5 bg-white rounded" action="{{ route('contact.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label text-muted">お名前：</label>
                        <p>{{ $data['name'] }}</p>
                        <input type="hidden" name="name" value="{{ $data['name'] }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-muted">メールアドレス：</label>
                        <p>{{ $data['email'] }}</p>
                        <input type="hidden" name="email" value="{{ $data['email'] }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-muted">ご用件：</label>
                        <p>{{ $data['subject'] }}</p>
                        <input type="hidden" name="subject" value="{{ $data['subject'] }}">
                    </div>
                    <div class="mb-4">
                        <label class="form-label text-muted">お問い合わせ内容：</label>
                        <p>{{ $data['message'] }}</p>
                        <input type="hidden" name="message" value="{{ $data['message'] }}">
                    </div>
                    <!-- Pass the data as hidden fields -->
                    @foreach ($data as $key => $value)
                        <input type="hidden" name="{{ $key }}" value="{{ $value }}">
                    @endforeach
                    <!-- Add a hidden input to detect if the "Edit" button was clicked -->
                    <button type="submit" name="back" value="back" class="btn btn-secondary">入力内容修正</button>
                    <button type="submit" class="btn btn-primary">送信する</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>