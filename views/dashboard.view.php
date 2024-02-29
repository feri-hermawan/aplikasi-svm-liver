<!-- Header -->
<?php require __DIR__ . "/partials/header.view.php" ?>

<!-- Kontent -->
<div class="content">
    <h2 class="ms-3 mb-3">DASHBOARD</h2>
    <div class="row">
        <!-- DATA TRAINING CARD -->
        <div class="col-xl-3 col-md-4 ms-3 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Data Training</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $data['totalDataTraining'] ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fa-solid fa-brain fs-2 text-gray-300 text-primary"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- DATA TESING CARD -->
        <div class="col-xl-3 col-md-4 ms-3 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Data Testing</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $data['totalDataTesting'] ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fa-solid fa-microscope fs-2 text-gray-300 text-success"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- AKURASI SVM CARD -->
        <div class="col-xl-3 col-md-4 ms-3 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                Akurasi SVM
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                        <?= $data['akurasi'] ?>%</div>
                                </div>
                                <div class="col">
                                    <div class="progress progress-sm border border-info mr-2">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: <?= $data['akurasi'] ?>%" aria-valuenow="{{ $data['akurasi']['persentase'] }}" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fa-solid fa-bullseye fs-2 text-gray-300 text-info"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Modal Testing Page --}}
<div class="modal fade" id="inputDataTesting" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="inputDataTestingLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="inputDataTestingLabel">Input Data Testing</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="formFile" class="form-label">Default file input example</label>
                    <input class="form-control" type="file" id="formFile">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
            </div>
        </div>
    </div>
</div>
<!-- {{-- End Modal Testing Page --}} -->

<!-- Footer -->
<?php require __DIR__ . "/partials/footer.view.php" ?>