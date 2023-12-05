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
<div class="container">
    <div class="section-title mb-4 mb-xl-0" data-aos="fade-left" data-aos-duration="1000">
        <h2>Review</h2>
    </div>
    <div class="section-title mb-4 mb-xl-0" data-aos="fade-left" data-aos-duration="1000">
        <div class="row row-gap-3">
            <tbody>
                <section id="cars">
                    <div class="filter-wrap mt-4 d-flex flex-lg-row flex-column justify-content-lg-center row-gap-2 column-gap-3 mb-4"
                        data-aos="zoom-in" data-aos-duration="1000">
                        <span class="filter-btn filter-active" data-filter="*">All</span>
                        
                        <?php

                        $sql = "SELECT nama as 'tipe' FROM tipe";

                        $tipe = $conn->query($sql);
                        foreach ($tipe as $t) { ?>
                            <span class="filter-btn" data-filter="filter-<?= $t['tipe']; ?>">
                                <?= $t['tipe']; ?>
                            </span>
                        <?php } ?>
                    </div>
                    <div class="row cars-container" data-aos="zoom-in" data-aos-duration="1000">
                        <?php
                        $sql = "SELECT tipe.nama as 'tipe', user.username as 'username', mobil.nama as 'nama', mobil.gambar as 'gambar', massage , rating
                    FROM review
                    INNER join user on user.id_user = review.id_user
                    INNER Join mobil on mobil.id = review.id
                    INNER Join tipe on tipe.id_tipe = mobil.id_tipe";

                        $review = $conn->query($sql);
                        $a = 1;
                        foreach ($review as $r) { ?>
                        
                            <div class="col-xl-4 col-lg-4 col-md-4 col-4 mt-4 cars-item filter-<?= $r['tipe']; ?> min-height: 540px">
                                <div class="card mb-3" style="max-width: 540px;">
                                    <div class="d-flex align-items-center mt-4">
                                        <img src="<?= base_url('assets/img/profil/defaults.png') ?>" class="img-fluid rounded-start ms-4 pt-2" style="width: 40px;">
                                        <div>
                                            <h5 class="card-title  pt-2">
                                                <?= $r['username']; ?>
                                            </h5>
                                            <div class="position-relative">
                                                <img src="<?= base_url('assets/img/star/star'). $r['rating']; ?>.png" class="img-fluid rounded-start position-absolute top-0 start-0" style="width: 50px;">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class=" col-12 mt-3">
                                            <div class="card-body">
                                                <i>
                                                    <p class="card-text mb-3 fs-6">
                                                        "
                                                        <?= $r['massage']; ?>"
                                                    </p>
                                                </i>
                                                <p class="card-text"><small class="text-muted">
                                                        <?= $r['nama']; ?>
                                                    </small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php } ?>
            </tbody>
        </div>

    </div>
</div>
</div>
</div>
</section>
