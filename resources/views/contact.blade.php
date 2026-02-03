@extends('layouts.app')
@section('title', 'お問い合わせ')

@section('content')

	<div class="contactPage">
		<div class="contactPage_title">
			<h2>お問い合わせ</h2>
			<p>ご質問・ご依頼は以下のメールアドレスまでご連絡ください。</p>
		</div>

		<section class="contactPage_content">
			<p>メール: <a href="mailto:your.email@example.com">your.email@example.com</a></p>
			<p>※件名に「ポートフォリオからのお問い合わせ」とご記載ください。</p>
		</section>
	</div>

@endsection

