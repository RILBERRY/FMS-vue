<script setup>
import { ref } from 'vue';
import MainLayout from '@/Layouts/MainLayout.vue';
import DefaultButton from '@/Components/DefaultButton.vue';
import TableRow from '@/Components/TableRow.vue';
import Filter from '@/Components/Filter.vue';
import NavLink from '@/Components/NavLink.vue';
import { Head } from '@inertiajs/inertia-vue3';

const showingFilterParams = ref(false)
const showingSearchBox = ref(false)
</script>

<template>
    <Head title="Stock Closing" />

    <MainLayout >
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Stock Closing
            </h2>
        </template>
        <div class="max-w-7xl m-auto p-5 bg-white flex flex-col space-y-2  rounded-xl mt-5" >
            <div class="w-100 flex justify-between">
                <NavLink class="w-fit" :href="route('invoice.create')"  @click="isLoading = 'true'" >
                    <DefaultButton class=" bg-blue-500 hover:bg-blue-700 before:text-xl before:font-semibold before:px-2 before:content-['+']">
                        Stock Closing
                    </DefaultButton>
                </NavLink>
            </div>
            <div class="w-100 flex justify-between">
                <div class="flex ">
                    <button><img src="/icon/arrow_back.svg" width="20" height="20" alt="" srcset=""></button>
                    <div>1 / 12</div>
                    <button><img src="/icon/arrow_forward.svg" width="20" height="20" alt="" srcset=""></button>
                </div>
                <div>
                    <button class="p-2 w-10 h-10" @click="showingSearchBox = !showingSearchBox"><img src="/icon/search.svg" alt="" srcset=""></button>
                    <button class="p-2 w-10 h-10" @click="showingFilterParams = !showingFilterParams"><img src="/icon/filter_list.svg" alt="" srcset=""></button>
                </div>
            </div>
            <Filter :class="{' h-44 md:h-20 p-2 ': showingFilterParams, 'h-0 p-0': ! showingFilterParams}" ></Filter>
            <div :class="{' h-12': showingSearchBox, 'h-0 ': ! showingSearchBox}" class="transition-all duration-300 ease-in" >
                <input type="text" name="" placeholder="Search" class=" w-full bg-gray-100 text-sm rounded-md duration-300 border-solid border-gray-300 " :class="{' opacity-100 delay-300': showingSearchBox, ' opacity-0': ! showingSearchBox}">
            </div>

            <div class=" w-full hidden bg-gray-400 p-2 rounded-md space-x-2 md:flex justify-between">
                <p class=" w-2/6">Date</p>
                <p class=" w-2/6">Stock No</p>
                <p class=" w-2/6 text-center">Invoice No</p>
                <p class=" w-2/6 text-center">Delivery Note</p>
                <p class=" w-2/6 text-center">Purchases</p>
                <p class=" w-2/6 text-center">Diesel</p>
                <p class=" w-2/6 text-center">Petrol</p>
                <p class=" w-2/6 text-center">Remula</p>
            </div>
            <div class=" flex flex-col space-y-2 h-[75vh] md:h-[80vh] my-20 overflow-y-scroll scrollbar-hide ">
                <NavLink :href="route('dashboard')" class="p-0 mt-0" >
                    <TableRow class=" text-gray-900">
                        <template #row-data >
                            <p class="md:w-2/6 before:text-gray-400 ml-2 mt-2 before:text-xs before:md:hidden before:content-['Date']"> 2023-02-01</p>
                            <p class="md:w-2/6 before:text-gray-400 before:text-xs before:md:hidden before:content-['Stock-No']"> SC-2023-01221</p>
                            <div class=" md:w-2/6  flex justify-end md:justify-center  space-x-2">
                                <p class="before:text-gray-400 before:text-xs before:md:hidden before:content-['Invoice-No']"> INV 2100</p>
                            </div>
                            <div class=" md:w-2/6  flex justify-end md:justify-center  space-x-2">
                                <p class="before:text-gray-400 before:text-xs before:md:hidden before:content-['Delivery-Note']"> DN 3200</p>
                            </div>
                            <div class=" md:w-2/6  flex justify-end md:justify-center  space-x-2">
                                <p class="before:text-gray-400 before:text-xs before:md:hidden before:content-['Purchases']"> PV 5400</p>
                            </div>
                            <div class=" md:w-2/6  flex justify-end md:justify-center  space-x-2">
                                <p class="before:text-gray-400 before:text-xs before:md:hidden before:content-['Diesel']"> 35,223 Ltr<span class="relative text-green-600 -left-2 -top-3 text-xs">+1,357</span></p>
                            </div>
                            <div class=" md:w-2/6  flex justify-end md:justify-center  space-x-2">
                                <p class="before:text-gray-400 before:text-xs before:md:hidden before:content-['Petrol']"> 350 Ltr<span class="relative text-red-600 -left-2 -top-3 text-xs">-57</span></p>
                            </div>
                            <div class=" md:w-2/6  flex justify-end md:justify-center  space-x-2">
                                <p class="before:text-gray-400 before:text-xs before:md:hidden before:content-['Remula']"> 40 Ltr<span class="relative text-green-600 -left-2 -top-3 text-xs">+57</span></p>
                            </div>
                        </template>
                    </TableRow>
                </NavLink>
             
                
                <h3 class="text-center">End</h3>
            </div>
        </div>
    </MainLayout>
</template>
