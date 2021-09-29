@extends('front.app')
@section('content')
@include('front.partials.header')
<main class="contact-content">
    <section class="banner">
        <img
            src="/fronts/img/LBV-files-4site/Exploatari-miniere/Carier-3 VISCAUTI/Imagini/91606154_1484510988377750_5954348775760723968_o.jpg"
            alt=""
            />
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
            <h4>{{ trans('vars.General.ourTeam') }}</h4>
        </div>
    </div>
    <section class="textBlack personal">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="accord">
                        <h5 data-toggle="collapse" data-target="#dep1" aria-expanded="false">
                            {{ trans('vars.ContactsAndForms.departament1Denumire') }} <i class="fas fa-chevron-down"></i>
                        </h5>
                        <div class="collapse" id="dep1">
                            <div class="row">
                                <div class="item col-md-6">
                                    <img src="{{ Banner('angajat1avatar', $device) }}" alt="" />
                                    <ul>
                                        <li>{{ trans('vars.ContactsAndForms.labelName') }}: {{ trans('vars.ContactsAndForms.angajat1Nume') }}</li>
                                        <li>{{ trans('vars.ContactsAndForms.labelSediu') }}: {{ trans('vars.ContactsAndForms.angajat1Sediu') }}</li>
                                        <li><a href="tel:{{ trans('vars.ContactsAndForms.angajat1Phone') }}">{{ trans('vars.ContactsAndForms.labelPhone') }}: {{ trans('vars.ContactsAndForms.angajat1Phone') }}</a></li>
                                        <li><a href="mailto:{{ trans('vars.ContactsAndForms.angajat1Email') }}">{{ trans('vars.ContactsAndForms.labelEmail') }}: {{ trans('vars.ContactsAndForms.angajat1Email') }}</a></li>
                                    </ul>
                                </div>
                                <div class="item col-md-6">
                                    <img src="{{ Banner('angajat2avatar', $device) }}" alt="" />
                                    <ul>
                                        <li>{{ trans('vars.ContactsAndForms.labelName') }}: {{ trans('vars.ContactsAndForms.angajat2Nume') }}</li>
                                        <li>{{ trans('vars.ContactsAndForms.labelSediu') }}: {{ trans('vars.ContactsAndForms.angajat2Sediu') }}</li>
                                        <li><a href="tel:{{ trans('vars.ContactsAndForms.angajat2Phone') }}">{{ trans('vars.ContactsAndForms.labelPhone') }}: {{ trans('vars.ContactsAndForms.angajat2Phone') }}</a></li>
                                        <li><a href="mailto:{{ trans('vars.ContactsAndForms.angajat2Email') }}">{{ trans('vars.ContactsAndForms.labelEmail') }}: {{ trans('vars.ContactsAndForms.angajat2Email') }}</a></li>
                                    </ul>
                                </div>
                                <div class="item col-md-6">
                                    <img src="{{ Banner('angajat3avatar', $device) }}" alt="" />
                                    <ul>
                                        <li>{{ trans('vars.ContactsAndForms.labelName') }}: {{ trans('vars.ContactsAndForms.angajat3Nume') }}</li>
                                        <li>{{ trans('vars.ContactsAndForms.labelSediu') }}: {{ trans('vars.ContactsAndForms.angajat3Sediu') }}</li>
                                        <li><a href="tel:{{ trans('vars.ContactsAndForms.angajat3Phone') }}">{{ trans('vars.ContactsAndForms.labelPhone') }}: {{ trans('vars.ContactsAndForms.angajat3Phone') }}</a></li>
                                        <li><a href="mailto:{{ trans('vars.ContactsAndForms.angajat3Email') }}">{{ trans('vars.ContactsAndForms.labelEmail') }}: {{ trans('vars.ContactsAndForms.angajat3Email') }}</a></li>
                                    </ul>
                                </div>
                                <div class="item col-md-6">
                                    <img src="{{ Banner('angajat4avatar', $device) }}" alt="" />
                                    <ul>
                                        <li>{{ trans('vars.ContactsAndForms.labelName') }}: {{ trans('vars.ContactsAndForms.angajat4Nume') }}</li>
                                        <li>{{ trans('vars.ContactsAndForms.labelSediu') }}: {{ trans('vars.ContactsAndForms.angajat4Sediu') }}</li>
                                        <li><a href="tel:{{ trans('vars.ContactsAndForms.angajat4Phone') }}">{{ trans('vars.ContactsAndForms.labelPhone') }}: {{ trans('vars.ContactsAndForms.angajat4Phone') }}</a></li>
                                        <li><a href="mailto:{{ trans('vars.ContactsAndForms.angajat4Email') }}">{{ trans('vars.ContactsAndForms.labelEmail') }}: {{ trans('vars.ContactsAndForms.angajat4Email') }}</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accord">
                        <h5 data-toggle="collapse" data-target="#dep2" aria-expanded="false">
                            {{ trans('vars.ContactsAndForms.departament2Denumire') }}  <i class="fas fa-chevron-down"></i>
                        </h5>
                        <div class="collapse" id="dep2">
                            <div class="row">
                                <div class="item col-md-6">
                                    <img src="{{ Banner('angajat5avatar', $device) }}" alt="" />
                                    <ul>
                                        <li>{{ trans('vars.ContactsAndForms.labelName') }}: {{ trans('vars.ContactsAndForms.angajat5Nume') }}</li>
                                        <li>{{ trans('vars.ContactsAndForms.labelSediu') }}: {{ trans('vars.ContactsAndForms.angajat5Sediu') }}</li>
                                        <li><a href="tel:{{ trans('vars.ContactsAndForms.angajat5Phone') }}">{{ trans('vars.ContactsAndForms.labelPhone') }}: {{ trans('vars.ContactsAndForms.angajat5Phone') }}</a></li>
                                        <li><a href="mailto:{{ trans('vars.ContactsAndForms.angajat5Email') }}">{{ trans('vars.ContactsAndForms.labelEmail') }}: {{ trans('vars.ContactsAndForms.angajat5Email') }}</a></li>
                                    </ul>
                                </div>
                                <div class="item col-md-6">
                                    <img src="{{ Banner('angajat6avatar', $device) }}" alt="" />
                                    <ul>
                                        <li>{{ trans('vars.ContactsAndForms.labelName') }}: {{ trans('vars.ContactsAndForms.angajat6Nume') }}</li>
                                        <li>{{ trans('vars.ContactsAndForms.labelSediu') }}: {{ trans('vars.ContactsAndForms.angajat6Sediu') }}</li>
                                        <li><a href="tel:{{ trans('vars.ContactsAndForms.angajat6Phone') }}">{{ trans('vars.ContactsAndForms.labelPhone') }}: {{ trans('vars.ContactsAndForms.angajat6Phone') }}</a></li>
                                        <li><a href="mailto:{{ trans('vars.ContactsAndForms.angajat6Email') }}">{{ trans('vars.ContactsAndForms.labelEmail') }}: {{ trans('vars.ContactsAndForms.angajat6Email') }}</a></li>
                                    </ul>
                                </div>
                                <div class="item col-md-6">
                                    <img src="{{ Banner('angajat7avatar', $device) }}" alt="" />
                                    <ul>
                                        <li>{{ trans('vars.ContactsAndForms.labelName') }}: {{ trans('vars.ContactsAndForms.angajat7Nume') }}</li>
                                        <li>{{ trans('vars.ContactsAndForms.labelSediu') }}: {{ trans('vars.ContactsAndForms.angajat7Sediu') }}</li>
                                        <li><a href="tel:{{ trans('vars.ContactsAndForms.angajat7Phone') }}">{{ trans('vars.ContactsAndForms.labelPhone') }}: {{ trans('vars.ContactsAndForms.angajat7Phone') }}</a></li>
                                        <li><a href="mailto:{{ trans('vars.ContactsAndForms.angajat7Email') }}">{{ trans('vars.ContactsAndForms.labelEmail') }}: {{ trans('vars.ContactsAndForms.angajat7Email') }}</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accord">
                        <h5 data-toggle="collapse" data-target="#dep3" aria-expanded="false">
                            {{ trans('vars.ContactsAndForms.departament3Denumire') }}  <i class="fas fa-chevron-down"></i>
                        </h5>
                        <div class="collapse" id="dep3">
                            <div class="row">
                                <div class="item col-md-6">
                                    <img src="{{ Banner('angajat8avatar', $device) }}" alt="" />
                                    <ul>
                                        <li>{{ trans('vars.ContactsAndForms.labelName') }}: {{ trans('vars.ContactsAndForms.angajat8Nume') }}</li>
                                        <li>{{ trans('vars.ContactsAndForms.labelSediu') }}: {{ trans('vars.ContactsAndForms.angajat8Sediu') }}</li>
                                        <li><a href="tel:{{ trans('vars.ContactsAndForms.angajat8Phone') }}">{{ trans('vars.ContactsAndForms.labelPhone') }}: {{ trans('vars.ContactsAndForms.angajat8Phone') }}</a></li>
                                        <li><a href="mailto:{{ trans('vars.ContactsAndForms.angajat8Email') }}">{{ trans('vars.ContactsAndForms.labelEmail') }}: {{ trans('vars.ContactsAndForms.angajat8Email') }}</a></li>
                                    </ul>
                                </div>
                                <div class="item col-md-6">
                                    <img src="{{ Banner('angajat9avatar', $device) }}" alt="" />
                                    <ul>
                                        <li>{{ trans('vars.ContactsAndForms.labelName') }}: {{ trans('vars.ContactsAndForms.angajat9Nume') }}</li>
                                        <li>{{ trans('vars.ContactsAndForms.labelSediu') }}: {{ trans('vars.ContactsAndForms.angajat9Sediu') }}</li>
                                        <li><a href="tel:{{ trans('vars.ContactsAndForms.angajat9Phone') }}">{{ trans('vars.ContactsAndForms.labelPhone') }}: {{ trans('vars.ContactsAndForms.angajat9Phone') }}</a></li>
                                        <li><a href="mailto:{{ trans('vars.ContactsAndForms.angajat9Email') }}">{{ trans('vars.ContactsAndForms.labelEmail') }}: {{ trans('vars.ContactsAndForms.angajat9Email') }}</a></li>
                                    </ul>
                                </div>
                                <div class="item col-md-6">
                                    <img src="{{ Banner('angajat10avatar', $device) }}" alt="" />
                                    <ul>
                                        <li>{{ trans('vars.ContactsAndForms.labelName') }}: {{ trans('vars.ContactsAndForms.angajat10Nume') }}</li>
                                        <li>{{ trans('vars.ContactsAndForms.labelSediu') }}: {{ trans('vars.ContactsAndForms.angajat10Sediu') }}</li>
                                        <li><a href="tel:{{ trans('vars.ContactsAndForms.angajat10Phone') }}">{{ trans('vars.ContactsAndForms.labelPhone') }}: {{ trans('vars.ContactsAndForms.angajat10Phone') }}</a></li>
                                        <li><a href="mailto:{{ trans('vars.ContactsAndForms.angajat10Email') }}">{{ trans('vars.ContactsAndForms.labelEmail') }}: {{ trans('vars.ContactsAndForms.angajat10Email') }}</a></li>
                                    </ul>
                                </div>
                                <div class="item col-md-6">
                                    <img src="{{ Banner('angajat11avatar', $device) }}" alt="" />
                                    <ul>
                                        <li>{{ trans('vars.ContactsAndForms.labelName') }}: {{ trans('vars.ContactsAndForms.angajat11Nume') }}</li>
                                        <li>{{ trans('vars.ContactsAndForms.labelSediu') }}: {{ trans('vars.ContactsAndForms.angajat11Sediu') }}</li>
                                        <li><a href="tel:{{ trans('vars.ContactsAndForms.angajat11Phone') }}">{{ trans('vars.ContactsAndForms.labelPhone') }}: {{ trans('vars.ContactsAndForms.angajat11Phone') }}</a></li>
                                        <li><a href="mailto:{{ trans('vars.ContactsAndForms.angajat11Email') }}">{{ trans('vars.ContactsAndForms.labelEmail') }}: {{ trans('vars.ContactsAndForms.angajat11Email') }}</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="textBlack">
        <div class="container">
            <div class="row">
                <div class="col-md-6 contactBloc">
                    <h5>{{ trans('vars.ContactsAndForms.graficLucru') }}:</h5>
                    <ul>
                        <li>{{ trans('vars.ContactsAndForms.weekDays') }}</li>
                        <li>{{ trans('vars.ContactsAndForms.weekEnd') }}</li>
                        <li>{{ trans('vars.ContactsAndForms.labelSediu') }}: {{ trans('vars.ContactsAndForms.lbvCompanyMainAddress') }}</li>
                    </ul>
                </div>
                <div class="col-md-6 contactBloc">
                    <h5>{{ trans('vars.ContactsAndForms.contact') }}</h5>
                    <form action="{{ url('/'.$lang->lang.'/contact-feed-back') }}" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="from" value="contact page">
                        <input type="text" name="name" placeholder="{{ trans('vars.ContactsAndForms.labelName') }}" required/>
                        <input type="email" name="email" placeholder="{{ trans('vars.ContactsAndForms.labelEmail') }}" required/>
                        <input type="text" name="phone" placeholder="{{ trans('vars.ContactsAndForms.labelPhone') }}" required/>
                        <textarea rows="3" name="message" placeholder="{{ trans('vars.ContactsAndForms.labelMessage') }}" required></textarea>
                        <button type="submit" class="butt">
                            <span>{{ trans('vars.ContactsAndForms.sendButton') }}</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="mapouter">
            <div class="gmap_canvas">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2729.7897215232415!2d28.587493815123086!3d46.828141749420325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c987da3af316fd%3A0x67955ad81392fc7c!2sStrada%20Mihalcea%20H%C3%AEncu%20146%2C%20H%C3%AEnce%C5%9Fti%2C%20Moldova!5e0!3m2!1sen!2s!4v1592573678104!5m2!1sen!2s"
                    width="600"
                    height="500"
                    frameborder="0"
                    style="border:0;"
                    allowfullscreen=""
                    aria-hidden="false"
                    tabindex="0">
                </iframe>

            </div>
        </div>
    </section>
</main>
@include('front.partials.footer')
@stop
