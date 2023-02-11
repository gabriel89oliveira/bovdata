<template>

    <Link :href="href" :class="classes">
        <div class="cursor-pointer border-l-2 border-indigo-400 pl-6 py-1 font-bold text-gray-500 hover:pl-7 hover:text-gray-600 duration-150 ease-in">
            <slot></slot>
        </div>
    </Link>

</template>

<script>

    import { Link } from '@inertiajs/vue3';

    export default {

        components: {
            Link
        },

        props: ['href']

    }

</script>