<!-- Vertical navbar -->
<?php include_once './dashboardHeader.php'; ?>
        <?php include './dashboard_Body.php'; ?>
    </div>
</div>
<script>
    $(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar, #content').toggleClass('active');
        });
    });
</script>