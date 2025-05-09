<template>
    <div class="container mx-auto px-4 py-4 lg:w-3/4 lg:py-10">
        <iframe
          :src="`https://www.youtube.com/embed/${videoId}`"
          frameborder="0"
          allow="accelerometer; autoplay; encrypted-media; gyroscope; encrypted-media; picture-in-picture"
          allowfullscreen="allowfullscreen"
          loading="lazy"
          title="AQUA 100% Murni, Pilihan Timnas Indonesia"
          class="w-full bg-black aspect-video">
        </iframe>
    </div>
</template>

<script setup>
defineProps({
    videoId: {
        type: String,
        required: true,
    },
})
</script>

<style scoped>
.container {
    margin-left: auto;
    margin-right: auto;
    width: 100%;
}
@media (min-width: 640px) {
    .container {
        max-width: 640px;
    }
}
@media (min-width: 768px) {
    .container {
        max-width: 768px;
    }
}
@media (min-width: 1024px) {
    .container {
        max-width: 1024px;
    }
}
@media (min-width: 1280px) {
    .container {
        max-width: 1280px;
    }
}
</style>