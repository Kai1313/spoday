<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UpinController extends Controller
{
    public function index(Request $request)
    {
        return view('admin/pages/upin/dashboard/index');
    }

    public function showMasterSupplier(Request $request)
    {
        return view('admin/pages/upin/master/supplier/index');
    }

    public function showMasterPart(Request $request)
    {
        return view('admin/pages/upin/master/part/index');
    }

    public function showMasterUser(Request $request)
    {
        return view('admin/pages/upin/master/user/index');
    }
    
    public function showPurchaseOrderList(Request $request)
    {
        return view('admin/pages/upin/purchaseOrder/index');
    }
}
