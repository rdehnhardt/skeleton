<ul class="sidebar-menu">
    <li class="header">{{ _ucwords(trans('back::dictionary.main-menu')) }}</li>
    <li class="{{ request()->is('back/dashboard') ? 'active' : '' }}">
        <a href="{{ route('back.dashboard') }}">
            <i class="fa fa-dashboard"></i> <span>{{ _ucwords(trans('back::dashboard.title')) }}</span>
        </a>
    </li>
    <li class="treeview {{ request()->is('back/system*') ? 'active' : '' }}">
        <a href="#">
            <i class="fa fa-cogs"></i> <span>{{ _ucwords(trans('back::system.title')) }}</span>
        </a>

        <ul class="treeview-menu">
            <li class="{{ request()->is('back/system/users*') ? 'active' : '' }}">
                <a href="{{ route('back.system.users.index') }}">
                    <i class="fa fa-circle-o"></i> {{ _ucwords(trans('back::system.user.title')) }}
                </a>
            </li>
        </ul>
    </li>
    <li class="treeview {{ request()->is('back/documents*') ? 'active' : '' }}">
        <a href="#">
            <i class="fa fa-folder-open"></i> <span>{{ _ucwords(trans('back::documents.title')) }}</span>
        </a>

        <ul class="treeview-menu">
            <li class="{{ request()->is('back/documents/images*') ? 'active' : '' }}">
                <a href="{{ route('back.documents.images.index') }}">
                    <i class="fa fa-circle-o"></i> {{ _ucwords(trans('back::documents.images.title')) }}
                </a>
            </li>
        </ul>
    </li>
</ul>