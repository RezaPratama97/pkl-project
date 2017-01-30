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
            <li class="active"><a href="#">Edit Data Kategori Penilaian</a></li>
            </ol>                                                                                                                                                
        </div>
        <div class="col-md-12">
            <div class="panel panel-default">
                <!-- Default panel contents -->                                                                                      
                <div class="panel-heading">
                    <h3 class="panel-title pull-left">                                                                                                                                                                                                   
                    Edit Kategori Penilaian                            
                    </h3>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-body">
                    <?php $this->load->view('layouts/alert')?>
                    <form action="<?php echo site_url('kategori_penilaian/update')?>" method="post"> 
                        <div class="form-group">                           
                            <label class="col-sm-2 control-label">Penilaian</label>
                            <div class="col-sm-10">
                                <input type="hidden" name="id" value="">
                                <input type="text" class="form-control" name="nama" placeholder="Nama" value="">
                            </div>
                        </div>
                        <br><br>
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

<script type="text/javascript" charset="utf-8">
$(document).ready(function() {
    var table = $('#example').DataTable();
    var tt = new $.fn.dataTable.TableTools( table );
 
    $( tt.fnContainer() ).insertBefore('div.dataTables_wrapper');
} );
</script>