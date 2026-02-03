@extends('layouts.app')
@section('title', 'トップページ')

@section('content')
        <x-work-detail 
            title="学内専用匿名チャットアプリ" 
            :imageSrc="['chat-1.png', 'chat-2.png', 'chat-3.png']" 
            :detailText="'学生内で気軽にコミュニケーションを取れる匿名チャットアプリを制作しました。匿名性を重視し、学生同士の安心して使える環境を提供することを目的としています。'"
            :detailPeriod="['2023年10月〜2024年1月']"
            :detailScope="['企画・設計、デザイン、コーディング']"
            :detailURL="['https://classcancel.example.com/']"
            :detailGithub="['https://github.com/kenkensan/2025_team_F']"
            :tags="['flask', 'python', 'javascript', 'postgresql', 'html/css']"
        />
@endsection
