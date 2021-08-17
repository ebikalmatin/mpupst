@extends('layouts.web.publicMaster')

@section('content')
<section id="page-title">

    <div class="container clearfix">
        <h1>Kontak Kami</h1>
    </div>

</section><!-- #page-title end -->

<!-- Content
============================================= -->
<section id="content">
    <div class="content-wrap">
        <div class="gmap-area">
            <div class="container clearfix">
                <div class="row">
                    <div class="col-sm-7 text-center">
                        <div class="gmap h-100">
                            <iframe frameborder="no" scrolling="no" width="400" height="400" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.011156171429!2d106.86932451475822!3d-6.262259963052067!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f322c223a8fd%3A0xa17bd1894dfbca3c!2sDinas+Lingkungan+Hidup+Provinsi+DKI+Jakarta!5e0!3m2!1sen!2sid!4v1487564126912"></iframe>
                        </div>
                    </div>

                    <div class="col-sm-5 map-content">
                        <ul class="row">
                            <li>
                                <address>
                                    <h5>
                                      Unit Pengelola Sampah Terpadu <br />
                                      Dinas Lingkungan Hidup <br />
                                      Provinsi DKI Jakarta
                                    </h5>
                                    <p>Jl. Mandala V No. 67 <br>
                                    Jakarta Timur</p>
                                    <p>Telp: (021) 80876542 <br>
                                    Email:uptpst@jakarta.go.id</p>
                                </address>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- #content end -->

@endsection
