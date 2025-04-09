<?php

namespace Database\Seeders\Badaso\ManualGenerate;

use Illuminate\Database\Seeder;
use Uasoft\Badaso\Facades\Badaso;

class ConversationsTableSeeder extends Seeder
{
	/**
	* Auto generated seed file
	*
	* @return void
	*
	* @throws Exception
	*/
	public function run()
	{
		\DB::beginTransaction();
		try {
			\DB::table('conversations')->delete();

			\DB::table('conversations')->insert(array (
                0 => 
                array (
                    'id' => 1,
                    'title' => 'Mau menggunakan EA guruforex',
                    'keyword' => 'ea',
                    'answer_id' => 1,
                    'created_at' => '2024-05-30 03:40:38',
                    'updated_at' => '2024-05-30 03:40:38',
                ),
                1 => 
                array (
                    'id' => 2,
                    'title' => 'Manage VPS',
                    'keyword' => 'manage vps',
                    'answer_id' => 5,
                    'created_at' => '2024-05-30 03:46:41',
                    'updated_at' => '2024-05-30 03:46:41',
                ),
                2 => 
                array (
                    'id' => 3,
                    'title' => 'Berapa minimal deposit GF-Leopard',
                    'keyword' => 'deposit leopard',
                    'answer_id' => 3,
                    'created_at' => '2024-05-30 03:47:06',
                    'updated_at' => '2024-05-30 03:47:06',
                ),
                3 => 
                array (
                    'id' => 5,
                    'title' => 'Sewa jasa installasi EA guruforex',
                    'keyword' => 'jasa installasi ea',
                    'answer_id' => 5,
                    'created_at' => '2024-05-30 03:48:30',
                    'updated_at' => '2024-05-30 03:48:30',
                ),
                4 => 
                array (
                    'id' => 6,
                    'title' => 'Spesifikasi minimum PC menjalankan EA',
                    'keyword' => 'minimum pc ea',
                    'answer_id' => 6,
                    'created_at' => '2024-05-30 05:03:20',
                    'updated_at' => '2024-05-30 05:03:20',
                ),
                5 => 
                array (
                    'id' => 7,
                    'title' => 'Bagaimana cara mendapatkan vps',
                    'keyword' => 'mendapatkan vps',
                    'answer_id' => 5,
                    'created_at' => '2024-05-30 05:07:56',
                    'updated_at' => '2024-05-30 05:07:56',
                ),
                6 => 
                array (
                    'id' => 10,
                    'title' => 'Video tutorial video cara install EA Guruforex',
                    'keyword' => 'install ea',
                    'answer_id' => 10,
                    'created_at' => '2024-05-30 05:14:52',
                    'updated_at' => '2024-05-30 05:14:52',
                ),
                7 => 
                array (
                    'id' => 11,
                    'title' => 'Cara pindah OctaFX ke under Guruforex',
                    'keyword' => 'pindah octafx',
                    'answer_id' => 11,
                    'created_at' => '2024-05-30 05:18:27',
                    'updated_at' => '2024-05-30 05:18:27',
                ),
                8 => 
                array (
                    'id' => 12,
                    'title' => 'Cara pindah Akun Exness ke jaringan Guruforex',
                    'keyword' => 'pindah exness',
                    'answer_id' => 12,
                    'created_at' => '2024-05-30 05:25:06',
                    'updated_at' => '2024-05-30 05:25:06',
                ),
                9 => 
                array (
                    'id' => 13,
                    'title' => 'Cara pindah MIFX ke under Guruforex',
                    'keyword' => 'pindah mifx',
                    'answer_id' => 13,
                    'created_at' => '2024-05-30 05:27:21',
                    'updated_at' => '2024-05-30 05:27:21',
                ),
                10 => 
                array (
                    'id' => 15,
                    'title' => 'Cara pindah XM ke jaringan Guruforex',
                    'keyword' => 'pindah xm',
                    'answer_id' => 15,
                    'created_at' => '2024-05-30 05:29:44',
                    'updated_at' => '2024-05-30 05:29:44',
                ),
                11 => 
                array (
                    'id' => 16,
                    'title' => 'Cara pindah akun Orbitrade ke jaringan Guruforex',
                    'keyword' => 'pindah orbitrade',
                    'answer_id' => 16,
                    'created_at' => '2024-05-30 05:30:29',
                    'updated_at' => '2024-05-30 05:30:29',
                ),
                12 => 
                array (
                    'id' => 17,
                    'title' => 'Cara pindah akun Hotforex ke jaringan guruforex',
                    'keyword' => 'pindah hotforex',
                    'answer_id' => 17,
                    'created_at' => '2024-05-30 05:32:48',
                    'updated_at' => '2024-05-30 05:32:48',
                ),
                13 => 
                array (
                    'id' => 18,
                    'title' => 'Cara pindah akun MRG ke jaringan Guruforex',
                    'keyword' => 'pindah MRG',
                    'answer_id' => 18,
                    'created_at' => '2024-05-30 05:33:37',
                    'updated_at' => '2024-05-30 05:33:37',
                ),
                14 => 
                array (
                    'id' => 19,
                    'title' => 'Cara pindah akun DCFX ke jaringan Guruforex',
                    'keyword' => 'pindah DCFX',
                    'answer_id' => 19,
                    'created_at' => '2024-05-30 05:36:03',
                    'updated_at' => '2024-05-30 05:36:03',
                ),
                15 => 
                array (
                    'id' => 20,
                    'title' => 'Apa saja macam EA di Guruforex',
                    'keyword' => 'macam ea',
                    'answer_id' => 20,
                    'created_at' => '2024-05-30 05:38:54',
                    'updated_at' => '2024-05-30 05:38:54',
                ),
                16 => 
                array (
                    'id' => 21,
                    'title' => 'Berapa minimal deposit EA GF-Freeport',
                    'keyword' => 'deposit Freeport',
                    'answer_id' => 21,
                    'created_at' => '2024-05-30 05:41:19',
                    'updated_at' => '2024-05-30 05:41:19',
                ),
                17 => 
                array (
                    'id' => 22,
                    'title' => 'Berapa minimal deposit akun di EA GF-satoshi',
                    'keyword' => 'deposit satoshi',
                    'answer_id' => 22,
                    'created_at' => '2024-05-30 05:50:09',
                    'updated_at' => '2024-05-30 05:50:09',
                ),
                18 => 
                array (
                    'id' => 23,
                    'title' => 'Berapa Minimal deposit akun EA GF-gorilla',
                    'keyword' => 'deposit gorilla',
                    'answer_id' => 23,
                    'created_at' => '2024-05-30 05:51:03',
                    'updated_at' => '2024-05-30 05:51:03',
                ),
                19 => 
                array (
                    'id' => 24,
                    'title' => 'Penjelasan tentang vps',
                    'keyword' => 'apa vps',
                    'answer_id' => 24,
                    'created_at' => '2024-05-30 06:09:03',
                    'updated_at' => '2024-05-30 06:09:03',
                ),
                20 => 
                array (
                    'id' => 25,
                    'title' => 'Apakah EA harus dijalankan dengan VPS ?',
                    'keyword' => 'ea harus vps',
                    'answer_id' => 25,
                    'created_at' => '2024-05-30 06:09:34',
                    'updated_at' => '2024-05-30 06:09:34',
                ),
                21 => 
                array (
                    'id' => 27,
                    'title' => 'Cara Gabung Live Trading',
                    'keyword' => 'live trading',
                    'answer_id' => 27,
                    'created_at' => '2024-05-30 06:10:59',
                    'updated_at' => '2024-05-30 06:10:59',
                ),
                22 => 
                array (
                    'id' => 28,
                    'title' => 'Cara buat akun exness',
                    'keyword' => 'daftar exness',
                    'answer_id' => 28,
                    'created_at' => '2024-05-30 06:11:37',
                    'updated_at' => '2024-05-30 06:11:37',
                ),
                23 => 
                array (
                    'id' => 29,
                    'title' => 'Cara buat akun octafx',
                    'keyword' => 'daftar octafx',
                    'answer_id' => 29,
                    'created_at' => '2024-05-30 06:12:12',
                    'updated_at' => '2024-05-30 06:12:12',
                ),
                24 => 
                array (
                    'id' => 30,
                    'title' => 'Cara buat akun xm',
                    'keyword' => 'daftar xm',
                    'answer_id' => 30,
                    'created_at' => '2024-05-30 06:12:51',
                    'updated_at' => '2024-05-30 06:12:51',
                ),
                25 => 
                array (
                    'id' => 31,
                    'title' => 'Cara buat akun mifx',
                    'keyword' => 'daftar mifx',
                    'answer_id' => 31,
                    'created_at' => '2024-05-30 06:13:35',
                    'updated_at' => '2024-05-30 06:13:35',
                ),
                26 => 
                array (
                    'id' => 32,
                    'title' => 'Cara daftar akun orbitrade',
                    'keyword' => 'daftar orbitrade',
                    'answer_id' => 32,
                    'created_at' => '2024-05-30 06:14:51',
                    'updated_at' => '2024-05-30 06:14:51',
                ),
                27 => 
                array (
                    'id' => 33,
                    'title' => 'Solusi jika terjadi floating',
                    'keyword' => 'ea floating',
                    'answer_id' => 33,
                    'created_at' => '2024-05-30 06:15:29',
                    'updated_at' => '2024-05-30 06:15:29',
                ),
                28 => 
                array (
                    'id' => 34,
                    'title' => 'Video login akun broker',
                    'keyword' => 'login broker',
                    'answer_id' => 34,
                    'created_at' => '2024-05-30 06:15:53',
                    'updated_at' => '2024-05-30 06:15:53',
                ),
                29 => 
                array (
                    'id' => 36,
                    'title' => 'Mau menggunakan EA guruforex',
                    'keyword' => 'claim ea',
                    'answer_id' => 1,
                    'created_at' => '2024-06-09 02:17:23',
                    'updated_at' => '2024-06-09 02:17:23',
                ),
                30 => 
                array (
                    'id' => 37,
                    'title' => 'Cara gabung grup private',
                    'keyword' => 'grup private',
                    'answer_id' => 1,
                    'created_at' => '2024-06-09 02:18:18',
                    'updated_at' => '2024-06-09 02:18:18',
                ),
                31 => 
                array (
                    'id' => 38,
                    'title' => 'Cara join grup private',
                    'keyword' => 'join grup',
                    'answer_id' => 1,
                    'created_at' => '2024-06-09 09:44:33',
                    'updated_at' => '2024-06-09 09:44:33',
                ),
                32 => 
                array (
                    'id' => 39,
                    'title' => 'Cara join group private',
                    'keyword' => 'group private',
                    'answer_id' => 1,
                    'created_at' => '2024-06-09 09:45:10',
                    'updated_at' => '2024-06-09 09:45:10',
                ),
                33 => 
                array (
                    'id' => 40,
                    'title' => 'Cara join grup private',
                    'keyword' => 'vip',
                    'answer_id' => 1,
                    'created_at' => '2024-06-09 09:45:50',
                    'updated_at' => '2024-06-09 09:45:50',
                ),
                34 => 
                array (
                    'id' => 41,
                    'title' => 'Cara ikut trabar',
                    'keyword' => 'trabar',
                    'answer_id' => 27,
                    'created_at' => '2024-06-09 09:46:24',
                    'updated_at' => '2024-06-09 09:46:24',
                ),
                35 => 
                array (
                    'id' => 42,
                    'title' => 'Minimal deposit live trading',
                    'keyword' => 'minimal deposit live trading',
                    'answer_id' => 36,
                    'created_at' => '2024-06-09 09:48:37',
                    'updated_at' => '2024-06-09 09:48:37',
                ),
                36 => 
                array (
                    'id' => 43,
                    'title' => 'Ingin sewa VPS',
                    'keyword' => 'vps',
                    'answer_id' => 5,
                    'created_at' => '2024-06-09 09:49:43',
                    'updated_at' => '2024-06-09 09:49:43',
                ),
            ));

			\DB::commit();
		} catch(Exception $e) {
			\DB::rollBack();

			throw new Exception('Exception occur ' . $e);
		}
	}
}
