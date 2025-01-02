<?php

namespace App\Http\Controllers;

use App\Models\PTP_LOAI_SAN_PHAM;
use App\Models\PTP_SAN_PHAM;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;

class PTP_SAN_PHAMController extends Controller
{
    //

    public function ptpList()
    {
        $ptpSanPhams = PTP_SAN_PHAM::where('ptpTrangThai',0)->get();
        return view('ptpAdmins.ptpSanPham.ptp-list',['ptpSanPhams'=>$ptpSanPhams]);
    }

    public function ptpCreate()
{
    
    
        $ptpLoaiSanPham = PTP_LOAI_SAN_PHAM::all();
        return view('ptpAdmins.ptpSanPham.ptp-create', compact('ptpLoaiSanPham'));
    
}

public function ptpCreateSubmit(Request $request)
{
    $validatedData = $request->validate([
        'ptpMaSanPham' => 'required|string|unique:PTP_SAN_PHAM,ptpMaSanPham|max:255',
        'ptpTenSanPham' => 'required|string|max:255',
        'ptpHinhAnh' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'ptpSoLuong' => 'required|integer|min:0',
        'ptpDonGia' => 'required|numeric|min:0',
        'ptpMaLoai' => 'required|integer|exists:PTP_LOAI_SAN_PHAM,id',
        'ptpTrangThai' => 'required|boolean',
    ]);

    // Handle file upload
    if ($request->hasFile('ptpHinhAnh')) {
        $file = $request->file('ptpHinhAnh');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('images'), $filename);
        $validatedData['ptpHinhAnh'] = $filename;
    }

    // Save data to the database
    PTP_SAN_PHAM::create($validatedData);

    // Redirect back with a success message
    return redirect()->route('ptpAdmins.ptpSanPham.ptp-list')
        ->with('success', 'Sản phẩm đã được thêm thành công.');
}



    
public function ptpEdit($id)
{
    // Find the product or fail if it doesn't exist
    $ptpSanPham = PTP_SAN_PHAM::findOrFail($id);

    // Fetch all product categories for the dropdown
    $ptpLoaiSanPham = PTP_LOAI_SAN_PHAM::all();

    // Return the edit view with the required data
    return view('ptpAdmins.ptpSanPham.ptp-edit', compact('ptpSanPham', 'ptpLoaiSanPham'));
}


// Cập nhật sản phẩm
public function ptpEditSubmit(Request $request, $id)
{
    $request->validate([
        'ptpMaSanPham' => 'required|string|unique:PTP_SAN_PHAM,ptpMaSanPham,' . $id,
        'ptpTenSanPham' => 'required|string',
        'ptpHinhAnh' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'ptpSoLuong' => 'required|integer',
        'ptpDonGia' => 'required|numeric',
        'ptpMaLoai' => 'required|string',
        'ptpTrangThai' => 'required|boolean',
    ]);

    $ptpSanPham = PTP_SAN_PHAM::findOrFail($id);
    
    // Lấy dữ liệu từ request
    $data = $request->only([
        'ptpMaSanPham', 
        'ptpTenSanPham', 
        'ptpSoLuong', 
        'ptpDonGia', 
        'ptpMaLoai', 
        'ptpTrangThai'
    ]);

    if ($request->hasFile('ptpHinhAnh')) {
        // Xóa ảnh cũ nếu tồn tại
        if ($ptpSanPham->ptpHinhAnh && file_exists(public_path('images/' . $ptpSanPham->ptpHinhAnh))) {
            unlink(public_path('images/' . $ptpSanPham->ptpHinhAnh));
        }

        // Upload ảnh mới
        $file = $request->file('ptpHinhAnh');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('images'), $filename);
        $data['ptpHinhAnh'] = $filename;
    }
    

    // Cập nhật sản phẩm
    try {
        $ptpSanPham->update($data);
    } catch (\Exception $e) {
        return back()->withErrors(['error' => $e->getMessage()]);
    }


    // Điều hướng với thông báo
    return redirect()->route('ptpAdmins.ptpSanPham.ptp-list')
        ->with('success', 'Cập nhật sản phẩm thành công!');
}

    public function ptpDetail($id)
    {
        // Truy vấn dữ liệu từ bảng ptpsanpham theo mã loại sản phẩm
        $ptpSanPham = PTP_SAN_PHAM::where('id', $id)->first();

        // Nếu không tìm thấy loại sản phẩm
        if (!$ptpSanPham) {
            return redirect()->route('ptpAdmins.ptpSanPham.ptp-list');
        }

        // Trả về view với dữ liệu loại sản phẩm
        return view('ptpAdmins.ptpSanPham.ptp-detail', compact('ptpSanPham'));
    }
    public function ptpdeletesp($id){
        $ptpSanPham = PTP_SAN_PHAM::findOrFail($id);
        $ptpSanPham->delete();

        return redirect()->route('ptpAdmins.ptpSanPham.ptp-list')->with('message', 'Loại sản phẩm đã được xoá thành công!');
    }
}
