<div class="notification-item">
    <div class="background_circle_icon_{{ $icon }}">
        <div class="inside_circle_icon_{{ $icon }}">
            <img src="{{ asset('projectRoot/assets/image/' . $icon . '.svg') }}" alt="{{ $alt }}">
        </div>
    </div>
    <div class="notification-item_content">
        <div class="notification-item_text">{{ $title }}</div>
        <div class="notification_item_options">
            <span class="notification_item_option">{{ $message }}</span>
            @if(isset($grade))
                <div class="notification_item_grade">{{ $grade }}</div>
            @endif
            @foreach($options as $option)
                <span class="notification_item_option_last">{{ $option }}</span>
            @endforeach
        </div>
    </div>
</div>
