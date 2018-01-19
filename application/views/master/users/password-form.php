
<div id="result-user"></div>
<form id="form-user" onsubmit="return false;" class="form-horizontal" enctype="multipart/form-data">
    <div class="form-group">
        <label for="password" class="col-sm-3 col-xs-12 control-label">Password</label>
        <div class="col-sm-8 col-xs-12">
            <input type="password" name="password" class="form-control" required="" value="">
        </div>
    </div>
   

    <div class="form-group">
        <label class="col-sm-3 col-xs-12 control-label"></label>
        <div class="col-sm-8 col-xs-12">
            <input class="btn btn-primary" type="submit" value="Simpan">
        </div>
    </div>
      <input type='hidden' name='id' value='<?php echo $user->id ?>'>
        <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" 

   
</form>

<script>
    $("#form-user").submit(function () {
        var data = getFormData("form-user");
        ajaxTransfer("users/updatepassword", data, "#result-user");
    })
</script>