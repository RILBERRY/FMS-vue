<script setup>
import CustomerLayout from '@/Layouts/CustomerLayout.vue';
import StaticsCard from '@/Components/StaticsCard.vue';
import FuelTankCard from '@/Components/FuelTankCard.vue';
import { Head } from '@inertiajs/inertia-vue3';
</script>

<template>
    <Head title="Dashboard" />

    <CustomerLayout >
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>
        <div class=" py-5 flex flex-col max-w-7xl mx-auto h-screen overflow-auto pb-16 scrollbar-none">
            <div class="py-2 flex justify-center text-sm flex-wrap z-10">
                <StaticsCard class="flex-auto">
                    <template #type>Total Purchases</template>
                    <template #amount> 1,203,635.23 MVR</template>
                    <template #month>November</template>
                     <template #colorPlate> <div class="h-26 w-3 bg-blue-600"></div></template>
                </StaticsCard>
                <StaticsCard class="flex-auto">
                    <template #type>Credit Balance</template>
                    <template #amount> 203,635.23 MVR</template>
                    <template #month>November</template>
                     <template #colorPlate> <div class="h-26 w-3 bg-red-600"></div></template>
                </StaticsCard>
                <StaticsCard class="flex-auto">
                    <template #type>Paid</template>
                    <template #amount> 1,000,000.00 MVR</template>
                    <template #month>November</template>
                     <template #colorPlate> <div class="h-26 w-3 bg-green-600"></div></template>
                </StaticsCard>
            </div>   
            <div class="py-2 flex justify-center text-sm flex-wrap z-10">
                <StaticsCard class="flex-auto">
                    <template #type>Diesel Rate</template>
                    <template #amount> 20.55 MVR per LTR</template>
                    <template #month>Today</template>
                     <template #colorPlate> <div class="h-26 w-3 bg-yellow-600"></div></template>
                </StaticsCard>
                <StaticsCard class="flex-auto">
                    <template #type>Petrol Rate</template>
                    <template #amount> 22.55 MVR per LTR</template>
                    <template #month>Today</template>
                     <template #colorPlate> <div class="h-26 w-3 bg-yellow-600"></div></template>
                </StaticsCard>

            </div>   

            <p class=" w-full text-center relative top-2/4 left-2/4 -translate-x-2/4 -translate-y-2/4 text-6xl font-bold text-gray-200 select-none z-0">Guarantee Guel Pvt ltd</p>

        </div>
    </CustomerLayout>
</template>
