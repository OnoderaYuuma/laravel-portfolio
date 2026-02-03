@extends('layouts.app')
@section('title', 'トップページ')

@section('content')

    <div>
        <section class="hello">
            <h2 class="hello_title">OnoderaYuuma <span>Portfolio</span></h2>
            <div class="hello_link">
                <a class="hello_link_button-work" href="/works">制作実績を見る</a>
                <a class="hello_link_button-contact" href="/contact">お問い合わせ</a>
            </div>
        </section>

        <section class="aboutMe">
            <div class="section-title">
                <h2>About Me</h2>
                <p>フルスタックエンジニアとしてフロントエンドからバックエンドまで<br>幅広い技術領域をカバーしています。</p>
            </div>
            <div class="aboutMe_content">
                <img class="aboutMe_content_img" src="{{ asset('img/top/icon.png') }}" alt="">
                <div class="aboutMe_content_profile">
                    <p class="aboutMe_content_profile-name">小野寺 悠真</p>
                    <p>フロントからバックまで幅広くこなす<br>webエンジニア志望の学生です。</p>
                    <div class="aboutMe_content_profile-svgText">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M12 20.8995L16.9497 15.9497C19.6834 13.2161 19.6834 8.78392 16.9497 6.05025C14.2161 3.31658 9.78392 3.31658 7.05025 6.05025C4.31658 8.78392 4.31658 13.2161 7.05025 15.9497L12 20.8995ZM12 23.7279L5.63604 17.364C2.12132 13.8492 2.12132 8.15076 5.63604 4.63604C9.15076 1.12132 14.8492 1.12132 18.364 4.63604C21.8787 8.15076 21.8787 13.8492 18.364 17.364L12 23.7279ZM12 13C13.1046 13 14 12.1046 14 11C14 9.89543 13.1046 9 12 9C10.8954 9 10 9.89543 10 11C10 12.1046 10.8954 13 12 13ZM12 15C9.79086 15 8 13.2091 8 11C8 8.79086 9.79086 7 12 7C14.2091 7 16 8.79086 16 11C16 13.2091 14.2091 15 12 15Z"></path></svg>
                        <p>岩手県、日本</p>
                    </div>
                    <div class="aboutMe_content_profile-svgText">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M15 3C15.5523 3 16 3.44772 16 4V6H21C21.5523 6 22 6.44772 22 7V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V7C2 6.44772 2.44772 6 3 6H8V4C8 3.44772 8.44772 3 9 3H15ZM16 8H8V19H16V8ZM4 8V19H6V8H4ZM14 5H10V6H14V5ZM18 8V19H20V8H18Z"></path></svg>
                        <p>フルスタックエンジニア</p>
                    </div>
                    <div class="aboutMe_content_profile-svgText">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M9 1V3H15V1H17V3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3H7V1H9ZM20 11H4V19H20V11ZM7 5H4V9H20V5H17V7H15V5H9V7H7V5Z"></path></svg>
                        <p>経験年数：未経験</p>
                    </div>
                </div>
            </div>

        </section>

        <section class="skills">
            <!-- スキルセット -->
            <div class="section-title">
                <h2>Skills</h2>
                <p>現代的な技術スタックを駆使して、<br>高品質なWebアプリケーションを開発します。</p>
            </div>
            <div class="skills_content">
                <div class="skills_content_skill_box">
                    <p class="skills_content_skill_box_title">Java</p>
                    <p class="skills_content_skill_box_par">70%</p>
                    <!-- 進捗バー -->
                    <progress value="70" max="100" class="skills_content_skill_box_progress"></progress>
                </div>
                <div class="skills_content_skill_box">
                    <p class="skills_content_skill_box_title">php</p>
                    <p class="skills_content_skill_box_par">70%</p>
                    <!-- 進捗バー -->
                    <progress value="70" max="100" class="skills_content_skill_box_progress"></progress>
                </div>
                <div class="skills_content_skill_box">
                    <p class="skills_content_skill_box_title">react</p>
                    <p class="skills_content_skill_box_par">70%</p>
                    <!-- 進捗バー -->
                    <progress value="70" max="100" class="skills_content_skill_box_progress"></progress>
                </div>
                <div class="skills_content_skill_box">
                    <p class="skills_content_skill_box_title">python</p>
                    <p class="skills_content_skill_box_par">60%</p>
                    <!-- 進捗バー -->
                    <progress value="70" max="100" class="skills_content_skill_box_progress"></progress>
                </div>
            </div>

            <div style="text-align: center;">    
                <a class="skills_allSkillLink" href="/skills">すべてのスキルを見る</a>
            </div>
        </section>

        <section class="works">
            <!-- 制作実績 -->
            <div class="section-title">
                <h2>Featured Works</h2>
                <p>これまでに手掛けた代表的な制作実績を紹介します。</p>
            </div>
            <div class="works_work">
                <a href="/works/project-edel" class="works_work_box">
                    <!-- サムネイル画像 -->
                    <img class="works_work_box_img" src="{{ asset('img/works/edel-3.png') }}" alt="">
                    <div class="works_work_box_text">
                        <p class="works_work_box_text_title">エーデルワイン・サポート様コーポレートサイト制作</p>
                        <p class="works_work_box_text_detail">WordPressを用いたコーポレートサイト制作</p>
                        <div class="works_work_box_text_skills">
                            <!-- 使用技術 -->
                            <p class="works_work_box_text_skills_skill">WordPress</p>
                            <p class="works_work_box_text_skills_skill">mysql</p>
                            <p class="works_work_box_text_skills_skill">javascript</p>
                            <p class="works_work_box_text_skills_skill">html/css</p>
                        </div>
                        <p class="works_work_box_text_links">クリックで詳細を表示</p>
                    </div>
                </a>
                <a href="/works/project-classcancel" class="works_work_box">
                    <!-- サムネイル画像 -->
                    <img class="works_work_box_img" src="{{ asset('img/top/top.jpg') }}" alt="">
                    <div class="works_work_box_text">
                        <p class="works_work_box_text_title">休講情報管理アプリ</p>
                        <p class="works_work_box_text_detail">休講情報をカレンダー形式で見やすくしたアプリ</p>
                        <div class="works_work_box_text_skills">
                            <!-- 使用技術 -->
                            <p class="works_work_box_text_skills_skill">java Spring Boot</p>
                            <p class="works_work_box_text_skills_skill">java</p>
                            <p class="works_work_box_text_skills_skill">postgresql</p>
                            <p class="works_work_box_text_skills_skill">javascript</p>
                            <p class="works_work_box_text_skills_skill">html/css</p>
                        </div>
                        <p class="works_work_box_text_links">クリックで詳細を表示</p>
                    </div>
                </a>
                <a href="/works/project-chat" class="works_work_box">
                    <!-- サムネイル画像 -->
                    <img class="works_work_box_img" src="{{ asset('img/works/chat-1.png') }}" alt="">
                    <div class="works_work_box_text">
                        <p class="works_work_box_text_title">学内専用匿名チャットアプリ</p>
                        <p class="works_work_box_text_detail">学内専用の匿名チャットアプリ</p>
                        <div class="works_work_box_text_skills">
                            <!-- 使用技術 -->
                            <p class="works_work_box_text_skills_skill">flask</p>
                            <p class="works_work_box_text_skills_skill">python</p>
                            <p class="works_work_box_text_skills_skill">postgresql</p>
                            <p class="works_work_box_text_skills_skill">javascript</p>
                            <p class="works_work_box_text_skills_skill">html/css</p>
                        </div>
                        <p class="works_work_box_text_links">クリックで詳細を表示</p>
                    </div>
                </a>
            </div>
        </section>
    </div>
@endsection
