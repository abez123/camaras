<!-- REQUIRED JS SCRIPTS -->

<!-- Scripts --> 
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDXFNXUXTucS-m45EVzs_QCnX1-HoNjuks"></script> 
<script src="{{ asset('socio-assets/js/jquery-2.1.3.min.js') }}"></script> 
<script src="{{ asset('socio-assets/js/bootstrap.js') }}"></script> 
<script src="{{ asset('socio-assets/js/plugins/superfish.min.js') }}"></script> 
<script src="{{ asset('socio-assets/js/jquery.ui.min.js') }}"></script> 
<script src="{{ asset('socio-assets/js/plugins/rangeslider.min.js') }}"></script> 
<script src="{{ asset('socio-assets/js/plugins/jquery.flexslider-min.js') }}"></script> 
<script src="{{ asset('socio-assets/js/uou-accordions.js') }}"></script> 
<script src="{{ asset('socio-assets/js/uou-tabs.js') }}"></script> 
<script src="{{ asset('socio-assets/js/plugins/select2.min.js') }}"></script> 
<script src="{{ asset('socio-assets/js/owl.carousel.min.js') }}"></script> 
<script src="{{ asset('socio-assets/js/gmap3.min.js') }}"></script> 
<script src="{{ asset('socio-assets/js/scripts.js') }}"></script>
<script>
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>


@stack('scripts')