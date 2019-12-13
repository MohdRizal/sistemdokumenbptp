<?php $this->load->view('templates/header') ?>
Mengeluarkan anda dari sistem . . .
<script>
setTimeout(function(){window.location.href="/pusdok/auth"} , 1000);
</script>
<?php $this->load->view('templates/footer') ?>