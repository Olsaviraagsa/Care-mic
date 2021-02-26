        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Single Forum</h1>

          <div class="row">

            <div class="col-lg-12">

              <!-- Basic Card Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary"><?= $data["judul"] ?></h6>
                </div>
                <div class="card-body">
                  <div class="blog-meta clearfix">
                    <small><?= $data["tanggal"] ?></small>
                  </div>
                  <p><?= $data["isi"] ?></p>

                </div>
              </div>
            </div>
          </div>

          <div class="row">

            <div class="col-lg-12">

              <!-- Basic Card Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h5 class="m-0 font-weight-bold text-primary">Comment Form</h5>
                </div>
                <div class="card-body">
                  <form class="sidebar-login">
                    <textarea class="form-control" rows="3" id="textArea" placeholder="Your message"></textarea><br>
                    <button type="button" class="btn btn-raised btn-info gr">Send Comment</button>
                  </form>
                </div>
              </div>
            </div>
          </div>


        </div>
        <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->