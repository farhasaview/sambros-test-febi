<!-- I placed at the end of the document so the pages load faster -->
    <script src="<?=base_url()?>styles/js/core/jquery.3.2.1.min.js"></script>
    <script src="<?=base_url()?>styles/js/core/popper.min.js"></script>
    <script src="<?=base_url()?>styles/js/core/bootstrap.min.js"></script>
    <script>
    	$(".alert-success").fadeTo(2000, 500).slideUp(500, function(){ $(this).slideUp(500); });
	    $(".alert-info").fadeTo(2000, 500).slideUp(500, function(){ $(this).slideUp(500); });
    </script>
</body>