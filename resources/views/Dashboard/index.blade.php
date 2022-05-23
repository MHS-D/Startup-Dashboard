@extends('Dashboard.layout.master')

@section('content')
	<!--begin::Post-->
    <div class="content flex-row-fluid" id="kt_content">

        <!--begin::Toolbar-->
        <div class="d-flex flex-wrap flex-stack mb-6">
            <!--begin::Title-->
            <h3 style="color: white" class="fw-bolder my-2">Statistics
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
                                <img src="dashboard/media/svg/brand-logos/pinterest-p.svg" alt="image" class="p-3" />
                            </div>
                            <!--end::Icon-->
                            <!--begin::Title-->
                            <a href="#" class="fs-4 fw-bold text-hover-primary text-gray-600 m-0">Pinterest Posts</a>
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
                        <div class="fs-2tx fw-bolder mb-3">97</div>
                        <!--end::Heading-->
                        <!--begin::Stats-->
                        <div class="d-flex align-items-center flex-wrap mb-5 mt-auto fs-6">
                            <!--SVG file not found: icons/duotune/arrows/arr007.svg.svg-->
                            <!--begin::Number-->
                            <div class="fw-bolder text-success me-2">+26.1%</div>
                            <!--end::Number-->
                            <!--begin::Label-->
                            <div class="fw-bold text-gray-400">More posts</div>
                            <!--end::Label-->
                        </div>
                        <!--end::Stats-->
                        <!--begin::Indicator-->
                        <div class="d-flex align-items-center fw-bold">
                            <span class="badge bg-light text-gray-700 px-3 py-2 me-2">10%</span>
                            <span class="text-gray-400 fs-7">Spend</span>
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
                                <img src="dashboard/media/svg/brand-logos/github.svg" alt="image" class="p-3" />
                            </div>
                            <!--end::Icon-->
                            <!--begin::Title-->
                            <a href="#" class="fs-4 fw-bold text-hover-primary text-gray-600 m-0">Github Contributes</a>
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
                        <div class="fs-2tx fw-bolder mb-3">4,109</div>
                        <!--end::Heading-->
                        <!--begin::Stats-->
                        <div class="d-flex align-items-center flex-wrap mb-5 mt-auto fs-6">
                            <!--SVG file not found: icons/duotune/arrows/arr005.svg.svg-->
                            <!--begin::Number-->
                            <div class="fw-bolder text-danger me-2">+32.8%</div>
                            <!--end::Number-->
                            <!--begin::Label-->
                            <div class="fw-bold text-gray-400">Less contributions</div>
                            <!--end::Label-->
                        </div>
                        <!--end::Stats-->
                        <!--begin::Indicator-->
                        <div class="d-flex align-items-center fw-bold">
                            <span class="badge bg-light text-gray-700 px-3 py-2 me-2">40%</span>
                            <span class="text-gray-400 fs-7">Dispute</span>
                            <i class="fas fa-exclamation-circle fs-7 ms-2" data-bs-toggle="tooltip" title="This is the total number of new non-trial"></i>
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
                                <img src="dashboard/media/svg/brand-logos/youtube-play.svg" alt="image" class="p-3" />
                            </div>
                            <!--end::Icon-->
                            <!--begin::Title-->
                            <a href="#" class="fs-4 fw-bold text-hover-primary text-gray-600 m-0">Youtube Subscribers</a>
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
                        <div class="fs-2tx fw-bolder mb-3">354</div>
                        <!--end::Heading-->
                        <!--begin::Stats-->
                        <div class="d-flex align-items-center flex-wrap mb-5 mt-auto fs-6">
                            <!--SVG file not found: icons/duotune/arrows/arr007.svg.svg-->
                            <!--begin::Number-->
                            <div class="fw-bolder text-success me-2">+29.45%</div>
                            <!--end::Number-->
                            <!--begin::Label-->
                            <div class="fw-bold text-gray-400">Subscribers growth</div>
                            <!--end::Label-->
                        </div>
                        <!--end::Stats-->
                        <!--begin::Indicator-->
                        <div class="d-flex align-items-center fw-bold">
                            <span class="badge bg-light text-gray-700 px-3 py-2 me-2">40%</span>
                            <span class="text-gray-400 fs-7">Subscribers</span>
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
                                <img src="dashboard/media/svg/brand-logos/telegram.svg" alt="image" class="p-3" />
                            </div>
                            <!--end::Icon-->
                            <!--begin::Title-->
                            <a href="#" class="fs-4 fw-bold text-hover-primary text-gray-600 m-0">Telegram Posts</a>
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
                        <div class="fs-2tx fw-bolder mb-3">566</div>
                        <!--end::Heading-->
                        <!--begin::Stats-->
                        <div class="d-flex align-items-center flex-wrap mb-5 mt-auto fs-6">
                            <!--SVG file not found: icons/duotune/arrows/arr007.svg.svg-->
                            <!--begin::Number-->
                            <div class="fw-bolder text-success me-2">+11.4%</div>
                            <!--end::Number-->
                            <!--begin::Label-->
                            <div class="fw-bold text-gray-400">more clicks</div>
                            <!--end::Label-->
                        </div>
                        <!--end::Stats-->
                        <!--begin::Indicator-->
                        <div class="d-flex align-items-center fw-bold">
                            <span class="badge bg-light text-gray-700 px-3 py-2 me-2">40%</span>
                            <span class="text-gray-400 fs-7">Profit</span>
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
                                <img src="dashboard/media/svg/brand-logos/reddit.svg" alt="image" class="p-3" />
                            </div>
                            <!--end::Icon-->
                            <!--begin::Title-->
                            <a href="#" class="fs-4 fw-bold text-hover-primary text-gray-600 m-0">Reddit Awards</a>
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
                            <!--begin::Menu 3-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
                                <!--begin::Heading-->
                                <div class="menu-item px-3">
                                    <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
                                </div>
                                <!--end::Heading-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">Create Invoice</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link flex-stack px-3">Create Payment
                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">Generate Bill</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                                    <a href="#" class="menu-link px-3">
                                        <span class="menu-title">Subscription</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <!--begin::Menu sub-->
                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Plans</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Billing</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Statements</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu separator-->
                                        <div class="separator my-2"></div>
                                        <!--end::Menu separator-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content px-3">
                                                <!--begin::Switch-->
                                                <label class="form-check form-switch form-check-custom form-check-solid">
                                                    <!--begin::Input-->
                                                    <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
                                                    <!--end::Input-->
                                                    <!--end::Label-->
                                                    <span class="form-check-label text-muted fs-6">Recuring</span>
                                                    <!--end::Label-->
                                                </label>
                                                <!--end::Switch-->
                                            </div>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu sub-->
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3 my-1">
                                    <a href="#" class="menu-link px-3">Settings</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu 3-->
                            <!--end::Menu-->
                        </div>
                        <!--end::Card toolbar-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body d-flex flex-column px-9 pt-6 pb-8">
                        <!--begin::Heading-->
                        <div class="fs-2tx fw-bolder mb-3">2.1M</div>
                        <!--end::Heading-->
                        <!--begin::Stats-->
                        <div class="d-flex align-items-center flex-wrap mb-5 mt-auto fs-6">
                            <!--SVG file not found: icons/duotune/arrows/arr007.svg.svg-->
                            <!--begin::Number-->
                            <div class="fw-bolder text-success me-2">-46.7%</div>
                            <!--end::Number-->
                            <!--begin::Label-->
                            <div class="fw-bold text-gray-400">more adds</div>
                            <!--end::Label-->
                        </div>
                        <!--end::Stats-->
                        <!--begin::Indicator-->
                        <div class="d-flex align-items-center fw-bold">
                            <span class="badge bg-light text-gray-700 px-3 py-2 me-2">0.0%</span>
                            <span class="text-gray-400 fs-7">Retention</span>
                            <i class="fas fa-exclamation-circle fs-7 ms-2" data-bs-toggle="tooltip" title="This table displays revenue retention"></i>
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
    </div>
    <!--end::Post-->

@endsection
