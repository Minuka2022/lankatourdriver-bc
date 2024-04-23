<script>
    const tabs = document.querySelectorAll('.tab');
    const tabContents = document.querySelectorAll('.tab-content-item');

    tabs.forEach(tab => {
        tab.addEventListener('click', function () {
            // remove active class from all tabs and tab content
            tabs.forEach(tab => tab.classList.remove('active'));
            tabContents.forEach(content => content.classList.remove('active'));

            // add active class to current tab and its corresponding tab content
            this.classList.add('active');
            document.getElementById(this.dataset.tabContent).classList.add('active');
        });
    });

</script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script>
    $(function () {
        $("#datepicker").datepicker({
            minDate: 0,
            dateFormat: "dd-mm-yy"
        });
    });
</script>