<div class="col-md-12">

  

  <!-- notifikasi tambah data katalog tender -->

        <?php if ($this->session->flashdata('pangbeja')) {echo $this->session->flashdata('pangbeja');}?>

  <!-- end of notifikasi tambah data katalog tender -->

  <a href="<?=base_url()?>company/addCompany" type="button" class="btn btn-info" rel="tooltip" title="add company"><i class="fa fa-plus"></i></a>



  <?php if (empty($all)) {echo null;} else {?>

  <table class="table table-bordered table-striped table-responsive bg-light">

    <thead class="bg-success">

      <tr class="font-italic" style="color: white;">

        <th scope="col">Number</th>
        
        <th scope="col">ID</th>

        <th scope="col">Logo</th>

        <th scope="col">Name</th>

        <th scope="col">Phone</th>
        
        <th scope="col">Address</th>

        <th scope="col">View</th>

        <th scope="col">Edit</th>

        <th scope="col">Delete</th>
        
        <th scope="col">PIC</th>

      </tr>

    </thead>

    <tbody>

      <?php $no = 1;foreach ($all as $company) { ?>

      <tr>

        <td><?=$no++?></td>

        <td><?=$company['company_id']?></td>
        
        <td><?=$company['logo']?></td>

        <td><?=$company['name']?></td>

        <td><?=$company['phone']?></td>
        
        <td><?=$company['address']?></td>
        
        <td>
           <button type="button" onclick='previewImage("<?=base_url()?>penyimpanan_file/images/<?=$company['logo']?>");' rel="tooltip" title="view image" class="btn btn-outline-dark btn-sm"><i class="fa fa-eye"></i></button>
        </td>

        <td>
          <a href="<?= base_url()?>company/editCompany/<?=$company['company_id']?>" type="button" class="btn btn-outline-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
        </td>

        <td>
          <a onclick="return confirm('apakah anda yakin?')" href="<?= base_url()?>company/deleteCompany/<?=$company['company_id']?>" type="button" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
        </td>

         <td>
          <a href="<?= base_url()?>company/allPicWhere/<?=$company['company_id'] ?>" type="button" class="btn btn-outline-primary btn-sm" rel="tooltip" title="Atur PIC"><i class="fa fa-user" aria-hidden="true"></i></a>
        </td>

      </tr>

    <?php }?>

    </tbody>

  </table>

<?php }?>

</div>



<!-- Modal View Img -->

<div class="modal fade" id="viewImg">

  <div class="modal-dialog" role="document">

    <div class="modal-content">

      <div class="modal-body">

        <img id="image-preview" style="width: 100%; height: 100%" alt="view image">

      </div>

      <div class="modal-footer">

        <button type="button" class="btn btn-outline-secondary btn-sm" data-dismiss="modal">Close</button>

      </div>

    </div>

  </div>

</div>



<script>

// preview di tag img

    function previewImage(nilai) {

      $("#viewImg").modal();

      $("#image-preview").attr('src', nilai);

       // document.getElementById("image-preview").src = nilai;

    }

</script>