<script>
window.setTimeout(function() {
    document.forms['myform'].submit();
}, 5000);
</script>

<form method="POST" name="myform">
  <input type="text" name="url" value="google.com">
  <input type="max" name="max" value="9999">
  <input type="submit">
</form>
