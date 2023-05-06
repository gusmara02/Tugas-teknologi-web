<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title; ?></title>
</head>
<body>
    <h1>Daftar Anggota Kelompok</h1>
    <hr>
    <?php
        defined('BASEPATH') OR exit('No direct script access allowed');
        $this->load->helper('url');
    ?>
    <a href="<?php echo base_url(); ?>index.php/home/anggota1">Anggota 1</a>
    <br>
    <a href="<?php echo base_url(); ?>index.php/home/anggota2">Anggota 2</a>
    <br>
    <a href="<?php echo base_url(); ?>index.php/home/anggota3">Anggota 3</a>
</body>
</html>
