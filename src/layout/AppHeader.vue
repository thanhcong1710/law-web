<template>
    <header class="header-global">
        <base-nav class="navbar-main" transparent type="" effect="light" expand>
            <router-link slot="brand" class="navbar-brand mr-lg-5" to="/">
                <img src="img/brand/white.png" alt="logo">
            </router-link>

            <div class="row" slot="content-header" slot-scope="{closeMenu}">
                <div class="col-6 collapse-brand">
                    <a href="https://demos.creative-tim.com/vue-argon-design-system/documentation/">
                        <img src="img/brand/blue.png">
                    </a>
                </div>
                <div class="col-6 collapse-close">
                    <close-button @click="closeMenu"></close-button>
                </div>
            </div>

            <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
                <li>
                    <router-link to="/landing" class="nav-link">
                        <i class="ni ni-collection d-lg-none"></i>
                        <span class="nav-link-inner--text">Luật sư bảo hiểm</span>
                    </router-link>
                </li>
                <base-dropdown tag="li" class="nav-item">
                    <a slot="title" href="#" class="nav-link" data-toggle="dropdown" role="button">
                        <i class="ni ni-collection d-lg-none"></i>
                        <span class="nav-link-inner--text">Dịch vụ pháp lý</span>
                    </a>
                    <router-link to="/landing" class="dropdown-item">Dịch vụ lập di chúc thừa kế</router-link>
                    <router-link to="/profile" class="dropdown-item">Luật sư tư vấn</router-link>
                    <router-link to="/login" class="dropdown-item">Luật sư tranh tụng</router-link>
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
                <li class="nav-item d-lg-block ml-lg-4">
                    <router-link to="/login" class="btn btn-neutral btn-icon">
                        <i class="fa-solid fa-right-to-bracket"></i>
                        <span class="nav-link-inner--text">Đăng nhập</span>
                    </router-link>
                </li>
            </ul>
        </base-nav>
    </header>
</template>
<script>
import BaseNav from "@/components/BaseNav";
import BaseDropdown from "@/components/BaseDropdown";
import CloseButton from "@/components/CloseButton";

export default {
  components: {
    BaseNav,
    CloseButton,
    BaseDropdown
  }
};
</script>
<style>
</style>
