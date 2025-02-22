<div class="bg-white p-5">
    <div class="btn-group mb-3">
        <a href="?page=kelola-penginapan&a1=data-penginapan" class="btn btn-success active">Data Penginapan</a>
        <a href="?page=kelola-penginapan&a1=tambah-penginapan" class="btn btn-success">Tambah Penginapan</a>
    </div>

    <div class="mb-3">
        <?php
        $penginapan = new Penginapan($conn);
        $penginapan->getDataByID($_GET["id"]);

        if (isset($_GET["msg"]) && $_GET["msg"] == "success")
        {
            echo '<div class="alert alert-success" role="alert">Berhasil</div>';
        }
        ?>
        
        <p class="fw-bold">Edit Penginapan</p>

        <form method="post" action="?process=edit-penginapan&id=<?php echo $penginapan->id;?>">
            <div class="mb-3">
                <label for="nama_tempat" class="mb-3">Nama Tempat</label>
                <input value="<?php echo $penginapan->nama_tempat;?>" required name="nama_tempat" class="form-control" id="nama_tempat" type="text">
            </div>
            <div class="mb-3">
                <label for="alamat" class="mb-3">Alamat</label>
                <input value="<?php echo $penginapan->alamat;?>" required name="alamat" class="form-control" id="alamat" type="text">
            </div>
            <button type="submit" class="btn btn-success">Edit</button>
        </form>
    </div>

</div>