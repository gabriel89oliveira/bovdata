<template>
    
    <MainLayout>

        <div class="space-y-4">
            <div class="bg-indigo-600 text-white font-bold p-3 w-full flex space-x-8">
                <div class="grow">Ações</div>
                <div class="px-3">% Carteira: 33%</div>
            </div>

            <div class="bg-green-300 text-black font-bold px-3 py-1 w-full flex space-x-8">
                <div class="grow">Seguro</div>
                <div class="px-3">% Grupo: 43%</div>
                <div class="px-3">% Carteira: 23%</div>
            </div>

            <div class="px-3">
                <div class="table w-full ...">
                    <div class="table-header-group ...">
                        <div class="table-row">
                            <div class="table-cell text-left font-bold ...">Ticker</div>
                            <div class="table-cell text-left font-bold ...">Empresa</div>
                            <div class="table-cell text-left font-bold ...">Estratégia</div>
                            <div class="table-cell text-left font-bold ...">Preço Médio</div>
                            <div class="table-cell text-left font-bold ...">Quantidade</div>
                            <div class="table-cell text-left font-bold ...">Valor Total</div>
                            <div class="table-cell text-left font-bold ...">% Categoria</div>
                            <div class="table-cell text-left font-bold ...">% Grupo</div>
                            <div class="table-cell text-left font-bold ...">% Carteira</div>
                        </div>
                    </div>
                    <div class="table-row-group">
                        <div class="table-row">
                            <div class="table-cell ...">PSSA3</div>
                            <div class="table-cell ...">Porto Seguro</div>
                            <div class="table-cell ...">Dividendo</div>
                            <div class="table-cell ...">R$ 22,90</div>
                            <div class="table-cell ...">1961</div>
                            <div class="table-cell ...">R$ 12.580</div>
                            <div class="table-cell ...">54%</div>
                            <div class="table-cell ...">34%</div>
                            <div class="table-cell ...">12%</div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell ...">ITSA4</div>
                            <div class="table-cell ...">Itau SA</div>
                            <div class="table-cell ...">Crescimento</div>
                            <div class="table-cell ...">R$ 10,21</div>
                            <div class="table-cell ...">1972</div>
                            <div class="table-cell ...">R$ 12.580</div>
                            <div class="table-cell ...">54%</div>
                            <div class="table-cell ...">34%</div>
                            <div class="table-cell ...">12%</div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell ...">LREN3</div>
                            <div class="table-cell ...">Lojas Renner</div>
                            <div class="table-cell ...">Risco</div>
                            <div class="table-cell ...">R$ 28,47</div>
                            <div class="table-cell ...">1975</div>
                            <div class="table-cell ...">R$ 12.580</div>
                            <div class="table-cell ...">54%</div>
                            <div class="table-cell ...">34%</div>
                            <div class="table-cell ...">12%</div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </MainLayout>
    
</template>

<script>
    
    import MainLayout from '@/Layouts/MainLayout.vue';
    import MenuButton from '@/Layouts/Partials/MenuButton.vue'

    export default {

        components: {
            MainLayout,
        }

    }


</script>