<template>
    <div>
      <nav class="bg-gray-800 text-white p-4">
        <ul>
          <li><router-link to="/cms/articles">Articles</router-link></li>
          <li><router-link to="/cms/products">Products</router-link></li>
          <li><router-link to="/cms/banners">Banners</router-link></li>
          <li><router-link to="/cms/youtube-links">Youtube Links</router-link></li>
        </ul>
      </nav>
  
      <main class="p-6">
        <router-view />
      </main>
    </div>
</template>
  
<script>
  export default {
    name: 'Layout'
  }
</script>
  