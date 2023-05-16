<script setup>
import AuthenticatedLayout from '@/Layouts/AppLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head,useForm } from '@inertiajs/vue3';

const form = useForm({
    title:'',
    description:'',
    user_id: window.localStorage.getItem('userId'),
});
</script>

<template>
    <Head title="Crear Tarea" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-white leading-tight">Crear TODO</h2>
        </template>

        <div class="py-12">
            <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
                {{ console.log(props)}}
                <div class="p-4 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <form @submit.prevent="form.post(route('todos.store'))"
                    class="mt-6 space-y-6 max-w-xl">

                    <InputLabel for="title" value="* Titulo"></InputLabel>
                    <TextInput id="title" v-model="form.title" autofocus required
                    type="text" class="mt-1 block w-full"></TextInput>
                    <InputError :message="form.errors.title" class="mt-2"></InputError>

                    <InputLabel for="description" value="Descripción"></InputLabel>
                    <TextInput id="description" v-model="form.description" autofocus
                    type="text" class="mt-1 block w-full"></TextInput>
                    <InputError :message="form.errors.description" class="mt-2"></InputError>

                    <PrimaryButton :disabled="form.processing">
                        Guardar
                    </PrimaryButton>
                    </form>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
