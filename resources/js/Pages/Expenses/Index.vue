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
    <Head title="Expenses" />

    <MainLayout >
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Expenses
            </h2>
        </template>
        <div class="max-w-7xl m-auto p-5 bg-white flex flex-col space-y-2  rounded-xl mt-5" >
            <div class="w-100 flex justify-between">
                <NavLink class="w-fit" :href="route('invoice.create')"  @click="isLoading = 'true'" >
                    <DefaultButton class=" bg-blue-500 hover:bg-blue-700 before:text-xl before:font-semibold before:px-2 before:content-['+']">
                        Expenses
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
                <p class=" w-2/6">Supplyer Name</p>
                <p class=" w-2/6">Bill No</p>
                <p class=" w-3/6">Description</p>
                <p class=" w-2/6 text-center">Amount</p>
                <p class=" w-2/6 text-center">GST</p>
                <p class=" w-1/6 text-right">Status</p>
            </div>
            <div class=" flex flex-col space-y-2 h-[75vh] md:h-[80vh] my-20 overflow-y-scroll scrollbar-hide ">
                <NavLink :href="route('dashboard')" class="p-0 mt-0" >
                    <TableRow class=" text-gray-900">
                        <template #row-data >
                            <p class="md:w-2/6 before:text-gray-400 beforetext-xs before:md:hidden before:content-['Date']"> 2022-12-12</p>
                            <p class="md:w-2/6 before:text-gray-400 beforetext-xs before:md:hidden before:content-['Supplyer-Name']"> Supplyer</p>
                            <p class="md:w-2/6 before:text-gray-400 beforetext-xs before:md:hidden before:content-['Bill-No']"> 1212</p>
                            <p class="md:w-3/6 before:text-gray-400 beforetext-xs before:md:hidden before:content-['Description']"> this is Description this is Description this is Description this is Description</p>
                            <div class=" md:w-2/6  flex justify-end md:justify-center  space-x-2">
                                <p class="before:text-gray-400 beforetext-xs before:md:hidden before:content-['Total-Amount']"> 2,350</p>
                            </div>
                            <div class=" md:w-2/6  flex justify-end md:justify-center  space-x-2">
                                <p class="before:text-gray-400 beforetext-xs before:md:hidden before:content-['GST']"> 350</p>
                            </div>
                            <p class=" md:w-1/6 text-center md:text-right text-green-700"><strong class="text-gray-400 text-xs p-1 md:hidden">Status</strong> PAID</p>
                        </template>
                    </TableRow>
                </NavLink>
             
                
                <h3 class="text-center">End</h3>
            </div>
        </div>
    </MainLayout>
</template>
