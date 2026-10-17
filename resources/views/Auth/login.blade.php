<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin | TemplateVault</title>
    <link href="https://fonts.googleapis.com/css2?family=Mona+Sans:wght@600;800&display=swap" rel="stylesheet">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Mona Sans', sans-serif; }
        body { background-color: #0d0c22; color: #fff; min-height: 100vh; display: flex; align-items: center; justify-content: center; padding: 1rem; }
        
        .login-card { background: #181734; border: 1px solid rgba(255,255,255,0.1); width: 100%; max-width: 400px; padding: 2.5rem; border-radius: 16px; box-shadow: 0 10px 30px rgba(0,0,0,0.5); }
        .logo { text-align: center; font-size: 1.8rem; font-weight: 800; font-style: italic; color: #ea4c89; margin-bottom: 0.5rem; }
        .subtitle { text-align: center; color: #9e9ea7; font-size: 0.9rem; margin-bottom: 2rem; }

        .form-group { margin-bottom: 1.2rem; }
        label { display: block; margin-bottom: 0.5rem; font-size: 0.85rem; color: #ccc; }
        input { width: 100%; padding: 0.8rem 1rem; border-radius: 8px; border: 1px solid rgba(255,255,255,0.15); background: #0d0c22; color: #fff; outline: none; font-size: 0.9rem; }
        input:focus { border-color: #ea4c89; }

        .btn-login { width: 100%; padding: 0.8rem; background: #ea4c89; color: #fff; border: none; border-radius: 8px; font-size: 0.95rem; font-weight: 700; cursor: pointer; transition: background 0.2s; margin-top: 1rem; }
        .btn-login:hover { background: #e13b7b; }

        .error-msg { background: rgba(220, 53, 69, 0.2); border: 1px solid #dc3545; color: #ff6b6b; padding: 0.7rem; border-radius: 8px; font-size: 0.85rem; margin-bottom: 1.2rem; text-align: center; }
        .back-link { display: block; text-align: center; margin-top: 1.5rem; color: #9e9ea7; text-decoration: none; font-size: 0.85rem; }
        .back-link:hover { color: #fff; }
    </style>
</head>
<body>

    <div class="login-card">
        <div class="logo">Dribbble.Vault</div>
        <p class="subtitle">Akses Dashboard Admin</p>

        @if($errors->any())
            <div class="error-msg">{{ $errors->first() }}</div>
        @endif

        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Email Admin</label>
                <input type="email" name="email" value="{{ old('email') }}" required placeholder="admin@gmail.com">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" required placeholder="••••••••">
            </div>
            <button type="submit" class="btn-login">Sign In</button>
        </form>

        <a href="{{ route('home') }}" class="back-link">← Kembali ke Halaman Utama</a>
    </div>

</body>
</html>