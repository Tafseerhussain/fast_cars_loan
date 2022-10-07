@if ($funded->funding_hidden == 0)
<div class="why-get-funded" style="background-image: url({{ $funded->funding_background }});">
   <div class="container">
       <div class="row">
           <div class="col-12 text-center text-white">
               <h1>
                   {{ $funded->funding_heading }}
               </h1>
               <p>
                   {{ $funded->funding_subheading }}
               </p>
           </div>
       </div>
       <div class="row funded-cards">
           <div class="col-lg-3 col-md-6">
               <div class="funded-card shadow">
                   <div class="funded-card-img">
                       <img src="{{ asset($funded->funding_card_one_image) }}" alt="fast-cash">
                       <h2>
                           {{ $funded->funding_card_one_heading }}
                       </h2>
                       <p>
                           {{ $funded->funding_card_one_text }}
                       </p>
                   </div>
               </div>
           </div>
           <div class="col-lg-3 col-md-6">
               <div class="funded-card shadow">
                   <div class="funded-card-img">
                       <img src="{{ asset($funded->funding_card_two_image) }}" alt="keep-car">
                       <h2>
                           {{ $funded->funding_card_two_heading }}
                       </h2>
                       <p>
                           {{ $funded->funding_card_two_text }}
                       </p>
                   </div>
               </div>
           </div>
           <div class="col-lg-3 col-md-6">
               <div class="funded-card shadow">
                   <div class="funded-card-img">
                       <img src="{{ asset($funded->funding_card_three_image) }}" alt="bad-credit">
                       <h2>
                           {{ $funded->funding_card_three_heading }}
                       </h2>
                       <p>
                           {{ $funded->funding_card_three_text }}
                       </p>
                   </div>
               </div>
           </div>
           <div class="col-lg-3 col-md-6">
               <div class="funded-card shadow">
                   <div class="funded-card-img">
                       <img src="{{ asset($funded->funding_card_four_image) }}" alt="convenient-terms">
                       <h2>
                           {{ $funded->funding_card_four_heading }}
                       </h2>
                       <p>
                           {{ $funded->funding_card_four_text }}
                       </p>
                   </div>
               </div>
           </div>
       </div>
   </div>
</div>
@endif