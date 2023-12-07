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
                         <a href="create-brand.html" class="btn btn-primary">New Brand</a>
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
                         <thead>
                             <tr>
                                 <th width="60">ID</th>
                                 <th>Name</th>
                                 <th>Slug</th>
                                 <th width="100">Status</th>
                                 <th width="100">Action</th>
                             </tr>
                         </thead>
                         <tbody>
                             <tr>
                                 <td>1</td>
                                 <td>Samsung</td>
                                 <td>samsung</td>
                                 <td>
                                     <svg class="text-success-500 h-6 w-6 text-success" xmlns="http://www.w3.org/2000/svg"
                                         fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                         aria-hidden="true">
                                         <path stroke-linecap="round" stroke-linejoin="round"
                                             d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                     </svg>
                                 </td>
                                 <td>
                                     <a href="#">
                                         <svg class="filament-link-icon w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                             <path
                                                 d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                             </path>
                                         </svg>
                                     </a>
                                     <a href="#" class="text-danger w-4 h-4 mr-1">
                                         <svg wire:loading.remove.delay="" wire:target=""
                                             class="filament-link-icon w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                             <path ath fill-rule="evenodd"
                                                 d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                 clip-rule="evenodd"></path>
                                         </svg>
                                     </a>
                                 </td>
                             </tr>
                             <tr>
                                 <td>2</td>
                                 <td>Oppo</td>
                                 <td>oopo</td>
                                 <td>
                                     <svg class="text-danger h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                         viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                         <path stroke-linecap="round" stroke-linejoin="round"
                                             d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z">
                                         </path>
                                     </svg>
                                 </td>
                                 <td>
                                     <a href="#">
                                         <svg class="filament-link-icon w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                             <path
                                                 d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                             </path>
                                         </svg>
                                     </a>
                                     <a href="#" class="text-danger w-4 h-4 mr-1">
                                         <svg wire:loading.remove.delay="" wire:target=""
                                             class="filament-link-icon w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                             <path ath fill-rule="evenodd"
                                                 d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                 clip-rule="evenodd"></path>
                                         </svg>
                                     </a>
                                 </td>
                             </tr>
                             <tr>
                                 <td>3</td>
                                 <td>One Plus</td>
                                 <td>one-plus</td>
                                 <td>
                                     <svg class="text-success-500 h-6 w-6 text-success" xmlns="http://www.w3.org/2000/svg"
                                         fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                         aria-hidden="true">
                                         <path stroke-linecap="round" stroke-linejoin="round"
                                             d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                     </svg>
                                 </td>
                                 <td>
                                     <a href="#">
                                         <svg class="filament-link-icon w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                             <path
                                                 d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                             </path>
                                         </svg>
                                     </a>
                                     <a href="#" class="text-danger w-4 h-4 mr-1">
                                         <svg wire:loading.remove.delay="" wire:target=""
                                             class="filament-link-icon w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                             <path ath fill-rule="evenodd"
                                                 d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                 clip-rule="evenodd"></path>
                                         </svg>
                                     </a>
                                 </td>
                             </tr>
                             <tr>
                                 <td>4</td>
                                 <td>Apple</td>
                                 <td>apple</td>
                                 <td>
                                     <svg class="text-success-500 h-6 w-6 text-success" xmlns="http://www.w3.org/2000/svg"
                                         fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                         aria-hidden="true">
                                         <path stroke-linecap="round" stroke-linejoin="round"
                                             d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                     </svg>
                                 </td>
                                 <td>
                                     <a href="#">
                                         <svg class="filament-link-icon w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                             <path
                                                 d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                             </path>
                                         </svg>
                                     </a>
                                     <a href="#" class="text-danger w-4 h-4 mr-1">
                                         <svg wire:loading.remove.delay="" wire:target=""
                                             class="filament-link-icon w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                             <path ath fill-rule="evenodd"
                                                 d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                 clip-rule="evenodd"></path>
                                         </svg>
                                     </a>
                                 </td>
                             </tr>
                             <tr>
                                 <td>5</td>
                                 <td>John Players</td>
                                 <td>john-players</td>
                                 <td>
                                     <svg class="text-success-500 h-6 w-6 text-success" xmlns="http://www.w3.org/2000/svg"
                                         fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                         aria-hidden="true">
                                         <path stroke-linecap="round" stroke-linejoin="round"
                                             d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                     </svg>
                                 </td>
                                 <td>
                                     <a href="#">
                                         <svg class="filament-link-icon w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                             <path
                                                 d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                             </path>
                                         </svg>
                                     </a>
                                     <a href="#" class="text-danger w-4 h-4 mr-1">
                                         <svg wire:loading.remove.delay="" wire:target=""
                                             class="filament-link-icon w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                             <path ath fill-rule="evenodd"
                                                 d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                 clip-rule="evenodd"></path>
                                         </svg>
                                     </a>
                                 </td>
                             </tr>
                             <tr>
                                 <td>6</td>
                                 <td>Flying Maching</td>
                                 <td>Flying-maching</td>
                                 <td>
                                     <svg class="text-success-500 h-6 w-6 text-success" xmlns="http://www.w3.org/2000/svg"
                                         fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                         aria-hidden="true">
                                         <path stroke-linecap="round" stroke-linejoin="round"
                                             d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                     </svg>
                                 </td>
                                 <td>
                                     <a href="#">
                                         <svg class="filament-link-icon w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                             <path
                                                 d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                             </path>
                                         </svg>
                                     </a>
                                     <a href="#" class="text-danger w-4 h-4 mr-1">
                                         <svg wire:loading.remove.delay="" wire:target=""
                                             class="filament-link-icon w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                             <path ath fill-rule="evenodd"
                                                 d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                 clip-rule="evenodd"></path>
                                         </svg>
                                     </a>
                                 </td>
                             </tr>
                         </tbody>
                         <tfoot>
                             <tr>
                                 <th width="60">ID</th>
                                 <th>Name</th>
                                 <th>Slug</th>
                                 <th width="100">Status</th>
                                 <th width="100">Action</th>
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
