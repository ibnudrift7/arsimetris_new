<?php 
$cover_page = '';

if (isset($this->setting['merek_hero_image'])) {
  $cover_page = Yii::app()->baseUrl.ImageHelper::thumb(1920,562, '/images/static/'. $this->setting['merek_hero_image'] , array('method' => 'adaptiveResize', 'quality' => '90'));
}
?>
<section class="cover-insides" <?php if ($cover_page): ?>style="background-image: url(<?php echo $cover_page ?>);"<?php endif ?> >
    <div class="prelative container">
        <div class="container2 mx-auto">
            <div class="row">
        <div class="col-md-60">
          <button class="profil mx-auto"><?php echo $this->setting['merek_hero_title'] ?></button>
        </div>
        <div class="col-md-60">
          <h2 class="mx-auto text-center pt-3"><?php echo nl2br($this->setting['merek_hero_subtitle']) ?></h2>
        </div>
            </div>
        </div>
    </div>
</section>

<section class="merk-sec-1">
  <div class="prelative container pt-5">
    <div class="container2  mx-auto pt-5 pb-5">
      <div class="row">
        <div class="content pb-5">
          <?php echo $this->setting['merk1_content'] ?>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="merk-sec-2">
    <div class="prelative container">
        <div class="container2 mx-auto pt-5">
            <div class="row pt-5">
                <div class="col-md-60 mx-auto">
                    <div class="logo d-block mx-auto">
                        <img class="d-block mx-auto" src="<?php echo $this->assetBaseurl; ?>logo-merk.png" alt="">
                    </div>
                </div>
                <div class="col-md-60 mx-auto">
                    <div class="bawah-logo d-block mx-auto py-4">
                        <?php echo $this->setting['merk2_content'] ?>
                    </div>
                </div>
            </div>

			<?php
				$merk = [
					[
						'img_desk' => 'logo-sec-2.png',
						'img_mob' => 'Niro Granite adalah sebuah brand untuk produk Granit Tile yang berkelas dan berkualitas tinggi, memiliki koleksi yang sangat lengkap dan aneka varian yang bergaya modern serta dinamis. Granite Arsimetris Djaja adalah agen resmi dan distributor untuk produk granit tile Niro Granite di Banjarmasin, Kalimantan Selatan dan kota sekitarnya.',
					],
					[
						'img_desk' => 'onduline.jpg',
						'img_mob' => 'Genteng pintar pilihan terbaik bergaya mediteranian klasik yang elegant dan mewah kualitas premium dan teknologi dari perancis dengan pilihan warna artistik/menarik, ringan dan fleksibel, pemasangan cepat serta ekonomis, tidak berkarat/korosi serta tidak berisik saat hujan. Memiliki ketahanan terhadap air dan bergaransi. Arsimetris Djaja adalah agen resmi dan distributor untuk produk genteng pintar Onduline di Banjarmasin, Kalimantan Selatan dan kota sekitarnya.',
					],
					[
						'img_desk' => 'sika.jpg',
						'img_mob' => 'Solusi untuk mengatasi masalah infrastruktur bangunan dan bangunan yang terpercaya, berkualitas premium internasional dari mulai atas/atap sampai bawah/pondasi. Arsimetris Djaja adalah agen resmi dan distributor untuk produk Sika di Banjarmasin, Kalimantan Selatan dan kota sekitarnya.',
					],
					[
						'img_desk' => 'GERMANY-BRILLIANT.jpg',
						'img_mob' => 'produk perlengkapan rumah unggulan kualitas terbaik dengan konsep gaya hidup modern untuk hunian Anda. Produk terkemuka yang telah berdiri lebih dari 14 tahun dengan konsep gaya hidup modern dan bergaransi. Arsimetris Djaja adalah agen resmi dan distributor untuk produk sanitaryware Germany Brilliant di Banjarmasin, Kalimantan Selatan dan kota sekitarnya.',
					],
					[
						'img_desk' => 'solahart.png',
						'img_mob' => 'Solahart lebih dari sekedar pemanas air tenaga surya Solahart adalah solusi kebutuhan air hangat dengan kualitas top dunia yang berkualiatas, memiliki efisiensi tinggi, hemat energi, ramah lingkungan dan sangat aman digunakan. Solahart Solar Water Heater, pelopor Pemanas Air Tenaga Surya di dunia dan sudah dipakai lebih dari 2 juta orang di Indonesia. Arsimetris Djaja adalah agen resmi dan distributor untuk produk pemanas air Solahart di Banjarmasin, Kalimantan Selatan dan kota sekitarnya.',
					],
					[
						'img_desk' => 'torro.jpg',
						'img_mob' => 'Pipa PPR adalah pipa steril dari bahan plastik Polypropilene yang tahan panas dan anti bocor. Sistem penyambungan Pipa dan Fitting bersenyawa dalam hitungan detik dan sangat kuat. Pipa yang tepat untuk bangunan Anda, sistem air panas dan dingin kualitas terbaik buatan Italia. Arsimetris Djaja adalah agen resmi dan distributor untuk produk pipa PPR Toro di Banjarmasin, Kalimantan Selatan dan kota sekitarnya.',
					],
					[
						'img_desk' => 'grc board.jpg',
						'img_mob' => 'GRC board menyediakan produk papan semen ber-SNI, berbagai aplikasi untuk bangunan rumah, kantor, gedung : GRC board, papan semen, super panel. Dengan banyaknya keunggulan tersebut maka GRC board saat ini lebih disukai sebagai elemen pelengkap desain interior maupun eksterior menggantikan pemakaian gypsum dan triplek. Arsimetris Djaja adalah agen resmi dan distributor untuk produk papan semen GRC Board di Banjarmasin, Kalimantan Selatan dan kota sekitarnya. ',
					],
					[
						'img_desk' => 'friedrich-grohe-logo.jpg',
						'img_mob' => 'GROHE adalah brand terkemuka untuk produk-produk keran mandi dan shower, keran dapur, thermostats dan installations systems di segmen premium. Di GROHE, desain lebih dari sekedar estetika, kualitas merupakan fitur utama dari Grohe dan perpaduan sempurna antara bentuk dan fungsi dalam desain dan bergaransi. Arsimetris Djaja adalah agen resmi untuk produk Grohe di Banjarmasin, Kalimantan Selatan dan kota sekitarnya.',
					],
					[
						'img_desk' => 'asian-paints.png',
						'img_mob' => 'Dapatkan warna lukisan dinding rumah dari perusahaan produsen cat terbesar di India. Solusi interior, eksterior rumah & solusi kedap air yang eksklusif. Asian Paints Indonesia adalah bagian dari Grup Asian Paints, yang memiliki ranking diantara 10 terbaik perusahaan pelapis dekoratif di dunia. Arsimetris Djaja adalah agen resmi dan distributor untuk produk cat Asian Paint di Banjarmasin, Kalimantan Selatan dan kota sekitarnya.',
					],
					[
						'img_desk' => 'sunlouvre.png',
						'img_mob' => 'Kanopi Aluminium Sunlouvre dengan teknologi terbaru menggunakan dua system manual dan system otomatis .Teknologi konstruksi Kanopi Aluminium Sunlouvre menyediakan solusi untuk mengatasi udara pengap dan panas di dalam ruangan berfungsi untuk sirkulasi udara dan pencahayaan. Praktis dan fungsional, SunLouvre adalah alternatif yang sangat baik. Dengan mekanisme yang sederhana dan manual, handal dan fleksibel dalam sistem konstruksi. Doormateto adalah pintu dan jendela kawat nyamuk,  pintu panel berprofil modern & elegan terbuat dari kombinasi alumunium, stainles steel dan kawat baja. Arsimetris Djaja adalah agen resmi dan distributor untuk produk Sun Louvre & Doormateto di Banjarmasin, Kalimantan Selatan dan kota sekitarnya.',
					],
					[
						'img_desk' => 'Elephant-Gypsum.jpg',
						'img_mob' => 'Gypsum Elephant Board merupakan bahan interior bangunan yang terbuat dari batuan gips alami dan dilapisi kertas khusus pada permukaannya. Produk ini termasuk dalam produk ramah lingkungan (Green label Singapore), yang memiliki karakteristik lebih tahan api, lebih tahan panas, lebih meredam suara, ekonomis dan mudah dipasang. Arsimetris Djaja adalah agen resmi untuk produk doormateto di Banjarmasin, Kalimantan Selatan dan kota sekitarnya.',
					],
					[
						'img_desk' => 'download.jpg',
						'img_mob' => 'pintu wina, yaitu pintu garasi dengan motif ukiran atau motif kembang, pintu garasi ini di kerjakan menggunakan mesin laser cutting Pintu besi WiNA ini berbahan dasar plat besi dengan proses tekuk,bending dan finishing powder coating dengan teknologi tinggi didukung dengan peralatan canggih dalam pemenuhan perkembangan tekhnologi perpintuan dewasa ini. Arsimetris Djaja adalah agen resmi untuk produk pintu Wina di Banjarmasin, Kalimantan Selatan dan kota sekitarnya. ',
					],
					[
						'img_desk' => 'Hafele-Logo-sml.jpg',
						'img_mob' => 'Häfele adalah spesialis terkemuka untuk peralatan mebel dan perangkat keras arsitektur, mitra yang berharga bagi pembuat kabinet, serta sistem penguncian elektronik terkemuka di dunia. Arsimetris Djaja adalah agen resmi untuk produk Hafele di Banjarmasin, Kalimantan Selatan dan kota sekitarnya.',
					]
				];
			?>

            <div class="row">
                <?php foreach ($data as $key => $value): ?>
                <div class="col-md-30 pt-3">
                    <div class="box-new">
						<div class="image-dalam">
							<div class="image-dalamm">
								<img class="d-block mx-auto img img-fluid" src="<?php echo Yii::app()->baseUrl.'/images/gallery/'. $value->image; ?>" alt="<?php echo $value->description->title; ?>">
							</div>
						</div>
                        <div class="isi-box">
							<div class="dalamnya text-center">
                                <h2><?php echo $value->description->title ?></h2>
                                <div class="py-1"></div>
								<?php echo $value->description->content ?>
							</div>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
                
            </div>
        </div>
    </div>
</section>

<section class="merk-sec-3">
    <div class="prelative container mx-auto">
        <div class="container2 mx-auto pt-5">
            <div class="row pt-5">
                <div class="col md-60 pt-5">
                    <div class="title mx-auto pt-3">
                        <p class="text-center"><?php echo $this->setting['merk3_sub_title'] ?></p>
                    </div>
                </div>
                <div class="col-md-60">
                    <div class="subtitle pt-3">
                        <?php echo $this->setting['merk3_sub_content'] ?>
                    </div>
                </div>
                <div class="col-md-60">
                    <div class="kalimantan mx-auto text-center pt-5">
                        <img src="<?php echo Yii::app()->baseUrl.'/images/static/'. $this->setting['merk3_picture']; ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style type="text/css">
    section.merk-sec-1 .prelative.container .container2 .row .content h3{
        margin-bottom: 25px;
    }
</style>
