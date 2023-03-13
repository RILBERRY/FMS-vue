<script setup>
import { onMounted, ref } from 'vue';
import MainLayout from '@/Layouts/MainLayout.vue';
import DefaultButton from '@/Components/DefaultButton.vue';
import TableRow from '@/Components/TableRow.vue';
import Filter from '@/Components/Filter.vue';
import NavLink from '@/Components/NavLink.vue';
import { Head } from '@inertiajs/inertia-vue3';


const showingFilterParams = ref(false);
const showingSearchBox = ref(false);

const props = defineProps({
  invoices: Object
});

const formatter = new Intl.NumberFormat('en-US', {
    style: 'currency',
    currency: 'MVR',
});
</script>

<template>
    <Head title="Dashboard" />

    <MainLayout >
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Invoices
            </h2>
        </template>
        <div class="max-w-7xl m-auto p-5 bg-white flex flex-col space-y-2  rounded-xl mt-5" >
            <div class="w-100 flex justify-between">
                <NavLink class="w-fit" :href="route('invoice.create')"  @click="isLoading = 'true'" >
                    <DefaultButton class=" bg-blue-500 hover:bg-blue-700 before:text-xl before:font-semibold before:px-2 before:content-['+']">
                        Invoice
                    </DefaultButton>
                </NavLink>
            </div>
            <div class="w-100 flex justify-between">
                <div class="flex ">
                    <!-- <component :is"link.url ? 'Link' : 'span'" 
                    v-for="link in invoices.links" 
                    :key="link.id" :href="link.url"
                     v-html="link.label" /> -->
                    <!-- <button><img src="/icon/arrow_back.svg" width="20" height="20" alt="" srcset=""></button>
                    <div>1 / 12</div>
                    <button><img src="/icon/arrow_forward.svg" width="20" height="20" alt="" srcset=""></button> -->
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
                <p class=" w-2/6">Invoice No</p>
                <p class=" w-2/6 text-center">Bill No</p>
                <p class=" w-3/6">Custom Name</p>
                <p class=" w-2/6 text-center">Diesel</p>
                <p class=" w-2/6 text-center">Petrol</p>
                <p class=" w-2/6 text-center">Remula</p>
                <p class=" w-2/6 text-center">Total</p>
                <p class=" w-1/6 text-right">Status</p>
            </div>
            {{ $page.invoices }}
            <div class=" flex flex-col space-y-2 h-[75vh] md:h-[80vh] my-20 overflow-y-scroll scrollbar-hide ">
                <NavLink :href="route('dashboard')" class="p-0 mt-0"  v-for="invoice in invoices.data" :key="invoice.id">
                    <TableRow class=" text-gray-900">
                        <template #row-data >
                            <p class="md:w-2/6 before:text-gray-400 beforetext-xs before:md:hidden before:pr-2  before:content-['Date']"> {{invoice.date}} </p>
                            <p class="md:w-2/6 before:text-gray-400 beforetext-xs before:md:hidden before:pr-2 before:content-['Invoice-No']">  {{invoice.inv_no}} </p>
                            <p class="md:w-2/6 md:text-center text-left before:text-gray-400 beforetext-xs before:md:hidden before:pr-2 before:content-['Bill-No']"> INV {{invoice.billno}}</p>
                            <p class="md:w-3/6 before:text-gray-400 beforetext-xs before:md:hidden before:pr-2 before:content-['Customer-Name']">  {{invoice.customer_info.c_name}}</p>
                            <div class=" md:w-2/6  flex justify-end md:justify-center  space-x-2">
                                <p class="before:text-gray-400 beforetext-xs before:md:hidden before:pr-2 before:content-['Diesel']"> {{invoice.transactions.d_qty}} </p>
                                <p class="before:text-gray-400 beforetext-xs before:pr-2 before:content-['|']"> {{invoice.transactions.d_rate}} </p>
                            </div>
                            <div  class=" md:w-2/6  flex justify-end md:justify-center  space-x-2">
                                <p class="before:text-gray-400 beforetext-xs before:md:hidden before:pr-2 before:content-['Petrol']"> {{invoice.transactions.p_qty}} </p>
                                <p class="before:text-gray-400 beforetext-xs  before:pr-2 before:content-['|']">  {{invoice.transactions.p_rate}} </p>
                            </div>
                            <div class=" md:w-2/6  flex justify-end md:justify-center  space-x-2">
                                <p class="before:text-gray-400 beforetext-xs before:md:hidden before:pr-2 before:content-['Remula']"> {{invoice.transactions.r_qty}} </p>
                                <p class="before:text-gray-400 beforetext-xs before:pr-2 before:content-['|']">  {{invoice.transactions.r_rate}} </p>
                            </div>
                            <p class=" md:w-2/6 text-center p-2 md:p-0 text-lg md:text-sm text-green-700"><strong class="text-gray-400 text-xs p-1 md:hidden">Total</strong> {{ formatter.format(invoice.inv_total)}}</p>
                            <p class=" md:w-1/6 text-center md:text-right text-green-700"><strong class="text-gray-400 text-xs p-1 md:hidden">Status</strong> PAID</p>
                        </template>
                    </TableRow>
                </NavLink>
                <label >test</label>

                <h3 class="text-center">End</h3>
            </div>
        </div>
    </MainLayout>
</template>
