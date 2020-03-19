@extends('layouts.app')

@section('content')

   





    <div class="banner">
        
        <div class="banner-content">
        
            <div class="banner-text">
                <h1>Nerede yemek istersin?</h1>
                <h2>İstediğin restaurant'ta %30 <br> indirimli hemen şimdi <br> rezervasyon yap.</h2>

           

            </div>
             <div class="banner-buttons">
                    <button>Şimdi acik</button>
                    <button>Bu akşam</button>
                    <button>Tarih belirle</button>
                    <button>Yeni katilanlar</button>

            </div>
            <div class="all-rest">
            
                    <a href="http://">Tüm restaurantlari listele 
                    </a>
                </div>
                     
        </div>

       
            
            
    </div>



    <div class="kitchen-filter">

        <h2>Mutfaklara göre keşfet</h2>

            
            <div class="swiper-container">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div  style="height: 183px; width: 220px;" class="swiper-slide ">
                                <img class="kitchen-fotos" src="{{URL::asset('/images/fransiz.jpg')}}"  alt="">

                         <div class="swiper-inside">

                                <h3>Fransiz</h3>
                         </div>
                        </div>
                        <div style="height: 183px; width: 220px;" class="swiper-slide">
                                <img class="kitchen-fotos" src="{{URL::asset('/images/italyan.jpg')}}"  alt="">

                                <div class="swiper-inside">

                                        <h3>Italyan</h3>
                                 </div>
                        </div>
                        <div style=" height: 183px;   width: 220px;" class="swiper-slide">
                                <img class="kitchen-fotos"  src="{{URL::asset('/images/japan.jpg')}}"  alt="">

                                <div class="swiper-inside">

                                        <h3>Japon</h3>
                                 </div>
                        </div>
                        <div  style="height: 183px; width: 220px;" class="swiper-slide ">
                                <img class="kitchen-fotos"  src="{{URL::asset('/images/turk.jpg')}}"  alt="">

                         <div class="swiper-inside">
                                <h3>Turk</h3>
                         </div>
                        </div>
                       
                        
                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>
                
                    <!-- If we need navigation buttons -->
                    <div style="color: white;" class="swiper-button-prev"></div>
                    <div style="color: white;" class="swiper-button-next"></div>
                
                    <!-- If we need scrollbar -->
                    <div class="swiper-scrollbar"></div>
            </div>









    </div>


    <div class="kitchen-filter">

            <h2>Top - Semtler</h2>
            <h3>Semtlere gore kesfet</h3>
    
                
                <div class="swiper-container">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div  style="height: 183px; width: 220px;" class="swiper-slide ">
                                    <img class="kitchen-fotos" src="{{URL::asset('/images/taksim.jpg')}}"  alt="">
    
                             <div class="swiper-inside">
    
                                    <h3>Taksim</h3>
                             </div>
                            </div>
                            <div style="height: 183px; width: 220px;" class="swiper-slide">
                                    <img class="kitchen-fotos" src="{{URL::asset('/images/galata.jpg')}}"  alt="">
    
                                    <div class="swiper-inside">
    
                                            <h3>Galata</h3>
                                     </div>
                            </div>
                            <div style=" height: 183px;   width: 220px;" class="swiper-slide">
                                    <img class="kitchen-fotos"  src="{{URL::asset('/images/sultan.jpg')}}"  alt="">
    
                                    <div class="swiper-inside">
    
                                            <h3>Sultanahmet</h3>
                                     </div>
                            </div>
                            <div  style="height: 183px; width: 220px;" class="swiper-slide ">
                                    <img class="kitchen-fotos"  src="{{URL::asset('/images/tarabya.jpg')}}"  alt="">
    
                             <div class="swiper-inside">
                                    <h3>Tarabya</h3>
                             </div>
                            </div>
                            <div  style="height: 183px; width: 220px;" class="swiper-slide ">
                                    <img class="kitchen-fotos"  src="{{URL::asset('/images/kadikoy.jpg')}}"  alt="">
    
                             <div class="swiper-inside">
                                    <h3>Kadikoy</h3>
                             </div>
                            </div>
                           
                            
                        </div>
                        <!-- If we need pagination -->
                        <div class="swiper-pagination"></div>
                    
                        <!-- If we need navigation buttons -->
                        <div style="color: white;" class="swiper-button-prev"></div>
                        <div style="color: white;" class="swiper-button-next"></div>
                    
                        <!-- If we need scrollbar -->
                        <div class="swiper-scrollbar"></div>
                </div>
    
    
    
    
    
    
    
    
    
        </div>


        <div class="kitchen-filter">

                <h2>Definenin sizler icin onerdikleri</h2>
        
                    
                    <div class="swiper-container">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <!-- Slides -->
                                <div  style="height: 183px; width: 220px;" class="swiper-slide ">
                                        <img class="kitchen-fotos" src="{{URL::asset('/images/fransiz.jpg')}}"  alt="">
        
                                 <div class="swiper-inside">
        
                                        <h3>Fransiz</h3>
                                 </div>
                                </div>
                                <div style="height: 183px; width: 220px;" class="swiper-slide">
                                        <img class="kitchen-fotos" src="{{URL::asset('/images/italyan.jpg')}}"  alt="">
        
                                        <div class="swiper-inside">
        
                                                <h3>Italyan</h3>
                                         </div>
                                </div>
                                <div style=" height: 183px;   width: 220px;" class="swiper-slide">
                                        <img class="kitchen-fotos"  src="{{URL::asset('/images/japan.jpg')}}"  alt="">
        
                                        <div class="swiper-inside">
        
                                                <h3>Japon</h3>
                                         </div>
                                </div>
                                <div  style="height: 183px; width: 220px;" class="swiper-slide ">
                                        <img class="kitchen-fotos"  src="{{URL::asset('/images/turk.jpg')}}"  alt="">
        
                                 <div class="swiper-inside">
                                        <h3>Turk</h3>
                                 </div>
                                </div>
                               
                                
                            </div>
                            <!-- If we need pagination -->
                            <div class="swiper-pagination"></div>
                        
                            <!-- If we need navigation buttons -->
                            <div style="color: white;" class="swiper-button-prev"></div>
                            <div style="color: white;" class="swiper-button-next"></div>
                        
                            <!-- If we need scrollbar -->
                            <div class="swiper-scrollbar"></div>
                    </div>
        
        
        
        
        
        
        
        
        
            </div>
        
        

       
    











    

@endsection
