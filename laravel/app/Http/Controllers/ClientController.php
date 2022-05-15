<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Client;


class ClientController extends Controller
{
    //
    public function index() {
		return view('index');
	}

	// handle fetch all eamployees ajax request
	public function fetchAll() {
		$emps = Client::all();
		$output = '';
		if ($emps->count() > 0) {
			$output .= '<table class="table table-striped table-sm text-center align-middle">
            <thead style="color:white; font-weight:bold">
              <tr>
                <th>ID</th>
                <th>Agence</th>
                <th>Nom</th>
                <th>Prenom</th>


                <th>Action</th>
              </tr>
            </thead>
            <tbody>';
			foreach ($emps as $emp) {
				$output .= '<tr>
                <td style="color:white">' . $emp->id . '</td>
                <td>' . $emp->agence . '</td>
                <td>' . $emp->nom . ' ' . $emp->last_name . '</td>
                <td>' . $emp->prenom . '</td>


                <td>
                  <a href="#" id="' . $emp->id . '" class="text-success mx-1 editIcon" data-bs-toggle="modal" data-bs-target="#editEmployeeModal"><i class="bi-pencil-square  color-green h4"></i></a>

                  <a href="#" id="' . $emp->id . '" class="text-danger mx-1 deleteIcon"><i class="bi-trash color-red h4"></i></a>
                </td>
              </tr>';
			}
			$output .= '</tbody></table>';
			echo $output;
		} else {
			echo '<h1 class="text-center text-secondary my-5">No record present in the database!</h1>';
		}
	}

	// handle insert a new employee ajax request
	public function store(Request $request) {
		$file = $request->file('avatar');
		$fileName = time() . '.' . $file->getClientOriginalExtension();
		$file->storeAs('public/images', $fileName);

		$empData = ['agence' => $request->agence, 'nom' => $request->nom, 'prenom' => $request->prenom];
		Client::create($empData);
		return response()->json([
			'status' => 200,
		]);
	}

	// handle edit an employee ajax request
	public function edit(Request $request) {
		$id = $request->id;
		$emp = Client::find($id);
		return response()->json($emp);
	}

	// handle update an employee ajax request
	public function update(Request $request) {
		$fileName = '';
		$emp = Client::find($request->emp_id);


		$empData = ['agence' => $request->agence, 'nom' => $request->nom, 'prenom' => $request->prenom];

		$emp->update($empData);
		return response()->json([
			'status' => 200,
		]);
	}
	// handle delete an employee ajax request
	public function delete(Request $request) {
		$id = $request->id;
		$emp = Client::find($id);
		//if (Storage::delete('public/images/' . $emp->avatar)) {
			Client::destroy($id);
		//}
	}
	}


