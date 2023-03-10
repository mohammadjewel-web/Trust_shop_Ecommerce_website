<aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
    <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
        <i class="fe fe-x"><span class="sr-only"></span></i>
    </a>
    <nav class="vertnav navbar navbar-light">
        <!-- nav bar -->
        <div class="w-100 mb-4 d-flex">
            <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="{{route('dashboard')}}">
                <img src="{{asset('frontEndAssets')}}/image/catalog/Logo.png" style="width: 10rem;" alt="">
            </a>
        </div>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item w-100">
                <a class="nav-link" href="{{route('dashboard')}}">
                    <i class="fe fe-home fe-16"></i>
                    <span class="ml-3 item-text">Dashboard</span>
                </a>
            </li>
        </ul>
        <p class="text-muted nav-heading mt-4 mb-1">
            <span>Add Section </span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item dropdown">
                <a href="#ui-elementss" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-box fe-16"></i>
                    <span class="ml-3 item-text">User Page</span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100" id="ui-elementss">
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="{{route('user')}}"><span class="ml-1 item-text">User List</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="{{ route('trash') }}"><span class="ml-1 item-text">Trash List</span></a>
                    </li>
                </ul>
            </li>
            <li class="nav-item w-100">
                <a class="nav-link" href="{{route('role')}}">
                    <i class="fe fe-layers fe-16"></i>
                    <span class="ml-3 item-text">Role Manage</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a href="#ui-elements" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-box fe-16"></i>
                    <span class="ml-3 item-text">Category</span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100" id="ui-elements">
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="{{ route('category') }}"><span class="ml-1 item-text">Add Category</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="{{ route('sub-category') }}"><span class="ml-1 item-text">Add Sub Category</span></a>
                    </li>
                </ul>
            </li>
            <li class="nav-item w-100">
                <a class="nav-link" href="{{route('brand.add')}}">
                    <i class="fe fe-layers fe-16"></i>
                    <span class="ml-3 item-text">Brand</span>
                </a>
            </li>

            <li class="nav-item dropdown">
                <a href="#forms" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-codesandbox fe-16"></i>
                    <span class="ml-3 item-text">Product Module</span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100" id="forms">
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="{{ route('product.add') }}"><span class="ml-1 item-text">Add Product</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="{{ route('product.manage') }}"><span class="ml-1 item-text">Manage Product</span></a>
                    </li>
                </ul>
            </li>
            <li class="nav-item w-100">
                <a class="nav-link" href="{{ route('admin.manage-order') }}">
                    <i class="fe fe-truck fe-16"></i>
                    <span class="ml-3 item-text">Customer Manage Order</span>
                </a>
            </li>
        </ul>
    </nav>
</aside>
