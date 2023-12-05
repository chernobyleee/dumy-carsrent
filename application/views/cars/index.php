<?php
// connect ke database sementara
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_carsresent";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>


<section id="breadcrumb">
    <div class="container">
        <div class="row">
            <nav aria-label="breadcrumb">

            </nav>
        </div>
    </div>
</section>

<!-- start content -->

<section id="cars">
    <div class="container">
        <div class="section-title mb-4 mb-xl-0" data-aos="fade-left" data-aos-duration="1000">
            <h2>Cars</h2>
        </div>
        <div class="filter-wrap mt-4 d-flex flex-lg-row flex-column justify-content-lg-center row-gap-2 column-gap-3 mb-4" data-aos="zoom-in" data-aos-duration="1000">
            <span class="filter-btn filter-active" data-filter="*">All</span>

            <!-- looping data mobil -->
            <!-- pake model database data tipe disini -->
            <?php
            $a = 1;

            $tipe = ["tipe1", "tipe2", "tipe3", "tipe4", "tipe5",];

            foreach ($tipe as $t) { ?>
                <span class="filter-btn" data-filter="filter-<?= $t; ?>">
                    <?= $t; ?>
                </span>
            <?php } ?>
        </div>

        <!-- pemanggilan data mobil pakai model disini -->

        <div class="row cars-container" data-aos="zoom-in" data-aos-duration="1000">
            <?php
            $a = 1;

            $sql = "SELECT tipe.nama as 'tipe', mobil.id as 'id', mobil.nama, transmisi, tahun, warna, kursi, harga, gambar FROM mobil
                    INNER Join tipe on tipe.id_tipe = mobil.id_tipe";
            $mobil = $conn->query($sql);

            foreach ($mobil as $r) { ?>

                <div class="col-xl-3 col-lg-4 col-md-6 col-12 cars-item filter-<?= $r['tipe']; ?> d-flex align-items-stretch mt-4">
                    <div class="cars-wrap">
                        <div class="cars-img">
                            <img src="<?= base_url('assets/img/cars/') . $r['gambar']; ?>" alt="" class="img-fluid">

                        </div>
                        <hr>
                        <div class="cars-info">
                            <h4>
                                <?= $r['nama']; ?>
                            </h4>
                            <p>Transmisi :
                                <?= $r['transmisi']; ?>
                            </p>
                            <p>Tahun :
                                <?= $r['tahun']; ?>
                            </p>
                            <p>Kursi :
                                <?= $r['kursi']; ?> Seater
                            </p>
                            <p>Warna :
                                <?= $r['warna']; ?>
                            </p>
                            <hr>
                            <p class="fw-bold">Harga : Rp
                                <?= number_format($r['harga'], '0', '.'); ?>
                            </p>
                            <br>
                            <?php $mobilModal = $r['nama'];
                            $id_modal = $r['id'];
                            ?>


                            <div class="d-grid gap-2 col mx-auto">
                                <button class="btn-hero align-center" data-bs-toggle="modal" data-bs-target="#pesan">Pesan sekarang</button>
                                <button type="button" class="btn-hero" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="prepareReviewForm('<?= $mobilModal; ?>','<?= $id_modal; ?>')">
                                    Review
                                </button>
                            </div>

                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>


        <!-- beres pemanggilan -->

    </div>
</section>



