<!-- BEGIN: Footer-->
<footer
  class="{{$configData['mainFooterClass']}} @if($configData['isFooterFixed']=== true){{'footer-fixed'}}@else {{'footer-static'}} @endif @if($configData['isFooterDark']=== true) {{'footer-dark'}} @elseif($configData['isFooterDark']=== false) {{'footer-light'}} @else {{$configData['mainFooterColor']}} @endif">
  <div class="footer-copyright">
    <div class="container">
      <span>&copy; 2021 <a href="https://upstdlh.id"
          target="_blank">UPST Dinas Lingkungan Hidup Prov. DKI Jakarta</a>
      </span>
      {{-- <span class="right hide-on-small-only">
        Design and Developed by <a href="https://pixinvent.com/">PIXINVENT</a>
      </span> --}}
    </div>
  </div>
</footer>

<!-- END: Footer-->
