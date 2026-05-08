<!DOCTYPE html>
<html>
<head>
    <title>Aspirasi Mahasiswa</title>
    <style>
        body { font-family: sans-serif; background: #f0f2f5; display: flex; flex-direction: column; align-items: center; justify-content: center; min-height: 100vh; margin: 0; }
        .nav { margin-bottom: 20px; }
        .nav a { text-decoration: none; padding: 10px 20px; background: #ddd; color: #333; border-radius: 5px; margin: 0 5px; }
        .nav a.active { background: #e67e22; color: white; }
        .container { width: 100%; max-width: 500px; background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); }
input[type="text"], 
input[type="number"], 
textarea { 
    width: 100%; 
    padding: 12px; 
    margin: 10px 0; 
    border: 1px solid #ddd; 
    border-radius: 6px; 
    box-sizing: border-box; 
}
input[type="checkbox"] {
    width: auto !important;
    margin: 0 10px 0 0;
    cursor: pointer;
}

.checkbox-group {
    display: flex;
    align-items: center;
    justify-content: flex-start;
    margin: 15px 0;
    width: 100%;
}
        button { width: 100%; background: #e67e22; color: white; border: none; padding: 12px; border-radius: 6px; cursor: pointer; font-weight: bold; }
        .success { color: green; margin-bottom: 15px; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Kotak Aspirasi</h2>
        @if(session('success')) <p class="success">{{ session('success') }}</p> @endif
        <form action="{{ route('aspirasi.store') }}" method="POST">
            @csrf
            <input type="text" name="subjek" placeholder="Subjek Aspirasi" required>
            <textarea name="pesan" placeholder="Sampaikan saran atau kritik..." rows="3" required></textarea>
            <div class="checkbox-group">
            <input type="checkbox" name="is_anonymous" id="is_anonymous">
            <label for="is_anonymous">Kirim sebagai Anonim</label>
            </div>
            <br><br>
            <button type="submit">Kirim Aspirasi</button>
        </form>
    </div>
</body>
</html>