<p>
    <a href="<?php echo base_url('crud_c/add')?>">
        Tambah Data Dokter
    </a>
</p>
<table border="1">
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
        <?php foreach($data as $d){ ?> 
        <tr>
            <td><?php echo $d->id?></td>
            <td><?php echo $d->username?></td>
            <td><?php echo $d->name?></td>
            <td><?php echo $d->pass?></td>
            <td>
                <a href="<?php echo base_url('crud_c/edit/'.$d->id)?>">
                    Edit
                </a> 
                <a href="<?php echo base_url('crud_c/delete/'.$d->id)?>" 
                    onclick="return confirm('Yakin ingin menghapus data ini?')">
                    Hapus
                </a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>