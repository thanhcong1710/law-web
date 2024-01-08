/*=========================================================================================
  File Name: sidebarItems.js
  Description: Sidebar Items list. Add / Remove menu items from here.
  Strucutre:
          url     => router path
          name    => name to display in sidebar
          slug    => router path name
          icon    => Feather Icon component/icon name
          tag     => text to display on badge
          tagColor  => class to apply on badge element
          i18n    => Internationalization
          submenu   => submenu of current item (current item will become dropdown )
                NOTE: Submenu don't have any icon(you can add icon if u want to display)
          isDisabled  => disable sidebar item/group
  ----------------------------------------------------------------------------------------
  Item Name: Vuexy - Vuejs, HTML & Laravel Admin Dashboard Template
  Author: Pixinvent
  Author URL: http://www.themeforest.net/user/pixinvent
==========================================================================================*/


export default [
  {
    url: null,
    name: 'Tìm luật sư',
    tag: '2',
    tagColor: 'warning',
    icon: 'HomeIcon',
    submenu: [
      {
        url: '/#',
        name: 'Bảo hiểm',
        slug: 'dashboard-analytics',
      },
      {
        url: '/#',
        name: 'Dân sự',
        slug: 'dashboard-ecommerce',
      }
    ]
  },
  {
    url: null,
    name: 'Tư vấn pháp luật',
    tag: '3',
    tagColor: 'warning',
    icon: 'PackageIcon',
    submenu: [
      {
        url: '/apps/email',
        name: 'Bài viết pháp luật',
        slug: 'email',
        icon: 'MailIcon',
      },
      {
        url: '/apps/chat',
        name: 'Câu hỏi pháp luật',
        slug: 'chat',
        icon: 'MessageSquareIcon'
      },
      {
        url: '/apps/todo',
        name: 'Biểu mẫu',
        slug: 'todo',
        icon: 'CheckSquareIcon'
      }
    ]
  },
  {
    url: '/law/list',
    name: 'Dịch vụ pháp lý',
    icon: 'PackageIcon',
  },
  {
    url: '/#',
    name: 'Đặt câu hỏi miễn phí',
    icon: 'PackageIcon',
  }
]

