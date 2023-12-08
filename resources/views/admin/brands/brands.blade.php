 @extends('admin.app')
 @section('content')
     <div class="content-wrapper">
         <!-- Content Header (Page header) -->
         <section class="content-header">
             <div class="container-fluid my-2">
                 <div class="row mb-2">
                     <div class="col-sm-6">
                         <h1>Brands</h1>
                     </div>
                     <div class="col-sm-6 text-right">
                         <a href="/admin/brands/create-brand" class="btn btn-primary">New Brand</a>
                     </div>
                 </div>
             </div>
             <!-- /.container-fluid -->
         </section>
         <!-- Main content -->
         <section class="content">
             <!-- Default box -->
             <div class="card">
                 <!-- /.card-header -->
                 <div class="card-body">
                     <table id="example1" class="table table-bordered table-striped">
                         @php
                             $display = 1;
                         @endphp
                         <thead>
                             <tr>
                                 <th class="col-md-1">ID</th>
                                 <th class="col-md-3">Name</th>
                                 <th class="col-md-2">Slug</th>
                                 <th class="col-md-2">Status</th>
                                 <th class="col-md-2">Actions</th>
                             </tr>
                         </thead>
                         <tbody>
                             @foreach ($brands as $item)
                                 <tr>
                                     <td>{{ $display++ }}</td>
                                     <td>{{ $item->name }}</td>
                                     <td>{{ $item->slug }}</td>
                                     <td>
                                         @if ($item->status == 'Active')
                                             <span class="text-success">Stock Available</span>
                                         @else
                                             <span class="text-danger">Out of stock</span>
                                         @endif
                                     </td>
                                     <td>
                                         <a href="/admin/brands/{{ $item->id }}/edit" class="btn btn-primary">
                                             <i class="fas fa-edit"></i> Edit
                                         </a>
                                         <a href="/admin/brands/{{ $item->id }}/delete" class="btn btn-danger">
                                             <i class="fas fa-trash"></i> Delete
                                         </a>
                                     </td>
                                 </tr>
                             @endforeach
                         </tbody>

                         <tfoot>
                             <tr>
                                 <th class="col-md-1">ID</th>
                                 <th class="col-md-3">Name</th>
                                 <th class="col-md-2">Slug</th>
                                 <th class="col-md-2">Status</th>
                                 <th class="col-md-2">Actions</th>
                             </tr>
                         </tfoot>
                     </table>
                 </div>
                 <!-- /.card-body -->
             </div>
             <!-- /.card -->
         </section>
         <!-- /.content -->
     </div>
     <!-- /.content-wrapper -->
 @endsection

 @section('scripts')
     <!-- Page specific script -->
     <script>
         $(function() {
             $("#example1").DataTable({
                 "responsive": true,
                 "lengthChange": false,
                 "autoWidth": false,
                 "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
             }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
             $('#example2').DataTable({
                 "paging": true,
                 "lengthChange": false,
                 "searching": false,
                 "ordering": true,
                 "info": true,
                 "autoWidth": false,
                 "responsive": true,
             });
         });
         var Toast = Swal.mixin({
             toast: true,
             position: 'top-end',
             showConfirmButton: false,
             timer: 3000
         })
         @if (session()->has('success'))
             Toast.fire({
                 icon: 'success',
                 title: '{{ session()->get('success') }}'
             })
         @endif
     </script>
 @endsection
