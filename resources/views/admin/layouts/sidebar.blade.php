<div class="sidebar sidebar-main">
<div class="sidebar-content">

<!-- User menu -->
<div class="sidebar-user">
    <div class="category-content">
        <div class="media">
            <div class="media-body">
                <span class="media-heading text-semibold"> Welcome ,{{ Auth::guard('admin')->user()->firstname }}</span>
                
            </div>

            <div class="media-right media-middle">
                <ul class="icons-list">
                    <li>
                        <a href="#"><i class="icon-cog3"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- /user menu -->


<!-- Main navigation -->
<div class="sidebar-category sidebar-category-visible">
    <div class="category-content no-padding">
        <ul class="navigation navigation-main navigation-accordion">

            <!-- Main -->
            <li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>
            <li class="active"><a href="{{url('admin-home')}}"><i class="icon-home4"></i> <span>Dashboard</span></a></li>
            <li>
                <a href="#"><i class="icon-stack2"></i> <span>Admin Management</span></a>
                <ul>
                    <li><a href="{{url('add-admin')}}">Add Admin</a></li>
                    <li><a href="{{url('all-admins')}}">View All Admins</a></li>
                </ul>
           </li>

           <li>
                <a href="#"><i class="icon-stack2"></i> <span>Questions Management</span></a>
                <ul>
                   <li><a href="{{url('add-question')}}">Add Questions</a></li>
                    <li><a href="{{url('all-questions')}}">View All Questions</a></li>
                </ul>
           </li>

        
        
        </ul>
    </div>
</div>
<!-- /main navigation -->

</div>
</div>

 