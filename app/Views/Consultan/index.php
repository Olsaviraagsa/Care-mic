<!-- begin page content -->
<div class="container-fluid">

    <!-- page heading -->
    <h1 class="h3 mb-4 text-gray-800">
        My Profile
    </h1>

    <div class="row">
        <div class="col-lg-8">
            <!-- NANTI DIKASIH PEMBERITAHUAN PERUBAHAN DATA PROFIL -->
        </div>
    </div>

    <div class="card mb-3 col-lg-8">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="<?= BASE_URL; ?>/img/profile/<?= $_SESSION["userdata"]["image"] ?>" class="card-img" alt="">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?= $_SESSION["userdata"]["name"] ?></h5>
                    <p class="card-text"><?= $_SESSION["userdata"]["email"] ?></p>
                    <!-- <p class="card-text"><?= $_SESSION["userdata"]["phone"] ?></p>
                    <p class="card-text"><?= $_SESSION["userdata"]["jam_kerja"] ?></p>
                    <p class="card-text"><small class="text-muted"><?= $_SESSION["userdata"]["notes"] ?></small></p> -->
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->