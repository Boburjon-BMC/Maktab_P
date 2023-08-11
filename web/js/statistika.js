document.addEventListener('DOMContentLoaded',() =>{
    'use strict';
    const seclectImage = document.querySelector('.img_dowland');
    const inputFile = document.querySelector('#img_file');
    const img1 = document.querySelector('.img');
    const img_dowland_I = document.querySelector('.icon i')



    // tic_input_img
    seclectImage.addEventListener('click',()=>{
        inputFile.click();
    });
    
    inputFile.addEventListener('change',function (){
        const image = this.files[0];
        const reader = new FileReader();
        reader.onload = () =>{
            const imgUrl = reader.result;
            const img = document.createElement('img');
            
            img.src = imgUrl;
            img1.appendChild(img);
            img_dowland_I.classList.remove('active')
        };
        reader.readAsDataURL(image);
    });

    // mediya hamburger
    const btn_button = document.querySelector('.btn_button')
    const boshqaruv_oynasi = document.querySelector('.boshqaruv_oynasi')
    btn_button.addEventListener('click', ()=>{
        boshqaruv_oynasi.classList.toggle('active')
    });

    // tich_input_name
    const tich_table = document.querySelector('#tich_table');
    const tich_contener_wrap = document.querySelector('#contener_wrap_tich')
    const one_window_tich_input = document.querySelector('#one_window_tich_input')
    const tich_input_btn_head = document.querySelector('#tich_input_btn_head')
    const tich_input_window = document.querySelector('#tich_input_window')
    const tich_input_window_exit = document.querySelector('.tich_input_window_exit');
    const tich_delet = document.querySelector('#tich_delet');
    const tich_input = document.querySelector('#tich_input')
    
    const tich_input1 = document.querySelector('#tich_inputi1_i1'),
          tich_input2 = document.querySelector('#tich_inputi1_i2'),
          tich_input3 = document.querySelector('#tich_inputi1_i3'),
          tich_input4 = document.querySelector('#tich_inputi1_i4'),
          tich_input5 = document.querySelector('#tich_inputi1_i5'),
          tich_input6 = document.querySelector('#tich_inputi1_i6'),
          tich_input7 = document.querySelector('#tich_inputi1_i7'),
          tich_input8 = document.querySelector('#tich_inputi1_i8'),
          tich_input9 = document.querySelector('#tich_inputi1_i9'),
          tich_input10 = document.querySelector('#tich_inputi1_i10'),
          tich_input11 = document.querySelector('#tich_inputi1_i11');
    
    
    if(tich_table.rows.length >= 2){
        one_window_tich_input.classList.remove('active');
        tich_table.classList.add('active')
    }
    tich_input_btn_head.addEventListener('click', ()=>{
        tich_contener_wrap.classList.remove('active');
        tich_input_window.classList.add('active')
    })
    tich_input_window_exit.addEventListener('click', ()=>{
        tich_input_window.classList.remove('active')
        tich_contener_wrap.classList.add('active');
    });
    tich_delet.addEventListener('click', ()=>{
        tich_input_window.classList.remove('active')
        tich_contener_wrap.classList.add('active');
    });
    tich_input.addEventListener('click', ()=>{
        tich_input1.addEventListener('click', ()=>{tich_input1.style.border = '2px solid #777'});
        tich_input2.addEventListener('click', ()=>{tich_input2.style.border = '2px solid #777'});
        tich_input3.addEventListener('click', ()=>{tich_input3.style.border = '2px solid #777'});
        tich_input4.addEventListener('click', ()=>{tich_input4.style.border = '2px solid #777'});
        tich_input5.addEventListener('click', ()=>{tich_input5.style.border = '2px solid #777'});
        tich_input6.addEventListener('click', ()=>{tich_input6.style.border = '2px solid #777'});
        tich_input7.addEventListener('click', ()=>{tich_input7.style.border = '2px solid #777'});
        tich_input8.addEventListener('click', ()=>{tich_input8.style.border = '2px solid #777'});
        tich_input9.addEventListener('click', ()=>{tich_input9.style.border = '2px solid #777'});
        tich_input10.addEventListener('click', ()=>{tich_input10.style.border = '2px solid #777'});
        tich_input11.addEventListener('click', ()=>{tich_input11.style.border = '2px solid #777'});
        
        if(tich_input1.value === ''){ tich_input1.style.border = '2px solid red'}
        if(tich_input2.value === ''){ tich_input2.style.border = '2px solid red'}
        if(tich_input3.value === ''){ tich_input3.style.border = '2px solid red'}
        if(tich_input4.value === ''){ tich_input4.style.border = '2px solid red'}
        if(tich_input5.value === ''){ tich_input5.style.border = '2px solid red'}
        if(tich_input6.value === ''){ tich_input6.style.border = '2px solid red'}
        if(tich_input7.value === ''){ tich_input7.style.border = '2px solid red'}
        if(tich_input8.value === ''){ tich_input8.style.border = '2px solid red'}
        if(tich_input9.value === ''){ tich_input9.style.border = '2px solid red'}
        if(tich_input10.value === ''){ tich_input10.style.border = '2px solid red'}
        if(tich_input11.value === ''){ tich_input11.style.border = '2px solid red'}
        else if(
            tich_input1.value !== '' && tich_input2.value !== '' &&
            tich_input3.value !== '' && tich_input4.value !== '' &&
            tich_input5.value !== '' && tich_input6.value !== '' &&
            tich_input7.value !== '' && tich_input8.value !== '' &&
            tich_input9.value !== '' && tich_input10.value !== '' &&
            tich_input11.value !== ''
            ){tich_input_window.classList.remove('active');tich_contener_wrap.classList.add('active');}
    
    });


})