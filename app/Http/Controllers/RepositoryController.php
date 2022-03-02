<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Repository;
use App\Http\Requests\RepositoryPostRequest;

class RepositoryController extends Controller
{
    public function store(RepositoryPostRequest $request){

        $validated = $request->validated();

        $request->user()->repositories()->create($request->all());
        return redirect()->route('repositories.index');
    }

    public function update(Request $request, Repository $repository){

        $request->validate([
            'url' => 'required',
            'description' => 'required'
        ]);

        $repository->update($request->all());
        return redirect()->route('repositories.edit',$repository);
    }

    public function destroy(Request $request, Repository $repository){

        $repository->delete($repository->id);
        return redirect()->route('repositories.index');
    }
}
