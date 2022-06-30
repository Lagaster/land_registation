<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="user-pro"> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"
                        aria-expanded="false">
                        <img src="{{ auth()->user()->user_profile() }}" alt="user-img" class="img-circle"><span
                            class="hide-menu">{{ Auth::user()->name }}</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ route('users.show', auth()->user()) }}"><i class="ti-user"></i> My Profile</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-small-cap">--- PERSONAL</li>

                @if (auth()->user()->isRegistrar())
                    <li>
                        <a class=" waves-effect waves-dark" href="{{ route('confirm.land.transfer.index') }}"
                            aria-expanded="false">
                            <i class="ti-layout-media-right-alt"></i>
                            <span class="hide-menu">Confirm Land Transfer</span></a>
                @endif

                {{-- <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-speedometer">
                    </i><span class="hide-menu">Payments <span class="badge badge-pill badge-cyan ml-auto">4</span></span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="">Confirm Land Transfer</a></li>
                    </ul>
                </li> --}}
                <li> <a class=" waves-effect waves-dark" href="{{ route('lands.mylands') }}" aria-expanded="false"><i
                    class="ti-layout-media-right-alt"></i><span class="hide-menu">My Lands</span></a>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="ti-layout-grid2"></i><span class="hide-menu">Binds</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ route('binds.seller') }}">Seller Binds</a></li>
                        <li><a href="{{ route('binds.buyer') }}">Buyer Binds</a></li>
                    </ul>
                </li>
                <li> <a class=" waves-effect waves-dark" href="{{ route('lands.index') }}" aria-expanded="false"><i
                            class="ti-layout-media-right-alt"></i><span class="hide-menu">Lands</span></a>

                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="ti-palette"></i><span class="hide-menu">Users<span
                                class="badge badge-pill badge-primary text-white ml-auto">25</span></span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ route('users.index') }}">System Users</a></li>
                    </ul>
                </li>


                <li> <a class=" waves-effect waves-dark" href="{{ route('valuationReports.index') }}"
                        aria-expanded="false"><i class="ti-layout-media-right-alt"></i><span class="hide-menu">Valuation
                            Reports</span></a>

                </li>
                <li> <a class=" waves-effect waves-dark" href="{{ route('landRates.index') }}" aria-expanded="false"><i
                            class="ti-layout-accordion-merged"></i><span class="hide-menu">Land Rates</span></a>

                </li>
                <li> <a class=" waves-effect waves-dark" href="{{ route('stampDuties.index') }}"
                        aria-expanded="false"><i class="ti-stamp"></i><span class="hide-menu">Stamp Duty</span></a>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
