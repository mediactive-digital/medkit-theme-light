<ul class="nav">
    @foreach($items as $item)

        @php

            $hasChildren = $item->hasChildren();
            $link = $item->link;
            $class = 'nav-item' . ($hasChildren ? ' has-submenu' : '') . ($hasChildren && $link && $link->isActive ? ' expend' : '');

        @endphp

        <li@lm-attrs($item) class="{{ $class }}" @lm-endattrs>
            @if($link) 

                @php

                    $icon = $hasIcon = '';

                    if (!$item->parent) {

                        $icon = $item->data('icon');
                        $icon = $icon ? '<i class="material-icons" aria-hidden="true">' . $icon . '</i>' : '';
                        $hasIcon = $icon ? ' has-icon' : '';
                    }

                    $dropdown = $hasChildren ? '<i class="material-icons" aria-hidden="true">keyboard_arrow_down</i>' : '';
                    $hasDropdown = $dropdown ? ' has-dropdown' : '';

                    $title = '<span class="title' . $hasIcon . $hasDropdown . '">' . $item->title . '</span>';

                @endphp

                <a@lm-attrs($item->link) class="nav-link" @lm-endattrs href="{!! $item->url() !!}">{!! $icon !!}{!! $title !!}{!! $dropdown !!}</a>

            @else

                <a class="nav-link"><span class="title">{!! $item->title !!}</span></a>

            @endif

            @if($hasChildren)

                @include(config('laravel-menu.views.back.sidebar'), array('items' => $item->children()))

            @endif
        </li>

        @if($item->divider)

            <li{!! Lavary\Menu\Builder::attributes($item->divider) !!}></li>

        @endif
    @endforeach
</ul>