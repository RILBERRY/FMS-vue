<script setup>
import { ref } from "vue";
import MainLayout from "@/Layouts/MainLayout.vue";
import DefaultButton from "@/Components/DefaultButton.vue";
import NavLink from "@/Components/NavLink.vue";
import { Head } from "@inertiajs/inertia-vue3";

const showingCustomerInfo = ref(true);
const showingSalesDetails = ref(true);
</script>

<template>
    <Head title="Dashboard" />

    <MainLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Create Invoices
            </h2>
        </template>

        <div class="max-w-7xl m-auto bg-white flex flex-col rounded-xl mt-5">
            <div class="w-full flex justify-between">
                <NavLink class="w-fit" :href="route('invoice.index')">
                    <DefaultButton class="text-gray-800 underline hover:text-gray-600">
                        Back
                    </DefaultButton>
                </NavLink>
            </div>
        </div>

        <div class="max-w-7xl m-auto bg-white flex flex-col space-y-2 rounded-xl mt-6">
            <div class="w-full p-5">
                <h3 class=" font-semibold cursor-pointer " @click="showingCustomerInfo = !showingCustomerInfo" >Customer Information</h3>
                <div class=" flex flex-col md:flex-row md:flex-wrap p-2 transition-all duration-500 ease-out overflow-hidden" :class="{' h-[31rem] md:h-64':showingCustomerInfo, 'h-0': !showingCustomerInfo}">
                    <div class="flex flex-col md:w-2/4 md:p-2">
                        <div class="flex flex-col p-2">
                            <label class="flex-1" for="">Customer Name</label>
                            <input class="flex-1 rounded-lg" type="text" name="customer_contact" placeholder="Customer Contact">
                        </div>
                        <div class="flex flex-col p-2">
                            <label class="flex-1" for="">Customer Contact</label>
                            <input class="flex-1 rounded-lg" type="text" name="customer_contact" placeholder="Customer Contact">
                        </div>
                        <div class="flex flex-col p-2">
                            <label class="flex-1" for="">Bill no</label>
                            <input class="flex-1 rounded-lg" type="text" name="customer_contact" placeholder="Customer Contact">
                        </div>
                    </div>
                    <div class="flex flex-col md:w-2/4 md:p-2">
                        <div class="flex flex-col p-2">
                            <label class="flex-1" for="">Date</label>
                            <input class="flex-1 rounded-lg" type="text" name="customer_contact" placeholder="Customer Contact">
                        </div>
                        <div class="flex flex-col p-2">
                            <label class="flex-1" for="">Invoice</label>
                            <input class="flex-1 rounded-lg" type="text" name="customer_contact" placeholder="Customer Contact">
                        </div>
                        <div class="flex flex-col p-2">
                            <label class="flex-1" for="">Invoice No</label>
                            <input class="flex-1 rounded-lg" type="text" name="customer_contact" placeholder="Customer Contact">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="max-w-7xl m-auto bg-white flex flex-col space-y-2 rounded-xl mt-6">
            <div class="w-full p-5">
                <h3 class=" font-semibold cursor-pointer " @click="showingSalesDetails = !showingSalesDetails" >Sales Details</h3>
                <div class=" flex flex-col md:flex-row md:flex-wrap p-2 transition-all duration-500 ease-out overflow-hidden" :class="{' h-[31rem] md:h-64':showingSalesDetails, 'h-0': !showingSalesDetails}">
                    <div class="flex flex-col md:w-2/4 md:p-2">
                        <div class="flex w-3/4 md:p-2">
                            <div class="flex flex-col p-2">
                                <label class="flex-1" for="">Customer Name</label>
                                <input class="flex-1 rounded-lg" type="text" name="customer_contact" placeholder="Customer Contact">
                            </div>
                            <div class="flex flex-col p-2">
                                <label class="flex-1" for="">Customer Contact</label>
                                <input class="flex-1 rounded-lg" type="text" name="customer_contact" placeholder="Customer Contact">
                            </div>
                        </div>     
                        <div class="flex w-2/4 md:p-2">
                            <div class="flex flex-col p-2">
                                <label class="flex-1" for="">Customer Name</label>
                                <input class="flex-1 rounded-lg" type="text" name="customer_contact" placeholder="Customer Contact">
                            </div>
                            <div class="flex flex-col p-2">
                                <label class="flex-1" for="">Customer Contact</label>
                                <input class="flex-1 rounded-lg" type="text" name="customer_contact" placeholder="Customer Contact">
                            </div>
                        </div>     
                    </div>

                </div>
            </div>
        </div>
    </MainLayout>
</template>
