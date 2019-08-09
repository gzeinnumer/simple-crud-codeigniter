<?php

//form open
echo form_open(base_url('crud_c/edit/'.$data->id),' class="form-horizontal"');
?>

    <div class="form-group">
        <label class="col-md-2 control_label">Username</label>
        <div class="col-md-4"><input type="text" class="form-control" name="username_i" placeholder="Masukkan Username"  value="<?php echo $data->username ?>"></div>
    </div>    
    <div class="form-group">
        <label class="col-md-2 control_label">Name</label>
        <div class="col-md-4"><input type="text" class="form-control" name="name_i" placeholder="Name" value="<?php echo $data->name ?>"></div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control_label">Pass</label>
        <div class="col-md-4"><input type="text" class="form-control" name="pass_i"  placeholder="Pass" value="<?php echo $data->pass ?>"></div>
    </div>
    
    <div class="form-group">
            <label class="col-md-2 control-label"></label>
            <div class="col-md-4">
                <button class="btn btn-success btn-lg" name="submit" type="submit"><i class="fa fa-save"></i> Simpan </button>
                <button class="btn btn-info btn-lg" name="reset" type="reset"><i class="fa fa-times"></i> Reset </button>
            </div>
    </div>
    
    
    

<?php echo form_close(); ?>
