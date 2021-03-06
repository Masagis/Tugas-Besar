<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
        
    <div class="col">
        <div class="col-lg-8">

    <?= $this->session->flashdata('message');?>
        <?= form_open_multipart('mahasiswa');?>
        <div class="form-group row">
            <label for="nim" class="col-sm-3 col-form-label">NIM</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="nim" name="nim">
                <?= form_error('nim','<small class="text-danger pl-3">','</small>'); ?>
            </div>
        </div>
        <div class="form-group row">
            <label for="name" class="col-sm-3 col-form-label">Full Name</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="name" name="name" value="<?= $user ['name'];?>" readonly>
                <?= form_error('name','<small class="text-danger pl-3">','</small>'); ?>
            </div>
        </div>
        <div class="form-group row">
            <label for="semester" class="col-sm-3 col-form-label">Semester</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="semester" name="semester">
                <?= form_error('semester','<small class="text-danger pl-3">','</small>'); ?>
            </div>
        </div>
        <div class="form-group row">
            <label for="tahun" class="col-sm-3 col-form-label">Tahun Mendaftar</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="tahun" name="tahun">
                <?= form_error('tahun','<small class="text-danger pl-3">','</small>'); ?>
            </div>
        </div>
        <div class="form-group row">
        <label for="mk1" class="col-sm-3 col-form-label">Tugas Besar</label>
            <div class="col-sm-8">
            <select name="kodemk" id="kodemk" class="form-control">
                            <option value=""> No Selected </option>
                            <?php foreach ($mkkode as $k ):?>
                            <option value ="<?= $k['kodemk']; ?>"><?= $k['kodemk'],'-', $k['namamk'],' - ', $k['kelas'];;?></option>
                            <?php endforeach ?>
                        </select>
                <?= form_error('kodemk','<small class="text-danger pl-3">','</small>'); ?>    
            </div>
        </div>
            <div class="form-group row justify-content-end">
                <div class="col-sm-4 text-center">
                    <button type="submit" class="btn btn-primary">Daftar</button>
                    </div>
                </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->