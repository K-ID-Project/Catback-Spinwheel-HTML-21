<head>
    <title>Vong quay</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
        integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
        crossorigin="anonymous" />

    <script type="text/javascript" src="./js/Winwheel.js"></script>
    <script type="text/javascript" src="./js/clipboardjs/clipboard.min.js"></script>
    <link rel="stylesheet" type="text/css" href="main.css">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>


</head>

<body style="background-color: #B53029;">
    <div style="position:fixed;bottom:10;left:10;z-index: 20;">
    </div>
    <div class="desk-only" style="padding:10px"></div>
    <div class=" col-lg-12"
        style="background-image: url('./assets/img/BG-01.jpg');background-size: cover;margin: 0 auto;border:5px solid #EB6C6C;border-radius:30px;max-width: 1200px;">
        <div class="first-padd" style="padding:20px"></div>
        <div class="col-lg-12 main-cont">
            <!-- desktop & tablet header -->
            <div class="desk-res-hd row">
                <div class="col-xl-4 col-md-2 col-sm-12" style="padding:5px">
                    <div class="d-flex justify-content-between">
                        <a href="/">
                            <img class="catback-logo" src="./assets/svg/catback_logo.svg" width="150px">
                        </a>
                    </div>
                </div>
                <div class="col-xl-8 col-md-10 col-sm-12" style="padding:5px;">
                    <div class="row">
                        <div class="col-xl-3 offset-xl-1 col-lg-3 offset-lg-2 col-md-3 offset-md-1 col">
                            <a class="lich-vq">
                                <img class="hd-item" src="./assets/img/lich_vq.png"
                                    style="width: 150px;cursor: pointer;">
                            </a>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col">
                            <a class="dsach-tg">
                                <img class="hd-item" src="./assets/img/dsach_tg.png"
                                    style="width: 150px;cursor: pointer;">
                            </a>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col">
                            <a class="thele-ct">
                                <img class="hd-item" src="./assets/img/thele_ct.png"
                                    style="width: 150px;cursor: pointer;">
                            </a>
                        </div>
                        <div class="col-xl-2 col-lg-1 col-md-2 col">
                            <a id="logo_right" style="float: right;">
                                <img src="./assets/svg/logo_right.svg" width="50px">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- desktop & tablet header -->
            <!-- mobile header -->
            <div class="mobile-res-hd row" style="display: none;">
                <div class="col-xl-4 col-md-2 col-sm-12" style="padding:5px">
                    <div class="d-flex justify-content-between">
                        <a href="/">
                            <img class="catback-logo" src="./assets/svg/catback_logo.svg" width="140px">
                        </a>
                        <a class="d-flex align-items-center" href="#"><img src="./assets/svg/logo_right.svg"
                                width="50px"></a>
                    </div>
                </div>
            </div>
            <div class="mobile-res-hd row" style="display: none;">
                <div class="col-xl-8 col-md-10 col-sm-12" style="padding:3px;margin-top:-5px">
                    <div class="col-12 d-flex justify-content-between" style="padding:0px">
                        <img src="./assets/img/lich_vq.png" class="col-4 lich-vq"
                            style="height: 50px;padding:2px;cursor: pointer;">
                        <img src="./assets/img/dsach_tg.png" class="col-4 dsach-tg"
                            style="height: 50px;padding:2px;cursor: pointer;">
                        <img src="./assets/img/thele_ct.png" class="col-4 thele-ct"
                            style="height: 50px;padding:2px;cursor: pointer;">
                    </div>
                </div>
            </div>
            <!-- mobile header -->

            <div class="desktop-padd-section-1" style="padding:50px"></div>
            <!-- section 1 -->
            <div class="row">
                <!-- banner gioi thieu -->
                <div class="col-lg-6 col-sm-12">
                    <img class="vqmm-title" src="./assets/svg/vqnp.svg" width="90%">
                    <!-- <div id="tapd" style="width: 500px;height: 200px;margin: 0 auto;"> -->
                    <!-- </div> -->
                </div>
                <!-- banner gioi thieu -->
                <!-- vong quay -->
                <div class="col-lg-6 col-sm-12" style="padding:0px">
                    <div class="wheel-view d-flex justify-content-center" style="height: 500px;">
                        <!-- <img src="./assets/img/vqmm.png" width="100%"> -->
                        <div class="wheel-point" style="position: absolute;background-image: url('./assets/img/pointer.png');
                            background-size: cover;width: 100%;height: 100px;z-index: 2;">
                        </div>
                        <div id="nhap-nhay" class="" style="position: absolute;
                            background-image: url('./spinwheel-cb.gif');
                            background-size: cover;
                            
                            width: 433px;height: 433px;z-index: 0;margin-top:22px">
                        </div>
                        <canvas style="position: absolute;z-index: 1;" id="canvas" width="480px" height="480px"
                            ddata-responsiveMinWidth="180" data-responsiveScaleHeight="false"
                            data-responsiveMargin="10"></canvas>
                    </div>
                    <div style="padding: 10px"></div>
                    <div class="d-flex justify-content-between" style="padding:0px;">
                        <div class="col-6 px-1 d-flex justify-content-center">
                            <button class="btn-wheel" onClick="startSpin();"
                                style="background-image: url(./assets/svg/btn.svg);">
                                <div style="margin-bottom:10px"><b id="turn-count" style="font-size: 25px;"></b></div>
                            </button>
                        </div>
                        <div class="col-6 px-1 d-flex justify-content-center">
                            <button class="btn-wheel" onClick="extraTurn();"
                                style="background-image: url(./assets/svg/btn.svg);">
                                <div style="margin-bottom:10px"><b style="font-size: 25px;color:#7C1001">Chia sẻ</b>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- vong quay -->
            </div>
            <!-- section 1 -->
            <div class="desktop-padd-section-1"></div>
            <hr class="hidden-on-desktop">
            <div class="desktop-padd-section-2" style="padding: 50px"></div>
            <!-- section 2 -->
            <div class="row">
                <div class="col-lg-6" id="lichvongquay">
                    <div style="padding:10px">
                        <img src="./assets/img/shedule-title.png" width="60%">
                    </div>

                    <div class="col-lg-12"
                        style="background-image: linear-gradient( #E2815B, #F7BD97);border-radius: 15px;padding-top:10px;padding-bottom:10px">


                        <div class="row d-flex align-items-start">
                            <div class="col-2 circle-day-jnd">
                                <div style="margin-bottom:10px">
                                    <div class="circle-day-text">29/9</div>
                                </div>
                            </div>
                            <div class="col-2 circle-day-jnd">
                                <div style="margin-bottom:10px">
                                    <div class="circle-day-text">29/9</div>
                                </div>
                            </div>
                            <div class="col-2 circle-day-jnd">
                                <div style="margin-bottom:10px">
                                    <div class="circle-day-text">29/9</div>
                                </div>
                            </div>
                            <div class="col-2 circle-day-jnd">
                                <div style="margin-bottom:10px">
                                    <div class="circle-day-text">29/9</div>
                                </div>
                            </div>
                            <div class="col-2 circle-day-jnd">
                                <div style="margin-bottom:10px">
                                    <div class="circle-day-text">29/9</div>
                                </div>
                            </div>
                            <div class="col-2 circle-day-jnd">
                                <div style="margin-bottom:10px">
                                    <div class="circle-day-text">29/9</div>
                                </div>
                            </div>
                            <div class="col-2 circle-day-jnd">
                                <div style="margin-bottom:10px">
                                    <div class="circle-day-text">29/9</div>
                                </div>
                            </div>
                            <div class="col-2 circle-day-miss">
                                <div style="margin-bottom:10px">
                                    <div class="circle-day-text">29/9</div>
                                </div>
                            </div>
                            <div class="col-2 circle-day-nxt">
                                <div style="margin-bottom:10px">
                                    <div class="circle-day-text">29/9</div>
                                </div>
                            </div>
                            <div class="col-2 circle-day-lf">
                                <div style="margin-bottom:10px">
                                    <div class="circle-day-text">29/9</div>
                                </div>
                            </div>
                            <div class="col-2 circle-day-lf">
                                <div style="margin-bottom:10px">
                                    <div class="circle-day-text">29/9</div>
                                </div>
                            </div>
                            <div class="col-2 circle-day-lf">
                                <div style="margin-bottom:10px">
                                    <div class="circle-day-text">29/9</div>
                                </div>
                            </div>
                            <div class="col-2 circle-day-lf">
                                <div style="margin-bottom:10px">
                                    <div class="circle-day-text">29/9</div>
                                </div>
                            </div>
                            <div class="col-2 circle-day-lf">
                                <div style="margin-bottom:10px">
                                    <div class="circle-day-text">29/9</div>
                                </div>
                            </div>
                            <div class="col-2 circle-day-lf">
                                <div style="margin-bottom:10px">
                                    <div class="circle-day-text">29/9</div>
                                </div>
                            </div>

                        </div>


                    </div>

                    <div class="row" style="color: #6C0B01;font-size:12.8px">
                        <div class="col-lg-4">
                            <div class="row" style="padding:15px;">
                                <div
                                    style="width:18px;height:18px;border-radius:50px;background-image: linear-gradient(90deg, #C33B0F, #FE3C2F);margin-right:5px">
                                </div>
                                <b class="text-uppercase">đã tham gia</b>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="row" style="padding:15px;">
                                <div
                                    style="width:18px;height:18px;border-radius:50px;background-color:#FF872E;margin-right:5px">
                                </div>
                                <b class="text-uppercase">ngày tiếp theo</b>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="row" style="padding:15px;">
                                <div
                                    style="width:18px;height:18px;border-radius:50px;background-color:#FFC764;margin-right:5px">
                                </div>
                                <b class="text-uppercase">đã bỏ lỡ</b>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6" id="ketquatrungthuong">
                    <div style="padding:10px">
                        <img src="./assets/img/result-title.png" width="80%">
                    </div>

                    <div class="col-lg-12"
                        style="background-image: linear-gradient( #E2815B, #F7BD97);border-radius: 15px;height: 370px;">

                        <div class="user-card col-12">
                            <div class="user-card-contain d-flex justify-content-between">
                                <div class="row">
                                    <div style="padding:8px;margin-left: 15px;">
                                        <img src="./assets/svg/avatar.svg" width="45px">
                                    </div>
                                    <div class="d-flex align-items-center" style="color:#6C0B01;font-size:18px">
                                        <b>Văn Lân</b>
                                    </div>
                                    <div class="d-flex align-items-center" style="color:#DD2325;font-size:15px">
                                        (do******34@gmail.com)
                                    </div>
                                </div>
                                <div class="d-flex align-items-center" style="padding:10px">
                                    <img src="./assets/img/ticket-100k.png" width="55px">
                                </div>
                            </div>
                            <div class="user-card-backshadow"></div>
                        </div>
                        <div class="user-card col-12">
                            <div class="user-card-contain d-flex justify-content-between">
                                <div class="row">
                                    <div style="padding:8px;margin-left: 15px;">
                                        <img src="./assets/svg/avatar.svg" width="45px">
                                    </div>
                                    <div class="d-flex align-items-center" style="color:#6C0B01;font-size:18px">
                                        <b>Đinh Lan Anh</b>
                                    </div>
                                    <div class="d-flex align-items-center" style="color:#DD2325;font-size:15px">
                                        (ho******92@gmail.com)
                                    </div>
                                </div>
                                <div class="d-flex align-items-center" style="padding:10px">
                                    <img src="./assets/img/ticket-vouch.png" width="55px">
                                </div>
                            </div>
                            <div class="user-card-backshadow"></div>
                        </div>
                        <div class="user-card col-12">
                            <div class="user-card-contain d-flex justify-content-between">
                                <div class="row">
                                    <div style="padding:8px;margin-left: 15px;">
                                        <img src="./assets/svg/avatar.svg" width="45px">
                                    </div>
                                    <div class="d-flex align-items-center" style="color:#6C0B01;font-size:18px">
                                        <b>tuyen ho</b>
                                    </div>
                                    <div class="d-flex align-items-center" style="color:#DD2325;font-size:15px">
                                        (ho******39@gmail.com)
                                    </div>
                                </div>
                                <div class="d-flex align-items-center" style="padding:10px">
                                    <img src="./assets/img/ticket-lucky.png" width="55px">
                                </div>
                            </div>
                            <div class="user-card-backshadow"></div>
                        </div>
                        <div class="user-card col-12">
                            <div class="user-card-contain d-flex justify-content-between">
                                <div class="row">
                                    <div style="padding:8px;margin-left: 15px;">
                                        <img src="./assets/svg/avatar.svg" width="45px">
                                    </div>
                                    <div class="d-flex align-items-center" style="color:#6C0B01;font-size:18px">
                                        <b>MonKey NooB</b>
                                    </div>
                                    <div class="d-flex align-items-center" style="color:#DD2325;font-size:15px">
                                        (da******84@gmail.com)
                                    </div>
                                </div>
                                <div class="d-flex align-items-center" style="padding:10px">
                                    <img src="./assets/img/ticket-20k.png" width="55px">
                                </div>
                            </div>
                            <div class="user-card-backshadow"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- section 2 -->

            <div style="padding: 25px"></div>

            <div class="container">

            </div>

            <!-- section 3 -->
            <div class="col-lg-12">
                <img src="./assets/img/history-title.png" width="52%" id="lichsunhanthuong">

                <div class="d-flex justify-content-between" style="margin-left:-65px;margin-right: 45px;padding:10px;">
                    <div class="d-flex align-items-center" style="padding:20px">
                        <img class="prev slick-arrow" src="./assets/svg/left-arrow.svg" width="15px"
                            style="cursor: pointer;">
                    </div>
                    <div class="col-12"
                        style="border: 2px solid #C63B10;padding:10px;border-radius:15px;height: 155px;">
                        <section class="regular slider">

                            <div class="user-history">
                                <div class="user-history-contain">
                                    <div class=""
                                        style="color:#6C0B01;font-size:18px;text-align:center;padding-top:10px">
                                        <b>29/9</b>
                                        <div style="justify-content: center;">
                                            <img src="./assets/img/ticket-100k.png" width="55px" style="margin: 0 auto">
                                        </div>
                                    </div>
                                </div>
                                <div class="user-history-backshadow"></div>
                            </div>

                            <div class="user-history">
                                <div class="user-history-contain">
                                    <div class=""
                                        style="color:#6C0B01;font-size:18px;text-align:center;padding-top:10px">
                                        <b>30/9</b>
                                        <div style="justify-content: center;">
                                            <img src="./assets/img/ticket-20k.png" width="55px" style="margin: 0 auto">
                                        </div>
                                    </div>
                                </div>
                                <div class="user-history-backshadow"></div>
                            </div>

                            <div class="user-history">
                                <div class="user-history-contain">
                                    <div class=""
                                        style="color:#6C0B01;font-size:18px;text-align:center;padding-top:10px">
                                        <b>1/10</b>
                                        <div style="justify-content: center;">
                                            <img src="./assets/img/ticket-100k.png" width="55px" style="margin: 0 auto">
                                        </div>
                                    </div>
                                </div>
                                <div class="user-history-backshadow"></div>
                            </div>


                            <div class="user-history">
                                <div class="user-history-contain">
                                    <div class=""
                                        style="color:#6C0B01;font-size:18px;text-align:center;padding-top:10px">
                                        <b>2/10</b>
                                        <div style="justify-content: center;">
                                            <img src="./assets/img/ticket-lucky.png" width="55px"
                                                style="margin: 0 auto">
                                        </div>
                                    </div>
                                </div>
                                <div class="user-history-backshadow"></div>
                            </div>

                            <div class="user-history">
                                <div class="user-history-contain">
                                    <div class=""
                                        style="color:#6C0B01;font-size:18px;text-align:center;padding-top:10px">
                                        <b>3/10</b>
                                        <div style="justify-content: center;">
                                            <img src="./assets/img/ticket-10k.png" width="55px" style="margin: 0 auto">
                                        </div>
                                    </div>
                                </div>
                                <div class="user-history-backshadow"></div>
                            </div>

                            <div class="user-history">
                                <div class="user-history-contain">
                                    <div class=""
                                        style="color:#6C0B01;font-size:18px;text-align:center;padding-top:10px">
                                        <b>4/10</b>
                                        <div style="justify-content: center;">
                                            <img src="./assets/img/ticket-vouch.png" width="55px"
                                                style="margin: 0 auto">
                                        </div>
                                    </div>
                                </div>
                                <div class="user-history-backshadow"></div>
                            </div>

                            <div class="user-history">
                                <div class="user-history-contain">
                                    <div class=""
                                        style="color:#6C0B01;font-size:18px;text-align:center;padding-top:10px">
                                        <b>4/10</b>
                                        <div style="justify-content: center;">
                                            <img src="./assets/img/ticket-lucky.png" width="55px"
                                                style="margin: 0 auto">
                                        </div>
                                    </div>
                                </div>
                                <div class="user-history-backshadow"></div>
                            </div>

                            <div class="user-history">
                                <div class="user-history-contain">
                                    <div class=""
                                        style="color:#6C0B01;font-size:18px;text-align:center;padding-top:10px">
                                        <b>4/10</b>
                                        <div style="justify-content: center;">
                                            <img src="./assets/img/ticket-100k.png" width="55px" style="margin: 0 auto">
                                        </div>
                                    </div>
                                </div>
                                <div class="user-history-backshadow"></div>
                            </div>
                        </section>
                    </div>

                    <div class="d-flex align-items-center" style="padding:10px">
                        <img class="next slick-arrow" src="./assets/svg/right-arrow.svg" width="15px"
                            style="cursor: pointer;">
                    </div>
                </div>

            </div>
            <!-- section 3 -->
            <div style="padding: 20px"></div>
            <!-- section 4 -->
            <div class="col-lg-12"><img src="./assets/img/rule-title.png" width="38%" id="thele"></div>
            <div class="col-lg-12 row" style="padding:0px">
                <div class="col-lg-6" style="padding: 0px">
                    <!-- scale to 108% for mobile -->
                    <img class="rule-mob" src="./assets/svg/rule-left-1.svg" width="100%">
                    <img class="rule-mob" src="./assets/svg/rule-left-2.svg" width="100%">
                    <img class="rule-mob" src="./assets/svg/rule-left-3.svg" width="100%">
                    <img class="rule-mob" src="./assets/svg/rule-left-4.svg" width="100%">
                </div>
                <div class="col-lg-6" style="padding: 0px">
                    <img class="rule-mob" src="./assets/svg/rule-right-1.svg" width="100%">
                    <img class="rule-mob" src="./assets/svg/rule-right-2.svg" width="100%">
                </div>
            </div>
            <!-- section 4 -->
            <!-- section 5 -->
            <img class="prev slick-arrow" src="./assets/svg/hr-ln.svg" width="100%" style="padding: 30px 0px">
            <div class="col-lg-12 row" style="padding: 0px">
                <div class="col-lg-5">
                    <b>
                        <p class="footer-text">CÔNG TY CỔ PHẦN CATBACK</p>
                    </b>
                    <h6 class="footer-text">Địa chỉ: 12B Nguyễn Hữu Cảnh, P19, Q. Bình Thạnh, TP HCM</h6>
                    <h6 class="footer-text">Mã số thuế: 0316440310</h6>
                    <h6 class="footer-text">© 2020 - Bản quyền thuộc về Công ty Cổ phần Catback</h6>
                </div>
                <div class="col-lg-3 alignend-mobile">
                    <b>
                        <p class="footer-text">HỢP TÁC VÀ LIÊN KẾT</p>
                    </b>
                    <h6 class="footer-text">Email: contact@catback.vn</h6>
                    <h6 class="footer-text">Chính sách bảo mật</h6>
                </div>
                <div class="col-lg-4">
                    <b>
                        <p class="footer-text">KẾT NỐI VỚI CHÚNG TÔI</p>
                    </b>
                    <div class="col-12" style="padding: 0px">
                        <a href="https://www.facebook.com/catback.vn/" target="_blank">
                            <img src="./assets/img/icon-fb.png" width="35px" height="35px">
                        </a>
                        <a href="https://www.youtube.com/channel/UCD5o0OGFHrJKJeY_9RWtGBQ/featured?view_as=subscriber&sub_confirmation=1"
                            target="_blank">
                            <img src="./assets/img/icon-ytb.png" width="35px" height="35px">
                        </a>
                    </div>
                    <div class="row" style="padding: 15px 15px">
                        <img src="./assets/img/qr-code.png" width="110px" height="110px" style="padding: 5px">
                        <div class="d-flex flex-column" style="padding: 5px">
                            <a href="https://apps.apple.com/vn/app/catback/id1524891988" target="_blank">
                                <img src="./assets/img/icon-apst.png" width="120px" style="padding: 5px 0px">
                            </a>
                            <a href="https://play.google.com/store/apps/details?id=com.aifiona.catback&hl=vi"
                                target="_blank">
                                <img src="./assets/img/icon-gp.png" width="120px" style="padding: 5px 0px">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- section 5 -->
            <div style="padding: 20px"></div>
            <!-- modal trung thuong 10k -->
            <div class="modal fade" id="trungthuong-10" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                    <div class="modal-content"
                        style="border-radius:30px;border:5px solid #FFC764;display:inline-block;overflow: hidden;">
                        <div class="row modal-padd-left-fix" style="padding-left: 15px;">
                            <div class="col-lg-5" style="padding:0px;">
                                <img class="show-on-desktop" src="./assets/img/meo-modal.png" width="100%"
                                    height="100%">
                            </div>
                            <div class="col-lg-7 modal-padd-right-fix">
                                <div class="hidden-on-desktop">
                                    <img src="./assets/img/meo-modal-mobile.png" width="100%">
                                </div>
                                <div class="d-flex justify-content-between modal-padding" style="padding:0px 15px">
                                    <div class="d-flex justify-content-start" style="padding: 15px 0px">
                                        <div class="d-flex justify-content-between"
                                            style="padding:5px 10px;background-color: #F94F43;color: #fff;border-radius: 5px;">
                                            <div>
                                                <div style="font-size: 14px;">Thẻ điện thoại</div>
                                                <div style="font-size: 18px;font-weight: bold;">10.000 Đ</div>
                                            </div>
                                            <div class="d-flex align-items-center" style="padding-left:8px">
                                                <img class="next slick-arrow" src="./assets/img/title-stick.png"
                                                    width="15px">
                                            </div>
                                        </div>
                                    </div>
                                    <div style="padding:10px;" data-dismiss="modal" aria-label="Close">
                                        <img src="./assets/img/close-modal.png" width="20px" height="20px">
                                    </div>
                                </div>
                                <div style="padding: 15px;">
                                    <div>
                                        <div style="padding:12px 0px;font-size:18px;color: #F94F43;font-weight: bold;">
                                            Thẻ điện thoại mệnh giá 10.000 Đ
                                        </div>
                                        <div style="font-size: 14px;color: #4F4F4F">
                                            của chương trình vòng quay Nhân Phẩm. Vui lòng điền đầy đủ thông tin để nhận
                                            thưởng. Catback sẽ trao thưởng cho bạn trong vòng 3 ngày làm việc.
                                        </div>
                                    </div>
                                    <div style="padding: 10px 0">
                                        <div style="padding: 8px 0">
                                            <input type="text" class="form-control" placeholder="Tên khách hàng">
                                        </div>
                                        <div style="padding: 8px 0">
                                            <input type="email" class="form-control" placeholder="Email">
                                        </div>
                                        <div style="padding: 8px 0">
                                            <input type="text" class="form-control" placeholder="Số điện thoại">
                                        </div>
                                        <div class="row" style="padding: 3px 0">
                                            <div class="col-6" style="padding-right: 5px;">
                                                <select class="custom-select my-1 mr-sm-2"
                                                    id="inlineFormCustomSelectPref">
                                                    <option value="" selected disabled>Chọn nhà mạng</option>
                                                    <option value="Mobifone">Mobifone</option>
                                                    <option value="Vinaphone">Vinaphone</option>
                                                    <option value="Viettel">Viettel</option>
                                                    <option value="Vietnam mobile">Vietnamobile</option>
                                                </select>
                                            </div>
                                            <div class="col-6" style="padding-left: 5px;">
                                                <select class="custom-select my-1 mr-sm-2"
                                                    id="inlineFormCustomSelectPref">
                                                    <option value="tbtruoc">Thuê bao trả trước</option>
                                                    <option value="tbsau">Thuê bao trả sau</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <a href="#" style="text-decoration:none;">
                                            <div class="d-flex align-items-center justify-content-center"
                                                style="color:#fff;background-image: linear-gradient(#FD7045, #E13432);width:180px;height: 40px;border-radius: 5px;">
                                                Hoàn tất
                                            </div>
                                        </a>
                                    </div>
                                    <div style="font-size: 14px;color: #828282;padding:10px 0px">
                                        <i>(Vui lòng cung cấp tên nhà mạng mà bạn đang sử dụng và loại thuê bao trả
                                            trước/trả sau) đối với khách hàng trúng giải thưởng là thẻ điện thoại.
                                        </i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal trung thuong  10k -->
            <!-- modal trung thuong 20k -->
            <div class="modal fade" id="trungthuong-20" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                    <div class="modal-content"
                        style="border-radius:30px;border:5px solid #FFC764;display:inline-block;overflow: hidden;">
                        <div class="row modal-padd-left-fix" style="padding-left: 15px;">
                            <div class="col-lg-5" style="padding:0px;">
                                <img class="show-on-desktop" src="./assets/img/meo-modal.png" width="100%"
                                    height="100%">
                            </div>
                            <div class="col-lg-7 modal-padd-right-fix">
                                <div class="hidden-on-desktop">
                                    <img src="./assets/img/meo-modal-mobile.png" width="100%">
                                </div>
                                <div class="d-flex justify-content-between modal-padding" style="padding:0px 15px">
                                    <div class="d-flex justify-content-start" style="padding: 15px 0px">
                                        <div class="d-flex justify-content-between"
                                            style="padding:5px 10px;background-color: #F94F43;color: #fff;border-radius: 5px;">
                                            <div>
                                                <div style="font-size: 14px;">Thẻ điện thoại</div>
                                                <div style="font-size: 18px;font-weight: bold;">20.000 Đ</div>
                                            </div>
                                            <div class="d-flex align-items-center" style="padding-left:8px">
                                                <img class="next slick-arrow" src="./assets/img/title-stick.png"
                                                    width="15px">
                                            </div>
                                        </div>
                                    </div>
                                    <div style="padding:10px;" data-dismiss="modal" aria-label="Close">
                                        <img src="./assets/img/close-modal.png" width="20px" height="20px">
                                    </div>
                                </div>
                                <div style="padding: 15px;">
                                    <div>
                                        <div style="padding:12px 0px;font-size:18px;color: #F94F43;font-weight: bold;">
                                            Thẻ điện thoại mệnh giá 20.000 Đ
                                        </div>
                                        <div style="font-size: 14px;color: #4F4F4F">
                                            của chương trình vòng quay Nhân Phẩm. Vui lòng điền đầy đủ thông tin để nhận
                                            thưởng. Catback sẽ trao thưởng cho bạn trong vòng 3 ngày làm việc.
                                        </div>
                                    </div>
                                    <div style="padding: 10px 0">
                                        <div style="padding: 8px 0">
                                            <input type="text" class="form-control" placeholder="Tên khách hàng">
                                        </div>
                                        <div style="padding: 8px 0">
                                            <input type="email" class="form-control" placeholder="Email">
                                        </div>
                                        <div style="padding: 8px 0">
                                            <input type="text" class="form-control" placeholder="Số điện thoại">
                                        </div>
                                        <div class="row" style="padding: 3px 0">
                                            <div class="col-6" style="padding-right: 5px;">
                                                <select class="custom-select my-1 mr-sm-2"
                                                    id="inlineFormCustomSelectPref">
                                                    <option value="" selected disabled>Chọn nhà mạng</option>
                                                    <option value="Mobifone">Mobifone</option>
                                                    <option value="Vinaphone">Vinaphone</option>
                                                    <option value="Viettel">Viettel</option>
                                                    <option value="Vietnam mobile">Vietnamobile</option>
                                                </select>
                                            </div>
                                            <div class="col-6" style="padding-left: 5px;">
                                                <select class="custom-select my-1 mr-sm-2"
                                                    id="inlineFormCustomSelectPref">
                                                    <option value="tbtruoc">Thuê bao trả trước</option>
                                                    <option value="tbsau">Thuê bao trả sau</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <a href="#" style="text-decoration:none;">
                                            <div class="d-flex align-items-center justify-content-center"
                                                style="color:#fff;background-image: linear-gradient(#FD7045, #E13432);width:180px;height: 40px;border-radius: 5px;">
                                                Hoàn tất
                                            </div>
                                        </a>
                                    </div>
                                    <div style="font-size: 14px;color: #828282;padding:10px 0px">
                                        <i>(Vui lòng cung cấp tên nhà mạng mà bạn đang sử dụng và loại thuê bao trả
                                            trước/trả sau) đối với khách hàng trúng giải thưởng là thẻ điện thoại.
                                        </i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal trung thuong  20k -->
            <!-- modal trung thuong 100k -->
            <div class="modal fade" id="trungthuong-100" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                    <div class="modal-content"
                        style="border-radius:30px;border:5px solid #FFC764;display:inline-block;overflow: hidden;">
                        <div class="row modal-padd-left-fix" style="padding-left: 15px;">
                            <div class="col-lg-5" style="padding:0px;">
                                <img class="show-on-desktop" src="./assets/img/meo-modal.png" width="100%"
                                    height="100%">
                            </div>
                            <div class="col-lg-7 modal-padd-right-fix">
                                <div class="hidden-on-desktop">
                                    <img src="./assets/img/meo-modal-mobile.png" width="100%">
                                </div>
                                <div class="d-flex justify-content-between modal-padding" style="padding:0px 15px">
                                    <div class="d-flex justify-content-start" style="padding: 15px 0px">
                                        <div class="d-flex justify-content-between"
                                            style="padding:5px 10px;background-color: #F94F43;color: #fff;border-radius: 5px;">
                                            <div>
                                                <div style="font-size: 14px;">Thẻ điện thoại</div>
                                                <div style="font-size: 18px;font-weight: bold;">100.000 Đ</div>
                                            </div>
                                            <div class="d-flex align-items-center" style="padding-left:8px">
                                                <img class="next slick-arrow" src="./assets/img/title-stick.png"
                                                    width="15px">
                                            </div>
                                        </div>
                                    </div>
                                    <div style="padding:10px;" data-dismiss="modal" aria-label="Close">
                                        <img src="./assets/img/close-modal.png" width="20px" height="20px">
                                    </div>
                                </div>
                                <div style="padding: 15px;">
                                    <div>
                                        <div style="padding:12px 0px;font-size:18px;color: #F94F43;font-weight: bold;">
                                            Thẻ điện thoại mệnh giá 100.000 Đ
                                        </div>
                                        <div style="font-size: 14px;color: #4F4F4F">
                                            của chương trình vòng quay Nhân Phẩm. Vui lòng điền đầy đủ thông tin để nhận
                                            thưởng. Catback sẽ trao thưởng cho bạn trong vòng 3 ngày làm việc.
                                        </div>
                                    </div>
                                    <div style="padding: 10px 0">
                                        <div style="padding: 8px 0">
                                            <input type="text" class="form-control" placeholder="Tên khách hàng">
                                        </div>
                                        <div style="padding: 8px 0">
                                            <input type="email" class="form-control" placeholder="Email">
                                        </div>
                                        <div style="padding: 8px 0">
                                            <input type="text" class="form-control" placeholder="Số điện thoại">
                                        </div>
                                        <div class="row" style="padding: 3px 0">
                                            <div class="col-6" style="padding-right: 5px;">
                                                <select class="custom-select my-1 mr-sm-2"
                                                    id="inlineFormCustomSelectPref">
                                                    <option value="" selected disabled>Chọn nhà mạng</option>
                                                    <option value="Mobifone">Mobifone</option>
                                                    <option value="Vinaphone">Vinaphone</option>
                                                    <option value="Viettel">Viettel</option>
                                                    <option value="Vietnam mobile">Vietnamobile</option>
                                                </select>
                                            </div>
                                            <div class="col-6" style="padding-left: 5px;">
                                                <select class="custom-select my-1 mr-sm-2"
                                                    id="inlineFormCustomSelectPref">
                                                    <option value="tbtruoc">Thuê bao trả trước</option>
                                                    <option value="tbsau">Thuê bao trả sau</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <a href="#" style="text-decoration:none;">
                                            <div class="d-flex align-items-center justify-content-center"
                                                style="color:#fff;background-image: linear-gradient(#FD7045, #E13432);width:180px;height: 40px;border-radius: 5px;">
                                                Hoàn tất
                                            </div>
                                        </a>
                                    </div>
                                    <div style="font-size: 14px;color: #828282;padding:10px 0px">
                                        <i>(Vui lòng cung cấp tên nhà mạng mà bạn đang sử dụng và loại thuê bao trả
                                            trước/trả sau) đối với khách hàng trúng giải thưởng là thẻ điện thoại.
                                        </i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal trung thuong  100k -->
            <!-- modal voucher 20k -->
            <div class="modal fade" id="trungthuong-voucher" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content"
                        style="border-radius:30px;border:5px solid #FFC764;background-image: linear-gradient(#FD7045, #E13432)">
                        <div style="color:#fff;padding:10px">
                            <div class="d-flex justify-content-center"><img src="./assets/img/logo-catback-w.png"
                                    width="100px" height="80px">
                            </div>
                            <div style="text-align:center;padding:10px 0;">
                                Chúc mừng, bạn đã trúng thưởng voucher !
                            </div>
                            <div class="p-2">
                                <div class="p-1 d-flex justify-content-center" style="padding:5px 10px;background-color: #fff;color: #F94F43;border-radius: 5px;width: fit-content;
                                margin: 0 auto;border: 3px dashed #FFBD4A">
                                <div class="px-1">
                                    <div style="font-size: 14px;">Voucher</div>
                                    <div id="voucher-code" style="font-size: 18px;font-weight: bold;">MAVOUCHER</div>
                                </div>
                            </div>
                            </div>
                            <div class="d-flex justify-content-center" style="padding:10px 0;">
                                <a href="#" style="text-decoration:none;">
                                    <div id="copy-voucher" class="d-flex align-items-center justify-content-center"
                                        data-clipboard-action="copy" data-clipboard-target="#voucher-code"
                                        style="color:#fff;background-color:#FC7045;width:180px;height: 40px;border-radius: 5px;width: 220px;">
                                        <b>SỬ DỤNG NGAY</b>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal voucher 20k -->
            <!-- modal het luot quay -->
            <div class="modal fade" id="trungthuong-hetluot" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content"
                        style="border-radius:30px;border:5px solid #FFC764;background-image: linear-gradient(#FD7045, #E13432)">
                        <div class="" style="color:#fff;padding:10px">
                            <div class="d-flex justify-content-center"><img src="./assets/img/logo-catback-w.png"
                                    width="100px" height="80px"></div>
                            <div style="text-align:center;padding:10px 0;">
                                Rất tiếc, bạn đã hết lượt quay hôm nay. Vui lòng quay lại vào ngày mai để nhận thêm lượt
                                quay mới nhé.
                            </div>
                            <div class="d-flex justify-content-center" style="padding:10px 0;">
                                <a href="#" style="text-decoration:none;">
                                    <div class="d-flex align-items-center justify-content-center" data-dismiss="modal"
                                        aria-label="Close"
                                        style="color:#FFFFFF;background-color:#BDBDBD;width:180px;height: 40px;border-radius: 5px;width: 220px;">
                                        <b>BẠN CÒN 0 LƯỢT QUAY</b>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal het luot quay -->
            <!-- modal may man -->
            <div class="modal fade" id="trungthuong-mayman" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content"
                        style="border-radius:30px;border:5px solid #FFC764;background-image: linear-gradient(#FD7045, #E13432)">
                        <div class="" style="color:#fff;padding:10px">
                            <div class="d-flex justify-content-center"><img src="./assets/img/logo-catback-w.png"
                                    width="100px" height="80px"></div>
                            <div style="text-align:center;padding:10px 0;">
                                Chúc bạn may mắn lần sau
                            </div>
                            <div class="d-flex justify-content-center" style="padding:10px 0;">
                                <a href="#" style="text-decoration:none;">
                                    <div class="d-flex align-items-center justify-content-center" data-dismiss="modal"
                                        aria-label="Close"
                                        style="color:#EB5757;background-color:#fff;width:180px;height: 40px;border-radius: 5px;width: 220px;">
                                        <b>BẠN CÒN 2 LƯỢT QUAY</b>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal may man -->
            <!-- modal them luot -->
            <div class="modal fade" id="trungthuong-themluot" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content"
                        style="border-radius:30px;border:5px solid #FFC764;background-image: linear-gradient(#FD7045, #E13432)">
                        <div class="" style="color:#fff;padding:10px">
                            <div class="d-flex justify-content-center"><img src="./assets/img/logo-catback-w.png"
                                    width="100px" height="80px"></div>
                            <div style="text-align:center;padding:10px 0;">
                                Chúc mừng bạn đã nhận được thêm 2 lượt quay từ nhiệm vụ hôm nay. Bạn có thể tiếp tục
                                quay để nhận quà nhé.
                            </div>
                            <div class="d-flex justify-content-center" style="padding:10px 0;">
                                <a href="#" style="text-decoration:none;">
                                    <div class="d-flex align-items-center justify-content-center" data-dismiss="modal"
                                        aria-label="Close"
                                        style="color:#EB5757;background-color:#fff;width:180px;height: 40px;border-radius: 5px;width: 220px;">
                                        <b>BẠN CÒN 2 LƯỢT QUAY</b>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal them luot -->
        </div>



        <script>


            // (function (b) {
            //     b.toast = function (a, h, g, l, k) {
            //         b("#toast-container").length || (b("#tapd").prepend('<div id="toast-container" aria-live="polite" aria-atomic="true"></div>'), b("#toast-container").append('<div id="toast-wrapper"></div>')); var c = "", d = "", e = "text-muted", f = "", m = "object" === typeof a ? a.title || "" : a || "Notice!"; h = "object" === typeof a ? a.subtitle || "" : h || ""; g = "object" === typeof a ? a.content || "" : g || ""; k = "object" === typeof a ? a.delay || 3E3 : k || 3E3; switch ("object" === typeof a ? a.type || "" : l || "info") {
            //             case "info": c = "bg-info";
            //                 f = e = d = "text-white"; break; case "success": c = "bg-success"; f = e = d = "text-white"; break; case "warning": case "warn": c = "bg-warning"; f = e = d = "text-white"; break; case "error": case "danger": c = "bg-danger", f = e = d = "text-white"
            //         }a = '<div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="' + k + '">' + ('<div class="toast-header ' + c + " " + d + '">') + ('<strong class="mr-auto">' + m + "</strong>"); a += '<small class="' + e + '">' + h + "</small>"; a += '<button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">';
            //         a += '<span aria-hidden="true" class="' + f + '">&times;</span>'; a += "</button>"; a += "</div>"; "" !== g && (a += '<div class="toast-body">', a += g, a += "</div>"); a += "</div>"; b("#toast-wrapper").append(a); b("#toast-wrapper .toast:last").toast("show")
            //     }
            // })(jQuery);

            // const TYPES = ['1', '2', '3', '4'],
            //     TITLES = {
            //         '1': 'NguyenVR',
            //         '2': 'HGVr@12',
            //         '3': '23fdz',
            //         '4': 'abc123'
            //     },
            //     CONTENT = {
            //         '1': 'NguyenVR vừa trúng 100k',
            //         '2': 'HGVr@12 vừa trúng 10k',
            //         '3': '23fdz vừa trúng Voucher',
            //         '4': 'abc123 vừa trúng 200k'
            //     };
            // function show_toast() {
            //     let type = TYPES[Math.floor(Math.random() * TYPES.length)],
            //         title = TITLES[type],
            //         content = CONTENT[type];

            //     $.toast({
            //         title: 'Thông báo',
            //         subtitle: 'now',
            //         content: content,
            //         type: 'warning',
            //         delay: 10000
            //     });
            // }

            // trigg show toast every 1 second
            // setInterval(
            //     function () {
            //         // var width = $(window).width();
            //         // console.log(width);
            //         // if (width > 977) {
            //         //     show_toast();
            //         // }
            //         // $("#toast-container").animate({ scrollTop: $('#toast-container').prop("scrollHeight")}, 100);
            //     }, 1500);

            // $(".lich-vq").click(function () {
            //     document.getElementById("lichvongquay").scrollIntoView({ behavior: "smooth" })
            // })
            // $(".dsach-tg").click(function () {
            //     document.getElementById("ketquatrungthuong").scrollIntoView({ behavior: "smooth" })
            // })
            // $(".thele-ct").click(function () {
            //     document.getElementById("thele").scrollIntoView({ behavior: "smooth" })
            // })

            var clipboard = new ClipboardJS('#copy-voucher');

            clipboard.on('success', function (e) {
                console.info('Action:', e.action);
                console.info('Text:', e.text);
                console.info('Trigger:', e.trigger);
                
                e.clearSelection();
            });

            clipboard.on('error', function (e) {
                console.error('Action:', e.action);
                console.error('Trigger:', e.trigger);
            });

            $(window).resize(function () {
                var wwidth = $(window).width();
                console.log(wwidth);
                if (wwidth < 481) {
                    let spinWidth = $("#canvas").width();
                    let spinBlink = $("#nhap-nhay").width();
                    $("#nhap-nhay").width(spinWidth - (43.8 - spinWidth * 0.005));
                    $("#nhap-nhay").height(spinWidth - (43.8 - spinWidth * 0.005));
                    $("#nhap-nhay").css('margin-top', 20);
                    $(".wheel-view").height(spinWidth);
                    console.log('vong quay: ' + spinWidth + ' width, ' + spinWidth + ' height' + ' | vong nhap nhay: ' + spinBlink);
                } else {
                    $("#nhap-nhay").width(433);
                    $("#nhap-nhay").height(433);
                    $("#nhap-nhay").css('margin-top', 22);
                }

            });

            $(".lich-vq").click(function () {
                $('html, body').animate({
                    scrollTop: $("#lichvongquay").offset().top
                }, 300);
            });

            $(".dsach-tg").click(function () {
                $('html, body').animate({
                    scrollTop: $("#ketquatrungthuong").offset().top
                }, 300);
            });

            $(".thele-ct").click(function () {
                $('html, body').animate({
                    scrollTop: $("#thele").offset().top
                }, 300);
            });



            var countt = 3;
            let theWheel = new Winwheel({
                'numSegments': 6,
                'outerRadius': 150,
                'drawMode': 'image',
                'drawText': false,
                'textFontSize': 12,
                'textOrientation': 'curved',
                'textDirection': 'reversed',
                'textAlignment': 'outer',
                'textMargin': 5,
                'textFontFamily': 'monospace',
                'textStrokeStyle': 'black',
                'textLineWidth': 2,
                'textFillStyle': 'white',
                'responsive': 'true',
                'segments':
                    [
                        { 'text': '100' },
                        { 'text': 'vchr' },
                        { 'text': '20' },
                        { 'text': 'vchr' },
                        { 'text': '10' },
                        { 'text': 'mm' }
                    ],
                'animation':
                {
                    'type': 'spinToStop',
                    'duration': 0.5,
                    'spins': 5,
                    'callbackFinished': alertPrize
                }
            });


            let loadedImg = new Image(375, 375);
            loadedImg.onload = function () {
                theWheel.wheelImage = loadedImg;
                theWheel.draw();
            }

            loadedImg.src = "./assets/img/spinfx.png";
            let wheelPower = 0;
            let wheelSpinning = false;

            function startSpin() {

                if (wheelSpinning == false) {
                    // set ket qua truoc khi quay
                    let stopAt = 70;
                    console.log("stop at: " + stopAt);
                    theWheel.animation.stopAngle = stopAt;

                    theWheel.startAnimation();
                    theWheel.rotationAngle = 0;
                    wheelSpinning = true;
                }

            }



            function resetWheel() {
                theWheel.stopAnimation(false);
                //theWheel.rotationAngle = 0;
                theWheel.draw();
                $("#turn-count").text("Quay " + countt);
                wheelSpinning = false;
            }

            function extraTurn() {
                countt += 2;
                $("#turn-count").text("Quay " + countt);
                resetWheel();
                console.log(countt);
                $('#trungthuong-themluot').modal('toggle');
            }

            function alertPrize(indicatedSegment) {
                // alert("The wheel stopped on " + indicatedSegment.text);
                console.log(indicatedSegment.text)
                countt--;
                $("#turn-count").text("Quay " + countt);
                console.log(countt);
                if (countt > 0) {
                    resetWheel()
                }
                switch (indicatedSegment.text) {
                    case ('100'): {
                        $('#trungthuong-100').modal('toggle');
                        break;
                    };
                    case ('20'): {
                        $('#trungthuong-20').modal('toggle');
                        break;
                    };
                    case ('10'): {
                        $('#trungthuong-10').modal('toggle');
                        break;
                    };
                    case ('vchr'): {
                        $('#trungthuong-voucher').modal('toggle');
                        break;
                    };
                    case ('mm'): {
                        $('#trungthuong-mayman').modal('toggle');
                        break;
                    };
                }
                //resetWheel()
            }


            $(document).ready(function () {
                $("#turn-count").text("Quay " + countt)
                $('.regular').slick({
                    slidesToShow: 7,
                    slidesToScroll: 3,
                    centerMode: false,
                    infinite: false,
                    prevArrow: $('.prev'),
                    nextArrow: $('.next'),
                    responsive: [
                        {
                            breakpoint: 1100,
                            settings: {
                                slidesToShow: 5,
                                slidesToScroll: 2,
                            }
                        },
                        {
                            breakpoint: 992,
                            settings: {
                                slidesToShow: 5,
                                slidesToScroll: 2,
                            }
                        },
                        {
                            breakpoint: 820,
                            settings: {
                                slidesToShow: 4,
                                slidesToScroll: 1
                            }
                        },
                        {
                            breakpoint: 492,
                            settings: {
                                slidesToShow: 3,
                                slidesToScroll: 1
                            }
                        },
                        {
                            breakpoint: 402,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 1
                            }
                        },
                        {
                            breakpoint: 325,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1
                            }
                        }
                    ]
                });

            });

            $(window).bind('load', function () {
                setTimeout(function () {
                    let spinWidth = $("#canvas").width();
                    $(".wheel-view").height(spinWidth);
                    var wwidth = $(window).width();
                    console.log(wwidth);
                    if (wwidth < 481) {
                        let spinWidth = $("#canvas").width();
                        let spinBlink = $("#nhap-nhay").width();
                        $("#nhap-nhay").width(spinWidth - (43.8 - spinWidth * 0.005));
                        $("#nhap-nhay").height(spinWidth - (43.8 - spinWidth * 0.005));
                        $("#nhap-nhay").css('margin-top', 20);
                        console.log('vong quay: ' + spinWidth + ' width, ' + spinWidth + ' height' + ' | vong nhap nhay: ' + spinBlink);
                    } else {
                        $("#nhap-nhay").width(433);
                        $("#nhap-nhay").height(433);
                        $("#nhap-nhay").css('margin-top', 22);
                    }
                    console.log(spinWidth);
                }, 200);
            });

        </script>

</body>