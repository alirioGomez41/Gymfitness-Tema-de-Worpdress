
window.onscroll = () =>{
    const scroll = window.scrollY
    const nav = document.querySelector('.barra-navegacion')
    const body = document.querySelector('body')

    if(scroll > 300)
    {
        nav.classList.add('fixed-top')
        body.classList.add('ft-activo')
    }
    else{
        nav.classList.remove('fixed-top')
        body.classList.remove('ft-activo')
    }
}

jQuery(document).ready(function($){
    $('.barra-navegacion .menu-principal .menu').slicknav({
        label:'',
        prependTo:'header'
    });

 /*BX slider*/ 

    $('.listado-testimoniales').bxSlider({
        mode: 'fade',
        captions: true,
        controls:false,
        auto:true,
        
        
    });






    /*Mapa Leaflet*/ 

    const lat = document.querySelector('#lat');
    const lng = document.querySelector('#lng');
    const lugar = document.querySelector('#direccion');
   
  

   if((lat.value && lng.value && lugar.value) != null)
   {
    var map = L.map('map').setView([lat.value, lng.value], 15);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);
    
    L.marker([lat.value, lng.value]).addTo(map)
        .bindPopup(lugar.value)
        .openPopup();

   }
   
  
});

/*
Agregando Menu fijo
*/ 


