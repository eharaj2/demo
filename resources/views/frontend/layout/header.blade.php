    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
      <h5 class="my-0 mr-md-5 font-weight-normal">{{trans('home.demo_shop')}}</h5>
      <nav class="my-2 my-md-0 mr-md-5">
        <a class="p-2 text-dark" href="#">{{trans('home.home')}}</a>
        <a class="p-2 text-dark" href="#">{{trans('home.products')}}</a>
        <a class="p-2 text-dark" href="#">{{trans('home.cart')}}</a>
      </nav>
      <nav class="my-2 my-md-0 ml-md-auto">
       
      </nav>
     @php $url = session()->get('locale')."/".session()->get('region'); @endphp
      <nav class="my-2 my-md-0 ml-md">
         {{trans('home.language')}}:
        <a href="{{url($url.'/lang').'?lang='.'en'}}" 
        class="{{\App::getLocale() == 'en' ? 'slctd' : 'text-muted'}}">En</a>
        <a href="{{url($url.'/lang').'?lang='.'ar'}}" 
        class="{{\App::getLocale() == 'ar' ? 'slctd' : 'text-muted'}}">Ar</a><b class="p-1">|</b>
         {{trans('home.region')}}:
        <a href="{{url($url.'/region').'?region='.'ae'}}" 
        class="{{session()->get('region') == 'ae' ? 'slctd' : 'text-muted'}}">AE</a>
        <a style="text-decoration: none;  color: black;" 
        href="{{url($url.'/region').'?region='.'sa'}}" 
        class="{{session()->get('region') == 'sa' ? 'slctd' : 'text-muted'}}">SA</a>
      </nav>
      
    </div>