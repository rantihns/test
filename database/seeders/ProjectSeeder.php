<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $projects = [
            [
                'title' => 'Sistem Informasi Akademik',
                'deskription' => 'Aplikasi Berbasis1 Web untuk mengelola data akademik mahasiswa, dosen, dan mata kuliah.',
                'teknologi' => 'Laravel, Bootstrap',
                'image' => 'project1.jpg',
                'status' => 'Selesai',
            ],
            [
                'title' => 'E-Commerce SEO Optimixation',
                'deskription' => 'Aplikasi optimalisasi struktur',
                'teknologi' => 'PHP & Google Search Console',
                'image' => 'project2.jpg',
                'status' => 'In Progress',
            ],
            [
                'title' => 'Fakultas Sastra',
                'deskription' => 'Aplikasi akademik3 mahasiswa, dosen, dan mata kuliah.',
                'teknologi' => 'Laravel, bootstrap',
                'image' => 'project3.jpg',
                'status' => 'Selesai',
            ],
            [
                'title' => 'Sastra inggris',
                'deskription' => 'Aplikasi akademik2 mahasiswa, dosen, dan mata kuliah.',
                'teknologi' => 'PHP',
                'image' => 'project4.jpg',
                'status' => 'Belum Selesai',
            ],
            [
                'title' => 'Fakultas Kehutanan',
                'deskription' => 'Aplikasi akademik1 mahasiswa, dosen, dan mata kuliah.',
                'teknologi' => 'PHP',
                'image' => 'project5.jpg',
                'status' => 'Selesai',
            ],
            [
                'title' => 'Teknik Komputer',
                'deskription' => 'Aplikasi Berbasis1 Web untuk mengelola data akademik mahasiswa, dosen, dan mata kuliah.',
                'teknologi' => 'Laravel, Bootstrap',
                'image' => 'project6.jpg',
                'status' => 'Selesai',
            ],
            [
                'title' => 'Teknik Sipil',
                'deskription' => 'Aplikasi akademik09 mahasiswa, dosen, dan mata kuliah.',
                'teknologi' => 'PHP',
                'image' => 'project7.jpg',
                'status' => 'Selesai',
            ],
            [
                'title' => 'Manajemen Komputer',
                'deskription' => 'Aplikasi Berbasis 12Web untuk mengelola data akademik mahasiswa, dosen, dan mata kuliah.',
                'teknologi' => 'CodeIgniter & Bootstrap',
                'image' => 'project8.jpg',
                'status' => 'Selesai',
            ],
            [
                'title' => 'Manajemen',
                'deskription' => 'Aplikasi akademik 23mahasiswa, dosen, dan mata kuliah.',
                'teknologi' => 'Laravel, Bootstrap',
                'image' => 'project9.jpg',
                'status' => 'In-Progress',
            ],
            [
                'title' => 'Teknik Elektro',
                'deskription' => 'Aplikasi akademik 34mahasiswa, dosen, dan mata kuliah.',
                'teknologi' => 'CodeIgniter & Bootstrap',
                'image' => 'project10.jpg',
                'status' => 'Belum Selesai',
            ],
        ];
        foreach ($projects as $project) {
            Project::create($project);
    }
}
}