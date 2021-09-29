@extends('front.app')
@section('content')
@include('front.partials.header')

    <main class="contact-content">
        <div class="row crumbs">
            <div class="container">
                <ul>
                    <li><a href="{{ url('/'.$lang->lang) }}">{{ trans('vars.PageNames.home') }}</a></li>
                    <li><a href="#">{{ $page->translation->title }}</a></li>
                </ul>
            </div>
        </div>
        <div class="container cke">
            {!! $page->translation->body !!}
        </div>
    </main>

@include('front.partials.footer')
@stop
