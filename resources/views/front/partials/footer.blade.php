<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <ul>
                    <li>{{ trans('vars.HeaderFooter.aboutLbv') }} <i class="fas fa-chevron-down"></i></li>
                    <li><a href="{{ url('/'. $lang->lang. '/about') }}">{{ trans('vars.PageNames.about') }}</a></li>
                    <li><a href="{{ url('/'. $lang->lang. '/contacts') }}">{{ trans('vars.PageNames.contact') }}</a></li>
                    <li><a href="{{ url('/'. $lang->lang. '/terms') }}">{{ trans('vars.HeaderFooter.termsAndConditions') }}</a></li>
                    <li><a href="{{ url('/'. $lang->lang. '/organizatia-de-caritate-inimilaunison	') }}">{{ trans('vars.HeaderFooter.charityOrganisation') }} InimiLaUnison</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <ul>
                    <li>{{ trans('vars.PageNames.ourServices') }} <i class="fas fa-chevron-down"></i></li>
                    @foreach ($categoriesMenu as $key => $categoryMenu)
                        <li><a href="{{ url('/'. $lang->lang. '/services/'. $categoryMenu->alias) }}">{{ $categoryMenu->translation->name }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-4">
                <ul>
                    <li>{{ trans('vars.HeaderFooter.support') }} <i class="fas fa-chevron-down"></i></li>
                    <li>{{ trans('vars.ContactsAndForms.labelCompany') }}: LBV-Construct</li>
                    <li><a href="mailto:office@lbv-construct.com">{{ trans('vars.ContactsAndForms.labelEmail') }}: {{ trans('vars.ContactsAndForms.lbvCompanyMainEmail') }}</a></li>
                    <li><a href="tel:">{{ trans('vars.ContactsAndForms.labelPhone') }}: {{ trans('vars.ContactsAndForms.lbvCompanyMainPhone') }}</a></li>
                    <li>{{ trans('vars.HeaderFooter.address') }}: {{ trans('vars.ContactsAndForms.lbvCompanyMainAddress') }}</li>
                </ul>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-7 col-md-8">
                <p>
                    {{ trans('vars.HeaderFooter.footerText') }}
                </p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-auto">
                <a href="{{ url('/'.$lang->lang) }}" class="logo"></a>
            </div>
        </div>
    </div>
    <p class="prefooter">©2020 Website by Like-Media</p>
</footer>
