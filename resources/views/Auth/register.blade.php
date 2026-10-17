<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Sign Up | TemplateVault</title>
    <link href="https://fonts.googleapis.com/css2?family=Mona+Sans:wght@600;800&display=swap" rel="stylesheet">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Mona Sans', sans-serif; }
        body { background-color: #0d0c22; color: #fff; min-height: 100vh; display: flex; align-items: center; justify-content: center; padding: 1rem; }
        .card { background: #181734; border: 1px solid rgba(255,255,255,0.1); width: 100%; max-width: 420px; padding: 2.5rem; border-radius: 16px; }
        .logo { text-align: center; font-size: 1.8rem; font-weight: 800; font-style: italic; color: #ea4c89; margin-bottom: 0.5rem; }
        .subtitle { text-align: center; color: #9e9ea7; font-size: 0.9rem; margin-bottom: 2rem; }
        .form-group { margin-bottom: 1rem; }
        label { display: block; margin-bottom: 0.4rem; font-size: 0.85rem; color: #ccc; }
        input { width: 100%; padding: 0.8rem 1rem; border-radius: 8px; border: 1px solid rgba(255,255,255,0.15); background: #0d0c22; color: #fff; outline: none; }
        .btn { width: 100%; padding: 0.8rem; background: #ea4c89; color: #fff; border: none; border-radius: 8px; font-weight: 700; cursor: pointer; margin-top: 1rem; }
        .link { display: block; text-align: center; margin-top: 1.2rem; color: #9e9ea7; text-decoration: none; font-size: 0.85rem; }
        .error { color: #ff6b6b; font-size: 0.8rem; margin-top: 0.2rem; }
    </style>
</head>
<body>
    <div class="card">
        <div class="logo">Dribbble.Vault</div>
        <p class="subtitle">Buat Akun Baru Kamu</p>

        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" name="name" value="{{ old('name') }}" required>
                @error('name') <div class="error">{{ $message }}</div> @enderror
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" value="{{ old('email') }}" required>
                @error('email') <div class="error">{{ $message }}</div> @enderror
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" required>
                @error('password') <div class="error">{{ $message }}</div> @enderror
            </div>
            <div class="form-group">
                <label>Konfirmasi Password</label>
                <input type="password" name="password_confirmation" required>
            </div>
            <button type="submit" class="btn">Daftar Akun</button>
        </form>

        <a href="{{ route('login') }}" class="link">Sudah punya akun? Log in di sini</a>
    </div>
</body>
</html>