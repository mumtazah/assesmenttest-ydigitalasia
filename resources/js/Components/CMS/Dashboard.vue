<template>
    <div class="text-center">
      <h1 class="text-2xl font-semibold">Welcome to CMS</h1>
      <p>Choose a module to manage content:</p>
      <ul class="mt-4">
        <li><router-link to="/cms/articles">Manage Articles</router-link></li>
        <li><router-link to="/cms/products">Manage Products</router-link></li>
        <li><router-link to="/cms/banners">Manage Banners</router-link></li>
        <li><router-link to="/cms/youtube-links">Manage Youtube Links</router-link></li>
      </ul>
    </div>
</template>
  
<script>
  export default {
    name: 'Dashboard'
  }
</script>
  