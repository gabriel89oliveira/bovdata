<template>

    <MainLayout>
        
        <div class="text-lg font-semi">
            Calculando valores trimestrais:
        </div>

        <div v-for="empresa in empresas">
            <div>
                {{ empresa.denom_cia }}: {{ finished.includes(empresa.cd_cvm) ? 'Finalizado' : 'Em espera' }}
            </div>
        </div>

    </MainLayout>

</template>

<script>

    import MainLayout from '@/Layouts/MainLayout.vue'

    export default {

        components: {
            MainLayout
        },

        props: {
            empresas: Object
        },

        created() {

            this.empresas.map(item => {

                axios.get(route('income.statement.calculate', item.cd_cvm)).then(response => {
                    this.empresas.push(item.cd_cvm)
                })

                console.log(item.cd_cvm)
                
            })

        },

        data() {
            return {
                finished: []
            }
        }

    }

</script>