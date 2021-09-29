@extends('front.app')
@section('content')
@include('front.partials.header')
<main class="about-content">
    <section class="banner">
        <img src="/fronts/img/LBV-files-4site/Exploatari-miniere/Carier-4 SLOBOZIA/Imagini/IMG-20170306-WA0001.jpeg" alt="" />
    </section>
    <div class="row crumbs">
        <div class="container">
            <ul>
                <li><a href="{{ url('/'.$lang->lang) }}">{{ trans('vars.PageNames.home') }}</a></li>
                <li><a href="#">{{ $page->translation->title }}</a></li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <h4>{{ trans('vars.PageNames.about') }}</h4>
        </div>
    </div>
    <section>
        <article>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p class="subdescr"><strong>LBV-Construct</strong> {{ trans('vars.About.aboutPageSubtitle') }}</p>
                        <p>
                            {{ trans('vars.About.aboutPageParagraph1') }}
                        </p>
                        <p>
                            {{ trans('vars.About.aboutPageParagraph2') }}
                        </p>
                    </div>
                </div>
            </div>
        </article>
    </section>
    <div class="row">
        <div class="col-12">
            <h4>{{ trans('vars.About.ourCompanys') }}</h4>
        </div>
    </div>
    <section class="textBlack">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="accord">
                        <h5 data-toggle="collapse" data-target="#comp1" aria-expanded="false">
                            {{ trans('vars.ContactsAndForms.labelCompany') }} LBV-Construct <i class="fas fa-chevron-down"></i>
                        </h5>
                        <ul class="collapse" id="comp1">
                            <li>{{ trans('vars.ContactsAndForms.labelContacts') }}:</li>
                            <li>{{ trans('vars.ContactsAndForms.labelSediu') }}: {{ trans('vars.ContactsAndForms.lbvCompanyMainAddress') }}</li>
                            <li><a href="tel:{{ trans('vars.ContactsAndForms.lbvCompanyMainPhone') }}">{{ trans('vars.ContactsAndForms.labelPhone') }}: {{ trans('vars.ContactsAndForms.lbvCompanyMainPhone') }}</a></li>
                            <li><a href="mailto:{{ trans('vars.ContactsAndForms.lbvCompanyMainEmail') }}">Email: {{ trans('vars.ContactsAndForms.lbvCompanyMainEmail') }}</a></li>
                        </ul>
                    </div>
                    <div class="accord">
                        <h5 data-toggle="collapse" data-target="#comp2" aria-expanded="false">
                            {{ trans('vars.ContactsAndForms.Company2Name') }}: <i class="fas fa-chevron-down"></i>
                        </h5>
                        <ul class="collapse" id="comp2">
                            <li>{{ trans('vars.ContactsAndForms.labelContacts') }}:</li>
                            <li>{{ trans('vars.ContactsAndForms.labelSediu') }}: {{ trans('vars.ContactsAndForms.Company2MainAddress') }}</li>
                            <li><a href="tel:{{ trans('vars.ContactsAndForms.Company2MainPhone') }}">{{ trans('vars.ContactsAndForms.labelPhone') }}: {{ trans('vars.ContactsAndForms.Company2MainPhone') }}</a></li>
                            <li><a href="mailto:{{ trans('vars.ContactsAndForms.Company2MainEmail') }}">{{ trans('vars.ContactsAndForms.labelEmail') }}: {{ trans('vars.ContactsAndForms.Company2MainEmail') }}</a></li>
                        </ul>
                    </div>
                    <div class="accord">
                        <h5 data-toggle="collapse" data-target="#comp3" aria-expanded="false">
                            {{ trans('vars.ContactsAndForms.Company3Name') }} <i class="fas fa-chevron-down"></i>
                        </h5>
                        <ul class="collapse" id="comp3">
                          <li>{{ trans('vars.ContactsAndForms.labelContacts') }}:</li>
                          <li>{{ trans('vars.ContactsAndForms.labelSediu') }}: {{ trans('vars.ContactsAndForms.Company3MainAddress') }}</li>
                          <li><a href="tel:{{ trans('vars.ContactsAndForms.Company3MainPhone') }}">{{ trans('vars.ContactsAndForms.labelPhone') }}: {{ trans('vars.ContactsAndForms.Company3MainPhone') }}</a></li>
                          <li><a href="mailto:{{ trans('vars.ContactsAndForms.Company3MainEmail') }}">{{ trans('vars.ContactsAndForms.labelEmail') }}: {{ trans('vars.ContactsAndForms.Company3MainEmail') }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="parralax">
        <img src="{{ Banner('AboutImageParallax', $device) }}" alt="" />
    </section>
    <div class="row">
        <div class="col-12">
            <h4>{{ trans('vars.PageNames.ourServices') }}</h4>
        </div>
    </div>
    <section class="textBlack imageBack">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    @foreach ($categoriesMenu as $key => $post)
                        <div class="accord">
                            <h5 data-toggle="collapse" data-target="#serv{{ $key }}" aria-expanded="false">
                                {{ $post->translation->name }} <i class="fas fa-chevron-down"></i>
                            </h5>
                            <div class="collapse" id="serv{{ $key }}">
                                <p>
                                    {{ $post->translation->info }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="mapouter">
            <div class="gmap_canvas">
                <iframe height="500"
                id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2729.789721523276!2d28.587493815579137!3d46.82814174941964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c987da3af316fd%3A0x67955ad81392fc7c!2zU3RyYWRhIE1paGFsY2VhIEjDrm5jdSAxNDYsIEjDrm5jZcWfdGksINCc0L7Qu9C00LDQstC40Y8!5e0!3m2!1sru!2s!4v1592562038539!5m2!1sru!2s"
                frameborder="0"
                style="border:0;"
                allowfullscreen=""
                scrolling="no"
                marginheight="0"
                marginwidth="0"
                >
                </iframe>
                <a href="https://elegantcoupons.com/divi-discount/"></a>
            </div>
        </div>
    </section>
</main>
@include('front.partials.footer')
@stop
