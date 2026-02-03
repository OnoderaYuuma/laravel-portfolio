<div>
    <div class="work-detail-content">
        <div class="work-detail-image">
            <div class="image-slider-for">
                @foreach($imageSrc as $src)
                    <div>
                        <img src="{{ asset('img/works/' . $src) }}" alt="{{ $title }}">
                    </div>
                @endforeach
            </div>
            <div class="image-slider-nav">
                @foreach($imageSrc as $src)
                    <div>
                        <img src="{{ asset('img/works/' . $src) }}" alt="{{ $title }}">
                    </div>
                @endforeach
            </div>

        </div>
        <!-- Work Detail Info -->
        <div class="work-detail-info">
            <h2 class="work-detail-title">{{ $title }}</h2>
            <p class="work-detail-text">{{ $detailText }}</p>
            <div class="work-detail-description">
                <p class="work-detail-description-title">プロジェクト詳細</p>
                <div class="work-detail-description-content">
                    <div class="work-detail-description-labels">
                        <p>開発期間:</p>
                        <p>担当範囲:</p>
                        <p>URL:</p>
                        <p>GitHub:</p>
                    </div>
                    <div class="work-detail-description-labels">
                        <p>{{ $detailPeriod[0] }}</p>
                        <p>{{ $detailScope[0] }}</p>
                        <a href="{{ $detailURL[0] }}" target="_blank" style="color: #2D6BCB;">{{ $detailURL[0] }}</a>
                        <a href="{{ $detailGithub[0] }}" target="_blank" style="color: #2D6BCB;">{{ $detailGithub[0] }}</a>
                    </div>
                </div>
            </div>
            <div class="work-detail-tags">
                <p class="work-detail-tags-title">使用技術</p>
                <p>
                @foreach($tags as $tag)
                    <span class="work-detail-tag">{{ $tag }}</span>
                @endforeach
                </p>
            </div>
            <div class="work-detail-links">
                <a class="work-detail-link-web" href="{{ $detailURL[0] }}" target="_blank">サイトを見る</a>
                <a class="work-detail-link-git" href="{{ $detailGithub[0] }}" target="_blank">GitHubを見る</a>
            </div>
            <a class="work-detail-link-back" href="/works">制作実績一覧に戻る</a>
        </div>
    </div>

</div>
