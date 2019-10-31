<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../assetsAdmin/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="../../assetsAdmin/css/index.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="../../assetsAdmin/css/chart.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>Admin::VuCms</title>
</head>
<body>
    <div class="vucms">
        <div class="menubar">
            <div class="menuname">
                <span class="namehiden">
                    ADMIN-VUCMS
                </span><button id="propbar"><i class="fas fa-bars"></i></button>
            </div>
            <div class="options">
                <div class="top">
                    <div class="me">
                        <img src="{{url($user->getAvatar() ??'https://png.pngtree.com/svg/20160601/unknown_avatar_182562.png') }}" alt="">
                        <div class="meme">
                            <p class="online"><span class="pointonline"></span>
                                Online</p>
                            <p class="myname">{{$user->getInfo()->name}}</p>
                        </div>
                    </div>
                    <div class="searchbox">
                        <form action="#">
                            <input type="search" placeholder="Tìm Kiếm">
                        </form>
                    </div>
                </div>
                <div class="navigation">
                    <div class="navtitle">
                        Khu vực chính
                    </div>
                    <div class="navitems">
                        <ul class="items">
                            <li class="lv1"><a href="index.html">
                                    <i class="fas fa-tachometer-alt"></i>
                                    <span class="navtext">Bảng điều
                                        khiển</span>
                                </a>
                            </li>
                            <li class="lv1"><i class="fas fa-chart-bar"></i>
                                <span class="navtext">Quản lí</span><i class="fas fa-angle-right"></i>
                                <ul class="lv2items">
                                    <li class="lv2"><a href="categories.html">Danh mục</a></li>
                                    <li class="lv2"><a href="product.html">Sản phẩm</a></li>
                                    <li class="lv2"><a href="vote.html">Đánh giá</a></li>
                                    <li class="lv2"><a href="supplier.html">Nhà cung cấp</a></li>
                                    <li class="lv2"><a href="file.html">Files</a></li>
                                </ul>
                            </li>

                            <!-- <li class="lv1"><i class="fas fa-layer-group"></i>
                                                                                <span class="navtext">Gian hàng</span><i
                                                                                          class="fas fa-angle-right"></i>
                                                                                          <ul class="lv2items">
                                                                                                    <li class="lv2">Bố cục</li>
                                                                                                    <li class="lv2">Banner</li>
                                                                                                    <li class="lv2">Công cụ SEO</li>
                                                                                                    <li class="lv2">Subcategory 4</li>
                                                                                                    <li class="lv2">Subcategory 5</li>
                                                                                          </ul>
                                                                      </li> -->
                            <li class="lv1"><i class="fas fa-users"></i> <span class="navtext">Khách hàng</span><i
                                    class="fas fa-angle-right"></i>
                                <ul class="lv2items">
                                    <li class="lv2"><a href="customer.html">Danh sách</a></li>
                                    <li class="lv2"><a href="customer_group.html">Nhóm</a></li>
                                    <li class="lv2"><a href="customer_ban.html">Danh sách bị cấm</a></li>
                                </ul>
                            </li>
                            <li class="lv1"><i class="fas fa-shopping-cart"></i>
                                <span class="navtext">Bán hàng</span><i class="fas fa-angle-right"></i>
                                <ul class="lv2items">
                                    <li class="lv2"><a href="order.html">Đơn hàng</a></li>
                                    <li class="lv2"><a href="coupon.html">Coupon</a></li>
                                </ul>
                            </li>
                            <li class="lv1"><i class="fas fa-desktop"></i>
                                <span class="navtext">Thiết Kế</span><i class="fas fa-angle-right"></i>
                                <ul class="lv2items">
                                    <li class="lv2"><a href="layout.html">Bố cục</a></li>
                                    <li class="lv2"><a href="banner.html">Banner</a></li>
                                    <li class="lv2"><a href="seotool.html">Công cụ SEO</a></li>
                                </ul>
                            </li>
                            <li class="lv1"><i class="fas fa-list-ul"></i>
                                <span class="navtext">Tiện ích</span><i class="fas fa-angle-right"></i>
                                <ul class="lv2items">
                                    <li class="lv2">Biên soạn</li>
                                    <li class="lv2">Subcategory 2</li>
                                    <li class="lv2">Subcategory 3</li>
                                    <li class="lv2">Subcategory 4</li>
                                    <li class="lv2">Subcategory 5</li>
                                </ul>
                            </li>
                            <li class="lv1"><a href="setting.html"><i class="fas fa-cogs"></i> <span class="navtext">Cài
                                        đặt
                                        chung</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
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
                <div class="tongquan">
                    <div class="totalitem">
                        <div class="centeritemt">
                            <p class="numt">
                                {{number_format($order->getTotalPrice())}}M VND
                            </p>
                            <p class="dest">
                                Tổng doanh thu
                            </p>
                        </div>
                        {{-- <span class="toprightt">
                            <span class="up">
                                <span class="percentt">6%</span> <i class="fas fa-angle-up"></i>
                            </span>
                        </span> --}}
                    </div>
                    <div class="totalitem">
                        <div class="centeritemt">
                            <p class="numt">
                                {{number_format($order->getTotalPriceToday()['total'])}}M VND
                            </p>
                            <p class="dest">
                                Doanh thu trong ngày
                            </p>
                        </div>
                        <span class="toprightt">
                            <span class="up">
                            <span class="percentt">{{$order->getTotalPriceToday()['percent']}}%</span> <i class="fas fa-angle-up"></i>
                            </span>
                        </span>
                    </div>
                    <div class="totalitem">
                        <div class="centeritemt">
                            <p class="numt">
                                {{$order->getNewOrderCount()['count']}}
                            </p>
                            <p class="dest">
                                Đơn hàng mới
                            </p>
                        </div>
                        <span class="toprightt">
                            <span class="down">
                                <span class="percentt">{{$order->getNewOrderCount()['percent']}}%</span> <i class="fas fa-angle-down"></i>
                            </span>
                        </span>
                    </div>
                    <div class="totalitem">
                        <div class="centeritemt">
                            <p class="numt">
                                {{$order->getCompletedOrderCountToday()['count']}}
                            </p>
                            <p class="dest">
                                Đơn hàng thành công <br>
                                (Hôm nay)
                            </p>
                        </div>
                        <span class="toprightt">
                            <span class="up">
                                <span class="percentt">{{$order->getCompletedOrderCountToday()['percent']}}%</span> <i class="fas fa-angle-up"></i>
                            </span>
                        </span>
                    </div>

                    <div class="totalitem">
                        <div class="centeritemt">
                            <p class="numt">
                                {{$review->getNewReviewCount()['count']}}
                            </p>
                            <p class="dest">
                                Đánh giá mới
                            </p>
                        </div>
                        <span class="toprightt">
                            <span class="down">
                                <span class="percentt">{{$review->getNewReviewCount()['percent']}}%</span> <i class="fas fa-angle-down"></i>
                            </span>
                        </span>
                    </div>
                    <div class="totalitem">
                        <div class="centeritemt">
                            <p class="numt">
                                10M
                            </p>
                            <p class="dest">
                                Lượt truy cập <br>
                                (Tháng này)
                            </p>
                        </div>
                        <span class="toprightt">
                            <span class="up">
                                <span class="percentt">35%</span> <i class="fas fa-angle-up"></i>
                            </span>
                        </span>
                    </div>
                </div>
                <div class="chart_number">
                    <div class="chart">
                        <div class="charttitle">
                            <span class="chartext">Biểu Đồ Thống Kê</span>
                            <div class="monthcontrol">
                                <button id="prev"><i class="fas fa-angle-left"></i></button>
                                Tháng <span class="cmonth">1</span>
                                <button id="next"><i class="fas fa-angle-right"></i></button>
                            </div>
                        </div>
                        <div style="height:100%;display:flex;
                                                            align-items: center;padding:10px;"><canvas
                                id="myChart"></canvas></div>
                    </div>
                    <div class="number">
                        <div class="groupcircle">
                            <div class="circle">
                                <p class="title">
                                    Danh Mục Sản phẩm
                                </p>
                                <div class="chartarea">
                                    <canvas id="circlechart"></canvas>
                                </div>
                            </div>
                            <div class="circle">
                                <p class="title">
                                    Đánh Giá
                                </p>
                                <div class="chartarea">
                                    <canvas id="circlechart1"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="newuser">
                            <div class="usertitle">
                                <p class="usertext">Khách hàng mới</p>
                            </div>
                            <div class="tabuser">
                                <table>
                                    <tr>
                                        <th></th>
                                        <th>Tên</th>
                                        <th>Email</th>
                                        <th>Ngày tham gia</th>
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <td><img src="../../assetsAdmin/img/avt.jpg" alt="" class="avtuser"></td>
                                        <td>Minnie</td>
                                        <td>rawofwi@zonikvo.cv</td>
                                        <td>5/12/2040</td>
                                        <td><a href="#viewuser"></a><button
                                                style="background:transparent;border:none;outline:none"><i
                                                    class="far fa-eye" style="color:#9aa0ac"></i></button></a></td>
                                    </tr>
                                    <tr>
                                        <td><img src="../../assetsAdmin/img/avt.jpg" alt="" class="avtuser"></td>
                                        <td>Minnie</td>
                                        <td>rawofwi@zonikvo.cv</td>
                                        <td>5/12/2040</td>
                                        <td><a href="#viewuser"></a><button
                                                style="background:transparent;border:none;outline:none"><i
                                                    class="far fa-eye" style="color:#9aa0ac"></i></button></a></td>
                                    </tr>
                                    <tr>
                                        <td><img src="../../assetsAdmin/img/avt.jpg" alt="" class="avtuser"></td>
                                        <td>Minnie</td>
                                        <td>rawofwi@zonikvo.cv</td>
                                        <td>5/12/2040</td>
                                        <td><a href="#viewuser"></a><button
                                                style="background:transparent;border:none;outline:none"><i
                                                    class="far fa-eye" style="color:#9aa0ac"></i></button></a></td>
                                    </tr>
                                    <tr>
                                        <td><img src="../../assetsAdmin/img/avt.jpg" alt="" class="avtuser"></td>
                                        <td>Minnie</td>
                                        <td>rawofwi@zonikvo.cv</td>
                                        <td>5/12/2040</td>
                                        <td><a href="#viewuser"></a><button
                                                style="background:transparent;border:none;outline:none"><i
                                                    class="far fa-eye" style="color:#9aa0ac"></i></button></a></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tongquan traffic">
                    <div class="totalitem">
                        <div class="centeritemt">
                            <p class="numt">
                                985
                            </p>
                            <p class="dest">
                                Đang Online
                            </p>
                        </div>
                        <span class="toprightt">
                            <span class="up">
                                <span class="percentt">6%</span> <i class="fas fa-angle-up"></i>
                            </span>
                        </span>
                    </div>
                    <div class="totalitem" style="background-image: linear-gradient(to right, #0ac282, #0df3a3);">
                        <div class="centeritemt">
                            <p class="numt">
                                32,55%
                            </p>
                            <p class="dest">
                                Tỷ Lệ Thoát
                            </p>
                        </div>
                        <span class="toprightt">
                            <span class="up">
                                <span class="percentt">20%</span> <i class="fas fa-angle-up"></i>
                            </span>
                        </span>
                    </div>
                    <div class="totalitem" style="background-image:linear-gradient(to right, #fe5d70, #fe909d);">
                        <div class="centeritemt">
                            <p class="numt">
                                4550
                            </p>
                            <p class="dest">
                                Phiên Đăng Nhập
                            </p>
                        </div>
                        <span class="toprightt">
                            <span class="down">
                                <span class="percentt">2%</span> <i class="fas fa-angle-down"></i>
                            </span>
                        </span>
                    </div>
                    <div class="totalitem" style="background-image:linear-gradient(to right, #01a9ac, #60e2e4);">
                        <div class="centeritemt">
                            <p class="numt">
                                3,5 phút
                            </p>
                            <p class="dest">
                                Thời gian trung bình
                            </p>
                        </div>
                        <span class="toprightt">
                            <span class="up">
                                <span class="percentt">10%</span> <i class="fas fa-angle-up"></i>
                            </span>
                        </span>
                    </div>

                    <div class="totalitem" style="background-image:linear-gradient(to right, #9857b4, #c8a7d6);">
                        <div class="centeritemt">
                            <p class="numt">
                                102
                            </p>
                            <p class="dest">
                                Phiên Đăng Nhập Mới
                            </p>
                        </div>
                        <span class="toprightt">
                            <span class="down">
                                <span class="percentt">10%</span> <i class="fas fa-angle-down"></i>
                            </span>
                        </span>
                    </div>
                    <div class="totalitem" style="background-image:linear-gradient(to right, #ffcc02, #ffdf5f);">
                        <div class="centeritemt">
                            <p class="numt">
                                80
                            </p>
                            <p class="dest">
                                Online/Trang
                            </p>
                        </div>
                        <span class="toprightt">
                            <span class="up">
                                <span class="percentt">35%</span> <i class="fas fa-angle-up"></i>
                            </span>
                        </span>
                    </div>
                </div>
                <div class="extrabox">
                    <div class="useractions">
                        <div class="extratitle">
                            <p class="extratext">Lịch sử hoạt động</p>
                        </div>
                        <div class="actionlist">
                            <ul class="actions">
                                <li class="act">
                                    <img src="../../assetsAdmin/img/avt.jpg" alt="" class="actavt">
                                    <span class="acttext"><span class="actname"><a href="#VuCms">VuCms</a>:</span> Lorem
                                        Ipsum is simply dummy text Lorem Ipsum is simply dummy text. <br>

                                    </span>
                                    <span class="acttime"><i class="far fa-clock"></i> 1 phút trước</span>
                                </li>
                                <li class="act">
                                    <img src="../../assetsAdmin/img/avt.jpg" alt="" class="actavt">
                                    <span class="acttext"><span class="actname"><a href="#VuCms">VuCms</a>:</span> Lorem
                                        Ipsum is simply dummy text Lorem Ipsum is simply dummy text. <br>

                                    </span>
                                    <span class="acttime"><i class="far fa-clock"></i> 1 phút trước</span>
                                </li>
                                <li class="act">
                                    <img src="../../assetsAdmin/img/avt.jpg" alt="" class="actavt">
                                    <span class="acttext"><span class="actname"><a href="#VuCms">VuCms</a>:</span> Lorem
                                        Ipsum is simply dummy text Lorem Ipsum is simply dummy text. <br>

                                    </span>
                                    <span class="acttime"><i class="far fa-clock"></i> 1 phút trước</span>
                                </li>
                                <li class="act">
                                    <img src="../../assetsAdmin/img/avt.jpg" alt="" class="actavt">
                                    <span class="acttext"><span class="actname"><a href="#VuCms">VuCms</a>:</span> Lorem
                                        Ipsum is simply dummy text Lorem Ipsum is simply dummy text. <br>

                                    </span>
                                    <span class="acttime"><i class="far fa-clock"></i> 1 phút trước</span>
                                </li>
                                <li class="act">
                                    <img src="../../assetsAdmin/img/avt.jpg" alt="" class="actavt">
                                    <span class="acttext"><span class="actname"><a href="#VuCms">VuCms</a>:</span> Lorem
                                        Ipsum is simply dummy text Lorem Ipsum is simply dummy text. <br>

                                    </span>
                                    <span class="acttime"><i class="far fa-clock"></i> 1 phút trước</span>
                                </li>
                            </ul>
                            <p class="viewmore"><a href="#viewmore">Xem tất cả hoạt động <i
                                        class="fas fa-arrow-right"></i></a></p>
                        </div>
                    </div>
                    <div class="orderlist">
                        <div class="extratitle">
                            <p class="extratext">Đơn hàng</p>
                        </div>
                        <div class="ordertab">
                            <table class="ordertabler">
                                <tr>
                                    <th>STT</th>
                                    <th>SẢN PHẨM</th>
                                    <th>KHÁCH HÀNG</th>
                                    <th>MÃ SỐ VAT</th>
                                    <th>THỜI GIAN</th>
                                    <th>TRẠNG THÁI</th>
                                    <th>GIÁ</th>
                                    <th></th>
                                    <th></th>

                                </tr>
                                <tr>
                                    <td>12577</td>
                                    <td><a href="#product" class="tabname">quick tribe likely vegetable wagon lower face
                                            get whom to wheat dish art live off bad forty guess larger enter friend
                                            breeze month combineIphone X 64GB</a></td>
                                    <td><a href="#customer" class="tabcus">Nicholas Stanley</a></td>
                                    <td>19163</td>
                                    <td>9/22/2047</td>
                                    <td>
                                        <div class="tabstt">
                                            <span class="point" id="not"></span>
                                            <span class="stttext">Đã hủy</span>
                                        </div>
                                    </td>
                                    <td>3M</td>
                                    <td><a href="#manage" class="tabmanage">Quản lí</a> </td>
                                    <td><button class="tabbtn"><i class="fas fa-edit"></i></button></td>

                                </tr>
                                <tr>
                                    <td>12144</td>
                                    <td><a href="#product" class="tabname">aboard shallow small most excited adventure
                                            exchange comfortable fellow energy person easy hurried roll closer does
                                            poetry gun made fix package combine constantly mark</a></td>
                                    <td><a href="#customer" class="tabcus">Aiden Long</a></td>
                                    <td>16623</td>
                                    <td>11/30/2083</td>
                                    <td>
                                        <div class="tabstt">
                                            <span class="point" id="com"></span>
                                            <span class="stttext">Thành công</span>
                                        </div>
                                    </td>
                                    <td>12M</td>
                                    <td><a href="#manage" class="tabmanage">Quản lí</a> </td>
                                    <td><button class="tabbtn"><i class="fas fa-edit"></i></button></td>

                                </tr>
                                <tr>
                                    <td>12577</td>
                                    <td><a href="#product" class="tabname">strength build star ran lot gone serious
                                            softly rocket could last sweet highest crack unusual orange wool park end
                                            month lake noise rubbed elementIphone X 64GB</a></td>
                                    <td><a href="#customer" class="tabcus">Richard Meyer</a></td>
                                    <td>19163</td>
                                    <td>9/22/2047</td>
                                    <td>
                                        <div class="tabstt">
                                            <span class="point" id="pen"></span>
                                            <span class="stttext">Đang đợi</span>
                                        </div>
                                    </td>
                                    <td>3M</td>
                                    <td><a href="#manage" class="tabmanage">Quản lí</a> </td>
                                    <td><button class="tabbtn"><i class="fas fa-edit"></i></button></td>

                                </tr>
                                <tr>
                                    <td>12577</td>
                                    <td><a href="#product" class="tabname">guard seed flower mission leader frog fellow
                                            steam lay dream up free if sad night spell history worried claws factory
                                            fairly thee escape stripIphone X 64GB</a></td>
                                    <td><a href="#customer" class="tabcus">Gary Barnes</a></td>
                                    <td>19163</td>
                                    <td>9/22/2047</td>
                                    <td>
                                        <div class="tabstt">
                                            <span class="point" id="not"></span>
                                            <span class="stttext">Đã hủy</span>
                                        </div>
                                    </td>
                                    <td>3M</td>
                                    <td><a href="#manage" class="tabmanage">Quản lí</a> </td>
                                    <td><button class="tabbtn"><i class="fas fa-edit"></i></button></td>

                                </tr>
                                <tr>
                                    <td>12144</td>
                                    <td><a href="#product" class="tabname">elephant mistake grow fruit fed tax snow
                                            total everywhere tail more able young start plant his getting factor
                                            becoming save easier knew belt year</a></td>
                                    <td><a href="#customer" class="tabcus">Michael Townsend</a></td>
                                    <td>16623</td>
                                    <td>11/30/2083</td>
                                    <td>
                                        <div class="tabstt">
                                            <span class="point" id="com"></span>
                                            <span class="stttext">Thành công</span>
                                        </div>
                                    </td>
                                    <td>12M</td>
                                    <td><a href="#manage" class="tabmanage">Quản lí</a> </td>
                                    <td><button class="tabbtn"><i class="fas fa-edit"></i></button></td>

                                </tr>
                                <tr>
                                    <td>12577</td>
                                    <td><a href="#product" class="tabname">morning our nor clay read produce brief
                                            stretch saddle suggest people death sail several frame support claws nodded
                                            separate tide mind solution angry driverIphone X 64GB</a></td>
                                    <td><a href="#customer" class="tabcus">Kyle Washington</a></td>
                                    <td>19163</td>
                                    <td>9/22/2047</td>
                                    <td>
                                        <div class="tabstt">
                                            <span class="point" id="pen"></span>
                                            <span class="stttext">Đang đợi</span>
                                        </div>
                                    </td>
                                    <td>3M</td>
                                    <td><a href="#manage" class="tabmanage">Quản lí</a> </td>
                                    <td><button class="tabbtn"><i class="fas fa-edit"></i></button></td>

                                </tr>
                                <tr>
                                    <td>12577</td>
                                    <td><a href="#product" class="tabname">supply native possible gravity drink told
                                            sick pleasure firm event contrast immediately about very zoo wall pink
                                            column finger wolf rope myself my ownerIphone X 64GB</a></td>
                                    <td><a href="#customer" class="tabcus">Christopher Russell</a></td>
                                    <td>19163</td>
                                    <td>9/22/2047</td>
                                    <td>
                                        <div class="tabstt">
                                            <span class="point" id="not"></span>
                                            <span class="stttext">Đã hủy</span>
                                        </div>
                                    </td>
                                    <td>3M</td>
                                    <td><a href="#manage" class="tabmanage">Quản lí</a> </td>
                                    <td><button class="tabbtn"><i class="fas fa-edit"></i></button></td>

                                </tr>
                                <tr>
                                    <td>12144</td>
                                    <td><a href="#product" class="tabname">age common offer image glad east dish
                                            creature knowledge path by rice jump sent nuts gather success force region
                                            would problem eager saddle birthday</a></td>
                                    <td><a href="#customer" class="tabcus">Stella Cole</a></td>
                                    <td>16623</td>
                                    <td>11/30/2083</td>
                                    <td>
                                        <div class="tabstt">
                                            <span class="point" id="com"></span>
                                            <span class="stttext">Thành công</span>
                                        </div>
                                    </td>
                                    <td>12M</td>
                                    <td><a href="#manage" class="tabmanage">Quản lí</a> </td>
                                    <td><button class="tabbtn"><i class="fas fa-edit"></i></button></td>

                                </tr>
                            </table>
                        </div>
                        <p class="viewmore"><a href="#viewmore">Xem tất cả đơn hàng <i
                                    class="fas fa-arrow-right"></i></a></p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script src="../../assets/js/jquery.min.js"></script>
    <script src="../../assetsAdmin/js/chart.min.js"></script>
    <script src="../../assetsAdmin/js/index.js"></script>
    <script>
    </script>
</body>

</html>