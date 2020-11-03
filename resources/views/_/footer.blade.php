<!--====== Footer Area Start ======-->
<footer class="section footer-area">
    <!-- Footer Top -->
    <div class="footer-top ptb_100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-lg-3">
                    <!-- Footer Items -->
                    <div class="footer-items">
                        <!-- Footer Title -->
                        <h3 class="footer-title text-uppercase mb-2">About Us</h3>
                        <ul>
                            <li class="py-2"><a class="text-black-50" href="{{route('pages_about')}}">Company Profile</a></li>
                            <li class="py-2"><a class="text-black-50" href="{{route('portfolio-index')}}">Portfolio</a></li>
                            <li class="py-2"><a class="text-black-50" href="#testimonials">Testimonials</a></li>
                            <li class="py-2"><a class="text-black-50" href="{{route('services-index')}}">Services</a></li>
                            <li class="py-2"><a class="text-black-50" href="{{route('blogs-index')}}">Blogs</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <!-- Footer Items -->
                    <div class="footer-items">
                        <!-- Footer Title -->
                        <h3 class="footer-title text-uppercase mb-2">Services</h3>
                        <ul>
                            @foreach ($company_services as $service)
                            @if($service->show_footer_menu)
                                <li class="py-2"><a class="text-black-50" href="{{route('service-detail' , $service->slug)}}">{{ $service->name }}</a></li>
                            @endif     
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <!-- Footer Items -->
                    <div class="footer-items">
                        <!-- Footer Title -->
                        <h3 class="footer-title text-uppercase mb-2">Support</h3>
                        <ul>
                            <li class="py-2"><a class="text-black-50" href="#">Frequently Asked</a></li>
                            <li class="py-2"><a class="text-black-50" href="#">Terms &amp; Conditions</a></li>
                            <li class="py-2"><a class="text-black-50" href="#">Privacy Policy</a></li>
                            <li class="py-2"><a class="text-black-50" href="#">Help Center</a></li>
                            <li class="py-2"><a class="text-black-50" href="{{route('pages_contact')}}">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <!-- Footer Items -->
                    <div class="footer-items">
                        <!-- Footer Title -->
                        <h3 class="footer-title text-uppercase mb-2">Follow Us</h3>
                        <p class="mb-2">Follow us to know us.</p>
                        <!-- Social Icons -->
                        <ul class="social-icons d-flex pt-2">
                            @foreach ($company_settings->company_social as $social)
                            <li class="list-inline-item px-1"><a href="{!! $social['url'] !!}">{!! $social['icon'] !!}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Bottom -->
    <div class="footer-bottom bg-grey">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Copyright Area -->
                    <div
                        class="copyright-area d-flex flex-wrap justify-content-center justify-content-sm-between text-center py-4">
                        <!-- Copyright Left -->
                        <div class="copyright-left">{!! $company_settings->copyright !!}</div>
                        <!-- Copyright Right -->
                        <div class="copyright-right">Made with By <a href="#">Dev</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--====== Footer Area End ======-->

<!--====== Modal Search Area Start ======-->
<div id="search" class="modal fade p-0">
    <div class="modal-dialog dialog-animated">
        <div class="modal-content h-100">
            <div class="modal-header" data-dismiss="modal">
                Search <i class="far fa-times-circle icon-close"></i>
            </div>
            <div class="modal-body">
                <form class="row"  method="GET" action="{{route('search')}}">
                    <div class="col-12 align-self-center">
                        <div class="row">
                            <div class="col-12 pb-3">
                                <h2 class="search-title mb-3">What are you looking for?</h2>
                                <p>Services, Blogs</p>
                            </div>
                        </div>
                        <div class="row pb-3">
                            <div class="col-12 input-group">
                                <select class="form-control" name="type" id="">
                                    <option value="">Search In</option>
                                    <option value="blogs">Blogs</option>
                                    <option value="services">Services</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 input-group">
                                <input type="text" name="search" class="form-control" placeholder="Services, Blogs">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 input-group align-self-center">
                                <button class="btn btn-bordered mt-3">Search</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--====== Modal Search Area End ======-->

<!--====== Modal Responsive Menu Area Start ======-->
<div id="menu" class="modal fade p-0">
    <div class="modal-dialog dialog-animated">
        <div class="modal-content h-100">
            <div class="modal-header" data-dismiss="modal">
                Menu <i class="far fa-times-circle icon-close"></i>
            </div>
            <div class="menu modal-body">
                <div class="row w-100">
                    <div class="items p-0 col-12 text-center"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--====== Modal Responsive Menu Area End ======-->