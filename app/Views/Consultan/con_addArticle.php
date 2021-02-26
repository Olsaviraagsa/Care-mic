<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">
        Add an Article
    </h1>


    <div class="row">
        <div class="col-lg-10">
            <div class="form-group row">
                <div class="col-sm-9 col-xl-10">
                    <?= Flasher::Flash() ?>
                </div>
            </div>

            <form method="POST" action="<?= BASE_URL ?>/Artikel/addNewArticle">
                <div class="form-group row">
                    <label for="title" class="col-sm-3 sol-xl-2 col-form-label">Title</label>
                    <div class="col-sm-9 col-xl-10">
                        <input type="text" name="title" id="title" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="content" class="col-sm-3 sol-xl-2 col-form-label">Content</label>
                    <div class="col-sm-9 col-xl-10">
                        <textarea name="content" id="content" class="form-control"></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-secondary" href="index.php">Kembali</a>
            </form>

        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->