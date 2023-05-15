<template>
  <section class="section section-shaped section-lg my-0">
    <div class="shape shape-style-1 bg-gradient-default">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>
    <div class="container pt-lg-md">
      <div class="row justify-content-center">
        <div class="col-lg-5">
          <card
            type="secondary"
            shadow
            header-classes="bg-white pb-5"
            body-classes="px-lg-5 py-lg-5"
            class="border-0"
          >
            <template>
              <div class="text-muted text-center mb-3">
                <small>Sign in with</small>
              </div>
              <div class="btn-wrapper text-center">
                <base-button type="neutral">
                  <img slot="icon" src="img/icons/common/github.svg" />
                  Github
                </base-button>

                <base-button type="neutral">
                  <img slot="icon" src="img/icons/common/google.svg" />
                  Google
                </base-button>
              </div>
            </template>
            <template>
              <div class="text-center text-muted mb-4">
                <small>Or sign in with credentials</small>
              </div>
              <form role="form">
                <base-input
                  alternative
                  class="mb-3"
                  placeholder="Email"
                  addon-left-icon="ni ni-email-83"
                  v-model="email"
                >
                </base-input>
                <base-input
                  alternative
                  type="password"
                  placeholder="Password"
                  addon-left-icon="ni ni-lock-circle-open"
                  v-model="password"
                >
                </base-input>
                <base-checkbox> Remember me </base-checkbox>
                <div class="text-center">
                  <base-button type="primary" class="my-4" @click="login"
                    >Sign In</base-button
                  >
                </div>
                <p style="color: red">{{ message }}</p>
              </form>
            </template>
          </card>
          <div class="row mt-3">
            <div class="col-6">
              <a href="#" class="text-light">
                <small>Forgot password?</small>
              </a>
            </div>
            <div class="col-6 text-right">
              <a href="#" class="text-light">
                <small>Create new account</small>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>
<script>
import axios from "axios";
import VueCookies from 'vue-cookies'

export default {
  name: "Login",
  data() {
    return {
      email: "",
      password: "",
      message: "",
    };
  },
  methods: {
    goRegister() {
      this.$router.push({ path: "register" });
    },
    login() {
      let self = this;
      axios
        .post(process.env.VUE_APP_BASE_API + `/api/login`, {
          email: self.email,
          password: self.password,
        })
        .then(function (response) {
          VueCookies.set(
            "access_token",
            response.data.access_token,
            response.data.expires_in
          );
          VueCookies.set(
            "token_type",
            response.data.token_type,
            response.data.expires_in
          );
          localStorage.setItem("user", JSON.stringify(response.data.user));
          self.$router.push({ path: "/profile" });
        })
        .catch(function (error) {
          self.message = "Incorrect E-mail or password";
          console.log(error);
        });
    },
  },
};
</script>
<style>
</style>
