<script setup>
import { computed } from 'vue';

</script>

<template>
    <div class="max-w-lg sm:px-6 lg:px-8 m-2">
        <div class="bg-white overflow-hidden shadow-lg rounded-lg flex justify-between">
            <slot name="colorPlate" class=" flex-none"></slot>
            <div class="p-6 text-gray-900 flex flex-col flex-auto text-center">
                <h3 class=" text-sm text-gray-500">
                    <slot name="type"></slot>
                </h3>
                <h3 class=" text-lg font-semibold text-center">
                    <slot  name="amount"></slot>
                </h3>
                <span class=" text-[12px] text-gray-500">
                    <slot name="month"></slot>
                </span> 
                
            </div>  
        </div>
    </div>

</template>
