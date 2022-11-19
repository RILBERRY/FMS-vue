<script setup>
import { computed } from 'vue';
import Dropdown from './Dropdown.vue';
import DropdownLink from './DropdownLink.vue';
</script>

<template>
    <div class="w-full transition-all duration-500 ease-out overflow-hidden ">
        <h3 class="text-center text-gray-700" >Filter by:</h3>
        <div class="flex flex-col md:flex-row ">
            <select name="status" class=" text-sm border-solid border-gray-300 w-44 rounded-md m-1 bg-gray-200">
                <option value="">All</option>
                <option value="">Credit</option>
                <option value="">Paid</option>
            </select>
            <input type="date" name="" class=" m-1 w-52 bg-gray-200 text-sm border-solid border-gray-300 rounded-md before:content-['From'] before:pr-2 before:text-xs before:text-gray-400 ">
            <input type="date" name="" class=" m-1 w-52 bg-gray-200 text-sm border-solid border-gray-300 rounded-md before:content-['To'] before:pr-2 before:text-xs before:text-gray-400 " >
        </div>
    </div>
</template>
