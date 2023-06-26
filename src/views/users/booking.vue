<template>
  <div>
    <div class="position-relative">
      <section
        class="section-hero section-shaped my-0"
        style="height: 90px; min-height: 90px"
      >
        <div class="shape shape-style-1 shape-primary">
          <span class="span-150"></span><span class="span-50"></span
          ><span class="span-50"></span><span class="span-75"></span
          ><span class="span-100"></span><span class="span-75"></span
          ><span class="span-50"></span><span class="span-100"></span
          ><span class="span-50"></span><span class="span-100"></span>
        </div>
      </section>
    </div>
    <div class="container booking-temp mt-4">
      <div class="row justify-content-center">
        <div class="col-lg-4">
          <div class="package-detail">
            <div class="img-package">
              <img
                src="https://d1bnvx5vhcnf8w.cloudfront.net/product-images/gg1.jpg"
                width="100%"
              />
            </div>
            <div class="package-select-box package-select">
              <div class="current-package">
                <h5>Đăng ký tư vấn</h5>
              </div>
            </div>
            <div class="classroom-note">
              <div>
                - <u>Đăng ký lớp học</u> tối thiểu
                <strong>1 tiếng</strong> trước giờ học
              </div>
              <div>
                - <u>Huỷ lớp học</u> đã đăng ký tối thiểu
                <strong>3 tiếng</strong> trước giờ học
              </div>
              <div>
                - Đăng nhập vào lớp học tối thiểu 10 phút trước giờ học, nút
                'Vào lớp học' sẽ chuyển sang màu vàng
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="box filter-card">
            <div class="header">
              <div class="content">
                <div class="d-flex align-items-center">
                  <div>Đặt trước</div>
                  <!---->
                  <div class="timezone-text ml-auto">
                    <span>GMT+07:00 (Asia/Bangkok)</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="body">
              <div>
                <div class="filter-box">
                  <div class="filter-box-expanded">
                    <div class="btn-filter">
                      <slick
                        ref="slick"
                        :options="slickOptions"
                        @afterChange="handleAfterChange"
                        @beforeChange="handleBeforeChange"
                        @breakpoint="handleBreakpoint"
                        @destroy="handleDestroy"
                        @edge="handleEdge"
                        @init="handleInit"
                        @reInit="handleReInit"
                        @setPosition="handleSetPosition"
                        @swipe="handleSwipe"
                        @lazyLoaded="handleLazyLoaded"
                        @lazyLoadError="handleLazyLoadError"
                      >
                        <a v-for="(item, index) in list_date" :key="index">
                          <div class="date-box">
                            <div class="gradient-box">
                              <input
                                id="date-0"
                                type="radio"
                                name="date-filter"
                                value="2023-06-20T07:14:29.639Z"
                              />
                              <label for="date-0">
                                <div class="small">{{ item.text }}</div>
                                <div class="normal font-weight-bold">
                                  {{ item.value }}
                                </div>
                              </label>
                            </div>
                          </div>
                        </a>
                      </slick>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!---->
          </div>
          <div class="box filter-card mt-4">
            <div class="header">
              <div class="content">
                <div class="d-flex align-items-center">
                  <div>Danh sách luật sư</div>
                  <!---->
                  <div class="timezone-text ml-auto">
                    <span>Thứ Ba ngày 20 tháng 6 năm 2023</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="body" style="overflow:hidden">
              <div class="row">
                <div class="col-lg-6">
                  <div class="card coach-card">
                    <div class="card-body">
                      <div class="d-flex justify-content-between">
                        <div class="title">
                          <div class="coach-name">Coach Rowen</div>
                          <div class="coach-avatar">
                            <img alt="Circle image" class="img-fluid rounded-circle shadow" data-src="img/theme/team-2-800x800.jpg" src="img/theme/team-2-800x800.jpg" lazy="loaded" style="width: 100%;">
                          </div>
                        </div>
                      </div>
                      <div class="detail">
                        <div>
                          <strong>Tính cách: </strong>Sôi nổi, điềm tĩnh,
                          chu đáo, tràn đầy năng lượng, thân thiện, hài
                          hước, dịu dàng và kiên nhẫn
                        </div>
                        <div>
                          <strong>Cách dạy: </strong>Tập trung vào Phát Âm,
                          sửa lỗi Ngữ Pháp, Hội Thoại, kỹ năng Nghe và Nói
                          (kỹ năng Giao Tiếp), áp dụng phương pháp TPR
                          (Phương pháp học ngoại ngữ toàn diện) và sự tiến
                          bộ của học viên
                        </div>
                      </div>
                      <div  class="card-footer d-flex justify-content-between">
                        <button  class="btn btn-primary mr-3"> Xem lịch </button>
                        <button  class="btn btn-outline-secondary"> Thông tin</button>
                        <button  class="btn btn-like ml-auto">
                          <div   class="svg-container" style=""><svg viewBox="0 -28 512.00002 512" xmlns="http://www.w3.org/2000/svg" fill="currentColor" height="26" class="svg-class"><path d="m471.382812 44.578125c-26.503906-28.746094-62.871093-44.578125-102.410156-44.578125-29.554687 0-56.621094 9.34375-80.449218 27.769531-12.023438 9.300781-22.917969 20.679688-32.523438 33.960938-9.601562-13.277344-20.5-24.660157-32.527344-33.960938-23.824218-18.425781-50.890625-27.769531-80.445312-27.769531-39.539063 0-75.910156 15.832031-102.414063 44.578125-26.1875 28.410156-40.613281 67.222656-40.613281 109.292969 0 43.300781 16.136719 82.9375 50.78125 124.742187 30.992188 37.394531 75.535156 75.355469 127.117188 119.3125 17.613281 15.011719 37.578124 32.027344 58.308593 50.152344 5.476563 4.796875 12.503907 7.4375 19.792969 7.4375 7.285156 0 14.316406-2.640625 19.785156-7.429687 20.730469-18.128907 40.707032-35.152344 58.328125-50.171876 51.574219-43.949218 96.117188-81.90625 127.109375-119.304687 34.644532-41.800781 50.777344-81.4375 50.777344-124.742187 0-42.066407-14.425781-80.878907-40.617188-109.289063zm0 0" fill="currentColor"></path></svg></div>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="card coach-card">
                    <div class="card-body">
                      <div class="d-flex justify-content-between">
                        <div class="title">
                          <div class="coach-name">Coach Rowen</div>
                          <div class="coach-avatar">
                            <img alt="Circle image" class="img-fluid rounded-circle shadow" data-src="img/theme/team-2-800x800.jpg" src="img/theme/team-2-800x800.jpg" lazy="loaded" style="width: 100%;">
                          </div>
                        </div>
                      </div>
                      <div class="detail">
                        <div>
                          <strong>Tính cách: </strong>Sôi nổi, điềm tĩnh,
                          chu đáo, tràn đầy năng lượng, thân thiện, hài
                          hước, dịu dàng và kiên nhẫn
                        </div>
                        <div>
                          <strong>Cách dạy: </strong>Tập trung vào Phát Âm,
                          sửa lỗi Ngữ Pháp, Hội Thoại, kỹ năng Nghe và Nói
                          (kỹ năng Giao Tiếp), áp dụng phương pháp TPR
                          (Phương pháp học ngoại ngữ toàn diện) và sự tiến
                          bộ của học viên
                        </div>
                      </div>
                      <div  class="card-footer d-flex justify-content-between">
                        <button  class="btn btn-primary mr-3"> Xem lịch </button>
                        <button  class="btn btn-outline-secondary"> Thông tin</button>
                        <button  class="btn btn-like ml-auto">
                          <div   class="svg-container" style=""><svg viewBox="0 -28 512.00002 512" xmlns="http://www.w3.org/2000/svg" fill="currentColor" height="26" class="svg-class"><path d="m471.382812 44.578125c-26.503906-28.746094-62.871093-44.578125-102.410156-44.578125-29.554687 0-56.621094 9.34375-80.449218 27.769531-12.023438 9.300781-22.917969 20.679688-32.523438 33.960938-9.601562-13.277344-20.5-24.660157-32.527344-33.960938-23.824218-18.425781-50.890625-27.769531-80.445312-27.769531-39.539063 0-75.910156 15.832031-102.414063 44.578125-26.1875 28.410156-40.613281 67.222656-40.613281 109.292969 0 43.300781 16.136719 82.9375 50.78125 124.742187 30.992188 37.394531 75.535156 75.355469 127.117188 119.3125 17.613281 15.011719 37.578124 32.027344 58.308593 50.152344 5.476563 4.796875 12.503907 7.4375 19.792969 7.4375 7.285156 0 14.316406-2.640625 19.785156-7.429687 20.730469-18.128907 40.707032-35.152344 58.328125-50.171876 51.574219-43.949218 96.117188-81.90625 127.109375-119.304687 34.644532-41.800781 50.777344-81.4375 50.777344-124.742187 0-42.066407-14.425781-80.878907-40.617188-109.289063zm0 0" fill="currentColor"></path></svg></div>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="card coach-card">
                    <div class="card-body">
                      <div class="d-flex justify-content-between">
                        <div class="title">
                          <div class="coach-name">Coach Rowen</div>
                          <div class="coach-avatar">
                            <img alt="Circle image" class="img-fluid rounded-circle shadow" data-src="img/theme/team-2-800x800.jpg" src="img/theme/team-2-800x800.jpg" lazy="loaded" style="width: 100%;">
                          </div>
                        </div>
                      </div>
                      <div class="detail">
                        <div>
                          <strong>Tính cách: </strong>Sôi nổi, điềm tĩnh,
                          chu đáo, tràn đầy năng lượng, thân thiện, hài
                          hước, dịu dàng và kiên nhẫn
                        </div>
                        <div>
                          <strong>Cách dạy: </strong>Tập trung vào Phát Âm,
                          sửa lỗi Ngữ Pháp, Hội Thoại, kỹ năng Nghe và Nói
                          (kỹ năng Giao Tiếp), áp dụng phương pháp TPR
                          (Phương pháp học ngoại ngữ toàn diện) và sự tiến
                          bộ của học viên
                        </div>
                      </div>
                      <div  class="card-footer d-flex justify-content-between">
                        <button  class="btn btn-primary mr-3"> Xem lịch </button>
                        <button  class="btn btn-outline-secondary"> Thông tin</button>
                        <button  class="btn btn-like ml-auto">
                          <div   class="svg-container" style=""><svg viewBox="0 -28 512.00002 512" xmlns="http://www.w3.org/2000/svg" fill="currentColor" height="26" class="svg-class"><path d="m471.382812 44.578125c-26.503906-28.746094-62.871093-44.578125-102.410156-44.578125-29.554687 0-56.621094 9.34375-80.449218 27.769531-12.023438 9.300781-22.917969 20.679688-32.523438 33.960938-9.601562-13.277344-20.5-24.660157-32.527344-33.960938-23.824218-18.425781-50.890625-27.769531-80.445312-27.769531-39.539063 0-75.910156 15.832031-102.414063 44.578125-26.1875 28.410156-40.613281 67.222656-40.613281 109.292969 0 43.300781 16.136719 82.9375 50.78125 124.742187 30.992188 37.394531 75.535156 75.355469 127.117188 119.3125 17.613281 15.011719 37.578124 32.027344 58.308593 50.152344 5.476563 4.796875 12.503907 7.4375 19.792969 7.4375 7.285156 0 14.316406-2.640625 19.785156-7.429687 20.730469-18.128907 40.707032-35.152344 58.328125-50.171876 51.574219-43.949218 96.117188-81.90625 127.109375-119.304687 34.644532-41.800781 50.777344-81.4375 50.777344-124.742187 0-42.066407-14.425781-80.878907-40.617188-109.289063zm0 0" fill="currentColor"></path></svg></div>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mt-4 float-right">
                <ul class="pagination"><li class="page-item prev-page disabled"><a aria-label="Previous" class="page-link"><span aria-hidden="true"><i aria-hidden="true" class="fa fa-angle-left"></i></span></a></li><li class="page-item active"><a class="page-link">1</a></li><li class="page-item"><a class="page-link">2</a></li><li class="page-item"><a class="page-link">3</a></li><li class="page-item"><a class="page-link">4</a></li><li class="page-item"><a class="page-link">5</a></li><li class="page-item next-page"><a aria-label="Next" class="page-link"><span aria-hidden="true"><i aria-hidden="true" class="fa fa-angle-right"></i></span></a></li></ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import Slick from "vue-slick";
export default {
  name: "booking",
  components: {
    Slick,
  },
  data() {
    return {
      slickOptions: {
        infinite: false,
        speed: 300,
        slidesToShow: 1,
        variableWidth: true,
        // Any other options that can be got from plugin documentation
      },
      list_date: [
        { text: "Thứ 2", value: "1" },
        { text: "Thứ 3", value: "2" },
        { text: "Thứ 4", value: "3" },
        { text: "Thứ 5", value: "4" },
        { text: "Thứ 6", value: "5" },
        { text: "Thứ 7", value: "6" },
        { text: "Thứ 8", value: "7" },
      ],
    };
  },
  methods: {
    next() {
      this.$refs.slick.next();
    },

    prev() {
      this.$refs.slick.prev();
    },

    reInit() {
      // Helpful if you have to deal with v-for to update dynamic lists
      this.$nextTick(() => {
        this.$refs.slick.reSlick();
      });
    },

    // Events listeners
    handleAfterChange(event, slick, currentSlide) {
      console.log("handleAfterChange", event, slick, currentSlide);
    },
    handleBeforeChange(event, slick, currentSlide, nextSlide) {
      console.log("handleBeforeChange", event, slick, currentSlide, nextSlide);
    },
    handleBreakpoint(event, slick, breakpoint) {
      console.log("handleBreakpoint", event, slick, breakpoint);
    },
    handleDestroy(event, slick) {
      console.log("handleDestroy", event, slick);
    },
    handleEdge(event, slick, direction) {
      console.log("handleEdge", event, slick, direction);
    },
    handleInit(event, slick) {
      console.log("handleInit", event, slick);
    },
    handleReInit(event, slick) {
      console.log("handleReInit", event, slick);
    },
    handleSetPosition(event, slick) {
      console.log("handleSetPosition", event, slick);
    },
    handleSwipe(event, slick, direction) {
      console.log("handleSwipe", event, slick, direction);
    },
    handleLazyLoaded(event, slick, image, imageSource) {
      console.log("handleLazyLoaded", event, slick, image, imageSource);
    },
    handleLazyLoadError(event, slick, image, imageSource) {
      console.log("handleLazeLoadError", event, slick, image, imageSource);
    },
  },
};
</script>
<style>
@import "~slick-carousel/slick/slick.css";
.slick-slide {
  width: 56px;
  margin: 5px;
}
.slick-prev:before {
  content: "‹";
}
.slick-next:before {
  content: "›";
}
.slick-prev:before,
.slick-next:before {
  font-family: "slick";
  font-size: 32px;
  line-height: 14px;
  opacity: 0.75;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
.slick-prev,
.slick-next {
  font-size: 0;
  line-height: 0;
  position: absolute;
  top: 50%;
  display: block;
  width: 40px;
  height: 40px;
  padding: 0;
  -webkit-transform: translate(0, -50%);
  -ms-transform: translate(0, -50%);
  transform: translate(0, -50%);
  cursor: pointer;
  border: none;
  outline: none;
  background: #faf7f7;
  border-radius: 50%;
  box-shadow: 1px 2px 4px 1px hsla(0, 0%, 87.1%, 0.5);
  cursor: pointer;
  z-index: 2;
}
.slick-prev {
  left: -10px;
}
.slick-next {
  right: -10px;
}
</style>