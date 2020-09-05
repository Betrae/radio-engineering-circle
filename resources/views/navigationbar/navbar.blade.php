<nav>
  <div class="container">
    <ul class="menu-main">
      <li>
        <a href="{{ route('rec.index') }}">rec</a>
        <div class="menu-sub">
          <ul>
            <li><a href="{{ route('rec.about') }}">About REC</a></li>
            <li><a href="{{ route('rec.history')}}">History</a></li>
            <li><a href="{{ route('rec.vmgo') }}">VMGO</a></li>
            <li><a href="{{ route('rec.charter')}}">Charter</a></li>
            <li><a href="{{ route('rec.events') }}">Events</a></li>
            <li><a href="{{ route('rec.officers') }}">Officers</a></li>
            <li><a href="{{ route('rec.membership') }}">Membership</a></li>
          </ul>
        </div>
      </li>
      <li>
        <a href="{{ route('learn.index') }}">learn</a>
        <div class="menu-sub">
          <ul>
            <li><a href="{{ route('learn.index') }}">Become an Amateur Radio Operator</a></li>
            <li><a href="{{ route('learn.examination') }}">Examination Information</a></li>
            <li><a href="{{ route('learn.operate') }}">Learn How to Operate</a></li>
            <li><a href="{{ route('learn.elmersection') }}">Elmer's Section</a></li>

          </ul>
        </div>
      </li>
      <li><a href="{{ route('section.index') }}">sections</a></li>
      <li><a href="{{ route('news.index')}}">news</a></li>
      <li>
        <a href="{{ route('info.index') }}">info</a>
        <div class="menu-sub">
          <ul>
            <li><a href="">Plans</a></li>
            <li><a href="">Downloadable Forms</a></li>
            <li><a href="">Regulatory</a></li>
            <li><a href="">Reference</a></li>
            <li><a href="">Membership</a></li>
            <li><a href="">History</a></li>
          </ul>
        </div>
      </li>
      <li><a href="{{ route('activities.index') }}">activities</a></li>
      <li><a href="{{ route('contacts.index') }}">contact</a></li>
      <li><a id="join-rec" href="{{ route('join.index') }}">join rec</a></li>
    </ul>
  </div>
</nav>