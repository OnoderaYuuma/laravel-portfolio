<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OnoderaYuuma Portfolio - @yield('title', 'トップページ')</title>
    @vite([
        'resources/css/destyle.css',
        'resources/css/app-layout.css',
        'resources/css/index.css',
        'resources/css/works.css',
        'resources/css/skills.css',
        'resources/css/work-detail.css',
        'resources/js/app-layout.js',
        'resources/js/work-detail.js',
        'resources/css/contact.css',
        ])
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

</head>
<body>

    <header class="header" id="header">
        <h1>OnoderaYuuma Portfolio</h1>
        <nav class="header_nav">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/skills">Skills</a></li>
                <li><a href="/works">Works</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2024 OnoderaYuuma. All rights reserved.</p>
    </footer>
    


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        // ヘッダー要素を取得
        const header = document.getElementById('header');

        // スクロールイベントを監視
        window.addEventListener('scroll', () => {
            // 70px以上スクロールした場合
            if (window.scrollY > 70) {
                header.classList.add('is-transparent'); // 透明にするクラスを追加
            } else {
                header.classList.remove('is-transparent'); // クラスを削除（元の色に戻す）
            }
        });
        $(function(){
            $('.image-slider-for').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                fade: true,
                asNavFor: '.image-slider-nav'
            });
            $('.image-slider-nav').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                asNavFor: '.image-slider-for',
                dots: false,
                centerMode: false,
                focusOnSelect: true
            });
        });
    </script>
    </body>
</html>
