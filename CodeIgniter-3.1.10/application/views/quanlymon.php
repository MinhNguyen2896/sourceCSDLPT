<!DOCTYPE html>
<html>

<?php $this->load->view('header/header') ?>

<body>
<?php $this->load->view('sidebar/sidebar')?>

    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li>
                    <a href="./index.html">
                        <em class="fa fa-home"></em>
                    </a>
                </li>
                <li class="active">Quản lý môn</li>
            </ol>
        </div>

        //cho nay neu cap nhat, them xoa sua gi do thanh cong thi hien thong bao len
        @if(Session::has('thongbao'))
        <div class="alert alert-success">
            {{Session::get('thongbao')}} {{Session::forget('thongbao')}}
        </div>
        @endif
        <div class="inner-header">
            <div class="pull-left">
                <h2>Danh sách môn học<h2>
            </div>
            <div class="pull-right">
                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Thêm môn học</button>
            </div>
            <div class="clearfix"></div>
        </div>

        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Thêm môn học</h4>
                    </div>
                    <div class="modal-body">
                        <form action="#" method="post">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="form-group">
                                <label for="input">Tên môn học</label>
                                <input class="form-control" placeholder="Nhập tên môn học" type="text" id="inputTenmonhoc" name="tenmonhoc" onkeydown="keyboard(event)"/>
                                <hr>
                                <hr>
                                <input class="form-control" placeholder="Nhập tên môn học" type="text" id="inputtenmonhoc2"  name="tenmonhoc2" onkeydown="keyboard(event)" />
                                <div id="console"></div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                                <button type="submit" class="btn btn-primary">Lưu</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="myModal1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Cập nhật môn học</h4>
                    </div>
                    <div class="modal-body">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <input id="inputId1" name="inputId1" type="hidden">
                            <div class="form-group">
                                <label for="input">Tên môn học</label>
                                <input class="form-control" placeholder="Nhập tên môn học" type="text" id="inputtenmonhoc1" name="tenmonhoc1" />
                            </div>
                            <div class="form-group">
                                <label for="input">Xóa môn học</label>
                                <input type="checkbox" name="tinhtrang1" id="tinhtrang1">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                                <button type="button" id="saveMonhoc"class="btn btn-primary">Lưu</button>
                            </div>
                    </div>
                </div>
            </div>
        </div>

        <table class="table table-striped table-bordered table-hover" id="mydata">
            <thead>
                <tr>
                    <th width="15%">Mã môn học</th>
                    <th width>Têm môn học</th>
                    <th width="15%">Tình trạng</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($monhoc as $mon):?>
                <?php $mon['TRINHTRANG']=='1'?$status='Ative':$status='Deleted'?>
                <tr data-toggle="modal" data-id="1" data-target="#myModal1">
                    <td><?php echo $mon['MAMH']?></td>
                    <td><?php echo $mon['TENMH']?></td>
                    <td><?php echo $status?></td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</body>
<?php $this->load->view('script/script')?>
<script>
    $(document).ready(function() {
        $('#mydata').DataTable();
    });
</script>
<script>
    $(document).ready(function() {
        var tb = $('#mydata').DataTable();
        $('#mydata').on('click', 'tr', function() {
            var name = $('td', this).eq().text();
            $("#inputId1").val(tb.row(this).data()[0]);
            $("#inputtenmonhoc1").val(tb.row(this).data()[1]);
            $("#inputtinhtrang1").val(tb.row(this).data()[2]);
            document.getElementById("tinhtrang1").checked = tb.row(this).data()[2] == "1" ? 0 : 1;
        });
        $('#myModal').on('shown.bs.modal', function() {
            $("#inputTenmonhoc").focus();
        });
    });
</script>
</html>