<?php

namespace Database\Seeders\Badaso\ManualGenerate;

use Illuminate\Database\Seeder;
use Uasoft\Badaso\Facades\Badaso;

class AnswersTableSeeder extends Seeder
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
			\DB::table('answers')->delete();

			\DB::table('answers')->insert(array (
                0 => 
                array (
                    'id' => 1,
                    'message' => 'Untuk software EA guruforex / live trading / sinyal / grup private / workshop itu GRATIS untuk member yang mendaftar salah satu broker melalui link guruforex ya, jika belum punya akun bisa mendaftar melalui link berikut

gurusaham.com/mifx (bappebti)
gurusaham.com/dcfx (bappebti)
gurusaham.com/foreximf (bappebti)
gurusaham.com/exness
gurusaham.com/xm
gurusaham.com/octafx
gurusaham.com/hfm
gurusaham.com/zfx
gurusaham.com/orbitrade (livetrading)

Lalu kirimkan ID MT4 / MT5 nya untuk verifikasi akun

Namun kalau sudah punya akun broker diatas bukan dari link guruforex, bisa juga nanti lakukan proses pemindahan ke jaringan under guruforex

Khusus untuk software EA, jika mau coba di broker lain atau bukan under guruforex juga bisa, namun ada biaya per id akun.

*Disclaimer : list broker di atas bukan bagian guruforex, semua akun dan dana di broker tersebut menjadi tanggung jawab pemilik akun dan broker terkait',
                    'created_at' => '2024-05-30 03:19:52',
                    'updated_at' => '2024-05-30 03:19:52',
                ),
                1 => 
                array (
                    'id' => 3,
                    'message' => 'Minimal deposit EA GF-leopard


Akun Standard & Pro :
$700 untuk OctaFX (+ gunakan kode GRUS100 bonus depo 100%)
$700 untuk XM standard (+ gunakan bonus deposit 50%)
$1000 untuk Exness standard
$1000 untuk Hotforex (premium account)
$1000 untuk ZFX standard
$1500 untuk Exness Pro
$1500 untuk XM ultra low standard
$1500 untuk MIFX standard
$10.000 untuk DCFX 

Akun Cent / Micro :
$10 untuk Exness Cent
$10 untuk ZFX cent
$100 untuk XM Micro
$200 untuk XM ultra low micro
$100 untuk cent hotforex

Note :
- Modal diatas adalah minimal, namun disarankan $5000 untuk akun standard (akun cent mengikuti perbandingan yang sama)
- Modal lebih besar lebih baik, untuk menambah ketahanan free margin',
                    'created_at' => '2024-05-30 03:45:11',
                    'updated_at' => '2024-05-30 03:45:11',
                ),
                2 => 
                array (
                    'id' => 4,
                    'message' => 'Untuk Ultra Low Micro XM minimal deposit 100 USD tapi disarankan 500 USD

Untuk akun Cent Exness minimal deposit 1000 USC tapi disarankan 5000 USC',
                    'created_at' => '2024-05-30 03:45:26',
                    'updated_at' => '2024-05-30 03:45:26',
                ),
                3 => 
                array (
                    'id' => 5,
                    'message' => 'Kalau kakak belum bisa instalasi EA di MT4 desktop, kita juga menyediakan jasa :

1. Instalasi Metatrader & EA (100rb / instalasi)
Juga termasuk edukasi / konsultasi langsung saat penginstalan dengan zoom / google meet, jika dibutuhkan/diperlukan/diinginkan client atau kalau mau diinstall tanpa perlu google meet / Zoom juga bisa (terima beres)

2. Sewa VPS

VPS Lokasi Asia 2 CPU, 2 GB RAM, 40GB Storage, Windows 10 (bisa 6 MT4)
1 bulan - Rp190rb
3 bulan - Rp500rb
*powered IC

VPS lokasi Asia, 2 CPU, 512MB RAM, 30GB Storage, windows 10 (bisa 1 MT4)
1 bulan - Rp140rb
3 bulan - Rp400rb
*powered AS

(kosong) VPS lokasi Asia, 1 CPU, 768MB RAM, 20GB Storage, windows 7 (bisa 1 MT4)
1 bulan - Rp140rb
3 bulan - Rp400rb
*powered YH

VPS lokasi Eropa, 1 CPU, 768MB RAM, 20GB Storage, windows 7 (bisa 1 MT4)
1 bulan - Rp90rb
3 bulan - Rp220rb
*powered YH

VPS lokasi Eropa 1 CPU, 1GB RAM, 30GB Storage, windows 10 lite  (bisa 4 MT4)
1 bulan - 110rb
3 bulan -  290rb
*powered by YH

VPS lokasi Eropa/Asia, 2 CPU, 2GB RAM, 40GB Storage, windows 10 lite (bisa 6 MT4)
1 bulan - 190rb
3 bulan - 500rb
*powered YH

*Semakin tinggi speks, membuat VPS menjadi ringan dan jarang error
*Untuk specs lebih tinggi, bisa dengan request ke admin untuk specs yang diinginkan',
                    'created_at' => '2024-05-30 03:46:11',
                    'updated_at' => '2024-05-30 03:46:11',
                ),
                4 => 
                array (
                    'id' => 6,
                    'message' => 'Jika anggapan laptop / PC nya tidak terinstall aplikasi apapun,mungkin RAM 4gb sudah bisa pak. Tapi tentunya semakin tinggi semakin bagus. Kalau pakai server biasanya cukup RAM 728 mb aja pak.

Kelebihan VPS bisa online 24 jam.
Kalau PC / laptop sendiri harus hidupin juga selama EA berjalan',
                    'created_at' => '2024-05-30 04:33:42',
                    'updated_at' => '2024-05-30 04:33:42',
                ),
                5 => 
                array (
                    'id' => 8,
                    'message' => 'Karena kakak order jasa manage VPS, maka kita perlu disclaimer dulu kak :

1. Trading adalah aktivitas yang berisiko, selain mendapatkan keuntungan juga bisa mendapat kerugian. Sehingga dengan menggunakan EA ini, berarti bapak/ibu sudah sepakat bahwa resiko menjadi tanggung jawab diri sendiri.

2. Tim guruforex hanya membantu maintenance server dan EA sesuai prosedur, sehingga kalau timbul kerugian, itu penuh tanggung jawab dari pemilik akun.

Mohon untuk menjawab "ya" untuk konfirmasi kak

Terima kasih',
                    'created_at' => '2024-05-30 04:34:48',
                    'updated_at' => '2024-05-30 04:34:48',
                ),
                6 => 
                array (
                    'id' => 10,
                    'message' => 'Berikut video tutorial untuk install ea nya ya

VIDEO TUTORIAL FREEPORT https://youtu.be/X_O1s4zi8uE
VIDEO GORILLA https://youtu.be/JNCBWiTGmQQ
VIDEO LEOPARD https://youtu.be/HUD5bDSChD8?si=_r1zjO5OWK8Yt5ZV',
                    'created_at' => '2024-05-30 04:35:32',
                    'updated_at' => '2024-05-30 04:35:32',
                ),
                7 => 
                array (
                    'id' => 11,
                    'message' => 'Cara pindah akun octafx ke jaringan guruforex

Kunjungi https://gurusaham.com/pindah-octafx

Pada Input “New IB Partner” isikan 2578859

Pada input “Reason” isikan “untuk belajar trading”

Jika tidak bisa,

bisa live chat ke CS octafx
Lalu minta untuk pindah ke jaringan Guruforex dengan nomor 2578859 ya kak

Bisa menggunakan pesan berikut:
"Halo, saya ingin pindah IB dengan nomor 2578859, dengan alasan belajar trading"

Terima kasih',
                    'created_at' => '2024-05-30 04:35:45',
                    'updated_at' => '2024-05-30 04:35:45',
                ),
                8 => 
                array (
                    'id' => 12,
                    'message' => 'step untuk pindah exness under guruforex

1 Buka web exness di gurusaham.com/exness-web

2. Buka live chat dan ketikan “Change Partner”

3. Kamu akan diberikan link pindah partner, maka bisa buka link tersebut
4. Pada input kedua isi https://one.exness-track.com/boarding/sign-up/a/vdou6m1r?lng=id

4. Input ke 3 dan ke 4 dikosongkan saja, lalu klik submit

5. Tunggu sampai ada konfirmasi perpindahan sudah selesai di email akun masing-masing 

6. Setelah masuk ke jaringan guruforex, bisa buat akun trading baru (MT4/MT5), lalu pindahkan dana di akun lama ke akun yang baru. Lalu akun lama di archive

ATAU

Cara Pindah IB melalui email

Silahkan email ke support@exness.com:
Subject Email: Saya Mau Pindah IB
Isi Email: Mau pindah ke IB baru dengan keterangan berikut:
Akun kemitraan: [1045010929183382975]
Link kemitraan: [https://one.exness-track.com/boarding/sign-up/a/vdou6m1r?lng=id]

Setelah pihak support konfirmasi bahwa form pergantian kemitraan sudah aktif. Klien login masuk dashboard > Setting > Profile, kemudian isi dengan detail yang udah diberikan di atas. Proses perpindahan IB akan diproses secara otomatis oleh sistem dalam 3x24 jam.',
                    'created_at' => '2024-05-30 04:36:03',
                    'updated_at' => '2024-05-30 04:36:03',
                ),
                9 => 
                array (
                    'id' => 13,
                    'message' => 'Cara pindah MIFX ke under guruforex

Pertama minta live chat MIFX untuk non-aktifkan akun lamanya
Setelah itu, bisa daftar lagi melalui link gurusaham.com/mifx dengan data identitas yang sama dengan akun sebelumnya',
                    'created_at' => '2024-05-30 04:36:17',
                    'updated_at' => '2024-05-30 04:36:17',
                ),
                10 => 
                array (
                    'id' => 15,
                    'message' => 'Cara pindah akun XM ke jaringan guruforex

Bisa logout dulu akunnya jika sedang login, lalu login ulang pakai link ini

https://gurusaham.com/xm-login

Setelah login, lalu buat akun trading MT4/MT5 tambahan baru.
Lalu, akun lamanya bisa di close setelah semua dananya di pindahkan ke akun yang baru',
                    'created_at' => '2024-05-30 04:46:02',
                    'updated_at' => '2024-05-30 04:46:02',
                ),
                11 => 
                array (
                    'id' => 16,
                    'message' => 'Silahkan buat akun baru pada link gurusaham.com/orbitrade dengan data identitas yang sama dengan akun sebelumnya, tapi dengan email berbeda

nanti kabari kita lagi pak, untuk dimasukan ke grupa',
                    'created_at' => '2024-05-30 04:48:35',
                    'updated_at' => '2024-05-30 04:48:35',
                ),
                12 => 
                array (
                    'id' => 17,
                    'message' => 'Ada 2 cara untuk pindah akun Hotforex / HFM ke jaringan guruforex

1. Buat akun trading baru, lalu masukan kode 352754 di bagian input “ID Introducing Broker”, lalu pindahkan dana di akun yang lama ke yang baru, lalu akun lama bisa ditutup / archieve

Atau

2. Klien bisa kirim email ke indonesia@hfm.com
Minta agar ID HFM nya di tempatkan di bawah kode IB  352754  dan isikan emailnya dengan “saya mau join IB 352754 , alasannya mau belajar trading”',
                    'created_at' => '2024-05-30 04:49:03',
                    'updated_at' => '2024-05-30 04:49:03',
                ),
                13 => 
                array (
                    'id' => 18,
                    'message' => 'Pertama minta CS live chat mrg untuk non-aktifkan akun lama
Lalu bisa daftar ulang dengan link gurusaham.com/mrg',
                    'created_at' => '2024-05-30 04:49:25',
                    'updated_at' => '2024-05-30 04:49:25',
                ),
                14 => 
                array (
                    'id' => 19,
                    'message' => 'Pertama live chat CS DCFX untuk non-aktifkan akun lama
Lalu bisa daftar ulang dengan link gurusaham.com/dcfx',
                    'created_at' => '2024-05-30 04:49:46',
                    'updated_at' => '2024-05-30 04:49:46',
                ),
                15 => 
                array (
                    'id' => 20,
                'message' => 'GF-pukat yaitu EA untuk trading big news (saat ini belum bisa digunakan)
GF-leopard yaitu EA menggunakan strategi averaging dan hedging di EURUSD
GF-freeport yaitu EA menggunakan strategi trend follower dan averaging di XAUUSD
GF-satoshi yaitu EA yang menggunakan strategi trend follower di BTCUSD
GF-gorilla yaitu EA yang mengginakan strategi trend follower di BTCUSD & XAUUSD',
                    'created_at' => '2024-05-30 04:50:33',
                    'updated_at' => '2024-05-30 04:50:33',
                ),
                16 => 
                array (
                    'id' => 21,
                    'message' => 'Minimal deposit EA GF-freeport

Akun Standard & Pro & Zero :
$700 untuk OctaFX (+ gunakan kode GRUS100 bonus depo 100%)
$700 untuk XM standard (+ gunakan bonus deposit 50%)
$1000 untuk Exness standard
$1000 untuk HFM Premium
$1000 untuk ZFX standard
$1500 untuk Exness Pro
$1500 untuk HFM Zero
$1500 untuk Hotforex Pro
$1500 untuk XM ultra low standard
$1500 untuk MIFX standard
$10.000 untuk DCFX 

Akun Cent / Micro :
$10 untuk Exness Cent
$10 untuk ZFX cent
$100 untuk XM Micro
$200 untuk XM ultra low micro
$100 untuk cent HFM

Note :
- Modal diatas adalah minimal, namun disarankan $7.000 untuk akun standard (akun cent mengikuti perbandingan yang sama)
- Modal lebih besar lebih baik, untuk menambah ketahanan free margin',
                    'created_at' => '2024-05-30 04:51:15',
                    'updated_at' => '2024-05-30 04:51:15',
                ),
                17 => 
                array (
                    'id' => 22,
                    'message' => 'Minimal deposit EA GF-satoshi

Akun Standard & Pro & Zero :
$700 untuk OctaFX (+ gunakan kode GRUS100 bonus depo 100%)
$700 untuk XM standard (+ gunakan bonus deposit 50%)
$1000 untuk Exness standard
$1000 untuk HFM Premium
$1000 untuk ZFX standard
$1500 untuk Exness Pro
$1500 untuk HFM Zero
$1500 untuk HFM Pro
$1500 untuk XM ultra low standard
$1500 untuk MIFX standard
$10.000 untuk DCFX 

Note :
- Modal diatas adalah minimal, namun disarankan $7.000 untuk akun standard
- Modal lebih besar lebih baik, untuk menambah ketahanan free margin',
                    'created_at' => '2024-05-30 04:52:29',
                    'updated_at' => '2024-05-30 04:52:29',
                ),
                18 => 
                array (
                    'id' => 23,
                    'message' => 'Minimal deposit EA GF-gorilla

Akun Standard & Pro & Zero :
$70 untuk OctaFX (+ gunakan kode GRUS100 bonus depo 100%)
$70 untuk XM standard (+ gunakan bonus deposit 50%)
$100 untuk Exness standard
$100 untuk HFM Premium
$100 untuk ZFX standard
$200 untuk Exness Pro
$150 untuk HFM Zero
$150 untuk HFM Pro
$150 untuk XM ultra low standard
$150 untuk MIFX standard
$1000 untuk DCFX 

Note :
- Modal diatas adalah minimal, namun disarankan $700 
- Modal lebih besar lebih baik, untuk menambah ketahanan free margin',
                    'created_at' => '2024-05-30 04:52:45',
                    'updated_at' => '2024-05-30 04:52:45',
                ),
                19 => 
                array (
                    'id' => 24,
                    'message' => 'Vps itu server pak

Jadi kita menjalankan aplikasi metatrader di server kita sehingga bisa hidup 24 jam',
                    'created_at' => '2024-05-30 04:53:03',
                    'updated_at' => '2024-05-30 04:53:03',
                ),
                20 => 
                array (
                    'id' => 25,
                    'message' => 'Tidak harus menggunakan VPS, bisa menggunakan laptop/komputer biasa, namun lebih baik menggunakan vps untuk menghindari Slippage dan bisa berjalan 24 jam tanpa gangguan',
                    'created_at' => '2024-05-30 04:53:26',
                    'updated_at' => '2024-05-30 04:53:26',
                ),
                21 => 
                array (
                    'id' => 27,
                    'message' => 'Live trading khusus yang sudah daftar broker orbitrade
untuk join grup live trading silahkan daftar melalui link berikut :
gurusaham.com/orbitrade',
                    'created_at' => '2024-05-30 04:58:10',
                    'updated_at' => '2024-05-30 04:58:10',
                ),
                22 => 
                array (
                    'id' => 28,
                    'message' => 'Silakan daftar melalui link berikut
gurusaham.com/exness

Video tutorial
https://youtu.be/6JWym6g9LHI?si=E26SCjHwmeC48UZQ',
                    'created_at' => '2024-05-30 04:58:38',
                    'updated_at' => '2024-05-30 04:58:38',
                ),
                23 => 
                array (
                    'id' => 29,
                    'message' => 'Silakan daftar melalui link berikut
gurusaham.com/octafx

Video tutorial
https://youtu.be/2GXQHKJMLbQ?si=uHRVeHx61JZKys6Y',
                    'created_at' => '2024-05-30 04:59:03',
                    'updated_at' => '2024-05-30 04:59:03',
                ),
                24 => 
                array (
                    'id' => 30,
                    'message' => 'Silakan daftar melalui link berikut
gurusaham.com/xm

Video tutorial
https://youtu.be/OZ1B8lWyV2M?si=UvWR41ehVrPzQl8y',
                    'created_at' => '2024-05-30 04:59:22',
                    'updated_at' => '2024-05-30 04:59:22',
                ),
                25 => 
                array (
                    'id' => 31,
                    'message' => 'Silakan daftar melalui link berikut
gurusaham.com/mifx

Video tutorial
https://youtu.be/Dsz6EqoP3qA?si=Z620oBab7nI38gdP',
                    'created_at' => '2024-05-30 04:59:41',
                    'updated_at' => '2024-05-30 04:59:41',
                ),
                26 => 
                array (
                    'id' => 32,
                    'message' => 'Silakan daftar melalui link berikut
gurusaham.com/orbitrade

Video tutorial
https://youtu.be/T52yEu60Kgs?si=kJnqLaRuLZkWJOMg',
                    'created_at' => '2024-05-30 05:00:00',
                    'updated_at' => '2024-05-30 05:00:00',
                ),
                27 => 
                array (
                    'id' => 33,
                    'message' => 'Beberapa solusi kalau terlanjut floating menggunakan EA GF-leopard

1. Jika yakin pasar akan reversal secara teknikal, maka bisa menambah ekuitas agar tidak terjadi margin call
2. Menaikan jumlah max trade pada lokasi reversal
3. Melakukan hedging manual + trailing stop (diperlukan pemahaman analisa teknikal) hingga terjadi reversal
4. Jika tidak yakin pasar bisa naik kembali, maka bisa melakukan cutloss atau set stoploss

silahkan kirimkan nomor ID akun trading MT4 nya beserta screenshot tanda sudah deposit ke telegram t.me/gurusaham_support',
                    'created_at' => '2024-05-30 05:00:16',
                    'updated_at' => '2024-05-30 05:00:16',
                ),
                28 => 
                array (
                    'id' => 34,
                    'message' => 'ORBITRADE https://youtube.com/playlist?list=PLhreaFG367mMHNMu7aYFK6WP2ywgDRYi_&si=V9iyGNwmzehApKQh
HFM https://youtube.com/playlist?list=PLhreaFG367mN-yUIZXB2zSD0-wdXBg5lA&si=ABAsPY8h5V4HYdYN
DCFX https://youtube.com/playlist?list=PLhreaFG367mOut4kqw0INBtzvVMpAmRtd&si=bdO9Ciz6DBxorND_
OCTAFX https://youtube.com/playlist?list=PLhreaFG367mOD4lfZYeIIylaxBj2sVPti&si=j_ImrpDKix5TPVkh
XM https://youtube.com/playlist?list=PLhreaFG367mOd6UjNZOiYtoPmaS-G-Xtr&si=xnZpu4JLys_NYnKK
EXNESS https://youtube.com/playlist?list=PLhreaFG367mMzu5B1bSnt8yhGPLV4_P2K&si=wNP2FuD-1igoOWW_',
                    'created_at' => '2024-05-30 05:00:32',
                    'updated_at' => '2024-05-30 05:00:32',
                ),
                29 => 
                array (
                    'id' => 35,
                    'message' => 'Live trading khusus yang sudah daftar broker orbitrade

untuk join grup live trading silahkan daftar melalui link berikut : 
gurusaham.com/orbitrade',
                    'created_at' => '2024-06-09 09:43:14',
                    'updated_at' => '2024-06-09 09:43:14',
                ),
                30 => 
                array (
                    'id' => 36,
                    'message' => 'Minimal deposit untuk live trading dengan orbitrade yaitu $50',
                    'created_at' => '2024-06-09 09:48:22',
                    'updated_at' => '2024-06-09 09:48:22',
                ),
            ));

			\DB::commit();
		} catch(Exception $e) {
			\DB::rollBack();

			throw new Exception('Exception occur ' . $e);
		}
	}
}
