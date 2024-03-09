
@include('backend.dashboard.components.head')
<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        @include('backend.dashboard.components.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            @include('backend.dashboard.components.sidebar')
            <!-- partial -->
            <div class="main-panel">
                @include($template)
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                @include('backend.dashboard.components.footer')
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('backend.dashboard.components.script')
</body>
</html>
    <!-- End custom js for this page -->
