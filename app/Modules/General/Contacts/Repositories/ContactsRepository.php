<?php
namespace App\Modules\General\Contacts\Repositories;
use App\Modules\General\Contacts\Models\Contacts;
use App\Modules\General\Contacts\Repositories\ContactsSearchRepository;
use Validator;
use Illuminate\Http\Request;

class ContactsRepository
{
    private $contactsSearchRepository;
    function __construct(ContactsSearchRepository $contactsSearchRepository){
        $this->contactsSearchRepository = $contactsSearchRepository;
    }

    public function index(Request $request){
        return $this->contactsSearchRepository->search(Contacts::with([]), $request);
    }

    public function show($id){
    	return Contacts::where(["id"=>$id])->first();
    }

    public function store($request){
        $validator = Validator::make($request->all(), [
            "name"=>"nullable",
            "email"=>"nullable",
            "cpf"=>"nullable",
            "phone"=>"nullable",
        ]);
        if($validator->fails()){
            throw new \Exception("invalid_fields",400);
        } else {
            $data = [
            "name"=>$request->name,
            "email"=>$request->email,
            "cpf"=>$request->cpf,
            "phone"=>$request->phone,
            ];
            return Contacts::create($data);
        }
    }

    public function update($request, $id){
        $validator = Validator::make($request->all(), [
            "name"=>"nullable",
            "email"=>"nullable",
            "cpf"=>"nullable",
            "phone"=>"nullable",
        ]);
        if($validator->fails()){
            throw new \Exception("invalid_fields",400);
        } else {
            $data = [
            "name"=>$request->name,
            "email"=>$request->email,
            "cpf"=>$request->cpf,
            "phone"=>$request->phone,
            ];
            return Contacts::where(["id"=>$id])->update($data);
        }
    }

    public function destroy($id){
    	return Contacts::where(["id"=>$id])->delete();
    }

}