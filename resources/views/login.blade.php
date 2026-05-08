<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login Admin HIMA</title>
    <style>
        body { font-family: sans-serif; background: #f0f2f5; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .container { width: 100%; max-width: 400px; background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); }
        h2 { text-align: center; color: #333; }
        input { width: 100%; padding: 12px; margin: 10px 0; border: 1px solid #ddd; border-radius: 6px; box-sizing: border-box; }
        button { width: 100%; padding: 12px; background: #2d336b; color: white; border: none; border-radius: 6px; cursor: pointer; font-weight: bold; }
        button:hover { background: #1e244a; }
        .error { color: red; font-size: 0.9em; margin-bottom: 10px; text-align: center; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Login Admin</h2>

        @if($errors->any())
            <div class="error">{{ $errors->first() }}</div>
        @endif

        <form action="{{ route('login.post') }}" method="POST">
            @csrf
            <input type="email" name="email" placeholder="Email Admin" required>
            <input type="password" name="password" placeholder="Password" required>
            <div style="margin: 10px 0; text-align: left;">
                <input type="checkbox" name="remember" id="remember" style="width: auto;">
                <label for="remember">Ingat Saya</label>
            </div>
            <button type="submit">Masuk ke Sistem</button>
        </form>
        <p style="text-align: center; margin-top: 15px;">
            <a href="/" style="color: #2d336b; text-decoration: none; font-size: 0.9em;">← Kembali ke Pendaftaran</a>
        </p>
    </div>
</body>
</html>