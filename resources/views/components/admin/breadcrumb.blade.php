<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">
            @yield('title')
        </h4>
    </div>
    <div class="col-md-7 align-self-center text-end">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb justify-content-end">
                <li @class(['breadcrumb-item', 'active' => Route::is('admin.index')])>
                    <a href="javascript:void(0)">
                        Ana Səhifə
                    </a>
                </li>
                @unless(Route::is('admin.index'))
                    <li class="breadcrumb-item active">
                        @yield('title')
                    </li>
                @endunless
            </ol>
            @isset($create)
                <a href="{{ route($create) }}" class="btn btn-info d-none d-lg-block m-l-15 text-white">
                    <i class="fa fa-plus-circle"></i> Yeni
                </a>
            @endif
        </div>
    </div>
</div>
