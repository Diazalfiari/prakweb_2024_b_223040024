<?php 

class About {
    public function index($nama = 'yuli', $pekerjaan = 'guru') {
        echo "Hallo, nama saya  $nama, saya adalah seorang $pekerjaan";

    }
    public function page() {
        echo 'About/page';
    }
}