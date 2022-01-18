<?php
    session_start();

    // unset($_SESSION['isLoginOK']); //nếu chưa đăng nhập lập tức chuyển sang trang login

    if(!isset($_SESSION['isLoginOK']) ){
        header('location:login.php');
    }
    include("template/header.php");
    include("template/sidebar.php");
?>

        <div class="videos">
            <div class="container-part">
                <div class="part-heading">
                    <h3>Đề xuất</h3>
                </div>

                <div class="part-videos">
                    <div class="video-item">
                        <div class="video-image-box">
                            <img class="video-thumb"
                                src="https://i.ytimg.com/vi/Pw9u2XSOg_8/hqdefault.jpg?sqp=-oaymwEcCNACELwBSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLCnmRoAbmT_QIn_r1LxD31Ap5E_OA"
                                alt="">

                            <div class="video-absolute video-watch-after">
                                <i class="material-icons">query_builder</i>
                            </div>
                            <p class="video-absolute video-lenght">4:13</p>
                        </div>
                        <div class="video-avatar-box">
                            <img src="https://yt3.ggpht.com/oi5JeAJ4i4ypi1dST6NxZmQfIq_WT0i14VD-DPaJpyoIp_4kUjGHDOAYDM7D02WjE5BbsxV1=s88-c-k-c0x00ffffff-no-nd-rj"
                                alt="">
                        </div>
                        <h5 class="video-name">Vì Đó Là Em #VDLE (너라서) - OSAD x Shin Hyun Woo</h5>
                        <div class="meta-video">
                            <p class="video-author">OSAD Official <span class="material-icons">check_circle</span></p>
                            <p>
                                <span class="video-views">2,3 Tr lượt xem</span>
                                <span class="material-icons">fiber_manual_record</span>
                                <span class="created-from-now">2 năm trước</span>
                            </p>
                        </div>
                        <div class="video-action">
                            <i class="material-icons">more_vert</i>

                            <ul class="video-option">
                                <li><a href="">Không quan tâm</a></li>
                                <li><a href="">Thêm vào Xem sau</a></li>
                                <li><a href="">Thêm vào danh sách phát</a></li>
                                <li><a href="">Báo cáo</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="video-item">
                        <div class="video-image-box">
                            <img class="video-thumb"
                                src="https://i.ytimg.com/vi/ldd__tB_XyQ/hqdefault.jpg?sqp=-oaymwEcCNACELwBSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLB5jte_XaUgRQWdj5VQONANkKcx0A"
                                alt="">

                            <div class="video-absolute video-watch-after">
                                <i class="material-icons">query_builder</i>
                            </div>
                            <p class="video-absolute video-lenght">4:13</p>
                        </div>
                        <div class="video-avatar-box">
                            <img src="https://yt3.ggpht.com/kPdz4HvdgDovV3qKeIu_IPczEx9HORvnNPP93ishIUG2iKRogzI0w4gz885gYssDVt_31SD7Lw=s88-c-k-c0x00ffffff-no-rj"
                                alt="">
                        </div>
                        <h5 class="video-name">TỎ TÌNH HOÀN MỸ - CÓ EM LÀ VÔ CÙNG HOÀN MỸ</h5>
                        <div class="meta-video">
                            <p class="video-author">Hẹn Hò Hoàn Mỹ<span class="material-icons">check_circle</span></p>
                            <p>
                                <span class="video-views">2,2 Tr lượt xem</span>
                                <span class="material-icons">fiber_manual_record</span>
                                <span class="created-from-now">1 năm trước</span>
                            </p>
                        </div>
                        <div class="video-action">
                            <i class="material-icons">more_vert</i>

                            <ul class="video-option">
                                <li><a href="">Không quan tâm</a></li>
                                <li><a href="">Thêm vào Xem sau</a></li>
                                <li><a href="">Thêm vào danh sách phát</a></li>
                                <li><a href="">Báo cáo</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="video-item">
                        <div class="video-image-box">
                            <img class="video-thumb"
                                src="https://i.ytimg.com/vi/Pw9u2XSOg_8/hqdefault.jpg?sqp=-oaymwEcCNACELwBSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLCnmRoAbmT_QIn_r1LxD31Ap5E_OA"
                                alt="">

                            <div class="video-absolute video-watch-after">
                                <i class="material-icons">query_builder</i>
                            </div>
                            <p class="video-absolute video-lenght">4:13</p>
                        </div>
                        <div class="video-avatar-box">
                            <img src="https://yt3.ggpht.com/oi5JeAJ4i4ypi1dST6NxZmQfIq_WT0i14VD-DPaJpyoIp_4kUjGHDOAYDM7D02WjE5BbsxV1=s88-c-k-c0x00ffffff-no-nd-rj"
                                alt="">
                        </div>
                        <h5 class="video-name">Vì đó là em</h5>
                        <div class="meta-video">
                            <p class="video-author">OSAD Official <span class="material-icons">check_circle</span></p>
                            <p>
                                <span class="video-views">2,3 Tr lượt xem</span>
                                <span class="material-icons">fiber_manual_record</span>
                                <span class="created-from-now">2 năm trước</span>
                            </p>
                        </div>
                        <div class="video-action">
                            <i class="material-icons">more_vert</i>

                            <ul class="video-option">
                                <li><a href="">Không quan tâm</a></li>
                                <li><a href="">Thêm vào Xem sau</a></li>
                                <li><a href="">Thêm vào danh sách phát</a></li>
                                <li><a href="">Báo cáo</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="video-item">
                        <div class="video-image-box">
                            <img class="video-thumb"
                                src="https://i.ytimg.com/vi/Pw9u2XSOg_8/hqdefault.jpg?sqp=-oaymwEcCNACELwBSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLCnmRoAbmT_QIn_r1LxD31Ap5E_OA"
                                alt="">

                            <div class="video-absolute video-watch-after">
                                <i class="material-icons">query_builder</i>
                            </div>
                            <p class="video-absolute video-lenght">4:13</p>
                        </div>
                        <div class="video-avatar-box">
                            <img src="https://yt3.ggpht.com/oi5JeAJ4i4ypi1dST6NxZmQfIq_WT0i14VD-DPaJpyoIp_4kUjGHDOAYDM7D02WjE5BbsxV1=s88-c-k-c0x00ffffff-no-nd-rj"
                                alt="">
                        </div>
                        <h5 class="video-name">Vì đó là em</h5>
                        <div class="meta-video">
                            <p class="video-author">OSAD Official <span class="material-icons">check_circle</span></p>
                            <p>
                                <span class="video-views">2,3 Tr lượt xem</span>
                                <span class="material-icons">fiber_manual_record</span>
                                <span class="created-from-now">2 năm trước</span>
                            </p>
                        </div>
                        <div class="video-action">
                            <i class="material-icons">more_vert</i>

                            <ul class="video-option">
                                <li><a href="">Không quan tâm</a></li>
                                <li><a href="">Thêm vào Xem sau</a></li>
                                <li><a href="">Thêm vào danh sách phát</a></li>
                                <li><a href="">Báo cáo</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="video-item">
                        <div class="video-image-box">
                            <img class="video-thumb"
                                src="https://i.ytimg.com/vi/Pw9u2XSOg_8/hqdefault.jpg?sqp=-oaymwEcCNACELwBSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLCnmRoAbmT_QIn_r1LxD31Ap5E_OA"
                                alt="">

                            <div class="video-absolute video-watch-after">
                                <i class="material-icons">query_builder</i>
                            </div>
                            <p class="video-absolute video-lenght">4:13</p>
                        </div>
                        <div class="video-avatar-box">
                            <img src="https://yt3.ggpht.com/oi5JeAJ4i4ypi1dST6NxZmQfIq_WT0i14VD-DPaJpyoIp_4kUjGHDOAYDM7D02WjE5BbsxV1=s88-c-k-c0x00ffffff-no-nd-rj"
                                alt="">
                        </div>
                        <h5 class="video-name">Vì đó là em</h5>
                        <div class="meta-video">
                            <p class="video-author">OSAD Official <span class="material-icons">check_circle</span></p>
                            <p>
                                <span class="video-views">2,3 Tr lượt xem</span>
                                <span class="material-icons">fiber_manual_record</span>
                                <span class="created-from-now">2 năm trước</span>
                            </p>
                        </div>
                        <div class="video-action">
                            <i class="material-icons">more_vert</i>

                            <ul class="video-option">
                                <li><a href="">Không quan tâm</a></li>
                                <li><a href="">Thêm vào Xem sau</a></li>
                                <li><a href="">Thêm vào danh sách phát</a></li>
                                <li><a href="">Báo cáo</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="video-item">
                        <div class="video-image-box">
                            <img class="video-thumb"
                                src="https://i.ytimg.com/vi/Pw9u2XSOg_8/hqdefault.jpg?sqp=-oaymwEcCNACELwBSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLCnmRoAbmT_QIn_r1LxD31Ap5E_OA"
                                alt="">

                            <div class="video-absolute video-watch-after">
                                <i class="material-icons">query_builder</i>
                            </div>
                            <p class="video-absolute video-lenght">4:13</p>
                        </div>
                        <div class="video-avatar-box">
                            <img src="https://yt3.ggpht.com/oi5JeAJ4i4ypi1dST6NxZmQfIq_WT0i14VD-DPaJpyoIp_4kUjGHDOAYDM7D02WjE5BbsxV1=s88-c-k-c0x00ffffff-no-nd-rj"
                                alt="">
                        </div>
                        <h5 class="video-name">Vì đó là em</h5>
                        <div class="meta-video">
                            <p class="video-author">OSAD Official <span class="material-icons">check_circle</span></p>
                            <p>
                                <span class="video-views">2,3 Tr lượt xem</span>
                                <span class="material-icons">fiber_manual_record</span>
                                <span class="created-from-now">2 năm trước</span>
                            </p>
                        </div>
                        <div class="video-action">
                            <i class="material-icons">more_vert</i>

                            <ul class="video-option">
                                <li><a href="">Không quan tâm</a></li>
                                <li><a href="">Thêm vào Xem sau</a></li>
                                <li><a href="">Thêm vào danh sách phát</a></li>
                                <li><a href="">Báo cáo</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="video-item">
                        <div class="video-image-box">
                            <img class="video-thumb"
                                src="https://i.ytimg.com/vi/Pw9u2XSOg_8/hqdefault.jpg?sqp=-oaymwEcCNACELwBSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLCnmRoAbmT_QIn_r1LxD31Ap5E_OA"
                                alt="">

                            <div class="video-absolute video-watch-after">
                                <i class="material-icons">query_builder</i>
                            </div>
                            <p class="video-absolute video-lenght">4:13</p>
                        </div>
                        <div class="video-avatar-box">
                            <img src="https://yt3.ggpht.com/oi5JeAJ4i4ypi1dST6NxZmQfIq_WT0i14VD-DPaJpyoIp_4kUjGHDOAYDM7D02WjE5BbsxV1=s88-c-k-c0x00ffffff-no-nd-rj"
                                alt="">
                        </div>
                        <h5 class="video-name">Vì đó là em</h5>
                        <div class="meta-video">
                            <p class="video-author">OSAD Official <span class="material-icons">check_circle</span></p>
                            <p>
                                <span class="video-views">2,3 Tr lượt xem</span>
                                <span class="material-icons">fiber_manual_record</span>
                                <span class="created-from-now">2 năm trước</span>
                            </p>
                        </div>
                        <div class="video-action">
                            <i class="material-icons">more_vert</i>

                            <ul class="video-option">
                                <li><a href="">Không quan tâm</a></li>
                                <li><a href="">Thêm vào Xem sau</a></li>
                                <li><a href="">Thêm vào danh sách phát</a></li>
                                <li><a href="">Báo cáo</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="video-item">
                        <div class="video-image-box">
                            <img class="video-thumb"
                                src="https://i.ytimg.com/vi/Pw9u2XSOg_8/hqdefault.jpg?sqp=-oaymwEcCNACELwBSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLCnmRoAbmT_QIn_r1LxD31Ap5E_OA"
                                alt="">

                            <div class="video-absolute video-watch-after">
                                <i class="material-icons">query_builder</i>
                            </div>
                            <p class="video-absolute video-lenght">4:13</p>
                        </div>
                        <div class="video-avatar-box">
                            <img src="https://yt3.ggpht.com/oi5JeAJ4i4ypi1dST6NxZmQfIq_WT0i14VD-DPaJpyoIp_4kUjGHDOAYDM7D02WjE5BbsxV1=s88-c-k-c0x00ffffff-no-nd-rj"
                                alt="">
                        </div>
                        <h5 class="video-name">Vì đó là em</h5>
                        <div class="meta-video">
                            <p class="video-author">OSAD Official <span class="material-icons">check_circle</span></p>
                            <p>
                                <span class="video-views">2,3 Tr lượt xem</span>
                                <span class="material-icons">fiber_manual_record</span>
                                <span class="created-from-now">2 năm trước</span>
                            </p>
                        </div>
                        <div class="video-action">
                            <i class="material-icons">more_vert</i>

                            <ul class="video-option">
                                <li><a href="">Không quan tâm</a></li>
                                <li><a href="">Thêm vào Xem sau</a></li>
                                <li><a href="">Thêm vào danh sách phát</a></li>
                                <li><a href="">Báo cáo</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="video-item">
                        <div class="video-image-box">
                            <img class="video-thumb"
                                src="https://i.ytimg.com/vi/Pw9u2XSOg_8/hqdefault.jpg?sqp=-oaymwEcCNACELwBSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLCnmRoAbmT_QIn_r1LxD31Ap5E_OA"
                                alt="">

                            <div class="video-absolute video-watch-after">
                                <i class="material-icons">query_builder</i>
                            </div>
                            <p class="video-absolute video-lenght">4:13</p>
                        </div>
                        <div class="video-avatar-box">
                            <img src="https://yt3.ggpht.com/oi5JeAJ4i4ypi1dST6NxZmQfIq_WT0i14VD-DPaJpyoIp_4kUjGHDOAYDM7D02WjE5BbsxV1=s88-c-k-c0x00ffffff-no-nd-rj"
                                alt="">
                        </div>
                        <h5 class="video-name">Vì đó là em</h5>
                        <div class="meta-video">
                            <p class="video-author">OSAD Official <span class="material-icons">check_circle</span></p>
                            <p>
                                <span class="video-views">2,3 Tr lượt xem</span>
                                <span class="material-icons">fiber_manual_record</span>
                                <span class="created-from-now">2 năm trước</span>
                            </p>
                        </div>
                        <div class="video-action">
                            <i class="material-icons">more_vert</i>

                            <ul class="video-option">
                                <li><a href="">Không quan tâm</a></li>
                                <li><a href="">Thêm vào Xem sau</a></li>
                                <li><a href="">Thêm vào danh sách phát</a></li>
                                <li><a href="">Báo cáo</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="video-item">
                        <div class="video-image-box">
                            <img class="video-thumb"
                                src="https://i.ytimg.com/vi/Pw9u2XSOg_8/hqdefault.jpg?sqp=-oaymwEcCNACELwBSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLCnmRoAbmT_QIn_r1LxD31Ap5E_OA"
                                alt="">

                            <div class="video-absolute video-watch-after">
                                <i class="material-icons">query_builder</i>
                            </div>
                            <p class="video-absolute video-lenght">4:13</p>
                        </div>
                        <div class="video-avatar-box">
                            <img src="https://yt3.ggpht.com/oi5JeAJ4i4ypi1dST6NxZmQfIq_WT0i14VD-DPaJpyoIp_4kUjGHDOAYDM7D02WjE5BbsxV1=s88-c-k-c0x00ffffff-no-nd-rj"
                                alt="">
                        </div>
                        <h5 class="video-name">Vì đó là em</h5>
                        <div class="meta-video">
                            <p class="video-author">OSAD Official <span class="material-icons">check_circle</span></p>
                            <p>
                                <span class="video-views">2,3 Tr lượt xem</span>
                                <span class="material-icons">fiber_manual_record</span>
                                <span class="created-from-now">2 năm trước</span>
                            </p>
                        </div>
                        <div class="video-action">
                            <i class="material-icons">more_vert</i>

                            <ul class="video-option">
                                <li><a href="">Không quan tâm</a></li>
                                <li><a href="">Thêm vào Xem sau</a></li>
                                <li><a href="">Thêm vào danh sách phát</a></li>
                                <li><a href="">Báo cáo</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="video-item">
                        <div class="video-image-box">
                            <img class="video-thumb"
                                src="https://i.ytimg.com/vi/Pw9u2XSOg_8/hqdefault.jpg?sqp=-oaymwEcCNACELwBSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLCnmRoAbmT_QIn_r1LxD31Ap5E_OA"
                                alt="">

                            <div class="video-absolute video-watch-after">
                                <i class="material-icons">query_builder</i>
                            </div>
                            <p class="video-absolute video-lenght">4:13</p>
                        </div>
                        <div class="video-avatar-box">
                            <img src="https://yt3.ggpht.com/oi5JeAJ4i4ypi1dST6NxZmQfIq_WT0i14VD-DPaJpyoIp_4kUjGHDOAYDM7D02WjE5BbsxV1=s88-c-k-c0x00ffffff-no-nd-rj"
                                alt="">
                        </div>
                        <h5 class="video-name">Vì đó là em</h5>
                        <div class="meta-video">
                            <p class="video-author">OSAD Official <span class="material-icons">check_circle</span></p>
                            <p>
                                <span class="video-views">2,3 Tr lượt xem</span>
                                <span class="material-icons">fiber_manual_record</span>
                                <span class="created-from-now">2 năm trước</span>
                            </p>
                        </div>
                        <div class="video-action">
                            <i class="material-icons">more_vert</i>

                            <ul class="video-option">
                                <li><a href="">Không quan tâm</a></li>
                                <li><a href="">Thêm vào Xem sau</a></li>
                                <li><a href="">Thêm vào danh sách phát</a></li>
                                <li><a href="">Báo cáo</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="video-item">
                        <div class="video-image-box">
                            <img class="video-thumb"
                                src="https://i.ytimg.com/vi/Pw9u2XSOg_8/hqdefault.jpg?sqp=-oaymwEcCNACELwBSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLCnmRoAbmT_QIn_r1LxD31Ap5E_OA"
                                alt="">

                            <div class="video-absolute video-watch-after">
                                <i class="material-icons">query_builder</i>
                            </div>
                            <p class="video-absolute video-lenght">4:13</p>
                        </div>
                        <div class="video-avatar-box">
                            <img src="https://yt3.ggpht.com/oi5JeAJ4i4ypi1dST6NxZmQfIq_WT0i14VD-DPaJpyoIp_4kUjGHDOAYDM7D02WjE5BbsxV1=s88-c-k-c0x00ffffff-no-nd-rj"
                                alt="">
                        </div>
                        <h5 class="video-name">Vì đó là em</h5>
                        <div class="meta-video">
                            <p class="video-author">OSAD Official <span class="material-icons">check_circle</span></p>
                            <p>
                                <span class="video-views">2,3 Tr lượt xem</span>
                                <span class="material-icons">fiber_manual_record</span>
                                <span class="created-from-now">2 năm trước</span>
                            </p>
                        </div>
                        <div class="video-action">
                            <i class="material-icons">more_vert</i>

                            <ul class="video-option">
                                <li><a href="">Không quan tâm</a></li>
                                <li><a href="">Thêm vào Xem sau</a></li>
                                <li><a href="">Thêm vào danh sách phát</a></li>
                                <li><a href="">Báo cáo</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
    include("template/footer.php");
?>