<p>
    <a href="<?php echo base_url('crud_c/add')?>" class="btn btn-success btn-lg"><i class="fa fa-plus"></i> Tambah Data Dokter</a>

</p>
   <table id="example1" class="table table-bordered table-striped" border="1">
    <thead>
    <tr>
        <th>Id</th>
        <th>username</th>
        <th>name</th>
        <th>pass</th>
        <th>Aksi</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach($data as $d){ ?> 
    <tr>
        <td><?php echo $d->id?></td>
        <td><?php echo $d->username?></td>
        <td><?php echo $d->name?></td>
        <td><?php echo $d->pass?></td>
        <td><a href="<?php echo base_url('crud_c/edit/'.$d->id)?>" class="btn btn-warning btn-xs">
        <i class="fa fa-edit"></i>Edit</a> 
        <a href="<?php echo base_url('crud_c/delete/'.$d->id)?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin ingin menghapus data ini?')">
        <i class="fa fa-trash-o"></i>Hapus</a></td>
       
    </tr>
    <?php 
        }
        ?>
                
    </tbody>
               
    </table>