
    <div class="skillsPage_skills_list_container">
        <div class="skillsPage_skills_icon">
            <img src="{{ asset('img/skills/' . $icon) }}" alt="{{ $name }}">
        </div>
        <p class="skillsPage_skills_name">{{ $name }}</p>
        <div class="skillsPage_skills_level_container">
            <p class="skillsPage_skills_level-{{ $level === '上級' ? 3 : ($level === '中級' ? 2 : 1) }}">{{ $level }}</p>
        </div>
        <div class="skillsPage_skills_details">
            <p>習熟度</p>
            <p>{{ $proficiency }}%</p>
        </div>
        <progress class="skillsPage_skills_progress-{{ $level === '上級' ? 3 : ($level === '中級' ? 2 : 1) }}" value="{{ $proficiency }}" max="100"></progress>
        <div class="skillsPage_skills_experience">
            <p>経験年数</p>
            <p>{{ $experience }}年</p>
        </div>
        <p class="skillsPage_skills_description">
            {{ $description }}
        </p>
    </div>
