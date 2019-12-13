<?php

namespace App\Http\Controllers;
use App\SISAccount;
use App\Evants;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SISAccountController extends Controller
{
    public function index(){    
        $SISAccouts=SISAccount::all();
        return view('admin.SISAccount.manageSISAccount',compact('SISAccouts'));
    }

    public function confirm($id){

        $accdetails = SISAccount::find($id);
    
        $accdetails -> update(['IsActive' => 1]);

        session()->flash('msg','Order has been confirmed');
        return redirect('/admin/manageSISAccount');

    }
    public function Pending($id){

        $accdetails = SISAccount::find($id);

        $accdetails -> update(['IsActive' => 0]);

        session()->flash('msg','Order has been pending');
        return redirect('/admin/manageSISAccount');

    }
   public function show($id){
    $accdetails = SISAccount::find($id);
    $evants = Evants::all()->where('SISid', '==', $id);
    return view('admin.SISAccount.SISAccountDetails',compact('accdetails','evants'));

   }
   function action(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = DB::table('s_i_s_accounts')                     
         ->where('SchoolName', 'like', '%'.$query.'%')
         ->orWhere('Email', 'like', '%'.$query.'%')
         ->orWhere('EducationZone', 'like', '%'.$query.'%')
        
         ->orderBy('id', 'desc')
         ->get();
         
      }
      else
      {
       $data = SISAccount::table('s_i_s_accounts')
         ->orderBy('id', 'desc')
         ->get();
      }
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
        $output .= '
        <tr>
        <td>'.$row->id.'</td>
         <td>'. link_to_route('SIS.show',$row->SchoolName, $row->id) .'</td>
         <td>'.$row->Email.'</td>
         <td>'.$row->EducationZone.'</td>
         <td>'.$row->District.'</td>
         
         <td>'.link_to_route('SIS.show','Details', $row->id, ['class'=>'btn btn-success btn-sm']).'
                    
 
        
        </tr>
        ';
       }
      }
      else
      {
       $output = '
       <tr>
        <td align="center" colspan="5">No Data Found</td>
       </tr>
       ';
      }
      $data = array(
       'table_data'  => $output,
       'total_data'  => $total_row
      );

      echo json_encode($data);
     }
    }
  
}
