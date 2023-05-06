<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title; ?></title>
</head>
<body>
    <h1>Anggota 1</h1>
    <hr>
    <?php
        defined('BASEPATH') OR exit('No direct script access allowed');
        $this->load->helper('url');
        $previous_url = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : base_url();
    ?>
    <a >Nama : Gusmara</a>
    <br>
    <a >NIM : 3411191012</a>
    <br>
    <a >Alamat : batujajar</a>
    <br>
    <?php echo anchor($previous_url, 'Kembali'); ?>
</body>
</html>
