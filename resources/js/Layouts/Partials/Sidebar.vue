<template>

    <div class="w-64 bg-gray-100 h-screen border-r border-gray-200 space-y-4 fixed top-0 duration-200 ease-in flex flex-col pt-16" :class="toggleSidebar.value ? 'translate-x-0' : '-translate-x-64'">

        <div class="font-bold text-md text-gray-700 pt-12 pl-6">
            Sidebar Menu
        </div>

        <div class="overflow-y-auto grow">

            <MenuButton :href="route('home')">
                First Button
            </MenuButton>

            <MenuButton :href="route('home')">
                Second Button
            </MenuButton>

        </div>


    </div>


</template>

<script>

    import MenuButton from '@/Layouts/Partials/MenuButton.vue'

    export default {

        inject: ['toggleSidebar'],

        components: {
            MenuButton
        },
        
    }

</script>