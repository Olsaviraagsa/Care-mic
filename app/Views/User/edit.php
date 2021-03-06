<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">
        Edit Profile
    </h1>

    <div class="row">
        <div class="col-lg-8">

            <!-- FORM OPEN MULTIPART untuk mengupload file -->
            <?= Flasher::Flash() ?>
            <form action="<?= BASE_URL ?>/User/getEdit" method="POST" enctype="multipart/form-data">
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="email" placeholder="Email" name="email" value="" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Full name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" placeholder="Full name" name="name" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-2">Picture</div>
                    <div class="col-10">
                        <div class="row">
                            <div class="col-sm-3">
                                <img src="<?= BASE_URL; ?>/img/profile/<?= $_SESSION["userdata"]["image"] ?>" class="img-thumbnail">
                            </div>
                            <div class="col-sm-9">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="image" name="image">
                                    <label class="custom-file-label" for="image">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group row justify-content-end">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </div>
                </div>
            </form>



        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->