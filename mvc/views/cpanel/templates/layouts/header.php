<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta http-equiv="X-UA-Compatible" content= "IE=edge,chrome=1">
	<meta name= "viewport" content= "width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
	<meta http-equiv="Expires" content="-1">
	<meta http-equiv="Pragma" content="no-cache">
	<meta http-equiv="Cache-control" content="no-cache">
	<meta http-equiv="Cache" content="no-cache">
	<meta name="renderer" content="webkit">
	<meta name="format-detection" content="telephone=no">
	<meta name="apple-mobile-web-app-capable" content="yes"/>
    <!-- Cdn -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Code -->
    <link rel="stylesheet" href="<?= _TEMPLATE . 'css/root.css' ?>" type="text/css" media="all" />
    <link rel="stylesheet" href="<?= _TEMPLATE . 'css/layouts/header.css' ?>" type="text/css" media="all" />
	<link rel="stylesheet" href="<?= _TEMPLATE . 'css/views/'. $dataResources['css'] .'.css' ?>" type="text/css" media="all" />
    <link rel="stylesheet" href="<?= _TEMPLATE . 'css/layouts/footer.css' ?>" type="text/css" media="all" />
    <link rel="shortcut icon" href="<?= _TEMPLATE . 'images/icons/favicon-32x32.ico' ?>" type="image/x-icon" />
    <!-- Libary -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <title><?= $dataResources['title'] ?></title>
</head>
<body>
<header>
    <?php require_once ("handle/active.handle.php") ?>
    <div class="wrapper-header">
        <div class="header-left">
            <section>
                <p>SD</p>
                <small>usego.com</small>
            </section>
        </div>
        <div class="header_center">
            <ul id="directional">
                <li>
                    <a href="#">Trang chủ</a>
                    <hr class="line <?php if($active->setActive() == _Home) echo ' active' ?>">
                </li>
                <li class="item-topic">
                    <a href="#">Chủ đề</a>
                    <hr class="line">
                    <div id="part-dropdown">
                        <ul class="dropdown-content">
                            <li>
                                <a href="#">
                                    <i class="fa-regular fa-newspaper"></i>
                                    <span>Tất cả bài viết</span>
                                    <small>1924 bài viết</small>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa-regular fa-message"></i>
                                    <span>Xã hội</span>
                                    <small>192 bài viết</small>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa-regular fa-gem"></i>
                                    <span>Sang trọng</span>
                                    <small>443 bài viết</small>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa-regular fa-heart"></i>
                                    <span>Tình yêu</span>
                                    <small>1924 bài viết</small>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa-solid fa-store"></i>
                                    <span>Thương mại</span>
                                    <small>524 bài viết</small>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa-regular fa-credit-card"></i>
                                    <span>Thương mại online</span>
                                    <small>524 bài viết</small>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa-brands fa-bilibili"></i>
                                    <span>Robot</span>
                                    <small>52 bài viết</small>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa-solid fa-laptop-code"></i>
                                    <span>Công nghệ</span>
                                    <small>224 bài viết</small>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class='bx bx-book-open'></i>
                                    <span>Sách</span>
                                    <small>224 bài viết</small>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa-solid fa-earth-europe"></i>
                                    <span>Thế giới</span>
                                    <small>224 bài viết</small>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa-solid fa-film"></i>
                                    <span>Phim</span>
                                    <small>624 bài viết</small>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa-regular fa-paper-plane"></i>
                                    <span>Du lịch</span>
                                    <small>624 bài viết</small>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#">Phổ biến<img src="<?= _TEMPLATE . 'images/icons/usego_hot.png' ?>" width="13"></a>
                    <hr class="line">
                </li>
                <li>
                    <a href="#">Đào tạo</a>
                    <hr class="line">
                </li>
                <li>
                    <a href="#">Hướng dẫn<img src="<?= _TEMPLATE . 'images/icons/usego_hot.png' ?>" width="13"></a>
                    <hr class="line">
                </li>
                <li>
                    <a href="#">Dịch vụ</a>
                    <hr class="line">
                </li>
                <li>
                    <a href="#">Chúng tôi</a>
                    <hr class="line">
                </li>
            </ul>
        </div>
        <div class="header-right">
            <div class="search">
                <button class="search-click">
                    <i class='bx bx-search'></i>
                    <sapn>Tìm kiếm</sapn>
                </button>
                <div class="content">
                    <div class="container-search">
                        <button id="remove-pattern">
                            <i class='bx bx-x'></i>
                        </button>
                        <div class="part-search">
                            <article><h2>Tìm kiếm</h2></article>
                            <form id="search-form" action="" method="GET">
                                <img class="card-site" src="<?= _TEMPLATE . 'images/icons/usego-chat-chicken.gif' ?>">
                                <div class="form-group">
                                    <input type="text" name="search" class="search-input" placeholder="Tìm kiếm nội dung trên UseGo">
                                    <div class="warpper-box">
                                        <div class="hot-search-box">
                                            <i class="fa-solid fa-fire"></i>
                                            <a href="#"><span>Top từ khóa tìm kiếm</span></a>
                                        </div>
                                        <button type="submit" class="btn-form btn-search" id="btn-header-search">
                                            <i class='bx bx-search'></i>
                                            <span>Tìm kiếm</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <div class="wrapper-tag">
                                <ul class="list-tags">
                                    <li>
                                        <a href="#">Táo </a>
                                    </li>
                                    <li>
                                        <a href="#">Thông số kỹ thuật thiết kế </a>
                                    </li>
                                    <li>
                                        <a href="#">Tết trung thu </a>
                                    </li>
                                    <li>
                                        <a href="#">Logo </a>
                                    </li>
                                    <li>
                                        <a href="#">Vũ trụ </a>
                                    </li>
                                    <li>
                                        <a href="#">Môi trường </a>
                                    </li>
                                    <li>
                                        <a href="#">Thiết kế hình ảnh </a>
                                    </li>
                                    <li>
                                        <a href="#">Máy tính online </a>
                                    </li>
                                    <li>
                                        <a href="#">Học tập online </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="home-list-btns outstanding-articles">
                                <div class="left-title">
                                <h2>Nóng gần đây<span class="hot_title">nóng</span></h2>
                                </div>
                                <div class="list-item-hots">
                                    <div class="item-hot">
                                        <div class="poster-ing">
                                            <img src="https://image.uisdc.com/wp-content/uploads/2023/08/ysbanner-202300804-2-1.jpg" width="150">
                                        </div>
                                    </div>
                                    <div class="item-hot">
                                        <div class="poster-ing">
                                            <img src="https://image.uisdc.com/wp-content/uploads/2023/08/ysbanner-202300804-2-1.jpg" width="150">
                                        </div>
                                    </div>
                                    <div class="item-hot">
                                        <div class="poster-ing">
                                            <img src="https://image.uisdc.com/wp-content/uploads/2023/08/ysbanner-202300804-2-1.jpg" width="150">
                                        </div>
                                    </div>
                                    <div class="item-hot">
                                        <div class="poster-ing">
                                            <img src="https://image.uisdc.com/wp-content/uploads/2023/08/ysbanner-202300804-2-1.jpg" width="150">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="infomation">
                <div class="user">
                    <img src="<?= _TEMPLATE . 'images/icons/avarta_default.png' ?>" width="40">
                </div>
                <div class="content">
                    
                </div>
            </div>
        </div>
    </div>
    <div class="header-block">
   
    </div>  
</header>