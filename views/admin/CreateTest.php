<script type = "text/javascript">
/* $(document).ready(function() {

    $('#createTest').click(function(event) {
    //Get the data from all the fields
    var testName = $('input[name=inputTestName]');
    var storageType = $('#inputStorageType :selected');
    
    alert("TestName: "+testName.val()+" StorageType: "+storageType.text());
    
    $.post('/AddTest', { testName: "testName.val()", storageType: "storageType.text()" }, function () {
            $('.success_msg').append("Vote Successfully Recorded").fadeIn();
        });
        event.preventDefault();
    });  
}); */

</script>

<div class="panel panel-default">
	 <form class="form-inline" role="form" method="post">
        <div class="form-group">
            <label class="sr-only" for="inputTestName">Test Name:</label>
            <input type="text" class="form-control" id="inputTestName" name="testName" placeholder="Test Name">
        </div>
        <div class="form-group">
            <label class="sr-only" for="inputStorageType">Storage Type:</label>
            <select class="form-control" id="inputStorageType" name="storageType">
            	<option>Self Entry</option>
            	<option>CSV File</option>
            	<option>Text File</option>
            	<option>Excel Sheet</option>
            </select>
        </div>
        <button id="createTest" data-target="AddNewTest" class="btn btn-primary">Create</button>
    </form>
</div>

<div class="panel panel-default">
	<table class="table table-striped">
        <thead class="" style="background-color: #373a3c; color: #eceeef; border-color: #55595c;">
            <tr>
                <th><input type="checkbox" class=".checkbox-primary" id="0"/>&nbsp;Select All</th>
                <th>Test Name</th>
                <th>StorageType</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><input type="checkbox" class=".checkbox-primary" id="1"/></td>
                <td>John</td>
                <td>Carter</td>
                <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
            </tr>
            <tr>
                <td><input type="checkbox" class=".checkbox-primary" id="2"/></td>
                <td>Peter</td>
                <td>Parker</td>
                <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
            </tr>
            <tr>
                <td><input type="checkbox" class=".checkbox-primary" id="3"/></td>
                <td>John</td>
                <td>Rambo</td>
                <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
            </tr>
        </tbody>
    </table>
</div>

<div class="clearfix"></div>
<ul class="pagination pull-right">
  <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
  <li class="active"><a href="#">1</a></li>
  <li><a href="#">2</a></li>
  <li><a href="#">3</a></li>
  <li><a href="#">4</a></li>
  <li><a href="#">5</a></li>
  <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
</ul>


<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
				<h4 class="modal-title custom_align" id="Heading">Edit Your Detail</h4>
			</div>
			<div class="modal-body">
				<div class="form-group">
					<input class="form-control " type="text" placeholder="Mohsin">
				</div>
				<div class="form-group">
					<input class="form-control " type="text" placeholder="Irshad">
				</div>
				<div class="form-group">
					<textarea rows="2" class="form-control" placeholder="CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan"></textarea>
				</div>
			</div>
			<div class="modal-footer ">
				<button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
				<h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
			</div>
			<div class="modal-body">
				<div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?</div>
			</div>
			<div class="modal-footer ">
				<button type="button" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
				<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
			</div>
		</div>
	</div>
</div>
