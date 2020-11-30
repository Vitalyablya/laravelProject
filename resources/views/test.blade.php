<form action = "/exportxls" method = "post" enctype="multipart/form-data">
{{ csrf_field() }}
<input type="file" name="photo" multiple name="file[]">
<button> Start </button>

</form>