<template>
  <div class="login">
    
    <div class="card shadow rounded max-w-max pb-5">
      <div class="px-5 py-2 border-b">
        <h2 class="text-xl font-medium">Login</h2>
      </div>

      <form @click.prevent="login(form)">
        <div class="text-sm p-5 flex flex-col gap-5">
          <div>
            <input v-model="form.email"
            type="email" placeholder="E-mail" class="border-2 border-blue-400 focus:border-blue-700 focus:outline-none px-2 py-1 rounded">
          </div>

          <div>
            <input v-model="form.password"
            type="password" placeholder="password" class="border-2 border-blue-400 focus:border-blue-700 focus:outline-none px-2 py-1 rounded">
          </div>

          <button
          class="px-5 py-1 bg-blue-700 text-white rounded shadow max-w-max hover:opacity-90">Login</button>

          <p class="text-xs">{{ form }}</p>
        </div>
      </form>
    </div>
  </div>
</template>

<script setup>
  import { ref } from 'vue'
  import { useAuthStore } from '../composables/authStore'

  const { login } = useAuthStore()

  const form = ref({
    email: 'robin@exe.com',
    password: 'carbon123',
  })


</script>