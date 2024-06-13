<div id="left-sidebar" class="sidebar">
    <div class="sidebar-scroll">
        
        <!-- Nav tabs -->
        <ul class="nav nav-tabs">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#menu"><i class="fa fa-bars"></i></a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Chat"><i class="icon-book-open"></i></a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#setting"><i class="icon-settings"></i></a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#question"><i class="icon-question"></i></a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#profile"><i class="fa fa-user"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content p-l-0 p-r-0">
            <div class="tab-pane active" id="menu">
                <nav id="left-sidebar-nav" class="sidebar-nav">
                    <ul id="main-menu" class="metismenu">
                        <li class="active">
                            <a href="{{ route('dashboard') }}"><i class="fa fa-home"></i> <span>Dashboard</span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="has-arrow"><i class="icon-grid"></i> <span>Category</span></a>
                            <ul>
                                <li><a href="app-inbox.html">Category</a></li>
                                <li><a href="app-chat.html">Add New</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="has-arrow"><i class="icon-folder"></i> <span>Gallary</span></a>
                            <ul>
                                <li><a href="file-media.html">Media</a></li>
                                <li><a href="file-images.html">Images</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="has-arrow"><i class="icon-globe"></i> <span>Blog</span></a>
                            <ul>
                                <li><a href="blog-list.html">Blog List</a></li>
                                <li><a href="blog-post.html">New Post</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('settings') }}"><i class="fa fa-cog"></i>Settings</a></li>
                        
                        <li>
                            <a href="#uiElements" class="has-arrow"><i class="icon-diamond"></i> <span>Users</span></a>
                            <ul>
                                <li><a href="ui-typography.html">Users</a></li>
                                <li><a href="ui-typography.html">Add New</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="tab-pane p-l-15 p-r-15" id="Chat">
                <form>
                    <div class="input-group m-b-20">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="icon-magnifier"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Search...">
                    </div>
                </form>
                <ul class="right_chat list-unstyled">
                    {{-- <li class="online">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object " src="../assets/images/xs/avatar4.jpg" alt="">
                                <div class="media-body">
                                    <span class="name">Chris Fox</span>
                                    <span class="message">Designer, Blogger</span>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>
                    </li> --}}
                </ul>
            </div>


            <!-- Page Settings --> 
            <div class="tab-pane p-l-15 p-r-15" id="setting">
                <nav id="" class="sidebar-nav">
                    <ul id="main-menu" class="metismenu">
                        <li>
                            <a href="javascript:void(0);" class="has-arrow"><i class="fa fa-home"></i> <span>Home</span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="has-arrow"><i class="fa fa-address-card"></i> <span>About</span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="has-arrow"><i class="fa fa-line-chart"></i> <span>Projects</span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="has-arrow"><i class="fa fa-wrench"></i> <span>Servece</span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="has-arrow"><i class="fa fa-users"></i> <span>Teams</span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="has-arrow"><i class="fa fa-video-camera"></i> <span>Videos</span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="has-arrow"><i class="fa fa-newspaper-o"></i> <span>Blogs</span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="has-arrow"><i class="icon-grid"></i> <span>Contacts</span></a>
                        </li>
                    </ul>
                </nav>
                <hr>
                <h6>General Settings</h6>
                <ul class="setting-list list-unstyled">
                    <li>
                        <label class="fancy-checkbox">
                        <input type="checkbox" name="checkbox">
                        <span>Report Panel Usag</span>
                        </label>
                    </li>
                    <li>
                        <label class="fancy-checkbox">
                        <input type="checkbox" name="checkbox" checked>
                        <span>Email Redirect</span>
                        </label>
                    </li>
                    <li>
                        <label class="fancy-checkbox">
                        <input type="checkbox" name="checkbox" checked>
                        <span>Notifications</span>
                        </label>                      
                    </li>
                    <li>
                        <label class="fancy-checkbox">
                        <input type="checkbox" name="checkbox">
                        <span>Auto Updates</span>
                        </label>
                    </li>
                    <li>
                        <label class="fancy-checkbox">
                        <input type="checkbox" name="checkbox">
                        <span>Offline</span>
                        </label>
                    </li>
                    <li>
                        <label class="fancy-checkbox">
                        <input type="checkbox" name="checkbox">
                        <span>Location Permission</span>
                        </label>
                    </li>
                </ul>
            </div>

            <!-- FAQ -->
            <div class="tab-pane p-l-15 p-r-15" id="question">
                <form>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="icon-magnifier"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Search...">
                    </div>
                </form>
                <ul class="list-unstyled question">
                    <li class="menu-heading">HOW-TO</li>
                    <li><a href="javascript:void(0);">How to Create Campaign</a></li>
                    <li><a href="javascript:void(0);">Boost Your Sales</a></li>
                    <li><a href="javascript:void(0);">Website Analytics</a></li>
                    <li class="menu-heading">ACCOUNT</li>
                    <li><a href="javascript:void(0);">Cearet New Account</a></li>
                    <li><a href="javascript:void(0);">Change Password?</a></li>
                    <li><a href="javascript:void(0);">Privacy &amp; Policy</a></li>
                    <li class="menu-heading">BILLING</li>
                    <li><a href="javascript:void(0);">Payment info</a></li>
                    <li><a href="javascript:void(0);">Auto-Renewal</a></li>
                    <li class="menu-button m-t-30">
                        <a href="javascript:void(0);" class="btn btn-primary"><i class="icon-question"></i> Need Help?</a>
                    </li>
                </ul>
            </div>

            <!-- User Profile -->
            <div class="tab-pane p-l-15 p-r-15" id="profile">
                <div class="user-account">
                    <img src="{{ asset('uploads/users/default_image.png') }}" class="rounded-circle w-100" alt="User Profile Picture">
                    <div>
                        <span>Welcome,</span>
                        <a href="javascript:void(0);" class="user-name">
                            <strong class="text-center">{{ auth()->user()->name }}</strong>
                            <p class="text-center">{{ auth()->user()->email }}</p>
                        </a>
                    </div>
                    <hr>
                    <ul class="row list-unstyled">
                        <li class="col-4">
                            <small>Sales</small>
                            <h6>456</h6>
                        </li>
                        <li class="col-4">
                            <small>Order</small>
                            <h6>1350</h6>
                        </li>
                        <li class="col-4">
                            <small>Revenue</small>
                            <h6>$2.13B</h6>
                        </li>
                    </ul>
                </div>
                <ul class="dropdown-menu dropdown-menu-right account">
                    <li><a href="page-profile2.html"><i class="icon-user"></i>My Profile</a></li>
                    <li><a href="app-inbox.html"><i class="icon-envelope-open"></i>Messages</a></li>
                    <li><a href="javascript:void(0);"><i class="icon-settings"></i>Settings</a></li>
                    <li class="divider"></li>
                    <li><a href="page-login.html"><i class="icon-power"></i>Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>