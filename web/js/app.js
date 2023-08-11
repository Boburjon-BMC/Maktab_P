document.addEventListener('DOMContentLoaded', ()=>{
        'use strict';
      const tabContent = document.querySelectorAll('.Tab_C');
      const tabWraperItems = document.querySelector('.tab_wrap');
      const tabItem = document.querySelectorAll('.tabItem');

      function hide_Tab(){
          tabContent.forEach(element=>{
              element.style.display = "none";
          });
          tabItem.forEach(element=>{
              element.classList.remove('active');
          })
      }
      function show_Tab(i = 0){
          tabContent[i].style.display = "flex";
          tabItem[i].classList.add('active');
      }
  
      hide_Tab();
      show_Tab(0);
  
      tabWraperItems.addEventListener("click", (element) =>{
          const target = element.target;
          if(target && target.classList.contains('tabItem')){
              tabItem.forEach((item, index) =>{
                  if(target == item){
                      hide_Tab();
                      show_Tab(index);
                  }
              });
          }
      });
        const progressCircle = document.querySelector(".autoplay-progress svg");
        const progressContent = document.querySelector(".autoplay-progress span");
        var swiper = new Swiper(".mySwiper", {
          spaceBetween: 30,
          centeredSlides: true,
          autoplay: {
            delay: 10000,
            disableOnInteraction: false
          },
          pagination: {
            el: ".swiper-pagination",
            clickable: true
          },
          navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev"
          },
          on: {
            autoplayTimeLeft(s, time, progress) {
              progressCircle.style.setProperty("--progress", 1 - progress);
              progressContent.textContent = `${Math.ceil(time / 1000)}s`;
            }
          }
        });

        
        const hamburber_btn = document.querySelector('.hamburget_btn'),
                  hamburber = document.querySelector('.hamburger_wrap'),
                  hamburger_icon = document.querySelector('.hamburger_icon'),
                  hamburger_close = document.querySelector('.hamburger_close'),
                  registration_btn = document.querySelector('.registration-btn'),
                  registration_wrap = document.querySelector('.registration_wrap'),
                  username = document.querySelector('.username'),
                  user_regist = document.querySelector('.user_regist'),
                  password = document.querySelector('#password'),
                  pas_regist = document.querySelector('.pas_regist'),
                  exit_regist = document.querySelector('.exit_regis'),
                  regis_btn_open = document.querySelector('.regis_btn_open'),
                  eyes_regest = document.querySelector('.eyes_regest');
    
    
        // hamburger
         hamburber_btn.addEventListener('click', function () {
            hamburber.classList.remove('hide');
            document.body.style.overflow = 'hidden';

        });

        hamburber_btn.addEventListener('mouseover', ()=>{
            hamburger_icon.classList.add('fa-flip');
        });

        hamburber_btn.addEventListener('mouseout', ()=>{
            hamburger_icon.classList.remove('fa-flip');
        });

        window.addEventListener('click', (e)=>{
            if(e.target.classList.contains('hamburger_wrap')){
                hamburber.classList.add('hide');
            }
            if(e.target.classList.contains('registration_wrap')){
                registration_wrap.classList.remove('active');
                document.body.style.overflow = 'auto';
            }
        });

        hamburger_close.addEventListener('click', ()=>{
            hamburber.classList.add('hide');
        });
    
    
        // registration
        function register_show(item, item2){
            item.style.border = '1px solid lime';
            item2.style.color = 'lime';
            item2.style.borderRight = '1px solid lime';
        }
        function register_hide(item, item2){
            item.style.border = '1px solid red';
            item2.style.color = 'red';
            item2.style.borderRight = '1px solid red';
        }
        registration_btn.addEventListener('click',(e)=>{
            username.value == 0 ? register_hide(username, user_regist) : register_show(username, user_regist);
            password.value == 0 ? register_hide(password, pas_regist) : register_show(password, pas_regist);
        
        });
    
        regis_btn_open.addEventListener('click', ()=>{
            registration_wrap.classList.add('active');
            registration_wrap.style.animation = 'registration_wrap .5s 1 forwards';
            document.body.style.overflow = 'hidden';
        });
        exit_regist.addEventListener('click', (e)=>{
            registration_wrap.classList.remove('active');
            document.body.style.overflow = 'auto';

        });

        document.addEventListener('keydown', (e)=>{
          if(e.code === 'Escape'){
            registration_wrap.classList.remove('active');
            hamburber.classList.add('hide');
            document.body.style.overflow = 'auto';
          }
        })
        
        eyes_regest.addEventListener('click', (e)=>{
            const target = e.target
            if(target && target.classList.contains('fa-eye-slash')){
                target.classList.remove('fa-eye-slash');
                target.classList.add('fa-eye');
                password.type = 'text';
            }
            else if(target && target.classList.contains("fa-eye")){
                target.classList.remove('fa-eye');
                target.classList.add('fa-eye-slash');
                password.type = 'password';
            }
        });
  
        

        
        
    
    });
