<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Template</title>
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
        <h2 style="margin-bottom: 1.5rem;">Edit Template</h2>
        <form action="{{ route('admin.update', $template->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Judul Template</label>
                <input type="text" name="judul" value="{{ $template->judul }}" required>
            </div>
            <div class="form-group">
                <label>Kategori</label>
                <select name="kategori">
                    <option value="Portfolio" {{ $template->kategori == 'Portfolio' ? 'selected' : '' }}>Portfolio</option>
                    <option value="Landing Page" {{ $template->kategori == 'Landing Page' ? 'selected' : '' }}>Landing Page</option>
                    <option value="Blog" {{ $template->kategori == 'Blog' ? 'selected' : '' }}>Blog</option>
                </select>
            </div>
            <div class="form-group">
                <label>URL Image Thumbnail</label>
                <input type="url" name="thumbnail" value="{{ $template->thumbnail }}" required>
            </div>
            <div class="form-group">
                <label>URL Live Preview</label>
                <input type="url" name="link_preview" value="{{ $template->link_preview }}">
            </div>
            <div class="form-group">
                <label>URL Repository GitHub</label>
                <input type="url" name="link_github" value="{{ $template->link_github }}" required>
            </div>
            <div class="form-group">
                <label>Deskripsi</label>
                <textarea name="deskripsi" rows="4" required>{{ $template->deskripsi }}</textarea>
            </div>
            <button type="submit" class="btn">Update Template</button>
            <a href="{{ route('admin.index') }}" style="margin-left: 1rem; color: #666; text-decoration: none;">Batal</a>
        </form>
    </div>
</body>
</html>