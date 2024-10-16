<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ ENV('app_name') }}</title>

    <!-- Custom fonts for this template -->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

</head>

<body id="page-topx`">
    <div id="wrapper">
        <!-- Sidebar -->
        <x-admin.sidebar></x-admin.sidebar>
        <!-- End of Sidebar -->

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <!-- Topbar -->
                <x-admin.navbar></x-admin.navbar>
                <!-- End of Topbar -->

                <!-- Main Content -->
                <div class="container-fluid">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('js/demo/datatables-demo.js') }}"></script>

    <!-- Edit Modal -->
    <script>
        $('#editUserModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget); // Button that triggered the modal
            var userId = button.data('id'); // Extract user ID
            var userName = button.data('name'); // Extract user name
            var userEmail = button.data('email'); // Extract user email

            var modal = $(this);
            modal.find('#editName').val(userName); // Set user name in the modal
            modal.find('#editEmail').val(userEmail); // Set user email in the modal
            modal.find('#editForm').attr('action', '{{ url('/admin/user') }}/' + userId); // Set form action
        });
    </script>

    <!-- Delete Modal -->
    <script>
        $('#deleteModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget); // Button that triggered the modal
            var id = button.data('id'); // Get user ID from data-id attribute
            var name = button.data('name'); // Get user name from data-name attribute

            var modal = $(this);
            modal.find('#deleteItemName').text(name); // Set the user name in the modal

            // Set the form action with the correct route and user ID
            modal.find('#deleteForm').attr('action', '/admin/user/' + id);
        });
    </script>

</body>

</html>
