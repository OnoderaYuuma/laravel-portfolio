@extends('layouts.app')
@section('title', 'トップページ')

@section('content')
        <x-work-detail 
            title="休講情報管理アプリ" 
            :imageSrc="['classcancel-1.png', 'classcancel-2.png', 'classcancel-3.png']" 
            :detailText="'一目で休講情報を確認できるアプリを制作しました。カレンダー形式で見やすく、学生同士の安心して使える環境を提供することを目的としています。'"
            :detailPeriod="['2023年10月〜2024年1月']"
            :detailScope="['企画・設計、デザイン、コーディング']"
            :detailURL="['https://classcancel.example.com/']"
            :detailGithub="['https://github.com/OnoderaYuuma/ClassCancellationManager']"
            :tags="['java Spring Boot', 'java', 'javascript', 'postgresql', 'html/css']"
        />
@endsection
