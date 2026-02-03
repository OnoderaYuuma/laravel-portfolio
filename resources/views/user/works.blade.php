@extends('layouts.app')
@section('title', 'トップページ')

@section('content')

    <div>
        <div class="works_page-title">
            <h2>制作実績</h2>
            <p>これまでに手掛けた代表的な制作実績を紹介します。</p>
            <p>技術力と創造性を活かした実績をご覧ください。</p>
        </div>

        <section class="works">
            <!-- 制作実績 -->
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
                <a href="works_details_classcancel" class="works_work_box">
                    <!-- サムネイル画像 -->
                    <img class="works_work_box_img" src="{{ asset('img/works/todo-1.png') }}" alt="">
                    <div class="works_work_box_text">
                        <p class="works_work_box_text_title">todoアプリ</p>
                        <p class="works_work_box_text_detail">todoを管理するアプリ</p>
                        <div class="works_work_box_text_skills">
                            <!-- 使用技術 -->
                            <p class="works_work_box_text_skills_skill">javascript</p>
                            <p class="works_work_box_text_skills_skill">html/css</p>
                        </div>
                        <p class="works_work_box_text_links">クリックで詳細を表示</p>
                    </div>
                </a>
                <a href="works_details_classcancel" class="works_work_box">
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
                <a href="works_details_classcancel" class="works_work_box">
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
                <a href="works_details_classcancel" class="works_work_box">
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
                <a href="works_details_classcancel" class="works_work_box">
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
                <a href="works_details_classcancel" class="works_work_box">
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
            </div>
        </section>
    </div>
@endsection
