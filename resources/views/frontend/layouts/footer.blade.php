

<script src="{{url('js/modal.js')}}"></script>
    <script src="{{url('frontend/js/mobile.js')}}"></script>
    <script src="{{url('frontend/js/popup.js')}}"></script>
    <script src="{{url('frontend/js/active.js')}}"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js">
    </script>

    <script src="{{url('frontend/js/jquery.min.js')}}"></script>
    <script src="{{url('frontend/js/owl.carousel.min.js')}}"></script>


    <script>
        $(document).ready(function () {
            $('.owl-carousel').owlCarousel({
                stagePadding: 30,
                loop: true,
                dots: false,
                margin: 10,
                autoplay: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    00: {
                        items: 1
                    },
                    1000: {
                        items: 2
                    }
                }
            })
        });
    </script>









</body>

</html>
