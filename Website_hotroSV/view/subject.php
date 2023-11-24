<!-- category area start -->
<section class="h3_category-area pt-135 pb-110">
                <div class="container">
                    <div class="row align-items-end mb-30">
                        <div class="col-md-9">
                            <div class="section-area-3 mb-30">
                                <span class="section-subtitle">Danh mục phổ biến</span>
                                <h2 class="section-title mb-0">Hạng mục thiết kế nổi bật.</h2>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="h3_category-section-button mb-40 text-md-end">
                                <a href="#" class="theme-btn theme-btn-medium theme-btn-3">Tất cả danh mục<i class="fa-light fa-arrow-up-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <?php 
                        foreach($list_monhoc as $monhoc){
                            extract($monhoc);
                           
                            echo "<div class='col-xl-4 col-lg-6'>
                            <div class='h3_category-item mb-30'>
                                <div class='h3_category-item-icon'>
                                    <i class='fa-light fa-square-pen'></i>
                                </div>
                                <div class='h3_category_inner'>
                                    <div class='h3_category-item-content'>
                                        <h5><a href='course.html'>".$description."</a></h5>
                                        <p>".$soluong_khoahoc."</p>
                                    </div>
                                    <div class='h3_category-btn'>
                                        <a href='#'><i class='fa-light fa-arrow-right'></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>";
                        }
                        ?>
                        <!-- <div class="col-xl-4 col-lg-6">
                            <div class="h3_category-item mb-30">
                                <div class="h3_category-item-icon">
                                    <i class="fa-light fa-square-pen"></i>
                                </div>
                                <div class="h3_category_inner">
                                    <div class="h3_category-item-content">
                                        <h5><a href="course.html">Thiết kế đồ họa</a></h5>
                                        <p>34+ Khóa học</p>
                                    </div>
                                    <div class="h3_category-btn">
                                        <a href="#"><i class="fa-light fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="col-xl-4 col-lg-6">
                            <div class="h3_category-item mb-30">
                                <div class="h3_category-item-icon">
                                    <i class="fa-light fa-grid-2-plus fa-flip-vertical"></i>
                                </div>
                                <div class="h3_category_inner">
                                    <div class="h3_category-item-content">
                                        <h5><a href="course.html">IT</a></h5>
                                        <p>126+ Khóa học</p>
                                    </div>
                                    <div class="h3_category-btn">
                                        <a href="#"><i class="fa-light fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="col-xl-4 col-lg-6">
                            <div class="h3_category-item mb-30">
                                <div class="h3_category-item-icon">
                                    <i class="fa-light fa-square-poll-vertical"></i>
                                </div>
                                <div class="h3_category_inner">
                                    <div class="h3_category-item-content">
                                        <h5><a href="course.html">Digital Marketing</a></h5>
                                        <p>54+ Khóa học</p>
                                    </div>
                                    <div class="h3_category-btn">
                                        <a href="#"><i class="fa-light fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="col-xl-4 col-lg-6">
                            <div class="h3_category-item mb-30">
                                <div class="h3_category-item-icon">
                                    <i class="fa-light fa-pen-to-square"></i>
                                </div>
                                <div class="h3_category_inner">
                                    <div class="h3_category-item-content">
                                        <h5><a href="course.html">UI/UX</a></h5>
                                        <p>68+ Khóa học</p>
                                    </div>
                                    <div class="h3_category-btn">
                                        <a href="#"><i class="fa-light fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="col-xl-4 col-lg-6">
                            <div class="h3_category-item mb-30">
                                <div class="h3_category-item-icon">
                                    <i class="fa-light fa-language"></i>
                                </div>
                                <div class="h3_category_inner">
                                    <div class="h3_category-item-content">
                                        <h5><a href="course.html">Ngôn ngữ</a></h5>
                                        <p>98+ Khóa học</p>
                                    </div>
                                    <div class="h3_category-btn">
                                        <a href="#"><i class="fa-light fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="col-xl-4 col-lg-6">
                            <div class="h3_category-item mb-30">
                                <div class="h3_category-item-icon">
                                    <i class="fa-light fa-mobile-notch"></i>
                                </div>
                                <div class="h3_category_inner">
                                    <div class="h3_category-item-content">
                                        <h5><a href="course.html">Lập trình Mobie</a></h5>
                                        <p>169+ Khóa học</p>
                                    </div>
                                    <div class="h3_category-btn">
                                        <a href="#"><i class="fa-light fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </section>
            <!-- category area end -->