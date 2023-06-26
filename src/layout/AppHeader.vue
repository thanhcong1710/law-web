<template>
  <header class="header-global">
    <base-nav class="navbar-main" transparent type="" effect="light" expand>
      <router-link slot="brand" class="navbar-brand mr-lg-5" to="/">
        <img src="img/brand/white.png" alt="logo" />
      </router-link>

      <div class="row" slot="content-header" slot-scope="{ closeMenu }">
        <div class="col-6 collapse-brand">
          <a
            href="https://demos.creative-tim.com/vue-argon-design-system/documentation/"
          >
            <img src="img/brand/blue.png" />
          </a>
        </div>
        <div class="col-6 collapse-close">
          <close-button @click="closeMenu"></close-button>
        </div>
      </div>

      <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
        <li>
          <router-link to="/booking" class="nav-link">
            <i class="ni ni-collection d-lg-none"></i>
            <span class="nav-link-inner--text">Đặt lịch tư vấn</span>
          </router-link>
        </li>
        <base-dropdown tag="li" class="nav-item">
          <a
            slot="title"
            href="#"
            class="nav-link"
            data-toggle="dropdown"
            role="button"
          >
            <i class="ni ni-collection d-lg-none"></i>
            <span class="nav-link-inner--text">Dịch vụ pháp lý</span>
          </a>
          <router-link to="/profile" class="dropdown-item"
            >Luật sư bảo hiểm</router-link
          >
          <router-link to="/profile" class="dropdown-item"
            >Dịch vụ lập di chúc thừa kế</router-link
          >
          <router-link to="/profile" class="dropdown-item"
            >Luật sư tư vấn</router-link
          >
          <router-link to="/profile" class="dropdown-item"
            >Luật sư tranh tụng</router-link
          >
        </base-dropdown>
        <li>
          <router-link to="/landing" class="nav-link">
            <i class="ni ni-collection d-lg-none"></i>
            <span class="nav-link-inner--text">Bảng giá</span>
          </router-link>
        </li>
        <li>
          <router-link to="/landing" class="nav-link">
            <i class="ni ni-collection d-lg-none"></i>
            <span class="nav-link-inner--text">Tin tức</span>
          </router-link>
        </li>
        <li>
          <router-link to="/landing" class="nav-link">
            <i class="ni ni-collection d-lg-none"></i>
            <span class="nav-link-inner--text">Liên hệ</span>
          </router-link>
        </li>
      </ul>
      <ul class="navbar-nav align-items-lg-center ml-lg-auto">
        <li class="nav-item d-lg-block ml-lg-4" v-if="!userData">
          <router-link to="/login" class="btn btn-neutral btn-icon">
            <i class="fa-solid fa-right-to-bracket"></i>
            <span class="nav-link-inner--text">Đăng nhập</span>
          </router-link>
        </li>
        <base-dropdown tag="li" class="nav-item" v-if="userData">
          <a
            slot="title"
            href="#"
            class="nav-link"
            data-toggle="dropdown"
            role="button"
          >
            <img
              v-lazy="'img/theme/team-4-800x800.jpg'"
              alt="Raised circle image"
              class="img-fluid rounded-circle shadow-lg"
              style="width: 30px"
            />
          </a>
          <router-link to="/profile" class="dropdown-item">
            <img
              v-lazy="'img/theme/team-4-800x800.jpg'"
              alt="Raised circle image"
              class="img-fluid rounded-circle shadow-lg"
              style="width: 30px"
            />
            <span
              v-html="userData.name"
              style="margin-left: 10px; font-weight: bold"
            ></span>
          </router-link>
          <router-link to="/profile" class="dropdown-item"
            >Thông tin tài khoản</router-link
          >
          <router-link to="/landing" class="dropdown-item"
            >Đổi mật khẩu</router-link
          >
          <a @click="logout" class="dropdown-item text-danger">Đăng xuất</a>
        </base-dropdown>
      </ul>
    </base-nav>
  </header>
</template>
<script>
import BaseNav from "@/components/BaseNav";
import BaseDropdown from "@/components/BaseDropdown";
import CloseButton from "@/components/CloseButton";
import u from "../utilities/utility";
import VueCookies from "vue-cookies";

export default {
  components: {
    BaseNav,
    CloseButton,
    BaseDropdown
  },
  computed: {
    userData() {
      return this.$store.state.user_data ? this.$store.state.user_data : JSON.parse(localStorage.getItem('user'))
    },
  },
  methods: {
    logout() {
      let self = this;
      u.p(process.env.VUE_APP_BASE_API + "/api/logout", {})
        .then(function (response) {
          VueCookies.remove("access_token");
          VueCookies.remove("token_type");
          localStorage.removeItem("user");
          self.$store.commit('set', ["user_data", null])
          self.$router.push({ path: "/login" });
        })
        .catch(function (error) {
          console.log(error);
        });
    },
  },
};
</script>
<style>
</style>
