<!-- Begin Page Content -->
<div class="container-fluid">
    
    <div class="row">
        <div class="col-lg-9">
            <?= form_open_multipart('user/ubahprofil'); ?>
            <div class="form-group row">
                <label for="email" class="col-sm-2 col-formlabel">Email</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control"
id="email" name="email" value="<?= $user['email']; ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-sm-2 col-formlabel">Nama Lengkap</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control"
id="nama" name="nama" value="<?= $user['nama']; ?>">
                    <?= form_error('nama', '<small class="textdanger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-2">Gambar</div>
                <div class="col-sm-10">
                    <div class="row">
                        <div class="col-sm-3">
                            <img src="<?=
base_url('assets/img/profile/') . $user['image']; ?>" class="imgthumbnail" alt="">
                        </div>
                        <div class="col-sm-9">
                            <div class="custom-file">
                                <input type="file" class="customfile-input" id="image" name="image">
                                <label class="custom-file-label"
for="image">Pilih file</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
            <div class="form-group row justify-content-end">
                <div class="col-sm-10">
                    <button type="submit" class="btn btnprimary">Ubah</button>
                    <button class="btn btn-dark"
                    onclick="window.history.go(-1)"> Kembali</button>
                </div>
            </div>

            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->    