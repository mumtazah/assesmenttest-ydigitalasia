<template>
  <section id="home-artikel" class="container px-4 pb-10">
    <h2 class="mb-4 flex items-center justify-center px-16 text-center font-termina-demi text-xl uppercase text-aqua-blue md:mb-9 md:px-0 md:text-3xl">
      Artikel Kebaikan Air
    </h2>
    <div class="relative">
      <div class="keen-wrapper">
        <div class="keen-slider">
          <!-- Static articles -->
          <div class="keen-slider__slide flex items-start justify-center" style="min-width: calc(33.3333% - 10px); max-width: calc(33.3333% - 10px);">
            <div class="relative overflow-hidden rounded-md">
              <img
                :src="'/assets/20240319094933_original.jpg'"
                alt="Aksi Nyata AQUA untuk Palestina atas Tragedi yang Terjadi"
                class="aspect-square w-full"
                loading="lazy"
              />
              <a href="" class="news-link">
                <h3 class="news-title">
                  Aksi Nyata AQUA untuk Palestina atas Tragedi yang Terjadi
                </h3>
                <span class="news-button">
                  Baca artikel
                  <img :src="'/assets/icon-arrow-white.svg'" class="w-3 md:w-4" />
                </span>
              </a>
            </div>
          </div>

          <div class="keen-slider__slide flex items-start justify-center" style="min-width: calc(33.3333% - 10px); max-width: calc(33.3333% - 10px);">
            <div class="relative overflow-hidden rounded-md">
              <img
                :src="'/assets/20240319094933_original.jpg'"
                alt="AQUA Produk Asli indonesia yang Murni, Halal &amp; Aman!"
                class="aspect-square w-full"
                loading="lazy"
              />
              <a href="" class="news-link">
                <h3 class="news-title">
                  AQUA Produk Asli indonesia yang Murni, Halal & Aman!
                </h3>
                <span class="news-button">
                  Baca artikel
                  <img :src="'/assets/icon-arrow-white.svg'" class="w-3 md:w-4" />
                </span>
              </a>
            </div>
          </div>

          <div class="keen-slider__slide flex items-start justify-center" style="min-width: calc(33.3333% - 10px); max-width: calc(33.3333% - 10px);">
            <div class="relative overflow-hidden rounded-md">
              <img
                :src="'/assets/20240319094933_original.jpg'"
                alt="Mengenal Asal Produk AQUA yang 100% Asli Indonesia!"
                class="aspect-square w-full"
                loading="lazy"
              />
              <a href="" class="news-link">
                <h3 class="news-title">
                  Mengenal Asal Produk AQUA yang 100% Asli Indonesia!
                </h3>
                <span class="news-button">
                  Baca artikel
                  <img :src="'/assets/icon-arrow-white.svg'" class="w-3 md:w-4" />
                </span>
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Slider navigation -->
      <button aria-label="Previous slide" class="arrow arrow-left arrow-disabled">
        <img :src="'/assets/icon-arrow-light-blue.svg'" class="left-0 w-full rounded-sm bg-white p-2 lg:hidden lg:p-3" />
      </button>
      <button aria-label="Next slide" class="arrow arrow-right">
        <img :src="'/assets/icon-arrow-light-blue.svg'" class="right-0 w-full rounded-sm bg-white p-2 lg:hidden lg:p-3" />
      </button>

      <!-- Slider dots -->
      <div class="dots">
        <button aria-label="Go to slide 1" class="dot current"></button>
        <button aria-label="Go to slide 2" class="dot"></button>
        <button aria-label="Go to slide 3" class="dot"></button>
      </div>
    </div>
  </section>
</template>

<script setup>
// No need to fetch data; it's static for now.
</script>

<style scoped>
</style>
