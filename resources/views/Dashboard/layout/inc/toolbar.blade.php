
                <!--begin::Toolbar-->
                <div class="toolbar py-5 py-lg-15 {{ config('settings.animation.main_animation') }} {{ config('settings.animation.toolbarIn')  }}" id="toolbar">
                    <!--begin::Container-->
                    <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
                        <!--begin::Page title-->
                        <div class="page-title d-flex flex-column me-3">
                            <!--begin::Title-->
                            <h1 class="d-flex text-white fw-bolder my-1 fs-3">{{ ucfirst($page_title) }}</h1>
                            <!--end::Title-->
                            <!--begin::Breadcrumb-->
                            <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-white opacity-75">
                                    <a href="javascript:void(0);" onclick="return AnimateAndRedirect(route('dashboard'))" class="text-white text-hover-primary">Home</a>
                                </li>
                                <!--end::Item-->

                                @if(!request()->is('dashboard/Home'))
                                     <!--begin::Item-->
                                <li class="breadcrumb-item">
                                    <span class="bullet bg-white opacity-75 w-5px h-2px"></span>
                                </li>
                                <!--end::Item-->
                                 <!--begin::Item-->
                                 <li class="breadcrumb-item text-white opacity-75">
                                    <a href="javascript:void(0);" class="text-white text-hover-primary">{{ $page_title }}</a>
                                </li>
                                <!--end::Item-->
                                @endif

                            </ul>
                            <!--end::Breadcrumb-->
                        </div>
                        <!--end::Page title-->
                        <!--begin::Actions-->
                        <div class="d-flex align-items-center py-3 py-md-1">

                            <!--begin::Button-->
                            <a href="javascript:void(0);" onclick="return AnimateAndRedirect(route('logout'),true)" class="btn btn-bg-white btn-active-color-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app" id="kt_toolbar_primary_button">Logout</a>
                            <!--end::Button-->
                        </div>
                        <!--end::Actions-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Toolbar-->
