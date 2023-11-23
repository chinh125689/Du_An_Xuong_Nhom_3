<!-- course area start -->
<section class="h3_course-area pt-135 pb-110">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="section-area-3 text-center mb-40">
                                <span class="section-subtitle">Top các khóa học</span>
                                <h2 class="section-title mb-0">Khám phá các khóa học nổi bật</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="h3_course-tab mb-40">
                                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                      <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                                        Tất cả
                                      </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                      <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Xu hướng</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                      <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Tính năng</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                      <button class="nav-link" id="pills-four-tab" data-bs-toggle="pill" data-bs-target="#pills-four" type="button" role="tab" aria-controls="pills-four" aria-selected="false">Thiết kế web</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                      <button class="nav-link" id="pills-five-tab" data-bs-toggle="pill" data-bs-target="#pills-five" type="button" role="tab" aria-controls="pills-five" aria-selected="false">Phổ biến</button>
                                    </li>
                                </ul>                                      
                            </div>
                        </div>
                    </div>
                    <div class="h3_course-wrap">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                                <div class="row">
                                <?php 
                                    foreach($list_khoahoc as $khoahoc){
                                        extract($khoahoc);
                                        $img_pro = $img_path.$img;
                                        echo "<div class='col-xl-4 col-lg-6 col-md-6'>
                                        <div class='h3_course-item mb-30'>
                                            <div class='h3_course-item-top'>
                                                <div class='h3_course-item-img'>
                                                    <a href='course-details.html'><img src='".$img_pro."' alt=''></a>
                                                    <div class='h3_course-item-tag'>
                                                        <a href='#'>Education</a>
                                                    </div>
                                                    <div class='h3_course-item-save'>
                                                        <a href='#'><i class='fa-light fa-bookmark'></i></a>
                                                    </div>
                                                </div>
                                                <div class='h3_course-content'>
                                                    <div class='h3_course-content-info'>
                                                        <ul>
                                                            <li><i class='fa-light fa-book-blank'></i>".$sl_baihoc."</li>
                                                            <li><i class='fa-light fa-user-group'></i>".$sl_sv."</li>
                                                            <li><i class='fa-light fa-clock'></i>".$gio_hoc." Giờ</li>
                                                        </ul>
                                                    </div>
                                                    <h5 class='h3_course-content-title'><a href='course-details.html'>".$tieu_de."</a></h5>
                                                    <div class='h3_course-content-price'>
                                                        <span><del>".$gia."</del>".$gia."</span>
                                                        <h5>Free</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='h3_course-item-bottom'>
                                                <div class='h3_course-item-author'>
                                                    <div class='h3_course-item-author-img'>
                                                        <img src='".$img_pro."' alt=''>
                                                    </div>
                                                    <div class='h3_course-item-author-info'>
                                                        <span>By <a href='#'>".$ten_gv."</a></span>
                                                    </div>
                                                </div>
                                                <div class='h3_course-item-rating'>
                                                    <ul>
                                                        <li><i class='fa-solid fa-star'></i></li>
                                                        <li><i class='fa-solid fa-star'></i></li>
                                                        <li><i class='fa-solid fa-star'></i></li>
                                                        <li><i class='fa-solid fa-star'></i></li>
                                                        <li><i class='fa-solid fa-star'></i></li>
                                                    </ul>
                                                    <span>(36)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>";
                                    echo "<div class='col-xl-4 col-lg-6 col-md-6'>
                                    <div class='h3_course-item mb-30'>
                                        <div class='h3_course-item-top'>
                                            <div class='h3_course-item-img'>
                                                <a href='course-details.html'><img src='".$img_pro."' alt=''></a>
                                                <div class='h3_course-item-tag'>
                                                    <a href='#'>Education</a>
                                                </div>
                                                <div class='h3_course-item-save'>
                                                    <a href='#'><i class='fa-light fa-bookmark'></i></a>
                                                </div>
                                            </div>
                                            <div class='h3_course-content'>
                                                <div class='h3_course-content-info'>
                                                    <ul>
                                                        <li><i class='fa-light fa-book-blank'></i>".$sl_baihoc."</li>
                                                        <li><i class='fa-light fa-user-group'></i>".$sl_sv."</li>
                                                        <li><i class='fa-light fa-clock'></i>".$gio_hoc." Giờ</li>
                                                    </ul>
                                                </div>
                                                <h5 class='h3_course-content-title'><a href='course-details.html'>".$tieu_de."</a></h5>
                                                <div class='h3_course-content-price'>
                                                    <span><del>".$gia."</del>".$gia."</span>
                                                    <h5>Free</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='h3_course-item-bottom'>
                                            <div class='h3_course-item-author'>
                                                <div class='h3_course-item-author-img'>
                                                    <img src='".$img_pro."' alt=''>
                                                </div>
                                                <div class='h3_course-item-author-info'>
                                                    <span>By <a href='#'>".$ten_gv."</a></span>
                                                </div>
                                            </div>
                                            <div class='h3_course-item-rating'>
                                                <ul>
                                                    <li><i class='fa-solid fa-star'></i></li>
                                                    <li><i class='fa-solid fa-star'></i></li>
                                                    <li><i class='fa-solid fa-star'></i></li>
                                                    <li><i class='fa-solid fa-star'></i></li>
                                                    <li><i class='fa-solid fa-star'></i></li>
                                                </ul>
                                                <span>(36)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>";
                                echo "<div class='col-xl-4 col-lg-6 col-md-6'>
                                <div class='h3_course-item mb-30'>
                                    <div class='h3_course-item-top'>
                                        <div class='h3_course-item-img'>
                                            <a href='course-details.html'><img src='".$img_pro."' alt=''></a>
                                            <div class='h3_course-item-tag'>
                                                <a href='#'>Education</a>
                                            </div>
                                            <div class='h3_course-item-save'>
                                                <a href='#'><i class='fa-light fa-bookmark'></i></a>
                                            </div>
                                        </div>
                                        <div class='h3_course-content'>
                                            <div class='h3_course-content-info'>
                                                <ul>
                                                    <li><i class='fa-light fa-book-blank'></i>".$sl_baihoc."</li>
                                                    <li><i class='fa-light fa-user-group'></i>".$sl_sv."</li>
                                                    <li><i class='fa-light fa-clock'></i>".$gio_hoc." Giờ</li>
                                                </ul>
                                            </div>
                                            <h5 class='h3_course-content-title'><a href='course-details.html'>".$tieu_de."</a></h5>
                                            <div class='h3_course-content-price'>
                                                <span><del>".$gia."</del>".$gia."</span>
                                                <h5>Free</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='h3_course-item-bottom'>
                                        <div class='h3_course-item-author'>
                                            <div class='h3_course-item-author-img'>
                                                <img src='".$img_pro."' alt=''>
                                            </div>
                                            <div class='h3_course-item-author-info'>
                                                <span>By <a href='#'>".$ten_gv."</a></span>
                                            </div>
                                        </div>
                                        <div class='h3_course-item-rating'>
                                            <ul>
                                                <li><i class='fa-solid fa-star'></i></li>
                                                <li><i class='fa-solid fa-star'></i></li>
                                                <li><i class='fa-solid fa-star'></i></li>
                                                <li><i class='fa-solid fa-star'></i></li>
                                                <li><i class='fa-solid fa-star'></i></li>
                                            </ul>
                                            <span>(36)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>";
                                    }
                                    ?>
                                    <!-- <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="h3_course-item mb-30">
                                            <div class="h3_course-item-top">
                                                <div class="h3_course-item-img">
                                                    <a href="course-details.html"><img src="assets/img/course/3/1.jpg" alt=""></a>
                                                    <div class="h3_course-item-tag">
                                                        <a href="#">Kỹ năng lãnh đạo</a>
                                                    </div>
                                                    <div class="h3_course-item-save">
                                                        <a href="#"><i class="fa-light fa-bookmark"></i></a>
                                                    </div>
                                                </div>
                                                <div class="h3_course-content">
                                                    <div class="h3_course-content-info">
                                                        <ul>
                                                            <li><i class="fa-light fa-book-blank"></i>42 Bài học</li>
                                                            <li><i class="fa-light fa-user-group"></i>64 Sinh viên</li>
                                                            <li><i class="fa-light fa-clock"></i>20 Giờ</li>
                                                        </ul>
                                                    </div>
                                                    <h5 class="h3_course-content-title"><a href="course-details.html">A Comprehensive Overview of The Field of Education.</a></h5>
                                                    <div class="h3_course-content-price">
                                                        <span><del>$120</del>$96.00</span>
                                                        <h5>Miễn phí</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="h3_course-item-bottom">
                                                <div class="h3_course-item-author">
                                                    <div class="h3_course-item-author-img">
                                                        <img src="assets/img/course/3/author-1.jpg" alt="">
                                                    </div>
                                                    <div class="h3_course-item-author-info">
                                                        <span>By <a href="#">Widget</a></span>
                                                    </div>
                                                </div>
                                                <div class="h3_course-item-rating">
                                                    <ul>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                    </ul>
                                                    <span>(46)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                    <!-- <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="h3_course-item mb-30">
                                            <div class="h3_course-item-top">
                                                <div class="h3_course-item-img">
                                                    <a href="course-details.html"><img src="assets/img/course/3/2.jpg" alt=""></a>
                                                    <div class="h3_course-item-tag">
                                                        <a href="#">Marketing</a>
                                                    </div>
                                                    <div class="h3_course-item-save">
                                                        <a href="#"><i class="fa-light fa-bookmark"></i></a>
                                                    </div>
                                                </div>
                                                <div class="h3_course-content">
                                                    <div class="h3_course-content-info">
                                                        <ul>
                                                            <li><i class="fa-light fa-book-blank"></i>35 Lessons</li>
                                                            <li><i class="fa-light fa-user-group"></i>45 Students</li>
                                                            <li><i class="fa-light fa-clock"></i>23 Hours</li>
                                                        </ul>
                                                    </div>
                                                    <h5 class="h3_course-content-title"><a href="course-details.html">Studying Principles of Educational Organizational.</a></h5>
                                                    <div class="h3_course-content-price">
                                                        <span><del>$124</del>$99.00</span>
                                                        <h5>Free</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="h3_course-item-bottom">
                                                <div class="h3_course-item-author">
                                                    <div class="h3_course-item-author-img">
                                                        <img src="assets/img/course/3/author-2.jpg" alt="">
                                                    </div>
                                                    <div class="h3_course-item-author-info">
                                                        <span>By <a href="#">Russell</a></span>
                                                    </div>
                                                </div>
                                                <div class="h3_course-item-rating">
                                                    <ul>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                    </ul>
                                                    <span>(24)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                               
                                    <!-- <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="h3_course-item mb-30">
                                            <div class="h3_course-item-top">
                                                <div class="h3_course-item-img">
                                                    <a href="course-details.html"><img src="assets/img/course/3/3.jpg" alt=""></a>
                                                    <div class="h3_course-item-tag">
                                                        <a href="#">Education</a>
                                                    </div>
                                                    <div class="h3_course-item-save">
                                                        <a href="#"><i class="fa-light fa-bookmark"></i></a>
                                                    </div>
                                                </div>
                                                <div class="h3_course-content">
                                                    <div class="h3_course-content-info">
                                                        <ul>
                                                            <li><i class="fa-light fa-book-blank"></i>26 Lessons</li>
                                                            <li><i class="fa-light fa-user-group"></i>48 Students</li>
                                                            <li><i class="fa-light fa-clock"></i>20 Hours</li>
                                                        </ul>
                                                    </div>
                                                    <h5 class="h3_course-content-title"><a href="course-details.html">Examining Strategies to Promote Inclusivity and Diversity.</a></h5>
                                                    <div class="h3_course-content-price">
                                                        <span><del>$138</del>$85.00</span>
                                                        <h5>Free</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="h3_course-item-bottom">
                                                <div class="h3_course-item-author">
                                                    <div class="h3_course-item-author-img">
                                                        <img src="assets/img/course/3/author-3.jpg" alt="">
                                                    </div>
                                                    <div class="h3_course-item-author-info">
                                                        <span>By <a href="#">Ameter</a></span>
                                                    </div>
                                                </div>
                                                <div class="h3_course-item-rating">
                                                    <ul>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                    </ul>
                                                    <span>(36)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                               <div class="row">
                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="h3_course-item mb-30">
                                            <div class="h3_course-item-top">
                                                <div class="h3_course-item-img">
                                                    <a href="course-details.html"><img src="assets/img/course/3/1.jpg" alt=""></a>
                                                    <div class="h3_course-item-tag">
                                                        <a href="#">Leadership</a>
                                                    </div>
                                                    <div class="h3_course-item-save">
                                                        <a href="#"><i class="fa-light fa-bookmark"></i></a>
                                                    </div>
                                                </div>
                                                <div class="h3_course-content">
                                                    <div class="h3_course-content-info">
                                                        <ul>
                                                            <li><i class="fa-light fa-book-blank"></i>42 Lessons</li>
                                                            <li><i class="fa-light fa-user-group"></i>64 Students</li>
                                                            <li><i class="fa-light fa-clock"></i>20 Hours</li>
                                                        </ul>
                                                    </div>
                                                    <h5 class="h3_course-content-title"><a href="course-details.html">A Comprehensive Overview of The Field of Education.</a></h5>
                                                    <div class="h3_course-content-price">
                                                        <span><del>$120</del>$96.00</span>
                                                        <h5>Free</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="h3_course-item-bottom">
                                                <div class="h3_course-item-author">
                                                    <div class="h3_course-item-author-img">
                                                        <img src="assets/img/course/3/author-1.jpg" alt="">
                                                    </div>
                                                    <div class="h3_course-item-author-info">
                                                        <span>By <a href="#">Widget</a></span>
                                                    </div>
                                                </div>
                                                <div class="h3_course-item-rating">
                                                    <ul>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                    </ul>
                                                    <span>(46)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="h3_course-item mb-30">
                                            <div class="h3_course-item-top">
                                                <div class="h3_course-item-img">
                                                    <a href="course-details.html"><img src="assets/img/course/3/2.jpg" alt=""></a>
                                                    <div class="h3_course-item-tag">
                                                        <a href="#">Marketing</a>
                                                    </div>
                                                    <div class="h3_course-item-save">
                                                        <a href="#"><i class="fa-light fa-bookmark"></i></a>
                                                    </div>
                                                </div>
                                                <div class="h3_course-content">
                                                    <div class="h3_course-content-info">
                                                        <ul>
                                                            <li><i class="fa-light fa-book-blank"></i>35 Lessons</li>
                                                            <li><i class="fa-light fa-user-group"></i>45 Students</li>
                                                            <li><i class="fa-light fa-clock"></i>23 Hours</li>
                                                        </ul>
                                                    </div>
                                                    <h5 class="h3_course-content-title"><a href="course-details.html">Studying Principles of Educational Organizational.</a></h5>
                                                    <div class="h3_course-content-price">
                                                        <span><del>$124</del>$99.00</span>
                                                        <h5>Free</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="h3_course-item-bottom">
                                                <div class="h3_course-item-author">
                                                    <div class="h3_course-item-author-img">
                                                        <img src="assets/img/course/3/author-2.jpg" alt="">
                                                    </div>
                                                    <div class="h3_course-item-author-info">
                                                        <span>By <a href="#">Russell</a></span>
                                                    </div>
                                                </div>
                                                <div class="h3_course-item-rating">
                                                    <ul>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                    </ul>
                                                    <span>(24)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="h3_course-item mb-30">
                                            <div class="h3_course-item-top">
                                                <div class="h3_course-item-img">
                                                    <a href="course-details.html"><img src="assets/img/course/3/3.jpg" alt=""></a>
                                                    <div class="h3_course-item-tag">
                                                        <a href="#">Education</a>
                                                    </div>
                                                    <div class="h3_course-item-save">
                                                        <a href="#"><i class="fa-light fa-bookmark"></i></a>
                                                    </div>
                                                </div>
                                                <div class="h3_course-content">
                                                    <div class="h3_course-content-info">
                                                        <ul>
                                                            <li><i class="fa-light fa-book-blank"></i>26 Lessons</li>
                                                            <li><i class="fa-light fa-user-group"></i>48 Students</li>
                                                            <li><i class="fa-light fa-clock"></i>20 Hours</li>
                                                        </ul>
                                                    </div>
                                                    <h5 class="h3_course-content-title"><a href="course-details.html">Examining Strategies to Promote Inclusivity and Diversity.</a></h5>
                                                    <div class="h3_course-content-price">
                                                        <span><del>$138</del>$85.00</span>
                                                        <h5>Free</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="h3_course-item-bottom">
                                                <div class="h3_course-item-author">
                                                    <div class="h3_course-item-author-img">
                                                        <img src="assets/img/course/3/author-3.jpg" alt="">
                                                    </div>
                                                    <div class="h3_course-item-author-info">
                                                        <span>By <a href="#">Ameter</a></span>
                                                    </div>
                                                </div>
                                                <div class="h3_course-item-rating">
                                                    <ul>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                    </ul>
                                                    <span>(36)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="h3_course-item mb-30">
                                            <div class="h3_course-item-top">
                                                <div class="h3_course-item-img">
                                                    <a href="course-details.html"><img src="assets/img/course/3/1.jpg" alt=""></a>
                                                    <div class="h3_course-item-tag">
                                                        <a href="#">Leadership</a>
                                                    </div>
                                                    <div class="h3_course-item-save">
                                                        <a href="#"><i class="fa-light fa-bookmark"></i></a>
                                                    </div>
                                                </div>
                                                <div class="h3_course-content">
                                                    <div class="h3_course-content-info">
                                                        <ul>
                                                            <li><i class="fa-light fa-book-blank"></i>42 Lessons</li>
                                                            <li><i class="fa-light fa-user-group"></i>64 Students</li>
                                                            <li><i class="fa-light fa-clock"></i>20 Hours</li>
                                                        </ul>
                                                    </div>
                                                    <h5 class="h3_course-content-title"><a href="course-details.html">A Comprehensive Overview of The Field of Education.</a></h5>
                                                    <div class="h3_course-content-price">
                                                        <span><del>$120</del>$96.00</span>
                                                        <h5>Free</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="h3_course-item-bottom">
                                                <div class="h3_course-item-author">
                                                    <div class="h3_course-item-author-img">
                                                        <img src="assets/img/course/3/author-1.jpg" alt="">
                                                    </div>
                                                    <div class="h3_course-item-author-info">
                                                        <span>By <a href="#">Widget</a></span>
                                                    </div>
                                                </div>
                                                <div class="h3_course-item-rating">
                                                    <ul>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                    </ul>
                                                    <span>(46)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="h3_course-item mb-30">
                                            <div class="h3_course-item-top">
                                                <div class="h3_course-item-img">
                                                    <a href="course-details.html"><img src="assets/img/course/3/2.jpg" alt=""></a>
                                                    <div class="h3_course-item-tag">
                                                        <a href="#">Marketing</a>
                                                    </div>
                                                    <div class="h3_course-item-save">
                                                        <a href="#"><i class="fa-light fa-bookmark"></i></a>
                                                    </div>
                                                </div>
                                                <div class="h3_course-content">
                                                    <div class="h3_course-content-info">
                                                        <ul>
                                                            <li><i class="fa-light fa-book-blank"></i>35 Lessons</li>
                                                            <li><i class="fa-light fa-user-group"></i>45 Students</li>
                                                            <li><i class="fa-light fa-clock"></i>23 Hours</li>
                                                        </ul>
                                                    </div>
                                                    <h5 class="h3_course-content-title"><a href="course-details.html">Studying Principles of Educational Organizational.</a></h5>
                                                    <div class="h3_course-content-price">
                                                        <span><del>$124</del>$99.00</span>
                                                        <h5>Free</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="h3_course-item-bottom">
                                                <div class="h3_course-item-author">
                                                    <div class="h3_course-item-author-img">
                                                        <img src="assets/img/course/3/author-2.jpg" alt="">
                                                    </div>
                                                    <div class="h3_course-item-author-info">
                                                        <span>By <a href="#">Russell</a></span>
                                                    </div>
                                                </div>
                                                <div class="h3_course-item-rating">
                                                    <ul>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                    </ul>
                                                    <span>(24)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="h3_course-item mb-30">
                                            <div class="h3_course-item-top">
                                                <div class="h3_course-item-img">
                                                    <a href="course-details.html"><img src="assets/img/course/3/3.jpg" alt=""></a>
                                                    <div class="h3_course-item-tag">
                                                        <a href="#">Education</a>
                                                    </div>
                                                    <div class="h3_course-item-save">
                                                        <a href="#"><i class="fa-light fa-bookmark"></i></a>
                                                    </div>
                                                </div>
                                                <div class="h3_course-content">
                                                    <div class="h3_course-content-info">
                                                        <ul>
                                                            <li><i class="fa-light fa-book-blank"></i>26 Lessons</li>
                                                            <li><i class="fa-light fa-user-group"></i>48 Students</li>
                                                            <li><i class="fa-light fa-clock"></i>20 Hours</li>
                                                        </ul>
                                                    </div>
                                                    <h5 class="h3_course-content-title"><a href="course-details.html">Examining Strategies to Promote Inclusivity and Diversity.</a></h5>
                                                    <div class="h3_course-content-price">
                                                        <span><del>$138</del>$85.00</span>
                                                        <h5>Free</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="h3_course-item-bottom">
                                                <div class="h3_course-item-author">
                                                    <div class="h3_course-item-author-img">
                                                        <img src="assets/img/course/3/author-3.jpg" alt="">
                                                    </div>
                                                    <div class="h3_course-item-author-info">
                                                        <span>By <a href="#">Ameter</a></span>
                                                    </div>
                                                </div>
                                                <div class="h3_course-item-rating">
                                                    <ul>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                    </ul>
                                                    <span>(36)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-four" role="tabpanel" aria-labelledby="pills-four-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="h3_course-item mb-30">
                                            <div class="h3_course-item-top">
                                                <div class="h3_course-item-img">
                                                    <a href="course-details.html"><img src="assets/img/course/3/1.jpg" alt=""></a>
                                                    <div class="h3_course-item-tag">
                                                        <a href="#">Leadership</a>
                                                    </div>
                                                    <div class="h3_course-item-save">
                                                        <a href="#"><i class="fa-light fa-bookmark"></i></a>
                                                    </div>
                                                </div>
                                                <div class="h3_course-content">
                                                    <div class="h3_course-content-info">
                                                        <ul>
                                                            <li><i class="fa-light fa-book-blank"></i>42 Lessons</li>
                                                            <li><i class="fa-light fa-user-group"></i>64 Students</li>
                                                            <li><i class="fa-light fa-clock"></i>20 Hours</li>
                                                        </ul>
                                                    </div>
                                                    <h5 class="h3_course-content-title"><a href="course-details.html">A Comprehensive Overview of The Field of Education.</a></h5>
                                                    <div class="h3_course-content-price">
                                                        <span><del>$120</del>$96.00</span>
                                                        <h5>Free</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="h3_course-item-bottom">
                                                <div class="h3_course-item-author">
                                                    <div class="h3_course-item-author-img">
                                                        <img src="assets/img/course/3/author-1.jpg" alt="">
                                                    </div>
                                                    <div class="h3_course-item-author-info">
                                                        <span>By <a href="#">Widget</a></span>
                                                    </div>
                                                </div>
                                                <div class="h3_course-item-rating">
                                                    <ul>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                    </ul>
                                                    <span>(46)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="h3_course-item mb-30">
                                            <div class="h3_course-item-top">
                                                <div class="h3_course-item-img">
                                                    <a href="course-details.html"><img src="assets/img/course/3/2.jpg" alt=""></a>
                                                    <div class="h3_course-item-tag">
                                                        <a href="#">Marketing</a>
                                                    </div>
                                                    <div class="h3_course-item-save">
                                                        <a href="#"><i class="fa-light fa-bookmark"></i></a>
                                                    </div>
                                                </div>
                                                <div class="h3_course-content">
                                                    <div class="h3_course-content-info">
                                                        <ul>
                                                            <li><i class="fa-light fa-book-blank"></i>35 Lessons</li>
                                                            <li><i class="fa-light fa-user-group"></i>45 Students</li>
                                                            <li><i class="fa-light fa-clock"></i>23 Hours</li>
                                                        </ul>
                                                    </div>
                                                    <h5 class="h3_course-content-title"><a href="course-details.html">Studying Principles of Educational Organizational.</a></h5>
                                                    <div class="h3_course-content-price">
                                                        <span><del>$124</del>$99.00</span>
                                                        <h5>Free</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="h3_course-item-bottom">
                                                <div class="h3_course-item-author">
                                                    <div class="h3_course-item-author-img">
                                                        <img src="assets/img/course/3/author-2.jpg" alt="">
                                                    </div>
                                                    <div class="h3_course-item-author-info">
                                                        <span>By <a href="#">Russell</a></span>
                                                    </div>
                                                </div>
                                                <div class="h3_course-item-rating">
                                                    <ul>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                    </ul>
                                                    <span>(24)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="h3_course-item mb-30">
                                            <div class="h3_course-item-top">
                                                <div class="h3_course-item-img">
                                                    <a href="course-details.html"><img src="assets/img/course/3/3.jpg" alt=""></a>
                                                    <div class="h3_course-item-tag">
                                                        <a href="#">Education</a>
                                                    </div>
                                                    <div class="h3_course-item-save">
                                                        <a href="#"><i class="fa-light fa-bookmark"></i></a>
                                                    </div>
                                                </div>
                                                <div class="h3_course-content">
                                                    <div class="h3_course-content-info">
                                                        <ul>
                                                            <li><i class="fa-light fa-book-blank"></i>26 Lessons</li>
                                                            <li><i class="fa-light fa-user-group"></i>48 Students</li>
                                                            <li><i class="fa-light fa-clock"></i>20 Hours</li>
                                                        </ul>
                                                    </div>
                                                    <h5 class="h3_course-content-title"><a href="course-details.html">Examining Strategies to Promote Inclusivity and Diversity.</a></h5>
                                                    <div class="h3_course-content-price">
                                                        <span><del>$138</del>$85.00</span>
                                                        <h5>Free</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="h3_course-item-bottom">
                                                <div class="h3_course-item-author">
                                                    <div class="h3_course-item-author-img">
                                                        <img src="assets/img/course/3/author-3.jpg" alt="">
                                                    </div>
                                                    <div class="h3_course-item-author-info">
                                                        <span>By <a href="#">Ameter</a></span>
                                                    </div>
                                                </div>
                                                <div class="h3_course-item-rating">
                                                    <ul>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                    </ul>
                                                    <span>(36)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-five" role="tabpanel" aria-labelledby="pills-five-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="h3_course-item mb-30">
                                            <div class="h3_course-item-top">
                                                <div class="h3_course-item-img">
                                                    <a href="course-details.html"><img src="assets/img/course/3/1.jpg" alt=""></a>
                                                    <div class="h3_course-item-tag">
                                                        <a href="#">Leadership</a>
                                                    </div>
                                                    <div class="h3_course-item-save">
                                                        <a href="#"><i class="fa-light fa-bookmark"></i></a>
                                                    </div>
                                                </div>
                                                <div class="h3_course-content">
                                                    <div class="h3_course-content-info">
                                                        <ul>
                                                            <li><i class="fa-light fa-book-blank"></i>42 Lessons</li>
                                                            <li><i class="fa-light fa-user-group"></i>64 Students</li>
                                                            <li><i class="fa-light fa-clock"></i>20 Hours</li>
                                                        </ul>
                                                    </div>
                                                    <h5 class="h3_course-content-title"><a href="course-details.html">A Comprehensive Overview of The Field of Education.</a></h5>
                                                    <div class="h3_course-content-price">
                                                        <span><del>$120</del>$96.00</span>
                                                        <h5>Free</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="h3_course-item-bottom">
                                                <div class="h3_course-item-author">
                                                    <div class="h3_course-item-author-img">
                                                        <img src="assets/img/course/3/author-1.jpg" alt="">
                                                    </div>
                                                    <div class="h3_course-item-author-info">
                                                        <span>By <a href="#">Widget</a></span>
                                                    </div>
                                                </div>
                                                <div class="h3_course-item-rating">
                                                    <ul>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                    </ul>
                                                    <span>(46)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="h3_course-item mb-30">
                                            <div class="h3_course-item-top">
                                                <div class="h3_course-item-img">
                                                    <a href="course-details.html"><img src="assets/img/course/3/2.jpg" alt=""></a>
                                                    <div class="h3_course-item-tag">
                                                        <a href="#">Marketing</a>
                                                    </div>
                                                    <div class="h3_course-item-save">
                                                        <a href="#"><i class="fa-light fa-bookmark"></i></a>
                                                    </div>
                                                </div>
                                                <div class="h3_course-content">
                                                    <div class="h3_course-content-info">
                                                        <ul>
                                                            <li><i class="fa-light fa-book-blank"></i>35 Lessons</li>
                                                            <li><i class="fa-light fa-user-group"></i>45 Students</li>
                                                            <li><i class="fa-light fa-clock"></i>23 Hours</li>
                                                        </ul>
                                                    </div>
                                                    <h5 class="h3_course-content-title"><a href="course-details.html">Studying Principles of Educational Organizational.</a></h5>
                                                    <div class="h3_course-content-price">
                                                        <span><del>$124</del>$99.00</span>
                                                        <h5>Free</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="h3_course-item-bottom">
                                                <div class="h3_course-item-author">
                                                    <div class="h3_course-item-author-img">
                                                        <img src="assets/img/course/3/author-2.jpg" alt="">
                                                    </div>
                                                    <div class="h3_course-item-author-info">
                                                        <span>By <a href="#">Russell</a></span>
                                                    </div>
                                                </div>
                                                <div class="h3_course-item-rating">
                                                    <ul>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                    </ul>
                                                    <span>(24)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="h3_course-item mb-30">
                                            <div class="h3_course-item-top">
                                                <div class="h3_course-item-img">
                                                    <a href="course-details.html"><img src="assets/img/course/3/3.jpg" alt=""></a>
                                                    <div class="h3_course-item-tag">
                                                        <a href="#">Education</a>
                                                    </div>
                                                    <div class="h3_course-item-save">
                                                        <a href="#"><i class="fa-light fa-bookmark"></i></a>
                                                    </div>
                                                </div>
                                                <div class="h3_course-content">
                                                    <div class="h3_course-content-info">
                                                        <ul>
                                                            <li><i class="fa-light fa-book-blank"></i>26 Lessons</li>
                                                            <li><i class="fa-light fa-user-group"></i>48 Students</li>
                                                            <li><i class="fa-light fa-clock"></i>20 Hours</li>
                                                        </ul>
                                                    </div>
                                                    <h5 class="h3_course-content-title"><a href="course-details.html">Examining Strategies to Promote Inclusivity and Diversity.</a></h5>
                                                    <div class="h3_course-content-price">
                                                        <span><del>$138</del>$85.00</span>
                                                        <h5>Free</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="h3_course-item-bottom">
                                                <div class="h3_course-item-author">
                                                    <div class="h3_course-item-author-img">
                                                        <img src="assets/img/course/3/author-3.jpg" alt="">
                                                    </div>
                                                    <div class="h3_course-item-author-info">
                                                        <span>By <a href="#">Ameter</a></span>
                                                    </div>
                                                </div>
                                                <div class="h3_course-item-rating">
                                                    <ul>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                    </ul>
                                                    <span>(36)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- course area end -->