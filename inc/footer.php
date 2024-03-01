

</body>
<script type="text/javascript">
	function del(){
		var del = confirm("Do you really want to delete this");
		if(del){
			return true;
		}
		else{
			return false;
		}
	}

	setTimeout(function(){
     $('#msg').remove();
},3000);

</script>
</html>
