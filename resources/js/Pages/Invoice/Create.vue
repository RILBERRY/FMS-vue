<script setup>
import { ref } from "vue";
import MainLayout from "@/Layouts/MainLayout.vue";
import DefaultButton from "@/Components/DefaultButton.vue";
import NavLink from "@/Components/NavLink.vue";
import { Head } from "@inertiajs/inertia-vue3";

const showingCustomerInfo = ref(true);
const showingSalesDetails = ref(true);
const showingPaymentDetails = ref(true);
</script>

<template>
    <Head title="Dashboard" />

    <MainLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Create Invoices
            </h2>
        </template>

        <form action="/invoice" class=" bg-gray-100">
            <div class="max-w-7xl m-auto bg-white flex flex-col rounded-xl mt-5">
                <div class="w-full flex justify-between">
                    <NavLink class="w-fit" :href="route('invoice.index')">
                        <DefaultButton class="text-gray-800 underline hover:text-gray-600">
                            Back
                        </DefaultButton>
                    </NavLink>
                    <div class="flex justify-between space-x-1  p-2">
                        <button class="p-2 w-40 my-4 bg-green-600 text-white border-none rounded-lg" type="submit">Save</button>
                    </div>
                </div>
            </div>

            <div class="max-w-7xl m-auto bg-white flex flex-col space-y-2 rounded-xl mt-6">
                <div class="w-full p-5">
                    <h3 class=" font-semibold text-xl cursor-pointer " @click="showingCustomerInfo = !showingCustomerInfo" >Customer Information</h3>
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
                    <h3 class=" font-semibold text-xl cursor-pointer " @click="showingSalesDetails = !showingSalesDetails" >Sales Details</h3>
                    <div class=" flex flex-col p-2 transition-all duration-500 ease-out overflow-hidden" :class="{' h-[25rem] md:h-[25rem]':showingSalesDetails, 'h-0': !showingSalesDetails}">
                        <div class="flex justify-between space-x-1 w-full p-2">
                            <label class="w-6/12" for="">Product Type</label>
                            <label class=" w-3/12 text-center" for="">QTY</label>
                            <label class="w-3/12 text-center" for="">Rate</label>
                            <label class="w-3/12 text-center hidden md:block" for="">Amount</label>
                        </div>
                        <div class="flex justify-between space-x-1 w-full p-2">
                            <select name="" id="" class="w-6/12 rounded-lg ">
                                <option value="">Diesel</option>
                                <option value="">Petrol</option>
                                <option value="">Remula</option>
                            </select>
                            <input class=" w-3/12 text-center rounded-lg" type="number" name="customer_contact" >
                            <input class=" w-3/12 text-center rounded-lg" type="number" step=".01" name="customer_contact" >
                            <input class=" w-3/12 text-center rounded-lg hidden md:block" type="number" step=".01" name="customer_contact" >
                        </div>
                        <div class="flex justify-between space-x-1 w-full p-2">
                            <select name="" id="" class="w-6/12 rounded-lg ">
                                <option value="">Diesel</option>
                                <option value="">Petrol</option>
                                <option value="">Remula</option>
                            </select>
                            <input class=" w-3/12 text-center rounded-lg" type="number" name="customer_contact" >
                            <input class=" w-3/12 text-center rounded-lg" type="number" step=".01" name="customer_contact" >
                            <input class=" w-3/12 text-center rounded-lg hidden md:block" type="number" step=".01" name="customer_contact" >
                        </div>
                        <div class="flex justify-between space-x-1 w-full p-2">
                            <select name="" id="" class="w-6/12 rounded-lg ">
                                <option value="">Diesel</option>
                                <option value="">Petrol</option>
                                <option value="">Remula</option>
                            </select>
                            <input class=" w-3/12 text-center rounded-lg" type="number" name="customer_contact" >
                            <input class=" w-3/12 text-center rounded-lg" type="number" step=".01" name="customer_contact" >
                            <input class=" w-3/12 text-center rounded-lg hidden md:block" type="number" step=".01" name="customer_contact" >
                        </div>
                        <div class="flex justify-between space-x-1 w-full p-2">
                            <select name="" id="" class="w-6/12 rounded-lg ">
                                <option value="">Diesel</option>
                                <option value="">Petrol</option>
                                <option value="">Remula</option>
                            </select>
                            <input class=" w-3/12 text-center rounded-lg" type="text" name="customer_contact" >
                            <input class=" w-3/12 text-center rounded-lg" type="text" name="customer_contact" >
                            <input class=" w-3/12 text-center rounded-lg hidden md:block" type="text" name="customer_contact" >
                        </div>
                        <div class="flex justify-between space-x-1 w-full p-2">
                            <button class="p-2 my-4 bg-blue-500 text-white border-none rounded-lg">+ New product</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="max-w-7xl m-auto bg-white flex flex-col space-y-2 rounded-xl mt-6">
                <div class="w-full p-5">
                    <h3 class=" font-semibold text-xl cursor-pointer " @click="showingPaymentDetails = !showingPaymentDetails" >Payment Details</h3>
                    <div class=" flex flex-wrap p-2 transition-all duration-500 ease-out overflow-hidden" :class="{' h-[28rem] md:h-[17rem]':showingPaymentDetails, 'h-0': !showingPaymentDetails}">
                        <div class="flex flex-col w-full md:w-2/4 p-2">
                            <label class="w-full" for="">Payment Status</label>
                            <select name="" id="" class="w-full rounded-lg ">
                                <option value="">Paid</option>
                                <option value="">Credit</option>
                                <option value="">Remula</option>
                            </select>
                        </div>
                        <div class="flex flex-col w-full md:w-2/4 p-2">
                            <label class="w-full" for="">Currency</label>
                            <select name="" id="" class="w-full rounded-lg ">
                                <option value="">Paid</option>
                                <option value="">Credit</option>
                                <option value="">Remula</option>
                            </select>
                        </div>
                        <div class="flex flex-col w-full md:w-2/4 p-2">
                            <label class="w-full" for="">Methode Fund</label>
                            <select name="" id="" class="w-full rounded-lg ">
                                <option value="">Paid</option>
                                <option value="">Credit</option>
                                <option value="">Remula</option>
                            </select>
                        </div>
                        <div class="flex flex-col w-full md:w-2/4 p-2">
                            <label class="w-full" for="">Fund</label>
                            <select name="" id="" class="w-full rounded-lg ">
                                <option value="">Paid</option>
                                <option value="">Credit</option>
                                <option value="">Remula</option>
                            </select>
                        </div>
                        <div class="flex flex-col w-full md:w-2/4 p-2">
                            <label class="flex-1" for="">Ref Number</label>
                            <input class="flex-1 rounded-lg" type="text" name="customer_contact" placeholder="Customer Contact">
                        </div>
                    </div>
                </div>
            </div>
        </form>
        
        
    </MainLayout>
</template>
