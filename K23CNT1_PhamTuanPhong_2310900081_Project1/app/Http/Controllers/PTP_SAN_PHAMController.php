<?php

namespace App\Http\Controllers;

use App\Models\PTP_LOAI_SAN_PHAM;
use App\Models\PTP_SAN_PHAM;
use Illuminate\Http\Request;
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
        $ptpLoaiSanPhams = PTP_LOAI_SAN_PHAM::all();
        return view('ptpAdmins.ptpSanPham.ptp-create',['ptpLoaiSanPhams'=>$ptpLoaiSanPhams]);
    }
    public function ptpCreateSubmit()
    {
        return redirect()->route('ptpadmins.ptpsanpham.ptplist');
    }
    
    public function ptpEdit($id){
        $ptpSanPham = PTP_SAN_PHAM::where('id', $id)->first();
        if (!$ptpSanPham) {
            return redirect()->route('ptpadmins.ptpsanpham');
        }
        $ptpLoaiSanPhams = PTP_LOAI_SAN_PHAM::all();
        return view('ptpadmins.ptpSanPham.ptp-edit', compact('ptpSanPham', 'ptpLoaiSanPhams'));
    }
    public function ptpEditSubmit(Request $request)
    {
        try {
            // Tìm sản phẩm
            $ptpSanPham = PTP_SAN_PHAM::find($request->id);

            if ($ptpSanPham) {
                if ($request->hasFile('ptpHinhAnh')) {
                    $image = $request->file('ptpHinhAnh');
                    if ($image->isValid()) {
                        // Tạo tên file ảnh duy nhất
                        $fileName = time() . '_' . $image->getClientOriginalName();
                        // Di chuyển tệp vào thư mục lưu trữ cố định
                        $image->move(public_path('images/san-pham'), $fileName);

                        // Lưu đường dẫn vào CSDL
                        $ptpSanPham->ptpHinhAnh = 'images/san-pham/' . $fileName;
                    } else {
                        return redirect()->back()->with('error', 'Ảnh không hợp lệ hoặc không được chọn.');
                    }
                }

                // Cập nhật các trường khác
                $ptpSanPham->ptpTenSanPham = $request->ptpTenSanPham;
                $ptpSanPham->ptpSoLuong = $request->ptpSoLuong;
                $ptpSanPham->ptpDonGia = $request->ptpDonGia;
                $ptpSanPham->ptpMaLoai = $request->ptpMaLoai;
                $ptpSanPham->ptpTrangThai = $request->ptpTrangThai;

                $ptpSanPham->save();

                return redirect()
                    ->route('ptpadmins.ptpsanpham.ptplist')
                    ->with('message', 'Sửa sản phẩm thành công!');
            }

            return redirect()
                ->route('ptpadmins.ptpsanpham.ptplist')
                ->with('error', 'Không tìm thấy sản phẩm!');

        } catch (\Exception $e) {
            Log::error('Upload error: ' . $e->getMessage());
            return redirect()
                ->back()
                ->with('error', 'Có lỗi xảy ra: ' . $e->getMessage());
        }
    }

    public function ptpDetail($id)
    {
        // Truy vấn dữ liệu từ bảng ptpsanpham theo mã loại sản phẩm
        $ptpSanPham = PTP_SAN_PHAM::where('id', $id)->first();

        // Nếu không tìm thấy loại sản phẩm
        if (!$ptpSanPham) {
            return redirect()->route('ptpadmins.ptpsanpham.ptplist');
        }

        // Trả về view với dữ liệu loại sản phẩm
        return view('ptpadmins.ptpsanpham.ptp-detail', compact('ptpSanPham'));
    }
    public function ptpdeletesp($id){
        $ptpSanPham = PTP_SAN_PHAM::findOrFail($id);
        $ptpSanPham->delete();

        return redirect()->route('ptpadmins.ptpsanpham.ptplist')->with('message', 'Loại sản phẩm đã được xoá thành công!');
    }
}
