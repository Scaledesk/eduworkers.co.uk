
<div class="wrap-title-page">
    <div class="container">
        <div class="row">
            <div class="col-xs-12"><h1 class="ui-title-page">contact us</h1></div>
        </div>
    </div><!-- end container-->
</div><!-- end wrap-title-page -->


<div class="section-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="wrap-breadcrumb clearfix">
                    <ol class="breadcrumb">
                        <li><a href="<?php echo base_url();?>"><i class="icon stroke icon-House"></i></a></li>
                        <li class="active">CONTACT Us</li>
                    </ol>
                </div>
            </div>
        </div><!-- end row -->
    </div><!-- end container -->
</div><!-- end section-breadcrumb -->


<main class="main-content">

    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <section class="section_contacts">
                    <h2 class="ui-title-inner decor decor_mod-a">Get in Touch with us</h2>
                    <p>Reprehenderit in voluptate velit esse cillum dolo reu fugiat nulla pariat ecated cupidatat non pried ent sun in asculpa.</p>
                   <!-- <ul class="list-social list-inline">
                        <li>
                            <a href="javascript:void(0);"><i class="icon fa fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);"><i class="icon fa fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);"><i class="icon fa fa-google-plus"></i></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);"><i class="icon fa fa-linkedin"></i></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);"><i class="icon fa fa-behance"></i></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);"><i class="icon fa fa-vimeo"></i></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);"><i class="icon fa fa-whatsapp"></i></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);"><i class="icon fa fa-youtube-play"></i></a>
                        </li>
                    </ul>-->
                    <ul class="list-contacts list-unstyled">
                        <li class="list-contacts__item">
                            <i class="icon stroke icon-Phone2"></i>
                            <div class="list-contacts__inner">
                                <div class="list-contacts__title">PHONE</div>
                                <div class="list-contacts__info">+1 (0800)  12345</div>
                            </div>
                        </li>
                        <li class="list-contacts__item">
                            <i class="icon stroke icon-Mail"></i>
                            <div class="list-contacts__inner">
                                <div class="list-contacts__title">EMAIL</div>
                                <div class="list-contacts__info">info@eduworkers.co.uk</div>
                            </div>
                        </li>
                        <li class="list-contacts__item">
                            <i class="icon stroke icon-WorldWide"></i>
                            <div class="list-contacts__inner">
                                <div class="list-contacts__title">WEB</div>
                                <div class="list-contacts__info">http://eduworkers.co.uk</div>
                            </div>
                        </li>
                        <li class="list-contacts__item">
                            <i class="icon stroke icon-House"></i>
                            <div class="list-contacts__inner">
                                <div class="list-contacts__title">location</div>
                                <div class="list-contacts__info">370 Hill Park, Florida, USA</div>
                            </div>
                        </li>
                    </ul>
                </section><!-- end section_contacts -->
            </div><!-- end col -->

            <div class="col-md-7">
                <div class="section_map">

                    <h2 class="ui-title-inner decor decor_mod-a">OUR LOCATION</h2>
                    <div class="col-md-12">
                        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
                        <div style="overflow:hidden;height:300px;width:600px;"><div id="gmap_canvas" style="height:300px;width:600px;">

                            </div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
                            <a class="google-map-code" href="http://www.trivoo.net" id="get-map-data">trivoo</a></div>
                        <script type="text/javascript"> function init_map(){var myOptions = {zoom:14,center:new google.maps.LatLng(28.6106,77.4315),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(28.6106,77.4315)});infowindow = new google.maps.InfoWindow({content:"<b>Noida</b><br/>Sector-4<br/> Up" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>

                    </div>
                </div>
                   <!-- <img class="img-responsive" src="<?php /*echo base_url(); */?>assets\img\map.jpg" height="505" width="670" alt="map">-->
                </div>
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->


    <section class="section_contacts-form">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <h2 class="ui-title-block">Send <strong>Us Message</strong></h2>
                    <div class="wrap-subtitle">
                        <div class="ui-subtitle-block ui-subtitle-block_w-line">If you have some feedback or want to ask any questions</div>
                    </div><!-- end wrap-title -->
                    <form class="form-contact ui-form" action="<?php echo base_url().'users/contactUs'; ?>" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <input class="form-control" type="text" placeholder="Full Name" required="" name="name">
                            </div>
                            <div class="col-md-6">
                                <input class="form-control" type="text" placeholder="Subject" name="subject">
                            </div>
                            <div class="col-xs-12">
                                <textarea class="form-control" required="" rows="11" name="message"></textarea>
                                <button class="btn btn-primary btn-effect" type="submit">SEND NOW</button>
                            </div>
                        </div>
                    </form>
                </div><!-- end col -->


                <div class="col-sm-4">
                    <a href="javascript:void(0);" class="support">
                        <img class="img-responsive" src="<?php echo base_url(); ?>assets\media\support\1.jpg" height="248" width="330" alt="Foto">
                        <div class="support__title"><i class="icon stroke icon-Headset"></i>live support available</div>
                    </a>
                </div><!-- end col -->

            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section_contacts-form -->

</main><!-- end main-content -->
