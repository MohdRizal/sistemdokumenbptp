</div>
    </section>

<!-- Jquery Core Js -->
<script src="<?= base_url() ?>assets/jquery/jquery.min.js"></script>

<!-- Bootstrap Core Js -->
<script src="<?= base_url() ?>assets/bootstrap/js/bootstrap.js"></script>

<!-- Select Plugin Js -->
<script src="<?= base_url() ?>assets/bootstrap-select/js/bootstrap-select.js"></script>

<!-- Slimscroll Plugin Js -->
<script src="<?= base_url() ?>assets/jquery-slimscroll/jquery.slimscroll.js"></script>

<!-- Waves Effect Plugin Js -->
<script src="<?= base_url() ?>assets/node-waves/waves.js"></script>

<!-- Jquery DataTable Plugin Js -->
<script src="<?= base_url() ?>assets/jquery-datatable/jquery.dataTables.js"></script>
<script src="<?= base_url() ?>assets/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>

<!-- Bootstrap Datepicker Plugin Js -->
<script src="<?= base_url() ?>assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>

<!-- Custom Js -->
<script src="<?= base_url() ?>assets/js/admin.js"></script>
<script src="<?= base_url() ?>assets/js/pages/tables/jquery-datatable.js"></script>

<!-- Demo Js -->
<script src="<?= base_url() ?>assets/js/demo.js"></script>

<script>
    function tampil(src){
		$('.imagepreview').attr('src', src);
		$('#imagemodal').modal('show');   
	}

	function share(src){
		$('.my-form').attr('action', src);
		$('#imagemodal').modal('show'); 
		// var dt = $('#dt-showuser').dataTable({
		// 	paging : false,
		// 	"scrollY" : "250px",
		// });  
		// $.fn.dataTable.tables( {visible: true, api: true} ).columns.adjust();

	}

	function myFunction() {
		var input, filter, table, tr, td, i, txtValue;
		input = document.getElementById("myInput");
		filter = input.value.toUpperCase();
		table = document.getElementById("myTable");
		tr = table.getElementsByTagName("tr");
		for (i = 0; i < tr.length; i++) {
			td = tr[i].getElementsByTagName("td")[1];
			if (td) {
			txtValue = td.textContent || td.innerText;
			if (txtValue.toUpperCase().indexOf(filter) > -1) {
				tr[i].style.display = "";
			} else {
				tr[i].style.display = "none";
			}
			}       
		}
	}
	

</script>

<script>
	setInterval(function(){
			window.location.href="<?= base_url() ?>checkout/byebye";
	},600000)
</script>
</body>

</html>
