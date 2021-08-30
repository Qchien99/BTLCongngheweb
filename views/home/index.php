    <!--Slideshow Start-->
    <div class="slider" data-flickity='{ "wrapAround": true, "autoPlay": 6000}'>
        <div class="slider-cell">
            <img src="Images/images1.jpg" />
        </div>
        <div class="slider-cell">
            <img src="Images/images2.jpg" />
        </div>
        <div class="slider-cell">
            <img src="Images/images3.jpg" />
        </div>
        <div class="slider-cell">
            <img src="Images/images4.jpg" />
        </div>
    </div>

    <!--Slideshow End-->
    <!--News start-->
    <div class="news">
        <div class="row">
            <div class="col-sm-12">
                <h2 style="text-align:center">TIN MỚI NHẤT</h2>
            </div>
            <?php 
            foreach($post1 as $post) {
            ?>
            <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo $post[6] ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="notify"><?php echo $post[5] ?></p>
                        <p class="title"><?php echo $post[1] ?></p>
                        <p class="card-text"><?php echo $post[4] ?></p>
                    </div>
                </div>
            </div>
            <?php
                }
            ?>
        </div>
        <div class="foot-part">
            <a href="#">
                <span>Xem thêm tin tức</span>
                <img src="https://img.icons8.com/material-outlined/16/ffffff/double-right.png" />
            </a>
        </div>
    </div>
    <!--News end-->
    <!-- Event start -->
    <div class="events">
        <div class="imagebg bg-fill">
            <div class="bg-overlay fill">
                <div class="row">
                    <div class="col-sm-12">
                        <h2 style="text-align:center">Sự kiện mới nhất</h2>
                    </div>

                    <div class="carousel" data-flickity='{"pageDots": false, "groupCells": 4 , "wrapAround": true, "prevNextButtons": false}'>
                        <?php

                            foreach($post2 as $post) {
                                $date = date_create("$post[3]");
                                $d = date_format($date,"d");
                                $m = date_format($date,"m");
                        ?>
                            <div class="col">
                                <div class="card" style="width: 18rem;">
                                    <img src="<?php echo $post[6] ?>" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <p class="notify">
                                            <span class="post-date-day"><?php echo $d ?></span>
                                            <span class="post-date-month">TH <?php echo $m ?></span>
                                        </p>
                                        <p class="title"><?php echo $post[1] ?></p>
                                        <p class="card-text"><?php echo $post[4] ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="foot-part">
            <a href="#">
                <span>Xem thêm sự kiện</span>
                <img src="https://img.icons8.com/material-outlined/16/ffffff/double-right.png" />
            </a>
        </div>
    </div>
    <!-- Event end -->
    <!-- Training start-->
    <div class="training">
        <div class="row">
            <div class="col-sm-10 col-centered">
                <h2 class="title">
                    ĐÀO TẠO - TUYỂN SINH
                </h2>
                <p class="text">
                    Năm 2020, Tổ chức Giáo dục Quacquarelli Symonds (viết tắt QS – Vương quốc Anh) đã đánh giá và xếp chất lượng đào tạo và nghiên cứu của ĐHBK Hà Nội trong các lĩnh vực mà Viện đang đảm nhận thuộc nhóm hạng từ 451 đến 500 trên toàn Thế giới, tiếp tục giữ vị trí số 1 tại Việt Nam.
                </p>
            </div>


            <div class="training-body">
                <?php
                    foreach($post3 as $post){
                ?>
                <div class="col-sm-6  col">
                    <div class="row2 boxshadow">
                        <div class="card fill">
                            <div class="col-6">
                                <img src="<?php echo $post[6] ?>" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-6">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $post[1] ?></h5>
                                    <p class="card-text"><?php echo $post[4] ?><a href="#">(xem tiếp)</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- Training end-->
    <!--Colab start-->
    <div class="colab">
        <div class="bg-loader bg-fill">
            <div class="bg-overlay">
                <div class="row">
                    <div class="col-sm-10 col-centered">
                        <h2 class="title">
                            HỢP TÁC ĐỐI NGOẠI
                        </h2>
                        <p class="text">
                            Viện CNTT&TT luôn coi trọng các hoạt động hợp tác quốc tế và hợp tác doanh nghiệp để nâng cao chất lượng các hoạt giảng dạy, nghiên cứu và chuyển giao công nghệ.
                        </p>
                    </div>

                    <div class="colab-body">
                        <?php
                            foreach($post3 as $post){
                        ?>
                        <div class="col-sm-6 col">
                            <div class="row2 boxshadow">
                                <div class="card">
                                    <div class="col-6">
                                        <img src="<?php echo $post[6] ?>" class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-6">
                                        <div class="card-body">
                                            <h5 class="card-title"><?php echo $post[1] ?></h5>
                                            <p class="card-text"><?php echo $post[4] ?><a href="">(xem tiếp)</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Colab emd-->
    <!-- Alumni start -->
    <div class="alumni">
        <div class="row">
            <div class="col-sm-12">
                <h2 style="text-align:center">CỰU SINH VIÊN</h2>
            </div>

            <div class="carousel" data-flickity='{"pageDots": false, "groupCells": 4 , "wrapAround": true, "prevNextButtons": false}'>
                <?php
                    foreach($post5 as $post){
                ?>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="<?php echo $post[6] ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="title"><?php echo $post[1] ?></p>
                            <p class="card-text"><?php echo $post[4] ?></p>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <!-- <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="Images/banner1.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="title">Đăng kí tham gia Virtual courses do Trường OTH Regensburg (CHLB Đức) tổ chức</p>
                            <p class="card-text">Trong bối cảnh dịch COVID-19 vẫn tiếp diễn, Trường OTH Regensburg (CHLB Đức) mở cơ hội học tập trực tuyến cho sinh...</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="Images/banner2.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="title">Thông báo về lịch Sinh hoạt công dân giữa khóa của sinh viên Viện CNTT&TT học kì 2020</p>
                            <p class="card-text">Viện CNTT&TT thông báo lịch học Sinh hoạt công dân giữa khóa dành cho sinh viên toàn Viện. Thời gian: 17-19h, thứ...					</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="Images/banner2.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="title">Chương trình thực tập tại Viện nghiên cứu Quốc gia Nhật Bản (NII) cho cao học, nghiên cứu sinh</p>
                            <p class="card-text">Trong khuôn khổ hợp tác giữa Trường Đại học Bách khoa Hà Nội và Viện Tin học Quốc gia Nhật Bản (NII),...					</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="Images/banner3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="title">Thông báo về đăng ký lớp học phần Thực tập Doanh nghiệp kỳ hè 2020.3</p>
                            <p class="card-text">Trong kỳ hè 2020.3, do tình hình dịch diễn biến phức tạp, Nhà Trường chỉ mở đăng ký lớp học phần thực...					</p>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>

    <!--Testimonial start-->
    <div class="testimonial">
        <div class="row">
            <div class="col-sm-12">
                <h2 style="text-align:center">NÓI VỀ SoICT</h2>
            </div>
            <div class="carousel" data-flickity='{ "fade": true, "imagesLoaded": true }'>
                <div class="col-9">
                    <div class="testimonial-body">
                        <div class="boxholder">
                            <div class="circle">
                                <img src="Images/Avlin-150x300.png" />
                            </div>
                            <div class="description text">
                                <blockquote>
                                    <p>Nếu bạn muốn được thử thách, Viện CNTT&TT – ĐHBK Hà Nội là nơi dành cho bạn. Bạn sẽ không chỉ bị thách thức bởi chương trình giảng dạy mà còn bởi tài năng của các sinh viên, môi trường học tập cởi mở và những cơ hội khám phá, trải nghiệm rộng lớn bên ngoài lớp học. Tôi sẽ luôn giới thiệu Viện CNTT&TT cho các sinh viên quốc tế, đặc biệt những người muốn trải nghiệm một môi trường học tập mới mẻ, cũng như trân trọng sự đa dạng trong văn hóa.</p>
                                </blockquote>
                                <strong>
                                    Alexandra Devlin
                                </strong>
                                <p>
                                    Sinh viên trao đổi từ Đại học Công nghệ Sydney (UTS, Úc)
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-9">
                    <div class="testimonial-body">
                        <div class="boxholder">
                            <div class="circle">
                                <img src="Images/Lu-Thanh-Long-001-150x250.jpg" />
                            </div>
                            <div class="description text">
                                <blockquote>
                                    <p>Thật sự biết ơn các thế hệ thầy cô đang ngày đêm dạy dỗ để cung cấp cho xã hội các kỹ sư: Năng lực tốt – Cần mẫn làm việc – Đam mê sáng tạo, đây là những tố chất quan trọng nhất của những người muốn sáng tạo và thay đổi thế giới. Với tư cách là một cựu sinh viên, một nhà tuyển dụng, tôi luôn muốn quy tụ vào Công ty MISA các kỹ sư CNTT Bách Khoa để cùng nhau sáng tạo ra nhiều sản phẩm hữu ích góp phần vào sự phát triển của đất nước và thay đổi thế giới.</p>
                                </blockquote>
                                <strong>
                                    Ông Lữ Thành Long – Chủ tịch MISA
                                </strong>
                                <p>
                                    Cựu Sinh viên K31
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-9">
                    <div class="testimonial-body">
                        <div class="boxholder">
                            <div class="circle">
                                <img src="Images/President_Mr.jpg" />
                            </div>
                            <div class="description text">
                                <blockquote>
                                    <p>Sinh viên Viện CNTT&TT không chỉ được biết đến với nền tảng kiến thức kỹ thuật sắc bén và sự thích ứng tuyệt vời với bất kỳ nhiệm vụ nào được giao, mà còn được đánh giá cao bởi tư duy phản biện và sáng tạo. Trong SVMC, sinh viên ĐHBK Hà Nội nói chung và sinh viên Viện CNTT&TT nói riêng luôn giữ các vị trí quan trọng, và trở thành thành viên chủ chốt trong nhiều dự án cốt lõi của Trung tâm. Viện và SVMC đã củng cố mối quan hệ bền chặt, được thể hiện thông qua văn bản hợp tác chính thức, mở đường cho các hoạt động tài trợ tăng cường năng lực, cũng như học bổng cho sinh viên. Hiện tại, hơn 25% nhân viên của SVMC đã tốt nghiệp từ ĐHBK Hà Nội, trong đó có Viện CNTT&TT, và chúng tôi luôn mong muốn gia tăng số lượng này. SVMC luôn đánh giá cao hiệu quả hợp tác với Viện CNTT&TT – một đối tác chiến lược toàn diện của SVMC tại Việt Nam.</p>
                                </blockquote>
                                <strong>
                                    Ông Kim In Soo
                                </strong>
                                <p>
                                    Tổng Giám đốc Trung tâm Nghiên cứu và Phát triển Điện thoại Di động Samsung Việt Nam (SVMC)
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-9">
                    <div class="testimonial-body">
                        <div class="boxholder">
                            <div class="circle">
                                <img src="Images/hung-tran-1-1-150x250.jpg" />
                            </div>
                            <div class="description text">
                                <blockquote>
                                    <p>Nếu bạn muốn có một thời sinh viên nhàn nhã thì đừng bao giờ nghĩ tới SoICT! Bạn sẽ phải học hành cực kỳ chăm chỉ, phải hy sinh nhiều sở thích cá nhân, phải thức đêm để hoàn thành các khoá học và các project từ chương trình đào tạo rất nặng. Tuy nhiên khi bạn vượt qua được chặng đường đầy gian nan này, bạn có cơ hội tham gia vào mạng lưới cựu sinh viên đã tạo ra danh tiếng cho SoICT không chỉ ở Việt nam như các giáo sư ở đại học danh tiếng Mỹ, các nhà khoa học ở NASA, các kỹ sư phần mềm ở những tập đoàn công nghệ khổng lồ, các doanh nhân ... . Đối với tôi, quyết định vào SoICT là một trong những quyết định quan trọng nhất trong sự nghiệp của mình.</p>
                                </blockquote>
                                <strong>
                                    TS. Trần Việt Hùng – Nhà sáng lập GotIT (Silicon Valley)
                                </strong>
                                <p>
                                    Cựu Sinh viên K42
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!--Testimonial end-->
    <!-- About-us start-->
    <div class="about-us">
        <div class="col-sm-12 title">
            <h2 style="text-align:center">VỀ CHÚNG TÔI</h2>
        </div>
        <div class="about-body">
            <div class="about ranking">
                <p class="name">QS ranking 2020</p>
                <p class="number">451 - 500</p>
                <p class="note">trên Thế giới trong nhóm ngành Khoa học Máy tính và Hệ thống Thông tin</p>
            </div>
            <div class="about top">
                <p class="name">Sinh viên thuộc TOP</p>
                <p class="number">1%</p>
                <p class="note">điểm cao nhất Khối A Toàn quốc mùa Tuyển sinh 2019</p>
            </div>
            <div class="about student">
                <p class="name">Sinh viên</p>
                <p class="number">4000+</p>
                <p class="note"></p>
            </div>
            <div class="about training">
                <p class="name">Chương trình đạo tạo</p>
                <p class="number">17+</p>
                <p class="note">thuộc các hệ đào tạo cử nhân, kỹ sư, thạc sỹ khoa học, tiến sỹ</p>
            </div>
            <div class="about partner">
                <p class="name">Đối tác</p>
                <p class="number">200+</p>
                <p class="note">các trường đại học, viện nghiên cứu, tập đoàn, công ty trong nước và quốc tế</p>
            </div>
        </div>
    </div>
    <!-- About-us end -->
    <!-- Video start-->
    <div class="video">
        <div class="col-sm-12 title">
            <h2 style="text-align:center">VIDEO</h2>
        </div>
        <div class="row">
            <div class="col-4">
                <iframe width="383" height="219" src="https://www.youtube.com/embed/33QNEoJ37kE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-4">
                <iframe width="383" height="219" src="https://www.youtube.com/embed/csbfk6MjBmA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-4">
                <iframe width="383" height="219" src="https://www.youtube.com/embed/nNm5mOeH4pE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <div class="foot-part">
            <a href="#">
                <span>Xem thêm video</span>
                <img src="https://img.icons8.com/material-outlined/16/ffffff/double-right.png" />
            </a>
        </div>
    </div>
    <!-- Video end-->