<script setup>
import { RouterLink, RouterView } from 'vue-router'
</script>

<template>
  <header class="h-14 shadow rounded">
    
    <div class="max-w-7xl mx-auto h-full flex items-center">
      <nav class="flex items-center gap-5">
        <RouterLink to="/">Home</RouterLink>
        <RouterLink to="/login">Login</RouterLink>
        <RouterLink to="/register">Register</RouterLink>
        <RouterLink to="/dashboard">Dashboard</RouterLink>
      </nav>
    </div>
  </header>

  <div class="main max-w-7xl mx-auto mt-5 rounded">
    
  <RouterView />
  </div>
</template>
