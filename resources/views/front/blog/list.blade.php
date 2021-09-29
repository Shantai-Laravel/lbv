@extends('front.app')
@section('content')
@include('front.partials.header')
<main class="min-content">
    <div class="row crumbs">
        <div class="container">
            <ul>
                <li><a href="{{ url('/'.$lang->lang) }}">{{ trans('vars.PageNames.home') }}</a></li>
                <li><a href="#">{{ $category->translation->name }}</a></li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <h4>{{ $category->translation->name }}</h4>
        </div>
    </div>
    <section class="services">
        @foreach ($category->children as $key => $category)
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
    </section>
</main>
@include('front.partials.footer')
@stop
