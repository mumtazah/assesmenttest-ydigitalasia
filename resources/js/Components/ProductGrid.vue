<template>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-6 p-6">
      <template v-if="products.length">
        <div
          v-for="product in products"
          :key="product.id"
          class="bg-white rounded-2xl shadow hover:shadow-xl p-4 transition duration-300"
        >
          <img src="" alt="Product" class="w-full h-40 object-contain mb-4" />
          <h3 class="text-lg font-semibold">{{ product.name }}</h3>
          <p class="text-sm text-gray-500">No description yet</p>
          <p class="text-blue-600 font-bold mt-2">Rp {{ product.price }}</p>
        </div>
      </template>
  
      <div v-else class="col-span-full text-center text-gray-500">
        Loading products...
      </div>
    </div>
</template>  
  
<script setup>
  import { gql, useQuery } from '@apollo/client'
  
  const GET_PRODUCTS = gql`
    query {
      products {
        id
        name
        price
      }
    }
  `
  
  const { loading, error, result } = useQuery(GET_PRODUCTS)
  
  const products = computed(() => result.value?.products || [])
</script>