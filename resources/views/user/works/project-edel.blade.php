@extends('layouts.app')
@section('title', 'トップページ')

@section('content')
        <x-work-detail 
            title="株式会社エーデルワイン・サポート様HP制作" 
            :imageSrc="['edel-1.png', 'edel-2.png', 'edel-3.png']" 
            :detailText="'岩手県花巻市大迫にある株式会社エーデルワイン・サポート様のコーポレートサイトを制作しました。本プロジェクトは企業様の要望に合わせてデザインやコンテンツを企画し、制作後も運用がしやすいシステムを導入することでお客様に満足していただけるようなサイトを目指しました。'"
            :detailPeriod="['2023年10月〜2024年1月']"
            :detailScope="['企画・設計、デザイン、コーディング、WordPress構築']"
            :detailURL="['https://edelwine-support.co.jp/']"
            :detailGithub="['https://github.com/your-username/edel-wine-support']"
            :tags="['PHP', 'Laravel', 'AWS']"
        />
@endsection
