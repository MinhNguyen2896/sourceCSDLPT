<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span></button>
                <a class="navbar-brand" href="#">Quản lý <span> Điểm Sinh Viên</span></a>
            </div>
        </div>
    </nav>
    <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
        <ul class="nav menu">
            <li class="active"><a href="index"><em class="fa">&nbsp;</em>Thông tin</a></li>
            <li class="parent">
                <a data-toggle="collapse" href="#sub-item-1">
                    <em class="fa fa-navicon">&nbsp;</em> Quản lý <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"></span>
                </a>
                <ul class="children collapse in" id="sub-item-1">
                    <li><a class="" href="<?php echo base_url()?>home/quanlykhoa"><span class="fa fa-arrow-right">&nbsp;</span>Khoa</a></li>
                    <li><a class="" href="<?php echo base_url()?>home/quanlymon"><span class="fa fa-arrow-right">&nbsp;</span>Môn</a></li>
                    <li><a class="" href="<?php echo base_url()?>home/quanlylop"><span class="fa fa-arrow-right">&nbsp;</span>Lớp</a></li>
                    <li><a class="" href="<?php echo base_url()?>home/quanlysinhvien"><span class="fa fa-arrow-right">&nbsp;</span>Sinh viên</a></li>
                    <li><a class="" href="<?php echo base_url()?>home/quanlydiem"><span class="fa fa-arrow-right">&nbsp;</span>Điểm</a></li>
                </ul>
            </li>
            <li class="parent">
                    <a data-toggle="collapse" href="#sub-item-2">
                        <em class="fa fa-navicon">&nbsp;</em> In / Xuất <danhspan data-toggle="collapse" href="#sub-item-2" class="icon pull-right"></span>
                    </a>
                    <ul class="children collapse in" id="sub-item-2">
                        <li><a class="" href="danhsachsinhvien"><span class="fa fa-arrow-right">&nbsp;</span>Danh sách sinh viên</a></li>
                        <li><a class="" href="bangdiemmonhoc"><span class="fa fa-arrow-right">&nbsp;</span>Bảng điểm môn học</a></li>
                        <li><a class="" href="bangdiemsinhvien"><span class="fa fa-arrow-right">&nbsp;</span>Bảng điểm sinh viên</a></li>
                        <li><a class="" href="bangdiemtongket"><span class="fa fa-arrow-right">&nbsp;</span>Bảng điểm tổng kết</a></li>
                    </ul>
                </li>
            <li class=""><a href="dangnhap"><em class="fa fa-sign-out">&nbsp;</em>Đăng xuất</a></li>
        </ul>
    </div>