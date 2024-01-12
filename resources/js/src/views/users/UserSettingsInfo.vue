<template>
  <vx-card no-shadow>

    <!-- Bio -->
    

    <!-- DOB -->
    <div class="mt-5">
      <label class="text-sm">Ngày sinh</label>
      <flat-pickr v-model="birthday" :config="{ dateFormat: 'd/m/Y' }" class="w-full mt-2" />
    </div>
    <!-- Gender -->
    <div class="mt-5">
      <label class="text-sm">Giới tính</label>
      <div class="mt-2">
        <vs-radio v-model="gender" vs-value="male" class="mr-4">Nam</vs-radio>
        <vs-radio v-model="gender" vs-value="female" class="mr-4">Nữ</vs-radio>
        <vs-radio v-model="gender" vs-value="other">Khác</vs-radio>
      </div>
    </div>
    <div class="mt-5">
      <label class="text-sm">Địa chỉ</label>
      <vs-input class="w-full mt-2" label-placeholder="" v-model="address" />
    </div>
    <div class="mt-5">
      <label class="text-sm">Giới thiệu</label>
      <vs-textarea class="w-full mt-2" v-model="note" placeholder="" />
    </div>

    <!-- Save & Reset Button -->
    <div class="flex flex-wrap items-center justify-end">
      <vs-button class="ml-auto mt-2">Cập nhật</vs-button>
      <vs-button class="ml-4 mt-2" type="border" color="warning">Hủy</vs-button>
    </div>
  </vx-card>
</template>

<script>
import flatPickr from 'vue-flatpickr-component'
import 'flatpickr/dist/flatpickr.css'
import vSelect from 'vue-select'

export default {
  components: {
    flatPickr,
    vSelect
  },
  data () {
    return {
      note: '',
      birthday: null,
      address: '',
      gender: 'male',
    }
  },
  computed: {
    activeUserInfo () {
      return this.$store.state.AppActiveUser
    }
  }
}
</script>
