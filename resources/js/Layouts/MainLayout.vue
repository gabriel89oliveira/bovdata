<template>

    <Nav></Nav>

    <Sidebar></Sidebar>

    <div class="w-full mt-16 duration-200 ease-in" :class="toggleSidebar.value ? 'pl-64' : 'pl-0'" >
        <div class="p-10">
            <slot />
        </div>
    </div>
        

</template>

<script>

    import Nav from '@/Layouts/Partials/Nav.vue';
    import Sidebar from '@/Layouts/Partials/Sidebar.vue';

    export default {

        inject: ['toggleSidebar'],

        components: {
            Nav,
            Sidebar
        },
        
    }

</script>