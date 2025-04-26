<button class="toggle-sidebar">≡</button>
<div class="option_sidebar_wrapper">
    <button class="close-sidebar">✖</button>
    <!-- Заголовок сайдбара -->
    <div class="sidebar-item_main">
        <div class="sidebar-content">
            <span class="sidebar-text">{{ $sidebarTitle }}</span>
        </div>
    </div>
    <!-- Остальные элементы сайдбара -->
    <div class="sidebar-items">
        @foreach($sidebarItems as $item)
            <div class="sidebar-item">
                <a href="{{ $item['link'] }}">
                    <div class="sidebar-content">
                        <div class="sidebar-icon">
                            @switch($item['icon'])
                                @case('pen')
                                    <img src="{{ asset('projectRoot/assets/image/pen.svg') }}" alt="{{ $item['title'] }}">
                                    @break
                                @case('bakalavr')
                                    <img src="{{ asset('projectRoot/assets/image/bakalavr.svg') }}" alt="{{ $item['title'] }}">
                                    @break
                                @case('calendar')
                                    <img src="{{ asset('projectRoot/assets/image/calendar.svg') }}" alt="{{ $item['title'] }}">
                                    @break
                                @case('material')
                                    <img src="{{ asset('projectRoot/assets/image/material.svg') }}" alt="{{ $item['title'] }}">
                                    @break
                                @case('star')
                                    <img src="{{ asset('projectRoot/assets/image/star.svg') }}" alt="{{ $item['title'] }}">
                                    @break
                                @case('plus')
                                    <img src="{{ asset('projectRoot/assets/image/plus.svg') }}" alt="{{ $item['title'] }}">
                                    @break
                                @case('setting')
                                    <img src="{{ asset('projectRoot/assets/image/setting.svg') }}" alt="{{ $item['title'] }}">
                                    @break
                                @case('question')
                                    <img src="{{ asset('projectRoot/assets/image/question.svg') }}" alt="{{ $item['title'] }}">
                                    @break
                                @default
                                    <img src="{{ asset('projectRoot/assets/image/default.svg') }}" alt="Default">
                            @endswitch
                        </div>
                        <span class="sidebar-text">{{ $item['title'] }}</span>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>
