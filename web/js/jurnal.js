document.addEventListener('DOMContentLoaded', function(){
    'use strict';
    const malumot_btn = document.querySelector('.malumot_btn');
    const oquv_yili = document.querySelector('#oquv_yili');
    const sinf = document.querySelector('#sinf');
    const fan = document.querySelector('#fan');
    const chorak_1 = document.querySelectorAll('#chorak_1');
    const chorak_2 = document.querySelectorAll('#chorak_2');
    const chorak_3 = document.querySelectorAll('#chorak_3');
    const chorak_4 = document.querySelectorAll('#chorak_4');
    const yillik = document.querySelectorAll('#yillik');
    const Imtihon = document.querySelectorAll('#Imtihon');
    const oxirgi_natija = document.querySelectorAll('#oxirgi_natija');
    const natija_wrap_table = document.querySelector('.natija_wrap table');
    const natija_wrap = document.querySelector('.natija_wrap');
    const one_window_tich_i = document.querySelector('.one_window_tich_i');
    const fan_name = document.querySelector('.fan_name');

    
    function chorak_hide(array){
        array.forEach(element => {
            element.style.display = 'none'
        });
    }
    function chorak_show(array){
        array.forEach(element => {
            element.style.display = 'table-cell'
        });
    }
    
    
    
    
    malumot_btn.addEventListener('click', ()=>{
        oquv_yili.addEventListener('click', ()=>{oquv_yili.style.border = '2px solid #051B57'})
        sinf.addEventListener('click', ()=>{sinf.style.border = '2px solid #051B57'})
        o_davri.addEventListener('click', ()=>{o_davri.style.border = '2px solid #051B57'})
        if(oquv_yili.value === ''){
            oquv_yili.style.border = '2px solid red'
        }
        if(sinf.value === ''){
            sinf.style.border = '2px solid red'
        }
        if(fan.value === ''){
            fan.style.border = '2px solid red'
        }
        
        else if(oquv_yili.value !== '' && fan.value !== '' && sinf.value !== ''){
            if(o_davri.value == 1){
                chorak_hide(chorak_2)
                chorak_hide(chorak_3)
                chorak_hide(chorak_4)
                chorak_hide(yillik)
                chorak_hide(Imtihon)
                chorak_hide(oxirgi_natija)
                chorak_show(chorak_1)
            }
            else if(o_davri.value == 2){
                chorak_hide(chorak_1)
                chorak_show(chorak_2)
                chorak_hide(chorak_3)
                chorak_hide(chorak_4)
                chorak_hide(yillik)
                chorak_hide(Imtihon)
                chorak_hide(oxirgi_natija)
            }
            else if(o_davri.value == 3){
                chorak_hide(chorak_1)
                chorak_show(chorak_3)
                chorak_hide(chorak_2)
                chorak_hide(chorak_4)
                chorak_hide(yillik)
                chorak_hide(Imtihon)
                chorak_hide(oxirgi_natija)
            }
            else if(o_davri.value == 4){
                chorak_hide(chorak_1)
                chorak_hide(chorak_2)
                chorak_hide(chorak_3)
                chorak_show(chorak_4)
                chorak_hide(yillik)
                chorak_hide(Imtihon)
                chorak_hide(oxirgi_natija)
            }
            else if(o_davri.value == 5){
                chorak_hide(chorak_1)
                chorak_hide(chorak_2)
                chorak_hide(chorak_3)
                chorak_hide(chorak_4)
                chorak_show(yillik)
                chorak_show(Imtihon)
                chorak_hide(oxirgi_natija)
            }
            else if(o_davri.value == 6){
                chorak_show(chorak_1)
                chorak_show(chorak_2)
                chorak_show(chorak_3)
                chorak_show(chorak_4)
                chorak_show(yillik)
                chorak_show(Imtihon)
                chorak_show(oxirgi_natija)
            }
        }


        if(oquv_yili.value !== '' && fan.value !== '' && sinf.value !== ''){
            natija_wrap.classList.add('active');
            one_window_tich_i.classList.remove('active1');

        }


        console.log(fan.value);



    });
        if(oquv_yili.value !== '' && fan.value !== '' && sinf.value !== ''){
            natija_wrap.classList.add('active');
            one_window_tich_i.classList.remove('active1')
        }


});