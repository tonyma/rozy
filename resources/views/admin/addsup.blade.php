<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../assetsAdmin/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="../../assetsAdmin/css/index.css">
    <link rel="stylesheet" href="../../assetsAdmin/css/cat.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="../../assetsAdmin/css/chart.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>Admin::Suppliers::Add</title>
</head>

<body>
    <div class="vucms">
        @include('includes.menubar')
        <div class="right">
            <div class="top">
                <ul class="listtop">
                    <li><i class="far fa-bell"></i> <span class="toptext">Thông báo</span>
                    </li>
                    <li><i class="far fa-envelope"></i> <span class="toptext">Tin
                            nhắn</span></li>
                    <li class="topprofile">
                        <img src="../../assetsAdmin/img/avt.jpg" alt="">
                        <span class="nameprofile"><span class="toptext">VuCms</span>
                            <i class="fas fa-angle-down"></i>

                        </span>
                        <ul>
                            <li><i class="fas fa-cogs"></i> <a href="#">&nbsp;
                                    Cài Đặt</a></li>
                            <li><i class="fas fa-id-card-alt"></i> <a href="#">&nbsp; Trang Cá
                                    Nhân</a></li>
                            <li><i class="far fa-envelope"> </i> <a href="#">&nbsp; Tin nhắn của
                                    bạn</a></li>
                            <li><i class="far fa-bell"></i> <a href="#">&nbsp;
                                    Tất cả thông bá</a>o</li>
                            <li><i class="fas fa-sign-out-alt"></i> <a href="#">&nbsp; Đăng xuất</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="bottom">
                <div class="headtitle">
                    <p class="sup">NHÀ CUNG CẤP</p>
                    <div class="breadcrumb supbread">
                        <ul>
                            <li><span class="sub">Quản lí</span></li>
                            <li><span class="aright"><i class="fas fa-angle-right"></i></span></li>
                            <li><span class="main"><a href="">Nhà Cung Cấp</a></span></li>

                        </ul>
                    </div>
                </div>
                <div class="catlist" id="add">
                    <p class="cattitle">
                        <i class="fas fa-pen-nib"> </i> Thêm Nhà Cung Cấp
                    </p>
                    <div class="tabcat">
                        <table>

                            <tr>
                                <td>Tên Nhà Cung Cấp</td>
                                <td><input type="text" placeholder="Tên Nhà Cung Cấp"></td>
                            </tr>
                            <tr>
                                <td>Mô tả Nhà Cung Cấp</td>
                                <td><textarea name="" id="" style="width:100%"
                                        placeholder="Mô tả Nhà Cung Cấp"></textarea></td>
                            </tr>
                            <tr>
                                <td>Ảnh đại diện</td>
                                <td><b><u></u><label for="uploadfile">Chọn Ảnh</label></u></b> <input
                                        style="display:none" type="file" id="uploadfile" name="uploadfile"
                                        placeholder="Ảnh đại diện"></td>
                            </tr>
                            <tr>
                                <td>Danh mục Sản Phẩm</td>
                                <td>
                                    <select name="aa" id="">
                                        <option value="--">--</option>
                                        <option value="like">block</option>
                                        <option value="president">concerned</option>
                                        <option value="example">was</option>
                                        <option value="why">laid</option>
                                        <option value="ability">call</option>
                                        <option value="noise">certain</option>
                                        <option value="front">electricity</option>
                                        <option value="fighting">supply</option>
                                        <option value="potatoes">greatly</option>
                                        <option value="running">loss</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Trạng thái</td>
                                <td>
                                    <select name="aa" id="">
                                        <option value="potatoes">Hiện</option>
                                        <option value="running">Ẩn</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><button class="cancelcat">Hủy</button></td>
                                <td><button class="addcat">Thêm</button></td>
                            </tr>


                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../../../assetsAdmin/js/jquery.min.js"></script>
    <script src="../../assetsAdmin/js/chart.min.js"></script>
    <script src="../../assetsAdmin/js/cat.js"></script>
    <script>
    </script>
</body>

</html>