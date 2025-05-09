<template>
    <nav class="navbar">
        <ul class="nav-list">
            <!-- Left Menus -->
            <li v-for="(menu, i) in leftMenus" :key="'left-' + i" class="nav-item">
                <a href="/" class="nav-menu-link">{{ menu.name }}</a>
                <button aria-label="Buka submenu" class="nav-menu-expand"><img :src="'/assets/icon-arrow-light-blue.svg'" loading="lazy" alt="Icon panah"></button>
                <ul v-if="menu.submenus" class="submenu">
                    <li v-for="(sub, j) in menu.submenus" :key="j" class="nav-submenu-item"><a href="/" class="nav-submenu-link">{{ sub }}</a></li>
                </ul>
            </li>
      
            <!-- Center Icon -->
            <li class="nav-logo">
                <a href="/" aria-current="page">
                    <img :src="'/assets/aqua-logo_qe0_EKi8L.jpg'" alt="Logo AQUA">
                </a>
            </li>
      
            <!-- Right Menus -->
            <li v-for="(menu, i) in rightMenus" :key="'left-' + i" class="nav-item">
                <a href="/" class="nav-menu-link">{{ menu.name }}</a>
                <button aria-label="Buka submenu" class="nav-menu-expand"><img :src="'/assets/icon-arrow-light-blue.svg'" loading="lazy" alt="Icon panah"></button>
                <ul v-if="menu.submenus" class="submenu">
                    <li v-for="(sub, j) in menu.submenus" :key="j" class="nav-submenu-item"><a href="/" class="nav-submenu-link">{{ sub }}</a></li>
                </ul>
            </li>
        </ul>
    </nav>
</template>
  
<script setup>
  const leftMenus = [
    { name: 'Hanya Aqua 100% Murni'},
    { name: 'Aqua x Timnas Indonesia'},
    { name: 'Produk Aqua', submenus: ['Aqua Botol', 'Aqua Galon', 'Aqua Reflections', 'Aqua Cube', 'Aqua Life', 'Aqua 10 Liter'] },
  ]
  
  const rightMenus = [
    { name: 'Aqua Home Service', submenus: ['Temukan Aqua'] },
    { name: 'Ramadan'},
    { name: 'Artikel', submenus: ['100% Petualangan Indonesia', 'Aqua Galon', 'Bijak Berplastik', 'Hidup Sehat', 'Kemurnian Aqua', 'Tips Ramadan'] },
  ]
</script>

<style scoped>
.navbar {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  z-index: 1000;
  background-color: white;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}
.nav-list {
  display: flex;
  justify-content: center;
  align-items: stretch;
  list-style: none;
  margin: 0;
  padding: 0;
  flex-wrap: wrap;
}

.nav-item{
    position: relative;
    flex: 0 0 120px;
    text-align: center;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    word-wrap: break-word;
    padding: 0;
    box-sizing: border-box;
}

.nav-logo {
  flex: 0 0 120px;
  text-align: center;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  word-wrap: break-word;
  padding: 0;
  box-sizing: border-box;
}

.nav-item a {
  color: rgb(0 81 187 / var(--tw-text-opacity));
  text-decoration: none;
  line-height: 1.2;
}

.submenu {
  display: none;
  position: absolute;
  background-color: white;
  list-style: none;
  padding: 0.25rem;
  top: 100%;
  left: 50%;
  transform: translateX(-50%);
  z-index: 10;
}

.nav-item:hover .submenu {
  display: block;
}

.submenu li {
  color: rgb(0 81 187 / var(--tw-text-opacity));
  padding: 0.5rem;
  white-space: nowrap;
}

.nav-logo a img {
  height: 100px;
  width: auto;
}

/* Responsive */
@media (max-width: 768px) {
  .nav-list {
    flex-direction: column;
    align-items: center;
  }

  .nav-item,
  .nav-logo {
    flex: 0 0 auto;
    width: 100%;
    max-width: 200px;
  }
}
</style>
