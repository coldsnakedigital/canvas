<aside id="sidebar" class="sidebar c-overflow">
    <div class="profile-menu">
        <a href="">
            <div class="profile-pic">
                <img src="//www.gravatar.com/avatar/{{ md5(Auth::user()->email) }}?d=identicon">
            </div>
            <div class="profile-info">
                {{ Auth::user()->display_name }}
                <i class="zmdi zmdi-caret-down"></i>
            </div>
        </a>
        <ul class="main-menu">
            <li><a href="#"><i class="zmdi zmdi-account"></i> View Profile</a></li>
            <li><a href="#"><i class="zmdi zmdi-settings"></i> Settings</a></li>
            <li><a href="/auth/logout"><i class="zmdi zmdi-time-restore"></i> Logout</a></li>
        </ul>
    </div>
    <ul class="main-menu">
        <li><a href="/admin/post"><i class="zmdi zmdi-view-compact"></i> Posts</a></li>
        <li><a href="#"><i class="zmdi zmdi-account"></i> Tags</a></li>
        <li><a href="#"><i class="zmdi zmdi-format-list-bulleted"></i> Uploads</a></li>
    </ul>
</aside>