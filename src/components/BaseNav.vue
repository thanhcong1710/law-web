<template>
    <nav class="navbar"
         :class="[
            {'navbar-expand-lg': expand},
            {[`navbar-${effect}`]: effect},
            {'navbar-transparent': transparent},
            {[`bg-${type}`]: type},
            {'rounded': round}
         ]">
        <div class="container">
          <navbar-toggle-button :toggled="toggled"
                                  :target="contentId"
                                  @click.native.stop="toggled = !toggled">
            </navbar-toggle-button>

            <slot name="container-pre"></slot>
            <slot name="brand">
                <a class="navbar-brand" href="#" @click.prevent="onTitleClick">
                    {{title}}
                </a>
            </slot>
            
            <slot name="container-after"></slot>

            <div class="collapse navbar-collapse" :class="{show: toggled}" :id="contentId" v-click-outside="closeMenu">
                <div class="navbar-collapse-header">
                    <slot name="content-header" :close-menu="closeMenu"></slot>
                </div>
                <slot :close-menu="closeMenu"></slot>
            </div>

            <base-dropdown tag="li" class="navbar-toggler" v-if="userData">
              <a slot="title" href="#" class="nav-link" data-toggle="dropdown" role="button">
                  <img v-lazy="'img/theme/team-4-800x800.jpg'" alt="Raised circle image" class="img-fluid rounded-circle shadow-lg" style="width: 30px;">
              </a>
              <router-link to="/profile" class="dropdown-item">
                  <img v-lazy="'img/theme/team-4-800x800.jpg'" alt="Raised circle image" class="img-fluid rounded-circle shadow-lg" style="width: 30px;">
                  <span v-html="userData.name" style="margin-left: 10px; font-weight: bold"></span>
              </router-link>
              <router-link to="/profile" class="dropdown-item">Thông tin tài khoản</router-link>
              <router-link to="/landing" class="dropdown-item">Đổi mật khẩu</router-link>
              <router-link to="/logout" class="dropdown-item text-danger">Đăng xuất</router-link>
            </base-dropdown>
        </div>
    </nav>
</template>
<script>
import { FadeTransition } from "vue2-transitions";
import NavbarToggleButton from "./NavbarToggleButton";
import BaseDropdown from "@/components/BaseDropdown";
export default {
  name: "base-nav",
  components: {
    FadeTransition,
    NavbarToggleButton,
    BaseDropdown
  },
  props: {
    type: {
      type: String,
      default: "primary",
      description: "Navbar type (e.g default, primary etc)"
    },
    title: {
      type: String,
      default: "",
      description: "Title of navbar"
    },
    contentId: {
      type: [String, Number],
      default: Math.random().toString(),
      description:
        "Explicit id for the menu. By default it's a generated random number"
    },
    effect: {
      type: String,
      default: "dark",
      description: "Effect of the navbar (light|dark)"
    },
    round: {
      type: Boolean,
      default: false,
      description: "Whether nav has rounded corners"
    },
    transparent: {
      type: Boolean,
      default: false,
      description: "Whether navbar is transparent"
    },
    expand: {
      type: Boolean,
      default: false,
      description: "Whether navbar should contain `navbar-expand-lg` class"
    }
  },
  data() {
    return {
      toggled: false
    };
  },
  computed: {
    userData() {
      return JSON.parse(localStorage.getItem('user'))
    },
  },
  methods: {
    onTitleClick(evt) {
      this.$emit("title-click", evt);
    },
    closeMenu() {
      this.toggled = false;
    }
  }
};
</script>
<style>
</style>
