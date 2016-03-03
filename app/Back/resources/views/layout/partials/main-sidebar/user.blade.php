<div class="user-panel">
    <div class="pull-left image">
        <img src="/img/avatars/45/45/{{ Auth::user()->getImage() }}" class="img-circle" alt="{{ Auth::user()->name }}">
    </div>
    <div class="pull-left info">
        <p>{{ Auth::user()->name }}</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
    </div>
</div>