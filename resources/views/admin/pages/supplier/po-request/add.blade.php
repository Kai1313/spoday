@extends('layouts.main')

@push('other-styles')
    <link rel="stylesheet" href="{{ asset('assets/vendor/flatpickr/flatpickr.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/select2/dist/css/select2.css') }}">
@endpush

@section('header')
    <!-- Header -->
    <div class="header">
        <!-- class header JANGAN DIHAPUS!!! -->
        <div class="container-fluid">
            <div class="header-body">
                <div class="d-flex justify-content-between align-items-center py-4">
                    <div class="">
                        <h6 class="h2 mb-0">Quotation List</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                            <ol class="breadcrumb breadcrumb-links">
                                <li class="breadcrumb-item">Sales and Logistics</li>
                                <li class="breadcrumb-item">Sales</li>
                                <li class="breadcrumb-item"><a href="{{ route('quotation.index') }}">Quotation</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Add</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="text-right">
                        <button class="btn btn-icon btn-outline-primary" type="button">
                            <span class="btn-inner--icon"><i class="fas fa-arrow-left"></i></span>
                            <span class="btn-inner--text">Back</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- class header JANGAN DIHAPUS!!! -->
@endsection

@section('section')
    <!-- Table -->
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h2 class="mb-0">Add Quotation</h2>
                        <div class="btn-list">
                            {{-- <button type="button" class="btn">Back</button> --}}
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label" for="quotation_date">Date<span
                                        class="text-danger">*</span></label>
                                <div class="col-lg-9 my-auto">
                                    <input type="text" class="form-control bg-white cursor-pointer" id="quotation_date"
                                        name="quotation_date" placeholder="Enter date here" autocomplete="off" value="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label" for="area">Area<span
                                        class="text-danger">*</span></label>
                                <div class="col-lg-9 my-auto">
                                    <select class="form-control" name="area" id="area">
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label" for="customer_type">Customer Type<span
                                        class="text-danger">*</span></label>
                                <div class="col-lg-9 my-auto">
                                    <div class="form-check form-check-inline cursor-pointer">
                                        <input class="form-check-input cursor-pointer" type="radio" name="customer_type"
                                            id="customerCurrent" value="option1" checked>
                                        <label class="form-check-label cursor-pointer"
                                            for="customerCurrent">Customer</label>
                                    </div>
                                    <div class="form-check form-check-inline cursor-pointer">
                                        <input class="form-check-input cursor-pointer" type="radio" name="customer_type"
                                            id="customerProspective" value="option2">
                                        <label class="form-check-label cursor-pointer" for="customerProspective">Calon
                                            Customer</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label" for="customer">Customer<span
                                        class="text-danger">*</span></label>
                                <div class="col-lg-9 my-auto">
                                    <select class="form-control" name="customer" id="customer">
                                        <option value="Ani">Ani</option>
                                        <option value="Budi">Budi</option>
                                        <option value="Caca">Caca</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label" for="source">Source<span
                                        class="text-danger">*</span></label>
                                <div class="col-lg-9 my-auto">
                                    <select class="form-control" name="source" id="source">
                                        <option value="Surabaya">Surabaya</option>
                                        <option value="Sidoarjo">Sidoarjo</option>
                                        <option value="Solo">Solo</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label" for="warehouse">Warehouse<span
                                        class="text-danger">*</span></label>
                                <div class="col-lg-9 my-auto">
                                    <select class="form-control" name="warehouse" id="warehouse">
                                        <option value="Surabaya">Surabaya</option>
                                        <option value="Sidoarjo">Sidoarjo</option>
                                        <option value="Solo">Solo</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label" for="long_term">Long Term (Days)<span
                                        class="text-danger">*</span></label>
                                <div class="col-lg-9 my-auto">
                                    <input type="number" class="form-control" id="long_term" name="long_term"
                                        placeholder="" autocomplete="off" value="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label" for="delivery_time">Delivery Time (Days)<span
                                        class="text-danger">*</span></label>
                                <div class="col-lg-9 my-auto">
                                    <input type="number" class="form-control" id="delivery_time" name="delivery_time"
                                        placeholder="" autocomplete="off" value="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label" for="payment_type">Payment Type<span
                                        class="text-danger">*</span></label>
                                <div class="col-lg-9 my-auto">
                                    <select class="form-control" name="payment_type" id="payment_type">
                                        <option value="Credit">Credit</option>
                                        <option value="Cash">Cash</option>
                                        <option value="CBD">CBD</option>
                                        <option value="DP">DP</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label" for="include">Include<span
                                        class="text-danger">*</span></label>
                                <div class="col-lg-9 my-auto">
                                    <div class="form-check form-check-inline cursor-pointer">
                                        <input class="form-check-input cursor-pointer" type="checkbox" id="include"
                                            value="1">
                                        <label class="form-check-label cursor-pointer" for="include">Include</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label" for="is_tax">No Vat<span
                                        class="text-danger">*</span></label>
                                <div class="col-lg-9 my-auto">
                                    <div class="form-check form-check-inline cursor-pointer">
                                        <input class="form-check-input cursor-pointer" type="checkbox" id="is_tax"
                                            value="1">
                                        <label class="form-check-label cursor-pointer" for="is_tax">No Vat</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label" for="date">Date<span
                                        class="text-danger">*</span></label>
                                <div class="col-lg-3 my-auto">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="shippingType" id="shippingType1"
                                            value="shippingType1" checked>
                                        <label class="form-check-label" for="shippingType1">
                                            Franco
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="shippingType" id="shippingType2"
                                            value="shippingType2">
                                        <label class="form-check-label" for="shippingType2">
                                            Loco
                                        </label>
                                    </div>
                                </div>
                                <label class="col-lg-2 col-form-label" for="city">City</label>
                                <div class="col-lg-4 my-auto">
                                    <input type="text" class="form-control" id="city" name="city"
                                        placeholder="Enter city here" autocomplete="off" value="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label" for="reason">Reason<span
                                        class="text-danger">*</span></label>
                                <div class="col-lg-9 my-auto">
                                    <textarea class="form-control" id="reason" name="reason" rows="4"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label" for="remark">Remark<span
                                        class="text-danger">*</span></label>
                                <div class="col-lg-9 my-auto">
                                    <textarea class="form-control" id="remark" name="remark" rows="4">
4.  Toleransi Barang
    Toleransi panjang, maximal ±2%
    Toleransi lebar, maximal ±1mm
    Toleransi tebal, maximal ±0.002mm
5.  Order dapat dikirim ke: email_source
6.  Harga tidak mengikat, sewaktu waktu dapat berubah tanpa pemberitahuan terlebih dahulu.
                                    </textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <table class="table table-striped mt-3">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Description</th>
                                <th scope="col">Inventory</th>
                                <th scope="col">UOM</th>
                                <th scope="col">MOQ</th>
                                <th scope="col">Price</th>
                                <th scope="col">Notes</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <input class="form-control" name="description-0" id="description-0"
                                        autocomplete="off">
                                </td>
                                <td>
                                    <select class="form-control cursor-pointer" name="variety-0" id="variety-0">
                                        <option value="Credit">Credit</option>
                                        <option value="Cash">Cash</option>
                                        <option value="CBD">CBD</option>
                                        <option value="DP">DP</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="form-control" name="uom-0" id="uom-0" disabled>
                                        <option value="">Select UOM</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="text" maxlength="11" min="1" id="qty-0" name="qty[]" value="0.00"
                                        class="maxWidth qty gii-money gii-numeric-decimal-only text-right form-control">
                                </td>
                                <td>
                                    <input type="text" maxlength="11" min="1" id="price-0" name="price[]" value="0.00"
                                        class="maxWidth price gii-numeric-decimal-only gii-money text-right form-control">
                                </td>
                                <td>
                                    <input type="text" class="form-control" name="notes-0" id="notes-0"
                                        autocomplete="off">
                                </td>
                                <td class="align-middle">
                                    <button type="button" class="btn btn-outline-danger btn-icon-only">
                                        <span class="btn-inner--icon"><i class="fas fa-trash-alt"></i></span>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-icon btn-outline-primary" type="button">
                            <span class="btn-inner--icon"><i class="fas fa-add"></i></span>
                            <span class="btn-inner--text">Add more row</span>
                        </button>
                    </div>

                </div>
                <div class="card-footer d-flex justify-content-end">
                    <button class="btn btn-lg btn-icon btn-primary" type="button">
                        <span class="btn-inner--icon"><i class="fas fa-save"></i></span>
                        <span class="btn-inner--text">Save</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('other-scripts')
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="{{ asset('assets/vendor/select2/dist/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/inputmask/jquery.inputmask.js') }}"></script>
    <script src="{{ asset('assets/js/helpers/giiNumericFormat.js') }}"></script>

    <script>
        // let areaOptions = {!! $area !!};
        // areaOptions = $.map(areaOptions, function(obj) {
        //     obj.id = obj.id || obj.area_id; // replace pk with your identifier
        //     obj.text = obj.text || obj.area_name;
        //     return obj;
        // });
        // console.log(areaOptions);

        function getTodayDate(divider = '-') {
            let today = new Date();
            let dd = String(today.getDate()).padStart(2, '0');
            let mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
            let yyyy = today.getFullYear();
            today = mm + divider + dd + divider + yyyy;
            return today;
        }

        function initPlugins() {
            $("#quotation_date").flatpickr({
                altInput: true,
                altFormat: "j F Y",
                dateFormat: "Y-m-d",
            });
            $("#area").select2({
                allowClear: true,
                placeholder: 'Choose an area...',
                ajax: {
                    url: "http://localhost/eco-beringin/public/area",
                    dataType: 'json',
                    type: "GET",
                    delay: 250,
                    processData: false,
                    data: function(params) {
                        var query = {
                            search: params.term,
                            type: 'public'
                        }
                        // Query parameters will be ?search=[term]&type=public
                        return query;
                    },
                    processResults: function(data) {
                        console.log(data);
                        return {
                            results: $.map(data.data, function(item) {
                                return {
                                    text: item.area_name,
                                    id: item.area_id
                                }
                            })
                        };
                    },
                }
            });
            // $("#customer").select2({
            //     allowClear: true,
            //     placeholder: 'Choose a customer...'
            // });
            $("#customer").select2({
                minimumInputLength: 2,
                placeholder: "Masukkan 2 karakter atau lebih",
                allowClear: true,
                ajax: {
                    url: 'http://localhost/eco-beringin/public/customer',
                    dataType: 'json',
                    type: 'GET',
                    data: function(params) {
                        return {
                            keyword: params.term, // search term
                            page: params.page,
                            area: $("#area").val() //ini buat apa?
                        };
                    },
                    processResults: function(data, params) {
                        params.page = params.page || 1;
                        $.each(data.data, function(key, val) {
                            data.data[key].id = val['no_acc6'];
                            data.data[key].text = val['nm_acc6'];
                        });

                        return {
                            results: data.data,
                            pagination: {
                                more: (params.page * 30) < data.count
                            }
                        };
                    },
                    cache: true
                },
                escapeMarkup: function(markup) {
                    return markup;
                }
            });
            $("#source").select2({
                allowClear: true,
                placeholder: 'Choose a source...'
            });
            $("#warehouse").select2({
                allowClear: true,
                placeholder: 'Choose a warehouse...'
            });
            $("#payment_type").select2({
                allowClear: true,
                placeholder: 'Choose a payment type...'
            });
        }

        function initValue() {
            let quotation_date = getTodayDate();
            let area = '';
            let customer_type = '';
            let customer = '';
            let source = '';
            let warehouse = '';
            let long_term = '';
            let delivery_time = '';
            let payment_type = '';
            let include = false;
            // console.log(quotation_date);
        }

        (function() {
            initPlugins();
            initValue();

            $(document).on('change', '#quotation_date', function(e) {
                console.log($('#quotation_date').val());
            })
        })();
    </script>
@endpush
