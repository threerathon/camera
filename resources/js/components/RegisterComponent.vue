<template>
    <div class="col-lg-6 justify-content-center">
        <div  v-if="success" class="alert alert-primary alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong>Sign Up Success</strong>
        </div>
        <div v-if="error" class="alert alert-danger alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong>Registration Failed</strong>
        </div>
        <form autocomplete="off" @submit.prevent="register()">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" class="form-control" v-model="name" required>
            </div>
            <div class="form-group" >
                <label for="email">E-mail</label>
                <input type="email" id="email" class="form-control" placeholder="user@example.com" v-model="email" required>
            </div>
            <div class="form-group" >
                <label for="password">Password</label>
                <input type="password" id="password" class="form-control" v-model="password" required>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                name: '',
                email: '',
                password: '',
                error: false,
                success: false
            };
        },
        methods: {
            async  register() {
               try {
                   const response = await axios.post('https://bensrest.o2r2.io/api/auth/register',{
                       name: this.name,
                       email: this.email,
                       password: this.password
                   })
                   this.success = true;
                   console.log(response.data.data);
               } catch (error) {
                   this.error = true;
                   console.log(this.error);
               }
            },
        }
    }
</script>
