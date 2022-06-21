<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
    <!-- Block2 -->
    <div class="block2"> 
        <?php if(isset($inicio)){ ?>
       <div class="block2-pic hov-img0 label-new" data-label="Nuevo">
        <?php }else{ ?>
       <div class="block2-pic hov-img0 " >
     <?php } ?>
          <a href="{{route('product.show',[$key->cslug,$key->slug])}}/"><img src='{{asset("img/$key->img_1")}}' alt="<?php echo $key->name ?>" title="<?php echo $key->name ?>" ></a> 
 
          <a href="{{route('product.show',[$key->cslug,$key->slug])}}/" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 ">
           Detalles
          </a>
       </div>
 
       <div class="block2-txt flex-w flex-t p-t-14">
          <div class="block2-txt-child1 flex-col-l ">
             <?php if($key->idtype==1){?>
               <img src="{{asset('img/alta-moda2.png')}}" style="height: 1.5rem;margin-bottom: 1rem">
             <?php }else{?>
               <img src="{{asset('img/rey-blue2.png')}}" style="height: 1rem;margin-bottom: 1rem">
             <?php } ?>
             <a href="{{route('product.show',[$key->cslug,$key->slug])}}/" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
              <?php echo $key->name ?>
              <span style="font-size: .7rem;"> para:| 
                 <?php 
                   $genero=explode(',', $key->genero );
                   $count=count($genero);
                   for ($i=0; $i < $count ; $i++) { 
                     echo $genero[$i].' | ';
                   }
                   
                 ?>
                 
               </span>
             </a>
 
             <span class="stext-105 cl3"> 
              @if($key->status=='agotado' && $key->agotado>date('Y-m-d'))
                <span  style="color: #FF0000 ;"> <i>Producto Agotado</span><br>
              @endif
              @php $price=0; @endphp

              @if(!empty($data['subcategorias']))
                @foreach ($data['subcategorias'] as $sub)
                  @php $price=0; @endphp
                    @if($sub->idcategory==$key->idcategory)
                      @php $price=$sub->price+$key->price; @endphp
                    @endif
                  @php break; @endphp
                @endforeach	
              @endif
                
              @if($price===0)				               
                @if($key->discount==0)
                  <span> <i>Desde : </i></span><br><span style="color: #FF0000 ;"><b> S/ <?php echo $key->price?>.00</b></span><br>
                @else
                    <span> <i>Desde : </i></span><br><span style="color: #FF0000 ;"><b> S/ <?php echo $key->price?>.00</b></span><br>
                    <span style="text-decoration: line-through;opacity: .5 ; margin: 1rem">S/ <?php echo $key->price+$key->discount ?>.00</span>
                @endif
              @else
                @if($key->discount==0)
                  <span> <i>Desde : </i></span><br><span style="color: #FF0000 ;"><b> S/ <?php echo $price?>.00</b></span><br>
                @else
                  <span> <i>Desde : </i></span><br><span style="color: #FF0000 ;"><b> S/ <?php echo $price?>.00</b></span><br>
                  <span style="text-decoration: line-through;opacity: .5 ; margin: 1rem">S/ <?php echo $price+$key->discount ?>.00</span>
                @endif
              @endif
             </span>
          </div>
 
          
       </div>
    </div>
 </div>