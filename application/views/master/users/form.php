
    <div id="result-form-konten"></div>
    <form onsubmit="return false;" id="form-konten" class='form-horizontal'>
        <div class='form-group'>
            <label for='nama' class='col-sm-2 col-xs-12 control-label'>Nama Lengkap</label>
            <div class='col-sm-9 col-xs-12'>
                <input type="text" name="name" class="form-control" required="" value="<?php echo $data->name ?>">
            </div>
        </div>

         <div class='form-group'>
            <label for='nama' class='col-sm-2 col-xs-12 control-label'>Username</label>
            <div class='col-sm-9 col-xs-12'>
                <input type="text" name="username" class="form-control" required="" value="<?php echo $data->username ?>">
            </div>
        </div>

        <?php
        if(intval($data->id==0)){
            ?>

            <div class='form-group'>
            <label for='nama' class='col-sm-2 col-xs-12 control-label'>Password</label>
            <div class='col-sm-9 col-xs-12'>
                <input type="password" name="password" class="form-control" required="" value="">
            </div>
        </div>

            <?php
        }

        ?>
        
         <div class='form-group'>
            <label for='jenis_role' class='col-sm-2 col-xs-12 control-label'>Role User</label>
            <div class='col-sm-9 col-xs-12'>
                <select name="role_id" class="form-control">
                <?php 
                  foreach($role as $item){
                    if(isset($data->role_id)){
                        if($data->role_id==$item->id){
                        ?>
                        <option value="<?php echo $item->id ?>" selected="selected"><?php echo $item->name ?></option>
                        <?php
                        }else{
                        ?>
                         <option value="<?php echo $item->id ?>"><?php echo $item->name ?></option>
                        <?php
                        }
                    }else{
                        ?>

                         <option value="<?php echo $item->id ?>"><?php echo $item->name ?></option>
                    <?php
                    }
                    
                  }  
                  ?>
                </select>
            </div>
        </div>



        <div class='form-group'>
            <label class='col-sm-2 col-xs-12 control-label'></label>
            <div class='col-sm-9 col-xs-12'>
                <input type="submit" class="btn btn-primary" value="Simpan Data">
            <?php
            if(intval($data->id)!=0){
                ?>
                 <a onclick="loadModal(this)" target="users/editpassword" data="id=<?php echo $data->id?>" class="btn btn-warning">Ubah Password</a>
                <?php
            } 
            ?>
           
            
            </div>
        </div>

        <input type='hidden' name='id' value='<?php echo $data->id ?>'>
        <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" 
    </form>

    <script>
        $(document).ready(function () {
            $('#form-konten').submit(function () {
                var data = getFormData('form-konten');
                ajaxTransfer('users/save', data, '#result-form-konten');
            })
        })
    </script>
