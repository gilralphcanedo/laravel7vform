<template>
    <div class="panel panel-defualt">
        <form @submit.prevent="submit">
            <div class="form-group">
                <label>Username</label>
                <input v-model="formData.title" type="text" class="form-control" :class="{ 'is-invalid': formData.errors.has('title') }">
                <has-error :form="formData" field="title"></has-error>
            </div>

            <div class="form-group">
                <label>Password</label>
                <input v-model="formData.body" type="text" class="form-control" :class="{ 'is-invalid': formData.errors.has('body') }">
                <has-error :form="formData" field="body"></has-error>
            </div>
            <input type="submit" class="btn btn-primary" value="Submit">
        </form>
    </div>
</template>

<script>

import { Form, HasError } from 'vform';
Vue.component(HasError.name, HasError);

export default {
    props: {

    },
    components: {

    },
    computed: {

    },
    created: function () {
        
    },
    mounted() {
        
    },
    data() {
        return {
            formData : new Form({
                title : '',
                body : '',
            }),
        }
    },
    watch:{

    },
    methods: {
        submit() {
            this.formData.post('/submit').then(response => {
                console.log(response.data);
            }).catch(error => {
                console.log(error);
            });
        }
    },
    filters: {

    }
}
</script>

<style>

</style>