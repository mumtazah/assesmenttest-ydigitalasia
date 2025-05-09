<template>
  <div :key="sliderKey" ref="sliderRef" class="keen-slider w-full overflow-hidden relative">
    <div v-for="(banner, i) in selectedBanners" :key="i" class="keen-slider__slide w-full">
      <img :src="banner" alt="" class="w-full object-cover" />
    </div>

    <!-- Arrows -->
    <button class="custom-arrow left" @click="sliderInstance?.prev()">
      <img :src="'/assets/icon-arrow-light-blue.svg'" class="arrow-icon rotate-180" />
    </button>
    <button class="custom-arrow right" @click="sliderInstance?.next()">
      <img :src="'/assets/icon-arrow-light-blue.svg'" class="arrow-icon" />
    </button>
  </div>
</template>

<script setup>
import { ref, onMounted, onUnmounted, watch, nextTick } from 'vue'
import { useKeenSlider } from 'keen-slider/vue'

const bannersDesktop = [
  '/assets/banner-pilihan-timnas-indonesia-home-lg-20250130030030.jpg',
  '/assets/20231211162531_original.jpg',
  '/assets/20240505154827_original.jpg',
  '/assets/20231212085843_original.jpg'
]
const bannersMobile = [
  '/assets/banner-pilihan-timnas-indonesia-home-sm-20250128141016.jpg',
  '/assets/20231211162536_original.jpg',
  '/assets/20240505154854_original.jpg',
  '/assets/20231212100009_original.jpg'
]

const selectedBanners = ref([])
const sliderKey = ref(0)
const sliderRef = ref()

const [sliderInstance] = useKeenSlider(sliderRef, {
  loop: true,
  slides: { perView: 1, spacing: 0 }
})

const updateBanners = () => {
  selectedBanners.value = window.innerWidth <= 768 ? bannersMobile : bannersDesktop
}

watch(selectedBanners, () => {
  sliderKey.value++
})

onMounted(() => {
  updateBanners()
  window.addEventListener('resize', updateBanners)
})

onUnmounted(() => {
  window.removeEventListener('resize', updateBanners)
})
</script>

<style scoped>
.keen-slider__slide {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 300px;
}

.custom-arrow {
  background: transparent;
  border: none;
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  z-index: 10;
  cursor: pointer;
  padding: 10px;
}

.custom-arrow.left {
  left: 10px;
}

.custom-arrow.right {
  right: 10px;
}

.arrow-icon {
  width: 24px;
  height: auto;
}

.arrow-icon.rotate-180 {
  transform: rotate(180deg);
}
</style>
