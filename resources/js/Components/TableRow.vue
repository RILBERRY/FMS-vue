<script setup>
import { computed } from 'vue';

</script>

<template>
   <div class="w-full h-50 ">
      <div class=" w-full bg-gray-200 p-2 rounded-md text-sm md:flex md:space-x-2 justify-between  hover:bg-blue-500 hover:text-white">
         <slot name="row-data"></slot>
         
      </div>
   </div>
      
</template>
