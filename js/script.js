document.addEventListener("DOMContentLoaded", function () {

  //バーガーメニュー
  const burger = document.getElementById('js-header-burger');
  const navMenu = document.getElementById('js-header-menu');
  const header = document.getElementById('js-header');
  const body = document.querySelector('body');

  burger.addEventListener('click', function () {
    this.classList.toggle('open');

    if (this.classList.contains('open')) {

      header.classList.add('active');
      navMenu.inert = false;
      burger.setAttribute('aria-expanded', true);
      body.classList.add('locked');
    } else {

      header.classList.remove('active');
      navMenu.inert = false;
      burger.setAttribute('aria-expanded', false);
      body.classList.remove('locked');
    }
  });

  //ヘッダーnavリンクを押してnavメニューを閉じる処理
  const headerNavLinks = document.querySelectorAll('.l-header__navListItemLink');

  function closeMobileMenu(headerNavLinks) {
    for (const headerNavLink of headerNavLinks) {
      headerNavLink.addEventListener('click', function () {
        navMenu.classList.remove('active');
        burger.classList.remove('active');
      })
    }
  }

  closeMobileMenu(headerNavLinks);

  //TOPページの場合、ファーストビューまでスクロールしたらヘッダーを固定する処理
  const frontHero = document.getElementById('js-frontHeroSwiper');

  if (frontHero) {
    const frontHeroObserver = new IntersectionObserver(setHeaderFixed, {
      root: null,
      threshold: 0
    });

    frontHeroObserver.observe(frontHero);

    function setHeaderFixed([entry]) {
      if (entry.intersectionRatio === 0) {
        header.classList.add('l-header-sub');
      } else {
        header.classList.remove('l-header-sub');
      }
    }
  }

  // swiper
  const swiper = new Swiper('#js-frontHeroSwiper', {
    slidesPerView: 1,
    loopAdditionalSlides: 2,
    loop: true,
    speed: 2750,
    autoplay: {
      delay: 3500,
      disableOnInteraction: false
    },
    effect: 'fade',
    fadeEffect: {
      crossFade: true,
    },
  });

  const frontLeadSwiper = new Swiper('#js-frontLeadSwiper', {
    slidesPerView: 'auto',
    centerdSlide: true,
    loopAdditionalSlides: 5,
    loop: true,
    speed: 7000,
    autoplay: {
      delay: 0,
    },
    on: {
      init: function () {
        const slides = document.querySelectorAll('#js-frontLeadSwiper .swiper-slide');

        slides.forEach((slide, index) => {
          if (!slide.classList.contains('swiper-slide-duplicate')) {
            if (index % 2 === 1) {
              slide.classList.add('is-offset');
            }
          }
        });
      }
    }
  });

  const swiperFrontStaff = new Swiper('#js-frontMemberSwiper', {
    slidesPerView: 'auto',
    loop: true,
    speed: 1500,
    autoplay: {
      delay: 2000,
    },
    navigation: {
      nextEl: ".js-frontMember__swiperBtnNext",
      prevEl: ".js-frontMember__swiperBtnPrev",
    },
    on: {
      init: function () {
        const slides = document.querySelectorAll('#js-frontMemberSwiper .swiper-slide');

        slides.forEach((slide, index) => {
          if (!slide.classList.contains('swiper-slide-duplicate')) {
            if (index % 2 === 1) {
              slide.classList.add('is-offset');
            }
          }
        });
      }
    }
  });

  //ブログカードの高さを合わせる処理
  const blogCardthumbs = document.querySelectorAll('.js-blogCard__thumb');

  const setBlogThumbImgHeight = () => {
    blogCardthumbs.forEach((blogCardThumb) => {
      const blogCardBody = blogCardThumb.nextElementSibling;

      blogCardThumb.style.height = `${blogCardBody.offsetHeight}px`;
      blogCardThumb.classList.add('setHeight');
    });
  }

  window.addEventListener('load', setBlogThumbImgHeight);
  window.addEventListener('resize', setBlogThumbImgHeight);

  //スクロールバーの幅を取得してCSS変数に格納  staffページのみで使用（インナー要素をはみ出す装飾のスタイリングの為）
  const updateScrollBarWidth = () => {
    const scrollBarWidth = window.innerWidth - document.documentElement.clientWidth;
    document.documentElement.style.setProperty('--scrollbar-width', `${scrollBarWidth}px`)
  }

  window.addEventListener('load', updateScrollBarWidth);
  window.addEventListener('resize', updateScrollBarWidth);

  // スムーススクロール
  const hash_anchors = document.querySelectorAll('a[href^="#"]');
  const headerHeight = document.getElementById('js-header').offsetHeight;

  for (const anchor of hash_anchors) {
    anchor.addEventListener('click', (e) => {
      const href = e.currentTarget.getAttribute('href');
      const target = (href == "" || href == "#") ? 'html' : href;

      if (target !== 'html') {
        const target_elem = document.querySelector(target);
        console.log(target_elem);

        if (target_elem) {
          e.preventDefault();
        }

        let target_position = target_elem.offsetTop;

        target_position = target_elem.offsetTop - headerHeight;
        console.log(target_position);

        window.scrollTo({
          top: target_position,
          left: 0,
          behavior: "smooth"
        });
      }
    });
  }

  // ページ外のid要素へのスムーススクロール処理
  const urlHash = location.hash;
  if (urlHash) {
    const target = jQuery(urlHash);
    if (target.length) {
      // ページトップから開始（ブラウザ差異を考慮して併用）
      history.replaceState(null, '', window.location.pathname);
      jQuery("html,body").stop().scrollTop(0);

      jQuery(window).on("load", function () {
        const headerHeight = jQuery("header").outerHeight();
        const position = target.offset().top - headerHeight - 20;
        jQuery("html, body").animate({ scrollTop: position }, 500, "swing");

        // ハッシュを再設定
        history.replaceState(null, '', window.location.pathname + urlHash);
      });
    }
  }

  //TOPページの要素をスクロールでふわっと表示させる処理
  const fadeElements = document.querySelectorAll('.js-fadeIn');

  let options = '';
  if (window.innerWidth <= 767) {
    options = {
      rootMargin: '0px 0px -40% 0px',
      threshold: 0
    }
  } else if (window.innerWidth >= 768) {
    options = {
      rootMargin: '0px 0px -30% 0px',
      threshold: 0
    }
  }

  const observer = new IntersectionObserver(obsCB, options);

  fadeElements.forEach((elm) => {
    observer.observe(elm);
  });

  function obsCB(entries) {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
      }
    });
  }

  //staff詳細ページの目次のアクティブ化の処理
  if (location.pathname.includes('staff')) {

    const tocLinks = document.querySelectorAll('.js-staffTocLink');
    const staffH2Headings = Array.from(tocLinks).map(link => {
      const id = link.getAttribute('href').slice(1);
      return document.getElementById(id);
    });

    const obsOptions = {
      rootMargin: '0px 0px -55% 0px'
    }

    const staffPageobserver = new IntersectionObserver(setTocLinkActive, obsOptions);

    staffH2Headings.forEach((staffH2Heading) => {
      staffPageobserver.observe(staffH2Heading);
    });

    function setTocLinkActive(entries) {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          const currentActiveTocLink = document.querySelector('.js-staffTocLink.active');
          if (currentActiveTocLink !== null) {
            currentActiveTocLink.classList.remove('active');
          }
          const targetTocLink = document.querySelector('a[href="#' + entry.target.getAttribute('id') + '"]');
          targetTocLink.classList.add('active');
        }
      });
    }
  }

  //FAQアコーディオンの処理
  const summaries = document.querySelectorAll('.js-faqSummary');

  const openingAnimation = (element) => [
    { height: 0, opacity: 0, },
    { height: `${element.offsetHeight}px`, opacity: 1, }
  ];

  const closingAnimation = (element) => [
    { height: `${element.offsetHeight}px`, opacity: 1, },
    { height: 0, opacity: 0, },
  ];

  const AnimationTiming = {
    duration: 300,
    easing: 'ease-in'
  }

  summaries.forEach((summary) => {
    summary.addEventListener('click', (e) => {
      e.preventDefault();

      const details = e.currentTarget.parentElement;
      const answer = details.querySelector('.js-faqAnswer');

      if (details.open) {
        const closeAnimObj = answer.animate(closingAnimation(answer), AnimationTiming);

        closeAnimObj.onfinish = () => {
          details.removeAttribute('open');
        };

      } else {
        details.setAttribute('open', true);
        answer.animate(openingAnimation(answer), AnimationTiming);
      }
    });
  });

  //entryページの必須項目を入力するまでボタンを非活性化する処理
  if (location.pathname.includes('entry')) {
    const form = document.getElementById('js-entryForm__form');
    const requiredInputs = form.querySelectorAll('.js-input-required');
    const radios = form.querySelectorAll('input[type="radio"]');
    //プラグインの仕様上、ラジオボタンにクラス名を直接付与できない為、ラジオボタンへクラス名.js-input-requiredは付与せず。
    // その為、ラジオボタン以外の必須項目とラジオボタンの変数をマージ
    const mergedRequiredInputs = [...requiredInputs, ...radios];
    const acceptance = form.querySelector('input[name="field_privacy"]'); // acceptanceのinput要素を取得
    const submitButton = document.getElementById('js-entryForm__submitBtn');

    function checkInputs() {
      let ExceptRadioInputsFilled = true;
      let radioCheckedArray = [];
      let radioChecked = true;

      mergedRequiredInputs.forEach((input) => {
        const tag = input.tagName.toLowerCase();

        //チェックボックス以外の必須項目の入力確認
        if (input.type === 'text' || input.type === 'email' || input.type === 'tel' || tag === 'textarea' || tag === 'select') {
          if (input.value.trim() === '') {
            ExceptRadioInputsFilled = false;
          }
        } else if (input.type === 'checkbox' && !input.checked) {
          ExceptRadioInputsFilled = false;
        } else if (input.type === 'radio') {
          if (input.checked) {
            radioCheckedArray.push(true);
          } else {
            radioCheckedArray.push(false);
          }
        }
      });

      if (!radioCheckedArray.includes(true)) {
        radioChecked = false;
      }

      const acceptanceChecked = acceptance ? acceptance.checked : false;

      if (ExceptRadioInputsFilled && radioChecked && acceptanceChecked) {
        submitButton.disabled = false;
        submitButton.classList.remove('disabled')
      } else {
        submitButton.disabled = true;
        submitButton.classList.add('disabled')
      }
    }

    mergedRequiredInputs.forEach((input) => {
      input.addEventListener('input', checkInputs);
    });

    if (acceptance) {
      acceptance.addEventListener('change', checkInputs);
    }

    checkInputs();
  }

});
