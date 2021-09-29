<header>
    <div class="container">
        <div class="row justify-content-between align-items-center topbar1">
            <div class="col-lg-auto col-md-auto col-12">
                <a href="/" class="logo"></a>
            </div>
            <div id="burger" class="col-md-0 col-auto burger">
                <div class="iconBar"></div>
            </div>
            <div class="col-lg-auto col-md-12 menuMobile">
                <ul class="menu">
                    <li><a href="{{ url('/'. $lang->lang. '/') }}">{{ trans('vars.PageNames.home') }}</a></li>
                    <li>
                        @if ($categoriesMenu)
                            <span class="buttHeader">{{ trans('vars.PageNames.ourServices') }} <i class="fas fa-chevron-down"></i></span>
                            <ul class="submenu">
                                @foreach ($categoriesMenu as $key => $categoryMenu)
                                    <li>
                                        <a href="{{ url('/'. $lang->lang. '/services/'. $categoryMenu->alias) }}">{{ $categoryMenu->translation->name }}</a>
                                        @if ($categoryMenu->children()->count() > 0)
                                            <ul class="submenu2">
                                                @foreach ($categoryMenu->children as $key => $categoryChild)
                                                    <li><a href="{{ url('/'. $lang->lang. '/services/'. $categoryChild->alias) }}">{{ $categoryChild->translation->name }}</a></li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </li>
                    <li><a href="{{ url('/'. $lang->lang. '/about') }}">{{ trans('vars.PageNames.about') }}</a></li>
                    <li><a href="{{ url('/'. $lang->lang. '/contacts') }}">{{ trans('vars.PageNames.contact') }}</a></li>
                    <li class="langMobile">
                        <span>{{ mb_strtoupper($lang->lang) }} <i class="fas fa-chevron-down"></i></span>
                        <ul class="submenu">
                            @foreach ($langs as $key => $oneLang)
                                <li>
                                    @if (Request::segment(1))
                                        <a href="{{ str_replace('/'.$lang->lang, '/'.$oneLang->lang, Request::url()) }}">
                                            {{ mb_strtoupper($oneLang->lang) }}
                                        </a>
                                    @else
                                        <a href="{{ url('/'.$oneLang->lang) }}">
                                            {{ mb_strtoupper($oneLang->lang) }}
                                        </a>
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="col-lg-auto col-md-6 col">
                <div class="comp">
                    <span>{{ trans('vars.HeaderFooter.groupComp') }}</span>
                    <div class="flags">
                        <span><img src="/fronts/img/icons/md.svg" alt=""/></span>
                        <span><img src="/fronts/img/icons/au.gif" alt=""/></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="menuMob">
        <ul>
            <li><a href="{{ url('/'. $lang->lang. '/') }}">{{ trans('vars.PageNames.home') }}</a></li>
            @if ($categoriesMenu)
                <li>
                    <span class="buttHeader">Serviciile Noastre <i class="fas fa-chevron-down"></i></span>
                    <ul>
                        <li><i class="fas fa-backspace"></i><span class="back"></span></li>
                        @foreach ($categoriesMenu as $key => $categoryMenu)
                            <li>
                                @if ($categoryMenu->children()->count() > 0)
                                    <span class="buttHeader">{{ $categoryMenu->translation->name }} <i class="fas fa-chevron-right"></i></span>
                                    <ul>
                                        <li><i class="fas fa-backspace"></i><span class="back"></span></li>
                                        @foreach ($categoryMenu->children as $key => $categoryChild)
                                            <li><a href="{{ url('/'. $lang->lang. '/services/'. $categoryChild->alias) }}">{{ $categoryChild->translation->name }}</a></li>
                                        @endforeach
                                    </ul>
                                @else
                                    <a href="{{ url('/'. $lang->lang. '/services/'. $categoryMenu->alias) }}">{{ $categoryMenu->translation->name }}</a>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                </li>
            @endif
            <li><a href="{{ url('/'. $lang->lang. '/about') }}">{{ trans('vars.PageNames.about') }}</a></li>
            <li><a href="{{ url('/'. $lang->lang. '/contacts') }}">{{ trans('vars.PageNames.contact') }}</a></li>
        </ul>
    </div>
</header>
