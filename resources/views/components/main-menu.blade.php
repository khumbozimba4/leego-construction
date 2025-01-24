<!-- Main Menu Area Start -->
<div class="main-menu-area absolute top-[-50px] w-full z-[2]">
    <div class="container">
        <div class="main-menu-border !bg-[#fbfbfb]">
            <div class="flex flex-wrap mx-[-12px]">
                <div class="w-full flex-[0_0_auto] max-w-full px-[12px]">
                    <div class="main-menu-wraper relative">
                        <div class="main-menu flex items-center justify-center">
                            <nav id="mobile-menu" style="display: block;">
                                <ul>
                                    @foreach ($menuItems as $item)
                                        <li class="{{ $item['active'] ? 'active' : '' }}">
                                            <a href="{{ $item['url'] }}">
                                                {{ $item['label'] }}
                                                @if (isset($item['submenu']) && count($item['submenu']))
                                                    <i class="fa fa-angle-down"></i>
                                                @endif
                                            </a>
                                            @if (isset($item['submenu']) && count($item['submenu']))
                                                <ul>
                                                    @foreach ($item['submenu'] as $submenuItem)
                                                        <li>
                                                            <a href="{{ $submenuItem['url'] }}">
                                                                {{ $submenuItem['label'] }}
                                                            </a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                        </li>
                                    @endforeach
                                </ul>
                            </nav>
                        </div>
                        <div class="mobile-menu"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main Menu Area End -->
