
<div class="row sticky">
    <ul class="nav nav-pills nav-justified navbarclr">
      <li class="nav-item" >
        <a class="nav-link  {{ Request::path() == '/' ? 'active' : '' }}" href="/"> <img src="{{ asset ('images/icon/feedwhite.png') }}" alt="Feed" style="width: 34px; height: 34px;" class="btnicon"> </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::path() == 'stumsg'  || Request::path() == 'stumsgbody' ? 'active' : '' }}" href="/stumsg"><img src="{{ asset ('images/icon/msgwhite.png') }}" alt="Messages" style="width: 34px; height: 34px;" class="btnicon"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link  {{ Request::path() == 'stunotification' ? 'active' : '' }}" href="/stunotification"><img src="{{ asset ('images/icon/notificationwhite.png') }}" alt="Notification" style="width: 34px; height: 34px;" class="btnicon"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link   {{ Request::path() == 'favorite' ? 'active' : '' }}" href="/favorite"><img src="{{ asset ('images/icon/favoritewhite.png') }}" alt="Favorite" style="width: 34px; height: 34px;" class="btnicon"></a>
      </li>
    </ul>
  </div>