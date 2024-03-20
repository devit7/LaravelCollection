<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Toko
{
    use HasFactory;

    protected static $list_toko = [
        [
            'id' => '1',
            'nama' => 'Ayang Ke Satu',
            'desc' => 'Ayangku ini penurut mudah untuk diurus tapi boros bensin. ',
            'keunikan' => [
                            'tidak bisa diem kalo ga dipegang xd',
                            'suka makan',
                            'suka tidur'
                        ],
            'img' => 'http://img-host-by-dev.vercel.app/img/ayangKu/430335171_18421381387031145_2551748634600301387_n.jpg'
        ],
        [
            'id' => '2',
            'nama' => 'Ayang Ke Dua',
            'desc' => 'Ayangku ini penurut mudah untuk diurus tapi boros bensin. ',
            'keunikan' => [
                            'tidak bisa diem kalo ga dipegang xd',
                            'suka makan',
                            'suka tidur'],
            'img' => 'http://img-host-by-dev.vercel.app/img/ayangKu/424905635_18410917897031145_1822307842112363369_n.jpg'
        ],
        [
            'id' => '3',
            'nama' => 'Ayang Ke Tiga',
            'desc' => 'Ayangku ini penurut mudah untuk diurus tapi boros bensin. ',
            'keunikan' => [
                            'tidak bisa diem kalo ga dipegang xd',
                            'suka makan',
                            'suka tidur'],
            'img' => 'http://img-host-by-dev.vercel.app/img/ayangKu/402791915_316126391187425_7251678098540808968_n.jpg'
        ],
        [
            'id' => '4',
            'nama' => 'Ayang Ke Empat',
            'desc' => 'Ayangku ini penurut mudah untuk diurus tapi boros bensin. ',
            'keunikan' => [
                            'tidak bisa diem kalo ga dipegang xd',
                            'suka makan',
                            'suka tidur'],
            'img' => 'http://img-host-by-dev.vercel.app/img/ayangKu/414067026_17945287892743140_7723388322324322910_n.jpg'
        ],
    ];


    public static function all()
    {
        return collect(self::$list_toko); //mengubah array menjadi collection
    }

    public static function find($id)
    {
        $toko = static::all(); //mengambil data dari method all
        /* dd($toko);
        die(); */
        return $toko->firstWhere('id', $id); //mencari data berdasarkan id
    }
}
