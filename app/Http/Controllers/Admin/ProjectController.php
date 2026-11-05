<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->paginate(6);
        return view('admin.project.index', compact('projects'));
    }

    public function create()
    {
        return view('admin.project.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'deskription' => 'nullable|string',
            'teknologi' => 'nullable|string',
            'status' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images'), $imageName);
            $data['image'] = $imageName;
        }

        Project::create($data);

        return redirect()->route('admin.project.index')->with('success', 'Project berhasil ditambahkan');
    }

    public function show(string $id)
    {
        $project = Project::findOrFail($id);
        return view('admin.project.show', compact('project'));
    }

    public function edit(string $id)
    {
        $project = Project::findOrFail($id);
        return view('admin.project.edit', compact('project'));
    }

    public function update(Request $request, string $id)
    {
        $project = Project::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'deskription' => 'nullable|string',
            'teknologi' => 'nullable|string',
            'status' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            if ($project->image && File::exists(public_path('images/' . $project->image))) {
                File::delete(public_path('images/' . $project->image));
            }
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images'), $imageName);
            $data['image'] = $imageName;
        }

        $project->update($data);

        return redirect()->route('admin.project.index')->with('success', 'Project berhasil diupdate');
    }

    public function destroy(string $id)
    {
        $project = Project::findOrFail($id);

        if ($project->image && File::exists(public_path('images/' . $project->image))) {
            File::delete(public_path('images/' . $project->image));
        }

        $project->delete();

        return redirect()->route('admin.project.index')->with('success', 'Project berhasil dihapus');
    }
}
