@if (Route::has('login'))

<div class="col-md-6 col-sm-6 additional-nav" > 
    <!-- style="margin-top:-35px; " -->
                    <ul class="list-unstyled list-inline pull-right">
                    @auth
                       
                    @if(Auth::user()->user_type === 2 or Auth::user()->user_type === 0)
                    
                    <li><a href="{{ route('myaccount.index') }}">My Account</a></li>
                    @endif



                         @if(Auth::user()->user_type === 0)
                        <li><a href="{{ url('manage/home') }}">Dashboard</a></li>
                       @endif
                       
                        <li>
                                <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
 
                       <li>Welcome: <a href="#"><strong> {{ strtoupper(Auth::user()->name)}} 
                           
                    
                    </strong>
                
                    @if(Auth::user()->user_type === 0)
                    (Administrator)
                    @else
                    (User)
                    @endif
                
                </a></li>        
                    </li>
                    @else
                        <!-- <li><a href="shop-wishlist.html">My Wishlist</a></li>
                        <li><a href="shop-checkout.html">Checkout</a></li>
                        <li><a href="page-login.html">Log In</a></li> -->

                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                    @endauth
                    </ul>

                    @endif
       
                <div class="top-right links">
 
                 
                </div>
                </div>  