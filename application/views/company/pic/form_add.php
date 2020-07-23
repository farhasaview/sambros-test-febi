<div class="col-md-12 bg-light"><br>

<h3><?=$title?></h3><hr>

<form action="<?=base_url()?>company/addPic/<?=$pasCompId?>" method="post" enctype="multipart/form-data" data-toggle="validator">

  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" class="form-control" placeholder="PIC Name" required>
  </div>

  <div class="form-group">
    <label for="email">email</label>
    <input type="email" name="email" class="form-control" placeholder="PIC Email" required>
  </div>

  <div class="form-group">
    <label for="phone">Phone</label>
    <input type="text" name="phone" maxlength="15" class="form-control" required oninput="this.value = this.value.replace(/[^0-9]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
  </div>

  <div class="form-group">
    <label for="address">Address</label>
    <textarea class="form-control" name="address" rows="3" required></textarea>
  </div>

  <button type="submit" class="btn btn-outline-success btn-block">Submit</button><br>

</form>

</div>



<script>

  function previewImage() {

    document.getElementById("image-preview").style.display = "block";

    var oFReader = new FileReader();

     oFReader.readAsDataURL(document.getElementById("image-source").files[0]);

 

    oFReader.onload = function(oFREvent) {

      document.getElementById("image-preview").src = oFREvent.target.result;

    };

  };

</script>