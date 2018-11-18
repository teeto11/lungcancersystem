@extends('admin.layouts.master')

@section('content')


   <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title">All Questions</h5>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                        <li><a data-action="reload"></a></li>
                        <li><a data-action="close"></a></li>
                    </ul>
                </div>
            </div>



            <table class="table table-bordered table-hover datatable-highlight">
                <thead>

                    <tr>
                       <th>Question id</th>
                        <th>Question Text</th>
                        <th>option</th>
                        <th>Option Value</th>
                        <th>Action</th>
                    </tr>

                </thead>
                <tbody>
                @foreach($questions as $question)
                @foreach($question->option as $options)
                    <tr>
                        <td>{{$question->id}}</td>
                        <td>{{$question->question_text}}</td>
                        <td><a href="#">{{$options->option_text}}</a></td>
                        <td><a href="#">{{$options->option_point_value}}</a></td>
                        <td class="text-center">
                            <ul class="icons-list">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="icon-menu9"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                      <li><a href="{{url('edit-question/'.$question->id)}}"><i class="icon-file-pdf"></i>Edit Question</a></li>
                                      <li><a href="{{url('delete-question/'.$question->id)}}"><i class="icon-file-pdf"></i>Delete Question</a></li>
                                </li>
                            </ul>
                        </td>
                      </tr>  
                   @endforeach
                   @endforeach
                </tbody>
            </table>
        </div>
@stop