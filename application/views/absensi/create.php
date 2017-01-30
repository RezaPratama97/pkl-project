<style>
.panel-heading h3 {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    line-height: normal;
    width: 75%;
    padding-top: 4px;
}
</style>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active"><a href="#">Tambah Data Absensi</a></li>
            </ol>
        </div>
        <div class="col-md-12">
            <div class="panel panel-default">
                <!-- Default panel contents -->
                <div class="panel-heading">
                    <h3 class="panel-title pull-left">
                    Tambah Absensi
                    </h3>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-body">
                    <?php $this->load->view('layouts/alert')?>
                    <form action="<?php echo site_url('absensi/save')?>" method="post" class="form-horizontal"> 
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Tanggal</label>
                            <div class="col-sm-10">
                                <input type="hidden" name="id" value="">
                                <input type="text" class="form-control" name="tanggal" placeholder="Uraian Kegiatan" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Jam Datang</label>
                            <div class="col-sm-4">
                                <input type="hidden" name="id" value="">
                                <input type="text" class="form-control" name="jam_datang" placeholder="Tanggal Mulai" value="">
                            </div>
                            <label class="col-sm-2 control-label">Jam Pulang</label>
                            <div class="col-sm-4">
                                <input type="hidden" name="id" value="">
                                <input type="text" class="form-control" name="jam_pulang" placeholder="Tanggal Selesai" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Status Kehadiran</label>
                            <div class="col-sm-10">
                                <select name="status_kehadiran_id" id="" class="form-control">
                                    <option value="">A</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">&nbsp;</label>
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>