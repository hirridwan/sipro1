<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\hash;
use Illuminate\Support\Str;

class KotaKabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kota_kabs')->insert([
            ['code'=>'0100','name'=>'Propinsi Jawa Barat','ref'=>'00'],
            ['code'=>'0102','name'=>'Bekasi, Kab.','ref'=>'17'],
            ['code'=>'0103','name'=>'Purwakarta, Kab.','ref'=>'41'],
            ['code'=>'0106','name'=>'Karawang, Kab.','ref'=>'41'],
            ['code'=>'0108','name'=>'Bogor, Kab.','ref'=>'16'],
            ['code'=>'0109','name'=>'Sukabumi, Kab.','ref'=>'43'],
            ['code'=>'0110','name'=>'Cianjur, Kab.','ref'=>'43'],
            ['code'=>'0111','name'=>'Bandung, Kab.','ref'=>'40'],
            ['code'=>'0112','name'=>'Sumedang, Kab.','ref'=>'45'],
            ['code'=>'0113','name'=>'Tasikmalaya, Kab.','ref'=>'46'],
            ['code'=>'0114','name'=>'Garut, Kab.','ref'=>'44'],
            ['code'=>'0115','name'=>'Ciamis, Kab.','ref'=>'46'],
            ['code'=>'0116','name'=>'Cirebon, Kab.','ref'=>'45'],
            ['code'=>'0117','name'=>'Kuningan, Kab.','ref'=>'45'],
            ['code'=>'0118','name'=>'Indramayu, Kab.','ref'=>'45'],
            ['code'=>'0119','name'=>'Majalengka, Kab.','ref'=>'45'],
            ['code'=>'0121','name'=>'Subang, Kab.','ref'=>'41'],
            ['code'=>'0191','name'=>'Bandung, Kota.','ref'=>'40'],
            ['code'=>'0192','name'=>'Bogor, Kota.','ref'=>'16'],
            ['code'=>'0193','name'=>'Sukabumi, Kota.','ref'=>'43'],
            ['code'=>'0194','name'=>'Cirebon, Kota.','ref'=>'45'],
            ['code'=>'0195','name'=>'Tasikmalaya, Kota.','ref'=>'46'],
            ['code'=>'0196','name'=>'Cimahi, Kota.','ref'=>'40'],
            ['code'=>'0197','name'=>'Depok, Kota.','ref'=>'16'],
            ['code'=>'0198','name'=>'Bekasi, Kota.','ref'=>'17'],
            ['code'=>'0180','name'=>'Banjar, Kota.','ref'=>'46'],
            ['code'=>'0188','name'=>'Prov. Jawa Barat, Kab./Kota Lainnya.','ref'=>'00'],
            ['code'=>'0200','name'=>'Provinsi Banten','ref'=>'00'],
            ['code'=>'0201','name'=>'Lebak, Kab.','ref'=>'42'],
            ['code'=>'0202','name'=>'Pandeglang, Kab.','ref'=>'42'],
            ['code'=>'0203','name'=>'Serang, Kab.','ref'=>'42'],
            ['code'=>'0204','name'=>'Tangerang, Kab.','ref'=>'15'],
            ['code'=>'0291','name'=>'Cilegon, Kota.','ref'=>'42'],
            ['code'=>'0292','name'=>'Tangerang, Kota.','ref'=>'15'],
            ['code'=>'0288','name'=>'Prov. Banten, Kab./Kota Lainnya.','ref'=>'00'],
            ['code'=>'0300','name'=>'DKI Jaya','ref'=>'00'],
            ['code'=>'0391','name'=>'Jakarta Pusat, Wil. Kota','ref'=>'10'],
            ['code'=>'0392','name'=>'Jakarta Utara ., Wil. Kota','ref'=>'14'],
            ['code'=>'0393','name'=>'Jakarta Barat, Wil. Kota','ref'=>'11'],
            ['code'=>'0394','name'=>'Jakarta Selatan, Wil. Kota','ref'=>'12'],
            ['code'=>'0395','name'=>'Jakarta Timur, Wil. Kota','ref'=>'13'],
            ['code'=>'0500','name'=>'D.I Yogyakarta','ref'=>'00'],
            ['code'=>'0501','name'=>'Bantul, Kab.','ref'=>'55'],
            ['code'=>'0502','name'=>'Sleman, Kab.','ref'=>'55'],
            ['code'=>'0503','name'=>'Gunung Kidul, Kab.','ref'=>'55'],
            ['code'=>'0504','name'=>'Kulon Progo, Kab.','ref'=>'55'],
            ['code'=>'0591','name'=>'Yogyakarta, Kota.','ref'=>'55'],
            ['code'=>'0588','name'=>'DI Yogyakarta, Kab./Kota Lainnya.','ref'=>'00'],
            ['code'=>'0900','name'=>'Prov. Jawa Tengah','ref'=>'00'],
            ['code'=>'0901','name'=>'Semarang, Kab.','ref'=>'50'],
            ['code'=>'0902','name'=>'Kendal, Kab.','ref'=>'51'],
            ['code'=>'0903','name'=>'Demak, Kab.','ref'=>'59'],
            ['code'=>'0904','name'=>'Grobogan, Kab.','ref'=>'58'],
            ['code'=>'0905','name'=>'Pekalongan, Kab.','ref'=>'51'],
            ['code'=>'0906','name'=>'Tegal, Kab.','ref'=>'52'],
            ['code'=>'0907','name'=>'Brebes, Kab.','ref'=>'52'],
            ['code'=>'0908','name'=>'Pati, Kab.','ref'=>'59'],
            ['code'=>'0909','name'=>'Kudus, Kab.','ref'=>'59'],
            ['code'=>'0910','name'=>'Pemalang, Kab.','ref'=>'52'],
            ['code'=>'0911','name'=>'Jepara, Kab.','ref'=>'59'],
            ['code'=>'0912','name'=>'Rembang, Kab.','ref'=>'59'],
            ['code'=>'0913','name'=>'Blora, Kab.','ref'=>'58'],
            ['code'=>'0914','name'=>'Banyumas, Kab.','ref'=>'53'],
            ['code'=>'0915','name'=>'Cilacap, Kab.','ref'=>'53'],
            ['code'=>'0916','name'=>'Purbalingga, Kab.','ref'=>'53'],
            ['code'=>'0917','name'=>'Banjarnegara, Kab.','ref'=>'53'],
            ['code'=>'0918','name'=>'Magelang, Kab.','ref'=>'56'],
            ['code'=>'0919','name'=>'Temanggung, Kab.','ref'=>'56'],
            ['code'=>'0920','name'=>'Wonosobo, Kab.','ref'=>'56'],
            ['code'=>'0921','name'=>'Purworejo, Kab.','ref'=>'54'],
            ['code'=>'0922','name'=>'Kebumen, Kab.','ref'=>'54'],
            ['code'=>'0923','name'=>'Klaten, Kab.','ref'=>'57'],
            ['code'=>'0924','name'=>'Boyolali, Kab.','ref'=>'57'],
            ['code'=>'0925','name'=>'Sragen, Kab.','ref'=>'57'],
            ['code'=>'0926','name'=>'Sukoharjo, Kab.','ref'=>'57'],
            ['code'=>'0927','name'=>'Karanganyar, Kab.','ref'=>'57'],
            ['code'=>'0928','name'=>'Wonogiri, Kab.','ref'=>'57'],
            ['code'=>'0929','name'=>'Batang, Kab.','ref'=>'51'],
            ['code'=>'0991','name'=>'Semarang, Kota.','ref'=>'50'],
            ['code'=>'0992','name'=>'Salatiga, Kota.','ref'=>'50'],
            ['code'=>'0993','name'=>'Pekalongan, Kota.','ref'=>'51'],
            ['code'=>'0994','name'=>'Tegal, Kota.','ref'=>'52'],
            ['code'=>'0995','name'=>'Magelang, Kota.','ref'=>'56'],
            ['code'=>'0996','name'=>'Surakarta, Kota.','ref'=>'57'],
            ['code'=>'0997','name'=>'Kotif Klaten','ref'=>'57'],
            ['code'=>'0998','name'=>'Kotif Cilacap','ref'=>'53'],
            ['code'=>'0999','name'=>'Kotif Purwokerto','ref'=>'53'],
            ['code'=>'0988','name'=>'Prov. Jawa Tengah, Kab./Kota Lainnya.','ref'=>'00'],
            ['code'=>'1200','name'=>'Prov. Jawa Timur','ref'=>'00'],
            ['code'=>'1201','name'=>'Gresik, Kab.','ref'=>'61'],
            ['code'=>'1202','name'=>'Sidoarjo, Kab.','ref'=>'61'],
            ['code'=>'1203','name'=>'Mojokerto, Kab.','ref'=>'61'],
            ['code'=>'1204','name'=>'Jombang, Kab.','ref'=>'61'],
            ['code'=>'1205','name'=>'Sampang, Kab.','ref'=>'69'],
            ['code'=>'1206','name'=>'Pamekasan, Kab.','ref'=>'69'],
            ['code'=>'1207','name'=>'Sumenep, Kab.','ref'=>'69'],
            ['code'=>'1208','name'=>'Bangkalan, Kab.','ref'=>'69'],
            ['code'=>'1209','name'=>'Bondowoso, Kab.','ref'=>'68'],
            ['code'=>'1211','name'=>'Banyuwangi, Kab.','ref'=>'68'],
            ['code'=>'1212','name'=>'Jember, Kab.','ref'=>'68'],
            ['code'=>'1213','name'=>'Malang, Kab.','ref'=>'65'],
            ['code'=>'1214','name'=>'Pasuruan, Kab.','ref'=>'67'],
            ['code'=>'1215','name'=>'Probolinggo, Kab.','ref'=>'67'],
            ['code'=>'1216','name'=>'Lumajang, Kab.','ref'=>'67'],
            ['code'=>'1217','name'=>'Kediri, Kab.','ref'=>'64'],
            ['code'=>'1218','name'=>'Nganjuk, Kab.','ref'=>'64'],
            ['code'=>'1219','name'=>'Tulungagung, Kab.','ref'=>'66'],
            ['code'=>'1220','name'=>'Trenggalek, Kab.','ref'=>'66'],
            ['code'=>'1221','name'=>'Blitar, Kab.','ref'=>'66'],
            ['code'=>'1222','name'=>'Madiun, Kab.','ref'=>'63'],
            ['code'=>'1223','name'=>'Ngawi, Kab.','ref'=>'63'],
            ['code'=>'1224','name'=>'Magetan, Kab.','ref'=>'63'],
            ['code'=>'1225','name'=>'Ponorogo, Kab.','ref'=>'63'],
            ['code'=>'1226','name'=>'Pacitan, Kab.','ref'=>'63'],
            ['code'=>'1227','name'=>'Bojonegoro, Kab.','ref'=>'62'],
            ['code'=>'1228','name'=>'Tuban, Kab.','ref'=>'62'],
            ['code'=>'1229','name'=>'Lamongan, Kab.','ref'=>'62'],
            ['code'=>'1230','name'=>'Situbondo, Kab.','ref'=>'68'],
            ['code'=>'1291','name'=>'Surabaya, Kota.','ref'=>'60'],
            ['code'=>'1292','name'=>'Mojokerto, Kota.','ref'=>'61'],
            ['code'=>'1293','name'=>'Malang, Kota.','ref'=>'65'],
            ['code'=>'1294','name'=>'Pasuruan, Kota.','ref'=>'67'],
            ['code'=>'1295','name'=>'Probolinggo, Kota.','ref'=>'67'],
            ['code'=>'1296','name'=>'Blitar, Kota.','ref'=>'66'],
            ['code'=>'1297','name'=>'Kediri, Kota.','ref'=>'64'],
            ['code'=>'1298','name'=>'Madiun, Kota.','ref'=>'63'],
            ['code'=>'1299','name'=>'Jember, Kota.','ref'=>'68'],
            ['code'=>'1271','name'=>'Batu, Kota.','ref'=>'65'],
            ['code'=>'1288','name'=>'Prov. Jawa Timur, Kab./Kota Lainnya.','ref'=>'00'],
            ['code'=>'2300','name'=>'Provinsi Bengkulu','ref'=>'00'],
            ['code'=>'2301','name'=>'Bengkulu Selatan, Kab.','ref'=>'38'],
            ['code'=>'2302','name'=>'Bengkulu Utara, Kab.','ref'=>'38'],
            ['code'=>'2303','name'=>'Rejang Lebong, Kab.','ref'=>'39'],
            ['code'=>'2391','name'=>'Bengkulu, Kota.','ref'=>'38'],
            ['code'=>'2388','name'=>'Prov. Bengkulu, Kab./Kota Lainnya.','ref'=>'00'],
            ['code'=>'3100','name'=>'Provinsi Jambi','ref'=>'00'],
            ['code'=>'3101','name'=>'Batanghari, Kab.','ref'=>'36'],
            ['code'=>'3104','name'=>'Sarolangun, Kab.','ref'=>'37'],
            ['code'=>'3105','name'=>'Kerinci, Kab.','ref'=>'37'],
            ['code'=>'3106','name'=>'Muaro Jambi, Kab.','ref'=>'36'],
            ['code'=>'3107','name'=>'Tanjung Jabung Barat, Kab.','ref'=>'36'],
            ['code'=>'3108','name'=>'Tanjung Jabung Timur, Kab.','ref'=>'36'],
            ['code'=>'3109','name'=>'Tebo, Kab.','ref'=>'37'],
            ['code'=>'3110','name'=>'Muara Bungo, Kab.','ref'=>'37'],
            ['code'=>'3111','name'=>'Merangin, Kab.','ref'=>'37'],
            ['code'=>'3191','name'=>'Jambi, Kota.','ref'=>'36'],
            ['code'=>'3188','name'=>'Prov. Jambi, Kab./Kota Lainnya.','ref'=>'00'],
            ['code'=>'3200','name'=>'Provinsi NAD','ref'=>'00'],
            ['code'=>'3201','name'=>'Aceh Besar, Kab.','ref'=>'23'],
            ['code'=>'3202','name'=>'Pidie, Kab.','ref'=>'24'],
            ['code'=>'3203','name'=>'Aceh Utara, Kab.','ref'=>'24'],
            ['code'=>'3204','name'=>'Aceh Timur, Kab.','ref'=>'24'],
            ['code'=>'3205','name'=>'Aceh Selatan, Kab.','ref'=>'23'],
            ['code'=>'3206','name'=>'Aceh Barat, Kab.','ref'=>'23'],
            ['code'=>'3207','name'=>'Aceh Tengah, Kab.','ref'=>'24'],
            ['code'=>'3208','name'=>'Aceh Tenggara, Kab.','ref'=>'23'],
            ['code'=>'3209','name'=>'Aceh Singkil, Kab.','ref'=>'23'],
            ['code'=>'3210','name'=>'Aceh Jeumpa/Bireuen, Kab.','ref'=>'24'],
            ['code'=>'3211','name'=>'Aceh Tamiang, Kab.','ref'=>'23'],
            ['code'=>'3212','name'=>'Gayo Luwes, Kab.','ref'=>'24'],
            ['code'=>'3213','name'=>'Aceh Barat Daya, Kab.','ref'=>'24'],
            ['code'=>'3214','name'=>'Aceh Jaya, Kab.','ref'=>'23'],
            ['code'=>'3215','name'=>'Nagan Raya, Kab.','ref'=>'23'],
            ['code'=>'3216','name'=>'Aceh Simeuleu, Kab.','ref'=>'23'],
            ['code'=>'3291','name'=>'Banda Aceh, Kota.','ref'=>'23'],
            ['code'=>'3292','name'=>'Sabang, Kota.','ref'=>'23'],
            ['code'=>'3293','name'=>'Lhokseumawe, Kota.','ref'=>'24'],
            ['code'=>'3294','name'=>'Langsa, Kota.','ref'=>'24'],
            ['code'=>'3295','name'=>'Simeulue, Kota.','ref'=>'23'],
            ['code'=>'3288','name'=>'Prov. NAD, Kab./Kota Lainnya.','ref'=>'00'],
            ['code'=>'3300','name'=>'Provinsi Sumatera Utara','ref'=>'00'],
            ['code'=>'3301','name'=>'Deli Serdang, Kab.','ref'=>'20'],
            ['code'=>'3302','name'=>'Langkat, Kab.','ref'=>'20'],
            ['code'=>'3303','name'=>'Karo, Kab.','ref'=>'22'],
            ['code'=>'3304','name'=>'Simalungun, Kab.','ref'=>'21'],
            ['code'=>'3305','name'=>'Labuhan Batu, Kab.','ref'=>'21'],
            ['code'=>'3306','name'=>'Asahan, Kab.','ref'=>'21'],
            ['code'=>'3307','name'=>'Dairi, Kab.','ref'=>'22'],
            ['code'=>'3308','name'=>'Tapanuli Utara, Kab.','ref'=>'22'],
            ['code'=>'3309','name'=>'Tapanuli Tengah, Kab.','ref'=>'22'],
            ['code'=>'3310','name'=>'Tapanuli Selatan, Kab.','ref'=>'22'],
            ['code'=>'3311','name'=>'Nias, Kab.','ref'=>'22'],
            ['code'=>'3312','name'=>'Rantau Prapat, Kota.','ref'=>'21'],
            ['code'=>'3313','name'=>'Toba Samosir, Kab.','ref'=>'22'],
            ['code'=>'3314','name'=>'Mandailing Natal, Kab.','ref'=>'22'],
            ['code'=>'3391','name'=>'Tebing Tinggi, Kota.','ref'=>'20'],
            ['code'=>'3392','name'=>'Binjai, Kota.','ref'=>'20'],
            ['code'=>'3393','name'=>'Pematang Siantar, Kota.','ref'=>'21'],
            ['code'=>'3394','name'=>'Tanjung Balai, Kota.','ref'=>'21'],
            ['code'=>'3395','name'=>'Sibolga, Kota.','ref'=>'22'],
            ['code'=>'3396','name'=>'Medan, Kota.','ref'=>'20'],
            ['code'=>'3398','name'=>'Kisaran, Kota.','ref'=>'21'],
            ['code'=>'3399','name'=>'Padang Sidempuan, Kota.','ref'=>'22'],
            ['code'=>'3388','name'=>'Prov. Sumatera Utara, Kab./Kota Lainnya.','ref'=>'00'],
            ['code'=>'3400','name'=>'Provinsi Sumatera Barat','ref'=>'00'],
            ['code'=>'3401','name'=>'Agam, Kab.','ref'=>'26'],
            ['code'=>'3402','name'=>'Pasaman, Kab.','ref'=>'26'],
            ['code'=>'3403','name'=>'Limapuluh Koto, Kab.','ref'=>'26'],
            ['code'=>'3404','name'=>'Solok, Kab.','ref'=>'27'],
            ['code'=>'3405','name'=>'Padang Pariaman, Kab.','ref'=>'25'],
            ['code'=>'3406','name'=>'Pesisir Selatan, Kab.','ref'=>'25'],
            ['code'=>'3407','name'=>'Tanah Datar, Kab.','ref'=>'27'],
            ['code'=>'3408','name'=>'Sawahlunto/Sijunjung, Kab.','ref'=>'27'],
            ['code'=>'3409','name'=>'Kepulauan Mentawai, Kab.','ref'=>'25'],
            ['code'=>'3491','name'=>'Bukittinggi, Kota.','ref'=>'26'],
            ['code'=>'3492','name'=>'Padang, Kota.','ref'=>'25'],
            ['code'=>'3493','name'=>'Sawahlunto, Kota.','ref'=>'27'],
            ['code'=>'3494','name'=>'Padang Panjang, Kota.','ref'=>'27'],
            ['code'=>'3495','name'=>'Solok, Kota.','ref'=>'27'],
            ['code'=>'3496','name'=>'Payakumbuh, Kota.','ref'=>'26'],
            ['code'=>'3497','name'=>'Pariaman, Kota.','ref'=>'25'],
            ['code'=>'3488','name'=>'Prov. Sumatera Barat, Kab./Kota Lainnya.','ref'=>'00'],
            ['code'=>'3500','name'=>'Provinsi Riau','ref'=>'00'],
            ['code'=>'3501','name'=>'Kampar, Kab.','ref'=>'28'],
            ['code'=>'3502','name'=>'Bengkalis, Kab.','ref'=>'28'],
            ['code'=>'3503','name'=>'Kepulauan Riau, Kab.','ref'=>'29'],
            ['code'=>'3504','name'=>'Indragiri Hulu, Kab.','ref'=>'29'],
            ['code'=>'3505','name'=>'Indragiri Hilir, Kab.','ref'=>'29'],
            ['code'=>'3506','name'=>'Karimun, Kab.','ref'=>'29'],
            ['code'=>'3507','name'=>'Natuna, Kab.','ref'=>'29'],
            ['code'=>'3508','name'=>'Rokan Hulu, Kab.','ref'=>'28'],
            ['code'=>'3509','name'=>'Rokan Hilir, Kab.','ref'=>'28'],
            ['code'=>'3510','name'=>'Pelalawan, Kab.','ref'=>'28'],
            ['code'=>'3511','name'=>'Siak, Kab.','ref'=>'28'],
            ['code'=>'3512','name'=>'Kuantan Singingi, Kab.','ref'=>'29'],
            ['code'=>'3591','name'=>'Pekanbaru, Kota.','ref'=>'28'],
            ['code'=>'3594','name'=>'Batam, Kota.','ref'=>'29'],
            ['code'=>'3592','name'=>'Dumai, Kota.','ref'=>'28'],
            ['code'=>'3593','name'=>'Tanjungpinang, Kota.','ref'=>'29'],
            ['code'=>'3588','name'=>'Prov. Riau, Kab./Kota Lainnya.','ref'=>'00'],
            ['code'=>'3600','name'=>'Provinsi Sumatera Selatan','ref'=>'00'],
            ['code'=>'3606','name'=>'Musi Banyuasin, Kab.','ref'=>'30'],
            ['code'=>'3607','name'=>'Ogan Komering Ulu, Kab.','ref'=>'32'],
            ['code'=>'3608','name'=>'Lematang Ilir Ogan Tengah (Muara Enim), Kab.','ref'=>'31'],
            ['code'=>'3609','name'=>'Lahat, Kab.','ref'=>'31'],
            ['code'=>'3610','name'=>'Musi Rawas, Kab.','ref'=>'31'],
            ['code'=>'3611','name'=>'Ogan Komering Ilir, Kab.','ref'=>'30'],
            ['code'=>'3612','name'=>'Pangkalan Balai, Kab.','ref'=>'30'],
            ['code'=>'3691','name'=>'Palembang, Kota.','ref'=>'30'],
            ['code'=>'3693','name'=>'Lubuklinggau, Kota.','ref'=>'31'],
            ['code'=>'3694','name'=>'Prabumulih, Kota.','ref'=>'31'],
            ['code'=>'3695','name'=>'Baturaja, Kota.','ref'=>'32'],
            ['code'=>'3697','name'=>'Pagar Alam, Kota.','ref'=>'31'],
            ['code'=>'3688','name'=>'Prov Sumatera Selatan, Kab./Kota Lainnya.','ref'=>'00'],
            ['code'=>'3700','name'=>'Provinsi Kep. Bangka Belitung','ref'=>'00'],
            ['code'=>'3701','name'=>'Bangka, Kab.','ref'=>'33'],
            ['code'=>'3702','name'=>'Belitung, Kab.','ref'=>'33'],
            ['code'=>'3791','name'=>'Pangkal Pinang, Kota.','ref'=>'33'],
            ['code'=>'3788','name'=>'Prov. Babel, Kab./Kota Lainnya.','ref'=>'00'],
            ['code'=>'3900','name'=>'Provinsi Lampung','ref'=>'00'],
            ['code'=>'3901','name'=>'Lampung Selatan, Kab.','ref'=>'35'],
            ['code'=>'3902','name'=>'Lampung Tengah, Kab.','ref'=>'34'],
            ['code'=>'3903','name'=>'Lampung Utara, Kab.','ref'=>'34'],
            ['code'=>'3904','name'=>'Lampung Barat, Kab.','ref'=>'34'],
            ['code'=>'3905','name'=>'Tulang Bawang, Kab.','ref'=>'34'],
            ['code'=>'3906','name'=>'Tanggamus, Kab.','ref'=>'35'],
            ['code'=>'3907','name'=>'Lampung Timur, Kab.','ref'=>'34'],
            ['code'=>'3908','name'=>'Way Kanan, Kab.','ref'=>'34'],
            ['code'=>'3991','name'=>'Bandar Lampung, Kota.','ref'=>'35'],
            ['code'=>'3992','name'=>'Metro, Kota.','ref'=>'34'],
            ['code'=>'3988','name'=>'Prov. Lampung, Kab./Kota Lainnya.','ref'=>'00'],
            ['code'=>'5100','name'=>'Provinsi Kalimantan Selatan','ref'=>'00'],
            ['code'=>'5101','name'=>'Banjar, Kab.','ref'=>'70'],
            ['code'=>'5102','name'=>'Tanah Laut, Kab.','ref'=>'70'],
            ['code'=>'5103','name'=>'Tapin, Kab.','ref'=>'71'],
            ['code'=>'5104','name'=>'Hulu Sungai Selatan, Kab.','ref'=>'71'],
            ['code'=>'5105','name'=>'Hulu Sungai Tengah, Kab.','ref'=>'71'],
            ['code'=>'5106','name'=>'Hulu Sungai Utara, Kab.','ref'=>'71'],
            ['code'=>'5107','name'=>'Barito Kuala, Kab.','ref'=>'70'],
            ['code'=>'5108','name'=>'Kota Baru, Kab.','ref'=>'72'],
            ['code'=>'5109','name'=>'Tabalong, Kab.','ref'=>'71'],
            ['code'=>'5110','name'=>'Tanah Bumbu, Kab.','ref'=>'72'],
            ['code'=>'5111','name'=>'Balangan, Kab.','ref'=>'71'],
            ['code'=>'5191','name'=>'Banjarmasin, Kota.','ref'=>'70'],
            ['code'=>'5192','name'=>'Banjarbaru, Kota.','ref'=>'70'],
            ['code'=>'5188','name'=>'Prov. Kal-Sel, Kab./Kota Lainnya.','ref'=>'00'],
            ['code'=>'5300','name'=>'Provinsi Kalimantan Barat','ref'=>'00'],
            ['code'=>'5301','name'=>'Pontianak, Kab.','ref'=>'78'],
            ['code'=>'5302','name'=>'Sambas, Kab.','ref'=>'79'],
            ['code'=>'5303','name'=>'Ketapang, Kab.','ref'=>'78'],
            ['code'=>'5304','name'=>'Sanggau, Kab.','ref'=>'78'],
            ['code'=>'5305','name'=>'Sintang, Kab.','ref'=>'78'],
            ['code'=>'5306','name'=>'Kapuas Hulu, Kab.','ref'=>'78'],
            ['code'=>'5307','name'=>'Bengkayang, Kab.','ref'=>'79'],
            ['code'=>'5308','name'=>'Landak, Kab.','ref'=>'78'],
            ['code'=>'5391','name'=>'Pontianak, Kota.','ref'=>'78'],
            ['code'=>'5392','name'=>'Singkawang, Kota.','ref'=>'79'],
            ['code'=>'5388','name'=>'Prov. Kal-Bar, Kab./Kota Lainnya.','ref'=>'00'],
            ['code'=>'5400','name'=>'Provinsi Kalimantan Timur','ref'=>'00'],
            ['code'=>'5401','name'=>'Kutai Kartanegara, Kab.','ref'=>'75'],
            ['code'=>'5402','name'=>'Berau, Kab.','ref'=>'77'],
            ['code'=>'5403','name'=>'Pasir, Kab.','ref'=>'76'],
            ['code'=>'5404','name'=>'Bulungan, Kab.','ref'=>'77'],
            ['code'=>'5405','name'=>'Kutai Barat, Kab.','ref'=>'75'],
            ['code'=>'5406','name'=>'Kutai Timur, Kab.','ref'=>'75'],
            ['code'=>'5407','name'=>'Bulungan Selatan, Kab.','ref'=>'77'],
            ['code'=>'5408','name'=>'Bulungan Utara, Kab.','ref'=>'77'],
            ['code'=>'5409','name'=>'Nunukan, Kab.','ref'=>'76'],
            ['code'=>'5410','name'=>'Malinau, Kab.','ref'=>'77'],
            ['code'=>'5411','name'=>'Penajam Paser Utara, Kab.','ref'=>'76'],
            ['code'=>'5491','name'=>'Samarinda, Kota.','ref'=>'75'],
            ['code'=>'5492','name'=>'Balikpapan, Kota.','ref'=>'76'],
            ['code'=>'5493','name'=>'Tarakan, Kota.','ref'=>'77'],
            ['code'=>'5494','name'=>'Bontang, Kota.','ref'=>'75'],
            ['code'=>'5488','name'=>'Prov. Kal-Tim, Kab./Kota Lainnya.','ref'=>'00'],
            ['code'=>'5800','name'=>'Provinsi Kalimantan Tengah','ref'=>'00'],
            ['code'=>'5801','name'=>'Kapuas, Kab.','ref'=>'73'],
            ['code'=>'5802','name'=>'Kotawaringin Barat, Kab.','ref'=>'74'],
            ['code'=>'5803','name'=>'Kotawaringin Timur, Kab.','ref'=>'74'],
            ['code'=>'5806','name'=>'Barito Selatan, Kab.','ref'=>'73'],
            ['code'=>'5808','name'=>'Barito Utara, Kab.','ref'=>'73'],
            ['code'=>'5804','name'=>'Murung Raya, Kab.','ref'=>'74'],
            ['code'=>'5805','name'=>'Barito Timur, Kab.','ref'=>'73'],
            ['code'=>'5807','name'=>'Gunung Mas, Kab.','ref'=>'74'],
            ['code'=>'5809','name'=>'Pulang Pisau, Kab.','ref'=>'73'],
            ['code'=>'5810','name'=>'Seruyan, Kab.','ref'=>'73'],
            ['code'=>'5811','name'=>'Katingan, Kab.','ref'=>'74'],
            ['code'=>'5812','name'=>'Sukamara, Kab.','ref'=>'73'],
            ['code'=>'5813','name'=>'Lamandau, Kab.','ref'=>'74'],
            ['code'=>'5892','name'=>'Palangkaraya, Kota.','ref'=>'73'],
            ['code'=>'5888','name'=>'Prov. Kal-Teng, Kab./Kota Lainnya.','ref'=>'00'],
            ['code'=>'6000','name'=>'Provinsi Sulawesi Tengah','ref'=>'00'],
            ['code'=>'6001','name'=>'Donggala, Kab.','ref'=>'94'],
            ['code'=>'6002','name'=>'Poso, Kab.','ref'=>'94'],
            ['code'=>'6003','name'=>'Parimo/Banggai, Kab.','ref'=>'94'],
            ['code'=>'6004','name'=>'Toli-Toli, Kab.','ref'=>'94'],
            ['code'=>'6005','name'=>'Kab.Banggai Kepulauan','ref'=>'94'],
            ['code'=>'6006','name'=>'Morowali, Kab.','ref'=>'94'],
            ['code'=>'6007','name'=>'Buol, Kab.','ref'=>'94'],
            ['code'=>'6091','name'=>'Palu, Kota.','ref'=>'94'],
            ['code'=>'6088','name'=>'Prov. Sulawesi Tengah, Kab./Kota Lainnya.','ref'=>'00'],
            ['code'=>'6100','name'=>'Provinsi Sulawesi Selatan','ref'=>'00'],
            ['code'=>'6101','name'=>'Pinrang, Kab.','ref'=>'91'],
            ['code'=>'6102','name'=>'Gowa, Kab.','ref'=>'92'],
            ['code'=>'6103','name'=>'Wajo, Kab.','ref'=>'90'],
            ['code'=>'6104','name'=>'Mamuju, Kab.','ref'=>'91'],
            ['code'=>'6105','name'=>'Bone, Kab.','ref'=>'92'],
            ['code'=>'6106','name'=>'Tana Toraja, Kab.','ref'=>'91'],
            ['code'=>'6107','name'=>'Maros, Kab.','ref'=>'90'],
            ['code'=>'6108','name'=>'Majene, Kab.','ref'=>'91'],
            ['code'=>'6109','name'=>'Luwu, Kab.','ref'=>'91'],
            ['code'=>'6110','name'=>'Sinjai, Kab.','ref'=>'92'],
            ['code'=>'6111','name'=>'Bulukumba, Kab.','ref'=>'92'],
            ['code'=>'6112','name'=>'Bantaeng, Kab.','ref'=>'92'],
            ['code'=>'6113','name'=>'Jeneponto, Kab.','ref'=>'92'],
            ['code'=>'6114','name'=>'Selayar, Kab.','ref'=>'92'],
            ['code'=>'6115','name'=>'Takalar, Kab.','ref'=>'92'],
            ['code'=>'6116','name'=>'Barru, Kab.','ref'=>'90'],
            ['code'=>'6117','name'=>'Sidenreng Rappang, Kab.','ref'=>'91'],
            ['code'=>'6118','name'=>'Pangkajene Kepulauan, Kab.','ref'=>'90'],
            ['code'=>'6119','name'=>'Watansoppeng, Kab.','ref'=>'90'],
            ['code'=>'6120','name'=>'Polewali, Kab.','ref'=>'91'],
            ['code'=>'6121','name'=>'Enrekang, Kab.','ref'=>'91'],
            ['code'=>'6122','name'=>'Luwu Selatan, Kab.','ref'=>'91'],
            ['code'=>'6123','name'=>'Mamasa, Kab.','ref'=>'91'],
            ['code'=>'6124','name'=>'Luwu Utara, Kab.','ref'=>'91'],
            ['code'=>'6191','name'=>'Makassar, Kota.','ref'=>'90'],
            ['code'=>'6192','name'=>'Pare-Pare, Kota.','ref'=>'91'],
            ['code'=>'6193','name'=>'Palopo, Kota.','ref'=>'91'],
            ['code'=>'6194','name'=>'Watampone, Kota.','ref'=>'92'],
            ['code'=>'6188','name'=>'Prov. Sulawesi Selatan, Kab./Kota Lainnya.','ref'=>'00'],
            ['code'=>'6200','name'=>'Provinsi Sulawesi Utara','ref'=>'00'],
            ['code'=>'6202','name'=>'Minahasa, Kab.','ref'=>'95'],
            ['code'=>'6203','name'=>'Bolaang Mongondow, Kab.','ref'=>'95'],
            ['code'=>'6204','name'=>'Sangihe, Kab.','ref'=>'95'],
            ['code'=>'6205','name'=>'kepulauan Talaud, Kab.','ref'=>'95'],
            ['code'=>'6206','name'=>'Minahasa Selatan, Kab.','ref'=>'96'],
            ['code'=>'6291','name'=>'Menado, Kota.','ref'=>'95'],
            ['code'=>'6293','name'=>'Bitung, Kota.','ref'=>'95'],
            ['code'=>'6294','name'=>'Kota. Tomohon','ref'=>'95'],
            ['code'=>'6288','name'=>'Sulawesi Utara, Kab./Kota Lainnya.','ref'=>'00'],
            ['code'=>'6300','name'=>'Provinsi Gorontalo','ref'=>'00'],
            ['code'=>'6301','name'=>'Gorontalo, Kab.','ref'=>'96'],
            ['code'=>'6302','name'=>'Bualemo, Kab.','ref'=>'96'],
            ['code'=>'6303','name'=>'Bonebolango, Kab.','ref'=>'96'],
            ['code'=>'6304','name'=>'Pohuwato, Kab.','ref'=>'96'],
            ['code'=>'6391','name'=>'Gorontalo, Kota.','ref'=>'96'],
            ['code'=>'6388','name'=>'Prov. Gorontalo, Kab./Kota Lainnya.','ref'=>'00'],
            ['code'=>'6900','name'=>'Provinsi Sulawesi Tenggara','ref'=>'00'],
            ['code'=>'6901','name'=>'Buton, Kab.','ref'=>'93'],
            ['code'=>'6902','name'=>'Kendari, Kab.','ref'=>'93'],
            ['code'=>'6903','name'=>'Muna, Kab.','ref'=>'93'],
            ['code'=>'6904','name'=>'Kolaka, Kab.','ref'=>'93'],
            ['code'=>'6990','name'=>'Bau-Bau, Kota.','ref'=>'93'],
            ['code'=>'6991','name'=>'Kendari, Kota.','ref'=>'93'],
            ['code'=>'6988','name'=>'Prov. Sulawesi Tenggara, Kab./Kota Lainnya.','ref'=>'00'],
            ['code'=>'7100','name'=>'Provinsi Nusa Tenggara Barat','ref'=>'00'],
            ['code'=>'7101','name'=>'Lombok Barat, Kab.','ref'=>'83'],
            ['code'=>'7102','name'=>'Lombok Tengah, Kab.','ref'=>'83'],
            ['code'=>'7103','name'=>'Lombok Timur, Kab.','ref'=>'83'],
            ['code'=>'7104','name'=>'Sumbawa, Kab.','ref'=>'84'],
            ['code'=>'7105','name'=>'Bima, Kab.','ref'=>'84'],
            ['code'=>'7106','name'=>'Dompu, Kab.','ref'=>'84'],
            ['code'=>'7191','name'=>'Mataram, Kota.','ref'=>'83'],
            ['code'=>'7192','name'=>'Kota. Bima','ref'=>'84'],
            ['code'=>'7188','name'=>'Prov. NTB, Kab./Kota Lainnya.','ref'=>'00'],
            ['code'=>'7200','name'=>'Provinsi Bali','ref'=>'00'],
            ['code'=>'7201','name'=>'Buleleng, Kab.','ref'=>'81'],
            ['code'=>'7202','name'=>'Jembrana, Kab.','ref'=>'82'],
            ['code'=>'7203','name'=>'Tabanan, Kab.','ref'=>'82'],
            ['code'=>'7204','name'=>'Badung, Kab.','ref'=>'80'],
            ['code'=>'7205','name'=>'Gianyar, Kab.','ref'=>'80'],
            ['code'=>'7206','name'=>'Klungkung, Kab.','ref'=>'80'],
            ['code'=>'7207','name'=>'Bangli, Kab.','ref'=>'80'],
            ['code'=>'7208','name'=>'Karangasem, Kab.','ref'=>'80'],
            ['code'=>'7291','name'=>'Denpasar, Kota.','ref'=>'80'],
            ['code'=>'7288','name'=>'Prov. Bali, Kab./Kota Lainnya.','ref'=>'00'],
            ['code'=>'7400','name'=>'Provinsi Nusa Tenggara Timur','ref'=>'00'],
            ['code'=>'7401','name'=>'Kupang, Kab.','ref'=>'85'],
            ['code'=>'7402','name'=>'Timor-Tengah Selatan, Kab.','ref'=>'85'],
            ['code'=>'7403','name'=>'Timor-Tengah Utara, Kab.','ref'=>'85'],
            ['code'=>'7404','name'=>'Belu, Kab.','ref'=>'85'],
            ['code'=>'7405','name'=>'Alor, Kab.','ref'=>'85'],
            ['code'=>'7406','name'=>'Flores Timur, Kab.','ref'=>'86'],
            ['code'=>'7407','name'=>'Sikka, Kab.','ref'=>'86'],
            ['code'=>'7408','name'=>'Ende, Kab.','ref'=>'86'],
            ['code'=>'7409','name'=>'Ngada, Kab.','ref'=>'86'],
            ['code'=>'7410','name'=>'Manggarai, Kab.','ref'=>'86'],
            ['code'=>'7411','name'=>'Sumba Timur, Kab.','ref'=>'87'],
            ['code'=>'7412','name'=>'Sumba Barat, Kab.','ref'=>'87'],
            ['code'=>'7413','name'=>'Lembata, Kab.','ref'=>'86'],
            ['code'=>'7414','name'=>'Rote, Kab.','ref'=>'85'],
            ['code'=>'7491','name'=>'Kupang, Kota.','ref'=>'85'],
            ['code'=>'7488','name'=>'Prov. NTT, Kab./Kota Lainnya.','ref'=>'00'],
            ['code'=>'8100','name'=>'Provinsi Maluku','ref'=>'00'],
            ['code'=>'8101','name'=>'Maluku Tengah, Kab.','ref'=>'97'],
            ['code'=>'8102','name'=>'Maluku Tenggara, Kab.','ref'=>'97'],
            ['code'=>'8103','name'=>'Maluku Tenggara Barat, Kab.','ref'=>'97'],
            ['code'=>'8104','name'=>'Kab Buru','ref'=>'97'],
            ['code'=>'8191','name'=>'Ambon, Kota.','ref'=>'97'],
            ['code'=>'8188','name'=>'Prov. Maluku, Kab./Kota Lainnya.','ref'=>'00'],
            ['code'=>'8200','name'=>'Provinsi Papua','ref'=>'00'],
            ['code'=>'8201','name'=>'Jayapura, Kab.','ref'=>'99'],
            ['code'=>'8202','name'=>'Biak Numfor, Kab.','ref'=>'98'],
            ['code'=>'8204','name'=>'Sorong, Kab.','ref'=>'98'],
            ['code'=>'8205','name'=>'Fak-Fak, Kab.','ref'=>'98'],
            ['code'=>'8209','name'=>'Manokwari, Kab.','ref'=>'98'],
            ['code'=>'9999','name'=>'DI  LUAR  INDONESIA','ref'=>'99'],
            ['code'=>'8210','name'=>'Yapen-Waropen, Kab.','ref'=>'98'],
            ['code'=>'8211','name'=>'Merauke, Kab.','ref'=>'99'],
            ['code'=>'8212','name'=>'Paniai, Kab.','ref'=>'98'],
            ['code'=>'8213','name'=>'Jayawijaya, Kab.','ref'=>'99'],
            ['code'=>'8214','name'=>'Nabire, Kab.','ref'=>'98'],
            ['code'=>'8215','name'=>'Mimika, Kab.','ref'=>'99'],
            ['code'=>'8216','name'=>'Puncak Jaya, Kab.','ref'=>'98'],
            ['code'=>'8217','name'=>'Sarmi, Kab.','ref'=>'99'],
            ['code'=>'8218','name'=>'Keerom, Kab.','ref'=>'99'],
            ['code'=>'8219','name'=>'Sorong Selatan, Kab.','ref'=>'98'],
            ['code'=>'8220','name'=>'Raja Ampat, Kab.','ref'=>'98'],
            ['code'=>'8221','name'=>'Pegunungan Bintang, Kab.','ref'=>'99'],
            ['code'=>'8222','name'=>'Yahukimo, Kab.','ref'=>'99'],
            ['code'=>'8223','name'=>'Tolikara, Kab.','ref'=>'99'],
            ['code'=>'8224','name'=>'Waropen, Kab.','ref'=>'98'],
            ['code'=>'8225','name'=>'Kaimana, Kab.','ref'=>'98'],
            ['code'=>'8226','name'=>'Boven Digoel, Kab.','ref'=>'99'],
            ['code'=>'8227','name'=>'Mappi, Kab.','ref'=>'99'],
            ['code'=>'8228','name'=>'Asmat, Kab.','ref'=>'99'],
            ['code'=>'8229','name'=>'Teluk Bintuni, Kab.','ref'=>'98'],
            ['code'=>'8230','name'=>'Teluk Wondama, Kab.','ref'=>'98'],
            ['code'=>'8291','name'=>'Jayapura, Kota.','ref'=>'99'],
            ['code'=>'8292','name'=>'Sorong, Kota.','ref'=>'98'],
            ['code'=>'8288','name'=>'Prov. Papua, Kab./Kota Lainnya.','ref'=>'00'],
            ['code'=>'8300','name'=>'Provinsi Maluku Utara','ref'=>'00'],
            ['code'=>'8301','name'=>'Maluku Utara, Kab.','ref'=>'97'],
            ['code'=>'8302','name'=>'Halmahera Tengah, Kab.','ref'=>'97'],
            ['code'=>'8390','name'=>'Ternate, Kota.','ref'=>'97'],
            ['code'=>'8388','name'=>'Prov. Maluku Utara, Kab./Kota Lainnya.','ref'=>'00'],
            ['code'=>'0123','name'=>'Kab. Pangandaran','ref'=>'00'],
        ]);
    }
}