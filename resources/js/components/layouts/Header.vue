<template>
<div>
    <div class="navbar-bg"></div>
    <navbar-component></navbar-component>
    <div class="main-sidebar">
      <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
          <a href="index.html">Stisla</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
          <a href="index.html">St</a>
        </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
              <ul class="dropdown-menu">
                    <router-link v-bind:to="{name: 'Home'}" class="nav-link">Home</router-link>
                    <router-link v-bind:to="{name: 'About'}" class="nav-link">About</router-link>
                    <router-link v-bind:to="{name: 'User'}" class="nav-link">Users</router-link>
              </ul>
            </li>
          </ul>
          <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="#" class="btn btn-primary btn-lg btn-block btn-icon-split">
              <i class="fas fa-rocket"></i> Back to Home
            </a>
          </div>
        </aside>
      </div>
</div>
</template>

<script>

</script>
