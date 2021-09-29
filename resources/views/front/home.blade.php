@extends('front.app')
@section('content')
@include('front.partials.header')
<main>
    <section class="banner sliderHome">
        @if (!is_null($gallery))
            @foreach ($gallery->images as $key => $image)
                @if ($image->type !== 'video')
                    <div>
                        <img src="{{ $image->src }}" alt="" />
                    </div>
                @endif
            @endforeach
        @endif

    </section>
    <div class="row">
        <div class="col-12">
            <h4>{{ trans('vars.PageNames.ourServices') }}</h4>
        </div>
    </div>
    <section class="services">
        @if ($categoriesMenu->count() > 0)
            @foreach ($categoriesMenu as $key => $category)
                @if ($key % 2 == 0)
                    <article>
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-md-6 posRel">
                                    <img src="/images/blogCategories/og/{{ $category->icon }}" alt="" />
                                    <div class="imgBloc">
                                        <img src="/images/blogCategories/og/{{ $category->icon }}" alt="" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="descr">
                                        <h5>{{ $category->translation->name }}</h5>
                                        <p>
                                            {{ $category->translation->info }}
                                        </p>
                                        <a href="{{ url('/'. $lang->lang. '/services/'. $category->alias) }}" class="butt">{{ trans('vars.HP.viewDetails') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                @else
                    <article>
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-md-6 posRel">
                                    <img src="/images/blogCategories/og/{{ $category->icon }}" alt="" />
                                    <div class="imgBloc">
                                        <img src="/images/blogCategories/og/{{ $category->icon }}" alt="" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="descr">
                                        <h5>{{ $category->translation->name }}</h5>
                                        <p>
                                            {{ $category->translation->info }}
                                        </p>
                                        <a href="{{ url('/'. $lang->lang. '/services/'. $category->alias) }}" class="butt">{{ trans('vars.HP.viewDetails') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                @endif
            @endforeach
        @endif

    </section>
    <section class="parteners">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h4>Our parteners</h4>
                </div>
                <div class="col-12">
                    <div class="slideParteners">
                        @if (!is_null($ourPartners))
                            @foreach ($ourPartners->images as $key => $img)
                                <div class="slideItem">
                                    <img src="{{ $img->src }}"/>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@include('front.partials.footer')
@stop
