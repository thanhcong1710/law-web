import AppHeader from "../../layout/AppHeader";
import AppFooter from "../../layout/AppFooter";
const BookingList = () => import('../../views/users/booking')

export default [
  {
    path: '/booking',
    name: 'Đăng ký tư vấn',
    components: {
      header: AppHeader,
      footer: AppFooter,
      default: BookingList
    }
  }
]
