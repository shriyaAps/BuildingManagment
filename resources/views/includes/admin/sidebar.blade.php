<div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
  <ul class="sidebar-menu">
    <li class="{{ Request::is('dashboard') ? 'active' : '' }}" >
       <a class="" href="{{ url('/') }}/dashboard">
         <span>{{ __('messages.dashboard') }}</span>
       </a>
     </li>
      <li class="{{ Request::is('users') ? 'active' : '' }}">
       <a  href="{{ url('/') }}/users">
         <span>{{ __('messages.flats') }}</span>
       </a>
     </li>
     <li class="{{ Request::is('maintenanceMaster') ? 'active' : '' }}">
       <a class="" href="{{ url('/') }}/maintenanceMaster">
         <span>{{ __('messages.maintenance_master') }}</span>
       </a>
     </li>
     <li class="{{ Request::is('flatType') ? 'active' : '' }}">     
       <a class="" href="{{ url('/') }}/flatType">
         <span>{{ __('messages.flat_type') }}</span>
       </a>
     </li>
      <li class="{{ Request::is('monthViewList') ? 'active' : '' }}">
       <a href="{{ url('/') }}/monthViewList">
         <span>{{ __('messages.maintenance_transaction') }}</span>
       </a>
     </li>
      <li class="{{ Request::is('monthlyExpences') ? 'active' : '' }}">
       <a class="" href="{{ url('/') }}/monthlyExpences">
         <span>{{ __('messages.monthly_expenses') }}</span>
       </a>
     </li>
    </ul>
</div>
