<template>

<div class="fixed top-0 w-full z-40 shadow">

    <div class="bg-gradient-to-r from-indigo-500 to-blue-500 text-white h-1"></div>

    <nav class="flex items-center justify-between text-black bg-white shadow-xs h-16">
        <div class="flex items-center flex-no-shrink px-10 space-x-6">
            
            <div>
                <Logo></Logo>
            </div>

            <div>
                <label class="relative inline-flex items-center cursor-pointer">
                    <input type="checkbox" value="" class="sr-only peer" @click="functionToggleSidebar()" :checked="toggleSidebar.value">
                    <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-0 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-indigo-600"></div>
                    <span class="ml-3 text-sm font-medium text-gray-900">Menu</span>
                </label>
            </div>
            
        </div>

        <div class="mx-4 flex items-center">
            <PrimaryButton class="">Menu</PrimaryButton>
        </div>

    </nav>

</div>

</template>

<script>

    import Logo from '@/Layouts/Partials/Logo.vue'
    import PrimaryButton from '@/Components/PrimaryButton.vue';

    export default {

        inject: ['toggleSidebar'],

        components: {
            Logo,
            PrimaryButton
        },

        methods: {

            functionToggleSidebar() {
                console.log('inicio')
                this.toggleSidebar.value = !this.toggleSidebar.value
                console.log(this.toggleSidebar.value)
            }

        }

    }

</script>
