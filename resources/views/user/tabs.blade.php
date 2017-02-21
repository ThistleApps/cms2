<ul class="nav nav-tabs user-tabs">
    <li class="@if(Request::is('user/settings')) active @endif"><a href="/user/settings">Settings</a></li>
    <li class="@if(Request::is('user/password')) active @endif"><a href="/user/password">Password</a></li>
</ul>
