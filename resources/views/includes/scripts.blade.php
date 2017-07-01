<script type="text/javascript" src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.easing-1.3.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.dcjqaccordion.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
<script type="text/javascript">
	$('#category').change(function() {
        var labels = {
            '1' : 'Class:',
            '2' : 'Level:',
            '-Select One-': 'Level:'
        } 
        $("label[for='level']").html(labels[$(this).val()]);

        if ($(this).val() == '1') {
          $('#cg').hide();
          $('#fc').hide();
        }else{
          $('#fc').show();
          $('#cg').show();
        }
    });
</script>