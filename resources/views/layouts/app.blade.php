
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Leego Investments</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../../../../../../cms/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../../../../../../cms/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../../../../../../../cms/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../../../../../../../cms/assets/vendors/font-awesome/css/font-awesome.min.css" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="../../../../../../../cms/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../../../../../../cms/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../../../../../../cms/assets/images/favicon.jpg" />
  </head>
  <body>

      <!-- partial:partials/_navbar.html -->
      <x-app.navigation />
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <x-app.sidebar-navigation />

         <div class="main-panel">
          <div class="content-wrapper">

            <!-- MAIN CONTENT -->
                {{ $slot }}
            <!-- MAIN CONTENT -->


          <!-- partial:partials/_footer.html -->
          <x-app.footer />
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../../../../../../cms/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    {{-- <script src="../../../../../../../cms/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="../../../../../../../cms/assets/vendors/jquery-circle-progress/js/circle-progress.min.js"></script> --}}
    <script src="../../../../../../../cms/assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../../../../../../cms/assets/js/off-canvas.js"></script>
    <script src="../../../../../../../cms/assets/js/hoverable-collapse.js"></script>
    <script src="../../../../../../../cms/assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="../../../../../../../cms/assets/js/dashboard.js"></script>
        <!-- Chart Chartist plugin files -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- End custom js for this page -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('#sales-person-select').change(function() {
            var userId = $(this).val();

            $.ajax({
                url: '/get-customers/' + userId,
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                // Clear previous customer list
                $('#customer-list').empty();

                // Append new customer data
                $.each(response, function(index, customer) {
                  $('#customer-list').append('<option value="' + customer.id + '">' + customer.name + '</option>');
                });

                if (response.length > 0) {
                  $('#customer-list').prop('disabled', false);
                } else {
                  $('#customer-list').prop('disabled', true);
                }
              },
                error: function(xhr) {
                    console.log(xhr.responseText); // Log any errors for debugging
                }
            });
        });
    });
</script>
  @yield('scripts')
  </body>
</html>

<script>
    document.addEventListener("DOMContentLoaded", function() {
    var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    if (document.querySelectorAll('.dltBtn') !== null) {

        var deleteButtons = document.querySelectorAll('.dltBtn');


        deleteButtons.forEach(function(button) {
        button.addEventListener('click', function(e) {
            var form = this.closest('form');
            var dataID = this.getAttribute('data-id');
            e.preventDefault();

            // Show a confirmation dialog using SweetAlert2
           new swal({
                title: "Are you sure?",
                text: this.getAttribute('data-text'),
                icon: "warning",
                buttons: true,
                dangerMode: true,
            }).then((willDelete) => {
                if (willDelete) {
                   form.submit();
                } else {
                   new swal("Your  file is safe!");
                }
                });

        });
    });
    }

});
</script>
