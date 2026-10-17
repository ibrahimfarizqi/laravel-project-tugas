<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Template Baru</title>
    <link href="https://fonts.googleapis.com/css2?family=Mona+Sans:wght@600;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Mona Sans', sans-serif; background: #f8f9fa; padding: 2rem; }
        .container { max-width: 600px; margin: 0 auto; background: #fff; padding: 2rem; border-radius: 12px; }
        .form-group { margin-bottom: 1.2rem; }
        label { display: block; margin-bottom: 0.4rem; font-weight: 600; }
        input, select, textarea { width: 100%; padding: 0.7rem; border: 1px solid #ccc; border-radius: 8px; font-size: 0.9rem; }
        .btn { background: #ea4c89; color: #fff; padding: 0.7rem 1.5rem; border: none; border-radius: 8px; font-weight: 600; cursor: pointer; }
    </style>
</head>
<body>
    <div class="container">
        <h2 style="margin-bottom: 1.5rem;">Tambah Template Baru</h2>
        <form action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Judul Template</label>
                <input type="text" name="judul" required>
            </div>
            <div class="form-group">
                <label>Kategori</label>
                <select name="kategori">
                    <option value="Portfolio">Portfolio</option>
                    <option value="Landing Page">Landing Page</option>
                    <option value="Blog">Blog</option>
                </select>
            </div>
            <div class="form-group">
                <label>Tech Stack (Contoh: Laravel, Tailwind, Vue)</label>
                <input type="text" name="tech_stack" placeholder="Laravel, Bootstrap">
            </div>
            <div class="form-group">
                <label>Upload File Gambar Thumbnail</label>
                <input type="file" name="thumbnail_file" accept="image/*">
            </div>
            <div class="form-group">
                <label>ATAU Pake URL Gambar (External)</label>
                <input type="url" name="thumbnail" placeholder="https://picsum.photos/600/400">
            </div>
            <div class="form-group">
                <label>URL Live Preview</label>
                <input type="url" name="link_preview">
            </div>
            <div class="form-group">
                <label>URL Repository GitHub</label>
                <input type="url" name="link_github" required>
            </div>
            <div class="form-group">
                <label>Deskripsi</label>
                <textarea name="deskripsi" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn">Simpan Template</button>
            <a href="{{ route('admin.index') }}" style="margin-left: 1rem; color: #666; text-decoration: none;">Batal</a>
        </form>
    </div>
</body>
</html>