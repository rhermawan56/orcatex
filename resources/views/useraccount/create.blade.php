@extends('template.template')

@section('title', 'User Account')

@section('content')
    <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
        <!--begin::Post-->
        <div class="content flex-row-fluid" id="kt_content">
            <!--begin::Navbar-->
            <div class="card mb-8">
                <div class="card-body pt-9 pb-0">
                    <!--begin::Details-->
                    <div class="d-flex flex-wrap flex-sm-nowrap mb-6">
                        <!--begin::Image-->
                        <div
                            class="d-flex flex-center flex-shrink-0 bg-light rounded w-100px h-100px w-lg-150px h-lg-150px me-7 mb-4">
                            <img class="mw-50px mw-lg-75px" src="{{ '/assets/media/svg/brand-logos/volicity-9.svg' }}"
                                alt="image" />
                        </div>
                        <!--end::Image-->
                        <!--begin::Wrapper-->
                        <div class="flex-grow-1">
                            <!--begin::Head-->
                            <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                                <!--begin::Details-->
                                <div class="d-flex flex-column">
                                    <!--begin::Status-->
                                    <div class="d-flex align-items-center mb-1">
                                        <a href="#"
                                            class="text-gray-800 text-hover-primary fs-2 fw-bolder me-3">{{ $title }}</a>
                                    </div>
                                    <!--end::Status-->
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Head-->
                            <!--begin::Info-->
                            <div class="d-flex flex-wrap justify-content-start">
                                <!--begin::Stats-->
                                <div class="d-flex flex-wrap">
                                    <!--begin::Stat-->
                                    <div
                                        class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                        <!--begin::Number-->
                                        <div class="d-flex align-items-center">
                                            <div class="fs-4 fw-bolder">29 Jan, 2021</div>
                                        </div>
                                        <!--end::Number-->
                                        <!--begin::Label-->
                                        <div class="fw-bold fs-6 text-gray-400">Due Date</div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Stat-->
                                    <!--begin::Stat-->
                                    <div
                                        class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                        <!--begin::Number-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
                                            <span class="svg-icon svg-icon-3 svg-icon-danger me-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.5" x="11" y="18" width="13" height="2"
                                                        rx="1" transform="rotate(-90 11 18)" fill="black" />
                                                    <path
                                                        d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z"
                                                        fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                            <div class="fs-4 fw-bolder" data-kt-countup="true" data-kt-countup-value="75">0
                                            </div>
                                        </div>
                                        <!--end::Number-->
                                        <!--begin::Label-->
                                        <div class="fw-bold fs-6 text-gray-400">Open Tasks</div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Stat-->
                                    <!--begin::Stat-->
                                    <div
                                        class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                        <!--begin::Number-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                            <span class="svg-icon svg-icon-3 svg-icon-success me-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.5" x="13" y="6" width="13" height="2"
                                                        rx="1" transform="rotate(90 13 6)" fill="black" />
                                                    <path
                                                        d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                                                        fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                            <div class="fs-4 fw-bolder" data-kt-countup="true" data-kt-countup-value="15000"
                                                data-kt-countup-prefix="$">0</div>
                                        </div>
                                        <!--end::Number-->
                                        <!--begin::Label-->
                                        <div class="fw-bold fs-6 text-gray-400">Budget Spent</div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Stat-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Details-->
                    <div class="separator"></div>
                    <!--begin::Nav wrapper-->
                    <div class="d-flex overflow-auto h-55px">
                        <!--begin::Nav links-->
                        <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bolder flex-nowrap" id="nav-content">
                            <li class="nav-item">
                                <a class="nav-link text-active-primary me-6"
                                    href="{{ '/orca/users/useraccount' }}">Overview</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-active-primary me-6 active" href="">Create User</a>
                            </li>
                        </ul>
                        <!--end::Nav links-->
                    </div>
                    <!--end::Nav wrapper-->
                </div>
            </div>
            <!--end::Navbar-->
            <!--begin::Modals-->
            <!--begin::Modal - View Users-->
            <div class="modal fade" id="kt_modal_view_users" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog mw-650px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Modal header-->
                        <div class="modal-header pb-0 border-0 justify-content-end">
                            <!--begin::Close-->
                            <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                <span class="svg-icon svg-icon-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                            transform="rotate(-45 6 17.3137)" fill="black" />
                                        <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                            transform="rotate(45 7.41422 6)" fill="black" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Close-->
                        </div>
                        <!--begin::Modal header-->
                        <!--begin::Modal body-->
                        <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                            <!--begin::Heading-->
                            <div class="text-center mb-13">
                                <!--begin::Title-->
                                <h1 class="mb-3">Browse Users</h1>
                                <!--end::Title-->
                                <!--begin::Description-->
                                <div class="text-muted fw-bold fs-5">If you need more info, please check out our
                                    <a href="#" class="link-primary fw-bolder">Users Directory</a>.
                                </div>
                                <!--end::Description-->
                            </div>
                            <!--end::Heading-->
                            <!--begin::Users-->
                            <div class="mb-15">
                                <!--begin::List-->
                                <div class="mh-375px scroll-y me-n7 pe-7">
                                    <!--begin::User-->
                                    <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="{{ '/assets/media/avatars/150-1.jpg' }}" />
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-6">
                                                <!--begin::Name-->
                                                <a href="#"
                                                    class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Emma
                                                    Smith
                                                    <span class="badge badge-light fs-8 fw-bold ms-2">Art
                                                        Director</span></a>
                                                <!--end::Name-->
                                                <!--begin::Email-->
                                                <div class="fw-bold text-muted">e.smith@kpmg.com.au</div>
                                                <!--end::Email-->
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Stats-->
                                        <div class="d-flex">
                                            <!--begin::Sales-->
                                            <div class="text-end">
                                                <div class="fs-5 fw-bolder text-dark">$23,000</div>
                                                <div class="fs-7 text-muted">Sales</div>
                                            </div>
                                            <!--end::Sales-->
                                        </div>
                                        <!--end::Stats-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::User-->
                                    <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span class="symbol-label bg-light-danger text-danger fw-bold">M</span>
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-6">
                                                <!--begin::Name-->
                                                <a href="#"
                                                    class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Melody
                                                    Macy
                                                    <span class="badge badge-light fs-8 fw-bold ms-2">Marketing
                                                        Analytic</span></a>
                                                <!--end::Name-->
                                                <!--begin::Email-->
                                                <div class="fw-bold text-muted">melody@altbox.com</div>
                                                <!--end::Email-->
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Stats-->
                                        <div class="d-flex">
                                            <!--begin::Sales-->
                                            <div class="text-end">
                                                <div class="fs-5 fw-bolder text-dark">$50,500</div>
                                                <div class="fs-7 text-muted">Sales</div>
                                            </div>
                                            <!--end::Sales-->
                                        </div>
                                        <!--end::Stats-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::User-->
                                    <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="{{ '/assets/media/avatars/150-26.jpg' }}" />
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-6">
                                                <!--begin::Name-->
                                                <a href="#"
                                                    class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Max
                                                    Smith
                                                    <span class="badge badge-light fs-8 fw-bold ms-2">Software
                                                        Enginer</span></a>
                                                <!--end::Name-->
                                                <!--begin::Email-->
                                                <div class="fw-bold text-muted">max@kt.com</div>
                                                <!--end::Email-->
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Stats-->
                                        <div class="d-flex">
                                            <!--begin::Sales-->
                                            <div class="text-end">
                                                <div class="fs-5 fw-bolder text-dark">$75,900</div>
                                                <div class="fs-7 text-muted">Sales</div>
                                            </div>
                                            <!--end::Sales-->
                                        </div>
                                        <!--end::Stats-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::User-->
                                    <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="{{ '/assets/media/avatars/150-4.jpg' }}" />
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-6">
                                                <!--begin::Name-->
                                                <a href="#"
                                                    class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Sean
                                                    Bean
                                                    <span class="badge badge-light fs-8 fw-bold ms-2">Web
                                                        Developer</span></a>
                                                <!--end::Name-->
                                                <!--begin::Email-->
                                                <div class="fw-bold text-muted">sean@dellito.com</div>
                                                <!--end::Email-->
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Stats-->
                                        <div class="d-flex">
                                            <!--begin::Sales-->
                                            <div class="text-end">
                                                <div class="fs-5 fw-bolder text-dark">$10,500</div>
                                                <div class="fs-7 text-muted">Sales</div>
                                            </div>
                                            <!--end::Sales-->
                                        </div>
                                        <!--end::Stats-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::User-->
                                    <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="{{ '/assets/media/avatars/150-15.jpg' }}" />
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-6">
                                                <!--begin::Name-->
                                                <a href="#"
                                                    class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Brian
                                                    Cox
                                                    <span class="badge badge-light fs-8 fw-bold ms-2">UI/UX
                                                        Designer</span></a>
                                                <!--end::Name-->
                                                <!--begin::Email-->
                                                <div class="fw-bold text-muted">brian@exchange.com</div>
                                                <!--end::Email-->
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Stats-->
                                        <div class="d-flex">
                                            <!--begin::Sales-->
                                            <div class="text-end">
                                                <div class="fs-5 fw-bolder text-dark">$20,000</div>
                                                <div class="fs-7 text-muted">Sales</div>
                                            </div>
                                            <!--end::Sales-->
                                        </div>
                                        <!--end::Stats-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::User-->
                                    <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span class="symbol-label bg-light-warning text-warning fw-bold">M</span>
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-6">
                                                <!--begin::Name-->
                                                <a href="#"
                                                    class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Mikaela
                                                    Collins
                                                    <span class="badge badge-light fs-8 fw-bold ms-2">Head Of
                                                        Marketing</span></a>
                                                <!--end::Name-->
                                                <!--begin::Email-->
                                                <div class="fw-bold text-muted">mikaela@pexcom.com</div>
                                                <!--end::Email-->
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Stats-->
                                        <div class="d-flex">
                                            <!--begin::Sales-->
                                            <div class="text-end">
                                                <div class="fs-5 fw-bolder text-dark">$9,300</div>
                                                <div class="fs-7 text-muted">Sales</div>
                                            </div>
                                            <!--end::Sales-->
                                        </div>
                                        <!--end::Stats-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::User-->
                                    <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="{{ '/assets/media/avatars/150-8.jpg' }}" />
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-6">
                                                <!--begin::Name-->
                                                <a href="#"
                                                    class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Francis
                                                    Mitcham
                                                    <span class="badge badge-light fs-8 fw-bold ms-2">Software
                                                        Arcitect</span></a>
                                                <!--end::Name-->
                                                <!--begin::Email-->
                                                <div class="fw-bold text-muted">f.mitcham@kpmg.com.au</div>
                                                <!--end::Email-->
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Stats-->
                                        <div class="d-flex">
                                            <!--begin::Sales-->
                                            <div class="text-end">
                                                <div class="fs-5 fw-bolder text-dark">$15,000</div>
                                                <div class="fs-7 text-muted">Sales</div>
                                            </div>
                                            <!--end::Sales-->
                                        </div>
                                        <!--end::Stats-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::User-->
                                    <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span class="symbol-label bg-light-danger text-danger fw-bold">O</span>
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-6">
                                                <!--begin::Name-->
                                                <a href="#"
                                                    class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Olivia
                                                    Wild
                                                    <span class="badge badge-light fs-8 fw-bold ms-2">System
                                                        Admin</span></a>
                                                <!--end::Name-->
                                                <!--begin::Email-->
                                                <div class="fw-bold text-muted">olivia@corpmail.com</div>
                                                <!--end::Email-->
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Stats-->
                                        <div class="d-flex">
                                            <!--begin::Sales-->
                                            <div class="text-end">
                                                <div class="fs-5 fw-bolder text-dark">$23,000</div>
                                                <div class="fs-7 text-muted">Sales</div>
                                            </div>
                                            <!--end::Sales-->
                                        </div>
                                        <!--end::Stats-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::User-->
                                    <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span class="symbol-label bg-light-primary text-primary fw-bold">N</span>
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-6">
                                                <!--begin::Name-->
                                                <a href="#"
                                                    class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Neil
                                                    Owen
                                                    <span class="badge badge-light fs-8 fw-bold ms-2">Account
                                                        Manager</span></a>
                                                <!--end::Name-->
                                                <!--begin::Email-->
                                                <div class="fw-bold text-muted">owen.neil@gmail.com</div>
                                                <!--end::Email-->
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Stats-->
                                        <div class="d-flex">
                                            <!--begin::Sales-->
                                            <div class="text-end">
                                                <div class="fs-5 fw-bolder text-dark">$45,800</div>
                                                <div class="fs-7 text-muted">Sales</div>
                                            </div>
                                            <!--end::Sales-->
                                        </div>
                                        <!--end::Stats-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::User-->
                                    <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="{{ '/assets/media/avatars/150-6.jpg' }}" />
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-6">
                                                <!--begin::Name-->
                                                <a href="#"
                                                    class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Dan
                                                    Wilson
                                                    <span class="badge badge-light fs-8 fw-bold ms-2">Web
                                                        Desinger</span></a>
                                                <!--end::Name-->
                                                <!--begin::Email-->
                                                <div class="fw-bold text-muted">dam@consilting.com</div>
                                                <!--end::Email-->
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Stats-->
                                        <div class="d-flex">
                                            <!--begin::Sales-->
                                            <div class="text-end">
                                                <div class="fs-5 fw-bolder text-dark">$90,500</div>
                                                <div class="fs-7 text-muted">Sales</div>
                                            </div>
                                            <!--end::Sales-->
                                        </div>
                                        <!--end::Stats-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::User-->
                                    <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span class="symbol-label bg-light-danger text-danger fw-bold">E</span>
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-6">
                                                <!--begin::Name-->
                                                <a href="#"
                                                    class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Emma
                                                    Bold
                                                    <span class="badge badge-light fs-8 fw-bold ms-2">Corporate
                                                        Finance</span></a>
                                                <!--end::Name-->
                                                <!--begin::Email-->
                                                <div class="fw-bold text-muted">emma@intenso.com</div>
                                                <!--end::Email-->
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Stats-->
                                        <div class="d-flex">
                                            <!--begin::Sales-->
                                            <div class="text-end">
                                                <div class="fs-5 fw-bolder text-dark">$5,000</div>
                                                <div class="fs-7 text-muted">Sales</div>
                                            </div>
                                            <!--end::Sales-->
                                        </div>
                                        <!--end::Stats-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::User-->
                                    <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="{{ '/assets/media/avatars/150-7.jpg' }}" />
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-6">
                                                <!--begin::Name-->
                                                <a href="#"
                                                    class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Ana
                                                    Crown
                                                    <span class="badge badge-light fs-8 fw-bold ms-2">Customer
                                                        Relationship</span></a>
                                                <!--end::Name-->
                                                <!--begin::Email-->
                                                <div class="fw-bold text-muted">ana.cf@limtel.com</div>
                                                <!--end::Email-->
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Stats-->
                                        <div class="d-flex">
                                            <!--begin::Sales-->
                                            <div class="text-end">
                                                <div class="fs-5 fw-bolder text-dark">$70,000</div>
                                                <div class="fs-7 text-muted">Sales</div>
                                            </div>
                                            <!--end::Sales-->
                                        </div>
                                        <!--end::Stats-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::User-->
                                    <div class="d-flex flex-stack py-5">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span class="symbol-label bg-light-info text-info fw-bold">A</span>
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-6">
                                                <!--begin::Name-->
                                                <a href="#"
                                                    class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Robert
                                                    Doe
                                                    <span class="badge badge-light fs-8 fw-bold ms-2">Marketing
                                                        Executive</span></a>
                                                <!--end::Name-->
                                                <!--begin::Email-->
                                                <div class="fw-bold text-muted">robert@benko.com</div>
                                                <!--end::Email-->
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Stats-->
                                        <div class="d-flex">
                                            <!--begin::Sales-->
                                            <div class="text-end">
                                                <div class="fs-5 fw-bolder text-dark">$45,500</div>
                                                <div class="fs-7 text-muted">Sales</div>
                                            </div>
                                            <!--end::Sales-->
                                        </div>
                                        <!--end::Stats-->
                                    </div>
                                    <!--end::User-->
                                </div>
                                <!--end::List-->
                            </div>
                            <!--end::Users-->
                            <!--begin::Notice-->
                            <div class="d-flex justify-content-between">
                                <!--begin::Label-->
                                <div class="fw-bold">
                                    <label class="fs-6">Adding Users by Team Members</label>
                                    <div class="fs-7 text-muted">If you need more info, please check budget planning</div>
                                </div>
                                <!--end::Label-->
                                <!--begin::Switch-->
                                <label class="form-check form-switch form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="" checked="checked" />
                                    <span class="form-check-label fw-bold text-muted">Allowed</span>
                                </label>
                                <!--end::Switch-->
                            </div>
                            <!--end::Notice-->
                        </div>
                        <!--end::Modal body-->
                    </div>
                    <!--end::Modal content-->
                </div>
                <!--end::Modal dialog-->
            </div>
            <!--end::Modal - View Users-->
            <!--begin::Modal - Users Search-->
            <div class="modal fade" id="kt_modal_users_search" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-650px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Modal header-->
                        <div class="modal-header pb-0 border-0 justify-content-end">
                            <!--begin::Close-->
                            <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                <span class="svg-icon svg-icon-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.5" x="6" y="17.3137" width="16" height="2"
                                            rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                                        <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                            transform="rotate(45 7.41422 6)" fill="black" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Close-->
                        </div>
                        <!--begin::Modal header-->
                        <!--begin::Modal body-->
                        <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                            <!--begin::Content-->
                            <div class="text-center mb-13">
                                <h1 class="mb-3">Search Users</h1>
                                <div class="text-muted fw-bold fs-5">Invite Collaborators To Your Project</div>
                            </div>
                            <!--end::Content-->
                            <!--begin::Search-->
                            <div id="kt_modal_users_search_handler" data-kt-search-keypress="true"
                                data-kt-search-min-length="2" data-kt-search-enter="enter"
                                data-kt-search-layout="inline">
                                <!--begin::Form-->
                                <form data-kt-search-element="form" class="w-100 position-relative mb-5"
                                    autocomplete="off">
                                    <!--begin::Hidden input(Added to disable form autocomplete)-->
                                    <input type="hidden" />
                                    <!--end::Hidden input-->
                                    <!--begin::Icon-->
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                    <span
                                        class="svg-icon svg-icon-2 svg-icon-lg-1 svg-icon-gray-500 position-absolute top-50 ms-5 translate-middle-y">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2"
                                                rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
                                            <path
                                                d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                                fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <!--end::Icon-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-lg form-control-solid px-15"
                                        name="search" value=""
                                        placeholder="Search by username, full name or email..."
                                        data-kt-search-element="input" />
                                    <!--end::Input-->
                                    <!--begin::Spinner-->
                                    <span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5"
                                        data-kt-search-element="spinner">
                                        <span class="spinner-border h-15px w-15px align-middle text-muted"></span>
                                    </span>
                                    <!--end::Spinner-->
                                    <!--begin::Reset-->
                                    <span
                                        class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none"
                                        data-kt-search-element="clear">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                        <span class="svg-icon svg-icon-2 svg-icon-lg-1 me-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2"
                                                    rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                                                <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                                    transform="rotate(45 7.41422 6)" fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                    <!--end::Reset-->
                                </form>
                                <!--end::Form-->
                                <!--begin::Wrapper-->
                                <div class="py-5">
                                    <!--begin::Suggestions-->
                                    <div data-kt-search-element="suggestions">
                                        <!--begin::Heading-->
                                        <h3 class="fw-bold mb-5">Recently searched:</h3>
                                        <!--end::Heading-->
                                        <!--begin::Users-->
                                        <div class="mh-375px scroll-y me-n7 pe-7">
                                            <!--begin::User-->
                                            <a href="#"
                                                class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle me-5">
                                                    <img alt="Pic" src="{{ '/assets/media/avatars/150-1.jpg' }}" />
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Info-->
                                                <div class="fw-bold">
                                                    <span class="fs-6 text-gray-800 me-2">Emma Smith</span>
                                                    <span class="badge badge-light">Art Director</span>
                                                </div>
                                                <!--end::Info-->
                                            </a>
                                            <!--end::User-->
                                            <!--begin::User-->
                                            <a href="#"
                                                class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle me-5">
                                                    <span class="symbol-label bg-light-danger text-danger fw-bold">M</span>
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Info-->
                                                <div class="fw-bold">
                                                    <span class="fs-6 text-gray-800 me-2">Melody Macy</span>
                                                    <span class="badge badge-light">Marketing Analytic</span>
                                                </div>
                                                <!--end::Info-->
                                            </a>
                                            <!--end::User-->
                                            <!--begin::User-->
                                            <a href="#"
                                                class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle me-5">
                                                    <img alt="Pic" src="{{ '/assets/media/avatars/150-26.jpg' }}" />
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Info-->
                                                <div class="fw-bold">
                                                    <span class="fs-6 text-gray-800 me-2">Max Smith</span>
                                                    <span class="badge badge-light">Software Enginer</span>
                                                </div>
                                                <!--end::Info-->
                                            </a>
                                            <!--end::User-->
                                            <!--begin::User-->
                                            <a href="#"
                                                class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle me-5">
                                                    <img alt="Pic" src="{{ '/assets/media/avatars/150-4.jpg' }}" />
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Info-->
                                                <div class="fw-bold">
                                                    <span class="fs-6 text-gray-800 me-2">Sean Bean</span>
                                                    <span class="badge badge-light">Web Developer</span>
                                                </div>
                                                <!--end::Info-->
                                            </a>
                                            <!--end::User-->
                                            <!--begin::User-->
                                            <a href="#"
                                                class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle me-5">
                                                    <img alt="Pic" src="{{ '/assets/media/avatars/150-15.jpg' }}" />
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Info-->
                                                <div class="fw-bold">
                                                    <span class="fs-6 text-gray-800 me-2">Brian Cox</span>
                                                    <span class="badge badge-light">UI/UX Designer</span>
                                                </div>
                                                <!--end::Info-->
                                            </a>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Users-->
                                    </div>
                                    <!--end::Suggestions-->
                                    <!--begin::Results(add d-none to below element to hide the users list by default)-->
                                    <div data-kt-search-element="results" class="d-none">
                                        <!--begin::Users-->
                                        <div class="mh-375px scroll-y me-n7 pe-7">
                                            <!--begin::User-->
                                            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="0">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Checkbox-->
                                                    <label class="form-check form-check-custom form-check-solid me-5">
                                                        <input class="form-check-input" type="checkbox" name="users"
                                                            data-kt-check="true" data-kt-check-target="[data-user-id='0']"
                                                            value="0" />
                                                    </label>
                                                    <!--end::Checkbox-->
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <img alt="Pic"
                                                            src="{{ '/assets/media/avatars/150-1.jpg' }}" />
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Emma
                                                            Smith</a>
                                                        <div class="fw-bold text-muted">e.smith@kpmg.com.au</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true">
                                                        <option value="1">Guest</option>
                                                        <option value="2" selected="selected">Owner</option>
                                                        <option value="3">Can Edit</option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::Separator-->
                                            <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                            <!--end::Separator-->
                                            <!--begin::User-->
                                            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="1">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Checkbox-->
                                                    <label class="form-check form-check-custom form-check-solid me-5">
                                                        <input class="form-check-input" type="checkbox" name="users"
                                                            data-kt-check="true" data-kt-check-target="[data-user-id='1']"
                                                            value="1" />
                                                    </label>
                                                    <!--end::Checkbox-->
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <span
                                                            class="symbol-label bg-light-danger text-danger fw-bold">M</span>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Melody
                                                            Macy</a>
                                                        <div class="fw-bold text-muted">melody@altbox.com</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true">
                                                        <option value="1" selected="selected">Guest</option>
                                                        <option value="2">Owner</option>
                                                        <option value="3">Can Edit</option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::Separator-->
                                            <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                            <!--end::Separator-->
                                            <!--begin::User-->
                                            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="2">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Checkbox-->
                                                    <label class="form-check form-check-custom form-check-solid me-5">
                                                        <input class="form-check-input" type="checkbox" name="users"
                                                            data-kt-check="true" data-kt-check-target="[data-user-id='2']"
                                                            value="2" />
                                                    </label>
                                                    <!--end::Checkbox-->
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <img alt="Pic"
                                                            src="{{ '/assets/media/avatars/150-26.jpg' }}" />
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Max
                                                            Smith</a>
                                                        <div class="fw-bold text-muted">max@kt.com</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true">
                                                        <option value="1">Guest</option>
                                                        <option value="2">Owner</option>
                                                        <option value="3" selected="selected">Can Edit</option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::Separator-->
                                            <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                            <!--end::Separator-->
                                            <!--begin::User-->
                                            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="3">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Checkbox-->
                                                    <label class="form-check form-check-custom form-check-solid me-5">
                                                        <input class="form-check-input" type="checkbox" name="users"
                                                            data-kt-check="true" data-kt-check-target="[data-user-id='3']"
                                                            value="3" />
                                                    </label>
                                                    <!--end::Checkbox-->
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <img alt="Pic"
                                                            src="{{ '/assets/media/avatars/150-4.jpg' }}" />
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Sean
                                                            Bean</a>
                                                        <div class="fw-bold text-muted">sean@dellito.com</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true">
                                                        <option value="1">Guest</option>
                                                        <option value="2" selected="selected">Owner</option>
                                                        <option value="3">Can Edit</option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::Separator-->
                                            <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                            <!--end::Separator-->
                                            <!--begin::User-->
                                            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="4">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Checkbox-->
                                                    <label class="form-check form-check-custom form-check-solid me-5">
                                                        <input class="form-check-input" type="checkbox" name="users"
                                                            data-kt-check="true" data-kt-check-target="[data-user-id='4']"
                                                            value="4" />
                                                    </label>
                                                    <!--end::Checkbox-->
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <img alt="Pic"
                                                            src="{{ '/assets/media/avatars/150-15.jpg' }}" />
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Brian
                                                            Cox</a>
                                                        <div class="fw-bold text-muted">brian@exchange.com</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true">
                                                        <option value="1">Guest</option>
                                                        <option value="2">Owner</option>
                                                        <option value="3" selected="selected">Can Edit</option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::Separator-->
                                            <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                            <!--end::Separator-->
                                            <!--begin::User-->
                                            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="5">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Checkbox-->
                                                    <label class="form-check form-check-custom form-check-solid me-5">
                                                        <input class="form-check-input" type="checkbox" name="users"
                                                            data-kt-check="true" data-kt-check-target="[data-user-id='5']"
                                                            value="5" />
                                                    </label>
                                                    <!--end::Checkbox-->
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <span
                                                            class="symbol-label bg-light-warning text-warning fw-bold">M</span>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Mikaela
                                                            Collins</a>
                                                        <div class="fw-bold text-muted">mikaela@pexcom.com</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true">
                                                        <option value="1">Guest</option>
                                                        <option value="2" selected="selected">Owner</option>
                                                        <option value="3">Can Edit</option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::Separator-->
                                            <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                            <!--end::Separator-->
                                            <!--begin::User-->
                                            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="6">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Checkbox-->
                                                    <label class="form-check form-check-custom form-check-solid me-5">
                                                        <input class="form-check-input" type="checkbox" name="users"
                                                            data-kt-check="true" data-kt-check-target="[data-user-id='6']"
                                                            value="6" />
                                                    </label>
                                                    <!--end::Checkbox-->
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <img alt="Pic"
                                                            src="{{ '/assets/media/avatars/150-8.jpg' }}" />
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Francis
                                                            Mitcham</a>
                                                        <div class="fw-bold text-muted">f.mitcham@kpmg.com.au</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true">
                                                        <option value="1">Guest</option>
                                                        <option value="2">Owner</option>
                                                        <option value="3" selected="selected">Can Edit</option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::Separator-->
                                            <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                            <!--end::Separator-->
                                            <!--begin::User-->
                                            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="7">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Checkbox-->
                                                    <label class="form-check form-check-custom form-check-solid me-5">
                                                        <input class="form-check-input" type="checkbox" name="users"
                                                            data-kt-check="true" data-kt-check-target="[data-user-id='7']"
                                                            value="7" />
                                                    </label>
                                                    <!--end::Checkbox-->
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <span
                                                            class="symbol-label bg-light-danger text-danger fw-bold">O</span>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Olivia
                                                            Wild</a>
                                                        <div class="fw-bold text-muted">olivia@corpmail.com</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true">
                                                        <option value="1">Guest</option>
                                                        <option value="2" selected="selected">Owner</option>
                                                        <option value="3">Can Edit</option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::Separator-->
                                            <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                            <!--end::Separator-->
                                            <!--begin::User-->
                                            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="8">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Checkbox-->
                                                    <label class="form-check form-check-custom form-check-solid me-5">
                                                        <input class="form-check-input" type="checkbox" name="users"
                                                            data-kt-check="true" data-kt-check-target="[data-user-id='8']"
                                                            value="8" />
                                                    </label>
                                                    <!--end::Checkbox-->
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <span
                                                            class="symbol-label bg-light-primary text-primary fw-bold">N</span>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Neil
                                                            Owen</a>
                                                        <div class="fw-bold text-muted">owen.neil@gmail.com</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true">
                                                        <option value="1" selected="selected">Guest</option>
                                                        <option value="2">Owner</option>
                                                        <option value="3">Can Edit</option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::Separator-->
                                            <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                            <!--end::Separator-->
                                            <!--begin::User-->
                                            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="9">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Checkbox-->
                                                    <label class="form-check form-check-custom form-check-solid me-5">
                                                        <input class="form-check-input" type="checkbox" name="users"
                                                            data-kt-check="true" data-kt-check-target="[data-user-id='9']"
                                                            value="9" />
                                                    </label>
                                                    <!--end::Checkbox-->
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <img alt="Pic"
                                                            src="{{ '/assets/media/avatars/150-6.jpg' }}" />
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Dan
                                                            Wilson</a>
                                                        <div class="fw-bold text-muted">dam@consilting.com</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true">
                                                        <option value="1">Guest</option>
                                                        <option value="2">Owner</option>
                                                        <option value="3" selected="selected">Can Edit</option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::Separator-->
                                            <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                            <!--end::Separator-->
                                            <!--begin::User-->
                                            <div class="rounded d-flex flex-stack bg-active-lighten p-4"
                                                data-user-id="10">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Checkbox-->
                                                    <label class="form-check form-check-custom form-check-solid me-5">
                                                        <input class="form-check-input" type="checkbox" name="users"
                                                            data-kt-check="true"
                                                            data-kt-check-target="[data-user-id='10']" value="10" />
                                                    </label>
                                                    <!--end::Checkbox-->
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <span
                                                            class="symbol-label bg-light-danger text-danger fw-bold">E</span>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Emma
                                                            Bold</a>
                                                        <div class="fw-bold text-muted">emma@intenso.com</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true">
                                                        <option value="1">Guest</option>
                                                        <option value="2" selected="selected">Owner</option>
                                                        <option value="3">Can Edit</option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::Separator-->
                                            <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                            <!--end::Separator-->
                                            <!--begin::User-->
                                            <div class="rounded d-flex flex-stack bg-active-lighten p-4"
                                                data-user-id="11">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Checkbox-->
                                                    <label class="form-check form-check-custom form-check-solid me-5">
                                                        <input class="form-check-input" type="checkbox" name="users"
                                                            data-kt-check="true"
                                                            data-kt-check-target="[data-user-id='11']" value="11" />
                                                    </label>
                                                    <!--end::Checkbox-->
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <img alt="Pic"
                                                            src="{{ '/assets/media/avatars/150-7.jpg' }}" />
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Ana
                                                            Crown</a>
                                                        <div class="fw-bold text-muted">ana.cf@limtel.com</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true">
                                                        <option value="1" selected="selected">Guest</option>
                                                        <option value="2">Owner</option>
                                                        <option value="3">Can Edit</option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::Separator-->
                                            <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                            <!--end::Separator-->
                                            <!--begin::User-->
                                            <div class="rounded d-flex flex-stack bg-active-lighten p-4"
                                                data-user-id="12">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Checkbox-->
                                                    <label class="form-check form-check-custom form-check-solid me-5">
                                                        <input class="form-check-input" type="checkbox" name="users"
                                                            data-kt-check="true"
                                                            data-kt-check-target="[data-user-id='12']" value="12" />
                                                    </label>
                                                    <!--end::Checkbox-->
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <span class="symbol-label bg-light-info text-info fw-bold">A</span>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Robert
                                                            Doe</a>
                                                        <div class="fw-bold text-muted">robert@benko.com</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true">
                                                        <option value="1">Guest</option>
                                                        <option value="2">Owner</option>
                                                        <option value="3" selected="selected">Can Edit</option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::Separator-->
                                            <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                            <!--end::Separator-->
                                            <!--begin::User-->
                                            <div class="rounded d-flex flex-stack bg-active-lighten p-4"
                                                data-user-id="13">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Checkbox-->
                                                    <label class="form-check form-check-custom form-check-solid me-5">
                                                        <input class="form-check-input" type="checkbox" name="users"
                                                            data-kt-check="true"
                                                            data-kt-check-target="[data-user-id='13']" value="13" />
                                                    </label>
                                                    <!--end::Checkbox-->
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <img alt="Pic"
                                                            src="{{ '/assets/media/avatars/150-17.jpg' }}" />
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">John
                                                            Miller</a>
                                                        <div class="fw-bold text-muted">miller@mapple.com</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true">
                                                        <option value="1">Guest</option>
                                                        <option value="2">Owner</option>
                                                        <option value="3" selected="selected">Can Edit</option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::Separator-->
                                            <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                            <!--end::Separator-->
                                            <!--begin::User-->
                                            <div class="rounded d-flex flex-stack bg-active-lighten p-4"
                                                data-user-id="14">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Checkbox-->
                                                    <label class="form-check form-check-custom form-check-solid me-5">
                                                        <input class="form-check-input" type="checkbox" name="users"
                                                            data-kt-check="true"
                                                            data-kt-check-target="[data-user-id='14']" value="14" />
                                                    </label>
                                                    <!--end::Checkbox-->
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <span
                                                            class="symbol-label bg-light-success text-success fw-bold">L</span>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Lucy
                                                            Kunic</a>
                                                        <div class="fw-bold text-muted">lucy.m@fentech.com</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true">
                                                        <option value="1">Guest</option>
                                                        <option value="2" selected="selected">Owner</option>
                                                        <option value="3">Can Edit</option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::Separator-->
                                            <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                            <!--end::Separator-->
                                            <!--begin::User-->
                                            <div class="rounded d-flex flex-stack bg-active-lighten p-4"
                                                data-user-id="15">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Checkbox-->
                                                    <label class="form-check form-check-custom form-check-solid me-5">
                                                        <input class="form-check-input" type="checkbox" name="users"
                                                            data-kt-check="true"
                                                            data-kt-check-target="[data-user-id='15']" value="15" />
                                                    </label>
                                                    <!--end::Checkbox-->
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <img alt="Pic"
                                                            src="{{ '/assets/media/avatars/150-10.jpg' }}" />
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Ethan
                                                            Wilder</a>
                                                        <div class="fw-bold text-muted">ethan@loop.com.au</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true">
                                                        <option value="1" selected="selected">Guest</option>
                                                        <option value="2">Owner</option>
                                                        <option value="3">Can Edit</option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::Separator-->
                                            <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                            <!--end::Separator-->
                                            <!--begin::User-->
                                            <div class="rounded d-flex flex-stack bg-active-lighten p-4"
                                                data-user-id="16">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Checkbox-->
                                                    <label class="form-check form-check-custom form-check-solid me-5">
                                                        <input class="form-check-input" type="checkbox" name="users"
                                                            data-kt-check="true"
                                                            data-kt-check-target="[data-user-id='16']" value="16" />
                                                    </label>
                                                    <!--end::Checkbox-->
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <img alt="Pic"
                                                            src="{{ '/assets/media/avatars/150-17.jpg' }}" />
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">John
                                                            Miller</a>
                                                        <div class="fw-bold text-muted">miller@mapple.com</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true">
                                                        <option value="1">Guest</option>
                                                        <option value="2">Owner</option>
                                                        <option value="3" selected="selected">Can Edit</option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Users-->
                                        <!--begin::Actions-->
                                        <div class="d-flex flex-center mt-15">
                                            <button type="reset" id="kt_modal_users_search_reset"
                                                data-bs-dismiss="modal" class="btn btn-active-light me-3">Cancel</button>
                                            <button type="submit" id="kt_modal_users_search_submit"
                                                class="btn btn-primary">Add Selected Users</button>
                                        </div>
                                        <!--end::Actions-->
                                    </div>
                                    <!--end::Results-->
                                    <!--begin::Empty-->
                                    <div data-kt-search-element="empty" class="text-center d-none">
                                        <!--begin::Message-->
                                        <div class="fw-bold py-10">
                                            <div class="text-gray-600 fs-3 mb-2">No users found</div>
                                            <div class="text-muted fs-6">Try to search by username, full name or email...
                                            </div>
                                        </div>
                                        <!--end::Message-->
                                        <!--begin::Illustration-->
                                        <div class="text-center px-5">
                                            <img src="{{ '/assets/media/illustrations/sigma-1/1.png' }}" alt=""
                                                class="w-100 h-200px h-sm-325px" />
                                        </div>
                                        <!--end::Illustration-->
                                    </div>
                                    <!--end::Empty-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Search-->
                        </div>
                        <!--end::Modal body-->
                    </div>
                    <!--end::Modal content-->
                </div>
                <!--end::Modal dialog-->
            </div>
            <!--end::Modal - Users Search-->
            <!--begin::Modal - New Target-->
            <div class="modal fade" id="kt_modal_new_target" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-650px">
                    <!--begin::Modal content-->
                    <div class="modal-content rounded">
                        <!--begin::Modal header-->
                        <div class="modal-header pb-0 border-0 justify-content-end">
                            <!--begin::Close-->
                            <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                <span class="svg-icon svg-icon-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.5" x="6" y="17.3137" width="16" height="2"
                                            rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                                        <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                            transform="rotate(45 7.41422 6)" fill="black" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Close-->
                        </div>
                        <!--begin::Modal header-->
                        <!--begin::Modal body-->
                        <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                            <!--begin:Form-->
                            <form id="kt_modal_new_target_form" class="form" action="#">
                                <!--begin::Heading-->
                                <div class="mb-13 text-center">
                                    <!--begin::Title-->
                                    <h1 class="mb-3">Set First Target</h1>
                                    <!--end::Title-->
                                    <!--begin::Description-->
                                    <div class="text-muted fw-bold fs-5">If you need more info, please check
                                        <a href="#" class="fw-bolder link-primary">Project Guidelines</a>.
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Heading-->
                                <!--begin::Input group-->
                                <div class="d-flex flex-column mb-8 fv-row">
                                    <!--begin::Label-->
                                    <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                        <span class="required">Target Title</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Specify a target name for future usage and reference"></i>
                                    </label>
                                    <!--end::Label-->
                                    <input type="text" class="form-control form-control-solid"
                                        placeholder="Enter Target Title" name="target_title" />
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="row g-9 mb-8">
                                    <!--begin::Col-->
                                    <div class="col-md-6 fv-row">
                                        <label class="required fs-6 fw-bold mb-2">Assign</label>
                                        <select class="form-select form-select-solid" data-control="select2"
                                            data-hide-search="true" data-placeholder="Select a Team Member"
                                            name="target_assign">
                                            <option value="">Select user...</option>
                                            <option value="1">Karina Clark</option>
                                            <option value="2">Robert Doe</option>
                                            <option value="3">Niel Owen</option>
                                            <option value="4">Olivia Wild</option>
                                            <option value="5">Sean Bean</option>
                                        </select>
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-md-6 fv-row">
                                        <label class="required fs-6 fw-bold mb-2">Due Date</label>
                                        <!--begin::Input-->
                                        <div class="position-relative d-flex align-items-center">
                                            <!--begin::Icon-->
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                            <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3"
                                                        d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z"
                                                        fill="black" />
                                                    <path
                                                        d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z"
                                                        fill="black" />
                                                    <path
                                                        d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z"
                                                        fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                            <!--end::Icon-->
                                            <!--begin::Datepicker-->
                                            <input class="form-control form-control-solid ps-12"
                                                placeholder="Select a date" name="due_date" />
                                            <!--end::Datepicker-->
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="d-flex flex-column mb-8">
                                    <label class="fs-6 fw-bold mb-2">Target Details</label>
                                    <textarea class="form-control form-control-solid" rows="3" name="target_details"
                                        placeholder="Type Target Details"></textarea>
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="d-flex flex-column mb-8 fv-row">
                                    <!--begin::Label-->
                                    <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                        <span class="required">Tags</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Specify a target priorty"></i>
                                    </label>
                                    <!--end::Label-->
                                    <input class="form-control form-control-solid" value="Important, Urgent"
                                        name="tags" />
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="d-flex flex-stack mb-8">
                                    <!--begin::Label-->
                                    <div class="me-5">
                                        <label class="fs-6 fw-bold">Adding Users by Team Members</label>
                                        <div class="fs-7 fw-bold text-muted">If you need more info, please check budget
                                            planning</div>
                                    </div>
                                    <!--end::Label-->
                                    <!--begin::Switch-->
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1"
                                            checked="checked" />
                                        <span class="form-check-label fw-bold text-muted">Allowed</span>
                                    </label>
                                    <!--end::Switch-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-15 fv-row">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Label-->
                                        <div class="fw-bold me-5">
                                            <label class="fs-6">Notifications</label>
                                            <div class="fs-7 text-muted">Allow Notifications by Phone or Email</div>
                                        </div>
                                        <!--end::Label-->
                                        <!--begin::Checkboxes-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-10">
                                                <input class="form-check-input h-20px w-20px" type="checkbox"
                                                    name="communication[]" value="email" checked="checked" />
                                                <span class="form-check-label fw-bold">Email</span>
                                            </label>
                                            <!--end::Checkbox-->
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid">
                                                <input class="form-check-input h-20px w-20px" type="checkbox"
                                                    name="communication[]" value="phone" />
                                                <span class="form-check-label fw-bold">Phone</span>
                                            </label>
                                            <!--end::Checkbox-->
                                        </div>
                                        <!--end::Checkboxes-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Actions-->
                                <div class="text-center">
                                    <button type="reset" id="kt_modal_new_target_cancel"
                                        class="btn btn-light me-3">Cancel</button>
                                    <button type="submit" id="kt_modal_new_target_submit" class="btn btn-primary">
                                        <span class="indicator-label">Submit</span>
                                        <span class="indicator-progress">Please wait...
                                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>
                                </div>
                                <!--end::Actions-->
                            </form>
                            <!--end:Form-->
                        </div>
                        <!--end::Modal body-->
                    </div>
                    <!--end::Modal content-->
                </div>
                <!--end::Modal dialog-->
            </div>
            <!--end::Modal - New Target-->

            <div class="card mb-5 mb-xl-10">
                <!--begin::Card header-->
                <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
                    <!--begin::Card title-->
                    <div class="card-title m-0">
                        <h3 class="fw-bolder m-0">Profile Details</h3>
                    </div>
                    <!--end::Card title-->
                </div>
                <!--begin::Card header-->
                <!--begin::Content-->
                <div id="kt_account_profile_details" class="collapse show">
                    <!--begin::Form-->
                    <form id="kt_account_profile_details_form" class="form">
                        <!--begin::Card body-->
                        <div class="card-body border-top p-9">
                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label fw-bold fs-6">Avatar</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8">
                                    <!--begin::Image input-->
                                    <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url({{'/assets/media/avatars/blank.png'}})">
                                        <!--begin::Preview existing avatar-->
                                        <div class="image-input-wrapper w-125px h-125px" style="background-image: url({{'/assets/media/avatars/150-26.jpg'}})"></div>
                                        <!--end::Preview existing avatar-->
                                        <!--begin::Label-->
                                        <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                            <i class="bi bi-pencil-fill fs-7"></i>
                                            <!--begin::Inputs-->
                                            <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                            <input type="hidden" name="avatar_remove" />
                                            <!--end::Inputs-->
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Cancel-->
                                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                            <i class="bi bi-x fs-2"></i>
                                        </span>
                                        <!--end::Cancel-->
                                        <!--begin::Remove-->
                                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                            <i class="bi bi-x fs-2"></i>
                                        </span>
                                        <!--end::Remove-->
                                    </div>
                                    <!--end::Image input-->
                                    <!--begin::Hint-->
                                    <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                                    <!--end::Hint-->
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label required fw-bold fs-6">User</label>
                                <!--end::Label-->
                                    <div class="col-lg-8 fv-row">
                                        <select name="user" aria-label="Select an User" data-control="select2" data-placeholder="Select an User..." class="form-select form-select-solid form-select-lg fw-bold">
                                            <option value="">Select an User</option>
                                            @foreach ($data['employees'] as $employee)
                                                <option value="{{$employee->biodata->nama_lengkap}}">{{$employee->biodata->nama_lengkap}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label required fw-bold fs-6">Username</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <input type="text" name="username" class="form-control form-control-lg form-control-solid" placeholder="Company name" value="Keenthemes" />
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label fw-bold fs-6">
                                    <span class="required">Contact Phone</span>
                                    <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Phone number must be active"></i>
                                </label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <input type="tel" name="phone" class="form-control form-control-lg form-control-solid" placeholder="Phone number" value="044 3276 454 935" />
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label fw-bold fs-6">Company Site</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <input type="text" name="website" class="form-control form-control-lg form-control-solid" placeholder="Company website" value="keenthemes.com" />
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label fw-bold fs-6">
                                    <span class="required">Country</span>
                                    <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Country of origination"></i>
                                </label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <select name="country" aria-label="Select a Country" data-control="select2" data-placeholder="Select a country..." class="form-select form-select-solid form-select-lg fw-bold">
                                        <option value="">Select a Country...</option>
                                        <option data-kt-flag="flags/afghanistan.svg" value="AF">Afghanistan</option>
                                        <option data-kt-flag="flags/aland-islands.svg" value="AX">Aland Islands</option>
                                        <option data-kt-flag="flags/albania.svg" value="AL">Albania</option>
                                        <option data-kt-flag="flags/algeria.svg" value="DZ">Algeria</option>
                                        <option data-kt-flag="flags/american-samoa.svg" value="AS">American Samoa</option>
                                        <option data-kt-flag="flags/andorra.svg" value="AD">Andorra</option>
                                        <option data-kt-flag="flags/angola.svg" value="AO">Angola</option>
                                        <option data-kt-flag="flags/anguilla.svg" value="AI">Anguilla</option>
                                        <option data-kt-flag="flags/antigua-and-barbuda.svg" value="AG">Antigua and Barbuda</option>
                                        <option data-kt-flag="flags/argentina.svg" value="AR">Argentina</option>
                                        <option data-kt-flag="flags/armenia.svg" value="AM">Armenia</option>
                                        <option data-kt-flag="flags/aruba.svg" value="AW">Aruba</option>
                                        <option data-kt-flag="flags/australia.svg" value="AU">Australia</option>
                                        <option data-kt-flag="flags/austria.svg" value="AT">Austria</option>
                                        <option data-kt-flag="flags/azerbaijan.svg" value="AZ">Azerbaijan</option>
                                        <option data-kt-flag="flags/bahamas.svg" value="BS">Bahamas</option>
                                        <option data-kt-flag="flags/bahrain.svg" value="BH">Bahrain</option>
                                        <option data-kt-flag="flags/bangladesh.svg" value="BD">Bangladesh</option>
                                        <option data-kt-flag="flags/barbados.svg" value="BB">Barbados</option>
                                        <option data-kt-flag="flags/belarus.svg" value="BY">Belarus</option>
                                        <option data-kt-flag="flags/belgium.svg" value="BE">Belgium</option>
                                        <option data-kt-flag="flags/belize.svg" value="BZ">Belize</option>
                                        <option data-kt-flag="flags/benin.svg" value="BJ">Benin</option>
                                        <option data-kt-flag="flags/bermuda.svg" value="BM">Bermuda</option>
                                        <option data-kt-flag="flags/bhutan.svg" value="BT">Bhutan</option>
                                        <option data-kt-flag="flags/bolivia.svg" value="BO">Bolivia, Plurinational State of</option>
                                        <option data-kt-flag="flags/bonaire.svg" value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                        <option data-kt-flag="flags/bosnia-and-herzegovina.svg" value="BA">Bosnia and Herzegovina</option>
                                        <option data-kt-flag="flags/botswana.svg" value="BW">Botswana</option>
                                        <option data-kt-flag="flags/brazil.svg" value="BR">Brazil</option>
                                        <option data-kt-flag="flags/british-indian-ocean-territory.svg" value="IO">British Indian Ocean Territory</option>
                                        <option data-kt-flag="flags/brunei.svg" value="BN">Brunei Darussalam</option>
                                        <option data-kt-flag="flags/bulgaria.svg" value="BG">Bulgaria</option>
                                        <option data-kt-flag="flags/burkina-faso.svg" value="BF">Burkina Faso</option>
                                        <option data-kt-flag="flags/burundi.svg" value="BI">Burundi</option>
                                        <option data-kt-flag="flags/cambodia.svg" value="KH">Cambodia</option>
                                        <option data-kt-flag="flags/cameroon.svg" value="CM">Cameroon</option>
                                        <option data-kt-flag="flags/canada.svg" value="CA">Canada</option>
                                        <option data-kt-flag="flags/cape-verde.svg" value="CV">Cape Verde</option>
                                        <option data-kt-flag="flags/cayman-islands.svg" value="KY">Cayman Islands</option>
                                        <option data-kt-flag="flags/central-african-republic.svg" value="CF">Central African Republic</option>
                                        <option data-kt-flag="flags/chad.svg" value="TD">Chad</option>
                                        <option data-kt-flag="flags/chile.svg" value="CL">Chile</option>
                                        <option data-kt-flag="flags/china.svg" value="CN">China</option>
                                        <option data-kt-flag="flags/christmas-island.svg" value="CX">Christmas Island</option>
                                        <option data-kt-flag="flags/cocos-island.svg" value="CC">Cocos (Keeling) Islands</option>
                                        <option data-kt-flag="flags/colombia.svg" value="CO">Colombia</option>
                                        <option data-kt-flag="flags/comoros.svg" value="KM">Comoros</option>
                                        <option data-kt-flag="flags/cook-islands.svg" value="CK">Cook Islands</option>
                                        <option data-kt-flag="flags/costa-rica.svg" value="CR">Costa Rica</option>
                                        <option data-kt-flag="flags/ivory-coast.svg" value="CI">Côte d'Ivoire</option>
                                        <option data-kt-flag="flags/croatia.svg" value="HR">Croatia</option>
                                        <option data-kt-flag="flags/cuba.svg" value="CU">Cuba</option>
                                        <option data-kt-flag="flags/curacao.svg" value="CW">Curaçao</option>
                                        <option data-kt-flag="flags/czech-republic.svg" value="CZ">Czech Republic</option>
                                        <option data-kt-flag="flags/denmark.svg" value="DK">Denmark</option>
                                        <option data-kt-flag="flags/djibouti.svg" value="DJ">Djibouti</option>
                                        <option data-kt-flag="flags/dominica.svg" value="DM">Dominica</option>
                                        <option data-kt-flag="flags/dominican-republic.svg" value="DO">Dominican Republic</option>
                                        <option data-kt-flag="flags/ecuador.svg" value="EC">Ecuador</option>
                                        <option data-kt-flag="flags/egypt.svg" value="EG">Egypt</option>
                                        <option data-kt-flag="flags/el-salvador.svg" value="SV">El Salvador</option>
                                        <option data-kt-flag="flags/equatorial-guinea.svg" value="GQ">Equatorial Guinea</option>
                                        <option data-kt-flag="flags/eritrea.svg" value="ER">Eritrea</option>
                                        <option data-kt-flag="flags/estonia.svg" value="EE">Estonia</option>
                                        <option data-kt-flag="flags/ethiopia.svg" value="ET">Ethiopia</option>
                                        <option data-kt-flag="flags/falkland-islands.svg" value="FK">Falkland Islands (Malvinas)</option>
                                        <option data-kt-flag="flags/fiji.svg" value="FJ">Fiji</option>
                                        <option data-kt-flag="flags/finland.svg" value="FI">Finland</option>
                                        <option data-kt-flag="flags/france.svg" value="FR">France</option>
                                        <option data-kt-flag="flags/french-polynesia.svg" value="PF">French Polynesia</option>
                                        <option data-kt-flag="flags/gabon.svg" value="GA">Gabon</option>
                                        <option data-kt-flag="flags/gambia.svg" value="GM">Gambia</option>
                                        <option data-kt-flag="flags/georgia.svg" value="GE">Georgia</option>
                                        <option data-kt-flag="flags/germany.svg" value="DE">Germany</option>
                                        <option data-kt-flag="flags/ghana.svg" value="GH">Ghana</option>
                                        <option data-kt-flag="flags/gibraltar.svg" value="GI">Gibraltar</option>
                                        <option data-kt-flag="flags/greece.svg" value="GR">Greece</option>
                                        <option data-kt-flag="flags/greenland.svg" value="GL">Greenland</option>
                                        <option data-kt-flag="flags/grenada.svg" value="GD">Grenada</option>
                                        <option data-kt-flag="flags/guam.svg" value="GU">Guam</option>
                                        <option data-kt-flag="flags/guatemala.svg" value="GT">Guatemala</option>
                                        <option data-kt-flag="flags/guernsey.svg" value="GG">Guernsey</option>
                                        <option data-kt-flag="flags/guinea.svg" value="GN">Guinea</option>
                                        <option data-kt-flag="flags/guinea-bissau.svg" value="GW">Guinea-Bissau</option>
                                        <option data-kt-flag="flags/haiti.svg" value="HT">Haiti</option>
                                        <option data-kt-flag="flags/vatican-city.svg" value="VA">Holy See (Vatican City State)</option>
                                        <option data-kt-flag="flags/honduras.svg" value="HN">Honduras</option>
                                        <option data-kt-flag="flags/hong-kong.svg" value="HK">Hong Kong</option>
                                        <option data-kt-flag="flags/hungary.svg" value="HU">Hungary</option>
                                        <option data-kt-flag="flags/iceland.svg" value="IS">Iceland</option>
                                        <option data-kt-flag="flags/india.svg" value="IN">India</option>
                                        <option data-kt-flag="flags/indonesia.svg" value="ID">Indonesia</option>
                                        <option data-kt-flag="flags/iran.svg" value="IR">Iran, Islamic Republic of</option>
                                        <option data-kt-flag="flags/iraq.svg" value="IQ">Iraq</option>
                                        <option data-kt-flag="flags/ireland.svg" value="IE">Ireland</option>
                                        <option data-kt-flag="flags/isle-of-man.svg" value="IM">Isle of Man</option>
                                        <option data-kt-flag="flags/israel.svg" value="IL">Israel</option>
                                        <option data-kt-flag="flags/italy.svg" value="IT">Italy</option>
                                        <option data-kt-flag="flags/jamaica.svg" value="JM">Jamaica</option>
                                        <option data-kt-flag="flags/japan.svg" value="JP">Japan</option>
                                        <option data-kt-flag="flags/jersey.svg" value="JE">Jersey</option>
                                        <option data-kt-flag="flags/jordan.svg" value="JO">Jordan</option>
                                        <option data-kt-flag="flags/kazakhstan.svg" value="KZ">Kazakhstan</option>
                                        <option data-kt-flag="flags/kenya.svg" value="KE">Kenya</option>
                                        <option data-kt-flag="flags/kiribati.svg" value="KI">Kiribati</option>
                                        <option data-kt-flag="flags/north-korea.svg" value="KP">Korea, Democratic People's Republic of</option>
                                        <option data-kt-flag="flags/kuwait.svg" value="KW">Kuwait</option>
                                        <option data-kt-flag="flags/kyrgyzstan.svg" value="KG">Kyrgyzstan</option>
                                        <option data-kt-flag="flags/laos.svg" value="LA">Lao People's Democratic Republic</option>
                                        <option data-kt-flag="flags/latvia.svg" value="LV">Latvia</option>
                                        <option data-kt-flag="flags/lebanon.svg" value="LB">Lebanon</option>
                                        <option data-kt-flag="flags/lesotho.svg" value="LS">Lesotho</option>
                                        <option data-kt-flag="flags/liberia.svg" value="LR">Liberia</option>
                                        <option data-kt-flag="flags/libya.svg" value="LY">Libya</option>
                                        <option data-kt-flag="flags/liechtenstein.svg" value="LI">Liechtenstein</option>
                                        <option data-kt-flag="flags/lithuania.svg" value="LT">Lithuania</option>
                                        <option data-kt-flag="flags/luxembourg.svg" value="LU">Luxembourg</option>
                                        <option data-kt-flag="flags/macao.svg" value="MO">Macao</option>
                                        <option data-kt-flag="flags/madagascar.svg" value="MG">Madagascar</option>
                                        <option data-kt-flag="flags/malawi.svg" value="MW">Malawi</option>
                                        <option data-kt-flag="flags/malaysia.svg" value="MY">Malaysia</option>
                                        <option data-kt-flag="flags/maldives.svg" value="MV">Maldives</option>
                                        <option data-kt-flag="flags/mali.svg" value="ML">Mali</option>
                                        <option data-kt-flag="flags/malta.svg" value="MT">Malta</option>
                                        <option data-kt-flag="flags/marshall-island.svg" value="MH">Marshall Islands</option>
                                        <option data-kt-flag="flags/martinique.svg" value="MQ">Martinique</option>
                                        <option data-kt-flag="flags/mauritania.svg" value="MR">Mauritania</option>
                                        <option data-kt-flag="flags/mauritius.svg" value="MU">Mauritius</option>
                                        <option data-kt-flag="flags/mexico.svg" value="MX">Mexico</option>
                                        <option data-kt-flag="flags/micronesia.svg" value="FM">Micronesia, Federated States of</option>
                                        <option data-kt-flag="flags/moldova.svg" value="MD">Moldova, Republic of</option>
                                        <option data-kt-flag="flags/monaco.svg" value="MC">Monaco</option>
                                        <option data-kt-flag="flags/mongolia.svg" value="MN">Mongolia</option>
                                        <option data-kt-flag="flags/montenegro.svg" value="ME">Montenegro</option>
                                        <option data-kt-flag="flags/montserrat.svg" value="MS">Montserrat</option>
                                        <option data-kt-flag="flags/morocco.svg" value="MA">Morocco</option>
                                        <option data-kt-flag="flags/mozambique.svg" value="MZ">Mozambique</option>
                                        <option data-kt-flag="flags/myanmar.svg" value="MM">Myanmar</option>
                                        <option data-kt-flag="flags/namibia.svg" value="NA">Namibia</option>
                                        <option data-kt-flag="flags/nauru.svg" value="NR">Nauru</option>
                                        <option data-kt-flag="flags/nepal.svg" value="NP">Nepal</option>
                                        <option data-kt-flag="flags/netherlands.svg" value="NL">Netherlands</option>
                                        <option data-kt-flag="flags/new-zealand.svg" value="NZ">New Zealand</option>
                                        <option data-kt-flag="flags/nicaragua.svg" value="NI">Nicaragua</option>
                                        <option data-kt-flag="flags/niger.svg" value="NE">Niger</option>
                                        <option data-kt-flag="flags/nigeria.svg" value="NG">Nigeria</option>
                                        <option data-kt-flag="flags/niue.svg" value="NU">Niue</option>
                                        <option data-kt-flag="flags/norfolk-island.svg" value="NF">Norfolk Island</option>
                                        <option data-kt-flag="flags/northern-mariana-islands.svg" value="MP">Northern Mariana Islands</option>
                                        <option data-kt-flag="flags/norway.svg" value="NO">Norway</option>
                                        <option data-kt-flag="flags/oman.svg" value="OM">Oman</option>
                                        <option data-kt-flag="flags/pakistan.svg" value="PK">Pakistan</option>
                                        <option data-kt-flag="flags/palau.svg" value="PW">Palau</option>
                                        <option data-kt-flag="flags/palestine.svg" value="PS">Palestinian Territory, Occupied</option>
                                        <option data-kt-flag="flags/panama.svg" value="PA">Panama</option>
                                        <option data-kt-flag="flags/papua-new-guinea.svg" value="PG">Papua New Guinea</option>
                                        <option data-kt-flag="flags/paraguay.svg" value="PY">Paraguay</option>
                                        <option data-kt-flag="flags/peru.svg" value="PE">Peru</option>
                                        <option data-kt-flag="flags/philippines.svg" value="PH">Philippines</option>
                                        <option data-kt-flag="flags/poland.svg" value="PL">Poland</option>
                                        <option data-kt-flag="flags/portugal.svg" value="PT">Portugal</option>
                                        <option data-kt-flag="flags/puerto-rico.svg" value="PR">Puerto Rico</option>
                                        <option data-kt-flag="flags/qatar.svg" value="QA">Qatar</option>
                                        <option data-kt-flag="flags/romania.svg" value="RO">Romania</option>
                                        <option data-kt-flag="flags/russia.svg" value="RU">Russian Federation</option>
                                        <option data-kt-flag="flags/rwanda.svg" value="RW">Rwanda</option>
                                        <option data-kt-flag="flags/st-barts.svg" value="BL">Saint Barthélemy</option>
                                        <option data-kt-flag="flags/saint-kitts-and-nevis.svg" value="KN">Saint Kitts and Nevis</option>
                                        <option data-kt-flag="flags/st-lucia.svg" value="LC">Saint Lucia</option>
                                        <option data-kt-flag="flags/sint-maarten.svg" value="MF">Saint Martin (French part)</option>
                                        <option data-kt-flag="flags/st-vincent-and-the-grenadines.svg" value="VC">Saint Vincent and the Grenadines</option>
                                        <option data-kt-flag="flags/samoa.svg" value="WS">Samoa</option>
                                        <option data-kt-flag="flags/san-marino.svg" value="SM">San Marino</option>
                                        <option data-kt-flag="flags/sao-tome-and-prince.svg" value="ST">Sao Tome and Principe</option>
                                        <option data-kt-flag="flags/saudi-arabia.svg" value="SA">Saudi Arabia</option>
                                        <option data-kt-flag="flags/senegal.svg" value="SN">Senegal</option>
                                        <option data-kt-flag="flags/serbia.svg" value="RS">Serbia</option>
                                        <option data-kt-flag="flags/seychelles.svg" value="SC">Seychelles</option>
                                        <option data-kt-flag="flags/sierra-leone.svg" value="SL">Sierra Leone</option>
                                        <option data-kt-flag="flags/singapore.svg" value="SG">Singapore</option>
                                        <option data-kt-flag="flags/sint-maarten.svg" value="SX">Sint Maarten (Dutch part)</option>
                                        <option data-kt-flag="flags/slovakia.svg" value="SK">Slovakia</option>
                                        <option data-kt-flag="flags/slovenia.svg" value="SI">Slovenia</option>
                                        <option data-kt-flag="flags/solomon-islands.svg" value="SB">Solomon Islands</option>
                                        <option data-kt-flag="flags/somalia.svg" value="SO">Somalia</option>
                                        <option data-kt-flag="flags/south-africa.svg" value="ZA">South Africa</option>
                                        <option data-kt-flag="flags/south-korea.svg" value="KR">South Korea</option>
                                        <option data-kt-flag="flags/south-sudan.svg" value="SS">South Sudan</option>
                                        <option data-kt-flag="flags/spain.svg" value="ES">Spain</option>
                                        <option data-kt-flag="flags/sri-lanka.svg" value="LK">Sri Lanka</option>
                                        <option data-kt-flag="flags/sudan.svg" value="SD">Sudan</option>
                                        <option data-kt-flag="flags/suriname.svg" value="SR">Suriname</option>
                                        <option data-kt-flag="flags/swaziland.svg" value="SZ">Swaziland</option>
                                        <option data-kt-flag="flags/sweden.svg" value="SE">Sweden</option>
                                        <option data-kt-flag="flags/switzerland.svg" value="CH">Switzerland</option>
                                        <option data-kt-flag="flags/syria.svg" value="SY">Syrian Arab Republic</option>
                                        <option data-kt-flag="flags/taiwan.svg" value="TW">Taiwan, Province of China</option>
                                        <option data-kt-flag="flags/tajikistan.svg" value="TJ">Tajikistan</option>
                                        <option data-kt-flag="flags/tanzania.svg" value="TZ">Tanzania, United Republic of</option>
                                        <option data-kt-flag="flags/thailand.svg" value="TH">Thailand</option>
                                        <option data-kt-flag="flags/togo.svg" value="TG">Togo</option>
                                        <option data-kt-flag="flags/tokelau.svg" value="TK">Tokelau</option>
                                        <option data-kt-flag="flags/tonga.svg" value="TO">Tonga</option>
                                        <option data-kt-flag="flags/trinidad-and-tobago.svg" value="TT">Trinidad and Tobago</option>
                                        <option data-kt-flag="flags/tunisia.svg" value="TN">Tunisia</option>
                                        <option data-kt-flag="flags/turkey.svg" value="TR">Turkey</option>
                                        <option data-kt-flag="flags/turkmenistan.svg" value="TM">Turkmenistan</option>
                                        <option data-kt-flag="flags/turks-and-caicos.svg" value="TC">Turks and Caicos Islands</option>
                                        <option data-kt-flag="flags/tuvalu.svg" value="TV">Tuvalu</option>
                                        <option data-kt-flag="flags/uganda.svg" value="UG">Uganda</option>
                                        <option data-kt-flag="flags/ukraine.svg" value="UA">Ukraine</option>
                                        <option data-kt-flag="flags/united-arab-emirates.svg" value="AE">United Arab Emirates</option>
                                        <option data-kt-flag="flags/united-kingdom.svg" value="GB">United Kingdom</option>
                                        <option data-kt-flag="flags/united-states.svg" value="US">United States</option>
                                        <option data-kt-flag="flags/uruguay.svg" value="UY">Uruguay</option>
                                        <option data-kt-flag="flags/uzbekistan.svg" value="UZ">Uzbekistan</option>
                                        <option data-kt-flag="flags/vanuatu.svg" value="VU">Vanuatu</option>
                                        <option data-kt-flag="flags/venezuela.svg" value="VE">Venezuela, Bolivarian Republic of</option>
                                        <option data-kt-flag="flags/vietnam.svg" value="VN">Vietnam</option>
                                        <option data-kt-flag="flags/virgin-islands.svg" value="VI">Virgin Islands</option>
                                        <option data-kt-flag="flags/yemen.svg" value="YE">Yemen</option>
                                        <option data-kt-flag="flags/zambia.svg" value="ZM">Zambia</option>
                                        <option data-kt-flag="flags/zimbabwe.svg" value="ZW">Zimbabwe</option>
                                    </select>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label required fw-bold fs-6">Language</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <!--begin::Input-->
                                    <select name="language" aria-label="Select a Language" data-control="select2" data-placeholder="Select a language..." class="form-select form-select-solid form-select-lg">
                                        <option value="">Select a Language...</option>
                                        <option data-kt-flag="flags/indonesia.svg" value="id">Bahasa Indonesia - Indonesian</option>
                                        <option data-kt-flag="flags/malaysia.svg" value="msa">Bahasa Melayu - Malay</option>
                                        <option data-kt-flag="flags/canada.svg" value="ca">Català - Catalan</option>
                                        <option data-kt-flag="flags/czech-republic.svg" value="cs">Čeština - Czech</option>
                                        <option data-kt-flag="flags/netherlands.svg" value="da">Dansk - Danish</option>
                                        <option data-kt-flag="flags/germany.svg" value="de">Deutsch - German</option>
                                        <option data-kt-flag="flags/united-kingdom.svg" value="en">English</option>
                                        <option data-kt-flag="flags/united-kingdom.svg" value="en-gb">English UK - British English</option>
                                        <option data-kt-flag="flags/spain.svg" value="es">Español - Spanish</option>
                                        <option data-kt-flag="flags/philippines.svg" value="fil">Filipino</option>
                                        <option data-kt-flag="flags/france.svg" value="fr">Français - French</option>
                                        <option data-kt-flag="flags/gabon.svg" value="ga">Gaeilge - Irish (beta)</option>
                                        <option data-kt-flag="flags/greenland.svg" value="gl">Galego - Galician (beta)</option>
                                        <option data-kt-flag="flags/croatia.svg" value="hr">Hrvatski - Croatian</option>
                                        <option data-kt-flag="flags/italy.svg" value="it">Italiano - Italian</option>
                                        <option data-kt-flag="flags/hungary.svg" value="hu">Magyar - Hungarian</option>
                                        <option data-kt-flag="flags/netherlands.svg" value="nl">Nederlands - Dutch</option>
                                        <option data-kt-flag="flags/norway.svg" value="no">Norsk - Norwegian</option>
                                        <option data-kt-flag="flags/poland.svg" value="pl">Polski - Polish</option>
                                        <option data-kt-flag="flags/portugal.svg" value="pt">Português - Portuguese</option>
                                        <option data-kt-flag="flags/romania.svg" value="ro">Română - Romanian</option>
                                        <option data-kt-flag="flags/slovakia.svg" value="sk">Slovenčina - Slovak</option>
                                        <option data-kt-flag="flags/finland.svg" value="fi">Suomi - Finnish</option>
                                        <option data-kt-flag="flags/el-salvador.svg" value="sv">Svenska - Swedish</option>
                                        <option data-kt-flag="flags/virgin-islands.svg" value="vi">Tiếng Việt - Vietnamese</option>
                                        <option data-kt-flag="flags/turkey.svg" value="tr">Türkçe - Turkish</option>
                                        <option data-kt-flag="flags/greece.svg" value="el">Ελληνικά - Greek</option>
                                        <option data-kt-flag="flags/bulgaria.svg" value="bg">Български език - Bulgarian</option>
                                        <option data-kt-flag="flags/russia.svg" value="ru">Русский - Russian</option>
                                        <option data-kt-flag="flags/suriname.svg" value="sr">Српски - Serbian</option>
                                        <option data-kt-flag="flags/ukraine.svg" value="uk">Українська мова - Ukrainian</option>
                                        <option data-kt-flag="flags/israel.svg" value="he">עִבְרִית - Hebrew</option>
                                        <option data-kt-flag="flags/pakistan.svg" value="ur">اردو - Urdu (beta)</option>
                                        <option data-kt-flag="flags/argentina.svg" value="ar">العربية - Arabic</option>
                                        <option data-kt-flag="flags/argentina.svg" value="fa">فارسی - Persian</option>
                                        <option data-kt-flag="flags/mauritania.svg" value="mr">मराठी - Marathi</option>
                                        <option data-kt-flag="flags/india.svg" value="hi">हिन्दी - Hindi</option>
                                        <option data-kt-flag="flags/bangladesh.svg" value="bn">বাংলা - Bangla</option>
                                        <option data-kt-flag="flags/guam.svg" value="gu">ગુજરાતી - Gujarati</option>
                                        <option data-kt-flag="flags/india.svg" value="ta">தமிழ் - Tamil</option>
                                        <option data-kt-flag="flags/saint-kitts-and-nevis.svg" value="kn">ಕನ್ನಡ - Kannada</option>
                                        <option data-kt-flag="flags/thailand.svg" value="th">ภาษาไทย - Thai</option>
                                        <option data-kt-flag="flags/south-korea.svg" value="ko">한국어 - Korean</option>
                                        <option data-kt-flag="flags/japan.svg" value="ja">日本語 - Japanese</option>
                                        <option data-kt-flag="flags/china.svg" value="zh-cn">简体中文 - Simplified Chinese</option>
                                        <option data-kt-flag="flags/taiwan.svg" value="zh-tw">繁體中文 - Traditional Chinese</option>
                                    </select>
                                    <!--end::Input-->
                                    <!--begin::Hint-->
                                    <div class="form-text">Please select a preferred language, including date, time, and number formatting.</div>
                                    <!--end::Hint-->
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label required fw-bold fs-6">Time Zone</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <select name="timezone" aria-label="Select a Timezone" data-control="select2" data-placeholder="Select a timezone.." class="form-select form-select-solid form-select-lg">
                                        <option value="">Select a Timezone..</option>
                                        <option data-bs-offset="-39600" value="International Date Line West">(GMT-11:00) International Date Line West</option>
                                        <option data-bs-offset="-39600" value="Midway Island">(GMT-11:00) Midway Island</option>
                                        <option data-bs-offset="-39600" value="Samoa">(GMT-11:00) Samoa</option>
                                        <option data-bs-offset="-36000" value="Hawaii">(GMT-10:00) Hawaii</option>
                                        <option data-bs-offset="-28800" value="Alaska">(GMT-08:00) Alaska</option>
                                        <option data-bs-offset="-25200" value="Pacific Time (US &amp; Canada)">(GMT-07:00) Pacific Time (US &amp; Canada)</option>
                                        <option data-bs-offset="-25200" value="Tijuana">(GMT-07:00) Tijuana</option>
                                        <option data-bs-offset="-25200" value="Arizona">(GMT-07:00) Arizona</option>
                                        <option data-bs-offset="-21600" value="Mountain Time (US &amp; Canada)">(GMT-06:00) Mountain Time (US &amp; Canada)</option>
                                        <option data-bs-offset="-21600" value="Chihuahua">(GMT-06:00) Chihuahua</option>
                                        <option data-bs-offset="-21600" value="Mazatlan">(GMT-06:00) Mazatlan</option>
                                        <option data-bs-offset="-21600" value="Saskatchewan">(GMT-06:00) Saskatchewan</option>
                                        <option data-bs-offset="-21600" value="Central America">(GMT-06:00) Central America</option>
                                        <option data-bs-offset="-18000" value="Central Time (US &amp; Canada)">(GMT-05:00) Central Time (US &amp; Canada)</option>
                                        <option data-bs-offset="-18000" value="Guadalajara">(GMT-05:00) Guadalajara</option>
                                        <option data-bs-offset="-18000" value="Mexico City">(GMT-05:00) Mexico City</option>
                                        <option data-bs-offset="-18000" value="Monterrey">(GMT-05:00) Monterrey</option>
                                        <option data-bs-offset="-18000" value="Bogota">(GMT-05:00) Bogota</option>
                                        <option data-bs-offset="-18000" value="Lima">(GMT-05:00) Lima</option>
                                        <option data-bs-offset="-18000" value="Quito">(GMT-05:00) Quito</option>
                                        <option data-bs-offset="-14400" value="Eastern Time (US &amp; Canada)">(GMT-04:00) Eastern Time (US &amp; Canada)</option>
                                        <option data-bs-offset="-14400" value="Indiana (East)">(GMT-04:00) Indiana (East)</option>
                                        <option data-bs-offset="-14400" value="Caracas">(GMT-04:00) Caracas</option>
                                        <option data-bs-offset="-14400" value="La Paz">(GMT-04:00) La Paz</option>
                                        <option data-bs-offset="-14400" value="Georgetown">(GMT-04:00) Georgetown</option>
                                        <option data-bs-offset="-10800" value="Atlantic Time (Canada)">(GMT-03:00) Atlantic Time (Canada)</option>
                                        <option data-bs-offset="-10800" value="Santiago">(GMT-03:00) Santiago</option>
                                        <option data-bs-offset="-10800" value="Brasilia">(GMT-03:00) Brasilia</option>
                                        <option data-bs-offset="-10800" value="Buenos Aires">(GMT-03:00) Buenos Aires</option>
                                        <option data-bs-offset="-9000" value="Newfoundland">(GMT-02:30) Newfoundland</option>
                                        <option data-bs-offset="-7200" value="Greenland">(GMT-02:00) Greenland</option>
                                        <option data-bs-offset="-7200" value="Mid-Atlantic">(GMT-02:00) Mid-Atlantic</option>
                                        <option data-bs-offset="-3600" value="Cape Verde Is.">(GMT-01:00) Cape Verde Is.</option>
                                        <option data-bs-offset="0" value="Azores">(GMT) Azores</option>
                                        <option data-bs-offset="0" value="Monrovia">(GMT) Monrovia</option>
                                        <option data-bs-offset="0" value="UTC">(GMT) UTC</option>
                                        <option data-bs-offset="3600" value="Dublin">(GMT+01:00) Dublin</option>
                                        <option data-bs-offset="3600" value="Edinburgh">(GMT+01:00) Edinburgh</option>
                                        <option data-bs-offset="3600" value="Lisbon">(GMT+01:00) Lisbon</option>
                                        <option data-bs-offset="3600" value="London">(GMT+01:00) London</option>
                                        <option data-bs-offset="3600" value="Casablanca">(GMT+01:00) Casablanca</option>
                                        <option data-bs-offset="3600" value="West Central Africa">(GMT+01:00) West Central Africa</option>
                                        <option data-bs-offset="7200" value="Belgrade">(GMT+02:00) Belgrade</option>
                                        <option data-bs-offset="7200" value="Bratislava">(GMT+02:00) Bratislava</option>
                                        <option data-bs-offset="7200" value="Budapest">(GMT+02:00) Budapest</option>
                                        <option data-bs-offset="7200" value="Ljubljana">(GMT+02:00) Ljubljana</option>
                                        <option data-bs-offset="7200" value="Prague">(GMT+02:00) Prague</option>
                                        <option data-bs-offset="7200" value="Sarajevo">(GMT+02:00) Sarajevo</option>
                                        <option data-bs-offset="7200" value="Skopje">(GMT+02:00) Skopje</option>
                                        <option data-bs-offset="7200" value="Warsaw">(GMT+02:00) Warsaw</option>
                                        <option data-bs-offset="7200" value="Zagreb">(GMT+02:00) Zagreb</option>
                                        <option data-bs-offset="7200" value="Brussels">(GMT+02:00) Brussels</option>
                                        <option data-bs-offset="7200" value="Copenhagen">(GMT+02:00) Copenhagen</option>
                                        <option data-bs-offset="7200" value="Madrid">(GMT+02:00) Madrid</option>
                                        <option data-bs-offset="7200" value="Paris">(GMT+02:00) Paris</option>
                                        <option data-bs-offset="7200" value="Amsterdam">(GMT+02:00) Amsterdam</option>
                                        <option data-bs-offset="7200" value="Berlin">(GMT+02:00) Berlin</option>
                                        <option data-bs-offset="7200" value="Bern">(GMT+02:00) Bern</option>
                                        <option data-bs-offset="7200" value="Rome">(GMT+02:00) Rome</option>
                                        <option data-bs-offset="7200" value="Stockholm">(GMT+02:00) Stockholm</option>
                                        <option data-bs-offset="7200" value="Vienna">(GMT+02:00) Vienna</option>
                                        <option data-bs-offset="7200" value="Cairo">(GMT+02:00) Cairo</option>
                                        <option data-bs-offset="7200" value="Harare">(GMT+02:00) Harare</option>
                                        <option data-bs-offset="7200" value="Pretoria">(GMT+02:00) Pretoria</option>
                                        <option data-bs-offset="10800" value="Bucharest">(GMT+03:00) Bucharest</option>
                                        <option data-bs-offset="10800" value="Helsinki">(GMT+03:00) Helsinki</option>
                                        <option data-bs-offset="10800" value="Kiev">(GMT+03:00) Kiev</option>
                                        <option data-bs-offset="10800" value="Kyiv">(GMT+03:00) Kyiv</option>
                                        <option data-bs-offset="10800" value="Riga">(GMT+03:00) Riga</option>
                                        <option data-bs-offset="10800" value="Sofia">(GMT+03:00) Sofia</option>
                                        <option data-bs-offset="10800" value="Tallinn">(GMT+03:00) Tallinn</option>
                                        <option data-bs-offset="10800" value="Vilnius">(GMT+03:00) Vilnius</option>
                                        <option data-bs-offset="10800" value="Athens">(GMT+03:00) Athens</option>
                                        <option data-bs-offset="10800" value="Istanbul">(GMT+03:00) Istanbul</option>
                                        <option data-bs-offset="10800" value="Minsk">(GMT+03:00) Minsk</option>
                                        <option data-bs-offset="10800" value="Jerusalem">(GMT+03:00) Jerusalem</option>
                                        <option data-bs-offset="10800" value="Moscow">(GMT+03:00) Moscow</option>
                                        <option data-bs-offset="10800" value="St. Petersburg">(GMT+03:00) St. Petersburg</option>
                                        <option data-bs-offset="10800" value="Volgograd">(GMT+03:00) Volgograd</option>
                                        <option data-bs-offset="10800" value="Kuwait">(GMT+03:00) Kuwait</option>
                                        <option data-bs-offset="10800" value="Riyadh">(GMT+03:00) Riyadh</option>
                                        <option data-bs-offset="10800" value="Nairobi">(GMT+03:00) Nairobi</option>
                                        <option data-bs-offset="10800" value="Baghdad">(GMT+03:00) Baghdad</option>
                                        <option data-bs-offset="14400" value="Abu Dhabi">(GMT+04:00) Abu Dhabi</option>
                                        <option data-bs-offset="14400" value="Muscat">(GMT+04:00) Muscat</option>
                                        <option data-bs-offset="14400" value="Baku">(GMT+04:00) Baku</option>
                                        <option data-bs-offset="14400" value="Tbilisi">(GMT+04:00) Tbilisi</option>
                                        <option data-bs-offset="14400" value="Yerevan">(GMT+04:00) Yerevan</option>
                                        <option data-bs-offset="16200" value="Tehran">(GMT+04:30) Tehran</option>
                                        <option data-bs-offset="16200" value="Kabul">(GMT+04:30) Kabul</option>
                                        <option data-bs-offset="18000" value="Ekaterinburg">(GMT+05:00) Ekaterinburg</option>
                                        <option data-bs-offset="18000" value="Islamabad">(GMT+05:00) Islamabad</option>
                                        <option data-bs-offset="18000" value="Karachi">(GMT+05:00) Karachi</option>
                                        <option data-bs-offset="18000" value="Tashkent">(GMT+05:00) Tashkent</option>
                                        <option data-bs-offset="19800" value="Chennai">(GMT+05:30) Chennai</option>
                                        <option data-bs-offset="19800" value="Kolkata">(GMT+05:30) Kolkata</option>
                                        <option data-bs-offset="19800" value="Mumbai">(GMT+05:30) Mumbai</option>
                                        <option data-bs-offset="19800" value="New Delhi">(GMT+05:30) New Delhi</option>
                                        <option data-bs-offset="19800" value="Sri Jayawardenepura">(GMT+05:30) Sri Jayawardenepura</option>
                                        <option data-bs-offset="20700" value="Kathmandu">(GMT+05:45) Kathmandu</option>
                                        <option data-bs-offset="21600" value="Astana">(GMT+06:00) Astana</option>
                                        <option data-bs-offset="21600" value="Dhaka">(GMT+06:00) Dhaka</option>
                                        <option data-bs-offset="21600" value="Almaty">(GMT+06:00) Almaty</option>
                                        <option data-bs-offset="21600" value="Urumqi">(GMT+06:00) Urumqi</option>
                                        <option data-bs-offset="23400" value="Rangoon">(GMT+06:30) Rangoon</option>
                                        <option data-bs-offset="25200" value="Novosibirsk">(GMT+07:00) Novosibirsk</option>
                                        <option data-bs-offset="25200" value="Bangkok">(GMT+07:00) Bangkok</option>
                                        <option data-bs-offset="25200" value="Hanoi">(GMT+07:00) Hanoi</option>
                                        <option data-bs-offset="25200" value="Jakarta">(GMT+07:00) Jakarta</option>
                                        <option data-bs-offset="25200" value="Krasnoyarsk">(GMT+07:00) Krasnoyarsk</option>
                                        <option data-bs-offset="28800" value="Beijing">(GMT+08:00) Beijing</option>
                                        <option data-bs-offset="28800" value="Chongqing">(GMT+08:00) Chongqing</option>
                                        <option data-bs-offset="28800" value="Hong Kong">(GMT+08:00) Hong Kong</option>
                                        <option data-bs-offset="28800" value="Kuala Lumpur">(GMT+08:00) Kuala Lumpur</option>
                                        <option data-bs-offset="28800" value="Singapore">(GMT+08:00) Singapore</option>
                                        <option data-bs-offset="28800" value="Taipei">(GMT+08:00) Taipei</option>
                                        <option data-bs-offset="28800" value="Perth">(GMT+08:00) Perth</option>
                                        <option data-bs-offset="28800" value="Irkutsk">(GMT+08:00) Irkutsk</option>
                                        <option data-bs-offset="28800" value="Ulaan Bataar">(GMT+08:00) Ulaan Bataar</option>
                                        <option data-bs-offset="32400" value="Seoul">(GMT+09:00) Seoul</option>
                                        <option data-bs-offset="32400" value="Osaka">(GMT+09:00) Osaka</option>
                                        <option data-bs-offset="32400" value="Sapporo">(GMT+09:00) Sapporo</option>
                                        <option data-bs-offset="32400" value="Tokyo">(GMT+09:00) Tokyo</option>
                                        <option data-bs-offset="32400" value="Yakutsk">(GMT+09:00) Yakutsk</option>
                                        <option data-bs-offset="34200" value="Darwin">(GMT+09:30) Darwin</option>
                                        <option data-bs-offset="34200" value="Adelaide">(GMT+09:30) Adelaide</option>
                                        <option data-bs-offset="36000" value="Canberra">(GMT+10:00) Canberra</option>
                                        <option data-bs-offset="36000" value="Melbourne">(GMT+10:00) Melbourne</option>
                                        <option data-bs-offset="36000" value="Sydney">(GMT+10:00) Sydney</option>
                                        <option data-bs-offset="36000" value="Brisbane">(GMT+10:00) Brisbane</option>
                                        <option data-bs-offset="36000" value="Hobart">(GMT+10:00) Hobart</option>
                                        <option data-bs-offset="36000" value="Vladivostok">(GMT+10:00) Vladivostok</option>
                                        <option data-bs-offset="36000" value="Guam">(GMT+10:00) Guam</option>
                                        <option data-bs-offset="36000" value="Port Moresby">(GMT+10:00) Port Moresby</option>
                                        <option data-bs-offset="36000" value="Solomon Is.">(GMT+10:00) Solomon Is.</option>
                                        <option data-bs-offset="39600" value="Magadan">(GMT+11:00) Magadan</option>
                                        <option data-bs-offset="39600" value="New Caledonia">(GMT+11:00) New Caledonia</option>
                                        <option data-bs-offset="43200" value="Fiji">(GMT+12:00) Fiji</option>
                                        <option data-bs-offset="43200" value="Kamchatka">(GMT+12:00) Kamchatka</option>
                                        <option data-bs-offset="43200" value="Marshall Is.">(GMT+12:00) Marshall Is.</option>
                                        <option data-bs-offset="43200" value="Auckland">(GMT+12:00) Auckland</option>
                                        <option data-bs-offset="43200" value="Wellington">(GMT+12:00) Wellington</option>
                                        <option data-bs-offset="46800" value="Nuku'alofa">(GMT+13:00) Nuku'alofa</option>
                                    </select>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label fw-bold fs-6">Currency</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <select name="currnecy" aria-label="Select a Timezone" data-control="select2" data-placeholder="Select a currency.." class="form-select form-select-solid form-select-lg">
                                        <option value="">Select a currency..</option>
                                        <option data-kt-flag="flags/united-states.svg" value="USD">
                                        <b>USD</b>&#160;-&#160;USA dollar</option>
                                        <option data-kt-flag="flags/united-kingdom.svg" value="GBP">
                                        <b>GBP</b>&#160;-&#160;British pound</option>
                                        <option data-kt-flag="flags/australia.svg" value="AUD">
                                        <b>AUD</b>&#160;-&#160;Australian dollar</option>
                                        <option data-kt-flag="flags/japan.svg" value="JPY">
                                        <b>JPY</b>&#160;-&#160;Japanese yen</option>
                                        <option data-kt-flag="flags/sweden.svg" value="SEK">
                                        <b>SEK</b>&#160;-&#160;Swedish krona</option>
                                        <option data-kt-flag="flags/canada.svg" value="CAD">
                                        <b>CAD</b>&#160;-&#160;Canadian dollar</option>
                                        <option data-kt-flag="flags/switzerland.svg" value="CHF">
                                        <b>CHF</b>&#160;-&#160;Swiss franc</option>
                                    </select>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label required fw-bold fs-6">Communication</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <!--begin::Options-->
                                    <div class="d-flex align-items-center mt-3">
                                        <!--begin::Option-->
                                        <label class="form-check form-check-inline form-check-solid me-5">
                                            <input class="form-check-input" name="communication[]" type="checkbox" value="1" />
                                            <span class="fw-bold ps-2 fs-6">Email</span>
                                        </label>
                                        <!--end::Option-->
                                        <!--begin::Option-->
                                        <label class="form-check form-check-inline form-check-solid">
                                            <input class="form-check-input" name="communication[]" type="checkbox" value="2" />
                                            <span class="fw-bold ps-2 fs-6">Phone</span>
                                        </label>
                                        <!--end::Option-->
                                    </div>
                                    <!--end::Options-->
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-0">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label fw-bold fs-6">Allow Marketing</label>
                                <!--begin::Label-->
                                <!--begin::Label-->
                                <div class="col-lg-8 d-flex align-items-center">
                                    <div class="form-check form-check-solid form-switch fv-row">
                                        <input class="form-check-input w-45px h-30px" type="checkbox" id="allowmarketing" checked="checked" />
                                        <label class="form-check-label" for="allowmarketing"></label>
                                    </div>
                                </div>
                                <!--begin::Label-->
                            </div>
                            <!--end::Input group-->
                        </div>
                        <!--end::Card body-->
                        <!--begin::Actions-->
                        <div class="card-footer d-flex justify-content-end py-6 px-9">
                            <button type="reset" class="btn btn-light btn-active-light-primary me-2">Discard</button>
                            <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Save Changes</button>
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Content-->
            </div>

            <!--begin::Modals-->
            <!--begin::Modal - View Users-->
            <div class="modal fade" id="kt_modal_view_users" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog mw-650px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Modal header-->
                        <div class="modal-header pb-0 border-0 justify-content-end">
                            <!--begin::Close-->
                            <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                <span class="svg-icon svg-icon-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.5" x="6" y="17.3137" width="16" height="2"
                                            rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                                        <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                            transform="rotate(45 7.41422 6)" fill="black" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Close-->
                        </div>
                        <!--begin::Modal header-->
                        <!--begin::Modal body-->
                        <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                            <!--begin::Heading-->
                            <div class="text-center mb-13">
                                <!--begin::Title-->
                                <h1 class="mb-3">Browse Users</h1>
                                <!--end::Title-->
                                <!--begin::Description-->
                                <div class="text-muted fw-bold fs-5">If you need more info, please check out our
                                    <a href="#" class="link-primary fw-bolder">Users Directory</a>.
                                </div>
                                <!--end::Description-->
                            </div>
                            <!--end::Heading-->
                            <!--begin::Users-->
                            <div class="mb-15">
                                <!--begin::List-->
                                <div class="mh-375px scroll-y me-n7 pe-7">
                                    <!--begin::User-->
                                    <div
                                        class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="{{ '/assets/media/avatars/150-1.jpg' }}" />
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-6">
                                                <!--begin::Name-->
                                                <a href="#"
                                                    class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Emma
                                                    Smith
                                                    <span class="badge badge-light fs-8 fw-bold ms-2">Art
                                                        Director</span></a>
                                                <!--end::Name-->
                                                <!--begin::Email-->
                                                <div class="fw-bold text-muted">e.smith@kpmg.com.au</div>
                                                <!--end::Email-->
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Stats-->
                                        <div class="d-flex">
                                            <!--begin::Sales-->
                                            <div class="text-end">
                                                <div class="fs-5 fw-bolder text-dark">$23,000</div>
                                                <div class="fs-7 text-muted">Sales</div>
                                            </div>
                                            <!--end::Sales-->
                                        </div>
                                        <!--end::Stats-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::User-->
                                    <div
                                        class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span class="symbol-label bg-light-danger text-danger fw-bold">M</span>
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-6">
                                                <!--begin::Name-->
                                                <a href="#"
                                                    class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Melody
                                                    Macy
                                                    <span class="badge badge-light fs-8 fw-bold ms-2">Marketing
                                                        Analytic</span></a>
                                                <!--end::Name-->
                                                <!--begin::Email-->
                                                <div class="fw-bold text-muted">melody@altbox.com</div>
                                                <!--end::Email-->
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Stats-->
                                        <div class="d-flex">
                                            <!--begin::Sales-->
                                            <div class="text-end">
                                                <div class="fs-5 fw-bolder text-dark">$50,500</div>
                                                <div class="fs-7 text-muted">Sales</div>
                                            </div>
                                            <!--end::Sales-->
                                        </div>
                                        <!--end::Stats-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::User-->
                                    <div
                                        class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="{{ '/assets/media/avatars/150-26.jpg' }}" />
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-6">
                                                <!--begin::Name-->
                                                <a href="#"
                                                    class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Max
                                                    Smith
                                                    <span class="badge badge-light fs-8 fw-bold ms-2">Software
                                                        Enginer</span></a>
                                                <!--end::Name-->
                                                <!--begin::Email-->
                                                <div class="fw-bold text-muted">max@kt.com</div>
                                                <!--end::Email-->
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Stats-->
                                        <div class="d-flex">
                                            <!--begin::Sales-->
                                            <div class="text-end">
                                                <div class="fs-5 fw-bolder text-dark">$75,900</div>
                                                <div class="fs-7 text-muted">Sales</div>
                                            </div>
                                            <!--end::Sales-->
                                        </div>
                                        <!--end::Stats-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::User-->
                                    <div
                                        class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="{{ '/assets/media/avatars/150-4.jpg' }}" />
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-6">
                                                <!--begin::Name-->
                                                <a href="#"
                                                    class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Sean
                                                    Bean
                                                    <span class="badge badge-light fs-8 fw-bold ms-2">Web
                                                        Developer</span></a>
                                                <!--end::Name-->
                                                <!--begin::Email-->
                                                <div class="fw-bold text-muted">sean@dellito.com</div>
                                                <!--end::Email-->
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Stats-->
                                        <div class="d-flex">
                                            <!--begin::Sales-->
                                            <div class="text-end">
                                                <div class="fs-5 fw-bolder text-dark">$10,500</div>
                                                <div class="fs-7 text-muted">Sales</div>
                                            </div>
                                            <!--end::Sales-->
                                        </div>
                                        <!--end::Stats-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::User-->
                                    <div
                                        class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="{{ '/assets/media/avatars/150-15.jpg' }}" />
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-6">
                                                <!--begin::Name-->
                                                <a href="#"
                                                    class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Brian
                                                    Cox
                                                    <span class="badge badge-light fs-8 fw-bold ms-2">UI/UX
                                                        Designer</span></a>
                                                <!--end::Name-->
                                                <!--begin::Email-->
                                                <div class="fw-bold text-muted">brian@exchange.com</div>
                                                <!--end::Email-->
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Stats-->
                                        <div class="d-flex">
                                            <!--begin::Sales-->
                                            <div class="text-end">
                                                <div class="fs-5 fw-bolder text-dark">$20,000</div>
                                                <div class="fs-7 text-muted">Sales</div>
                                            </div>
                                            <!--end::Sales-->
                                        </div>
                                        <!--end::Stats-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::User-->
                                    <div
                                        class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span class="symbol-label bg-light-warning text-warning fw-bold">M</span>
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-6">
                                                <!--begin::Name-->
                                                <a href="#"
                                                    class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Mikaela
                                                    Collins
                                                    <span class="badge badge-light fs-8 fw-bold ms-2">Head Of
                                                        Marketing</span></a>
                                                <!--end::Name-->
                                                <!--begin::Email-->
                                                <div class="fw-bold text-muted">mikaela@pexcom.com</div>
                                                <!--end::Email-->
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Stats-->
                                        <div class="d-flex">
                                            <!--begin::Sales-->
                                            <div class="text-end">
                                                <div class="fs-5 fw-bolder text-dark">$9,300</div>
                                                <div class="fs-7 text-muted">Sales</div>
                                            </div>
                                            <!--end::Sales-->
                                        </div>
                                        <!--end::Stats-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::User-->
                                    <div
                                        class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="{{ '/assets/media/avatars/150-8.jpg' }}" />
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-6">
                                                <!--begin::Name-->
                                                <a href="#"
                                                    class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Francis
                                                    Mitcham
                                                    <span class="badge badge-light fs-8 fw-bold ms-2">Software
                                                        Arcitect</span></a>
                                                <!--end::Name-->
                                                <!--begin::Email-->
                                                <div class="fw-bold text-muted">f.mitcham@kpmg.com.au</div>
                                                <!--end::Email-->
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Stats-->
                                        <div class="d-flex">
                                            <!--begin::Sales-->
                                            <div class="text-end">
                                                <div class="fs-5 fw-bolder text-dark">$15,000</div>
                                                <div class="fs-7 text-muted">Sales</div>
                                            </div>
                                            <!--end::Sales-->
                                        </div>
                                        <!--end::Stats-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::User-->
                                    <div
                                        class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span class="symbol-label bg-light-danger text-danger fw-bold">O</span>
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-6">
                                                <!--begin::Name-->
                                                <a href="#"
                                                    class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Olivia
                                                    Wild
                                                    <span class="badge badge-light fs-8 fw-bold ms-2">System
                                                        Admin</span></a>
                                                <!--end::Name-->
                                                <!--begin::Email-->
                                                <div class="fw-bold text-muted">olivia@corpmail.com</div>
                                                <!--end::Email-->
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Stats-->
                                        <div class="d-flex">
                                            <!--begin::Sales-->
                                            <div class="text-end">
                                                <div class="fs-5 fw-bolder text-dark">$23,000</div>
                                                <div class="fs-7 text-muted">Sales</div>
                                            </div>
                                            <!--end::Sales-->
                                        </div>
                                        <!--end::Stats-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::User-->
                                    <div
                                        class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span class="symbol-label bg-light-primary text-primary fw-bold">N</span>
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-6">
                                                <!--begin::Name-->
                                                <a href="#"
                                                    class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Neil
                                                    Owen
                                                    <span class="badge badge-light fs-8 fw-bold ms-2">Account
                                                        Manager</span></a>
                                                <!--end::Name-->
                                                <!--begin::Email-->
                                                <div class="fw-bold text-muted">owen.neil@gmail.com</div>
                                                <!--end::Email-->
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Stats-->
                                        <div class="d-flex">
                                            <!--begin::Sales-->
                                            <div class="text-end">
                                                <div class="fs-5 fw-bolder text-dark">$45,800</div>
                                                <div class="fs-7 text-muted">Sales</div>
                                            </div>
                                            <!--end::Sales-->
                                        </div>
                                        <!--end::Stats-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::User-->
                                    <div
                                        class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="{{ '/assets/media/avatars/150-6.jpg' }}" />
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-6">
                                                <!--begin::Name-->
                                                <a href="#"
                                                    class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Dan
                                                    Wilson
                                                    <span class="badge badge-light fs-8 fw-bold ms-2">Web
                                                        Desinger</span></a>
                                                <!--end::Name-->
                                                <!--begin::Email-->
                                                <div class="fw-bold text-muted">dam@consilting.com</div>
                                                <!--end::Email-->
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Stats-->
                                        <div class="d-flex">
                                            <!--begin::Sales-->
                                            <div class="text-end">
                                                <div class="fs-5 fw-bolder text-dark">$90,500</div>
                                                <div class="fs-7 text-muted">Sales</div>
                                            </div>
                                            <!--end::Sales-->
                                        </div>
                                        <!--end::Stats-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::User-->
                                    <div
                                        class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span class="symbol-label bg-light-danger text-danger fw-bold">E</span>
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-6">
                                                <!--begin::Name-->
                                                <a href="#"
                                                    class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Emma
                                                    Bold
                                                    <span class="badge badge-light fs-8 fw-bold ms-2">Corporate
                                                        Finance</span></a>
                                                <!--end::Name-->
                                                <!--begin::Email-->
                                                <div class="fw-bold text-muted">emma@intenso.com</div>
                                                <!--end::Email-->
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Stats-->
                                        <div class="d-flex">
                                            <!--begin::Sales-->
                                            <div class="text-end">
                                                <div class="fs-5 fw-bolder text-dark">$5,000</div>
                                                <div class="fs-7 text-muted">Sales</div>
                                            </div>
                                            <!--end::Sales-->
                                        </div>
                                        <!--end::Stats-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::User-->
                                    <div
                                        class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="{{ '/assets/media/avatars/150-7.jpg' }}" />
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-6">
                                                <!--begin::Name-->
                                                <a href="#"
                                                    class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Ana
                                                    Crown
                                                    <span class="badge badge-light fs-8 fw-bold ms-2">Customer
                                                        Relationship</span></a>
                                                <!--end::Name-->
                                                <!--begin::Email-->
                                                <div class="fw-bold text-muted">ana.cf@limtel.com</div>
                                                <!--end::Email-->
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Stats-->
                                        <div class="d-flex">
                                            <!--begin::Sales-->
                                            <div class="text-end">
                                                <div class="fs-5 fw-bolder text-dark">$70,000</div>
                                                <div class="fs-7 text-muted">Sales</div>
                                            </div>
                                            <!--end::Sales-->
                                        </div>
                                        <!--end::Stats-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::User-->
                                    <div class="d-flex flex-stack py-5">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span class="symbol-label bg-light-info text-info fw-bold">A</span>
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-6">
                                                <!--begin::Name-->
                                                <a href="#"
                                                    class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Robert
                                                    Doe
                                                    <span class="badge badge-light fs-8 fw-bold ms-2">Marketing
                                                        Executive</span></a>
                                                <!--end::Name-->
                                                <!--begin::Email-->
                                                <div class="fw-bold text-muted">robert@benko.com</div>
                                                <!--end::Email-->
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Stats-->
                                        <div class="d-flex">
                                            <!--begin::Sales-->
                                            <div class="text-end">
                                                <div class="fs-5 fw-bolder text-dark">$45,500</div>
                                                <div class="fs-7 text-muted">Sales</div>
                                            </div>
                                            <!--end::Sales-->
                                        </div>
                                        <!--end::Stats-->
                                    </div>
                                    <!--end::User-->
                                </div>
                                <!--end::List-->
                            </div>
                            <!--end::Users-->
                            <!--begin::Notice-->
                            <div class="d-flex justify-content-between">
                                <!--begin::Label-->
                                <div class="fw-bold">
                                    <label class="fs-6">Adding Users by Team Members</label>
                                    <div class="fs-7 text-muted">If you need more info, please check budget planning</div>
                                </div>
                                <!--end::Label-->
                                <!--begin::Switch-->
                                <label class="form-check form-switch form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value=""
                                        checked="checked" />
                                    <span class="form-check-label fw-bold text-muted">Allowed</span>
                                </label>
                                <!--end::Switch-->
                            </div>
                            <!--end::Notice-->
                        </div>
                        <!--end::Modal body-->
                    </div>
                    <!--end::Modal content-->
                </div>
                <!--end::Modal dialog-->
            </div>
            <!--end::Modal - View Users-->
            <!--begin::Modal - Users Search-->
            <div class="modal fade" id="kt_modal_users_search" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-650px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Modal header-->
                        <div class="modal-header pb-0 border-0 justify-content-end">
                            <!--begin::Close-->
                            <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                <span class="svg-icon svg-icon-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.5" x="6" y="17.3137" width="16" height="2"
                                            rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                                        <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                            transform="rotate(45 7.41422 6)" fill="black" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Close-->
                        </div>
                        <!--begin::Modal header-->
                        <!--begin::Modal body-->
                        <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                            <!--begin::Content-->
                            <div class="text-center mb-13">
                                <h1 class="mb-3">Search Users</h1>
                                <div class="text-muted fw-bold fs-5">Invite Collaborators To Your Project</div>
                            </div>
                            <!--end::Content-->
                            <!--begin::Search-->
                            <div id="kt_modal_users_search_handler" data-kt-search-keypress="true"
                                data-kt-search-min-length="2" data-kt-search-enter="enter"
                                data-kt-search-layout="inline">
                                <!--begin::Form-->
                                <form data-kt-search-element="form" class="w-100 position-relative mb-5"
                                    autocomplete="off">
                                    <!--begin::Hidden input(Added to disable form autocomplete)-->
                                    <input type="hidden" />
                                    <!--end::Hidden input-->
                                    <!--begin::Icon-->
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                    <span
                                        class="svg-icon svg-icon-2 svg-icon-lg-1 svg-icon-gray-500 position-absolute top-50 ms-5 translate-middle-y">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546"
                                                height="2" rx="1" transform="rotate(45 17.0365 15.1223)"
                                                fill="black" />
                                            <path
                                                d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                                fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <!--end::Icon-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-lg form-control-solid px-15"
                                        name="search" value=""
                                        placeholder="Search by username, full name or email..."
                                        data-kt-search-element="input" />
                                    <!--end::Input-->
                                    <!--begin::Spinner-->
                                    <span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5"
                                        data-kt-search-element="spinner">
                                        <span class="spinner-border h-15px w-15px align-middle text-muted"></span>
                                    </span>
                                    <!--end::Spinner-->
                                    <!--begin::Reset-->
                                    <span
                                        class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none"
                                        data-kt-search-element="clear">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                        <span class="svg-icon svg-icon-2 svg-icon-lg-1 me-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2"
                                                    rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                                                <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                                    transform="rotate(45 7.41422 6)" fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                    <!--end::Reset-->
                                </form>
                                <!--end::Form-->
                                <!--begin::Wrapper-->
                                <div class="py-5">
                                    <!--begin::Suggestions-->
                                    <div data-kt-search-element="suggestions">
                                        <!--begin::Heading-->
                                        <h3 class="fw-bold mb-5">Recently searched:</h3>
                                        <!--end::Heading-->
                                        <!--begin::Users-->
                                        <div class="mh-375px scroll-y me-n7 pe-7">
                                            <!--begin::User-->
                                            <a href="#"
                                                class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle me-5">
                                                    <img alt="Pic"
                                                        src="{{ '/assets/media/avatars/150-1.jpg' }}" />
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Info-->
                                                <div class="fw-bold">
                                                    <span class="fs-6 text-gray-800 me-2">Emma Smith</span>
                                                    <span class="badge badge-light">Art Director</span>
                                                </div>
                                                <!--end::Info-->
                                            </a>
                                            <!--end::User-->
                                            <!--begin::User-->
                                            <a href="#"
                                                class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle me-5">
                                                    <span
                                                        class="symbol-label bg-light-danger text-danger fw-bold">M</span>
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Info-->
                                                <div class="fw-bold">
                                                    <span class="fs-6 text-gray-800 me-2">Melody Macy</span>
                                                    <span class="badge badge-light">Marketing Analytic</span>
                                                </div>
                                                <!--end::Info-->
                                            </a>
                                            <!--end::User-->
                                            <!--begin::User-->
                                            <a href="#"
                                                class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle me-5">
                                                    <img alt="Pic"
                                                        src="{{ '/assets/media/avatars/150-26.jpg' }}" />
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Info-->
                                                <div class="fw-bold">
                                                    <span class="fs-6 text-gray-800 me-2">Max Smith</span>
                                                    <span class="badge badge-light">Software Enginer</span>
                                                </div>
                                                <!--end::Info-->
                                            </a>
                                            <!--end::User-->
                                            <!--begin::User-->
                                            <a href="#"
                                                class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle me-5">
                                                    <img alt="Pic"
                                                        src="{{ '/assets/media/avatars/150-4.jpg' }}" />
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Info-->
                                                <div class="fw-bold">
                                                    <span class="fs-6 text-gray-800 me-2">Sean Bean</span>
                                                    <span class="badge badge-light">Web Developer</span>
                                                </div>
                                                <!--end::Info-->
                                            </a>
                                            <!--end::User-->
                                            <!--begin::User-->
                                            <a href="#"
                                                class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle me-5">
                                                    <img alt="Pic"
                                                        src="{{ '/assets/media/avatars/150-15.jpg' }}" />
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Info-->
                                                <div class="fw-bold">
                                                    <span class="fs-6 text-gray-800 me-2">Brian Cox</span>
                                                    <span class="badge badge-light">UI/UX Designer</span>
                                                </div>
                                                <!--end::Info-->
                                            </a>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Users-->
                                    </div>
                                    <!--end::Suggestions-->
                                    <!--begin::Results(add d-none to below element to hide the users list by default)-->
                                    <div data-kt-search-element="results" class="d-none">
                                        <!--begin::Users-->
                                        <div class="mh-375px scroll-y me-n7 pe-7">
                                            <!--begin::User-->
                                            <div class="rounded d-flex flex-stack bg-active-lighten p-4"
                                                data-user-id="0">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Checkbox-->
                                                    <label class="form-check form-check-custom form-check-solid me-5">
                                                        <input class="form-check-input" type="checkbox" name="users"
                                                            data-kt-check="true"
                                                            data-kt-check-target="[data-user-id='0']" value="0" />
                                                    </label>
                                                    <!--end::Checkbox-->
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <img alt="Pic"
                                                            src="{{ '/assets/media/avatars/150-1.jpg' }}" />
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Emma
                                                            Smith</a>
                                                        <div class="fw-bold text-muted">e.smith@kpmg.com.au</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true">
                                                        <option value="1">Guest</option>
                                                        <option value="2" selected="selected">Owner</option>
                                                        <option value="3">Can Edit</option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::Separator-->
                                            <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                            <!--end::Separator-->
                                            <!--begin::User-->
                                            <div class="rounded d-flex flex-stack bg-active-lighten p-4"
                                                data-user-id="1">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Checkbox-->
                                                    <label class="form-check form-check-custom form-check-solid me-5">
                                                        <input class="form-check-input" type="checkbox" name="users"
                                                            data-kt-check="true"
                                                            data-kt-check-target="[data-user-id='1']" value="1" />
                                                    </label>
                                                    <!--end::Checkbox-->
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <span
                                                            class="symbol-label bg-light-danger text-danger fw-bold">M</span>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Melody
                                                            Macy</a>
                                                        <div class="fw-bold text-muted">melody@altbox.com</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true">
                                                        <option value="1" selected="selected">Guest</option>
                                                        <option value="2">Owner</option>
                                                        <option value="3">Can Edit</option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::Separator-->
                                            <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                            <!--end::Separator-->
                                            <!--begin::User-->
                                            <div class="rounded d-flex flex-stack bg-active-lighten p-4"
                                                data-user-id="2">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Checkbox-->
                                                    <label class="form-check form-check-custom form-check-solid me-5">
                                                        <input class="form-check-input" type="checkbox" name="users"
                                                            data-kt-check="true"
                                                            data-kt-check-target="[data-user-id='2']" value="2" />
                                                    </label>
                                                    <!--end::Checkbox-->
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <img alt="Pic"
                                                            src="{{ '/assets/media/avatars/150-26.jpg' }}" />
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Max
                                                            Smith</a>
                                                        <div class="fw-bold text-muted">max@kt.com</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true">
                                                        <option value="1">Guest</option>
                                                        <option value="2">Owner</option>
                                                        <option value="3" selected="selected">Can Edit</option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::Separator-->
                                            <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                            <!--end::Separator-->
                                            <!--begin::User-->
                                            <div class="rounded d-flex flex-stack bg-active-lighten p-4"
                                                data-user-id="3">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Checkbox-->
                                                    <label class="form-check form-check-custom form-check-solid me-5">
                                                        <input class="form-check-input" type="checkbox" name="users"
                                                            data-kt-check="true"
                                                            data-kt-check-target="[data-user-id='3']" value="3" />
                                                    </label>
                                                    <!--end::Checkbox-->
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <img alt="Pic"
                                                            src="{{ '/assets/media/avatars/150-4.jpg' }}" />
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Sean
                                                            Bean</a>
                                                        <div class="fw-bold text-muted">sean@dellito.com</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true">
                                                        <option value="1">Guest</option>
                                                        <option value="2" selected="selected">Owner</option>
                                                        <option value="3">Can Edit</option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::Separator-->
                                            <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                            <!--end::Separator-->
                                            <!--begin::User-->
                                            <div class="rounded d-flex flex-stack bg-active-lighten p-4"
                                                data-user-id="4">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Checkbox-->
                                                    <label class="form-check form-check-custom form-check-solid me-5">
                                                        <input class="form-check-input" type="checkbox" name="users"
                                                            data-kt-check="true"
                                                            data-kt-check-target="[data-user-id='4']" value="4" />
                                                    </label>
                                                    <!--end::Checkbox-->
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <img alt="Pic"
                                                            src="{{ '/assets/media/avatars/150-15.jpg' }}" />
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Brian
                                                            Cox</a>
                                                        <div class="fw-bold text-muted">brian@exchange.com</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true">
                                                        <option value="1">Guest</option>
                                                        <option value="2">Owner</option>
                                                        <option value="3" selected="selected">Can Edit</option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::Separator-->
                                            <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                            <!--end::Separator-->
                                            <!--begin::User-->
                                            <div class="rounded d-flex flex-stack bg-active-lighten p-4"
                                                data-user-id="5">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Checkbox-->
                                                    <label class="form-check form-check-custom form-check-solid me-5">
                                                        <input class="form-check-input" type="checkbox" name="users"
                                                            data-kt-check="true"
                                                            data-kt-check-target="[data-user-id='5']" value="5" />
                                                    </label>
                                                    <!--end::Checkbox-->
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <span
                                                            class="symbol-label bg-light-warning text-warning fw-bold">M</span>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Mikaela
                                                            Collins</a>
                                                        <div class="fw-bold text-muted">mikaela@pexcom.com</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true">
                                                        <option value="1">Guest</option>
                                                        <option value="2" selected="selected">Owner</option>
                                                        <option value="3">Can Edit</option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::Separator-->
                                            <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                            <!--end::Separator-->
                                            <!--begin::User-->
                                            <div class="rounded d-flex flex-stack bg-active-lighten p-4"
                                                data-user-id="6">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Checkbox-->
                                                    <label class="form-check form-check-custom form-check-solid me-5">
                                                        <input class="form-check-input" type="checkbox" name="users"
                                                            data-kt-check="true"
                                                            data-kt-check-target="[data-user-id='6']" value="6" />
                                                    </label>
                                                    <!--end::Checkbox-->
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <img alt="Pic"
                                                            src="{{ '/assets/media/avatars/150-8.jpg' }}" />
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Francis
                                                            Mitcham</a>
                                                        <div class="fw-bold text-muted">f.mitcham@kpmg.com.au</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true">
                                                        <option value="1">Guest</option>
                                                        <option value="2">Owner</option>
                                                        <option value="3" selected="selected">Can Edit</option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::Separator-->
                                            <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                            <!--end::Separator-->
                                            <!--begin::User-->
                                            <div class="rounded d-flex flex-stack bg-active-lighten p-4"
                                                data-user-id="7">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Checkbox-->
                                                    <label class="form-check form-check-custom form-check-solid me-5">
                                                        <input class="form-check-input" type="checkbox" name="users"
                                                            data-kt-check="true"
                                                            data-kt-check-target="[data-user-id='7']" value="7" />
                                                    </label>
                                                    <!--end::Checkbox-->
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <span
                                                            class="symbol-label bg-light-danger text-danger fw-bold">O</span>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Olivia
                                                            Wild</a>
                                                        <div class="fw-bold text-muted">olivia@corpmail.com</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true">
                                                        <option value="1">Guest</option>
                                                        <option value="2" selected="selected">Owner</option>
                                                        <option value="3">Can Edit</option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::Separator-->
                                            <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                            <!--end::Separator-->
                                            <!--begin::User-->
                                            <div class="rounded d-flex flex-stack bg-active-lighten p-4"
                                                data-user-id="8">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Checkbox-->
                                                    <label class="form-check form-check-custom form-check-solid me-5">
                                                        <input class="form-check-input" type="checkbox" name="users"
                                                            data-kt-check="true"
                                                            data-kt-check-target="[data-user-id='8']" value="8" />
                                                    </label>
                                                    <!--end::Checkbox-->
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <span
                                                            class="symbol-label bg-light-primary text-primary fw-bold">N</span>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Neil
                                                            Owen</a>
                                                        <div class="fw-bold text-muted">owen.neil@gmail.com</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true">
                                                        <option value="1" selected="selected">Guest</option>
                                                        <option value="2">Owner</option>
                                                        <option value="3">Can Edit</option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::Separator-->
                                            <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                            <!--end::Separator-->
                                            <!--begin::User-->
                                            <div class="rounded d-flex flex-stack bg-active-lighten p-4"
                                                data-user-id="9">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Checkbox-->
                                                    <label class="form-check form-check-custom form-check-solid me-5">
                                                        <input class="form-check-input" type="checkbox" name="users"
                                                            data-kt-check="true"
                                                            data-kt-check-target="[data-user-id='9']" value="9" />
                                                    </label>
                                                    <!--end::Checkbox-->
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <img alt="Pic"
                                                            src="{{ '/assets/media/avatars/150-6.jpg' }}" />
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Dan
                                                            Wilson</a>
                                                        <div class="fw-bold text-muted">dam@consilting.com</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true">
                                                        <option value="1">Guest</option>
                                                        <option value="2">Owner</option>
                                                        <option value="3" selected="selected">Can Edit</option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::Separator-->
                                            <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                            <!--end::Separator-->
                                            <!--begin::User-->
                                            <div class="rounded d-flex flex-stack bg-active-lighten p-4"
                                                data-user-id="10">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Checkbox-->
                                                    <label class="form-check form-check-custom form-check-solid me-5">
                                                        <input class="form-check-input" type="checkbox" name="users"
                                                            data-kt-check="true"
                                                            data-kt-check-target="[data-user-id='10']" value="10" />
                                                    </label>
                                                    <!--end::Checkbox-->
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <span
                                                            class="symbol-label bg-light-danger text-danger fw-bold">E</span>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Emma
                                                            Bold</a>
                                                        <div class="fw-bold text-muted">emma@intenso.com</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true">
                                                        <option value="1">Guest</option>
                                                        <option value="2" selected="selected">Owner</option>
                                                        <option value="3">Can Edit</option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::Separator-->
                                            <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                            <!--end::Separator-->
                                            <!--begin::User-->
                                            <div class="rounded d-flex flex-stack bg-active-lighten p-4"
                                                data-user-id="11">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Checkbox-->
                                                    <label class="form-check form-check-custom form-check-solid me-5">
                                                        <input class="form-check-input" type="checkbox" name="users"
                                                            data-kt-check="true"
                                                            data-kt-check-target="[data-user-id='11']" value="11" />
                                                    </label>
                                                    <!--end::Checkbox-->
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <img alt="Pic"
                                                            src="{{ '/assets/media/avatars/150-7.jpg' }}" />
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Ana
                                                            Crown</a>
                                                        <div class="fw-bold text-muted">ana.cf@limtel.com</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true">
                                                        <option value="1" selected="selected">Guest</option>
                                                        <option value="2">Owner</option>
                                                        <option value="3">Can Edit</option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::Separator-->
                                            <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                            <!--end::Separator-->
                                            <!--begin::User-->
                                            <div class="rounded d-flex flex-stack bg-active-lighten p-4"
                                                data-user-id="12">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Checkbox-->
                                                    <label class="form-check form-check-custom form-check-solid me-5">
                                                        <input class="form-check-input" type="checkbox" name="users"
                                                            data-kt-check="true"
                                                            data-kt-check-target="[data-user-id='12']" value="12" />
                                                    </label>
                                                    <!--end::Checkbox-->
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <span
                                                            class="symbol-label bg-light-info text-info fw-bold">A</span>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Robert
                                                            Doe</a>
                                                        <div class="fw-bold text-muted">robert@benko.com</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true">
                                                        <option value="1">Guest</option>
                                                        <option value="2">Owner</option>
                                                        <option value="3" selected="selected">Can Edit</option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::Separator-->
                                            <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                            <!--end::Separator-->
                                            <!--begin::User-->
                                            <div class="rounded d-flex flex-stack bg-active-lighten p-4"
                                                data-user-id="13">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Checkbox-->
                                                    <label class="form-check form-check-custom form-check-solid me-5">
                                                        <input class="form-check-input" type="checkbox" name="users"
                                                            data-kt-check="true"
                                                            data-kt-check-target="[data-user-id='13']" value="13" />
                                                    </label>
                                                    <!--end::Checkbox-->
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <img alt="Pic"
                                                            src="{{ '/assets/media/avatars/150-17.jpg' }}" />
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">John
                                                            Miller</a>
                                                        <div class="fw-bold text-muted">miller@mapple.com</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true">
                                                        <option value="1">Guest</option>
                                                        <option value="2">Owner</option>
                                                        <option value="3" selected="selected">Can Edit</option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::Separator-->
                                            <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                            <!--end::Separator-->
                                            <!--begin::User-->
                                            <div class="rounded d-flex flex-stack bg-active-lighten p-4"
                                                data-user-id="14">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Checkbox-->
                                                    <label class="form-check form-check-custom form-check-solid me-5">
                                                        <input class="form-check-input" type="checkbox" name="users"
                                                            data-kt-check="true"
                                                            data-kt-check-target="[data-user-id='14']" value="14" />
                                                    </label>
                                                    <!--end::Checkbox-->
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <span
                                                            class="symbol-label bg-light-success text-success fw-bold">L</span>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Lucy
                                                            Kunic</a>
                                                        <div class="fw-bold text-muted">lucy.m@fentech.com</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true">
                                                        <option value="1">Guest</option>
                                                        <option value="2" selected="selected">Owner</option>
                                                        <option value="3">Can Edit</option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::Separator-->
                                            <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                            <!--end::Separator-->
                                            <!--begin::User-->
                                            <div class="rounded d-flex flex-stack bg-active-lighten p-4"
                                                data-user-id="15">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Checkbox-->
                                                    <label class="form-check form-check-custom form-check-solid me-5">
                                                        <input class="form-check-input" type="checkbox" name="users"
                                                            data-kt-check="true"
                                                            data-kt-check-target="[data-user-id='15']" value="15" />
                                                    </label>
                                                    <!--end::Checkbox-->
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <img alt="Pic"
                                                            src="{{ '/assets/media/avatars/150-10.jpg' }}" />
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Ethan
                                                            Wilder</a>
                                                        <div class="fw-bold text-muted">ethan@loop.com.au</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true">
                                                        <option value="1" selected="selected">Guest</option>
                                                        <option value="2">Owner</option>
                                                        <option value="3">Can Edit</option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::Separator-->
                                            <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                            <!--end::Separator-->
                                            <!--begin::User-->
                                            <div class="rounded d-flex flex-stack bg-active-lighten p-4"
                                                data-user-id="16">
                                                <!--begin::Details-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Checkbox-->
                                                    <label class="form-check form-check-custom form-check-solid me-5">
                                                        <input class="form-check-input" type="checkbox" name="users"
                                                            data-kt-check="true"
                                                            data-kt-check-target="[data-user-id='16']" value="16" />
                                                    </label>
                                                    <!--end::Checkbox-->
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <span
                                                            class="symbol-label bg-light-danger text-danger fw-bold">E</span>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="ms-5">
                                                        <a href="#"
                                                            class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Emma
                                                            Bold</a>
                                                        <div class="fw-bold text-muted">emma@intenso.com</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Access menu-->
                                                <div class="ms-2 w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true">
                                                        <option value="1">Guest</option>
                                                        <option value="2">Owner</option>
                                                        <option value="3" selected="selected">Can Edit</option>
                                                    </select>
                                                </div>
                                                <!--end::Access menu-->
                                            </div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Users-->
                                        <!--begin::Actions-->
                                        <div class="d-flex flex-center mt-15">
                                            <button type="reset" id="kt_modal_users_search_reset"
                                                data-bs-dismiss="modal"
                                                class="btn btn-active-light me-3">Cancel</button>
                                            <button type="submit" id="kt_modal_users_search_submit"
                                                class="btn btn-primary">Add Selected Users</button>
                                        </div>
                                        <!--end::Actions-->
                                    </div>
                                    <!--end::Results-->
                                    <!--begin::Empty-->
                                    <div data-kt-search-element="empty" class="text-center d-none">
                                        <!--begin::Message-->
                                        <div class="fw-bold py-10">
                                            <div class="text-gray-600 fs-3 mb-2">No users found</div>
                                            <div class="text-muted fs-6">Try to search by username, full name or email...
                                            </div>
                                        </div>
                                        <!--end::Message-->
                                        <!--begin::Illustration-->
                                        <div class="text-center px-5">
                                            <img src="{{ '/assets/media/illustrations/sigma-1/1.png' }}" alt=""
                                                class="w-100 h-200px h-sm-325px" />
                                        </div>
                                        <!--end::Illustration-->
                                    </div>
                                    <!--end::Empty-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Search-->
                        </div>
                        <!--end::Modal body-->
                    </div>
                    <!--end::Modal content-->
                </div>
                <!--end::Modal dialog-->
            </div>
            <!--end::Modal - Users Search-->
            <!--end::Modals-->
        </div>
        <!--end::Post-->
    </div>
@endsection
