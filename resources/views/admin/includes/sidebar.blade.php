<nav class="pcoded-navbar">
   <div class="pcoded-inner-navbar main-menu">
      <div class="pcoded-navigatio-lavel">Navigation</div>
      <ul class="pcoded-item pcoded-left-item">
         <li class=" active pcoded-trigger">
            <a href="{{ route('index') }}">
               <span class="pcoded-micon"><i class="fa fa-home"></i></span>
               <span class="pcoded-mtext">Dashboard</span>
            </a>
         </li>
         <li class="pcoded-hasmenu">
            <a href="javascript:void(0)">
               <span class="pcoded-micon"><i class="fa fa-user-circle-o" aria-hidden="true"></i></span>
               <span class="pcoded-mtext">User</span>
            </a>
            <ul class="pcoded-submenu">
               @can('user-read')
               <li>
                  <a href="{{ route('users') }}">
                     <span class="pcoded-mtext">Add User</span>
                  </a>
               </li>
               @endcan
               @can('role-read')
               <li>
                  <a href="{{ route('roles') }}">
                     <span class="pcoded-mtext">Add Roles</span>
                  </a>
               </li>
               @endcan
               <li class>
                  <a href="login-info.php">
                     <span class="pcoded-mtext">Login Info</span>
                  </a>
               </li>
            </ul>
         <li class="pcoded-hasmenu">
            <a href="javascript:void(0)">
               <span class="pcoded-micon"><i class="fa fa-users" aria-hidden="true"></i></span>
               <span class="pcoded-mtext">CMS</span>
            </a>
            <ul class="pcoded-submenu">
               <li class="pcoded-hasmenu">
                  <a href="javascript:void(0)">
                     <span class="pcoded-mtext">Home</span>
                  </a>
                  <ul class="pcoded-submenu">
                     @can('slider-read')
                     <li>
                        <a href="{{ route('slider') }}">
                           <span class="pcoded-mtext">Slider </span>
                        </a>
                     </li>
                     @endcan
                     @can('financialspecialists-read')
                     <li>
                        <a href="{{route('financial-specialists')}}">
                           <span class="pcoded-mtext">Finincial Specilist</span>
                        </a>
                     </li>
                     @endcan
                     @can('yourachivements-read')
                     <li>
                        <a href="{{route('your-achivements')}}">
                           <span class="pcoded-mtext">Your Achivements</span>
                        </a>
                     </li>
                     @endcan
                     @can('whychoosechintamani-read')
                     <li>
                        <a href="{{route('why-choose-chintamani')}}">
                           <span class="pcoded-mtext">Why Choose Us</span>
                        </a>
                     </li>
                     @endcan
                     @can('becomepartner-read')
                     <li>
                        <a href="{{route('become-partner')}}">
                           <span class="pcoded-mtext">Become a Partner</span>
                        </a>
                     </li>
                     @endcan
                     @can('supportcustomer-read')
                     <li>
                        <a href="{{route('support-customer')}}">
                           <span class="pcoded-mtext">Support</span>
                        </a>
                     </li>
                     @endcan
                     @can('whoweare-read')
                     <li>
                        <a href="{{route('who-we-are')}}">
                           <span class="pcoded-mtext">Who We Are</span>
                        </a>
                     </li>
                     @endcan
                     @can('getfreescore-read')
                     <li>
                        <a href="{{route('get-free-score')}}">
                           <span class="pcoded-mtext">Get Free Score</span>
                        </a>
                     </li>
                     @endcan
                     @can('faq-read')
                     <li>
                        <a href="{{route('faq')}}">
                           <span class="pcoded-mtext">FAQs</span>
                        </a>
                     </li>
                     @endcan
                  </ul>
               </li>
               <li class=" pcoded-hasmenu">
                  <a href="javascript:void(0)">
                     <span class="pcoded-mtext">About</span>
                  </a>
                  <ul class="pcoded-submenu">
                     @can('about-read')
                     <li>
                        <a href="{{route('about')}}">
                           <span class="pcoded-mtext">About Us</span>
                        </a>
                     </li>
                     @endcan
                     @can('whychooseus-read')
                     <li>
                        <a href="{{route('why-choose-us')}}">
                           <span class="pcoded-mtext">Why Choose Us</span>
                        </a>
                     </li>
                     @endcan
                  </ul>
               </li>

               <li class=" pcoded-hasmenu">
                  <a href="javascript:void(0)">
                     <span class="pcoded-mtext">Loan Type</span>
                  </a>
                  <ul class="pcoded-submenu">
                     <li>
                        <a href="category.php">
                           <span class="pcoded-mtext">Category</span>
                        </a>
                     </li>
                     <li>
                        <a href="sub-category.php">
                           <span class="pcoded-mtext">Sub Category</span>
                        </a>
                     </li>
                     <li>
                        <a href="city.php">
                           <span class="pcoded-mtext">City</span>
                        </a>
                     </li>
                     <li>
                        <a href="city-pages.php">
                           <span class="pcoded-mtext">City pages</span>
                        </a>
                     </li>

                  </ul>
               </li>
               <li>
                  <a href="blog.php">
                     <span class="pcoded-mtext">Blog</span>
                  </a>
               </li>

               <li>
                  <a href="career.php">
                     <span class="pcoded-mtext">Career</span>
                  </a>
               </li>
               <li>
                  <a href="contact.php">
                     <span class="pcoded-mtext">Contact</span>
                  </a>
               </li>

            </ul>
         </li>
         </li>
      </ul>
   </div>
</nav>