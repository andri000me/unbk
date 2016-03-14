<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Hasil extends MY_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->library('template/template');
	}

	public function index() {
		show_404();
	}

	public function lihat($jenjang='', $jalur='') {
		if($jalur == 'kawasan') {
			// show_404();
		}
		$data = $this->data;
		$data['page_title'] = 'Hasil Seleksi '. strtoupper($jenjang);
		$jalur = strtolower($jalur);
		$jenjang = strtolower($jenjang);
		$this->load->model('hasilmodel');
		$data['jenjang'] = $jenjang;
		$data['jalur'] = $jalur;

		if( (in_array($jenjang, array('sma', 'smp')) && in_array($jalur, array('umum', 'kawasan'))) || $jenjang=='smk' && $jalur=='umum' ){
			$data['sekolah'] = $this->hasilmodel->getIdSekolahAsPilihan($jenjang, $jalur);
			$data['jenjang'] = $jenjang;
			$this->template->display('hasil/hasil', $data);
		}
		else{
			show_404();
		}
	}

	public function hasilseleksi($jenjang='', $jalur='', $by='sekolah', $selected='', $urutan = 0){
		if($jalur == 'kawasan') {
			// show_404();
		}
		$data = $this->data;
		$data['page_title'] = 'Hasil Seleksi '. strtoupper($jenjang);
		$jalur = strtolower($jalur);
		$jenjang = strtolower($jenjang);
		$this->load->model('hasilmodel');
		$data['jenjang'] = $jenjang;
		$data['jalur'] = $jalur;
		$data['by'] = $by;

		if( (in_array($jenjang, array('sma', 'smp')) && in_array($jalur, array('umum', 'kawasan'))) || $jenjang=='smk' && $jalur=='umum' ){
			$data['sekolah'] = $this->hasilmodel->getIdSekolahAsPilihan($jenjang, $jalur);
			$data['waktuRAnking'] = $this->hasilmodel->getWaktuRanking($jenjang, $jalur);
			if($by=='sekolah'){
				$data['selected'] = $this->input->post('sekolah');
				if($data['selected'] == FALSE) $data['selected'] = $selected;
				if(!isset($data['sekolah'][$data['selected']])){
					show_404();
					return;
				}
				$data['message'] = '';

				if(!is_numeric($urutan) || intval($urutan)<0) redirect('hasil/hasilseleksi/'.$jenjang.'/'.$jalur.'/'.$by.'/'.$data['selected']);
				$this->load->library('pagination');
				$config = $this->getPaginationConfig();
				$config['base_url'] = site_url('hasil/hasilseleksi/'.$jenjang.'/'.$jalur.'/'.$by.'/'.$data['selected']);

				$kodeTabel = $this->hasilmodel->getRankUtil($jenjang, $jalur);
				$config['total_rows'] = $this->hasilmodel->getCountHasil($jalur, $jenjang, array($data['selected']), $kodeTabel);
				$data['total'] = $config['total_rows'];
				$config['per_page'] = '10';
				$config['uri_segment'] = 7;
				$config['num_links'] = 4;
				$this->pagination->initialize($config);
				$data['pagelink'] = $this->pagination->create_links();
				$data['urut'] = $urutan;

				// $data['hasil'] = $this->siswamodel->getAllHasilSekolah($jenjang, $data['selected'], $config['per_page'], $urutan);
				$data['hasil'] = $this->hasilmodel->getHasil($jalur, $jenjang, $idSekolah=array($data['selected']), $kodeTabel, FALSE, $config['per_page'], $urutan);
			}
			else if($by=='un'){
				$data['noUn'] = $this->input->post('noUn');
				if($data['noUn'] == FALSE) $data['noUn'] = $selected;
				$this->load->model('siswamodel');
				$data['siswa'] = $this->hasilmodel->getSiswaDiterima($jenjang, $jalur, $data['noUn']);
			}
			else if($by=='bukti'){
				$part = $urutan;
				if($part==0) $part=1;
				$data['part'] = $part;
				$bolehDownload = FALSE;
				$data['noUn'] = $this->input->post('noUn');
				if($data['noUn'] == FALSE) $data['noUn'] = $selected;
				$this->load->model('siswamodel');
				$siswa = $this->hasilmodel->getSiswaDiterima($jenjang, $jalur, $data['noUn'], TRUE);
				$data['pin'] = $this->input->post('pin');
				$data['tglLahir'] = $this->input->post('tglLahir');

				date_default_timezone_set('Asia/Jakarta');
				$currentTime = mktime(date('H'), date('i'), date('s'), date('m'), date('d'), date('Y'));
				$pengumuman_umum = mktime(0, 0, 0, 7, 10, 2015);

				if (($currentTime < $pengumuman_umum) && ($jalur=="umum")){
					show_404();
				}


				$dataSiswa = $this->hasilmodel->getDataSiswa($jenjang, $data['noUn']);
				if(is_array($dataSiswa)){
					if(!empty($dataSiswa['pin'])){
						$data['belumDiketahui']= FALSE;
					}
					else $data['belumDiketahui']= TRUE;
				}
				else{
					show_404();
				}

				$data['errors'] = '';
				if($data['pin']=='' && $data['tglLahir']==''){
					$this->load->vars($data);
					$this->template->display('umum/input_pin', $data);
					return;
				}
				else{
					if($data['belumDiketahui']==TRUE){
						if($siswa['input_tanggal_lahir']==$data['tglLahir']){
							$bolehDownload = TRUE;
						}
						else{
							$data['errors'] = '<div id="errorsBox" class="notices"><div class="red">
								<div class="notice-header fg-color-yellow">Terjadi Kesalahan Validasi</div><div class="notice-text">Tanggal Lahir Anda tidak cocok.</div> </div></div>';
						}
					}
					else{
						if($dataSiswa['pin']==$data['pin']){
							$bolehDownload = TRUE;
						}
						else{
							$data['errors'] = '<div id="errorsBox" class="notices"><div class="red">
								<div class="notice-header fg-color-yellow">Terjadi Kesalahan Validasi</div><div class="notice-text">PIN Anda tidak cocok.</div> </div></div>';
						}
					}
				}

				if($bolehDownload==FALSE) {
					$this->load->vars($data);
					$this->template->display('umum/input_pin', $data);
					return;
				}
				$data['header'] = 'Unduh Data';
				$data['message'] ='Silakan tunggu. Proses unduh bukti sedang berlangsung';
				$this->load->vars($data);
				$this->template->display('umum/noaccess', $data);

				$filename = $siswa['output_uasbn'].'.'.$jalur;

				$downloadFilename = 'bukti_seleksi_'.$jenjang.'_'.$jalur.'_'.$siswa['output_uasbn'];
				$filepath = './bukti/'.$filename.'.png';

				$this->load->helper('textimage');

				$img = imagecreatefromjpeg('./des/diterima_'.$jalur.strtolower($siswa['output_jenis_validasi']).'.jpg');
				$textcolor = imagecolorallocate($img, 0, 0, 0);
				$font = './captchafont/times.ttf';
				$width = 900;
				$height = 1200;

				$judul = 'BUKTI PENERIMAAN '.  strtoupper($jenjang).' JALUR '.($jalur=='kawasan'?'SEKOLAH ':'').strtoupper($jalur);
				$bbox = imagettfbbox(20, 0, $font, $judul);
				$textWidth = $bbox[2] - $bbox[0];
				$x = ($width - $textWidth) / 2;
				drawboldtext($img, 20, 0, $x, 220, $textcolor, $font, $judul);

				$kategori = array('DK' => 'Dalam Kota', 'RD' => 'Rekomendasi Dalam Kota', 'RL' => 'Luar Kota', 'MT' => 'Mutasi', ''=> '-');
				$datas = array(
					'No. UN' => $siswa['output_uasbn'],
					'Nama Siswa' => $siswa['output_nama_siswa'],
					'Jenis Kelamin' => ($siswa['input_jenis_kelamin']=='P'?'Perempuan': 'Laki-laki'),
					'Sekolah Asal' => $siswa['output_asal_sekolah'],
					'Tempat Lahir' => $siswa['input_tempat_lahir'],
					'Tanggal Lahir' => $siswa['input_tanggal_lahir'],
					'Nama Orang Tua' => $siswa['input_nama_ortu'],
					'Alamat' => $siswa['input_alamat_siswa'],
					'Telepon' => $siswa['input_telepon'],
					'Kategori' => $kategori[$siswa['output_jenis_validasi']]
				);
				if ($jenjang == 'smp') {
					$datas = array_merge($datas, array(
						'Nilai US B. Indonesia' => $siswa['output_nilai_bind'],
						'Nilai US Matematika' => $siswa['output_nilai_mat'],
						'Nilai US IPA' => $siswa['output_nilai_ipa'],
						'Nilai US Total' => $siswa['output_nilai_uan']
					));
				} else {
					$datas = array_merge($datas, array(
						'Nilai UN B. Indonesia' => $siswa['output_nilai_bind'],
						'Nilai UN Matematika' => $siswa['output_nilai_mat'],
						'Nilai UN IPA' => $siswa['output_nilai_ipa'],
						'Nilai UN B. Inggris' => $siswa['output_nilai_bing'],
						'Nilai UN Total' => $siswa['output_nilai_uan']
					));
				}
				if ($jalur == 'kawasan') {
					$datas = array_merge($datas, array(
						// 'Nilai TPA Verbal' => $siswa['pemenuhan_nilai_verbal'],
						// 'Nilai TPA Numerikal' => $siswa['pemenuhan_nilai_numerikal'],
						// 'Nilai TPA Figural' => $siswa['pemenuhan_nilai_figural'],
						'Nilai TPA Total' => $siswa['output_nilai_tpa'],
						'Nilai Total' => $siswa['output_nilai_total']
					));
				}

				if(isset($siswa['input_pilihan1']) && !empty($siswa['input_pilihan1'])) $datas['Pilihan 1'] = $data['sekolah'][$siswa['input_pilihan1']];
				if(isset($siswa['input_pilihan2']) && !empty($siswa['input_pilihan2'])) $datas['Pilihan 2'] = $data['sekolah'][$siswa['input_pilihan2']];
				if(isset($siswa['input_pilihan3']) && !empty($siswa['input_pilihan3'])) $datas['Pilihan 3'] = $data['sekolah'][$siswa['input_pilihan3']];
				if(isset($siswa['input_pilihan4']) && !empty($siswa['input_pilihan4'])) $datas['Pilihan 4'] = $data['sekolah'][$siswa['input_pilihan4']];

				$datas['Status Penerimaan'] = (isset($siswa['output_diterima']) && !empty($siswa['output_diterima']) ? 'Diterima di '. $data['sekolah'] [$siswa['output_diterima']] .' (Pilihan '. $siswa['output_pilihan'].')': 'Tidak diterima');

				$line = 280;
				$spacing = 20;
				$tab1 = 70;
				$tab2 = 280;
				$tab3 = 290;
				foreach ($datas as $key => $value) {
					imagettftext($img, 16, 0, $tab1, $line, $textcolor, $font, $key);
					imagettftext($img, 16, 0, $tab2, $line, $textcolor, $font, ':');
					imagettftext($img, 16, 0, $tab3, $line, $textcolor, $font, $value);
					$line += $spacing;
				}

				//datastamp
				require_once APPPATH.'libraries/Encryption.php';
				$encryption = new Encryption();
				$datastamp = $encryption->encode($siswa['input_datastamp']);
				imagettftext($img, 10, 0, 50, 830, $textcolor, $font, $datastamp);

				//qrcode
				require_once APPPATH.'libraries/phpqrcode/qrlib.php';
				$qrFile = './bukti/qr/qr.'.$filename.'.png';
				QRcode::png($datastamp, $qrFile);
				$qrImage = imagecreatefrompng($qrFile);
				list($qrw, $qrh) = getimagesize($qrFile);
				imagecopymerge($img, $qrImage, 705, 700, 0, 0, $qrw, $qrh, 100);

				header('Content-type: image/png');
				header('Content-Disposition: attachment; filename="'.$downloadFilename.'.png"');
				imagepng($img);
				imagepng($img, $filepath);
				imagedestroy($img);
			}
			else if($by=='buktipemenuhan'){
				$part = $urutan;
				if($part==0) $part=1;
				$data['part'] = $part;
				$bolehDownload = FALSE;
				$data['noUn'] = $this->input->post('noUn');
				if($data['noUn'] == FALSE) $data['noUn'] = $selected;
				$this->load->model('siswamodel');
				if ($jalur == 'kawasan') {
					$siswa = $this->hasilmodel->getSiswaDiterimaPemenuhanKawasan($jenjang, $data['noUn'], TRUE);
					if(!isset($siswa)) {
						$data['header'] = 'Anda Tidak Diterima Pemenuhan Pagu kawasan';
						$data['message'] = 'Anda Tidak Diterima Pemenuhan Pagu kawasan';
						$this->template->display_error('umum/noaccess', $data);
						return;
					}
				}
				else {
					// show_404();
					$siswa = $this->hasilmodel->getSiswaDiterimaPemenuhan($jenjang, $data['noUn'], TRUE);
					if(!isset($siswa)) {
						$data['header'] = 'Anda Tidak Diterima Pemenuhan Pagu Umum';
						$data['message'] = 'Anda Tidak Diterima Pemenuhan Pagu Umum';
						$this->template->display_error('umum/noaccess', $data);
						return;
					}
				}

				$data['pin'] = $this->input->post('pin');
				$data['tglLahir'] = $this->input->post('tglLahir');

				$dataSiswa = $this->hasilmodel->getDataSiswa($jenjang, $data['noUn']);
				if(is_array($dataSiswa)){
					if(!empty($dataSiswa['pin'])){
						$data['belumDiketahui']= FALSE;
					}
					else {
						$temp = $this->hasilmodel->getDataSiswaInput($jenjang, $jalur, $data['noUn']);
						$siswa['output_tanggal_lahir'] = $temp['input_tanggal_lahir'];
						$data['belumDiketahui']= TRUE;
					}
				}
				else{
					show_404();
				}

				$data['errors'] = '';
				if($data['pin']=='' && $data['tglLahir']==''){
					$this->load->vars($data);
					$this->template->display('umum/input_pin', $data);
					return;
				}
				else{
					if($data['belumDiketahui']==TRUE){
						if($siswa['output_tanggal_lahir']==$data['tglLahir']){
							$bolehDownload = TRUE;
						}
						else{
							$data['errors'] = '<div id="errorsBox" class="notices"><div class="red">
								<div class="notice-header fg-color-yellow">Terjadi Kesalahan Validasi</div><div class="notice-text">Tanggal Lahir Anda tidak cocok.</div> </div></div>';
						}
					}
					else{
						if($dataSiswa['pin']==$data['pin']){
							$bolehDownload = TRUE;
						}
						else{
							$data['errors'] = '<div id="errorsBox" class="notices"><div class="red">
								<div class="notice-header fg-color-yellow">Terjadi Kesalahan Validasi</div><div class="notice-text">PIN Anda tidak cocok.</div> </div></div>';
						}
					}
				}

				if($bolehDownload==FALSE) {
					$this->load->vars($data);
					$this->template->display('umum/input_pin', $data);
					return;
				}
				$data['header'] = 'Unduh Data';
				$data['message'] ='Silakan tunggu. Proses unduh bukti sedang berlangsung';
				$this->load->vars($data);
				$this->template->display('umum/noaccess', $data);
				$filename = $siswa['output_uasbn'].'.'.$jalur;

				$downloadFilename = 'bukti_pemenuhan_'.$jenjang.'_'.$jalur.'_'.$siswa['output_uasbn'];
				$filepath = './bukti/'.$filename.'.png';

				$this->load->helper('textimage');

				if ($jalur == 'kawasan') {
					$img = imagecreatefromjpeg('./des/buktipemenuhankawasan.jpg');
				} else {
					$img = imagecreatefromjpeg('./des/buktipemenuhan'.($part==2?'2':'').'.jpg');
				}
				$textcolor = imagecolorallocate($img, 0, 0, 0);
				$font = './captchafont/times.ttf';
				$width = 900;
				$height = 1200;

				$judul = 'BUKTI PENERIMAAN PEMENUHAN PAGU ' . strtoupper($jenjang).' JALUR '.strtoupper($jalur);
				$bbox = imagettfbbox(20, 0, $font, $judul);
				$textWidth = $bbox[2] - $bbox[0];
				$x = ($width - $textWidth) / 2;
				drawboldtext($img, 20, 0, $x, 220, $textcolor, $font, $judul);

				$kategori = array('DK' => 'Dalam Kota', 'RD' => 'Rekomendasi Dalam Kota', 'RL' => 'Luar Kota', 'MT' => 'Mutasi', ''=> '-');
				$datas = array(
					'No. UN' => $siswa['output_uasbn'],
					'Nama Siswa' => $siswa['output_nama_siswa'],
					// 'Jenis Kelamin' => ($siswa['input_jenis_kelamin']=='P'?'Perempuan': 'Laki-laki'),
					'Sekolah Asal' => $siswa['output_asal_sekolah'],
					// 'Tempat Lahir' => $siswa['input_tempat_lahir'],
					// 'Tanggal Lahir' => $siswa['input_tanggal_lahir'],
					// 'Nama Orang Tua' => $siswa['input_nama_ortu'],
					// 'Alamat' => $siswa['input_alamat_siswa'],
					// 'Telepon' => $siswa['input_telepon'],
					'Kategori' => $kategori[$siswa['output_jenis_validasi']]
				);
				if ($jenjang == 'smp') {
					$datas = array_merge($datas, array(
						'Nilai US B. Indonesia' => $siswa['output_nilai_bind'],
						'Nilai US Matematika' => $siswa['output_nilai_mat'],
						'Nilai US IPA' => $siswa['output_nilai_ipa'],
						'Nilai US Total' => $siswa['output_nilai_uan']
					));
				} else {
					$datas = array_merge($datas, array(
						'Nilai UN B. Indonesia' => $siswa['output_nilai_bind'],
						'Nilai UN Matematika' => $siswa['output_nilai_mat'],
						'Nilai UN IPA' => $siswa['output_nilai_ipa'],
						'Nilai UN B. Inggris' => $siswa['output_nilai_bing'],
						'Nilai UN Total' => $siswa['output_nilai_uan']
					));
				}
				if ($jalur == 'kawasan') {
					$datas = array_merge($datas, array(
						// 'Nilai TPA Verbal' => $siswa['pemenuhan_nilai_verbal'],
						// 'Nilai TPA Numerikal' => $siswa['pemenuhan_nilai_numerikal'],
						// 'Nilai TPA Figural' => $siswa['pemenuhan_nilai_figural'],
						'Nilai TPA Total' => $siswa['output_nilai_tpa'],
						'Nilai Total' => $siswa['output_nilai_total']
					));
				}

				// if(isset($siswa['input_pilihan1']) && !empty($siswa['input_pilihan1'])) $datas['Pilihan 1'] = $data['sekolah'][$siswa['input_pilihan1']];
				// if(isset($siswa['input_pilihan2']) && !empty($siswa['input_pilihan2'])) $datas['Pilihan 2'] = $data['sekolah'][$siswa['input_pilihan2']];
				// if(isset($siswa['input_pilihan3']) && !empty($siswa['input_pilihan3'])) $datas['Pilihan 3'] = $data['sekolah'][$siswa['input_pilihan3']];
				// if(isset($siswa['input_pilihan4']) && !empty($siswa['input_pilihan4'])) $datas['Pilihan 4'] = $data['sekolah'][$siswa['input_pilihan4']];

				if ($siswa['output_asal']) {
					$diterimalama = $data['sekolah'][$siswa['output_asal']];
				} else {
					$diterimalama = 'Tidak Diterima';
				}

				if ($siswa['output_pindah']) {
					$diterimabaru = $data['sekolah'][$siswa['output_pindah']];
				} else {
					$diterimabaru = 'Tidak Diterima';
				}

				$line = 280;
				$spacing = 20;
				$tab1 = 70;
				$tab2 = 280;
				$tab3 = 290;
				foreach ($datas as $key => $value) {
					imagettftext($img, 16, 0, $tab1, $line, $textcolor, $font, $key);
					imagettftext($img, 16, 0, $tab2, $line, $textcolor, $font, ':');
					imagettftext($img, 16, 0, $tab3, $line, $textcolor, $font, $value);
					$line += $spacing;
				}
				// $line +=20;

				imagettftext($img, 18, 0, $tab1, $line, $textcolor, $font, 'Diterima Lama');
				imagettftext($img, 18, 0, $tab2, $line, $textcolor, $font, ':');
				imagettftext($img, 18, 0, $tab3, $line, $textcolor, $font, $diterimalama);
				$line += $spacing;
				imagettftext($img, 18, 0, $tab1, $line, $textcolor, $font, 'Diterima Baru');
				imagettftext($img, 18, 0, $tab2, $line, $textcolor, $font, ':');
				imagettftext($img, 18, 0, $tab3, $line, $textcolor, $font, $diterimabaru);
				$line += $spacing;

				//datastamp
				require_once APPPATH.'libraries/Encryption.php';
				$encryption = new Encryption();
				$data_enc = $siswa['output_uasbn'].'|'.($siswa['output_asal']==''?'Tidak Diterima':$siswa['output_asal']).'|'.$siswa['output_pindah'].'|'.$siswa['output_timestamp'];
				$datastamp = $encryption->encode($data_enc);
				imagettftext($img, 10, 0, 50, 830, $textcolor, $font, $datastamp);

				//qrcode
				require_once APPPATH.'libraries/phpqrcode/qrlib.php';
				$qrFile = './bukti/qr/qr.'.$filename.'.png';
				QRcode::png($datastamp, $qrFile);
				$qrImage = imagecreatefrompng($qrFile);
				list($qrw, $qrh) = getimagesize($qrFile);
				imagecopymerge($img, $qrImage, 705, 700, 0, 0, $qrw, $qrh, 100);

				header('Content-type: image/png');
				header('Content-Disposition: attachment; filename="'.$downloadFilename.'.png"');
				imagepng($img);
				imagepng($img, $filepath);
				imagedestroy($img);
			}
			else show_404 ();
		}
		else show_404();
		$this->load->vars($data);
		$this->template->display('hasil/hasilby'.$by, $data);
	}


	private function getPaginationConfig(){
		$pagination['full_tag_open'] = '<div class="col-md-12 text-center"><ul class="pagination">';
		$pagination['full_tag_close'] = '</ul></div><!--pagination-->';

		$pagination['first_link'] = '&laquo; First';
		$pagination['first_tag_open'] = '<li class="prev page">';
		$pagination['first_tag_close'] = '</li>';

		$pagination['last_link'] = 'Last &raquo;';
		$pagination['last_tag_open'] = '<li class="next page">';
		$pagination['last_tag_close'] = '</li>';

		$pagination['next_link'] = 'Next &rarr;';
		$pagination['next_tag_open'] = '<li class="next page">';
		$pagination['next_tag_close'] = '</li>';

		$pagination['prev_link'] = '&larr; Previous';
		$pagination['prev_tag_open'] = '<li class="prev page">';
		$pagination['prev_tag_close'] = '</li>';

		$pagination['cur_tag_open'] = '<li class="active"><a href="">';
		$pagination['cur_tag_close'] = '</a></li>';

		$pagination['num_tag_open'] = '<li class="page">';
		$pagination['num_tag_close'] = '</li>';
		return $pagination;
	}

	public function pemenuhanpagu($jalur='', $jenjang='', $part=1) {
		// if ($jalur == 'umum') show_404();
		if ($part != 1) show_404();
		if ((in_array($jenjang, array('sma', 'smp')) && in_array($jalur, array('umum', 'kawasan'))) || $jenjang=='smk' && $jalur=='umum') {
			$data = $this->data;
			$jalur = strtolower($jalur);
			$jenjang = strtolower($jenjang);
			// $data['header'] ='Menu Tidak Bisa Diakses';
			// $data['message'] ='Untuk sementara menu ini tidak bisa diakses. Silakan menunggu beberapa saat lagi.';
			// $this->load->vars($data);
			// $this->load->view('umum/noaccess');
			// return;

			$data['page_title'] = 'Pemenuhan Pagu';
			$kodesekolah = $this->input->post('sekolah');
			$data['kodesekolah'] = $kodesekolah;
			$this->load->model('hasilmodel');
			$data['sekolah'] = $this->hasilmodel->getIdSekolahAsPilihan($jenjang, $jalur);
			$data['jalur'] = $jalur;
			$data['jenjang'] = $jenjang;
			$data['part'] = $part;
			$data['pemenuhan'] = $this->hasilmodel->getDataPemenuhan($jenjang, $jalur, array($kodesekolah), TRUE);
			$this->load->vars($data);
			$this->template->display('pemenuhanpagu/hasil', $data);
		} else {
			show_404();
		}
	}

	public function getpemenuhanbukti($jenjang="", $jalur=""){
		$no_uasbn = $this->input->post('noUn');

		redirect('hasil/hasilseleksi/'.$jenjang.'/'.$jalur.'/buktipemenuhan/'.$no_uasbn);

		// /hasil/hasilseleksi/sma/kawasan/buktipemenuhan/21405011090889
	}
}
?>