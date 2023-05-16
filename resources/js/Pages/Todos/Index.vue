<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { Head,Link, useForm } from '@inertiajs/vue3';

const props = defineProps({
    todos: {type:Object}
});

const form = useForm({
    id:''
});
</script>


<template>
    <Head title="Todos" />
    <AppLayout>
        <div class="px-12">
            <div class="grid v-screen place-items-center">
                <div class="py-6 flex">
                    <Link :href="route('todos.create')"
                    class="inline-flex items-center justify-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-500 active:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition ease-in-out duration-150 mx-2">
                    Agregar
                    </Link>
                </div>
            </div>
            <div class="py-12">
                <div v-if="todos.length > 0" class="container-card">
                    <div  v-for="todo in todos" :key="todo.id" class="cstm-card bg-white mx-6 text-center border-2 rounded-md my-5">
                        <div class="bg-blue-800 py-5 card-title">
                            {{ todo.title }}
                        </div>
                        <div class="py-5">
                            {{ todo.description }}
                        </div>
                        <div class="py-5 text-right">
                            <hr  class="py-3"/>
                             <Link :href="route('todos.edit', todo.id)"
                                class="inline-flex items-center justify-center px-4 py-2 bg-yellow-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-yellow-500 active:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-offset-2 transition ease-in-out duration-150 mx-2">
                                    Editar
                                </Link>

                                <Link :href="route('todos.destroy', todo.id)" method="delete"
                                     class="inline-flex items-center justify-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150 mx-2">
                                        Eliminar
                                </Link>
                        </div>
                    </div>
                </div>
                <div v-else>
                    <div class="py-12">
                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                                <div class="p-6 text-gray-900 text-center">No existen tareas guardadas.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<style scoped>

.container-card{
    display:flex;
    align-items: center;
}
.cstm-card{
    width: 400px;
    box-shadow: 2px 2px 2px 1px rgba(0, 0, 0, 0.2);
    display:inline-block;
}

.card-title{
    font-size: 1.5rem;
    color: #fff;
    text-transform: uppercase;
}

@media (max-width:900px){
    .container-card{
        width: 100%;
        flex-flow: column-reverse;
    }
}
</style>
