<script setup>
import { ref } from 'vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import { Link } from '@inertiajs/inertia-vue3';

const showingNavigationDropdown = ref(false);
const showingSubNavigationTransLinks = ref(false);
const showingSubNavigationSettlLinks = ref(false);
const showingSubNavigationRepoLinks = ref(false);
const isLoading = ref(false);

</script>

<template >
    <div class="w-screen h-screen bg-gray-300/70 z-20 absolute top-0 left-0" :class="{ 'hidden' : !isLoading } ">
        <p class="text-xl font-bold absolute top-2/4 left-2/4 translate-x-2/4 translate-y-2/4 text-white">Loading....</p>
    </div>
    <div class="h-screen w-screen overflow-auto flex ">
        <div :class="{'w-72 ': showingNavigationDropdown, 'w-0': ! showingNavigationDropdown}"  class="flex flex-col flex-none bg-blue-600 transition-all duration-300 ease-in text-white overflow-hidden">
            <h3 class="text-center p-2 font-bold text-2xl shadow-lg w-72">Fuel Management MV</h3>
            <div class=" flex-none w-56 mx-auto pb-10 h-[100vh] overflow-y-auto scrollbar-hide">
                <div class=" text-center my-10 flex flex-col space-y-5">
                    <div class="w-40 h-40 m-auto rounded-[50%] overflow-hidden">
                        <img src="/img/user-img.png" alt="" srcset="">
                    </div>
                    <div>
                        <h3>Ali Rilwan</h3>
                        <h3>Lead Developer</h3>
                    </div>
                    <h3 class="text-xl font-semibold">Guarantee Fuel Pvt Ltd</H3>
                </div>
                <nav class="flex flex-col " >
                    <NavLink class="hover:pl-5" :href="route('dashboard')" @click="isLoading = true" >DASHBOARD</NavLink>
                    <button @click="showingSubNavigationTransLinks = !showingSubNavigationTransLinks" class="inline-flex items-center p-2 mt-4 w-full text-sm font-medium leading-5 text-white rounded-lg hover:bg-white hover:text-gray-900 hover:pl-5 transition-all duration-300 ">TRANSACTION</button>
                    
                    <div  class="flex flex-col ml-5 bg-blue-600 transition-all duration-500 ease-out text-white overflow-hidden " :class="{'h-56 opacity-100': showingSubNavigationTransLinks, ' h-0 opacity-20 ': ! showingSubNavigationTransLinks}" >
                        <NavLink class="hover:pl-5" :href="route('invoice.index')" @click="isLoading = true">Invoices</NavLink>
                        <NavLink class="hover:pl-5" :href="route('dashboard')" @click="isLoading = true" >Delivery</NavLink>
                        <NavLink class="hover:pl-5" :href="route('dashboard')" @click="isLoading = true" >Purchases</NavLink>
                        <NavLink class="hover:pl-5" :href="route('dashboard')" @click="isLoading = true" >Expenses</NavLink>
                    </div>
                    <button @click="showingSubNavigationSettlLinks = !showingSubNavigationSettlLinks" class="inline-flex items-center p-2 mt-4 w-full text-sm font-medium leading-5 text-white rounded-lg hover:bg-white hover:text-gray-900 hover:pl-5 transition-all duration-300 ">SETTLEMENT</button>
                    <div  class="flex flex-col ml-5 bg-blue-600 transition-all duration-500 ease-out text-white overflow-hidden " :class="{'h-28 opacity-100': showingSubNavigationSettlLinks, ' h-0 opacity-20 ': ! showingSubNavigationSettlLinks}" >
                        <NavLink class="hover:pl-5" :href="route('dashboard')" @click="isLoading = true" >Sales Closing</NavLink>
                        <NavLink class="hover:pl-5" :href="route('dashboard')" @click="isLoading = true" >Stock Closing</NavLink>
                        <!-- <NavLink class="hover:pl-5" :href="route('dashboard')" @click="isLoading = true" >Purchases</NavLink> -->
                    </div>
                    <button @click="showingSubNavigationRepoLinks = !showingSubNavigationRepoLinks" class="inline-flex items-center p-2 mt-4 w-full text-sm font-medium leading-5 text-white rounded-lg hover:bg-white hover:text-gray-900 hover:pl-5 transition-all duration-300 ">REPORTS</button>
                    <div  class="flex flex-col ml-5 bg-blue-600 transition-all duration-500 ease-out text-white overflow-hidden " :class="{'h-40 opacity-100': showingSubNavigationRepoLinks, ' h-0 opacity-20 ': ! showingSubNavigationRepoLinks}" >
                        <NavLink class="hover:pl-5" :href="route('dashboard')" @click="isLoading = true" >Sales Report</NavLink>
                        <NavLink class="hover:pl-5" :href="route('dashboard')" @click="isLoading = true" >Stock Report</NavLink>
                        <NavLink class="hover:pl-5" :href="route('dashboard')" @click="isLoading = true" >GST report</NavLink>
                    </div>
                   <NavLink class="hover:pl-5" :href="route('dashboard')" @click="isLoading = true" >SETTING</NavLink>
                </nav>
            </div>
        </div>
        <div class="min-h-screen  bg-gray-100 flex-1">
            <div class="bg-white shadow-lg border-gray-100">
                <!-- Primary Navigation Menu -->
                <div class="px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between h-16">
                        <div class="flex">
                            <!-- Logo -->
                            <div class="shrink-0 flex items-center">
                                <button @click="showingNavigationDropdown = ! showingNavigationDropdown">
                                    <ApplicationLogo class="block h-9 w-auto fill-current text-gray-800" />
                                </button>
                            </div>
                            <header v-if="$slots.header">
                                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                                    <slot name="header" />
                                </div>
                            </header>
                        </div>

                        <div class="hidden sm:flex sm:items-center sm:ml-6">
                            <div class="ml-3 relative">
                                <Dropdown align="right" width="48">
                                    <template #trigger>
                                        <span class="inline-flex rounded-md">
                                            <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                                {{ $page.props.auth.user.name }}

                                                <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        </span>
                                    </template>

                                    <template #content>
                                        <DropdownLink :href="route('profile.edit')">
                                            Profile
                                        </DropdownLink>
                                        <DropdownLink :href="route('logout')" method="post" as="button">
                                            Log Out
                                        </DropdownLink>
                                    </template>
                                </Dropdown>
                            </div>
                        </div>
                    </div>       
                </div>
            </div>
            <main>
                <slot />
            </main>
            
        </div>
    </div>
</template>
