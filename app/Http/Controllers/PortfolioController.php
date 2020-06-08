<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class PortfolioController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth', ['only'=>['createindex','createstore']]);
    // }

    public function __construct()
    {
        $this->middleware('rol', ['only'=>['contactindex']]);
    }
    
    public function index(){ 
        return view('home');
    }

    public function aboutindex(){ 
        return view('about');
    }

    public function contactindex(){ 
        return view('contact');
    }

    public function portfolioindex(){
        $project = Project::orderBy('project_creationDate','desc')->get();

        return view('portfolio', compact('project')); 
    }

    public function projectshow(Project $project_url){
        $projectShow = $project_url;

        return view('project', compact('projectShow')); 
    }

    public function createindex(){
        return view('create');
    }

    public function createstore(request $request)
    {
        $this->validate($request,
        ['name'=>'required',
        'description'=>'required',
        'url'=>'required',
        ]);

        $project_name = $request['name'];
        $project_description = $request['description'];
        $project_url = $request['url'];

        $projectSave = new Project;
        $projectSave->project_name = $project_name;
        $projectSave->project_description = $project_description;
        $projectSave->project_url = $project_url;
        $projectSave->project_creationDate = date('Y-m-d H:i:s');
        $projectSave->Save();

        return redirect()->route('portfolio.index'); 
    }

    public function editindex(Project $project_url)
    {
        $projectedit = $project_url;
        return view('edit', compact('projectedit'));
    }

    public function editstore(request $request, $project_url)
    {
        $projectedit = Project::where(['project_url'=>$project_url])->first() ;

        $projectedit->project_name = $request['name'];
        $projectedit->project_description = $request['description'];
        $projectedit->project_url = $request['url'];
        $projectedit->project_lastModification = date('Y-m-d H:i:s');

        $projectedit->save();

        return redirect()->route('portfolio.index');
    }

    public function delete($project_url)
    {
        $projectdelete = Project::where(['project_url'=>$project_url])->first() ;

        $projectdelete->delete();

        return redirect()->route('portfolio.index');
    }
}
