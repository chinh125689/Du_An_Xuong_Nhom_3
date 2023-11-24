<!Doctype html>
<html class="no-js" lang="zxx">
    
<!-- Mirrored from themephi.net/template/eduan/eduan/course-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Nov 2023 08:25:00 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>School University & Online Education Template | Eduan - eLearning Education</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="assets/css/odometer.min.css">
        <link rel="stylesheet" href="assets/css/nice-select.css">
        <link rel="stylesheet" href="assets/css/meanmenu.css">
        <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
        <link rel="stylesheet" href="assets/css/main.css">
    </head>
     
    <body>
        <!-- sidebar-information-area-start -->
        <div class="sidebar-info side-info">
            <div class="sidebar-logo-wrapper mb-25">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-8">
                        <div class="sidebar-logo">
                            <a href="index.html"><img src="assets/img/logo/logo-white.png" alt="logo-img"></a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-4">
                        <div class="sidebar-close-wrapper text-end">
                            <button class="sidebar-close side-info-close"><i class="fal fa-times"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sidebar-menu-wrapper fix">
                <div class="mobile-menu"></div>
            </div>
        </div>
        <div class="offcanvas-overlay"></div>
        <!-- sidebar-information-area-end -->

        <main>
            <!-- breadcrumb area start -->
            <section class="breadcrumb-area bg-default" data-background="assets/img/breadcrumb/breadcrumb-bg.jpg">
                <img src="assets/img/breadcrumb/shape-1.png" alt="" class="breadcrumb-shape">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb-content">
                                <h2 class="breadcrumb-title">Lưu trữ khóa học</h2>
                                <div class="breadcrumb-list">
                                    <a href="index.html">Trang chủ</a>
                                    <span>Khóa học</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb area end -->

            <!-- course area start -->
            <section class="innerPage_course-area pt-120 pb-90">
                <div class="container">
                    <div class="innerPage_course-top mb-30">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-xl-4 col-md-4">
                                <div class="innerPage_course-left mb-20">
                                    <p>Hiển thị 1-8 trên 24 kết quả</p>
                                </div>
                            </div>
                            <div class="col-xl-8 col-md-8">
                                <div class="innerPage_course-right mb-20">
                                    <div class="innerPage_course-category">
                                        <select name="select" class="innerPage_course-category-list has-nice-select">
                                            <option value="1">Thiết kế mỹ thuật</option>
                                            <option value="2">Thiết kế đồ họa</option>
                                            <option value="3">Thiết kế web</option>
                                            <option value="4">Thiết kế UX/UI</option>
                                        </select>
                                    </div>
                                    <div class="innerPage_course-search">
                                        <form action="#">
                                            <input type="text" placeholder="Search Item">
                                            <button type="submit" class="innerPage_course-search-btn"><i class="fa-thin fa-magnifying-glass"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <?php 
                        foreach($list_khoahoc as $khoahoc){
                                 extract($khoahoc);
                                 $img_pro = $img_path.$img;
                                 echo "<div class='col-xl-4 col-lg-6 col-md-6'>
                                 <div class='h2_course-item mb-30'>
                                     <div class='h2_course-item-img'>
                                         <a href='course-details.html'><img src='".$img_pro."' alt=''></a>
                                     </div>
                                     <div class='h2_course-content'>
                                         <div class='h2_course-content-top'>
                                             <div class='h2_course-rating'>
                                                 <ul>
                                                     <li><i class='fa-solid fa-star'></i></li>
                                                     <li><i class='fa-solid fa-star'></i></li>
                                                     <li><i class='fa-solid fa-star'></i></li>
                                                     <li><i class='fa-solid fa-star'></i></li>
                                                     <li><i class='fa-solid fa-star'></i></li>
                                                 </ul>
                                                 <span>(03 Đánh giá)</span>
                                             </div>
                                             <div class='h2_course-save'>
                                                 <a href='#'><i class='fa-thin fa-bookmark'></i></a>
                                             </div>
                                         </div>
                                         <h5 class='h2_course-content-title'><a href='course-details.html'>Giới thiệu Thiết kế trải nghiệm người dùng</a></h5>
                                         <div class='h2_course-content-info'>
                                             <span><i class='fa-thin fa-book-blank'></i>".$sl_baihoc."</span>
                                             <span><i class='fa-thin fa-user-group'></i>".$sl_sv."</span>
                                         </div>
                                         <p class='h2_course-content-text'>
                                        ".$tieu_de."
                                         </p>
                                         <div class='h2_course-content-author'>
                                             <div class='h2_course-author-img'>
                                                 <img src='".$img_pro."' alt=''>
                                             </div>
                                             <div class='h2_course-author-info'>
                                                 <span>Dạy bởi <a href='#'>".$ten_gv."</a></span>
                                             </div>
                                         </div>
                                     </div>
                                     <div class='h2_course-content-bottom'>
                                         <div class='h2_course-bottom-price'>
                                             <span><del>".$gia."đ</del>".$gia."đ</span>
                                         </div>
                                         <div class='h2_course-bottom-btn'>
                                             <a href='course-details.html'>Thêm chi tiết<i class='fa-light fa-arrow-right'></i><i class='fa-light fa-arrow-right'></i></a>
                                         </div>
                                     </div>
                                 </div>
                             </div>";
                             echo "<div class='col-xl-4 col-lg-6 col-md-6'>
                             <div class='h2_course-item mb-30'>
                                 <div class='h2_course-item-img'>
                                     <a href='course-details.html'><img src='".$img_pro."' alt=''></a>
                                 </div>
                                 <div class='h2_course-content'>
                                     <div class='h2_course-content-top'>
                                         <div class='h2_course-rating'>
                                             <ul>
                                                 <li><i class='fa-solid fa-star'></i></li>
                                                 <li><i class='fa-solid fa-star'></i></li>
                                                 <li><i class='fa-solid fa-star'></i></li>
                                                 <li><i class='fa-solid fa-star'></i></li>
                                                 <li><i class='fa-solid fa-star'></i></li>
                                             </ul>
                                             <span>(03 Đánh giá)</span>
                                         </div>
                                         <div class='h2_course-save'>
                                             <a href='#'><i class='fa-thin fa-bookmark'></i></a>
                                         </div>
                                     </div>
                                     <h5 class='h2_course-content-title'><a href='course-details.html'>Giới thiệu Thiết kế trải nghiệm người dùng</a></h5>
                                     <div class='h2_course-content-info'>
                                         <span><i class='fa-thin fa-book-blank'></i>".$sl_baihoc."</span>
                                         <span><i class='fa-thin fa-user-group'></i>".$sl_sv."</span>
                                     </div>
                                     <p class='h2_course-content-text'>
                                    ".$tieu_de."
                                     </p>
                                     <div class='h2_course-content-author'>
                                         <div class='h2_course-author-img'>
                                             <img src='".$img_pro."' alt=''>
                                         </div>
                                         <div class='h2_course-author-info'>
                                             <span>Dạy bởi <a href='#'>".$ten_gv."</a></span>
                                         </div>
                                     </div>
                                 </div>
                                 <div class='h2_course-content-bottom'>
                                     <div class='h2_course-bottom-price'>
                                         <span><del>".$gia."đ</del>".$gia."đ</span>
                                     </div>
                                     <div class='h2_course-bottom-btn'>
                                         <a href='course-details.html'>Thêm chi tiết<i class='fa-light fa-arrow-right'></i><i class='fa-light fa-arrow-right'></i></a>
                                     </div>
                                 </div>
                             </div>
                         </div>";
                         echo "<div class='col-xl-4 col-lg-6 col-md-6'>
                         <div class='h2_course-item mb-30'>
                             <div class='h2_course-item-img'>
                                 <a href='course-details.html'><img src='".$img_pro."' alt=''></a>
                             </div>
                             <div class='h2_course-content'>
                                 <div class='h2_course-content-top'>
                                     <div class='h2_course-rating'>
                                         <ul>
                                             <li><i class='fa-solid fa-star'></i></li>
                                             <li><i class='fa-solid fa-star'></i></li>
                                             <li><i class='fa-solid fa-star'></i></li>
                                             <li><i class='fa-solid fa-star'></i></li>
                                             <li><i class='fa-solid fa-star'></i></li>
                                         </ul>
                                         <span>(03 Đánh giá)</span>
                                     </div>
                                     <div class='h2_course-save'>
                                         <a href='#'><i class='fa-thin fa-bookmark'></i></a>
                                     </div>
                                 </div>
                                 <h5 class='h2_course-content-title'><a href='course-details.html'>Giới thiệu Thiết kế trải nghiệm người dùng</a></h5>
                                 <div class='h2_course-content-info'>
                                     <span><i class='fa-thin fa-book-blank'></i>".$sl_baihoc."</span>
                                     <span><i class='fa-thin fa-user-group'></i>".$sl_sv."</span>
                                 </div>
                                 <p class='h2_course-content-text'>
                                ".$tieu_de."
                                 </p>
                                 <div class='h2_course-content-author'>
                                     <div class='h2_course-author-img'>
                                         <img src='".$img_pro."' alt=''>
                                     </div>
                                     <div class='h2_course-author-info'>
                                         <span>Dạy bởi <a href='#'>".$ten_gv."</a></span>
                                     </div>
                                 </div>
                             </div>
                             <div class='h2_course-content-bottom'>
                                 <div class='h2_course-bottom-price'>
                                     <span><del>".$gia."đ</del>".$gia."đ</span>
                                 </div>
                                 <div class='h2_course-bottom-btn'>
                                     <a href='course-details.html'>Thêm chi tiết<i class='fa-light fa-arrow-right'></i><i class='fa-light fa-arrow-right'></i></a>
                                 </div>
                             </div>
                         </div>
                     </div>";
                        }
                        ?>
                        <!-- <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="h2_course-item mb-30">
                                <div class="h2_course-item-img">
                                    <a href="course-details.html"><img src="assets/img/course/2/1.jpg" alt=""></a>
                                </div>
                                <div class="h2_course-content">
                                    <div class="h2_course-content-top">
                                        <div class="h2_course-rating">
                                            <ul>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                            </ul>
                                            <span>(03 Đánh giá)</span>
                                        </div>
                                        <div class="h2_course-save">
                                            <a href="#"><i class="fa-thin fa-bookmark"></i></a>
                                        </div>
                                    </div>
                                    <h5 class="h2_course-content-title"><a href="course-details.html">Giới thiệu môn Tâm lý học</a></h5>
                                    <div class="h2_course-content-info">
                                        <span><i class="fa-thin fa-book-blank"></i>23 bài học</span>
                                        <span><i class="fa-thin fa-user-group"></i>45 học sinh</span>
                                    </div>
                                    <p class="h2_course-content-text">
                                    Thông qua sự kết hợp giữa bài giảng, bài đọc và thảo luận của học sinh.
                                    </p>
                                    <div class="h2_course-content-author">
                                        <div class="h2_course-author-img">
                                            <img src="assets/img/course/2/author-1.jpg" alt="">
                                        </div>
                                        <div class="h2_course-author-info">
                                            <span>Dạy bởi <a href="#">Phạm Văn Tuyển</a></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="h2_course-content-bottom">
                                    <div class="h2_course-bottom-price">
                                        <span><del>3.397.100đ</del>2.329.440đ</span>
                                    </div>
                                    <div class="h2_course-bottom-btn">
                                        <a href="course-details.html">Thêm chi tiết<i class="fa-light fa-arrow-right"></i><i class="fa-light fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="h2_course-item mb-30">
                                <div class="h2_course-item-img">
                                    <a href="course-details.html"><img src="assets/img/course/2/2.jpg" alt=""></a>
                                </div>
                                <div class="h2_course-content">
                                    <div class="h2_course-content-top">
                                        <div class="h2_course-rating">
                                            <ul>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                            </ul>
                                            <span>(03 Đánh giá)</span>
                                        </div>
                                        <div class="h2_course-save">
                                            <a href="#"><i class="fa-thin fa-bookmark"></i></a>
                                        </div>
                                    </div>
                                    <h5 class="h2_course-content-title"><a href="course-details.html">Nhà phát triển góc hoàn chỉnh vào năm 2023</a></h5>
                                    <div class="h2_course-content-info">
                                        <span><i class="fa-thin fa-book-blank"></i>54 Lớp học</span>
                                        <span><i class="fa-thin fa-user-group"></i>72 Học sinh</span>
                                    </div>
                                    <p class="h2_course-content-text">
                                    Thông qua sự kết hợp giữa bài giảng, bài đọc và thảo luận của học sinh.
                                    </p>
                                    <div class="h2_course-content-author">
                                        <div class="h2_course-author-img">
                                            <img src="assets/img/course/2/author-2.jpg" alt="">
                                        </div>
                                        <div class="h2_course-author-info">
                                            <span>Dạy bởi <a href="#">Đỗ Bá Chính</a></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="h2_course-content-bottom">
                                    <div class="h2_course-bottom-price">
                                        <span><del>2.911.800đ</del>1.698.550đ</span>
                                    </div>
                                    <div class="h2_course-bottom-btn">
                                        <a href="course-details.html">Thêm chi tiết<i class="fa-light fa-arrow-right"></i><i class="fa-light fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="h2_course-item mb-30">
                                <div class="h2_course-item-img">
                                    <a href="course-details.html"><img src="assets/img/course/2/3.jpg" alt=""></a>
                                </div>
                                <div class="h2_course-content">
                                    <div class="h2_course-content-top">
                                        <div class="h2_course-rating">
                                            <ul>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                            </ul>
                                            <span>(03 Đánh giá)</span>
                                        </div>
                                        <div class="h2_course-save">
                                            <a href="#"><i class="fa-thin fa-bookmark"></i></a>
                                        </div>
                                    </div>
                                    <h5 class="h2_course-content-title"><a href="course-details.html">Khoa học về hạnh phúc cho thanh thiếu niên</a></h5>
                                    <div class="h2_course-content-info">
                                        <span><i class="fa-thin fa-book-blank"></i>67 Lớp học</span>
                                        <span><i class="fa-thin fa-user-group"></i>24 Học sinh</span>
                                    </div>
                                    <p class="h2_course-content-text">
                                    Thông qua sự kết hợp giữa bài giảng, bài đọc và thảo luận của học sinh.
                                    </p>
                                    <div class="h2_course-content-author">
                                        <div class="h2_course-author-img">
                                            <img src="assets/img/course/2/author-3.jpg" alt="">
                                        </div>
                                        <div class="h2_course-author-info">
                                            <span>Dạy bởi <a href="#">Nguyễn Đức Chung</a></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="h2_course-content-bottom">
                                    <div class="h2_course-bottom-price">
                                        <span><del>3.639.750đ</del>2.402.235đ</span>
                                    </div>
                                    <div class="h2_course-bottom-btn">
                                        <a href="course-details.html">Thêm chi tiết<i class="fa-light fa-arrow-right"></i><i class="fa-light fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="h2_course-item mb-30">
                                <div class="h2_course-item-img">
                                    <a href="course-details.html"><img src="assets/img/course/2/4.jpg" alt=""></a>
                                </div>
                                <div class="h2_course-content">
                                    <div class="h2_course-content-top">
                                        <div class="h2_course-rating">
                                            <ul>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                            </ul>
                                            <span>(03 Đánh giá)</span>
                                        </div>
                                        <div class="h2_course-save">
                                            <a href="#"><i class="fa-thin fa-bookmark"></i></a>
                                        </div>
                                    </div>
                                    <h5 class="h2_course-content-title"><a href="course-details.html">Kỹ sư máy học AWS</a></h5>
                                    <div class="h2_course-content-info">
                                        <span><i class="fa-thin fa-book-blank"></i>57 Lớp học</span>
                                        <span><i class="fa-thin fa-user-group"></i>98 Học sinh</span>
                                    </div>
                                    <p class="h2_course-content-text">
                                    Thông qua sự kết hợp giữa bài giảng, bài đọc và thảo luận của học sinh.
                                    </p>
                                    <div class="h2_course-content-author">
                                        <div class="h2_course-author-img">
                                            <img src="assets/img/course/2/author-4.jpg" alt="">
                                        </div>
                                        <div class="h2_course-author-info">
                                            <span>Dạy bởi <a href="#">Nguyễn Duy Dũng</a></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="h2_course-content-bottom">
                                    <div class="h2_course-bottom-price">
                                        <span><del>3.858.135đ</del>2.377.970đ</span>
                                    </div>
                                    <div class="h2_course-bottom-btn">
                                        <a href="course-details.html">Thêm chi tiết<i class="fa-light fa-arrow-right"></i><i class="fa-light fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                       
                        <!-- <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="h2_course-item mb-30">
                                <div class="h2_course-item-img">
                                    <a href="course-details.html"><img src="assets/img/course/2/5.jpg" alt=""></a>
                                </div>
                                <div class="h2_course-content">
                                    <div class="h2_course-content-top">
                                        <div class="h2_course-rating">
                                            <ul>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                            </ul>
                                            <span>(03 Đánh giá)</span>
                                        </div>
                                        <div class="h2_course-save">
                                            <a href="#"><i class="fa-thin fa-bookmark"></i></a>
                                        </div>
                                    </div>
                                    <h5 class="h2_course-content-title"><a href="course-details.html">Giới thiệu Thiết kế trải nghiệm người dùng</a></h5>
                                    <div class="h2_course-content-info">
                                        <span><i class="fa-thin fa-book-blank"></i>58 Lớp học</span>
                                        <span><i class="fa-thin fa-user-group"></i>50 Học sinh</span>
                                    </div>
                                    <p class="h2_course-content-text">
                                    Thông qua sự kết hợp giữa bài giảng, bài đọc và thảo luận của học sinh.
                                    </p>
                                    <div class="h2_course-content-author">
                                        <div class="h2_course-author-img">
                                            <img src="assets/img/course/2/author-5.jpg" alt="">
                                        </div>
                                        <div class="h2_course-author-info">
                                            <span>Dạy bởi <a href="#">Phùng Thanh Độ</a></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="h2_course-content-bottom">
                                    <div class="h2_course-bottom-price">
                                        <span><del>3.275.775đ</del>1.674.285đ</span>
                                    </div>
                                    <div class="h2_course-bottom-btn">
                                        <a href="course-details.html">Thêm chi tiết<i class="fa-light fa-arrow-right"></i><i class="fa-light fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="h2_course-item mb-30">
                                <div class="h2_course-item-img">
                                    <a href="course-details.html"><img src="assets/img/course/2/6.jpg" alt=""></a>
                                </div>
                                <div class="h2_course-content">
                                    <div class="h2_course-content-top">
                                        <div class="h2_course-rating">
                                            <ul>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                            </ul>
                                            <span>(03 Đánh giá)</span>
                                        </div>
                                        <div class="h2_course-save">
                                            <a href="#"><i class="fa-thin fa-bookmark"></i></a>
                                        </div>
                                    </div>
                                    <h5 class="h2_course-content-title"><a href="course-details.html">Nói tiếng Anh để phát triển nghề nghiệp</a></h5>
                                    <div class="h2_course-content-info">
                                        <span><i class="fa-thin fa-book-blank"></i>35 Lớp học</span>
                                        <span><i class="fa-thin fa-user-group"></i>24 Học sinh</span>
                                    </div>
                                    <p class="h2_course-content-text">
                                    Thông qua sự kết hợp giữa bài giảng, bài đọc và thảo luận của học sinh.
                                    </p>
                                    <div class="h2_course-content-author">
                                        <div class="h2_course-author-img">
                                            <img src="assets/img/course/2/author-6.jpg" alt="">
                                        </div>
                                        <div class="h2_course-author-info">
                                            <span>Dạy bởi <a href="#">Trần Thái Linh</a></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="h2_course-content-bottom">
                                    <div class="h2_course-bottom-price">
                                        <span><del>5.580.950đ</del>4.197.845đ</span>
                                    </div>
                                    <div class="h2_course-bottom-btn">
                                        <a href="course-details.html">Thêm chi tiết<i class="fa-light fa-arrow-right"></i><i class="fa-light fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="pagination-area mt-20 mb-30">
                                <ul>
                                    <li><a href="#">01</a></li>
                                    <li><a href="#">02</a></li>
                                    <li><a href="#">03</a></li>
                                    <li><a href="#">04</a></li>
                                    <li><a href="#"><i class="fa-light fa-angle-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- course area end -->

            <!-- cta area start -->
            <div class="cta-area">
                <div class="container">
                    <div class="cta-wrapper">
                        <div class="row align-items-center">
                            <div class="col-xl-6 col-lg-6">
                                <div class="cta-content mb-30 mb-lg-0">
                                    <span class="cta-subtitle">Tải ứng dụng</span>
                                    <h2 class="cta-title">Bạn đã sẵn sàng để bắt đầu
                                         Khóa học trực tuyến?</h2>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="cta-button">
                                    <a href="#" class="cta-btn"><i class="fa-brands fa-apple"></i>Apple Store</a>
                                    <a href="#" class="cta-btn"><i class="fa-brands fa-google-play"></i>Play Store</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- cta area end -->
        </main>

		<!-- JS here -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/swiper-bundle.min.js"></script>
        <script src="assets/js/jquery.meanmenu.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.nice-select.min.js"></script>
        <script src="assets/js/jquery.scrollUp.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/odometer.min.js"></script>
        <script src="assets/js/appear.min.js"></script>
        <script src="assets/js/main.js"></script>
    </body>

<!-- Mirrored from themephi.net/template/eduan/eduan/course-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Nov 2023 08:25:00 GMT -->
</html>