<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SearchProjectsController extends Controller
{
    public function index() {
        return view('userProjects');
    }

    public function action(Request $request) {
        if($request->ajax()){
            $query=$request->get('query');
            if($query!=''){
                $data = DB::query('SELECT id, name, description, start_date, ts_rank_cd(textsearch, query) AS rank
                FROM Project, to_tsquery($search) AS query, to_tsvector(name || ‘ ‘ || description) AS textsearch
                WHERE query @@ textsearch\\ ORDER BY rank DESC;');
            }
            $total_row=$data->count();

            if ($total_row>0){
                    foreach($data as $row){
                        $output.='
                        <thead>
                            <tr>
                                <th>Project Name</th>
                                <th>Description</th>
                                <th>Start date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>'.$row->name.'</td>
                                <td>'.$row->description.'</td>
                                <td>'.$row->start_date.'</td>
                            </tr>
                        </tbody>';
                    }
            }
            else{
                $output='
                <tr>
                    <td align="center" colspan="5"> No projects found </td>
                </tr>';
            }

            $data=array(
                'table_data'=>$output,
                'total_data'=>$total_row
            );

            echo json_encode($data);

        }
    }
}

