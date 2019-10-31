<!DOCTYPE html>
<html lang="en">

<head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <meta http-equiv="X-UA-Compatible" content="ie=edge">
          <link rel="stylesheet" href="../../assetsAdmin/css/bootstrap-reboot.min.css">
          <link rel="stylesheet" href="../../assetsAdmin/css/index.css">
          <link rel="stylesheet" href="../../assetsAdmin/css/cat.css">
          <link rel="stylesheet" href="../../assetsAdmin/css/order.css">
          <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
          <link rel="stylesheet" href="../../assetsAdmin/css/chart.min.css">
          <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
                    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
                    crossorigin="anonymous">
          <title>Admin::Customers</title>
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
                                                                      <p class="online"><span
                                                                                          class="pointonline"></span>
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
                                                                      <li class="lv1"><a href="index.html">                                                                                 <i class="fas fa-tachometer-alt"></i>                                                                                 <span class="navtext">Bảng điều                                                                                           khiển</span>                                                                       </a>                                                                       </li>
                                                                      <li class="lv1"><i class="fas fa-chart-bar"></i>
                                                                                <span class="navtext">Quản lí</span><i
                                                                                          class="fas fa-angle-right"></i>
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
                                                                      <li class="lv1"><i class="fas fa-users"></i> <span
                                                                                          class="navtext">Khách hàng</span><i
                                                                                          class="fas fa-angle-right"></i>
                                                                                          <ul class="lv2items">
                                                                                                    <li class="lv2"><a href="customer.html">Danh sách</a></li>
                                                                                                    <li class="lv2"><a href="customer_group.html">Nhóm</a></li>
                                                                                                    <li class="lv2"><a href="customer_ban.html">Danh sách bị cấm</a></li>
                                                                                          </ul>
                                                                      </li>
                                                                      <li class="lv1"><i
                                                                                          class="fas fa-shopping-cart"></i>
                                                                                <span class="navtext">Bán hàng</span><i
                                                                                          class="fas fa-angle-right"></i>
                                                                                          <ul class="lv2items">
                                                                                                    <li class="lv2"><a href="order.html">Đơn hàng</a></li>
                                                                                                    <li class="lv2"><a href="coupon.html">Coupon</a></li>
                                                                                          </ul>
                                                                      </li>
                                                                      <li class="lv1"><i class="fas fa-desktop"></i>
                                                                                <span class="navtext">Thiết Kế</span><i
                                                                                          class="fas fa-angle-right"></i>
                                                                                <ul class="lv2items">
                                                                                          <li class="lv2"><a href="layout.html">Bố cục</a></li>
                                                                                          <li class="lv2"><a href="banner.html">Banner</a></li>
                                                                                          <li class="lv2"><a href="seotool.html">Công cụ SEO</a></li>
                                                                                </ul>
                                                                      </li>     
                                                                      <li class="lv1"><i class="fas fa-list-ul"></i>
                                                                                <span class="navtext">Tiện ích</span><i
                                                                                          class="fas fa-angle-right"></i>
                                                                                <ul class="lv2items">
                                                                                          <li class="lv2">Biên soạn</li>
                                                                                          <li class="lv2">Subcategory 2</li>
                                                                                          <li class="lv2">Subcategory 3</li>
                                                                                          <li class="lv2">Subcategory 4</li>
                                                                                          <li class="lv2">Subcategory 5</li>
                                                                                </ul>
                                                                      </li>     
                                                                      <li class="lv1"><a href="setting.html"><i class="fas fa-cogs"></i> <span
                                                                                class="navtext">Cài đặt
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
                                                                      <li><i class="fas fa-id-card-alt"></i> <a
                                                                                          href="#">&nbsp; Trang Cá
                                                                                          Nhân</a></li>
                                                                      <li><i class="far fa-envelope"> </i> <a
                                                                                          href="#">&nbsp; Tin nhắn của
                                                                                          bạn</a></li>
                                                                      <li><i class="far fa-bell"></i> <a href="#">&nbsp;
                                                                                          Tất cả thông bá</a>o</li>
                                                                      <li><i class="fas fa-sign-out-alt"></i> <a
                                                                                          href="#">&nbsp; Đăng xuất</a>
                                                                      </li>
                                                            </ul>
                                                  </li>
                                        </ul>
                              </div>
                              <div class="bottom">
                                        <div class="headtitle">
                                                  <p style="max-width:200px;">KHÁCH HÀNG</p>
                                                  <div class="breadcrumb">
                                                            <ul>
                                                                      <li><span class="sub">Quản lí</span></li>
                                                                      <li><span class="aright"><i class="fas fa-angle-right"></i></span></li>
                                                                      <li><span class="main"><a href="">Khách Hàng</a></span></li>
                                                                      
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
                                                                                Tổng khách hàng
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
                                                                                Khách Hàng Mới
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
                                                                                Khách Hàng Tích Cực
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
                                                                                          Khách hàng Thân thiết
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
                                                                                100
                                                                      </p>
                                                                      <p class="dest">
                                                                                          Khách Hàng Tiềm Năng
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
                                                                                Khách Hàng Bị Cấm
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
                                                  <div class="cattitle">
                                                            <span><i class="fas fa-list-ul"></i> Tất Cả Đơn Hàng</span>
                                                            <ul class="catright">
                                                                      <li><i class="fas fa-filter"></i> Tất Cả <i class="fas fa-angle-down"></i>
                                                                                <ul style="width:auto;">
                                                                                          <li>Tất Cả </li>
                                                                                          <li>Khách Hàng Mới</li>
                                                                                          <li>Khách Hàng Tích Cực</li>
                                                                                          <li>Khách hàng Thân thiết</li>
                                                                                          <li>Khách Hàng Tiềm Năng</li>
                                                                                          <li>Khách Hàng Bị Cấm</li>
                                                                                </ul></li>
                                                                      <li><i class="fas fa-sort-amount-up"></i> Sắp Xếp <i class="fas fa-angle-down"></i>
                                                                                <ul>
                                                                                          <li>Mặc định</li>
                                                                                          <li><i class="fas fa-sort-amount-up"></i> Giá trị </li>
                                                                                          <li><i class="fas fa-sort-amount-down"></i> Giá trị </li>
                                                                                          <li><i class="far fa-clock"></i> Thời gian</li>
                                                                                </ul></li>
                                                                      <li><i class="fas fa-radiation"></i> Thao Tác <i class="fas fa-angle-down"></i>
                                                                                <ul>
                                                                                          <li><a href="addcustomer.html" style="color:#555"><i class="fas fa-plus-circle"></i> Thêm mới</a></li>
                                                                                          <li><i class="far fa-trash-alt"></i> Xóa</li>
                                                                                          <li><a href="editcustomer.html" style="color:#555"><i class="far fa-edit"></i> Cập Nhật</a></li>
                                                                                </ul>
                                                                      </li>
                                                            </ul>
                                                  </div>
                                                  <div class="tabcat taborder" id="listbox">
                                                            <table border="1">
                                                                      <tr>
                                                                                <th><input type="checkbox" id="checkall"></th>
                                                                                <th>MKH</th>
                                                                                <th>Tên Khách Hàng</th>
                                                                                <th>Email</th>
                                                                                <th>Nhóm Khách Hàng</th>
                                                                                <th>Trạng Thái</th>
                                                                                <th>Tổng Đơn Hàng</th>
                                                                                <th>Tông Tiêu Dùng</th>
                                                                                <th>IP</th>
                                                                                <th>Ngày Tham Gia</th>
                                                                                <th>Thao tác</th>
                                                                      </tr>
                                                                      <tr>
                                                                                <td><input type="checkbox" id="check"></td>
                                                                                <td>R14904</td>
                                                                                <td><a href="#customer">Minnie Sparks</a></td>
                                                                                <td>re@gogupto.pt</td>
                                                                                <td>Mặc Định</td>
                                                                                <td><div class="tabstt">
                                                                                                    <span class="point" id="com"></span>
                                                                                                    <span class="stttext">Hoạt Động</span>
                                                                                          </div></td>         
                                                                                <td>19</td>
                                                                                <td>19,000,000 VND</td>
                                                                                <td>39.81.97.157</td>
                                                                                          <td>11/9/2078</td>
                                                                                <td><div class="lasttd">
                                                                                          <a href="#" target="__blank"><button><i class="far fa-eye"></i></button></a>
                                                                                          <li id="showoption"><i class="fas fa-angle-down"></i>
                                                                                                    <ul>
                                                                                                               <li><i class="far fa-trash-alt"></i> Xóa</li>
                                                                                                               <li><a href="editcustomer.html" style="color:#555"><i class="far fa-edit"></i> Cập Nhật</a></li>
                                                                                                    </ul>
                                                                                          </li>
                                                                                </div>
                                                                                </td>
                                                                      </tr>
                                                                      <tr>
                                                                                <td><input type="checkbox" id="check"></td>
                                                                                <td>R19573</td>
                                                                                <td><a href="#customer">David Morgan</a></td>
                                                                                <td>sikha@bagumito.tw</td>
                                                                                <td>Mặc Định</td>
                                                                                <td><div class="tabstt">
                                                                                                    <span class="point" id="com"></span>
                                                                                                    <span class="stttext">Hoạt Động</span>
                                                                                          </div></td>         
                                                                                <td>98</td>
                                                                                <td>27,000,000 VND</td>
                                                                                <td>132.25.231.18</td>
                                                                                          <td>3/12/2041</td>
                                                                                <td><div class="lasttd">
                                                                                          <a href="#" target="__blank"><button><i class="far fa-eye"></i></button></a>
                                                                                          <li id="showoption"><i class="fas fa-angle-down"></i>
                                                                                                    <ul>
                                                                                                               <li><i class="far fa-trash-alt"></i> Xóa</li>
                                                                                                              <li><a href="editcustomer.html" style="color:#555"><i class="far fa-edit"></i> Cập Nhật</a></li>
                                                                                                    </ul>
                                                                                          </li>
                                                                                </div>
                                                                                </td>
                                                                      </tr>
                                                                      <tr>
                                                                                <td><input type="checkbox" id="check"></td>
                                                                                <td>R14378</td>
                                                                                <td><a href="#customer">Clifford Hicks</a></td>
                                                                                <td>keupacu@reniju.bh</td>
                                                                                <td>Mặc Định</td>
                                                                                <td><div class="tabstt">
                                                                                                    <span class="point" id="com"></span>
                                                                                                    <span class="stttext">Hoạt Động</span>
                                                                                          </div></td>         
                                                                                <td>28</td>
                                                                                <td>10,000,000 VND</td>
                                                                                <td>144.176.161.212</td>
                                                                                <td>12/10/2070</td>
                                                                                <td><div class="lasttd">
                                                                                          <a href="#" target="__blank"><button><i class="far fa-eye"></i></button></a>
                                                                                          <li id="showoption"><i class="fas fa-angle-down"></i>
                                                                                                    <ul>
                                                                                                               <li><i class="far fa-trash-alt"></i> Xóa</li>
                                                                                                              <li><a href="editcustomer.html" style="color:#555"><i class="far fa-edit"></i> Cập Nhật</a></li>
                                                                                                    </ul>
                                                                                          </li>
                                                                                </div>
                                                                                </td>
                                                                      </tr>
                                                                      <tr>
                                                                                <td><input type="checkbox" id="check"></td>
                                                                                <td>R18513</td>
                                                                                <td><a href="#customer">Annie Page</a></td>
                                                                                <td>wokaci@ocerupgu.ne</td>
                                                                                <td>Mặc Định</td>
                                                                                <td><div class="tabstt">
                                                                                                    <span class="point" id="com"></span>
                                                                                                    <span class="stttext">Hoạt Động</span>
                                                                                          </div></td>         
                                                                                <td>75</td>
                                                                                <td>7,000,000 VND</td>
                                                                                <td>52.129.101.160</td>
                                                                                          <td>10/18/2053</td>
                                                                                <td><div class="lasttd">
                                                                                          <a href="#" target="__blank"><button><i class="far fa-eye"></i></button></a>
                                                                                          <li id="showoption"><i class="fas fa-angle-down"></i>
                                                                                                    <ul>
                                                                                                               <li><i class="far fa-trash-alt"></i> Xóa</li>
                                                                                                              <li><a href="editcustomer.html" style="color:#555"><i class="far fa-edit"></i> Cập Nhật</a></li>
                                                                                                    </ul>
                                                                                          </li>
                                                                                </div>
                                                                                </td>
                                                                      </tr>
                                                                      <tr>
                                                                                <td><input type="checkbox" id="check"></td>
                                                                                <td>R13579</td>
                                                                                <td><a href="#customer">Eula Medina</a></td>
                                                                                <td>wu@kehju.sj</td>
                                                                                <td>Mặc Định</td>
                                                                                <td><div class="tabstt">
                                                                                                    <span class="point" id="com"></span>
                                                                                                    <span class="stttext">Hoạt Động</span>
                                                                                          </div></td>         
                                                                                <td>33</td>
                                                                                <td>6,000,000 VND</td>
                                                                                <td>207.223.37.242</td>
                                                                                          <td>1/7/2117</td>
                                                                                <td><div class="lasttd">
                                                                                          <a href="#" target="__blank"><button><i class="far fa-eye"></i></button></a>
                                                                                          <li id="showoption"><i class="fas fa-angle-down"></i>
                                                                                                    <ul>
                                                                                                               <li><i class="far fa-trash-alt"></i> Xóa</li>
                                                                                                              <li><a href="editcustomer.html" style="color:#555"><i class="far fa-edit"></i> Cập Nhật</a></li>
                                                                                                    </ul>
                                                                                          </li>
                                                                                </div>
                                                                                </td>
                                                                      </tr>
                                                                      <tr>
                                                                                <td><input type="checkbox" id="check"></td>
                                                                                <td>R18766</td>
                                                                                <td><a href="#customer">Erik Delgado</a></td>
                                                                                <td>ewa@co.td</td>
                                                                                <td>Mặc Định</td>
                                                                                <td><div class="tabstt">
                                                                                                    <span class="point" id="com"></span>
                                                                                                    <span class="stttext">Hoạt Động</span>
                                                                                          </div></td>         
                                                                                <td>34</td>
                                                                                <td>22,000,000 VND</td>
                                                                                <td>176.192.231.225</td>
                                                                                          <td>10/20/2040</td>
                                                                                <td><div class="lasttd">
                                                                                          <a href="#" target="__blank"><button><i class="far fa-eye"></i></button></a>
                                                                                          <li id="showoption"><i class="fas fa-angle-down"></i>
                                                                                                    <ul>
                                                                                                               <li><i class="far fa-trash-alt"></i> Xóa</li>
                                                                                                              <li><a href="editcustomer.html" style="color:#555"><i class="far fa-edit"></i> Cập Nhật</a></li>
                                                                                                    </ul>
                                                                                          </li>
                                                                                </div>
                                                                                </td>
                                                                      </tr>
                                                                      <tr>
                                                                                <td><input type="checkbox" id="check"></td>
                                                                                <td>R15886</td>
                                                                                <td><a href="#customer">Roy Ray</a></td>
                                                                                <td>dapdunuc@daopgar.bw</td>
                                                                                <td>Mặc Định</td>
                                                                                <td><div class="tabstt">
                                                                                                    <span class="point" id="com"></span>
                                                                                                    <span class="stttext">Hoạt Động</span>
                                                                                          </div></td>         
                                                                                <td>72</td>
                                                                                <td>35,000,000 VND</td>
                                                                                <td>217.1.194.140</td>
                                                                                          <td>5/4/2059</td>
                                                                                <td><div class="lasttd">
                                                                                          <a href="#" target="__blank"><button><i class="far fa-eye"></i></button></a>
                                                                                          <li id="showoption"><i class="fas fa-angle-down"></i>
                                                                                                    <ul>
                                                                                                               <li><i class="far fa-trash-alt"></i> Xóa</li>
                                                                                                              <li><a href="editcustomer.html" style="color:#555"><i class="far fa-edit"></i> Cập Nhật</a></li>
                                                                                                    </ul>
                                                                                          </li>
                                                                                </div>
                                                                                </td>
                                                                      </tr>
                                                                      <tr>
                                                                                <td><input type="checkbox" id="check"></td>
                                                                                <td>R11375</td>
                                                                                <td><a href="#customer">Jeffery Taylor</a></td>
                                                                                <td>bosoferi@obougoni.gg</td>
                                                                                <td>Mặc Định</td>
                                                                                <td><div class="tabstt">
                                                                                                    <span class="point" id="com"></span>
                                                                                                    <span class="stttext">Hoạt Động</span>
                                                                                          </div></td>         
                                                                                <td>26</td>
                                                                                <td>19,000,000 VND</td>
                                                                                <td>25.164.155.39</td>
                                                                                          <td>11/4/2038</td>
                                                                                <td><div class="lasttd">
                                                                                          <a href="#" target="__blank"><button><i class="far fa-eye"></i></button></a>
                                                                                          <li id="showoption"><i class="fas fa-angle-down"></i>
                                                                                                    <ul>
                                                                                                               <li><i class="far fa-trash-alt"></i> Xóa</li>
                                                                                                              <li><a href="editcustomer.html" style="color:#555"><i class="far fa-edit"></i> Cập Nhật</a></li>
                                                                                                    </ul>
                                                                                          </li>
                                                                                </div>
                                                                                </td>
                                                                      </tr>
                                                                      <tr>
                                                                                <td><input type="checkbox" id="check"></td>
                                                                                <td>R10717</td>
                                                                                <td><a href="#customer">Zachary Jordan</a></td>
                                                                                <td>iw@lu.er</td>
                                                                                <td>Mặc Định</td>
                                                                                <td><div class="tabstt">
                                                                                                    <span class="point" id="com"></span>
                                                                                                    <span class="stttext">Hoạt Động</span>
                                                                                          </div></td>         
                                                                                <td>17</td>
                                                                                <td>35,000,000 VND</td>
                                                                                <td>2.222.140.64</td>
                                                                                          <td>3/24/2073</td>
                                                                                <td><div class="lasttd">
                                                                                          <a href="#" target="__blank"><button><i class="far fa-eye"></i></button></a>
                                                                                          <li id="showoption"><i class="fas fa-angle-down"></i>
                                                                                                    <ul>
                                                                                                               <li><i class="far fa-trash-alt"></i> Xóa</li>
                                                                                                              <li><a href="editcustomer.html" style="color:#555"><i class="far fa-edit"></i> Cập Nhật</a></li>
                                                                                                    </ul>
                                                                                          </li>
                                                                                </div>
                                                                                </td>
                                                                      </tr>
                                                                      <tr>
                                                                                <td><input type="checkbox" id="check"></td>
                                                                                <td>R10372</td>
                                                                                <td><a href="#customer">Kevin Hayes</a></td>
                                                                                <td>ronfora@metiosu.tc</td>
                                                                                <td>Mặc Định</td>
                                                                                <td><div class="tabstt">
                                                                                                    <span class="point" id="com"></span>
                                                                                                    <span class="stttext">Hoạt Động</span>
                                                                                          </div></td>         
                                                                                <td>32</td>
                                                                                <td>16,000,000 VND</td>
                                                                                <td>56.169.79.17</td>
                                                                                          <td>10/14/2095</td>
                                                                                <td><div class="lasttd">
                                                                                          <a href="#" target="__blank"><button><i class="far fa-eye"></i></button></a>
                                                                                          <li id="showoption"><i class="fas fa-angle-down"></i>
                                                                                                    <ul>
                                                                                                               <li><i class="far fa-trash-alt"></i> Xóa</li>
                                                                                                              <li><a href="editcustomer.html" style="color:#555"><i class="far fa-edit"></i> Cập Nhật</a></li>
                                                                                                    </ul>
                                                                                          </li>
                                                                                </div>
                                                                                </td>
                                                                      </tr>
                                                                      <tr>
                                                                                <td><input type="checkbox" id="check"></td>
                                                                                <td>R11032</td>
                                                                                <td><a href="#customer">Teresa Joseph</a></td>
                                                                                <td>nobti@zib.fr</td>
                                                                                <td>Mặc Định</td>
                                                                                <td><div class="tabstt">
                                                                                                    <span class="point" id="com"></span>
                                                                                                    <span class="stttext">Hoạt Động</span>
                                                                                          </div></td>         
                                                                                <td>11</td>
                                                                                <td>48,000,000 VND</td>
                                                                                <td>105.4.72.98</td>
                                                                                          <td>5/20/2080</td>
                                                                                <td><div class="lasttd">
                                                                                          <a href="#" target="__blank"><button><i class="far fa-eye"></i></button></a>
                                                                                          <li id="showoption"><i class="fas fa-angle-down"></i>
                                                                                                    <ul>
                                                                                                               <li><i class="far fa-trash-alt"></i> Xóa</li>
                                                                                                              <li><a href="editcustomer.html" style="color:#555"><i class="far fa-edit"></i> Cập Nhật</a></li>
                                                                                                    </ul>
                                                                                          </li>
                                                                                </div>
                                                                                </td>
                                                                      </tr>
                                                                      <tr>
                                                                                <td><input type="checkbox" id="check"></td>
                                                                                <td>R16941</td>
                                                                                <td><a href="#customer">Leon Curtis</a></td>
                                                                                <td>fevulne@orupejor.do</td>
                                                                                <td>Mặc Định</td>
                                                                                <td><div class="tabstt">
                                                                                                    <span class="point" id="com"></span>
                                                                                                    <span class="stttext">Hoạt Động</span>
                                                                                          </div></td>         
                                                                                <td>1</td>
                                                                                <td>25,000,000 VND</td>
                                                                                <td>145.183.88.63</td>
                                                                                          <td>6/21/2064</td>
                                                                                <td><div class="lasttd">
                                                                                          <a href="#" target="__blank"><button><i class="far fa-eye"></i></button></a>
                                                                                          <li id="showoption"><i class="fas fa-angle-down"></i>
                                                                                                    <ul>
                                                                                                               <li><i class="far fa-trash-alt"></i> Xóa</li>
                                                                                                              <li><a href="editcustomer.html" style="color:#555"><i class="far fa-edit"></i> Cập Nhật</a></li>
                                                                                                    </ul>
                                                                                          </li>
                                                                                </div>
                                                                                </td>
                                                                      </tr>
                                                                      <tr>
                                                                                <td><input type="checkbox" id="check"></td>
                                                                                <td>R18579</td>
                                                                                <td><a href="#customer">Madge Santiago</a></td>
                                                                                <td>dalli@doba.es</td>
                                                                                <td>Mặc Định</td>
                                                                                <td><div class="tabstt">
                                                                                                    <span class="point" id="com"></span>
                                                                                                    <span class="stttext">Hoạt Động</span>
                                                                                          </div></td>         
                                                                                <td>52</td>
                                                                                <td>20,000,000 VND</td>
                                                                                <td>144.147.106.89</td>
                                                                                          <td>2/12/2032</td>
                                                                                <td><div class="lasttd">
                                                                                          <a href="#" target="__blank"><button><i class="far fa-eye"></i></button></a>
                                                                                          <li id="showoption"><i class="fas fa-angle-down"></i>
                                                                                                    <ul>
                                                                                                               <li><i class="far fa-trash-alt"></i> Xóa</li>
                                                                                                              <li><a href="editcustomer.html" style="color:#555"><i class="far fa-edit"></i> Cập Nhật</a></li>
                                                                                                    </ul>
                                                                                          </li>
                                                                                </div>
                                                                                </td>
                                                                      </tr>
                                                                      <tr>
                                                                                <td><input type="checkbox" id="check"></td>
                                                                                <td>R16643</td>
                                                                                <td><a href="#customer">Cody McBride</a></td>
                                                                                <td>il@kaije.so</td>
                                                                                <td>Mặc Định</td>
                                                                                <td><div class="tabstt">
                                                                                                    <span class="point" id="com"></span>
                                                                                                    <span class="stttext">Hoạt Động</span>
                                                                                          </div></td>         
                                                                                <td>15</td>
                                                                                <td>44,000,000 VND</td>
                                                                                <td>61.26.67.219</td>
                                                                                          <td>9/6/2053</td>
                                                                                <td><div class="lasttd">
                                                                                          <a href="#" target="__blank"><button><i class="far fa-eye"></i></button></a>
                                                                                          <li id="showoption"><i class="fas fa-angle-down"></i>
                                                                                                    <ul>
                                                                                                               <li><i class="far fa-trash-alt"></i> Xóa</li>
                                                                                                              <li><a href="editcustomer.html" style="color:#555"><i class="far fa-edit"></i> Cập Nhật</a></li>
                                                                                                    </ul>
                                                                                          </li>
                                                                                </div>
                                                                                </td>
                                                                      </tr>
                                                                      <tr>
                                                                                <td><input type="checkbox" id="check"></td>
                                                                                <td>R12608</td>
                                                                                <td><a href="#customer">Edith Walker</a></td>
                                                                                <td>fabho@tugiv.bi</td>
                                                                                <td>Mặc Định</td>
                                                                                <td><div class="tabstt">
                                                                                                    <span class="point" id="com"></span>
                                                                                                    <span class="stttext">Hoạt Động</span>
                                                                                          </div></td>         
                                                                                <td>88</td>
                                                                                <td>15,000,000 VND</td>
                                                                                <td>43.47.19.216</td>
                                                                                          <td>11/2/2061</td>
                                                                                <td><div class="lasttd">
                                                                                          <a href="#" target="__blank"><button><i class="far fa-eye"></i></button></a>
                                                                                          <li id="showoption"><i class="fas fa-angle-down"></i>
                                                                                                    <ul>
                                                                                                               <li><i class="far fa-trash-alt"></i> Xóa</li>
                                                                                                              <li><a href="editcustomer.html" style="color:#555"><i class="far fa-edit"></i> Cập Nhật</a></li>
                                                                                                    </ul>
                                                                                          </li>
                                                                                </div>
                                                                                </td>
                                                                      </tr>
                                                                      <tr>
                                                                                <td><input type="checkbox" id="check"></td>
                                                                                <td>R17346</td>
                                                                                <td><a href="#customer">Mable Lindsey</a></td>
                                                                                <td>muher@ken.pn</td>
                                                                                <td>Mặc Định</td>
                                                                                <td><div class="tabstt">
                                                                                                    <span class="point" id="com"></span>
                                                                                                    <span class="stttext">Hoạt Động</span>
                                                                                          </div></td>         
                                                                                <td>20</td>
                                                                                <td>16,000,000 VND</td>
                                                                                <td>15.172.97.35</td>
                                                                                          <td>4/21/2116</td>
                                                                                <td><div class="lasttd">
                                                                                          <a href="#" target="__blank"><button><i class="far fa-eye"></i></button></a>
                                                                                          <li id="showoption"><i class="fas fa-angle-down"></i>
                                                                                                    <ul>
                                                                                                               <li><i class="far fa-trash-alt"></i> Xóa</li>
                                                                                                              <li><a href="editcustomer.html" style="color:#555"><i class="far fa-edit"></i> Cập Nhật</a></li>
                                                                                                    </ul>
                                                                                          </li>
                                                                                </div>
                                                                                </td>
                                                                      </tr>
                                                                      <tr>
                                                                                <td><input type="checkbox" id="check"></td>
                                                                                <td>R18712</td>
                                                                                <td><a href="#customer">Joseph Edwards</a></td>
                                                                                <td>biraba@rinwev.so</td>
                                                                                <td>Mặc Định</td>
                                                                                <td><div class="tabstt">
                                                                                                    <span class="point" id="com"></span>
                                                                                                    <span class="stttext">Hoạt Động</span>
                                                                                          </div></td>         
                                                                                <td>30</td>
                                                                                <td>12,000,000 VND</td>
                                                                                <td>103.187.227.187</td>
                                                                                          <td>3/9/2051</td>
                                                                                <td><div class="lasttd">
                                                                                          <a href="#" target="__blank"><button><i class="far fa-eye"></i></button></a>
                                                                                          <li id="showoption"><i class="fas fa-angle-down"></i>
                                                                                                    <ul>
                                                                                                               <li><i class="far fa-trash-alt"></i> Xóa</li>
                                                                                                              <li><a href="editcustomer.html" style="color:#555"><i class="far fa-edit"></i> Cập Nhật</a></li>
                                                                                                    </ul>
                                                                                          </li>
                                                                                </div>
                                                                                </td>
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