<?php

class CaseController extends \BaseController {

    public function newRow(){
        return View::make('case.newrow');
    }

	public function addRow(){

		$data = Input::all();
		
        $validator = Validator::make(
			$data,
			array(
				'amount' => 'required|integer',
				'content' => 'required',
				'status' => 'required'
			),
			array(
				'amount.required' => 'Tutar doldurulmalıdır.',
				'amount.integer' => 'Tutar bölümüne rakam girilmelidir.',
				'content.required' => 'Açıklama doldurulmalıdır.',
				'status.required' => 'Durumu belirtilmelidir.'
			)
		);

        if ($validator->fails()){            
            return Redirect::route('newrow')->withInput()->withErrors($validator->messages());
        }
	
		$row = DB::table('vallet')->orderBy('id','desc')->limit(1)->first();
		if($row){
			if($data["status"] == "insert"){
				$data['remaining'] = $row->amount+=$data["amount"];
	        }else{
	        	$data['remaining'] = $row->amount-=$data["amount"];
	        }
		}else{
			$data["remaining"] = $data["amount"];
		}

		$insert = ValletModel::create(array(
			'amount' => $data['amount'],
			'content' => $data['content'],
			'remaining' => $data["remaining"],
			'status' => $data["status"]
        ));
        
        if (!$insert){
            return Redirect::route('newrow')->withInput()->withErrors(array('Tutar eklenirken teknik bir sorun oluştu...'));
        }
		
        return Redirect::route('home');
      
	}

	public function deleteRow($id){
		ValletModel::find($id)->delete();
		return Redirect::route('home');
	}
}