<?php
include 'header.php';
?>
<section id="breadcrumb">
    <div class="container">
        <div class="row">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item btn"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Review</li>
                </ol>
                <h3>Review</h3>
            </nav>
        </div>
    </div>
</section>
<div class="col-lg-7 col-12 mt-3 d-flex align-items-stretch">
    <div class="contact-box w-100">
        <div class="form">
            <div class="row row-gap-3">
                <div class="col-12">                
                    <label class="form-label">Judul :</label>
                    <input type="text" class="form-control">
                </div>

                <div class="col-12">
                    <label class="form-label">Jenis Mobil :</label>
                    <select name="id_jenis" class="form-control form-control-user">
                        <option value="">Pilih Jenis</option>
                            <?php foreach ($id_brand as $brand) { ?>
                                <option value="<?= $brand['id_brand']; ?>"><?= $brand['nama']; ?></option>                               
                            <?php } ?>
                        </select>
                </div>
                <div class="col-12">
                    <label class="form-label">Model Mobil :</label>
                    <select name="id_jenis" class="form-control form-control-user">
                        <option value="">Pilih Model</option>
                            <?php foreach ($id as $model) { ?>
                                <option value="<?= $model['id']; ?>"><?= $brand['nama']; ?></option>                               
                            <?php } ?>
                        </select>
                </div>
                <!-- 
                    <div class="col-12">
                    <label class="form-label">Jenis Mobil :</label><br>
                    <select name="color" id="color">
                        <option value=""> Pilih Jenis </option>
                        <option value="suv">SUV</option>
                        <option value="mpv">MPV</option>
                        <option value="hatchback">Hatchback</option>
                        <option value="sedan">Sedan</option>
                        <option value="pickup">Pickup</option>
                    </select>
                </div>
                            -->                   
                
                
                <div class="col-12">
                    <label class="form-label">Review :</label>
                    <textarea rows="5" class="form-control"></textarea>
                </div>
                <div class="col-12 d-flex justify-content-center">
                    <button type="submit" class="form-control" id="form-submit">Kirim Review</button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</section>
<?php
include 'footer.php';
?>