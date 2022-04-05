<?php
class Contoh1 extends CI_Controller {
    public function index() {
        // echo "<h1>Perkenalkan</h1>";
        // echo "<p>Nama saya Chivas Dominiques, Saya tinggal di daerah Bekasi</p>";

        $this->load->view("welcome_message2");
    }
}

?>