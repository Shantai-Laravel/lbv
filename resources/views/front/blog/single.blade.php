@extends('front.app')
@section('content')
@include('front.partials.header')
<main class="service-content">
    <section class="banner">
        <img src="/images/blogCategories/og/{{ $category->banner_desktop }}" alt="" />
    </section>
    <div class="row crumbs">
        <div class="container">
            <ul>
                <li><a href="{{ url('/'.$lang->lang) }}">{{ trans('vars.PageNames.home') }}</a></li>
                @if ($category->parent)
                <li><a href="{{ url('/'. $lang->lang. '/services/'. $category->parent->alias) }}">{{ $category->parent->translation->name }}</a></li>
                @endif
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
        <article>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 posRel">
                        <img src="/images/blogCategories/og/{{ $category->icon }}"/>
                        <div class="imgBloc">
                            <img src="/images/blogCategories/og/{{ $category->icon }}"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="descr">
                            <h5>{{ trans('vars.BlogServices.titleServiceOne') }}</h5>
                            {!! $category->translation->body !!}
                            <a href="#" class="butt" data-toggle="modal" data-target="#requestModal">{{ trans('vars.BlogServices.requestButton') }}</a>
                            @if ($category->doc)
                                <a href="/images/blogCategories/docs/{{ $category->document }}" class="dwn" download><i class="fas fa-file-download"></i> {{ trans('vars.BlogServices.downloadButton') }}</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </section>
    <div class="row">
        <div class="col-12">
            <h4>{{ trans('vars.BlogServices.about') }} {{ $category->translation->name }}</h4>
        </div>
    </div>
    <section class="textBlack">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p>
                        {{ $category->translation->info }}
                    </p>
                </div>
            </div>
        </div>
    </section>
    @if (!is_null($category->gallery))
    <div class="row">
        <div class="col-12">
            <h4>{{ trans('vars.General.gallery') }}</h4>
        </div>
    </div>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="lightBox">
                        @foreach ($category->gallery->images as $key => $image)
                        @if ($image->type == 'image')
                        <div class="item">
                            <img src="{{ $image->src }}" alt="" />
                        </div>
                        @else
                        <div class="item">
                            <div class="videoContainer">
                                <img src="/stub.jpg"/>
                                <video id="myVideoNav" loop muted>
                                    <source src="{{ $image->src }}"  type="video/mp4" />
                                    Your browser does not support HTML5 video.
                                </video>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif

</main>
<div class="modal" id="zoomModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modalContainer">
                <div class="closeZoom" data-dismiss="modal">
                    <svg
                        width="16px"
                        height="16px"
                        viewBox="0 0 16 16"
                        version="1.1"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        >
                        <g id="AnaPopova-Site" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g
                                id="Prod_One_375---Swipe"
                                transform="translate(-19.000000, -118.000000)"
                                fill="#FFFFFF"
                                fill-rule="nonzero"
                                >
                                <path
                                    d="M27.6226706,126.612626 L37.3985243,126.612631 C37.7323875,126.606822 38,126.334254 38,126.000017 C38,125.665781 37.732388,125.393213 37.3985247,125.387405 L27.6226711,125.3874 L27.6227094,115.602057 C27.6169068,115.267871 27.3446029,115 27.0106892,115 C26.6767755,115 26.4044715,115.267872 26.3986685,115.602058 L26.3986302,125.3874 L16.6227505,125.387369 C16.4015614,125.383521 16.1955089,125.499436 16.0837896,125.690561 C15.9720702,125.881686 15.9720701,126.118279 16.0837893,126.309404 C16.1955085,126.500529 16.4015609,126.616443 16.62275,126.612595 L26.3986297,126.612626 L26.3986173,136.397943 C26.4044199,136.732129 26.6767238,137 27.0106375,137 C27.3445512,137 27.6168552,136.732128 27.6226582,136.397942 L27.6226706,126.612626 Z"
                                    id="Shape-Copy-3"
                                    transform="translate(27.000000, 126.000000) rotate(-315.000000) translate(-27.000000, -126.000000) "
                                    ></path>
                            </g>
                        </g>
                    </svg>
                </div>
                @if (!is_null($category->gallery))
                <div class="zoomSlider">
                    @foreach ($category->gallery->images as $key => $image)
                    @if ($image->type == 'image')
                    <div class="item">
                        <img src="{{ $image->src }}" alt="" />
                    </div>
                    @else
                    <div class="item">
                        <div class="videoContainer">
                            {{-- <img src="/stub.jpg"/> --}}
                            <video id="myVideoNav" autoplay loop muted>
                                <source src="{{ $image->src }}"  type="video/mp4" />
                                Your browser does not support HTML5 video.
                            </video>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
<div class="modal" id="requestModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close" data-dismiss="modal"></div>
            <h4>{{ trans('vars.ContactsAndForms.contact') }}</h4>
            <form action="{{ url('/'.$lang->lang.'/contact-feed-back') }}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="from" value="contact form: {{ $category->translation->name }}">
                <input type="text" name="name" placeholder="{{ trans('vars.ContactsAndForms.labelName') }}" required/>
                <input type="email" name="email" placeholder="{{ trans('vars.ContactsAndForms.labelEmail') }}" required/>
                <input type="text" name="phone" placeholder="{{ trans('vars.ContactsAndForms.labelPhone') }}" required/>
                <input type="text" name="company" placeholder="{{ trans('vars.ContactsAndForms.labelCompany') }}" required/>
                <textarea rows="3" name="message" placeholder="{{ trans('vars.ContactsAndForms.labelMessage') }}" required></textarea>
                <button type="submit" class="butt">
                    <span>{{ trans('vars.ContactsAndForms.send') }}</span>
                </button>
            </form>
        </div>
    </div>
</div>
@include('front.partials.footer')
@stop
