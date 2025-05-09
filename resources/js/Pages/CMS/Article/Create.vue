<template>
    <form @submit.prevent="submit">
      <div class="mb-4">
        <label class="block">Title</label>
        <input v-model="form.title" type="text" class="border p-2 w-full" />
      </div>
  
      <div class="mb-4">
        <label class="block">Image (jpg/png only)</label>
        <input type="file" @change="handleImage" accept="image/jpeg,image/png" />
      </div>
  
      <div class="mb-4">
        <label class="block">Content</label>
        <textarea v-model="form.content" class="border p-2 w-full"></textarea>
      </div>
  
      <button type="submit" class="bg-blue-500 text-white p-2 rounded">Create</button>
    </form>
</template>
  
<script setup>
  import { ref } from 'vue'
  import { useArticle } from '@/api/useArticle'
  
  const { createArticle } = useArticle()
  const title = ref('')
  const content = ref('')
  const image = ref(null)
  
  const handleImageUpload = (event) => {
    image.value = event.target.files[0]
  }
  
  const handleSubmit = async () => {
    try {
      await createArticle({ title: title.value, content: content.value, image: image.value })
      alert('Article created successfully')
      // Optionally redirect
    } catch (e) {
      console.error(e)
      alert('Failed to create article')
    }
  }

</script>
  