@extends('admin.layouts.app')
@section('head-section')
<link rel="stylesheet" href="{{ asset('admn/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Main content -->
  <section class="content">
    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Car Brands</h3>
        <a class="col-md-offset-4 float-right btn btn-success" href="{{ route('tag.create') }}">Add New</a>
        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
          {{-- <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button> --}}
        </div>
      </div>
      <div class="box-body">
        <div class="box">
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>S.No</th>
                  <th>Car Brand</th>
                  <th>Slug</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
                @foreach($tags as $tag)
                  <tr>
                      <td>{{$loop->index+1}}</td>
                      <td>{{$tag->name}}</td>
                      <td>{{$tag->slug}}</td>
                      <td><a href="{{ route('tag.edit',$tag->id) }}"><span class="glyphicon glyphicon-edit"></span></a></td>
                      <td>
                          <form method="post"id="delete-form-{{ $tag->id }}" action="{{ route('tag.destroy',$tag->id) }}" style="dispaly: none">
                              {{ csrf_field()}}
                              {{ method_field('DELETE') }}
                          </form>
                          <a href="" onclick=" 
                              if(confirm('Are You Sure,You want to Delete this ?'))
                              {
                                  event.preventDefault();document.getElementById('delete-form-{{ $tag->id }}').submit();
                              }
                              else
                              {
                                  event.preventDefault();
                              }"><span class="glyphicon glyphicon-trash"></span>
                          </a>
                      </td>
                  </tr>
                @endforeach
              </tbody>
              <tfoot>
                <tr>
                  <th>S.No</th>
                  <th>Car Brand</th>
                  <th>Slug</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </tfoot>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
@section('footer-section')
<script src="{{ asset('admn/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admn/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
@endsection