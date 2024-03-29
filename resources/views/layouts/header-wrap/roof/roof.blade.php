<div class="container">

    <!-- Quick Contacts starts -->
    <div class="quick-contacts pull-left">
      <span>
        <i class="fa fa-map-marker">
        </i>
        @inject('Var', 'App\User')
          
        @php
          $versiones = $Var::select('id', 'name', 'email', 'telefono')->orderBy('id', 'DESC')->first();
        @endphp
        {{ $versiones->name }}
        {{-- <div class="t-changelog">{{$versiones->ver_numero ?? ''}} {{$versiones->ver_titulo ?? ''}}</div> --}}

      </span>
      <span>
        <i class="fa fa-mobile-phone">
        </i>
        {{ $versiones->telefono }}
      </span>
      <span>
        <i class="fa fa-envelope">
        </i>
        {{ $versiones->email }}
      </span>
    </div>
    <!-- Quick Contacts Ends -->

    <!-- Roof Social Links Starts-->
    <div class="social-links text-center pull-right">
      <a href="#" class="social-link" data-toggle="tooltip" data-placement="bottom" title="Twitter">
        <i class="fa fa-twitter">
        </i>
      </a>
      <a href="#" class="social-link" data-toggle="tooltip" data-placement="bottom" title="Facebook">
        <i class="fa fa-facebook">
        </i>
      </a>
      <a href="#" class="social-link" data-toggle="tooltip" data-placement="bottom" title="Google+">
        <i class="fa fa-google-plus">
        </i>
      </a>
      <a href="#" class="social-link" data-toggle="tooltip" data-placement="bottom" title="LinkedIn">
        <i class="fa fa-linkedin">
        </i>
      </a>
      <a href="#" class="social-link" data-toggle="tooltip" data-placement="bottom" title="YouTube">
        <i class="fa fa-youtube-play">
        </i>
      </a>
    </div>
    <!-- Roof Social Links Ends-->

</div>