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
    <title>Admin::Review</title>
</head>

<body>
    <div class="vucms">
        <div class="menubar">
            <div class="menuname">
                <span class="namehiden">
                    VUCMS SYSTEM
                </span><button id="propbar"><i class="fas fa-bars"></i></button>
            </div>
            <div class="options">
                <div class="top">
                    <div class="me">
                        <img src="../../assetsAdmin/img/avt.jpg" alt="">
                        <div class="meme">
                            <p class="online"><span class="pointonline"></span>
                                Online</p>
                            <p class="myname">I am VuCms</p>
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
                            <li class="lv1"><a href="index.html"> <i class="fas fa-tachometer-alt"></i> <span
                                        class="navtext">Bảng điều khiển</span> </a> </li>
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
                <div class="headtitle">
                    <p>ĐÁNH GIÁ</p>
                    <div class="breadcrumb">
                        <ul>
                            <li><span class="sub">Quản lí</span></li>
                            <li><span class="aright"><i class="fas fa-angle-right"></i></span></li>
                            <li><span class="main"><a href="">Đánh Giá</a></span></li>

                        </ul>
                    </div>

                </div>
                <div class="tongquan tabcat">
                    <div class="totalitem">
                        <div class="centeritemt">
                            <p class="numt">
                                550
                            </p>
                            <p class="dest">
                                Tổng Đánh giá
                            </p>
                        </div>
                        <span class="toprightt">
                            <span class="up">
                                <span class="percentt">6%</span> <i class="fas fa-angle-up"></i>
                            </span>
                        </span>
                    </div>
                    <div class="totalitem">
                        <div class="centeritemt">
                            <p class="numt">
                                15
                            </p>
                            <p class="dest">
                                Đánh giá hôm nay
                            </p>
                        </div>
                        <span class="toprightt">
                            <span class="up">
                                <span class="percentt">20%</span> <i class="fas fa-angle-up"></i>
                            </span>
                        </span>
                    </div>
                    <div class="totalitem">
                        <div class="centeritemt">
                            <p class="numt">
                                45
                            </p>
                            <p class="dest">
                                Đánh giá tốt
                            </p>
                        </div>
                        <span class="toprightt">
                            <span class="down">
                                <span class="percentt">2%</span> <i class="fas fa-angle-down"></i>
                            </span>
                        </span>
                    </div>
                    <div class="totalitem">
                        <div class="centeritemt">
                            <p class="numt">
                                12
                            </p>
                            <p class="dest">
                                đánh giá tệ
                            </p>
                        </div>
                        <span class="toprightt">
                            <span class="up">
                                <span class="percentt">10%</span> <i class="fas fa-angle-up"></i>
                            </span>
                        </span>
                    </div>

                    <div class="totalitem">
                        <div class="centeritemt">
                            <p class="numt">
                                4.5
                            </p>
                            <p class="dest">
                                Điểm trung bình
                            </p>
                        </div>
                        <span class="toprightt">
                            <span class="down">
                                <span class="percentt">10%</span> <i class="fas fa-angle-down"></i>
                            </span>
                        </span>
                    </div>
                    <div class="totalitem">
                        <div class="centeritemt">
                            <p class="numt">
                                5
                            </p>
                            <p class="dest">
                                Đánh giá bị ẩn
                            </p>
                        </div>
                        <span class="toprightt">
                            <span class="up">
                                <span class="percentt">3%</span> <i class="fas fa-angle-up"></i>
                            </span>
                        </span>
                    </div>
                </div>
                <div class="catlist">
                    <p class="cattitle">
                        <i class="fas fa-list-ul"></i> Đánh Giá Sản Phẩm
                    </p>
                    <div class="tabcat tabvote" id="listbox">
                        <table border="1">
                            <tr>
                                <th>Tên khách hàng</th>
                                <th>Sao</th>
                                <th>Nội dung</th>
                                <th>Thời Gian</th>
                                <th>Xem</th>
                            </tr>
                            <tr>
                                <td><a href="#customer">Cecilia Hicks</a></td>
                                <td>2 <i class="far fa-star" style="color:orange"></i></td>
                                <td>broken electric west above mine fly split police entire done exciting easier another
                                    eight massage greatest discussion accept spend bowl has fresh because log</td>
                                <td>1/18/2045</td>
                                <td><a href="#" target="__blank"><button><i class="far fa-eye"></i></button></a></td>
                            </tr>
                            <tr>
                                <td><a href="#customer">Mitchell Garza</a></td>
                                <td>4 <i class="far fa-star" style="color:orange"></i></td>
                                <td>shadow simple doll molecular three elephant got studied she understanding region
                                    lose judge barn pay becoming headed exciting south gold nice noted rise room</td>
                                <td>9/21/2031</td>
                                <td><a href="#" target="__blank"><button><i class="far fa-eye"></i></button></a></td>
                            </tr>
                            <tr>
                                <td><a href="#customer">Larry Frazier</a></td>
                                <td>2 <i class="far fa-star" style="color:orange"></i></td>
                                <td>short purpose strip hidden automobile smooth value apart evening throat largest
                                    subject will only mood shine color mark island smaller slowly construction fence
                                    mountain</td>
                                <td>9/16/2079</td>
                                <td><a href="#" target="__blank"><button><i class="far fa-eye"></i></button></a></td>
                            </tr>
                            <tr>
                                <td><a href="#customer">Flora Cortez</a></td>
                                <td>4 <i class="far fa-star" style="color:orange"></i></td>
                                <td>thing string observe nervous stream porch sight mouse term maybe first fight upper
                                    pressure lake pupil method which tail move poor curious pitch matter</td>
                                <td>5/28/2042</td>
                                <td><a href="#" target="__blank"><button><i class="far fa-eye"></i></button></a></td>
                            </tr>
                            <tr>
                                <td><a href="#customer">Emma Wilkins</a></td>
                                <td>5 <i class="far fa-star" style="color:orange"></i></td>
                                <td>goes tobacco hour outside hollow ahead plus ability orbit matter nails anyone
                                    exciting before herself toward traffic snake length fat noun earlier shallow cloud
                                </td>
                                <td>9/10/2095</td>
                                <td><a href="#" target="__blank"><button><i class="far fa-eye"></i></button></a></td>
                            </tr>
                            <tr>
                                <td><a href="#customer">Danny Bush</a></td>
                                <td>3 <i class="far fa-star" style="color:orange"></i></td>
                                <td>supply bar letter third shot public firm attention another sweet dozen unit break
                                    sang including damage grown drew horn climate whispered hot sure girl</td>
                                <td>8/7/2026</td>
                                <td><a href="#" target="__blank"><button><i class="far fa-eye"></i></button></a></td>
                            </tr>
                            <tr>
                                <td><a href="#customer">Helena Reese</a></td>
                                <td>2 <i class="far fa-star" style="color:orange"></i></td>
                                <td>listen badly tower sitting series express late tried ocean anybody quickly disease
                                    spend mirror brass pony itself mental support breakfast station stems smooth rate
                                </td>
                                <td>2/7/2093</td>
                                <td><a href="#" target="__blank"><button><i class="far fa-eye"></i></button></a></td>
                            </tr>
                            <tr>
                                <td><a href="#customer">George Moreno</a></td>
                                <td>2 <i class="far fa-star" style="color:orange"></i></td>
                                <td>attack determine speech writing swept natural year men taste former thousand rich
                                    rock gun top coach weather satisfied cow brown primitive drive hungry newspaper</td>
                                <td>7/23/2094</td>
                                <td><a href="#" target="__blank"><button><i class="far fa-eye"></i></button></a></td>
                            </tr>
                            <tr>
                                <td><a href="#customer">Lois Weaver</a></td>
                                <td>3 <i class="far fa-star" style="color:orange"></i></td>
                                <td>shine blue shells glass start machinery where news everywhere beautiful conversation
                                    tower replied alike having floating green attack fairly powerful ants certainly
                                    plenty simply</td>
                                <td>10/16/2062</td>
                                <td><a href="#" target="__blank"><button><i class="far fa-eye"></i></button></a></td>
                            </tr>
                            <tr>
                                <td><a href="#customer">Jeffrey Harper</a></td>
                                <td>3 <i class="far fa-star" style="color:orange"></i></td>
                                <td>couple caught found adult importance review vessels substance perfect fed mental
                                    happy being planned society hair copy north sent worry able instead invented scared
                                </td>
                                <td>9/2/2024</td>
                                <td><a href="#" target="__blank"><button><i class="far fa-eye"></i></button></a></td>
                            </tr>
                            <tr>
                                <td><a href="#customer">Floyd Stevenson</a></td>
                                <td>4 <i class="far fa-star" style="color:orange"></i></td>
                                <td>become floating belong hurried dog rise column studied experiment helpful cool movie
                                    sheet putting have solution your climb camera single property flow natural involved
                                </td>
                                <td>12/11/2031</td>
                                <td><a href="#" target="__blank"><button><i class="far fa-eye"></i></button></a></td>
                            </tr>
                            <tr>
                                <td><a href="#customer">Jimmy Figueroa</a></td>
                                <td>5 <i class="far fa-star" style="color:orange"></i></td>
                                <td>ahead include blood determine church composed usually taken frog tobacco wool daily
                                    badly sides industrial physical hunt property threw car exact whale night stove</td>
                                <td>10/21/2119</td>
                                <td><a href="#" target="__blank"><button><i class="far fa-eye"></i></button></a></td>
                            </tr>
                            <tr>
                                <td><a href="#customer">William Dawson</a></td>
                                <td>3 <i class="far fa-star" style="color:orange"></i></td>
                                <td>sport substance piece red age plain needle protection planet frog pole felt alone
                                    section hour train therefore ants religious because company create soldier thus</td>
                                <td>5/7/2083</td>
                                <td><a href="#" target="__blank"><button><i class="far fa-eye"></i></button></a></td>
                            </tr>
                            <tr>
                                <td><a href="#customer">Jose Fuller</a></td>
                                <td>1 <i class="far fa-star" style="color:orange"></i></td>
                                <td>tape potatoes brother continent rest possibly tax driver prevent language seems
                                    strike onto record shorter lovely major stood number stove clothes shadow reason
                                    sold</td>
                                <td>2/13/2093</td>
                                <td><a href="#" target="__blank"><button><i class="far fa-eye"></i></button></a></td>
                            </tr>
                            <tr>
                                <td><a href="#customer">Lillie Baker</a></td>
                                <td>2 <i class="far fa-star" style="color:orange"></i></td>
                                <td>return native particles mental strength step process many acres article husband
                                    toward brass vowel treated consist cook another border happy steel begun fairly wife
                                </td>
                                <td>7/22/2097</td>
                                <td><a href="#" target="__blank"><button><i class="far fa-eye"></i></button></a></td>
                            </tr>
                            <tr>
                                <td><a href="#customer">Mathilda Chavez</a></td>
                                <td>3 <i class="far fa-star" style="color:orange"></i></td>
                                <td>doll easy bell separate action dance wool adventure power planning blood claws
                                    street capital blow swimming oldest drink doing opposite crack last operation lion
                                </td>
                                <td>7/12/2073</td>
                                <td><a href="#" target="__blank"><button><i class="far fa-eye"></i></button></a></td>
                            </tr>
                            <tr>
                                <td><a href="#customer">Leo Mathis</a></td>
                                <td>3 <i class="far fa-star" style="color:orange"></i></td>
                                <td>thread detail though husband sink whistle in within magnet mine shake tried writing
                                    development ruler individual gradually trail numeral average halfway brain fear
                                    shirt</td>
                                <td>12/8/2097</td>
                                <td><a href="#" target="__blank"><button><i class="far fa-eye"></i></button></a></td>
                            </tr>
                        </table>
                        <div class="pagination">
                            <ul>
                                <li class="active"><a href="javascript:void(0)">1</a></li>
                                <li><a href="javascript:void(0)">2</a></li>
                                <li><a href="javascript:void(0)">3</a></li>
                                <li><a href="javascript:void(0)"><i class="fas fa-angle-right"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fas fa-step-forward"></i></a></li>
                            </ul>
                        </div>
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