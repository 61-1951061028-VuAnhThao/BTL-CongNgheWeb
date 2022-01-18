<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="icon/themify-icons-font/themify-icons/themify-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <title>Youtube Fake</title>
</head>

<body>
    <div class="header">
        <div class="h-left">
            <i id='menu' class="material-icons">menu</i>
            <img src="image/youtube.png" alt="">
        </div>

        <div class="h-search">
            <form action="">
                <input type="text" placeholder="Tìm kiếm">
                <button>
                    <i class="material-icons">search</i>
                    <span class="text-search">Tìm kiếm</span>
                </button>
                
            </form>
        </div>

        <div class="h-right">
            <div class="btn-icon">
                <button id="logo" type="button" class="btn drop-toggle" data-bs-toggle="dropdown">
                    <i class="material-icons">videocam</i>
                </button>
                <ul class="dropdown-menu" aria-labelledby="logo" style="width: 180px;">
                    <div class="logo1_categories">
                        <div class="logo1_category">
                            <i class="bi bi-play-btn"></i>
                            <span class="txt-span">Tải video lên</span>
                        </div>
                        <hr>
                        <div class="logo1_category">
                            <i class="bi bi-broadcast"></i>
                            <span class="txt-span">Phát trực tiếp</span>
                        </div>
                    </div>
                </ul>

                <button id="logo" type="button" class="btn drop-toggle" data-bs-toggle="dropdown">
                    <i class="material-icons">apps</i>
                </button>
                <ul class="dropdown-menu" aria-labelledby="logo" style="width: 260ox;">
                    <div class="logo_categories">
                        <div class="logo_category">
                            <i class="bi bi-play-btn-fill text-danger"></i>
                            <span class="txt-span">YouTube TV</span>
                        </div>
                    </div>
                    <hr>
                    <div class="logo_categories">
                        <div class="logo_category">
                            <i class="bi bi-play-circle-fill text-danger"></i>
                            <span class="txt-span">YouTube Music</span>
                        </div>
                        <div class="logo_category">
                            <i class="bi bi-play-btn-fill text-danger"></i>
                            <span class="txt-span">YouTube Kids</span>
                        </div>
                    </div>
                    <hr>
                    <div class="logo_categories">
                        <div class="logo_category">
                            <i class="bi bi-play-btn-fill text-danger"></i>
                            <span class="txt-span">YouTube dành cho nghệ sĩ</span>
                        </div>
                    </div>
                </ul>
                
                <button id="logo" type="button" class="btn drop-toggle" data-bs-toggle="dropdown">
                    <i class="material-icons">notifications</i>
                </button>
                <ul class="dropdown-menu" aria-labelledby="logo">
                        <div class="logo_category">
                            <span class="txt-span">Thông báo</span>
                            <i class="bi bi-gear" style="padding-left: 150px; padding-right: 0;"></i>
                        </div>
                        <hr>
                        <div class="logo_category text-danger">
                            <h4> Hiện chưa có thông báo </h4>
                        </div>
                </ul>
                <button id="avatar" type="button" class="btn drop-toggle" data-bs-toggle="dropdown">
                  <img src="image/avatar_logo.png" alt="">
                </button>
                <ul class="dropdown-menu" aria-labelledby="avatar">
                    <div class="header-avatar">
                        <img src="image/avatar_logo.png" alt="">
                        <div class="channel_container">
                             <div class="avatar_name">
                              Vũ Anh Thao
                             </div>
                             <a href="https://myaccount.google.com/u/0/?utm_source=YouTubeWeb&tab=rk&utm_medium=act&tab=rk&hl=vi">
                                <p>Quản lí tài khoản Google của bạn</p>
                             </a>
                        </div>
                    </div>
                    <hr>
                    <div class="logo_categories">
                        <div class="logo_category">
                            <i class="bi bi-person-square"></i>
                            <span class="txt-span">Kênh của bạn</span>
                        </div>
                        <div class="logo_category">
                            <i class="bi bi-coin"></i>
                            <span class="txt-span">Giao dịch và mua gói thành viên</span>
                        </div>
                        <div class="logo_category">
                            <i class="bi bi-gear-wide-connected"></i>
                            <span class="txt-span">YouTube Studio</span>
                        </div>
                        <div class="logo_category">
                            <i class="bi bi-person-rolodex"></i>
                            <span class="txt-span">Chuyển đổi tài khoản</span>
                        </div>
                        <a href="logout.php">
                            <div class="logo_category">
                                <i class="bi bi-box-arrow-in-right"></i>
                                <span class="txt-span">Đăng xuất</span>
                            </div>
                        </a>
                    </div>
                    <hr>
                    <div class="logo_categories">
                        <div class="logo_category">
                            <i class="bi bi-moon"></i>
                            <span class="txt-span">Giao diện</span>
                        </div>
                        <div class="logo_category">
                            <i class="bi bi-translate"></i>
                            <span class="txt-span">Ngôn ngữ : Tiếng Việt</span>
                        </div>
                        <div class="logo_category">
                            <i class="bi bi-globe"></i>
                            <span class="txt-span">Địa điểm : Việt Nam</span>
                        </div>
                        <div class="logo_category">
                            <i class="bi bi-gear"></i>
                            <span class="txt-span">Cài đặt</span>
                        </div>
                        <div class="logo_category">
                            <i class="bi bi-file-person"></i>
                            <span class="txt-span">Dữ liệu của bạn trong youtube</span>
                        </div>
                        <div class="logo_category">
                            <i class="bi bi-question-circle"></i>
                            <span class="txt-span">Trợ giúp</span>
                        </div>
                        <div class="logo_category">
                            <i class="bi bi-chat-left-text"></i>
                            <span class="txt-span">Gửi phản hồi</span>
                        </div>
                        <div class="logo_category">
                            <i class="bi bi-keyboard"></i>
                            <span class="txt-span">Phím tắt</span>
                        </div>
                    </div>
                </ul>
            </div>
        </div>
    </div>