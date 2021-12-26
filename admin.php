<?php
    session_start();

    // unset($_SESSION['email']); //nếu chưa đăng nhập lập tức chuyển sang trang login

    if(!isset($_SESSION['email']) ){
        header('location:login.php');
    }
?>

<a href="logout.php">
    <button type="submit" name="dangxuat">Đăng xuất</button>
</a>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
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
                <button><i class="material-icons">search</i></button>
            </form>
        </div>

        <div class="h-right">
            <i class="material-icons display-this">search</i>
            <i class="material-icons">videocam</i>
            <i class="material-icons">apps</i>
            <i class="material-icons">notifications</i>
            <i class="material-icons">account_circle</i>
        </div>
    </div>

    <div class="main">
        <div class="sidebar">
            <div class="sidebar_categories">
                <div class="sidebar_category">
                    <i class="material-icons">home</i>
                    <span class="txt-span">Trang chủ</span>
                </div>
                <div class="sidebar_category">
                    <i class="material-icons">explore</i>
                    <span class="txt-span">Khám phá</span>
                </div>
                <div class="sidebar_category">
                    <i class="material-icons">video_library</i>
                    <span class="txt-span">Kênh đăng kí</span>
                </div>
            </div>
            <hr>
            <div class="sidebar_categories">
                <div class="sidebar_category">
                    <i class="material-icons">video_library</i>
                    <span class="txt-span">Thư viện</span>
                </div>
                <div class="sidebar_category">
                    <i class="material-icons">restore</i>
                    <span class="txt-span">video đã xem</span>
                </div>
            </div>
            <hr>
            <div class="sidebar_categories">
                <p>
                    Hãy đăng nhập để thích video, bình luận và đăng kí kênh.
                </p>
                <button>
                    <span class="material-icons">account_circle</span>Đăng nhập
                </button>
            </div>
            <hr>
            <div class="sidebar_categories">
                <h5>
                    HAY NHẤT TRÊN YOUTUBE
                </h5>
                <div class="sidebar_category">
                    <i class="material-icons">music_video</i>
                    <span class="txt-span">Âm nhạc</span>
                </div>
                <div class="sidebar_category">
                    <i class="material-icons">emoji_events</i>
                    <span class="txt-span"></span>Thể thao</span>
                </div>
                <div class="sidebar_category">
                    <i class="material-icons">sports_esports</i>
                    <span class="txt-span">Trò chơi</span>
                </div>
                <div class="sidebar_category">
                    <i class="material-icons">newspaper</i>
                    <span class="txt-span">Tin tức</span>
                </div>
                <div class="sidebar_category">
                    <i class="material-icons">stream</i>
                    <span class="txt-span">Sự kiện trực tiếp</span>
                </div>
                <div class="sidebar_category">
                    <i class="material-icons">3d_rotation</i>
                    <span class="txt-span">Video 360°</span>
                </div>
            </div>
            <hr>
            <div class="sidebar_categories">
                <div class="sidebar_category">
                    <i class="material-icons">control_point</i>
                    <span class="txt-span">Xem qua các kênh</span>
                </div>
            </div>
            <hr>
            <div class="sidebar_categories">
                <div class="sidebar_category">
                    <i class="material-icons">settings</i>
                    <span class="txt-span">Cài đặt</span>
                </div>
                <div class="sidebar_category">
                    <i class="material-icons">flag</i>
                    <span class="txt-span">Lịch sử báo cáo</span>
                </div>
                <div class="sidebar_category">
                    <i class="material-icons">help_outline</i>
                    <span class="txt-span">Trợ giúp</span>
                </div>
                <div class="sidebar_category">
                    <i class="material-icons">feedback</i>
                    <span class="txt-span">Gửi phản hồi</span>
                </div>
            </div>
            <hr>
            <div class="footer">
                <p>
                    Giới thiệu Báo chí Bản quyền<br> Liên hệ với chúng tôi<br> Người sáng tạo Quảng cáo Nhà phát triển
                </p>
                <p>
                    Điều khoản Quyền riêng tư Chính sách và an toàn<br> Cách YouTube hoạt động<br> Thử các tính năng mới
                </p>
                <div class="txt-footer">
                    &copy; 2021 Google LLC
                </div>
            </div>
        </div>

        <div class="videos">
            <div class="videos_container">
            </div>
        </div>
    </div>
    <script src="scrip.js"></script>
</body>
</html>