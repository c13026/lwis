// 1
const mainCarousel1 = new Carousel(document.querySelector(".mainCarousel1"), {
    Dots: false,
});
const thumbCarousel1 = new Carousel(document.querySelector(".thumbCarousel1"), {
    Sync: {
        target: mainCarousel1,

    },
    Dots: false,
    Navigation: false,
    center: true,
    slidesPerPage: 1,
    infinite: true,
});
Fancybox.bind('[data-fancybox="gallery1"]', {
    Carousel: {
        on: {
            change: (that) => {
                mainCarousel1.slideTo(mainCarousel1.findPageForSlide(that.page), {

                });
            },
        },
    },
});


// 2
const mainCarousel2 = new Carousel(document.querySelector(".mainCarousel2"), {
    Dots: false,
});
const thumbCarousel2 = new Carousel(document.querySelector(".thumbCarousel2"), {
    Sync: {
        target: mainCarousel2,

    },
    Dots: false,
    Navigation: false,
    center: true,
    slidesPerPage: 1,
    infinite: true,
});
Fancybox.bind('[data-fancybox="gallery2"]', {
    Carousel: {
        on: {
            change: (that) => {
                mainCarousel2.slideTo(mainCarousel2.findPageForSlide(that.page), {

                });
            },
        },
    },
});


// 3
const mainCarousel3 = new Carousel(document.querySelector(".mainCarousel3"), {
    Dots: false,
});
const thumbCarousel3 = new Carousel(document.querySelector(".thumbCarousel3"), {
    Sync: {
        target: mainCarousel3,
    },
    // Dots: true,
    Dots: false,
    Navigation: false,
    center: true,
    slidesPerPage: 1,
    infinite: true,
});

// Fancybox.getInstance(".mainCarousel4").jumpTo(2);
// Fancybox.getInstance('[data-fancybox="gallery3"]').jumpTo(2);
Fancybox.bind('[data-fancybox="gallery3"]', {
    Carousel: {
        on: {
            change: (that) => {
                mainCarousel3.slideTo(mainCarousel3.findPageForSlide(that.page), {
                });
            },
        },

    },
});


// 4
const mainCarousel4 = new Carousel(document.querySelector(".mainCarousel4"), {
    Dots: false,
});
const thumbCarousel4 = new Carousel(document.querySelector(".thumbCarousel4"), {
    Sync: {
        target: mainCarousel4,
    },
    Dots: false,
    Navigation: false,
    center: true,
    slidesPerPage: 1,
    infinite: true,
});
Fancybox.bind('[data-fancybox="gallery4"]', {
    Carousel: {
        on: {
            change: (that) => {
                mainCarousel4.slideTo(mainCarousel4.findPageForSlide(that.page), {

                });
            },
        },
    },
});


// 5
const mainCarousel5 = new Carousel(document.querySelector(".mainCarousel5"), {
    Dots: false,
});
const thumbCarousel5 = new Carousel(document.querySelector(".thumbCarousel5"), {
    Sync: {
        target: mainCarousel5,
    },
    Dots: false,
    Navigation: false,
    center: true,
    slidesPerPage: 1,
    infinite: true,
});
Fancybox.bind('[data-fancybox="gallery5"]', {
    Carousel: {
        on: {
            change: (that) => {
                mainCarousel5.slideTo(mainCarousel5.findPageForSlide(that.page), {
                });
            },
        },
    },
});


// 6
const mainCarousel6 = new Carousel(document.querySelector(".mainCarousel6"), {
    Dots: false,
});
const thumbCarousel6 = new Carousel(document.querySelector(".thumbCarousel6"), {
    Sync: {
        target: mainCarousel6,

    },
    Dots: false,
    Navigation: false,
    center: true,
    slidesPerPage: 1,
    infinite: true,
});
Fancybox.bind('[data-fancybox="gallery6"]', {
    Carousel: {
        on: {
            change: (that) => {
                mainCarousel6.slideTo(mainCarousel6.findPageForSlide(that.page), {

                });
            },
        },
    },
});


// 7
const mainCarousel7 = new Carousel(document.querySelector(".mainCarousel7"), {
    Dots: false,
});
const thumbCarousel7 = new Carousel(document.querySelector(".thumbCarousel7"), {
    Sync: {
        target: mainCarousel7,

    },
    Dots: false,
    Navigation: false,
    center: true,
    slidesPerPage: 1,
    infinite: true,
});
Fancybox.bind('[data-fancybox="gallery7"]', {
    Carousel: {
        on: {
            change: (that) => {
                mainCarousel7.slideTo(mainCarousel7.findPageForSlide(that.page), {

                });
            },
        },
    },
});


// 8
const mainCarousel8 = new Carousel(document.querySelector(".mainCarousel8"), {
    Dots: false,
});
const thumbCarousel8 = new Carousel(document.querySelector(".thumbCarousel8"), {
    Sync: {
        target: mainCarousel8,

    },
    Dots: false,
    Navigation: false,
    center: true,
    slidesPerPage: 1,
    infinite: true,
});
Fancybox.bind('[data-fancybox="gallery8"]', {
    Carousel: {
        on: {
            change: (that) => {
                mainCarousel8.slideTo(mainCarousel8.findPageForSlide(that.page), {

                });
            },
        },
    },
});


// 9
const mainCarousel9 = new Carousel(document.querySelector(".mainCarousel9"), {
    Dots: false,
});
const thumbCarousel9 = new Carousel(document.querySelector(".thumbCarousel9"), {
    Sync: {
        target: mainCarousel9,

    },
    Dots: false,
    Navigation: false,
    center: true,
    slidesPerPage: 1,
    infinite: true,
});
Fancybox.bind('[data-fancybox="gallery9"]', {
    Carousel: {
        on: {
            change: (that) => {
                mainCarousel9.slideTo(mainCarousel9.findPageForSlide(that.page), {

                });
            },
        },
    },
});


// 10
const mainCarousel10 = new Carousel(document.querySelector(".mainCarousel10"), {
    Dots: false,
});
const thumbCarousel10 = new Carousel(document.querySelector(".thumbCarousel10"), {
    Sync: {
        target: mainCarousel10,

    },
    Dots: false,
    Navigation: false,
    center: true,
    slidesPerPage: 1,
    infinite: true,
});
Fancybox.bind('[data-fancybox="gallery10"]', {
    Carousel: {
        on: {
            change: (that) => {
                mainCarousel10.slideTo(mainCarousel10.findPageForSlide(that.page), {

                });
            },
        },
    },
});


// 11
const mainCarousel11 = new Carousel(document.querySelector(".mainCarousel11"), {
    Dots: false,
});
const thumbCarousel11 = new Carousel(document.querySelector(".thumbCarousel11"), {
    Sync: {
        target: mainCarousel11,

    },
    Dots: false,
    Navigation: false,
    center: true,
    slidesPerPage: 1,
    infinite: true,
});
Fancybox.bind('[data-fancybox="gallery11"]', {
    Carousel: {
        on: {
            change: (that) => {
                mainCarousel11.slideTo(mainCarousel11.findPageForSlide(that.page), {

                });
            },
        },
    },
});


// 12
const mainCarousel12 = new Carousel(document.querySelector(".mainCarousel12"), {
    Dots: false,
});
const thumbCarousel12 = new Carousel(document.querySelector(".thumbCarousel12"), {
    Sync: {
        target: mainCarousel12,

    },
    Dots: false,
    Navigation: false,
    center: true,
    slidesPerPage: 1,
    infinite: true,
});
Fancybox.bind('[data-fancybox="gallery12"]', {
    Carousel: {
        on: {
            change: (that) => {
                mainCarousel12.slideTo(mainCarousel12.findPageForSlide(that.page), {

                });
            },
        },
    },
});


// 13
const mainCarousel13 = new Carousel(document.querySelector(".mainCarousel13"), {
    Dots: false,
});
const thumbCarousel13 = new Carousel(document.querySelector(".thumbCarousel13"), {
    Sync: {
        target: mainCarousel13,

    },
    Dots: false,
    Navigation: false,
    center: true,
    slidesPerPage: 1,
    infinite: true,
});
Fancybox.bind('[data-fancybox="gallery13"]', {
    Carousel: {
        on: {
            change: (that) => {
                mainCarousel13.slideTo(mainCarousel13.findPageForSlide(that.page), {

                });
            },
        },
    },
});


// 14
const mainCarousel14 = new Carousel(document.querySelector(".mainCarousel14"), {
    Dots: false,
});
const thumbCarousel14 = new Carousel(document.querySelector(".thumbCarousel14"), {
    Sync: {
        target: mainCarousel14,

    },
    Dots: false,
    Navigation: false,
    center: true,
    slidesPerPage: 1,
    infinite: true,
});
Fancybox.bind('[data-fancybox="gallery14"]', {
    Carousel: {
        on: {
            change: (that) => {
                mainCarousel14.slideTo(mainCarousel14.findPageForSlide(that.page), {

                });
            },
        },
    },
});


// 15
const mainCarousel15 = new Carousel(document.querySelector(".mainCarousel15"), {
    Dots: false,
});
const thumbCarousel15 = new Carousel(document.querySelector(".thumbCarousel15"), {
    Sync: {
        target: mainCarousel15,

    },
    Dots: false,
    Navigation: false,
    center: true,
    slidesPerPage: 1,
    infinite: true,
});
Fancybox.bind('[data-fancybox="gallery15"]', {
    Carousel: {
        on: {
            change: (that) => {
                mainCarousel15.slideTo(mainCarousel15.findPageForSlide(that.page), {

                });
            },
        },
    },
});


// 16
const mainCarousel16 = new Carousel(document.querySelector(".mainCarousel16"), {
    Dots: false,
});
const thumbCarousel16 = new Carousel(document.querySelector(".thumbCarousel16"), {
    Sync: {
        target: mainCarousel16,

    },
    Dots: false,
    Navigation: false,
    center: true,
    slidesPerPage: 1,
    infinite: true,
});
Fancybox.bind('[data-fancybox="gallery16"]', {
    Carousel: {
        on: {
            change: (that) => {
                mainCarousel16.slideTo(mainCarousel16.findPageForSlide(that.page), {

                });
            },
        },
    },
});


// 17
const mainCarousel17 = new Carousel(document.querySelector(".mainCarousel17"), {
    Dots: false,
});
const thumbCarousel17 = new Carousel(document.querySelector(".thumbCarousel17"), {
    Sync: {
        target: mainCarousel17,

    },
    Dots: false,
    Navigation: false,
    center: true,
    slidesPerPage: 1,
    infinite: true,
});
Fancybox.bind('[data-fancybox="gallery17"]', {
    Carousel: {
        on: {
            change: (that) => {
                mainCarousel17.slideTo(mainCarousel17.findPageForSlide(that.page), {

                });
            },
        },
    },
});


// 18
const mainCarousel18 = new Carousel(document.querySelector(".mainCarousel18"), {
    Dots: false,
});
const thumbCarousel18 = new Carousel(document.querySelector(".thumbCarousel18"), {
    Sync: {
        target: mainCarousel18,

    },
    Dots: false,
    Navigation: false,
    center: true,
    slidesPerPage: 1,
    infinite: true,
});
Fancybox.bind('[data-fancybox="gallery18"]', {
    Carousel: {
        on: {
            change: (that) => {
                mainCarousel18.slideTo(mainCarousel18.findPageForSlide(that.page), {

                });
            },
        },
    },
});


// 19
const mainCarousel19 = new Carousel(document.querySelector(".mainCarousel19"), {
    Dots: false,
});
const thumbCarousel19 = new Carousel(document.querySelector(".thumbCarousel19"), {
    Sync: {
        target: mainCarousel19,

    },
    Dots: false,
    Navigation: false,
    center: true,
    slidesPerPage: 1,
    infinite: true,
});
Fancybox.bind('[data-fancybox="gallery19"]', {
    Carousel: {
        on: {
            change: (that) => {
                mainCarousel19.slideTo(mainCarousel19.findPageForSlide(that.page), {

                });
            },
        },
    },
});


// 20
const mainCarousel20 = new Carousel(document.querySelector(".mainCarousel20"), {
    Dots: false,
});
const thumbCarousel20 = new Carousel(document.querySelector(".thumbCarousel20"), {
    Sync: {
        target: mainCarousel20,

    },
    Dots: false,
    Navigation: false,
    center: true,
    slidesPerPage: 1,
    infinite: true,
});
Fancybox.bind('[data-fancybox="gallery20"]', {
    Carousel: {
        on: {
            change: (that) => {
                mainCarousel20.slideTo(mainCarousel20.findPageForSlide(that.page), {

                });
            },
        },
    },
});


// 21
const mainCarousel21 = new Carousel(document.querySelector(".mainCarousel21"), {
    Dots: false,
});
const thumbCarousel21 = new Carousel(document.querySelector(".thumbCarousel21"), {
    Sync: {
        target: mainCarousel21,

    },
    Dots: false,
    Navigation: false,
    center: true,
    slidesPerPage: 1,
    infinite: true,
});
Fancybox.bind('[data-fancybox="gallery21"]', {
    Carousel: {
        on: {
            change: (that) => {
                mainCarousel21.slideTo(mainCarousel21.findPageForSlide(that.page), {

                });
            },
        },
    },
});


// 22
const mainCarousel22 = new Carousel(document.querySelector(".mainCarousel22"), {
    Dots: false,
});
const thumbCarousel22 = new Carousel(document.querySelector(".thumbCarousel22"), {
    Sync: {
        target: mainCarousel22,

    },
    Dots: false,
    Navigation: false,
    center: true,
    slidesPerPage: 1,
    infinite: true,
});
Fancybox.bind('[data-fancybox="gallery22"]', {
    Carousel: {
        on: {
            change: (that) => {
                mainCarousel22.slideTo(mainCarousel22.findPageForSlide(that.page), {

                });
            },
        },
    },
});


// 23
const mainCarousel23 = new Carousel(document.querySelector(".mainCarousel23"), {
    Dots: false,
});
const thumbCarousel23 = new Carousel(document.querySelector(".thumbCarousel23"), {
    Sync: {
        target: mainCarousel23,

    },
    Dots: false,
    Navigation: false,
    center: true,
    slidesPerPage: 1,
    infinite: true,
});
Fancybox.bind('[data-fancybox="gallery23"]', {
    Carousel: {
        on: {
            change: (that) => {
                mainCarousel23.slideTo(mainCarousel23.findPageForSlide(that.page), {

                });
            },
        },
    },
});


// 24
const mainCarousel24 = new Carousel(document.querySelector(".mainCarousel24"), {
    Dots: false,
});
const thumbCarousel24 = new Carousel(document.querySelector(".thumbCarousel24"), {
    Sync: {
        target: mainCarousel24,

    },
    Dots: false,
    Navigation: false,
    center: true,
    slidesPerPage: 1,
    infinite: true,
});
Fancybox.bind('[data-fancybox="gallery24"]', {
    Carousel: {
        on: {
            change: (that) => {
                mainCarousel24.slideTo(mainCarousel24.findPageForSlide(that.page), {

                });
            },
        },
    },
});


// 25
const mainCarousel25 = new Carousel(document.querySelector(".mainCarousel25"), {
    Dots: false,
});
const thumbCarousel25 = new Carousel(document.querySelector(".thumbCarousel25"), {
    Sync: {
        target: mainCarousel25,

    },
    Dots: false,
    Navigation: false,
    center: true,
    slidesPerPage: 1,
    infinite: true,
});
Fancybox.bind('[data-fancybox="gallery25"]', {
    Carousel: {
        on: {
            change: (that) => {
                mainCarousel25.slideTo(mainCarousel25.findPageForSlide(that.page), {

                });
            },
        },
    },
});


// 26
const mainCarousel26 = new Carousel(document.querySelector(".mainCarousel26"), {
    Dots: false,
});
const thumbCarousel26 = new Carousel(document.querySelector(".thumbCarousel26"), {
    Sync: {
        target: mainCarousel26,

    },
    Dots: false,
    Navigation: false,
    center: true,
    slidesPerPage: 1,
    infinite: true,
});
Fancybox.bind('[data-fancybox="gallery26"]', {
    Carousel: {
        on: {
            change: (that) => {
                mainCarousel26.slideTo(mainCarousel26.findPageForSlide(that.page), {

                });
            },
        },
    },
});


// 27
const mainCarousel27 = new Carousel(document.querySelector(".mainCarousel27"), {
    Dots: false,
});
const thumbCarousel27 = new Carousel(document.querySelector(".thumbCarousel27"), {
    Sync: {
        target: mainCarousel27,

    },
    Dots: false,
    Navigation: false,
    center: true,
    slidesPerPage: 1,
    infinite: true,
});
Fancybox.bind('[data-fancybox="gallery27"]', {
    Carousel: {
        on: {
            change: (that) => {
                mainCarousel27.slideTo(mainCarousel27.findPageForSlide(that.page), {

                });
            },
        },
    },
});


// 28
const mainCarousel28 = new Carousel(document.querySelector(".mainCarousel28"), {
    Dots: false,
});
const thumbCarousel28 = new Carousel(document.querySelector(".thumbCarousel28"), {
    Sync: {
        target: mainCarousel28,

    },
    Dots: false,
    Navigation: false,
    center: true,
    slidesPerPage: 1,
    infinite: true,
});
Fancybox.bind('[data-fancybox="gallery28"]', {
    Carousel: {
        on: {
            change: (that) => {
                mainCarousel28.slideTo(mainCarousel28.findPageForSlide(that.page), {

                });
            },
        },
    },
});


// 29
const mainCarousel29 = new Carousel(document.querySelector(".mainCarousel29"), {
    Dots: false,
});
const thumbCarousel29 = new Carousel(document.querySelector(".thumbCarousel29"), {
    Sync: {
        target: mainCarousel29,

    },
    Dots: false,
    Navigation: false,
    center: true,
    slidesPerPage: 1,
    infinite: true,
});
Fancybox.bind('[data-fancybox="gallery29"]', {
    Carousel: {
        on: {
            change: (that) => {
                mainCarousel29.slideTo(mainCarousel29.findPageForSlide(that.page), {

                });
            },
        },
    },
});


// 30
const mainCarousel30 = new Carousel(document.querySelector(".mainCarousel30"), {
    Dots: false,
});
const thumbCarousel30 = new Carousel(document.querySelector(".thumbCarousel30"), {
    Sync: {
        target: mainCarousel30,

    },
    Dots: false,
    Navigation: false,
    center: true,
    slidesPerPage: 1,
    infinite: true,
});
Fancybox.bind('[data-fancybox="gallery30"]', {
    Carousel: {
        on: {
            change: (that) => {
                mainCarousel30.slideTo(mainCarousel30.findPageForSlide(that.page), {

                });
            },
        },
    },
});


// 31
const mainCarousel31 = new Carousel(document.querySelector(".mainCarousel31"), {
    Dots: false,
});
const thumbCarousel31 = new Carousel(document.querySelector(".thumbCarousel31"), {
    Sync: {
        target: mainCarousel31,

    },
    Dots: false,
    Navigation: false,
    center: true,
    slidesPerPage: 1,
    infinite: true,
});
Fancybox.bind('[data-fancybox="gallery31"]', {
    Carousel: {
        on: {
            change: (that) => {
                mainCarousel31.slideTo(mainCarousel31.findPageForSlide(that.page), {

                });
            },
        },
    },
});


// 32
const mainCarousel32 = new Carousel(document.querySelector(".mainCarousel32"), {
    Dots: false,
});
const thumbCarousel32 = new Carousel(document.querySelector(".thumbCarousel32"), {
    Sync: {
        target: mainCarousel32,

    },
    Dots: false,
    Navigation: false,
    center: true,
    slidesPerPage: 1,
    infinite: true,
});
Fancybox.bind('[data-fancybox="gallery32"]', {
    Carousel: {
        on: {
            change: (that) => {
                mainCarousel32.slideTo(mainCarousel32.findPageForSlide(that.page), {

                });
            },
        },
    },
});


// 33
const mainCarousel33 = new Carousel(document.querySelector(".mainCarousel33"), {
    Dots: false,
});
const thumbCarousel33 = new Carousel(document.querySelector(".thumbCarousel33"), {
    Sync: {
        target: mainCarousel33,

    },
    Dots: false,
    Navigation: false,
    center: true,
    slidesPerPage: 1,
    infinite: true,
});
Fancybox.bind('[data-fancybox="gallery33"]', {
    Carousel: {
        on: {
            change: (that) => {
                mainCarousel33.slideTo(mainCarousel33.findPageForSlide(that.page), {

                });
            },
        },
    },
});


// 34
const mainCarousel34 = new Carousel(document.querySelector(".mainCarousel34"), {
    Dots: false,
});
const thumbCarousel34 = new Carousel(document.querySelector(".thumbCarousel34"), {
    Sync: {
        target: mainCarousel34,

    },
    Dots: false,
    Navigation: false,
    center: true,
    slidesPerPage: 1,
    infinite: true,
});
Fancybox.bind('[data-fancybox="gallery34"]', {
    Carousel: {
        on: {
            change: (that) => {
                mainCarousel34.slideTo(mainCarousel34.findPageForSlide(that.page), {

                });
            },
        },
    },
});


// 35
const mainCarousel35 = new Carousel(document.querySelector(".mainCarousel35"), {
    Dots: false,
});
const thumbCarousel35 = new Carousel(document.querySelector(".thumbCarousel35"), {
    Sync: {
        target: mainCarousel35,

    },
    Dots: false,
    Navigation: false,
    center: true,
    slidesPerPage: 1,
    infinite: true,
});
Fancybox.bind('[data-fancybox="gallery35"]', {
    Carousel: {
        on: {
            change: (that) => {
                mainCarousel35.slideTo(mainCarousel35.findPageForSlide(that.page), {

                });
            },
        },
    },
});


// 36
const mainCarousel36 = new Carousel(document.querySelector(".mainCarousel36"), {
    Dots: false,
});
const thumbCarousel36 = new Carousel(document.querySelector(".thumbCarousel36"), {
    Sync: {
        target: mainCarousel36,

    },
    Dots: false,
    Navigation: false,
    center: true,
    slidesPerPage: 1,
    infinite: true,
});
Fancybox.bind('[data-fancybox="gallery36"]', {
    Carousel: {
        on: {
            change: (that) => {
                mainCarousel36.slideTo(mainCarousel36.findPageForSlide(that.page), {

                });
            },
        },
    },
});


// 37
const mainCarousel37 = new Carousel(document.querySelector(".mainCarousel37"), {
    Dots: false,
});
const thumbCarousel37 = new Carousel(document.querySelector(".thumbCarousel37"), {
    Sync: {
        target: mainCarousel37,

    },
    Dots: false,
    Navigation: false,
    center: true,
    slidesPerPage: 1,
    infinite: true,
});
Fancybox.bind('[data-fancybox="gallery37"]', {
    Carousel: {
        on: {
            change: (that) => {
                mainCarousel37.slideTo(mainCarousel37.findPageForSlide(that.page), {

                });
            },
        },
    },
});


// 38
const mainCarousel38 = new Carousel(document.querySelector(".mainCarousel38"), {
    Dots: false,
});
const thumbCarousel38 = new Carousel(document.querySelector(".thumbCarousel38"), {
    Sync: {
        target: mainCarousel38,

    },
    Dots: false,
    Navigation: false,
    center: true,
    slidesPerPage: 1,
    infinite: true,
});
Fancybox.bind('[data-fancybox="gallery38"]', {
    Carousel: {
        on: {
            change: (that) => {
                mainCarousel38.slideTo(mainCarousel38.findPageForSlide(that.page), {

                });
            },
        },
    },
});


// 39
const mainCarousel39 = new Carousel(document.querySelector(".mainCarousel39"), {
    Dots: false,
});
const thumbCarousel39 = new Carousel(document.querySelector(".thumbCarousel39"), {
    Sync: {
        target: mainCarousel39,

    },
    Dots: false,
    Navigation: false,
    center: true,
    slidesPerPage: 1,
    infinite: true,
});
Fancybox.bind('[data-fancybox="gallery39"]', {
    Carousel: {
        on: {
            change: (that) => {
                mainCarousel39.slideTo(mainCarousel39.findPageForSlide(that.page), {

                });
            },
        },
    },
});


// 40
const mainCarousel40 = new Carousel(document.querySelector(".mainCarousel40"), {
    Dots: false,
});
const thumbCarousel40 = new Carousel(document.querySelector(".thumbCarousel40"), {
    Sync: {
        target: mainCarousel40,

    },
    Dots: false,
    Navigation: false,
    center: true,
    slidesPerPage: 1,
    infinite: true,
});
Fancybox.bind('[data-fancybox="gallery40"]', {
    Carousel: {
        on: {
            change: (that) => {
                mainCarousel40.slideTo(mainCarousel40.findPageForSlide(that.page), {

                });
            },
        },
    },
});


// 41
const mainCarousel41 = new Carousel(document.querySelector(".mainCarousel41"), {
    Dots: false,
});
const thumbCarousel41 = new Carousel(document.querySelector(".thumbCarousel41"), {
    Sync: {
        target: mainCarousel41,

    },
    Dots: false,
    Navigation: false,
    center: true,
    slidesPerPage: 1,
    infinite: true,
});
Fancybox.bind('[data-fancybox="gallery41"]', {
    Carousel: {
        on: {
            change: (that) => {
                mainCarousel41.slideTo(mainCarousel41.findPageForSlide(that.page), {

                });
            },
        },
    },
});


// 42
const mainCarousel42 = new Carousel(document.querySelector(".mainCarousel42"), {
    Dots: false,
});
const thumbCarousel42 = new Carousel(document.querySelector(".thumbCarousel42"), {
    Sync: {
        target: mainCarousel42,

    },
    Dots: false,
    Navigation: false,
    center: true,
    slidesPerPage: 1,
    infinite: true,
});
Fancybox.bind('[data-fancybox="gallery42"]', {
    Carousel: {
        on: {
            change: (that) => {
                mainCarousel42.slideTo(mainCarousel42.findPageForSlide(that.page), {

                });
            },
        },
    },
});


// 43
const mainCarousel43 = new Carousel(document.querySelector(".mainCarousel43"), {
    Dots: false,
});
const thumbCarousel43 = new Carousel(document.querySelector(".thumbCarousel43"), {
    Sync: {
        target: mainCarousel43,

    },
    Dots: false,
    Navigation: false,
    center: true,
    slidesPerPage: 1,
    infinite: true,
});
Fancybox.bind('[data-fancybox="gallery43"]', {
    Carousel: {
        on: {
            change: (that) => {
                mainCarousel43.slideTo(mainCarousel43.findPageForSlide(that.page), {

                });
            },
        },
    },
});


// 44
const mainCarousel44 = new Carousel(document.querySelector(".mainCarousel44"), {
    Dots: false,
});
const thumbCarousel44 = new Carousel(document.querySelector(".thumbCarousel44"), {
    Sync: {
        target: mainCarousel44,

    },
    Dots: false,
    Navigation: false,
    center: true,
    slidesPerPage: 1,
    infinite: true,
});
Fancybox.bind('[data-fancybox="gallery44"]', {
    Carousel: {
        on: {
            change: (that) => {
                mainCarousel44.slideTo(mainCarousel44.findPageForSlide(that.page), {

                });
            },
        },
    },
});

// 45
const mainCarousel45 = new Carousel(document.querySelector(".mainCarousel45"), {
    Dots: false,
});
const thumbCarousel45 = new Carousel(document.querySelector(".thumbCarousel45"), {
    Sync: {
        target: mainCarousel45,

    },
    Dots: false,
    Navigation: false,
    center: true,
    slidesPerPage: 1,
    infinite: true,
});
Fancybox.bind('[data-fancybox="gallery45"]', {
    Carousel: {
        on: {
            change: (that) => {
                mainCarousel45.slideTo(mainCarousel45.findPageForSlide(that.page), {

                });
            },
        },
    },
});

// 46
const mainCarousel46 = new Carousel(document.querySelector(".mainCarousel46"), {
    Dots: false,
});
const thumbCarousel46 = new Carousel(document.querySelector(".thumbCarousel46"), {
    Sync: {
        target: mainCarousel46,

    },
    Dots: false,
    Navigation: false,
    center: true,
    slidesPerPage: 1,
    infinite: true,
});
Fancybox.bind('[data-fancybox="gallery46"]', {
    Carousel: {
        on: {
            change: (that) => {
                mainCarousel46.slideTo(mainCarousel46.findPageForSlide(that.page), {

                });
            },
        },
    },
});

// 47
const mainCarousel47 = new Carousel(document.querySelector(".mainCarousel47"), {
    Dots: false,
});
const thumbCarousel47 = new Carousel(document.querySelector(".thumbCarousel47"), {
    Sync: {
        target: mainCarousel47,

    },
    Dots: false,
    Navigation: false,
    center: true,
    slidesPerPage: 1,
    infinite: true,
});
Fancybox.bind('[data-fancybox="gallery47"]', {
    Carousel: {
        on: {
            change: (that) => {
                mainCarousel47.slideTo(mainCarousel47.findPageForSlide(that.page), {

                });
            },
        },
    },
});

// 48
const mainCarousel48 = new Carousel(document.querySelector(".mainCarousel48"), {
    Dots: false,
});
const thumbCarousel48 = new Carousel(document.querySelector(".thumbCarousel48"), {
    Sync: {
        target: mainCarousel48,

    },
    Dots: false,
    Navigation: false,
    center: true,
    slidesPerPage: 1,
    infinite: true,
});
Fancybox.bind('[data-fancybox="gallery48"]', {
    Carousel: {
        on: {
            change: (that) => {
                mainCarousel48.slideTo(mainCarousel48.findPageForSlide(that.page), {

                });
            },
        },
    },
});
// 49
const mainCarousel49 = new Carousel(document.querySelector(".mainCarousel49"), {
    Dots: false,
});
const thumbCarousel49 = new Carousel(document.querySelector(".thumbCarousel49"), {
    Sync: {
        target: mainCarousel49,

    },
    Dots: false,
    Navigation: false,
    center: true,
    slidesPerPage: 1,
    infinite: true,
});
Fancybox.bind('[data-fancybox="gallery49"]', {
    Carousel: {
        on: {
            change: (that) => {
                mainCarousel49.slideTo(mainCarousel49.findPageForSlide(that.page), {

                });
            },
        },
    },
});

// 50
const mainCarousel50 = new Carousel(document.querySelector(".mainCarousel50"), {
    Dots: false,
});
const thumbCarousel50 = new Carousel(document.querySelector(".thumbCarousel50"), {
    Sync: {
        target: mainCarousel50,

    },
    Dots: false,
    Navigation: false,
    center: true,
    slidesPerPage: 1,
    infinite: true,
});
Fancybox.bind('[data-fancybox="gallery50"]', {
    Carousel: {
        on: {
            change: (that) => {
                mainCarousel50.slideTo(mainCarousel50.findPageForSlide(that.page), {

                });
            },
        },
    },
});

// 51
const mainCarousel51 = new Carousel(document.querySelector(".mainCarousel51"), {
    Dots: false,
});
const thumbCarousel51 = new Carousel(document.querySelector(".thumbCarousel51"), {
    Sync: {
        target: mainCarousel51,

    },
    Dots: false,
    Navigation: false,
    center: true,
    slidesPerPage: 1,
    infinite: true,
});
Fancybox.bind('[data-fancybox="gallery51"]', {
    Carousel: {
        on: {
            change: (that) => {
                mainCarousel51.slideTo(mainCarousel51.findPageForSlide(that.page), {

                });
            },
        },
    },
});

// 52
const mainCarousel52 = new Carousel(document.querySelector(".mainCarousel52"), {
    Dots: false,
});
const thumbCarousel52 = new Carousel(document.querySelector(".thumbCarousel52"), {
    Sync: {
        target: mainCarousel52,

    },
    Dots: false,
    Navigation: false,
    center: true,
    slidesPerPage: 1,
    infinite: true,
});
Fancybox.bind('[data-fancybox="gallery52"]', {
    Carousel: {
        on: {
            change: (that) => {
                mainCarousel52.slideTo(mainCarousel52.findPageForSlide(that.page), {

                });
            },
        },
    },
});

// 53
const mainCarousel53 = new Carousel(document.querySelector(".mainCarousel53"), {
    Dots: false,
});
const thumbCarousel53 = new Carousel(document.querySelector(".thumbCarousel53"), {
    Sync: {
        target: mainCarousel53,

    },
    Dots: false,
    Navigation: false,
    center: true,
    slidesPerPage: 1,
    infinite: true,
});
Fancybox.bind('[data-fancybox="gallery53"]', {
    Carousel: {
        on: {
            change: (that) => {
                mainCarousel53.slideTo(mainCarousel53.findPageForSlide(that.page), {

                });
            },
        },
    },
});

// 54
const mainCarousel54 = new Carousel(document.querySelector(".mainCarousel54"), {
    Dots: false,
});
const thumbCarousel54 = new Carousel(document.querySelector(".thumbCarousel54"), {
    Sync: {
        target: mainCarousel54,

    },
    Dots: false,
    Navigation: false,
    center: true,
    slidesPerPage: 1,
    infinite: true,
});
Fancybox.bind('[data-fancybox="gallery54"]', {
    Carousel: {
        on: {
            change: (that) => {
                mainCarousel54.slideTo(mainCarousel54.findPageForSlide(that.page), {

                });
            },
        },
    },
});

// 55
const mainCarousel55 = new Carousel(document.querySelector(".mainCarousel55"), {
    Dots: false,
});
const thumbCarousel55 = new Carousel(document.querySelector(".thumbCarousel55"), {
    Sync: {
        target: mainCarousel55,

    },
    Dots: false,
    Navigation: false,
    center: true,
    slidesPerPage: 1,
    infinite: true,
});
Fancybox.bind('[data-fancybox="gallery55"]', {
    Carousel: {
        on: {
            change: (that) => {
                mainCarousel55.slideTo(mainCarousel55.findPageForSlide(that.page), {

                });
            },
        },
    },
});

// 56
const mainCarousel56 = new Carousel(document.querySelector(".mainCarousel56"), {
    Dots: false,
});
const thumbCarousel56 = new Carousel(document.querySelector(".thumbCarousel56"), {
    Sync: {
        target: mainCarousel56,

    },
    Dots: false,
    Navigation: false,
    center: true,
    slidesPerPage: 1,
    infinite: true,
});
Fancybox.bind('[data-fancybox="gallery56"]', {
    Carousel: {
        on: {
            change: (that) => {
                mainCarousel56.slideTo(mainCarousel56.findPageForSlide(that.page), {

                });
            },
        },
    },
});

// 57
const mainCarousel57 = new Carousel(document.querySelector(".mainCarousel57"), {
    Dots: false,
});
const thumbCarousel57 = new Carousel(document.querySelector(".thumbCarousel57"), {
    Sync: {
        target: mainCarousel57,

    },
    Dots: false,
    Navigation: false,
    center: true,
    slidesPerPage: 1,
    infinite: true,
});
Fancybox.bind('[data-fancybox="gallery57"]', {
    Carousel: {
        on: {
            change: (that) => {
                mainCarousel57.slideTo(mainCarousel57.findPageForSlide(that.page), {

                });
            },
        },
    },
});

// 58
const mainCarousel58 = new Carousel(document.querySelector(".mainCarousel58"), {
    Dots: false,
});
const thumbCarousel58 = new Carousel(document.querySelector(".thumbCarousel58"), {
    Sync: {
        target: mainCarousel58,

    },
    Dots: false,
    Navigation: false,
    center: true,
    slidesPerPage: 1,
    infinite: true,
});
Fancybox.bind('[data-fancybox="gallery58"]', {
    Carousel: {
        on: {
            change: (that) => {
                mainCarousel58.slideTo(mainCarousel58.findPageForSlide(that.page), {

                });
            },
        },
    },
});

// 59
const mainCarousel59 = new Carousel(document.querySelector(".mainCarousel59"), {
    Dots: false,
});
const thumbCarousel59 = new Carousel(document.querySelector(".thumbCarousel59"), {
    Sync: {
        target: mainCarousel59,

    },
    Dots: false,
    Navigation: false,
    center: true,
    slidesPerPage: 1,
    infinite: true,
});
Fancybox.bind('[data-fancybox="gallery59"]', {
    Carousel: {
        on: {
            change: (that) => {
                mainCarousel59.slideTo(mainCarousel59.findPageForSlide(that.page), {

                });
            },
        },
    },
});

// 60
const mainCarousel60 = new Carousel(document.querySelector(".mainCarousel60"), {
    Dots: false,
});
const thumbCarousel60 = new Carousel(document.querySelector(".thumbCarousel60"), {
    Sync: {
        target: mainCarousel60,

    },
    Dots: false,
    Navigation: false,
    center: true,
    slidesPerPage: 1,
    infinite: true,
});
Fancybox.bind('[data-fancybox="gallery60"]', {
    Carousel: {
        on: {
            change: (that) => {
                mainCarousel60.slideTo(mainCarousel60.findPageForSlide(that.page), {

                });
            },
        },
    },
});

// 61
const mainCarousel61 = new Carousel(document.querySelector(".mainCarousel61"), {
    Dots: false,
});
const thumbCarousel61 = new Carousel(document.querySelector(".thumbCarousel61"), {
    Sync: {
        target: mainCarousel61,

    },
    Dots: false,
    Navigation: false,
    center: true,
    slidesPerPage: 1,
    infinite: true,
});
Fancybox.bind('[data-fancybox="gallery61"]', {
    Carousel: {
        on: {
            change: (that) => {
                mainCarousel61.slideTo(mainCarousel61.findPageForSlide(that.page), {

                });
            },
        },
    },
});

// 62
const mainCarousel62 = new Carousel(document.querySelector(".mainCarousel62"), {
    Dots: false,
});
const thumbCarousel62 = new Carousel(document.querySelector(".thumbCarousel62"), {
    Sync: {
        target: mainCarousel62,

    },
    Dots: false,
    Navigation: false,
    center: true,
    slidesPerPage: 1,
    infinite: true,
});
Fancybox.bind('[data-fancybox="gallery62"]', {
    Carousel: {
        on: {
            change: (that) => {
                mainCarousel62.slideTo(mainCarousel62.findPageForSlide(that.page), {

                });
            },
        },
    },
});