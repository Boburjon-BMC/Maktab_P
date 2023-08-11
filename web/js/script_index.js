window.addEventListener('DOMContentLoaded',()=>{
        'use strict';
                const section3_cart_img_show = document.querySelector('.section3_cart_img_show')
                const section3_cart_img_hide = document.querySelector('.section3_cart_img_hide')
                const btn_play = document.querySelector('.btn_play');
                const video_section3_tab1 = document.querySelector('.video_section3_tab1');
                
                btn_play.addEventListener('click', ()=>{
                        section3_cart_img_show.classList.add('active');
                        video_section3_tab1.play();
                        document.body.style.overflow = 'hidden';
                });
            
                section3_cart_img_hide.addEventListener('click', (e)=>{
                        section3_cart_img_show.classList.remove('active');
                        video_section3_tab1.pause();
                        document.body.style.overflow = 'auto';
                });
});