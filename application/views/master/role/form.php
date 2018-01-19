
<div id="result-user"></div>
<form id="form-user" onsubmit="return false;" class="form-horizontal" enctype="multipart/form-data">
    <div class="form-group">
        <label for="password" class="col-sm-3 col-xs-12 control-label">Nama Role</label>
        <div class="col-sm-8 col-xs-12">
            <input type="text" name="name" class="form-control" required="" value="<?php echo $data->name ?>">
        </div>
    </div>
   

    <div class="form-group">
        <label class="col-sm-3 col-xs-12 control-label"></label>
        <div class="col-sm-8 col-xs-12">
            <input class="btn btn-primary" type="submit" value="Simpan">
        </div>
    </div>
      <input type='hidden' name='id' value='<?php echo $data->id ?>'>
        <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" 

   
</form>

<script>
    $("#form-user").submit(function () {
        var data = getFormData("form-user");
        ajaxTransfer("roles/save", data, "#result-user");
    })
</script>