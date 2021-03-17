<div class="collapse navbar-collapse" id="sidenav-collapse-main">
  <!-- Nav items -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="examples/dashboard.html">
        <i class="ni ni-tv-2 text-primary"></i>
        <span class="nav-link-text">Dashboard</span>
      </a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ (request()->is('clientes*')) ? 'active' : '' }}" href="{{ route('clientes.index') }}">
          <i class="fa fa-users text-blue"></i>
          <span class="nav-link-text">Clientes</span>
        </a>
      </li>
    <li class="nav-item">
      <a class="nav-link {{ (request()->is('user*')) ? 'active' : '' }}" href="{{ route('user.index') }}">
        <i class="fa fa-user-circle text-orange"></i>
        <span class="nav-link-text">Usuarios</span>
      </a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ (request()->is('medicos*')) ? 'active' : '' }}" href="{{ route('medicos.index') }}">
        <i class="fa fa-user-md text-green"></i>
        <span class="nav-link-text">Medicos</span>
      </a>
    </li>

    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
        aria-expanded="false">
        <i class="ni ni-calendar-grid-58 text-primary"></i>
        <span class="nav-link-text">Citas</span>
      </a>
      <div class="dropdown-menu">
        <a href="{{ route('citas.index') }}" class="nav-link">
          <i class="ni ni-time-alarm text-orange"></i>
          <span class="nav-link-text">Programar Cita</span>
        </a>
        <a href="{{ route('citas.index') }}" class="nav-link">
          <i class="ni ni-collection text-green"></i>
          <span class="nav-link-text">Consultar Citas</span>
        </a>
      </div>
    </li>

  </ul>
  <!-- Divider -->
  <hr class="my-3">
  <!-- Heading -->
  <h6 class="navbar-heading p-0 text-muted">
    <span class="docs-normal">Documentation</span>
  </h6>
  <!-- Navigation -->
  <ul class="navbar-nav mb-md-3">
    <li class="nav-item">
      <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/getting-started/overview.html"
        target="_blank">
        <i class="ni ni-spaceship"></i>
        <span class="nav-link-text">Getting started</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/foundation/colors.html"
        target="_blank">
        <i class="ni ni-palette"></i>
        <span class="nav-link-text">Foundation</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/components/alerts.html"
        target="_blank">
        <i class="ni ni-ui-04"></i>
        <span class="nav-link-text">Components</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/plugins/charts.html"
        target="_blank">
        <i class="ni ni-chart-pie-35"></i>
        <span class="nav-link-text">Plugins</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link active active-pro" href="examples/upgrade.html">
        <i class="ni ni-send text-dark"></i>
        <span class="nav-link-text">Upgrade to PRO</span>
      </a>
    </li>
  </ul>
</div>
