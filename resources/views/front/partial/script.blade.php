<script src="{{ asset('rock/js/jquery-1.12.1.min.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
 <script src="{{ asset('rock/js/jquery.min.js') }}"></script>
 <script src="{{ asset('rock/js/jquery-1.12.1.min.js') }}"></script>
    <script src="rock/js/popper.min.js"></script>
    <script src="rock/js/bootstrap.bundle.min.js"></script>
    <script src="rock/js/jquery-3.0.0.min.js"></script>
    <script src="rock/js/jquery.scrollUp.js"></script>
    
    <script src="rock/js/plugin.js"></script>
    <!-- sidebar -->
    <script src="rock/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="{{ asset('rock/js/custom.js') }}"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });

            $(".zoom").hover(function() {

                $(this).addClass('transition');
            }, function() {

                $(this).removeClass('transition');
            });
        });
    </script>

    
    