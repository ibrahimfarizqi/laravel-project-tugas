<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin | Template Vault</title>
    <link href="https://fonts.googleapis.com/css2?family=Mona+Sans:wght@600;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Mona Sans', sans-serif; background: #f8f9fa; padding: 2rem; color: #0d0c22; }
        .container { max-width: 1000px; margin: 0 auto; background: #fff; padding: 2rem; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.05); }
        .header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.5rem; }
        .btn { background: #ea4c89; color: #fff; padding: 0.6rem 1.2rem; border-radius: 8px; text-decoration: none; font-weight: 600; border: none; cursor: pointer; }
        .btn-back { background: #0d0c22; }
        table { width: 100%; border-collapse: collapse; margin-top: 1rem; }
        th, td { padding: 0.8rem; text-align: left; border-bottom: 1px solid #eee; }
        th { background: #f3f3f4; }
        .btn-danger { background: #dc3545; }
        .btn-warning { background: #ffc107; color: #000; }
    </style>
</head>
<body>
    <div class="header">
    <h2>Dashboard Admin Template</h2>
    <div style="display: flex; gap: 0.5rem;">
        <a href="{{ route('home') }}" class="btn btn-back">← Web Utama</a>
        <a href="{{ route('admin.create') }}" class="btn">+ Tambah</a>
        <form action="{{ route('logout') }}" method="POST" style="display:inline;">
            @csrf
            <button type="submit" class="btn btn-danger">Logout</button>
        </form>
    </div>
</div>

        @if(session('success'))
            <p style="color: green; margin-bottom: 1rem;">{{ session('success') }}</p>
        @endif

        <table>
            <thead>
                <tr>
                    <th>Thumbnail</th>
                    <th>Judul</th>
                    <th>Kategori</th>
                    <th>Likes</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($templates as $item)
                    <tr>
                        <td><img src="{{ $item->thumbnail }}" width="60" style="border-radius: 6px;"></td>
                        <td><strong>{{ $item->judul }}</strong></td>
                        <td>{{ $item->kategori }}</td>
                        <td>❤️ {{ $item->likes }}</td>
                        <td>
                            <a href="{{ route('admin.edit', $item->id) }}" class="btn btn-warning" style="padding: 0.3rem 0.6rem; font-size: 0.8rem;">Edit</a>
                            <form action="{{ route('admin.destroy', $item->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" style="padding: 0.3rem 0.6rem; font-size: 0.8rem;" onclick="return confirm('Yakin mau hapus?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>