<link href="${pageContext.request.contextPath}/resources/offline-bootstrap/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
<script src="${pageContext.request.contextPath}/resources/offline-bootstrap/fileinput.min.js"></script>
<!-- canvas-to-blob.min.js is only needed if you wish to resize images before upload.
	     This must be loaded before fileinput.min.js -->
<!-- <script src="path/to/js/plugins/canvas-to-blob.min.js" type="text/javascript"></script> -->
<!-- <script>
$("#questionUpload").fileinput({'allowedfileextensions':'["csv", "txt"]'});
</script> -->
	<div class="">
		<label class="control-label">Select File</label>
		<!-- <input id="questionUpload" name="questionUpload" type="file" class="file file-loading" data-allowed-file-extensions='["csv", "txt"]'> -->
		<form action="upload" method="post" enctype="multipart/form-data">
			<input id="questionUpload" name="questionUpload" type="file"  accept=".csv, .txt" class="file file-loading" >
		</form>
	</div>