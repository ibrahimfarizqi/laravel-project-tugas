<?php

namespace App\Http\Controllers;

use App\Models\Template;
use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function index(Request $request)
    {
        $query = Template::query();

        // Search
        if ($request->filled('search')) {
            $query->where(function($q) use ($request) {
                $q->where('judul', 'like', '%' . $request->search . '%')
                  ->orWhere('deskripsi', 'like', '%' . $request->search . '%');
            });
        }

        // Filter Category
        if ($request->filled('category') && $request->category != 'All') {
            $query->where('kategori', $request->category);
        }

        // Filter Tech Stack
        if ($request->filled('tech')) {
            $query->where('tech_stack', 'like', '%' . $request->tech . '%');
        }

        // Sorting System
        if ($request->sort == 'popular') {
            $query->orderBy('likes', 'desc');
        } elseif ($request->sort == 'views') {
            $query->orderBy('views', 'desc');
        } else {
            $query->latest();
        }

        $templates = $query->get();
        return view('index', compact('templates'));
    }

    public function like($id)
    {
        $template = Template::findOrFail($id);
        $template->increment('likes');
        return response()->json(['success' => true, 'likes' => $template->likes]);
    }

    public function incrementView($id)
    {
        $template = Template::findOrFail($id);
        $template->increment('views');
        return response()->json(['success' => true]);
    }

    // --- ADMIN CRUD ---
    public function adminIndex()
    {
        $templates = Template::latest()->get();
        return view('admin.index', compact('templates'));
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'kategori' => 'required',
            'link_github' => 'required|url',
        ]);

        $data = $request->all();

        // Handling Upload Gambar
        if ($request->hasFile('thumbnail_file')) {
            $path = $request->file('thumbnail_file')->store('thumbnails', 'public');
            $data['thumbnail'] = asset('storage/' . $path);
        }

        Template::create($data);
        return redirect()->route('admin.index')->with('success', 'Template berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $template = Template::findOrFail($id);
        return view('admin.edit', compact('template'));
    }

    public function update(Request $request, $id)
    {
        $template = Template::findOrFail($id);
        $data = $request->all();

        if ($request->hasFile('thumbnail_file')) {
            $path = $request->file('thumbnail_file')->store('thumbnails', 'public');
            $data['thumbnail'] = asset('storage/' . $path);
        }

        $template->update($data);
        return redirect()->route('admin.index')->with('success', 'Template berhasil diupdate!');
    }

    public function destroy($id)
    {
        $template = Template::findOrFail($id);
        $template->delete();
        return redirect()->route('admin.index')->with('success', 'Template berhasil dihapus!');
    }
}