<!-- Header -->
<?php use \SVMLiver\App\Utils; ?>
<?php require __DIR__ . "/partials/header.view.php" ?>

<div class="content">
    <h2 class="ms-3 mb-3">DATA TESTING</h2>
    <div class="row">
        <div class="ms-3 mb-3">
            <div class="d-flex">
                <div class="mb-3">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#inputDataTesting"><i class="fa-solid fa-upload"></i>&nbsp;
                        Input Data
                    </button>
                </div>
                <form action="/prediksi-data-testing" method="post">
                    <div class="mx-2">
                        <button type="submit" class="btn btn-success"><i class="fa-solid fa-microscope"></i>&nbsp;Prediksi
                        </button>
                    </div>
                </form>
                <div class="mx-2">
                    <button type="submit" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalHapusDataTesting"><i class="fa-solid fa-trash"></i>&nbsp;Hapus Data</button>
                </div>
            </div>

            <div class="card-body shadow-lg card-table ">
                <div class="table-responsive  p-2">
                    <table class="table table-bordered border-top border-2 border-dark display" cellspacing="0" id="myTableTesting">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Umur</th>
                                <th>TB</th>
                                <th>DB</th>
                                <th>Alkaline</th>
                                <th>Aspirate</th>
                                <th>TP</th>
                                <th>ALB</th>
                                <th>A/G</th>
                                <th>Prediksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php if(Utils::DataExists("Testing")): ?>                        
                            <?php foreach($dataTesting as $data) : ?>
                                <tr>
                                    <td><?= $data['nama'] ?></td>
                                    <td><?= $data['x1'] ?></td>
                                    <td><?= $data['x2'] ?></td>
                                    <td><?= $data['x3'] ?></td>
                                    <td><?= $data['x4'] ?></td>
                                    <td><?= $data['x5'] ?></td>
                                    <td><?= $data['x6'] ?></td>
                                    <td><?= $data['x7'] ?></td>
                                    <td><?= $data['x8'] ?></td>
                                    <td><?= $data['prediksi'] ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- {{-- Modal Testing Page --}} -->
<div class="modal fade" id="inputDataTesting" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="inputDataTestingLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="inputDataTestingLabel">Input Data Testing</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/upload-data-testing" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Default file input example</label>
                        <input class="form-control" type="file" name="datatesting" id="formFile">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Import</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- {{-- End Modal Testing Page --}} -->

<!-- Modal Hapus Data-->
<div class="modal fade" id="modalHapusDataTesting" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel"><b>Hapus Data Testing</b></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Apakah anda yakin ingin menghapus data testing ini ?</p>
            </div>
            <form action="/delete-data/testing" method="post">
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- {{-- End modal hapus data --}} -->


<!-- Footer -->
<?php require __DIR__ . "/partials/footer.view.php" ?>