<div class="col-md-2 left-menu">
   <div class="nav-menu-left">
      <ul>
         <li class="@yield('orgadmin_org_dashboard')"><a href="{{route('orgadmin.index')}}"> Dashboard</a></li>
         <li class="@yield('orgadmin_org_list')"><a href="{{route('orgadmin.list')}}">Organisation List</a></li>
         <li class="@yield('orgadmin_org_create')"><a href="{{route('orgadmin.create')}}">New Organisation</a></li>
         <li class="top-nav-border">
            <a href="{{ route('logout') }}" 
               onclick="event.preventDefault();
               document.getElementById('logout-form').submit();">
            Logout
            </a>
         </li>
         <li>
            <br>
            <br>
         </li>
      </ul>
   </div>
</div>