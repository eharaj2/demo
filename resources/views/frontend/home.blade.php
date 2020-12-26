@extends('frontend.layout.base')

@section('content')
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h2 class="display-5">{{trans('home.our_products')}}</h2>
    </div>

    <div class="container">
      <div class="card-deck mb-3 text-center">
        @if(count($products)>0)
        @foreach($products as $item)
        @php 
          $title = json_decode($item->title, true);

        @endphp
        <div class="card col-sm-4 mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">{{$title[\App::getLocale()]??$title['en']}}</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title"><b>{{trans('home.price')}}: </b>{{$item->price}} <small class="text-muted"> {{\Config::get('constants.currency.'. session()->get('region'))}}</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li><img width="250" src="{{asset('public/images/').'/'.$item->image}}"></li>
              <li>
                @if($item->stock > 0)
                <b style="color: green;">{{trans('home.in_stock')}}</b>
                @else
                <p style="color: red;">{{trans('home.out_of_stock')}}</p>
                @endif
              </li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-primary">{{trans('home.add_to_cart')}}</button>
          </div>
        </div>
        @endforeach
        @else
          <div class="card col-sm-4 mb-4 box-shadow">
          <div class="card-header">
          
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">
            {{trans('home.there_is_no_product')}}</small>
            </h1>
          </div>
        </div>

        @endif
      
      </div>

      
  

    @endsection


   
