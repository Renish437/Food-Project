<!-- latest js -->
<script src="{{ asset('backend/assets/js/jquery-3.6.0.min.js') }}"></script>

<!-- Bootstrap js -->
<script src="{{ asset('backend/assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>

<!-- feather icon js -->
<script src="{{ asset('backend/assets/js/icons/feather-icon/feather.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/icons/feather-icon/feather-icon.js') }}"></script>

<!-- scrollbar simplebar js -->
<script src="{{ asset('backend/assets/js/scrollbar/simplebar.js') }}"></script>
<script src="{{ asset('backend/assets/js/scrollbar/custom.js') }}"></script>

<!-- Sidebar jquery -->
<script src="{{ asset('backend/assets/js/config.js') }}"></script>

<!-- tooltip init js -->
<script src="{{ asset('backend/assets/js/tooltip-init.js') }}"></script>

<!-- bootstrap tag-input js -->
<script src="{{ asset('backend/assets/js/bootstrap-tagsinput.min.js') }}"></script>

<!-- Plugins JS -->
<script src="{{ asset('backend/assets/js/sidebar-menu.js') }}"></script>

<!-- Apexchart js -->
<script src="{{ asset('backend/assets/js/chart/apex-chart/apex-chart1.js') }}"></script>
<script src="{{ asset('backend/assets/js/chart/apex-chart/moment.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/chart/apex-chart/apex-chart.js') }}"></script>
<script src="{{ asset('backend/assets/js/chart/apex-chart/stock-prices.js') }}"></script>
<script src="{{ asset('backend/assets/js/chart/apex-chart/chart-custom1.js') }}"></script>

<!-- swiper slider -->
<script src="{{ asset('backend/assets/js/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/custom-swiper.js') }}"></script>

<!-- customizer js -->
<script src="{{ asset('backend/assets/js/customizer.js') }}"></script>

<!-- ratio js -->
<script src="{{ asset('backend/assets/js/ratio.js') }}"></script>

<!-- ck editor js -->
<script src="{{ asset('backend/assets/js/ckeditor.js') }}"></script>
<script src="{{ asset('backend/assets/js/ckeditor-custom.js') }}"></script>

<!-- Data table js -->
<script src="{{ asset('backend/assets/js/jquery.dataTables.js') }}"></script>
<script src="{{ asset('backend/assets/js/custom-data-table.js') }}"></script>

<!-- select2 js -->
<script src="{{ asset('backend/assets/js/select2.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/select2-custom.js') }}"></script>


<!-- Theme js -->
<script src="{{ asset('backend/assets/js/script.js') }}"></script>



 <script>
     $("#checkall").change(function() {
         var checked = $(this).is(":checked");
         if (checked) {
             $(".custom-checkbox").each(function() {
                 $(this).prop("checked", true);
             });

         } else {
             $(".custom-checkbox").each(function() {
                 $(this).prop("checked", false);
             });
         }
     });
 </script>
