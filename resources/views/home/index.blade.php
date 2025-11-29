@extends('layouts.app')

@section('content')
<!-- Include Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

<div data-elementor-type="wp-page" data-elementor-id="200" class="elementor elementor-200">
    <section class="elementor-section elementor-top-section elementor-element elementor-element-ea750c0 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="ea750c0" data-element_type="section">
        <div class="elementor-container elementor-column-gap-no">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-b9790bf" data-id="b9790bf" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-0f50bf9 elementor--h-position-center elementor--v-position-middle elementor-arrows-position-inside elementor-pagination-position-inside elementor-widget elementor-widget-slides" data-id="0f50bf9" data-element_type="widget" data-settings="{&quot;transition&quot;:&quot;fade&quot;,&quot;transition_speed&quot;:600,&quot;autoplay_speed&quot;:4500,&quot;navigation&quot;:&quot;both&quot;,&quot;autoplay&quot;:&quot;yes&quot;,&quot;infinite&quot;:&quot;yes&quot;}" data-widget_type="slides.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-swiper">
                                <div class="elementor-slides-wrapper elementor-main-swiper swiper-container" dir="ltr" data-animation="zoomIn">
                                    <div class="swiper-wrapper elementor-slides">
                                        <div class="elementor-repeater-item-b94fbc9 swiper-slide">
                                            <div class="swiper-slide-bg elementor-ken-burns elementor-ken-burns--in"></div>
                                            <div class="elementor-background-overlay"></div>
                                            <div class="swiper-slide-inner">
                                                <div class="swiper-slide-contents">
                                                    <div class="elementor-slide-heading">Painting Your Vision With
                                                        Precision
                                                    </div>
                                                    <div class="elementor-slide-description">Let us help you make your
                                                        space reflect your personal style and taste with our expert
                                                        color consultation.
                                                    </div>
                                                    <a href="{{ route('services') }}" class="elementor-button elementor-slide-button elementor-size-md">Our
                                                        Services</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-repeater-item-20cf11a swiper-slide">
                                            <div class="swiper-slide-bg elementor-ken-burns elementor-ken-burns--in"></div>
                                            <div class="elementor-background-overlay"></div>
                                            <div class="swiper-slide-inner">
                                                <div class="swiper-slide-contents">
                                                    <div class="elementor-slide-heading">Your Space, Our Masterpiece.
                                                    </div>
                                                    <div class="elementor-slide-description">Our affordable prices and
                                                        exceptional quality make us the go-to choice for all your
                                                        painting needs.
                                                    </div>
                                                    <a href="{{ route('portfolio') }}" class="elementor-button elementor-slide-button elementor-size-md">Our
                                                        Portfolio</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-repeater-item-57c90b3 swiper-slide">
                                            <div class="swiper-slide-bg elementor-ken-burns elementor-ken-burns--in"></div>
                                            <div class="elementor-background-overlay"></div>
                                            <div class="swiper-slide-inner">
                                                <div class="swiper-slide-contents">
                                                    <div class="elementor-slide-heading">Enhancing Your Space With
                                                        Color.
                                                    </div>
                                                    <div class="elementor-slide-description">We're dedicated to
                                                        minimizing disruptions to your daily routine while providing
                                                        exceptional painting services.
                                                    </div>
                                                    <a href="{{ route('contact') }}" class="elementor-button elementor-slide-button elementor-size-md">Contact
                                                        Us</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                    <div class="elementor-swiper-button elementor-swiper-button-prev">
                                        <i aria-hidden="true" class="eicon-chevron-left"></i> <span class="elementor-screen-only">Previous</span>
                                    </div>
                                    <div class="elementor-swiper-button elementor-swiper-button-next">
                                        <i aria-hidden="true" class="eicon-chevron-right"></i> <span class="elementor-screen-only">Next</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Successful Alert -->
    <div class="alert text-center" role="alert" id="success-alert" style="display: none; position: fixed; top: 0; left: 50%; transform: translateX(-50%); z-index: 9999; font-weight: bold;"></div>

    <section class="elementor-section elementor-top-section elementor-element elementor-element-13fc138 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="13fc138" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="elementor-container elementor-column-gap-no">
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-ddbee6c" data-id="ddbee6c" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-36cdd0d elementor-view-default elementor-vertical-align-top elementor-invisible elementor-widget elementor-widget-icon-box" data-id="36cdd0d" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;}" data-widget_type="icon-box.default">
                        <div class="elementor-widget-container">
                            <link rel="stylesheet" href="{{ asset('wp-content/plugins/elementor/assets/css/widget-icon-box.min.css') }}">
                            <div class="elementor-icon-box-wrapper">
                                <div class="elementor-icon-box-icon">
                                    <span class="elementor-icon elementor-animation-float">
                                        <i aria-hidden="true" class="fas fa-paint-brush"></i> </span>
                                </div>
                                <div class="elementor-icon-box-content">
                                    <h3 class="elementor-icon-box-title">
                                        <span>Interior Painting</span>
                                    </h3>
                                    <p class="elementor-icon-box-description">Transform your home with our professional interior painting services.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-4e5b5a3 elementor-view-default elementor-vertical-align-top elementor-invisible elementor-widget elementor-widget-icon-box" data-id="4e5b5a3" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;}" data-widget_type="icon-box.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-icon-box-wrapper">
                                <div class="elementor-icon-box-icon">
                                    <span class="elementor-icon elementor-animation-float">
                                        <i aria-hidden="true" class="fas fa-home"></i> </span>
                                </div>
                                <div class="elementor-icon-box-content">
                                    <h3 class="elementor-icon-box-title">
                                        <span>Exterior Painting</span>
                                    </h3>
                                    <p class="elementor-icon-box-description">Protect and beautify your home exterior with our premium painting solutions.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-8d5f8c0 elementor-view-default elementor-vertical-align-top elementor-invisible elementor-widget elementor-widget-icon-box" data-id="8d5f8c0" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;}" data-widget_type="icon-box.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-icon-box-wrapper">
                                <div class="elementor-icon-box-icon">
                                    <span class="elementor-icon elementor-animation-float">
                                        <i aria-hidden="true" class="fas fa-palette"></i> </span>
                                </div>
                                <div class="elementor-icon-box-content">
                                    <h3 class="elementor-icon-box-title">
                                        <span>Color Consultation</span>
                                    </h3>
                                    <p class="elementor-icon-box-description">Expert color advice to help you choose the perfect palette for your space.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-025e7f2" data-id="025e7f2" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-5b9c8b0 elementor-widget elementor-widget-image" data-id="5b9c8b0" data-element_type="widget" data-widget_type="image.default">
                        <div class="elementor-widget-container">
                            <img width="800" height="534" src="{{ asset('wp-content/uploads/2023/11/painting-image.jpg') }}" class="attachment-large size-large wp-image-23" alt="" loading="lazy" srcset="{{ asset('wp-content/uploads/2023/11/painting-image.jpg') }} 800w, {{ asset('wp-content/uploads/2023/11/painting-image-300x200.jpg') }} 300w, {{ asset('wp-content/uploads/2023/11/painting-image-768x513.jpg') }} 768w" sizes="(max-width: 800px) 100vw, 800px"> </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="elementor-section elementor-top-section elementor-element elementor-element-9c5b6a2 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="9c5b6a2" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6c4b3d1" data-id="6c4b3d1" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-4e6a7a3 elementor-widget elementor-widget-heading" data-id="4e6a7a3" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h2 class="elementor-heading-title elementor-size-default">Why Choose HomeFreshPainters?</h2>
                        </div>
                    </div>
                    <section class="elementor-section elementor-inner-section elementor-element elementor-element-8f1e2e9 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="8f1e2e9" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-c3a1b2a" data-id="c3a1b2a" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-2d3c4b2 elementor-view-default elementor-vertical-align-top elementor-invisible elementor-widget elementor-widget-icon-box" data-id="2d3c4b2" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="icon-box.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-icon-box-wrapper">
                                                <div class="elementor-icon-box-icon">
                                                    <span class="elementor-icon elementor-animation-float">
                                                        <i aria-hidden="true" class="fas fa-check-circle"></i> </span>
                                                </div>
                                                <div class="elementor-icon-box-content">
                                                    <h3 class="elementor-icon-box-title">
                                                        <span>Professional Team</span>
                                                    </h3>
                                                    <p class="elementor-icon-box-description">Experienced painters with attention to detail</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-8a5e3d4" data-id="8a5e3d4" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-5f7a8b6 elementor-view-default elementor-vertical-align-top elementor-invisible elementor-widget elementor-widget-icon-box" data-id="5f7a8b6" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="icon-box.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-icon-box-wrapper">
                                                <div class="elementor-icon-box-icon">
                                                    <span class="elementor-icon elementor-animation-float">
                                                        <i aria-hidden="true" class="fas fa-award"></i> </span>
                                                </div>
                                                <div class="elementor-icon-box-content">
                                                    <h3 class="elementor-icon-box-title">
                                                        <span>Quality Materials</span>
                                                    </h3>
                                                    <p class="elementor-icon-box-description">Premium paints and materials for lasting results</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-9f2c5e7" data-id="9f2c5e7" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-3e8d9f8 elementor-view-default elementor-vertical-align-top elementor-invisible elementor-widget elementor-widget-icon-box" data-id="3e8d9f8" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="icon-box.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-icon-box-wrapper">
                                                <div class="elementor-icon-box-icon">
                                                    <span class="elementor-icon elementor-animation-float">
                                                        <i aria-hidden="true" class="fas fa-dollar-sign"></i> </span>
                                                </div>
                                                <div class="elementor-icon-box-content">
                                                    <h3 class="elementor-icon-box-title">
                                                        <span>Affordable Prices</span>
                                                    </h3>
                                                    <p class="elementor-icon-box-description">Competitive pricing without compromising quality</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>

    <section class="elementor-section elementor-top-section elementor-element elementor-element-7f8c9d3 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="7f8c9d3" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2e4f8a5" data-id="2e4f8a5" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-9a3b6c4 elementor-widget elementor-widget-heading" data-id="9a3b6c4" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h2 class="elementor-heading-title elementor-size-default">Ready to Transform Your Space?</h2>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-5d8e7f3 elementor-widget elementor-widget-text-editor" data-id="5d8e7f3" data-element_type="widget" data-widget_type="text-editor.default">
                        <div class="elementor-widget-container">
                            <p>Get a free, no-obligation quote for your painting project</p>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-8f2c6d5 elementor-align-center elementor-widget elementor-widget-button" data-id="8f2c6d5" data-element_type="widget" data-widget_type="button.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-button-wrapper">
                                <a href="{{ route('contact') }}" class="elementor-button elementor-size-lg elementor-animation-pulse">
                                    <span class="elementor-button-content-wrapper">
                                        <span class="elementor-button-text">Get Free Quote</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
