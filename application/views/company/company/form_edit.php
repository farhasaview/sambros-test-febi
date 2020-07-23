<div class="col-md-12 bg-light"><br>

<h3><?=$title?></h3><hr>

<form action="<?=base_url()?>company/aksiEditCompany/<?=$company->company_id?>" method="post" enctype="multipart/form-data" data-toggle="validator">

   <div class="form-group">

    <img id="image-preview" style="width: 100%; height: 100%">

    <label for="logo">Logo</label>

    <input type="file" accept=".jpg,.jpeg,.png" id="image-source" value="$company->logo" name="logo" onchange="previewImage();" class="form-control-file">

  </div>

  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" class="form-control" value="<?=$company->name?>" placeholder="Name of company" required>
  </div>

  <div class="form-group">
    <label for="phone">Phone</label>
    <input type="text" name="phone" maxlength="15" class="form-control" value="<?=$company->phone?>" required oninput="this.value = this.value.replace(/[^0-9]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
  </div>

  <div class="form-group">
    <label for="address">Address</label>
    <textarea class="form-control" name="address" rows="3" required><?=$company->address?></textarea>
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