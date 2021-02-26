   <!-- Begin Page Content -->
   <div class="container-fluid">

       <!-- Page Heading -->
       <h1 class="h3 mb-4 text-gray-800">Topics of Discussion</h1>
       <?= Flasher::Flash() ?>

       <?php if (isset($data)) : ?>
           <?php foreach ($data as $topic) : ?>
               <div class="row">

                   <div class="col-lg-12">

                       <!-- Basic Card Example -->
                       <div class="card shadow mb-4">
                           <div class="card-header py-3">
                               <h6 class="m-0 font-weight-bold text-primary"><?= $topic["judul"] ?></h6>
                           </div>
                           <div class="card-body">
                               <div class="row">

                                   <div class="col-sm-8">
                                       <p><?= substr($topic["isi"], 0, 500) ?></p>
                                       <a href="<?= BASE_URL; ?>/forums/singleforum<?= $topic["id"] ?>"> reply&raquo; </a>
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