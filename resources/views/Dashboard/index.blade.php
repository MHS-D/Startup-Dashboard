@extends('Dashboard.layout.master')

@section('content')
	<!--begin::Post-->
    <div class="content flex-row-fluid" id="kt_content">

        <!--begin::Toolbar-->
        <div class="d-flex flex-wrap flex-stack mb-6">
            <!--begin::Title-->
            <h3 style="color: white" class="fw-bolder my-2">Notes
            <span class="fs-6 text-gray-400 fw-bold ms-1"></span></h3>
            <!--end::Title-->
        </div>
        <!--end::Toolbar-->

        	<!--begin::Row-->
            <div class="row g-5 g-xl-8">
                <div class="col-xl-4">
                    <!--begin::Statistics Widget 1-->
                    <div class="card bgi-no-repeat card-xl-stretch mb-xl-8" style="background-position: right top; background-size: 30% auto; background-image: url(dashboard/media/svg/shapes/abstract-4.svg">
                        <!--begin::Body-->
                        <div class="card-body">
                            <a href="#" class="card-title fw-bolder text-muted text-hover-primary fs-4">Meeting Schedule</a>
                            <div class="fw-bolder text-primary my-6">3:30PM - 4:20PM</div>
                            <p class="text-dark-75 fw-bold fs-5 m-0">Create a headline that is informative
                            <br />and will capture readers</p>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Statistics Widget 1-->
                </div>
                <div class="col-xl-4">
                    <!--begin::Statistics Widget 1-->
                    <div class="card bgi-no-repeat card-xl-stretch mb-xl-8" style="background-position: right top; background-size: 30% auto; background-image: url(dashboard/media/svg/shapes/abstract-2.svg">
                        <!--begin::Body-->
                        <div class="card-body">
                            <a href="#" class="card-title fw-bolder text-muted text-hover-primary fs-4">Meeting Schedule</a>
                            <div class="fw-bolder text-primary my-6">03 May 2020</div>
                            <p class="text-dark-75 fw-bold fs-5 m-0">Great blog posts don’t just happen Even the best bloggers need it</p>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Statistics Widget 1-->
                </div>
                <div class="col-xl-4">
                    <!--begin::Statistics Widget 1-->
                    <div class="card bgi-no-repeat card-xl-stretch mb-5 mb-xl-8" style="background-position: right top; background-size: 30% auto; background-image: url(dashboard/media/svg/shapes/abstract-1.svg">
                        <!--begin::Body-->
                        <div class="card-body">
                            <a href="#" class="card-title fw-bolder text-muted text-hover-primary fs-4">UI Conference</a>
                            <div class="fw-bolder text-primary my-6">10AM Jan, 2021</div>
                            <p class="text-dark-75 fw-bold fs-5 m-0">AirWays - A Front-end solution for airlines build with ReactJS</p>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Statistics Widget 1-->
                </div>
            </div>
            <!--end::Row-->

             <!--begin::Toolbar-->
        <div class="d-flex flex-wrap flex-stack mb-6">
            <!--begin::Title-->
            <h3 style="color: dark" class="fw-bolder my-2">Statistics
            <span class="fs-6 text-gray-400 fw-bold ms-1"></span></h3>
            <!--end::Title-->
        </div>
        <!--end::Toolbar-->


        <!--begin::Row-->
        <div class="row g-6 g-xl-9">
            <!--begin::Col-->
            <div class="col-sm-6 col-xl-4">
                <!--begin::Card-->
                <div class="card h-100">
                    <!--begin::Card header-->
                    <div class="card-header flex-nowrap border-0 pt-9">
                        <!--begin::Card title-->
                        <div class="card-title m-0">
                            <!--begin::Icon-->
                            <div class="symbol symbol-45px w-45px bg-light me-5">
                                <img src="dashboard/media/svg/brand-logos/twitch.svg" alt="image" class="p-3" />
                            </div>
                            <!--end::Icon-->
                            <!--begin::Title-->
                            <a href="#" class="fs-4 fw-bold text-hover-primary text-gray-600 m-0">Twitch Posts</a>
                            <!--end::Title-->
                        </div>
                        <!--end::Card title-->
                        <!--begin::Card toolbar-->
                        <div class="card-toolbar m-0">
                            <!--begin::Menu-->
                            <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary me-n3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                <span class="svg-icon svg-icon-3 svg-icon-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="5" y="5" width="5" height="5" rx="1" fill="#000000" />
                                            <rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                            <rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                            <rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                        </g>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </button>

                        </div>
                        <!--end::Card toolbar-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body d-flex flex-column px-9 pt-6 pb-8">
                        <!--begin::Heading-->
                        <div class="fs-2tx fw-bolder mb-3">$500.00</div>
                        <!--end::Heading-->
                        <!--begin::Stats-->
                        <div class="d-flex align-items-center flex-wrap mb-5 mt-auto fs-6">
                            <!--SVG file not found: icons/duotune/arrows/Up-right.svg-->
                            <!--begin::Number-->
                            <div class="fw-bolder text-danger me-2">+40.5%</div>
                            <!--end::Number-->
                            <!--begin::Label-->
                            <div class="fw-bold text-gray-400">more impressions</div>
                            <!--end::Label-->
                        </div>
                        <!--end::Stats-->
                        <!--begin::Indicator-->
                        <div class="d-flex align-items-center fw-bold">
                            <span class="badge bg-light text-gray-700 px-3 py-2 me-2">0.5%</span>
                            <span class="text-gray-400 fs-7">MRR</span>
                            <i class="fas fa-exclamation-circle fs-7 ms-2" data-bs-toggle="tooltip" title="Recurring"></i>
                        </div>
                        <!--end::Indicator-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-sm-6 col-xl-4">
                <!--begin::Card-->
                <div class="card h-100">
                    <!--begin::Card header-->
                    <div class="card-header flex-nowrap border-0 pt-9">
                        <!--begin::Card title-->
                        <div class="card-title m-0">
                            <!--begin::Icon-->
                            <div class="symbol symbol-45px w-45px bg-light me-5">
                                <img src="dashboard/media/svg/brand-logos/twitter.svg" alt="image" class="p-3" />
                            </div>
                            <!--end::Icon-->
                            <!--begin::Title-->
                            <a href="#" class="fs-4 fw-bold text-hover-primary text-gray-600 m-0">Twitter Followers</a>
                            <!--end::Title-->
                        </div>
                        <!--end::Card title-->
                        <!--begin::Card toolbar-->
                        <div class="card-toolbar m-0">
                            <!--begin::Menu-->
                            <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary me-n3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                <span class="svg-icon svg-icon-3 svg-icon-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="5" y="5" width="5" height="5" rx="1" fill="#000000" />
                                            <rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                            <rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                            <rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                        </g>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </button>
                            <!--end::Menu-->
                        </div>
                        <!--end::Card toolbar-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body d-flex flex-column px-9 pt-6 pb-8">
                        <!--begin::Heading-->
                        <div class="fs-2tx fw-bolder mb-3">807k</div>
                        <!--end::Heading-->
                        <!--begin::Stats-->
                        <div class="d-flex align-items-center flex-wrap mb-5 mt-auto fs-6">
                            <!--SVG file not found: icons/duotune/arrows/arr007.svg.svg-->
                            <!--begin::Number-->
                            <div class="fw-bolder text-success me-2">+17.62%</div>
                            <!--end::Number-->
                            <!--begin::Label-->
                            <div class="fw-bold text-gray-400">Followers growth</div>
                            <!--end::Label-->
                        </div>
                        <!--end::Stats-->
                        <!--begin::Indicator-->
                        <div class="d-flex align-items-center fw-bold">
                            <span class="badge bg-light text-gray-700 px-3 py-2 me-2">5%</span>
                            <span class="text-gray-400 fs-7">New trials</span>
                        </div>
                        <!--end::Indicator-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-sm-6 col-xl-4">
                <!--begin::Card-->
                <div class="card h-100">
                    <!--begin::Card header-->
                    <div class="card-header flex-nowrap border-0 pt-9">
                        <!--begin::Card title-->
                        <div class="card-title m-0">
                            <!--begin::Icon-->
                            <div class="symbol symbol-45px w-45px bg-light me-5">
                                <img src="dashboard/media/svg/brand-logos/spotify.svg" alt="image" class="p-3" />
                            </div>
                            <!--end::Icon-->
                            <!--begin::Title-->
                            <a href="#" class="fs-4 fw-bold text-hover-primary text-gray-600 m-0">Spotify Listeners</a>
                            <!--end::Title-->
                        </div>
                        <!--end::Card title-->
                        <!--begin::Card toolbar-->
                        <div class="card-toolbar m-0">
                            <!--begin::Menu-->
                            <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary me-n3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                <span class="svg-icon svg-icon-3 svg-icon-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="5" y="5" width="5" height="5" rx="1" fill="#000000" />
                                            <rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                            <rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                            <rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                        </g>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </button>
                            <!--end::Menu-->
                        </div>
                        <!--end::Card toolbar-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body d-flex flex-column px-9 pt-6 pb-8">
                        <!--begin::Heading-->
                        <div class="fs-2tx fw-bolder mb-3">1,073</div>
                        <!--end::Heading-->
                        <!--begin::Stats-->
                        <div class="d-flex align-items-center flex-wrap mb-5 mt-auto fs-6">
                            <!--SVG file not found: icons/duotune/arrows/arr005.svg.svg-->
                            <!--begin::Number-->
                            <div class="fw-bolder text-danger me-2">+10.45%</div>
                            <!--end::Number-->
                            <!--begin::Label-->
                            <div class="fw-bold text-gray-400">Less comments than usual</div>
                            <!--end::Label-->
                        </div>
                        <!--end::Stats-->
                        <!--begin::Indicator-->
                        <div class="d-flex align-items-center fw-bold">
                            <span class="badge bg-light text-gray-700 px-3 py-2 me-2">40%</span>
                            <span class="text-gray-400 fs-7">Impressions</span>
                            <i class="fas fa-exclamation-circle fs-7 ms-2" data-bs-toggle="tooltip" title="This is the total number of new non-trial"></i>
                        </div>
                        <!--end::Indicator-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
            </div>
            <!--end::Col-->




        </div>
        <!--end::Row-->

        <!--begin::Toolbar-->
        <div class="d-flex flex-wrap flex-stack mb-6">
            <!--begin::Title-->
            <h3 style="color: dark" class="fw-bolder my-2">
            <span class="fs-6 text-gray-400 fw-bold ms-1"></span></h3>
            <!--end::Title-->
        </div>
        <!--end::Toolbar-->

           <!--begin::Row-->
           <div class="row g-5 g-xl-8">

            <div class="col-xl-3">
                <!--begin::Statistics Widget 5-->
                <a href="#" class="card bg-body hoverable card-xl-stretch mb-xl-8">
                    <!--begin::Body-->
                    <div class="card-body">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
                        <span class="svg-icon svg-icon-primary svg-icon-3x ms-n1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <rect x="8" y="9" width="3" height="10" rx="1.5" fill="black" />
                                <rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5" fill="black" />
                                <rect x="18" y="11" width="3" height="8" rx="1.5" fill="black" />
                                <rect x="3" y="13" width="3" height="6" rx="1.5" fill="black" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                        <div class="text-gray-900 fw-bolder fs-2 mb-2 mt-5">500M$</div>
                        <div class="fw-bold text-gray-400">SAP UI Progress</div>
                    </div>
                    <!--end::Body-->
                </a>
                <!--end::Statistics Widget 5-->
            </div>
            <div class="col-xl-3">
                <!--begin::Statistics Widget 5-->
                <a href="#" class="card bg-body hoverable card-xl-stretch mb-xl-8">
                    <!--begin::Body-->
                    <div class="card-body">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
                        <span class="svg-icon svg-icon-primary svg-icon-3x ms-n1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <rect x="8" y="9" width="3" height="10" rx="1.5" fill="black" />
                                <rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5" fill="black" />
                                <rect x="18" y="11" width="3" height="8" rx="1.5" fill="black" />
                                <rect x="3" y="13" width="3" height="6" rx="1.5" fill="black" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                        <div class="text-gray-900 fw-bolder fs-2 mb-2 mt-5">500M$</div>
                        <div class="fw-bold text-gray-400">SAP UI Progress</div>
                    </div>
                    <!--end::Body-->
                </a>
                <!--end::Statistics Widget 5-->
            </div>
            <div class="col-xl-3">
                <!--begin::Statistics Widget 5-->
                <a href="#" class="card bg-body hoverable card-xl-stretch mb-xl-8">
                    <!--begin::Body-->
                    <div class="card-body">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
                        <span class="svg-icon svg-icon-primary svg-icon-3x ms-n1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <rect x="8" y="9" width="3" height="10" rx="1.5" fill="black" />
                                <rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5" fill="black" />
                                <rect x="18" y="11" width="3" height="8" rx="1.5" fill="black" />
                                <rect x="3" y="13" width="3" height="6" rx="1.5" fill="black" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                        <div class="text-gray-900 fw-bolder fs-2 mb-2 mt-5">500M$</div>
                        <div class="fw-bold text-gray-400">SAP UI Progress</div>
                    </div>
                    <!--end::Body-->
                </a>
                <!--end::Statistics Widget 5-->
            </div>
            <div class="col-xl-3">
                <!--begin::Statistics Widget 5-->
                <a href="#" class="card bg-body hoverable card-xl-stretch mb-xl-8">
                    <!--begin::Body-->
                    <div class="card-body">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
                        <span class="svg-icon svg-icon-primary svg-icon-3x ms-n1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <rect x="8" y="9" width="3" height="10" rx="1.5" fill="black" />
                                <rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5" fill="black" />
                                <rect x="18" y="11" width="3" height="8" rx="1.5" fill="black" />
                                <rect x="3" y="13" width="3" height="6" rx="1.5" fill="black" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                        <div class="text-gray-900 fw-bolder fs-2 mb-2 mt-5">500M$</div>
                        <div class="fw-bold text-gray-400">SAP UI Progress</div>
                    </div>
                    <!--end::Body-->
                </a>
                <!--end::Statistics Widget 5-->
            </div>

        </div>
        <!--end::Row-->


    </div>
    <!--end::Post-->

@endsection
