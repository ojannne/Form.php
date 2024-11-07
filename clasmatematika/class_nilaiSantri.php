<?php 
    class NilaiSantri{
        public $nama;
        public $nilai;
        public $sekolah = 'PeTIK Jombang';

        public function getHasil(){
            if($this->nilai > 70) return 'Lulus';
            else return 'Tidak Lulus';
        }
    }
?>