<template>
    <div>
        <div class="alert alert-danger" v-if="error">
            <p>Có lỗi đâu đó, không thể login!</p>
        </div>
        <form autocomplete="off" @submit.prevent="login()">
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" id="email" class="form-control" placeholder="user@example.com" v-model="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" class="form-control" v-model="password" required>
            </div>
            <button type="submit" class="btn btn-default">Sign in</button>
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
            async  login() {
               try {
                   const response = await axios.post('https://bensrest.o2r2.io/api/auth/login',{
                       email: this.email,
                       password: this.password
                   })
                   console.log(response.data);
                   return true;
               } catch (error) {
                   this.error = true;
                   console.log(this.error);
               }
            },
        }
    }
</script>
