<?php

namespace App\Http\Controllers;

use App\Http\Requests\DocumentStoreRequest;
use Illuminate\Support\Facades\Auth;

class DocumentController extends Controller
{
    public function index()
    {
        return Auth::user()->documents;
    }
    public function store(DocumentStoreRequest $request)
    {
        $path = $request->document->store('/','public');

        return Auth::user()->documents()->create([
            'document_type_id' => $request->document_type,
            'path' => $path
        ]);
    }
}
