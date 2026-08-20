<?php

namespace App\Http\Controllers;

class AnggotaController extends Controller
{
    // Data dummy anggota tim - akan diganti dengan data asli nanti
    protected $anggota = [
        [
            'id' => 1,
            'nama' => 'Raka Raditya Karim',
            'inisial' => 'R',
            'role' => 'Cyber Security Enthusiast',
            'kelas' => 'XI Rekayasa Perangkat Lunak',
            'jurusan' => 'Rekayasa Perangkat Lunak',
            'sekolah' => 'SMKN 1 GARUT',
            'lokasi' => 'Garut, Indonesia',
            'minat' => ['Cyber Security', 'IoT', 'CAD', 'Pemrograman'],
            'focus' => 'Cyber Security, IoT, CAD',
            'github' => 'https://github.com/rakaXPPL2',
            'email' => 'raka@smkn1garut.sch.id',
            'status' => 'OPEN FOR COLLABORATION',
            'stats' => [
                'juara' => 1,
                'lomba' => '3+',
                'bidang' => 4,
                'tahun' => 2
            ],
            'bio' => 'Siswa Rekayasa Perangkat Lunak kelas XI Rekayasa Perangkat Lunak di SMKN 1 GARUT, tertarik pada cyber security, IoT, CAD, dan pemrograman. Aktif mengikuti kompetisi teknologi dan pernah menjadi juara di salah satu lomba bidang teknologi.',
            'saat_ini' => [
                ['text' => 'Belajar Jaringan & Cyber Security lebih dalam', 'color' => 'green'],
                ['text' => 'Mengerjakan project IoT sederhana', 'color' => 'blue'],
                ['text' => 'Latihan desain menggunakan CAD', 'color' => 'purple'],
                ['text' => 'Mempersiapkan lomba teknologi berikutnya', 'color' => 'orange'],
            ],
            'skill' => [
                ['nama' => 'Cyber Security', 'persen' => 25, 'color' => 'red'],
                ['nama' => 'IoT', 'persen' => 90, 'color' => 'green'],
                ['nama' => 'CAD', 'persen' => 65, 'color' => 'orange'],
                ['nama' => 'Pemrograman', 'persen' => 78, 'color' => 'blue'],
            ],
            'tools' => ['Cyber Security', 'IoT', 'CAD', 'Pemrograman', 'Networking', 'Wireshark', 'Arduino', 'Python'],
            'tool_colors' => ['red', 'green', 'orange', 'blue', 'purple', 'red', 'blue', 'green'],
            'prestasi' => [
                [
                    'juara' => 2,
                    'nama' => 'Lomba Teknologi',
                    'deskripsi' => 'Meraih juara 2 dalam kompetisi di bidang teknologi tingkat sekolah/daerah bersama teman-teman saya.',
                    'badge' => 'JUARA 2'
                ]
            ],
        ],
        [
            'id' => 2,
            'nama' => 'Nama Anggota 2',
            'inisial' => 'A',
            'role' => 'Full Stack Developer',
            'kelas' => 'XI Rekayasa Perangkat Lunak',
            'jurusan' => 'Rekayasa Perangkat Lunak',
            'sekolah' => 'SMKN 1 GARUT',
            'lokasi' => 'Garut, Indonesia',
            'minat' => ['Web Development', 'Mobile App', 'Database', 'UI/UX'],
            'focus' => 'Web Development, Mobile App',
            'github' => 'https://github.com/',
            'email' => 'anggota2@smkn1garut.sch.id',
            'status' => 'OPEN FOR COLLABORATION',
            'stats' => [
                'juara' => 0,
                'lomba' => '2+',
                'bidang' => 3,
                'tahun' => 2
            ],
            'bio' => 'Siswa Rekayasa Perangkat Lunak kelas XI Rekayasa Perangkat Lunak di SMKN 1 GARUT. Tertarik pada pengembangan web dan aplikasi mobile.',
            'saat_ini' => [
                ['text' => 'Belajar Laravel dan React', 'color' => 'blue'],
                ['text' => 'Mengerjakan project web pribadi', 'color' => 'green'],
                ['text' => 'Mempelajari UI/UX Design', 'color' => 'purple'],
            ],
            'skill' => [
                ['nama' => 'Web Development', 'persen' => 85, 'color' => 'blue'],
                ['nama' => 'Mobile App', 'persen' => 60, 'color' => 'green'],
                ['nama' => 'Database', 'persen' => 70, 'color' => 'orange'],
                ['nama' => 'UI/UX', 'persen' => 55, 'color' => 'purple'],
            ],
            'tools' => ['Laravel', 'React', 'Vue', 'Flutter', 'MySQL', 'Figma', 'HTML', 'CSS'],
            'tool_colors' => ['red', 'blue', 'green', 'orange', 'purple', 'blue', 'red', 'green'],
            'prestasi' => [
                [
                    'juara' => 3,
                    'nama' => 'Lomba Web Design',
                    'deskripsi' => 'Meraih juara 3 dalam kompetisi web design tingkat kabupaten.',
                    'badge' => 'JUARA 3'
                ]
            ],
        ],
        [
            'id' => 3,
            'nama' => 'Nama Anggota 3',
            'inisial' => 'B',
            'role' => 'Backend Developer',
            'kelas' => 'XI Rekayasa Perangkat Lunak',
            'jurusan' => 'Rekayasa Perangkat Lunak',
            'sekolah' => 'SMKN 1 GARUT',
            'lokasi' => 'Garut, Indonesia',
            'minat' => ['Backend', 'API', 'Cloud', 'DevOps'],
            'focus' => 'Backend, API Development',
            'github' => 'https://github.com/',
            'email' => 'anggota3@smkn1garut.sch.id',
            'status' => 'LEARNING NEW THINGS',
            'stats' => [
                'juara' => 0,
                'lomba' => '1+',
                'bidang' => 2,
                'tahun' => 2
            ],
            'bio' => 'Siswa Rekayasa Perangkat Lunak kelas XI Rekayasa Perangkat Lunak di SMKN 1 GARUT. Fokus pada pengembangan backend dan API.',
            'saat_ini' => [
                ['text' => 'Belajar Node.js dan Express', 'color' => 'green'],
                ['text' => 'Mempelajari Docker dan Kubernetes', 'color' => 'blue'],
                ['text' => 'Membuat REST API untuk project', 'color' => 'orange'],
            ],
            'skill' => [
                ['nama' => 'Backend', 'persen' => 75, 'color' => 'blue'],
                ['nama' => 'API Development', 'persen' => 80, 'color' => 'green'],
                ['nama' => 'Cloud', 'persen' => 45, 'color' => 'purple'],
                ['nama' => 'DevOps', 'persen' => 50, 'color' => 'orange'],
            ],
            'tools' => ['Node.js', 'Express', 'PHP', 'Laravel', 'Docker', 'AWS', 'PostgreSQL', 'MongoDB'],
            'tool_colors' => ['green', 'green', 'red', 'blue', 'purple', 'blue', 'orange', 'green'],
            'prestasi' => [],
        ],
        [
            'id' => 4,
            'nama' => 'Nama Anggota 4',
            'inisial' => 'C',
            'role' => 'UI/UX Designer',
            'kelas' => 'XI Rekayasa Perangkat Lunak',
            'jurusan' => 'Rekayasa Perangkat Lunak',
            'sekolah' => 'SMKN 1 GARUT',
            'lokasi' => 'Garut, Indonesia',
            'minat' => ['UI Design', 'UX Research', 'Prototyping', 'Branding'],
            'focus' => 'UI/UX Design, Prototyping',
            'github' => 'https://github.com/',
            'email' => 'anggota4@smkn1garut.sch.id',
            'status' => 'CREATIVE MODE',
            'stats' => [
                'juara' => 2,
                'lomba' => '4+',
                'bidang' => 3,
                'tahun' => 2
            ],
            'bio' => 'Siswa Rekayasa Perangkat Lunak kelas XI Rekayasa Perangkat Lunak di SMKN 1 GARUT. Memiliki passion dalam desain UI/UX dan prototyping.',
            'saat_ini' => [
                ['text' => 'Membuat wireframe dan mockup', 'color' => 'purple'],
                ['text' => 'Belajar prinsip UX Research', 'color' => 'blue'],
                ['text' => 'Mengerjakan redesign aplikasi', 'color' => 'green'],
                ['text' => 'Ikut lomba design competition', 'color' => 'orange'],
            ],
            'skill' => [
                ['nama' => 'UI Design', 'persen' => 90, 'color' => 'purple'],
                ['nama' => 'UX Research', 'persen' => 65, 'color' => 'blue'],
                ['nama' => 'Prototyping', 'persen' => 85, 'color' => 'green'],
                ['nama' => 'Branding', 'persen' => 70, 'color' => 'orange'],
            ],
            'tools' => ['Figma', 'Adobe XD', 'Sketch', 'Illustrator', 'Photoshop', 'Protopie', 'InVision', 'Canva'],
            'tool_colors' => ['purple', 'blue', 'green', 'orange', 'red', 'purple', 'blue', 'green'],
            'prestasi' => [
                [
                    'juara' => 1,
                    'nama' => 'Lomba UI Design',
                    'deskripsi' => 'Meraih juara 1 dalam kompetisi UI/UX design tingkat provinsi.',
                    'badge' => 'JUARA 1'
                ],
                [
                    'juara' => 2,
                    'nama' => 'Design Hackathon',
                    'deskripsi' => 'Meraih juara 2 dalam hackathon desain antar sekolah.',
                    'badge' => 'JUARA 2'
                ]
            ],
        ],
    ];

    public function index()
    {
        return view('home', [
            'anggotaList' => $this->anggota,
            'teamName' => 'Kelompok 9',
            'kelas' => 'XI Rekayasa Perangkat Lunak',
            'sekolah' => 'SMKN 1 GARUT',
            'topik' => 'Kolaborasi Tim Menggunakan Git dan GitHub'
        ]);
    }

    public function profil()
    {
        return view('profil', [
            'anggotaList' => $this->anggota,
            'teamName' => 'Kelompok 9',
            'kelas' => 'XI Rekayasa Perangkat Lunak',
            'sekolah' => 'SMKN 1 GARUT',
            'topik' => 'Kolaborasi Tim Menggunakan Git dan GitHub'
        ]);
    }

    public function show($id)
    {
        $anggota = collect($this->anggota)->firstWhere('id', (int) $id);

        if (!$anggota) {
            abort(404);
        }

        return view('detail', [
            'anggota' => $anggota,
            'teamName' => 'Kelompok 9',
            'kelas' => 'XI Rekayasa Perangkat Lunak',
            'sekolah' => 'SMKN 1 GARUT'
        ]);
    }
}
