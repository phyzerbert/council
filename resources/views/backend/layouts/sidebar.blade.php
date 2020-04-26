@php
    $page = config('site.page');
@endphp
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item @if($page == 'dashboard') active @endif">
            <a class="nav-link" href="{{route('dashboard')}}">
                <i class="ti-home menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item @if($page == 'employee') active @endif">
            <a class="nav-link" href="{{route('employee.index')}}">
                <i class="ti-user menu-icon"></i>
                <span class="menu-title">Employee</span>
            </a>
        </li>
        <li class="nav-item @if($page == 'timesheet') active @endif">
            <a class="nav-link" href="{{route('timesheet.index')}}">
                <i class="ti-layout-grid2 menu-icon"></i>
                <span class="menu-title">Timesheet</span>
            </a>
        </li>
        <li class="nav-item @if($page == 'daily_report') active @endif">
            <a class="nav-link" href="index.html">
                <i class="ti-file menu-icon"></i>
                <span class="menu-title">Daily Report</span>
            </a>
        </li>
        {{-- <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#editors" aria-expanded="false" aria-controls="editors">
                <i class="ti-eraser menu-icon"></i>
                <span class="menu-title">Editors</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="editors">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="pages/forms/text_editor.html">Text editors</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/forms/code_editor.html">Code editors</a></li>
                </ul>
            </div>
        </li> --}}
    </ul>
</nav>