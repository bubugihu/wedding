<div class="d-flex align-items-stretch">
    <div id="sidebar" class="sidebar py-3">
        <div class="text-gray-400 text-uppercase px-3 px-lg-4 py-4 font-weight-bold small headings-font-family">
            Bubu
        </div>
        <ul class="sidebar-menu list-unstyled">
            <li class="sidebar-list-item"><a href="{{route("admin")}}" class="sidebar-link text-muted"><i class="o-home-1 mr-3"></i><span>Dashboard</span></a>
            </li>
             <!-- Customers Module -->
             <li class="sidebar-list-item"><a href="#" data-toggle="collapse" data-target="#pages2" aria-expanded="false" aria-controls="pages" class="sidebar-link text-muted"><i class="o-user-details-1 mr-3"></i><span>Customers</span></a>
                <div id="pages2" class="collapse">
                    <ul class="sidebar-menu list-unstyled border-left border-dark border-thick">
                        <li class="sidebar-list-item"><a href="{{route("list")}}" class="sidebar-link text-muted pl-lg-5">List Customers</a></li>
                </div>
            </li>
            <!-- End Customers Module -->
            <hr><br>
            
        </ul>
    </div>