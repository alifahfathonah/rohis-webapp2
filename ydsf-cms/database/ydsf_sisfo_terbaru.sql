/*
SQLyog - Free MySQL GUI v5.01
Host - 5.5.5-10.1.31-MariaDB : Database - ydsf_sisfo
*********************************************************************
Server version : 5.5.5-10.1.31-MariaDB
*/


create database if not exists `ydsf_sisfo`;

USE `ydsf_sisfo`;

/*Table structure for table `rh_berita` */

DROP TABLE IF EXISTS `rh_berita`;

CREATE TABLE `rh_berita` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_rohis` varchar(100) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `kategori_berita` mediumtext,
  `konten_berita` mediumtext,
  `username` varchar(100) DEFAULT NULL,
  `image` mediumtext,
  `judul` mediumtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=139 DEFAULT CHARSET=latin1;

/*Data for the table `rh_berita` */

insert into `rh_berita` values 

(127,'2','2017-12-24','dialog','<p style=\"box-sizing: border-box; margin: 0px 0px 9px; font-family: \'Open Sans\', sans-serif; font-size: 13px; background-color: #f5f5f5; text-align: justify;\">terlihat cukup ramai para mahasiswa Rumah kepemimpinan dari UNAIR dan ITS yang berjumlah kurang lebih 50 mahasiswa, bertempat di gedung serba guna yang dulunya bernama Bina Qolam jalan Bengawan No.2B Darmo Surabaya. Dialog tokoh ini menghadirkan seorang tokoh yang sudah berkecimpung lama di dunia pendidikan yaitu &nbsp;DR. (HC). Ir. Abdulkadir Baraja.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 9px; font-family: \'Open Sans\', sans-serif; font-size: 13px; background-color: #f5f5f5; text-align: justify;\">Di Indonesia dikenal 3 Golongan dalam pendidikan yaitu golongan atas, golongan menengah dan golongan bawah. Dalam hal ini umat muslim masih banyak yang menjadi minoritas, dan kebanyakan kaum muslim masih pada tingkat sedang dan bawah. Karena itu tugas kita sebagai generasi penerus bangsa untuk kedepannya memajukan dan menjadikan generasi muslim pada tingkat Golongan atas, utamanya dalam bidang pendidikan.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 9px; font-family: \'Open Sans\', sans-serif; font-size: 13px; background-color: #f5f5f5; text-align: justify;\">Sayyidina Ali ra mengatakan, &ldquo;Siapa yang menjadikan dirinya sebagai pemimpin bagi orang lain, hendaklah ia mulai dengan mengajar dirinya sendiri sebelum mengajarkan orang lain. Biarlah ia mengajarkan orang lain dengan perilakunya, sebelum dengan tutur kata&rdquo;. Jika banyak guru atau bahkan semua guru memiliki budaya, maka siswa akan dengan mudah menirtu budaya para guru tersebut.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 9px; font-family: \'Open Sans\', sans-serif; font-size: 13px; background-color: #f5f5f5; text-align: justify;\">Pada awal pemaparan Abdul Kadir memaparkan bahwa sudah menjadi persepsi umum&nbsp; di masyarakat muslim Indonesia bahwa istilah &ldquo;Dakwah Islam&rdquo; dipahami sebagai aktivitas yang hanya mengajak untuk orang untuk lebih mendekatkan diri pada sang Khaliq, dengan kata lain hanya meningkatkan ketakwaan yang bentuknya ceramah atau mejelis taklim semata. Padahal salah satu sisi yang minim dan perlu untuk diisi oleh kita sebagai umat muslim adalah sektor pendidikan, yang dimana dari pendidikan dan sebuah keteladanan inilah kedepan dapat di bentuk kader-kader yang Islami dan mencintai NKRI (Negara Kesatuan Republik Indonesia).</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 9px; font-family: \'Open Sans\', sans-serif; font-size: 13px; background-color: #f5f5f5; text-align: justify;\">Pada dasarnya tujuan utama dari sebuah pendidikan adalah membentuk manusia yang berbudaya. Karena itu bangsa yang maju identik dengan SDM (sumber daya manusia) atau masyarakat yang memiliki budaya yang tinggi. Tapi harus diingat bahwa budaya yang tinggi pada para siswa atau pada tingkat yang lebih tinggi seperti mahasiswa ini, memerlukan guru-guru yang juga berbudaya dan memiliki keteladanan yang baik. &ldquo;Faktor terpenting dari upaya membangun budaya ini adalah guru teladan yang berbudaya, Sekolah bersama guru-guru yang berbudaya, maka dapat dipastikan akan terbentuk lingkungan sekolah yang kuat. Sekolah yang memiliki budaya yang kuat akan mewarnai setiap sisi kehidupan siswanya. Lalu pada akhirnya sekolah-sekolah yang memiliki budaya yang kuat tersebut akan mewariskan budaya tersebut kepada setiap lulusannya,&rdquo; ungkap pria kelahiran Solo 11 juni 1945 ini.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 9px; font-family: \'Open Sans\', sans-serif; font-size: 13px; background-color: #f5f5f5; text-align: justify;\">Pada akhir sesi dialog tokoh, dosen elektro ITS ini mengharapkan agar para guru-guru yang berbudaya tersebut tidak hanya datang dari fakultas pendidikan semata, tapi juga mengharapkan dari alumni UNAIR dan ITS yang tentunya tergabung dalam Rumah Kepemimpinan ini. &ldquo;Pada dasarnya sekolah-sekolah hanya bisa menjadi baik bila guru-gurunya berkualitas. Sederhananya mempersiapkan guru yang berkualitas sangatlah penting. Karena guru yang berkualitas ini akan mentransfer 2 hal penting, yaitu kompetensi terbaik dan akhlak baik yang ia miliki, karena itu semoga kedepannya akan muncul guru-guru dari alumni Unair dan ITS, khususnya dari Rumah Kepemimpinan&rdquo; Tandasnya.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 9px; font-family: \'Open Sans\', sans-serif; font-size: 13px; background-color: #f5f5f5; text-align: justify;\">&nbsp;</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 9px; font-family: \'Open Sans\', sans-serif; font-size: 13px; background-color: #f5f5f5; text-align: justify;\"><img style=\"box-sizing: border-box; border: 0px; vertical-align: middle; max-width: 100%;\" src=\"http://ydsf.org/assets/media/2017/12/04/556/1-dialog.jpg\" alt=\"\" width=\"860\" height=\"570\" /></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 9px; font-family: \'Open Sans\', sans-serif; font-size: 13px; background-color: #f5f5f5; text-align: justify;\"><span style=\"box-sizing: border-box; font-weight: bold;\">Abdul Kadir Baraja sedang memberi materi tentang urgensi pendidikan.</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 9px; font-family: \'Open Sans\', sans-serif; font-size: 13px; background-color: #f5f5f5; text-align: justify;\">&nbsp;</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 9px; font-family: \'Open Sans\', sans-serif; font-size: 13px; background-color: #f5f5f5; text-align: justify;\"><span style=\"box-sizing: border-box; font-weight: bold;\"><img style=\"box-sizing: border-box; border: 0px; vertical-align: middle; max-width: 100%;\" src=\"http://ydsf.org/assets/media/2017/12/04/556/3-dialog.jpg\" alt=\"\" width=\"867\" height=\"574\" /></span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 9px; font-family: \'Open Sans\', sans-serif; font-size: 13px; background-color: #f5f5f5; text-align: justify;\"><span style=\"box-sizing: border-box; font-weight: bold;\">Sesi foto bersama dengan para peserta.</span></p>','june','800x400-2-dialog.jpg','DIALOG TOKOH MEMANDANG MASA DEPAN PENDIDIKAN DENGAN DR. (HC). IR. ABDULKADIR BARAJA'),

(128,'2','2017-12-24','pembinaan','<p style=\"box-sizing: border-box; margin: 0px 0px 9px; font-family: \'Open Sans\', sans-serif; font-size: 13px; background-color: #f5f5f5; text-align: justify;\">Sejumlah ibu-ibu dan beberapa anak yatim berkumpul di Balai RW 13 Keputran Panjunan, Kelurahan Embong Kaliasin Surabaya untuk menerima beasiswa untuk anak-anaknya. Program binaan yatim disini telah berjalan selama 6 bulan mulai&nbsp;Mei 2017, selain memberikan beasiswa YDSF juga menanamkan akhlak dan penguatan aqidah kepada anak-anak. Disamping itu juga ibu-ibu mereka secara rutin juga mengadakan<span class=\"text_exposed_show\" style=\"box-sizing: border-box;\">&nbsp;pengajian disini.<br style=\"box-sizing: border-box;\" />Seperti yang disamppaikan Galang, kelas 5 SD Mustajabah, telah mengikuti pembinaan Komuitas Yatim Keputran Panjunan selama 6 bulan. \"Disini saya mengaji dan juga dapat beasiswa,\" kata Galang.<br style=\"box-sizing: border-box;\" />Tak hanya anak SD, tingkat SMP dan SMA juga ikut dalam pembinaan, salah satunya Livia Azita Putri, SMK Farmasi Sekesal, kelas 3. \"Di komunitas Yatim Keputran Panjunan ini kegiatannya antara lain hafalan Quran, pembelajaran tajwid Quran, kajian pengetahuan menstruasi, kajian puasa, dan banyak yang lainnya. Dengan kegiatan ini selain mendapatkan ilmu saya juga mendapatkan beasiswa, terima kasih para donatur YDSF,\" kata Livia.</span></p>\r\n<div class=\"text_exposed_show\" style=\"box-sizing: border-box; font-family: \'Open Sans\', sans-serif; font-size: 13px; background-color: #f5f5f5;\">\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 9px; text-align: justify;\">Komunitas Yatim, setiap pekan tepatnya di hari Ahad, sejumpah 40 anak yatim mulai SD sampai SMA mengaji dan pembinaan rutin. Tenaga pembina 4 orang ustadzah dan 1 orang ustadz.<br style=\"box-sizing: border-box;\" />Sebagai bentuk apresiasi kepada anak-anak yang hadir di pembinaan, selain beasiswa, juga diberikan uang saku pembinaan. SD 65 ribu, SMP, 100 ribu, SMA 135 ribu.<br style=\"box-sizing: border-box;\" />\"Kegiatan ini sudah berlangsung mulai bulan Mei 2017 hingga sekarang sudah menginjak bulan ke enam. Total beasiswa pembinaan Yatim disini 23 juta untuk 40 anak yatim atau yatim piatu di binaan keputran panjunan surabaya,\" terang Dwi Wahyudi, PJ Pena Yatim.</p>\r\n</div>','june','800x400-1-pena-bangsa112.jpg','PEMBINAAN KOMUNITAS YATIM KEPUTRAN PANJUNAN 2017'),

(129,'22','2017-12-24','penutupan','<p style=\"box-sizing: border-box; margin: 0px 0px 9px; font-family: \'Open Sans\', sans-serif; font-size: 13px; background-color: #f5f5f5; text-align: justify;\">Alhamdulillah, acara Pelatihan Pegiat Pemberdayaan yang diadakan YDSF di Royal Caravan Trawas Mojokerto selama 2 hari dari mulai Sabtu sampai dengan hari ini (04-05 November 2017), telah selesai dilaksanakan. Acara berjalan dengan baik dan lancar selama 2 hari tersebut. Para peserta masih semangat dan antusias mengikuti acara Pelatihan sampai akhir penutupan. Acara penutupan diakhiri dengan sepatah dua patah kata dari<span class=\"text_exposed_show\" style=\"box-sizing: border-box;\">&nbsp;Kepala Divisi Pendayagunaan YDSF, H.M Machsun.</span></p>\r\n<div class=\"text_exposed_show\" style=\"box-sizing: border-box; font-family: \'Open Sans\', sans-serif; font-size: 13px; background-color: #f5f5f5;\">\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 9px; text-align: justify;\">2 hari kebersamaan sudah dilalui para peserta Pelatihan dengan tema \"Menjadi Pegiat Dakwah Handal di Masyarakat\". Sebanyak kurang lebih 100 Peserta yang semuanya merupakan mitra dakwah YDSF selalu antusias mengikuti materi-materi pelatihan tersebut sampai selesai.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 9px; text-align: justify;\">Terima kasih kami ucapkan kepada para peserta Pelatihan Pegiat Pemberdayaan YDSF, para mitra-mitra dakwah YDSF dari Guru dan Mentor Pena Bangsa, SDM IPTEK, Rumah Kepemimpinan PPSDMS, Dai Desa dan Dai Kota, Anggota Binaan Kelompok Usaha Mandiri dan Mentor serta kepengasuhan Yatim Binaan atas partisipasinya dalam acara ini. Semoga selepas acara pelatihan ini, para mitra-mitra dakwah YDSF semakin menginspirasi untuk memberdayakan ummat.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 9px; text-align: justify;\">\"Menjadi Penggiat Dakwah di Masyarakat\"<br style=\"box-sizing: border-box;\" /><a class=\"_58cn\" style=\"box-sizing: border-box; background-color: transparent; color: #999999; text-decoration-line: none; -webkit-font-smoothing: antialiased;\" href=\"https://www.facebook.com/hashtag/day02?source=feed_text&amp;story_id=1798902280142257\" data-ft=\"{&quot;tn&quot;:&quot;*N&quot;,&quot;type&quot;:104}\"><span class=\"_5afx\" style=\"box-sizing: border-box;\"><span class=\"_58cl _5afz\" style=\"box-sizing: border-box;\">#</span><span class=\"_58cm\" style=\"box-sizing: border-box;\">day02</span></span></a>&nbsp;<a class=\"_58cn\" style=\"box-sizing: border-box; background-color: transparent; color: #999999; text-decoration-line: none; -webkit-font-smoothing: antialiased;\" href=\"https://www.facebook.com/hashtag/sinergidakwah?source=feed_text&amp;story_id=1798902280142257\" data-ft=\"{&quot;tn&quot;:&quot;*N&quot;,&quot;type&quot;:104}\"><span class=\"_5afx\" style=\"box-sizing: border-box;\"><span class=\"_58cl _5afz\" style=\"box-sizing: border-box;\">#</span><span class=\"_58cm\" style=\"box-sizing: border-box;\">sinergidakwah</span></span></a>&nbsp;<a class=\"_58cn\" style=\"box-sizing: border-box; background-color: transparent; color: #999999; text-decoration-line: none; -webkit-font-smoothing: antialiased;\" href=\"https://www.facebook.com/hashtag/sinergiprogram?source=feed_text&amp;story_id=1798902280142257\" data-ft=\"{&quot;tn&quot;:&quot;*N&quot;,&quot;type&quot;:104}\"><span class=\"_5afx\" style=\"box-sizing: border-box;\"><span class=\"_58cl _5afz\" style=\"box-sizing: border-box;\">#</span><span class=\"_58cm\" style=\"box-sizing: border-box;\">sinergiProgram</span></span></a>&nbsp;<a class=\"_58cn\" style=\"box-sizing: border-box; background-color: transparent; color: #999999; text-decoration-line: none; -webkit-font-smoothing: antialiased;\" href=\"https://www.facebook.com/hashtag/penggiatdakwah?source=feed_text&amp;story_id=1798902280142257\" data-ft=\"{&quot;tn&quot;:&quot;*N&quot;,&quot;type&quot;:104}\"><span class=\"_5afx\" style=\"box-sizing: border-box;\"><span class=\"_58cl _5afz\" style=\"box-sizing: border-box;\">#</span><span class=\"_58cm\" style=\"box-sizing: border-box;\">penggiatDakwah</span></span></a></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 9px; text-align: justify;\">&nbsp;</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 9px; text-align: justify;\"><span class=\"_5afx\" style=\"box-sizing: border-box;\"><img style=\"box-sizing: border-box; border: 0px; vertical-align: middle; max-width: 100%;\" src=\"http://ydsf.org/assets/media/2017/11/06/547/6-berita-123.jpg\" alt=\"\" width=\"839\" height=\"559\" /></span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 9px; text-align: justify;\"><span style=\"box-sizing: border-box; font-weight: bold;\">Para Peserta Pelatihan Penggiat Pemberdayaan 2017 di Royal Caravan Trawas Mojokerto</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 9px; text-align: justify;\">&nbsp;</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 9px; text-align: justify;\"><span style=\"box-sizing: border-box; font-weight: bold;\"><img style=\"box-sizing: border-box; border: 0px; vertical-align: middle; max-width: 100%;\" src=\"http://ydsf.org/assets/media/2017/11/06/547/3-berita-123.jpg\" alt=\"\" width=\"850\" height=\"566\" /></span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 9px; text-align: justify;\">&nbsp;</p>\r\n</div>','june','800x400-7-berita-123.jpg','PENUTUPAN PELATIHAN PEGIAT PEMBERDAYAAN YDSF'),

(130,'22','2017-12-25','membangun','<p style=\"box-sizing: border-box; margin: 0px 0px 9px; font-family: \'Open Sans\', sans-serif; font-size: 13px; background-color: #f5f5f5; text-align: justify;\">MEMBANGUN KOMUNIKASI DENGAN NEURO LINGUISTIK PROGRAMMING<br style=\"box-sizing: border-box;\" />(M. Fahmy Arief, ST, S.Psi., M. NLP | Trainer NLP)</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 9px; font-family: \'Open Sans\', sans-serif; font-size: 13px; background-color: #f5f5f5; text-align: justify;\">Neuro artinya syaraf, Linguistik adalah bahasa, Programming adalah pola-pola. Jadi NLP adalah bagaimana cara kita merekam kemudian mengolah lalu muncul dalam prilaku dari keseharian kita. NLP berkaitan dengan fungsi-fungsi dari otak dan bahasa. Otak menyimpan semua hal yang kita amati, dengar, raba, dsb. Indra-indra tersebut mengirimkan bahasa dalam tubuh kita yang kemu<span class=\"text_exposed_show\" style=\"box-sizing: border-box;\">dian tersimpan dalam pikiran, itu dinamakan Programming.</span></p>\r\n<div class=\"text_exposed_show\" style=\"box-sizing: border-box; font-family: \'Open Sans\', sans-serif; font-size: 13px; background-color: #f5f5f5;\">\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 9px; text-align: justify;\">Salah satu aplikasinya adalah dalam komunikasi, dalam berkomunikasi penting dalam untuk me-Manajemen Emosi. Ketika kita berhadapan dalam suatu kondisi maka harus punya Manajemen Emosi bagus. Contoh, bila berhadapan dengan kondisi yang tidak mengenakkan kita harus punya kesadaran bahwa apa yang terjadi saat ini, bagaimana emosi kita, bila ingin menguasai keadaan dengan baik, emosi apa yang harusnya ditampakkan.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 9px; text-align: justify;\">NLP bisa mengatur emosi dengan baik, contoh kita melihat suiatu kejadian, kemudian kita pikirkan dengan baik-baik apa yang tejadi sebenarnya. Berdasarkan memori-memori yang kita memiliki, kita bisa memilih salah satu respon yang terbaik sesuai tujuan yang kita inginkan, Dengan begitu prilaku kita lebih tepat sesuai dengan yang kita inginkan.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 9px; text-align: justify;\">Contoh dalam kehidupn, ada seorang ibu mengepel lantai, hingga bersih mengkilap. Kemudian anaknya dari luar nyelonong masuk dengan kaki kotor. Reaksi umum sang ibu adalah: marah, kaget, memarahi anak, dsb. Penerapan dalam NLP, bayangkan bila anak tersebut sudah lama tak pulang, ibunya rindu, ketika anak masuk, reaksi ibu akan senang, bertemu anak yang sudah lama ditunggu.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 9px; text-align: justify;\">&ldquo;Menjadi Penggiat Dakwah Handal di Masyarakat&rdquo;<br style=\"box-sizing: border-box;\" />Trawas, 4 Nopember 2017<br style=\"box-sizing: border-box;\" /><a class=\"_58cn\" style=\"box-sizing: border-box; background-color: transparent; color: #999999; text-decoration-line: none; -webkit-font-smoothing: antialiased;\" href=\"https://www.facebook.com/hashtag/day01?source=feed_text&amp;story_id=1798089066890245\" data-ft=\"{&quot;tn&quot;:&quot;*N&quot;,&quot;type&quot;:104}\"><span class=\"_5afx\" style=\"box-sizing: border-box;\"><span class=\"_58cl _5afz\" style=\"box-sizing: border-box;\">#</span><span class=\"_58cm\" style=\"box-sizing: border-box;\">day01</span></span></a>&nbsp;<a class=\"_58cn\" style=\"box-sizing: border-box; background-color: transparent; color: #999999; text-decoration-line: none; -webkit-font-smoothing: antialiased;\" href=\"https://www.facebook.com/hashtag/sinergidakwah?source=feed_text&amp;story_id=1798089066890245\" data-ft=\"{&quot;tn&quot;:&quot;*N&quot;,&quot;type&quot;:104}\"><span class=\"_5afx\" style=\"box-sizing: border-box;\"><span class=\"_58cl _5afz\" style=\"box-sizing: border-box;\">#</span><span class=\"_58cm\" style=\"box-sizing: border-box;\">sinergiDakwah</span></span></a>&nbsp;#&nbsp;<a class=\"_58cn\" style=\"box-sizing: border-box; background-color: transparent; color: #999999; text-decoration-line: none; -webkit-font-smoothing: antialiased;\" href=\"https://www.facebook.com/hashtag/penggiatdakwah?source=feed_text&amp;story_id=1798089066890245\" data-ft=\"{&quot;tn&quot;:&quot;*N&quot;,&quot;type&quot;:104}\"><span class=\"_5afx\" style=\"box-sizing: border-box;\"><span class=\"_58cl _5afz\" style=\"box-sizing: border-box;\">#</span><span class=\"_58cm\" style=\"box-sizing: border-box;\">penggiatDakwah</span></span></a></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 9px; text-align: justify;\">&nbsp;</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 9px; text-align: justify;\"><span class=\"_5afx\" style=\"box-sizing: border-box;\"><img style=\"box-sizing: border-box; border: 0px; vertical-align: middle; max-width: 100%;\" src=\"http://ydsf.org/assets/media/2017/11/06/547/1-berita-123.jpg\" alt=\"\" width=\"818\" height=\"545\" /></span></p>\r\n</div>','june','800x400-5-berita-123.jpg','MEMBANGUN KOMUNIKASI DENGAN NEURO LINGUISTIK PROGRAMMING'),

(131,'22','2017-12-24','dakwah','<p style=\"box-sizing: border-box; margin: 0px 0px 9px; font-family: \'Open Sans\', sans-serif; font-size: 13px; background-color: #f5f5f5; text-align: justify;\">Ada satu hal yang mesti kita miliki untuk bergerak di bidang dakwah ini, yaitu &ldquo;passion&rdquo;. Passion adalah temukan kelebihan dan kekuranganmu lalu fokuslah pada kelebihan itu. Allah menjanjikan setiap orang ada kelebihan. QS At-Tin : 4 ; Laqad khalaqnal insana fi ahsani taqwim, Artinya: &ldquo;Sesungguhnya Kami telah menjadikan manusia dalam sebaik-baiknya kejadian&rdquo;.&nbsp;</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 9px; font-family: \'Open Sans\', sans-serif; font-size: 13px; background-color: #f5f5f5; text-align: justify;\">Temukan kelebihan itu lalu fokuslah. Banyak orang fokus passion pada satu bidang, karena fokus itu cirinya adalah, bila belajar atau mengerjakan hal tersebut serasa tidak ada capeknya. Misal passion pada golf, mereka rela siang-siang panas-panas, 5 jam, bayar jutaan untuk sebuah pasion. Ada yang tak punya uang punya passion pada mancing ikan, semalam suntuk gela-gelap, gerimis, dilakoni untuk passion mancing.</p>\r\n<div class=\"text_exposed_show\" style=\"box-sizing: border-box; font-family: \'Open Sans\', sans-serif; font-size: 13px; background-color: #f5f5f5;\">\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 9px; text-align: justify;\">Bagaimana seandainya passion ini dimunculkan tidak hanya pada kehidupan yang sifatnya hanya hobi atau permainan, tetapi passion dalam dunia dakwah. Yang pertama yakinkan pada diri kita bahwa dakwah ini panggilan dari Allah, lalu kerjakan yang terbaik dengan &ldquo;the spirit of ikhsan&rdquo;.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 9px; text-align: justify;\">Bila kita yakin ini adalah panggilan Allah, dan melakukan yang terbaik, kemudian mencintai sebagaimana Allah memerintahkan kita untuk mencintai dakwah dan perjuangannya, perlahan akan mampu menjadikan dakwah sebagai passion.<br style=\"box-sizing: border-box;\" />Saya sudah membuktikannya, semenjak di Tsanawiyah aktif di gerakan pidato, ceramah, panitia hari besar islam. Saat SMA aktif di kerohanian Islam, saat Perguruan tinggi aktif di berbagai organisasi kemahasiswaan, pesantren mahasiswa, himpunan mahasiswa, dsb. Akhirnya sampai tuapun passion saya juga di bidang dakwah. Kalaupun berbisnis di sosio-entrepreneurship yang membuat jejaring bagaimana kekuatan-kekuatan entitas dakwah dalam berekenomi ini bisa menyatu. Silahkan mencoba, mudah-mudahan anda bisa membangkitkan passion dalam dakwah ini, dan itu kekuatannya powerful.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 9px; text-align: justify;\">&ldquo;Menjadi Penggiat Dakwah Handal di Masyarakat&rdquo;<br style=\"box-sizing: border-box;\" />Trawas, 4 Nopember 2017<br style=\"box-sizing: border-box;\" /><a class=\"_58cn\" style=\"box-sizing: border-box; background-color: transparent; color: #999999; text-decoration-line: none; -webkit-font-smoothing: antialiased;\" href=\"https://www.facebook.com/hashtag/day01?source=feed_text&amp;story_id=1798059483559870\" data-ft=\"{&quot;tn&quot;:&quot;*N&quot;,&quot;type&quot;:104}\"><span class=\"_5afx\" style=\"box-sizing: border-box;\"><span class=\"_58cl _5afz\" style=\"box-sizing: border-box;\">#</span><span class=\"_58cm\" style=\"box-sizing: border-box;\">day01</span></span></a>&nbsp;<a class=\"_58cn\" style=\"box-sizing: border-box; background-color: transparent; color: #999999; text-decoration-line: none; -webkit-font-smoothing: antialiased;\" href=\"https://www.facebook.com/hashtag/sinergidakwah?source=feed_text&amp;story_id=1798059483559870\" data-ft=\"{&quot;tn&quot;:&quot;*N&quot;,&quot;type&quot;:104}\"><span class=\"_5afx\" style=\"box-sizing: border-box;\"><span class=\"_58cl _5afz\" style=\"box-sizing: border-box;\">#</span><span class=\"_58cm\" style=\"box-sizing: border-box;\">sinergiDakwah</span></span></a>&nbsp;#&nbsp;<a class=\"_58cn\" style=\"box-sizing: border-box; background-color: transparent; color: #999999; text-decoration-line: none; -webkit-font-smoothing: antialiased;\" href=\"https://www.facebook.com/hashtag/penggiatdakwah?source=feed_text&amp;story_id=1798059483559870\" data-ft=\"{&quot;tn&quot;:&quot;*N&quot;,&quot;type&quot;:104}\"><span class=\"_5afx\" style=\"box-sizing: border-box;\"><span class=\"_58cl _5afz\" style=\"box-sizing: border-box;\">#</span><span class=\"_58cm\" style=\"box-sizing: border-box;\">penggiatDakwah</span></span></a></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 9px; text-align: justify;\">&nbsp;</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 9px; text-align: justify;\"><span class=\"_5afx\" style=\"box-sizing: border-box;\"><img style=\"box-sizing: border-box; border: 0px; vertical-align: middle; max-width: 100%;\" src=\"http://ydsf.org/assets/media/2017/11/06/547/4-berita-123.jpg\" alt=\"\" width=\"836\" height=\"557\" /></span></p>\r\n</div>','june','800x400-2-berita-123.jpg','PASSION DALAM DAKWAH (MISBAKHUL HUDA | TRAINER, PENULIS)'),

(132,'22','2017-12-24','sambangi koordinator','<p style=\"box-sizing: border-box; margin: 0px 0px 9px; font-family: \'Open Sans\', sans-serif; font-size: 13px; background-color: #f5f5f5; text-align: justify;\">Yayasan Dana Sosial Al-Falah bersilaturahim dengan salah satu koordinator donatur dari SDN Ketabang 1&nbsp; Surabaya, yaitu &nbsp;Dra. Lilik Sulastri. Pada silaturahim ini, Lilik menceritakan pertemuan pertama kali dengan YDSF saat tahun 1990. Pada saat itu temannya yang sesama guru di Ketabang Seruni sudah menjadi donatur, &nbsp;sejak saat itu Ia mulai tertarik untuk menjadi donatur juga. &ldquo;Alhamdulilah saya sudah sejak tahun 1990 menjadi donatur, hal itu sebenarnya diawali saat saya masih di Ketabang Seruni, kebetulan saya dulu ada kawan yang bernama Suminah (kawan sesama guru). Sejak saat itu saya terpacu dan terpicu untuk berdonasi juga di YDSF. Selama menjadi donatur ini, saya sangat senang sekali, terlebih saat saya melahirkan anak yang pertama pada tahun 2000. Saat itu saya mengirimkan foto anak, untuk dimuat di majalah Al-Falah. Dan Alhamdulilah dimuat dimajalah, sejak saat itu saya semakin mantap dan percaya dengan Yayasan Dana Sosial Al Falah,&rdquo; ungkap &nbsp;guru yang sudah mengabdi sejak tahun 1983 ini.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 9px; font-family: \'Open Sans\', sans-serif; font-size: 13px; background-color: #f5f5f5; text-align: justify;\">Ia juga menjelaskan sejak menjadi koordinator dunatur, rezeki semakin berkah. &ldquo;Pada tahun 2012 saya diberikan kepercayaan oleh bu Indah (kawan sesama guru), untuk menjadi koordinator donatur. &nbsp;Alhamdulilah, sejak menjadi koordinator donatur dan dengan rutin bersedekah ini, saya dan keluarga merasa semakin diberikan kemudahan oleh Allah SWT. Kami sekeluargapun hampir-hampir tidak ada masalah dengan kebiasaan kami yang rajin memberi ini. Sekarang donatur di SDN Ketabang 1 ini sudah semakin banyak, dulu yang awalnya hanya &nbsp;belasan, sekarang hampir semua warga SDN Ketabang 1 sudah menjadi donatur. Dan total &nbsp;sekarang disini sudah ada 29 donatur,&rdquo; tutur sosok yang murah senyum ini.&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 9px; font-family: \'Open Sans\', sans-serif; font-size: 13px; background-color: #f5f5f5; text-align: justify;\">Pada akhir kunjungan dengan team YDSF, Lilik Sulastri juga bersyukur dan berterima kasih karena salah satunya banyak ilmu-ilmu yang didapat dari &nbsp;majalah YDSF yang telah menambah khazanah ilmunya. &ldquo;Saya berterima kasih kepada YDSF, yang telah banyak memberi kemudahan kepada donatur. Salah satunya dengan memberikan majalah yang bermanfaat setiap bulannya. Semoga YDSF dan para donaturnya selalu diberikan kemudahan dan keberkahan. Dan semoga rubrik-rubrik majalah YDSf semakin diperbanyak dengan konten yang lebih menarik dan bermanfaat lagi,&rdquo; pungkasnya. &nbsp; &nbsp;</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 9px; font-family: \'Open Sans\', sans-serif; font-size: 13px; background-color: #f5f5f5; text-align: justify;\"><img style=\"box-sizing: border-box; border: 0px; vertical-align: middle; max-width: 100%;\" src=\"http://ydsf.org/assets/media/2017/11/02/546/2-koordinator.jpg\" alt=\"\" width=\"651\" height=\"431\" />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>','june','800x400-1-koordinator.jpg','YDSF SAMBANGI KOORDINATOR DONATUR SDN KETABANG 1 SURABAYA'),

(133,'2','2017-12-25','salurkan bantuan','<p style=\"box-sizing: border-box; margin: 0px 0px 9px; font-family: \'Open Sans\', sans-serif; font-size: 13px; background-color: #f5f5f5; text-align: justify;\"><em><strong>Yayasan Dana Soaial Al-Falah menyalurkan bantuan untuk masjid di Jawa Timur. Bantuan ini diserahkan dikantor YDSF Graha Zakat 2 yang diberikan oleh Dainuri, selaku koordinator program dakwah perkotaan dan masjid.</strong></em></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 9px; font-family: \'Open Sans\', sans-serif; font-size: 13px; background-color: #f5f5f5; text-align: justify;\"><em><strong>Ahmad Basuki, selaku manager dakwah masjid menjelaskan, &ldquo;Program bantuan ini tidak berupa uang tunai, melainkan berbentuk material maupun bahan bangunan, seperti:&nbsp;sound system,&nbsp;keramik, semen, kaca,&nbsp;neon box, dan sebagainya, yang dibutuhkan oleh masjid/musholla di Jawa Timur. Pemberian bantuan ini berupa paket-paket material, dengan rincian bantuan yaitu 7 juta bantuan untuk masjid, dan 6 juta bantuan untuk musholla.</strong></em></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 9px; font-family: \'Open Sans\', sans-serif; font-size: 13px; background-color: #f5f5f5; text-align: justify;\"><em><strong>Asfarrul salah satu pengurus musholla Hidayatullah Mojokerto yang mendapatkan bantuan sangat bersyukur atas bantuan material dari YDSF ini. &ldquo;Alhamdulilah, musholla kami mendapat bantuan material dari YDSF, semoga YDSF semakin berkah baik donatur maupun&nbsp; seluruh karyawan yang telah memberikan pelayanannya kepada kami. Terima kasih YDSF,&rdquo; ujar bapak 3 anak ini.</strong></em></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 9px; font-family: \'Open Sans\', sans-serif; font-size: 13px; background-color: #f5f5f5; text-align: justify;\"><em><strong>Dalam bantuan untuk masjid/musholla&nbsp; kali ini, &nbsp;diberikan kepada 15 masjid dan musholla di Jawa Timur, yang terdiri dari 8 masjid dan 7 musholla. Untuk bantuan &nbsp;ini YDSF mensalurkan bantuan dengan total&nbsp; RP. 122.000.000. Semoga dengan bantuan paket material ini,&nbsp; kualitas masjid dan musholla di Jawa Timur semakin bagus dan nyaman dipakai untuk beribadah.</strong></em></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 9px; font-family: \'Open Sans\', sans-serif; font-size: 13px; background-color: #f5f5f5; text-align: justify;\"><em><strong>&nbsp;<img style=\"box-sizing: border-box; border: 0px; vertical-align: middle; max-width: 100%;\" src=\"http://ydsf.org/assets/media/2017/10/31/545/2-masjid-new.jpg\" alt=\"\" width=\"845\" height=\"560\" /></strong></em></p>','irfan','800x400-1-masjid-new.jpg','YDSF SALURKAN BANTUAN MASJID DAN MUSHOLA JATIM'),

(134,'2','2017-12-25','bantu sesama','<p style=\"box-sizing: border-box; margin: 0px 0px 9px; font-family: \'Open Sans\', sans-serif; font-size: 13px; background-color: #f5f5f5; text-align: justify;\"><strong><em>&nbsp;merealisasikan bantuan zakat untuk mustahik (ZUM) kepada 43 penerima bantuan yang tersebar di beberapam kota seperti Surabaya, Madiun, Lamongan dan Mojokerto. Bantuan kali ini diberikan kepada para mustahik dengan jumlah total Rp.32.500.000,-. Andri Septiono selaku penanggung jawab ZUM menjelaskan ada beberapa asnaf yang di bantu Yayasan Dana Sosial Al Falah, untuk pencairan bantuan kali dialokasikan bantuan untuk fakir miskin, untuk berobat, untuk biaya hidup dan untuk&nbsp;ghorim&nbsp;(orang yang berhutang yang butuh dibantu).</em></strong></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 9px; font-family: \'Open Sans\', sans-serif; font-size: 13px; background-color: #f5f5f5; text-align: justify;\"><strong><em>Para penerima ZUM ini bervariasi, untuk bantuan biaya hidup dibantu sebesar Rp.500.000/mustahik, untuk berobat ada yang dari Rp.1.000.000-Rp.2.000.000/mustahik, dan untuk gharim sebesar Rp.1.000.000-1.500.000. Salah satu penerima bantuan ZUM adalah Khoiriyah, yang di mana anaknya yang bernama Aisyah Imro&rsquo;atun Karimah yang berumur 2 tahun 9 bulan, didiagnosa beberapa penyakit seperti pengapuran otak, asma akut, gizi buruk dan sebagainya. &ldquo;Alhamdulilah dengan bantuan dari YDSF ini dapat meringankan beban anak kami Aisyah, dan saya tetap optimis Inshaa Allah dengan kondisi anak kami yang kurang sempurna dan keterbatasan ekonomi ini, semoga ini dapat menjadi jalan kami sebagai orang tua Aisyah untuk tambah dekat dengan Allah SWT. Dan saya yakin Allah akan memberikan mu&rsquo;jizat untuk kesembuhan anak kami. Inshaa Allah kami akan terus usaha sampai titik darah penghabisan, dan dengan kondisi anak kami yang seperti ini dapat menambah kesabaran kami sebagai orang tua&nbsp; untuk mendapatkan tiket ke surga kelak,&rdquo; tutur ibu 3 anak ini dengan menitikan air mata.</em></strong></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 9px; font-family: \'Open Sans\', sans-serif; font-size: 13px; background-color: #f5f5f5; text-align: justify;\"><strong><em>Andri menjelaskan untuk bantuan ZUM ini sifatnya insidental (tidak rutin), namun ada bantuan hidup untuk lansia yang sifatnya rutin per/bulan. &ldquo;Untuk bantuan ZUM ini kami ada juga bantuan rutin/bulan, dan sekarang kebermanfaatannya kurang lebih sudah mencapai 30 mustahik, yang mayoritas adalah lansia. Bantuan hidup rutin ini per/bulan sebesar Rp.500.000/bulan. Harapan kami kedepannya agar kebermanfaatan YDSF kepada para mustahik ini semakin meluas dan semakin terasa manfaatnya.&rdquo; Jelas sosok yang berkaca mata ini sembari tersenyum.</em></strong></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 9px; font-family: \'Open Sans\', sans-serif; font-size: 13px; background-color: #f5f5f5; text-align: justify;\"><strong><em>&nbsp;</em></strong></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 9px; font-family: \'Open Sans\', sans-serif; font-size: 13px; background-color: #f5f5f5; text-align: justify;\"><strong><em><img style=\"box-sizing: border-box; border: 0px; vertical-align: middle; max-width: 100%;\" src=\"http://ydsf.org/assets/media/2017/10/24/544/2-zumm.jpg\" alt=\"\" width=\"795\" height=\"527\" /></em></strong></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 9px; font-family: \'Open Sans\', sans-serif; font-size: 13px; background-color: #f5f5f5; text-align: justify;\"><strong><em>Foto: Khoiriyah dan Aisyah (anak) mustahik penerima bantuan ZUM yang terkena pengapuran otak.</em></strong></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 9px; font-family: \'Open Sans\', sans-serif; font-size: 13px; background-color: #f5f5f5; text-align: justify;\"><strong><em>&nbsp;</em></strong></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 9px; font-family: \'Open Sans\', sans-serif; font-size: 13px; background-color: #f5f5f5; text-align: justify;\"><strong><em><img style=\"box-sizing: border-box; border: 0px; vertical-align: middle; max-width: 100%;\" src=\"http://ydsf.org/assets/media/2017/10/24/544/3-zumm.jpg\" alt=\"\" width=\"791\" height=\"524\" /></em></strong></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 9px; font-family: \'Open Sans\', sans-serif; font-size: 13px; background-color: #f5f5f5; text-align: justify;\"><strong><em>Foto: Para penerima bantuan Zakat Untuk Mustahik (ZUM).</em></strong></p>','irfan','800x400-2-three-news11.jpg','YDSF BANTU 43 ZAKAT UNTUK MUSTAHIK  '),

(135,'2','2017-12-25','dakwah bersama','<p style=\"box-sizing: border-box; margin: 0px 0px 9px; font-family: \'Open Sans\', sans-serif; font-size: 13px; background-color: #f5f5f5; text-align: justify;\"><strong><em>) Sembari melakukan perjalanan dakwah dan pelatihan guru, tim YDSF berkesempatan bersilaturahmi ke Desa Walesi Distrik Walesi Kabupaten Jayawijaya, Papua. Dengan didampingi Presiden AFKN KH. Fadlan Al Rabbany Garamatan, tim membagikan sembako sejumlah 100 paket @Rp. 250 ribu, terdiri dari kebutuhan bahan pokok beras, gulu, minyak, teh, kecap, dsb. Semoga dengan bantuan paket&nbsp;<span class=\"text_exposed_show\" style=\"box-sizing: border-box;\">ini akan semakin menguatkan ukhuwah kita dengan Indonesia Timur khususnya wilayah Walesi ini. Dan juga semoga bisa menguatkan aqidah penduduk setempat, sehingga mereka makin semangat meningkatkan ibadah dan keislaman mereka.</span></em></strong></p>\r\n<div class=\"text_exposed_show\" style=\"box-sizing: border-box; font-family: \'Open Sans\', sans-serif; font-size: 13px; background-color: #f5f5f5;\">\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 9px; text-align: justify;\"><strong><em>Sejumlah paket yang sama juga di bagikan ke Tolikara, sehingga total bantuan 200 paket. Sehubungan dengan faktor keamanan di wilayah Tolikara saat ini, maka tim YDSF tidak bisa mengantarkan langsung, namun bantuan di titipkan melalui perwakilan imam masjid Tolikara. Semoga kami berkesempatan lagi untuk mengunjungi Tolikara, karena pendampingan di wilayah dakwah Indonesia Timur ini Inshaallah akan berkesinambungan jangka panjang. &ldquo;Semoga kami juga bisa menyalurkan dakwah ke wilayah lainnya di Indonesia Timur menyampaikan amanah dari para donatur kami,&rdquo; kata Imron Wahyudi selaku ketua penyelenggara YDSF.</em></strong></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 9px; text-align: justify;\"><strong><em><img style=\"box-sizing: border-box; border: 0px; vertical-align: middle; max-width: 100%;\" src=\"http://ydsf.org/assets/media/2017/10/18/541/1-three-news.jpg\" alt=\"\" width=\"755\" height=\"503\" /></em></strong></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 9px; text-align: justify;\"><strong><em>&ldquo;Kenapa kami memilih wilayah Walesi dan Tolikara? Karena Walesi merupakan pusat peradaban Islam pertama di pegunungan Jayawijaya, Wamena. Sehingga untuk menguatkan hati saudara-saudara kita Tim YDSF memilih tempat ini serta Tolikara menjadi perjalanan dakwah YDSF, namun saat ini karena beberapa hal kami belum mendatangi Tolikara namun bantuan kami serahkan pada imam masjid Tolikara yang sudah hadir bersama kami,&rdquo; jelas KH. Fadlan Al Rabbany Garamatan selaku Presiden yayasan AFKN.</em></strong></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 9px; text-align: justify;\"><strong><em><a class=\"_58cn\" style=\"box-sizing: border-box; background-color: transparent; color: #999999; text-decoration-line: none; -webkit-font-smoothing: antialiased;\" href=\"https://www.facebook.com/hashtag/day06?source=feed_text&amp;story_id=1777158895649929\" type=\"\" data-ft=\"{\"><span class=\"_5afx\" style=\"box-sizing: border-box;\"><span class=\"_58cl _5afz\" style=\"box-sizing: border-box;\">#</span><span class=\"_58cm\" style=\"box-sizing: border-box;\">Day06</span></span></a>&nbsp;<a class=\"_58cn\" style=\"box-sizing: border-box; background-color: transparent; color: #999999; text-decoration-line: none; -webkit-font-smoothing: antialiased;\" href=\"https://www.facebook.com/hashtag/dakwahpapua?source=feed_text&amp;story_id=1777158895649929\" type=\"\" data-ft=\"{\"><span class=\"_5afx\" style=\"box-sizing: border-box;\"><span class=\"_58cl _5afz\" style=\"box-sizing: border-box;\">#</span><span class=\"_58cm\" style=\"box-sizing: border-box;\">DakwahPapua</span></span></a>&nbsp;<a class=\"_58cn\" style=\"box-sizing: border-box; background-color: transparent; color: #999999; text-decoration-line: none; -webkit-font-smoothing: antialiased;\" href=\"https://www.facebook.com/hashtag/walesi?source=feed_text&amp;story_id=1777158895649929\" type=\"\" data-ft=\"{\"><span class=\"_5afx\" style=\"box-sizing: border-box;\"><span class=\"_58cl _5afz\" style=\"box-sizing: border-box;\">#</span><span class=\"_58cm\" style=\"box-sizing: border-box;\">Walesi</span></span></a>&nbsp;<a class=\"_58cn\" style=\"box-sizing: border-box; background-color: transparent; color: #999999; text-decoration-line: none; -webkit-font-smoothing: antialiased;\" href=\"https://www.facebook.com/hashtag/jayawijaya?source=feed_text&amp;story_id=1777158895649929\" type=\"\" data-ft=\"{\"><span class=\"_5afx\" style=\"box-sizing: border-box;\"><span class=\"_58cl _5afz\" style=\"box-sizing: border-box;\">#</span><span class=\"_58cm\" style=\"box-sizing: border-box;\">Jayawijaya</span></span></a>&nbsp;<a class=\"_58cn\" style=\"box-sizing: border-box; background-color: transparent; color: #999999; text-decoration-line: none; -webkit-font-smoothing: antialiased;\" href=\"https://www.facebook.com/hashtag/ydsf?source=feed_text&amp;story_id=1777158895649929\" type=\"\" data-ft=\"{\"><span class=\"_5afx\" style=\"box-sizing: border-box;\"><span class=\"_58cl _5afz\" style=\"box-sizing: border-box;\">#</span><span class=\"_58cm\" style=\"box-sizing: border-box;\">ydsf</span></span></a>&nbsp;<a class=\"_58cn\" style=\"box-sizing: border-box; background-color: transparent; color: #999999; text-decoration-line: none; -webkit-font-smoothing: antialiased;\" href=\"https://www.facebook.com/hashtag/ydsfku?source=feed_text&amp;story_id=1777158895649929\" type=\"\" data-ft=\"{\"><span class=\"_5afx\" style=\"box-sizing: border-box;\"><span class=\"_58cl _5afz\" style=\"box-sizing: border-box;\">#</span><span class=\"_58cm\" style=\"box-sizing: border-box;\">ydsfku</span></span></a></em></strong></p>\r\n</div>','irfan','800x400-5-berita-1231.jpg','PART 8-DAKWAH BERSAMA DI PERADABAN ISLAM PERTAMA PEGUNUNGAN JAYAWIJAYA'),

(136,'2','2017-12-25','pembukaan pelatihan','<p style=\"box-sizing: border-box; margin: 0px 0px 9px; font-family: \'Open Sans\', sans-serif; font-size: 13px; background-color: #f5f5f5; text-align: justify;\">) Setelah 3 hari melaksanakan pelatihan untuk guru-guru di Fakfak (12-14/10), tim YDSF dan KPI dengan didampingi langsung oleh Presiden AFKN KH. Fadlan Al Rabbany Garamatan melanjutkan perjalanan menuju Wamena. Namun perjalanan tak semudah yang dibayangkan, untuk mencapai Wamena ini harus transit terlebih dahulu ke kota Sorong selama 1 hari dan menuju Jayapura dengan waktu tempuh 2 jam.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 9px; font-family: \'Open Sans\', sans-serif; font-size: 13px; background-color: #f5f5f5; text-align: justify;\">Sekitar jam 14.00 WIT tim sampai di Wamena langsung mempersiapkan acara untuk jam 16.00 nanti pelatihan guru.<br style=\"box-sizing: border-box;\" />Tak jauh beda dengan peserta di Fakfak, guru-guru di Wamena juga bersemangat mengikuti pelatihan ini. Ketua panitia Wamena H. Adnan Yelipele, SHI/MA.HK menyambut baik pe latihan untuk guru-guru sekabupaten Jaya Wijaya. &ldquo;Mudah-mudahan dengan pelatihan ini bisa memberikan wawasan lebih baik demi duia pendidikan. Dan mendapat ilmu yang bermanfaat yang bisa diberikan kepada para anak-didiknya,&rdquo; kata Adnan.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 9px; font-family: \'Open Sans\', sans-serif; font-size: 13px; background-color: #f5f5f5; text-align: justify;\">Presiden AFKN, KH. Fadlan Al Rabbany Garamatan menceritakan pengalamannya dulu sewaktu SD guru sudah bersiap membawa kayu rotan menyambut anak-anak datang sekolah. Anak-anak siswa sebelum masuk kelas sudah ketakutan, sehingga kualitas komunikasi belajar mengajar kurang maksimal.<br style=\"box-sizing: border-box;\" />Di wilayah Timur seringkali ditemui guru-guru menggunakan kata-kata kasar/makian di depan anak-anak, yang dijadikan kebiasaan di lingkungan sekolah. Secara tak sadar bisa mematikan kecerdasan di kalangan siswa. Kadang dijumpai disini guru dikejar-kejar siswa, guru dimarahi wali murid, karena ada jarak dalam komunikasi. &ldquo;Semoga pelatihan dari KPI ini bisa merubah metode mengajar yang lebih komunikatif. Kita boleh punya industri pesawat, industri pakaian, tapi guru adalah industri Sumber Daya Manusia yang tak boleh dibiarkan,&rdquo; lanjut ustadz Fadlan.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 9px; font-family: \'Open Sans\', sans-serif; font-size: 13px; background-color: #f5f5f5; text-align: justify;\">&nbsp;</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 9px; font-family: \'Open Sans\', sans-serif; font-size: 13px; background-color: #f5f5f5; text-align: justify;\"><img style=\"box-sizing: border-box; border: 0px; vertical-align: middle; max-width: 100%;\" src=\"http://ydsf.org/assets/media/2017/10/18/541/5-three-news.jpg\" alt=\"\" width=\"773\" height=\"515\" /></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 9px; font-family: \'Open Sans\', sans-serif; font-size: 13px; background-color: #f5f5f5; text-align: justify;\">Dalam sambutannya Kepala Divisi Penghimbunan YDSF, Arief Prasojo, juga menyampaikan bahwa guru penuntun pendidikan bagi putra-putri kita ke depan. Membangun komunikasidengan anak menjadi penting, sehingga pelatihan ini bisa memberikan komunikasi yang lebh baik. Anak-anak menjadi generasi yang lebih cerdas dan tangguh menjadikan Indonesia Timur lebih berjaya.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 9px; font-family: \'Open Sans\', sans-serif; font-size: 13px; background-color: #f5f5f5; text-align: justify;\">Mewakili Kementrian Agama Kabupaten Wamena, Kepala Pendidikan Eko Harianto juga menyampaikan terima kasih atas terselenggaranya acara ini. Semoga dengan peltihan ini bisa mendorong guru-guru lebih intens untuk mencerdaskan anak-anak didiknya. YDSF dan AFKN serta KPI menjadi wahana bagi Indonesia Timur untuk mencerdaskan anak-anak, bila diserahkan semua kepada pemerintah tentulah tidak akan cukup. &ldquo;Memang 20% anggaran APBD untuk pendidikan, namun pelaksanaannya tidaklah semudah itu, Karena jumlah anggaran itu sudah merupakan akumulasi dari seskian banyak pengeluaran pendidikan,&rdquo; kata beliau.<br style=\"box-sizing: border-box;\" />Melihat perjalanan memasuki Wamena ini yang cukup jauh, melewati beberapa transit ke beberapa daerah, menunjukkan lokasi ini memanglah terpencil. Sehingga inilah kesempatan terbaik bagi guru-guru untuk memanfaatkan waktu sebaik-baiknya menyerap ilmu dari pelatihan ini. Setelah pelatihan ini, guru-guru bia memberikan warna kepada teman-teman lain yang tidak mengikuti kegiatan ini.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 9px; font-family: \'Open Sans\', sans-serif; font-size: 13px; background-color: #f5f5f5; text-align: justify;\"><a class=\"_58cn\" style=\"box-sizing: border-box; background-color: transparent; color: #999999; text-decoration-line: none; -webkit-font-smoothing: antialiased;\" href=\"https://www.facebook.com/hashtag/day06?source=feed_text&amp;story_id=1777099375655881\" type=\"\" data-ft=\"{\"><span class=\"_5afx\" style=\"box-sizing: border-box;\"><span class=\"_58cl _5afz\" style=\"box-sizing: border-box;\">#</span><span class=\"_58cm\" style=\"box-sizing: border-box;\">Day06</span></span></a>&nbsp;<a class=\"_58cn\" style=\"box-sizing: border-box; background-color: transparent; color: #999999; text-decoration-line: none; -webkit-font-smoothing: antialiased;\" href=\"https://www.facebook.com/hashtag/dakwahpapua?source=feed_text&amp;story_id=1777099375655881\" type=\"\" data-ft=\"{\"><span class=\"_5afx\" style=\"box-sizing: border-box;\"><span class=\"_58cl _5afz\" style=\"box-sizing: border-box;\">#</span><span class=\"_58cm\" style=\"box-sizing: border-box;\">DakwahPapua</span></span></a>&nbsp;<a class=\"_58cn\" style=\"box-sizing: border-box; background-color: transparent; color: #999999; text-decoration-line: none; -webkit-font-smoothing: antialiased;\" href=\"https://www.facebook.com/hashtag/day01?source=feed_text&amp;story_id=1777099375655881\" type=\"\" data-ft=\"{\"><span class=\"_5afx\" style=\"box-sizing: border-box;\"><span class=\"_58cl _5afz\" style=\"box-sizing: border-box;\">#</span><span class=\"_58cm\" style=\"box-sizing: border-box;\">Day01</span></span></a>&nbsp;<a class=\"_58cn\" style=\"box-sizing: border-box; background-color: transparent; color: #999999; text-decoration-line: none; -webkit-font-smoothing: antialiased;\" href=\"https://www.facebook.com/hashtag/smartteaching?source=feed_text&amp;story_id=1777099375655881\" type=\"\" data-ft=\"{\"><span class=\"_5afx\" style=\"box-sizing: border-box;\"><span class=\"_58cl _5afz\" style=\"box-sizing: border-box;\">#</span><span class=\"_58cm\" style=\"box-sizing: border-box;\">SmartTeaching</span></span></a>&nbsp;<a class=\"_58cn\" style=\"box-sizing: border-box; background-color: transparent; color: #999999; text-decoration-line: none; -webkit-font-smoothing: antialiased;\" href=\"https://www.facebook.com/hashtag/wamena?source=feed_text&amp;story_id=1777099375655881\" type=\"\" data-ft=\"{\"><span class=\"_5afx\" style=\"box-sizing: border-box;\"><span class=\"_58cl _5afz\" style=\"box-sizing: border-box;\">#</span><span class=\"_58cm\" style=\"box-sizing: border-box;\">Wamena</span></span></a></p>','irfan','800x400-4-three-news1.jpg','PART 7-PEMBUKAAN PELATIHAN SMART TEACHING DI WAMENA'),

(137,'2','2017-12-25','solidaritas','<p style=\"box-sizing: border-box; margin: 0px 0px 9px; font-family: \'Open Sans\', sans-serif; font-size: 13px; background-color: #f5f5f5;\"><strong><em>Bertepatan dengan kegiatan apel senin pagi, RSUD Sidoarjo menyerahkan bantuan dana kemanusiaan untuk Rohingya melalui Yayasan Dana Sosial Al Falah (YDSF) sebesar Rp 40.205.000,- (empat puluh juta dua ratus lima ribu rupiah). Penyerahan bantuan dilakukan secara simbolis oleh Direktur RSUD Sidoarjo, dr. Atok Irawan, Sp.P., langsung kepada Direktur YDSF, Jauhari Sani.</em></strong><br style=\"box-sizing: border-box;\" /><strong><em>Terimakasih atas partisipasi RSUD Sidoarjo dala<span class=\"text_exposed_show\" style=\"box-sizing: border-box;\">m bantuan dana kemanusiaan Peduli Muslim Rohingya.<br style=\"box-sizing: border-box;\" />Jazakumullah khoiron katsiron.</span></em></strong></p>\r\n<div class=\"text_exposed_show\" style=\"box-sizing: border-box; font-family: \'Open Sans\', sans-serif; font-size: 13px; background-color: #f5f5f5;\">\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 9px;\"><strong><em><a class=\"_58cn\" style=\"box-sizing: border-box; background-color: transparent; color: #999999; text-decoration-line: none; -webkit-font-smoothing: antialiased;\" href=\"https://www.facebook.com/hashtag/pedulirohingya?source=feed_text&amp;story_id=1776291755736643\" type=\"\" data-ft=\"{\"><span class=\"_5afx\" style=\"box-sizing: border-box;\"><span class=\"_58cl _5afz\" style=\"box-sizing: border-box;\">#</span><span class=\"_58cm\" style=\"box-sizing: border-box;\">pedulirohingya</span></span></a>&nbsp;<a class=\"_58cn\" style=\"box-sizing: border-box; background-color: transparent; color: #999999; text-decoration-line: none; -webkit-font-smoothing: antialiased;\" href=\"https://www.facebook.com/hashtag/bantuankemanusiaan?source=feed_text&amp;story_id=1776291755736643\" type=\"\" data-ft=\"{\"><span class=\"_5afx\" style=\"box-sizing: border-box;\"><span class=\"_58cl _5afz\" style=\"box-sizing: border-box;\">#</span><span class=\"_58cm\" style=\"box-sizing: border-box;\">bantuankemanusiaan</span></span></a>&nbsp;<a class=\"_58cn\" style=\"box-sizing: border-box; background-color: transparent; color: #999999; text-decoration-line: none; -webkit-font-smoothing: antialiased;\" href=\"https://www.facebook.com/hashtag/ydsf?source=feed_text&amp;story_id=1776291755736643\" type=\"\" data-ft=\"{\"><span class=\"_5afx\" style=\"box-sizing: border-box;\"><span class=\"_58cl _5afz\" style=\"box-sizing: border-box;\">#</span><span class=\"_58cm\" style=\"box-sizing: border-box;\">ydsf</span></span></a>&nbsp;<a class=\"_58cn\" style=\"box-sizing: border-box; background-color: transparent; color: #999999; text-decoration-line: none; -webkit-font-smoothing: antialiased;\" href=\"https://www.facebook.com/hashtag/ydsfsidoarjo?source=feed_text&amp;story_id=1776291755736643\" type=\"\" data-ft=\"{\"><span class=\"_5afx\" style=\"box-sizing: border-box;\"><span class=\"_58cl _5afz\" style=\"box-sizing: border-box;\">#</span><span class=\"_58cm\" style=\"box-sizing: border-box;\">ydsfsidoarjo</span></span></a>&nbsp;<a class=\"_58cn\" style=\"box-sizing: border-box; background-color: transparent; color: #999999; text-decoration-line: none; -webkit-font-smoothing: antialiased;\" href=\"https://www.facebook.com/hashtag/rsudsidoarjo?source=feed_text&amp;story_id=1776291755736643\" type=\"\" data-ft=\"{\"><span class=\"_5afx\" style=\"box-sizing: border-box;\"><span class=\"_58cl _5afz\" style=\"box-sizing: border-box;\">#</span><span class=\"_58cm\" style=\"box-sizing: border-box;\">rsudsidoarjo</span></span></a><a class=\"_58cn\" style=\"box-sizing: border-box; background-color: transparent; color: #999999; text-decoration-line: none; -webkit-font-smoothing: antialiased;\" href=\"https://www.facebook.com/hashtag/mariberinfaq?source=feed_text&amp;story_id=1776291755736643\" type=\"\" data-ft=\"{\"><span class=\"_5afx\" style=\"box-sizing: border-box;\"><span class=\"_58cl _5afz\" style=\"box-sizing: border-box;\">#</span><span class=\"_58cm\" style=\"box-sizing: border-box;\">mariberinfaq</span></span></a></em></strong></p>\r\n</div>','irfan','800x400-3-three-news.jpg','SOLIDARITAS RSUD SIDOARJO UNTUK MUSLIM ROHINGYA');
insert into `rh_berita` values 

(138,'2','2017-07-18','bantu besasiswa','<p style=\"box-sizing: border-box; margin: 0px 0px 9px; font-family: \'Open Sans\', sans-serif; font-size: 13px; background-color: #f5f5f5; text-align: justify;\">REALISASI BEASISWA ANAK PANTI 2017&nbsp;<br style=\"box-sizing: border-box;\" />Termin I</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 9px; font-family: \'Open Sans\', sans-serif; font-size: 13px; background-color: #f5f5f5; text-align: justify;\">Lumajang (13/10/17)- Bertempat di LKSA IZZATUL JANNAH Ds. Dawuhan Lor Kec. Sukodono, YDSF dan FKPAIS menyerahkan ba<span class=\"text_exposed_show\" style=\"box-sizing: border-box;\">ntuan pendidikan untuk anak panti 2017. Agenda ini di hadiri oleh Pengurus FKPAIS Lumajang, 4 LKSA di Lumajang yang mendapatkan bantuan, Pengurus FKPAIS Jember dan Pengurus FKPAIS Probolinggo.</span></p>\r\n<div class=\"text_exposed_show\" style=\"box-sizing: border-box; font-family: \'Open Sans\', sans-serif; font-size: 13px; background-color: #f5f5f5;\">\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 9px; text-align: justify;\">\"Total ada 50 an LKSA yang ada di Lumajang ini, alhamdulillah tahun ini yang dapat 4 lembaga. Semoga tahun depan mash berlanjut dan mendapatkan tambahan kuota untuk lumajang ini.\" ucap Ust. Samsul Ketua FKPAIS Lumajang.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 9px; text-align: justify;\">Pada akhir tahun 2017 ini, YDSF dan FKPAIS akan merealisasikan senilai 1,4 M untuk program Beasiswa Anak Panti 2017. Penerimanya adalah anak-anak panti yang masih aktif bersekolah. Bantuan ini akan disalurkan untuk 28 kab/kota di Jawa Timur.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 9px; text-align: justify;\">Barokalloh untuk Donatur&nbsp;<a class=\"profileLink\" style=\"box-sizing: border-box; background-color: transparent; color: #999999; text-decoration-line: none; -webkit-font-smoothing: antialiased;\" href=\"https://www.facebook.com/profile.php?id=100008962188937&amp;fref=mentions\" data-hovercard=\"/ajax/hovercard/user.php?id=100008962188937&amp;extragetparams=%7B%22fref%22%3A%22mentions%22%7D\" data-hovercard-prefer-more-content-show=\"1\">Ydsf</a>, FKPAIS, dan semua nya yang terlibat dalam program ini.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 9px; text-align: justify;\">Bahagia itu sederhana,&nbsp;<br style=\"box-sizing: border-box;\" />Mari berbagi rezeki&nbsp;<br style=\"box-sizing: border-box;\" />mewujudkan mimpi dan senyum yatim di negeri ini.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 9px; text-align: justify;\">&nbsp;</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 9px; text-align: justify;\">&nbsp;<img style=\"box-sizing: border-box; border: 0px; vertical-align: middle; max-width: 100%;\" src=\"http://ydsf.org/assets/media/2017/10/17/540/2-beasiswa-yatim-1.jpg\" alt=\"\" width=\"811\" height=\"608\" /></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 9px;\">REALISASI BEASISWA ANAK PANTI 2017</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 9px;\">SITUBONDO - (15/10/2017) Bertempat di Aula LKSA Al Ikhlas Nurul Yaqin, Besuki. Pengurus FKPAIS Situbodo merealisasikan bantuan senilai Rp 80.000.000,00. Agenda ini dihadiri oleh pengurus FKPAIS Situbondo dan ketua panti sejumlah 25 orang.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 9px;\">Jazakumulloh khoiron katsiron.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 9px; text-align: justify;\"><a class=\"_58cn\" style=\"box-sizing: border-box; background-color: transparent; color: #999999; text-decoration-line: none; -webkit-font-smoothing: antialiased;\" href=\"https://www.facebook.com/hashtag/ydsfku?source=feed_text&amp;story_id=2117415601617446\" type=\"\" data-ft=\"{\"><span class=\"_5afx\" style=\"box-sizing: border-box;\"><span class=\"_58cl _5afz\" style=\"box-sizing: border-box;\">#</span><span class=\"_58cm\" style=\"box-sizing: border-box;\">ydsfku</span></span></a><br style=\"box-sizing: border-box;\" /><a class=\"_58cn\" style=\"box-sizing: border-box; background-color: transparent; color: #999999; text-decoration-line: none; -webkit-font-smoothing: antialiased;\" href=\"https://www.facebook.com/hashtag/fkpais?source=feed_text&amp;story_id=2117415601617446\" type=\"\" data-ft=\"{\"><span class=\"_5afx\" style=\"box-sizing: border-box;\"><span class=\"_58cl _5afz\" style=\"box-sizing: border-box;\">#</span><span class=\"_58cm\" style=\"box-sizing: border-box;\">fkpais</span></span></a></p>\r\n</div>','irfan','800x400-1-pena-bangsa111.jpg','BANTUAN BEASISWA ANAK PANTI 2017');

/*Table structure for table `rh_jadwal_kegiatan` */

DROP TABLE IF EXISTS `rh_jadwal_kegiatan`;

CREATE TABLE `rh_jadwal_kegiatan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_rohis` int(11) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `kategori_aktivitas` varchar(100) DEFAULT NULL,
  `jam` time DEFAULT NULL,
  `nama_aktivitas` varchar(100) DEFAULT NULL,
  `ulama_tokoh` varchar(100) DEFAULT NULL,
  `tempat` mediumtext,
  `target` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

/*Data for the table `rh_jadwal_kegiatan` */

insert into `rh_jadwal_kegiatan` values 

(4,2,'2018-01-01','Kegiatan Rutin','23:30:36','sholawat berjamaah','ustad hanan','masjid al-munawaroh','2 jam'),

(5,887,'2017-11-15',NULL,'14:50:06','Bertasbih kepada allah','ustad hanan','jakarta barat','5 jam'),

(6,887,'2017-12-16',NULL,'10:06:08','Baca Quran Bareng','ustad adi hidyat','bandung selatan','4 jam'),

(15,2,'2018-01-01','Kegiatan Rutin','23:30:32','ceramah ','ustad hanan','masjid al aqsa','2 jam'),

(21,2,'2018-01-01','Kegiatan Tambahan','23:30:00','reunian','kang komar','jakarta','2 jam');

/*Table structure for table `rh_kegiatan_rutin` */

DROP TABLE IF EXISTS `rh_kegiatan_rutin`;

CREATE TABLE `rh_kegiatan_rutin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_rohis` int(11) DEFAULT NULL,
  `kegiatan_rutin` varchar(100) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `jam` time DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

/*Data for the table `rh_kegiatan_rutin` */

insert into `rh_kegiatan_rutin` values 

(20,887,'sholawat bareng','2017-11-16','13:50:16'),

(21,2,'ngaji bareng','2018-01-01','14:10:29'),

(22,2,'sholawat bareng','2018-01-01','14:10:40'),

(23,2,'berdoa bersama','2017-04-10','18:43:29'),

(24,2,'ngaji bareng','2017-08-23','12:11:37'),

(25,2,'main bareng','2017-08-17','11:09:57'),

(26,2,'sholawat bareng','2017-09-21','12:10:22'),

(27,2,'testing','2018-01-02','02:30:27'),

(28,22,'main bareng','2018-01-17','14:11:05');

/*Table structure for table `rh_login` */

DROP TABLE IF EXISTS `rh_login`;

CREATE TABLE `rh_login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(90) DEFAULT NULL,
  `password` varchar(90) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `hakakses` varchar(100) DEFAULT NULL,
  `id_rohis` int(11) DEFAULT NULL,
  `bg_data` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=latin1;

/*Data for the table `rh_login` */

insert into `rh_login` values 

(3,'ydsf','ydsf','2017-12-20','superadmin',67,'akses','1'),

(4,'irfan','irfan','2017-11-24','admin',2,'akses','1'),

(23,'rina','rina','2017-12-06','admin',887,'akses','1'),

(24,'rani','rani','2017-12-07','admin',70,'akses','1'),

(46,'june','june','2017-12-24','admin',22,'akses','1'),

(47,'risa','risa','2017-12-25','admin',96,'akses','1'),

(48,'erin','erin','2017-12-20','admin',12,'akses','1'),

(49,'dina','dina','2017-12-25','admin',21,'akses','1'),

(52,'yoga','yoga','2017-10-17','admin',43,'akses','1');

/*Table structure for table `rh_pemasukan` */

DROP TABLE IF EXISTS `rh_pemasukan`;

CREATE TABLE `rh_pemasukan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_rohis` int(11) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `deskripsi` varchar(100) DEFAULT NULL,
  `saldo` mediumint(9) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

/*Data for the table `rh_pemasukan` */

insert into `rh_pemasukan` values 

(13,2,'2017-12-15','daftar anggota',8388607),

(14,2,'2017-12-06','sumbangan dari warga setempat',1774000),

(15,2,'2017-12-06','iuran',19000),

(16,2,'2017-12-12','sumbangan',123123),

(17,2,'2017-11-09','sumbangan warga',18000),

(20,22,'2017-11-21','shadaqah',18004),

(21,22,'2017-12-13','daftar kegiatan',1908100);

/*Table structure for table `rh_pengeluaran` */

DROP TABLE IF EXISTS `rh_pengeluaran`;

CREATE TABLE `rh_pengeluaran` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_rohis` int(11) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `deskripsi` varchar(100) DEFAULT NULL,
  `saldo` int(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

/*Data for the table `rh_pengeluaran` */

insert into `rh_pengeluaran` values 

(14,2,'2017-11-30','infaq ',195000),

(15,2,'2017-12-07','jatah untuk warga',190000);

/*Table structure for table `rh_pribadi` */

DROP TABLE IF EXISTS `rh_pribadi`;

CREATE TABLE `rh_pribadi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_rohis` int(11) DEFAULT NULL,
  `nama_depan` varchar(100) DEFAULT NULL,
  `nama_belakang` varchar(100) DEFAULT NULL,
  `nama_perusahaan` varchar(100) DEFAULT NULL,
  `negara` varchar(100) DEFAULT NULL,
  `alamat1` varchar(100) DEFAULT NULL,
  `alamat2` varchar(100) DEFAULT NULL,
  `kota` varchar(100) DEFAULT NULL,
  `provinsi` varchar(100) DEFAULT NULL,
  `kode_pos` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `hakakses` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `bg_data` int(11) DEFAULT NULL,
  `image` mediumtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `rh_pribadi` */

insert into `rh_pribadi` values 

(1,2,'irfan','permana','-','-','-','-','-','-','-','irfan','irfan','2018-01-24','admin','1',12,NULL);

/*Table structure for table `rh_profil` */

DROP TABLE IF EXISTS `rh_profil`;

CREATE TABLE `rh_profil` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_rohis` int(11) DEFAULT NULL,
  `nama_sekolah` varchar(100) DEFAULT NULL,
  `alamat_surat` varchar(100) DEFAULT NULL,
  `long` varchar(100) DEFAULT NULL,
  `lat` varchar(100) DEFAULT NULL,
  `rt` varchar(100) DEFAULT NULL,
  `rw` varchar(100) DEFAULT NULL,
  `desa` varchar(100) DEFAULT NULL,
  `kecamatan` varchar(100) DEFAULT NULL,
  `kabupaten` varchar(100) DEFAULT NULL,
  `bg_data` varchar(100) DEFAULT NULL,
  `image` mediumtext,
  `username` varchar(90) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `hakakses` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=latin1;

/*Data for the table `rh_profil` */

insert into `rh_profil` values 

(26,2,'SMK Negeri 5 Surabaya','-','-7.265039','112.7603532','09','08',' Jl. Prof. Dr. Mustopo No.167-169','Mojo, Gubeng','Jawa Timur','akses','20170207_145852-1.jpg','irfan',NULL,NULL,NULL,'1'),

(37,887,'Sekolah Menengah Atas Negeri 21 Surabaya','-','-7.2614678','112.7277594','07','05','Jl. Argopuro No.11-15','Sawahan','Jawa Timur','akses','44729-fitur-google-maps-ini-akan-membantu-pelupa-tempat-parkir1.jpg','rina','2017-12-06','rina','admin','1'),

(38,70,'Sekolah Menengah Kejuruan Negeri 12 Surabaya','-','-7.3480712','112.6985744','04','06','Jl. Siwalankerto Permai No.1 A, Siwalankerto','Wonocolo','Jawa Timur','akses','gmaps_head1.png','rani','2017-12-06','rani','admin','1'),

(44,99,'Sekolah Menengah Kejuruan Negeri 4 Surabaya','-','-7.2564531','112.6952235','03','07','Jl. Kranggan No.81-101','Sawahan',' Jawa Timur','akses',NULL,'danang','2017-12-09','danang','admin','1'),

(48,22,'Sekolah Menengah Atas Negeri 8 Surabaya','-','-7.4943986','112.7369742','03','05','Jl. Sultan Iskandar Muda No.42',' Ujung, Semampir',' Kota SBY, Jawa Timur 60155','akses',NULL,'june','2017-12-24','june','admin','1'),

(49,96,'SMK TEKNIK PAL SURABAYA','-','-7.2457939','112.205983','07','03','Ujung','Semampir','Jawa Timur 60155','akses',NULL,'risa','2017-12-25','risa','admin','1'),

(50,12,'Sekolah Menengah Kejuruan Puruhita Surabaya','-','-7.1102891','112.3927468','09','05','Jl. Jagir Wonokromo No.112, ,','Jagir, Wonokromo',' Kota SBY, Jawa Timur 60244','akses',NULL,'erin','2017-12-20','erin','admin','1'),

(51,21,'Sekolah Menengah Pertama Negeri 1 Surabaya','-','-7.2626381','112.7307781','06','05','Jl. Pacar No.4-6','Ketabang, Genteng','Kota SBY, Jawa Timur 60272','akses',NULL,'dina','2017-12-25','dina','admin','1'),

(56,43,'SMK IPIEMS Surabaya','-','-7.2457939','112.2060049','01','04','Jl. Raya Menur No.125, ',', Manyar Sabrangan, Mulyorejo','Kota SBY, Jawa Timur 60285','akses',NULL,'yoga','2017-12-08','yoga','admin','1');

/*Table structure for table `rh_siswa_muslim` */

DROP TABLE IF EXISTS `rh_siswa_muslim`;

CREATE TABLE `rh_siswa_muslim` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_rohis` int(11) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `jenis_kelamin` varchar(50) DEFAULT NULL,
  `kelas` varchar(100) DEFAULT NULL,
  `ekonomi` varchar(100) DEFAULT NULL,
  `aktifitas_dakwah` mediumtext,
  `aktifitas_akademis` varchar(100) DEFAULT NULL,
  `beasiswa` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

/*Data for the table `rh_siswa_muslim` */

insert into `rh_siswa_muslim` values 

(13,2,'deden','Laki-laki','12','Kurang Mampu','Aktif','Baik Sekali','Di bantu'),

(14,2,'rina','Perempuan','12','Mampu','Pasif','Baik','Di bantu'),

(15,2,'rizki','Laki-laki','4','Mampu','Pasif','Sedang','Di bantu'),

(16,2,'anggy','Laki-laki','22','Mampu','Aktif','Baik Sekali','Di bantu');

/*Table structure for table `rh_tim` */

DROP TABLE IF EXISTS `rh_tim`;

CREATE TABLE `rh_tim` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_rohis` int(11) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `seksi_divisi` varchar(100) DEFAULT NULL,
  `image` mediumtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

/*Data for the table `rh_tim` */

insert into `rh_tim` values 

(21,2,'rizki','Ketua Dkm',NULL),

(23,2,'yuda','sekretaris',NULL),

(31,2,'irfan','pembina',NULL),

(34,2,'Anggy','Bendahara',NULL);

/*Table structure for table `rh_upload` */

DROP TABLE IF EXISTS `rh_upload`;

CREATE TABLE `rh_upload` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` mediumtext,
  `id_rohis` int(11) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

/*Data for the table `rh_upload` */

insert into `rh_upload` values 

(13,'1.jpg',2,'2018-01-16'),

(14,'20170207_145852-1.jpg',2,'2018-01-09'),

(15,'beserta-staf-sekolah_20150727_141759.jpg',2,'2018-01-18'),

(16,'FT--REZA--EKSKUL--PMR.JPG',2,'0000-00-00'),

(17,'maxresdefault.jpg',2,'0000-00-00'),

(18,'mengikuti-upacara-be_20150727_110436.jpg',2,'0000-00-00'),

(19,'maxresdefault1.jpg',2,'0000-00-00'),

(20,'n-syahrul-yasin-limpo-meninjau_20170411_000131.jpg',2,'0000-00-00');
