<section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="{{ asset('/assets/backend/images/user.png') }}" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</div>
                    <div class="email">{{ Auth::user()->email }}</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="{{ route('logout') }}"  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="material-icons">input</i>Sign Out</a></li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                            </form>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li @if ($page == 'pagedashboard') class="active" @endif>
                        <a href="{{ route('dashboard.index') }}"">
                            <i class="material-icons">home</i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                     <li @if ($page == 'pageclass') class="active" @endif>
                        <a href="{{ route('manageclass.index') }}"">
                            <i class="material-icons">class</i>
                            <span>Classroom</span>
                        </a>
                    </li>
                    <li @if ($page == 'pageteacher') class="active" @endif>
                        <a href="{{ route('manageteacher.index') }}"">
                            <i class="material-icons">assignment</i>
                            <span>Teacher</span>
                        </a>
                    </li>
                    <li @if ($page == 'pagestudent') class="active" @endif>
                        <a href="{{ route('managestudent.index') }}"">
                            <i class="material-icons">person</i>
                            <span>Student</span>
                        </a>
                    </li>
                    <li @if ($page == 'pagelist') class="active" @endif>
                        <a href="{{ route('managelist.index') }}"">
                            <i class="material-icons">view_list</i>
                            <span>Class List</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2019 <a href="#">SchoolAdminStaff - Test School</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 0.0.1
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
</section>