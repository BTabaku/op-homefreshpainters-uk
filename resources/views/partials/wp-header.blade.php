<header class="elementor-section elementor-top-section elementor-element elementor-element-header elementor-section-full_width elementor-section-height-default elementor-section-height-default">
    <div class="elementor-container elementor-column-gap-no">
        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-header-column">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-logo elementor-widget elementor-widget-image">
                    <div class="elementor-widget-container">
                        <a href="{{ route('home') }}" class="elementor-clickable">
                            <img src="{{ asset('assets/images/logo.png') }}" alt="HomeFreshPainters" class="elementor-animation-fade">
                        </a>
                    </div>
                </div>
                
                <div class="elementor-element elementor-element-nav elementor-widget elementor-widget-nav-menu">
                    <div class="elementor-widget-container">
                        <nav class="elementor-nav-menu--main elementor-nav-menu__container elementor-nav-menu--layout-horizontal e--pointer-text e--animation-fade">
                            <ul id="menu-1" class="elementor-nav-menu">
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-200 current_page_item">
                                    <a href="{{ route('home') }}" aria-current="page">Home</a>
                                </li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                    <a href="{{ route('services') }}">Services</a>
                                </li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                    <a href="{{ route('portfolio') }}">Portfolio</a>
                                </li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                    <a href="{{ route('about') }}">About</a>
                                </li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                    <a href="{{ route('contact') }}">Contact</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<style>
/* Elementor-style header CSS */
.elementor-section-full_width {
    max-width: 100%;
}

.elementor-container {
    display: flex;
    flex-wrap: wrap;
    align-items: stretch;
}

.elementor-column {
    position: relative;
    min-height: 1px;
    display: flex;
}

.elementor-column-100 {
    width: 100%;
}

.elementor-widget-wrap {
    align-content: flex-start;
    flex-wrap: wrap;
    align-items: stretch;
}

.elementor-widget {
    position: relative;
}

.elementor-widget-wrap>.elementor-element {
    width: 100%;
}

.elementor-nav-menu--main {
    display: flex;
}

.elementor-nav-menu__container {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
}

.elementor-nav-menu--layout-horizontal {
    flex-direction: row;
}

.elementor-nav-menu ul {
    display: flex;
    flex-wrap: wrap;
    list-style: none;
    margin: 0;
    padding: 0;
}

.elementor-nav-menu li {
    position: relative;
}

.elementor-nav-menu a {
    display: block;
    padding: 10px 20px;
    text-decoration: none;
    color: #333;
    transition: color 0.3s ease;
}

.elementor-nav-menu a:hover {
    color: #007bff;
}

.elementor-clickable {
    cursor: pointer;
}

.elementor-animation-fade {
    animation-duration: 1s;
    animation-fill-mode: both;
    animation-name: fade;
}

@keyframes fade {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}

header {
    background: #fff;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    position: sticky;
    top: 0;
    z-index: 1000;
}

.elementor-widget-image img {
    max-width: 200px;
    height: auto;
}
</style>
