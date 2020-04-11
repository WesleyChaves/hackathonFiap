<?php
namespace App\Modules\General\Contacts\Repositories;
use App\Modules\General\Contacts\Models\Contacts;

use Illuminate\Http\Request;

class ContactsSearchRepository
{
    public function search($queryBuilder, $request){

    if ($request->id) {
        $queryBuilder->where("id","=",$request->id);
    }

    if ($request->name) {
        $queryBuilder->where("name","=",$request->name);
    }

    if ($request->email) {
        $queryBuilder->where("email","=",$request->email);
    }

    if ($request->cpf) {
        $queryBuilder->where("cpf","=",$request->cpf);
    }

    if ($request->phone) {
        $queryBuilder->where("phone","=",$request->phone);
    }

        return $queryBuilder->paginate(($request->count) ? $request->count : 20);
    }
}