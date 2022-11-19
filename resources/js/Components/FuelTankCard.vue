<script setup>
import { computed } from 'vue';

</script>

<template>
    <div class="max-w-sm p-5 m-2 my-5 overflow-hidden shadow-xl rounded-xl text-white flex flex-col h-60 text-center justify-end before:relative  before:left-[-90%]  before:w-[900px] before:flex-none before:h-[1000px] before:rounded-[38%] before:animate-Spinner before:bg-gray-200/90  before:delay-1000">
        <h3 class=" text-sm text-gray-300 ">
            <slot name="type"></slot>
        </h3>
        <h3 class=" text-lg font-semibold">
            <slot name="amount"></slot>
        </h3>
        <span class=" text-[12px] text-gray-300">
            <slot name="month"></slot>
        </span> 
        
    </div>

</template>
