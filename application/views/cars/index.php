<section id="breadcrumb">
    <div class="container">
        <div class="row">
            <nav aria-label="breadcrumb">

            </nav>
        </div>
    </div>
</section>

<!-- start content -->

<?php

function hitungRataRata($nilai)
{
    if (empty($nilai)) {
        return 0; 
    }
    $jumlahNilai = count($nilai);
    $total = array_sum($nilai);
    $rataRata = $total / $jumlahNilai;

    return $rataRata;
}
function maxId($data)
{
    foreach ($data as $item) {
        $maxId = PHP_INT_MIN;
        $id = intval($item->id);
        if ($id > $maxId) {
            $maxId = $id;
        }
    }
    
    return $maxId;
}

function gettAllDataRating($mobil, $nilai)
{
    $ratingById = array();
    for ($i = 1; $i <= maxId($mobil); $i++) {
        $ratingById[$i] = array();
    }
    foreach ($nilai as $item) {
        $id = intval($item["id"]);
        $ratingById[$id][] = $item["rating"];
    }
    return $ratingById;
}

function averagerating($idmobil, $datarating)
{
    $allRating = $datarating[$idmobil];
    if (count($allRating) == 0) {
        $default = 0;
        return [$default,0];
    } else {
        $banyakReview = count($datarating[$idmobil]);
        $Ratingsementara = array();
        foreach ($allRating as $review) {
            array_push($Ratingsementara, $review);
        }
        $rataRata = hitungRataRata($Ratingsementara);
        return [$rataRata,$banyakReview];
    }
}

$data = gettAllDataRating($cars, $ratings);



?>
<div class="container">
    <div class="section-title mb-4 mb-xl-0" data-aos="fade-left" data-aos-duration="1000">
        <h2>Cars</h2>
    </div>
    <section id="cars">
        <div class="filter-wrap mt-4 d-flex flex-lg-row flex-column justify-content-lg-center row-gap-2 column-gap-3 mb-4" data-aos="zoom-in" data-aos-duration="1000">
            <span class="filter-btn filter-active" data-filter="*">All</span>
            
            <!-- looping data mobil -->
            <!-- pake model database data tipe disini -->
            <?php

foreach ($tipe as $t) { ?>
                <span class="filter-btn" data-filter="filter-<?= $t->tipe; ?>">
                    <?= $t->tipe; ?>
                </span>
                <?php } 
                ?>
        </div>
        
        <!-- pemanggilan data mobil pakai model disini -->
        
        <div class="row cars-container" data-aos="zoom-in" data-aos-duration="1000">
            <?php foreach ($cars as $r) { 
                $dataReview = averagerating($r->id, $data);
                ?>
                
                <div class="col-xl-3 col-lg-4 col-md-6 col-12 cars-item filter-<?= $r->tipe; ?> align-items-stretch mt-4">
                    <div class="cars-wrap">
                        <img src="<?= base_url('assets/img/star/star' . round($dataReview[0]) .'.png') ?>" alt="" style="width: 100px;" class="img-fluid rounded mx-auto d-block mb-3">
                        <div class="cars-img">
                            <img src="<?= base_url('assets/img/cars/') . $r->gambar; ?>" alt="" class="img-fluid">
                            
                        </div>
                        <h6 class="text-center ">rating  <?= round(($dataReview[0]),1);?></h6>
                        <p class="fst-italic fs-7 text-center"><?= $dataReview[1] ?> orang telah mereview</p>
                        <hr>
                        <div class="cars-info">
                            <h4>
                                <?= $r->nama; ?>
                            </h4>
                            <p>Transmisi :
                                <?= $r->transmisi; ?>
                            </p>
                            <p>Tahun :
                                <?= $r->tahun; ?>
                            </p>
                            <p>Kursi :
                                <?= $r->kursi; ?> Seater
                            </p>
                            <p>Warna :
                                <?= $r->warna; ?>
                            </p>
                            <hr>
                            <p class="fw-bold">Harga : Rp
                                <?= number_format($r->harga, '0', '.'); ?>
                            </p>
                            <br>
                            <?php $mobilModal = $r->nama;
                            $id_modal = $r->id;
                            ?>


                            <div class="d-grid gap-2 col mx-auto">
                                <button class="btn-hero align-center" data-bs-toggle="modal" data-bs-target="#pesan">Pesan</button>
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