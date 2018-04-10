<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <form onsubmit="window.location='/users/search/'+document.getElementById('search-box').value; return false;">
                    <div class="input-group custom-search-form">
                        <input id="search-box" type="text" name="name" class="form-control" placeholder="Search Users&hellip;">
                        {{ csrf_field() }}
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </form>
                <!-- /input-group -->
            </li>
            <li>
                <a href="/"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Times by Track<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    @foreach(\App\Track::all() as $track)
                    <li>
                        <a href="/tracks/{{ $track->id }}">{{ $track->name }}</a>
                    </li>
                    @endforeach
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Times by Vehicle<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    @foreach(\App\Vehicle::all() as $vehicle)
                    <li>
                        <a href="/vehicles/{{ $vehicle->id }}">{{ $vehicle->name }}</a>
                    </li>
                    @endforeach
                </ul>
            </li>
            <li>
                <a href="/users"><i class="fa fa-users fa-fw"></i> Users</a>
            </li>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->