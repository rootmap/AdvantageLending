<?php

namespace App\Http\Controllers;

use App\GlossaryContent;
use App\AdminLog;
use Illuminate\Http\Request;

class GlossaryContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $moduleName="Glossary Content";
    private $sdc;
    public function __construct(){ $this->sdc = new CoreCustomController(); }
    
    public function index(){
        $tabCount=GlossaryContent::count();
        if($tabCount==0)
        {
            return redirect(url('glossarycontent/create'));
        }else{

            $tab=GlossaryContent::orderBy('id','DESC')->first();      
        return view('admin.pages.glossarycontent.glossarycontent_edit',['dataRow'=>$tab,'edit'=>true]); 
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){


        
        $tabCount=GlossaryContent::count();
        if($tabCount==0)
        {            
        return view('admin.pages.glossarycontent.glossarycontent_create');
            
        }else{

            $tab=GlossaryContent::orderBy('id','DESC')->first();      
        return view('admin.pages.glossarycontent.glossarycontent_edit',['dataRow'=>$tab,'edit'=>true]); 
        }
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    private function SystemAdminLog($module_name="",$action="",$details=""){
        $tab=new AdminLog();
        $tab->module_name=$module_name;
        $tab->action=$action;
        $tab->details=$details;
        $tab->admin_id=$this->sdc->admin_id();
        $tab->admin_name=$this->sdc->UserName();
        $tab->save();
    }


    public function store(Request $request)
    {
        $this->validate($request,[
                
                'section_title'=>'required',
                'section_detail'=>'required',
                'module_status'=>'required',
        ]);

        $this->SystemAdminLog("Glossary Content","Save New","Create New");

        
        $tab=new GlossaryContent();
        
        $tab->section_title=$request->section_title;
        $tab->section_detail=$request->section_detail;
        $tab->module_status=$request->module_status;
        $tab->save();

        return redirect('glossarycontent')->with('status','Added Successfully !');

    }

    public function ajax(Request $request)
    {
        $this->validate($request,[
                
                'section_title'=>'required',
                'section_detail'=>'required',
                'module_status'=>'required',
        ]);

        $tab=new GlossaryContent();
        
        $tab->section_title=$request->section_title;
        $tab->section_detail=$request->section_detail;
        $tab->module_status=$request->module_status;
        $tab->save();

        echo json_encode(array("status"=>"success","msg"=>"Added Successfully."));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\GlossaryContent  $glossarycontent
     * @return \Illuminate\Http\Response
     */

    private function methodToGetMembersCount($search=""){

        $tab=Customer::select('id','name','address','phone','email','last_invoice_no','created_at')
                     ->where('store_id',$this->sdc->storeID())->orderBy('id','DESC')
                     ->when($search, function ($query) use ($search) {
                        $query->where('id','LIKE','%'.$search.'%');
                            $query->orWhere('section_title','LIKE','%'.$search.'%');
                            $query->orWhere('section_detail','LIKE','%'.$search.'%');
                            $query->orWhere('module_status','LIKE','%'.$search.'%');
                            $query->orWhere('created_at','LIKE','%'.$search.'%');

                        return $query;
                     })
                     ->count();
        return $tab;
    }


    private function methodToGetMembers($start, $length,$search=''){

        $tab=Customer::select('id','name','address','phone','email','last_invoice_no','created_at')
                     ->where('store_id',$this->sdc->storeID())->orderBy('id','DESC')
                     ->when($search, function ($query) use ($search) {
                        $query->where('id','LIKE','%'.$search.'%');
                            $query->orWhere('section_title','LIKE','%'.$search.'%');
                            $query->orWhere('section_detail','LIKE','%'.$search.'%');
                            $query->orWhere('module_status','LIKE','%'.$search.'%');
                            $query->orWhere('created_at','LIKE','%'.$search.'%');

                        return $query;
                     })
                     ->skip($start)->take($length)->get();
        return $tab;
    }

    public function datatable(Request $request){

        $draw = $request->get('draw');
        $start = $request->get('start');
        $length = $request->get('length');
        $search = $request->get('search');

        $search = (isset($search['value']))? $search['value'] : '';

        $total_members = $this->methodToGetMembersCount($search); // get your total no of data;
        $members = $this->methodToGetMembers($start, $length,$search); //supply start and length of the table data

        $data = array(
            'draw' => $draw,
            'recordsTotal' => $total_members,
            'recordsFiltered' => $total_members,
            'data' => $members,
        );

        echo json_encode($data);

    }

    
    public function GlossaryContentQuery($request)
    {
        $GlossaryContent_data=GlossaryContent::orderBy('id','DESC')->get();

        return $GlossaryContent_data;
    }
    
   

    public function ExportExcel(Request $request) 
    {
         $dataDateTimeIns=formatDateTime(date('d-M-Y H:i:s a'));
        $data=array();
        $array_column=array(
                                'ID','Section Title','Section Detail','Module Status','Created Date');
        array_push($data, $array_column);
        $inv=$this->GlossaryContentQuery($request);
        foreach($inv as $voi):
            $inv_arry=array(
                                $voi->id,$voi->section_title,$voi->section_detail,$voi->module_status,formatDate($voi->created_at));
            array_push($data, $inv_arry);
        endforeach;

        $excelArray=array(
            'report_name'=>'Glossary Content Report',
            'report_title'=>'Glossary Content Report',
            'report_description'=>'Report Genarated : '.$dataDateTimeIns,
            'data'=>$data
        );

        $this->sdc->ExcelLayout($excelArray);
        
    }

    public function ExportPDF(Request $request)
    {

        $html="<table class='table table-bordered' style='width:100%;'>
                <thead>
                <tr>
                <th class='text-center' style='font-size:12px;'>ID</th>
                            <th class='text-center' style='font-size:12px;' >Section Title</th>
                        
                            <th class='text-center' style='font-size:12px;' >Section Detail</th>
                        
                            <th class='text-center' style='font-size:12px;' >Module Status</th>
                        
                <th class='text-center' style='font-size:12px;'>Created Date</th>
                </tr>
                </thead>
                <tbody>";

                    $inv=$this->GlossaryContentQuery($request);
                    foreach($inv as $voi):
                        $html .="<tr>
                        <td style='font-size:12px;' class='text-center'>".$voi->id."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->section_title."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->section_detail."</td>
                        <td style='font-size:12px;' class='text-center'>".$voi->module_status."</td>
                        <td style='font-size:12px; text-align:center;' class='text-center'>".formatDate($voi->created_at)."</td>
                        </tr>";

                    endforeach;


                $html .="</tbody>
                
                </table>


                ";

                $this->sdc->PDFLayout('Glossary Content Report',$html);


    }
    public function show(GlossaryContent $glossarycontent)
    {
        
        $tab=GlossaryContent::all();return view('admin.pages.glossarycontent.glossarycontent_list',['dataRow'=>$tab]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\GlossaryContent  $glossarycontent
     * @return \Illuminate\Http\Response
     */
    public function edit(GlossaryContent $glossarycontent,$id=0)
    {
        $tab=GlossaryContent::find($id);      
        return view('admin.pages.glossarycontent.glossarycontent_edit',['dataRow'=>$tab,'edit'=>true]);  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\GlossaryContent  $glossarycontent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GlossaryContent $glossarycontent,$id=0)
    {
        $this->validate($request,[
                
                'section_title'=>'required',
                'section_detail'=>'required',
                'module_status'=>'required',
        ]);

        $this->SystemAdminLog("Glossary Content","Update","Edit / Modify");

        
        $tab=GlossaryContent::find($id);
        
        $tab->section_title=$request->section_title;
        $tab->section_detail=$request->section_detail;
        $tab->module_status=$request->module_status;
        $tab->save();

        return redirect('glossarycontent')->with('status','Updated Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\GlossaryContent  $glossarycontent
     * @return \Illuminate\Http\Response
     */
    public function destroy(GlossaryContent $glossarycontent,$id=0)
    {
        $this->SystemAdminLog("Glossary Content","Destroy","Delete");

        $tab=GlossaryContent::find($id);
        $tab->delete();
        return redirect('glossarycontent')->with('status','Deleted Successfully !');}
}