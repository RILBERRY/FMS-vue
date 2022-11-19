<script setup>
import MainLayout from '@/Layouts/MainLayout.vue';
import StaticsCard from '@/Components/StaticsCard.vue';
import FuelTankCard from '@/Components/FuelTankCard.vue';
import { Head } from '@inertiajs/inertia-vue3';
</script>

<template>
    <Head title="Dashboard" />

    <MainLayout >
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>
        <div class=" py-5 flex flex-col max-w-7xl mx-auto h-screen overflow-auto pb-16 scrollbar-none">
            <div class=" flex justify-center space-x-2 text-sm flex-wrap ">
                <StaticsCard class="flex-auto">
                    <template #type>Total Sales</template>
                    <template #amount> 1,203,635.23 MVR</template>
                    <template #month>November</template>
                </StaticsCard>
             
            </div>
            <div class="py-2 flex justify-center text-sm flex-wrap ">
                <StaticsCard class="flex-auto">
                    <template #type>Diesel Sales</template>
                    <template #amount> 203,635.23 MVR</template>
                    <template #month>November</template>
                     <template #colorPlate> <div class="h-26 w-3 bg-blue-600"></div></template>
                </StaticsCard>
                <StaticsCard class="flex-auto">
                    <template #type>Diesel Purchases</template>
                    <template #amount> 203,635.23 MVR</template>
                    <template #month>November</template>
                     <template #colorPlate> <div class="h-26 w-3 bg-blue-600"></div></template>
                </StaticsCard>
                <StaticsCard class="flex-auto">
                    <template #type>Diesel Profit</template>
                    <template #amount> 203,635.23 MVR</template>
                    <template #month>November</template>
                     <template #colorPlate> <div class="h-26 w-3 bg-blue-600"></div></template>
                </StaticsCard>
            </div>

            <div class="py-2 flex justify-center text-sm flex-wrap ">
                <StaticsCard class="flex-auto">
                    <template #type>Petrol Sales</template>
                    <template #amount> 203,635.23 MVR</template>
                    <template #month>November</template>
                    <template #colorPlate> <div class="h-26 w-3 bg-green-600"></div></template>
                </StaticsCard>
                <StaticsCard class="flex-auto">
                    <template #type>Petrol Purchases</template>
                    <template #amount> 203,635.23 MVR</template>
                    <template #month>November</template>
                     <template #colorPlate> <div class="h-26 w-3 bg-green-600"></div></template>
                </StaticsCard>
                <StaticsCard class="flex-auto">
                    <template #type>Remula Profit</template>
                    <template #amount> 203,635.23 MVR</template>
                    <template #month>November</template>
                     <template #colorPlate> <div class="h-26 w-3 bg-green-600"></div></template>
                </StaticsCard>
            </div>
            <div class="py-2 flex justify-center text-sm flex-wrap ">
                <StaticsCard class="flex-auto">
                    <img src="/img/user-img.png" alt="" srcset="">
                    <template #type>Remula Sale</template>
                    <template #amount> 203,635.23 MVR</template>
                    <template #month>November</template>
                     <template #colorPlate> <div class="h-26 w-3 bg-yellow-600"></div></template>
                </StaticsCard>
                <StaticsCard class="flex-auto">
                    <template #type>Remula Purchases</template>
                    <template #amount> 203,635.23 MVR</template>
                    <template #month>November</template>
                     <template #colorPlate> <div class="h-26 w-3 bg-yellow-600"></div></template>
                </StaticsCard>
                <StaticsCard class="flex-auto">
                    <template #type>Remula Profit</template>
                    <template #amount> 203,635.23 MVR</template>
                    <template #month>November</template>
                     <template #colorPlate> <div class="h-26 w-3 bg-yellow-600"></div></template>
                </StaticsCard>
            </div>
            <div class="py-2 flex justify-center text-sm flex-wrap  ">
                <FuelTankCard class="flex-auto bg-blue-600 before:top-[30%]">
                    <template #type>Diesel Stock</template>
                    <template #amount> 23,635 LTR</template>
                    <template #month>November</template>
                </FuelTankCard>
                <FuelTankCard class="flex-auto bg-green-600 before:top-[-60%]">
                    <template #type>Petrol Stock</template>
                    <template #amount> 5,635 LTR</template>
                    <template #month>November</template>
                </FuelTankCard>
                <FuelTankCard class="flex-auto bg-yellow-600">
                    <template #type>Remula Stock</template>
                    <template #amount> 635 LTR</template>
                    <template #month>November</template>
                </FuelTankCard>
               
            </div>
          
         
        </div>
    </MainLayout>
</template>
