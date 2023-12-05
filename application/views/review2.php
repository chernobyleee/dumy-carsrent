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
            <tbody>
                    <?php
                    $a = 1;
                    foreach ($review as $b) { ?>
                        <tr>
                            <th scope="row">
                                <?= $a++; ?>
                            </th>
                            <td>
                                <?= $b['judul_buku']; ?>
                            </td>
                            <td>
                                <?= $b['pengarang']; ?>
                            </td>
                            <td>
                                <?= $b['penerbit']; ?>
                            </td>
                            <td>
                                <?= $b['tahun_terbit']; ?>
                            </td>
                            <td>
                                <?= $b['isbn']; ?>
                            </td>
                            <td>
                                <?= $b['stok']; ?>
                            </td>
                            <td>
                                <?= $b['dipinjam']; ?>
                            </td>
                            <td>
                                <?= $b['dibooking']; ?>
                            </td>
                            <td>
                                <picture>
                                    <source srcset="" type="image/svg+xml">
                                    <img src="<?=
                                        base_url('assets/img/upload/') . $b['image']; ?>" class="img-fluid 
img-thumbnail" alt="...">
                                </picture>
                            </td>
                            <td>
                                <a href="<?=
                                    base_url('buku/ubahBuku/') . $b['id']; ?>" class="badge badge-info"><i
                                        class="fas fa-edit"></i> Ubah</a>
                                <a href="<?=
                                    base_url('buku/hapusbuku/') . $b['id']; ?>" onclick="return
confirm('Kamu yakin akan menghapus <?= $judul . '
' . $b['judul_buku']; ?> ?');" class="badge badge-danger"><i class="fas 
fa-trash"></i> Hapus</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
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