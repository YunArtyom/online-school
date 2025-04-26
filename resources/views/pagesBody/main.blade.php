<div class="main-content">
    @component('layout.header', [
        'title' => 'Главная страница',
        'headerClass' => 'header_main_page',
        'textClass' => 'header_main_page_text'
    ])
    @endcomponent
    @component('components.stats')  @endcomponent
    @component('components.notifications')  @endcomponent
</div>
