<script setup>
import { computed } from 'vue';
import { Link } from '@inertiajs/inertia-vue3';

const props = defineProps(['href']);

</script>

<template>
    <Link :href="href" class="nline-flex items-center p-2 mt-4 w-full text-sm font-medium leading-5  text-white rounded-lg hover:bg-white hover:text-gray-900 transition-all duration-300">
        <slot />
    </Link>
</template>
