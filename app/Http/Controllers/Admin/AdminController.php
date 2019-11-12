<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Excel;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Via;

class AdminController extends Controller implements FromCollection,WithHeadings
{
    use Exportable;
    //
    public function showDashboard()
    {
        $data =Via::paginate(100);
        return view('admin',compact('data'));
    }

    public function getVia()
    {
        $data = Via::all();
        foreach ($data as $row) {
              echo $row->taikhoan.'|'.$row->matkhau.'<br/>';
        }


        return 1;

    }

    public  function deleteVia()
    {
        DB::table('via')->delete();
        return redirect()->back() ->with('alert', 'Xóa thành công!');
    }

    /**
     * @return Collection
     */
    public function collection()
    {
        $data = Via::all();
        foreach ($data as $row) {
            $order[] = array(
                '0' => $row->taikhoan,
                '1' => $row->matkhau,
            );
        }
        return (collect($order));
    }
    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            'Tài Khoản',
            'Mật Khẩu',
        ];
    }
}
