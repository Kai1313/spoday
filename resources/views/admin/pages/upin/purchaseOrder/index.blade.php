@extends('admin.layouts.main')

@push('other-styles')
    <link rel="stylesheet" href="{{ asset('assets/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css') }}">
@endpush

@section('header')
    <!-- Header -->
    <div class="header">
        <!-- class header JANGAN DIHAPUS!!! -->
        <div class="container-fluid">
            <div class="header-body">
                <div class="d-flex justify-content-between align-items-center py-3">
                    <div class="">
                        <h6 class="h2 mb-0">PO Request Management</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                            <ol class="breadcrumb breadcrumb-links">
                                <li class="breadcrumb-item active" aria-current="page">PO Request Management</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="text-right">
                        <a href="#" class="btn btn-neutral">Refresh</a>
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modal-add-upload">Add New</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- class header JANGAN DIHAPUS!!! -->
@endsection

@section('section')
    <!-- Table -->
    <div class="row">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header">
                    <h3 class="mb-0">PO Request List</h3>
                </div>
                <div class="table-responsive pt-2 pb-4">
                    <table class="table table-flush px-4" id="datatable-basic">
                        <thead class="thead-light">
                            <tr>
                                <th>PO ID</th>
                                <th>Supplier</th>
                                <th>Qty</th>
                                <th>Status</th>
                                <th>PO Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1234567800</td>
                                <td>System Architect</td>
                                <td>61</td>
                                <td>
                                    <button class="btn btn-sm btn-icon btn-outline-default" type="button"
                                        data-toggle="modal" data-target="#modal-track-status">
                                        <span class="btn-inner--text">Track 1234567800</span>
                                        <span class="btn-inner--icon"><i class="fas fa-eye"></i></span>
                                    </button>
                                </td>
                                <td>2011/04/25</td>
                                <td>

                                    <button class="btn btn-sm btn-secondary dropdown-toggle" type="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item text-dark" href="#">
                                            Finish
                                        </a>
                                        <a class="dropdown-item text-dark" href="#">
                                            Void
                                        </a>
                                    </div>

                                </td>
                            </tr>
                            <tr>
                                <td>1234567801</td>
                                <td>Accountant</td>
                                <td>63</td>
                                <td>
                                    <button class="btn btn-sm btn-icon btn-outline-default" type="button"
                                        data-toggle="modal" data-target="#modal-track-status">
                                        <span class="btn-inner--text">Track 1234567801</span>
                                        <span class="btn-inner--icon"><i class="fas fa-eye"></i></span>
                                    </button>
                                </td>
                                <td>2011/07/25</td>
                                <td>

                                    <button class="btn btn-sm btn-secondary dropdown-toggle" type="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item text-dark" href="#">
                                            Finish
                                        </a>
                                        <a class="dropdown-item text-dark" href="#">
                                            Void
                                        </a>
                                    </div>

                                </td>
                            </tr>
                            <tr>
                                <td>1234567802</td>
                                <td>Accountant</td>
                                <td>63</td>
                                <td>
                                    <button class="btn btn-sm btn-icon btn-outline-default" type="button"
                                        data-toggle="modal" data-target="#modal-track-status">
                                        <span class="btn-inner--text">Track 1234567802</span>
                                        <span class="btn-inner--icon"><i class="fas fa-eye"></i></span>
                                    </button>
                                </td>
                                <td>2011/07/25</td>
                                <td>

                                    <button class="btn btn-sm btn-secondary dropdown-toggle" type="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item text-dark" href="#">
                                            Finish
                                        </a>
                                        <a class="dropdown-item text-dark" href="#">
                                            Void
                                        </a>
                                    </div>

                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('modal')
    <!-- Modal -->
    <div class="modal fade" id="modal-track-status" tabindex="-1" role="dialog"
        aria-labelledby="modal-track-statusLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal-track-statusLabel">Track Status 1234567800</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body py-0">
                    <div class="timeline timeline-one-side" data-timeline-content="axis" data-timeline-axis-style="dashed">
                        <div class="timeline-block">
                            <span class="timeline-step badge-success">
                                <i class="fas fa-check"></i>
                            </span>
                            <div class="timeline-content">
                                <small class="text-muted font-weight-bold">10:30
                                    22/05/2022</small>
                                <h5 class="mt-1 mb-0">Generating the PO Form</h5>
                                <p class="text-wrap text-sm mt-1 mb-0">Nullam id dolor id
                                    nibh ultricies
                                    vehicula ut
                                    id elit</p>
                                <div class="mt-2">
                                    <a class="btn btn-sm btn-secondary" href="#">Action</a>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-block">
                            <span class="timeline-step badge-success">
                                <i class="fas fa-check"></i>
                            </span>
                            <div class="timeline-content">
                                <small class="text-muted font-weight-bold">10:30
                                    22/05/2022</small>
                                <h5 class="mt-1 mb-0">Sending PO Form notification to Supplier</h5>
                                <p class="text-wrap text-sm mt-1 mb-0">Nullam id dolor id
                                    nibh ultricies
                                    vehicula ut
                                    id elit</p>
                                <div class="mt-2">
                                    <a class="btn btn-sm btn-secondary" href="#">Action</a>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-block">
                            <span class="timeline-step badge-success">
                                <i class="fas fa-check"></i>
                            </span>
                            <div class="timeline-content">
                                <small class="text-muted font-weight-bold">10:30
                                    22/05/2022</small>
                                <h5 class="mt-1 mb-0">Printing the product</h5>
                                <p class="text-wrap text-sm mt-1 mb-0">Nullam id dolor id
                                    nibh ultricies
                                    vehicula ut
                                    id elit</p>
                                <div class="mt-2">
                                    <a class="btn btn-sm btn-secondary" href="#">Action</a>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-block">
                            <span class="timeline-step badge-success">
                                <i class="fas fa-check"></i>
                            </span>
                            <div class="timeline-content">
                                <small class="text-muted font-weight-bold">10:30
                                    22/05/2022</small>
                                <h5 class="mt-1 mb-0">Shipping the product</h5>
                                <p class="text-wrap text-sm mt-1 mb-0">Nullam id dolor id
                                    nibh ultricies
                                    vehicula ut
                                    id elit</p>
                                <div class="mt-2">
                                    <a class="btn btn-sm btn-secondary" href="#">Action</a>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-block">
                            <span class="timeline-step badge-primary">
                                <style>
                                    @keyframes rotate {
                                        to {
                                            transform: rotate(360deg);
                                        }
                                    }

                                    .timeline-spinner-border {
                                        display: inline-block;
                                        width: 1.5rem;
                                        height: 1.5rem;
                                        vertical-align: text-bottom;
                                        border: .25em solid currentColor;
                                        border-right-color: transparent;
                                        border-radius: 50%;
                                        -webkit-animation: spinner-border .75s linear infinite;
                                        animation: rotate 1s linear infinite;
                                    }

                                </style>
                                <div class="timeline-spinner-border" role="status">
                                    <span class="sr-only">Loading...</span>
                                </div>
                            </span>
                            <div class="timeline-content">
                                <small class="text-muted font-weight-bold">10:30
                                    22/05/2022</small>
                                <h5 class="mt-1 mb-0">Warehousing the products</h5>
                                <p class="text-wrap text-sm mt-1 mb-0">Lorem ipsum dolor sit amet consectetur adipisicing
                                    elit. Aperiam illum sunt dolor, eum sapiente repudiandae, excepturi corrupti sit dolorem
                                    omnis maxime ea nulla earum quasi repellat! Incidunt nisi nostrum minima?
                                </p>
                                <div class="mt-2">
                                    <a class="btn btn-sm btn-secondary" href="#">Action</a>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-block">
                            <span class="timeline-step badge-secondary">
                                <i class="fas fa-ellipsis-h"></i>
                            </span>
                            <div class="timeline-content">
                                <small class="text-muted font-weight-bold">10:30
                                    22/05/2022</small>
                                <h5 class="mt-1 mb-0">Matching the products with invoice</h5>
                                <p class="text-wrap text-sm mt-1 mb-0">Lorem ipsum dolor sit amet consectetur adipisicing
                                    elit. Aperiam illum sunt dolor, eum sapiente repudiandae, excepturi corrupti sit dolorem
                                    omnis maxime ea nulla earum quasi repellat! Incidunt nisi nostrum minima?
                                </p>
                                <div class="mt-2">
                                    <a class="btn btn-sm btn-secondary" href="#">Action</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal-add-upload" tabindex="-1" role="dialog" aria-labelledby="modal-add-uploadLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal-add-uploadLabel">Add New PO Request</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFileLang" lang="en">
                            <label class="custom-file-label" for="customFileLang">Select file</label>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Upload</button>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('other-scripts')
    <!-- Optional JS -->
    <script src="{{ asset('assets/vendor/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables.net-select/js/dataTables.select.min.js') }}"></script>
@endpush
