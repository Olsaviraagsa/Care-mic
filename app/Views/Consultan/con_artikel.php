<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Articles</h1>
  <?= Flasher::Flash() ?>

  <?php if (isset($data)) : ?>
    <?php foreach ($data as $article) : ?>
      <div class="row">

        <div class="col-lg-12">

          <!-- Basic Card Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"><?= $article["judul"] ?>
                <a href="<?= BASE_URL; ?>/artikel/editArticle/<?= $article['id']; ?>" class="badge badge-success float-right ml-2 tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?= $article['id']; ?>">Edit</a>
                <a href="<?= BASE_URL; ?>/artikel/deleteArticle/<?= $article['id']; ?>" class="badge badge-danger float-right ml-2" onclick="return confirm('Are you sure you want to delete this article?');">Delete</a>
              </h6>
            </div>
            <div class="card-body">
              <div class="row">

                <div class="col-sm-8">
                  <p><?= substr($article["isi"], 0, 500) ?></p>
                  <a href="<?= BASE_URL; ?>/consultan/con_singleArticle/<?= $article["id"] ?>"> readmore&raquo; </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  <?php
    endforeach;
  endif;
  ?>

  <!-- Modal -->
  <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="judulModal">Edit Article</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">
          <form action="<?= BASE_URL; ?>/Artikel/" method="post">
            <input type="hidden" name="id" id="id">
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
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
        </form>
      </div>
    </div>
  </div>

  <!-- <div class="row">

    <div class="col-lg-12">

      
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Asal Usul Virus Corona</h6>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-sm-4">
              <img src="<?= BASE_URL; ?>/img/artikel/artikel2.jpg" class="img-fluid" alt="Responsive image">
            </div>
            <div class="col-sm-8">
              <p>Asal muasal pandemi Covid-19, yang dipicu infeksi virus corona baru, masih menjadi perdebatan. Baru-baru ini, Presiden Amerika Serikat (AS) Donald Trump mengklaim memiliki bukti bahwa virus dikembangkan di sebuah laboratorium di Wuhan, China, yang menjadi pusat wabah.</p>

              <p>Namun, para ilmuwan mengatakan tak ada bukti yang membenarkan klaim Trump tersebut.</p>

              <p>Sementara itu, asal mula wabah berdasarkan versi pemerintah China adalah sebuah pasar hewan laut di Wuhan. Namun juga ada beberapa kasus awal yang tak berkaitan dengan pasar ini.</p>

              <p>Jika orang-orang ini tidak terinfeksi di pasar, atau melalui kontak yang terinfeksi di pasar, para kritikus mempertanyakan bagaimana China menjelaskan kasus-kasus ini.</p>
              <p>Dilansir dari The Guardian, Sabtu (2/5), dua laboratorium di Wuhan yang meneliti kelelawar sebagai sumber virus corona menjadi sorotan. Institut Virologi Wuhan (WIV) dan Pusat Pengendalian Penyakit Wuhan, berlokasi tidak jauh dari pasar ikan, telah mengumpulkan spesimen virus corona kelelawar.</p>

              <a href=""> readmore>> </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">

    <div class="col-lg-12">

      
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Ilmuwan Temukan Obat Manjur Virus Corona</h6>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-sm-4">
              <img src="<?= BASE_URL; ?>/img/artikel/artikel3" class="img-fluid" alt="Responsive image">
            </div>
            <div class="col-sm-8">
              <p>Pasalnya meski berbagai langkah pencegahan telah diambil, wabah virus corona dikonfirmasi sudah sampai ke 27 negara termasuk Cina.

                <p>Sejumlah ilmuwan berusaha menemukan vaksin untuk menghentikan wabah virus corona ini.</p>

                <p>Sampai akhirnya mereka baru mengumumkan salah satu obat yang disebut manjur mengobati virus corona.</p>

                <p>Dimana obat tersebut juga ternyata sudah tidak asing bagi masyarakat Indonesia, yakni obat yang dalam bahasa ilmiahnya adalah Chloroquine Phosphate.</p>

                <p>Para ilmuwan di Cina mengklaim bahwa obat malaria diyakini ampuh untuk mengobati virus corona.</p>
                <p>Hal ini diketahui setelah mereka melakukan uji klinis menggunakan obat malaria ini.</p>
                <a href=""> readmore>> </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">

    <div class="col-lg-12">

     
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Kabar Baik, RI Akhirnya Bisa Buat Vaksin Corona</h6>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-sm-4">
              <img src="<?= BASE_URL; ?>/img/artikel/artikel4" class="img-fluid" alt="Responsive image">
            </div>
            <div class="col-sm-8">
              <p>Ada kabar bahagia seputar penanganan penyebaran wabah virus Corona atau covid-19 di Indonesia.</p>

              <p>Indonesia, akhirnya bisa menghasilkan vaksin virus Corona.</p>

              <p>Di tengah kemelut pemberitaan buruk soal covid-19 di Tanah Air, akhirnya kabar bahagia datang juga.</p>
              <p>Pemerintah menyatakan Indonesia bisa menghasilkan vaksin untuk virus Corona yang saat ini sedang menjadi kesulitan banyak negara lain.</p>
              <p>Kabar bahagia itu datang langsung dari pemerintah, disampaikan oleh Menristek Bambang PS Brodjonegoro.
                <p>Seiring dengan kabar satu ini, hanya ada 1 kendala lagi yang membuat Indonesia belum mampu memberikan vaksin cuma-cuma kepada warga yang terdampak.</p>
                <a href=""> readmore>> </a>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div> -->

  <div class="row">

    <div class="col-lg-6">

      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <ul class="pagination">
            <li class="disabled"><a href="javascript:void(0)">&laquo;previous</a></li><br>
          </ul>
        </div>

      </div>

    </div>

    <div class="col-lg-6">

      <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-end">
          <ul class="pagination">
            <li><a href="javascript:void(0)">next&raquo;</a></li>
          </ul>

        </div>

      </div>
    </div>
  </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->