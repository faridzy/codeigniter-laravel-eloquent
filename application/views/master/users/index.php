<div class="content-wrapper">
        <section class="content">
            <div class="row">
                <div class='col-md-12'>
                    <div class="box box-primary">
                        <div class="box-header">
                            <h3 class="box-title">
                                <?php echo $title; ?>
                            </h3>
                        </div>
                        <div class="box-body">

<a onclick="loadModal(this)" target="users/form" class="btn btn-primary" title="Tambah Data"><i
            class="glyphicon glyphicon-plus"></i> Tambah Data</a>
<br><br>

<table class="table table-bordered table-striped" id="table-categories">
    <thead>
    <tr>
        <th width="5%">No</th>
        <th>Nama User</th>
        <th>Username</th>
        <th>Hak Akses</th>
        <th>Last Login</th>
        <th>Opsi</th>
    </tr>
    </thead>
    <tbody>
<?php
    foreach($data as $num => $item){
        ?>
    
        <tr>
            <td class="center"><?php echo $num+1;?></td>
            <td class="center"><?php echo $item->name?></td>
            <td class="center"><?php echo $item->username?></td>
            <td class="center"><?php echo $item->getRole->name?></td>
            <td class="center"><?php echo $item->last_login ?></td>
            <td align="center">

                <a onclick="loadModal(this)" target="users/form" data="id=<?php echo $item->id ?>"
                   class="btn btn-primary btn-xs glyphicon glyphicon-pencil" title="Ubah Data"></a>
            <?php
            if($item->getRole->name!='superadmin'){
                ?>
                 <a onclick="deleteData(<?php echo $item->id ?>)" class="btn btn-danger btn-xs glyphicon glyphicon-trash"
                   title="Hapus Data"></a
                <?php
            } 

            ?>
               
            </td>
        </tr>
   <?php } ?>
    </tbody>
</table>

<script>
    
    function deleteData(id) {
        modalConfirm("Konfirmasi", "Apakah anda yakin akan menghapus data?", function () {
            ajaxTransfer("users/delete", {id: id}, "#modal-output");
        })
    }

    $(document).ready(function () {
        $('#table-categories').dataTable();
    })
</script>


                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>