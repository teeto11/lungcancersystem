@extends('admin.layouts.master')
<link  rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
@section('content')

				<!-- Page header -->
				<div class="page-header">
					<div class="page-header-content">
						<div class="page-title">
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Question</span> - Question Management</h4>
						</div>
					</div>

					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="index.html"><i class="icon-home2 position-left"></i>Question Management</a></li>
							<li class="active">Add Questions</li>
						</ul>
					</div>
				</div>


 
 <div class="content">

<!-- Form horizontal -->
<div class="panel panel-flat">
    <div class="panel-heading">
        <h5 class="panel-title">Basic form inputs</h5>
        <div class="heading-elements">
            <ul class="icons-list">
                <li><a data-action="collapse"></a></li>
                <li><a data-action="reload"></a></li>
                <li><a data-action="close"></a></li>
            </ul>
        </div>
    </div>

    <div class="panel-body">
        <!-- <p class="content-group-lg">Examples of standard form controls supported in an example form layout. Individual form controls automatically receive some global styling. All textual <code>&lt;input></code>, <code>&lt;textarea></code>, and <code>&lt;select></code> elements with <code>.form-control</code> are set to <code>width: 100%;</code> by default. Wrap labels and controls in <code>.form-group</code> for optimum spacing. Labels in horizontal form require <code>.control-label</code> class.</p> -->

        <form class="form-horizontal" action="{{url('/add-question')}}" method="post">
            {{csrf_field()}}
            <fieldset class="content-group">
                <legend class="text-bold">Question Form</legend>

                <div class="form-group">
                    <label class="control-label col-lg-2">Question Text</label>
                    <div class="col-lg-10">
                        <input type="text" name="question_text" class="form-control">
                        
                    </div>
                </div>       
                <table  class="table table-hover small-text" id="tb">
                    <tr class="tr-header">
                    <th>Option</th>
                    <th>Option Value</th>
                    <th><a href="javascript:void(0);" style="font-size:18px;" id="addMore" title="Add More row"><span class="glyphicon glyphicon-plus"></span></a></th>
                    <tr>
                    <td><input type="text" name="option_text[]" class="form-control"></td>
                    <td><input type="text" name="option_value[]" class="form-control"></td>
                    <td><a href='javascript:void(0);'  class='remove'><span class='glyphicon glyphicon-remove'></span></a></td>
                    </tr>
              </table>
            
            </fieldset>
          
            <div class="text-right">
                <button type="submit" class="btn btn-primary">Submit <i class="icon-arrow-right14 position-right"></i></button>
            </div>
        </form>
    </div>
</div>
<!-- /form horizontal -->



</div>
<!-- /content area -->

</div>
<!-- /main content -->

</div>

@stop
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> 
<script>
 $(function(){
    $('#addMore').on('click', function() {
              var data = $("#tb tr:eq(1)").clone(true).appendTo("#tb");
              data.find("input").val('');
     });
     $(document).on('click', '.remove', function() {
         var trIndex = $(this).closest("tr").index();
            if(trIndex>1) {
             $(this).closest("tr").remove();
           } else {
             alert("Sorry!! Can't remove first row!");
           }
      });
});      
</script>