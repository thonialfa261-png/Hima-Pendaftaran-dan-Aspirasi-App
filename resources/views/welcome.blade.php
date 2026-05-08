<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran HIMA</title>
    <style>
        body { font-family: sans-serif; background: #f0f2f5; display: flex; flex-direction: column; align-items: center; justify-content: center; min-height: 100vh; margin: 0; }
        .nav { margin-bottom: 20px; }
        .nav a { text-decoration: none; padding: 10px 20px; background: #ddd; color: #333; border-radius: 5px; margin: 0 5px; }
        .nav a.active { background: #2d336b; color: white; }
        .container { width: 100%; max-width: 500px; background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); }
        input, textarea { width: 100%; padding: 12px; margin: 10px 0; border: 1px solid #ddd; border-radius: 6px; box-sizing: border-box; }
        button { width: 100%; background: #2d336b; color: white; border: none; padding: 12px; border-radius: 6px; cursor: pointer; font-weight: bold; }
        .success { color: green; margin-bottom: 15px; }
    </style>
</head>
<body>
    <div class="nav">
        <a href="/" class="active">Pendaftaran</a>
        <a href="/aspirasi">Aspirasi</a>
        <a href="{{ route('login') }}">Login Admin</a>
    </div>

    <div class="container">
        <h2>Form Pendaftaran HIMA</h2>
        @if(session('success')) <p class="success">{{ session('success') }}</p> @endif
        <form action="{{ route('daftar.store') }}" method="POST">
            @csrf
            <input type="text" name="nama" placeholder="Nama Lengkap" required>
            <input type="text" name="nim" placeholder="NIM" required>
            <input type="number" name="angkatan" placeholder="Tahun Angkatan" required>
            <textarea name="alasan" placeholder="Alasan bergabung..." rows="3" required></textarea>
            <button type="submit">Kirim Pendaftaran</button>
        </form>
    </div>
</body>
</html>